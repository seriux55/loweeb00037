<?php

namespace Base\BledvoyageBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Base\BledvoyageBundle\Entity\Sortie;

class SortieTranslateEnData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
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
        $sortie1->setTitre('Week-end «Trigger »');
        $sortie1->setDescriptif("Thirsday, Friday ,Saturday. 3 days and 2 nights.

For nature loversthe monitors from around the region have reunited  to offer you a generous weekend of relaxation, ideal to escape the daily grind and stress ,trigger, hiking, and freshness to reload the full energy.

2 days and 3 days of trigger : Thirsday, Friday, Saturday. Or else, Friday, Saturday, Sunday.

All te weekend in the water, under water, in the open airon the sand, and on the land ! the program is as followed:
One week-end where all is included to offer ourselves a moment of pleasure scuba diving and under water adventure, out on a boat ,Giant kites, Relaxation on the beach,water recreation and of course Giant barbecue and the atmosphere that goes with it !!. Ladies,Missesand gentlemen, marhba bikoum !
What  to keep in mind :
Your solar creme,
Your swimsuit,
Sun glasses and hats,
Your ID for the accomodation process.


In the program :

Day 1 / Welcome and relaxation on the beach.
Welcomings,installation and presentation ,Legs in the water Meet up with the monitors.
Ramble on the beach, Beach volley, Beach soccer4WM on the beach, fun with the kites.
Giant barbecue, out in the fresh air.
Coffee and tea  Fire camp in the beach with a musical atmosphere.
Day 2 : Trigger off the coast.
Trough-morning tolerated.
Diving with monitor Amar, 
Out in the sea, Discovery of the port, coasts and cornices of Tipasa.
Pause grotto swiming and outdoor activities.
4WM Adventure, Archery, ATV Ride
Relaxation on the beach, Beach-volley, Beach Soccer ,Giant kites,Banana Boat.
Giant ftor out in the fresh air, Fire camp on the beach and msical atmosphere.

Day 3 / the « Good bye »
Through-morning  tolerated,
4WM in the Mountain,
Departure.");
        $sortie1->setConditions("Register using the booking form to process your registration quickly.
Payment of a deposit of at least 30% (The last minute cancellations deprive others from participating),
Be of age,
Be healthy,
Foreign nationals must be subject of a declaration of presence to the local authorities : National PD,national gendarmerie, in the concerned region .
The activities Will be allocated  according to Weather conditions.
To conclude, during the activities, It’s preferred to not wear jewelries (Rings, Necklaces, bracelets,...) of the risk of loss.");
        $sortie1->setTranslatableLocale('en');
        $manager->persist($sortie1);
        */
        
        $sortie2 = $this->getReference('sortie2');
        $sortie2->setTitre('4WM Discovery');
        $sortie2->setDescriptif("Everyday, We will meet up in Djbel Chenoua, Tipaza, For a hike on the 4WM ! 45 minutes to 1h of discovery, morning and after-noon
You will be commanding a sensation machine for an adventure on the 4WM. We will together share a moment of pleasure .Aback bag, a good tasty sandwish, a big bottle of water, a pair of snickers, a hat and we’re ready for it !
Lets go !

Normal rate: 1900 Dinars/person.
Student rate : 1800 Dinars/person.

Various:
Use of their own 4WM, the rate is 900 Dinars/person and wearing the helmet is mandatory.");
        $sortie2->setConditions("Register using the booking form to reserve your place,
Have his driver's license,
Be healthy,
Driver: Be of age,
Passenger: Minor from 10 years permitted with the presence of a parent,
Wearing clothes and mountain shoes (closed and rising) is strongly recommended,
Wearing gloves is recommended,
Foreign nationals should be a declaration of presence to the local authorities: National Police, National Gendarmerie, in the region concerned,
And also, during the activity, it is best not to wear jewelry (rings, necklaces, bracelets, ...) the risk of losing them.");
        $sortie2->setTranslatableLocale('en');
        $manager->persist($sortie2);
        
        $sortie3 = $this->getReference('sortie3');
        $sortie3->setTitre('Mountain hiking and « Archery » Challenge ');
        $sortie3->setDescriptif("Unique in Algeria, a hike Jebel Chenoua, Tipaza, stroll and discover the flora & fauna of the region, followed by a challenge of «Archery» between teams, those who reap maximum points will be elected «best titrators arc.»
You will be companion of Slimane, an adventurer at heart, passionate about nature and a doctor by profession. He is happy to share his passion with you, time for an afternoon!
Every Friday and Saturday, from 15:30 to 18:30, we meet at Djbel Chenoua, Tipaza. To spend a pleasant afternoon Nature & Adventure.
Price: 2900 dinars / person.
And 2400 Dinars / person upon presentation of a student card.");
        $sortie3->setConditions("Register using the booking form to process your registration quickly.
Payment of a deposit of at least 30% (The last minute cancellations deprive others from participating),
Be of age,
Be healthy,
Foreign nationals must be subject of a declaration of presence to the local authorities : National PD,national gendarmerie, in the concerned region .
The activities Will be allocated  according to Weather conditions.
To conclude, during the activities, It’s preferred to not wear jewelries (Rings, Necklaces, bracelets,...) of the risk of loss.");
        $sortie3->setTranslatableLocale('en');
        $manager->persist($sortie3);
        
        $sortie4 = $this->getReference('sortie4');
        $sortie4->setTitre('Mountain hiking freshness');
        $sortie4->setDescriptif("Every weekend, my mind and my lungs breathed in Mountain.
A morning hike in Mountain awaits you every Friday and Saturday we will meet at 6:00 am at Djbel Chenoua for a walk in the mountains, in the company of Slimane, Federal medical profession and passionate mountain & adventure.
He will be delighted to share with you this knowledge (Animal, Plant, heritage, ...) and that magical moment we leave exploration until 14:00.
A backpack, a good gourmet sandwich, a large bottle of water, a pair of sneakers and a cap and our adventure!
Every Thursday, Friday and Saturday from 6:00 to 2:00 p.m..
Normal rate: 2900 Dinas / person.
Student rate 2400 Dinars / person.
Great reduction, make the activity at 1900 dinars instead of 2900 dinars by buying your ticket in advance. Click here for more detail: Enjoy a significant reduction.");
        $sortie4->setConditions("Register using the booking form to process your registration quickly.
Payment of a deposit of at least 30% (The last minute cancellations deprive others from participating),
Be of age,
Be healthy,
Foreign nationals must be subject of a declaration of presence to the local authorities : National PD,national gendarmerie, in the concerned region .
The activities Will be allocated  according to Weather conditions.
To conclude, during the activities, It’s preferred to not wear jewelries (Rings, Necklaces, bracelets,...) of the risk of loss.");
        $sortie4->setTranslatableLocale('en');
        $manager->persist($sortie4);
        
        $sortie5 = $this->getReference('sortie5');
        $sortie5->setTitre('Adventure Guidance and mountain hunts');
        $sortie5->setDescriptif("Learn to read a map, use a compass or to follow a signposted route while having fun, here is the principle of this guidance game created specifically for lovers of nature and mountains.

Together with our Sliman monitor, which will equip us compasses, maps, binoculars, walkie-talkies, ... and with good sense of observation, we all share this moment of pleasure !
A backpack, a good gourmet sandwich, a large bottle of water, a pair of sneakers and a cap and our adventure !

Can you meet the challenge ?

Let's go ! 


Normal price : 2900 dinars/person.
Student price : 2400 dinars/person.");
        $sortie5->setConditions("Register using the booking form to process your registration quickly.
Payment of a deposit of at least 30% (The last minute cancellations deprive others from participating),
Be of age,
Be healthy,
Foreign nationals must be subject of a declaration of presence to the local authorities : National PD,national gendarmerie, in the concerned region .
The activities Will be allocated  according to Weather conditions.
To conclude, during the activities, It’s preferred to not wear jewelries (Rings, Necklaces, bracelets,...) of the risk of loss.");
        $sortie5->setTranslatableLocale('en');
        $manager->persist($sortie5);
        
        $sortie6 = $this->getReference('sortie6');
        $sortie6->setTitre('Scale hunting treasure');
        $sortie6->setDescriptif("Unique in Algeria Each weekend we will meet (and many many) at Djbel Chenoua, Tipaza, to participate in a scavenger hunt-size, time for a morning or an afternoon.
With this new activity, which is a mixture of outdoor recreation and adventure, Will have several teams to search and locate several caches in different courses 
In the company of our Sliman monitor, which will equip us compasses, maps, binoculars, walkie-talkies, ... and with good sense of observation, we share together this moment of pleasure!
A backpack, a good gourmet sandwich, a large bottle of water, a pair of sneakers and a cap and our adventure!");
        $sortie6->setConditions("Register using the booking form to process your registration quickly.
Payment of a deposit of at least 30% (The last minute cancellations deprive others from participating),
Be of age,
Be healthy,
Foreign nationals must be subject of a declaration of presence to the local authorities : National PD,national gendarmerie, in the concerned region .
The activities Will be allocated  according to Weather conditions.
To conclude, during the activities, It’s preferred to not wear jewelries (Rings, Necklaces, bracelets,...) of the risk of loss.");
        $sortie6->setTranslatableLocale('en');
        $manager->persist($sortie6);
        
        $sortie7 = $this->getReference('sortie7');
        $sortie7->setTitre('Scuba diving and under-water exscursions');
        $sortie7->setDescriptif("Every day from 10:00 to 18:00, at a time when the visual quality and light conditions are optimal, we will find ourselves in Tipaza for Diving bottle.
We begin with an introductory scuba session followed by a walk under water about 20 minutes ... and discover the different underwater species. We end by a global debriefing.
And to finish,
Do not forget your USB key to retrieve your photos & videos, all fresh.");
        $sortie7->setConditions("Register using the booking form to process your registration quickly.
Payment of a deposit of at least 30% (The last minute cancellations deprive others from participating),
Be of age,
Be healthy,
Foreign nationals must be subject of a declaration of presence to the local authorities : National PD,national gendarmerie, in the concerned region .
The activities Will be allocated  according to Weather conditions.
To conclude, during the activities, It’s preferred to not wear jewelries (Rings, Necklaces, bracelets,...) of the risk of loss.");
        $sortie7->setTranslatableLocale('en');
        $manager->persist($sortie7);
        
        $sortie8 = $this->getReference('sortie8');
        $sortie8->setTitre('Boat trips and out door activities');
        $sortie8->setDescriptif("An exit in Mer, every Friday and Saturday, 2:30 relaxation.

Are you attracted by the idea of a cruise along the bay?
Discover another side of Tipaza, speedboat, the wind in your hair, ...
Wide in breaks, in natural caves,
Initiation of offshore fishing.


Standard Price: 3900 dinars / person.
Student price: 3400 dinars / person.");
        $sortie8->setConditions("Register using the booking form to process your registration quickly
Be healthy,
Driver : B of age,
Passenger : Miner from 10 years old, authorised with parent presence,
Wearing mountain clothes and shoes (closed and knee hight) is strongly recommended,
Wearing gloves is adviced,
Foreign nationals must be subject of a declaration of presence to the local authorities : National PD,national gendarmerie, in the concerned region,
Moreover, During the activity.It is prefered not to wear jewelleries  (wrings, necklases, bracelets,...) of the risk of loss .");
        $sortie8->setTranslatableLocale('en');
        $manager->persist($sortie8);
        
        $sortie9 = $this->getReference('sortie9');
        $sortie9->setTitre('Fishing off the coasts of Tipaza');
        $sortie9->setDescriptif("In Outboard for an afternoon Sea, every Friday and Saturday from 13:30 to 16:30.

Discover another side of the coasts of Tipaza, outboard.
Breadth breaks and natural caves,
Introduction to fishing offshore.


Standard Price: 4900 dinars / person.
Student price: 4400 dinars / person.");
        $sortie9->setConditions("Register using the booking form to process your registration quickly.
Payment of a deposit of at least 30% (The last minute cancellations deprive others from participating),
Be of age,
Be healthy,
Foreign nationals must be subject of a declaration of presence to the local authorities : National PD,national gendarmerie, in the concerned region .
The activities Will be allocated  according to Weather conditions.
To conclude, during the activities, It’s preferred to not wear jewelries (Rings, Necklaces, bracelets,...) of the risk of loss.");
        $sortie9->setTranslatableLocale('en');
        $manager->persist($sortie9);
        
        $sortie10 = $this->getReference('sortie10');
        $sortie10->setTitre('Immediate Take-off');
        $sortie10->setDescriptif("New Activity sensation, new adventure!
A free flight paragliding? Planer goshawks land of Bouira, every weekend, and guarantee an unforgettable memory to take
Together with our Aziz monitor what share his passion and experience with us! a full moment of freedom. We will be pleased to discover the paragliding.
A backpack, a good gourmet sandwich, a large bottle of water, a pair of sneakers and a cap and our adventure!
Blast off!

Standard Price: 3900 dinars / person.
Student price: 3800 dinars / person.");
        $sortie10->setConditions("Register using the booking form to process your registration quickly.
Payment of a deposit of at least 30% (The last minute cancellations deprive others from participating),
Be of age,
Be healthy,
Foreign nationals must be subject of a declaration of presence to the local authorities : National PD,national gendarmerie, in the concerned region .
The activities Will be allocated  according to Weather conditions.
To conclude, during the activities, It’s preferred to not wear jewelries (Rings, Necklaces, bracelets,...) of the risk of loss.");
        $sortie10->setTranslatableLocale('en');
        $manager->persist($sortie10);
        
        $sortie11 = $this->getReference('sortie11');
        $sortie11->setTitre('ATV Hiking');
        $sortie11->setDescriptif("Full Chenoua and mountains which are located just outside the city of Tipaza, welcome you for a mountain biking adventure.
Output is Islem company of our monitor, who will share his passion and experience with us!
A moment full of freedom and sensation. 2 Mountain bike tracks are proposed:
- Fun & adventure circuit: very mild relief for everyone and all! 1h30 of nature, green spaces and bike ride. Ideal for beginners.
- Circuit & endurance challenge: a journey up to the demands of advanced users.
A backpack, a good gourmet sandwich, a large bottle of water, a pair of basketball and our adventure!
The bikes and helmets will be provided by the home, with the possibility to bring your bike & helmet.

rate:
Standard Price: 2900 dinars / person.
Student rate 2400 Dinars / person.");
        $sortie11->setConditions("Register using the booking form to reserve your place,
Have his driver's license,
Be healthy,
Driver: Be of age,
Passenger: Minor from 10 years permitted with the presence of a parent,
Wearing clothes and mountain shoes (closed and rising) is strongly recommended,
Wearing gloves is recommended,
Foreign nationals should be a declaration of presence to the local authorities: National Police, National Gendarmerie, in the region concerned,
And also, during the activity, it is best not to wear jewelry (rings, necklaces, bracelets, ...) the risk of losing them.");
        $sortie11->setTranslatableLocale('en');
        $manager->persist($sortie11);
        
        $sortie12 = $this->getReference('sortie12');
        $sortie12->setTitre('Strolling and discovery of the Roman city');
        $sortie12->setDescriptif("An output heritage and discovery ride in the Roman city of Tipaza, accompanied by two tour guides, who will be very happy to share with us the stories and myths that carries this beautiful site!

Every Thursday, Friday and Saturday we will meet again in Tipaza, a journey in time, destination: The old Roman town, for 3 hours of discoveries!

Price: 2900 dinars / person.
and 2400 Dinars / person upon presentation of a student card.");
        $sortie12->setConditions("Register using the booking form to process your registration quickly.
Payment of a deposit of at least 30% (The last minute cancellations deprive others from participating),
Be of age,
Be healthy,
Foreign nationals must be subject of a declaration of presence to the local authorities : National PD,national gendarmerie, in the concerned region .
The activities Will be allocated  according to Weather conditions.
To conclude, during the activities, It’s preferred to not wear jewelries (Rings, Necklaces, bracelets,...) of the risk of loss.");
        $sortie12->setTranslatableLocale('en');
        $manager->persist($sortie12);
        
        /*
        $sortie13 = $this->getReference('sortie13');
        $sortie13->setTitre('A horse hike');
        $sortie13->setDescriptif("A novelty in Algeria. now it is possible to do horse riding! This is possible thanks to the riding club in Blida.

Every Wednesday, Thursday, Friday, we will meet in Blida to live 4 hours of unique adventure. a splendid circuit 20 km await you.

Price: 2900 dinars / person.
and 2400 Dinars / person upon presentation of a student card.");
        $sortie13->setConditions("Register using the booking form to process your registration quickly.
Payment of a deposit of at least 30% (The last minute cancellations deprive others from participating),
Be of age,
Be healthy,
Foreign nationals must be subject of a declaration of presence to the local authorities : National PD,national gendarmerie, in the concerned region .
The activities Will be allocated  according to Weather conditions.
To conclude, during the activities, It’s preferred to not wear jewelries (Rings, Necklaces, bracelets,...) of the risk of loss.");
        $sortie13->setTranslatableLocale('en');
        $manager->persist($sortie13);
        */
        
        $sortie14 = $this->getReference('sortie14');
        $sortie14->setTitre('Dominate the flying beast');
        $sortie14->setDescriptif("Still a novelty in Algeria New Activity sensation, new adventure!
Giant kites, insolent and immaitrisables, waiting for you to calm, every weekend at the beach Chenoua, Tipaza, time for a morning or an afternoon, have you come to confront .ces wings giant!
Together with our Mukhtar monitor, which will make us the pleasure of discovering the giant kites! The sensations will be unique, traction, traction and traction!
A backpack, a good gourmet sandwich, a large bottle of water, a pair of sneakers and a cap and our adventure!
Dominate the beast!

Normal rate: 2900 Dinas / person.");
        $sortie14->setConditions("Register using the booking form to process your registration quickly.
Payment of a deposit of at least 30% (The last minute cancellations deprive others from participating),
Be of age,
Be healthy,
Foreign nationals must be subject of a declaration of presence to the local authorities : National PD,national gendarmerie, in the concerned region .
The activities Will be allocated  according to Weather conditions.
To conclude, during the activities, It’s preferred to not wear jewelries (Rings, Necklaces, bracelets,...) of the risk of loss.");
        $sortie14->setTranslatableLocale('en');
        $manager->persist($sortie14);
        
        $sortie15 = $this->getReference('sortie15');
        $sortie15->setTitre('Paragliding training and internship');
        $sortie15->setDescriptif("See for yourself! This is what Jaafar offers.
A 7 day training full time or part time, at your own pace for an introduction to the activity of «Paragliding» and acquire the basic principles of flights in several cities in Algeria: Oran, Blida, Tipaza, Algiers, Bouira, Setif ... Become autonomous Paragliding!
program:
More than 56 hours of theory and practical sessions spread at your pace and in the company of qualified and experienced instructors.
Supplies and equipment available and suitable for all levels. Numerous flights per day. Handling, takeoff, flying, landing, meteorology, etc.
At the end of this training, the monitor will issue you a federal license, a certificate of completion «Autonomous Driver», an airline liability insurance of one year. AND you will be able to fly alone!");
        $sortie15->setConditions("Register using the booking form to reserve your place,
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
        $sortie15->setTranslatableLocale('en');
        $manager->persist($sortie15);
        
        $sortie16 = $this->getReference('sortie16');
        $sortie16->setTitre('Quad Discovery');
        $sortie16->setDescriptif("Every day we will meet at Djbel Chenoua, Tipaza, for a hike in Quad! 45 minutes at 1:00 discovery, morning and afternoon.

You will take the controls of a machine for a sensational adventure Mountain. We all share this moment of pleasure!
A backpack, a good gourmet sandwich, a large bottle of water, a pair of sneakers and a cap and our adventure!
Let's go !

Normal rate: 1900 dinars / person.
Student price: 1800 dinars / person.

Miscellaneous:
Using its own quad, the rate is 900 Dinars / person and helmets are mandatory.");
        $sortie16->setConditions("Register using the booking form to reserve your place,
Have his driver's license,
Be healthy,
Driver: Be of age,
Passenger: Minor from 10 years permitted with the presence of a parent,
Wearing clothes and mountain shoes (closed and rising) is strongly recommended,
Wearing gloves is recommended,
Foreign nationals should be a declaration of presence to the local authorities: National Police, National Gendarmerie, in the region concerned,
And also, during the activity, it is best not to wear jewelry (rings, necklaces, bracelets, ...) the risk of losing them.");
        $sortie16->setTranslatableLocale('en');
        $manager->persist($sortie16);
        
        $sortie17 = $this->getReference('sortie17');
        $sortie17->setTitre('Sensation Quad');
        $sortie17->setDescriptif("Still a novelty in Algeria !
Every day we will meet at Djbel Chenoua, Tipaza, for a hike in Quad! 1:00 to 1:15 of pure sensation morning and afternoon.

You will take the controls of a machine for a sensational adventure Mountain. We all share this moment of pleasure!
A backpack, a good gourmet sandwich, a large bottle of water, a pair of sneakers and a cap and our adventure!
Let's go !

Normal rate: dinars 2900 / person.
Student price: 2400 dinars / person.

Miscellaneous:
Using its own quad, the price is 1900 dinars / person and helmets are mandatory");
        $sortie17->setConditions("Register using the booking form to process your registration quickly.
Payment of a deposit of at least 30% (The last minute cancellations deprive others from participating),
Be of age,
Be healthy,
Foreign nationals must be subject of a declaration of presence to the local authorities : National PD,national gendarmerie, in the concerned region .
The activities Will be allocated  according to Weather conditions.
To conclude, during the activities, It’s preferred to not wear jewelries (Rings, Necklaces, bracelets,...) of the risk of loss.");
        $sortie17->setTranslatableLocale('en');
        $manager->persist($sortie17);
        
        $sortie18 = $this->getReference('sortie18');
        $sortie18->setTitre('Jet Ski Discovery');
        $sortie18->setDescriptif("A hike discovery will allow us to take control of the watercraft, while enjoying an extraordinary landscape in Tipaza. A fun time!
Duration: 45min of walking, including 15 minutes of driving / person.
Normal rate: 2900 Da");
        $sortie18->setConditions("Register using the booking form to process your registration quickly.
Payment of a deposit of at least 30% (The last minute cancellations deprive others from participating),
Be of age,
Be healthy,
Foreign nationals must be subject of a declaration of presence to the local authorities : National PD,national gendarmerie, in the concerned region .
The activities Will be allocated  according to Weather conditions.
To conclude, during the activities, It’s preferred to not wear jewelries (Rings, Necklaces, bracelets,...) of the risk of loss.");
        $sortie18->setTranslatableLocale('en');
        $manager->persist($sortie18);
        
        $sortie19 = $this->getReference('sortie19');
        $sortie19->setTitre('Jet Ski Ride');
        $sortie19->setDescriptif("We will take the controls of the Jet Ski, from which to conquer the beautiful coastline of Tipaza. Scenery breathtaking. A real fun time!
Duration: 1h15min hike, including 25 minutes of driving / person.

Normal rate: 3900 Da");
        $sortie19->setConditions("Register using the booking form to process your registration quickly.
Payment of a deposit of at least 30% (The last minute cancellations deprive others from participating),
Be of age,
Be healthy,
Foreign nationals must be subject of a declaration of presence to the local authorities : National PD,national gendarmerie, in the concerned region .
The activities Will be allocated  according to Weather conditions.
To conclude, during the activities, It’s preferred to not wear jewelries (Rings, Necklaces, bracelets,...) of the risk of loss.");
        $sortie19->setTranslatableLocale('en');
        $manager->persist($sortie19);
        
        $sortie20 = $this->getReference('sortie20');
        $sortie20->setTitre('Jet Ski Sensation');
        $sortie20->setDescriptif("A beautiful hiking jet ski, off the coast of Tipaza, supervised by professional and experienced instructors, We'll Fly sensational machines for hiking discovery of an extraordinary landscape in Tipaza. A fun time!
Duration: 1h30min hike, including 30 minutes of driving / person

Normal rate: 4900 Da");
        $sortie20->setConditions("Register using the booking form to process your registration quickly.
Payment of a deposit of at least 30% (The last minute cancellations deprive others from participating),
Be of age,
Be healthy,
Foreign nationals must be subject of a declaration of presence to the local authorities : National PD,national gendarmerie, in the concerned region .
The activities Will be allocated  according to Weather conditions.
To conclude, during the activities, It’s preferred to not wear jewelries (Rings, Necklaces, bracelets,...) of the risk of loss.");
        $sortie20->setTranslatableLocale('en');
        $manager->persist($sortie20);
        
        $sortie21 = $this->getReference('sortie21');
        $sortie21->setTitre('Jet Ski Trip');
        $sortie21->setDescriptif("We will take the controls of the Jet Ski, for a beautiful ride Wed Framed by professionals and experienced instructors, we will leave to the discovery of an extraordinary landscape in Tipaza. A fun time!
Duration: 2h15min of walking, including 45 minutes of driving / person.
Normal rate: 6400 Da");
        $sortie21->setConditions("Register using the booking form to process your registration quickly.
Payment of a deposit of at least 30% (The last minute cancellations deprive others from participating),
Be of age,
Be healthy,
Foreign nationals must be subject of a declaration of presence to the local authorities : National PD,national gendarmerie, in the concerned region .
The activities Will be allocated  according to Weather conditions.
To conclude, during the activities, It’s preferred to not wear jewelries (Rings, Necklaces, bracelets,...) of the risk of loss.");
        $sortie21->setTranslatableLocale('en');
        $manager->persist($sortie21);
        
        $sortie22 = $this->getReference('sortie22');
        $sortie22->setTitre('Jet Ski Evasion');
        $sortie22->setDescriptif("An escape jet ski off the coast of Tipaza. Supervised by professionals and experienced instructors, We'll Fly sensational machines to hike to an extraordinary landscape in Tipaza. A unique moment of escape!
Duration: 3h00 Hiking, 1:00 whose driving / person.

Normal rate: 7400 Da");
        $sortie22->setConditions("Register using the booking form to process your registration quickly.
Payment of a deposit of at least 30% (The last minute cancellations deprive others from participating),
Be of age,
Be healthy,
Foreign nationals must be subject of a declaration of presence to the local authorities : National PD,national gendarmerie, in the concerned region .
The activities Will be allocated  according to Weather conditions.
To conclude, during the activities, It’s preferred to not wear jewelries (Rings, Necklaces, bracelets,...) of the risk of loss.");
        $sortie22->setTranslatableLocale('en');
        $manager->persist($sortie22);
        
        $sortie23 = $this->getReference('sortie23');
        $sortie23->setTitre('Temptation buoy');
        $sortie23->setDescriptif("An exit in Outboard, buoys and swimming sensation off, Monday to Saturday of the month of August from 10:00 to 20:00 for a ride of an hour and a half with rodeo.

Are you attracted by the idea of a cruise along the Bay of Tipaza
Discover another side of Tipaza, speedboat, the wind in your hair, ...
Off in the swimming breaks in natural caves,
Watersports activities for challengers; you can embark on our inflatable buoys ... Nothing to fear except go down the drain, so brace yourself, the rodeo begins!

Normal rate: 2900 dinars / person.
Student price: 2400 dinars / person.");
        $sortie23->setConditions("Register using the booking form to process your registration quickly.
Payment of a deposit of at least 30% (The last minute cancellations deprive others from participating),
Be of age,
Be healthy,
Foreign nationals must be subject of a declaration of presence to the local authorities : National PD,national gendarmerie, in the concerned region .
The activities Will be allocated  according to Weather conditions.
To conclude, during the activities, It’s preferred to not wear jewelries (Rings, Necklaces, bracelets,...) of the risk of loss.");
        $sortie23->setTranslatableLocale('en');
        $manager->persist($sortie23);
        
        $sortie24 = $this->getReference('sortie24');
        $sortie24->setTitre('Dirty Quad Trip - Full Day');
        $sortie24->setDescriptif('A "Quad Trip" fun & discovery time of a day, with lunch at Mount Chenoua,
You will take orders for our Quads pack of wild mountain Rita, Robusta, nervousness, Tornado, etc. Come climb!
In the program :
09h00-09h30: Arrival & Welcome of participants,

9:30 to 10:00: instructions and introduction to Quad

10:00 a.m. to 12:00: Quad & Hiking breaks photos,

12:00 to 1:00 p.m.: Barbecue Outdoor & Cooling,

1:00 p.m. to 4:00 p.m.: Hiking Suite Quad Breaks & Photos
4:00 p.m. to 4:30 p.m.: Fin & Departure of participants.
Let\'s go !

Normal rate: 11900 dinars / person.
Student rate: 10900 dinars / person.');
        $sortie24->setConditions("Register using the booking form to process your registration quickly.
Payment of a deposit of at least 30% (The last minute cancellations deprive others from participating),
Be of age,
Be healthy,
Foreign nationals must be subject of a declaration of presence to the local authorities : National PD,national gendarmerie, in the concerned region .
The activities Will be allocated  according to Weather conditions.
To conclude, during the activities, It’s preferred to not wear jewelries (Rings, Necklaces, bracelets,...) of the risk of loss.");
        $sortie24->setTranslatableLocale('en');
        $manager->persist($sortie24);
        
        $sortie25 = $this->getReference('sortie25');
        $sortie25->setTitre('Quad After Work');
        $sortie25->setDescriptif('A hike "After Work" Quad, to decompress?
Every evening at 19:00, we meet at Mount Chenoua, Tipaza, for a walk in the mountains, sunset live, absolute quiet, 1:15 to 1:30 of pure pleasure. The best niche of the day.
You will take the controls of a machine for a sensational adventure Mountain.
A backpack, a good gourmet sandwich, a large bottle of water, a pair of sneakers and a cap and our adventure!
Let\'s go !

Normal rate: Dinas 3900 / person.
Student price: 3400 dinars / person.');
        $sortie25->setConditions("Register using the booking form to process your registration quickly.
Payment of a deposit of at least 30% (The last minute cancellations deprive others from participating),
Be of age,
Be healthy,
Foreign nationals must be subject of a declaration of presence to the local authorities : National PD,national gendarmerie, in the concerned region .
The activities Will be allocated  according to Weather conditions.
To conclude, during the activities, It’s preferred to not wear jewelries (Rings, Necklaces, bracelets,...) of the risk of loss.");
        $sortie25->setTranslatableLocale('en');
        $manager->persist($sortie25);
        
        $categorie2 = $this->getReference('categorie2');
        $categorie2->setNom('mountain');
        $categorie2->setTranslatableLocale('en');
        $manager->persist($categorie2);
        
        $categorie3 = $this->getReference('categorie3');
        $categorie3->setNom('sand');
        $categorie3->setTranslatableLocale('en');
        $manager->persist($categorie3);
        
        $categorie4 = $this->getReference('categorie4');
        $categorie4->setNom('sea');
        $categorie4->setTranslatableLocale('en');
        $manager->persist($categorie4);
        
        $categorie5 = $this->getReference('categorie5');
        $categorie5->setNom('air');
        $categorie5->setTranslatableLocale('en');
        $manager->persist($categorie5);
        
        $categorie6 = $this->getReference('categorie6');
        $categorie6->setNom('land');
        $categorie6->setTranslatableLocale('en');
        $manager->persist($categorie6);
        
        $categorie7 = $this->getReference('categorie7');
        $categorie7->setNom('traineeship');
        $categorie7->setTranslatableLocale('en');
        $manager->persist($categorie7);
        
        $ticket1 = $this->getReference('ticket1');
        $ticket1->setNom('Discovery pack');
        $ticket1->setTranslatableLocale('en');
        $manager->persist($ticket1);
        
        $ticket2 = $this->getReference('ticket2');
        $ticket2->setNom('Leisure pack 3');
        $ticket2->setTranslatableLocale('en');
        $manager->persist($ticket2);
        
        $ticket3 = $this->getReference('ticket3');
        $ticket3->setNom('Leisure pack 6');
        $ticket3->setTranslatableLocale('en');
        $manager->persist($ticket3);
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 15; // l'ordre dans lequel les fichiers sont chargés
    }
}
