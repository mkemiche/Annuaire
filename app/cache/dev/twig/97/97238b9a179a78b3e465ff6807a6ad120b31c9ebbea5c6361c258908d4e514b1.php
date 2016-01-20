<?php

/* AnnuaireBundle:Template:recherche.html.twig */
class __TwigTemplate_de0ab2e355137716dbc8b2d90f567b9bc930f92e12754c0c508ccbde4aae7ace extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnnuaireBundle:Default:index.html.twig", "AnnuaireBundle:Template:recherche.html.twig", 1);
        $this->blocks = array(
            'lienRecherche' => array($this, 'block_lienRecherche'),
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
    public function block_lienRecherche($context, array $blocks = array())
    {
        // line 4
        echo "    class=\"menu-top-active\"
";
    }

    // line 7
    public function block_lienretour($context, array $blocks = array())
    {
        // line 8
        echo "    <li><a   href=\"";
        echo $this->env->getExtension('routing')->getPath("mon_annuaire_homepage");
        echo "\">Retour</a></li> 
";
    }

    // line 11
    public function block_container($context, array $blocks = array())
    {
        // line 12
        echo "
<div class=\"content-wrapper\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"page-head-line\">Recherche</h1>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <strong>Rechercher Par Nom et/ou Prénom, par département, par service ou par localisation.  </strong>
                    </div>

                    <div class=\"panel-body\">

                        <!-- inserer form -->
                        <div class =\"col-md-offset-2\">
                        <form action=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("mon_annuaire_recherche");
        echo "\" method=\"post\" role=\"form\">
                            <div class=\"col-md-5 form-group\">
                                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recherche", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <button type=\"submit\" class=\"btn btn-success col-md-3\"><span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span>  Rechercher</button> 
                            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                            <br />
                             <a class=\"btn btn-info col-md-3 col-md-offset-5 \" href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("mon_annuaire_recherche");
        echo "\">  <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>  Annuler la recherche </a>

                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>           
        <!-- end rows -->

        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"page-head-line\">Personnes trouvées <i>(";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["compteur"]) ? $context["compteur"] : $this->getContext($context, "compteur")), "html", null, true);
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
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 63
            echo "                        <tr>
                            <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "civilite", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nom", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "prenom", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "fonction", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nomService", array()), "html", null, true);
            echo "</td>
                           <td><a class=\"btn btn-success\" href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mon_annuaire_info", array("id" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
            echo "\"> <span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span></a></td>

                           ";
            // line 71
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 72
                echo "                           <td><a class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mon_annuaire_editer", array("id" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
                echo "\"> <span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span></a></td>
                           <td><a class=\"btn btn-danger\" id=\"delete\" href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mon_annuaire_delete", array("id" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
                echo "\" > <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a></td>
                           ";
            }
            // line 75
            echo "                     </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
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
        return array (  169 => 77,  162 => 75,  157 => 73,  152 => 72,  150 => 71,  145 => 69,  141 => 68,  137 => 67,  133 => 66,  129 => 65,  125 => 64,  122 => 63,  118 => 62,  103 => 50,  88 => 38,  83 => 36,  77 => 33,  72 => 31,  51 => 12,  48 => 11,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'AnnuaireBundle:Default:index.html.twig' %}*/
/* */
/* {% block lienRecherche %}*/
/*     class="menu-top-active"*/
/* {% endblock %}*/
/* */
/* {% block lienretour %}*/
/*     <li><a   href="{{ path('mon_annuaire_homepage')}}">Retour</a></li> */
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
/*             <div class="col-md-12">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         <strong>Rechercher Par Nom et/ou Prénom, par département, par service ou par localisation.  </strong>*/
/*                     </div>*/
/* */
/*                     <div class="panel-body">*/
/* */
/*                         <!-- inserer form -->*/
/*                         <div class ="col-md-offset-2">*/
/*                         <form action="{{ path('mon_annuaire_recherche') }}" method="post" role="form">*/
/*                             <div class="col-md-5 form-group">*/
/*                                 {{ form_widget(form.recherche, {'attr':{'class':'form-control'}} ) }}*/
/*                             </div>*/
/*                             <button type="submit" class="btn btn-success col-md-3"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>  Rechercher</button> */
/*                             {{ form_widget(form) }}*/
/*                             <br />*/
/*                              <a class="btn btn-info col-md-3 col-md-offset-5 " href="{{ path ('mon_annuaire_recherche') }}">  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>  Annuler la recherche </a>*/
/* */
/*                         </form>*/
/*                         </div>*/
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
/* */
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
