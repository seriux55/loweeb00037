<?php

namespace Base\BledvoyageBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Base\BledvoyageBundle\Entity\AvisSortie;

class AvisSortieData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $avis1 = new AvisSortie();
        $avis1->setBooking($this->getReference('booking1'));
        $avis1->setAvis('Très bonne sortie! je recommande');
        $avis1->setEmotion('1');
        $avis1->setIp('127.0.0.1');
        $avis1->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($avis1);
        
        $avis2 = new AvisSortie();
        $avis2->setBooking($this->getReference('booking2'));
        $avis2->setAvis('Bonne en général');
        $avis2->setEmotion('1');
        $avis2->setIp('127.0.0.1');
        $avis2->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($avis2);
        
        $avis3 = new AvisSortie();
        $avis3->setBooking($this->getReference('booking3'));
        $avis3->setAvis('Tranquille!!');
        $avis3->setEmotion('2');
        $avis3->setIp('127.0.0.1');
        $avis3->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($avis3);
        
        $avis4 = new AvisSortie();
        $avis4->setBooking($this->getReference('booking4'));
        $avis4->setAvis('Jamais je referai la même bêtise');
        $avis4->setEmotion('3');
        $avis4->setIp('127.0.0.1');
        $avis4->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($avis4);
        
        $avis5 = new AvisSortie();
        $avis5->setBooking($this->getReference('booking5'));
        $avis5->setAvis('Très bonne sortie! je recommande');
        $avis5->setEmotion('1');
        $avis5->setIp('127.0.0.1');
        $avis5->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($avis5);
        
        $avis6 = new AvisSortie();
        $avis6->setBooking($this->getReference('booking6'));
        $avis6->setAvis('pfff rien d\'extraordinaire');
        $avis6->setEmotion('2');
        $avis6->setIp('127.0.0.1');
        $avis6->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($avis6);
        
        $avis7 = new AvisSortie();
        $avis7->setBooking($this->getReference('booking7'));
        $avis7->setAvis('Je suis très déçu de cette sortie');
        $avis7->setEmotion('3');
        $avis7->setIp('127.0.0.1');
        $avis7->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($avis7);
        
        $avis8 = new AvisSortie();
        $avis8->setBooking($this->getReference('booking8'));
        $avis8->setAvis('Très bonne sortie! je recommande');
        $avis8->setEmotion('1');
        $avis8->setIp('127.0.0.1');
        $avis8->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($avis8);
        
        $avis9 = new AvisSortie();
        $avis9->setBooking($this->getReference('booking9'));
        $avis9->setAvis('Sortie moyenne en général');
        $avis9->setEmotion('2');
        $avis9->setIp('127.0.0.1');
        $avis9->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($avis9);
        
        $avis10 = new AvisSortie();
        $avis10->setBooking($this->getReference('booking10'));
        $avis10->setAvis('Très mauvaise sortie!!');
        $avis10->setEmotion('3');
        $avis10->setIp('127.0.0.1');
        $avis10->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($avis10);
        
        $manager->flush();
        
        $this->addReference('avis1',   $avis1);
        $this->addReference('avis2',   $avis2);
        $this->addReference('avis3',   $avis3);
        $this->addReference('avis4',   $avis4);
        $this->addReference('avis5',   $avis5);
        $this->addReference('avis6',   $avis6);
        $this->addReference('avis7',   $avis7);
        $this->addReference('avis8',   $avis8);
        $this->addReference('avis9',   $avis9);
        $this->addReference('avis10',  $avis10);
    }
    
    public function getOrder()
    {
        return 11; // l'ordre dans lequel les fichiers sont chargés
    }
}
