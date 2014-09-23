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

class UserProfileController extends Controller
{

    public function getProfileAction($id)
    {
        $user = $this->findUserOr404($id);

        return View::create()
            ->setData(array(
                'profile' => $user->getProfile()
            ));
    }

  
   
    private function findUserOr404($id)
    {
        $user = $this->getDoctrine()->getRepository('SportimimiuserBundle:User')->find($id);

        if (!$user) {
            throw new NotFoundHttpException(sprintf('User with id "%s" not found.', $id));
        }

        return $user;
    }

} 