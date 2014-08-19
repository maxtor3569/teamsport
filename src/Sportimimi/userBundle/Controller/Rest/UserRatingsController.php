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

class UserRatingsController extends Controller
{
    public function getRatesAction($id)
    {
        $user = $this->findUserOr404($id);

        return View::create()
            ->setData(array(
                'rates' => $user->getProfile()->getUserRates()
            ));
    }

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