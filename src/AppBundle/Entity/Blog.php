<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blog
 *
 * @ORM\Table(name="blog")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BlogRepository")
 */
class Blog
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
     * @ORM\Column(name="blow_show", type="string", length=255)
     */
    private $blowShow;


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
     * Set blowShow
     *
     * @param string $blowShow
     *
     * @return Blog
     */
    public function setBlowShow($blowShow)
    {
        $this->blowShow = $blowShow;

        return $this;
    }

    /**
     * Get blowShow
     *
     * @return string
     */
    public function getBlowShow()
    {
        return $this->blowShow;
    }
}

