<?php

namespace Base\BledvoyageBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Base\BledvoyageBundle\Entity\AdminComment;

class AdminCommentData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $comment1 = new AdminComment();
        $comment1->setUser($this->getReference('user2'));
        $comment1->setAdminStatut($this->getReference('statut1'));
        $comment1->setComment("Je n'arrive pas a le joindre!");
        $manager->persist($comment1);
        
        $comment2 = new AdminComment();
        $comment2->setUser($this->getReference('user4'));
        $comment2->setAdminStatut($this->getReference('statut1'));
        $comment2->setComment("Réessaye cet après midi");
        $manager->persist($comment2);
        
        $comment3 = new AdminComment();
        $comment3->setUser($this->getReference('user2'));
        $comment3->setAdminStatut($this->getReference('statut1'));
        $comment3->setComment("Finalement, je l'ai eu");
        $manager->persist($comment3);
        
        $comment4 = new AdminComment();
        $comment4->setUser($this->getReference('user1'));
        $comment4->setAdminStatut($this->getReference('statut3'));
        $comment4->setComment("Je les ai programmé");
        $manager->persist($comment4);
        
        $manager->flush();
        
        $this->addReference('comment1', $comment1);
        $this->addReference('comment2', $comment2);
        $this->addReference('comment3', $comment3);
        $this->addReference('comment4', $comment4);
    }
    
    public function getOrder()
    {
        return 14; // l'ordre dans lequel les fichiers sont chargés
    }
}
