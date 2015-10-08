<?php

namespace Base\BledvoyageBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class SortieTranslateEsData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        /*
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
        */
        
        $sortie2 = $this->getReference('sortie2');
        $sortie2->setTitre('Quad Adventure');
        $sortie2->setDescriptif("Todos los días nos reuniremos en Djbel Chenoua, Tipaza, para un alza en Quad! 45 minutos a 1:00 descubrimiento, mañana y tarde.

Tendrá que tomar los mandos de una máquina para una aventura sensacional en la  montaña. Todos compartimos este momento de placer!
Una mochila, un buen sandwich gourmet, una gran botella de agua, un par de zapatillas de deporte y una gorra y a nosotros la  aventura!
Aquí vamos!

Tarifa normal: 1900 Dinas / persona.
tarifa para los  Estudiantes: 1800 dinares / persona.

Varios:
Usando su propio quad, la tasa es de 900 dinares / persona que lleva un casco es obligatorio.");
        $sortie2->setConditions("Regístrese utilizando el formulario de reserva para reservar su lugar,
Haga que su licencia de conducir,
Ser saludable,
Conductor: Ser mayor de edad,
Pasajeros: Menor de 10 años permitidos con la presencia de uno de los padres,
El uso de ropa y zapatos de montaña (cerrado y en aumento) es muy recomendable,
Se recomienda el uso de guantes,
Los extranjeros deben ser una declaración de presencia a las autoridades locales: Policía Nacional, Gendarmería Nacional, en la región de que se trate,
Y también, durante la actividad, lo mejor es no usar joyas (anillos, collares, pulseras, ...) el riesgo de perderlos.");
        $sortie2->setTranslatableLocale('es');
        $manager->persist($sortie2);
        
        $sortie3 = $this->getReference('sortie3');
        $sortie3->setTitre('Senderismo y Montaña Desafío «Tiro con arco»');
        $sortie3->setDescriptif("Único en Argelia, una caminata Djbel Chenoua, Tipaza, pasear y descubrir la flora y fauna de la región, seguido de un reto de «Tiro con arco» entre varios equipos, los que cosechar el máximo de puntos serán elegidos «arco Mejores valoradores.»
Usted será compañero de Slimane, un aventurero de corazón, un apasionado de la naturaleza y la profesión de médico. Él es feliz de compartir su pasión con ustedes, el tiempo para una tarde!
Todos los viernes y sábados, 15:30-seis y treinta de la noche, que se reúnen en Djbel Chenoua, Tipaza. Para pasar una tarde agradable naturaleza y aventura

tarifa 2900 dinares /persona
y 2400 dinares/persona con la tarjeta de estudiante.");
        $sortie3->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Être majeur,
Être en bonne santé,
Les ressortissants étrangers doivent faire l'objet d'une déclaration de présence auprès des autorités locales : Police nationale, gendarmerie nationale, dans la région concernée,
Et aussi, pendant l'activité, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre.");
        $sortie3->setTranslatableLocale('es');
        $manager->persist($sortie3);
        
        $sortie4 = $this->getReference('sortie4');
        $sortie4->setTitre('Montañismo frescura');
        $sortie4->setDescriptif("Cada fin de semana, mi mente y mis pulmones respira en la montaña.
Una caminata por la mañana en la montaña le espera cada viernes y sábado nos reuniremos a las 6:00 am en Djbel Chenoua a dar un paseo en la montaña, en compañía de Slimane, profesión médica Federal y apasionado de la montaña y aventura.
Él está feliz de compartir con ustedes este conocimiento (Animal, Flora, patrimonio, ...) y ese momento mágico que dejamos la exploración hasta las 14:00.
Una mochila, un buen sandwich gourmet, una gran botella de agua, un par de zapatillas de deporte y una gorra y nuestra aventura!
Todos los jueves, viernes y sábado 06 a.m.-2:00 p.m ..


Tarifa normal: Dinas 2900 / persona.
tarifa para los  Estudiantes: 2400 dinares / persona.");
        $sortie4->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Être majeur,
Être en bonne santé,
Les ressortissants étrangers doivent faire l'objet d'une déclaration de présence auprès des autorités locales : Police nationale, gendarmerie nationale, dans la région concernée,
Et aussi, pendant l'activité, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre.");
        $sortie4->setTranslatableLocale('es');
        $manager->persist($sortie4);
        
        $sortie5 = $this->getReference('sortie5');
        $sortie5->setTitre('Cacerías montaña aventura de Orientación y');
        $sortie5->setDescriptif("Cacerías montaña aventura de Orientación y
Sigue siendo una novedad en Argelia, nueva actividad, la nueva aventura!
Aprenda a leer un mapa, utilice una brújula o seguir una ruta señalizada mientras se divierten, aquí está el principio de este juego de orientación específicamente creado para los amantes de la naturaleza y las montañas.

Junto con nuestro monitor Sliman, que nos equipará brújulas, mapas, binoculares, walkie-talkies, ... y con buen sentido de la observación, que todos compartimos este momento de placer!
Una mochila, un buen sandwich gourmet, una gran botella de agua, un par de zapatillas de deporte y una gorra y a nosotros la aventura !

¿Se puede cumplir el reto?

Aquí vamos!


Tarifa normal: 2900 dinares / persona.
Tttyarifa para los estudiantes: 2400 dinares / persona.");
        $sortie5->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Être majeur,
Être en bonne santé,
Les ressortissants étrangers doivent faire l'objet d'une déclaration de présence auprès des autorités locales : Police nationale, gendarmerie nationale, dans la région concernée,
Et aussi, pendant l'activité, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre.");
        $sortie5->setTranslatableLocale('es');
        $manager->persist($sortie5);
        
        $sortie6 = $this->getReference('sortie6');
        $sortie6->setTitre('Tesoros caza Escala');
        $sortie6->setDescriptif("Único en Argelia Cada fin de semana nos reuniremos (y muchos muchos) a Djbel Chenoua, Tipaza, a participar en una caza del tesoro de tamaño, el tiempo para una mañana o una tarde.
Con esta nueva actividad, que es una mezcla de recreación al aire libre y de aventura, tendrá varios equipos para buscar y localizar cachés en varios cursos diferentes J
En compañía de nuestro monitor Sliman, que nos equipará brújulas, mapas, binoculares, walkie-talkies, ... y con buen sentido de la observación, que todos compartimos este momento de placer!
Una mochila, un buen sandwich gourmet, una gran botella de agua, un par de zapatillas de deporte y una gorra y nuestra aventura!
Aqui vamos!


Tarifa normal: 2900 Dinares / persona.
tarifa para los Estudiantes: 2400 dinares / persona.");
        $sortie6->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Être majeur,
Être en bonne santé,
Les ressortissants étrangers doivent faire l'objet d'une déclaration de présence auprès des autorités locales : Police nationale, gendarmerie nationale, dans la région concernée,
Et aussi, pendant l'activité, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre.");
        $sortie6->setTranslatableLocale('es');
        $manager->persist($sortie6);
        
        $sortie7 = $this->getReference('sortie7'); /* pas encore */
        $sortie7->setTitre('El buceo y paseos');
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
        
        $sortie8 = $this->getReference('sortie8'); /* pas encore */
        $sortie8->setTitre('Paseos en barco y actividades al aire libre');
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
        $sortie9->setTitre('La pesca en aguas de Tipaza');
        $sortie9->setDescriptif("En fuera de borda para un mar de la tarde, todos los viernes y sábados, media después de la una de la tarde-cuatro y treinta de la tarde.

Descubra el otro lado de la costa de Tipaza, motor fuera de borda.
Descansos amplitud y cuevas naturales,
Introducción a la pesca en alta mar.


Tarifa normal: 4900 Dinares / persona.
Precio Estudiante: 4400 dinares / persona.");
        $sortie9->setConditions("- S'inscrire à l'aide du formulaire de réservation,
- Être en bonne santé,
- Être majeur,
- Savoir nager,
- Les ressortissants étrangers doivent faire l'objet d'une déclaration de présence auprès des autorités locales : Police nationale, gendarmerie nationale, dans la région concernée,
Et pour finir, pendant les activités, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre sous l'eau.");
        $sortie9->setTranslatableLocale('es');
        $manager->persist($sortie9);
        
        $sortie10 = $this->getReference('sortie10');
        $sortie10->setTitre('Lucha');
        $sortie10->setDescriptif("Nueva sensación de actividad, la nueva aventura!
Un parapente vuelo libre? Azores disparan tierra de Bouira, cada fin de semana, y garantizar un recuerdo inolvidable para tomar
Aziz acompañado por nuestro instructor, compartirá esa pasión y experiencia con nosotros! un momento lleno de libertad. Estaremos encantados de descubrir el parapente.
Una mochila, un buen sandwich gourmet, una gran botella de agua, un par de zapatillas de deporte y una gorra y nuestra aventura!
Despega!


Tarifa normal: 3900 Dinares / persona.
Precio Estudiante: 3800 dinares / persona.");
        $sortie10->setConditions("Regístrese utilizando el formulario de reserva para reservar su lugar,
Ser mayor de edad,
Ser saludable,
Los extranjeros deben ser una declaración de presencia a las autoridades locales: Policía Nacional, Gendarmería Nacional, en la región de que se trate,
La actividad es muy sensible a las condiciones climáticas y puede ser cancelada, movido o pospuesto en cualquier momento si las condiciones no serán favorables,
Y también, durante la actividad, lo mejor es no usar joyas (anillos, collares, pulseras, ...) el riesgo de perderlos.");
        $sortie10->setTranslatableLocale('es');
        $manager->persist($sortie10);
        
        $sortie11 = $this->getReference('sortie11');
        $sortie11->setTitre('Caminata de la bici de montaña');
        $sortie11->setDescriptif("Completo Chenoua y las montañas que se encuentran a las afueras de la ciudad de Tipaza, le dan la bienvenida para una aventura en bicicleta de montaña.
La compañía lleva a cabo ?? s nuestro monitor Islem, quien compartirá su pasión y experiencia con nosotros!
Un momento lleno de libertad y la sensación. Se proponen 2 pistas de bicicleta de montaña:
- Diversión y aventura Circuito en relieve muy suave para todos y todas! Alrededor de 1:30 naturaleza de ?? espacios verdes y paseo en bicicleta de montaña. Ideal para principiantes.
- Circuitos y resistencia reto: un viaje para satisfacer las demandas de los usuarios avanzados.
Una mochila, un buen sandwich gourmet, una gran botella de agua ??, un par de baloncesto y a nosotros la aventura!
Las bicicletas y los cascos serán proporcionados por la casa, con la posibilidad de traer su bicicleta y casco.

Precio:
Tarifa normal: 2900 dinares / persona.
Tarifa para los Estudiantes: 2400 dinares / persona.");
        $sortie11->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Être majeur,
Être en bonne santé.
Et aussi, pendant l'activité, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre");
        $sortie11->setTranslatableLocale('es');
        $manager->persist($sortie11);
        
        $sortie12 = $this->getReference('sortie12');
        $sortie12->setTitre('Dé un paseo y explorar la ciudad romana.');
        $sortie12->setDescriptif("Una salida patrimonio y paseo descubrimiento en la ciudad romana de Tipaza, acompañado por dos guías turísticos, que va a ser muy felices de compartir con nosotros las historias y mitos que lleva este hermoso lugar!

Todos los jueves, viernes y sábado se reunirán en Tipaza, para un viaje en el tiempo, el destino: La antigua ciudad romana, de tres horas de descubrimiento!


Precio: 2900 dinares / persona.
y 2400 dinares / persona, previa presentación de la tarjeta de estudiante.");
        $sortie12->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Être majeur,
Être en bonne santé,
Les ressortissants étrangers doivent faire l'objet d'une déclaration de présence auprès des autorités locales : Police nationale, gendarmerie nationale, dans la région concernée,
Et aussi, pendant l'activité, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre.");
        $sortie12->setTranslatableLocale('es');
        $manager->persist($sortie12);
        
        /*
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
        */
        
        $sortie14 = $this->getReference('sortie14');
        $sortie14->setTitre('Dominar la bestia volar');
        $sortie14->setDescriptif("Todavía una novedad en Argelia Nueva sensación de actividad, la nueva aventura!
Cometas gigantes, insolentes y immaitrisables, esperando a calmar cada fin de semana en la playa Chenoua, Tipaza, el tiempo para una mañana o una tarde, tienen que venir a enfrentarse alas .Estas gigante!
Junto con nuestro monitor Mukhtar, que nos hará el placer de descubrir los cometas gigantes! Las sensaciones son únicas, la tracción, la tracción y tracción!
Una mochila, un buen sandwich gourmet, una gran botella de agua, un par de zapatillas de deporte y una gorra y nuestra aventura!
Dominar la bestia!


Tarifa normal: 2900 dinares / persona.
Tarifa para los estudiantes: 2400 dinares / persona.");
        $sortie14->setConditions("S'inscrire l'aide du formulaire de réservation pour réserver votre place,
Être majeur,
Être en bonne santé.
Et aussi, pendant l'activité, il est préférable de ne pas porter de bijoux (bagues, colliers, bracelets,...) aux risques de les perdre.");
        $sortie14->setTranslatableLocale('es');
        $manager->persist($sortie14);
        
        $sortie15 = $this->getReference('sortie15');
        $sortie15->setTitre('Parapente Formación y prácticas');
        $sortie15->setDescriptif("Parapente Formación y prácticas
Vuela tú mismo! Esto es lo que ofrece Jaafar.
Un entrenamiento de siete días completo oa tiempo parcial, a su propio ritmo para una introducción a la actividad de «Parapente» y adquirir los principios básicos de los vuelos en varias ciudades de Argelia: Orán, Blida, Tipaza, Argel, Bouira, Setif ... Conviértete en Parapente autónoma!


Programa:
Más de 56 horas de teoría y sesiones prácticas se extienden a su ritmo y en compañía de instructores calificados y experimentados.
Suministros y equipos disponibles y adecuados para todos los niveles. Muchos vuelos diarios. Manipulación, despegue, vuelo, aterrizaje, meteorología, etc.
Al final de este curso, el monitor le emitirá una licencia federal, un certificado de finalización «Driver Autónoma» seguro de responsabilidad aérea de un año. Y usted será capaz de volar en paz!");
        $sortie15->setConditions("Regístrese utilizando el formulario de reserva para reservar su lugar,
Ser saludable,
Los extranjeros deben ser una declaración de presencia a las autoridades locales: Policía Nacional, Gendarmería Nacional, en la región de que se trate,
Presentar un certificado médico de no-contras a la práctica de parapente,
Accesible desde 14 años con consentimiento de los padres y sin condiciones previas,


Los documentos requeridos para la formación:
Un certificado médico de no-contras a la práctica de parapente,
Un certificado de nacimiento,
4 fotos de pasaporte,
Copia del mapa nacional.
Y también, durante la actividad, lo mejor es no usar joyas (anillos, collares, pulseras, ...) el riesgo de perderlos,


Qué llevar
Se recomienda vestido casual, pero adaptado a su comodidad y seguridad.
Zapatos como el tenis, ropa del ártico o guantes a prueba de viento.");
        $sortie15->setTranslatableLocale('es');
        $manager->persist($sortie15);
        
        $sortie16 = $this->getReference('sortie16');
        $sortie16->setTitre('Quad Descubrimiento');
        $sortie16->setDescriptif("Todos los días nos reuniremos en Djbel Chenoua, Tipaza, para un alza en Quad! 45 minutos a 1:00 descubrimiento, mañana y tarde.

Tendrá que tomar los mandos de una máquina para una aventura sensacional en la  montaña. Todos compartimos este momento de placer!
Una mochila, un buen sandwich gourmet, una gran botella de agua, un par de zapatillas de deporte y una gorra y a nosotros la  aventura!
Aquí vamos!


Tarifa normal: 1900 Dinas / persona.
tarifa para los  Estudiantes: 1800 dinares / persona.

Varios:
Usando su propio quad, la tasa es de 900 dinares / persona que lleva un casco es obligatorio");
        $sortie16->setConditions("Regístrese utilizando el formulario de reserva para reservar su lugar,
Haga que su licencia de conducir,
Ser saludable,
Conductor: Ser mayor de edad,
Pasajeros: Menor de 10 años permitidos con la presencia de uno de los padres,
El uso de ropa y zapatos de montaña (cerrado y en aumento) es muy recomendable,
Se recomienda el uso de guantes,
Los extranjeros deben ser una declaración de presencia a las autoridades locales: Policía Nacional, Gendarmería Nacional, en la región de que se trate,
Y también, durante la actividad, lo mejor es no usar joyas (anillos, collares, pulseras, ...) el riesgo de perderlos.");
        $sortie16->setTranslatableLocale('es');
        $manager->persist($sortie16);
        
        $sortie17 = $this->getReference('sortie17');
        $sortie17->setTitre(' Quad Sensacion');
        $sortie17->setDescriptif("Todos los días nos reuniremos en Djbel Chenoua, Tipaza, para un alza en Quad! 45 minutos a 1:00 descubrimiento, mañana y tarde.

Tendrá que tomar los mandos de una máquina para una aventura sensacional en la  montaña. Todos compartimos este momento de placer!
Una mochila, un buen sandwich gourmet, una gran botella de agua, un par de zapatillas de deporte y una gorra y a nosotros la  aventura!
Aquí vamos!
Tarifa normal: 1900 Dinas / persona.
tarifa para los  Estudiantes: 1800 dinares / persona.

Varios:
Usando su propio quad, la tasa es de 900 dinares / persona que lleva un casco es obligatorio.");
        $sortie17->setConditions("Regístrese utilizando el formulario de reserva para reservar su lugar,
Haga que su licencia de conducir,
Ser saludable,
Conductor: Ser mayor de edad,
Pasajeros: Menor de 10 años permitidos con la presencia de uno de los padres,
El uso de ropa y zapatos de montaña (cerrado y en aumento) es muy recomendable,
Se recomienda el uso de guantes,
Los extranjeros deben ser una declaración de presencia a las autoridades locales: Policía Nacional, Gendarmería Nacional, en la región de que se trate,
Y también, durante la actividad, lo mejor es no usar joyas (anillos, collares, pulseras, ...) el riesgo de perderlos.");
        $sortie17->setTranslatableLocale('es');
        $manager->persist($sortie17);
        
        $sortie18 = $this->getReference('sortie18');
        $sortie18->setTitre('Jet Ski Descubrimiento');
        $sortie18->setDescriptif("Un descubrimiento caminata nos permitirá tomar el control de la moto de agua, mientras se disfruta de un paisaje extraordinario en Tipaza. Un momento de diversión!
Duración: 45 minutos de caminata, incluyendo 15 minutos de conducción / persona.

Tarifa normal: 2900 Da.");
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
        $sortie19->setTitre('Jet Ski Paseo');
        $sortie19->setDescriptif("Vamos a tomar los mandos de la moto de agua, de la que a la conquista de la hermosa costa de Tipaza. Un paisaje impresionante. Un tiempo real de la diversión!
Duración: caminata de 1h15min, incluyendo 25 minutos de conducción / persona.

Tarifa normal: 3900 Da.");
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
        $sortie20->setTitre('Sensación de Jet Ski');
        $sortie20->setDescriptif("Una hermosa esquí senderismo acuático, en la costa de Tipaza, bajo la supervisión de instructores profesionales y experimentados, volaremos máquinas sensacionales para ir de excursión descubrimiento de un paisaje extraordinario en Tipaza. Un momento de diversión!
Duración: caminata de 1h30min, incluyendo 30 minutos de conducción / persona.

Tarifa normal: 4900 Da.");
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
        $sortie21->setTitre('Jet Ski de viaje');
        $sortie21->setDescriptif("Vamos a tomar los mandos de la moto de agua, de un hermoso paseo Wed Enmarcado por los profesionales e instructores experimentados, dejaremos al descubrimiento de un paisaje extraordinario en Tipaza. Un momento de diversión!
Duración: 2h15min de a pie, incluyendo 45 minutos de conducción / persona.

Tarifa normal: 6400 Da.");
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
        $sortie22->setTitre('Evasión Jet Ski');
        $sortie22->setDescriptif("Un chorro de escape de esquí de la costa de Tipaza. Supervisado por los profesionales e instructores experimentados, volaremos máquinas sensacionales para ir de excursión a un paisaje extraordinario en Tipaza. Un momento único de escape!
Duración: 3h00 Senderismo, 01:00 cuya conducción / persona.
Tarifa normal: 7400 Da.");
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
        $sortie23->setTitre('Boya Tentación');
        $sortie23->setDescriptif("Una salida en fuera de borda, boyas y natación sensación de fuera, de lunes a sábado del mes de agosto 10:00-20:00 para un paseo de una hora y media con el rodeo.

¿Te atrae la idea de un crucero por la bahía de Tipaza
Descubra otro lado de Tipaza, lancha rápida, el viento en tu pelo, ...
Off en los saltos de natación en cuevas naturales,
Actividades para los retadores Acuáticos; se puede embarcar en nuestras boyas inflables ... No hay nada que temer excepto ir por el desagüe, así que prepárate, el rodeo comienza!


Tarifa normal 2900 dinares / persona.
Tarifa para los estudiantes 2400 dinares / persona.");
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
        $sortie24->setTitre('Dirty Quad Trip - Full Day');
        $sortie24->setDescriptif("Un «Quad viaje» tiempo de diversión y descubrimiento de un día, con almuerzo en Chenoua,
Va a tomar pedidos para nuestro paquete de Quads de montaña salvaje Rita, Robusta, nerviosismo, Tornado, etc. Venga a subir!
En el programa:
09h00-09h30: Llegada y bienvenida de los participantes,

Nueve y media-10:00: instrucciones e introducción a Quad

10 a.m.-12:00: Quad y Senderismo rompe fotos,

12:00-1:00 p.m .: Barbacoa y refrigeración,

13:00-4:00 p.m .: Senderismo Suite de Quad Breaks y Fotografía
16:00-4:30 p.m .: Fin & Salida de los participantes.
Aquí vamos!

Tarifa normal: 11900 dinares / persona.
Tasa Estudiante: 10900 dinares / persona.");
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
        $sortie25->setTitre('Quad después del trabajo');
        $sortie25->setDescriptif("Una caminata «After Work» Quad, para descomprimir?
Cada noche a las 19:00 horas, se reúnen en Chenoua, Tipaza, a dar un paseo en la montaña, en directo la puesta de sol, tranquilidad absoluta, 1:15-una y treinta de puro placer. La mejor nicho del día.
Tendrá que tomar los mandos de una máquina para una aventura sensacional montaña.
Una mochila, un buen sandwich gourmet, una gran botella de agua, un par de zapatillas de deporte y una gorra y nuestra aventura!
Aquí vamos!


Tarifa normal: Dinas 3900 / persona.
Precio Estudiante: 3400 dinares / persona.");
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
        $ticket1->setNom('Paquete descubrimiento');
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
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 16; // l'ordre dans lequel les fichiers sont chargés
    }
}
