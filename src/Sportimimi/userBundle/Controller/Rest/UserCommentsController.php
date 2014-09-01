<?php

namespace Sportimimi\userBundle\Controller\Rest;

use FOS\RestBundle\Util\Codes;
use FOS\RestBundle\View\RouteRedirectView;
use Sportimimi\userBundle\Entity\User;
use Sportimimi\userBundle\Entity\UserComment;
use Sportimimi\userBundle\Form\UserCommentType;
use FOS\RestBundle\Controller\FOSRestController as Controller;
use FOS\RestBundle\View\View;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use FOS\RestBundle\Controller\Annotations\Route;

class UserCommentsController extends Controller
{

    public function getCommentsAction($id)
    {
        $user = $this->findUserOr404($id);

        return View::create()
            ->setData(array(
                'comments' => $user->getProfile()->getUserComments()
            ));
    }

    /**
     * @Route(options={"expose"=true})
     * @param Request $request
     * @param $id
     * @return View
     */
    public function postCommentsAction(Request $request, $id)
    {
        $user = $this->findUserOr404($id);
        $comment = new UserComment();
        $form = $this->createForm(new UserCommentType(), $comment);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $comment->setPostedBy($this->getUser()->getProfile());
            $comment->setProfile($user->getProfile());

            $_em = $this->getDoctrine()->getManager();
            $_em->persist($comment);
            $_em->flush();

            return $this->onCreateCommentSuccess($comment, $id);
        }

        return $this->onCreateCommentError($form, $id);
    }

    public function getCommentAction($id, $commentId)
    {
        $user = $this->findUserOr404($id);
        $comment = $this->findCommentOr404($user, $commentId);

        return View::create()
            ->setData(array(
                'comment' => $comment
            ))
        ;
    }

    /**
     * @param UserComment $comment
     * @param $id
     * @return View
     */
    protected function onCreateCommentSuccess(UserComment $comment, $id)
    {
        $route = $this->generateUrl(
            $this->getRequest()->getLocale() . '__RG__api_get_user_comment',
            array('id' => $id, 'commentId' => $comment->getId())
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
    protected function onCreateCommentError(FormInterface $form, $id)
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

    private function findCommentOr404(User $user, $commentId)
    {
        $comment = $this->getDoctrine()->getRepository('SportimimiuserBundle:UserComment')->findBy(array(
            'id' => $commentId, 'profile' => $user->getProfile()
        ));

        if (!$comment) {
            throw new NotFoundHttpException(sprintf('Comment with id "%s" not found.', $commentId));
        }

        return $comment;

    }
} 