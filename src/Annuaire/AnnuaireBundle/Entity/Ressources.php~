<?php

namespace Annuaire\AnnuaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ressources
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Annuaire\AnnuaireBundle\Repository\RessourcesRepository")
 */
class Ressources
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
     * @ORM\ManyToOne(targetEntity="Annuaire\AnnuaireBundle\Entity\Employee")
     * @ORM\JoinColumn(nullable=true,onDelete="CASCADE")
     *
     */
    private $employee;

    /**
     * @var string
     *
     * @ORM\Column(name="ressources", type="string", length=30)
     */
    private $ressource;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=30, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=30)
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=30, nullable=true)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="numSerie", type="string", length=30, nullable=true)
     */
    private $numSerie;


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
     * Set type
     *
     * @param string $type
     * @return Ressources
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set marque
     *
     * @param string $marque
     * @return Ressources
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    
        return $this;
    }

    /**
     * Get marque
     *
     * @return string 
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set numSerie
     *
     * @param string $numSerie
     * @return Ressources
     */
    public function setNumSerie($numSerie)
    {
        $this->numSerie = $numSerie;
    
        return $this;
    }

    /**
     * Get numSerie
     *
     * @return string 
     */
    public function getNumSerie()
    {
        return $this->numSerie;
    }

    /**
     * Set ressource
     *
     * @param string $ressource
     * @return Ressources
     */
    public function setRessource($ressource)
    {
        $this->ressource = $ressource;
    
        return $this;
    }

    /**
     * Get ressource
     *
     * @return string 
     */
    public function getRessource()
    {
        return $this->ressource;
    }

    /**
     * Set employee
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Employee $employee
     * @return Ressources
     */
    public function setEmployee(\Annuaire\AnnuaireBundle\Entity\Employee $employee = null)
    {
        $this->employee = $employee;
    
        return $this;
    }

    /**
     * Get employee
     *
     * @return \Annuaire\AnnuaireBundle\Entity\Employee 
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * Set model
     *
     * @param string $model
     * @return Ressources
     */
    public function setModel($model)
    {
        $this->model = $model;
    
        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }
   
 
}