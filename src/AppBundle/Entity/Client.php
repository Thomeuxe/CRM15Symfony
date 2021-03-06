<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity
 */
class Client
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idClient", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idclient;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=45, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=45, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="Telephone", type="string", length=10, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="Rue", type="string", length=45, nullable=true)
     */
    private $rue;

    /**
     * @var string
     *
     * @ORM\Column(name="Numero", type="string", length=45, nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="CodePostal", type="string", length=45, nullable=true)
     */
    private $codepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="Ville", type="string", length=45, nullable=true)
     */
    private $ville;

    /**
     * @var \Doctrine\Common\Collections\Collection
     * 
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Boiteoeufs", mappedBy="idclient",cascade={"remove","persist"})
     */
    protected $lesboites;
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lesboites = new \Doctrine\Common\Collections\ArrayCollection();

    }


    /**
     * Get idclient
     *
     * @return integer
     */
    public function getIdclient()
    {
        return $this->idclient;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Client
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Client
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Client
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set rue
     *
     * @param string $rue
     *
     * @return Client
     */
    public function setRue($rue)
    {
        $this->rue = $rue;

        return $this;
    }

    /**
     * Get rue
     *
     * @return string
     */
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * Set numero
     *
     * @param string $numero
     *
     * @return Client
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set codepostal
     *
     * @param string $codepostal
     *
     * @return Client
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal
     *
     * @return string
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Client
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }
    
    public function __tostring(){
        return $this->nom . $this->prenom;
    }

    /**
     * Add lesboite
     *
     * @param \AppBundle\Entity\Boiteoeufs $lesboite
     *
     * @return Client
     */
    public function addLesboite(\AppBundle\Entity\Boiteoeufs $lesboite)
    {
        $this->lesboites[] = $lesboite;
        $lesboite->setIdclient($this);
        return $this;
    }

    /**
     * Remove lesboite
     *
     * @param \AppBundle\Entity\Boiteoeufs $lesboite
     */
    public function removeLesboite(\AppBundle\Entity\Boiteoeufs $lesboite)
    {
        $this->lesboites->removeElement($lesboite);
    }

    /**
     * Get lesboites
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLesboites()
    {
        return $this->lesboites;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idlivreur;


    /**
     * Add idlivreur
     *
     * @param \AppBundle\Entity\Livreur $idlivreur
     *
     * @return Client
     */
    public function addIdlivreur(\AppBundle\Entity\Livreur $idlivreur)
    {
        $this->idlivreur[] = $idlivreur;

        return $this;
    }

    /**
     * Remove idlivreur
     *
     * @param \AppBundle\Entity\Livreur $idlivreur
     */
    public function removeIdlivreur(\AppBundle\Entity\Livreur $idlivreur)
    {
        $this->idlivreur->removeElement($idlivreur);
    }

    /**
     * Get idlivreur
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdlivreur()
    {
        return $this->idlivreur;
    }
}
