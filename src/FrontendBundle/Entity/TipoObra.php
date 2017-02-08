<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoObra
 *
 * @ORM\Table(name="tipo_obra")
 * @ORM\Entity(repositoryClass="FrontendBundle\Repository\TipoObraRepository")
 */
class TipoObra
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", unique=true)
     */
    private $iD;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcio", type="string", length=255)
     */
    private $descripcio;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set iD
     *
     * @param integer $iD
     *
     * @return TipoObra
     */
    public function setID($iD)
    {
        $this->iD = $iD;

        return $this;
    }

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
}

