<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NotaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('interrogatorio', 'ckeditor', array(
                'required' => true,
                'config_name' => 'my_config'
            ))
            ->add('exploracion', 'ckeditor', array(
                'required' => true,
                'config_name' => 'my_config'
            ))
            ->add('diagnostico', 'ckeditor', array(
                'required' => true,
                'config_name' => 'my_config'
            ))
            ->add('receta', 'ckeditor', array(
                'required' => true,
                'config_name' => 'my_config'
            ))
            ->add('estudios', 'ckeditor', array(
                'required' => true,
                'config_name' => 'my_config'
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Nota'
        ));
    }
}
