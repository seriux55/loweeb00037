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
        /*
        $categorie_sortie1 = new CategorieSortie();
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
        */
        
        $categorie_sortie2 = new CategorieSortie();
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
        
        $categorie_sortie6 = new CategorieSortie();
        $categorie_sortie6->setAir('0');
        $categorie_sortie6->setArc('0');
        $categorie_sortie6->setEquitation('0');
        $categorie_sortie6->setFitness('0');
        $categorie_sortie6->setGolf('0');
        $categorie_sortie6->setKayak('0');
        $categorie_sortie6->setMarche('0');
        $categorie_sortie6->setPlongee('0');
        $categorie_sortie6->setQuad('0');
        $categorie_sortie6->setRandonee('0');
        $categorie_sortie6->setRoller('0');
        $categorie_sortie6->setRunning('0');
        $categorie_sortie6->setSable('0');
        $categorie_sortie6->setSportEau('1');
        $categorie_sortie6->setTennis('0');
        $categorie_sortie6->setVelo('0');
        $categorie_sortie6->setVisites('1');
        $categorie_sortie6->setIp('127.0.0.1');
        $categorie_sortie6->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie_sortie6);
        
        $categorie_sortie17 = new CategorieSortie();
        $categorie_sortie17->setAir('0');
        $categorie_sortie17->setArc('0');
        $categorie_sortie17->setEquitation('0');
        $categorie_sortie17->setFitness('0');
        $categorie_sortie17->setGolf('0');
        $categorie_sortie17->setKayak('0');
        $categorie_sortie17->setMarche('0');
        $categorie_sortie17->setPlongee('0');
        $categorie_sortie17->setQuad('1');
        $categorie_sortie17->setRandonee('0');
        $categorie_sortie17->setRoller('0');
        $categorie_sortie17->setRunning('0');
        $categorie_sortie17->setSable('0');
        $categorie_sortie17->setSportEau('0');
        $categorie_sortie17->setTennis('0');
        $categorie_sortie17->setVelo('0');
        $categorie_sortie17->setVisites('1');
        $categorie_sortie17->setIp('127.0.0.1');
        $categorie_sortie17->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie_sortie17);
        
        $categorie_sortie8 = new CategorieSortie();
        $categorie_sortie8->setAir('0');
        $categorie_sortie8->setArc('0');
        $categorie_sortie8->setEquitation('0');
        $categorie_sortie8->setFitness('0');
        $categorie_sortie8->setGolf('0');
        $categorie_sortie8->setKayak('0');
        $categorie_sortie8->setMarche('0');
        $categorie_sortie8->setPlongee('0');
        $categorie_sortie8->setQuad('1');
        $categorie_sortie8->setRandonee('0');
        $categorie_sortie8->setRoller('0');
        $categorie_sortie8->setRunning('0');
        $categorie_sortie8->setSable('0');
        $categorie_sortie8->setSportEau('0');
        $categorie_sortie8->setTennis('0');
        $categorie_sortie8->setVelo('0');
        $categorie_sortie8->setVisites('1');
        $categorie_sortie8->setIp('127.0.0.1');
        $categorie_sortie8->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie_sortie8);
        
        $categorie_sortie9 = new CategorieSortie();
        $categorie_sortie9->setAir('0');
        $categorie_sortie9->setArc('0');
        $categorie_sortie9->setEquitation('0');
        $categorie_sortie9->setFitness('0');
        $categorie_sortie9->setGolf('0');
        $categorie_sortie9->setKayak('0');
        $categorie_sortie9->setMarche('0');
        $categorie_sortie9->setPlongee('0');
        $categorie_sortie9->setQuad('1');
        $categorie_sortie9->setRandonee('0');
        $categorie_sortie9->setRoller('0');
        $categorie_sortie9->setRunning('0');
        $categorie_sortie9->setSable('0');
        $categorie_sortie9->setSportEau('0');
        $categorie_sortie9->setTennis('0');
        $categorie_sortie9->setVelo('0');
        $categorie_sortie9->setVisites('1');
        $categorie_sortie9->setIp('127.0.0.1');
        $categorie_sortie9->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie_sortie9);
        
        $categorie_sortie10 = new CategorieSortie();
        $categorie_sortie10->setAir('0');
        $categorie_sortie10->setArc('0');
        $categorie_sortie10->setEquitation('0');
        $categorie_sortie10->setFitness('0');
        $categorie_sortie10->setGolf('0');
        $categorie_sortie10->setKayak('0');
        $categorie_sortie10->setMarche('0');
        $categorie_sortie10->setPlongee('0');
        $categorie_sortie10->setQuad('1');
        $categorie_sortie10->setRandonee('0');
        $categorie_sortie10->setRoller('0');
        $categorie_sortie10->setRunning('0');
        $categorie_sortie10->setSable('0');
        $categorie_sortie10->setSportEau('0');
        $categorie_sortie10->setTennis('0');
        $categorie_sortie10->setVelo('0');
        $categorie_sortie10->setVisites('1');
        $categorie_sortie10->setIp('127.0.0.1');
        $categorie_sortie10->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie_sortie10);
        
        $categorie_sortie11 = new CategorieSortie();
        $categorie_sortie11->setAir('0');
        $categorie_sortie11->setArc('0');
        $categorie_sortie11->setEquitation('0');
        $categorie_sortie11->setFitness('0');
        $categorie_sortie11->setGolf('0');
        $categorie_sortie11->setKayak('0');
        $categorie_sortie11->setMarche('0');
        $categorie_sortie11->setPlongee('0');
        $categorie_sortie11->setQuad('1');
        $categorie_sortie11->setRandonee('0');
        $categorie_sortie11->setRoller('0');
        $categorie_sortie11->setRunning('0');
        $categorie_sortie11->setSable('0');
        $categorie_sortie11->setSportEau('0');
        $categorie_sortie11->setTennis('0');
        $categorie_sortie11->setVelo('0');
        $categorie_sortie11->setVisites('1');
        $categorie_sortie11->setIp('127.0.0.1');
        $categorie_sortie11->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie_sortie11);
        
        $categorie_sortie12 = new CategorieSortie();
        $categorie_sortie12->setAir('0');
        $categorie_sortie12->setArc('0');
        $categorie_sortie12->setEquitation('0');
        $categorie_sortie12->setFitness('0');
        $categorie_sortie12->setGolf('0');
        $categorie_sortie12->setKayak('0');
        $categorie_sortie12->setMarche('0');
        $categorie_sortie12->setPlongee('0');
        $categorie_sortie12->setQuad('1');
        $categorie_sortie12->setRandonee('0');
        $categorie_sortie12->setRoller('0');
        $categorie_sortie12->setRunning('0');
        $categorie_sortie12->setSable('0');
        $categorie_sortie12->setSportEau('0');
        $categorie_sortie12->setTennis('0');
        $categorie_sortie12->setVelo('0');
        $categorie_sortie12->setVisites('1');
        $categorie_sortie12->setIp('127.0.0.1');
        $categorie_sortie12->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie_sortie12);
        
        /*
        $categorie_sortie13 = new CategorieSortie();
        $categorie_sortie13->setAir('0');
        $categorie_sortie13->setArc('0');
        $categorie_sortie13->setEquitation('0');
        $categorie_sortie13->setFitness('0');
        $categorie_sortie13->setGolf('0');
        $categorie_sortie13->setKayak('0');
        $categorie_sortie13->setMarche('0');
        $categorie_sortie13->setPlongee('0');
        $categorie_sortie13->setQuad('1');
        $categorie_sortie13->setRandonee('0');
        $categorie_sortie13->setRoller('0');
        $categorie_sortie13->setRunning('0');
        $categorie_sortie13->setSable('0');
        $categorie_sortie13->setSportEau('0');
        $categorie_sortie13->setTennis('0');
        $categorie_sortie13->setVelo('0');
        $categorie_sortie13->setVisites('1');
        $categorie_sortie13->setIp('127.0.0.1');
        $categorie_sortie13->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie_sortie13);
        */
        
        $categorie_sortie14 = new CategorieSortie();
        $categorie_sortie14->setAir('0');
        $categorie_sortie14->setArc('0');
        $categorie_sortie14->setEquitation('0');
        $categorie_sortie14->setFitness('0');
        $categorie_sortie14->setGolf('0');
        $categorie_sortie14->setKayak('0');
        $categorie_sortie14->setMarche('0');
        $categorie_sortie14->setPlongee('0');
        $categorie_sortie14->setQuad('1');
        $categorie_sortie14->setRandonee('0');
        $categorie_sortie14->setRoller('0');
        $categorie_sortie14->setRunning('0');
        $categorie_sortie14->setSable('0');
        $categorie_sortie14->setSportEau('0');
        $categorie_sortie14->setTennis('0');
        $categorie_sortie14->setVelo('0');
        $categorie_sortie14->setVisites('1');
        $categorie_sortie14->setIp('127.0.0.1');
        $categorie_sortie14->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie_sortie14);
        
        $categorie_sortie15 = new CategorieSortie();
        $categorie_sortie15->setAir('0');
        $categorie_sortie15->setArc('0');
        $categorie_sortie15->setEquitation('0');
        $categorie_sortie15->setFitness('0');
        $categorie_sortie15->setGolf('0');
        $categorie_sortie15->setKayak('0');
        $categorie_sortie15->setMarche('0');
        $categorie_sortie15->setPlongee('0');
        $categorie_sortie15->setQuad('1');
        $categorie_sortie15->setRandonee('0');
        $categorie_sortie15->setRoller('0');
        $categorie_sortie15->setRunning('0');
        $categorie_sortie15->setSable('0');
        $categorie_sortie15->setSportEau('0');
        $categorie_sortie15->setTennis('0');
        $categorie_sortie15->setVelo('0');
        $categorie_sortie15->setVisites('1');
        $categorie_sortie15->setIp('127.0.0.1');
        $categorie_sortie15->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie_sortie15);
        
        $categorie_sortie16 = new CategorieSortie();
        $categorie_sortie16->setAir('0');
        $categorie_sortie16->setArc('0');
        $categorie_sortie16->setEquitation('0');
        $categorie_sortie16->setFitness('0');
        $categorie_sortie16->setGolf('0');
        $categorie_sortie16->setKayak('0');
        $categorie_sortie16->setMarche('0');
        $categorie_sortie16->setPlongee('0');
        $categorie_sortie16->setQuad('0');
        $categorie_sortie16->setRandonee('0');
        $categorie_sortie16->setRoller('0');
        $categorie_sortie16->setRunning('0');
        $categorie_sortie16->setSable('0');
        $categorie_sortie16->setSportEau('1');
        $categorie_sortie16->setTennis('0');
        $categorie_sortie16->setVelo('0');
        $categorie_sortie16->setVisites('1');
        $categorie_sortie16->setIp('127.0.0.1');
        $categorie_sortie16->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie_sortie16);
        
        $categorie_sortie7 = new CategorieSortie();
        $categorie_sortie7->setAir('0');
        $categorie_sortie7->setArc('0');
        $categorie_sortie7->setEquitation('0');
        $categorie_sortie7->setFitness('0');
        $categorie_sortie7->setGolf('0');
        $categorie_sortie7->setKayak('0');
        $categorie_sortie7->setMarche('0');
        $categorie_sortie7->setPlongee('0');
        $categorie_sortie7->setQuad('1');
        $categorie_sortie7->setRandonee('0');
        $categorie_sortie7->setRoller('0');
        $categorie_sortie7->setRunning('0');
        $categorie_sortie7->setSable('0');
        $categorie_sortie7->setSportEau('0');
        $categorie_sortie7->setTennis('0');
        $categorie_sortie7->setVelo('0');
        $categorie_sortie7->setVisites('1');
        $categorie_sortie7->setIp('127.0.0.1');
        $categorie_sortie7->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie_sortie7);
        
        $categorie_sortie18 = new CategorieSortie();
        $categorie_sortie18->setAir('0');
        $categorie_sortie18->setArc('0');
        $categorie_sortie18->setEquitation('0');
        $categorie_sortie18->setFitness('0');
        $categorie_sortie18->setGolf('0');
        $categorie_sortie18->setKayak('0');
        $categorie_sortie18->setMarche('0');
        $categorie_sortie18->setPlongee('0');
        $categorie_sortie18->setQuad('1');
        $categorie_sortie18->setRandonee('0');
        $categorie_sortie18->setRoller('0');
        $categorie_sortie18->setRunning('0');
        $categorie_sortie18->setSable('0');
        $categorie_sortie18->setSportEau('0');
        $categorie_sortie18->setTennis('0');
        $categorie_sortie18->setVelo('0');
        $categorie_sortie18->setVisites('1');
        $categorie_sortie18->setIp('127.0.0.1');
        $categorie_sortie18->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie_sortie18);
        
        $categorie_sortie19 = new CategorieSortie();
        $categorie_sortie19->setAir('0');
        $categorie_sortie19->setArc('0');
        $categorie_sortie19->setEquitation('0');
        $categorie_sortie19->setFitness('0');
        $categorie_sortie19->setGolf('0');
        $categorie_sortie19->setKayak('0');
        $categorie_sortie19->setMarche('0');
        $categorie_sortie19->setPlongee('0');
        $categorie_sortie19->setQuad('1');
        $categorie_sortie19->setRandonee('0');
        $categorie_sortie19->setRoller('0');
        $categorie_sortie19->setRunning('0');
        $categorie_sortie19->setSable('0');
        $categorie_sortie19->setSportEau('0');
        $categorie_sortie19->setTennis('0');
        $categorie_sortie19->setVelo('0');
        $categorie_sortie19->setVisites('1');
        $categorie_sortie19->setIp('127.0.0.1');
        $categorie_sortie19->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie_sortie19);
        
        $categorie_sortie20 = new CategorieSortie();
        $categorie_sortie20->setAir('0');
        $categorie_sortie20->setArc('0');
        $categorie_sortie20->setEquitation('0');
        $categorie_sortie20->setFitness('0');
        $categorie_sortie20->setGolf('0');
        $categorie_sortie20->setKayak('0');
        $categorie_sortie20->setMarche('0');
        $categorie_sortie20->setPlongee('0');
        $categorie_sortie20->setQuad('1');
        $categorie_sortie20->setRandonee('0');
        $categorie_sortie20->setRoller('0');
        $categorie_sortie20->setRunning('0');
        $categorie_sortie20->setSable('0');
        $categorie_sortie20->setSportEau('0');
        $categorie_sortie20->setTennis('0');
        $categorie_sortie20->setVelo('0');
        $categorie_sortie20->setVisites('1');
        $categorie_sortie20->setIp('127.0.0.1');
        $categorie_sortie20->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie_sortie20);
        
        $categorie_sortie21 = new CategorieSortie();
        $categorie_sortie21->setAir('0');
        $categorie_sortie21->setArc('0');
        $categorie_sortie21->setEquitation('0');
        $categorie_sortie21->setFitness('0');
        $categorie_sortie21->setGolf('0');
        $categorie_sortie21->setKayak('0');
        $categorie_sortie21->setMarche('0');
        $categorie_sortie21->setPlongee('0');
        $categorie_sortie21->setQuad('1');
        $categorie_sortie21->setRandonee('0');
        $categorie_sortie21->setRoller('0');
        $categorie_sortie21->setRunning('0');
        $categorie_sortie21->setSable('0');
        $categorie_sortie21->setSportEau('0');
        $categorie_sortie21->setTennis('0');
        $categorie_sortie21->setVelo('0');
        $categorie_sortie21->setVisites('1');
        $categorie_sortie21->setIp('127.0.0.1');
        $categorie_sortie21->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie_sortie21);
        
        $categorie_sortie22 = new CategorieSortie();
        $categorie_sortie22->setAir('0');
        $categorie_sortie22->setArc('0');
        $categorie_sortie22->setEquitation('0');
        $categorie_sortie22->setFitness('0');
        $categorie_sortie22->setGolf('0');
        $categorie_sortie22->setKayak('0');
        $categorie_sortie22->setMarche('0');
        $categorie_sortie22->setPlongee('0');
        $categorie_sortie22->setQuad('1');
        $categorie_sortie22->setRandonee('0');
        $categorie_sortie22->setRoller('0');
        $categorie_sortie22->setRunning('0');
        $categorie_sortie22->setSable('0');
        $categorie_sortie22->setSportEau('0');
        $categorie_sortie22->setTennis('0');
        $categorie_sortie22->setVelo('0');
        $categorie_sortie22->setVisites('1');
        $categorie_sortie22->setIp('127.0.0.1');
        $categorie_sortie22->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie_sortie22);
        
        $categorie_sortie23 = new CategorieSortie();
        $categorie_sortie23->setAir('0');
        $categorie_sortie23->setArc('0');
        $categorie_sortie23->setEquitation('0');
        $categorie_sortie23->setFitness('0');
        $categorie_sortie23->setGolf('0');
        $categorie_sortie23->setKayak('0');
        $categorie_sortie23->setMarche('0');
        $categorie_sortie23->setPlongee('0');
        $categorie_sortie23->setQuad('1');
        $categorie_sortie23->setRandonee('0');
        $categorie_sortie23->setRoller('0');
        $categorie_sortie23->setRunning('0');
        $categorie_sortie23->setSable('0');
        $categorie_sortie23->setSportEau('0');
        $categorie_sortie23->setTennis('0');
        $categorie_sortie23->setVelo('0');
        $categorie_sortie23->setVisites('1');
        $categorie_sortie23->setIp('127.0.0.1');
        $categorie_sortie23->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie_sortie23);
        
        $categorie_sortie24 = new CategorieSortie();
        $categorie_sortie24->setAir('0');
        $categorie_sortie24->setArc('0');
        $categorie_sortie24->setEquitation('0');
        $categorie_sortie24->setFitness('0');
        $categorie_sortie24->setGolf('0');
        $categorie_sortie24->setKayak('0');
        $categorie_sortie24->setMarche('0');
        $categorie_sortie24->setPlongee('0');
        $categorie_sortie24->setQuad('1');
        $categorie_sortie24->setRandonee('0');
        $categorie_sortie24->setRoller('0');
        $categorie_sortie24->setRunning('0');
        $categorie_sortie24->setSable('0');
        $categorie_sortie24->setSportEau('0');
        $categorie_sortie24->setTennis('0');
        $categorie_sortie24->setVelo('0');
        $categorie_sortie24->setVisites('1');
        $categorie_sortie24->setIp('127.0.0.1');
        $categorie_sortie24->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie_sortie24);
        
        $categorie_sortie25 = new CategorieSortie();
        $categorie_sortie25->setAir('0');
        $categorie_sortie25->setArc('0');
        $categorie_sortie25->setEquitation('0');
        $categorie_sortie25->setFitness('0');
        $categorie_sortie25->setGolf('0');
        $categorie_sortie25->setKayak('0');
        $categorie_sortie25->setMarche('0');
        $categorie_sortie25->setPlongee('0');
        $categorie_sortie25->setQuad('1');
        $categorie_sortie25->setRandonee('0');
        $categorie_sortie25->setRoller('0');
        $categorie_sortie25->setRunning('0');
        $categorie_sortie25->setSable('0');
        $categorie_sortie25->setSportEau('0');
        $categorie_sortie25->setTennis('0');
        $categorie_sortie25->setVelo('0');
        $categorie_sortie25->setVisites('1');
        $categorie_sortie25->setIp('127.0.0.1');
        $categorie_sortie25->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie_sortie25);
        
        $manager->flush();
        
        //$this->addReference('categorie_sortie1',  $categorie_sortie1);
        $this->addReference('categorie_sortie2',  $categorie_sortie2);
        $this->addReference('categorie_sortie3',  $categorie_sortie3);
        $this->addReference('categorie_sortie4',  $categorie_sortie4);
        $this->addReference('categorie_sortie5',  $categorie_sortie5);
        $this->addReference('categorie_sortie6',  $categorie_sortie6);
        $this->addReference('categorie_sortie7',  $categorie_sortie7);
        $this->addReference('categorie_sortie8',  $categorie_sortie8);
        $this->addReference('categorie_sortie9',  $categorie_sortie9);
        $this->addReference('categorie_sortie10', $categorie_sortie10);
        $this->addReference('categorie_sortie11', $categorie_sortie11);
        $this->addReference('categorie_sortie12', $categorie_sortie12);
        //$this->addReference('categorie_sortie13', $categorie_sortie13);
        $this->addReference('categorie_sortie14', $categorie_sortie14);
        $this->addReference('categorie_sortie15', $categorie_sortie15);
        $this->addReference('categorie_sortie16', $categorie_sortie16);
        $this->addReference('categorie_sortie17', $categorie_sortie17);
        $this->addReference('categorie_sortie18', $categorie_sortie18);
        $this->addReference('categorie_sortie19', $categorie_sortie19);
        $this->addReference('categorie_sortie20', $categorie_sortie20);
        $this->addReference('categorie_sortie21', $categorie_sortie21);
        $this->addReference('categorie_sortie22', $categorie_sortie22);
        $this->addReference('categorie_sortie23', $categorie_sortie23);
        $this->addReference('categorie_sortie24', $categorie_sortie24);
        $this->addReference('categorie_sortie25', $categorie_sortie25);
    }
    
    public function getOrder()
    {
        return 4; // l'ordre dans lequel les fichiers sont chargés
    }
}
