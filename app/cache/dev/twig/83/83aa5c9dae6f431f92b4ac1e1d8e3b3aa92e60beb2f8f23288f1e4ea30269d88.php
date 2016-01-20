<?php

/* AnnuaireBundle:Template:enregistrer.html.twig */
class __TwigTemplate_518d835664a8ac23bd8fc97f68e358d71a7e35702847140e8acb1513cf99e2a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnnuaireBundle:Default:index.html.twig", "AnnuaireBundle:Template:enregistrer.html.twig", 1);
        $this->blocks = array(
            'lienretour' => array($this, 'block_lienretour'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AnnuaireBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_lienretour($context, array $blocks = array())
    {
        // line 6
        echo "    <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("mon_annuaire_homepage");
        echo "\">Retour</a></li> 
";
    }

    // line 9
    public function block_container($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"content-wrapper\" xmlns=\"http://www.w3.org/1999/html\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"page-head-line\">Enregistrement</h1>
            </div>
        </div>

        <div class=\"row\">
            <form action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("mon_annuaire_enregistrer");
        echo "\" method=\"post\">
            <div class=\"col-md-12\">
                 <div class=\"panel panel-default\">
                     <div class=\"panel-heading\">
                         <strong>Informations Personnelles</strong>
                     </div>

                     <div class=\"panel-body\">
                        <div class=\"col-md-12\">
                            <!-- insert form -->
                         
                                 
                                
                            <div class=\"form-group col-lg-2\">
                                <label>Civilité</label>
                                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Nom</label>
                                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Prénom</label>
                                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Prénom")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-2\">
                                <label>Date de Naissance</label>
                                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaiss", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "JJ.MM.AAAA")));
        echo "
                            </div>

                            <div class=\"form-group col-lg-4\">
                                <label>Adresse</label>
                                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Adresse")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Complèment d'adresse (optionnel)</label>
                                ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "complementAdr", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Complèment d'adresse")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Ville</label>
                                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "ville")));
        echo "
                            </div>

                            <div class=\"form-group col-lg-4\">
                                <label>Numéro de téléphone</label>
                                ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numTel", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "0123456789")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Numéro de téléphone du bureau</label>
                                ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numPro", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "113")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Email</label>
                                ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "monemail@email.com")));
        echo "
                            </div>
                         
                        </div>

                    </div>
                 </div>
            </div>
            <div class=\"col-md-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        Informations sur le service
                    </div>

                    <div class=\"panel-body\">
                        <div class=\"col-md-12\">
                         
                            <!-- insert form -->

                            <div class=\"form-group col-lg-6\">
                                <label>Numéro employé</label>
                                ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numEmp", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "ABC123")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-6\">
                                <label>Fonction</label>
                                ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonction", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Fonction")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-6\">
                                <label>Numéro du bureau</label>
                                ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numBureau", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "ABC123")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-6\">
                                <label>Département</label>
                                ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Département")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-6\">
                                <label>Localisation</label>
                                ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "localisation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-6\">
                                <label>Service</label>
                                ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomService", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Service")));
        echo "
                            </div>
                          
                            
                          
                         </div>
                    </div>
                 </div>
            </div>
           
            <div class=\"col-md-12\">
                <input type=\"hidden\" name=\"enregistrer\" value=\"employee\">
                ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
                <button type=\"submit\" class=\"btn btn-danger pull-right\" id=\"save-contact\">suivant</button>
            </div>
            </form>
        </div> <!-- end row -->

    </div> <!-- END CONTAINER -->
</div>
 ";
    }

    public function getTemplateName()
    {
        return "AnnuaireBundle:Template:enregistrer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 126,  196 => 114,  189 => 110,  182 => 106,  175 => 102,  168 => 98,  161 => 94,  137 => 73,  130 => 69,  123 => 65,  115 => 60,  108 => 56,  101 => 52,  93 => 47,  86 => 43,  79 => 39,  72 => 35,  54 => 20,  42 => 10,  39 => 9,  32 => 6,  29 => 5,  11 => 1,);
    }
}
/* {% extends 'AnnuaireBundle:Default:index.html.twig' %}*/
/* */
/* */
/* */
/* {% block lienretour %}*/
/*     <li><a href="{{ path('mon_annuaire_homepage')}}">Retour</a></li> */
/* {% endblock %}*/
/* */
/* {% block container %}*/
/* */
/* <div class="content-wrapper" xmlns="http://www.w3.org/1999/html">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h1 class="page-head-line">Enregistrement</h1>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <form action="{{ path('mon_annuaire_enregistrer') }}" method="post">*/
/*             <div class="col-md-12">*/
/*                  <div class="panel panel-default">*/
/*                      <div class="panel-heading">*/
/*                          <strong>Informations Personnelles</strong>*/
/*                      </div>*/
/* */
/*                      <div class="panel-body">*/
/*                         <div class="col-md-12">*/
/*                             <!-- insert form -->*/
/*                          */
/*                                  */
/*                                 */
/*                             <div class="form-group col-lg-2">*/
/*                                 <label>Civilité</label>*/
/*                                 {{ form_widget(form.civilite, {'attr':{'class':'form-control'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group col-lg-4">*/
/*                                 <label>Nom</label>*/
/*                                 {{ form_widget(form.nom, {'attr':{'class':'form-control','placeholder':'Nom'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group col-lg-4">*/
/*                                 <label>Prénom</label>*/
/*                                 {{ form_widget(form.prenom, {'attr':{'class':'form-control', 'placeholder':'Prénom'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group col-lg-2">*/
/*                                 <label>Date de Naissance</label>*/
/*                                 {{ form_widget(form.dateNaiss, {'attr':{'class':'form-control', 'placeholder':'JJ.MM.AAAA'}}) }}*/
/*                             </div>*/
/* */
/*                             <div class="form-group col-lg-4">*/
/*                                 <label>Adresse</label>*/
/*                                 {{ form_widget(form.adresse, {'attr':{'class':'form-control', 'placeholder':'Adresse'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group col-lg-4">*/
/*                                 <label>Complèment d'adresse (optionnel)</label>*/
/*                                 {{ form_widget(form.complementAdr, {'attr':{'class':'form-control', 'placeholder':'Complèment d\'adresse'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group col-lg-4">*/
/*                                 <label>Ville</label>*/
/*                                 {{ form_widget(form.ville, {'attr':{'class':'form-control', 'placeholder':'ville'}}) }}*/
/*                             </div>*/
/* */
/*                             <div class="form-group col-lg-4">*/
/*                                 <label>Numéro de téléphone</label>*/
/*                                 {{ form_widget(form.numTel, {'attr':{'class':'form-control', 'placeholder':'0123456789'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group col-lg-4">*/
/*                                 <label>Numéro de téléphone du bureau</label>*/
/*                                 {{ form_widget(form.numPro, {'attr':{'class':'form-control', 'placeholder':'113'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group col-lg-4">*/
/*                                 <label>Email</label>*/
/*                                 {{ form_widget(form.email, {'attr':{'class':'form-control', 'placeholder':'monemail@email.com'}}) }}*/
/*                             </div>*/
/*                          */
/*                         </div>*/
/* */
/*                     </div>*/
/*                  </div>*/
/*             </div>*/
/*             <div class="col-md-12">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         Informations sur le service*/
/*                     </div>*/
/* */
/*                     <div class="panel-body">*/
/*                         <div class="col-md-12">*/
/*                          */
/*                             <!-- insert form -->*/
/* */
/*                             <div class="form-group col-lg-6">*/
/*                                 <label>Numéro employé</label>*/
/*                                 {{ form_widget(form.numEmp, {'attr':{'class':'form-control', 'placeholder':'ABC123'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group col-lg-6">*/
/*                                 <label>Fonction</label>*/
/*                                 {{ form_widget(form.fonction, {'attr':{'class':'form-control', 'placeholder':'Fonction'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group col-lg-6">*/
/*                                 <label>Numéro du bureau</label>*/
/*                                 {{ form_widget(form.numBureau, {'attr':{'class':'form-control', 'placeholder':'ABC123'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group col-lg-6">*/
/*                                 <label>Département</label>*/
/*                                 {{ form_widget(form.departement, {'attr':{'class':'form-control', 'placeholder':'Département'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group col-lg-6">*/
/*                                 <label>Localisation</label>*/
/*                                 {{ form_widget(form.localisation, {'attr':{'class':'form-control'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group col-lg-6">*/
/*                                 <label>Service</label>*/
/*                                 {{ form_widget(form.nomService, {'attr':{'class':'form-control', 'placeholder':'Service'}}) }}*/
/*                             </div>*/
/*                           */
/*                             */
/*                           */
/*                          </div>*/
/*                     </div>*/
/*                  </div>*/
/*             </div>*/
/*            */
/*             <div class="col-md-12">*/
/*                 <input type="hidden" name="enregistrer" value="employee">*/
/*                 {{ form_widget(form._token)}}*/
/*                 <button type="submit" class="btn btn-danger pull-right" id="save-contact">suivant</button>*/
/*             </div>*/
/*             </form>*/
/*         </div> <!-- end row -->*/
/* */
/*     </div> <!-- END CONTAINER -->*/
/* </div>*/
/*  {% endblock %}*/
