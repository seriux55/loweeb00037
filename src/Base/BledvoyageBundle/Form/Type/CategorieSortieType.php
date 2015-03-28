<?php

namespace Base\BledvoyageBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Base\BledvoyageBundle\Form\Type\SortieType;

class CategorieSortieType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('velo', 'checkbox', array(
                'label'     => 'Vélo, Cyclime',
                'required'  => false,
            ))
            ->add('running', 'checkbox', array(
                'label'     => 'Running',
                'required'  => false,
            ))
            ->add('kayak', 'checkbox', array(
                'label'     => 'Kayak, Bateau',
                'required'  => false,
            ))
            ->add('randonee', 'checkbox', array(
                'label'     => 'Randonée, Camping',
                'required'  => false,
            ))
            ->add('roller', 'checkbox', array(
                'label'     => 'Roller',
                'required'  => false,
            ))
            ->add('plongee', 'checkbox', array(
                'label'     => 'Plongée',
                'required'  => false,
            ))
            ->add('equitation', 'checkbox', array(
                'label'     => 'Équitation',
                'required'  => false,
            ))
            ->add('fitness', 'checkbox', array(
                'label'     => 'Fitness, Danses',
                'required'  => false,
            ))
            ->add('tennis', 'checkbox', array(
                'label'     => 'Tennis',
                'required'  => false,
            ))
            ->add('golf', 'checkbox', array(
                'label'     => 'Golf',
                'required'  => false,
            ))
            ->add('marche', 'checkbox', array(
                'label'     => 'Marche',
                'required'  => false,
            ))
            ->add('visites', 'checkbox', array(
                'label'     => 'Visites patrimoine',
                'required'  => false,
            ))
            ->add('sportEau', 'checkbox', array(
                'label'     => 'Sport eau',
                'required'  => false,
            ))
            ->add('arc', 'checkbox', array(
                'label'     => 'Arc',
                'required'  => false,
            ))
            ->add('air', 'checkbox', array(
                'label'     => 'Air',
                'required'  => false,
            ))
            ->add('sable', 'checkbox', array(
                'label'     => 'Sable',
                'required'  => false,
            ))
            ->add('quad', 'checkbox', array(
                'label'     => 'Quad',
                'required'  => false,
            ))
            ->add('sortie', new SortieType())
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
