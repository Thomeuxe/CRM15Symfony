<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livraison
 *
 * @ORM\Table(name="livraison",indexes={@ORM\Index(name="fk_Livreur_Client", columns={"idClient", "idLivreur"})})
 * @ORM\Entity
 */

class Livraison {
        /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * 
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Livreur")
     * @ORM\JoinColumn(
     *      name = "idLivreur",
     *      referencedColumnName="idLivreur",
     *      nullable=false
     * )
    */
    private $idlivreur;
    /**
     * 
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Client", inversedBy="idClient")
     * @ORM\JoinColumn(
     *      name = "idClient",
     *      referencedColumnName="idClient",
     *      nullable=false
     * )    
     */
    private $idClient;  
        /**
     * @var \DateTime
     *
     * @ORM\Column(name="jourLivraison", type="datetime", nullable=false)
     */
    private $jourLivraison;

    /**
     * Set jourLivraison
     *
     * @param \DateTime $jourLivraison
     *
     * @return Livraison
     */
    public function setJourLivraison($jourLivraison)
    {
        $this->jourLivraison = $jourLivraison;

        return $this;
    }

    /**
     * Get jourLivraison
     *
     * @return \DateTime
     */
    public function getJourLivraison()
    {
        return $this->jourLivraison;
    }

    /**
     * Set idlivreur
     *
     * @param \AppBundle\Entity\Livreur $idlivreur
     *
     * @return Livraison
     */
    public function setIdlivreur(\AppBundle\Entity\Livreur $idlivreur)
    {
        $this->idlivreur = $idlivreur;

        return $this;
    }

    /**
     * Get idlivreur
     *
     * @return \AppBundle\Entity\Livreur
     */
    public function getIdlivreur()
    {
        return $this->idlivreur;
    }

    /**
     * Set idClient
     *
     * @param \AppBundle\Entity\Client $idClient
     *
     * @return Livraison
     */
    public function setIdClient(\AppBundle\Entity\Client $idClient)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return \AppBundle\Entity\Client
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
