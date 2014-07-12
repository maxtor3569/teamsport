<?php
 
// src/Sportimimi/userBundle/Controller/MatchController.php
 
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
class  MatchController extends Controller
{

	public function detailAction($id = null)
	{
		//User logged on
		$user = $this->get('security.context')->getToken()->getUser();
		if($user!='anon.' )// Check user is not anonyme
			$user = $user->getProfile();
			
			
		$repository = $this->getDoctrine()
				->getRepository('SportimimiuserBundle:Match');	
		$match = $repository->findOneById($id);		
		return $this->container->get('templating')->renderResponse(
			'SportimimiuserBundle:Match:detailMatch.html.twig',
			 array(
				'user' => $user,
				'match' => $match
			  ));	
	}
	
	public function setWinnerAction($id = null)
	{
		$em = $this->container->get('doctrine')->getManager();
		//User logged on
		$em = $this->container->get('doctrine')->getManager();
		$user = $this->get('security.context')->getToken()->getUser();
		if($user!='anon.' )// Check user is not anonyme
			$user = $user->getProfile();
			
		$repository = $this->getDoctrine()
				->getRepository('SportimimiuserBundle:Match');	
		$match = $repository->findOneById($id);

		$repository2 = $this->getDoctrine()
				->getRepository('SportimimiuserBundle:Team');	
		$team = $repository2->findOneById($_POST['winner']);
		$match->setWinner($team);
		$em->persist($match);
		$em->flush();
		//$match->setWinner(
		return $this->container->get('templating')->renderResponse(
			'SportimimiuserBundle:Match:detailMatch.html.twig',
			 array(
				'user' => $user,
				'match' => $match
			  ));	
	
	}
	
}