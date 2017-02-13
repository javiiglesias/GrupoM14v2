<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Director
 *
 * @ORM\Table(name="director")
 * @ORM\Entity
 */
class Director
{
    /**
     * @var string
     *
     * @ORM\Column(name="NIF", type="string", length=255, nullable=false)
     */
    private $nif;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Cognom1", type="string", length=255, nullable=false)
     */
    private $cognom1;

    /**
     * @var string
     *
     * @ORM\Column(name="Cognom2", type="string", length=255, nullable=false)
     */
    private $cognom2;

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
     * Set nif
     *
     * @param string $nif
     *
     * @return Director
     */
    public function setNif($nif)
    {
        $this->nif = $nif;

        return $this;
    }

    /**
     * Get nif
     *
     * @return string
     */
    public function getNif()
    {
        return $this->nif;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Director
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
     * Set cognom1
     *
     * @param string $cognom1
     *
     * @return Director
     */
    public function setCognom1($cognom1)
    {
        $this->cognom1 = $cognom1;

        return $this;
    }

    /**
     * Get cognom1
     *
     * @return string
     */
    public function getCognom1()
    {
        return $this->cognom1;
    }

    /**
     * Set cognom2
     *
     * @param string $cognom2
     *
     * @return Director
     */
    public function setCognom2($cognom2)
    {
        $this->cognom2 = $cognom2;

        return $this;
    }

    /**
     * Get cognom2
     *
     * @return string
     */
    public function getCognom2()
    {
        return $this->cognom2;
    }

    /**
     * Set idObra
     *
     * @param integer $idObra
     *
     * @return Director
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
