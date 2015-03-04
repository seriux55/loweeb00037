<?php

namespace Base\BledvoyageBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Base\BledvoyageBundle\Entity\Sortie;

class SortieData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $sortie1 = new Sortie();
        $sortie1->setUser($this->getReference('user1'));
        $sortie1->setCategorie($this->getReference('categorie1'));
        $sortie1->setTitre('Quad Aventure');
        $sortie1->setDescriptif("Encore une nouveauté en Algérie !! 
A partir du mois de février, chaque Weekend nous nous nous retrouverons à Djbel Chenoua, Tipaza, pour une randonnée en Quad ! D’une matinée ou d’une après-midi. 
Avec cette nouvelle activité, qui est un mélange de loisir plein air et d’aventure, vous prenderez les commandes d’une machine à sensation pour une aventure en Montagne. Nous partagerons ensemble ce moment de plaisir ! 
Un sac à dos, un bon sandwich gourmand, une grande bouteille d’eau, une paire de basket et une casquette et à nous l’aventure !
C’est parti ! 

Tarif normal : 3900 Dinas/personne.
Tarif étudiant : 2400 Dinars/personne.

Divers: 
Utilisation de son propre quad, le tarif est de 3900 Dinars/personne et le port du casque est obligatoire.");
        $sortie1->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Être majeur,
Avoir son permis de conduire,
Être en bonne santé,
Et aussi, pendant l'activité, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre.");
        $sortie1->setLocalisation('Tipaza');
        $sortie1->setTarif(3900);
        $sortie1->setMaxPersonne(5);
        $sortie1->setDateDebut(new \DateTime('2015-02-06 00:00:00'));
        $sortie1->setHeureDebut('9h00');
        $sortie1->setDateFin(new \DateTime('2015-02-28 00:00:00'));
        $sortie1->setHeureFin('17h00');
        $sortie1->setVideo('https://www.youtube.com/watch?v=igLzB-5FrHk');
        $sortie1->setPhoto1('quad.jpg');
        $sortie1->setPhoto2('quad.jpg');
        $sortie1->setPhoto3('quad_couv.jpg');
        $sortie1->setPhoto4('quad_couv.jpg');
        $sortie1->setValider('1');
        $sortie1->setCharge('');
        $sortie1->setAcces('');
        $sortie1->setEcheance('0');
        $sortie1->setTarifEcheance('0');
        $sortie1->setCommission('');
        $sortie1->setAnnuler('0');
        $sortie1->setTarifEtud('0');
        $sortie1->setPromoClient('0');
        $sortie1->setPromoPartenaire('0');
        $sortie1->setAstuce('1');
        $sortie1->setPub('1');
        $sortie1->setClose('0');
        $sortie1->setIp('127.0.0.1');
        $sortie1->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($sortie1);
        
        $sortie2 = new Sortie();
        $sortie2->setUser($this->getReference('user2'));
        $sortie2->setCategorie($this->getReference('categorie2'));
        $sortie2->setTitre('Dominez la bête volante');
        $sortie2->setDescriptif("Encore une nouveauté en Algérie, Nouvelle activité sensation, nouvelles aventure ! 
Des cerfs-volants géants, insolents et immaitrisables, vous attendent pour les calmer, chaque Week-end à la plage de Chenoua, Tipaza, le temps d’une matinée ou d’une après-midi, venez-vous confronter à .ces ailes géantes ! 
En compagnie de notre moniteur Mokhtar, qui nous fera le plaisir de découvrir les cerfs-volants géants ! Les sensations seront uniques, traction, traction et traction !
Un sac à dos, un bon sandwich gourmand, une grande bouteille d’eau, une paire de basket et une casquette et à nous l’aventure !
Dominez la bête !

Tarif normal : 2900 Dinas/personne.
Tarif étudiant : 2400 Dinars/personne.");
        $sortie2->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Être majeur,
Être en bonne santé.
Et aussi, pendant l'activité, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre.");
        $sortie2->setLocalisation('Tipaza');
        $sortie2->setTarif(3900);
        $sortie2->setMaxPersonne(5);
        $sortie2->setDateDebut(new \DateTime('2015-02-06 00:00:00'));
        $sortie2->setHeureDebut('9h00');
        $sortie2->setDateFin(new \DateTime('2015-02-28 00:00:00'));
        $sortie2->setHeureFin('17h00');
        $sortie2->setVideo('https://www.youtube.com/watch?v=igLzB-5FrHk');
        $sortie2->setPhoto1('cerf_volant.png');
        $sortie2->setPhoto2('cerf_volant.png');
        $sortie2->setPhoto3('cerf_volant_cover.png');
        $sortie2->setPhoto4('cerf_volant_cover.png');
        $sortie2->setValider('1');
        $sortie2->setCharge('');
        $sortie2->setAcces('');
        $sortie2->setEcheance('0');
        $sortie2->setTarifEcheance('0');
        $sortie2->setCommission('');
        $sortie2->setAnnuler('0');
        $sortie2->setTarifEtud('0');
        $sortie2->setPromoClient('0');
        $sortie2->setPromoPartenaire('0');
        $sortie2->setAstuce('1');
        $sortie2->setPub('1');
        $sortie2->setClose('0');
        $sortie2->setIp('127.0.0.1');
        $sortie2->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($sortie2);
        
        $sortie3 = new Sortie();
        $sortie3->setUser($this->getReference('user2'));
        $sortie3->setCategorie($this->getReference('categorie3'));
        $sortie3->setTitre('Plongée & Balade sous marine');
        $sortie3->setDescriptif("Chaque jour de 10h00 à 18h00, à l’heure où la qualité visuelle et des conditions de lumière seront optimales, nous nous retrouverons à Tipaza, pour une plongée sous-marine en bouteille.
Nous commencerons par une séance d’initiation sous-marine, suivie d’une balade sous l’eau d’environ 20 minutes … et découverte des différentes espèces sous-marines. Nous finirons par un débriefing global. 
Et pour finir, 
N’oubliez pas vos clefs USB pour récupérer vos photos & vidéos, toutes fraiches");
        $sortie3->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Être majeur,
Être en bonne santé.
Et aussi, pendant l'activité, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre sous l'eau.");
        $sortie3->setLocalisation('Tipaza');
        $sortie3->setTarif(3900);
        $sortie3->setMaxPersonne(5);
        $sortie3->setDateDebut(new \DateTime('2015-02-06 00:00:00'));
        $sortie3->setHeureDebut('9h00');
        $sortie3->setDateFin(new \DateTime('2015-02-28 00:00:00'));
        $sortie3->setHeureFin('17h00');
        $sortie3->setVideo('https://www.youtube.com/watch?v=igLzB-5FrHk');
        $sortie3->setPhoto1('cover_balade_sous.png');
        $sortie3->setPhoto2('sortie_aventure_sous.png');
        $sortie3->setPhoto3('sortie_aventure_sous.png');
        $sortie3->setPhoto4('sortie_sousmarine_balade_cover.png');
        $sortie3->setValider('1');
        $sortie3->setCharge('');
        $sortie3->setAcces('');
        $sortie3->setEcheance('0');
        $sortie3->setTarifEcheance('0');
        $sortie3->setCommission('');
        $sortie3->setAnnuler('0');
        $sortie3->setTarifEtud('0');
        $sortie3->setPromoClient('0');
        $sortie3->setPromoPartenaire('0');
        $sortie3->setAstuce('1');
        $sortie3->setPub('1');
        $sortie3->setClose('0');
        $sortie3->setIp('127.0.0.1');
        $sortie3->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($sortie3);
        
        $sortie4 = new Sortie();
        $sortie4->setUser($this->getReference('user2'));
        $sortie4->setCategorie($this->getReference('categorie4'));
        $sortie4->setTitre('Décollage immédiat');
        $sortie4->setDescriptif("Nouvelle activité sensation, nouvelles aventure ! 
Un vol libre en parapente ? Planer autours des terres de Bouira, chaque weekend, un souvenir inoubliable et garantie à prendre 
En compagnie de notre moniteur Aziz, que partagera sa passion et son expérience avec nous ! un moment pleine de liberté. Il nous fera le plaisir de découvrir la parapente. 
Un sac à dos, un bon sandwich gourmand, une grande bouteille d’eau, une paire de basket et une casquette et à nous l’aventure !
Décollez !

Tarif normal : 3900 Dinars/personne.
Tarif étudiant : 3800 Dinars/personne.");
        $sortie4->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Être majeur,
Être en bonne santé.
Et aussi, pendant l'activité, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre.");
        $sortie4->setLocalisation('Tipaza');
        $sortie4->setTarif(3900);
        $sortie4->setMaxPersonne(5);
        $sortie4->setDateDebut(new \DateTime('2015-02-06 00:00:00'));
        $sortie4->setHeureDebut('9h00');
        $sortie4->setDateFin(new \DateTime('2015-02-28 00:00:00'));
        $sortie4->setHeureFin('17h00');
        $sortie4->setVideo('https://www.youtube.com/watch?v=x2geTtXd_xE');
        $sortie4->setPhoto1('decolage.png');
        $sortie4->setPhoto2('decolage_cover.png');
        $sortie4->setPhoto3('decolage.png');
        $sortie4->setPhoto4('decolage_cover.png');
        $sortie4->setValider('1');
        $sortie4->setCharge('');
        $sortie4->setAcces('');
        $sortie4->setEcheance('0');
        $sortie4->setTarifEcheance('0');
        $sortie4->setCommission('');
        $sortie4->setAnnuler('0');
        $sortie4->setTarifEtud('0');
        $sortie4->setPromoClient('0');
        $sortie4->setPromoPartenaire('0');
        $sortie4->setAstuce('1');
        $sortie4->setPub('1');
        $sortie4->setClose('0');
        $sortie4->setIp('127.0.0.1');
        $sortie4->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($sortie4);
        
        $sortie5 = new Sortie();
        $sortie5->setUser($this->getReference('user2'));
        $sortie5->setCategorie($this->getReference('categorie5'));
        $sortie5->setTitre('Randonnée VTT');
        $sortie5->setDescriptif("La pleine de Chenoua et sa montagne qui sont situées à la sortie de la ville de Tipaza, vous accueillent pour une randonnée VTT aventure. 
La sortie seffectue compagnie de notre moniteur Islem, qui partagera sa passion et son expérience avec nous ! 
Un moment plein de liberté et sensation. 2 Circuit VTT sont proposés : 
- Circuit plaisir & aventure: au relief très doux à la portée de tous et de toutes ! Environ 1h30 de nature, despaces vert et de balade en VTT. Idéal pour les débutants. 
- Circuit challenge & endurance : un parcours à la hauteur des exigences des utilisateurs confirmés. 
Un sac à dos, un bon sandwich gourmand, une grande bouteille deau, une paire de basket et à nous laventure ! 
Les vélos ainsi que les casques seront fournis par la maison, avec possibilité de ramener avec votre vélo & casque. 

Tarif : 
Tarif normal : 2900 Dinars/personne. 
Tarif étudiant : 2400 Dinars/personne.");
        $sortie5->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Être majeur,
Être en bonne santé.
Et aussi, pendant l'activité, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre");
        $sortie5->setLocalisation('Tipaza');
        $sortie5->setTarif(3900);
        $sortie5->setMaxPersonne(5);
        $sortie5->setDateDebut(new \DateTime('2015-02-06 00:00:00'));
        $sortie5->setHeureDebut('9h00');
        $sortie5->setDateFin(new \DateTime('2015-02-28 00:00:00'));
        $sortie5->setHeureFin('17h00');
        $sortie5->setVideo('https://www.youtube.com/watch?v=6FV3QZLkq5A');
        $sortie5->setPhoto1('ico_vtt.png');
        $sortie5->setPhoto2('randonnee_vtt.png');
        $sortie5->setPhoto3('randonee_vtt_cover.png');
        $sortie5->setPhoto4('randonee_vtt_cover.png');
        $sortie5->setValider('1');
        $sortie5->setCharge('');
        $sortie5->setAcces('');
        $sortie5->setEcheance('0');
        $sortie5->setTarifEcheance('0');
        $sortie5->setCommission('');
        $sortie5->setAnnuler('0');
        $sortie5->setTarifEtud('0');
        $sortie5->setPromoClient('0');
        $sortie5->setPromoPartenaire('0');
        $sortie5->setAstuce('1');
        $sortie5->setPub('1');
        $sortie5->setClose('1');
        $sortie5->setIp('127.0.0.1');
        $sortie5->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($sortie5);
        
        $sortie6 = new Sortie();
        $sortie6->setUser($this->getReference('user1'));
        $sortie6->setCategorie($this->getReference('categorie6'));
        $sortie6->setTitre('Formation & Stage Parapente');
        $sortie6->setDescriptif("Volez par vous-même ! C’est ce que Jaafar vous propose.
Une formation de 7 jours à temps plein ou partiel, à votre rythme, pour une initiation à l’activité de « Parapente » et acquérir les principes de vols élémentaires, dans plusieurs villes en Algérie : Oran, Blida, Tipaza, Alger, Bouira, Setif,… Devenez autonome en Parapente‎ !

Programme :
Plus de 56 heures de cours théoriques et de séances pratiques, réparties à votre rythme et en compagnie de moniteurs diplômés et expérimentés.
Matériel et équipements à votre disposition et adaptés à tous les niveaux. De nombreux vols par jour. Prise en main, décollage, pilotage, atterrissage, météorologie, etc.
À la fin de cette formation, Le moniteur vous délivrera une licence fédérale, une attestation de formation « Pilote Autonome », une assurance RC aérienne d’une année. ET vous serez capable de voler seul !");
        $sortie6->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Être en bonne santé,
Les ressortissants étrangers doivent faire l'objet d'une déclaration de présence auprès des autorités locales : Police nationale, gendarmerie nationale, dans la région concernée,
Présentez un certificat médical de non contre-indication à la pratique du parapente,
Accessible à partir de 14 ans sans prérequis avec autorisation parentale,

Pièces à fournir pour la formation :
Un certificat médical de non contre-indication à la pratique du parapente,
Un acte de naissance,
4 photos d’identité,
Copie de la carte nationale.
Et aussi, pendant l'activité, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre,

A prévoir
Nous vous conseillons une tenue vestimentaire décontractée, mais adaptée à votre confort et votre sécurité.");
        $sortie6->setLocalisation('Oran, Blida, Tipaza, Alger, Bouira, Setif ');
        $sortie6->setTarif(49000);
        $sortie6->setMaxPersonne(10);
        $sortie6->setDateDebut(new \DateTime('2015-02-06 00:00:00'));
        $sortie6->setHeureDebut('9h00');
        $sortie6->setDateFin(new \DateTime('2016-02-28 00:00:00'));
        $sortie6->setHeureFin('17h00');
        $sortie6->setVideo('https://www.youtube.com/watch?v=x2geTtXd_xE');
        $sortie6->setPhoto1('forma_1.png');
        $sortie6->setPhoto2('forma_1.png');
        $sortie6->setPhoto3('format_2.png');
        $sortie6->setPhoto4('format_2.png');
        $sortie6->setValider('1');
        $sortie6->setCharge('');
        $sortie6->setAcces('');
        $sortie6->setEcheance('0');
        $sortie6->setTarifEcheance('0');
        $sortie6->setCommission('');
        $sortie6->setAnnuler('0');
        $sortie6->setTarifEtud('0');
        $sortie6->setPromoClient('0');
        $sortie6->setPromoPartenaire('0');
        $sortie6->setAstuce('1');
        $sortie6->setPub('1');
        $sortie6->setClose('0');
        $sortie6->setIp('127.0.0.1');
        $sortie6->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($sortie6);
        
        $manager->flush();
        
        $this->addReference('sortie1',  $sortie1);
        $this->addReference('sortie2',  $sortie2);
        $this->addReference('sortie3',  $sortie3);
        $this->addReference('sortie4',  $sortie4);
        $this->addReference('sortie5',  $sortie5);
        $this->addReference('sortie6',  $sortie6);
    }
    
    public function getOrder()
    {
        return 3; // l'ordre dans lequel les fichiers sont chargés
    }
}
