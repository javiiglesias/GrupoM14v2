<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * TipoObra
 *
 * @ORM\Table(name="tipo_obra", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_24C1BAF811D3633A", columns={"id"})})
 * @ORM\Entity
 */
class TipoObra {

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
     * @ORM\Column(name="Descripcio", type="string", length=255, nullable=false)
     */
    private $descripcio;

    /**
     * Set descripcio
     *
     * @param string $descripcio
     *
     * @return TipoObra
     */
    public function setDescripcio($descripcio) {
        $this->descripcio = $descripcio;

        return $this;
    }

    /**
     * Get descripcio
     *
     * @return string
     */
    public function getDescripcio() {
        return $this->descripcio;
    }

    /**
     * @ORM\OneToMany(targetEntity="Obra", mappedBy="TipoObra")
     */
    protected $obras;

    public function __construct() {
        $this->setDescripcio("");
        $this->obras = new ArrayCollection();
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
     * Add obra
     *
     * @param \FrontendBundle\Entity\Obra $obra
     *
     * @return TipoObra
     */
    public function addObra(\FrontendBundle\Entity\Obra $obra)
    {
        $this->obras[] = $obra;

        return $this;
    }

    /**
     * Remove obra
     *
     * @param \FrontendBundle\Entity\Obra $obra
     */
    public function removeObra(\FrontendBundle\Entity\Obra $obra)
    {
        $this->obras->removeElement($obra);
    }

    /**
     * Get obras
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getObras()
    {
        return $this->obras;
    }
}
