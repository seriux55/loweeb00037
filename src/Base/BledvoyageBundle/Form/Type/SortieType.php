<?php

namespace Base\BledvoyageBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Base\BledvoyageBundle\Form\Type\PictureType;
use Base\BledvoyageBundle\Form\Type\CategorieSortieType;

class SortieType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('localisation')
            ->add('titre')
            ->add('descriptif', 'textarea')
            ->add('conditions', 'textarea')
            ->add('tarif', 'text')
            ->add('maxPersonne', 'text')
            ->add('dateDebut', 'date', array(
                    'widget' => 'single_text',
                    'input'  => 'datetime',
                    'format' => 'dd/MM/yyyy',
                    'attr'   => array('class' => 'datepicker'),
                )
            )
            ->add('heureDebut')
            ->add('dateFin', 'date', array(
                    'widget' => 'single_text',
                    'input'  => 'datetime',
                    'format' => 'dd/MM/yyyy',
                    'attr'   => array('class' => 'datepicker'),
                )
            )
            ->add('heureFin')
            ->add('picture1', new PictureType())
            ->add('picture2', new PictureType())
            ->add('picture3', new PictureType())
            ->add('picture4', new PictureType())
            ->add('categorieSortie',   new CategorieSortieType())
        ;
        
        /*
        // On ajoute une fonction qui va écouter l'évènement PRE_SET_DATA
        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function(FormEvent $event) {
                // On récupère notre objet Advert sous-jacent
                $sortie = $event->getData();

                if (null === $sortie) {
                  return;
                }

                if (!$sortie->getPublished() || null === $sortie->getId()) {
                    $event->getForm()->add('published', 'checkbox', array('required' => false));
                } else {
                    $event->getForm()->remove('published');
                }
            }
        );
        */
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Base\BledvoyageBundle\Entity\Sortie'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'base_bledvoyagebundle_sortie';
    }
}
