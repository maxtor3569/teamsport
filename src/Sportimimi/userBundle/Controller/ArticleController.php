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

class ArticleController extends Controller
{
	public function createArticleAction()
	{
		//User logged on
		$user = $this->get('security.context')->getToken()->getUser();
		if($user!='anon.' )// Check user is not anonyme
			$user = $user->getProfile();

		$request = $this->container->get('request');
		
		$article = new Article();
		$form = $this->container->get('form.factory')->create(new ArticleType(), $article);	
		$request = $this->container->get('request');
		
		if ($request->getMethod() == 'POST') 
		{
			$form->handleRequest($request);
			
			if ($form->isValid()) 
			{
				// Puis, le reste de la méthode, qu'on avait déjà fait
				$em = $this->getDoctrine()->getManager();
				$article->setAuthor($user);
				$today = new DateTime('now');
				$article->setDateCreated($today);
				$em->persist($article);
				$em->flush();
				
				
				  
				return $this->container->get('templating')->renderResponse(
					'SportimimiuserBundle:Profile:detailProfile.html.twig',
					 array(
						'user' => $user,
						'profile' => $user
					  ));	
				
			}
		}
		
		return $this->container->get('templating')->renderResponse(
			'SportimimiuserBundle:Article:createArticle.html.twig',
			 array(
				'form' => $form->createView(),
				'user' => $user
			  ));	
		
	}
	public function viewArticleAction($name = null)
	{
		//User logged on
		$user = $this->get('security.context')->getToken()->getUser();
		if($user!='anon.' )// Check user is not anonyme
			$user = $user->getProfile();
			
		$repository = $this->getDoctrine()
			->getRepository('SportimimiuserBundle:Article');
		$article = $repository->findOneByName($name);	
		
		return $this->container->get('templating')->renderResponse(
			'SportimimiuserBundle:Article:viewArticle.html.twig',
			 array(
				'article' => $article,
				'user' => $user
			  ));	
	
	}
}
