<?php

namespace Sportimimi\userBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class PaymentController__JMSInjector
{
    public static function inject($container) {
        require_once '/var/www/app/cache/prod/jms_diextra/lookup_method_classes/Sportimimi-userBundle-Controller-PaymentController.php';
        $instance = new \EnhancedProxy_f25fe7cde9ee9dd6399d8db7faab56fde26f2db7\__CG__\Sportimimi\userBundle\Controller\PaymentController();
        $instance->__jmsDiExtra_setContainer($container);
        $refProperty = new \ReflectionProperty('Sportimimi\\userBundle\\Controller\\PaymentController', 'request');
        $refProperty->setAccessible(true);
        $refProperty->setValue($instance, $container->get('request', 1));
        $refProperty = new \ReflectionProperty('Sportimimi\\userBundle\\Controller\\PaymentController', 'router');
        $refProperty->setAccessible(true);
        $refProperty->setValue($instance, $container->get('router', 1));
        $refProperty = new \ReflectionProperty('Sportimimi\\userBundle\\Controller\\PaymentController', 'em');
        $refProperty->setAccessible(true);
        $refProperty->setValue($instance, $container->get('doctrine.orm.entity_manager', 1));
        $refProperty = new \ReflectionProperty('Sportimimi\\userBundle\\Controller\\PaymentController', 'ppc');
        $refProperty->setAccessible(true);
        $refProperty->setValue($instance, $container->get('payment.plugin_controller', 1));
        return $instance;
    }
}
