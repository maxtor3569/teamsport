<?php
 
// src/Sportimimi/userBundle/Controller/EventController.php
 
namespace Sportimimi\userBundle\Controller;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Httpfoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;

// Import new namespaces
use Sportimimi\userBundle\Entity\Profile;
use Sportimimi\userBundle\Entity\Event;
use Sportimimi\userBundle\Entity\Category;
use Sportimimi\userBundle\Entity\Image;
// Add Forms
use Sportimimi\userBundle\Form\EventForm;
use Sportimimi\userBundle\Form\SearchEvents;

class EventController extends Controller
{
	
	public function addEventAction()
	{
		//Get current user
		$user = $this->get('security.context')->getToken()->getUser();
		if($user!='anon.' )// Check user is not anonyme
			$user = $user->getProfile();
		$message='';
		$event = new Event();			
		$form = $this->container->get('form.factory')->create(new EventForm(), $event);
		//Database save
		$request = $this->container->get('request');

		if ($request->getMethod() == 'POST') 
		{
			$form->handleRequest($request);
			
			if ($form->isValid()) 
			{
				
				$em = $this->container->get('doctrine')->getManager();
				$event->addProfile($user);
				$user->addEvent($event);
				foreach( $form["categories"]->getData() as $category)
				{
					
					$category->addEvent($event);
					$event->addCategory($category);
				}
				
				$em->persist($event);
				$em->persist($user);
				$em->flush();
				$message='Event add with success!';
				return $this->redirect($this->generateUrl('DetailEvent', array('id' => $event->getId()), 301));
			}
		}
	
		return $this->container->get('templating')->renderResponse(
			'SportimimiuserBundle:Profile:addEvent.html.twig',
			 array(
				'form' => $form->createView(),
				'message' => $message,
				'user' => $user
			  ));	
	
	}
	
	public function listEventsAction(Request $request)
	{
		//Get current user
		$user = $this->get('security.context')->getToken()->getUser();
		if($user!='anon.' )// Check user is not anonyme
			$user = $user->getProfile();
		$em = $this->container->get('doctrine')->getManager();
		$events = $em->getRepository('SportimimiuserBundle:Event')->findAll();
		if (isset($_GET['sport']))
                {                  
                    $query = $em->createQuery('SELECT u FROM SportimimiuserBundle:Event u WHERE u IN (SELECT p.id FROM SportimimiuserBundle:Category p WHERE p.id = u.id AND p.id ='.$_GET['sport'].')');
                   
                    $events = $query->getResult();
                }
		
		$category = $em->getRepository('SportimimiuserBundle:Category')->findAll();
		return $this->container->get('templating')->renderResponse(
			'SportimimiuserBundle:Events:listEvents.html.twig',
			 array(
				'user' => $user,
				'events' => $events,
				'categories' => $category,
			  ));	
	
	
	}
	public function addProfileEventAction()
	{
		//Get current user
		$user = $this->get('security.context')->getToken()->getUser();
		if($user!='anon.' )// Check user is not anonyme
			$user = $user->getProfile();
			
		$em = $this->container->get('doctrine')->getManager();
		$event = $em->getRepository('SportimimiuserBundle:Event')->findOneById($_POST['idEvent']);
		$event->addProfile($user);
		$user->addEvent($event);
		$em->persist($event);
		$em->persist($user);	
		$em->flush();
		return new Response('ok',200,array('Content-Type'=>'application/json'));//make sure it has the correct content type
	}
	
	public function deleteProfileEventAction()
	{
		//Get current user
		$user = $this->get('security.context')->getToken()->getUser();
		if($user!='anon.' )// Check user is not anonyme
			$user = $user->getProfile();
			
		$em = $this->container->get('doctrine')->getManager();
		$event = $em->getRepository('SportimimiuserBundle:Event')->findOneById($_POST['idEvent']);
		$event->removeProfile($user);
		$user->removeEvent($event);
		$em->persist($event);
		$em->persist($user);	
		$em->flush();
		return new Response('ok',200,array('Content-Type'=>'application/json'));//make sure it has the correct content type
	}
	
	public function detailEventAction($id = null)
	{
		//Get current user
		$user = $this->get('security.context')->getToken()->getUser();
		if($user!='anon.' )// Check user is not anonyme
			$user = $user->getProfile();
			
		$em = $this->container->get('doctrine')->getManager();
		$event = $em->getRepository('SportimimiuserBundle:Event')->findOneById($id);	
		return $this->container->get('templating')->renderResponse(
			'SportimimiuserBundle:Events:detailEvent.html.twig',
			 array(
				'user' => $user,
				'event' => $event
			  ));	
	
	
	}
	
	
	public function uploadImageAction()
	{
		$request = $this->container->get('request');
		$em = $this->container->get('doctrine')->getManager();
		$event = $em->getRepository('SportimimiuserBundle:Event')->findOneById($_POST['event_id']);
		$image = new Image();
		//User logged on
		$user = $this->get('security.context')->getToken()->getUser();
		if($user!='anon.' )// Check user is not anonyme
			$user = $user->getProfile();
	
			
		if ($request->getMethod() == 'POST') 
		{

		 
		  $em = $this->getDoctrine()->getManager();
		  $image->setEvent($event);
		  $image->setType('image');
		  $image->setFile($this->getRequest()->files->get('file'));
		  $em->persist($image);
		  $em->flush();
		  $message='Sauvegarde de votre image!';
		  
			
		
		}
		return new Response('ok',200,array('Content-Type'=>'application/json'));//make sure it has the correct content type
			
	}
}