<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Configuration
 *
 * @ORM\Table(name="configuration")
 * @ORM\Entity
 */
class Configuration
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idConfiguration", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idconfiguration;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombreJourextra", type="integer", nullable=true)
     */
    private $nombrejourextra;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombreJourFrais", type="integer", nullable=true)
     */
    private $nombrejourfrais;



    /**
     * Get idconfiguration
     *
     * @return integer
     */
    public function getIdconfiguration()
    {
        return $this->idconfiguration;
    }

    /**
     * Set nombrejourextra
     *
     * @param integer $nombrejourextra
     *
     * @return Configuration
     */
    public function setNombrejourextra($nombrejourextra)
    {
        $this->nombrejourextra = $nombrejourextra;

        return $this;
    }

    /**
     * Get nombrejourextra
     *
     * @return integer
     */
    public function getNombrejourextra()
    {
        return $this->nombrejourextra;
    }

    /**
     * Set nombrejourfrais
     *
     * @param integer $nombrejourfrais
     *
     * @return Configuration
     */
    public function setNombrejourfrais($nombrejourfrais)
    {
        $this->nombrejourfrais = $nombrejourfrais;

        return $this;
    }

    /**
     * Get nombrejourfrais
     *
     * @return integer
     */
    public function getNombrejourfrais()
    {
        return $this->nombrejourfrais;
    }
}
