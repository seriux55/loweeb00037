<?php

namespace Base\BledvoyageBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CategorieSortieType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('velo')
            ->add('running')
            ->add('kayak')
            ->add('randonee')
            ->add('roller')
            ->add('plongee')
            ->add('equitation')
            ->add('fitness')
            ->add('tennis')
            ->add('golf')
            ->add('marche')
            ->add('visites')
            ->add('sportEau')
            ->add('arc')
            ->add('air')
            ->add('sable')
            ->add('quad')
            ->add('ip')
            ->add('dateTime')
            ->add('sortie')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Base\BledvoyageBundle\Entity\CategorieSortie'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'base_bledvoyagebundle_categoriesortie';
    }
}
