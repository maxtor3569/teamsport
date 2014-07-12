<?php
 
namespace Sportimimi\userBundle\Listener;
 
use Symfony\Component\Security\Core\SecurityContext;
use Doctrine\Bundle\DoctrineBundle\Registry as Doctrine;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use DateTime;
use Sportimimi\userBundle\Entity\User;
 
class Activity
{
    protected $context;
    protected $em;
 
    public function __construct(SecurityContext $context, Doctrine $doctrine)
    {
        $this->context = $context;
        $this->em = $doctrine->getEntityManager();
    }
 
    /**
     * On each request we want to update the user's last activity datetime
     *
     * @param \Symfony\Component\HttpKernel\Event\FilterControllerEvent $event
     * @return void
     */
    public function onCoreController(FilterControllerEvent $event)
    {
    	if ($this->context->getToken()!=null)
	    {
	        $user = $this->context->getToken()->getUser();
	        if($user instanceof User)
	        {
	            //here we can update the user as necessary
	            $user->setLastActive(new DateTime());
	 
	            $this->em->persist($user);
	            $this->em->flush($user);
	        }
        }
    }
}