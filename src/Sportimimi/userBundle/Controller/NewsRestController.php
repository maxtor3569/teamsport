<?php
namespace Sportimimi\userBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sportimimi\userBundle\Entity\News;
use Sportimimi\userBundle\Entity\Profile;
use Sportimimi\userBundle\Entity\Place;

class NewsRestController extends Controller
{
 
  public function getNewsAction(){
	$news = $this->getDoctrine()
			->getRepository('SportimimiuserBundle:News')->findAll();
    
    return $news;
  }
  public function postNewsAction(){
  		$em = $this->container->get('doctrine')->getManager();
  		$status = $_POST['status'];
  		$sport_id = $_POST['sport_id'];
  		$latitude = $_POST['latitude'];
  		$longitude = $_POST['longitude'];
        $news = new News();
		$user = $em->getRepository('SportimimiuserBundle:User')->findOneById($_POST['user_id']);
        $news->setProfile($user->getProfile());
        $news->setContent($status);
        $news->setDoingSports(1);
        $sport = $em->getRepository('SportimimiuserBundle:Category')->findOneById($sport_id);
	    $news->setSport($sport);
		$news->setDateCreated(time());
		//place
		$place = $em->getRepository('SportimimiuserBundle:Place')->findOneByAddress($status);
		if ($place == null)
		{
			$place = new Place();
			$place->setAddress($status);
			$place->setPlaceName($status);
			$place->setLatitude($latitude);
			$place->setLongitude($longitude);
			$em->persist($place);
			$em->flush();
		}
		$news->setPlace($place);
		$em->persist($news);
        $em->flush();
		return $news; 

	}
   
}