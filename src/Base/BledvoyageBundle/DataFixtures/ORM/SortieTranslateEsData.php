<?php

namespace Base\BledvoyageBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Base\BledvoyageBundle\Entity\Sortie;

class SortieTranslateEsData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $sortie1 = $this->getReference('sortie1');
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
        $sortie1->setTranslatableLocale('es');
        $manager->persist($sortie1);
        
        $sortie2 = $this->getReference('sortie2');
        $sortie2->setTitre('4WM Discovery');
        $sortie2->setDescriptif("Everyday, We will meet up in Djbel Chenoua, Tipaza, For a hike on the 4WM ! 45 minutes to 1h of discovery, morning and after-noon
You will be commanding a sensation machine for an adventure on the 4WM. We will together share a moment of pleasure .Aback bag, a good tasty sandwish, a big bottle of water, a pair of snickers, a hat and we’re ready for it !
Lets go !

Normal rate: 1900 Dinars/person.
Student rate : 1800 Dinars/person.

Various:
Use of their own 4WM, the rate is 900 Dinars/person and wearing the helmet is mandatory.");
        $sortie2->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Être majeur,
Avoir son permis de conduire,
Être en bonne santé,
Et aussi, pendant l'activité, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre.");
        $sortie2->setTranslatableLocale('es');
        $manager->persist($sortie2);
        
        $sortie3 = $this->getReference('sortie3');
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
        $sortie3->setTranslatableLocale('es');
        $manager->persist($sortie3);
        
        $sortie4 = $this->getReference('sortie4');
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
        $sortie4->setTranslatableLocale('es');
        $manager->persist($sortie4);
        
        $sortie5 = $this->getReference('sortie5');
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
        $sortie5->setTranslatableLocale('es');
        $manager->persist($sortie5);
        
        $sortie6 = $this->getReference('sortie6');
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
        $sortie6->setTranslatableLocale('es');
        $manager->persist($sortie6);
        
        $sortie7 = $this->getReference('sortie7');
        $sortie7->setTitre('Plongée & Balade sous marine');
        $sortie7->setDescriptif("Chaque jour de 10h00 à 18h00, à l’heure où la qualité visuelle et des conditions de lumière seront optimales, nous nous retrouverons à Tipaza, pour une plongée sous-marine en bouteille.
Nous commencerons par une séance d’initiation sous-marine, suivie d’une balade sous l’eau d’environ 20 minutes … et découverte des différentes espèces sous-marines. Nous finirons par un débriefing global. 
Et pour finir, 
N’oubliez pas vos clefs USB pour récupérer vos photos & vidéos, toutes fraiches");
        $sortie7->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Être majeur,
Être en bonne santé.
Et aussi, pendant l'activité, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre sous l'eau.");
        $sortie7->setTranslatableLocale('es');
        $manager->persist($sortie7);
        
        $sortie8 = $this->getReference('sortie8');
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
        $sortie8->setTranslatableLocale('es');
        $manager->persist($sortie8);
        
        $sortie9 = $this->getReference('sortie9');
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
        $sortie9->setTranslatableLocale('es');
        $manager->persist($sortie9);
        
        $sortie10 = $this->getReference('sortie10');
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
        $sortie10->setTranslatableLocale('es');
        $manager->persist($sortie10);
        
        $sortie11 = $this->getReference('sortie11');
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
        $sortie11->setTranslatableLocale('es');
        $manager->persist($sortie11);
        
        $sortie12 = $this->getReference('sortie12');
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
        $sortie12->setTranslatableLocale('es');
        $manager->persist($sortie12);
        
        $sortie13 = $this->getReference('sortie13');
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
        $sortie13->setTranslatableLocale('es');
        $manager->persist($sortie13);
        
        $sortie14 = $this->getReference('sortie14');
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
        $sortie14->setTranslatableLocale('es');
        $manager->persist($sortie14);
        
        $sortie15 = $this->getReference('sortie15');
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
        $sortie15->setTranslatableLocale('es');
        $manager->persist($sortie15);
        
        $sortie16 = $this->getReference('sortie16');
        $sortie16->setTitre('Paragliding training and internship');
        $sortie16->setDescriptif("See for yourself! This is what Jaafar offers.
A 7 day training full time or part time, at your own pace for an introduction to the activity of «Paragliding» and acquire the basic principles of flights in several cities in Algeria: Oran, Blida, Tipaza, Algiers, Bouira, Setif ... Become autonomous Paragliding!
program:
More than 56 hours of theory and practical sessions spread at your pace and in the company of qualified and experienced instructors.
Supplies and equipment available and suitable for all levels. Numerous flights per day. Handling, takeoff, flying, landing, meteorology, etc.
At the end of this training, the monitor will issue you a federal license, a certificate of completion «Autonomous Driver», an airline liability insurance of one year. AND you will be able to fly alone!");
        $sortie16->setConditions("Register using the booking form to reserve your place,
To be healthy,
Foreign nationals must be subject to a declaration of presence to the local authorities: National Police, National Gendarmerie, in the region concerned,
Present a medical certificate of non-cons to the practice of paragliding,
Accessible from 14 years without prerequisites with parental consent,

Documents required for training:
A medical certificate of non-cons to the practice of paragliding,
A birth certificate,
4 passport photos,
Copy of the national map.
Also, during the activity, it is best not to wear jewelry (rings, necklaces, bracelets, ...) the risk of losing them,
What to bring
We recommend a casual dress, but for your comfort and safety.
Shoes like tennis, arctic clothing or windproof gloves.");
        $sortie16->setTranslatableLocale('es');
        $manager->persist($sortie16);
        
        $sortie17 = $this->getReference('sortie17');
        $sortie17->setTitre('Paragliding training and internship');
        $sortie17->setDescriptif("See for yourself! This is what Jaafar offers.
A 7 day training full time or part time, at your own pace for an introduction to the activity of «Paragliding» and acquire the basic principles of flights in several cities in Algeria: Oran, Blida, Tipaza, Algiers, Bouira, Setif ... Become autonomous Paragliding!
program:
More than 56 hours of theory and practical sessions spread at your pace and in the company of qualified and experienced instructors.
Supplies and equipment available and suitable for all levels. Numerous flights per day. Handling, takeoff, flying, landing, meteorology, etc.
At the end of this training, the monitor will issue you a federal license, a certificate of completion «Autonomous Driver», an airline liability insurance of one year. AND you will be able to fly alone!");
        $sortie17->setConditions("Register using the booking form to reserve your place,
To be healthy,
Foreign nationals must be subject to a declaration of presence to the local authorities: National Police, National Gendarmerie, in the region concerned,
Present a medical certificate of non-cons to the practice of paragliding,
Accessible from 14 years without prerequisites with parental consent,

Documents required for training:
A medical certificate of non-cons to the practice of paragliding,
A birth certificate,
4 passport photos,
Copy of the national map.
Also, during the activity, it is best not to wear jewelry (rings, necklaces, bracelets, ...) the risk of losing them,
What to bring
We recommend a casual dress, but for your comfort and safety.
Shoes like tennis, arctic clothing or windproof gloves.");
        $sortie17->setTranslatableLocale('es');
        $manager->persist($sortie17);
        
        $sortie18 = $this->getReference('sortie18');
        $sortie18->setTitre('Paragliding training and internship');
        $sortie18->setDescriptif("See for yourself! This is what Jaafar offers.
A 7 day training full time or part time, at your own pace for an introduction to the activity of «Paragliding» and acquire the basic principles of flights in several cities in Algeria: Oran, Blida, Tipaza, Algiers, Bouira, Setif ... Become autonomous Paragliding!
program:
More than 56 hours of theory and practical sessions spread at your pace and in the company of qualified and experienced instructors.
Supplies and equipment available and suitable for all levels. Numerous flights per day. Handling, takeoff, flying, landing, meteorology, etc.
At the end of this training, the monitor will issue you a federal license, a certificate of completion «Autonomous Driver», an airline liability insurance of one year. AND you will be able to fly alone!");
        $sortie18->setConditions("Register using the booking form to reserve your place,
To be healthy,
Foreign nationals must be subject to a declaration of presence to the local authorities: National Police, National Gendarmerie, in the region concerned,
Present a medical certificate of non-cons to the practice of paragliding,
Accessible from 14 years without prerequisites with parental consent,

Documents required for training:
A medical certificate of non-cons to the practice of paragliding,
A birth certificate,
4 passport photos,
Copy of the national map.
Also, during the activity, it is best not to wear jewelry (rings, necklaces, bracelets, ...) the risk of losing them,
What to bring
We recommend a casual dress, but for your comfort and safety.
Shoes like tennis, arctic clothing or windproof gloves.");
        $sortie18->setTranslatableLocale('es');
        $manager->persist($sortie18);
        
        $sortie19 = $this->getReference('sortie19');
        $sortie19->setTitre('Paragliding training and internship');
        $sortie19->setDescriptif("See for yourself! This is what Jaafar offers.
A 7 day training full time or part time, at your own pace for an introduction to the activity of «Paragliding» and acquire the basic principles of flights in several cities in Algeria: Oran, Blida, Tipaza, Algiers, Bouira, Setif ... Become autonomous Paragliding!
program:
More than 56 hours of theory and practical sessions spread at your pace and in the company of qualified and experienced instructors.
Supplies and equipment available and suitable for all levels. Numerous flights per day. Handling, takeoff, flying, landing, meteorology, etc.
At the end of this training, the monitor will issue you a federal license, a certificate of completion «Autonomous Driver», an airline liability insurance of one year. AND you will be able to fly alone!");
        $sortie19->setConditions("Register using the booking form to reserve your place,
To be healthy,
Foreign nationals must be subject to a declaration of presence to the local authorities: National Police, National Gendarmerie, in the region concerned,
Present a medical certificate of non-cons to the practice of paragliding,
Accessible from 14 years without prerequisites with parental consent,

Documents required for training:
A medical certificate of non-cons to the practice of paragliding,
A birth certificate,
4 passport photos,
Copy of the national map.
Also, during the activity, it is best not to wear jewelry (rings, necklaces, bracelets, ...) the risk of losing them,
What to bring
We recommend a casual dress, but for your comfort and safety.
Shoes like tennis, arctic clothing or windproof gloves.");
        $sortie19->setTranslatableLocale('es');
        $manager->persist($sortie19);
        
        $sortie20 = $this->getReference('sortie20');
        $sortie20->setTitre('Paragliding training and internship');
        $sortie20->setDescriptif("See for yourself! This is what Jaafar offers.
A 7 day training full time or part time, at your own pace for an introduction to the activity of «Paragliding» and acquire the basic principles of flights in several cities in Algeria: Oran, Blida, Tipaza, Algiers, Bouira, Setif ... Become autonomous Paragliding!
program:
More than 56 hours of theory and practical sessions spread at your pace and in the company of qualified and experienced instructors.
Supplies and equipment available and suitable for all levels. Numerous flights per day. Handling, takeoff, flying, landing, meteorology, etc.
At the end of this training, the monitor will issue you a federal license, a certificate of completion «Autonomous Driver», an airline liability insurance of one year. AND you will be able to fly alone!");
        $sortie20->setConditions("Register using the booking form to reserve your place,
To be healthy,
Foreign nationals must be subject to a declaration of presence to the local authorities: National Police, National Gendarmerie, in the region concerned,
Present a medical certificate of non-cons to the practice of paragliding,
Accessible from 14 years without prerequisites with parental consent,

Documents required for training:
A medical certificate of non-cons to the practice of paragliding,
A birth certificate,
4 passport photos,
Copy of the national map.
Also, during the activity, it is best not to wear jewelry (rings, necklaces, bracelets, ...) the risk of losing them,
What to bring
We recommend a casual dress, but for your comfort and safety.
Shoes like tennis, arctic clothing or windproof gloves.");
        $sortie20->setTranslatableLocale('es');
        $manager->persist($sortie20);
        
        $sortie21 = $this->getReference('sortie21');
        $sortie21->setTitre('Paragliding training and internship');
        $sortie21->setDescriptif("See for yourself! This is what Jaafar offers.
A 7 day training full time or part time, at your own pace for an introduction to the activity of «Paragliding» and acquire the basic principles of flights in several cities in Algeria: Oran, Blida, Tipaza, Algiers, Bouira, Setif ... Become autonomous Paragliding!
program:
More than 56 hours of theory and practical sessions spread at your pace and in the company of qualified and experienced instructors.
Supplies and equipment available and suitable for all levels. Numerous flights per day. Handling, takeoff, flying, landing, meteorology, etc.
At the end of this training, the monitor will issue you a federal license, a certificate of completion «Autonomous Driver», an airline liability insurance of one year. AND you will be able to fly alone!");
        $sortie21->setConditions("Register using the booking form to reserve your place,
To be healthy,
Foreign nationals must be subject to a declaration of presence to the local authorities: National Police, National Gendarmerie, in the region concerned,
Present a medical certificate of non-cons to the practice of paragliding,
Accessible from 14 years without prerequisites with parental consent,

Documents required for training:
A medical certificate of non-cons to the practice of paragliding,
A birth certificate,
4 passport photos,
Copy of the national map.
Also, during the activity, it is best not to wear jewelry (rings, necklaces, bracelets, ...) the risk of losing them,
What to bring
We recommend a casual dress, but for your comfort and safety.
Shoes like tennis, arctic clothing or windproof gloves.");
        $sortie21->setTranslatableLocale('es');
        $manager->persist($sortie21);
        
        $sortie22 = $this->getReference('sortie22');
        $sortie22->setTitre('Paragliding training and internship');
        $sortie22->setDescriptif("See for yourself! This is what Jaafar offers.
A 7 day training full time or part time, at your own pace for an introduction to the activity of «Paragliding» and acquire the basic principles of flights in several cities in Algeria: Oran, Blida, Tipaza, Algiers, Bouira, Setif ... Become autonomous Paragliding!
program:
More than 56 hours of theory and practical sessions spread at your pace and in the company of qualified and experienced instructors.
Supplies and equipment available and suitable for all levels. Numerous flights per day. Handling, takeoff, flying, landing, meteorology, etc.
At the end of this training, the monitor will issue you a federal license, a certificate of completion «Autonomous Driver», an airline liability insurance of one year. AND you will be able to fly alone!");
        $sortie22->setConditions("Register using the booking form to reserve your place,
To be healthy,
Foreign nationals must be subject to a declaration of presence to the local authorities: National Police, National Gendarmerie, in the region concerned,
Present a medical certificate of non-cons to the practice of paragliding,
Accessible from 14 years without prerequisites with parental consent,

Documents required for training:
A medical certificate of non-cons to the practice of paragliding,
A birth certificate,
4 passport photos,
Copy of the national map.
Also, during the activity, it is best not to wear jewelry (rings, necklaces, bracelets, ...) the risk of losing them,
What to bring
We recommend a casual dress, but for your comfort and safety.
Shoes like tennis, arctic clothing or windproof gloves.");
        $sortie22->setTranslatableLocale('es');
        $manager->persist($sortie22);
        
        $sortie23 = $this->getReference('sortie23');
        $sortie23->setTitre('Paragliding training and internship');
        $sortie23->setDescriptif("See for yourself! This is what Jaafar offers.
A 7 day training full time or part time, at your own pace for an introduction to the activity of «Paragliding» and acquire the basic principles of flights in several cities in Algeria: Oran, Blida, Tipaza, Algiers, Bouira, Setif ... Become autonomous Paragliding!
program:
More than 56 hours of theory and practical sessions spread at your pace and in the company of qualified and experienced instructors.
Supplies and equipment available and suitable for all levels. Numerous flights per day. Handling, takeoff, flying, landing, meteorology, etc.
At the end of this training, the monitor will issue you a federal license, a certificate of completion «Autonomous Driver», an airline liability insurance of one year. AND you will be able to fly alone!");
        $sortie23->setConditions("Register using the booking form to reserve your place,
To be healthy,
Foreign nationals must be subject to a declaration of presence to the local authorities: National Police, National Gendarmerie, in the region concerned,
Present a medical certificate of non-cons to the practice of paragliding,
Accessible from 14 years without prerequisites with parental consent,

Documents required for training:
A medical certificate of non-cons to the practice of paragliding,
A birth certificate,
4 passport photos,
Copy of the national map.
Also, during the activity, it is best not to wear jewelry (rings, necklaces, bracelets, ...) the risk of losing them,
What to bring
We recommend a casual dress, but for your comfort and safety.
Shoes like tennis, arctic clothing or windproof gloves.");
        $sortie23->setTranslatableLocale('es');
        $manager->persist($sortie23);
        
        $sortie24 = $this->getReference('sortie24');
        $sortie24->setTitre('Paragliding training and internship');
        $sortie24->setDescriptif("See for yourself! This is what Jaafar offers.
A 7 day training full time or part time, at your own pace for an introduction to the activity of «Paragliding» and acquire the basic principles of flights in several cities in Algeria: Oran, Blida, Tipaza, Algiers, Bouira, Setif ... Become autonomous Paragliding!
program:
More than 56 hours of theory and practical sessions spread at your pace and in the company of qualified and experienced instructors.
Supplies and equipment available and suitable for all levels. Numerous flights per day. Handling, takeoff, flying, landing, meteorology, etc.
At the end of this training, the monitor will issue you a federal license, a certificate of completion «Autonomous Driver», an airline liability insurance of one year. AND you will be able to fly alone!");
        $sortie24->setConditions("Register using the booking form to reserve your place,
To be healthy,
Foreign nationals must be subject to a declaration of presence to the local authorities: National Police, National Gendarmerie, in the region concerned,
Present a medical certificate of non-cons to the practice of paragliding,
Accessible from 14 years without prerequisites with parental consent,

Documents required for training:
A medical certificate of non-cons to the practice of paragliding,
A birth certificate,
4 passport photos,
Copy of the national map.
Also, during the activity, it is best not to wear jewelry (rings, necklaces, bracelets, ...) the risk of losing them,
What to bring
We recommend a casual dress, but for your comfort and safety.
Shoes like tennis, arctic clothing or windproof gloves.");
        $sortie24->setTranslatableLocale('es');
        $manager->persist($sortie24);
        
        $sortie25 = $this->getReference('sortie25');
        $sortie25->setTitre('Paragliding training and internship');
        $sortie25->setDescriptif("See for yourself! This is what Jaafar offers.
A 7 day training full time or part time, at your own pace for an introduction to the activity of «Paragliding» and acquire the basic principles of flights in several cities in Algeria: Oran, Blida, Tipaza, Algiers, Bouira, Setif ... Become autonomous Paragliding!
program:
More than 56 hours of theory and practical sessions spread at your pace and in the company of qualified and experienced instructors.
Supplies and equipment available and suitable for all levels. Numerous flights per day. Handling, takeoff, flying, landing, meteorology, etc.
At the end of this training, the monitor will issue you a federal license, a certificate of completion «Autonomous Driver», an airline liability insurance of one year. AND you will be able to fly alone!");
        $sortie25->setConditions("Register using the booking form to reserve your place,
To be healthy,
Foreign nationals must be subject to a declaration of presence to the local authorities: National Police, National Gendarmerie, in the region concerned,
Present a medical certificate of non-cons to the practice of paragliding,
Accessible from 14 years without prerequisites with parental consent,

Documents required for training:
A medical certificate of non-cons to the practice of paragliding,
A birth certificate,
4 passport photos,
Copy of the national map.
Also, during the activity, it is best not to wear jewelry (rings, necklaces, bracelets, ...) the risk of losing them,
What to bring
We recommend a casual dress, but for your comfort and safety.
Shoes like tennis, arctic clothing or windproof gloves.");
        $sortie25->setTranslatableLocale('es');
        $manager->persist($sortie25);
        
        $categorie2 = $this->getReference('categorie2');
        $categorie2->setNom('montaña');
        $categorie2->setTranslatableLocale('es');
        $manager->persist($categorie2);
        
        $categorie3 = $this->getReference('categorie3');
        $categorie3->setNom('arena');
        $categorie3->setTranslatableLocale('es');
        $manager->persist($categorie3);
        
        $categorie4 = $this->getReference('categorie4');
        $categorie4->setNom('mar');
        $categorie4->setTranslatableLocale('es');
        $manager->persist($categorie4);
        
        $categorie5 = $this->getReference('categorie5');
        $categorie5->setNom('aire');
        $categorie5->setTranslatableLocale('es');
        $manager->persist($categorie5);
        
        $categorie6 = $this->getReference('categorie6');
        $categorie6->setNom('tierra');
        $categorie6->setTranslatableLocale('es');
        $manager->persist($categorie6);
        
        $categorie7 = $this->getReference('categorie7');
        $categorie7->setNom('formación');
        $categorie7->setTranslatableLocale('es');
        $manager->persist($categorie7);
        
        $ticket1 = $this->getReference('ticket1');
        $ticket1->setNom('Paquete de descubrimiento');
        $ticket1->setTranslatableLocale('es');
        $manager->persist($ticket1);
        
        $ticket2 = $this->getReference('ticket2');
        $ticket2->setNom('Paquete de Ocio 3');
        $ticket2->setTranslatableLocale('es');
        $manager->persist($ticket2);
        
        $ticket3 = $this->getReference('ticket3');
        $ticket3->setNom('Paquete de Ocio 6');
        $ticket3->setTranslatableLocale('es');
        $manager->persist($ticket3);
        
        $ticket4 = $this->getReference('ticket4');
        $ticket4->setNom('Paquete de Ocio 12');
        $ticket4->setTranslatableLocale('es');
        $manager->persist($ticket4);
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 16; // l'ordre dans lequel les fichiers sont chargés
    }
}
