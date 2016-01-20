<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boiteoeufs
 *
 * @ORM\Table(name="boiteoeufs", indexes={@ORM\Index(name="fk_BoiteOeufs_Client1_idx", columns={"idClient"})})
 * @ORM\Entity
 */
class Boiteoeufs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idBoiteOeufs", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idboiteoeufs;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateInstallation", type="datetime", nullable=true)
     */
    private $dateinstallation;

    /**
     * @var integer
     *
     * @ORM\Column(name="capacite", type="integer", nullable=true)
     */
    private $capacite;

    /**
     * @var integer
     *
     * @ORM\Column(name="seuilMini", type="integer", nullable=true)
     */
    private $seuilmini;

    /**
     * @var \AppBundle\Entity\Client
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClient", referencedColumnName="idClient")
     * })
     */
    private $idclient;



    /**
     * Get idboiteoeufs
     *
     * @return integer
     */
    public function getIdboiteoeufs()
    {
        return $this->idboiteoeufs;
    }

    /**
     * Set dateinstallation
     *
     * @param \DateTime $dateinstallation
     *
     * @return Boiteoeufs
     */
    public function setDateinstallation($dateinstallation)
    {
        $this->dateinstallation = $dateinstallation;

        return $this;
    }

    /**
     * Get dateinstallation
     *
     * @return \DateTime
     */
    public function getDateinstallation()
    {
        return $this->dateinstallation;
    }

    /**
     * Set capacite
     *
     * @param integer $capacite
     *
     * @return Boiteoeufs
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get capacite
     *
     * @return integer
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * Set seuilmini
     *
     * @param integer $seuilmini
     *
     * @return Boiteoeufs
     */
    public function setSeuilmini($seuilmini)
    {
        $this->seuilmini = $seuilmini;

        return $this;
    }

    /**
     * Get seuilmini
     *
     * @return integer
     */
    public function getSeuilmini()
    {
        return $this->seuilmini;
    }

    /**
     * Set idclient
     *
     * @param \AppBundle\Entity\Client $idclient
     *
     * @return Boiteoeufs
     */
    public function setIdclient(\AppBundle\Entity\Client $idclient = null)
    {
        $this->idclient = $idclient;

        return $this;
    }

    /**
     * Get idclient
     *
     * @return \AppBundle\Entity\Client
     */
    public function getIdclient()
    {
        return $this->idclient;
    }
}
