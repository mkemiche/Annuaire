<?php

/* AnnuaireBundle:Default:index.html.twig */
class __TwigTemplate_ca3cd73d4f4c0e5691c475052edc9328f3e40fe55a5b6a75add95e2e0518450e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnnuaireBundle::layout.html.twig", "AnnuaireBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AnnuaireBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        // line 6
        echo "  <br />
    <br />
     <br />
    <br />
<h1><center>Bienvenue à l'annuaire telephonique de l'entreprise </center></h1>
  
    <br />
<div class=\"row\">
    <div class=\"col-md-12\">    
        <div class=\"col-md-5 col-md-offset-1\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <strong> Rechercher des Personnes </strong>
                </div>
                <div class=\"panel-body\">
                    <em>Vous cherchez quelqu'un ??</em> <br />
                    Cliquez sur le bouton pour accèder à la recherche. 
                    <br />
                    <br />
                    <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("mon_annuaire_recherche");
        echo "\" class=\"btn btn-info btn-sm\">Accéder à la recherche </a>
                    
                                                                
                </div>
            </div>
        </div>    
        <div class=\"col-md-5\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <strong> Recherche des ressources </strong>
                </div>
            
                <div class=\"panel-body\">
                    <em>Vous cherchez une ressources ?? </em><br />
                    Cliquez sur le bouton pour accèder à la recherche. 
                    <br />
                    <br />
                    <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("mon_annuaire_rechercheRes");
        echo "\" class=\"btn btn-info btn-sm\">Accéder à la recherche</a>
                </div>
            </div>
        </div>
    </div> 
</div>
 <br />
    <br />
     <br />
    <br />
     <br />
    <br />

";
    }

    public function getTemplateName()
    {
        return "AnnuaireBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 42,  52 => 25,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends 'AnnuaireBundle::layout.html.twig' %}*/
/* {% trans_default_domain 'AnnuaireAnnuaireBundle' %}*/
/* */
/* */
/* {% block container %}*/
/*   <br />*/
/*     <br />*/
/*      <br />*/
/*     <br />*/
/* <h1><center>Bienvenue à l'annuaire telephonique de l'entreprise </center></h1>*/
/*   */
/*     <br />*/
/* <div class="row">*/
/*     <div class="col-md-12">    */
/*         <div class="col-md-5 col-md-offset-1">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <strong> Rechercher des Personnes </strong>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <em>Vous cherchez quelqu'un ??</em> <br />*/
/*                     Cliquez sur le bouton pour accèder à la recherche. */
/*                     <br />*/
/*                     <br />*/
/*                     <a href="{{path ('mon_annuaire_recherche')}}" class="btn btn-info btn-sm">Accéder à la recherche </a>*/
/*                     */
/*                                                                 */
/*                 </div>*/
/*             </div>*/
/*         </div>    */
/*         <div class="col-md-5">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <strong> Recherche des ressources </strong>*/
/*                 </div>*/
/*             */
/*                 <div class="panel-body">*/
/*                     <em>Vous cherchez une ressources ?? </em><br />*/
/*                     Cliquez sur le bouton pour accèder à la recherche. */
/*                     <br />*/
/*                     <br />*/
/*                     <a href="{{path('mon_annuaire_rechercheRes')}}" class="btn btn-info btn-sm">Accéder à la recherche</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div> */
/* </div>*/
/*  <br />*/
/*     <br />*/
/*      <br />*/
/*     <br />*/
/*      <br />*/
/*     <br />*/
/* */
/* {% endblock %}*/
/* */
