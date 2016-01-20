<?php

/* AnnuaireBundle:Template:recherche.html.twig */
class __TwigTemplate_8d868ccdadc074576ec732962c896580ee9681dca54c63e7e1b25f9069ca361f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnnuaireBundle::layout.html.twig", "AnnuaireBundle:Template:recherche.html.twig", 1);
        $this->blocks = array(
            'lienRecherche' => array($this, 'block_lienRecherche'),
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
    public function block_lienRecherche($context, array $blocks = array())
    {
        // line 4
        echo "    class=\"menu-top-active\"
";
    }

    // line 7
    public function block_container($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"content-wrapper\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"page-head-line\">Recherche</h1>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 col-md-offset-0\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <strong>Rechercher Par Nom, Prénom, Numéro employée ou numéro de service.  </strong>
                    </div>

                    <div class=\"panel-body\">

                        <!-- inserer form -->
                        
                        <form action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("mon_annuaire_recherche");
        echo "\" method=\"post\" role=\"form\">
                            <div class=\"col-md-5 form-group\">
                                ";
        // line 29
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "recherche", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"col-md-5 form-group\">
                                <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail2\" placeholder=\"Exemple : Portable\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-success col-md-2\"><span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span>  Rechercher</button> 
                            ";
        // line 35
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
        echo "
                            <br />
                            <br />
                            <a class=\"btn btn-info col-md-2 \" href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("mon_annuaire_recherche");
        echo "\">  <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>  Annuler la recherche</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>           
        <!-- end rows -->

        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"page-head-line\">Personnes trouvées <i>(";
        // line 48
        if (isset($context["compteur"])) { $_compteur_ = $context["compteur"]; } else { $_compteur_ = null; }
        echo twig_escape_filter($this->env, $_compteur_, "html", null, true);
        echo ")</i></h1>
                    <table  class=\"table table-striped\">
                    <thead>
                        <tr>
                        <th>Civilité</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Fonction</th>
                        <th>Service</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 60
        if (isset($context["liste"])) { $_liste_ = $context["liste"]; } else { $_liste_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_liste_);
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 61
            echo "                        <tr>
                            <td>";
            // line 62
            if (isset($context["s"])) { $_s_ = $context["s"]; } else { $_s_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_s_, "civilite", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 63
            if (isset($context["s"])) { $_s_ = $context["s"]; } else { $_s_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_s_, "nom", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 64
            if (isset($context["s"])) { $_s_ = $context["s"]; } else { $_s_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_s_, "prenom", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 65
            if (isset($context["s"])) { $_s_ = $context["s"]; } else { $_s_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_s_, "fonction", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 66
            if (isset($context["s"])) { $_s_ = $context["s"]; } else { $_s_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_s_, "nomService", array()), "html", null, true);
            echo "</td>
                           <td><a class=\"btn btn-success\" href=\"";
            // line 67
            if (isset($context["s"])) { $_s_ = $context["s"]; } else { $_s_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mon_annuaire_info", array("id" => $this->getAttribute($_s_, "id", array()))), "html", null, true);
            echo "\"> <span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span></a></td>
                           ";
            // line 68
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 69
                echo "                           <td><a class=\"btn btn-info\" href=\"";
                if (isset($context["s"])) { $_s_ = $context["s"]; } else { $_s_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mon_annuaire_editer", array("id" => $this->getAttribute($_s_, "id", array()))), "html", null, true);
                echo "\"> <span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span></a></td>
                           <td><a class=\"btn btn-danger\" id=\"delete\" href=\"";
                // line 70
                if (isset($context["s"])) { $_s_ = $context["s"]; } else { $_s_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mon_annuaire_delete", array("id" => $this->getAttribute($_s_, "id", array()))), "html", null, true);
                echo "\" > <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a></td>
                           ";
            }
            // line 72
            echo "                     </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                    </tbody>
                </table>
                    </div>
               
            </div>
        </div>


            </div>

        </div>
        <div class=\"row\">

            <!-- insert result -->

        </div>

    </div> <!-- end container -->
</div> <!-- end content-wrapper -->

";
    }

    public function getTemplateName()
    {
        return "AnnuaireBundle:Template:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 74,  164 => 72,  158 => 70,  152 => 69,  150 => 68,  145 => 67,  140 => 66,  135 => 65,  130 => 64,  125 => 63,  120 => 62,  117 => 61,  112 => 60,  96 => 48,  83 => 38,  76 => 35,  66 => 29,  61 => 27,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'AnnuaireBundle::layout.html.twig' %}*/
/* */
/* {% block lienRecherche %}*/
/*     class="menu-top-active"*/
/* {% endblock %}*/
/* */
/* {% block container %}*/
/* */
/* <div class="content-wrapper">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h1 class="page-head-line">Recherche</h1>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-12 col-md-offset-0">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         <strong>Rechercher Par Nom, Prénom, Numéro employée ou numéro de service.  </strong>*/
/*                     </div>*/
/* */
/*                     <div class="panel-body">*/
/* */
/*                         <!-- inserer form -->*/
/*                         */
/*                         <form action="{{ path('mon_annuaire_recherche') }}" method="post" role="form">*/
/*                             <div class="col-md-5 form-group">*/
/*                                 {{ form_widget(form.recherche, {'attr':{'class':'form-control'}} ) }}*/
/*                             </div>*/
/*                             <div class="col-md-5 form-group">*/
/*                                 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Exemple : Portable">*/
/*                             </div>*/
/*                             <button type="submit" class="btn btn-success col-md-2"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>  Rechercher</button> */
/*                             {{ form_widget(form) }}*/
/*                             <br />*/
/*                             <br />*/
/*                             <a class="btn btn-info col-md-2 " href="{{ path ('mon_annuaire_recherche') }}">  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>  Annuler la recherche</a>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>           */
/*         <!-- end rows -->*/
/* */
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h1 class="page-head-line">Personnes trouvées <i>({{ compteur }})</i></h1>*/
/*                     <table  class="table table-striped">*/
/*                     <thead>*/
/*                         <tr>*/
/*                         <th>Civilité</th>*/
/*                         <th>Nom</th>*/
/*                         <th>Prénom</th>*/
/*                         <th>Fonction</th>*/
/*                         <th>Service</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for s in liste %}*/
/*                         <tr>*/
/*                             <td>{{ s.civilite }}</td>*/
/*                             <td>{{ s.nom }}</td>*/
/*                             <td>{{ s.prenom }}</td>*/
/*                             <td>{{ s.fonction }}</td>*/
/*                             <td>{{ s.nomService }}</td>*/
/*                            <td><a class="btn btn-success" href="{{ path ('mon_annuaire_info', { 'id' : s.id }) }}"> <span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></td>*/
/*                            {% if is_granted("ROLE_ADMIN") %}*/
/*                            <td><a class="btn btn-info" href="{{ path ('mon_annuaire_editer', { 'id' : s.id }) }}"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>*/
/*                            <td><a class="btn btn-danger" id="delete" href="{{ path('mon_annuaire_delete',{'id': s.id}) }}" > <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>*/
/*                            {% endif %}*/
/*                      </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*                     </div>*/
/*                */
/*             </div>*/
/*         </div>*/
/* */
/* */
/*             </div>*/
/* */
/*         </div>*/
/*         <div class="row">*/
/* */
/*             <!-- insert result -->*/
/* */
/*         </div>*/
/* */
/*     </div> <!-- end container -->*/
/* </div> <!-- end content-wrapper -->*/
/* */
/* {% endblock %}*/
