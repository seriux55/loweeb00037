<?php

namespace Base\BledvoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Operateur
 *
 * @ORM\Table(name="bledvoyage__Operateur")
 * @ORM\Entity(repositoryClass="Base\BledvoyageBundle\Entity\OperateurRepository")
 */
class Operateur
{
    public function __construct() {
        $this->dateTime = new \DateTime();
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
     * @ORM\ManyToOne(targetEntity="Base\BledvoyageBundle\Entity\Commande")
     * @ORM\JoinColumn(nullable=true)
     */
    private $commande;

    /**
     * @ORM\ManyToOne(targetEntity="Base\BledvoyageBundle\Entity\Booking")
     * @ORM\JoinColumn(nullable=true)
     */
    private $booking;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=255, options={ "comment"="1:note, 2:confirmer, 3:acompte, 4:facturer, 5:avis" } )
     */
    private $action;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_time", type="datetime")
     */
    private $dateTime;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=255)
     */
    private $ip;


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
     * @return Operateur
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

    /**
     * Set commande
     *
     * @param \Base\BledvoyageBundle\Entity\Commande $commande
     * @return Operateur
     */
    public function setCommande(\Base\BledvoyageBundle\Entity\Commande $commande)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return \Base\BledvoyageBundle\Entity\Commande
     */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * Set booking
     *
     * @param \Base\BledvoyageBundle\Entity\Booking $booking
     * @return Operateur
     */
    public function setBooking(\Base\BledvoyageBundle\Entity\Booking $booking)
    {
        $this->booking = $booking;

        return $this;
    }

    /**
     * Get booking
     *
     * @return \Base\BledvoyageBundle\Entity\Booking
     */
    public function getBooking()
    {
        return $this->booking;
    }

    /**
     * Set action
     *
     * @param string $action
     * @return Operateur
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set dateTime
     *
     * @param \DateTime $dateTime
     * @return Operateur
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    /**
     * Get dateTime
     *
     * @return \DateTime 
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return Operateur
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }
}
