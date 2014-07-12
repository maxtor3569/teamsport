<?php

namespace Sportimimi\userBundle\Controller;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Httpfoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

// Import new namespaces
use Sportimimi\userBundle\Entity\Profile;
use Sportimimi\userBundle\Entity\User;
use Sportimimi\userBundle\Entity\Client;  

class ApiController extends Controller
{

		
	public function indexAction()
	{
	
		$clientManager = $this->get('fos_oauth_server.client_manager.default');
		echo 'test';
		$client = $clientManager->createClient();
		$client->setRedirectUris(array('http://www.teamsport.vn'));
		$client->setAllowedGrantTypes(array('token', 'authorization_code', 'password'));
		$clientManager->updateClient($client);
		/*
		return $this->redirect($this->generateUrl('fos_oauth_server_authorize', array(
			'client_id'     => $client->getPublicId(),
			'redirect_uri'  => 'http://www.teamsport.vn',
			'response_type' => 'code'
			)));*/
	
	}
	
	
}
