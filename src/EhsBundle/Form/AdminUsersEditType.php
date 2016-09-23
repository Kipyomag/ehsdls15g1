<?php

namespace EhsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class AdminUsersEditType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', RepeatedType::class, array(
                'type' => EmailType::class,
                'invalid_message' => 'Les addresse e-mail doivent correspondre.',
                'first_name'      => 'Modifier_votre_e-mail',
                'second_name'     => 'Retapper_votre_e-mail',
            ))
            ->add('telephone')
            ->add('adresse')
            ->add('ville')
            ->add('region')
            ->add('pays')
            ->add('role', ChoiceType::class, array(
            'choices' => array('ROLE_USER' => 'Utilisateur', 'ROLE_MODERATEUR' => 'Modérateur', 'ROLE_ADMIN' => 'Administrateur'),
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
