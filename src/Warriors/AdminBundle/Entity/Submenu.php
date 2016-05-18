<?php

namespace Warriors\AdminBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Submenu
 */
class Submenu
{

    protected $url;
 
    public function __construct()
    {
        $this->url = new ArrayCollection();
    }

    protected $submenu;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Submenu
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
     public function __toString()
    {
        return $this->nombre;
    }
    
     /**
     * @var \Warriors\AdminBundle\Entity\Menu
     */
    private $menu;


    /**
     * Set menu
     *
     * @param \Warriors\AdminBundle\Entity\Menu $menu
     * @return Submenu
     */
    public function setMenu(\Warriors\AdminBundle\Entity\Menu $menu = null)
    {
        $this->menu = $menu;

        return $this;
    }

    /**
     * Get menu
     *
     * @return \Warriors\AdminBundle\Entity\Menu 
     */
    public function getMenu()
    {
        return $this->menu;
    }
    
}

