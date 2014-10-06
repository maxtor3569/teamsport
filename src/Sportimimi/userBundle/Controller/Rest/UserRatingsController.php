<?php

namespace Sportimimi\userBundle\Controller\Rest;


use FOS\RestBundle\Util\Codes;
use FOS\RestBundle\View\RouteRedirectView;
use Sportimimi\userBundle\Entity\User;
use Sportimimi\userBundle\Entity\UserRating;
use Sportimimi\userBundle\Form\UserCommentType;
use FOS\RestBundle\Controller\FOSRestController as Controller;
use FOS\RestBundle\View\View;
use Sportimimi\userBundle\Form\UserRatingType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class UserRatingsController extends Controller
{
    /**
     * @ApiDoc(
     *  resource=true,
     *  description="Get all rates for a given user",
     *  requirements={
     *      {"name"="id", "dataType"="integer", "required"=true, "description"="user id", "requirement"="\d+"},
     *  },
     *  statusCodes={
     *    200="Returned when comment was fetched correctly.",
     *    401 = "When OAuth authorization fails",
     *    404= {
     *      "Returned when the user is not found"
     *      }
     *   }
     * )
     * @param $id
     * @return View
     */
    public function getRatesAction($id)
    {
        $user = $this->findUserOr404($id);

        return View::create()
            ->setData(array(
                'rates' => $user->getProfile()->getUserRates()
            ));
    }

    /**
     * @ApiDoc(
     *  resource=true,
     *  description="Post / creates a new Rate for a given user",
     *  requirements={
     *      {"name"="id", "dataType"="integer", "required"=true, "description"="user id", "requirement"="\d+"},
     *  },
     *  statusCodes={
     *    201="Returned when comment was created correctly.",
     *    401 = "When OAuth authorization fails",
     *    404= {
     *      "Returned when the user is not found"
     *      }
     *   }
     * )
     * @param Request $request
     * @param $id
     * @return View
     */
    public function postRatesAction(Request $request, $id)
    {
        $user = $this->findUserOr404($id);
        $rating = new UserRating();
        $form = $this->createForm(new UserRatingType(), $rating);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $rating->setRatedBy($this->getUser()->getProfile());
            $rating->setProfile($user->getProfile());

            $_em = $this->getDoctrine()->getManager();
            $_em->persist($rating);
            $_em->flush();

            return $this->onCreateRatingSuccess($rating, $id);
        }

        return $this->onCreateRatingError($form, $id);
    }


    /**
     * @ApiDoc(
     *  resource=true,
     *  description="Get a simple rate for a giver rate.",
     *  requirements={
     *      {"name"="id", "dataType"="integer", "required"=true, "description"="user id", "requirement"="\d+"},
     *      {"name"="rateId", "dataType"="integer", "required"=true, "description"="user id", "requirement"="\d+"},
     *  },
     *  statusCodes={
     *    200="Returned when comment was fetched correctly.",
     *    401 = "When OAuth authorization fails",
     *    404 = {
     *      "Returned when the user is not found",
     *      "Returned when the rate is not found"
     *      }
     *   }
     * )
     * @param $id
     * @param $rateId
     * @return View
     */
    public function getRateAction($id, $rateId)
    {
        $user = $this->findUserOr404($id);
        $rating = $this->findRatingOr404($user, $rateId);

        return View::create()
            ->setData(array(
                'rate' => $rating
            ))
        ;
    }

    /**
     * @param UserRating $rating
     * @param $id
     * @return View
     */
    protected function onCreateRatingSuccess(UserRating $rating, $id)
    {
        $route = $this->generateUrl(
            $this->getRequest()->getLocale() . '__RG__api_get_user_rate',
            array('id' => $id, 'rateId' => $rating->getId())
        );

        return View::create()
            ->setStatusCode(Codes::HTTP_CREATED)
            ->setLocation($route)
            ;
    }

    /**
     * Returns a HTTP_BAD_REQUEST response when the form submission fails.
     *
     * @param FormInterface    $form   Form with the error
     * @param string           $id     Id of the thread
     *
     * @return View
     */
    protected function onCreateRatingError(FormInterface $form, $id)
    {
        $view = View::create()
            ->setStatusCode(Codes::HTTP_BAD_REQUEST)
            ->setData(array(
                'form' => $form,
                'id' => $id
            ))
        ;

        return $view;
    }

    private function findUserOr404($id)
    {
        $user = $this->getDoctrine()->getRepository('SportimimiuserBundle:User')->find($id);

        if (!$user) {
            throw new NotFoundHttpException(sprintf('User with id "%s" not found.', $id));
        }

        return $user;
    }

    private function findRatingOr404(User $user, $ratingId)
    {
        $rating = $this->getDoctrine()->getRepository('SportimimiuserBundle:UserRating')->findBy(array(
            'id' => $ratingId, 'profile' => $user->getProfile()
        ));

        if (!$rating) {
            throw new NotFoundHttpException(sprintf('Rating with id "%s" not found.', $ratingId));
        }

        return $rating;

    }
} 