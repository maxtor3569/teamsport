<?php
/**
 * Created by PhpStorm.
 * User: pablo
 * Date: 7/22/14
 * Time: 6:31 PM
 */

namespace Sportimimi\AdminBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NewsAdminType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('content', 'textarea', array(
                'attr' => array('class' => 'form-control', 'rows' => 8)
            ))
            ->add('profile')
            ->add('doingSports', 'integer', array(
                'required' => false,
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sportimimi\userBundle\Entity\News'
        ));
    }

    public function getName()
    {
        return 'teamsports_admin_news_form';
    }
} 