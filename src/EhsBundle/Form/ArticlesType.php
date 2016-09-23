<?php

namespace EhsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ArticlesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('chapeau')
            ->add('contenu')
            ->add('save', SubmitType::class, array('label' => 'Sauvegarder'))
            ->add('send', SubmitType::class, array('label' => 'Envoyer'))
            ->add('publish', SubmitType::class, array('label' => 'Publier'))
            ->add('refuse', SubmitType::class, array('label' => 'Refuser'))
            
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EhsBundle\Entity\Articles'
        ));
    }
}
