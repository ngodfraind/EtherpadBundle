<?php

namespace Claroline\EtherpadBundle\Form;

use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EtherpadDocType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'text', array('constraints' => new NotBlank(), 'label' => 'name'));
        $builder->add(
            'published',
            'checkbox',
            array(
                'label' => 'publish',
                'required' => true,
                'mapped' => false,
                'attr' => array('checked' => 'checked')
           )
        );
    }

    public function getName()
    {
        return 'etherpaddoc_form';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array('translation_domain' => 'etherpaddoc'));
    }
}
