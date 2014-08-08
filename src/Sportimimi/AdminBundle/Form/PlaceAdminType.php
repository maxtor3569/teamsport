<?php

namespace Sportimimi\AdminBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PlaceAdminType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('placeName')
            ->add('address')
            ->add('price')
            ->add('website')
            ->add('phoneContact')
            ->add('profile')
            ->add('district')
            ->add('capacity')
            ->add('type')
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sportimimi\userBundle\Entity\Place'
        ));
    }

    public function getName()
    {
        return 'teamsports_admin_place_form';
    }
} 