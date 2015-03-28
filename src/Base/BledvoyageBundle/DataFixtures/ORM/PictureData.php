<?php

namespace Base\BledvoyageBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Base\BledvoyageBundle\Entity\Picture;

class PictureData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $picture1 = new Picture();
        $picture1->setAlt('quad.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture1);
        
        $picture2 = new Picture();
        $picture2->setAlt('quad.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture2);
        
        $picture3 = new Picture();
        $picture3->setAlt('quad_couv.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture3);
        
        $picture4 = new Picture();
        $picture4->setAlt('quad_couv.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture4);
        
        $picture5 = new Picture();
        $picture5->setAlt('cerf_volant.png')
                 ->setUrl('png');
        $manager->persist($picture5);
        
        $picture6 = new Picture();
        $picture6->setAlt('cerf_volant.png')
                 ->setUrl('png');
        $manager->persist($picture6);
        
        $picture7 = new Picture();
        $picture7->setAlt('cerf_volant_cover.png')
                 ->setUrl('png');
        $manager->persist($picture7);
        
        $picture8 = new Picture();
        $picture8->setAlt('cerf_volant_cover.png')
                 ->setUrl('png');
        $manager->persist($picture8);
        
        $picture9 = new Picture();
        $picture9->setAlt('cover_balade_sous.png')
                 ->setUrl('png');
        $manager->persist($picture9);
        
        $picture10 = new Picture();
        $picture10->setAlt('sortie_aventure_sous.png')
                  ->setUrl('png');
        $manager->persist($picture10);
        
        $picture11 = new Picture();
        $picture11->setAlt('sortie_aventure_sous.png')
                  ->setUrl('png');
        $manager->persist($picture11);
        
        $picture12 = new Picture();
        $picture12->setAlt('sortie_sousmarine_balade_cover.png')
                  ->setUrl('png');
        $manager->persist($picture12);
        
        $picture13 = new Picture();
        $picture13->setAlt('decolage.png')
                  ->setUrl('png');
        $manager->persist($picture13);
        
        $picture14 = new Picture();
        $picture14->setAlt('decolage_cover.png')
                  ->setUrl('png');
        $manager->persist($picture14);
        
        $picture15 = new Picture();
        $picture15->setAlt('decolage.png')
                  ->setUrl('png');
        $manager->persist($picture15);
        
        $picture16 = new Picture();
        $picture16->setAlt('decolage_cover.png')
                  ->setUrl('png');
        $manager->persist($picture16);
        
        $picture17 = new Picture();
        $picture17->setAlt('ico_vtt.png')
                  ->setUrl('png');
        $manager->persist($picture17);
        
        $picture18 = new Picture();
        $picture18->setAlt('randonnee_vtt.png')
                  ->setUrl('png');
        $manager->persist($picture18);
        
        $picture19 = new Picture();
        $picture19->setAlt('randonee_vtt_cover.png')
                  ->setUrl('png');
        $manager->persist($picture19);
        
        $picture20 = new Picture();
        $picture20->setAlt('randonee_vtt_cover.png')
                  ->setUrl('png');
        $manager->persist($picture20);
        
        $picture21 = new Picture();
        $picture21->setAlt('forma_1.png')
                  ->setUrl('png');
        $manager->persist($picture21);
        
        $picture22 = new Picture();
        $picture22->setAlt('forma_1.png')
                  ->setUrl('png');
        $manager->persist($picture22);
        
        $picture23 = new Picture();
        $picture23->setAlt('forma_2.png')
                  ->setUrl('png');
        $manager->persist($picture23);
        
        $picture24 = new Picture();
        $picture24->setAlt('forma_2.png')
                  ->setUrl('png');
        $manager->persist($picture24);
        
        $manager->flush();
        
        $this->addReference('picture1',   $picture1);
        $this->addReference('picture2',   $picture2);
        $this->addReference('picture3',   $picture3);
        $this->addReference('picture4',   $picture4);
        $this->addReference('picture5',   $picture5);
        $this->addReference('picture6',   $picture6);
        $this->addReference('picture7',   $picture7);
        $this->addReference('picture8',   $picture8);
        $this->addReference('picture9',   $picture9);
        $this->addReference('picture10',  $picture10);
        $this->addReference('picture11',  $picture11);
        $this->addReference('picture12',  $picture12);
        $this->addReference('picture13',  $picture13);
        $this->addReference('picture14',  $picture14);
        $this->addReference('picture15',  $picture15);
        $this->addReference('picture16',  $picture16);
        $this->addReference('picture17',  $picture17);
        $this->addReference('picture18',  $picture18);
        $this->addReference('picture19',  $picture19);
        $this->addReference('picture20',  $picture20);
        $this->addReference('picture21',  $picture21);
        $this->addReference('picture22',  $picture22);
        $this->addReference('picture23',  $picture23);
        $this->addReference('picture24',  $picture24);
    }
    
    public function getOrder()
    {
        return 3; // l'ordre dans lequel les fichiers sont chargés
    }
}
