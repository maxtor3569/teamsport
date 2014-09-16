<?php

namespace Sportimimi\userBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProfileRegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text',array('attr' => array('placeholder' => 'Nhập họ của bạn')))
            ->add('prenom','text',array('attr' => array('placeholder' => 'Nhập tên của bạn')))
            ->add('phone','text',array('attr' => array('placeholder' => 'Nhập điện thoại của bạn')))
        ;

    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sportimimi\userBundle\Entity\Profile'
        ));
    }

    public function getName()
    {
        return 'sportimimi_user_profile_registration';
    }
} 