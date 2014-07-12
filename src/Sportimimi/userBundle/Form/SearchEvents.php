<?php
// src/Sportimimi/userBundle/Form/SearchEvents.php

namespace Sportimimi\userBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;

class SearchEvents extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {        
        $builder
           ->add('categories', 'entity', array(
					'class' => 'SportimimiuserBundle:Category',
					'property' => 'nameVn',
					'attr' => array(
					'style' => 'width:185px',
					'data-placeholder'=> 'Chọn thể thao',
					'multiple' => true,
					),
					'query_builder' => function(EntityRepository $er) {
						return $er->createQueryBuilder('u')
							->orderBy('u.nameVn', 'ASC');
					},
					'empty_value' => '- Chọn thể thao -',
					'required' => false 
				))
		/*->add('country', 'entity', array(
					'class' => 'SportimimiuserBundle:Country',
					'property' => 'name',
					'query_builder' => function(EntityRepository $er) {
						return $er->createQueryBuilder('u')
							->orderBy('u.name', 'ASC');
					},
					'attr' => array(
					'style' => 'width:185px'
					),
					'empty_value' => 'Chọn Quốc',
					'required' => false 
				))*/
			
			
        ;
    }
	public function getName()
		{
			return 'searchEvents';
		}
    
}