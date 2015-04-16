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
        $picture1->setAlt('quad.png')
                 ->setUrl('png');
        $manager->persist($picture1);
        
        $picture2 = new Picture();
        $picture2->setAlt('quad.png')
                 ->setUrl('png');
        $manager->persist($picture2);
        
        $picture3 = new Picture();
        $picture3->setAlt('quad_couv.png')
                 ->setUrl('png');
        $manager->persist($picture3);
        
        $picture4 = new Picture();
        $picture4->setAlt('quad_couv.png')
                 ->setUrl('png');
        $manager->persist($picture4);
        
        $picture5 = new Picture();
        $picture5->setAlt('cerf_volant.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture5);
        
        $picture6 = new Picture();
        $picture6->setAlt('cerf_volant.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture6);
        
        $picture7 = new Picture();
        $picture7->setAlt('cerf_volant_cover.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture7);
        
        $picture8 = new Picture();
        $picture8->setAlt('cerf_volant_cover.jpg')
                 ->setUrl('jpg');
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
        
        $picture25 = new Picture();
        $picture25->setAlt('quad.png')
                 ->setUrl('png');
        $manager->persist($picture25);
        
        $picture26 = new Picture();
        $picture26->setAlt('quad.png')
                 ->setUrl('png');
        $manager->persist($picture26);
        
        $picture27 = new Picture();
        $picture27->setAlt('quad_couv.png')
                 ->setUrl('png');
        $manager->persist($picture27);
        
        $picture28 = new Picture();
        $picture28->setAlt('quad_couv.png')
                 ->setUrl('png');
        $manager->persist($picture28);
        
        $picture29 = new Picture();
        $picture29->setAlt('cerf_volant.png')
                 ->setUrl('png');
        $manager->persist($picture29);
        
        $picture30 = new Picture();
        $picture30->setAlt('cerf_volant.png')
                 ->setUrl('png');
        $manager->persist($picture30);
        
        $picture31 = new Picture();
        $picture31->setAlt('cerf_volant_cover.png')
                 ->setUrl('png');
        $manager->persist($picture31);
        
        $picture32 = new Picture();
        $picture32->setAlt('cerf_volant_cover.png')
                 ->setUrl('png');
        $manager->persist($picture32);
        
        $picture33 = new Picture();
        $picture33->setAlt('cover_balade_sous.png')
                 ->setUrl('png');
        $manager->persist($picture33);
        
        $picture34 = new Picture();
        $picture34->setAlt('sortie_aventure_sous.png')
                  ->setUrl('png');
        $manager->persist($picture34);
        
        $picture35 = new Picture();
        $picture35->setAlt('sortie_aventure_sous.png')
                  ->setUrl('png');
        $manager->persist($picture35);
        
        $picture36 = new Picture();
        $picture36->setAlt('sortie_aventure_sous.png')
                  ->setUrl('png');
        $manager->persist($picture36);
        
        $picture37 = new Picture();
        $picture37->setAlt('sortie_sousmarine_balade_cover.png')
                  ->setUrl('png');
        $manager->persist($picture37);
        
        $picture38 = new Picture();
        $picture38->setAlt('decolage.png')
                  ->setUrl('png');
        $manager->persist($picture38);
        
        $picture39 = new Picture();
        $picture39->setAlt('decolage_cover.png')
                  ->setUrl('png');
        $manager->persist($picture39);
        
        $picture40 = new Picture();
        $picture40->setAlt('decolage.png')
                  ->setUrl('png');
        $manager->persist($picture40);
        
        $picture41 = new Picture();
        $picture41->setAlt('decolage_cover.png')
                  ->setUrl('png');
        $manager->persist($picture41);
        
        $picture42 = new Picture();
        $picture42->setAlt('ico_vtt.png')
                  ->setUrl('png');
        $manager->persist($picture42);
        
        $picture43 = new Picture();
        $picture43->setAlt('randonnee_vtt.png')
                  ->setUrl('png');
        $manager->persist($picture43);
        
        $picture44 = new Picture();
        $picture44->setAlt('randonee_vtt_cover.png')
                  ->setUrl('png');
        $manager->persist($picture44);
        
        $picture45 = new Picture();
        $picture45->setAlt('randonee_vtt_cover.png')
                  ->setUrl('png');
        $manager->persist($picture45);
        
        $picture46 = new Picture();
        $picture46->setAlt('forma_1.png')
                  ->setUrl('png');
        $manager->persist($picture46);
        
        $picture47 = new Picture();
        $picture47->setAlt('forma_1.png')
                  ->setUrl('png');
        $manager->persist($picture47);
        
        $picture48 = new Picture();
        $picture48->setAlt('forma_2.png')
                  ->setUrl('png');
        $manager->persist($picture48);
        
        $picture49 = new Picture();
        $picture49->setAlt('forma_2.png')
                  ->setUrl('png');
        $manager->persist($picture49);
        
        $picture50 = new Picture();
        $picture50->setAlt('quad.png')
                 ->setUrl('png');
        $manager->persist($picture50);
        
        $picture51 = new Picture();
        $picture51->setAlt('quad.png')
                 ->setUrl('png');
        $manager->persist($picture51);
        
        $picture52 = new Picture();
        $picture52->setAlt('quad_couv.png')
                 ->setUrl('png');
        $manager->persist($picture52);
        
        $picture53 = new Picture();
        $picture53->setAlt('quad_couv.png')
                 ->setUrl('png');
        $manager->persist($picture53);
        
        $picture54 = new Picture();
        $picture54->setAlt('cerf_volant.png')
                 ->setUrl('png');
        $manager->persist($picture54);
        
        $picture55 = new Picture();
        $picture55->setAlt('cerf_volant.png')
                 ->setUrl('png');
        $manager->persist($picture55);
        
        $picture56 = new Picture();
        $picture56->setAlt('cerf_volant_cover.png')
                 ->setUrl('png');
        $manager->persist($picture56);
        
        $picture57 = new Picture();
        $picture57->setAlt('cerf_volant_cover.png')
                 ->setUrl('png');
        $manager->persist($picture57);
        
        $picture58 = new Picture();
        $picture58->setAlt('cover_balade_sous.png')
                 ->setUrl('png');
        $manager->persist($picture58);
        
        $picture59 = new Picture();
        $picture59->setAlt('sortie_aventure_sous.png')
                  ->setUrl('png');
        $manager->persist($picture59);
        
        $picture60 = new Picture();
        $picture60->setAlt('sortie_aventure_sous.png')
                  ->setUrl('png');
        $manager->persist($picture60);
        
        $picture61 = new Picture();
        $picture61->setAlt('quad.png')
                 ->setUrl('png');
        $manager->persist($picture61);
        
        $picture62 = new Picture();
        $picture62->setAlt('quad_couv.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture62);
        
        $picture63 = new Picture();
        $picture63->setAlt('quad_couv.png')
                 ->setUrl('png');
        $manager->persist($picture63);
        
        $picture64 = new Picture();
        $picture64->setAlt('cerf_volant.png')
                 ->setUrl('png');
        $manager->persist($picture64);
        
        $picture65 = new Picture();
        $picture65->setAlt('cerf_volant.png')
                 ->setUrl('png');
        $manager->persist($picture65);
        
        $picture66 = new Picture();
        $picture66->setAlt('cerf_volant_cover.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture66);
        
        $picture67 = new Picture();
        $picture67->setAlt('cerf_volant_cover.png')
                 ->setUrl('png');
        $manager->persist($picture67);
        
        $picture68 = new Picture();
        $picture68->setAlt('cover_balade_sous.png')
                 ->setUrl('png');
        $manager->persist($picture68);
        
        $picture69 = new Picture();
        $picture69->setAlt('sortie_aventure_sous.png')
                  ->setUrl('png');
        $manager->persist($picture69);
        
        $picture70 = new Picture();
        $picture70->setAlt('sortie_aventure_sous.png')
                  ->setUrl('png');
        $manager->persist($picture70);
        
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
        $this->addReference('picture25',  $picture25);
        $this->addReference('picture26',  $picture26);
        $this->addReference('picture27',  $picture27);
        $this->addReference('picture28',  $picture28);
        $this->addReference('picture29',  $picture29);
        $this->addReference('picture30',  $picture30);
        $this->addReference('picture31',  $picture31);
        $this->addReference('picture32',  $picture32);
        $this->addReference('picture33',  $picture33);
        $this->addReference('picture34',  $picture34);
        $this->addReference('picture35',  $picture35);
        $this->addReference('picture36',  $picture36);
        $this->addReference('picture37',  $picture37);
        $this->addReference('picture38',  $picture38);
        $this->addReference('picture39',  $picture39);
        $this->addReference('picture40',  $picture40);
        $this->addReference('picture41',  $picture41);
        $this->addReference('picture42',  $picture42);
        $this->addReference('picture43',  $picture43);
        $this->addReference('picture44',  $picture44);
        $this->addReference('picture45',  $picture45);
        $this->addReference('picture46',  $picture46);
        $this->addReference('picture47',  $picture47);
        $this->addReference('picture48',  $picture48);
        $this->addReference('picture49',  $picture49);
        $this->addReference('picture50',  $picture50);
        $this->addReference('picture51',  $picture51);
        $this->addReference('picture52',  $picture52);
        $this->addReference('picture53',  $picture53);
        $this->addReference('picture54',  $picture54);
        $this->addReference('picture55',  $picture55);
        $this->addReference('picture56',  $picture56);
        $this->addReference('picture57',  $picture57);
        $this->addReference('picture58',  $picture58);
        $this->addReference('picture59',  $picture59);
        $this->addReference('picture60',  $picture60);
        $this->addReference('picture61',  $picture61);
        $this->addReference('picture62',  $picture62);
        $this->addReference('picture63',  $picture63);
        $this->addReference('picture64',  $picture64);
        $this->addReference('picture65',  $picture65);
        $this->addReference('picture66',  $picture66);
        $this->addReference('picture67',  $picture67);
        $this->addReference('picture68',  $picture68);
        $this->addReference('picture69',  $picture69);
        $this->addReference('picture70',  $picture70);
    }
    
    public function getOrder()
    {
        return 1; // l'ordre dans lequel les fichiers sont chargés
    }
}
