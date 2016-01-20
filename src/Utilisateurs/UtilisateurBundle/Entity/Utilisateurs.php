<?php
// src/AppBundle/Entity/User.php

namespace Utilisateurs\UtilisateurBundle\Entity;

use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Utilisateurs")
 */
class Utilisateurs extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

   
     /**
     * @ORM\OneToOne(targetEntity="Annuaire\AnnuaireBundle\Entity\Employee", mappedBy="utilisateur")
     **/
    private $employee;

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
     * Set employee
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Employee $employee
     * @return Utilisateurs
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

    public function isAccountNonExpired()
    {
        return true;
    }

    public function isAccountNonLocked()
    {
        return true;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }
   
}