<?php

namespace Base\BledvoyageBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Base\BledvoyageBundle\Entity\AdminStatut;

class AdminStatutData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $statut1 = new AdminStatut();
        $statut1->setUser($this->getReference('user4'));
        $statut1->addUser($this->getReference('user1'));
        $statut1->addUser($this->getReference('user2'));
        $statut1->addUser($this->getReference('user3'));
        $statut1->setStatut("Il faut prendre la réservation n°155 de 5 personnes pour la sortie Jet Ski Sensation");
        $manager->persist($statut1);
        
        $statut2 = new AdminStatut();
        $statut2->setUser($this->getReference('user1'));
        $statut2->addUser($this->getReference('user4'));
        $statut2->addUser($this->getReference('user5'));
        $statut2->setEtat('1');
        $statut2->setStatut("Préparer les quads pour demain 15h");
        $manager->persist($statut2);
        
        $statut3 = new AdminStatut();
        $statut3->setUser($this->getReference('user2'));
        $statut3->addUser($this->getReference('user1'));
        $statut3->addUser($this->getReference('user4'));
        $statut3->setEtat('2');
        $statut3->setStatut("Il faut faire des publications pour demain sur la page nroho");
        $manager->persist($statut3);
        
        $statut4 = new AdminStatut();
        $statut4->setUser($this->getReference('user1'));
        $statut4->addUser($this->getReference('user4'));
        $statut4->addUser($this->getReference('user2'));
        $statut4->addUser($this->getReference('user3'));
        $statut4->setStatut("Manger 5 fruits et légumes par jour!");
        $manager->persist($statut4);
        
        $manager->flush();
        
        $this->addReference('statut1', $statut1);
        $this->addReference('statut2', $statut2);
        $this->addReference('statut3', $statut3);
        $this->addReference('statut4', $statut4);
    }
    
    public function getOrder()
    {
        return 13; // l'ordre dans lequel les fichiers sont chargés
    }
}
