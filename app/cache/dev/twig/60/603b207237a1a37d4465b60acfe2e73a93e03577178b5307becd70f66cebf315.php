<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_f1cee71041075cb86af2e21acea19dff71119752498230b2a0f20f9851783035 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnnuaireBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'lienretour' => array($this, 'block_lienretour'),
            'container' => array($this, 'block_container'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
    public function block_lienretour($context, array $blocks = array())
    {
        // line 3
        echo "    <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("mon_annuaire_homepage");
        echo "\">Retour</a></li> 
";
    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        // line 6
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 7
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 7)->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  43 => 6,  40 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "AnnuaireBundle::layout.html.twig" %}*/
/* {% block lienretour %}*/
/*     <li><a href="{{ path('mon_annuaire_homepage')}}">Retour</a></li> */
/* {% endblock %}*/
/* {% block container %}*/
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* {% endblock %}*/
