<?php

// src/Sportimimi/userBundle/Controller/TeamController.php

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
use Sportimimi\userBundle\Entity\News;
use Sportimimi\userBundle\Entity\Notification;
use Sportimimi\userBundle\Entity\Place;
// Add Forms
use Sportimimi\userBundle\Form\CreateTeamForm;
use Sportimimi\userBundle\Form\SearchTeam;

class NewsController extends Controller {

    public function addStatusAction() {
        //User logged on
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();

        $em = $this->container->get('doctrine')->getManager();
        $doSports = $_POST['doingSportPost'];
		
        $status = $_POST['status'];
        $news = new News();

        $news->setProfile($user);
        $news->setContent($status);
        $news->setDoingSports($doSports);
        $news->setDateCreated(time());
        if ($_POST['doingSportPost'] == 1) {
        	if (isset($_POST['sportPlay']))
        	{    		
	            $sport = $em->getRepository('SportimimiuserBundle:Category')->findOneById($_POST['sportPlay']);
	            $news->setSport($sport);
            }
            
            //set up where the play is playing 
            //if the plaecc is not in the database..create one 
            if ($_POST['newPlace'] == 1)
            {
            	$place = new Place();
				$place->setAddress($_POST['status']);
				$place->setPlaceName($_POST['status']);
				//$place->setLatitude($latitude);
				//$place->setLongitude($longitude);
				$em->persist($place);
				$em->flush();
   				
            }
            else
            {
            	$address = null;
	            $placePlayed = $em->getRepository('SportimimiuserBundle:Place')->findOneByAddress($_POST['status']);
	            $address = $placePlayed->getAddress();
	            if($placePlayed->getAddress() == null)
	            	$address = $placePlayed->getPlaceName();
	            $news->setContent($address);
	   			$news->setPlace($placePlayed);	
	   			
   			}
            
        }
        /* if ($_POST['file'] != '')
          {
          $info = pathinfo($_FILES['file']['name']);
          $ext = $info['extension']; // get the extension of the file
          $newname = "newname.".$ext;
          $target = 'uploads/status/'.$newname;
          move_uploaded_file( $_FILES['file']['tmp_name'], $target);

          } */

        $em->persist($news);
        $em->flush();
        // render mot news..
         return $this->render('SportimimiuserBundle:News:renderOneNews.html.twig', 
        	array('news' => $news, 'user' => $user)
        );

    }

    public function editNewsAction() {

        //User logged on
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();

        $em = $this->container->get('doctrine')->getManager();
        $news = $em->getRepository('SportimimiuserBundle:News')->findOneById($_POST['id']);

        $news->setContent($_POST['value']);
        $em->persist($news);
        $em->flush();
        return new Response($_POST['value'], 200, array('Content-Type' => 'application/json')); //make sure it has the correct content type
    }

    public function deleteNewsAction($id = null) {
        //User logged on
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();

        $em = $this->container->get('doctrine')->getManager();
        $news = $em->getRepository('SportimimiuserBundle:News')->findOneById($id);
        $em->remove($news);
        $em->flush();
        return new Response('ok', 200, array('Content-Type' => 'application/json')); //make sure it has the correct content type
    }

    public function participateAction() {
        //User logged on
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();

        $em = $this->container->get('doctrine')->getManager();
        $news = $em->getRepository('SportimimiuserBundle:News')->findOneById($_POST['id']);
        $news->addParticipant($user);
        $user->addPlayNews($news);
        $em->persist($news);
        $em->persist($user);
        $em->flush();
        return new Response('ok', 200, array('Content-Type' => 'application/json')); //make sure it has the correct content type
    }
    
    public function noParticipateAction() {
	     //User logged on
        $user = $this->get('security.context')->getToken()->getUser();
        if ($user != 'anon.')// Check user is not anonyme
            $user = $user->getProfile();

	    $em = $this->container->get('doctrine')->getManager();
        $news = $em->getRepository('SportimimiuserBundle:News')->findOneById($_POST['id']);
        $news->removeParticipant($user);
        $em->persist($news);
        $em->persist($user);
        $em->flush();
        return new Response('ok', 200, array('Content-Type' => 'application/json'));
    }
   

}
