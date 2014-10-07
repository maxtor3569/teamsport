<?php

namespace Sportimimi\userBundle\Listener;

use Doctrine\ORM\EntityManager;
use Sportimimi\userBundle\Entity\Profile;
use Sportimimi\userBundle\Entity\User;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\SecurityContext;

/**
 * Force the user to create a profile before continue using the site
 */
class ProfileIncompleteListener
{
    private $security;
    private $router;
    private $em;

    public function __construct(SecurityContext $security, RouterInterface $router)
    {
        $this->security = $security;
        $this->router = $router;
    }

    public function checkUserProfile(GetResponseEvent $event)
    {
        $route = $event->getRequest()->get('_route');
        /** @var User $user */

        $request = $event->getRequest();
		
        if (!empty($route) and $route != 'create_profile' and $this->security->getToken()) {
            $user = $this->security->getToken()->getUser();
            if($user instanceof User and (!$user->getProfile() or !$user->getProfile()->getCompletion()) ) {
                // we redirect to the set profile page
                $event->setResponse(new RedirectResponse($this->router->generate('create_profile')));
            }
        }
    }
} 