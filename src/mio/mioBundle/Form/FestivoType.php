<?php

namespace mio\mioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class FestivoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fecha','date',array('read_only' => 'true','widget' => 'single_text','format' => 'dd/MM/yyyy','label' => 'Fecha'))
        ;
    }

    public function getName()
    {
        return 'mio_miobundle_festivotype';
    }
}