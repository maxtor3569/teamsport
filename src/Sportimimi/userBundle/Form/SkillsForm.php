<?php
// src/Sportimimi/userBundle/Form/SkillsForm.php

namespace Sportimimi\userBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;

class SkillsForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {        
        $builder
			->add('agility','choice', array(
				'choices'   => array('0' => '0', '1' => '1','2' => '2','3' => '3','4' => '4','5' => '5'),
				'required'  => false,
				'label'  => 'Nhanh Nhẹn'
			))
	
			->add('speed','choice', array(
				'choices'   => array('0' => '0', '1' => '1','2' => '2','3' => '3','4' => '4','5' => '5'),
				'required'  => false,
				'label'  => 'Tốc Độ'
			))
			->add('stamina','choice', array(
				'choices'   => array('0' => '0', '1' => '1','2' => '2','3' => '3','4' => '4','5' => '5'),
				'required'  => false,
				'label'  => 'Sức Chịu Đựng'
			))
			->add('strength','choice', array(
				'choices'   => array('0' => '0', '1' => '1','2' => '2','3' => '3','4' => '4','5' => '5'),
				'required'  => false,
				'label'  => 'Sức Mạnh'
			))
        ;
    }
	public function getName()
		{
			return 'SkillsForm';
		}
    
}