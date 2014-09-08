<?php
namespace Sportimimi\userBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sportimimi\userBundle\Entity\Profile;
use Sportimimi\userBundle\Entity\User;
use Sportimimi\userBundle\Entity\Country;
use Sportimimi\userBundle\Entity\Notification;

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

	public function getProfileNewsAction($slug){
		$profile = $this->getDoctrine()
		->getRepository('SportimimiuserBundle:Profile')->findOneById($slug);


		return $profile->getNews();
	}

	public function getProfileFriendsAction($slug){
		$profile = $this->getDoctrine()
		->getRepository('SportimimiuserBundle:Profile')->findOneById($slug);
		
		foreach($profile->getFriends() as $friend)
		{
			$friendsIds = $friend->getId();
		}
		
		return $friendsIds;
	}

	public function postRegisterAction()
	{
		$message = '';
		echo "test";die;
		$profile = new Profile();
		$user = new User();

		$email = $_POST["email"];
		$pass = $_POST["password"];
		$user->setEmail($email);
		$user->setUsername($email);
		$user->setPlainPassword($pass);
		$user->setEnabled(true);

		$user->setProfile($profile);
		$profile->setUser($user);
		$em = $this->container->get('doctrine')->getManager();
		//Notificate him
		$notification = new Notification();

		$notification->setMessage('Welcome to TeamSport!');

		$profile->addNotifications($notification);
		$notification->setProfile($profile);
		$em->persist($notification);
		$em->persist($profile);
		$em->persist($user);
		$em->flush();


		return new Response('ok', 200, array('Content-Type' => 'application/json'));


	}
}