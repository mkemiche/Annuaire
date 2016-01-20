<?php

/* AnnuaireBundle:Template:enregistrer.html.twig */
class __TwigTemplate_95b70e073b92835b0d572eb86327e5a836a4d1643da1f7d992284c7e2cd4c491 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'lienEnregistrer' => array($this, 'block_lienEnregistrer'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(array(0 => "AnnuaireBundle::layout.html.twig", 1 => "AnnuaireBundle::ressources.html.twig"), "AnnuaireBundle:Template:enregistrer.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_lienEnregistrer($context, array $blocks = array())
    {
        // line 5
        echo "    class=\"menu-top-active\"
";
    }

    // line 8
    public function block_container($context, array $blocks = array())
    {
        // line 9
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
        // line 19
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
                         
                                 
                                
                            <div class=\"form-group col-lg-1\">
                                <label>Civilité</label>
                                ";
        // line 34
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "civilite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Nom</label>
                                ";
        // line 38
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Prénom</label>
                                ";
        // line 42
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-3\">
                                <label>Date de Naissance</label>
                                ";
        // line 46
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "dateNaiss", array()), 'widget');
        echo "
                            </div>

                            <div class=\"form-group col-lg-4\">
                                <label>Adresse</label>
                                ";
        // line 51
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Complèment d'adresse</label>
                                ";
        // line 55
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "complementAdr", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Ville</label>
                                ";
        // line 59
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>

                            <div class=\"form-group col-lg-4\">
                                <label>Numéro de téléphone</label>
                                ";
        // line 64
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "numTel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Numéro de téléphone du bureau</label>
                                ";
        // line 68
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "numPro", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Email</label>
                                ";
        // line 72
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "email", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        // line 93
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "numEmp", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-6\">
                                <label>Fonction</label>
                                ";
        // line 97
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "fonction", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-6\">
                                <label>Numéro du bureau</label>
                                ";
        // line 101
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "numBureau", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-6\">
                                <label>Département</label>
                                ";
        // line 105
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "departement", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-6\">
                                <label>Localisation</label>
                                ";
        // line 109
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "localisation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-6\">
                                <label>Service</label>
                                ";
        // line 113
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "nomService", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                          
                            
                          
                         </div>
                    </div>
                 </div>
            </div>
           
            <div class=\"col-md-12\">
                <input type=\"hidden\" name=\"enregistrer\" value=\"employee\">
                ";
        // line 125
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "_token", array()), 'widget');
        echo "
                <button type=\"submit\" class=\"btn btn-danger pull-right\" id=\"save-contact\">Enregistrer</button>
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
        return array (  224 => 125,  208 => 113,  200 => 109,  192 => 105,  184 => 101,  176 => 97,  168 => 93,  143 => 72,  135 => 68,  127 => 64,  118 => 59,  110 => 55,  102 => 51,  93 => 46,  85 => 42,  77 => 38,  69 => 34,  51 => 19,  39 => 9,  36 => 8,  31 => 5,  28 => 4,  19 => 1,);
    }
}
/* {% extends ['AnnuaireBundle::layout.html.twig', 'AnnuaireBundle::ressources.html.twig'] %}*/
/* */
/* */
/* {% block lienEnregistrer %}*/
/*     class="menu-top-active"*/
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
/*                             <div class="form-group col-lg-1">*/
/*                                 <label>Civilité</label>*/
/*                                 {{ form_widget(form.civilite, {'attr':{'class':'form-control'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group col-lg-4">*/
/*                                 <label>Nom</label>*/
/*                                 {{ form_widget(form.nom, {'attr':{'class':'form-control'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group col-lg-4">*/
/*                                 <label>Prénom</label>*/
/*                                 {{ form_widget(form.prenom, {'attr':{'class':'form-control'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group col-lg-3">*/
/*                                 <label>Date de Naissance</label>*/
/*                                 {{ form_widget(form.dateNaiss) }}*/
/*                             </div>*/
/* */
/*                             <div class="form-group col-lg-4">*/
/*                                 <label>Adresse</label>*/
/*                                 {{ form_widget(form.adresse, {'attr':{'class':'form-control'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group col-lg-4">*/
/*                                 <label>Complèment d'adresse</label>*/
/*                                 {{ form_widget(form.complementAdr, {'attr':{'class':'form-control'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group col-lg-4">*/
/*                                 <label>Ville</label>*/
/*                                 {{ form_widget(form.ville, {'attr':{'class':'form-control'}}) }}*/
/*                             </div>*/
/* */
/*                             <div class="form-group col-lg-4">*/
/*                                 <label>Numéro de téléphone</label>*/
/*                                 {{ form_widget(form.numTel, {'attr':{'class':'form-control'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group col-lg-4">*/
/*                                 <label>Numéro de téléphone du bureau</label>*/
/*                                 {{ form_widget(form.numPro, {'attr':{'class':'form-control'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group col-lg-4">*/
/*                                 <label>Email</label>*/
/*                                 {{ form_widget(form.email, {'attr':{'class':'form-control'}}) }}*/
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
/*                                 {{ form_widget(form.numEmp, {'attr':{'class':'form-control'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group col-lg-6">*/
/*                                 <label>Fonction</label>*/
/*                                 {{ form_widget(form.fonction, {'attr':{'class':'form-control'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group col-lg-6">*/
/*                                 <label>Numéro du bureau</label>*/
/*                                 {{ form_widget(form.numBureau, {'attr':{'class':'form-control'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group col-lg-6">*/
/*                                 <label>Département</label>*/
/*                                 {{ form_widget(form.departement, {'attr':{'class':'form-control'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group col-lg-6">*/
/*                                 <label>Localisation</label>*/
/*                                 {{ form_widget(form.localisation, {'attr':{'class':'form-control'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group col-lg-6">*/
/*                                 <label>Service</label>*/
/*                                 {{ form_widget(form.nomService, {'attr':{'class':'form-control'}}) }}*/
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
/*                 <button type="submit" class="btn btn-danger pull-right" id="save-contact">Enregistrer</button>*/
/*             </div>*/
/*             </form>*/
/*         </div> <!-- end row -->*/
/* */
/*     </div> <!-- END CONTAINER -->*/
/* </div>*/
/*  {% endblock %}*/
