<?php

namespace Sportimimi\userBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        //...............
        //Add all your properties here with $builder->add('property name')
    }

    public function getName()
    {
        return 'sportimimi_user_registration';
    }

}