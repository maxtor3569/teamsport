<?php
 
// src/Sportimimi/userBundle/Controller/SkillsController.php
 
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
use Sportimimi\userBundle\Entity\Category;
use Sportimimi\userBundle\Entity\Country;
use Sportimimi\userBundle\Entity\Image;
use Sportimimi\userBundle\Entity\Skills;
// Add Forms
use Sportimimi\userBundle\Form\SkillsForm;

class SkillsController extends Controller
{
	public function upgradeSkillsAction()
	{
		$message='';
		
		//User logged on
		$user = $this->get('security.context')->getToken()->getUser();
		if($user!='anon.' )// Check user is not anonyme
			$user = $user->getProfile();
		
		//Get skills sheet
		
		$skills= $user->getSkills();
		if($skills == null)
		{
			$skills = new Skills();	
			
		}
		$form = $this->container->get('form.factory')->create(new SkillsForm(), $skills);
		//Database save
		$request = $this->container->get('request');

		if ($request->getMethod() == 'POST') 
		{
			$form->handleRequest($request);
			
			if ($form->isValid()) 
			{
				$em = $this->container->get('doctrine')->getManager();
				$user->setSkills($skills);
				$skills->setProfile($user);
				$em->persist($user);
				$em->persist($skills);
				$em->flush();
				return $this->redirect($this->generateUrl('DetailProfile'));
			}
			
			
		}
		return $this->container->get('templating')->renderResponse(
			'SportimimiuserBundle:Profile:updateSkills.html.twig',
			 array(
				'form' => $form->createView(),
				'message' => $message,
				'user' => $user
			  ));	
		
	}

}