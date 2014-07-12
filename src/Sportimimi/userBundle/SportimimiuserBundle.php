<?php

namespace Sportimimi\userBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Sportimimi\userBundle\DependencyInjection\Security\Factory\WsseFactory;
class SportimimiuserBundle extends Bundle
{
	//On hérite du Fos user Bundle
	public function getParent()
	{
		return 'FOSUserBundle';
	}
	public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $extension = $container->getExtension('security');
        $extension->addSecurityListenerFactory(new WsseFactory());
    }
}
