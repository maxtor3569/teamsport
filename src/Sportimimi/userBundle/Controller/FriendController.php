<?php
 
// src/Sportimimi/userBundle/Controller/FriendController.php
 
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
class FriendController extends Controller
{

	public function addFriendAction() {
		$user = $this->get('security.context')->getToken()->getUser();
		if($user!='anon.' )// Check user is not anonyme
			$user = $user->getProfile();
		$em = $this->getDoctrine()->getManager();
		$request = $this->container->get('request');

		if($request->isXmlHttpRequest())
		{
			
			$idProfile = $_POST['idProfile'];
			$repository2 = $this->getDoctrine()
				->getRepository('SportimimiuserBundle:Profile');
			$ProfileAdd = $repository2->findOneById($idProfile);	
			
			// Set invitation
			$invitation  = new Invitation();	
			$invitation->setProfileReceive($ProfileAdd);
			$invitation->setProfileSend($user);
			$em->persist($invitation);
			$em->flush();
			$idInvit = $invitation->getId();
			//Notificate him
			$notification = new Notification();	
			
			$notification->setMessage($user->getNom().' '.$user->getPrenom()
			.' send you a friend invitation<br /> <span onclick="acceptFriend('.$idInvit.')" style="cursor:pointer;color:#00a751">Accept</span>- <a href=" ">Ignore</a>');
			
			$notification->setProfile($ProfileAdd);
			$notification->setInvitation($invitation);
			$ProfileAdd->addNotifications($notification);
			
			
			$em->persist($ProfileAdd);
			$em->persist($notification);

		}
		
		$em->flush();
		$return=$idProfile;
		return new Response($return,200,array('Content-Type'=>'application/json'));//make sure it has the correct content type
	}
		
	public function acceptInvitationAction($id = null) {
		$id = $_POST['id'];
		$em = $this->getDoctrine()->getManager();
		$user = $this->get('security.context')->getToken()->getUser();
		if($user!='anon.' )// Check user is not anonyme
			$user = $user->getProfile();

		$repository2 = $this->getDoctrine()
			->getRepository('SportimimiuserBundle:Invitation');
		$invitation = $repository2->findOneById($id);
		$profile = $invitation->getProfile_send();
		
		
		//secure invitations..
		if ($user->getId() != $invitation->getProfile_receive()->getId())
			return null;
		
		$invitation->setStatus('1');
		$user->addFriend($profile);
		$profile->addFriend($user);
		
		//Notificate user of acceptation
		$notification = new Notification();	
		$notification->setMessage($user->getNom().' '.$user->getPrenom().' đã chấp nhận lời mời kết bạn');
		$notification->setProfile($profile);
		$profile->addNotifications($notification);
		
		
		// delete notification of sending..
		$repository3 = $this->getDoctrine()
			->getRepository('SportimimiuserBundle:Notification');
		$notif = $repository3->findOneByInvitation($id);
		$em->remove($notif);
		
		$em->persist($profile);
		$em->persist($user);
		$em->persist($notification);
	
		$em->flush();
		return new Response('test',200,array('Content-Type'=>'application/json'));//make sure it has the correct content type
	}
	
	public function removeFriendAction()
	{
		$request = $this->container->get('request');
		$em = $this->getDoctrine()->getManager();
		$user = $this->get('security.context')->getToken()->getUser();
		if($user!='anon.' )// Check user is not anonyme
			$user = $user->getProfile();
			
		if($request->isXmlHttpRequest())
		{
			$idProfile = $_POST['idProfile'];
			$repository2 = $this->getDoctrine()
				->getRepository('SportimimiuserBundle:Profile');
			$ProfileAdd = $repository2->findOneById($idProfile);
			
			$user->removeFriend($ProfileAdd);
			$ProfileAdd->removeFriend($user);
			$em->persist($user);
			$em->persist($ProfileAdd);
			$em->flush();
		}
		return new Response('ok',200,array('Content-Type'=>'application/json'));//make sure it has the correct content type

	}
	
	
}