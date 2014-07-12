<?php
 
// src/Sportimimi/userBundle/Controller/DocumentController.php
 
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
use Sportimimi\userBundle\Entity\Image;
use Sportimimi\userBundle\Entity\Category;



class DocumentController extends Controller
{
	public function ajaxUploadAction()
	{
		$request = $this->container->get('request');
		
		$image = new Image();
		//User logged on
		$user = $this->get('security.context')->getToken()->getUser();
		if($user!='anon.' )// Check user is not anonyme
			$user = $user->getProfile();
	
			
		if ($request->getMethod() == 'POST') 
		{

		  // Puis, le reste de la méthode, qu'on avait déjà fait
		  $em = $this->getDoctrine()->getManager();
		  $image->setProfile($user);
		  $image->setType('image');
		  $image->setFile($this->getRequest()->files->get('file'));
		  $em->persist($image);
		  $em->flush();
		  $message='Sauvegarde de votre image!';
		  
			
		
		}
		$referer = $this->getRequest()->headers->get('referer');   
		return new RedirectResponse($referer);
			
	}

		
	
}
