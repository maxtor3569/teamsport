<?php

// src/Sportimimi/userBundle/Form/ProfileForm.php

namespace Sportimimi\userBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;

class ProfileForm extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
       
        $builder
                //->add('category','choice', array('choices' => array('empty_value' => 'Sélectionez une option','categorie1'=>'Catégorie1','categorie2'=>'Categorie2')))
                ->add('country', 'entity', array(
                    'class' => 'SportimimiuserBundle:Country', 
                    'property' => 'name',
                    'label' => 'Quốc',
                    'mapped' => false,
                    'label_attr' => array('class' => 'col-md-4 control-label'),
                    'attr' => array(
                        'class' => 'form-control'
                    ),
                    'query_builder' => function(EntityRepository $er2) {
                return $er2->createQueryBuilder('u')
                        ->orderBy('u.name', 'ASC');
            }
                ))
                ->add('sports', 'entity', array(
                    'class' => 'SportimimiuserBundle:Category',
                    'multiple' => true,
                    'attr' => array(
                        'class' => 'form-control',
                        'placeholder' => 'Bạn chơi thể thao nào?',
                        'data-native-menu' => 'false'
                    ),
                    'label' => 'Thể Thao',
                    'label_attr' => array('class' => 'col-md-4 control-label'),
                    'property' => 'nameVn',
                    'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('u')
                        ->orderBy('u.order', 'ASC');
            }
                ))
                ->add('email', 'email', array(
                    'attr' => array(
                        'placeholder' => 'Nhập emaiḷ của bạn',
                        'class' => 'form-control'
                    ),
                    'label_attr' => array('class' => 'col-md-4 control-label'),
                        )
                )
                ->add('password', 'password', array(
                    'attr' => array(
                        'placeholder' => 'Nhập mật khẩu mới',
                        'class' => 'form-control'
                    ),
                    'label' => 'Mật khẩu',
                    'label_attr' => array('class' => 'col-md-4 control-label'),
                        )
                )
                ->add('nom', 'text', array(
                    'label' => 'Họ',
                    'attr' => array(
                        'placeholder' => 'Nhập ho của bạn',
                        'class' => 'form-control'
                    ),
                    'label_attr' => array('class' => 'col-md-4 control-label'),
                ))
                ->add('prenom', 'text', array(
                    'label' => 'Tên',
                    'label_attr' => array('class' => 'col-md-4 control-label'),
                    'attr' => array(
                        'placeholder' => 'Nhập tên của bạn',
                        'class' => 'form-control'
                    )
                ))
                ->add('dateNaissance', 'birthday', array(
                    'years' => range(1960, date('Y')),
                    'label' => 'Ngày sinh',
                    'label_attr' => array('class' => 'col-md-4 control-label'),
                    'attr' => array(
                        'class' => 'form-control'
                    )
                        )
                    
                )
                ->add('sexe', 'choice', array('choices' => array('F' => 'Nữ', 'M' => 'Nam'),
                    'label' => 'Giới tính',
                    'label_attr' => array('class' => 'col-md-4 control-label'),
                    'attr' => array(
                        'class' => 'form-control'
                    )
                ))
                ->add('phone', 'text', array(
                    'required' => false,
                    'label' => 'Điện thoại',
                    'label_attr' => array('class' => 'col-md-4 control-label'),
                    'attr' => array(
                        'placeholder' => 'Nhập số điện thoại của bạn',
                        'class' => 'form-control'
                    )
                ))
        /* ->add('description', 'textarea',array(
          'required' => false,
          'attr' => array('title' => 'Decrivez-vous pour rencontrer d\'autres sportifs.',
          'placeholder' => 'Mô tả bản thân',
          'style' => 'width:400px'
          ))) */
        /* ->add('levels', 'choice', array('choices' => array('Sơ cấp'=>'Sơ cấp','Trung bình'=>'Trung bình','Cao cấp'=>'Cao cấp','Chuyên nghiệp'=>'Chuyên nghiệp'),
          'label' =>'Giới tính',
          'attr' => array(
          'style' => 'width:100px'
          )

          )) */

        ;
    }

    public function getName() {
        return 'profile';
    }

}
