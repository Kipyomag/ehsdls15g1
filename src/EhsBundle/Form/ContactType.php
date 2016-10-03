<?php

namespace EhsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Gregwar\CaptchaBundle\Type\CaptchaType;
class ContactType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text',array('required'=>true,'attr'   =>  array('class'   => 'form-control')))
            ->add('prenom','text',array('required'=>true,'attr'   =>  array('class'   => 'form-control')))
            ->add('telephone','text',array('required'=>true,'attr'   =>  array('class'   => 'form-control')))
            ->add('email','email',array('required'=>true,'attr'   =>  array('class'   => 'form-control')))
            ->add('message','textarea',array('required'=>true,'attr'   =>  array('class'   => 'form-control')))
            ->add('captcha', CaptchaType::class, array('reload'=>true, 'as_url'=> true, 'invalid_message'=>'Code incorrect!','attr'   =>  array('class'   => 'form-control')))
            
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EhsBundle\Entity\Contact'
        ));
    }
}
