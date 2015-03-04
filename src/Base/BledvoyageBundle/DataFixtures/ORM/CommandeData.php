<?php

namespace Base\BledvoyageBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Base\BledvoyageBundle\Entity\Commande;

class CommandeData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        /*
        $commande1 = new Commande();
        $commande1->setMode('espèce');
        $commande1->setInformation('Sur place');
        $manager->persist($commande1);
        
        $manager->flush();
        
        $this->addReference('commande1',  $commande1);
        */
    }
    
    public function getOrder()
    {
        return 8; // l'ordre dans lequel les fichiers sont chargés
    }
}
