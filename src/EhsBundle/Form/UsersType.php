<?php

namespace EhsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UsersType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('username')
            ->add('nom')
            ->add('prenom')
            ->add('password')
            ->add('genre')
            ->add('telephone')
            ->add('adresse')
            ->add('ville')
            ->add('region')
            ->add('pays')
            ->add('role', 'choice', array(
            'choices' => array('ROLE_USER' => 'User', 'ROLE_ADMIN' => 'Admin'),
        ))
        ;
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