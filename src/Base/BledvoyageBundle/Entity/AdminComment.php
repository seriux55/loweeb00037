<?php

namespace Base\BledvoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdminComment
 *
 * @ORM\Table(name="bledvoyage__AdminComment")
 * @ORM\Entity(repositoryClass="Base\BledvoyageBundle\Entity\AdminCommentRepository")
 */
class AdminComment
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
     * @ORM\ManyToOne(targetEntity="Base\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Base\BledvoyageBundle\Entity\AdminStatut")
     * @ORM\JoinColumn(nullable=false)
     */
    private $adminStatut;
    
    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;
    
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
     * @return AdminComment
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
     * Set adminStatut
     *
     * @param \Base\BledvoyageBundle\Entity\AdminStatut $adminStatut
     * @return AdminStatut
     */
    public function setAdminStatut(\Base\BledvoyageBundle\Entity\AdminStatut $adminStatut)
    {
        $this->adminStatut = $adminStatut;

        return $this;
    }

    /**
     * Get adminStatut
     *
     * @return \Base\BledvoyageBundle\Entity\AdminStatut
     */
    public function getAdminStatut()
    {
        return $this->adminStatut;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return AdminComment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }
}
