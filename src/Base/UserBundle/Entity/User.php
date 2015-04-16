<?php

namespace Base\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="bledvoyage__User")
 */
class User extends BaseUser
{
    //@ORM\OneToOne(targetEntity="Base\NrohoBundle\Entity\ImageProfil", cascade={"persist"})
    
    /**
     * Le constructeur
     */
    public function __construct()
    {
        parent::__construct();
        $this->deposit          = new \Datetime();
        $this->vip              = "0";
        $this->nbrReservation   = "0";
        $this->nbrParticipation = "0";
    }
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\OneToOne(targetEntity="Base\BledvoyageBundle\Entity\Picture", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $picture;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="gender", type="integer")
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="secondename", type="string", length=255)
     */
    private $secondename;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_entreprise", type="string", length=255, nullable=true)
     */
    private $nomEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_entreprise", type="string", length=511, nullable=true)
     */
    private $adresseEntreprise;

    /**
     * @var integer
     *
     * @ORM\Column(name="born", type="integer")
     */
    private $born;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="apropos", type="string", length=511, nullable=true)
     */
    private $apropos;
    
    /**
     * @var string
     *
     * @ORM\Column(name="VIP", type="string", length=255)
     */
    private $vip;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_reservation", type="integer", nullable=true)
     */
    private $nbrReservation;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_participation", type="integer", nullable=true)
     */
    private $nbrParticipation;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=255)
     */
    private $ip;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deposit", type="datetime")
     */
    private $deposit;

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
     * Set picture
     *
     * @param \Base\BledvoyageBundle\Entity\Picture $picture
     * @return User
     */
    public function setPicture(\Base\BledvoyageBundle\Entity\Picture $picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return \Base\BledvoyageBundle\Entity\Picture
     */
    public function getPicture()
    {
        return $this->picture;
    }
    
    /**
     * Faire que le pseudo egal a l'adresse mail
     * 
     * @param type $email
     */
    public function setEmail($email)
    {
        parent::setEmail($email);
        $this->setUsername($email);
    }

    /**
     * Set gender
     *
     * @param integer $gender
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return integer 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set secondename
     *
     * @param string $secondename
     * @return User
     */
    public function setSecondename($secondename)
    {
        $this->secondename = $secondename;

        return $this;
    }

    /**
     * Get secondename
     *
     * @return string 
     */
    public function getSecondename()
    {
        return $this->secondename;
    }

    /**
     * Set nomEntreprise
     *
     * @param string $nomEntreprise
     * @return User
     */
    public function setNomEntreprise($nomEntreprise)
    {
        $this->nomEntreprise = $nomEntreprise;

        return $this;
    }

    /**
     * Get nomEntreprise
     *
     * @return string 
     */
    public function getNomEntreprise()
    {
        return $this->nomEntreprise;
    }

    /**
     * Set adresseEntreprise
     *
     * @param string $adresseEntreprise
     * @return User
     */
    public function setAdresseEntreprise($adresseEntreprise)
    {
        $this->adresseEntreprise = $adresseEntreprise;

        return $this;
    }

    /**
     * Get adresseEntreprise
     *
     * @return string 
     */
    public function getAdresseEntreprise()
    {
        return $this->adresseEntreprise;
    }

    /**
     * Set born
     *
     * @param integer $born
     * @return User
     */
    public function setBorn($born)
    {
        $this->born = $born;

        return $this;
    }

    /**
     * Get born
     *
     * @return integer 
     */
    public function getBorn()
    {
        return $this->born;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set apropos
     *
     * @param string $apropos
     * @return User
     */
    public function setApropos($apropos)
    {
        $this->apropos = $apropos;

        return $this;
    }

    /**
     * Get apropos
     *
     * @return string 
     */
    public function getApropos()
    {
        return $this->apropos;
    }
    

    /**
     * Set vip
     *
     * @param string $vip
     * @return User
     */
    public function setVip($vip)
    {
        $this->vip = $vip;

        return $this;
    }

    /**
     * Get vip
     *
     * @return string 
     */
    public function getVip()
    {
        return $this->vip;
    }
    
    /**
     * Set nbrReservation
     *
     * @param integer $nbrReservation
     * @return User
     */
    public function setNbrReservation($nbrReservation)
    {
        $this->nbrReservation = $nbrReservation;

        return $this;
    }

    /**
     * Get nbrReservation
     *
     * @return integer 
     */
    public function getNbrResrvation()
    {
        return $this->nbrReservation;
    }
    
    /**
     * Set nbrParticipation
     *
     * @param integer $nbrParticipation
     * @return User
     */
    public function setNbrParticipation($nbrParticipation)
    {
        $this->nbrParticipation = $nbrParticipation;

        return $this;
    }

    /**
     * Get nbrParticipation
     *
     * @return integer 
     */
    public function getNbrParticipation()
    {
        return $this->nbrParticipation;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return User
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

    /**
     * Set deposit
     *
     * @param \DateTime $deposit
     * @return User
     */
    public function setDeposit($deposit)
    {
        $this->deposit = $deposit;

        return $this;
    }

    /**
     * Get deposit
     *
     * @return \DateTime 
     */
    public function getDeposit()
    {
        return $this->deposit;
    }
}
