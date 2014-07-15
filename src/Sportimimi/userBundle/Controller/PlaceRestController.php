<?php
namespace Sportimimi\userBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sportimimi\userBundle\Entity\Profile;


class PlaceRestController extends Controller
{

    public function getPlaceAction()
    {
        $places = $this->getDoctrine()
            ->getRepository('SportimimiuserBundle:Place')->findAll();

        return $places;
    }
}