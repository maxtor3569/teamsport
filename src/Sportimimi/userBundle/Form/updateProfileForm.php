<?php
// src/Sportimimi/userBundle/Form/updateProfileForm.php

namespace Sportimimi\userBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;

class updateProfileForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {        
        $builder
           	 	->add('country', 'entity', array(
					'class' => 'SportimimiuserBundle:Country',
					'property' => 'name',
					'label' => 'Quốc',
					'attr' => array(
					'style' => 'width:185px'
					),
					'query_builder' => function(EntityRepository $er2) {
						return $er2->createQueryBuilder('u')
							->orderBy('u.name', 'ASC');
					}
				))


		     ->add('sports', 'entity', array(
					'class' => 'SportimimiuserBundle:Category',
					'attr' => array(
					'style' => 'width:185px'
					),
					'multiple' => true,
					'label' => 'Thể Thao',
					'property' => 'nameVn',
					'query_builder' => function(EntityRepository $er) {
						return $er->createQueryBuilder('u')
							->orderBy('u.order', 'ASC');
					}
				))
			->add('nom','text',array(
				'label' => 'Họ',
				'attr' => array(
					//'placeholder' => 'Nhập mật khẩu của bạn',
					'style' => 'width:185px'
					)
				
				))
            ->add('prenom','text',array(
				'label' => 'Tên',
				'attr' => array(
					'style' => 'width:185px'
					)
				))
            ->add('dateNaissance', 'birthday', array(
				'years' => range(1960, date('Y')),
				'label' => 'Ngày sinh',
				
				)
			)
            ->add('sexe', 'choice', array('choices' => array('F'=>'Nữ','M'=>'Nam'),
			'label' =>'Giới tính',
			'attr' => array(
					'style' => 'width:100px'
					)
			
			))
				->add('phone', 'number',array(
			'required' => false,
			'label' => 'Điện thoại',
			'attr' => array(
					'style' => 'width:185px'
					)
			))
			->add('description', 'textarea',array(
			'required' => true,
			'attr' => array('title' => 'Mô tả bạn để đáp ứng vận động viên khác',
			'placeholder' => 'Mô tả bản thân',
			'style' => 'width:400px'
			)))
			->add('email', 'email',
			array(
					'attr' => array(
					'placeholder' => 'Nhập email của bạn',
					'style' => 'width:235px'
					),
					'disabled' => true
				)
			)
			->add('password', 'password', 
				array(
					'attr' => array(
					'placeholder' => 'Nhập mật khẩu mới',
					'style' => 'width:185px'
					),
					'label' =>'Mật khẩu mới',
					'required' => false
				)
			)
			/*->add('levels', 'choice', array('choices' => array('Sơ cấp'=>'Sơ cấp','Trung bình'=>'Trung bình','Cao cấp'=>'Cao cấp','Chuyên nghiệp'=>'Chuyên nghiệp'),
			'label' =>'Giới tính',
			'attr' => array(
					'style' => 'width:100px'
					)
			
			))*/
        ;
    }

    public function getName()
    {
        return 'updateProfile';
    }
}