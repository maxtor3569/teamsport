<?php

// src/Sportimimi/userBundle/Form/CreateTeamForm.php

namespace Sportimimi\userBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;

class CreateTeamForm extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('name', 'text', array(
                    'label' => 'Tên Đội',
                    'label_attr' => array('class' => 'col-md-4 control-label'),
                    'attr' => array(
                        'class' => 'form-control'
                    )
                ))
                ->add('category', 'entity', array(
                    'class' => 'SportimimiuserBundle:Category',
                    'attr' => array(
                        'class' => 'form-control'
                    ),
                    'label' => 'Thể Thao',
                    'label_attr' => array('class' => 'col-md-4 control-label'),
                    'property' => 'nameVn',
                    'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('u')
                        ->orderBy('u.order', 'ASC');
            }
                ))
                ->add('mainLocationRelation', 'entity', array(
                    'class'       => 'SportimimiuserBundle:Place',
                    'label' => 'Sân',
                    'label_attr' => array('class' => 'col-md-4 control-label'),
                    'attr' => array(
                        'class' => 'form-control'
                    ),
                    'empty_value' => '',
                    'property' => 'placeName',
                    'required' => false
                ))

        ;
    }

    public function getName() {
        return 'CreateTeam';
    }

}
