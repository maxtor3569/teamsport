<?php
namespace Sportimimi\userBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sportimimi\userBundle\Entity\Category;


class CategoryRestController extends Controller
{
<<<<<<< HEAD
 
  public function getCategoryAction(){
	$sports = $this->getDoctrine()
			->getRepository('SportimimiuserBundle:Category')->findAll();
    
    return $sports;
  }
    
=======

    public function getCategoryAction()
    {
        $sports = $this->getDoctrine()
            ->getRepository('SportimimiuserBundle:Category')->findAll();

        return $sports;
    }

>>>>>>> 4d258a9bc7c7106ac131cf19e0efcf793d90c529
}