<?php
// src/Sportimimi/userBundle/Form/ProfileForm.php

namespace Sportimimi\userBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;

class SearchTeam extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {        
        $builder
			//->add('category','choice', array('choices' => array('empty_value' => 'Sélectionez une option','categorie1'=>'Catégorie1','categorie2'=>'Categorie2')))
            ->add('category', 'entity', array(
					'class' => 'SportimimiuserBundle:Category',
					'property' => 'nameVn',
					'attr' => array(
					'style' => 'width:140px'
					),
					'query_builder' => function(EntityRepository $er) {
						return $er->createQueryBuilder('u')
							->orderBy('u.order', 'ASC');
					},
					'empty_value' => '- Chọn thể thao -',
					'required' => false 
				))
		
           
			
        ;
    }
	public function getName()
		{
			return 'searchTeam';
		}
    
}