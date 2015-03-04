<?php

namespace Base\BledvoyageBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Base\BledvoyageBundle\Entity\Commande;

class CommandeData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $commande1 = new Commande();
        $commande1->setUser($this->getReference('user1'));
        $commande1->setCategorieTicket($this->getReference('ticket1'));
        $commande1->setPaiement($this->getReference('paiement1'));
        $commande1->setNombre("1");
        $commande1->setTextPerso("");
        $commande1->setNote("");
        $commande1->setConfirmer("0");
        $commande1->setFacture("");
        $commande1->setAcompte("");
        $commande1->setDateAchat(new \Datetime('2015-03-01 12:00:00'));
        $commande1->setEntreprise("");
        $commande1->setAdresse("");
        $commande1->setModePaiement("");
        $commande1->setDateRdv(new \Datetime('2015-03-01 12:00:00'));
        $commande1->setHeureRdv("");
        $commande1->setLieuRdv("");
        $commande1->setIp("127.0.0.1");
        $commande1->setDateTime(new \Datetime('2015-03-01 12:00:00'));
        $manager->persist($commande1);
        
        $commande2 = new Commande();
        $commande2->setUser($this->getReference('user2'));
        $commande2->setCategorieTicket($this->getReference('ticket1'));
        $commande2->setPaiement($this->getReference('paiement2'));
        $commande2->setNombre("2");
        $commande2->setTextPerso("");
        $commande2->setNote("");
        $commande2->setConfirmer("1");
        $commande2->setFacture("1");
        $commande2->setAcompte("");
        $commande2->setDateAchat(new \Datetime('2015-03-01 12:00:00'));
        $commande2->setEntreprise("");
        $commande2->setAdresse("");
        $commande2->setModePaiement("");
        $commande2->setDateRdv(new \Datetime('2015-03-01 12:00:00'));
        $commande2->setHeureRdv("");
        $commande2->setLieuRdv("");
        $commande2->setIp("127.0.0.1");
        $commande2->setDateTime(new \Datetime('2015-03-01 12:00:00'));
        $manager->persist($commande2);
        
        $commande3 = new Commande();
        $commande3->setUser($this->getReference('user3'));
        $commande3->setCategorieTicket($this->getReference('ticket1'));
        $commande3->setPaiement($this->getReference('paiement3'));
        $commande3->setNombre("1");
        $commande3->setTextPerso("");
        $commande3->setNote("");
        $commande3->setConfirmer("0");
        $commande3->setFacture("");
        $commande3->setAcompte("");
        $commande3->setDateAchat(new \Datetime('2015-03-01 12:00:00'));
        $commande3->setEntreprise("");
        $commande3->setAdresse("");
        $commande3->setModePaiement("");
        $commande3->setDateRdv(new \Datetime('2015-03-01 12:00:00'));
        $commande3->setHeureRdv("");
        $commande3->setLieuRdv("");
        $commande3->setIp("127.0.0.1");
        $commande3->setDateTime(new \Datetime('2015-03-01 12:00:00'));
        $manager->persist($commande3);
        
        $commande4 = new Commande();
        $commande4->setUser($this->getReference('user4'));
        $commande4->setCategorieTicket($this->getReference('ticket1'));
        $commande4->setPaiement($this->getReference('paiement4'));
        $commande4->setNombre("1");
        $commande4->setTextPerso("");
        $commande4->setNote("");
        $commande4->setConfirmer("0");
        $commande4->setFacture("");
        $commande4->setAcompte("");
        $commande4->setDateAchat(new \Datetime('2015-03-01 12:00:00'));
        $commande4->setEntreprise("");
        $commande4->setAdresse("");
        $commande4->setModePaiement("");
        $commande4->setDateRdv(new \Datetime('2015-03-01 12:00:00'));
        $commande4->setHeureRdv("");
        $commande4->setLieuRdv("");
        $commande4->setIp("127.0.0.1");
        $commande4->setDateTime(new \Datetime('2015-03-01 12:00:00'));
        $manager->persist($commande4);
        
        $commande5 = new Commande();
        $commande5->setUser($this->getReference('user5'));
        $commande5->setCategorieTicket($this->getReference('ticket1'));
        $commande5->setPaiement($this->getReference('paiement1'));
        $commande5->setNombre("1");
        $commande5->setTextPerso("");
        $commande5->setNote("");
        $commande5->setConfirmer("0");
        $commande5->setFacture("");
        $commande5->setAcompte("");
        $commande5->setDateAchat(new \Datetime('2015-03-01 12:00:00'));
        $commande5->setEntreprise("");
        $commande5->setAdresse("");
        $commande5->setModePaiement("");
        $commande5->setDateRdv(new \Datetime('2015-03-01 12:00:00'));
        $commande5->setHeureRdv("");
        $commande5->setLieuRdv("");
        $commande5->setIp("127.0.0.1");
        $commande5->setDateTime(new \Datetime('2015-03-01 12:00:00'));
        $manager->persist($commande5);
        
        $commande6 = new Commande();
        $commande6->setUser($this->getReference('user6'));
        $commande6->setCategorieTicket($this->getReference('ticket1'));
        $commande6->setPaiement($this->getReference('paiement2'));
        $commande6->setNombre("1");
        $commande6->setTextPerso("");
        $commande6->setNote("");
        $commande6->setConfirmer("0");
        $commande6->setFacture("");
        $commande6->setAcompte("");
        $commande6->setDateAchat(new \Datetime('2015-03-01 12:00:00'));
        $commande6->setEntreprise("");
        $commande6->setAdresse("");
        $commande6->setModePaiement("");
        $commande6->setDateRdv(new \Datetime('2015-03-01 12:00:00'));
        $commande6->setHeureRdv("");
        $commande6->setLieuRdv("");
        $commande6->setIp("127.0.0.1");
        $commande6->setDateTime(new \Datetime('2015-03-01 12:00:00'));
        $manager->persist($commande6);
        
        $commande7 = new Commande();
        $commande7->setUser($this->getReference('user7'));
        $commande7->setCategorieTicket($this->getReference('ticket1'));
        $commande7->setPaiement($this->getReference('paiement3'));
        $commande7->setNombre("1");
        $commande7->setTextPerso("");
        $commande7->setNote("");
        $commande7->setConfirmer("0");
        $commande7->setFacture("");
        $commande7->setAcompte("");
        $commande7->setDateAchat(new \Datetime('2015-03-01 12:00:00'));
        $commande7->setEntreprise("");
        $commande7->setAdresse("");
        $commande7->setModePaiement("");
        $commande7->setDateRdv(new \Datetime('2015-03-01 12:00:00'));
        $commande7->setHeureRdv("");
        $commande7->setLieuRdv("");
        $commande7->setIp("127.0.0.1");
        $commande7->setDateTime(new \Datetime('2015-03-01 12:00:00'));
        $manager->persist($commande7);
        
        $commande8 = new Commande();
        $commande8->setUser($this->getReference('user8'));
        $commande8->setCategorieTicket($this->getReference('ticket2'));
        $commande8->setPaiement($this->getReference('paiement4'));
        $commande8->setNombre("1");
        $commande8->setTextPerso("");
        $commande8->setNote("");
        $commande8->setConfirmer("0");
        $commande8->setFacture("");
        $commande8->setAcompte("");
        $commande8->setDateAchat(new \Datetime('2015-03-01 12:00:00'));
        $commande8->setEntreprise("");
        $commande8->setAdresse("");
        $commande8->setModePaiement("");
        $commande8->setDateRdv(new \Datetime('2015-03-01 12:00:00'));
        $commande8->setHeureRdv("");
        $commande8->setLieuRdv("");
        $commande8->setIp("127.0.0.1");
        $commande8->setDateTime(new \Datetime('2015-03-01 12:00:00'));
        $manager->persist($commande8);
        
        $commande9 = new Commande();
        $commande9->setUser($this->getReference('user9'));
        $commande9->setCategorieTicket($this->getReference('ticket2'));
        $commande9->setPaiement($this->getReference('paiement1'));
        $commande9->setNombre("1");
        $commande9->setTextPerso("");
        $commande9->setNote("");
        $commande9->setConfirmer("0");
        $commande9->setFacture("");
        $commande9->setAcompte("");
        $commande9->setDateAchat(new \Datetime('2015-03-01 12:00:00'));
        $commande9->setEntreprise("");
        $commande9->setAdresse("");
        $commande9->setModePaiement("");
        $commande9->setDateRdv(new \Datetime('2015-03-01 12:00:00'));
        $commande9->setHeureRdv("");
        $commande9->setLieuRdv("");
        $commande9->setIp("127.0.0.1");
        $commande9->setDateTime(new \Datetime('2015-03-01 12:00:00'));
        $manager->persist($commande9);
        
        $commande10 = new Commande();
        $commande10->setUser($this->getReference('user10'));
        $commande10->setCategorieTicket($this->getReference('ticket2'));
        $commande10->setPaiement($this->getReference('paiement1'));
        $commande10->setNombre("1");
        $commande10->setTextPerso("");
        $commande10->setNote("");
        $commande10->setConfirmer("1");
        $commande10->setFacture("");
        $commande10->setAcompte("");
        $commande10->setDateAchat(new \Datetime('2015-03-01 12:00:00'));
        $commande10->setEntreprise("");
        $commande10->setAdresse("");
        $commande10->setModePaiement("");
        $commande10->setDateRdv(new \Datetime('2015-03-01 12:00:00'));
        $commande10->setHeureRdv("");
        $commande10->setLieuRdv("");
        $commande10->setIp("127.0.0.1");
        $commande10->setDateTime(new \Datetime('2015-03-01 12:00:00'));
        $manager->persist($commande10);
        
        $manager->flush();
        
        $this->addReference('commande1',  $commande1);
        $this->addReference('commande2',  $commande2);
        $this->addReference('commande3',  $commande3);
        $this->addReference('commande4',  $commande4);
        $this->addReference('commande5',  $commande5);
        $this->addReference('commande6',  $commande6);
        $this->addReference('commande7',  $commande7);
        $this->addReference('commande8',  $commande8);
        $this->addReference('commande9',  $commande9);
        $this->addReference('commande10', $commande10);
        
    }
    
    public function getOrder()
    {
        return 9; // l'ordre dans lequel les fichiers sont chargés
    }
}
