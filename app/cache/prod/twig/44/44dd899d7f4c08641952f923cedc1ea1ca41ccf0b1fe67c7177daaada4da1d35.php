<?php

/* AnnuaireBundle:Default:index.html.twig */
class __TwigTemplate_1a114984edf60225cc2ee7a7fbbe74881d4c9f6a41f3e54db1c659233825c83a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnnuaireBundle::layout.html.twig", "AnnuaireBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'lienAccueil' => array($this, 'block_lienAccueil'),
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
    public function block_lienAccueil($context, array $blocks = array())
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
                <h4 class=\"page-head-line\">Accueil</h4>

            </div>

        </div>



        

            <div class=\"col-md-6\">
               
              
               
                  
                   
 
            </div>
        </div>
    </div>
</div>



";
    }

    public function getTemplateName()
    {
        return "AnnuaireBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'AnnuaireBundle::layout.html.twig' %}*/
/* */
/* {% block lienAccueil %}*/
/*     class="menu-top-active"*/
/* {% endblock %}*/
/* */
/* {% block container %}*/
/* */
/* <div class="content-wrapper">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h4 class="page-head-line">Accueil</h4>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/* */
/* */
/*         */
/* */
/*             <div class="col-md-6">*/
/*                */
/*               */
/*                */
/*                   */
/*                    */
/*  */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
