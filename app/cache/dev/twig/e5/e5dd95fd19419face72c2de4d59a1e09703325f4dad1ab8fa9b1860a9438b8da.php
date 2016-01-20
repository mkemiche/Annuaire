<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_55cf4ae99a9afbce93b5daef2f94ace38e5c950f04243efbc675acc507c677f2 extends Twig_Template
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
        // line 1
        echo "<div class=\"content-wrapper\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h4 class=\"page-head-line\">Modifier le mot de passe </h4>

            </div>

        </div>
        <div class=\"row\">
            <br />
            <div class=\"col-md-6\">
                <h4><strong> Modification : </strong></h4>
                <hr />

\t\t\t\t<form action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password\">
\t\t\t\t    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t\t    <div>
\t\t\t\t        <input type=\"submit\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t\t    </div>
\t\t\t\t</form>
    \t </div>
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
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 19,  42 => 17,  36 => 16,  19 => 1,);
    }
}
/* <div class="content-wrapper">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h4 class="page-head-line">Modifier le mot de passe </h4>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/*         <div class="row">*/
/*             <br />*/
/*             <div class="col-md-6">*/
/*                 <h4><strong> Modification : </strong></h4>*/
/*                 <hr />*/
/* */
/* 				<form action="{{ path('fos_user_change_password') }}" {{ form_enctype(form) }} method="POST" class="fos_user_change_password">*/
/* 				    {{ form_widget(form) }}*/
/* 				    <div>*/
/* 				        <input type="submit" value="{{ 'change_password.submit'|trans({}, 'FOSUserBundle') }}" />*/
/* 				    </div>*/
/* 				</form>*/
/*     	 </div>*/
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
