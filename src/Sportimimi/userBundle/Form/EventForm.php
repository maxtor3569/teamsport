<?php

// src/Sportimimi/userBundle/Form/ProfileForm.php

namespace Sportimimi\userBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;

class EventForm extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('name', 'text', array(
                    'label' => 'Tên Sự Kiện',
                    'label_attr' => array('class' => 'col-md-4 control-label'),
                    'attr' => array(
                        'class' => 'form-control',
                    )
                ))
                ->add('nameResponsable', 'text', array(
                    'label' => 'Người quản lí sự kiện',
                    'label_attr' => array('class' => 'col-md-4 control-label'),
                    'attr' => array(
                        'class' => 'form-control',
                    )
                ))
                ->add('mobileResponsable', 'text', array(
                    'label' => 'Phần Điện thoại người quản lí',
                    'label_attr' => array('class' => 'col-md-4 control-label'),
                    'attr' => array(
                        'class' => 'form-control',
                    )
                ))
                ->add('emailResponsable', 'text', array(
                    'label' => 'Email của người quản lí sự kiện',
                    'label_attr' => array('class' => 'col-md-4 control-label'),
                    'attr' => array(
                        'class' => 'form-control',
                    )
                ))
                ->add('timeStart', 'text', array(
                    'label' => 'Thời gian bắt đầu',
                    'label_attr' => array('class' => 'col-md-4 control-label'),
                    'attr' => array(
                        'class' => 'form-control',
                    )
                ))
                ->add('dateEventStart', 'text', array(
                    'label' => 'Ngày Bắt Đầu',
                    'label_attr' => array('class' => 'col-md-4 control-label'),
                    'attr' => array(
                        'class' => 'form-control',
            )))
                ->add('location', 'text', array(
                    'label' => 'Nơi',
                    'label_attr' => array('class' => 'col-md-4 control-label'),
                    'attr' => array(
                        'class' => 'form-control',
            )))
                ->add('categories', 'entity', array(
                    'class' => 'SportimimiuserBundle:Category',
                    'attr' => array(
                        'class' => 'form-control',
                        'data-placeholder' => 'Chọn thể thao',
                    ),
                    'multiple' => true,
                    'label' => 'Thể Thao',
                    'label_attr' => array('class' => 'col-md-4 control-label'),
                    'property' => 'nameVn',
                    'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('u')
                        ->orderBy('u.nameVn', 'ASC');
            }
                ))

        ;
    }

    public function getName() {
        return 'EventForm';
    }

}
