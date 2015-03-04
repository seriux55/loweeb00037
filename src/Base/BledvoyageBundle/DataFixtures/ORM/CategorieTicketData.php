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
        $ticket1->setDescription("En commandant ce pack, vous recevrez un ticket cadeau qui permettra à son bénéficiaire de participer à une activité d'une valeur de 1900 Dinars, au lieu de 2900 Dinars. 1000 Dinars d'économie.
Le bénéficiaire peut aussi l'utiliser pour compléter le paiement d'une activité supérieur à 3000 dinars.");
        $ticket1->setConditions("Il s'agit d'une offre promotion à tarif très réduit.
Annulation possible jusqu'à 48h avant la date de vote sortie.
Durant toute sa période de validité, le ticket reste échangeable, modifiable, mais non remboursable.");
        $ticket1->setTarif("1900");
        $ticket1->setDuree("6");
        $ticket1->setNombreActivite("1");
        $ticket1->setEconomie("1000");
        $ticket1->setPhoto("pack_1.png");
        $ticket1->setDateTime(new \DateTime());
        $manager->persist($ticket1);
        
        $ticket2 = new CategorieTicket();
        $ticket2->setNom("Pack loisirs 3");
        $ticket2->setDescription("En commandant ce pack, vous recevrez un ticket cadeau qui permettra à son bénéficiaire de participer à 3 activité d'une valeur de 1800 Dinars/activité, au lieu de 2900 Dinars/activité. 3300 Dinars d'économie.
Le bénéficiaire peut aussi l'utiliser pour compléter le paiement d'une activité supérieur à 3000 dinars. Ou bien, l'utiliser pour partager 1 activité avec 2 autres personnes.");
        $ticket2->setConditions("Il s'agit d'une offre promotion à tarif très réduit.
Annulation possible jusqu'à  48h avant la date de vote sortie.
Durant toute sa période de validité, le ticket reste échangeable, modifiable, mais non remboursable.");
        $ticket2->setTarif("5400");
        $ticket2->setDuree("6");
        $ticket2->setNombreActivite("3");
        $ticket2->setEconomie("3300");
        $ticket2->setPhoto("pack_3.png");
        $ticket2->setDateTime(new \DateTime());
        $manager->persist($ticket2);
        
        $ticket3 = new CategorieTicket();
        $ticket3->setNom("Pack loisirs 6");
        $ticket3->setDescription("En commandant ce pack, vous recevrez un ticket cadeau qui permettra à son bénéficiaire de participer à 6 activité d'une valeur de 1800 Dinars/activité, au lieu de 2900 Dinars/activité. 6500 Dinars d'économie.
Le bénéficiaire peut aussi l'utiliser pour partager des activités avec ces proches.");
        $ticket3->setConditions("Il s'agit d'une offre promotion à tarif très réduit.
Annulation possible jusqu'à  48h avant la date de vote sortie.
Durant toute sa période de validité, le ticket reste échangeable, modifiable, mais non remboursable.");
        $ticket3->setTarif("10900");
        $ticket3->setDuree("9");
        $ticket3->setNombreActivite("6");
        $ticket3->setEconomie("6500");
        $ticket3->setPhoto("pack_6.png");
        $ticket3->setDateTime(new \DateTime());
        $manager->persist($ticket3);
        
        $ticket4 = new CategorieTicket();
        $ticket4->setNom("Pack loisirs 12");
        $ticket4->setDescription("En commandant ce pack, vous recevrez un ticket cadeau qui permettra à son bénéficiaire de participer à 12 activité d'une valeur de 1700 Dinars/activité au lieu de 2900 Dinars/activité. 14900 Dinars d'économie.
Le bénéficiaire peut aussi l'utiliser pour partager des activités avec ces proches.");
        $ticket4->setConditions("Il s'agit d'une offre promotion à tarif très réduit.
Annulation possible jusqu'à  48h avant la date de vote sortie.
Durant toute sa période de validité, le ticket reste échangeable, modifiable, mais non remboursable.");
        $ticket4->setTarif("19900");
        $ticket4->setDuree("12");
        $ticket4->setNombreActivite("12");
        $ticket4->setEconomie("14900");
        $ticket4->setPhoto("pack_12.png");
        $ticket4->setDateTime(new \DateTime());
        $manager->persist($ticket4);
        
        $manager->flush();
        
        $this->addReference('ticket1',  $ticket1);
        $this->addReference('ticket2',  $ticket2);
        $this->addReference('ticket3',  $ticket3);
        $this->addReference('ticket4',  $ticket4);
    }
    
    public function getOrder()
    {
        return 7; // l'ordre dans lequel les fichiers sont chargés
    }
}
