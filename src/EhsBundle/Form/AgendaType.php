<?php

namespace EhsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AgendaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('startingDate', DateTimeType::class, array(
                'years' => range(date('Y'), date('Y')+5)
            ))
            ->add('endingDate', DateTimeType::class, array(
                'years' => range(date('Y'), date('Y')+5)
            ))
            ->add('address')
            ->add('city')
            ->add('title')
            ->add('description','ckeditor', array(
            'config' => array(
                'filebrowserBrowseRoute' => 'elfinder',
                'filebrowserBrowseRouteParameters' => array('instance' => 'default')
                )
            ))
            ->add('login', ChoiceType::class, array(
            'choices' => array(0 => 'Non', 1 => 'Oui'),
            ))
            ->add('loginNumber', 'integer', array('required'=>false))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EhsBundle\Entity\Agenda'
        ));
    }
}
