<?php

namespace Base\BledvoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sortie
 */
class Sortie
{
    /**
     * @var integer
     */
    private $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Base\BledvoyageBundle\Entity\Categorie")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $descreptif;

    /**
     * @var string
     */
    private $conditions;

    /**
     * @var string
     */
    private $localisation;

    /**
     * @var integer
     */
    private $tarif;

    /**
     * @var integer
     */
    private $maxPersonne;

    /**
     * @var \DateTime
     */
    private $dateDebut;

    /**
     * @var string
     */
    private $heureDebut;

    /**
     * @var \DateTime
     */
    private $dateFin;

    /**
     * @var string
     */
    private $heureFin;

    /**
     * @var string
     */
    private $video;

    /**
     * @var string
     */
    private $valider;

    /**
     * @var integer
     */
    private $charge;

    /**
     * @var string
     */
    private $acces;

    /**
     * @var integer
     */
    private $echeance;

    /**
     * @var integer
     */
    private $tarifEcheance;

    /**
     * @var integer
     */
    private $commission;

    /**
     * @var string
     */
    private $annuler;

    /**
     * @var integer
     */
    private $tarifEtud;

    /**
     * @var integer
     */
    private $promoClient;

    /**
     * @var integer
     */
    private $promoPartenaire;

    /**
     * @var integer
     */
    private $astuce;

    /**
     * @var integer
     */
    private $pub;

    /**
     * @var integer
     */
    private $close;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var \DateTime
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
     * Set descreptif
     *
     * @param string $descreptif
     * @return Sortie
     */
    public function setDescreptif($descreptif)
    {
        $this->descreptif = $descreptif;

        return $this;
    }

    /**
     * Get descreptif
     *
     * @return string 
     */
    public function getDescreptif()
    {
        return $this->descreptif;
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

    /**
     * Set categorie
     *
     * @param \Base\BledvoyageBundle\Entity\Categorie $categorie
     * @return Categorie
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
}
