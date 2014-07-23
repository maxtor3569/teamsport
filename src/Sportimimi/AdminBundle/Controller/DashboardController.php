<?php

namespace Sportimimi\AdminBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DashboardController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('SportimimiAdminBundle:Dashboard:index.html.twig');
    }
} 