<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_19f7b58a95d8500a16dc7536ad5c7a193d8eba34928518c42a497ab72049af7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"content-wrapper\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"page-head-line\">Mon Compte</h1>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        Mon compte &nbsp;<a href =\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\"> (Modifier Mon Compte) </a>&nbsp;
                        <a href =\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\"> (Modifier Mot de Passe) </a>
                    </div>

                    <div class=\"panel-body\">
                        <div class=\"col-md-12\">
                            <div class=\"fos_user_user_show\">

                        <center> ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</center>
                        <center>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo " </center>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->

            </div> <!-- END CONTAINER -->
        </div>
        </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 22,  46 => 21,  36 => 14,  32 => 13,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <div class="content-wrapper">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h1 class="page-head-line">Mon Compte</h1>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         Mon compte &nbsp;<a href ="{{path ('fos_user_profile_edit')}}"> (Modifier Mon Compte) </a>&nbsp;*/
/*                         <a href ="{{path ('fos_user_change_password')}}"> (Modifier Mot de Passe) </a>*/
/*                     </div>*/
/* */
/*                     <div class="panel-body">*/
/*                         <div class="col-md-12">*/
/*                             <div class="fos_user_user_show">*/
/* */
/*                         <center> {{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}: {{ user.username }}</center>*/
/*                         <center>{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}: {{ user.email }} </center>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div> <!-- end row -->*/
/* */
/*             </div> <!-- END CONTAINER -->*/
/*         </div>*/
/*         </div>*/
/* </div>*/
/* */
/* */
/* */
