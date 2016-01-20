<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Oeufs
 *
 * @ORM\Table(name="oeufs", indexes={@ORM\Index(name="fk_Oeufs_BoiteOeufs1_idx", columns={"idBoiteOeufs"})})
 * @ORM\Entity
 */
class Oeufs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idOeufs", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idoeufs;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datelivraison", type="datetime", nullable=true)
     */
    private $datelivraison;

    /**
     * @var integer
     *
     * @ORM\Column(name="positionBoite", type="integer", nullable=true)
     */
    private $positionboite;

    /**
     * @var \AppBundle\Entity\Boiteoeufs
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Boiteoeufs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idBoiteOeufs", referencedColumnName="idBoiteOeufs")
     * })
     */
    private $idboiteoeufs;



    /**
     * Get idoeufs
     *
     * @return integer
     */
    public function getIdoeufs()
    {
        return $this->idoeufs;
    }

    /**
     * Set datelivraison
     *
     * @param \DateTime $datelivraison
     *
     * @return Oeufs
     */
    public function setDatelivraison($datelivraison)
    {
        $this->datelivraison = $datelivraison;

        return $this;
    }

    /**
     * Get datelivraison
     *
     * @return \DateTime
     */
    public function getDatelivraison()
    {
        return $this->datelivraison;
    }

    /**
     * Set positionboite
     *
     * @param integer $positionboite
     *
     * @return Oeufs
     */
    public function setPositionboite($positionboite)
    {
        $this->positionboite = $positionboite;

        return $this;
    }

    /**
     * Get positionboite
     *
     * @return integer
     */
    public function getPositionboite()
    {
        return $this->positionboite;
    }

    /**
     * Set idboiteoeufs
     *
     * @param \AppBundle\Entity\Boiteoeufs $idboiteoeufs
     *
     * @return Oeufs
     */
    public function setIdboiteoeufs(\AppBundle\Entity\Boiteoeufs $idboiteoeufs = null)
    {
        $this->idboiteoeufs = $idboiteoeufs;

        return $this;
    }

    /**
     * Get idboiteoeufs
     *
     * @return \AppBundle\Entity\Boiteoeufs
     */
    public function getIdboiteoeufs()
    {
        return $this->idboiteoeufs;
    }
}
