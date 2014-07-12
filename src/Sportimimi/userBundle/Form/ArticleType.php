<?php
// src/Sportimimi/userBundle/Form/ArticleType.php

namespace Sportimimi\userBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {        
        $builder
			->add('name','text',array(
				'label' => 'Tên bài viết',
				'attr' => array(
					'style' => 'width:185px'
					)
			))
			->add('content','textarea',array(
				'label' => 'Tên Đội',
				'attr' => array(
					'style' => 'width:500px;height:200px'
					)
			))
			
			
        ;
    }
	public function getName()
		{
			return 'ArticleType';
		}
    
}