<?php

namespace Base\BledvoyageBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Translatable\Translatable;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieTicket
 *
 * @ORM\Table(name="bledvoyage__CategorieTicket")
 * @ORM\Entity(repositoryClass="Base\BledvoyageBundle\Entity\CategorieTicketRepository")
 */
class CategorieTicket implements Translatable
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
     * @var string
     *
     * @Gedmo\Translatable
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="conditions", type="text")
     */
    private $conditions;

    /**
     * @var integer
     *
     * @ORM\Column(name="tarif", type="integer")
     */
    private $tarif;

    /**
     * @var integer
     *
     * @ORM\Column(name="duree", type="integer")
     */
    private $duree;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_activite", type="integer")
     */
    private $nombreActivite;

    /**
     * @var integer
     *
     * @ORM\Column(name="economie", type="integer")
     */
    private $economie;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_time", type="datetime")
     */
    private $dateTime;
    
    /**
     * @Gedmo\Locale
     * Used locale to override Translation listener`s locale
     * this is not a mapped field of entity metadata, just a simple property
     */
    private $locale;

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
     * Set nom
     *
     * @param string $nom
     * @return CategorieTicket
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return CategorieTicket
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set conditions
     *
     * @param string $conditions
     * @return CategorieTicket
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
     * Set tarif
     *
     * @param integer $tarif
     * @return CategorieTicket
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
     * Set duree
     *
     * @param integer $duree
     * @return CategorieTicket
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return integer 
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set nombreActivite
     *
     * @param integer $nombreActivite
     * @return CategorieTicket
     */
    public function setNombreActivite($nombreActivite)
    {
        $this->nombreActivite = $nombreActivite;

        return $this;
    }

    /**
     * Get nombreActivite
     *
     * @return integer 
     */
    public function getNombreActivite()
    {
        return $this->nombreActivite;
    }

    /**
     * Set economie
     *
     * @param integer $economie
     * @return CategorieTicket
     */
    public function setEconomie($economie)
    {
        $this->economie = $economie;

        return $this;
    }

    /**
     * Get economie
     *
     * @return integer 
     */
    public function getEconomie()
    {
        return $this->economie;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return CategorieTicket
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set dateTime
     *
     * @param \DateTime $dateTime
     * @return CategorieTicket
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
     * 
     * @param type $locale
     */
    public function setTranslatableLocale($locale)
    {
        $this->locale = $locale;
    }
    
    public function getCategories($em, $locale = 'fr')
    {
        $mc = new \Memcached();
        $mc->addServer("127.0.0.1", 11211);
        if($mc->get("categorie_".$locale))
        {
            return $mc->get("categorie_".$locale);
        }
        $qb = $em->getRepository('BaseBledvoyageBundle:CategorieTicket')
            ->createQueryBuilder('a');
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
        $product = $query->getResult();
        
        $mc->set("categorie_".$locale, $product);
        return $product;
    }
    
    public function getCategorie($em, $id, $locale = 'fr')
    {
        $mc = new \Memcached();
        $mc->addServer("127.0.0.1", 11211);
        if($mc->get("categorie_".$id."_".$locale))
        {
            return $mc->get("categorie_".$id."_".$locale);
        }
        $qb = $em->getRepository('BaseBledvoyageBundle:CategorieTicket')
            ->createQueryBuilder('a')
            ->where('a.id = :id')
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
        $product = $query->getResult();
        
        $mc->set("categorie_".$id."_".$locale, $product);
        return $product;
    }
}
