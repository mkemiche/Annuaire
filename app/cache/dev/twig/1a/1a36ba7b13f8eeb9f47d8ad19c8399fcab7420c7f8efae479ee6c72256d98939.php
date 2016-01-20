<?php

/* AnnuaireBundle:Template:editer.html.twig */
class __TwigTemplate_79e72de9da2fff1162930feda468623ea970affd6c934b07a57e34cdb1141432 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnnuaireBundle:Default:index.html.twig", "AnnuaireBundle:Template:editer.html.twig", 1);
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

    // line 3
    public function block_lienretour($context, array $blocks = array())
    {
        // line 4
        echo "    <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("mon_annuaire_homepage");
        echo "\">Retour</a></li> 
";
    }

    // line 7
    public function block_container($context, array $blocks = array())
    {
        // line 8
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
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mon_annuaire_editer", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
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
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Nom</label>
                                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Prénom</label>
                                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-3\">
                                <label>Date de Naissance</label>
                                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaiss", array()), 'widget');
        echo "
                            </div>

                            <div class=\"form-group col-lg-4\">
                                <label>Adresse</label>
                                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Complèment d'adresse</label>
                                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "complementAdr", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Ville</label>
                                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>

                            <div class=\"form-group col-lg-4\">
                                <label>Numéro de téléphone</label>
                                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numTel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Numéro de téléphone du bureau</label>
                                ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numPro", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Email</label>
                                ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numEmp", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-6\">
                                <label>Fonction</label>
                                ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonction", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-6\">
                                <label>Numéro du bureau</label>
                                ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numBureau", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-6\">
                                <label>Département</label>
                                ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-6\">
                                <label>Localisation</label>
                                ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "localisation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-6\">
                                <label>Service</label>
                                ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomService", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            
                            
                         </div>
                    </div>
                 </div>
            </div>
           
            <div class=\"col-md-12\">
                <input type=\"hidden\" name=\"editer\" value=\"employee\">
                ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
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
        return array (  206 => 119,  192 => 108,  185 => 104,  178 => 100,  171 => 96,  164 => 92,  157 => 88,  134 => 68,  127 => 64,  120 => 60,  112 => 55,  105 => 51,  98 => 47,  90 => 42,  83 => 38,  76 => 34,  69 => 30,  54 => 18,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'AnnuaireBundle:Default:index.html.twig' %}*/
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
