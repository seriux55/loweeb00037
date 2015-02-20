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
        $categorie0 = new Categorie();
        $categorie0->setNom('formule');
        $categorie0->setImage('');
        $categorie0->setAfficher('1');
        $categorie0->setIp('127.0.0.1');
        $categorie0->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie0);
        
        $categorie1 = new Categorie();
        $categorie1->setNom('montagne');
        $categorie1->setImage('back_montagne.jpg');
        $categorie1->setAfficher('1');
        $categorie1->setIp('127.0.0.1');
        $categorie1->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie1);
        
        $categorie2 = new Categorie();
        $categorie2->setNom('sable');
        $categorie2->setImage('back_sable.jpg');
        $categorie2->setAfficher('1');
        $categorie2->setIp('127.0.0.1');
        $categorie2->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie2);
        
        $categorie3 = new Categorie();
        $categorie3->setNom('mer');
        $categorie3->setImage('back_mer.jpg');
        $categorie3->setAfficher('1');
        $categorie3->setIp('127.0.0.1');
        $categorie3->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie3);
        
        $categorie4 = new Categorie();
        $categorie4->setNom('air');
        $categorie4->setImage('back_air.jpg');
        $categorie4->setAfficher('1');
        $categorie4->setIp('127.0.0.1');
        $categorie4->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie4);
        
        $categorie5 = new Categorie();
        $categorie5->setNom('terre');
        $categorie5->setImage('back_terre.jpg');
        $categorie5->setAfficher('1');
        $categorie5->setIp('127.0.0.1');
        $categorie5->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie5);
        
        $categorie6 = new Categorie();
        $categorie6->setNom('formation');
        $categorie6->setImage('back_formation.jpg');
        $categorie6->setAfficher('0');
        $categorie6->setIp('127.0.0.1');
        $categorie6->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($categorie6);
        
        $manager->flush();
        
        $this->addReference('categorie0',  $categorie0);
        $this->addReference('categorie1',  $categorie1);
        $this->addReference('categorie2',  $categorie2);
        $this->addReference('categorie3',  $categorie3);
        $this->addReference('categorie4',  $categorie4);
        $this->addReference('categorie5',  $categorie5);
        $this->addReference('categorie6',  $categorie6);
    }
    
    public function getOrder()
    {
        return 2; // l'ordre dans lequel les fichiers sont chargés
    }
}
