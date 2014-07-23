<?php

namespace Sportimimi\AdminBundle\Form;



use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserAdminType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('profile', new ProfileAdminType())
            ->add('enabled', null, array(
                'required' => false
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sportimimi\userBundle\Entity\User'
        ));
    }


    public function getName()
    {
        return 'teamsports_admin_user_form';
    }
} 