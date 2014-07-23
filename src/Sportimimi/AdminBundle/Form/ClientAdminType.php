<?php

namespace Sportimimi\AdminBundle\Form;


use OAuth2\OAuth2;
use Sportimimi\AdminBundle\Form\Transformer\ArrayToDelimitedStringTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClientAdminType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add(
                $builder
                    ->create('redirect_uris')
                    ->addModelTransformer(new ArrayToDelimitedStringTransformer())
            )
            ->add('allowed_grant_types', 'choice', array(
                'choices' => array(
                      OAuth2::GRANT_TYPE_AUTH_CODE => OAuth2::GRANT_TYPE_AUTH_CODE,
                      Oauth2::GRANT_TYPE_IMPLICIT => Oauth2::GRANT_TYPE_IMPLICIT,
                      Oauth2::GRANT_TYPE_USER_CREDENTIALS => Oauth2::GRANT_TYPE_USER_CREDENTIALS,
                      Oauth2::GRANT_TYPE_CLIENT_CREDENTIALS => Oauth2::GRANT_TYPE_CLIENT_CREDENTIALS,
                      Oauth2::GRANT_TYPE_REFRESH_TOKEN => Oauth2::GRANT_TYPE_REFRESH_TOKEN,
                      Oauth2::GRANT_TYPE_EXTENSIONS => Oauth2::GRANT_TYPE_EXTENSIONS
                ),
                'multiple' => true,
                'attr' => array('class' => 'form-control')
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sportimimi\userBundle\Entity\Client'
        ));
    }

    public function getName()
    {
        return 'teamsports_admin_client_form';
    }
}
