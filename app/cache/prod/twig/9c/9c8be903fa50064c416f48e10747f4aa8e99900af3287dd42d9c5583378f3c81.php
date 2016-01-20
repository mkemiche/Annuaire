<?php

/* AnnuaireBundle:Template:editer.html.twig */
class __TwigTemplate_9b11665995968ad229405190e449669270e7605a84f1f1f7eeba90d96bf2a6c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnnuaireBundle::layout.html.twig", "AnnuaireBundle:Template:editer.html.twig", 1);
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

    // line 3
    public function block_container($context, array $blocks = array())
    {
        // line 4
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
        // line 14
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mon_annuaire_editer", array("id" => $_id_)), "html", null, true);
        echo "\" method=\"post\">
            <div class=\"col-md-12\">
                 <div class=\"panel panel-default\">
                     <div class=\"panel-heading\">
                         <strong> Informations Personnelles</strong>
                     </div>

                     <div class=\"panel-body\">
                        <div class=\"col-md-12\">
                            <!-- insert form -->
                            <div class=\"form-group col-lg-1\">
                                <label>Civilité</label>
                                ";
        // line 26
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "civilite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Nom</label>
                                ";
        // line 30
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Prénom</label>
                                ";
        // line 34
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-3\">
                                <label>Date de Naissance</label>
                                ";
        // line 38
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "dateNaiss", array()), 'widget');
        echo "
                            </div>

                            <div class=\"form-group col-lg-4\">
                                <label>Adresse</label>
                                ";
        // line 43
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Complèment d'adresse</label>
                                ";
        // line 47
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "complementAdr", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Ville</label>
                                ";
        // line 51
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>

                            <div class=\"form-group col-lg-4\">
                                <label>Numéro de téléphone</label>
                                ";
        // line 56
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "numTel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Numéro de téléphone du bureau</label>
                                ";
        // line 60
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "numPro", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Email</label>
                                ";
        // line 64
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
                        <strong> Informations sur le service </strong>
                    </div>

                    <div class=\"panel-body\">
                        <div class=\"col-md-12\">

                            <!-- insert form -->

                            <div class=\"form-group col-lg-4\">
                                <label>Numéro employé</label>
                                ";
        // line 84
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "numEmp", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-6\">
                                <label>Fonction</label>
                                ";
        // line 88
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "fonction", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-6\">
                                <label>Numéro du bureau</label>
                                ";
        // line 92
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "numBureau", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-6\">
                                <label>Département</label>
                                ";
        // line 96
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "departement", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-6\">
                                <label>Localisation</label>
                                ";
        // line 100
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "localisation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-6\">
                                <label>Service</label>
                                ";
        // line 104
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "nomService", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            
                            
                         </div>
                    </div>
                 </div>
            </div>
           
            <div class=\"col-md-12\">
                <input type=\"hidden\" name=\"editer\" value=\"employee\">
                ";
        // line 115
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "_token", array()), 'widget');
        echo "
                <button type=\"submit\" class=\"btn btn-danger pull-right\" id=\"save-edit\">Enregistrer</button>
            </div>
            </form>
        </div> <!-- end row -->

    </div> <!-- END CONTAINER -->
</div>
 ";
    }

    public function getTemplateName()
    {
        return "AnnuaireBundle:Template:editer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 115,  197 => 104,  189 => 100,  181 => 96,  173 => 92,  165 => 88,  157 => 84,  133 => 64,  125 => 60,  117 => 56,  108 => 51,  100 => 47,  92 => 43,  83 => 38,  75 => 34,  67 => 30,  59 => 26,  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'AnnuaireBundle::layout.html.twig' %}*/
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
/*             <form action="{{ path('mon_annuaire_editer', {id: id}) }}" method="post">*/
/*             <div class="col-md-12">*/
/*                  <div class="panel panel-default">*/
/*                      <div class="panel-heading">*/
/*                          <strong> Informations Personnelles</strong>*/
/*                      </div>*/
/* */
/*                      <div class="panel-body">*/
/*                         <div class="col-md-12">*/
/*                             <!-- insert form -->*/
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
/*                         </div>*/
/* */
/*                     </div>*/
/*                  </div>*/
/*             </div>*/
/*             <div class="col-md-12">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         <strong> Informations sur le service </strong>*/
/*                     </div>*/
/* */
/*                     <div class="panel-body">*/
/*                         <div class="col-md-12">*/
/* */
/*                             <!-- insert form -->*/
/* */
/*                             <div class="form-group col-lg-4">*/
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
/*                             */
/*                             */
/*                          </div>*/
/*                     </div>*/
/*                  </div>*/
/*             </div>*/
/*            */
/*             <div class="col-md-12">*/
/*                 <input type="hidden" name="editer" value="employee">*/
/*                 {{ form_widget(form._token)}}*/
/*                 <button type="submit" class="btn btn-danger pull-right" id="save-edit">Enregistrer</button>*/
/*             </div>*/
/*             </form>*/
/*         </div> <!-- end row -->*/
/* */
/*     </div> <!-- END CONTAINER -->*/
/* </div>*/
/*  {% endblock %}*/
