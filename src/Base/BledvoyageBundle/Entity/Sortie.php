<?php

namespace Base\BledvoyageBundle\Entity;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use Gedmo\Mapping\Annotation as Gedmo;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sortie
 *
 * @ORM\Table(name="bledvoyage__Sortie")
 * @ORM\Entity(repositoryClass="Base\BledvoyageBundle\Entity\SortieRepository")
 * 
 * @ExclusionPolicy("all")
 */
class Sortie
{
    public function __construct() {
        $this->valider  = "0";
        $this->annuler  = "0";
        $this->astuce   = "0";
        $this->pub      = "0";
        $this->close    = "0";
        $this->dateTime = new \DateTime();
    }
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Expose
     */
    private $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Base\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Base\BledvoyageBundle\Entity\Categorie")
     * @ORM\JoinColumn(nullable=true)
     */
    private $categorie;
    
    /**
     * @ORM\OneToOne(targetEntity="Base\BledvoyageBundle\Entity\Picture", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     * @Expose
     */
    private $picture1;
    
    /**
     * @ORM\OneToOne(targetEntity="Base\BledvoyageBundle\Entity\Picture", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     * @Expose
     */
    private $picture2;
    
    /**
     * @ORM\OneToOne(targetEntity="Base\BledvoyageBundle\Entity\Picture", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     * @Expose
     */
    private $picture3;
    
    /**
     * @ORM\OneToOne(targetEntity="Base\BledvoyageBundle\Entity\Picture", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     * @Expose
     */
    private $picture4;
    
    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     * @Expose
     */
    private $titre;
    
    /**
     * @Gedmo\Slug(fields={"titre"})
     * @ORM\Column(name="slug", type="string", length=128)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptif", type="string", length=255)
     * @Expose
     */
    private $descriptif;

    /**
     * @var string
     *
     * @ORM\Column(name="conditions", type="string", length=255)
     * @Expose
     */
    private $conditions;

    /**
     * @var string
     *
     * @ORM\Column(name="localisation", type="string", length=255)
     * @Expose
     */
    private $localisation;

    /**
     * @var integer
     *
     * @ORM\Column(name="tarif", type="integer")
     * @Expose
     */
    private $tarif;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxPersonne", type="integer")
     * @Expose
     */
    private $maxPersonne;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="datetime")
     * @Expose
     */
    private $dateDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_debut", type="string", length=255)
     * @Expose
     */
    private $heureDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="datetime")
     * @Expose
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_fin", type="string", length=255)
     * @Expose
     */
    private $heureFin;
    
    /**
     * @var string
     *
     * @ORM\Column(name="plan_acces", type="string", length=1023, nullable=true)
     * @Expose
     */
    private $planAcces;

    /**
     * @var string
     *
     * @ORM\Column(name="video", type="string", length=255, nullable=true)
     * @Expose
     */
    private $video;

    /**
     * @var string
     *
     * @ORM\Column(name="photo1", type="string", length=255, nullable=true)
     * @Expose
     */
    private $photo1;

    /**
     * @var string
     *
     * @ORM\Column(name="photo2", type="string", length=255, nullable=true)
     * @Expose
     */
    private $photo2;

    /**
     * @var string
     *
     * @ORM\Column(name="photo3", type="string", length=255, nullable=true)
     * @Expose
     */
    private $photo3;

    /**
     * @var string
     *
     * @ORM\Column(name="photo4", type="string", length=255, nullable=true)
     * @Expose
     */
    private $photo4;

    /**
     * @var string
     *
     * @ORM\Column(name="valider", type="string", length=255, options={"comment" = "0:non, 1:oui"})
     */
    private $valider;

    /**
     * @var integer
     *
     * @ORM\Column(name="charge", type="integer", nullable=true)
     */
    private $charge;

    /**
     * @var string
     *
     * @ORM\Column(name="acces", type="string", length=255, nullable=true)
     */
    private $acces;

    /**
     * @var integer
     *
     * @ORM\Column(name="echeance", type="integer", nullable=true)
     */
    private $echeance;

    /**
     * @var integer
     *
     * @ORM\Column(name="tarif_echeance", type="integer", nullable=true)
     */
    private $tarifEcheance;

    /**
     * @var integer
     *
     * @ORM\Column(name="commission", type="integer", nullable=true)
     */
    private $commission;

    /**
     * @var string
     *
     * @ORM\Column(name="annuler", type="string", length=255, options={"comment" = "0:non, 1:oui"})
     */
    private $annuler;

    /**
     * @var integer
     *
     * @ORM\Column(name="tarif_etud", type="integer", nullable=true)
     */
    private $tarifEtud;

    /**
     * @var integer
     *
     * @ORM\Column(name="promo_client", type="integer", nullable=true)
     */
    private $promoClient;

    /**
     * @var integer
     *
     * @ORM\Column(name="promo_partenaire", type="integer", nullable=true)
     */
    private $promoPartenaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="astuce", type="integer", options={"comment" = "0:non, 1:oui"})
     */
    private $astuce;

    /**
     * @var integer
     *
     * @ORM\Column(name="pub", type="integer", options={"comment" = "0:non, 1:oui"})
     */
    private $pub;

    /**
     * @var integer
     *
     * @ORM\Column(name="close", type="integer", options={"comment" = "0:non, 1:oui"})
     */
    private $close;

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
     * Set user
     *
     * @param \Base\UserBundle\Entity\User $user
     * @return Sortie
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
     * Set categorie
     *
     * @param \Base\BledvoyageBundle\Entity\Categorie $categorie
     * @return Sortie
     */
    public function setCategorie(\Base\BledvoyageBundle\Entity\Categorie $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Base\BledvoyageBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set picture1
     *
     * @param \Base\BledvoyageBundle\Entity\Picture $picture1
     * @return Sortie
     */
    public function setPicture1(\Base\BledvoyageBundle\Entity\Picture $picture1)
    {
        $this->picture1 = $picture1;

        return $this;
    }

    /**
     * Get picture1
     *
     * @return \Base\BledvoyageBundle\Entity\Picture
     */
    public function getPicture1()
    {
        return $this->picture1;
    }

    /**
     * Set picture2
     *
     * @param \Base\BledvoyageBundle\Entity\Picture $picture2
     * @return Sortie
     */
    public function setPicture2(\Base\BledvoyageBundle\Entity\Picture $picture2)
    {
        $this->picture2 = $picture2;

        return $this;
    }

    /**
     * Get picture2
     *
     * @return \Base\BledvoyageBundle\Entity\Picture
     */
    public function getPicture2()
    {
        return $this->picture2;
    }

    /**
     * Set picture3
     *
     * @param \Base\BledvoyageBundle\Entity\Picture $picture3
     * @return Sortie
     */
    public function setPicture3(\Base\BledvoyageBundle\Entity\Picture $picture3)
    {
        $this->picture3 = $picture3;

        return $this;
    }

    /**
     * Get picture3
     *
     * @return \Base\BledvoyageBundle\Entity\Picture
     */
    public function getPicture3()
    {
        return $this->picture3;
    }

    /**
     * Set picture4
     *
     * @param \Base\BledvoyageBundle\Entity\Picture $picture4
     * @return Sortie
     */
    public function setPicture4(\Base\BledvoyageBundle\Entity\Picture $picture4)
    {
        $this->picture4 = $picture4;

        return $this;
    }

    /**
     * Get picture4
     *
     * @return \Base\BledvoyageBundle\Entity\Picture
     */
    public function getPicture4()
    {
        return $this->picture4;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Sortie
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Sortie
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set descriptif
     *
     * @param string $descriptif
     * @return Sortie
     */
    public function setDescriptif($descriptif)
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    /**
     * Get descriptif
     *
     * @return string 
     */
    public function getDescriptif()
    {
        return $this->descriptif;
    }

    /**
     * Set conditions
     *
     * @param string $conditions
     * @return Sortie
     */
    public function setConditions($conditions)
    {
        $this->conditions = $conditions;

        return $this;
    }

    /**
     * Get conditions
     *
     * @return string 
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * Set localisation
     *
     * @param string $localisation
     * @return Sortie
     */
    public function setLocalisation($localisation)
    {
        $this->localisation = $localisation;

        return $this;
    }

    /**
     * Get localisation
     *
     * @return string 
     */
    public function getLocalisation()
    {
        return $this->localisation;
    }

    /**
     * Set tarif
     *
     * @param integer $tarif
     * @return Sortie
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;

        return $this;
    }

    /**
     * Get tarif
     *
     * @return integer 
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * Set maxPersonne
     *
     * @param integer $maxPersonne
     * @return Sortie
     */
    public function setMaxPersonne($maxPersonne)
    {
        $this->maxPersonne = $maxPersonne;

        return $this;
    }

    /**
     * Get maxPersonne
     *
     * @return integer 
     */
    public function getMaxPersonne()
    {
        return $this->maxPersonne;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return Sortie
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set heureDebut
     *
     * @param string $heureDebut
     * @return Sortie
     */
    public function setHeureDebut($heureDebut)
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    /**
     * Get heureDebut
     *
     * @return string 
     */
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Sortie
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set heureFin
     *
     * @param string $heureFin
     * @return Sortie
     */
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;

        return $this;
    }

    /**
     * Get heureFin
     *
     * @return string 
     */
    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     * Set planAcces
     *
     * @param string $planAcces
     * @return Sortie
     */
    public function setPlanAcces($planAcces)
    {
        $this->planAcces = $planAcces;

        return $this;
    }

    /**
     * Get planAcces
     *
     * @return string 
     */
    public function getPlanAcces()
    {
        return $this->planAcces;
    }

    /**
     * Set video
     *
     * @param string $video
     * @return Sortie
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return string 
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set photo1
     *
     * @param string $photo1
     * @return Sortie
     */
    public function setPhoto1($photo1)
    {
        $this->photo1 = $photo1;

        return $this;
    }

    /**
     * Get photo1
     *
     * @return string 
     */
    public function getPhoto1()
    {
        return $this->photo1;
    }

    /**
     * Set photo2
     *
     * @param string $photo2
     * @return Sortie
     */
    public function setPhoto2($photo2)
    {
        $this->photo2 = $photo2;

        return $this;
    }

    /**
     * Get photo2
     *
     * @return string 
     */
    public function getPhoto2()
    {
        return $this->photo2;
    }

    /**
     * Set photo3
     *
     * @param string $photo3
     * @return Sortie
     */
    public function setPhoto3($photo3)
    {
        $this->photo3 = $photo3;

        return $this;
    }

    /**
     * Get photo3
     *
     * @return string 
     */
    public function getPhoto3()
    {
        return $this->photo3;
    }

    /**
     * Set photo4
     *
     * @param string $photo4
     * @return Sortie
     */
    public function setPhoto4($photo4)
    {
        $this->photo4 = $photo4;

        return $this;
    }

    /**
     * Get photo4
     *
     * @return string 
     */
    public function getPhoto4()
    {
        return $this->photo4;
    }

    /**
     * Set valider
     *
     * @param string $valider
     * @return Sortie
     */
    public function setValider($valider)
    {
        $this->valider = $valider;

        return $this;
    }

    /**
     * Get valider
     *
     * @return string 
     */
    public function getValider()
    {
        return $this->valider;
    }

    /**
     * Set charge
     *
     * @param integer $charge
     * @return Sortie
     */
    public function setCharge($charge)
    {
        $this->charge = $charge;

        return $this;
    }

    /**
     * Get charge
     *
     * @return integer 
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Set acces
     *
     * @param string $acces
     * @return Sortie
     */
    public function setAcces($acces)
    {
        $this->acces = $acces;

        return $this;
    }

    /**
     * Get acces
     *
     * @return string 
     */
    public function getAcces()
    {
        return $this->acces;
    }

    /**
     * Set echeance
     *
     * @param integer $echeance
     * @return Sortie
     */
    public function setEcheance($echeance)
    {
        $this->echeance = $echeance;

        return $this;
    }

    /**
     * Get echeance
     *
     * @return integer 
     */
    public function getEcheance()
    {
        return $this->echeance;
    }

    /**
     * Set tarifEcheance
     *
     * @param integer $tarifEcheance
     * @return Sortie
     */
    public function setTarifEcheance($tarifEcheance)
    {
        $this->tarifEcheance = $tarifEcheance;

        return $this;
    }

    /**
     * Get tarifEcheance
     *
     * @return integer 
     */
    public function getTarifEcheance()
    {
        return $this->tarifEcheance;
    }

    /**
     * Set commission
     *
     * @param integer $commission
     * @return Sortie
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;

        return $this;
    }

    /**
     * Get commission
     *
     * @return integer 
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Set annuler
     *
     * @param string $annuler
     * @return Sortie
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
     * Set tarifEtud
     *
     * @param integer $tarifEtud
     * @return Sortie
     */
    public function setTarifEtud($tarifEtud)
    {
        $this->tarifEtud = $tarifEtud;

        return $this;
    }

    /**
     * Get tarifEtud
     *
     * @return integer 
     */
    public function getTarifEtud()
    {
        return $this->tarifEtud;
    }

    /**
     * Set promoClient
     *
     * @param integer $promoClient
     * @return Sortie
     */
    public function setPromoClient($promoClient)
    {
        $this->promoClient = $promoClient;

        return $this;
    }

    /**
     * Get promoClient
     *
     * @return integer 
     */
    public function getPromoClient()
    {
        return $this->promoClient;
    }

    /**
     * Set promoPartenaire
     *
     * @param integer $promoPartenaire
     * @return Sortie
     */
    public function setPromoPartenaire($promoPartenaire)
    {
        $this->promoPartenaire = $promoPartenaire;

        return $this;
    }

    /**
     * Get promoPartenaire
     *
     * @return integer 
     */
    public function getPromoPartenaire()
    {
        return $this->promoPartenaire;
    }

    /**
     * Set astuce
     *
     * @param integer $astuce
     * @return Sortie
     */
    public function setAstuce($astuce)
    {
        $this->astuce = $astuce;

        return $this;
    }

    /**
     * Get astuce
     *
     * @return integer 
     */
    public function getAstuce()
    {
        return $this->astuce;
    }

    /**
     * Set pub
     *
     * @param integer $pub
     * @return Sortie
     */
    public function setPub($pub)
    {
        $this->pub = $pub;

        return $this;
    }

    /**
     * Get pub
     *
     * @return integer 
     */
    public function getPub()
    {
        return $this->pub;
    }

    /**
     * Set close
     *
     * @param integer $close
     * @return Sortie
     */
    public function setClose($close)
    {
        $this->close = $close;

        return $this;
    }

    /**
     * Get close
     *
     * @return integer 
     */
    public function getClose()
    {
        return $this->close;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return Sortie
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
     * @return Sortie
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
    
    public function getProduct($em, $id)
    {
        $product = $em->getRepository('BaseBledvoyageBundle:CategorieSortie')
            ->createQueryBuilder('a')
            ->addSelect('b')
            ->leftJoin('a.sortie', 'b')
            ->addSelect('c')
            ->leftJoin('b.picture1', 'c')
            ->addSelect('d')
            ->leftJoin('b.picture2', 'd')
            ->addSelect('e')
            ->leftJoin('b.picture3', 'e')
            ->addSelect('f')
            ->leftJoin('b.picture4', 'f')
            ->addSelect('g')
            ->leftJoin('b.user', 'g')
            ->where('b.valider = :valider AND b.id = :id')
            ->setParameters(
                 array(
                     'valider'    => '1',
                     'id'         => $id,
                 ))
            ->orderBy('a.id','DESC')
            ->getQuery()
            ->getResult();
        return $product;
    }
    
    public function getSorties($em)
    {
        $mc = new \Memcached();
        $mc->addServer("127.0.0.1", 11211);
        if($mc->get("sorties"))
        {
            return $mc->get("sorties");
        }
        $sorties = $em->getRepository('BaseBledvoyageBundle:CategorieSortie')
            ->createQueryBuilder('a')
            ->addSelect('b')
            ->leftJoin('a.sortie', 'b')
            ->addSelect('c')
            ->leftJoin('b.picture1', 'c')
            ->AddSelect('d')
            ->leftJoin('b.user', 'd')
            ->where('b.valider = :valider')
            ->setParameter('valider', '1')
            ->orderBy('a.id','ASC')
            ->getQuery()
            ->getResult();
        $mc->set("sorties", $sorties);
        return $sorties;
    }
}
