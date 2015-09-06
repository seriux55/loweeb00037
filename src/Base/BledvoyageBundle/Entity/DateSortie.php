<?php

namespace Base\BledvoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DateSortie
 *
 * @ORM\Table(name="bledvoyage__DateSortie")
 * @ORM\Entity(repositoryClass="Base\BledvoyageBundle\Entity\DateSortieRepository")
 */
class DateSortie
{
    public function __construct() {
        $this->up = "0";
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
     * @ORM\ManyToOne(targetEntity="Base\BledvoyageBundle\Entity\Sortie")
     * @ORM\JoinColumn(nullable=false)
     */
    private $sortie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date")
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255)
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="annuler", type="string", length=255, options={"comment" = "0:non, 1:oui"})
     */
    private $annuler;

    /**
     * @var string
     *
     * @ORM\Column(name="dateUp", type="string", length=255, options={"comment" = "0:non, 1:oui"})
     */
    private $up;


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
     * Set sortie
     *
     * @param \Base\BledvoyageBundle\Entity\Sortie $sortie
     * @return DateSortie
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

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return DateSortie
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
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return DateSortie
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
     * Set statut
     *
     * @param string $statut
     * @return DateSortie
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
     * Set annuler
     *
     * @param string $annuler
     * @return DateSortie
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
     * Set up
     *
     * @param string $up
     * @return DateSortie
     */
    public function setUp($up)
    {
        $this->up = $up;

        return $this;
    }

    /**
     * Get up
     *
     * @return string 
     */
    public function getUp()
    {
        return $this->up;
    }
    
    public function getUpdate($em, $emm)
    {
        if(date('w') == 0){ // Le dimanche
            $qb = $em->getRepository('BaseBledvoyageBundle:DateSortie')
                ->createQueryBuilder('a')->getQuery()->getResult();
            foreach ($qb as $data) {
                if($data->getUp() == "1") {
                    break;
                }if($data->getUp() == "0") {
                    $dateDebut = date('Y-m-d', strtotime($data->getDateDebut()->format('Y-m-d').' +7 days'));
                    $dateFin   = date('Y-m-d', strtotime($data->getDateFin()->format('Y-m-d').' +7 days'));
                    $update = $emm->createQueryBuilder()
                        ->update('BaseBledvoyageBundle:DateSortie', 'a')
                        ->set('a.dateDebut', "'".$dateDebut."'")
                        ->set('a.dateFin', "'".$dateFin."'")
                        ->set('a.up', "1")
                        ->where('a.id = '.$data->getId());
                    $update->getQuery()->execute();
                }
            }
        }elseif(date('w') == 1){ // Le lundi
            $qb = $em->getRepository('BaseBledvoyageBundle:DateSortie')
                ->createQueryBuilder('a')->getQuery()->getResult();
            foreach ($qb as $data) {
                if($data->getUp() == '0'){
                    break;
                }elseif($data->getUp() == '1'){
                    $update = $emm->createQueryBuilder()
                        ->update('BaseBledvoyageBundle:DateSortie', 'a')
                        ->set('a.up', "0")
                        ->where('a.id = '.$data->getId());
                    $update->getQuery()->execute();
                }
            }
        }
        return true;
    }
}
