<?php


namespace Sportimimi\userBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;

class SearchPlace extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {        
        $builder
		
		 ->add('district', 'choice', array(
				'choices' => array(
					'1'=>'1',
				'2'=>'2',
				'3'=>'3',
				'4'=>'4',
				'5'=>'5',
				'6'=>'6',
				'7'=>'7',
				'8'=>'8',
				'9'=>'9',
				'10'=>'10',
				'11'=>'11',
				'12'=>'12',
				'Bình Chánh'=>'Bình Chánh',
				'Bình Tân'=>'Bình Tân',
				'Bình Thạnh'=>'Bình Thạnh',
				'Cần Giờ'=>'Cần Giờ',
				'Củ Chi'=>'Củ Chi',
			
				'Gò Vấp'=>'Gò Vấp',
				'Hóc Môn'=>'Hóc Môn',
				'Nhà Bè'=>'Nhà Bè',
				'Phú Nhuận'=>'Phú Nhuận',
				'Tân Bình'=>'Tân Bình',
				'Tân Phú'=>'Tân Phú',
				'Thủ Đức'=>'Thủ Đức',
				
				),
				'empty_value' => 'Chọn District',
				'attr' => array(
					'style' => 'width:140px'
				),
				'required' => false)
			)
			->add('placeName', 'text', array(
				'attr' => array(
					'style' => 'width:200px;height:25px'
				),
				'required' => false)
			)
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
			return 'searchPlace';
		}
    
}