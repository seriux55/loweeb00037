<?php

namespace Base\BledvoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AvisSortie
 *
 * @ORM\Table(name="bledvoyage__AvisSortie")
 * @ORM\Entity(repositoryClass="Base\BledvoyageBundle\Entity\AvisSortieRepository")
 */
class AvisSortie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Base\BledvoyageBundle\Entity\Booking")
     * @ORM\JoinColumn(nullable=false)
     */
    private $booking;

    /**
     * @var string
     *
     * @ORM\Column(name="avis", type="text")
     */
    private $avis;

    /**
     * @var integer
     *
     * @ORM\Column(name="emotion", type="integer", options={"comment" = "0:content, 1:bof, 3:triste"})
     */
    private $emotion;

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
     * Set avis
     *
     * @param string $avis
     * @return AvisSortie
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
     * Set emotion
     *
     * @param integer $emotion
     * @return AvisSortie
     */
    public function setEmotion($emotion)
    {
        $this->emotion = $emotion;

        return $this;
    }

    /**
     * Get emotion
     *
     * @return integer 
     */
    public function getEmotion()
    {
        return $this->emotion;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return AvisSortie
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
     * @return AvisSortie
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
     * Set booking
     *
     * @param \Base\BledvoyageBundle\Entity\Booking $booking
     * @return AvisSortie
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
}
