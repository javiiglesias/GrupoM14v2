<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Obra
 *
 * @ORM\Table(name="obra")
 * @ORM\Entity(repositoryClass="FrontendBundle\Repository\ObraRepository")
 */
class Obra
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
     * @ORM\Column(name="Codi", type="integer", unique=true)
     */
    private $codi;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcio", type="string", length=255)
     */
    private $descripcio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DataInici", type="date")
     */
    private $dataInici;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DataFi", type="date")
     */
    private $dataFi;


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
     * Set codi
     *
     * @param integer $codi
     *
     * @return Obra
     */
    public function setCodi($codi)
    {
        $this->codi = $codi;

        return $this;
    }

    /**
     * Get codi
     *
     * @return int
     */
    public function getCodi()
    {
        return $this->codi;
    }

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
     * Set dataInici
     *
     * @param \DateTime $dataInici
     *
     * @return Obra
     */
    public function setDataInici($dataInici)
    {
        $this->dataInici = $dataInici;

        return $this;
    }

    /**
     * Get dataInici
     *
     * @return \DateTime
     */
    public function getDataInici()
    {
        return $this->dataInici;
    }

    /**
     * Set dataFi
     *
     * @param \DateTime $dataFi
     *
     * @return Obra
     */
    public function setDataFi($dataFi)
    {
        $this->dataFi = $dataFi;

        return $this;
    }

    /**
     * Get dataFi
     *
     * @return \DateTime
     */
    public function getDataFi()
    {
        return $this->dataFi;
    }
}

