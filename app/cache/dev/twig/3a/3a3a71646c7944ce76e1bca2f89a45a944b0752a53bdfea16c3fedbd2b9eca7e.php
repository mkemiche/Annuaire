<?php

/* AnnuaireBundle:Template:afficher.html.twig */
class __TwigTemplate_c0f39d38c1fbb1857d5f0cda03fbafa2c89f8c0abb5ad7c76d609de15c5e782b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AnnuaireBundle:Default:index.html.twig", "AnnuaireBundle:Template:afficher.html.twig", 2);
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

    // line 4
    public function block_lienretour($context, array $blocks = array())
    {
        // line 5
        echo "    <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("mon_annuaire_homepage");
        echo "\">Retour</a></li> 
";
    }

    // line 8
    public function block_container($context, array $blocks = array())
    {
        // line 9
        echo "    <div class=\"content-wrapper\" xmlns=\"http://www.w3.org/1999/html\" xmlns=\"http://www.w3.org/1999/html\"
         xmlns=\"http://www.w3.org/1999/html\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1 class=\"page-head-line\">Mes Infos</h1>
                </div>
            </div>
             ";
        // line 17
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo " 
            <div class=\"row\">
                    <div class=\"col-md-12\">
                         <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <strong> Informations Personnelles </strong>
                            </div>

                            <div class=\"panel-body\">
                                
                                <div class=\"col-md-6\">
                                    <h3> <strong>";
            // line 28
            echo twig_escape_filter($this->env, (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee"))) ? ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "civilite", array())) : ("")), "html", null, true);
            echo "</strong>
                                    <nobr />  <strong> ";
            // line 29
            echo twig_escape_filter($this->env, (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee"))) ? ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "nom", array())) : ("")), "html", null, true);
            echo "</strong>
                                    <strong>";
            // line 30
            echo twig_escape_filter($this->env, (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee"))) ? ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "prenom", array())) : ("")), "html", null, true);
            echo "</strong>
                                
                                    <hr />
                                    <h4>";
            // line 33
            echo twig_escape_filter($this->env, (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee"))) ? ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "adresse", array())) : ("")), "html", null, true);
            echo " <br /></h4>
                                    <h4>";
            // line 34
            echo twig_escape_filter($this->env, (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee"))) ? ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "complementAdr", array())) : ("")), "html", null, true);
            echo "<br /></h4>
                                    <h4>";
            // line 35
            echo twig_escape_filter($this->env, (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee"))) ? ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "ville", array())) : ("")), "html", null, true);
            echo "</h4>
                                </div>
                                <div class=\"col-md-6\">
                                   <h3>portable : ";
            // line 38
            echo twig_escape_filter($this->env, (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee"))) ? ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "numTel", array())) : ("")), "html", null, true);
            echo "</h3>
                                   <hr />
                                   <h3>Telephone Bureau : ";
            // line 40
            echo twig_escape_filter($this->env, (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee"))) ? ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "numPro", array())) : ("")), "html", null, true);
            echo "</h3>
                                   <hr />
                                   <h3>E-mail : ";
            // line 42
            echo twig_escape_filter($this->env, (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee"))) ? ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "Email", array())) : ("")), "html", null, true);
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
            // line 54
            echo twig_escape_filter($this->env, (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee"))) ? ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "numEmp", array())) : ("")), "html", null, true);
            echo "</center></h2>
                                        <hr />
                                    </div>
                                    <div class=\"col-md-6\">
                                        <strong> Département : ";
            // line 58
            echo twig_escape_filter($this->env, (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee"))) ? ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "departement", array())) : ("")), "html", null, true);
            echo "</strong><br />
                                        <strong> Localisation : ";
            // line 59
            echo twig_escape_filter($this->env, (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee"))) ? ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "localisation", array())) : ("")), "html", null, true);
            echo "</strong><br />
                                        <strong> Fonction : ";
            // line 60
            echo twig_escape_filter($this->env, (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee"))) ? ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "fonction", array())) : ("")), "html", null, true);
            echo "</strong><br />
                                        <strong> Numéro de Bureau : ";
            // line 61
            echo twig_escape_filter($this->env, (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee"))) ? ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "numbureau", array())) : ("")), "html", null, true);
            echo "</strong><br />

                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class=\"col-md-12\">
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <strong> Informations sur les Ressources attribuées </strong>
                                </div>
                                <div class=\"panel-body\">
                                    ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeRessources"]) ? $context["listeRessources"] : $this->getContext($context, "listeRessources")));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 74
                echo "                                    <div class=\"col-md-6\">
                                        
                                        <strong> Ressource : ";
                // line 76
                echo twig_escape_filter($this->env, (($context["r"]) ? ($this->getAttribute($context["r"], "ressource", array())) : ("")), "html", null, true);
                echo "</strong><br />
                                        <strong> Type : ";
                // line 77
                echo twig_escape_filter($this->env, (($context["r"]) ? ($this->getAttribute($context["r"], "type", array())) : ("")), "html", null, true);
                echo "</strong><br />
                                        <strong> Marque : ";
                // line 78
                echo twig_escape_filter($this->env, (($context["r"]) ? ($this->getAttribute($context["r"], "marque", array())) : ("")), "html", null, true);
                echo "</strong><br />
                                        <strong> Model : ";
                // line 79
                echo twig_escape_filter($this->env, (($context["r"]) ? ($this->getAttribute($context["r"], "model", array())) : ("")), "html", null, true);
                echo "</strong><br />
                                        <strong> Numéro de Serie : ";
                // line 80
                echo twig_escape_filter($this->env, (($context["r"]) ? ($this->getAttribute($context["r"], "numSerie", array())) : ("")), "html", null, true);
                echo "</strong><br />
                                        
                                    </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                                </div>
                            </div>
                        </div> 
                        <div class=\"col-md-12\">
                            ";
            // line 88
            if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array())) {
                // line 89
                echo "                            <a class=\"btn btn-info pull-right\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mon_annuaire_editer", array("id" => $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "id", array()))), "html", null, true);
                echo "\"> <span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"> Modifier Mes Infos</span></a>
                            ";
            }
            // line 91
            echo "                            </div> 

            </div> <!-- end row -->
            ";
        }
        // line 94
        echo " 
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
        return array (  207 => 94,  201 => 91,  195 => 89,  193 => 88,  187 => 84,  177 => 80,  173 => 79,  169 => 78,  165 => 77,  161 => 76,  157 => 74,  153 => 73,  138 => 61,  134 => 60,  130 => 59,  126 => 58,  119 => 54,  104 => 42,  99 => 40,  94 => 38,  88 => 35,  84 => 34,  80 => 33,  74 => 30,  70 => 29,  66 => 28,  52 => 17,  42 => 9,  39 => 8,  32 => 5,  29 => 4,  11 => 2,);
    }
}
/* */
/* {% extends 'AnnuaireBundle:Default:index.html.twig' %}*/
/* */
/* {% block lienretour %}*/
/*     <li><a href="{{ path('mon_annuaire_homepage')}}">Retour</a></li> */
/* {% endblock %}*/
/* */
/* {% block container %}*/
/*     <div class="content-wrapper" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"*/
/*          xmlns="http://www.w3.org/1999/html">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <h1 class="page-head-line">Mes Infos</h1>*/
/*                 </div>*/
/*             </div>*/
/*              {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %} */
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
/*                                         <strong> Département : {{ employee ? employee.departement }}</strong><br />*/
/*                                         <strong> Localisation : {{ employee ? employee.localisation }}</strong><br />*/
/*                                         <strong> Fonction : {{ employee ? employee.fonction }}</strong><br />*/
/*                                         <strong> Numéro de Bureau : {{ employee ? employee.numbureau }}</strong><br />*/
/* */
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div> */
/*                         <div class="col-md-12">*/
/*                             <div class="panel panel-default">*/
/*                                 <div class="panel-heading">*/
/*                                     <strong> Informations sur les Ressources attribuées </strong>*/
/*                                 </div>*/
/*                                 <div class="panel-body">*/
/*                                     {% for r in listeRessources %}*/
/*                                     <div class="col-md-6">*/
/*                                         */
/*                                         <strong> Ressource : {{ r ? r.ressource }}</strong><br />*/
/*                                         <strong> Type : {{ r ? r.type }}</strong><br />*/
/*                                         <strong> Marque : {{ r ? r.marque }}</strong><br />*/
/*                                         <strong> Model : {{ r ? r.model }}</strong><br />*/
/*                                         <strong> Numéro de Serie : {{ r ? r.numSerie }}</strong><br />*/
/*                                         */
/*                                     </div>*/
/*                                     {% endfor %}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div> */
/*                         <div class="col-md-12">*/
/*                             {% if app.session  %}*/
/*                             <a class="btn btn-info pull-right" href="{{ path ('mon_annuaire_editer', { 'id' : employee.id }) }}"> <span class="glyphicon glyphicon-edit" aria-hidden="true"> Modifier Mes Infos</span></a>*/
/*                             {% endif %}*/
/*                             </div> */
/* */
/*             </div> <!-- end row -->*/
/*             {% endif %} */
/*         </div> <!-- END CONTAINER -->*/
/*     </div>*/
/* */
/* {% endblock %}*/
