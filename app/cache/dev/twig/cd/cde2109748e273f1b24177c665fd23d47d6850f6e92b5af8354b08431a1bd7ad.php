<?php

/* AnnuaireBundle:Template:rechercheRes.html.twig */
class __TwigTemplate_267204300c8ed3ceeddc8c2d724fa5f9d3c2547d3a5f47722e6d99625997e576 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnnuaireBundle:Default:index.html.twig", "AnnuaireBundle:Template:rechercheRes.html.twig", 1);
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
                        <strong>Rechercher Par type ou marque de ressources.  </strong>
                    </div>

                    <div class=\"panel-body\">

                        <!-- inserer form -->
                    <div class =\"col-md-offset-2\">    
                        <form action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("mon_annuaire_rechercheRes");
        echo "\" method=\"post\" role=\"form\">
                            <div class=\"col-md-5 form-group\">
                                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recherche", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <button type=\"submit\" class=\"btn btn-success col-md-3\"><span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span>  Rechercher</button> 
                            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                            <br />
                             <a class=\"btn btn-info col-md-3 col-md-offset-5 \" href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("mon_annuaire_rechercheRes");
        echo "\">  <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>  Annuler la recherche </a>

                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>           
        
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"page-head-line\">Ressources existantes <i>(";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["compteur"]) ? $context["compteur"] : $this->getContext($context, "compteur")), "html", null, true);
        echo ")</i> </h1>
                <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Nom d'employee</th>
                        <th>Ressource</th>
                        <th>Type</th>
                        <th>Marque</th>
                        <th>Model</th>
                        <th>Numéro de série</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 59
            echo "                        <tr>
                            <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "employee", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "ressource", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "type", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "marque", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "model", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "numSerie", array()), "html", null, true);
            echo "</td>
                            ";
            // line 66
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 67
                echo "                           <td><a class=\"btn btn-danger\" id=\"delete\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mon_annuaire_deleteRessource", array("id" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
                echo "\" > <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a></td>
                           ";
            }
            // line 69
            echo "                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end container -->
</div>
";
    }

    public function getTemplateName()
    {
        return "AnnuaireBundle:Template:rechercheRes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 71,  148 => 69,  142 => 67,  140 => 66,  136 => 65,  132 => 64,  128 => 63,  124 => 62,  120 => 61,  116 => 60,  113 => 59,  109 => 58,  93 => 45,  79 => 34,  74 => 32,  68 => 29,  63 => 27,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
/*                         <strong>Rechercher Par type ou marque de ressources.  </strong>*/
/*                     </div>*/
/* */
/*                     <div class="panel-body">*/
/* */
/*                         <!-- inserer form -->*/
/*                     <div class ="col-md-offset-2">    */
/*                         <form action="{{ path('mon_annuaire_rechercheRes') }}" method="post" role="form">*/
/*                             <div class="col-md-5 form-group">*/
/*                                 {{ form_widget(form.recherche, {'attr':{'class':'form-control'}} ) }}*/
/*                             </div>*/
/*                             <button type="submit" class="btn btn-success col-md-3"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>  Rechercher</button> */
/*                             {{ form_widget(form) }}*/
/*                             <br />*/
/*                              <a class="btn btn-info col-md-3 col-md-offset-5 " href="{{ path ('mon_annuaire_rechercheRes') }}">  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>  Annuler la recherche </a>*/
/* */
/*                         </form>*/
/*                     </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>           */
/*         */
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h1 class="page-head-line">Ressources existantes <i>({{ compteur }})</i> </h1>*/
/*                 <table class="table table-striped">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Nom d'employee</th>*/
/*                         <th>Ressource</th>*/
/*                         <th>Type</th>*/
/*                         <th>Marque</th>*/
/*                         <th>Model</th>*/
/*                         <th>Numéro de série</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for s in liste %}*/
/*                         <tr>*/
/*                             <td>{{ s.employee }}</td>*/
/*                             <td>{{ s.ressource }}</td>*/
/*                             <td>{{ s.type }}</td>*/
/*                             <td>{{ s.marque }}</td>*/
/*                             <td>{{ s.model }}</td>*/
/*                             <td>{{ s.numSerie }}</td>*/
/*                             {% if is_granted("ROLE_ADMIN") %}*/
/*                            <td><a class="btn btn-danger" id="delete" href="{{ path('mon_annuaire_deleteRessource',{'id': s.id}) }}" > <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>*/
/*                            {% endif %}*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/*     </div> <!-- end container -->*/
/* </div>*/
/* {% endblock %}*/
