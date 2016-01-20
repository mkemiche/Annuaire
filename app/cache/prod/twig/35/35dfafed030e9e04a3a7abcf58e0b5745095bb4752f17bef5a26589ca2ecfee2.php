<?php

/* AnnuaireBundle:Template:contact.html.twig */
class __TwigTemplate_e2db9af66b6dfdbee44c57237813b070fd8a48140410f6d37bb06ac63ea116c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AnnuaireBundle::layout.html.twig", "AnnuaireBundle:Template:contact.html.twig", 1);
        $this->blocks = array(
            'lienContact' => array($this, 'block_lienContact'),
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
    public function block_lienContact($context, array $blocks = array())
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
                <h4 class=\"page-head-line\">Contact</h4>

            </div>

        </div>
        <div class=\"row\">
            <div class=\"box\">
                <div class=\"col-lg-12\">
                    <hr>
                    <h2 class=\"intro-text text-center\"><strong>Adresse de l'entreprise</strong></h2>
                    <hr>
                </div>
                <div class=\"col-md-6 col-md-offset-3\">
                    <p>
                        <strong>Danone Djurdjura Algerie SPA.</strong>
                    </p>
                    <p>Address:
                        <strong>Zone industrielle Taharacht
                            <br>Akbou 06001, Algérie</strong>
                    </p>
                    <p>Phone:
                        <strong>+213 (0) 34 35 12 12</a></strong>
                    </p>
                    <p>Fax:
                        <strong>+213 (0) 34 35 12 12</a></strong>
                    </p>
                    <p>Email:
                        <strong><a href=\"mailto:name@example.com\">name@example.com</a></strong>
                    </p>
                </div>
            </div>
        </div>
        <div class=\"col-lg-12\">
            <hr />
            <h2 class=\"intro-text\">
                <strong>Contacter moi</strong>
            </h2>
            <hr />
        

        <div class=\"row\">
            <div class=\"box\">

                <form role=\"form\" method=\"post\" action=\"\">
                    <div class=\"row\">
                        <div class=\"form-group col-lg-4\">
                            <label>Name</label>
                            <input type=\"text\" class=\"form-control\" id=\"nom\" placeholder=\"Entrer votre nom\">
                        </div>
                        <div class=\"form-group col-lg-4\">
                            <label>Email Address</label>
                            <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Entrer votre Email\">
                        </div>
                        <div class=\"form-group col-lg-4\">
                            <label>Phone Number</label>
                            <input type=\"integer\" class=\"form-control\" id=\"phone\" placeholder=\"Entrer votre Numéro de téléphone\">
                        </div>
                        <div class=\"clearfix\"></div>
                        <div class=\"form-group col-lg-12\">
                            <label>Message</label>
                            <textarea type=\"text\" class=\"form-control\" id=\"message\" placeholder=\"Ecrivez votre message\"></textarea>
                        </div>
                        <div class=\"form-group col-lg-12\">
                            <input type=\"hidden\" name=\"save\" value=\"contact\">

                            <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
     </div>
    </div>


</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "AnnuaireBundle:Template:contact.html.twig";
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
/* {% block lienContact %}*/
/*     class="menu-top-active"*/
/* {% endblock %}*/
/* */
/* {% block container %}*/
/* */
/* <div class="content-wrapper">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h4 class="page-head-line">Contact</h4>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/*         <div class="row">*/
/*             <div class="box">*/
/*                 <div class="col-lg-12">*/
/*                     <hr>*/
/*                     <h2 class="intro-text text-center"><strong>Adresse de l'entreprise</strong></h2>*/
/*                     <hr>*/
/*                 </div>*/
/*                 <div class="col-md-6 col-md-offset-3">*/
/*                     <p>*/
/*                         <strong>Danone Djurdjura Algerie SPA.</strong>*/
/*                     </p>*/
/*                     <p>Address:*/
/*                         <strong>Zone industrielle Taharacht*/
/*                             <br>Akbou 06001, Algérie</strong>*/
/*                     </p>*/
/*                     <p>Phone:*/
/*                         <strong>+213 (0) 34 35 12 12</a></strong>*/
/*                     </p>*/
/*                     <p>Fax:*/
/*                         <strong>+213 (0) 34 35 12 12</a></strong>*/
/*                     </p>*/
/*                     <p>Email:*/
/*                         <strong><a href="mailto:name@example.com">name@example.com</a></strong>*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-lg-12">*/
/*             <hr />*/
/*             <h2 class="intro-text">*/
/*                 <strong>Contacter moi</strong>*/
/*             </h2>*/
/*             <hr />*/
/*         */
/* */
/*         <div class="row">*/
/*             <div class="box">*/
/* */
/*                 <form role="form" method="post" action="">*/
/*                     <div class="row">*/
/*                         <div class="form-group col-lg-4">*/
/*                             <label>Name</label>*/
/*                             <input type="text" class="form-control" id="nom" placeholder="Entrer votre nom">*/
/*                         </div>*/
/*                         <div class="form-group col-lg-4">*/
/*                             <label>Email Address</label>*/
/*                             <input type="email" class="form-control" id="email" placeholder="Entrer votre Email">*/
/*                         </div>*/
/*                         <div class="form-group col-lg-4">*/
/*                             <label>Phone Number</label>*/
/*                             <input type="integer" class="form-control" id="phone" placeholder="Entrer votre Numéro de téléphone">*/
/*                         </div>*/
/*                         <div class="clearfix"></div>*/
/*                         <div class="form-group col-lg-12">*/
/*                             <label>Message</label>*/
/*                             <textarea type="text" class="form-control" id="message" placeholder="Ecrivez votre message"></textarea>*/
/*                         </div>*/
/*                         <div class="form-group col-lg-12">*/
/*                             <input type="hidden" name="save" value="contact">*/
/* */
/*                             <button type="submit" class="btn btn-default">Submit</button>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*      </div>*/
/*     </div>*/
/* */
/* */
/* </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
