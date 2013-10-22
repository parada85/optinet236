<?php

namespace mio\mioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class EmpleadoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username','text',array('label' => 'Usuario*'))
            ->add('dni','text',array('label' => 'Dni*','max_length' => 9))
            ->add('nombre','text',array('label' => 'Nombre*'))
            ->add('apellido1','text',array('label' => 'Apellido1*'))
            ->add('apellido2','text',array('label' => 'Apellido2*'))
            ->add('email','email',array('label' => 'Email*'))
            ->add('localidad','text',array('label' => 'Localidad*'))
            ->add('provincia','text',array('label' => 'Provincia*'))
            ->add('telefono','text',array('label' => 'Teléfono','max_length' => 9))
            ->add('movil','text',array('label' => 'Móvil','max_length' => 9))
            ->add('direccion','text',array('label' => 'Dirección*'))
            ->add('activo','checkbox',array('label' => 'Activo*'))
            ->add('generar','checkbox',array('mapped' => false ,'label' => 'Generar contraseña'))
            ->add('fechaalta','datetime',array('read_only' => 'true','widget' => 'single_text','format' => 'dd-MM-yyyy','label' => 'Fecha de registro'))
            ->add('idioma','choice',array('attr'  =>  array('class' => 'lista'),'label'=>'Idioma*','choices' => array('es' => 'Español','en' => 'Inglés'),'required' => true))
            ->add('tema','choice',array('attr'  =>  array('class' => 'lista'),'label'=>'Tema*','choices' => array('cobalt'=>'Cobalt','aristo' => 'Aristo','arctic' => 'Arctic','sterling'=>'Sterling'),'required' => true))
            ->add('password', 'repeated', array('type' => 'password','invalid_message' => 'Las contraseñas deben ser iguales.','error_bubbling' => false,'first_options'  => array('label' => 'Nueva contraseña'),'second_options' => array('label' => 'Repite contaseña')))
        ;
    }

    public function getName()
    {
        return 'mio_miobundle_empleadotype';
    }
}
