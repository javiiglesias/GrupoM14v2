<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoObra
 *
 * @ORM\Table(name="tipo_obra", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_24C1BAF811D3633A", columns={"id"})})
 * @ORM\Entity
 */
class TipoObra
{
    /**
     * @var string
     *
     * @ORM\Column(name="Descripcio", type="string", length=255, nullable=false)
     */
    private $descripcio;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_obra", type="integer", nullable=false)
     */
    private $idObra;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set descripcio
     *
     * @param string $descripcio
     *
     * @return TipoObra
     */
    public function setDescripcio($descripcio)
    {
        $this->descripcio = $descripcio;

        return $this;
    }

    /**
     * Get descripcio
     *
     * @return string
     */
    public function getDescripcio()
    {
        return $this->descripcio;
    }

    /**
     * Set idObra
     *
     * @param integer $idObra
     *
     * @return TipoObra
     */
    public function setIdObra($idObra)
    {
        $this->idObra = $idObra;

        return $this;
    }

    /**
     * Get idObra
     *
     * @return integer
     */
    public function getIdObra()
    {
        return $this->idObra;
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
}
