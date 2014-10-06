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
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class UserProfileController extends Controller
{

    /**
     * @ApiDoc(
     *  resource=true,
     *  description="Get a user's profile.",
     *  requirements={
     *      {"name"="id", "dataType"="integer", "required"=true, "description"="user id", "requirement"="\d+"},
     *  },
     *  statusCodes={
     *    200="Returned when profile was fetched correctly.",
     *    401 = "When OAuth authorization fails",
     *    404 = {
     *      "Returned when the user is not found"
     *      }
     *   }
     * )
     * @param $id
     * @return View
     */
    public function getProfileAction($id)
    {
        $user = $this->findUserOr404($id);
		
		$profile = array('profile' => $user->getProfile());
		$profile['user_id'] = $user->getId();
		
        return View::create()
            ->setData($profile);
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