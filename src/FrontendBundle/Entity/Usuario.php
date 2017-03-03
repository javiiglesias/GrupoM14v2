<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity(repositoryClass="FrontendBundle\Repository\UsuarioRepository")
 */
class Usuario implements UserInterface
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="rol", type="string", length=255)
     */
    private $rol;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set rol
     *
     * @param string $rol
     *
     * @return Usuario
     */
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return string
     */
    public function getRol()
    {
        return array('ROLE_ADMIN');
    }
    
    function getUsername()
    {
        return $this->getNombre();
    }

    public function eraseCredentials() {
        return null;
    }

    public function getRoles() {
         return array('ROLE_ADMIN');
    }

    public function getSalt() {
        return null;
    }

}
