<?php

namespace Base\BledvoyageBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Base\BledvoyageBundle\Entity\CategorieTicket;

class CategorieTicketData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $ticket1 = new CategorieTicket();
        $ticket1->setNom("Pack découverte");
        $ticket1->setDescription("En commandant ce pack, vous recevrez un ticket cadeau qui permettra à son bénéficiaire de participer à une activité d'une valeur de 1500 Dinars, au lieu de 2900 Dinars. 1400 Dinars d'économie.");
        $ticket1->setConditions("En validant votre commande, vous acceptez nos Conditions.
Il s'agit d'une offre promotion à tarif très réduit.

Les réservations se font à au moins 15 jours à l'avance.

Annulation possible jusqu'à 48h avant la date de vote sortie.

Durant toute sa période de validité, le ticket reste échangeable, modifiable, mais non remboursable.

Dans le cas de perte ou de vol de votre ticket, la société ne peut pas être tenue comme responsable. Le pack ne peut être restitué. Aucun remboursement, ou dédommagement n'est possible.");
        $ticket1->setTarif("1500");
        $ticket1->setDuree("3");
        $ticket1->setNombreActivite("1");
        $ticket1->setEconomie("1400");
        $ticket1->setPhoto("pack_1.jpg");
        $ticket1->setDateTime(new \DateTime());
        $manager->persist($ticket1);
        
        $ticket2 = new CategorieTicket();
        $ticket2->setNom("Pack loisirs 3");
        $ticket2->setDescription("En commandant ce pack, vous recevrez un ticket cadeau qui permettra à son bénéficiaire de participer à 3 activités d'une valeur de 1400 Dinars/activité, au lieu de 2900 Dinars/activité. 4500 Dinars d'économie.
Le bénéficiaire peut aussi l'utiliser pour partager 1 activité avec 2 autres personnes.");
        $ticket2->setConditions("En validant votre commande, vous acceptez nos Conditions.
Il s'agit d'une offre promotion à tarif très réduit.

Les réservations se font à au moins 15 jours à l'avance.

Annulation possible jusqu'à 48h avant la date de vote sortie.

Durant toute sa période de validité, le ticket reste échangeable, modifiable, mais non remboursable.

Dans le cas de perte ou de vol de votre ticket, la société ne peut pas être tenue comme responsable. Le pack ne peut être restitué. Aucun remboursement, ou dédommagement n'est possible.");
        $ticket2->setTarif("4200");
        $ticket2->setDuree("3");
        $ticket2->setNombreActivite("3");
        $ticket2->setEconomie("4500");
        $ticket2->setPhoto("pack_3.jpg");
        $ticket2->setDateTime(new \DateTime());
        $manager->persist($ticket2);
        
        $ticket3 = new CategorieTicket();
        $ticket3->setNom("Pack loisirs 6");
        $ticket3->setDescription("En commandant ce pack, vous recevrez un ticket cadeau qui permettra à son bénéficiaire de participer à 6 activités d'une valeur de 1350 Dinars/activité, au lieu de 2900 Dinars/activité. 9300 Dinars d'économie.
Le bénéficiaire peut aussi l'utiliser pour partager des activités avec ces proches.");
        $ticket3->setConditions("En validant votre commande, vous acceptez nos Conditions.
Il s'agit d'une offre promotion à tarif très réduit.

Les réservations se font à au moins 15 jours à l'avance.

Annulation possible jusqu'à 48h avant la date de vote sortie.

Durant toute sa période de validité, le ticket reste échangeable, modifiable, mais non remboursable.

Dans le cas de perte ou de vol de votre ticket, la société ne peut pas être tenue comme responsable. Le pack ne peut être restitué. Aucun remboursement, ou dédommagement n'est possible.");
        $ticket3->setTarif("8100");
        $ticket3->setDuree("3");
        $ticket3->setNombreActivite("6");
        $ticket3->setEconomie("9300");
        $ticket3->setPhoto("pack_6.jpg");
        $ticket3->setDateTime(new \DateTime());
        $manager->persist($ticket3);
        
        $manager->flush();
        
        $this->addReference('ticket1',  $ticket1);
        $this->addReference('ticket2',  $ticket2);
        $this->addReference('ticket3',  $ticket3);
    }
    
    public function getOrder()
    {
        return 8; // l'ordre dans lequel les fichiers sont chargés
    }
}
