<?php

namespace Brocoutes\BrocanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Brocoutes\BrocanteBundle\Utils\Brocante as Brocante;

/**
 * Manifestation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Brocoutes\BrocanteBundle\Entity\ManifestationRepository")
 */
class Manifestation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255)
     */
    private $lieu;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="adressecomplement", type="string", length=255, nullable=true)
     */
    private $adressecomplement;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="departement", type="string", length=255, nullable=true)
     */
    private $departement;

    /**
     * @var string
     *
     * @ORM\Column(name="codepostal", type="string", length=255, nullable=true)
     */
    private $codepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="string", length=255, nullable=true)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="string", length=255, nullable=true)
     */
    private $longitude;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateouverture", type="datetime")
     */
    private $dateouverture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefermeture", type="datetime")
     */
    private $datefermeture;

    /**
     * @var string
     *
     * @ORM\Column(name="organisateur", type="string", length=255, nullable=true)
     */
    private $organisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="courriel", type="string", length=255, nullable=true)
     */
    private $courriel;

    /**
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=255, nullable=true)
     */
    private $site;


    /**
     * @var integer
     *
     * @ORM\Column(name="prixentree", type="integer", nullable=true)
     */
    private $prixentree;

    /**
     * @var integer
     *
     * @ORM\Column(name="stand", type="integer", nullable=true)
     */
    private $stand;


    /**
     * @var string
     *
     * @ORM\Column(name="information", type="string", length=255, nullable=true)
     */
    private $information;

    /**
     * @var string
     *
     * @ORM\Column(name="affiche", type="string", length=255, nullable=true)
     */
    private $affiche;

    /**
     * @var string
     *
     * @ORM\Column(name="exposant", type="string", length=255, nullable=true)
     */
    private $exposant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation", type="datetime")
     */
    private $creation;

    /**
     * @var string
     *
     * @ORM\Column(name="miseajour", type="datetime")
     */
    private $miseajour;


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
     * Set nom
     *
     * @param string $nom
     * @return Manifestation
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
     * Set lieu
     *
     * @param string $lieu
     * @return Manifestation
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
    
        return $this;
    }

    /**
     * Get lieu
     *
     * @return string 
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Manifestation
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    
        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set adressecomplement
     *
     * @param string $adressecomplement
     * @return Manifestation
     */
    public function setAdressecomplement($adressecomplement)
    {
        $this->adressecomplement = $adressecomplement;
    
        return $this;
    }

    /**
     * Get adressecomplement
     *
     * @return string 
     */
    public function getAdressecomplement()
    {
        return $this->adressecomplement;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Manifestation
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

    /**
     * Set departement
     *
     * @param string $departement
     * @return Manifestation
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;
    
        return $this;
    }

    /**
     * Get departement
     *
     * @return string 
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * Set codepostal
     *
     * @param string $codepostal
     * @return Manifestation
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
     * Set latitude
     *
     * @param string $latitude
     * @return Manifestation
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    
        return $this;
    }

    /**
     * Get latitude
     *
     * @return string 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     * @return Manifestation
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    
        return $this;
    }

    /**
     * Get longitude
     *
     * @return string 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set dateouverture
     *
     * @param \DateTime $dateouverture
     * @return Manifestation
     */
    public function setDateouverture($dateouverture)
    {
        $this->dateouverture = $dateouverture;
    
        return $this;
    }

    /**
     * Get dateouverture
     *
     * @return \DateTime 
     */
    public function getDateouverture()
    {
        return $this->dateouverture;
    }

    /**
     * Set datefermeture
     *
     * @param \DateTime $datefermeture
     * @return Manifestation
     */
    public function setDatefermeture($datefermeture)
    {
        $this->datefermeture = $datefermeture;
    
        return $this;
    }

    /**
     * Get datefermeture
     *
     * @return \DateTime 
     */
    public function getDatefermeture()
    {
        return $this->datefermeture;
    }

    /**
     * Set heureouverture
     *
     * @param \DateTime $heureouverture
     * @return Manifestation
     */
    public function setHeureouverture($heureouverture)
    {
        $this->heureouverture = $heureouverture;
    
        return $this;
    }

    /**
     * Get heureouverture
     *
     * @return \DateTime 
     */
    public function getHeureouverture()
    {
        return $this->heureouverture;
    }

    /**
     * Set heurefermeture
     *
     * @param \DateTime $heurefermeture
     * @return Manifestation
     */
    public function setHeurefermeture($heurefermeture)
    {
        $this->heurefermeture = $heurefermeture;
    
        return $this;
    }

    /**
     * Get heurefermeture
     *
     * @return \DateTime 
     */
    public function getHeurefermeture()
    {
        return $this->heurefermeture;
    }

    /**
     * Set organisateur
     *
     * @param string $organisateur
     * @return Manifestation
     */
    public function setOrganisateur($organisateur)
    {
        $this->organisateur = $organisateur;
    
        return $this;
    }

    /**
     * Get organisateur
     *
     * @return string 
     */
    public function getOrganisateur()
    {
        return $this->organisateur;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Manifestation
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
     * Set courriel
     *
     * @param string $courriel
     * @return Manifestation
     */
    public function setCourriel($courriel)
    {
        $this->courriel = $courriel;
    
        return $this;
    }

    /**
     * Get courriel
     *
     * @return string 
     */
    public function getCourriel()
    {
        return $this->courriel;
    }


    /**
     * Set site
     *
     * @param string $site
     * @return Manifestation
     */
    public function setSite($site)
    {
        $this->site = $site;
    
        return $this;
    }

    /**
     * Get site
     *
     * @return string 
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set prixentree
     *
     * @param integer $prixentree
     * @return Manifestation
     */
    public function setPrixentree($prixentree)
    {
        $this->prixentree = $prixentree;
    
        return $this;
    }

    /**
     * Get prixentree
     *
     * @return integer 
     */
    public function getPrixentree()
    {
        return $this->prixentree;
    }

    /**
     * Set stand
     *
     * @param integer $stand
     * @return Manifestation
     */
    public function setStand($stand)
    {
        $this->stand = $stand;
    
        return $this;
    }

    /**
     * Get stand
     *
     * @return integer 
     */
    public function getStand()
    {
        return $this->stand;
    }


    /**
     * Set information
     *
     * @param string $information
     * @return Manifestation
     */
    public function setInformation($information)
    {
        $this->information = $information;
    
        return $this;
    }

    /**
     * Get information
     *
     * @return string 
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Set affiche
     *
     * @param string $affiche
     * @return Manifestation
     */
    public function setAffiche($affiche)
    {
        $this->affiche = $affiche;
    
        return $this;
    }

    /**
     * Get affiche
     *
     * @return string 
     */
    public function getAffiche()
    {
        return $this->affiche;
    }

    /**
     * Set exposant
     *
     * @param string $exposant
     * @return Manifestation
     */
    public function setExposant($exposant)
    {
        $this->exposant = $exposant;
    
        return $this;
    }

    /**
     * Get exposant
     *
     * @return string 
     */
    public function getExposant()
    {
        return $this->exposant;
    }

    /**
     * Set creation
     *
     * @param \DateTime $creation
     * @return Manifestation
     */
    public function setCreation($creation)
    {
        $this->creation = $creation;
    
        return $this;
    }

    /**
     * Get creation
     *
     * @return \DateTime 
     */
    public function getCreation()
    {
        return $this->creation;
    }

    /**
     * Set miseajour
     *
     * @param \DateTime $miseajour
     * @return Manifestation
     */
    public function setMiseajour($miseajour)
    {
        $this->miseajour = $miseajour;
    
        return $this;
    }

    /**
     * Get miseajour
     *
     * @return \DateTime
     */
    public function getMiseajour()
    {
        return $this->miseajour;
    }

    public function getNomSlug()
    {   
        return Brocante::slugify($this->getNom());
    }   
 
    public function getLieuSlug()
    {   
        return Brocante::slugify($this->getLieu());
    } 

}
