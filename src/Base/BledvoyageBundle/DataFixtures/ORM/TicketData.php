<?php

namespace Base\BledvoyageBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Base\BledvoyageBundle\Entity\Ticket;

class TicketData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        /*
        $ticket1 = new Sortie();
        $ticket1->setUser($this->getReference('user1'));
        $ticket1->setCategorie($this->getReference('categorie1'));
        $ticket1->setIp('127.0.0.1');
        $ticket1->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($ticket1);
        
        $manager->flush();
        
        $this->addReference('ticket1',  $ticket1);
        */
    }
    
    public function getOrder()
    {
        return 12; // l'ordre dans lequel les fichiers sont chargés
    }
}
