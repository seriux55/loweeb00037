<?php

namespace Base\BledvoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Booking
 *
 * @ORM\Table(name="bledvoyage__Booking")
 * @ORM\Entity(repositoryClass="Base\BledvoyageBundle\Entity\BookingRepository")
 */
class Booking
{
    public function __construct() {
        $this->dateTime         = new \DateTime('now');
        $this->dateConfirmer    = new \DateTime('0000-00-00');
        $this->dateRdv          = new \DateTime('0000-00-00');
        $this->note             = "";
        $this->promo            = "";
        $this->avis             = "0";
        $this->acompte          = "0";
        $this->creneau          = "";
        $this->participation    = "";
        $this->annuler          = "0";
        $this->mandat           = "0";
        $this->cheque           = "0";
        $this->virement         = "0";
        $this->espece           = "0";
        $this->ticketPromo      = "";
        $this->promoApayer      = "";
        $this->lieuFormation    = "";
        $this->modeChoisi       = "";
        $this->heureRdv         = "";
        $this->lieuRdv          = "";       
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
     * @ORM\ManyToOne(targetEntity="Base\BledvoyageBundle\Entity\Sortie")
     * @ORM\JoinColumn(nullable=false)
     */
    private $sortie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_reserver", type="date")
     */
    private $dateReserver;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_confirmer", type="date")
     */
    private $dateConfirmer;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre", type="integer")
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="promo", type="string", length=255, nullable=true)
     */
    private $promo;

    /**
     * @ORM\ManyToOne(targetEntity="Base\UserBundle\Entity\User", cascade={"persist"})
     */
    private $confirmer_user;

    /**
     * @var string
     *
     * @ORM\Column(name="annuler", type="string", length=255, options={"comment" = "0:non, 1:oui"})
     */
    private $annuler;

    /**
     * @ORM\ManyToOne(targetEntity="Base\UserBundle\Entity\User", cascade={"persist"})
     */
    private $note_user;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=511)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="creneau", type="string", length=255)
     */
    private $creneau;

    /**
     * @ORM\ManyToOne(targetEntity="Base\UserBundle\Entity\User", cascade={"persist"})
     */
    private $avis_user;

    /**
     * @var string
     *
     * @ORM\Column(name="avis", type="string", length=255, options={"comment" = "0:non, 1:oui, 2:attente"})
     */
    private $avis;

    /**
     * @var string
     *
     * @ORM\Column(name="participation", type="string", length=255)
     */
    private $participation;

    /**
     * @ORM\ManyToOne(targetEntity="Base\UserBundle\Entity\User", cascade={"persist"})
     */
    private $facture_user;

    /**
     * @ORM\ManyToOne(targetEntity="Base\UserBundle\Entity\User", cascade={"persist"})
     */
    private $acompte_user;

    /**
     * @var string
     *
     * @ORM\Column(name="acompte", type="string", length=255)
     */
    private $acompte;

    /**
     * @var string
     *
     * @ORM\Column(name="mandat", type="string", length=255)
     */
    private $mandat;

    /**
     * @var string
     *
     * @ORM\Column(name="virement", type="string", length=255)
     */
    private $virement;

    /**
     * @var string
     *
     * @ORM\Column(name="cheque", type="string", length=255)
     */
    private $cheque;

    /**
     * @var string
     *
     * @ORM\Column(name="espece", type="string", length=255)
     */
    private $espece;

    /**
     * @var string
     *
     * @ORM\Column(name="ticket_promo", type="string", length=255)
     */
    private $ticketPromo;

    /**
     * @var string
     *
     * @ORM\Column(name="promo_apayer", type="string", length=255)
     */
    private $promoApayer;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_formation", type="string", length=255)
     */
    private $lieuFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="mode_choisi", type="string", length=255)
     */
    private $modeChoisi;

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
     * Set dateReserver
     *
     * @param \DateTime $dateReserver
     * @return Booking
     */
    public function setDateReserver($dateReserver)
    {
        $this->dateReserver = $dateReserver;

        return $this;
    }

    /**
     * Get dateReserver
     *
     * @return \DateTime 
     */
    public function getDateReserver()
    {
        return $this->dateReserver;
    }

    /**
     * Set dateConfirmer
     *
     * @param \DateTime $dateConfirmer
     * @return Booking
     */
    public function setDateConfirmer($dateConfirmer)
    {
        $this->dateConfirmer = $dateConfirmer;

        return $this;
    }

    /**
     * Get dateConfirmer
     *
     * @return \DateTime 
     */
    public function getDateConfirmer()
    {
        return $this->dateConfirmer;
    }

    /**
     * Set nombre
     *
     * @param integer $nombre
     * @return Booking
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
     * Set confirmer_user
     *
     * @param \Base\UserBundle\Entity\User $confirmer_user
     * @return Booking
     */
    public function setConfirmer_user(\Base\UserBundle\Entity\User $confirmer_user = null)
    {
        $this->confirmer_user = $confirmer_user;

        return $this;
    }

    /**
     * Get confirmer_user
     *
     * @return \Base\UserBundle\Entity\User
     */
    public function getConfirmer_user()
    {
        return $this->confirmer_user;
    }

    /**
     * Set annuler
     *
     * @param string $annuler
     * @return Booking
     */
    public function setAnnuler($annuler)
    {
        $this->annuler = $annuler;

        return $this;
    }

    /**
     * Get annuler
     *
     * @return string 
     */
    public function getAnnuler()
    {
        return $this->annuler;
    }

    /**
     * Set avis_user
     *
     * @param \Base\UserBundle\Entity\User $avis_user
     * @return Booking
     */
    public function setAvis_user(\Base\UserBundle\Entity\User $avis_user)
    {
        $this->avis_user = $avis_user;

        return $this;
    }

    /**
     * Get avis_user
     *
     * @return \Base\UserBundle\Entity\User
     */
    public function getAvis_user()
    {
        return $this->avis_user;
    }

    /**
     * Set avis
     *
     * @param string $avis
     * @return Booking
     */
    public function setAvis($avis)
    {
        $this->avis = $avis;

        return $this;
    }

    /**
     * Get avis
     *
     * @return string 
     */
    public function getAvis()
    {
        return $this->avis;
    }

    /**
     * Set participation
     *
     * @param string $participation
     * @return Booking
     */
    public function setParticipation($participation)
    {
        $this->participation = $participation;

        return $this;
    }

    /**
     * Get participation
     *
     * @return string 
     */
    public function getParticipation()
    {
        return $this->participation;
    }

    /**
     * Set note_user
     *
     * @param \Base\UserBundle\Entity\User $note_user
     * @return Booking
     */
    public function setNote_user(\Base\UserBundle\Entity\User $note_user)
    {
        $this->note_user = $note_user;

        return $this;
    }

    /**
     * Get note_user
     *
     * @return \Base\UserBundle\Entity\User
     */
    public function getNote_user()
    {
        return $this->note_user;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Booking
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
     * Set facture_user
     *
     * @param \Base\UserBundle\Entity\User $facture_user
     * @return Booking
     */
    public function setFacture_user(\Base\UserBundle\Entity\User $facture_user)
    {
        $this->facture_user = $facture_user;

        return $this;
    }

    /**
     * Get facture_user
     *
     * @return \Base\UserBundle\Entity\User
     */
    public function getFacture_user()
    {
        return $this->facture_user;
    }

    /**
     * Set acompte_user
     *
     * @param \Base\UserBundle\Entity\User $acompte_user
     * @return Booking
     */
    public function setAcompte_user(\Base\UserBundle\Entity\User $acompte_user)
    {
        $this->acompte_user = $acompte_user;

        return $this;
    }

    /**
     * Get acompte_user
     *
     * @return \Base\UserBundle\Entity\User
     */
    public function getAcompte_user()
    {
        return $this->acompte_user;
    }

    /**
     * Set acompte
     *
     * @param string $acompte
     * @return Booking
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
     * Set mandat
     *
     * @param string $mandat
     * @return Booking
     */
    public function setMandat($mandat)
    {
        $this->mandat = $mandat;

        return $this;
    }

    /**
     * Get mandat
     *
     * @return string 
     */
    public function getMandat()
    {
        return $this->mandat;
    }

    /**
     * Set virement
     *
     * @param string $virement
     * @return Booking
     */
    public function setVirement($virement)
    {
        $this->virement = $virement;

        return $this;
    }

    /**
     * Get virement
     *
     * @return string 
     */
    public function getVirement()
    {
        return $this->virement;
    }

    /**
     * Set cheque
     *
     * @param string $cheque
     * @return Booking
     */
    public function setCheque($cheque)
    {
        $this->cheque = $cheque;

        return $this;
    }

    /**
     * Get cheque
     *
     * @return string 
     */
    public function getCheque()
    {
        return $this->cheque;
    }

    /**
     * Set espece
     *
     * @param string $espece
     * @return Booking
     */
    public function setEspece($espece)
    {
        $this->espece = $espece;

        return $this;
    }

    /**
     * Get espece
     *
     * @return string 
     */
    public function getEspece()
    {
        return $this->espece;
    }

    /**
     * Set promo
     *
     * @param string $promo
     * @return Booking
     */
    public function setPromo($promo)
    {
        $this->promo = $promo;

        return $this;
    }

    /**
     * Get promo
     *
     * @return string 
     */
    public function getPromo()
    {
        return $this->promo;
    }

    /**
     * Set creneau
     *
     * @param string $creneau
     * @return Booking
     */
    public function setCreneau($creneau)
    {
        $this->creneau = $creneau;

        return $this;
    }

    /**
     * Get creneau
     *
     * @return string 
     */
    public function getCreneau()
    {
        return $this->creneau;
    }

    /**
     * Set ticketPromo
     *
     * @param string $ticketPromo
     * @return Booking
     */
    public function setTicketPromo($ticketPromo)
    {
        $this->ticketPromo = $ticketPromo;

        return $this;
    }

    /**
     * Get ticketPromo
     *
     * @return string 
     */
    public function getTicketPromo()
    {
        return $this->ticketPromo;
    }

    /**
     * Set promoApayer
     *
     * @param string $promoApayer
     * @return Booking
     */
    public function setPromoApayer($promoApayer)
    {
        $this->promoApayer = $promoApayer;

        return $this;
    }

    /**
     * Get promoApayer
     *
     * @return string 
     */
    public function getPromoApayer()
    {
        return $this->promoApayer;
    }

    /**
     * Set lieuFormation
     *
     * @param string $lieuFormation
     * @return Booking
     */
    public function setLieuFormation($lieuFormation)
    {
        $this->lieuFormation = $lieuFormation;

        return $this;
    }

    /**
     * Get lieuFormation
     *
     * @return string 
     */
    public function getLieuFormation()
    {
        return $this->lieuFormation;
    }

    /**
     * Set modeChoisi
     *
     * @param string $modeChoisi
     * @return Booking
     */
    public function setModeChoisi($modeChoisi)
    {
        $this->modeChoisi = $modeChoisi;

        return $this;
    }

    /**
     * Get modeChoisi
     *
     * @return string 
     */
    public function getModeChoisi()
    {
        return $this->modeChoisi;
    }

    /**
     * Set dateRdv
     *
     * @param \DateTime $dateRdv
     * @return Booking
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
     * @return Booking
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
     * @return Booking
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
     * @return Booking
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
     * @return Booking
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
     * @return Booking
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
     * Set sortie
     *
     * @param \Base\BledvoyageBundle\Entity\Sortie $sortie
     * @return Booking
     */
    public function setSortie(\Base\BledvoyageBundle\Entity\Sortie $sortie)
    {
        $this->sortie = $sortie;

        return $this;
    }

    /**
     * Get sortie
     *
     * @return \Base\BledvoyageBundle\Entity\Sortie
     */
    public function getSortie()
    {
        return $this->sortie;
    }
}
