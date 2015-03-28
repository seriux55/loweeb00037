<?php

namespace Base\BledvoyageBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Base\BledvoyageBundle\Entity\DateSortie;

class DateSortieData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $dateSortie1 = new DateSortie();
        $dateSortie1->setSortie($this->getReference('sortie1'));
        $dateSortie1->setDateDebut(new \DateTime("2015-01-01"));
        $dateSortie1->setDateFin(new \DateTime("2015-01-01"));
        $dateSortie1->setStatut("");
        $dateSortie1->setAnnuler("0");
        $manager->persist($dateSortie1);
        
        $dateSortie2 = new DateSortie();
        $dateSortie2->setSortie($this->getReference('sortie1'));
        $dateSortie2->setDateDebut(new \DateTime("2017-01-01"));
        $dateSortie2->setDateFin(new \DateTime("2017-01-01"));
        $dateSortie2->setStatut("");
        $dateSortie2->setAnnuler("0");
        $manager->persist($dateSortie2);
        
        $dateSortie3 = new DateSortie();
        $dateSortie3->setSortie($this->getReference('sortie2'));
        $dateSortie3->setDateDebut(new \DateTime("2015-01-01"));
        $dateSortie3->setDateFin(new \DateTime("2015-01-01"));
        $dateSortie3->setStatut("");
        $dateSortie3->setAnnuler("0");
        $manager->persist($dateSortie3);
        
        $dateSortie4 = new DateSortie();
        $dateSortie4->setSortie($this->getReference('sortie2'));
        $dateSortie4->setDateDebut(new \DateTime("2017-01-01"));
        $dateSortie4->setDateFin(new \DateTime("2017-01-01"));
        $dateSortie4->setStatut("");
        $dateSortie4->setAnnuler("0");
        $manager->persist($dateSortie4);
        
        $dateSortie5 = new DateSortie();
        $dateSortie5->setSortie($this->getReference('sortie3'));
        $dateSortie5->setDateDebut(new \DateTime("2015-01-01"));
        $dateSortie5->setDateFin(new \DateTime("2015-01-01"));
        $dateSortie5->setStatut("");
        $dateSortie5->setAnnuler("0");
        $manager->persist($dateSortie5);
        
        $dateSortie6 = new DateSortie();
        $dateSortie6->setSortie($this->getReference('sortie3'));
        $dateSortie6->setDateDebut(new \DateTime("2017-01-01"));
        $dateSortie6->setDateFin(new \DateTime("2017-01-01"));
        $dateSortie6->setStatut("");
        $dateSortie6->setAnnuler("0");
        $manager->persist($dateSortie6);
        
        $dateSortie7 = new DateSortie();
        $dateSortie7->setSortie($this->getReference('sortie4'));
        $dateSortie7->setDateDebut(new \DateTime("2015-01-01"));
        $dateSortie7->setDateFin(new \DateTime("2015-01-01"));
        $dateSortie7->setStatut("");
        $dateSortie7->setAnnuler("0");
        $manager->persist($dateSortie7);
        
        $dateSortie8 = new DateSortie();
        $dateSortie8->setSortie($this->getReference('sortie4'));
        $dateSortie8->setDateDebut(new \DateTime("2017-01-01"));
        $dateSortie8->setDateFin(new \DateTime("2017-01-01"));
        $dateSortie8->setStatut("");
        $dateSortie8->setAnnuler("0");
        $manager->persist($dateSortie8);
        
        $dateSortie9 = new DateSortie();
        $dateSortie9->setSortie($this->getReference('sortie5'));
        $dateSortie9->setDateDebut(new \DateTime("2015-01-01"));
        $dateSortie9->setDateFin(new \DateTime("2015-01-01"));
        $dateSortie9->setStatut("");
        $dateSortie9->setAnnuler("0");
        $manager->persist($dateSortie9);
        
        $dateSortie10 = new DateSortie();
        $dateSortie10->setSortie($this->getReference('sortie5'));
        $dateSortie10->setDateDebut(new \DateTime("2017-01-01"));
        $dateSortie10->setDateFin(new \DateTime("2017-01-01"));
        $dateSortie10->setStatut("");
        $dateSortie10->setAnnuler("0");
        $manager->persist($dateSortie10);
        
        $dateSortie11 = new DateSortie();
        $dateSortie11->setSortie($this->getReference('sortie5'));
        $dateSortie11->setDateDebut(new \DateTime("2015-01-01"));
        $dateSortie11->setDateFin(new \DateTime("2015-01-01"));
        $dateSortie11->setStatut("");
        $dateSortie11->setAnnuler("0");
        $manager->persist($dateSortie11);
        
        $dateSortie12 = new DateSortie();
        $dateSortie12->setSortie($this->getReference('sortie5'));
        $dateSortie12->setDateDebut(new \DateTime("2017-01-01"));
        $dateSortie12->setDateFin(new \DateTime("2017-01-01"));
        $dateSortie12->setStatut("");
        $dateSortie12->setAnnuler("0");
        $manager->persist($dateSortie12);
        
        $manager->flush();
        
        $this->addReference('dateSortie1',  $dateSortie1);
        $this->addReference('dateSortie2',  $dateSortie2);
        $this->addReference('dateSortie3',  $dateSortie3);
        $this->addReference('dateSortie4',  $dateSortie4);
        $this->addReference('dateSortie5',  $dateSortie5);
        $this->addReference('dateSortie6',  $dateSortie6);
        $this->addReference('dateSortie7',  $dateSortie7);
        $this->addReference('dateSortie8',  $dateSortie8);
        $this->addReference('dateSortie9',  $dateSortie9);
        $this->addReference('dateSortie10', $dateSortie10);
        $this->addReference('dateSortie11', $dateSortie11);
        $this->addReference('dateSortie12', $dateSortie12);
    }
    
    public function getOrder()
    {
        return 6; // l'ordre dans lequel les fichiers sont chargés
    }
}
