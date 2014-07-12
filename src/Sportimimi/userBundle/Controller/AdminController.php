<?php
 
// src/Sportimimi/userBundle/Controller/ArticleController.php
 
namespace Sportimimi\userBundle\Controller;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Httpfoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use \DateTime;
// Import new namespaces
use Sportimimi\userBundle\Entity\Profile;
use Sportimimi\userBundle\Entity\Category;
use Sportimimi\userBundle\Entity\Article;

// Add Forms
use Sportimimi\userBundle\Form\ArticleType;

class AdminController extends Controller
{

		
	public function indexAction()
	{
		//User logged on
		$user = $this->get('security.context')->getToken()->getUser();
		if($user!='anon.' )// Check user is not anonyme
			$user = $user->getProfile();
		
		$em = $this->getDoctrine()->getManager();
			
		$allUsers = $em->getRepository('SportimimiuserBundle:Profile')->findAll();	
		$allPlaces = $em->getRepository('SportimimiuserBundle:Place')->findAll();
		if ($user->getEmail() =='maxtor3569@gmail.com' OR $user->getEmail() =='mymeo132@yahoo.com')
		{
			return $this->container->get('templating')->renderResponse(
				'SportimimiuserBundle:Admin:index.html.twig',
				 array(
						'user' => $user,
						'allusers' =>$allUsers,
						'allplaces' =>$allPlaces
				  ));	
		}
		else 
		{
			echo 'Restricted';	
		
		}
	}
	
	public function deleteUserAction($id = null) {
	//User logged on
		$user = $this->get('security.context')->getToken()->getUser();
		if($user!='anon.' )// Check user is not anonyme
			$user = $user->getProfile();
		
		$em = $this->getDoctrine()->getManager();
			
		if ($user->getEmail() =='maxtor3569@gmail.com')
		{
			$repository = $this->getDoctrine()
				->getRepository('SportimimiuserBundle:User');
			
			$repository2 = $this->getDoctrine()
				->getRepository('SportimimiuserBundle:Profile');
				
			$user_deleted = $repository->findOneById($id);
			
			$notifs = $user_deleted->getProfile()->getNotifications();
			
			foreach ($notifs as $notification)
			{
			
				$em->remove($notification);
				
			}
			$em->flush();
			
			$em->remove($user_deleted->getProfile());
			
			$em->flush();
			
		}
		
		$referer = $this->getRequest()->headers->get('referer');   
		return new RedirectResponse($referer);
	
	}
}
