<?php
 
// src/Sportimimi/userBundle/Controller/FriendController.php
 
namespace Sportimimi\userBundle\Controller;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Httpfoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MapController extends Controller
{

	public function currentAction() {
	 
	 //Pass user to the page
    $user = $this->get('security.context')->getToken()->getUser();
    if ($user != 'anon.')// Check user is not anonyme
    	$user = $user->getProfile();
	
		
		
	return $this->render('SportimimiuserBundle:Map:index.html.twig', array(
	                    'user' => $user,
	 ));

	}
	public function currentPlayAction() {
	 
	 //Pass user to the page
    $user = $this->get('security.context')->getToken()->getUser();
    if ($user != 'anon.')// Check user is not anonyme
    	$user = $user->getProfile();
	
		
		
	return $this->render('SportimimiuserBundle:Map:currentlyPlay.html.twig', array(
	                    'user' => $user,
	 ));

	}
	//JSON Return
	public function allPlayersPlayingAction()
    {
	    //User logged on
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();

		$em = $this->container->get('doctrine')->getManager();
		   //For markers
        $query2 = $em->createQuery(
                'SELECT p FROM SportimimiuserBundle:News p WHERE p.doingSports = 1 ORDER by p.dateCreated DESC');

        $markers = $query2->getResult();
        $serializedEntity = $this->container->get('serializer')->serialize($markers, 'json');
        return new Response($serializedEntity);
	    
    }
    //JSON Return
    public function allFieldsAction()
    {
	    //User logged on
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();

		$em = $this->container->get('doctrine')->getManager();
		   //For markers
        $query2 = $em->createQuery(
                'SELECT p FROM SportimimiuserBundle:Place p');

        $markers = $query2->getResult();
        $serializedEntity = $this->container->get('serializer')->serialize($markers, 'json');
        return new Response($serializedEntity);
	    
    }
}