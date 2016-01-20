<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_0bf9865d36e1018fd0352c3e7933658625d5c5ee87277e256349c52665746480 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "    <div class=\"content-wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h4 class=\"page-head-line\">Veuillez vous connecter pour accéder  </h4>

                </div>

            </div>
            <div class=\"row\">

                <div class=\"col-md-6\">
                    <h3><strong>Connexion :</strong></h3>
                    <hr />
                    <form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                        <label for=\"username\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

                        <label for=\"password\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" />
                        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\"><i> Mot de passe perdu ou oublié ? </i></a>
                            <br />
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                        <label for=\"remember_me\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <br />
                        <input type=\"submit\" class=\"btn btn-info btn-primary btn-block\" id=\"_submit\" href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </form>
                </div>
                <div class=\"col-md-6\">
                    <br />
                    <br />
                    <div class=\"alert alert-info\">
                        <strong> Pas encore inscrit ? </strong>
                        <br />
                        <br />
                        <em> Nous vous invitons à vous inscrire pour accéder à l'annuaire de l'entreprise. <br />
                         Inscription en 5 minute. Cliquer sur boutton inscription ci dessous :
                        </em>
                        <br />
                        <br />
                        <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-info \"><span class=\"glyphicon glyphicon-user\"></span> &nbsp;Inscription </a>&nbsp;
                    </div>
                </div>

            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 49,  89 => 34,  84 => 32,  78 => 29,  73 => 27,  68 => 25,  64 => 24,  59 => 22,  55 => 21,  39 => 7,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/* {% endif %}*/
/*     <div class="content-wrapper">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <h4 class="page-head-line">Veuillez vous connecter pour accéder  </h4>*/
/* */
/*                 </div>*/
/* */
/*             </div>*/
/*             <div class="row">*/
/* */
/*                 <div class="col-md-6">*/
/*                     <h3><strong>Connexion :</strong></h3>*/
/*                     <hr />*/
/*                     <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*                         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*                         <label for="username">{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}</label>*/
/*                         <input type="text" class="form-control" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*                         <label for="password">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>*/
/*                         <input type="password" class="form-control" id="password" name="_password" required="required" />*/
/*                         <a href="{{ path('fos_user_resetting_request') }}"><i> Mot de passe perdu ou oublié ? </i></a>*/
/*                             <br />*/
/*                         <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                         <label for="remember_me">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label>*/
/*                         <br />*/
/*                         <input type="submit" class="btn btn-info btn-primary btn-block" id="_submit" href="{{ path('fos_user_security_login') }}" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*                     </form>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                     <br />*/
/*                     <br />*/
/*                     <div class="alert alert-info">*/
/*                         <strong> Pas encore inscrit ? </strong>*/
/*                         <br />*/
/*                         <br />*/
/*                         <em> Nous vous invitons à vous inscrire pour accéder à l'annuaire de l'entreprise. <br />*/
/*                          Inscription en 5 minute. Cliquer sur boutton inscription ci dessous :*/
/*                         </em>*/
/*                         <br />*/
/*                         <br />*/
/*                         <a href="{{ path('fos_user_registration_register') }}" class="btn btn-info "><span class="glyphicon glyphicon-user"></span> &nbsp;Inscription </a>&nbsp;*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock fos_user_content %}*/
/* */
