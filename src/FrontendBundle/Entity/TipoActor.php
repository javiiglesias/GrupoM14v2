<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoActor
 *
 * @ORM\Table(name="tipo_actor")
 * @ORM\Entity(repositoryClass="FrontendBundle\Repository\TipoActorRepository")
 */
class TipoActor
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
     * @ORM\Column(name="Papel", type="string", length=255)
     */
    private $papel;


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
}

