<?php

namespace Base\BledvoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * AdminStatut
 *
 * @ORM\Table(name="bledvoyage__AdminStatut")
 * @ORM\Entity(repositoryClass="Base\BledvoyageBundle\Entity\AdminStatutRepository")
 */
class AdminStatut
{
    public function __construct()
    {
        $this->users  = new ArrayCollection();
        $this->etat   = '3';
        $this->enable = '1';
    }
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Base\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToMany(targetEntity="Base\UserBundle\Entity\User", cascade={"persist"})
     * @ORM\JoinTable(name="bledvoyage__adminstatut_user")
     */
    private $users;
    
    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255, nullable=true)
     */
    private $etat;
    
    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255, nullable=true, options={"comment" = "0:Annulé, 1:Traité, 2:En attente, 3:En cours"})
     */
    private $statut;
    
    /**
     * @var string
     *
     * @ORM\Column(name="enable", type="string", length=255, nullable=true, options={"comment" = "0:Annulé, 1:Traité, 2:En attente, 3:En cours"})
     */
    private $enable;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Set user
     *
     * @param \Base\UserBundle\Entity\User $user
     * @return AdminStatut
     */
    public function setUser(\Base\UserBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Base\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
    
    // Notez le singulier, on ajoute une seule catégorie à la fois
    public function addUser(\Base\UserBundle\Entity\User $user)
    {
        // Ici, on utilise l'ArrayCollection vraiment comme un tableau
        $this->users[] = $user;

        return $this;
    }

    public function removeUser(\Base\UserBundle\Entity\User $user)
    {
        // Ici on utilise une méthode de l'ArrayCollection, pour supprimer la catégorie en argument
        $this->users->removeElement($user);
    }

    // Notez le pluriel, on récupère une liste de catégories ici !
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return AdminStatut
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set statut
     *
     * @param string $statut
     * @return AdminStatut
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string 
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set enable
     *
     * @param string $enable
     * @return AdminStatut
     */
    public function setEnable($enable)
    {
        $this->enable = $enable;

        return $this;
    }

    /**
     * Get enable
     *
     * @return string 
     */
    public function getEnable()
    {
        return $this->enable;
    }
}
