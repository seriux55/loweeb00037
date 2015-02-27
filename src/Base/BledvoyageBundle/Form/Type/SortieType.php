<?php

namespace Base\BledvoyageBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SortieType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('descriptif')
            ->add('conditions')
            ->add('localisation')
            ->add('tarif')
            ->add('maxPersonne')
            ->add('dateDebut')
            ->add('heureDebut')
            ->add('dateFin')
            ->add('heureFin')
            ->add('video')
            ->add('photo1')
            ->add('photo2')
            ->add('photo3')
            ->add('photo4')
            ->add('valider')
            ->add('charge')
            ->add('acces')
            ->add('echeance')
            ->add('tarifEcheance')
            ->add('commission')
            ->add('annuler')
            ->add('tarifEtud')
            ->add('promoClient')
            ->add('promoPartenaire')
            ->add('astuce')
            ->add('pub')
            ->add('close')
            ->add('ip')
            ->add('dateTime')
            ->add('user')
            ->add('categorie')
        ;
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
