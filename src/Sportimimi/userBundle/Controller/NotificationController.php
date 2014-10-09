<?php
 
// src/Sportimimi/userBundle/Controller/NotificationController.php
 
namespace Sportimimi\userBundle\Controller;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Httpfoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// Import new namespaces
use Sportimimi\userBundle\Entity\Profile;
use Sportimimi\userBundle\Entity\Notification;
use Sportimimi\userBundle\Entity\Invitation;
use Sportimimi\userBundle\Entity\Match;
use Sportimimi\userBundle\Entity\Image;
class  NotificationController extends Controller
{

	public function viewedAction($id = null)
	{
		//User logged on
		$user = $this->get('security.context')->getToken()->getUser();
		if($user!='anon.' )// Check user is not anonyme
			$user = $user->getProfile();
		
		$em = $this->getDoctrine()->getManager();
		
		
			foreach($user->getNotifications() as $notification)
			{
				$notification->setViewed();
				$em->persist($notification);
			}
			$em->flush();
			 return new Response('ok',200,array('Content-Type'=>'application/json'));
			
	}
	public function viewAllAction()
	{
		//User logged on
		$user = $this->get('security.context')->getToken()->getUser();
		if($user!='anon.' )// Check user is not anonyme
			$user = $user->getProfile();
		
		$em = $this->getDoctrine()->getManager();
		$notifs =$user->getNotifications();
		 return $this->render('SportimimiuserBundle:Notification:index.html.twig',array(
		 'user' => $user, 
		 'notifications' => $notifs
		 ));
	}
	
	public function pullNotificationsAction()
	{
		//User logged on
		$user = $this->get('security.context')->getToken()->getUser();
		if($user!='anon.' )// Check user is not anonyme
			$user = $user->getProfile();
			
		$em = $this->getDoctrine()->getManager();
		$sql ="SELECT n FROM SportimimiuserBundle:Notification n WHERE n.viewed = 0 AND n.profile = ".$user->getId();	
		$query = $em->createQuery($sql);
        $notifs = $query->getResult();
		//trololololo ttrololololo

        $dql = "SELECT u.id, u.url FROM SportimimiuserBundle:Image u WHERE u.profile = :senderId";

        if (isset($_POST['type'])) {

        	$notifsJSON = array();

        	

        	foreach ($notifs as $key => $value) {

        		$notifsNew = $this->getDoctrine()->getRepository('SportimimiuserBundle:Notification');
        		$notifsNew = $notifsNew->findOneById($value->getId());

        		$notifsNew->setViewed();

        		$em->persist($notifsNew);
        		$em->flush();

        		$senderId = $value->getInvitation()->getProfile_send()->getId();
        		//$senderId = 27;

        		$img    = $em->createQuery($dql)
        				  ->setParameter('senderId',$senderId)
        		   		  ->getResult();

        		$notifsJSON[$key] = $value->getArray();
        		$notifsJSON[$key]['diff'] = $value->getDiff();
        		$notifsJSON[$key]['img'] = end($img)['id'].".".end($img)['url'];
        		$notifsJSON[$key]['senderId'] = $senderId;

        	}
        	$res = json_encode($notifsJSON);
        	return new Response($res,200);
        }

		return $this->render('SportimimiuserBundle:Notification:pullNotification.html.twig',array(
		 'user' => $user, 
		 'notifications' => $notifs
		 ));

		
		
	}
}