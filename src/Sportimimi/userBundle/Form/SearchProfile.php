<?php
// src/Sportimimi/userBundle/Form/ProfileForm.php

namespace Sportimimi\userBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;

class SearchProfile extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {        
        $builder
			//->add('category','choice', array('choices' => array('empty_value' => 'Sélectionez une option','categorie1'=>'Catégorie1','categorie2'=>'Categorie2')))
         /* ->add('sports', 'entity', array(
					'class' => 'SportimimiuserBundle:Category',
					'property' => 'nameVn',
					'multiple' => true,
					'attr' => array(
						'style' => 'width:140px',
						'class' => 'chosen',
						'data-placeholder' => 'Chọn Thể Thao',
					),
					'query_builder' => function(EntityRepository $er) {
						return $er->createQueryBuilder('u')
							->orderBy('u.order', 'ASC');
					},
					
					'required' => false 
				))*/
			/*->add('search', 'search', array(
				'required' => false
			))*/
            ->add('dateNaissance', 'birthday', array( 
			'years' => range(1960, date('Y')),
			'empty_value' => 'Sélectionnez un sexe',
			'attr' => array(
					'style' => 'width:140px'
				),
			'required' => false
			))
            ->add('sexe', 'choice', array(
				'choices' => array('F'=>'Nữ','M'=>'Nam'),
				'empty_value' => 'Chọn Giới Tính',
				'attr' => array(
					'style' => 'width:140px'
				),
				'required' => false)
			)
			->add('country', 'entity', array(
					'class' => 'SportimimiuserBundle:Country',
					'property' => 'name',
					'query_builder' => function(EntityRepository $er) {
						return $er->createQueryBuilder('u')
							->orderBy('u.name', 'ASC');
					},
					'attr' => array(
					'style' => 'width:140px'
					),
					'empty_value' => 'Chọn Quốc',
					'required' => false 
				))
			
        ;
    }
	public function getName()
		{
			return 'searchProfile';
		}
    
}