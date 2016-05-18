<?php

namespace Warriors\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UrlType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('submenu')
            ->add('nombre')
            ->add('url')
            ->add('producto1',null,array("required"=>false))
            ->add('producto2',null,array("required"=>false))
            ->add('producto3',null,array("required"=>false))
            ->add('Guardar','submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Warriors\AdminBundle\Entity\Url'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'warriors_adminbundle_url';
    }
}
