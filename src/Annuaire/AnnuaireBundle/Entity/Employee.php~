<?php

namespace Annuaire\AnnuaireBundle\Entity;

use Utilisateurs\UtilisateurBundle\Entity\Utilisateurs;
use Doctrine\ORM\Mapping as ORM;

/**
 * Employee
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Annuaire\AnnuaireBundle\Repository\EmployeeRepository")
 */
class Employee
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
     * @ORM\OneToOne(targetEntity="Utilisateurs\UtilisateurBundle\Entity\Utilisateurs", inversedBy="employee", cascade={"remove"})
     * @ORM\JoinColumn(name="utilisateur_id", referencedColumnName="id",onDelete="CASCADE")
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="civilite", type="string", length=8)
     */
    private $civilite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaiss", type="date")
     */
    private $dateNaiss;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=100)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="complementAdr", type="string", length=100, nullable=true)
     */
    private $complementAdr;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=50)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="numTel", type="string")
     */
    private $numTel;

    /**
     * @var string
     *
     * @ORM\Column(name="numPro", type="string")
     */
    private $numPro;

    /**
     * @var string
     *
     * @ORM\Column(name="numBureau", type="string", length=15)
     */
    private $numBureau;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="numEmp", type="string", length=20)
     */
    private $numEmp;

    /**
     * @var string
     *
     * @ORM\Column(name="fontion", type="string", length=50)
     */
    private $fonction;

    /**
     * @var string
     *
     * @ORM\Column(name="departement", type="string", length=50)
     */
    private $departement;

    /**
     * @var string
     *
     * @ORM\Column(name="localisation", type="string", length=30)
     */
    private $localisation;

    /**
     * @var string
     *
     * @ORM\Column(name="nomService", type="string", length=50)
     */
    private $nomService;


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
     * Set civilite
     *
     * @param string $civilite
     * @return Employee
     */
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;
    
        return $this;
    }

    /**
     * Get civilite
     *
     * @return string 
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Employee
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
     * @return Employee
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
     * Set dateNaiss
     *
     * @param \DateTime $dateNaiss
     * @return Employee
     */
    public function setDateNaiss($dateNaiss)
    {
        $this->dateNaiss = $dateNaiss;
    
        return $this;
    }

    /**
     * Get dateNaiss
     *
     * @return \DateTime 
     */
    public function getDateNaiss()
    {
        return $this->dateNaiss;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Employee
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
     * Set complementAdr
     *
     * @param string $complementAdr
     * @return Employee
     */
    public function setComplementAdr($complementAdr)
    {
        $this->complementAdr = $complementAdr;
    
        return $this;
    }

    /**
     * Get complementAdr
     *
     * @return string 
     */
    public function getComplementAdr()
    {
        return $this->complementAdr;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Employee
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
     * Set numTel
     *
     * @param integer $numTel
     * @return Employee
     */
    public function setNumTel($numTel)
    {
        $this->numTel = $numTel;
    
        return $this;
    }

    /**
     * Get numTel
     *
     * @return integer 
     */
    public function getNumTel()
    {
        return $this->numTel;
    }

    /**
     * Set numPro
     *
     * @param integer $numPro
     * @return Employee
     */
    public function setNumPro($numPro)
    {
        $this->numPro = $numPro;
    
        return $this;
    }

    /**
     * Get numPro
     *
     * @return integer 
     */
    public function getNumPro()
    {
        return $this->numPro;
    }

    /**
     * Set numBureau
     *
     * @param string $numBureau
     * @return Employee
     */
    public function setNumBureau($numBureau)
    {
        $this->numBureau = $numBureau;
    
        return $this;
    }

    /**
     * Get numBureau
     *
     * @return string 
     */
    public function getNumBureau()
    {
        return $this->numBureau;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Employee
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set numEmp
     *
     * @param string $numEmp
     * @return Employee
     */
    public function setNumEmp($numEmp)
    {
        $this->numEmp = $numEmp;
    
        return $this;
    }

    /**
     * Get numEmp
     *
     * @return string 
     */
    public function getNumEmp()
    {
        return $this->numEmp;
    }

    /**
     * Set fontion
     *
     * @param string $fontion
     * @return Employee
     */
    public function setFontion($fontion)
    {
        $this->fontion = $fontion;
    
        return $this;
    }

    /**
     * Get fontion
     *
     * @return string 
     */
    public function getFontion()
    {
        return $this->fontion;
    }

    /**
     * Set departement
     *
     * @param string $departement
     * @return Employee
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
     * Set localisation
     *
     * @param string $localisation
     * @return Employee
     */
    public function setLocalisation($localisation)
    {
        $this->localisation = $localisation;
    
        return $this;
    }

    /**
     * Get localisation
     *
     * @return string 
     */
    public function getLocalisation()
    {
        return $this->localisation;
    }

    /**
     * Set nomService
     *
     * @param string $nomService
     * @return Employee
     */
    public function setNomService($nomService)
    {
        $this->nomService = $nomService;
    
        return $this;
    }

    /**
     * Get nomService
     *
     * @return string 
     */
    public function getNomService()
    {
        return $this->nomService;
    }

    /**
     * Set fonction
     *
     * @param string $fonction
     * @return Employee
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;
    
        return $this;
    }

    /**
     * Get fonction
     *
     * @return string 
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Set utilisateur
     *
     * @param \Utilisateurs\UtilisateurBundle\Entity\Utilisateurs $utilisateur
     * @return Employee
     */
    public function setUtilisateur(\Utilisateurs\UtilisateurBundle\Entity\Utilisateurs $utilisateur = null)
    {
        $this->utilisateur = $utilisateur;
    
        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \Utilisateurs\UtilisateurBundle\Entity\Utilisateurs 
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }
         
        public function __toString() {
        return $this->nom;
        }       
}