<?php

namespace EnhancedProxy_f25fe7cde9ee9dd6399d8db7faab56fde26f2db7\__CG__\Sportimimi\userBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class PaymentController extends \Sportimimi\userBundle\Controller\PaymentController implements \JMS\DiExtraBundle\DependencyInjection\LookupMethodClassInterface
{
    private $__jmsDiExtra_container;

    public function __jmsDiExtra_setContainer(\Symfony\Component\DependencyInjection\ContainerInterface $container)
    {
        $this->__jmsDiExtra_container = $container;
    }

    public function __jmsDiExtra_getOriginalClassName()
    {
        return 'Sportimimi\\userBundle\\Controller\\PaymentController';
    }

    protected function getFormFactory()
    {
        return $this->__jmsDiExtra_container->get('form.factory', 1);
    }
}