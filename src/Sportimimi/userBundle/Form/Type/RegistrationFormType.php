<?php

namespace Sportimimi\userBundle\Form\Type;

use Sportimimi\userBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegistrationFormType extends AbstractType
{
    private $csrf_enabled;

    public function __construct($csrf = true)
    {
        $this->csrf_enabled = $csrf;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle'))
            ->add('email', 'email', array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle','attr' => array('placeholder' => 'Nhập email của bạn')))
            ->add('plainPassword', 'password',array('attr' => array('placeholder' => 'Nhập mật khẩu của bạn')))
            ->add('profile', new ProfileRegistrationFormType())
            ->addEventListener(FormEvents::SUBMIT, function(FormEvent $event){
                /** @var User $user */
                $user = $event->getData();
                if ($user->getProfile()) {
                    $user->getProfile()->setEmail($user->getEmail());
                }
            });
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sportimimi\userBundle\Entity\User',
            'csrf_protection' => $this->csrf_enabled
        ));
    }

    public function getName()
    {
        return 'sportimimi_user_registration';
    }

}