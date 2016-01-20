<?php

/* AnnuaireBundle:Template:Ressources.html.twig */
class __TwigTemplate_b46972eca214afe63bc5c0920d33597c1bbdcb6cff88c2e32ac6d1cad95dfd3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnnuaireBundle::layout.html.twig", "AnnuaireBundle:Template:Ressources.html.twig", 1);
        $this->blocks = array(
            'lienRessources' => array($this, 'block_lienRessources'),
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
    public function block_lienRessources($context, array $blocks = array())
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
                <h1 class=\"page-head-line\">Ressources </h1>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <strong> Ajouter Ressources</strong>
                    </div>
                    <div class=\"panel-body\">
                        <form action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("mon_annuaire_ressource");
        echo "\" method=\"post\">
                            <div class=\"form-group col-lg-4\">
                                <label>Employee</label>
                                ";
        // line 26
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "employee", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Ressource</label>
                                ";
        // line 30
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "ressource", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Type</label>
                                ";
        // line 34
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Marque</label>
                                ";
        // line 38
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "marque", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Model</label>
                                ";
        // line 42
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "model", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>

                            <div class=\"form-group col-lg-8\">
                                <label>Numéro de série</label>
                                ";
        // line 47
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "numSerie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"col-md-12\">
                                <input type=\"hidden\" name=\"enregistrer\" value=\"ressource\">
                                    ";
        // line 51
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "_token", array()), 'widget');
        echo "
                                <button type=\"submit\" class=\"btn btn-danger pull-right\" id=\"save-ressource\">Enregistrer</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"page-head-line\">Ressources existantes <i>(";
        // line 63
        if (isset($context["compteur"])) { $_compteur_ = $context["compteur"]; } else { $_compteur_ = null; }
        echo twig_escape_filter($this->env, $_compteur_, "html", null, true);
        echo ")</i> </h1>
                <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Ressource</th>
                        <th>Type</th>
                        <th>Model</th>
                        <th>Service</th>
                        <th>Numéro de série</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 75
        if (isset($context["liste"])) { $_liste_ = $context["liste"]; } else { $_liste_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_liste_);
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 76
            echo "                        <tr>
                            <td>";
            // line 77
            if (isset($context["s"])) { $_s_ = $context["s"]; } else { $_s_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_s_, "ressources", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 78
            if (isset($context["s"])) { $_s_ = $context["s"]; } else { $_s_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_s_, "type", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 79
            if (isset($context["s"])) { $_s_ = $context["s"]; } else { $_s_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_s_, "marque", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 80
            if (isset($context["s"])) { $_s_ = $context["s"]; } else { $_s_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_s_, "model", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 81
            if (isset($context["s"])) { $_s_ = $context["s"]; } else { $_s_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_s_, "numSerie", array()), "html", null, true);
            echo "</td>
                            ";
            // line 82
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 83
                echo "                           <td><a class=\"btn btn-danger\" id=\"delete\" href=\"";
                if (isset($context["s"])) { $_s_ = $context["s"]; } else { $_s_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mon_annuaire_deleteRessource", array("id" => $this->getAttribute($_s_, "id", array()))), "html", null, true);
                echo "\" > <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a></td>
                           ";
            }
            // line 85
            echo "                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
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
        return "AnnuaireBundle:Template:Ressources.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 87,  186 => 85,  179 => 83,  177 => 82,  172 => 81,  167 => 80,  162 => 79,  157 => 78,  152 => 77,  149 => 76,  144 => 75,  128 => 63,  112 => 51,  104 => 47,  95 => 42,  87 => 38,  79 => 34,  71 => 30,  63 => 26,  57 => 23,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'AnnuaireBundle::layout.html.twig' %}*/
/* */
/* {% block lienRessources %}*/
/*     class="menu-top-active"*/
/* {% endblock %}*/
/* */
/* {% block container %}*/
/* */
/* <div class="content-wrapper">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h1 class="page-head-line">Ressources </h1>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         <strong> Ajouter Ressources</strong>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <form action="{{ path('mon_annuaire_ressource') }}" method="post">*/
/*                             <div class="form-group col-lg-4">*/
/*                                 <label>Employee</label>*/
/*                                 {{ form_widget(form.employee, {'attr':{'class':'form-control'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group col-lg-4">*/
/*                                 <label>Ressource</label>*/
/*                                 {{ form_widget(form.ressource, {'attr':{'class':'form-control'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group col-lg-4">*/
/*                                 <label>Type</label>*/
/*                                 {{ form_widget(form.type, {'attr':{'class':'form-control'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group col-lg-4">*/
/*                                 <label>Marque</label>*/
/*                                 {{ form_widget(form.marque, {'attr':{'class':'form-control'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group col-lg-4">*/
/*                                 <label>Model</label>*/
/*                                 {{ form_widget(form.model, {'attr':{'class':'form-control'}}) }}*/
/*                             </div>*/
/* */
/*                             <div class="form-group col-lg-8">*/
/*                                 <label>Numéro de série</label>*/
/*                                 {{ form_widget(form.numSerie, {'attr':{'class':'form-control'}}) }}*/
/*                             </div>*/
/*                             <div class="col-md-12">*/
/*                                 <input type="hidden" name="enregistrer" value="ressource">*/
/*                                     {{ form_widget(form._token)}}*/
/*                                 <button type="submit" class="btn btn-danger pull-right" id="save-ressource">Enregistrer</button>*/
/*                             </div>*/
/* */
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h1 class="page-head-line">Ressources existantes <i>({{ compteur }})</i> </h1>*/
/*                 <table class="table table-striped">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Ressource</th>*/
/*                         <th>Type</th>*/
/*                         <th>Model</th>*/
/*                         <th>Service</th>*/
/*                         <th>Numéro de série</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for s in liste %}*/
/*                         <tr>*/
/*                             <td>{{ s.ressources }}</td>*/
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
