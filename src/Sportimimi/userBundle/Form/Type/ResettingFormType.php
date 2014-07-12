<?php

namespace Sportimimi\userBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\ResettingFormType as BaseType;

class ResettingFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
         $builder->add('new', 'repeated', array(
            'type' => 'password',
            'options' => array('translation_domain' => 'FOSUserBundle'),
            'first_options' => array('label' => 'Nhập mật khẩu mới của bạn', 'attr' => array('class' => 'form-control bg-gray')),
            'second_options' => array('label' => 'Nhập lại mật khẩu mới của bạn', 'attr' => array('class' => 'form-control bg-gray')),
            'invalid_message' => 'fos_user.password.mismatch',
        ));
        
    }

    public function getName()
    {
        return 'sportimimi_user_resetting';
    }
}