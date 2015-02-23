<?php

namespace Base\BledvoyageBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Base\BledvoyageBundle\Entity\CategorieSortie;

class CategorieSortieData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $categorie_sortie1 = new CategorieSortie();
        $categorie_sortie1->setSortie($this->getReference('sortie1'));
        $categorie_sortie1->setAir('0');
        $categorie_sortie1->setArc('0');
        $categorie_sortie1->setEquitation('0');
        $categorie_sortie1->setFitness('0');
        $categorie_sortie1->setGolf('0');
        $categorie_sortie1->setKayak('0');
        $categorie_sortie1->setMarche('0');
        $categorie_sortie1->setPlongee('0');
        $categorie_sortie1->setQuad('1');
        $categorie_sortie1->setRandonee('0');
        $categorie_sortie1->setRoller('0');
        $categorie_sortie1->setRunning('0');
        $categorie_sortie1->setSable('0');
        $categorie_sortie1->setSportEau('0');
        $categorie_sortie1->setTennis('0');
        $categorie_sortie1->setVelo('0');
        $categorie_sortie1->setVisites('1');
        $categorie_sortie1->setIp('127.0.0.1');
        $categorie_sortie1->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie_sortie1);
        
        $categorie_sortie2 = new CategorieSortie();
        $categorie_sortie2->setSortie($this->getReference('sortie2'));
        $categorie_sortie2->setAir('0');
        $categorie_sortie2->setArc('0');
        $categorie_sortie2->setEquitation('0');
        $categorie_sortie2->setFitness('0');
        $categorie_sortie2->setGolf('0');
        $categorie_sortie2->setKayak('1');
        $categorie_sortie2->setMarche('0');
        $categorie_sortie2->setPlongee('0');
        $categorie_sortie2->setQuad('0');
        $categorie_sortie2->setRandonee('0');
        $categorie_sortie2->setRoller('0');
        $categorie_sortie2->setRunning('0');
        $categorie_sortie2->setSable('0');
        $categorie_sortie2->setSportEau('0');
        $categorie_sortie2->setTennis('0');
        $categorie_sortie2->setVelo('0');
        $categorie_sortie2->setVisites('1');
        $categorie_sortie2->setIp('127.0.0.1');
        $categorie_sortie2->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie_sortie2);
        
        $categorie_sortie3 = new CategorieSortie();
        $categorie_sortie3->setSortie($this->getReference('sortie3'));
        $categorie_sortie3->setAir('0');
        $categorie_sortie3->setArc('0');
        $categorie_sortie3->setEquitation('0');
        $categorie_sortie3->setFitness('0');
        $categorie_sortie3->setGolf('0');
        $categorie_sortie3->setKayak('0');
        $categorie_sortie3->setMarche('0');
        $categorie_sortie3->setPlongee('1');
        $categorie_sortie3->setQuad('0');
        $categorie_sortie3->setRandonee('0');
        $categorie_sortie3->setRoller('0');
        $categorie_sortie3->setRunning('0');
        $categorie_sortie3->setSable('0');
        $categorie_sortie3->setSportEau('0');
        $categorie_sortie3->setTennis('0');
        $categorie_sortie3->setVelo('0');
        $categorie_sortie3->setVisites('1');
        $categorie_sortie3->setIp('127.0.0.1');
        $categorie_sortie3->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie_sortie3);
        
        $categorie_sortie4 = new CategorieSortie();
        $categorie_sortie4->setSortie($this->getReference('sortie4'));
        $categorie_sortie4->setAir('0');
        $categorie_sortie4->setArc('0');
        $categorie_sortie4->setEquitation('0');
        $categorie_sortie4->setFitness('0');
        $categorie_sortie4->setGolf('0');
        $categorie_sortie4->setKayak('0');
        $categorie_sortie4->setMarche('0');
        $categorie_sortie4->setPlongee('0');
        $categorie_sortie4->setQuad('0');
        $categorie_sortie4->setRandonee('1');
        $categorie_sortie4->setRoller('0');
        $categorie_sortie4->setRunning('0');
        $categorie_sortie4->setSable('0');
        $categorie_sortie4->setSportEau('0');
        $categorie_sortie4->setTennis('0');
        $categorie_sortie4->setVelo('0');
        $categorie_sortie4->setVisites('1');
        $categorie_sortie4->setIp('127.0.0.1');
        $categorie_sortie4->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie_sortie4);
        
        $categorie_sortie5 = new CategorieSortie();
        $categorie_sortie5->setSortie($this->getReference('sortie5'));
        $categorie_sortie5->setAir('0');
        $categorie_sortie5->setArc('0');
        $categorie_sortie5->setEquitation('0');
        $categorie_sortie5->setFitness('0');
        $categorie_sortie5->setGolf('0');
        $categorie_sortie5->setKayak('0');
        $categorie_sortie5->setMarche('0');
        $categorie_sortie5->setPlongee('0');
        $categorie_sortie5->setQuad('0');
        $categorie_sortie5->setRandonee('0');
        $categorie_sortie5->setRoller('0');
        $categorie_sortie5->setRunning('0');
        $categorie_sortie5->setSable('0');
        $categorie_sortie5->setSportEau('1');
        $categorie_sortie5->setTennis('0');
        $categorie_sortie5->setVelo('0');
        $categorie_sortie5->setVisites('1');
        $categorie_sortie5->setIp('127.0.0.1');
        $categorie_sortie5->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie_sortie5);
        
        $manager->flush();
        
        $this->addReference('$categorie_sortie1',  $categorie_sortie1);
        $this->addReference('$categorie_sortie2',  $categorie_sortie2);
        $this->addReference('$categorie_sortie3',  $categorie_sortie3);
        $this->addReference('$categorie_sortie4',  $categorie_sortie4);
        $this->addReference('$categorie_sortie5',  $categorie_sortie5);
    }
    
    public function getOrder()
    {
        return 4; // l'ordre dans lequel les fichiers sont chargés
    }
}
