<?php

namespace Annuaire\AnnuaireBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Annuaire\AnnuaireBundle\Entity\Employee;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	
    	
        return $this->render('AnnuaireBundle:Default:index.html.twig');
    }
}
