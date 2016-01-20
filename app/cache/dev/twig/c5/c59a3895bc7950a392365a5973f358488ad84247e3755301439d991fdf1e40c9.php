<?php

/* AnnuaireBundle:Template:ressources.html.twig */
class __TwigTemplate_f2970bab5be919fddcb0219e0cd68703fa8859f9efc82c653c66b53393fd56a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnnuaireBundle:Default:index.html.twig", "AnnuaireBundle:Template:ressources.html.twig", 1);
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employee", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Ressource</label>
                                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ressource", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Exemple : ordinateur ou imprimante ...")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Type (optionnel) </label>
                                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Type")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Marque</label>
                                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marque", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Marque")));
        echo "
                            </div>
                            <div class=\"form-group col-lg-4\">
                                <label>Model (optionnel)</label>
                                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "model", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Model")));
        echo "
                            </div>

                            <div class=\"form-group col-lg-8\">
                                <label>Numéro de série (optionnel)</label>
                                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numSerie", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "ABCD123456")));
        echo "
                            </div>
                            <div class=\"col-md-12\">
                                <input type=\"hidden\" name=\"enregistrer\" value=\"ressource\">
                                    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
                                <button type=\"submit\" class=\"btn btn-danger pull-right\" id=\"save-ressource\">Enregistrer</button>
                            </div>
                            <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("mon_annuaire_recherche");
        echo "\"> Terminer </a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"page-head-line\">Ressources existantes <i>(";
        // line 64
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
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 78
            echo "                        <tr>
                            
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
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
        return "AnnuaireBundle:Template:ressources.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 82,  147 => 78,  143 => 77,  127 => 64,  114 => 54,  108 => 51,  101 => 47,  93 => 42,  86 => 38,  79 => 34,  72 => 30,  65 => 26,  59 => 23,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
/*                                 {{ form_widget(form.ressource, {'attr':{'class':'form-control', 'placeholder':'Exemple : ordinateur ou imprimante ...'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group col-lg-4">*/
/*                                 <label>Type (optionnel) </label>*/
/*                                 {{ form_widget(form.type, {'attr':{'class':'form-control', 'placeholder':'Type'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group col-lg-4">*/
/*                                 <label>Marque</label>*/
/*                                 {{ form_widget(form.marque, {'attr':{'class':'form-control', 'placeholder':'Marque'}}) }}*/
/*                             </div>*/
/*                             <div class="form-group col-lg-4">*/
/*                                 <label>Model (optionnel)</label>*/
/*                                 {{ form_widget(form.model, {'attr':{'class':'form-control' , 'placeholder':'Model'}}) }}*/
/*                             </div>*/
/* */
/*                             <div class="form-group col-lg-8">*/
/*                                 <label>Numéro de série (optionnel)</label>*/
/*                                 {{ form_widget(form.numSerie, {'attr':{'class':'form-control', 'placeholder':'ABCD123456'}}) }}*/
/*                             </div>*/
/*                             <div class="col-md-12">*/
/*                                 <input type="hidden" name="enregistrer" value="ressource">*/
/*                                     {{ form_widget(form._token)}}*/
/*                                 <button type="submit" class="btn btn-danger pull-right" id="save-ressource">Enregistrer</button>*/
/*                             </div>*/
/*                             <a href="{{path('mon_annuaire_recherche')}}"> Terminer </a>*/
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
/*                             */
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/*       */
/*     </div> <!-- end container -->*/
/* </div>*/
/* {% endblock %}*/
