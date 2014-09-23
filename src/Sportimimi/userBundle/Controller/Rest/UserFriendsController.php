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

class UserFriendsController extends Controller
{
    public function getFriendsAction($id)
    {
        $user = $this->findUserOr404($id);
		$friendsIds = Array();
		
		foreach($user->getProfile()->getFriends() as $friend)
		{
			array_push($friendsIds,$friend->getUser()->getId());
		}
		
        return View::create()
            ->setData(array(
                'friends' => $friendsIds
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