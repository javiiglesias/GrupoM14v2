<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Director
 *
 * @ORM\Table(name="director")
 * @ORM\Entity(repositoryClass="FrontendBundle\Repository\DirectorRepository")
 */
class Director
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
     * @ORM\Column(name="NIF", type="string", length=255)
     */
    private $nIF;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Cognom1", type="string", length=255)
     */
    private $cognom1;

    /**
     * @var string
     *
     * @ORM\Column(name="Cognom2", type="string", length=255)
     */
    private $cognom2;


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
     * Set nIF
     *
     * @param string $nIF
     *
     * @return Director
     */
    public function setNIF($nIF)
    {
        $this->nIF = $nIF;

        return $this;
    }

    /**
     * Get nIF
     *
     * @return string
     */
    public function getNIF()
    {
        return $this->nIF;
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
}

