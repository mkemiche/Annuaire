<?php

namespace Proxies\__CG__\Annuaire\AnnuaireBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Ressources extends \Annuaire\AnnuaireBundle\Entity\Ressources implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setRessources($ressources)
    {
        $this->__load();
        return parent::setRessources($ressources);
    }

    public function getRessources()
    {
        $this->__load();
        return parent::getRessources();
    }

    public function setType($type)
    {
        $this->__load();
        return parent::setType($type);
    }

    public function getType()
    {
        $this->__load();
        return parent::getType();
    }

    public function setMarque($marque)
    {
        $this->__load();
        return parent::setMarque($marque);
    }

    public function getMarque()
    {
        $this->__load();
        return parent::getMarque();
    }

    public function setNumSerie($numSerie)
    {
        $this->__load();
        return parent::setNumSerie($numSerie);
    }

    public function getNumSerie()
    {
        $this->__load();
        return parent::getNumSerie();
    }

    public function setRessource($ressource)
    {
        $this->__load();
        return parent::setRessource($ressource);
    }

    public function getRessource()
    {
        $this->__load();
        return parent::getRessource();
    }

    public function setEmployee(\Annuaire\AnnuaireBundle\Entity\Employee $employee = NULL)
    {
        $this->__load();
        return parent::setEmployee($employee);
    }

    public function getEmployee()
    {
        $this->__load();
        return parent::getEmployee();
    }

    public function setModel($model)
    {
        $this->__load();
        return parent::setModel($model);
    }

    public function getModel()
    {
        $this->__load();
        return parent::getModel();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'ressource', 'type', 'marque', 'model', 'numSerie', 'employee');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}