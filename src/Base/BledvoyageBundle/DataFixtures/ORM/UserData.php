<?php

namespace Base\BledvoyageBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Base\UserBundle\Entity\User;

class UserData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $user1 = new User();
        $user1->setBorn(1991);
        $user1->setEmail('nadir.allam@bledvoyage.com');
        $user1->setFirstname('ALLAM');
        $user1->setGender(1);
        $user1->setPhone('0601020304');
        $user1->setSecondename('Nadir');
        $user1->setIp('127.0.0.1');
        $user1->setEnabled('1');
        $user1->setRoles(array('ROLE_ADMIN'));
        $user1->setPassword($this->container->get('security.encoder_factory')->getEncoder($user1)->encodePassword('Tictic2', $user1->getSalt()));
        $manager->persist($user1);
        
        $user2 = new User();
        $user2->setBorn(1984);
        $user2->setEmail('karim.mansoura@bledvoyage.com');
        $user2->setFirstname('Mansoura');
        $user2->setGender(1);
        $user2->setPhone('0601020304');
        $user2->setSecondename('Karim');
        $user2->setIp('127.0.0.1');
        $user2->setEnabled('1');
        $user2->setRoles(array('ROLE_ADMIN'));
        $user2->setPassword($this->container->get('security.encoder_factory')->getEncoder($user2)->encodePassword('021250031', $user2->getSalt()));
        $manager->persist($user2);
        
        $user3 = new User();
        $user3->setBorn(1990);
        $user3->setEmail('soumia.m@bledvoyage.com');
        $user3->setFirstname('Mansor');
        $user3->setGender(0);
        $user3->setPhone('0601020304');
        $user3->setSecondename('Soumia');
        $user3->setIp('127.0.0.1');
        $user3->setEnabled('1');
        $user3->setRoles(array('ROLE_MODERATEUR'));
        $user3->setApropos("Je suis Mohamed, j'habite Tipaza, native de la région et amoureux de la nature, j'accompagne des touristes depuis plusieurs année dans cette magnifique région. Je serai tres ravi de vous faire découvrir la beauté et le patrimoine du Mont Chenoua. ");
        $user3->setPassword($this->container->get('security.encoder_factory')->getEncoder($user3)->encodePassword('aaaaaa', $user3->getSalt()));
        $manager->persist($user3);
        
        $user4 = new User();
        $user4->setBorn(1984);
        $user4->setEmail('amina.k@bledvoyage.com');
        $user4->setFirstname('K');
        $user4->setGender(0);
        $user4->setPhone('0601020304');
        $user4->setSecondename('Amina');
        $user4->setIp('127.0.0.1');
        $user4->setEnabled('1');
        $user4->setRoles(array('ROLE_MODERATEUR'));
        $user4->setApropos("Salut tout le monde, 
Je suis Amar, j'habite Alger, je suis un amoureux de la plongée sous-marine, je donne des cours de plongée aux nouveaux plongeurs, ainsi qu'aux expérimentés depuis des années, dans la région de Tipaza. 
Je suis aujourd'hui moniteur professionnel, (3 étoiles cmas). Je serai tres ravi de partager ma passion avec vous et de vous faire découvrir la beautÃ© la plongée, d'explorer ensemble les fonds sous-marins de quelques régions de Tipaza et de son patrimoine exceptionne");
        $user4->setPassword($this->container->get('security.encoder_factory')->getEncoder($user4)->encodePassword('aaaaaa', $user4->getSalt()));
        $manager->persist($user4);
        
        $user5 = new User();
        $user5->setBorn(1980);
        $user5->setEmail('tina.b@bledvoyage.com');
        $user5->setFirstname('B');
        $user5->setGender(0);
        $user5->setPhone('0601020304');
        $user5->setSecondename('Tina');
        $user5->setIp('127.0.0.1');
        $user5->setEnabled('1');
        $user5->setRoles(array('ROLE_MODERATEUR'));
        $user5->setPicture($this->getReference('picture65'));
        $user5->setApropos("Salut, 
Je suis Mansor, j'habite Tipaza, Je navigue en Mer depuis des années. Je suis un amoureux de la nature. j'organise des sorties et croisiere en Mer pour faire découvrir la beauté de des cotes de Tipaza.
Montez a bord de mon bateau, pour une belle balade en Mer. Je vous ferai visiter la ville de Tipaza, ces plages, des ruines romaines, des montagnes et sa corniche, avec des pauses baignade, et des jeux nautiques pour les amateurs de SENSATION ! ");
        $user5->setPassword($this->container->get('security.encoder_factory')->getEncoder($user5)->encodePassword('aaaaaa', $user5->getSalt()));
        $manager->persist($user5);
        
        $user6 = new User();
        $user6->setBorn(1990);
        $user6->setEmail('karim.man4@live.fr');
        $user6->setFirstname('Amar, Mohamed et Lakroum');
        $user6->setGender(1);
        $user6->setPhone('0601020304');
        $user6->setSecondename('Amar, Mohamed et Lakroum');
        $user6->setIp('127.0.0.1');
        $user6->setEnabled('1');
        $user6->setPicture($this->getReference('picture61'));
        $user6->setApropos("Salut, 
Nous sommes Amar, Mohamed et lakroum, des passionnés de la nature, de la plongée et d'aventure et moniteurs expérimentés. Nous nous sommes peut-etre rencontrés lors de nos sorties bateau, plongée, rando, ... a Tipaza.
Nous nous sommes unis proposer une offre « week end détente » tout compris : activités, hébergement, balades, ftor et shor, ... Nous avons pensé a ceux et celle qui habitent loin de Tipaza, Oran, Sidi bel abbes, Canstantine,... Qui nous contactent souvent pour nous demander des activités avec hébergement.  C’est aussi le deal idéal pour ceux et celles qui souhaitent se ressourcer et fuir la ville, le bruit, la pollution, le stress quotidien. Nous serons ravis de vous accueillir et de partager nos passions avec vous, le temps d’un week end a Tipaza. Marhba bikoum !");
        $user6->setPassword($this->container->get('security.encoder_factory')->getEncoder($user6)->encodePassword('aaaaaa', $user6->getSalt()));
        $manager->persist($user6);
        
        $user7 = new User();
        $user7->setBorn(1990);
        $user7->setEmail('karim.man5@live.fr');
        $user7->setFirstname('El Hadi');
        $user7->setGender(0);
        $user7->setPhone('0601020304');
        $user7->setSecondename('El Hadi');
        $user7->setIp('127.0.0.1');
        $user7->setEnabled('1');
        $user7->setPicture($this->getReference('picture68'));
        $user7->setPassword($this->container->get('security.encoder_factory')->getEncoder($user7)->encodePassword('aaaaaa', $user7->getSalt()));
        $manager->persist($user7);
        
        $user8 = new User();
        $user8->setBorn(1990);
        $user8->setEmail('karim.man6@live.fr');
        $user8->setFirstname('Chahira');
        $user8->setGender(1);
        $user8->setPhone('0601020304');
        $user8->setSecondename('Chahira');
        $user8->setIp('127.0.0.1');
        $user8->setEnabled('1');
        $user8->setPicture($this->getReference('picture67'));
        $user8->setPassword($this->container->get('security.encoder_factory')->getEncoder($user8)->encodePassword('aaaaaa', $user8->getSalt()));
        $manager->persist($user8);
        
        $user9 = new User();
        $user9->setBorn(1990);
        $user9->setEmail('karim.man7@live.fr');
        $user9->setFirstname('Slimane');
        $user9->setGender(0);
        $user9->setPhone('0601020304');
        $user9->setSecondename('Slimane');
        $user9->setIp('127.0.0.1');
        $user9->setEnabled('0');
        $user9->setPicture($this->getReference('picture63'));
        $user9->setApropos("Je suis Slimane, j’habite Chenoua plage, Tipaza. Je suis médecin de profession. Amoureux de la nature, je passe mon temps libre entre montagne et Mer, en compagnie de ma petite famille et mes chiens. Je serai tres ravi de vous faire découvrir la beauté et le patrimoine du Mont Chenoua.");
        $user9->setPassword($this->container->get('security.encoder_factory')->getEncoder($user9)->encodePassword('aaaaaa', $user9->getSalt()));
        $manager->persist($user9);
        
        $user10 = new User();
        $user10->setBorn(1992);
        $user10->setEmail('karim.man8@live.fr');
        $user10->setFirstname('Samia');
        $user10->setGender(1);
        $user10->setPhone('');
        $user10->setSecondename('Samia');
        $user10->setIp('127.0.0.1');
        $user10->setEnabled('1');
        $user10->setPicture($this->getReference('picture64'));
        $user10->setPassword($this->container->get('security.encoder_factory')->getEncoder($user10)->encodePassword('aaaaaa', $user10->getSalt()));
        $manager->persist($user10);
        
        $user11 = new User();
        $user11->setBorn(1992);
        $user11->setEmail('karim.man9@live.fr');
        $user11->setFirstname('Mokhtar');
        $user11->setGender(1);
        $user11->setPhone('');
        $user11->setSecondename('Mokhtar');
        $user11->setIp('127.0.0.1');
        $user11->setEnabled('1');
        $user11->setPicture($this->getReference('picture69'));
        $user11->setPassword($this->container->get('security.encoder_factory')->getEncoder($user11)->encodePassword('aaaaaa', $user11->getSalt()));
        $manager->persist($user11);
        
        $user12 = new User();
        $user12->setBorn(1992);
        $user12->setEmail('karim.man10@live.fr');
        $user12->setFirstname('Djaafar');
        $user12->setGender(1);
        $user12->setPhone('');
        $user12->setSecondename('Djaafar');
        $user12->setIp('127.0.0.1');
        $user12->setEnabled('1');
        $user12->setPicture($this->getReference('picture70'));
        $user12->setPassword($this->container->get('security.encoder_factory')->getEncoder($user12)->encodePassword('aaaaaa', $user12->getSalt()));
        $manager->persist($user12);
        
        $user13 = new User();
        $user13->setBorn(1992);
        $user13->setEmail('karim.man11@live.fr');
        $user13->setFirstname('Islem');
        $user13->setGender(1);
        $user13->setPhone('');
        $user13->setSecondename('Islem');
        $user13->setIp('127.0.0.1');
        $user13->setEnabled('1');
        $user13->setPicture($this->getReference('picture66'));
        $user13->setApropos("Bonjour tout le monde, Je m'appelle Islem, j'ai 23 ans, étudiant phytopharmacie, je suis un grand passionné du VTT. Je pratique l'activité depuis 2007. Je passe mon temps libre à faire du VTT en montagne, dans différentes régions d'Algérie. Je serai très ravi de partager ma passion avec vous ! Chassez la routine !");
        $user13->setPassword($this->container->get('security.encoder_factory')->getEncoder($user13)->encodePassword('aaaaaa', $user13->getSalt()));
        $manager->persist($user13);
        
        $user14 = new User();
        $user14->setBorn(1992);
        $user14->setEmail('karim.man12@live.fr');
        $user14->setFirstname('Khadidja');
        $user14->setGender(1);
        $user14->setPhone('');
        $user14->setSecondename('Khadidja');
        $user14->setIp('127.0.0.1');
        $user14->setEnabled('1');
        $user14->setApropos("Bonjour, 
Je suis khadidja Benmessaoud, native de Tamanrasset, passionnée de voyage et du désert. Avec mon équipe, nous accompagnons et assistons des touristes du monde entier depuis 14 ans, dans l'un des plus beaux patrimoines Algérien et africain : le désert algérien.

Notre agence « Itinérance tourisme » est partenaire avec plusieurs agences de tourisme françaises ; nouvelles frontières, Point Afrique, CroqueNature, etc. Nous collaborons avec les grands médias : France 5, Escales,...");
        $user14->setPassword($this->container->get('security.encoder_factory')->getEncoder($user14)->encodePassword('aaaaaa', $user14->getSalt()));
        $manager->persist($user14);
        
        $user15 = new User();
        $user15->setBorn(1992);
        $user15->setEmail('karim.man13@live.fr');
        $user15->setFirstname('Djamel');
        $user15->setGender(1);
        $user15->setPhone('');
        $user15->setSecondename('Djamel');
        $user15->setIp('127.0.0.1');
        $user15->setEnabled('1');
        $user15->setPicture($this->getReference('picture62'));
        $user15->setPassword($this->container->get('security.encoder_factory')->getEncoder($user15)->encodePassword('aaaaaa', $user15->getSalt()));
        $manager->persist($user15);
        
        $manager->flush();
        
        $this->addReference('user1',  $user1);
        $this->addReference('user2',  $user2);
        $this->addReference('user3',  $user3);
        $this->addReference('user4',  $user4);
        $this->addReference('user5',  $user5);
        $this->addReference('user6',  $user6);
        $this->addReference('user7',  $user7);
        $this->addReference('user8',  $user8);
        $this->addReference('user9',  $user9);
        $this->addReference('user10', $user10);
        $this->addReference('user11', $user11);
        $this->addReference('user12', $user12);
        $this->addReference('user13', $user13);
        $this->addReference('user14', $user14);
        $this->addReference('user15', $user15);
    }
    
    public function getOrder()
    {
        return 3; // l'ordre dans lequel les fichiers sont chargés
    }
}
