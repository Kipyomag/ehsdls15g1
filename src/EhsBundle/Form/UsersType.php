<?php

namespace EhsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class UsersType extends AbstractType
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
                'invalid_message' => 'Les e-mails doivent correspondre.',
                'first_name'      => 'E-mail',
                'second_name'     => 'Confirmez_votre_e-mail',
            ))
            ->add('nom')
            ->add('prenom')
            ->add('password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'invalid_message' => 'Les mots de passes doivent correspondre.',
                'first_name'      => 'Mot_de_passe',
                'second_name'     => 'Confirmez_votre_mot_de_passe',
            ))
            ->add('genre', ChoiceType::class, array(
            'choices' => array('Homme' => 'Homme', 'Femme' => 'Femme'),
            ))
            ->add('telephone')
            ->add('adresse')
            ->add('ville')
            ->add('region')
            ->add('pays')
            ->add('role', ChoiceType::class, array(
                'choices' => array(
                    'ROLE_USER' => 'Utilisateur',
                    'ROLE_MODERATEUR' => 'Modérateur',
                    'ROLE_ADMIN' => 'Administrateur'),
                'required'    => false,
                'empty_data'  => 'ROLE_USER',
                )
            );
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
