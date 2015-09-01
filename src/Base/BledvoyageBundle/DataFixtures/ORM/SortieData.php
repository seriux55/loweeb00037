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
        $sortie1->setUser($this->getReference('user6'));
        $sortie1->setCategorie($this->getReference('categorie1'));
        $sortie1->setCategorieSortie($this->getReference('categorie_sortie1'));
        $sortie1->setPicture1($this->getReference('picture1'));
        $sortie1->setPicture2($this->getReference('picture2'));
        $sortie1->setPicture3($this->getReference('picture3'));
        $sortie1->setPicture4($this->getReference('picture4'));
        $sortie1->setTitre('Week end « détente »');
        $sortie1->setDescriptif("Jeudi, Vendredi, Samedi. 3 jours et 2 nuits.

Pour les amoureux de la nature, les moniteurs de la région se sont unis pour vous proposer un généreux « week end détente », idéal pour fuir le train-train quotidien et son stress, détente, balade, et fraicheur pour refaire le plein d’énergie.

2 nuits et 3 jours de détente : Jeudi, Vendredi, Samedi. Ou, Vendredi, Samedi, Dimanche.

Tout le week end sur l’eau, sous l’eau, dans les airs, sur le sable, et sur terre ! Programme ci-dessous.
Un Week end tout compris pour s’offrir son petit moment de plaisir : plongée et aventure sous marine, sortie en bateau, cerf volant, détente en plage, loisirs aquatiques et bien sûr : le barbecue géant et l’ambiance qui va avec. Mesdames, Mesdemoiselles, Messieurs, marhba bikoum !
Ce qu’il ne faut pas oublier :
Votre crème solaire,
Votre maillot de bain,
Lunette de Soleil et casquette si possible,
Votre pièce d’identité pour les démarches d’hébergement.


Au programme :

JOUR 1 / Accueil & Détente à la plage.
Accueil, installation et présentation, les pieds dans l’eau. Rencontre des moniteurs.
Balade en plage, Beach volley, Beach soccer, Quad en plage, Cerf-volant de traction.
Barbecure géant, en plein air.
Thé & café, feu de camp à la plage et ambiance musicale 


JOUR 2 : Détente au large.
Grace matinée tolérée.
Plongée avec le moniteur Amar, 
Sortie en Mer, découverte du port, des côtes et des corniches de Tipaza.
Pause baignade en grotte et loisirs aquatiques.
Quad Aventure, Tir a l'arc, Randonnée VTT
Détente en plage, Beach-volley, Beach Soccer, cerf-volant de traction, bouée tractée.
Ftor géant en plein air, feux de camp à la plage, ambiance musicale.

Jour 3 / Les « Au revoir »
Grace matinée tolérée,
Quad en montagne,
Départ.");
        $sortie1->setConditions("S'inscrire l'aide du formulaire de réservation pour traiter votre inscription rapidement,
Versement d'un acompte d'au moins 30% (Les annulations de dernière minute, privent d'autres personnes de participer),
Etre Majeur,
Etre en bonne santé,
Les ressortissants étrangers doivent faire l'objet d'une déclaration de présence auprès des autorités locales : Police nationale, gendarmerie nationale, dans la région concernée,
Les activités seront attribuées en fonction des conditions climatiques,
Et pour finir, pendant les activités, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre.");
        $sortie1->setLocalisation('Tipaza');
        $sortie1->setTarif(14900);
        $sortie1->setMaxPersonne(15);
        $sortie1->setDateDebut(new \DateTime('2014-10-01 00:00:00'));
        $sortie1->setHeureDebut('9h00');
        $sortie1->setDateFin(new \DateTime('2016-08-31 00:00:00'));
        $sortie1->setHeureFin('19h00');
        $sortie1->setPlanAcces("À quelque mètres de l'entrée de Chenoua Plage, prendre la première sortie sur la gauche et s'arrêter au bout de 400 mètres. Le moniteur vous attendra à cet endroit précis.");
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
        $sortie1->setAstuce('0');
        $sortie1->setPub('1');
        $sortie1->setClose('0');
        $sortie1->setIp('127.0.0.1');
        $sortie1->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($sortie1);
        
        $sortie2 = new Sortie();
        $sortie2->setUser($this->getReference('user15'));
        $sortie2->setCategorie($this->getReference('categorie2'));
        $sortie2->setCategorieSortie($this->getReference('categorie_sortie2'));
        $sortie2->setPicture1($this->getReference('picture5'));
        $sortie2->setPicture2($this->getReference('picture6'));
        $sortie2->setPicture3($this->getReference('picture7'));
        $sortie2->setPicture4($this->getReference('picture8'));
        $sortie2->setTitre('Quad Aventure');
        $sortie2->setDescriptif("Encore une nouveauté en Algérie !! 
A partir du mois de février, chaque Weekend nous nous nous retrouverons à Djbel Chenoua, Tipaza, pour une randonnée en Quad ! D’une matinée ou d’une après-midi. 
Avec cette nouvelle activité, qui est un mélange de loisir plein air et d’aventure, vous prenderez les commandes d’une machine à sensation pour une aventure en Montagne. Nous partagerons ensemble ce moment de plaisir ! 
Un sac à dos, un bon sandwich gourmand, une grande bouteille d’eau, une paire de basket et une casquette et à nous l’aventure !
C’est parti ! 

Tarif normal : 3900 Dinas/personne.
Tarif étudiant : 2400 Dinars/personne.

Divers: 
Utilisation de son propre quad, le tarif est de 3900 Dinars/personne et le port du casque est obligatoire.");
        $sortie2->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Être majeur,
Avoir son permis de conduire,
Être en bonne santé,
Et aussi, pendant l'activité, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre.");
        $sortie2->setLocalisation('Tipaza');
        $sortie2->setTarif(3900);
        $sortie2->setMaxPersonne(5);
        $sortie2->setDateDebut(new \DateTime('2015-02-06 00:00:00'));
        $sortie2->setHeureDebut('9h00');
        $sortie2->setDateFin(new \DateTime('2015-02-28 00:00:00'));
        $sortie2->setHeureFin('19h00');
        $sortie2->setPlanAcces("À quelque mètres de l'entrée de Chenoua Plage, prendre la première sortie sur la gauche et s'arrêter au bout de 400 mètres. Le moniteur vous attendra à cet endroit précis.");
        $sortie2->setVideo('https://www.youtube.com/watch?v=yGGX_nE71Ko');
        $sortie2->setPhoto1('quad.jpg');
        $sortie2->setPhoto2('quad.jpg');
        $sortie2->setPhoto3('quad_couv.jpg');
        $sortie2->setPhoto4('quad_couv.jpg');
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
        $sortie3->setUser($this->getReference('user9'));
        $sortie3->setCategorie($this->getReference('categorie2'));
        $sortie3->setCategorieSortie($this->getReference('categorie_sortie3'));
        $sortie3->setPicture1($this->getReference('picture9'));
        $sortie3->setPicture2($this->getReference('picture10'));
        $sortie3->setPicture3($this->getReference('picture11'));
        $sortie3->setPicture4($this->getReference('picture12'));
        $sortie3->setTitre('Randonnée en Montagne & Challenge de « Tir à l\'arc »');
        $sortie3->setDescriptif("Unique en Algérie, une randonnée à Djbel Chenoua, Tipaza, balade et découverte de la faune & flore de la région, suivie d’un challenge de « Tir à l’arc » entre plusieurs équipes, ceux qui récolteront le maximum de points seront élues « meilleurs titreurs à l’arc ». 
Vous serez en compagne de Slimane, un aventurier dans l’âme, passionné de nature et medecin de profession. Il sera ravi de partager sa passion avec vous, le temps d’un après-midi ! 
Chaque Vendredi et Samedi, de 15h30 à 18h30, nous nous retrouverons à Djbel Chenoua,Tipaza. Pour passer une agréable après-midi Nature & Aventure. 

Tarif : 2900 Dinars/personne.
et 2400 Dinars/personne sur présentation de la carte d'étudiant.");
        $sortie3->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Être majeur,
Être en bonne santé,
Les ressortissants étrangers doivent faire l'objet d'une déclaration de présence auprès des autorités locales : Police nationale, gendarmerie nationale, dans la région concernée,
Et aussi, pendant l'activité, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre.");
        $sortie3->setLocalisation('Tipaza');
        $sortie3->setTarif(2900);
        $sortie3->setMaxPersonne(20);
        $sortie3->setDateDebut(new \DateTime('2014-10-01 00:00:00'));
        $sortie3->setHeureDebut('9h00');
        $sortie3->setDateFin(new \DateTime('2016-08-31 00:00:00'));
        $sortie3->setHeureFin('19h00');
        $sortie3->setPlanAcces("À quelque mètres de l'entrée de Chenoua Plage, prendre la première sortie sur la gauche et s'arrêter au bout de 400 mètres. Le moniteur vous attendra à cet endroit précis.");
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
        $sortie4->setUser($this->getReference('user9'));
        $sortie4->setCategorie($this->getReference('categorie2'));
        $sortie4->setCategorieSortie($this->getReference('categorie_sortie4'));
        $sortie4->setPicture1($this->getReference('picture13'));
        $sortie4->setPicture2($this->getReference('picture14'));
        $sortie4->setPicture3($this->getReference('picture15'));
        $sortie4->setPicture4($this->getReference('picture16'));
        $sortie4->setTitre('Randonnée fraicheur en montagne');
        $sortie4->setDescriptif("Chaque week-end, mes poumons et mon esprit respirent en Montagne. 
Une randonnée matinale en Montagne vous attend chaque vendredi et Samedi, nous nous retrouverons à 6h00 du matin à Djbel Chenoua, pour une balade en montagne, en compagnie de Slimane, médecin fédérale de profession et passionné de montagne & d’aventure. 
Il sera ravi de partager avec vous ces connaissances (Faune, Flore, patrimoine,…) et ce moment magique, nous partirons en exploration jusqu’à 14h00. 
Un sac à dos, un bon sandwich gourmand, une grande bouteille d’eau, une paire de basket et une casquette et à nous l’aventure ! 
Chaque Jeudi, vendredi et Samedi de 06h00 à 14h00. 
Tarif normal : 2900 Dinas/personne.
Tarif étudiant : 2400 Dinars/personne.");
        $sortie4->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Être majeur,
Être en bonne santé,
Les ressortissants étrangers doivent faire l'objet d'une déclaration de présence auprès des autorités locales : Police nationale, gendarmerie nationale, dans la région concernée,
Et aussi, pendant l'activité, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre.");
        $sortie4->setLocalisation('Tipaza');
        $sortie4->setTarif(2900);
        $sortie4->setMaxPersonne(20);
        $sortie4->setDateDebut(new \DateTime('2014-10-01 00:00:00'));
        $sortie4->setHeureDebut('9h00');
        $sortie4->setDateFin(new \DateTime('2016-08-31 00:00:00'));
        $sortie4->setHeureFin('19h00');
        $sortie4->setPlanAcces("À quelque mètres de l'entrée de Chenoua Plage, prendre la première sortie sur la gauche et s'arrêter au bout de 400 mètres. Le moniteur vous attendra à cet endroit précis.");
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
        $sortie5->setUser($this->getReference('user9'));
        $sortie5->setCategorie($this->getReference('categorie2'));
        $sortie5->setCategorieSortie($this->getReference('categorie_sortie5'));
        $sortie5->setPicture1($this->getReference('picture17'));
        $sortie5->setPicture2($this->getReference('picture18'));
        $sortie5->setPicture3($this->getReference('picture19'));
        $sortie5->setPicture4($this->getReference('picture20'));
        $sortie5->setTitre('Aventure d\'orientation et jeux de pistes montagne');
        $sortie5->setDescriptif("Encore une nouveauté en Algérie, Nouvelle activité, nouvelles aventure ! 
Apprendre à lire une carte, à utiliser une boussole ou à suivre un itinéraire balisé tout en s’amusant, voici le principe de ce jeu d’orientation créé spécialement pour les amoureux de la nature & montagne. 

En compagnie de notre moniteur Sliman, qui nous équipera de boussoles, cartes, jumelles, talkies-walkies, … et avec bon sens de l’observation, nous partagerons ensemble ce moment de plaisir ! 
Un sac à dos, un bon sandwich gourmand, une grande bouteille d’eau, une paire de basket et une casquette et à nous l’aventure !

Saurez-vous relever le défi ?

C’est parti ! 


Tarif normal : 2900 Dinas/personne.
Tarif étudiant : 2400 Dinars/personne.");
        $sortie5->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Être majeur,
Être en bonne santé,
Les ressortissants étrangers doivent faire l'objet d'une déclaration de présence auprès des autorités locales : Police nationale, gendarmerie nationale, dans la région concernée,
Et aussi, pendant l'activité, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre.");
        $sortie5->setLocalisation('Tipaza');
        $sortie5->setTarif(2900);
        $sortie5->setMaxPersonne(22);
        $sortie5->setDateDebut(new \DateTime('2014-10-01 00:00:00'));
        $sortie5->setHeureDebut('9h00');
        $sortie5->setDateFin(new \DateTime('2016-08-31 00:00:00'));
        $sortie5->setHeureFin('19h00');
        $sortie5->setPlanAcces("À quelque mètres de l'entrée de Chenoua Plage, prendre la première sortie sur la gauche et s'arrêter au bout de 400 mètres. Le moniteur vous attendra à cet endroit précis.");
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
        $sortie5->setClose('0');
        $sortie5->setIp('127.0.0.1');
        $sortie5->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($sortie5);
        
        $sortie6 = new Sortie();
        $sortie6->setUser($this->getReference('user9'));
        $sortie6->setCategorie($this->getReference('categorie2'));
        $sortie6->setCategorieSortie($this->getReference('categorie_sortie6'));
        $sortie6->setPicture1($this->getReference('picture21'));
        $sortie6->setPicture2($this->getReference('picture22'));
        $sortie6->setPicture3($this->getReference('picture23'));
        $sortie6->setPicture4($this->getReference('picture24'));
        $sortie6->setTitre('Chasse aux trésors grandeur nature');
        $sortie6->setDescriptif("Unique en Algérie, Chaque Week-end nous nous retrouverons (très nombreuses et nombreux), à Djbel Chenoua, Tipaza, pour participer à une chasse au trésor grandeur nature, le temps d’une matinée ou d’une après-midi. 
Avec cette nouvelle activité, qui est un mélange de loisir plein air et d’aventure, plusieurs équipes Auront à chercher et localiser plusieurs caches dans différents parcours 
En compagnie du notre moniteur Sliman, qui nous équipera de boussoles, cartes, jumelles, talkies-walkies, … et avec bon sens de l’observation, nous partagerons ensemble ce moment de plaisir ! 
Un sac à dos, un bon sandwich gourmand, une grande bouteille d’eau, une paire de basket et une casquette et à nous l’aventure !
C’est parti ! 


Tarif normal : 2900 Dinas/personne.
Tarif étudiant : 2400 Dinars/personne.");
        $sortie6->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Être majeur,
Être en bonne santé,
Les ressortissants étrangers doivent faire l'objet d'une déclaration de présence auprès des autorités locales : Police nationale, gendarmerie nationale, dans la région concernée,
Et aussi, pendant l'activité, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre.");
        $sortie6->setLocalisation('Tipaza');
        $sortie6->setTarif(2900);
        $sortie6->setMaxPersonne(24);
        $sortie6->setDateDebut(new \DateTime('2014-10-01 00:00:00'));
        $sortie6->setHeureDebut('9h00');
        $sortie6->setDateFin(new \DateTime('2016-08-31 00:00:00'));
        $sortie6->setHeureFin('19h00');
        $sortie6->setPlanAcces("À quelque mètres de l'entrée de Chenoua Plage, prendre la première sortie sur la gauche et s'arrêter au bout de 400 mètres. Le moniteur vous attendra à cet endroit précis.");
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
        
        $sortie7 = new Sortie();
        $sortie7->setUser($this->getReference('user10'));
        $sortie7->setCategorie($this->getReference('categorie4'));
        $sortie7->setCategorieSortie($this->getReference('categorie_sortie7'));
        $sortie7->setPicture1($this->getReference('picture25'));
        $sortie7->setPicture2($this->getReference('picture26'));
        $sortie7->setPicture3($this->getReference('picture27'));
        $sortie7->setPicture4($this->getReference('picture28'));
        $sortie7->setTitre('Plongée & Balade sous marine');
        $sortie7->setDescriptif("Chaque jour de 10h00 à 18h00, à l’heure où la qualité visuelle et des conditions de lumière seront optimales, nous nous retrouverons à Tipaza, pour une plongée sous-marine en bouteille.
Nous commencerons par une séance d’initiation sous-marine, suivie d’une balade sous l’eau d’environ 20 minutes … et découverte des différentes espèces sous-marines. Nous finirons par un débriefing global. 
Et pour finir, 
N’oubliez pas vos clefs USB pour récupérer vos photos & vidéos, toutes fraiches");
        $sortie7->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Être majeur,
Être en bonne santé.
Et aussi, pendant l'activité, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre sous l'eau.");
        $sortie7->setLocalisation('Tipaza');
        $sortie7->setTarif(2900);
        $sortie7->setMaxPersonne(10);
        $sortie7->setDateDebut(new \DateTime('2015-02-06 00:00:00'));
        $sortie7->setHeureDebut('9h00');
        $sortie7->setDateFin(new \DateTime('2015-02-28 00:00:00'));
        $sortie7->setHeureFin('19h00');
        $sortie7->setPlanAcces("À quelque mètres de l'entrée de Chenoua Plage, prendre la première sortie sur la gauche et s'arrêter au bout de 400 mètres. Le moniteur vous attendra à cet endroit précis.");
        $sortie7->setPhoto1('cover_balade_sous.png');
        $sortie7->setPhoto2('sortie_aventure_sous.png');
        $sortie7->setPhoto3('sortie_aventure_sous.png');
        $sortie7->setPhoto4('sortie_sousmarine_balade_cover.png');
        $sortie7->setValider('1');
        $sortie7->setCharge('');
        $sortie7->setAcces('');
        $sortie7->setEcheance('0');
        $sortie7->setTarifEcheance('0');
        $sortie7->setCommission('');
        $sortie7->setAnnuler('0');
        $sortie7->setTarifEtud('0');
        $sortie7->setPromoClient('0');
        $sortie7->setPromoPartenaire('0');
        $sortie7->setAstuce('1');
        $sortie7->setPub('1');
        $sortie7->setClose('0');
        $sortie7->setIp('127.0.0.1');
        $sortie7->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($sortie7);
        
        $sortie8 = new Sortie();
        $sortie8->setUser($this->getReference('user5'));
        $sortie8->setCategorie($this->getReference('categorie4'));
        $sortie8->setCategorieSortie($this->getReference('categorie_sortie8'));
        $sortie8->setPicture1($this->getReference('picture29'));
        $sortie8->setPicture2($this->getReference('picture30'));
        $sortie8->setPicture3($this->getReference('picture31'));
        $sortie8->setPicture4($this->getReference('picture32'));
        $sortie8->setTitre('Excursions en bateau et loisirs aquatiques');
        $sortie8->setDescriptif("Une sortie en Mer, chaque Vendredi, et Samedi, 2h30 de détente.

Êtes-vous attiré par l’idée d’une croisière le long de la baie ?
Découvrez une autre facette de Tipaza, en hors-bord, le vent dans les cheveux,... 
Des pauses en large, Dans les grottes naturelles,
Initiation à la pèche au large. 


Tarif normal : 3900 Dinars/personne. 
Tarif étudiant : 3400 Dinars/personne.");
        $sortie8->setConditions("- S'inscrire à l'aide du formulaire de réservation,
- Être en bonne santé,
- Être majeur,
- Savoir nager,
- Les ressortissants étrangers doivent faire l'objet d'une déclaration de présence auprès des autorités locales : Police nationale, gendarmerie nationale, dans la région concernée,
Et pour finir, pendant les activités, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre sous l'eau.");
        $sortie8->setLocalisation('Tipaza');
        $sortie8->setTarif(3400);
        $sortie8->setMaxPersonne(10);
        $sortie8->setDateDebut(new \DateTime('2014-10-01 00:00:00'));
        $sortie8->setHeureDebut('9h00');
        $sortie8->setDateFin(new \DateTime('2016-08-31 00:00:00'));
        $sortie8->setHeureFin('19h00');
        $sortie8->setPlanAcces("À quelque mètres de l'entrée de Chenoua Plage, prendre la première sortie sur la gauche et s'arrêter au bout de 400 mètres. Le moniteur vous attendra à cet endroit précis.");
        $sortie8->setValider('1');
        $sortie8->setCharge('');
        $sortie8->setAcces('');
        $sortie8->setEcheance('0');
        $sortie8->setTarifEcheance('0');
        $sortie8->setCommission('');
        $sortie8->setAnnuler('0');
        $sortie8->setTarifEtud('0');
        $sortie8->setPromoClient('0');
        $sortie8->setPromoPartenaire('0');
        $sortie8->setAstuce('0');
        $sortie8->setPub('1');
        $sortie8->setClose('0');
        $sortie8->setIp('127.0.0.1');
        $sortie8->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($sortie8);
        
        $sortie9 = new Sortie();
        $sortie9->setUser($this->getReference('user5'));
        $sortie9->setCategorie($this->getReference('categorie4'));
        $sortie9->setCategorieSortie($this->getReference('categorie_sortie9'));
        $sortie9->setPicture1($this->getReference('picture33'));
        $sortie9->setPicture2($this->getReference('picture34'));
        $sortie9->setPicture3($this->getReference('picture35'));
        $sortie9->setPicture4($this->getReference('picture36'));
        $sortie9->setTitre('Pêche au large des côtes de Tipaza');
        $sortie9->setDescriptif("En Hors-Bord pour un après midi en Mer, chaque Vendredi et Samedi, de 13h30 à 16h30. 

Découvrez une autre facette des côtes de Tipaza, en hors-bord.
Des pauses en large et les grottes naturelles,
Initiation à la pèche au large. 

Tarif normal : 4900 Dinars/personne. 
Tarif étudiant : 4400 Dinars/personne.");
        $sortie9->setConditions("- S'inscrire à l'aide du formulaire de réservation,
- Être en bonne santé,
- Être majeur,
- Savoir nager,
- Les ressortissants étrangers doivent faire l'objet d'une déclaration de présence auprès des autorités locales : Police nationale, gendarmerie nationale, dans la région concernée,
Et pour finir, pendant les activités, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre sous l'eau.");
        $sortie9->setLocalisation('Tipaza');
        $sortie9->setTarif(4900);
        $sortie9->setMaxPersonne(10);
        $sortie9->setDateDebut(new \DateTime('2014-10-01 00:00:00'));
        $sortie9->setHeureDebut('9h00');
        $sortie9->setDateFin(new \DateTime('2016-08-31 00:00:00'));
        $sortie9->setHeureFin('19h00');
        $sortie9->setPlanAcces("À quelque mètres de l'entrée de Chenoua Plage, prendre la première sortie sur la gauche et s'arrêter au bout de 400 mètres. Le moniteur vous attendra à cet endroit précis.");
        $sortie9->setValider('1');
        $sortie9->setCharge('');
        $sortie9->setAcces('');
        $sortie9->setEcheance('0');
        $sortie9->setTarifEcheance('0');
        $sortie9->setCommission('');
        $sortie9->setAnnuler('0');
        $sortie9->setTarifEtud('0');
        $sortie9->setPromoClient('0');
        $sortie9->setPromoPartenaire('0');
        $sortie9->setAstuce('0');
        $sortie9->setPub('1');
        $sortie9->setClose('0');
        $sortie9->setIp('127.0.0.1');
        $sortie9->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($sortie9);
        
        $sortie10 = new Sortie();
        $sortie10->setUser($this->getReference('user12'));
        $sortie10->setCategorie($this->getReference('categorie5'));
        $sortie10->setCategorieSortie($this->getReference('categorie_sortie10'));
        $sortie10->setPicture1($this->getReference('picture37'));
        $sortie10->setPicture2($this->getReference('picture38'));
        $sortie10->setPicture3($this->getReference('picture39'));
        $sortie10->setPicture4($this->getReference('picture40'));
        $sortie10->setTitre('Décollage immédiat');
        $sortie10->setDescriptif("Nouvelle activité sensation, nouvelles aventure ! 
Un vol libre en parapente ? Planer autours des terres de Bouira, chaque weekend, un souvenir inoubliable et garantie à prendre 
En compagnie de notre moniteur Aziz, que partagera sa passion et son expérience avec nous ! un moment pleine de liberté. Il nous fera le plaisir de découvrir la parapente. 
Un sac à dos, un bon sandwich gourmand, une grande bouteille d’eau, une paire de basket et une casquette et à nous l’aventure !
Décollez !

Tarif normal : 3900 Dinars/personne.
Tarif étudiant : 3800 Dinars/personne.");
        $sortie10->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Être majeur,
Être en bonne santé.
Et aussi, pendant l'activité, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre.");
        $sortie10->setLocalisation('Tipaza');
        $sortie10->setTarif(3900);
        $sortie10->setMaxPersonne(15);
        $sortie10->setDateDebut(new \DateTime('2015-02-06 00:00:00'));
        $sortie10->setHeureDebut('9h00');
        $sortie10->setDateFin(new \DateTime('2015-02-28 00:00:00'));
        $sortie10->setHeureFin('19h00');
        $sortie10->setPlanAcces("À quelque mètres de l'entrée de Chenoua Plage, prendre la première sortie sur la gauche et s'arrêter au bout de 400 mètres. Le moniteur vous attendra à cet endroit précis.");
        $sortie10->setVideo('https://www.youtube.com/watch?v=x2geTtXd_xE');
        $sortie10->setPhoto1('decolage.png');
        $sortie10->setPhoto2('decolage_cover.png');
        $sortie10->setPhoto3('decolage.png');
        $sortie10->setPhoto4('decolage_cover.png');
        $sortie10->setValider('1');
        $sortie10->setCharge('');
        $sortie10->setAcces('');
        $sortie10->setEcheance('0');
        $sortie10->setTarifEcheance('0');
        $sortie10->setCommission('');
        $sortie10->setAnnuler('0');
        $sortie10->setTarifEtud('0');
        $sortie10->setPromoClient('0');
        $sortie10->setPromoPartenaire('0');
        $sortie10->setAstuce('0');
        $sortie10->setPub('1');
        $sortie10->setClose('0');
        $sortie10->setIp('127.0.0.1');
        $sortie10->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($sortie10);
        
        $sortie11 = new Sortie();
        $sortie11->setUser($this->getReference('user13'));
        $sortie11->setCategorie($this->getReference('categorie2'));
        $sortie11->setCategorieSortie($this->getReference('categorie_sortie11'));
        $sortie11->setPicture1($this->getReference('picture41'));
        $sortie11->setPicture2($this->getReference('picture42'));
        $sortie11->setPicture3($this->getReference('picture43'));
        $sortie11->setPicture4($this->getReference('picture44'));
        $sortie11->setTitre('Randonnée VTT');
        $sortie11->setDescriptif("La pleine de Chenoua et sa montagne qui sont situées à la sortie de la ville de Tipaza, vous accueillent pour une randonnée VTT aventure. 
La sortie seffectue compagnie de notre moniteur Islem, qui partagera sa passion et son expérience avec nous ! 
Un moment plein de liberté et sensation. 2 Circuit VTT sont proposés : 
- Circuit plaisir & aventure: au relief très doux à la portée de tous et de toutes ! Environ 1h30 de nature, despaces vert et de balade en VTT. Idéal pour les débutants. 
- Circuit challenge & endurance : un parcours à la hauteur des exigences des utilisateurs confirmés. 
Un sac à dos, un bon sandwich gourmand, une grande bouteille deau, une paire de basket et à nous laventure ! 
Les vélos ainsi que les casques seront fournis par la maison, avec possibilité de ramener avec votre vélo & casque. 

Tarif : 
Tarif normal : 2900 Dinars/personne. 
Tarif étudiant : 2400 Dinars/personne.");
        $sortie11->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Être majeur,
Être en bonne santé.
Et aussi, pendant l'activité, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre");
        $sortie11->setLocalisation('Tipaza');
        $sortie11->setTarif(2900);
        $sortie11->setMaxPersonne(10);
        $sortie11->setDateDebut(new \DateTime('2015-02-06 00:00:00'));
        $sortie11->setHeureDebut('9h00');
        $sortie11->setDateFin(new \DateTime('2015-02-28 00:00:00'));
        $sortie11->setHeureFin('19h00');
        $sortie11->setPlanAcces("À quelque mètres de l'entrée de Chenoua Plage, prendre la première sortie sur la gauche et s'arrêter au bout de 400 mètres. Le moniteur vous attendra à cet endroit précis.");
        $sortie11->setVideo('https://www.youtube.com/watch?v=6FV3QZLkq5A');
        $sortie11->setPhoto1('ico_vtt.png');
        $sortie11->setPhoto2('randonnee_vtt.png');
        $sortie11->setPhoto3('randonee_vtt_cover.png');
        $sortie11->setPhoto4('randonee_vtt_cover.png');
        $sortie11->setValider('1');
        $sortie11->setCharge('');
        $sortie11->setAcces('');
        $sortie11->setEcheance('0');
        $sortie11->setTarifEcheance('0');
        $sortie11->setCommission('');
        $sortie11->setAnnuler('0');
        $sortie11->setTarifEtud('0');
        $sortie11->setPromoClient('0');
        $sortie11->setPromoPartenaire('0');
        $sortie11->setAstuce('1');
        $sortie11->setPub('1');
        $sortie11->setClose('1');
        $sortie11->setIp('127.0.0.1');
        $sortie11->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($sortie11);
        
        $sortie12 = new Sortie();
        $sortie12->setUser($this->getReference('user8'));
        $sortie12->setCategorie($this->getReference('categorie6'));
        $sortie12->setCategorieSortie($this->getReference('categorie_sortie12'));
        $sortie12->setPicture1($this->getReference('picture45'));
        $sortie12->setPicture2($this->getReference('picture46'));
        $sortie12->setPicture3($this->getReference('picture47'));
        $sortie12->setPicture4($this->getReference('picture48'));
        $sortie12->setTitre('Balade et découverte de la ville Romaine');
        $sortie12->setDescriptif("Une sortie découverte patrimoine et balade dans la ville romaine de Tipaza, en compagnie de 2 guides touristiques, qui seront très ravis de partager avec nous les histoires et mythes que porte ce beau site ! 

Chaque Jeudi, vendredi et Samedi nous nous retrouverons à Tipaza, pour un voyage dans le temps, destination : L’ancienne ville romaine, pour 3 heures de découvertes! 

Tarif : 2900 Dinars/personne.
et 2400 Dinars/personne sur présentation de la carte d'étudiant.");
        $sortie12->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Être majeur,
Être en bonne santé,
Les ressortissants étrangers doivent faire l'objet d'une déclaration de présence auprès des autorités locales : Police nationale, gendarmerie nationale, dans la région concernée,
Et aussi, pendant l'activité, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre.");
        $sortie12->setLocalisation('Tipaza');
        $sortie12->setTarif(2900);
        $sortie12->setMaxPersonne(15);
        $sortie12->setDateDebut(new \DateTime('2014-10-01 00:00:00'));
        $sortie12->setHeureDebut('9h00');
        $sortie12->setDateFin(new \DateTime('2016-08-31 00:00:00'));
        $sortie12->setHeureFin('19h00');
        $sortie12->setPlanAcces("À quelque mètres de l'entrée de Chenoua Plage, prendre la première sortie sur la gauche et s'arrêter au bout de 400 mètres. Le moniteur vous attendra à cet endroit précis.");
        $sortie12->setValider('1');
        $sortie12->setCharge('');
        $sortie12->setAcces('');
        $sortie12->setEcheance('0');
        $sortie12->setTarifEcheance('0');
        $sortie12->setCommission('');
        $sortie12->setAnnuler('0');
        $sortie12->setTarifEtud('0');
        $sortie12->setPromoClient('0');
        $sortie12->setPromoPartenaire('0');
        $sortie12->setAstuce('1');
        $sortie12->setPub('1');
        $sortie12->setClose('0');
        $sortie12->setIp('127.0.0.1');
        $sortie12->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($sortie12);
        
        $sortie13 = new Sortie();
        $sortie13->setUser($this->getReference('user7'));
        $sortie13->setCategorie($this->getReference('categorie6'));
        $sortie13->setCategorieSortie($this->getReference('categorie_sortie13'));
        $sortie13->setPicture1($this->getReference('picture49'));
        $sortie13->setPicture2($this->getReference('picture50'));
        $sortie13->setPicture3($this->getReference('picture51'));
        $sortie13->setPicture4($this->getReference('picture52'));
        $sortie13->setTitre('Une randonnée à Cheval');
        $sortie13->setDescriptif("Une nouveauté en Algérie. Désormais, c'est possible de faire des balades à cheval ! C'est possible grâce au club d'équitation de Blida.

Chaque Mercredi, Jeudi, vendredi, nous nous retrouverons à Blida pour vivre 4 heures d'aventure unique. un splendide circuit de 20 km vous attends. 

Tarif : 2900 Dinars/personne. 
et 2400 Dinars/personne sur présentation de la carte d'étudiant.");
        $sortie13->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Savoir monter un cheval,
Être majeur,
Être en bonne santé,
Les ressortissants étrangers doivent faire l'objet d'une déclaration de présence auprès des autorités locales : Police nationale, gendarmerie nationale, dans la région concernée,
Et aussi, pendant l'activité, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre.");
        $sortie13->setLocalisation('Blida');
        $sortie13->setTarif(2900);
        $sortie13->setMaxPersonne(8);
        $sortie13->setDateDebut(new \DateTime('2014-10-01 00:00:00'));
        $sortie13->setHeureDebut('9h00');
        $sortie13->setDateFin(new \DateTime('2016-08-31 00:00:00'));
        $sortie13->setHeureFin('19h00');
        $sortie13->setPlanAcces("À quelque mètres de l'entrée de Chenoua Plage, prendre la première sortie sur la gauche et s'arrêter au bout de 400 mètres. Le moniteur vous attendra à cet endroit précis.");
        $sortie13->setValider('1');
        $sortie13->setCharge('');
        $sortie13->setAcces('');
        $sortie13->setEcheance('0');
        $sortie13->setTarifEcheance('0');
        $sortie13->setCommission('');
        $sortie13->setAnnuler('0');
        $sortie13->setTarifEtud('0');
        $sortie13->setPromoClient('0');
        $sortie13->setPromoPartenaire('0');
        $sortie13->setAstuce('1');
        $sortie13->setPub('1');
        $sortie13->setClose('0');
        $sortie13->setIp('127.0.0.1');
        $sortie13->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($sortie13);
        
        $sortie14 = new Sortie();
        $sortie14->setUser($this->getReference('user11'));
        $sortie14->setCategorie($this->getReference('categorie3'));
        $sortie14->setCategorieSortie($this->getReference('categorie_sortie14'));
        $sortie14->setPicture1($this->getReference('picture53'));
        $sortie14->setPicture2($this->getReference('picture54'));
        $sortie14->setPicture3($this->getReference('picture55'));
        $sortie14->setPicture4($this->getReference('picture56'));
        $sortie14->setTitre('Dominez la bête volante');
        $sortie14->setDescriptif("Encore une nouveauté en Algérie, Nouvelle activité sensation, nouvelles aventure ! 
Des cerfs-volants géants, insolents et immaitrisables, vous attendent pour les calmer, chaque Week-end à la plage de Chenoua, Tipaza, le temps d’une matinée ou d’une après-midi, venez-vous confronter à .ces ailes géantes ! 
En compagnie de notre moniteur Mokhtar, qui nous fera le plaisir de découvrir les cerfs-volants géants ! Les sensations seront uniques, traction, traction et traction !
Un sac à dos, un bon sandwich gourmand, une grande bouteille d’eau, une paire de basket et une casquette et à nous l’aventure !
Dominez la bête !

Tarif normal : 2900 Dinas/personne.
Tarif étudiant : 2400 Dinars/personne.");
        $sortie14->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Être majeur,
Être en bonne santé.
Et aussi, pendant l'activité, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre.");
        $sortie14->setLocalisation('Tipaza');
        $sortie14->setTarif(2900);
        $sortie14->setMaxPersonne(10);
        $sortie14->setDateDebut(new \DateTime('2015-02-06 00:00:00'));
        $sortie14->setHeureDebut('9h00');
        $sortie14->setDateFin(new \DateTime('2015-02-28 00:00:00'));
        $sortie14->setHeureFin('19h00');
        $sortie14->setPlanAcces("À quelque mètres de l'entrée de Chenoua Plage, prendre la première sortie sur la gauche et s'arrêter au bout de 400 mètres. Le moniteur vous attendra à cet endroit précis.");
        $sortie14->setVideo('https://www.youtube.com/watch?v=igLzB-5FrHk');
        $sortie14->setPhoto1('cerf_volant.png');
        $sortie14->setPhoto2('cerf_volant.png');
        $sortie14->setPhoto3('cerf_volant_cover.png');
        $sortie14->setPhoto4('cerf_volant_cover.png');
        $sortie14->setValider('1');
        $sortie14->setCharge('');
        $sortie14->setAcces('');
        $sortie14->setEcheance('0');
        $sortie14->setTarifEcheance('0');
        $sortie14->setCommission('');
        $sortie14->setAnnuler('0');
        $sortie14->setTarifEtud('0');
        $sortie14->setPromoClient('0');
        $sortie14->setPromoPartenaire('0');
        $sortie14->setAstuce('1');
        $sortie14->setPub('1');
        $sortie14->setClose('0');
        $sortie14->setIp('127.0.0.1');
        $sortie14->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($sortie14);
        
        $sortie15 = new Sortie();
        $sortie15->setUser($this->getReference('user12'));
        $sortie15->setCategorie($this->getReference('categorie7'));
        $sortie15->setCategorieSortie($this->getReference('categorie_sortie15'));
        $sortie15->setPicture1($this->getReference('picture57'));
        $sortie15->setPicture2($this->getReference('picture58'));
        $sortie15->setPicture3($this->getReference('picture59'));
        $sortie15->setPicture4($this->getReference('picture60'));
        $sortie15->setTitre('Formation & Stage Parapente');
        $sortie15->setDescriptif("Volez par vous-même ! C’est ce que Jaafar vous propose.
Une formation de 7 jours à temps plein ou partiel, à votre rythme, pour une initiation à l’activité de « Parapente » et acquérir les principes de vols élémentaires, dans plusieurs villes en Algérie : Oran, Blida, Tipaza, Alger, Bouira, Setif,… Devenez autonome en Parapente‎ !

Programme :
Plus de 56 heures de cours théoriques et de séances pratiques, réparties à votre rythme et en compagnie de moniteurs diplômés et expérimentés.
Matériel et équipements à votre disposition et adaptés à tous les niveaux. De nombreux vols par jour. Prise en main, décollage, pilotage, atterrissage, météorologie, etc.
À la fin de cette formation, Le moniteur vous délivrera une licence fédérale, une attestation de formation « Pilote Autonome », une assurance RC aérienne d’une année. ET vous serez capable de voler seul !");
        $sortie15->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
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
        $sortie15->setLocalisation('Oran, Blida, Tipaza, Alger, Bouira, Setif');
        $sortie15->setTarif(49000);
        $sortie15->setMaxPersonne(10);
        $sortie15->setDateDebut(new \DateTime('2015-02-06 00:00:00'));
        $sortie15->setHeureDebut('9h00');
        $sortie15->setDateFin(new \DateTime('2016-02-28 00:00:00'));
        $sortie15->setHeureFin('19h00');
        $sortie15->setVideo('https://www.youtube.com/watch?v=x2geTtXd_xE');
        $sortie15->setPhoto1('forma_1.png');
        $sortie15->setPhoto2('forma_1.png');
        $sortie15->setPhoto3('format_2.png');
        $sortie15->setPhoto4('format_2.png');
        $sortie15->setValider('1');
        $sortie15->setCharge('');
        $sortie15->setAcces('');
        $sortie15->setEcheance('0');
        $sortie15->setTarifEcheance('0');
        $sortie15->setCommission('');
        $sortie15->setAnnuler('0');
        $sortie15->setTarifEtud('0');
        $sortie15->setPromoClient('0');
        $sortie15->setPromoPartenaire('0');
        $sortie15->setAstuce('0');
        $sortie15->setPub('1');
        $sortie15->setClose('0');
        $sortie15->setIp('127.0.0.1');
        $sortie15->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($sortie15);
        
        $sortie16 = new Sortie();
        $sortie16->setUser($this->getReference('user15'));
        $sortie16->setCategorie($this->getReference('categorie2'));
        $sortie16->setCategorieSortie($this->getReference('categorie_sortie16'));
        $sortie16->setPicture1($this->getReference('picture71'));
        $sortie16->setPicture2($this->getReference('picture72'));
        $sortie16->setPicture3($this->getReference('picture73'));
        $sortie16->setPicture4($this->getReference('picture74'));
        $sortie16->setTitre('Quad Discovery');
        $sortie16->setDescriptif("Chaque jour, nous nous retrouverons à Djbel Chenoua, Tipaza, pour une randonnée en Quad ! 45 minutes à 1h00 de découverte, matin et après-midi.

Vous prendrez les commandes d’une machine à sensation pour une aventure en Montagne. Nous partagerons ensemble ce moment de plaisir !
Un sac à dos, un bon sandwich gourmand, une grande bouteille d’eau, une paire de basket et une casquette et à nous l’aventure !
C’est parti !

Tarif normal : 1900 Dinas/personne.
Tarif étudiant : 1800 Dinars/personne.

Divers:
Utilisation de son propre quad, le tarif est de 900 Dinars/personne et le port du casque est obligatoire.");
        $sortie16->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Avoir son permis de conduire,
Être en bonne santé,
Conducteur : Être majeur,
Passager : Mineur à partir de 10 ans, autorisé avec présence d'un parent,
Le port de vêtements et chaussures de montagne (fermées et montantes) est fortement conseillé,
Le port des gants est conseillé,
Les ressortissants étrangers doivent faire l'objet d'une déclaration de présence auprès des autorités locales : Police nationale, gendarmerie nationale, dans la région concernée,
Et aussi, pendant l'activité, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre.");
        $sortie16->setLocalisation('Tipaza');
        $sortie16->setTarif(1900);
        $sortie16->setMaxPersonne(5);
        $sortie16->setDateDebut(new \DateTime('2015-04-30 00:00:00'));
        $sortie16->setHeureDebut('9h00');
        $sortie16->setDateFin(new \DateTime('2016-08-31 00:00:00'));
        $sortie16->setHeureFin('19h00');
        $sortie16->setVideo('https://www.youtube.com/watch?v=yGGX_nE71Ko');
        $sortie16->setPhoto1('forma_1.png');
        $sortie16->setPhoto2('forma_1.png');
        $sortie16->setPhoto3('format_2.png');
        $sortie16->setPhoto4('format_2.png');
        $sortie16->setValider('1');
        $sortie16->setCharge('');
        $sortie16->setAcces('');
        $sortie16->setEcheance('0');
        $sortie16->setTarifEcheance('0');
        $sortie16->setCommission('');
        $sortie16->setAnnuler('0');
        $sortie16->setTarifEtud('0');
        $sortie16->setPromoClient('0');
        $sortie16->setPromoPartenaire('0');
        $sortie16->setAstuce('0');
        $sortie16->setPub('1');
        $sortie16->setClose('0');
        $sortie16->setIp('127.0.0.1');
        $sortie16->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($sortie16);
        
        $sortie17 = new Sortie();
        $sortie17->setUser($this->getReference('user15'));
        $sortie17->setCategorie($this->getReference('categorie2'));
        $sortie17->setCategorieSortie($this->getReference('categorie_sortie17'));
        $sortie17->setPicture1($this->getReference('picture75'));
        $sortie17->setPicture2($this->getReference('picture76'));
        $sortie17->setPicture3($this->getReference('picture77'));
        $sortie17->setPicture4($this->getReference('picture78'));
        $sortie17->setTitre('Quad Sensation');
        $sortie17->setDescriptif("Encore une nouveauté en Algérie !!
Chaque jour, nous nous retrouverons à Djbel Chenoua, Tipaza, pour une randonnée en Quad ! 01h00 à 01h15 de pur sensation matin et après-midi.

Vous prendrez les commandes d’une machine à sensation pour une aventure en Montagne. Nous partagerons ensemble ce moment de plaisir !
Un sac à dos, un bon sandwich gourmand, une grande bouteille d’eau, une paire de basket et une casquette et à nous l’aventure !
C’est parti !

Tarif normal : 2900 Dinas/personne.
Tarif étudiant : 2400 Dinars/personne.

Divers:
Utilisation de son propre quad, le tarif est de 1900 Dinars/personne et le port du casque est obligatoire.");
        $sortie17->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Avoir son permis de conduire,
Être en bonne santé,
Conducteur : Être majeur,
Passager : Mineur à partir de 10 ans, autorisé avec présence d'un parent,
Le port de vêtements et chaussures de montagne (fermées et montantes) est fortement conseillé,
Le port des gants est conseillé,
Les ressortissants étrangers doivent faire l'objet d'une déclaration de présence auprès des autorités locales : Police nationale, gendarmerie nationale, dans la région concernée,
Et aussi, pendant l'activité, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre.");
        $sortie17->setLocalisation('Tipaza');
        $sortie17->setTarif(1900);
        $sortie17->setMaxPersonne(5);
        $sortie17->setDateDebut(new \DateTime('2015-02-06 00:00:00'));
        $sortie17->setHeureDebut('9h00');
        $sortie17->setDateFin(new \DateTime('2016-02-28 00:00:00'));
        $sortie17->setHeureFin('19h00');
        $sortie17->setVideo('https://www.youtube.com/watch?v=yGGX_nE71Ko');
        $sortie17->setPhoto1('forma_1.png');
        $sortie17->setPhoto2('forma_1.png');
        $sortie17->setPhoto3('format_2.png');
        $sortie17->setPhoto4('format_2.png');
        $sortie17->setValider('1');
        $sortie17->setCharge('');
        $sortie17->setAcces('');
        $sortie17->setEcheance('0');
        $sortie17->setTarifEcheance('0');
        $sortie17->setCommission('');
        $sortie17->setAnnuler('0');
        $sortie17->setTarifEtud('0');
        $sortie17->setPromoClient('0');
        $sortie17->setPromoPartenaire('0');
        $sortie17->setAstuce('0');
        $sortie17->setPub('1');
        $sortie17->setClose('0');
        $sortie17->setIp('127.0.0.1');
        $sortie17->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($sortie17);
        
        $sortie18 = new Sortie();
        $sortie18->setUser($this->getReference('user12'));
        $sortie18->setCategorie($this->getReference('categorie4'));
        $sortie18->setCategorieSortie($this->getReference('categorie_sortie18'));
        $sortie18->setPicture1($this->getReference('picture79'));
        $sortie18->setPicture2($this->getReference('picture80'));
        $sortie18->setPicture3($this->getReference('picture81'));
        $sortie18->setPicture4($this->getReference('picture82'));
        $sortie18->setTitre('Jet Ski Discovery');
        $sortie18->setDescriptif("Une randonnée découverte, qui nous permettra de prendre en main le Jet Ski, tout en savourant un paysage extraordinaire à Tipaza. Un moment plaisir !
Durée : 45min de Randonnée, dont 15 minutes de conduite / personne.
Tarif normal : 2900 Da");
        $sortie18->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Être en bonne santé,
Savoir nager,
Conducteur : à partir de 16 ans,
Passager : Mineur à partir de 10 ans, autorisé avec présence d'un parent,
L'activité est très sensible aux conditions climatiques et peut être annulée, déplacée ou reportée à tout moment, si les conditions ne seront pas favorables,
Prévoir des lunettes de soleil et la crème solaire,
Le port des gants est conseillé,
Les ressortissants étrangers doivent faire l'objet d'une déclaration de présence auprès des autorités locales : Police nationale, gendarmerie nationale, dans la région concernée.");
        $sortie18->setLocalisation('Tipaza');
        $sortie18->setTarif(2900);
        $sortie18->setMaxPersonne(10);
        $sortie18->setDateDebut(new \DateTime('2015-02-06 00:00:00'));
        $sortie18->setHeureDebut('9h00');
        $sortie18->setDateFin(new \DateTime('2016-02-28 00:00:00'));
        $sortie18->setHeureFin('19h00');
        $sortie18->setPhoto1('forma_1.png');
        $sortie18->setPhoto2('forma_1.png');
        $sortie18->setPhoto3('format_2.png');
        $sortie18->setPhoto4('format_2.png');
        $sortie18->setValider('1');
        $sortie18->setCharge('');
        $sortie18->setAcces('');
        $sortie18->setEcheance('0');
        $sortie18->setTarifEcheance('0');
        $sortie18->setCommission('');
        $sortie18->setAnnuler('0');
        $sortie18->setTarifEtud('0');
        $sortie18->setPromoClient('0');
        $sortie18->setPromoPartenaire('0');
        $sortie18->setAstuce('0');
        $sortie18->setPub('1');
        $sortie18->setClose('0');
        $sortie18->setIp('127.0.0.1');
        $sortie18->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($sortie18);
        
        $sortie19 = new Sortie();
        $sortie19->setUser($this->getReference('user15'));
        $sortie19->setCategorie($this->getReference('categorie4'));
        $sortie19->setCategorieSortie($this->getReference('categorie_sortie19'));
        $sortie19->setPicture1($this->getReference('picture83'));
        $sortie19->setPicture2($this->getReference('picture84'));
        $sortie19->setPicture3($this->getReference('picture85'));
        $sortie19->setPicture4($this->getReference('picture86'));
        $sortie19->setTitre('Jet Ski Ride');
        $sortie19->setDescriptif("Nous prendrons les commandes des Jet Ski, pour partir à la conquête des magnifiques côtes de Tipaza. Des paysages à couper le souffle. Un véritable moment plaisir !
Durée : 1h15min de Randonnée, dont 25 minutes de conduite / personne.
Tarif normal : 3900 Da");
        $sortie19->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Être en bonne santé,
Savoir nager,
Conducteur : à partir de 16 ans,
Passager : Mineur à partir de 10 ans, autorisé avec présence d'un parent,
L'activité est très sensible aux conditions climatiques et peut être annulée, déplacée ou reportée à tout moment, si les conditions ne seront pas favorables,
Prévoir des lunettes de soleil et la crème solaire,
Le port des gants est conseillé,
Les ressortissants étrangers doivent faire l'objet d'une déclaration de présence auprès des autorités locales : Police nationale, gendarmerie nationale, dans la région concernée.");
        $sortie19->setLocalisation('Tipaza');
        $sortie19->setTarif(3900);
        $sortie19->setMaxPersonne(6);
        $sortie19->setDateDebut(new \DateTime('2015-02-06 00:00:00'));
        $sortie19->setHeureDebut('9h00');
        $sortie19->setDateFin(new \DateTime('2016-02-28 00:00:00'));
        $sortie19->setHeureFin('19h00');
        $sortie19->setPhoto1('forma_1.png');
        $sortie19->setPhoto2('forma_1.png');
        $sortie19->setPhoto3('format_2.png');
        $sortie19->setPhoto4('format_2.png');
        $sortie19->setValider('1');
        $sortie19->setCharge('');
        $sortie19->setAcces('');
        $sortie19->setEcheance('0');
        $sortie19->setTarifEcheance('0');
        $sortie19->setCommission('');
        $sortie19->setAnnuler('0');
        $sortie19->setTarifEtud('0');
        $sortie19->setPromoClient('0');
        $sortie19->setPromoPartenaire('0');
        $sortie19->setAstuce('0');
        $sortie19->setPub('1');
        $sortie19->setClose('0');
        $sortie19->setIp('127.0.0.1');
        $sortie19->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($sortie19);
        
        $sortie20 = new Sortie();
        $sortie20->setUser($this->getReference('user15'));
        $sortie20->setCategorie($this->getReference('categorie4'));
        $sortie20->setCategorieSortie($this->getReference('categorie_sortie20'));
        $sortie20->setPicture1($this->getReference('picture87'));
        $sortie20->setPicture2($this->getReference('picture88'));
        $sortie20->setPicture3($this->getReference('picture89'));
        $sortie20->setPicture4($this->getReference('picture90'));
        $sortie20->setTitre('Jet Ski sensation');
        $sortie20->setDescriptif("Une belle randonnée en Jet Ski, au large des côtes de Tipaza, encadrée par des moniteurs professionnels et expérimentés, nous piloterons des machines à sensation, pour partir en randonnée découverte d’un paysage extraordinaire à Tipaza. Un moment plaisir !
Durée : 1h30min de Randonnée, dont 30 minutes de conduite / personne.
Tarif normal : 4900 Da");
        $sortie20->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Être en bonne santé,
Savoir nager,
Conducteur : à partir de 16 ans,
Passager : Mineur à partir de 10 ans, autorisé avec présence d'un parent,
L'activité est très sensible aux conditions climatiques et peut être annulée, déplacée ou reportée à tout moment, si les conditions ne seront pas favorables,
Prévoir des lunettes de soleil et la crème solaire,
Le port des gants est conseillé,
Les ressortissants étrangers doivent faire l'objet d'une déclaration de présence auprès des autorités locales : Police nationale, gendarmerie nationale, dans la région concernée.");
        $sortie20->setLocalisation('Tipaza');
        $sortie20->setTarif(4900);
        $sortie20->setMaxPersonne(6);
        $sortie20->setDateDebut(new \DateTime('2015-02-06 00:00:00'));
        $sortie20->setHeureDebut('9h00');
        $sortie20->setDateFin(new \DateTime('2016-02-28 00:00:00'));
        $sortie20->setHeureFin('19h00');
        $sortie20->setPhoto1('forma_1.png');
        $sortie20->setPhoto2('forma_1.png');
        $sortie20->setPhoto3('format_2.png');
        $sortie20->setPhoto4('format_2.png');
        $sortie20->setValider('1');
        $sortie20->setCharge('');
        $sortie20->setAcces('');
        $sortie20->setEcheance('0');
        $sortie20->setTarifEcheance('0');
        $sortie20->setCommission('');
        $sortie20->setAnnuler('0');
        $sortie20->setTarifEtud('0');
        $sortie20->setPromoClient('0');
        $sortie20->setPromoPartenaire('0');
        $sortie20->setAstuce('0');
        $sortie20->setPub('1');
        $sortie20->setClose('0');
        $sortie20->setIp('127.0.0.1');
        $sortie20->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($sortie20);
        
        $sortie21 = new Sortie();
        $sortie21->setUser($this->getReference('user12'));
        $sortie21->setCategorie($this->getReference('categorie4'));
        $sortie21->setCategorieSortie($this->getReference('categorie_sortie21'));
        $sortie21->setPicture1($this->getReference('picture91'));
        $sortie21->setPicture2($this->getReference('picture92'));
        $sortie21->setPicture3($this->getReference('picture93'));
        $sortie21->setPicture4($this->getReference('picture94'));
        $sortie21->setTitre('Jet Ski Trip');
        $sortie21->setDescriptif("Nous prendrons les commandes des Jet Ski, pour une belle balade en Mer. Encadrée par des moniteurs professionnels et expérimentés, nous partirons à la découverte d’un paysage extraordinaire à Tipaza. Un moment plaisir !
Durée : 2h15min de Randonnée, dont 45 minutes de conduite / personne.
Tarif normal : 6400 Da");
        $sortie21->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Être en bonne santé,
Savoir nager,
Conducteur : à partir de 16 ans,
Passager : Mineur à partir de 10 ans, autorisé avec présence d'un parent,
L'activité est très sensible aux conditions climatiques et peut être annulée, déplacée ou reportée à tout moment, si les conditions ne seront pas favorables,
Prévoir des lunettes de soleil et la crème solaire,
Le port des gants est conseillé,
Les ressortissants étrangers doivent faire l'objet d'une déclaration de présence auprès des autorités locales : Police nationale, gendarmerie nationale, dans la région concernée.");
        $sortie21->setLocalisation('Tipaza');
        $sortie21->setTarif(6400);
        $sortie21->setMaxPersonne(6);
        $sortie21->setDateDebut(new \DateTime('2015-02-06 00:00:00'));
        $sortie21->setHeureDebut('9h00');
        $sortie21->setDateFin(new \DateTime('2016-02-28 00:00:00'));
        $sortie21->setHeureFin('19h00');
        $sortie21->setPhoto1('forma_1.png');
        $sortie21->setPhoto2('forma_1.png');
        $sortie21->setPhoto3('format_2.png');
        $sortie21->setPhoto4('format_2.png');
        $sortie21->setValider('1');
        $sortie21->setCharge('');
        $sortie21->setAcces('');
        $sortie21->setEcheance('0');
        $sortie21->setTarifEcheance('0');
        $sortie21->setCommission('');
        $sortie21->setAnnuler('0');
        $sortie21->setTarifEtud('0');
        $sortie21->setPromoClient('0');
        $sortie21->setPromoPartenaire('0');
        $sortie21->setAstuce('0');
        $sortie21->setPub('1');
        $sortie21->setClose('0');
        $sortie21->setIp('127.0.0.1');
        $sortie21->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($sortie21);
        
        $sortie22 = new Sortie();
        $sortie22->setUser($this->getReference('user12'));
        $sortie22->setCategorie($this->getReference('categorie4'));
        $sortie22->setCategorieSortie($this->getReference('categorie_sortie22'));
        $sortie22->setPicture1($this->getReference('picture95'));
        $sortie22->setPicture2($this->getReference('picture96'));
        $sortie22->setPicture3($this->getReference('picture97'));
        $sortie22->setPicture4($this->getReference('picture98'));
        $sortie22->setTitre('Jet Ski Evasion');
        $sortie22->setDescriptif("Une évasion en Jet Ski au large des côtes de Tipaza. Encadrés par des moniteurs professionnels et expérimentés, nous piloterons des machines à sensation pour partir en randonnée d’un paysage extraordinaire à Tipaza. Un moment unique d’évasion!
Durée : 3h00 de Randonnée, dont 1h00 de conduite / personne.
Tarif normal : 7400 Da");
        $sortie22->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Être en bonne santé,
Savoir nager,
Conducteur : à partir de 16 ans,
Passager : Mineur à partir de 10 ans, autorisé avec présence d'un parent,
L'activité est très sensible aux conditions climatiques et peut être annulée, déplacée ou reportée à tout moment, si les conditions ne seront pas favorables,
Prévoir des lunettes de soleil et la crème solaire,
Le port des gants est conseillé,
Les ressortissants étrangers doivent faire l'objet d'une déclaration de présence auprès des autorités locales : Police nationale, gendarmerie nationale, dans la région concernée.");
        $sortie22->setLocalisation('Tipaza');
        $sortie22->setTarif(7400);
        $sortie22->setMaxPersonne(6);
        $sortie22->setDateDebut(new \DateTime('2015-02-06 00:00:00'));
        $sortie22->setHeureDebut('9h00');
        $sortie22->setDateFin(new \DateTime('2016-02-28 00:00:00'));
        $sortie22->setHeureFin('19h00');
        $sortie22->setPhoto1('forma_1.png');
        $sortie22->setPhoto2('forma_1.png');
        $sortie22->setPhoto3('format_2.png');
        $sortie22->setPhoto4('format_2.png');
        $sortie22->setValider('1');
        $sortie22->setCharge('');
        $sortie22->setAcces('');
        $sortie22->setEcheance('0');
        $sortie22->setTarifEcheance('0');
        $sortie22->setCommission('');
        $sortie22->setAnnuler('0');
        $sortie22->setTarifEtud('0');
        $sortie22->setPromoClient('0');
        $sortie22->setPromoPartenaire('0');
        $sortie22->setAstuce('0');
        $sortie22->setPub('1');
        $sortie22->setClose('0');
        $sortie22->setIp('127.0.0.1');
        $sortie22->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($sortie22);
        
        $sortie23 = new Sortie();
        $sortie23->setUser($this->getReference('user12'));
        $sortie23->setCategorie($this->getReference('categorie4'));
        $sortie23->setCategorieSortie($this->getReference('categorie_sortie23'));
        $sortie23->setPicture1($this->getReference('picture99'));
        $sortie23->setPicture2($this->getReference('picture100'));
        $sortie23->setPicture3($this->getReference('picture101'));
        $sortie23->setPicture4($this->getReference('picture102'));
        $sortie23->setTitre('Bouée Tentation');
        $sortie23->setDescriptif("Une sortie en Hors-Bord, des bouées sensation et baignade au large, du lundi au Samedi du Mois d’août de 10h00 à 20h00 pour une balade d'une heure et demi avec rodéo.

Êtes-vous attiré par l’idée d’une croisière le long de la baie de Tipaza 
Découvrez une autre facette de Tipaza, en hors-bord, le vent dans les cheveux,...
Des pauses baignades en large, Dans les grottes naturelles,
Activité nautique pour les challengers ; vous pourrez embarquer sur nos bouées gonflables ... Rien à craindre, sauf tomber à l'eau, alors accrochez-vous, le rodéo commence !

Tarif normal : 2900 Dinars/personne. 
Tarif étudiant : 2400 Dinars/personne.");
        $sortie23->setConditions("- S'inscrire à l'aide du formulaire de réservation,
- Être en bonne santé,
- Être majeur,
- Savoir nager.
Et pour finir, pendant les activités, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre sous l'eau.");
        $sortie23->setLocalisation('Tipaza');
        $sortie23->setTarif(2900);
        $sortie23->setMaxPersonne(6);
        $sortie23->setDateDebut(new \DateTime('2015-02-06 00:00:00'));
        $sortie23->setHeureDebut('9h00');
        $sortie23->setDateFin(new \DateTime('2016-02-28 00:00:00'));
        $sortie23->setHeureFin('19h00');
        $sortie23->setPhoto1('forma_1.png');
        $sortie23->setPhoto2('forma_1.png');
        $sortie23->setPhoto3('format_2.png');
        $sortie23->setPhoto4('format_2.png');
        $sortie23->setValider('1');
        $sortie23->setCharge('');
        $sortie23->setAcces('');
        $sortie23->setEcheance('0');
        $sortie23->setTarifEcheance('0');
        $sortie23->setCommission('');
        $sortie23->setAnnuler('0');
        $sortie23->setTarifEtud('0');
        $sortie23->setPromoClient('0');
        $sortie23->setPromoPartenaire('0');
        $sortie23->setAstuce('0');
        $sortie23->setPub('1');
        $sortie23->setClose('0');
        $sortie23->setIp('127.0.0.1');
        $sortie23->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($sortie23);
        
        $sortie24 = new Sortie();
        $sortie24->setUser($this->getReference('user12'));
        $sortie24->setCategorie($this->getReference('categorie2'));
        $sortie24->setCategorieSortie($this->getReference('categorie_sortie24'));
        $sortie24->setPicture1($this->getReference('picture103'));
        $sortie24->setPicture2($this->getReference('picture104'));
        $sortie24->setPicture3($this->getReference('picture105'));
        $sortie24->setPicture4($this->getReference('picture106'));
        $sortie24->setTitre('Dirty Quad Trip - Full Day');
        $sortie24->setDescriptif("Un 'Quad Trip' plaisir & découverte le temps d’une journée, avec déjeuner au Mont Chenoua, 
Vous prendrez les commandes de notre meute de Quads sauvages en montagne, Rita, Robusta, Nervosita, Tornado, etc. Venez les monter ! 
Au programme : 
9h00-09h30 : Arrivée & Accueil des participants,

09h30 - 10h00 : Consignes et initiation au Quad,

10h00 - 12h00 : Randonnée Quad & Pauses photos, 

12h00 - 13h00 : Barbecue en plein air & Rafraichissement,

13h00 - 16h00 : Suite Randonnée Quad & Pauses photos
16h00 – 16h30 : Fin & Départ des participants. 
C’est parti !

Tarif normal : 11900 Dinars/personne.
Tarif étudiant : 10900 Dinars/personne.");
        $sortie24->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Avoir son permis de conduire,
Être en bonne santé,
Conducteur : Être majeur,
Passager : Mineur à partir de 10 ans, autorisé avec présence d'un parent,
Le port de vêtements et chaussures de montagne (fermées et montantes) est fortement conseillé,
Le port des gants est conseillé,
Les ressortissants étrangers doivent faire l'objet d'une déclaration de présence auprès des autorités locales : Police nationale, gendarmerie nationale, dans la région concernée,
Et aussi, pendant l'activité, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre.");
        $sortie24->setLocalisation('Oran, Blida, Tipaza, Alger, Bouira, Setif');
        $sortie24->setTarif(11900);
        $sortie24->setMaxPersonne(10);
        $sortie24->setDateDebut(new \DateTime('2015-02-06 00:00:00'));
        $sortie24->setHeureDebut('9h00');
        $sortie24->setDateFin(new \DateTime('2016-02-28 00:00:00'));
        $sortie24->setHeureFin('19h00');
        $sortie24->setVideo('https://www.youtube.com/watch?v=yGGX_nE71Ko');
        $sortie24->setPhoto1('forma_1.png');
        $sortie24->setPhoto2('forma_1.png');
        $sortie24->setPhoto3('format_2.png');
        $sortie24->setPhoto4('format_2.png');
        $sortie24->setValider('0');
        $sortie24->setCharge('');
        $sortie24->setAcces('');
        $sortie24->setEcheance('0');
        $sortie24->setTarifEcheance('0');
        $sortie24->setCommission('');
        $sortie24->setAnnuler('0');
        $sortie24->setTarifEtud('0');
        $sortie24->setPromoClient('0');
        $sortie24->setPromoPartenaire('0');
        $sortie24->setAstuce('0');
        $sortie24->setPub('1');
        $sortie24->setClose('0');
        $sortie24->setIp('127.0.0.1');
        $sortie24->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($sortie24);
        
        $sortie25 = new Sortie();
        $sortie25->setUser($this->getReference('user12'));
        $sortie25->setCategorie($this->getReference('categorie2'));
        $sortie25->setCategorieSortie($this->getReference('categorie_sortie25'));
        $sortie25->setPicture1($this->getReference('picture107'));
        $sortie25->setPicture2($this->getReference('picture108'));
        $sortie25->setPicture3($this->getReference('picture109'));
        $sortie25->setPicture4($this->getReference('picture110'));
        $sortie25->setTitre('Quad After Work');
        $sortie25->setDescriptif("Une randonnée « After Work » en Quad, pour décompresser ? 
Chaque soir à 19h00, nous nous retrouverons au Mont Chenoua, Tipaza, pour une balade en montagne, couché du soleil en live, le calme absolu, 01h15 à 1h30 de pur plaisir. Le meilleur créneau de la journée. 
Vous prendrez les commandes d’une machine à sensation pour une aventure en Montagne. 
Un sac à dos, un bon sandwich gourmand, une grande bouteille d’eau, une paire de basket et une casquette et à nous l’aventure !
C’est parti !

Tarif normal : 3900 Dinas/personne.
Tarif étudiant : 3400 Dinars/personne.");
        $sortie25->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Avoir son permis de conduire,
Être en bonne santé,
Conducteur : Être majeur,
Passager : Mineur à partir de 10 ans, autorisé avec présence d'un parent,
Le port de vêtements et chaussures de montagne (fermées et montantes) est fortement conseillé,
Le port des gants est conseillé,
Les ressortissants étrangers doivent faire l'objet d'une déclaration de présence auprès des autorités locales : Police nationale, gendarmerie nationale, dans la région concernée,
Et aussi, pendant l'activité, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre.");
        $sortie25->setLocalisation('Tipaza');
        $sortie25->setTarif(3900);
        $sortie25->setMaxPersonne(6);
        $sortie25->setDateDebut(new \DateTime('2015-02-06 00:00:00'));
        $sortie25->setHeureDebut('9h00');
        $sortie25->setDateFin(new \DateTime('2016-02-28 00:00:00'));
        $sortie25->setHeureFin('19h00');
        $sortie25->setVideo('https://www.youtube.com/watch?v=yGGX_nE71Ko');
        $sortie25->setPhoto1('forma_1.png');
        $sortie25->setPhoto2('forma_1.png');
        $sortie25->setPhoto3('format_2.png');
        $sortie25->setPhoto4('format_2.png');
        $sortie25->setValider('2');
        $sortie25->setCharge('');
        $sortie25->setAcces('');
        $sortie25->setEcheance('0');
        $sortie25->setTarifEcheance('0');
        $sortie25->setCommission('');
        $sortie25->setAnnuler('0');
        $sortie25->setTarifEtud('0');
        $sortie25->setPromoClient('0');
        $sortie25->setPromoPartenaire('0');
        $sortie25->setAstuce('0');
        $sortie25->setPub('1');
        $sortie25->setClose('0');
        $sortie25->setIp('127.0.0.1');
        $sortie25->setDateTime(new \DateTime('2015-03-01 12:00:00'));
        $manager->persist($sortie25);
        
        $manager->flush();
        
        $this->addReference('sortie1',   $sortie1);
        $this->addReference('sortie2',   $sortie2);
        $this->addReference('sortie3',   $sortie3);
        $this->addReference('sortie4',   $sortie4);
        $this->addReference('sortie5',   $sortie5);
        $this->addReference('sortie6',   $sortie6);
        $this->addReference('sortie7',   $sortie7);
        $this->addReference('sortie8',   $sortie8);
        $this->addReference('sortie9',   $sortie9);
        $this->addReference('sortie10',  $sortie10);
        $this->addReference('sortie11',  $sortie11);
        $this->addReference('sortie12',  $sortie12);
        $this->addReference('sortie13',  $sortie13);
        $this->addReference('sortie14',  $sortie14);
        $this->addReference('sortie15',  $sortie15);
        $this->addReference('sortie16',  $sortie16);
        $this->addReference('sortie17',  $sortie17);
        $this->addReference('sortie18',  $sortie18);
        $this->addReference('sortie19',  $sortie19);
        $this->addReference('sortie20',  $sortie20);
        $this->addReference('sortie21',  $sortie21);
        $this->addReference('sortie22',  $sortie22);
        $this->addReference('sortie23',  $sortie23);
        $this->addReference('sortie24',  $sortie24);
        $this->addReference('sortie25',  $sortie25);
    }
    
    public function getOrder()
    {
        return 5; // l'ordre dans lequel les fichiers sont chargés
    }
}
