<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Obra
 *
 * @ORM\Table(name="obra")
 * @ORM\Entity
 */
class Obra
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
     * @ORM\ManyToOne(targetEntity="Agencia", inversedBy="obra",cascade={"persist"})
     * @ORM\JoinColumn(name="id_agencia", referencedColumnName="id", nullable=true, onDelete="SET NULL")
     */
    protected $agencia;    
    
    /**
     * @ORM\ManyToOne(targetEntity="TipoObra", inversedBy="obras",cascade={"persist"})
     * @ORM\JoinColumn(name="id_obra", referencedColumnName="id", nullable=true, onDelete="SET NULL")
     */
    protected $tipoObra;
    
    /**
     * @ORM\OneToMany(targetEntity="Actor", mappedBy="obra")
     */
    protected $actores;

    public function __construct() {
        $this->setNom("");
        $this->setDescripcio("");
        $this->actores = new ArrayCollection();
    }
    
    /**
     * @ORM\ManyToOne(targetEntity="Director", inversedBy="obras",cascade={"persist"})
     * @ORM\JoinColumn(name="id_director", referencedColumnName="id", nullable=true, onDelete="SET NULL")
     */
    protected $director;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
        
    
    /**
     * Set tipoObra
     *
     * @param \FrontendBundle\Entity\TipoObra $tipoObra
     *
     * @return obras
     */
    public function setTipoObra(\FrontendBundle\Entity\TipoObra $tipoObra = null)
    {
        $this->tipoObra = $tipoObra;

        return $this;
    }

    /**
     * Get tipoObra
     *
     * @return \FrontendBundle\Entity\TipoObra
     */
    public function getTipoObra()
    {
        return $this->tipoObra;
    }

    /**
     * Set agencia
     *
     * @param \FrontendBundle\Entity\Agencia $agencia
     *
     * @return Obra
     */
    public function setAgencia(\FrontendBundle\Entity\Agencia $agencia = null)
    {
        $this->agencia = $agencia;

        return $this;
    }

    /**
     * Get agencia
     *
     * @return \FrontendBundle\Entity\Agencia
     */
    public function getAgencia()
    {
        return $this->agencia;
    }

    /**
     * Add actore
     *
     * @param \FrontendBundle\Entity\Actor $actore
     *
     * @return Obra
     */
    public function addActore(\FrontendBundle\Entity\Actor $actore)
    {
        $this->actores[] = $actore;

        return $this;
    }

    /**
     * Remove actore
     *
     * @param \FrontendBundle\Entity\Actor $actore
     */
    public function removeActore(\FrontendBundle\Entity\Actor $actore)
    {
        $this->actores->removeElement($actore);
    }

    /**
     * Get actores
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActores()
    {
        return $this->actores;
    }

    /**
     * Set director
     *
     * @param \FrontendBundle\Entity\Director $director
     *
     * @return Obra
     */
    public function setDirector(\FrontendBundle\Entity\Director $director = null)
    {
        $this->director = $director;

        return $this;
    }

    /**
     * Get director
     *
     * @return \FrontendBundle\Entity\Director
     */
    public function getDirector()
    {
        return $this->director;
    }
}
