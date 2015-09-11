<?php

namespace Base\BledvoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="bledvoyage__Ticket")
 * @ORM\Entity(repositoryClass="Base\BledvoyageBundle\Entity\TicketRepository")
 */
class Ticket
{
    public function __construct() {
        $this->code      = strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, 6));
        $this->dateDebut = new \DateTime(date('Y-m-d'));
        $this->used      = '0';
        $this->close     = '0';
        $this->dateTime  = new \DateTime();
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
     * @ORM\ManyToOne(targetEntity="Base\BledvoyageBundle\Entity\Commande")
     * @ORM\JoinColumn(nullable=false)
     */
    private $commande;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;

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
     * @var integer
     *
     * @ORM\Column(name="used", type="integer")
     */
    private $used;

    /**
     * @var string
     *
     * @ORM\Column(name="close", type="string", length=255, options={"comment" = "0:non, 1:oui"})
     */
    private $close;

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
     * Set commande
     *
     * @param \Base\BledvoyageBundle\Entity\Commande $commande
     * @return Ticket
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
     * Set code
     *
     * @param string $code
     * @return Ticket
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return Ticket
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
     * @return Ticket
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
     * Set used
     *
     * @param integer $used
     * @return Ticket
     */
    public function setUsed($used)
    {
        $this->used = $used;

        return $this;
    }

    /**
     * Get used
     *
     * @return integer 
     */
    public function getUsed()
    {
        return $this->used;
    }

    /**
     * Set close
     *
     * @param string $close
     * @return Ticket
     */
    public function setClose($close)
    {
        $this->close = $close;

        return $this;
    }

    /**
     * Get close
     *
     * @return string 
     */
    public function getClose()
    {
        return $this->close;
    }

    /**
     * Set dateTime
     *
     * @param \DateTime $dateTime
     * @return Ticket
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
     * @return Ticket
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
     * function getTicket
     * 
     * @param object $em
     * @param int $id
     * @param string $locale
     * @return object
     */
    public function getTicket($em, $id, $locale)
    {
        $qb = $em->getRepository('BaseBledvoyageBundle:Ticket')
            ->createQueryBuilder('a')
            ->addSelect('b')
            ->leftJoin('a.commande', 'b')
            ->addSelect('c')
            ->leftJoin('b.categorieTicket', 'c')
            ->where('a.commande = :id')
            ->setParameter('id', $id);
        // Use Translation Walker
        $query = $qb->getQuery();
        $query->setHint(
            \Doctrine\ORM\Query::HINT_CUSTOM_OUTPUT_WALKER,
            'Gedmo\\Translatable\\Query\\TreeWalker\\TranslationWalker'
        );
        // Force the locale
        $query->setHint(
            \Gedmo\Translatable\TranslatableListener::HINT_TRANSLATABLE_LOCALE,
            $locale
        );
        return $query->getResult();
    }
}
