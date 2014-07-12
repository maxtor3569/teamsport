<?php
namespace Sportimimi\userBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sportimimi\userBundle\Entity\News;
use Sportimimi\userBundle\Entity\Profile;


class NotificationsRestController extends Controller
{
 
  public function getNotificationsAction(){
	$notifs = $this->getDoctrine()
			->getRepository('SportimimiuserBundle:Notification')->findAll();
    
    return $notifs;
  }
   
}