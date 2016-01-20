<?php

/* AnnuaireBundle:Template:afficher.html.twig */
class __TwigTemplate_74961ebdd3d0add322244603db8cba089679e39fd08c87cc36640cf9d1329dfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnnuaireBundle::layout.html.twig", "AnnuaireBundle:Template:afficher.html.twig", 1);
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

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"content-wrapper\" xmlns=\"http://www.w3.org/1999/html\" xmlns=\"http://www.w3.org/1999/html\"
         xmlns=\"http://www.w3.org/1999/html\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1 class=\"page-head-line\">Mes Infos</h1>
                </div>
            </div>

            <div class=\"row\">
                    <div class=\"col-md-12\">
                         <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <strong> Informations Personnelles </strong>
                            </div>

                            <div class=\"panel-body\">
                                
                                <div class=\"col-md-6\">
                                    <h3> <strong>";
        // line 22
        if (isset($context["employee"])) { $_employee_ = $context["employee"]; } else { $_employee_ = null; }
        echo twig_escape_filter($this->env, (($_employee_) ? ($this->getAttribute($_employee_, "civilite", array())) : ("")), "html", null, true);
        echo "</strong>
                                    <nobr />  <strong> ";
        // line 23
        if (isset($context["employee"])) { $_employee_ = $context["employee"]; } else { $_employee_ = null; }
        echo twig_escape_filter($this->env, (($_employee_) ? ($this->getAttribute($_employee_, "nom", array())) : ("")), "html", null, true);
        echo "</strong>
                                    <strong>";
        // line 24
        if (isset($context["employee"])) { $_employee_ = $context["employee"]; } else { $_employee_ = null; }
        echo twig_escape_filter($this->env, (($_employee_) ? ($this->getAttribute($_employee_, "prenom", array())) : ("")), "html", null, true);
        echo "</strong>
                                
                                    <hr />
                                    <h4>";
        // line 27
        if (isset($context["employee"])) { $_employee_ = $context["employee"]; } else { $_employee_ = null; }
        echo twig_escape_filter($this->env, (($_employee_) ? ($this->getAttribute($_employee_, "adresse", array())) : ("")), "html", null, true);
        echo " <br /></h4>
                                    <h4>";
        // line 28
        if (isset($context["employee"])) { $_employee_ = $context["employee"]; } else { $_employee_ = null; }
        echo twig_escape_filter($this->env, (($_employee_) ? ($this->getAttribute($_employee_, "complementAdr", array())) : ("")), "html", null, true);
        echo "<br /></h4>
                                    <h4>";
        // line 29
        if (isset($context["employee"])) { $_employee_ = $context["employee"]; } else { $_employee_ = null; }
        echo twig_escape_filter($this->env, (($_employee_) ? ($this->getAttribute($_employee_, "ville", array())) : ("")), "html", null, true);
        echo "</h4>
                                </div>
                                <div class=\"col-md-6\">
                                   <h3>portable : ";
        // line 32
        if (isset($context["employee"])) { $_employee_ = $context["employee"]; } else { $_employee_ = null; }
        echo twig_escape_filter($this->env, (($_employee_) ? ($this->getAttribute($_employee_, "numTel", array())) : ("")), "html", null, true);
        echo "</h3>
                                   <hr />
                                   <h3>Telephone Bureau : ";
        // line 34
        if (isset($context["employee"])) { $_employee_ = $context["employee"]; } else { $_employee_ = null; }
        echo twig_escape_filter($this->env, (($_employee_) ? ($this->getAttribute($_employee_, "numPro", array())) : ("")), "html", null, true);
        echo "</h3>
                                   <hr />
                                   <h3>E-mail : ";
        // line 36
        if (isset($context["employee"])) { $_employee_ = $context["employee"]; } else { $_employee_ = null; }
        echo twig_escape_filter($this->env, (($_employee_) ? ($this->getAttribute($_employee_, "Email", array())) : ("")), "html", null, true);
        echo "</h3>
                                </div>
                            </div>
                        </div>
                    </div>    
                        <div class=\"col-md-12\">
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <strong> Informations Professionnelles </strong>
                                </div>
                                <div class=\"panel-body\">
                                    <div class=\"col-md-12\">
                                        <h2><center>";
        // line 48
        if (isset($context["employee"])) { $_employee_ = $context["employee"]; } else { $_employee_ = null; }
        echo twig_escape_filter($this->env, (($_employee_) ? ($this->getAttribute($_employee_, "numEmp", array())) : ("")), "html", null, true);
        echo "</center></h2>
                                        <hr />
                                    </div>
                                    <div class=\"col-md-6\">
                                        <strong> Fonction : ";
        // line 52
        if (isset($context["employee"])) { $_employee_ = $context["employee"]; } else { $_employee_ = null; }
        echo twig_escape_filter($this->env, (($_employee_) ? ($this->getAttribute($_employee_, "fonction", array())) : ("")), "html", null, true);
        echo "</strong><br />
                                        <strong> Bureau : ";
        // line 53
        if (isset($context["employee"])) { $_employee_ = $context["employee"]; } else { $_employee_ = null; }
        echo twig_escape_filter($this->env, (($_employee_) ? ($this->getAttribute($_employee_, "numbureau", array())) : ("")), "html", null, true);
        echo "</strong><br />
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class=\"col-md-12\">
                            ";
        // line 59
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($_app_, "session", array())) {
            // line 60
            echo "                            <a class=\"btn btn-info pull-right\" href=\"";
            if (isset($context["employee"])) { $_employee_ = $context["employee"]; } else { $_employee_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mon_annuaire_editer", array("id" => $this->getAttribute($_employee_, "id", array()))), "html", null, true);
            echo "\"> <span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"> Modifier Mes Infos</span></a>
                            ";
        }
        // line 62
        echo "                            </div> 
            </div> <!-- end row -->

        </div> <!-- END CONTAINER -->
    </div>

";
    }

    public function getTemplateName()
    {
        return "AnnuaireBundle:Template:afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 62,  140 => 60,  137 => 59,  127 => 53,  122 => 52,  114 => 48,  98 => 36,  92 => 34,  86 => 32,  79 => 29,  74 => 28,  69 => 27,  62 => 24,  57 => 23,  52 => 22,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'AnnuaireBundle::layout.html.twig' %}*/
/* {% block container %}*/
/*     <div class="content-wrapper" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"*/
/*          xmlns="http://www.w3.org/1999/html">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <h1 class="page-head-line">Mes Infos</h1>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                     <div class="col-md-12">*/
/*                          <div class="panel panel-default">*/
/*                             <div class="panel-heading">*/
/*                                 <strong> Informations Personnelles </strong>*/
/*                             </div>*/
/* */
/*                             <div class="panel-body">*/
/*                                 */
/*                                 <div class="col-md-6">*/
/*                                     <h3> <strong>{{ employee ? employee.civilite }}</strong>*/
/*                                     <nobr />  <strong> {{ employee ? employee.nom }}</strong>*/
/*                                     <strong>{{ employee ? employee.prenom }}</strong>*/
/*                                 */
/*                                     <hr />*/
/*                                     <h4>{{ employee ? employee.adresse }} <br /></h4>*/
/*                                     <h4>{{ employee ? employee.complementAdr }}<br /></h4>*/
/*                                     <h4>{{ employee ? employee.ville }}</h4>*/
/*                                 </div>*/
/*                                 <div class="col-md-6">*/
/*                                    <h3>portable : {{ employee ? employee.numTel }}</h3>*/
/*                                    <hr />*/
/*                                    <h3>Telephone Bureau : {{ employee ? employee.numPro }}</h3>*/
/*                                    <hr />*/
/*                                    <h3>E-mail : {{ employee ? employee.Email }}</h3>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>    */
/*                         <div class="col-md-12">*/
/*                             <div class="panel panel-default">*/
/*                                 <div class="panel-heading">*/
/*                                     <strong> Informations Professionnelles </strong>*/
/*                                 </div>*/
/*                                 <div class="panel-body">*/
/*                                     <div class="col-md-12">*/
/*                                         <h2><center>{{ employee ? employee.numEmp }}</center></h2>*/
/*                                         <hr />*/
/*                                     </div>*/
/*                                     <div class="col-md-6">*/
/*                                         <strong> Fonction : {{ employee ? employee.fonction }}</strong><br />*/
/*                                         <strong> Bureau : {{ employee ? employee.numbureau }}</strong><br />*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div> */
/*                         <div class="col-md-12">*/
/*                             {% if app.session  %}*/
/*                             <a class="btn btn-info pull-right" href="{{ path ('mon_annuaire_editer', { 'id' : employee.id }) }}"> <span class="glyphicon glyphicon-edit" aria-hidden="true"> Modifier Mes Infos</span></a>*/
/*                             {% endif %}*/
/*                             </div> */
/*             </div> <!-- end row -->*/
/* */
/*         </div> <!-- END CONTAINER -->*/
/*     </div>*/
/* */
/* {% endblock %}*/
