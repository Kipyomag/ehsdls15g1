<?php

namespace EhsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsersEditType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', 'repeated', array(
                'type' => 'email',
                'invalid_message' => 'Les addresse e-mail doivent correspondre.',
                'first_name'      => 'Modifier_votre_e-mail',
                'second_name'     => 'Retapper_votre_e-mail',
            ))
            ->add('password', 'repeated', array(
                'type' => 'password',
                'invalid_message' => 'Les mots de passes doivent correspondre.',
                'first_name'      => 'Modifier_votre_mot_de_passe',
                'second_name'     => 'Retapper_votre_mot_de_passe',
            ))
            ->add('telephone')
            ->add('adresse')
            ->add('ville')
            ->add('region')
            ->add('pays')
            ->add('role', 'choice', array(
            'choices' => array('ROLE_USER' => 'User', 'ROLE_ADMIN' => 'Admin'),
            ));
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EhsBundle\Entity\Users'
        ));
    }
}
