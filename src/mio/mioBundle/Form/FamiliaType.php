<?php

namespace mio\mioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class FamiliaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre','text',array('label' => 'Nombre*'))
        ;
    }

    public function getName()
    {
        return 'mio_miobundle_familiatype';
    }
}
