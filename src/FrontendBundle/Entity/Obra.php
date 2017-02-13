<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Obra
 *
 * @ORM\Table(name="obra")
 * @ORM\Entity
 */
class Obra
{
    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcio", type="string", length=255, nullable=false)
     */
    private $descripcio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DataInici", type="date", nullable=false)
     */
    private $datainici;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DataFi", type="date", nullable=false)
     */
    private $datafi;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_agencia", type="integer", nullable=false)
     */
    private $idAgencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Obra
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
     * Set descripcio
     *
     * @param string $descripcio
     *
     * @return Obra
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
     * Set datainici
     *
     * @param \DateTime $datainici
     *
     * @return Obra
     */
    public function setDatainici($datainici)
    {
        $this->datainici = $datainici;

        return $this;
    }

    /**
     * Get datainici
     *
     * @return \DateTime
     */
    public function getDatainici()
    {
        return $this->datainici;
    }

    /**
     * Set datafi
     *
     * @param \DateTime $datafi
     *
     * @return Obra
     */
    public function setDatafi($datafi)
    {
        $this->datafi = $datafi;

        return $this;
    }

    /**
     * Get datafi
     *
     * @return \DateTime
     */
    public function getDatafi()
    {
        return $this->datafi;
    }

    /**
     * Set idAgencia
     *
     * @param integer $idAgencia
     *
     * @return Obra
     */
    public function setIdAgencia($idAgencia)
    {
        $this->idAgencia = $idAgencia;

        return $this;
    }

    /**
     * Get idAgencia
     *
     * @return integer
     */
    public function getIdAgencia()
    {
        return $this->idAgencia;
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
