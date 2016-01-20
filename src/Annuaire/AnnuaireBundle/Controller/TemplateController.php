<?php

namespace Annuaire\AnnuaireBundle\Controller;

use Annuaire\AnnuaireBundle\Entity\Employee;
use Annuaire\AnnuaireBundle\Entity\Ressources;
use Annuaire\AnnuaireBundle\Entity\Service;
use Annuaire\AnnuaireBundle\Form\EmployeeType;
use Annuaire\AnnuaireBundle\Form\RechercheType;
use Annuaire\AnnuaireBundle\Form\Recherche2Type;
use Annuaire\AnnuaireBundle\Form\RessourcesType;
use Annuaire\AnnuaireBundle\Form\ServiceType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class TemplateController extends Controller
{
    public function layoutAction()
    {
        $listeEmployee = $this->getDoctrine()->getRepository("AnnuaireBundle:Employee")->findAll();
        return $this->render('AnnuaireBundle::layout.html.twig', array('listeEmployee' => $listeEmployee));
    }
    public function afficherAction($id)
    {
        $employee = $this->getDoctrine()->getRepository("AnnuaireBundle:Employee")->find($id);
        $ressources = $this->getDoctrine()->getRepository("AnnuaireBundle:Ressources")->find($id);
        return $this->render('AnnuaireBundle:Template:afficher.html.twig', array('employee' => $employee, 'employee_id' => $id,
                                                                                  'listeRessources' => $ressources));
    }
    public function editerAction(Employee $employee)
    {
        $form = $this->createForm(new EmployeeType(), $employee);
        
        $request = $this->getRequest();

        if($request->isMethod('POST'))
        {
            $form->bind($request);

            if($form->isValid())
            {
                $emp = $form->getData();
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($emp);
                $em->flush();

                 return $this->redirect($this->generateUrl('mon_annuaire_info',  array(
                                                           'id' => $employee->getId())
                                                            ));
            }
        }
        return $this->render('AnnuaireBundle:Template:editer.html.twig', array('id' => $employee->getId(),
                                                                                    'form' => $form->createView()));
    }
    public function enregistrerAction()
    {
        $employee = new Employee();
        $form = $this->createForm(new EmployeeType(), $employee);
        $request = $this->getRequest();
        if($request->isMethod('Post'))
        {
            $form->bind($request);

            if($form->isValid())
            {
                $employee = $form->getData();
                $user = $this->get('security.context')->getToken()->getUser();
                $employee->setUtilisateur($user);

                $em = $this->getDoctrine()->getManager();
                $em->persist($employee);
                $em->flush();

                 return $this->redirect($this->generateUrl('mon_annuaire_ressource'));
            }
        }
        return $this->render('AnnuaireBundle:Template:enregistrer.html.twig', array('form' => $form->createView(), 
                                                                                    'form2' => $form->createView()));
    }

    public function rechercheAction()
    {
        
        $form = $this->createForm(new RechercheType());
        $manageur = $this->getDoctrine()->getManager();
        
        $listeEmployee = $manageur->getRepository("AnnuaireBundle:Employee")->findAll();
        
        if ($this->get('request')->getMethod() == 'POST')
        {
            $form->bind($this->get('request'));
            $em = $this->getDoctrine()->getManager();
            $listeEmployee = $em->getRepository("AnnuaireBundle:Employee")->recherche($form['recherche']->getData());
        }  
        

        return $this->render('AnnuaireBundle:Template:recherche.html.twig', array('liste' => $listeEmployee,
                                                                                     'compteur'=>count($listeEmployee),
                                                                                     'form' => $form->createView()));
    }
     public function rechercheResAction()
    {
        
        $form = $this->createForm(new RechercheType());
        $manageur = $this->getDoctrine()->getManager();
        
        $listeRessources = $manageur->getRepository("AnnuaireBundle:Ressources")->findAll();
        
        if($this->get('request')->getMethod() == 'POST')
        {
            $form->bind($this->get('request'));
            $em = $this->getDoctrine()->getManager();
            $listeRessources = $em->getRepository("AnnuaireBundle:Ressources")->recherche($form['recherche']->getData());
            }
           
            
        
        return $this->render('AnnuaireBundle:Template:rechercheRes.html.twig', array('form' => $form->createView(),
                                                                                      'compteur'=>count($listeRessources),
                                                                                      'liste'=>$listeRessources));
    }

    public function RessourcesAction()
    {
        $ressource = new Ressources();

        $form = $this->createForm(new RessourcesType(), $ressource);
        $request = $this->getRequest();
        $manageur = $this->getDoctrine()->getManager();
        $listeRessources = $manageur->getRepository("AnnuaireBundle:Ressources")->findAll();
        
        if($request->isMethod('POST') && $this->get('request')->getMethod() == 'POST')
        {
            $form->bind($request);

            if($form->isValid() )
            {
                $ressource = $form->getData();
                $em = $this->getDoctrine()->getManager();
                $em->persist($ressource);
                $em->flush();

               return $this->redirect($this->generateUrl('mon_annuaire_ressource'));
            }
           
            
        }
        return $this->render('AnnuaireBundle:Template:ressources.html.twig', array('form' => $form->createView(),
                                                                                      'compteur'=>count($listeRessources),
                                                                                      'liste'=>$listeRessources));
    }
    public function deleteRessourceAction(Ressources $Ressource)
    {

    $em = $this->getDoctrine()->getEntityManager();
    $em->remove($Ressource);
    $em->flush();
    
    return $this->redirect($this->generateUrl('mon_annuaire_homepage'));
    }
    public function deleteAction(Employee $employee)
    {

    $em = $this->getDoctrine()->getEntityManager();
    $em->remove($employee);
    $em->flush();

    return $this->redirect($this->generateUrl('mon_annuaire_homepage'));
    }
    
}
