<?php
namespace Sportimimi\userBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sportimimi\userBundle\Entity\Profile;


class ProfilesRestController extends Controller
{
 
  public function getProfilesAction(){
	$profiles = $this->getDoctrine()
			->getRepository('SportimimiuserBundle:Profile')->findAll();
    
    return $profiles;
  }
  
  public function getProfileAction($slug){
	$profile = $this->getDoctrine()
			->getRepository('SportimimiuserBundle:Profile')->findOneById($slug);
 
    return $profile;
  }
  public function getProfileNotificationsAction($slug){
	$profile = $this->getDoctrine()
			->getRepository('SportimimiuserBundle:Profile')->findOneById($slug);
	
 
    return $profile->getNotifications();
  }
   public function getProfileMessageAction($slug){
	$profile = $this->getDoctrine()
			->getRepository('SportimimiuserBundle:Profile')->findOneById($slug);
	
 
    return $profile->getMessage_recieve();
  }
}