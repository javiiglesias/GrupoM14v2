<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actor
 *
 * @ORM\Table(name="actor")
 * @ORM\Entity
 */
class Actor
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
     * @var string
     *
     * @ORM\Column(name="Sexe", type="string", length=255, nullable=false)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="Foto", type="string", length=255, nullable=false)
     */
    private $foto;  
    
    /**
     * @ORM\ManyToOne(targetEntity="TipoActor", inversedBy="Actor")
     * @ORM\JoinColumn(name="id_actor", referencedColumnName="id")
     */
    protected $tipoActor;
    
    /**
     * @ORM\ManyToOne(targetEntity="Obra", inversedBy="actores",cascade={"persist"})
     * @ORM\JoinColumn(name="id_obra", referencedColumnName="id", nullable=true, onDelete="SET NULL")
     */
    protected $obra;

    /**
     * Set nif
     *
     * @param string $nif
     *
     * @return Actor
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
     * @return Actor
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
     * @return Actor
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
     * @return Actor
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
     * Set sexe
     *
     * @param string $sexe
     *
     * @return Actor
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set foto
     *
     * @param string $foto
     *
     * @return Actor
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
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
     * Set tipoActor
     *
     * @param \FrontendBundle\Entity\TipoActor $tipoActor
     *
     * @return Actor
     */
    public function setTipoActor(\FrontendBundle\Entity\TipoActor $tipoActor = null)
    {
        $this->tipoActor = $tipoActor;

        return $this;
    }

    /**
     * Get tipoActor
     *
     * @return \FrontendBundle\Entity\TipoActor
     */
    public function getTipoActor()
    {
        return $this->tipoActor;
    }

    /**
     * Set obra
     *
     * @param \FrontendBundle\Entity\Obra $obra
     *
     * @return Actor
     */
    public function setObra(\FrontendBundle\Entity\Obra $obra = null)
    {
        $this->obra = $obra;

        return $this;
    }

    /**
     * Get obra
     *
     * @return \FrontendBundle\Entity\Obra
     */
    public function getObra()
    {
        return $this->obra;
    }
}
