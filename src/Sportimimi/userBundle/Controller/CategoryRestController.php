<?php
namespace Sportimimi\userBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sportimimi\userBundle\Entity\Category;


class CategoryRestController extends Controller
{

    public function getCategoryAction()
    {
        $sports = $this->getDoctrine()
            ->getRepository('SportimimiuserBundle:Category')->findAll();

        return $sports;
    }

}