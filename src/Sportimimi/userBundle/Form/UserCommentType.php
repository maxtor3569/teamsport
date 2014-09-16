<?php

namespace Sportimimi\userBundle\Form;

use Sportimimi\userBundle\Entity\UserComment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserCommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('content')
            ->add('rate', new UserRatingType(), array(
                'required' => false
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sportimimi\userBundle\Entity\UserComment',
            'csrf_protection' => false
        ));
    }

    public function getName()
    {
        return 'users_comment';
    }
}
