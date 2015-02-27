<?php

namespace Base\BledvoyageBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BookingType extends AbstractType
{
    private $id;

    public function __construct($id){
        $this->id = $id; // Keep the id of the item.
    }
    
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $id = $this->id;
        
        $builder
            ->add('nombre', 'choice', array(
                                        'choices' => array(
                                            '1' => '1',
                                            '2' => '2',
                                            '3' => '3',
                                            '4' => '4',
                                            '5' => '5',
                                            '6' => '6',
                                            '7 et plus' => '7 et plus',
                                        ),
                                        'expanded' => true,
                                        'multiple' => false
            ))
            ->add('dateReserver', 'entity', array(
                                        'class'    => 'BaseBledvoyageBundle:DateSortie',
                                        'property' => 'dateDebut',
                                        'expanded' => false,
                                        'multiple' => true,
                                        'query_builder' => function(\Base\BledvoyageBundle\Entity\DateSortieRepository $r) use ($id) 
                                                           {
                                                                return $r->getDateDebut($id);
                                                           }
            ))
            ->add('promo')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Base\BledvoyageBundle\Entity\Booking'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'base_bledvoyagebundle_booking';
    }
}
