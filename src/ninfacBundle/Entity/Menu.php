<?php

namespace ninfacBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menu
 *
 * @ORM\Table(name="menu")
 * @ORM\Entity(repositoryClass="ninfacBundle\Repository\MenuRepository")
 */
class Menu
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
     * @ORM\Column(name="opcion", type="string", length=100)
     */
    private $opcion;

    /**
     * @var int
     *
     * @ORM\Column(name="nivel", type="integer")
     */
    private $nivel;


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
     * Set opcion
     *
     * @param string $opcion
     *
     * @return Menu
     */
    public function setOpcion($opcion)
    {
        $this->opcion = $opcion;

        return $this;
    }

    /**
     * Get opcion
     *
     * @return string
     */
    public function getOpcion()
    {
        return $this->opcion;
    }

    /**
     * Set nivel
     *
     * @param integer $nivel
     *
     * @return Menu
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return int
     */
    public function getNivel()
    {
        return $this->nivel;
    }
}

