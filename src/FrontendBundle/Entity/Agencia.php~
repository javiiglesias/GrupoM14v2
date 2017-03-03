<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agencia
 *
 * @ORM\Table(name="agencia")
 * @ORM\Entity
 */
class Agencia
{
    /**
     * @var string
     *
     * @ORM\Column(name="CIF", type="string", length=255, nullable=false)
     */
    private $cif;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set cif
     *
     * @param string $cif
     *
     * @return Agencia
     */
    public function setCif($cif)
    {
        $this->cif = $cif;

        return $this;
    }

    /**
     * Get cif
     *
     * @return string
     */
    public function getCif()
    {
        return $this->cif;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Agencia
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
