<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_49218dca759031a5d94462d5581a1432f5a3c91769b06422abdb40b8ab870cad extends Twig_Template
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
        echo "
<div class=\"content-wrapper\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h4 class=\"page-head-line\">Modifier les données </h4>

            </div>

        </div>
        <div class=\"row\">
            <br />
            <div class=\"col-md-6\">
                <h4><strong> Modification : </strong></h4>
                <hr />
                <form action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_profile_edit\">
                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    <br />
                    <input type=\"submit\" class=\"btn btn-info\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                </form>
            </div>
            <div class=\"col-md-6\">
                <br/>
                <br />
                <div class=\"alert alert-info\">
                    <strong> Vous modifier votre profile ? </strong>
                    <br />
                    <em> Veuillez renseigner les champs à modifier <br />
                        Votre mot de passe vous sera demander à la fin afin de valider la (les) modification(s).</em>

                </div>
            </div>

        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 20,  42 => 18,  36 => 17,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="content-wrapper">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h4 class="page-head-line">Modifier les données </h4>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/*         <div class="row">*/
/*             <br />*/
/*             <div class="col-md-6">*/
/*                 <h4><strong> Modification : </strong></h4>*/
/*                 <hr />*/
/*                 <form action="{{ path('fos_user_profile_edit') }}" {{ form_enctype(form) }} method="POST" class="fos_user_profile_edit">*/
/*                     {{ form_widget(form) }}*/
/*                     <br />*/
/*                     <input type="submit" class="btn btn-info" value="{{ 'profile.edit.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*                 </form>*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <br/>*/
/*                 <br />*/
/*                 <div class="alert alert-info">*/
/*                     <strong> Vous modifier votre profile ? </strong>*/
/*                     <br />*/
/*                     <em> Veuillez renseigner les champs à modifier <br />*/
/*                         Votre mot de passe vous sera demander à la fin afin de valider la (les) modification(s).</em>*/
/* */
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
