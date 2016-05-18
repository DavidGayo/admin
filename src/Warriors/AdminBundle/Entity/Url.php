<?php

namespace Warriors\AdminBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Url
 */
class Url
{


    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $url;

    /**
     * @var boolean
     */
    private $producto1;

    /**
     * @var boolean
     */
    private $producto2;

    /**
     * @var boolean
     */
    private $producto3;


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
     * @return Url
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
     * Set url
     *
     * @param string $url
     *
     * @return Url
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set producto1
     *
     * @param boolean $producto1
     *
     * @return Url
     */
    public function setProducto1($producto1)
    {
        $this->producto1 = $producto1;

        return $this;
    }

    /**
     * Get producto1
     *
     * @return boolean
     */
    public function getProducto1()
    {
        return $this->producto1;
    }

    /**
     * Set producto2
     *
     * @param boolean $producto2
     *
     * @return Url
     */
    public function setProducto2($producto2)
    {
        $this->producto2 = $producto2;

        return $this;
    }

    /**
     * Get producto2
     *
     * @return boolean
     */
    public function getProducto2()
    {
        return $this->producto2;
    }

    /**
     * Set producto3
     *
     * @param boolean $producto3
     *
     * @return Url
     */
    public function setProducto3($producto3)
    {
        $this->producto3 = $producto3;

        return $this;
    }

    /**
     * Get producto3
     *
     * @return boolean
     */
    public function getProducto3()
    {
        return $this->producto3;
    }


     /**
     * @var \Warriors\AdminBundle\Entity\Submenu
     */
    private $submenu;


    /**
     * Set submenu
     *
     * @param \Warriors\AdminBundle\Entity\Submenu $submenu
     * @return url
     */
    public function setsubmenu(\Warriors\AdminBundle\Entity\Submenu $submenu = null)
    {
        $this->submenu = $submenu;

        return $this;
    }

    /**
     * Get submenu
     *
     * @return \Warriors\AdminBundle\Entity\Submenu 
     */
    public function getSubmenu()
    {
        return $this->submenu;
    }
}

