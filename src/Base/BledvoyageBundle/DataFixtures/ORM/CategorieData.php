<?php

namespace Base\BledvoyageBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Base\BledvoyageBundle\Entity\Categorie;

class CategorieData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $categorie1 = new Categorie();
        $categorie1->setNom('formule');
        $categorie1->setImage('');
        $categorie1->setAfficher('1');
        $categorie1->setIp('127.0.0.1');
        $categorie1->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie1);
        
        $categorie2 = new Categorie();
        $categorie2->setNom('montagne');
        $categorie2->setImage('back_montagne.jpg');
        $categorie2->setAfficher('1');
        $categorie2->setIp('127.0.0.1');
        $categorie2->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie2);
        
        $categorie3 = new Categorie();
        $categorie3->setNom('sable');
        $categorie3->setImage('back_sable.jpg');
        $categorie3->setAfficher('1');
        $categorie3->setIp('127.0.0.1');
        $categorie3->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie3);
        
        $categorie4 = new Categorie();
        $categorie4->setNom('mer');
        $categorie4->setImage('back_mer.jpg');
        $categorie4->setAfficher('1');
        $categorie4->setIp('127.0.0.1');
        $categorie4->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie4);
        
        $categorie5 = new Categorie();
        $categorie5->setNom('air');
        $categorie5->setImage('back_air.jpg');
        $categorie5->setAfficher('1');
        $categorie5->setIp('127.0.0.1');
        $categorie5->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie5);
        
        $categorie6 = new Categorie();
        $categorie6->setNom('terre');
        $categorie6->setImage('back_terre.jpg');
        $categorie6->setAfficher('1');
        $categorie6->setIp('127.0.0.1');
        $categorie6->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie6);
        
        $categorie7 = new Categorie();
        $categorie7->setNom('formation');
        $categorie7->setImage('back_formation.jpg');
        $categorie7->setAfficher('0');
        $categorie7->setIp('127.0.0.1');
        $categorie7->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie7);
        
        $manager->flush();
        
        $this->addReference('categorie1',  $categorie1);
        $this->addReference('categorie2',  $categorie2);
        $this->addReference('categorie3',  $categorie3);
        $this->addReference('categorie4',  $categorie4);
        $this->addReference('categorie5',  $categorie5);
        $this->addReference('categorie6',  $categorie6);
        $this->addReference('categorie7',  $categorie7);
    }
    
    public function getOrder()
    {
        return 2; // l'ordre dans lequel les fichiers sont chargés
    }
}
