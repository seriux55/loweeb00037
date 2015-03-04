<?php

namespace Base\BledvoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Base\BledvoyageBundle\Entity\CommandeRepository")
 */
class Commande
{
    public function __construct()
    {
        $this->dateTime  = new \dateTime();
        $this->confirmer = '0';
        $this->facture   = '0';
        $this->dateRdv   = new \dateTime('0000-00-00 00:00:00');
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
     * @ORM\ManyToOne(targetEntity="Base\BledvoyageBundle\Entity\CategorieTicket")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorieTicket;

    /**
     * @ORM\ManyToOne(targetEntity="Base\BledvoyageBundle\Entity\Paiement")
     * @ORM\JoinColumn(nullable=false)
     */
    private $paiement;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="nombre", type="integer")
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="textPerso", type="string", length=255)
     */
    private $textPerso;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=511)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="confirmer", type="string", length=255)
     */
    private $confirmer;

    /**
     * @var string
     *
     * @ORM\Column(name="facture", type="string", length=255)
     */
    private $facture;

    /**
     * @var string
     *
     * @ORM\Column(name="acompte", type="string", length=255)
     */
    private $acompte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_achat", type="datetime")
     */
    private $dateAchat;

    /**
     * @var string
     *
     * @ORM\Column(name="entreprise", type="string", length=255)
     */
    private $entreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=511)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="mode_paiement", type="string", length=255)
     */
    private $modePaiement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_rdv", type="date")
     */
    private $dateRdv;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_rdv", type="string", length=255)
     */
    private $heureRdv;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_rdv", type="string", length=255)
     */
    private $lieuRdv;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=255)
     */
    private $ip;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_time", type="datetime")
     */
    private $dateTime;


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
     * Set nombre
     *
     * @param integer $nombre
     * @return Commande
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return integer 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set textPerso
     *
     * @param string $textPerso
     * @return Commande
     */
    public function setTextPerso($textPerso)
    {
        $this->textPerso = $textPerso;

        return $this;
    }

    /**
     * Get textPerso
     *
     * @return string 
     */
    public function getTextPerso()
    {
        return $this->textPerso;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Commande
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set confirmer
     *
     * @param string $confirmer
     * @return Commande
     */
    public function setConfirmer($confirmer)
    {
        $this->confirmer = $confirmer;

        return $this;
    }

    /**
     * Get confirmer
     *
     * @return string 
     */
    public function getConfirmer()
    {
        return $this->confirmer;
    }

    /**
     * Set facture
     *
     * @param string $facture
     * @return Commande
     */
    public function setFacture($facture)
    {
        $this->facture = $facture;

        return $this;
    }

    /**
     * Get facture
     *
     * @return string 
     */
    public function getFacture()
    {
        return $this->facture;
    }

    /**
     * Set acompte
     *
     * @param string $acompte
     * @return Commande
     */
    public function setAcompte($acompte)
    {
        $this->acompte = $acompte;

        return $this;
    }

    /**
     * Get acompte
     *
     * @return string 
     */
    public function getAcompte()
    {
        return $this->acompte;
    }

    /**
     * Set dateAchat
     *
     * @param \DateTime $dateAchat
     * @return Commande
     */
    public function setDateAchat($dateAchat)
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    /**
     * Get dateAchat
     *
     * @return \DateTime 
     */
    public function getDateAchat()
    {
        return $this->dateAchat;
    }

    /**
     * Set entreprise
     *
     * @param string $entreprise
     * @return Commande
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise
     *
     * @return string 
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Commande
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set modePaiement
     *
     * @param string $modePaiement
     * @return Commande
     */
    public function setModePaiement($modePaiement)
    {
        $this->modePaiement = $modePaiement;

        return $this;
    }

    /**
     * Get modePaiement
     *
     * @return string 
     */
    public function getModePaiement()
    {
        return $this->modePaiement;
    }

    /**
     * Set dateRdv
     *
     * @param \DateTime $dateRdv
     * @return Commande
     */
    public function setDateRdv($dateRdv)
    {
        $this->dateRdv = $dateRdv;

        return $this;
    }

    /**
     * Get dateRdv
     *
     * @return \DateTime 
     */
    public function getDateRdv()
    {
        return $this->dateRdv;
    }

    /**
     * Set heureRdv
     *
     * @param string $heureRdv
     * @return Commande
     */
    public function setHeureRdv($heureRdv)
    {
        $this->heureRdv = $heureRdv;

        return $this;
    }

    /**
     * Get heureRdv
     *
     * @return string 
     */
    public function getHeureRdv()
    {
        return $this->heureRdv;
    }

    /**
     * Set lieuRdv
     *
     * @param string $lieuRdv
     * @return Commande
     */
    public function setLieuRdv($lieuRdv)
    {
        $this->lieuRdv = $lieuRdv;

        return $this;
    }

    /**
     * Get lieuRdv
     *
     * @return string 
     */
    public function getLieuRdv()
    {
        return $this->lieuRdv;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return Commande
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
     * Set dateTime
     *
     * @param \DateTime $dateTime
     * @return Commande
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
     * Set user
     *
     * @param \Base\UserBundle\Entity\User $user
     * @return Commande
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
     * Set paiement
     *
     * @param \Base\BledvoyageBundle\Entity\Paiement $paiement
     * @return Commande
     */
    public function setPaiement(\Base\BledvoyageBundle\Entity\Paiement $paiement)
    {
        $this->paiement = $paiement;

        return $this;
    }

    /**
     * Get paiement
     *
     * @return \Base\BledvoyageBundle\Entity\Paiement
     */
    public function getPaiement()
    {
        return $this->paiement;
    }

    /**
     * Set categorieTicket
     *
     * @param \Base\BledvoyageBundle\Entity\CategorieTicket $categorieTicket
     * @return Commande
     */
    public function setCategorieTicket(\Base\BledvoyageBundle\Entity\CategorieTicket $categorieTicket)
    {
        $this->categorieTicket = $categorieTicket;

        return $this;
    }

    /**
     * Get categorieTicket
     *
     * @return \Base\BledvoyageBundle\Entity\CategorieTicket
     */
    public function getCategorieTicket()
    {
        return $this->categorieTicket;
    }
}
