<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * TipoActor
 *
 * @ORM\Table(name="tipo_actor")
 * @ORM\Entity
 */
class TipoActor
{
    
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Papel", type="string", length=255, nullable=false)
     */
    private $papel;


    /**
     * @ORM\OneToMany(targetEntity="Actor", mappedBy="TipoActor")
     */
    private $actors;

    public function __construct() {
        $this->setPapel("");
        $this->actors = new ArrayCollection();
    }

    /**
     * Set papel
     *
     * @param string $papel
     *
     * @return TipoActor
     */
    public function setPapel($papel)
    {
        $this->papel = $papel;

        return $this;
    }

    /**
     * Get papel
     *
     * @return string
     */
    public function getPapel()
    {
        return $this->papel;
    }    

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
     * Add actor
     *
     * @param \FrontendBundle\Entity\Actor $actor
     *
     * @return TipoActor
     */
    public function addActor(\FrontendBundle\Entity\Actor $actor)
    {
        $this->actors[] = $actor;

        return $this;
    }

    /**
     * Remove actor
     *
     * @param \FrontendBundle\Entity\Actor $actor
     */
    public function removeActor(\FrontendBundle\Entity\Actor $actor)
    {
        $this->actors->removeElement($actor);
    }

    /**
     * Get actors
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActors()
    {
        return $this->actors;
    }
}
