<?php

namespace Base\BledvoyageBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Base\BledvoyageBundle\Entity\Paiement;

class PaiementData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $paiement1 = new Paiement();
        $paiement1->setMode('espèce');
        $paiement1->setInformation('Sur place');
        $manager->persist($paiement1);
        
        $paiement2 = new Paiement();
        $paiement2->setMode('mandat postale');
        $paiement2->setInformation('Titulaire du compte : Centre sebastopol    
CCP : 0000378861  75');
        $manager->persist($paiement2);
        
        $paiement3 = new Paiement();
        $paiement3->setMode('virement bancaire');
        $paiement3->setInformation('Titulaire du compte : BADR - Sebastopol - 81, Chenoua plage, 42000, Tiapza - Algérie.
R.I.B : 003 - 00448 - 300183300019.');
        $manager->persist($paiement3);
        
        $paiement4 = new Paiement();
        $paiement4->setMode('chèque');
        $paiement4->setInformation('Libeller le chèque à l ordre de : Sebastopol
Envoyer le chèque à :
81, Chenoua plage - 42000, Tipaza - Algérie.');
        $manager->persist($paiement4);
        
        $paiement5 = new Paiement();
        $paiement5->setMode('professionnels');
        $paiement5->setInformation('Envoyez un bon de commande, avec le pack demandé, le nombre de pack, signature et cachet, par 
E-mail : contact@bledvoyage.com, ou par Fax au : +213 24 47 14 04');
        $manager->persist($paiement5);
        
        $manager->flush();
        
        $this->addReference('paiement1',  $paiement1);
        $this->addReference('paiement2',  $paiement2);
        $this->addReference('paiement3',  $paiement3);
        $this->addReference('paiement4',  $paiement4);
        $this->addReference('paiement5',  $paiement5);
    }
    
    public function getOrder()
    {
        return 7; // l'ordre dans lequel les fichiers sont chargés
    }
}
