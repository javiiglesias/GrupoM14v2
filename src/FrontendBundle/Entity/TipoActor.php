<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoActor
 *
 * @ORM\Table(name="tipo_actor")
 * @ORM\Entity
 */
class TipoActor
{
    /**
     * @var string
     *
     * @ORM\Column(name="Papel", type="string", length=255, nullable=false)
     */
    private $papel;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_actor", type="integer", nullable=false)
     */
    private $idActor;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set papel
     *
     * @param string $papel
     *
     * @return TipoActor
     */
    public function setPapel($papel)
    {
        $this->papel = $papel;

        return $this;
    }

    /**
     * Get papel
     *
     * @return string
     */
    public function getPapel()
    {
        return $this->papel;
    }

    /**
     * Set idActor
     *
     * @param integer $idActor
     *
     * @return TipoActor
     */
    public function setIdActor($idActor)
    {
        $this->idActor = $idActor;

        return $this;
    }

    /**
     * Get idActor
     *
     * @return integer
     */
    public function getIdActor()
    {
        return $this->idActor;
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
