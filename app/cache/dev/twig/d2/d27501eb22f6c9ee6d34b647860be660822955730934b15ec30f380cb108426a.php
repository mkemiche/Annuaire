<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_7bddf23fec783e552ace95d059eb6a47e81c67f1ab3474ea384094a59e56bdf9 extends Twig_Template
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
        echo "<div class=\"content-wrapper\" xmlns=\"http://www.w3.org/1999/html\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h4 class=\"page-head-line\">Veuillez insérer les données </h4>

            </div>

        </div>
        <div class=\"row\">
            <br />
            <div class=\"col-md-6\">
                <h4><strong> Inscription : </strong></h4>
                <hr />

                <form action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
                    <div class=\"form-group\" id=\"fos_user_registration_form\">
                        <label>Nom d'utilisateur : </label>
                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
                        
                        <label>Adresse e-mail : </label>
                        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "

                        <label>Mot de passe : </label>
                        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
                        
                        <label>Confirmer mot de passe : </label>
                        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "

                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

                    </div>
                    <div>
                        <input class=\"btn btn-info btn-primary btn-block\" type=\"submit\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
                    </div>
                </form>
            </div>
            <div class=\"col-md-6\">
                <br/>
                <br />
                <div class=\"alert alert-info\">
                    <strong> Inscription ? </strong>
                    <br />
                    <em> Veuillez renseigner les champs afin de vous inscrire <br />
                    Un e-mail vous sera envoyer pour activer votre compte.</em>

                </div>
            </div>

        </div>
    </div>
</div>










";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 39,  83 => 35,  78 => 33,  74 => 32,  68 => 29,  64 => 28,  58 => 25,  54 => 24,  48 => 21,  44 => 20,  36 => 17,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <div class="content-wrapper" xmlns="http://www.w3.org/1999/html">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h4 class="page-head-line">Veuillez insérer les données </h4>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/*         <div class="row">*/
/*             <br />*/
/*             <div class="col-md-6">*/
/*                 <h4><strong> Inscription : </strong></h4>*/
/*                 <hr />*/
/* */
/*                 <form action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST">*/
/*                     <div class="form-group" id="fos_user_registration_form">*/
/*                         <label>Nom d'utilisateur : </label>*/
/*                         {{ form_widget(form.username, { 'attr': {'class': 'form-control' } }) }}*/
/*                         {{ form_errors(form.username) }}*/
/*                         */
/*                         <label>Adresse e-mail : </label>*/
/*                         {{ form_widget(form.email, { 'attr': {'class': 'form-control'} }) }}*/
/*                         {{ form_errors(form.email) }}*/
/* */
/*                         <label>Mot de passe : </label>*/
/*                         {{ form_widget(form.plainPassword.first, { 'attr': {'class': 'form-control'} }) }}*/
/*                         {{ form_errors(form.plainPassword.first) }}*/
/*                         */
/*                         <label>Confirmer mot de passe : </label>*/
/*                         {{ form_widget(form.plainPassword.second, { 'attr': {'class': 'form-control' } }) }}*/
/*                         {{ form_errors(form.plainPassword.second) }}*/
/* */
/*                         {{ form_rest(form) }}*/
/* */
/*                     </div>*/
/*                     <div>*/
/*                         <input class="btn btn-info btn-primary btn-block" type="submit" value="{{ 'registration.submit'|trans }}">*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <br/>*/
/*                 <br />*/
/*                 <div class="alert alert-info">*/
/*                     <strong> Inscription ? </strong>*/
/*                     <br />*/
/*                     <em> Veuillez renseigner les champs afin de vous inscrire <br />*/
/*                     Un e-mail vous sera envoyer pour activer votre compte.</em>*/
/* */
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
