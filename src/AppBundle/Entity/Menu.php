<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * menu
 *
 * @ORM\Table(name="menu")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\menuRepository")
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
     * @ORM\Column(name="place", type="string", length=255)
     */
    private $place;

    /**
     * @var int
     *
     * @ORM\Column(name="sort_order", type="integer")
     */
    private $sortOrder;

    /**
     * @var Information
     *
     * @ORM\ManyToOne(targetEntity="Information", inversedBy="menu")
     * @ORM\JoinColumn(name="information_id", referencedColumnName="id")
     */
    private $information;


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
     * Set place
     *
     * @param string $place
     * @return Menu
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string 
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set sortOrder
     *
     * @param integer $sortOrder
     * @return Menu
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Get sortOrder
     *
     * @return integer 
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Set information
     *
     * @param \AppBundle\Entity\Information $information
     * @return Menu
     */
    public function setInformation(\AppBundle\Entity\Information $information = null)
    {
        $this->information = $information;

        return $this;
    }

    /**
     * Get information
     *
     * @return \AppBundle\Entity\Information 
     */
    public function getInformation()
    {
        return $this->information;
    }
}
