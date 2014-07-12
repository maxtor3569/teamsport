<?php

namespace Sportimimi\userBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class IdentityPictureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           ->add('file', 'file',array('label'=>'Video'))
	
        ;
    }
    public function getName()
    {
        return 'Sportimimi_userBundle_identitypicturetype';
    }
}