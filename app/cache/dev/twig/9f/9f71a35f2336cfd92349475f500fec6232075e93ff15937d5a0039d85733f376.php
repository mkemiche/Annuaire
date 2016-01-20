<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_9a79a37960db937e3afe4ed67506b8313a2eff05c26c8959f701d9e017113641 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 5
        if ( !twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()))) {
            // line 6
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()), "providerKey", array())) . ".target_path")), "method");
            // line 7
            echo "        ";
            if ( !twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 8
            echo "    ";
        }
        // line 9
        echo "<div class=\"row\">
<div class=\"col-md-8 col-md-offset-2\">
    <div class=\"alert alert-danger\">
                    <strong><center> Bienvenue dans l'annuaire téléphonique de DANONE </center></strong>
                    <br />
                    <em><strong>Première inscription ?</strong></em> <br/>
                    <em> Afin de bien faciliter la recherche, vous devez complèter votre profile et rensigner tout les champs vous concernent. <br />
                    Cliquer sur le lien ci dessous </em> <br />
                    <a href = \"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("mon_annuaire_enregistrer");
        echo "\" class=\"\"> Complèter mon profil </a>

                </div>
                </div>
                </div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 17,  53 => 9,  50 => 8,  41 => 7,  38 => 6,  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}, 'FOSUserBundle') }}</p>*/
/*     {% if app.session is not empty %}*/
/*         {% set targetUrl = app.session.get('_security.' ~ app.security.token.providerKey ~ '.target_path') %}*/
/*         {% if targetUrl is not empty %}<p><a href="{{ targetUrl }}">{{ 'registration.back'|trans({}, 'FOSUserBundle') }}</a></p>{% endif %}*/
/*     {% endif %}*/
/* <div class="row">*/
/* <div class="col-md-8 col-md-offset-2">*/
/*     <div class="alert alert-danger">*/
/*                     <strong><center> Bienvenue dans l'annuaire téléphonique de DANONE </center></strong>*/
/*                     <br />*/
/*                     <em><strong>Première inscription ?</strong></em> <br/>*/
/*                     <em> Afin de bien faciliter la recherche, vous devez complèter votre profile et rensigner tout les champs vous concernent. <br />*/
/*                     Cliquer sur le lien ci dessous </em> <br />*/
/*                     <a href = "{{path('mon_annuaire_enregistrer')}}" class=""> Complèter mon profil </a>*/
/* */
/*                 </div>*/
/*                 </div>*/
/*                 </div>*/
/* */
/* {% endblock fos_user_content %}*/
/* */
