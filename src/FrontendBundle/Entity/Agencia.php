<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agencia
 *
 * @ORM\Table(name="agencia")
 * @ORM\Entity(repositoryClass="FrontendBundle\Repository\AgenciaRepository")
 */
class Agencia
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
     * @var string
     *
     * @ORM\Column(name="CIF", type="string", length=255)
     */
    private $cIF;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;


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
     * Set cIF
     *
     * @param string $cIF
     *
     * @return Agencia
     */
    public function setCIF($cIF)
    {
        $this->cIF = $cIF;

        return $this;
    }

    /**
     * Get cIF
     *
     * @return string
     */
    public function getCIF()
    {
        return $this->cIF;
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
}

