<?php

/* AnnuaireBundle::layout.html.twig */
class __TwigTemplate_804fba3977e486a74bb1398ce21f957e28960c8d1b656469f14b52c071c77ec6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'logo' => array($this, 'block_logo'),
            'lienretour' => array($this, 'block_lienretour'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <!--[if IE]>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <![endif]-->
    <title>Free Responsive Admin Theme - ZONTAL</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/annuaire/assets/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- FONT AWESOME ICONS  -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/annuaire/assets/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- CUSTOM STYLE  -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/annuaire/assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>
<body>
<header>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                      ";
        // line 31
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            echo "Bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        }
        // line 32
        echo "                    &nbsp;
                    <a href =\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\" class=\"btn btn-sm\"><strong>Mon Compte </strong></a>
                    &nbsp;
                    <a href =\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-sm\"><strong>Déconnexion </strong></a>
                </div>

            </div>
        </div>
    </header>
    <!-- HEADER END-->
    ";
        // line 42
        $this->displayBlock('logo', $context, $blocks);
        // line 43
        echo "<!-- LOGO HEADER END-->

<section class=\"menu-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"navbar-collapse collapse \">
                    <ul id=\"menu-top\" class=\"nav navbar-nav navbar-right\">
                         ";
        // line 51
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo " 
                       ";
            // line 52
            $this->displayBlock('lienretour', $context, $blocks);
            // line 53
            echo "                       ";
        }
        // line 54
        echo "                        <!-- deconnection -->
                           
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- MENU SECTION END-->
";
        // line 65
        $this->displayBlock('container', $context, $blocks);
        // line 67
        echo "<!-- CONTENT-WRAPPER SECTION END-->
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                &copy;  2015  mkemiche | bigcreator@hotmail.fr 
            </div>

        </div>
    </div>
</footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/annuaire/assets/js/jquery-1.11.1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/annuaire/assets/js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/annuaire/assets/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/annuaire/assets/js/toastr.min.js"), "html", null, true);
        echo "\"></script>
     <!-- TOASTR STYLE -->
<script type=\"text/javascript\">
    \$(document).on('click', 'save-contact', function(evt){
        evt.preventDefault();
        toastr.success('Utilisateur ajouté avec success');
        //\$('#alerte').removeClass().addClass('alert alert-success').text('ceci est un success');
    })
     \$(document).on('click', 'save-service', function(evt){
        evt.preventDefault();
        toastr.success('le service est ajouté avec success');
        //\$('#alerte').removeClass().addClass('alert alert-success').text('ceci est un success');
    })
     \$(document).on('click', '.save-ressource', function(evt){
        evt.preventDefault();
        toastr.success('la ressource est ajoutée avec success');
        //\$('#alerte').removeClass().addClass('alert alert-success').text('ceci est un success');
    })
    
     \$(document).on('click', 'save-edit', function(evt){
        evt.preventDefault();
        toastr.success('les modification ont était effectuée avec success');
        //\$('#alerte').removeClass().addClass('alert alert-success').text('ceci est un success');
    })
    
    \$(document).on('click', 'delete', function(evt){
        evt.preventDefault();
        toastr.success('Operation effectuée avec succés');
        //\$('#alerte').removeClass().addClass('alert alert-success').text('ceci est un success');
    })
    
    \$(document).on('click', 'delete', function(evt){
        evt.preventDefault();
        toastr.error('Utilisateurs supprimé');
        //\$('#alerte').removeClass().addClass('alert alert-danger').text('ceci est un erreur');
    })

    </script>
</body>
</html>
";
    }

    // line 42
    public function block_logo($context, array $blocks = array())
    {
    }

    // line 52
    public function block_lienretour($context, array $blocks = array())
    {
        echo " ";
    }

    // line 65
    public function block_container($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AnnuaireBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 65,  201 => 52,  196 => 42,  151 => 85,  147 => 84,  142 => 82,  138 => 81,  122 => 67,  120 => 65,  107 => 54,  104 => 53,  102 => 52,  98 => 51,  88 => 43,  86 => 42,  76 => 35,  71 => 33,  68 => 32,  63 => 31,  46 => 17,  41 => 15,  36 => 13,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html xmlns="http://www.w3.org/1999/xhtml">*/
/* <head>*/
/*     <meta charset="utf-8" />*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />*/
/*     <meta name="description" content="" />*/
/*     <meta name="author" content="" />*/
/*     <!--[if IE]>*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*         <![endif]-->*/
/*     <title>Free Responsive Admin Theme - ZONTAL</title>*/
/*     <!-- BOOTSTRAP CORE STYLE  -->*/
/*     <link href="{{asset('bundles/annuaire/assets/css/bootstrap.css')}}" rel="stylesheet" />*/
/*     <!-- FONT AWESOME ICONS  -->*/
/*     <link href="{{asset('bundles/annuaire/assets/css/font-awesome.css')}}" rel="stylesheet" />*/
/*     <!-- CUSTOM STYLE  -->*/
/*     <link href="{{asset('bundles/annuaire/assets/css/style.css')}}" rel="stylesheet" />*/
/*      <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/* </head>*/
/* <body>*/
/* <header>*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                       {% if is_granted("ROLE_USER") or is_granted("ROLE_ADMIN") %}Bonjour {{ app.user.username }}{% endif %}*/
/*                     &nbsp;*/
/*                     <a href ="{{path('fos_user_profile_show')}}" class="btn btn-sm"><strong>Mon Compte </strong></a>*/
/*                     &nbsp;*/
/*                     <a href ="{{path('fos_user_security_logout')}}" class="btn btn-sm"><strong>Déconnexion </strong></a>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </header>*/
/*     <!-- HEADER END-->*/
/*     {%block logo %}{% endblock %}*/
/* <!-- LOGO HEADER END-->*/
/* */
/* <section class="menu-section">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="navbar-collapse collapse ">*/
/*                     <ul id="menu-top" class="nav navbar-nav navbar-right">*/
/*                          {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %} */
/*                        {% block lienretour %} {% endblock %}*/
/*                        {% endif %}*/
/*                         <!-- deconnection -->*/
/*                            */
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* <!-- MENU SECTION END-->*/
/* {% block container %}*/
/* {% endblock %}*/
/* <!-- CONTENT-WRAPPER SECTION END-->*/
/* <footer>*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 &copy;  2015  mkemiche | bigcreator@hotmail.fr */
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* </footer>*/
/*     <!-- FOOTER SECTION END-->*/
/*     <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->*/
/*     <!-- CORE JQUERY SCRIPTS -->*/
/*     <script src="{{asset('bundles/annuaire/assets/js/jquery-1.11.1.js')}}"></script>*/
/*     <script src="{{ asset('bundles/annuaire/assets/js/jquery-1.9.1.min.js')}}"></script>*/
/*     <!-- BOOTSTRAP SCRIPTS  -->*/
/*     <script src="{{asset('bundles/annuaire/assets/js/bootstrap.js')}}"></script>*/
/*     <script src="{{ asset('bundles/annuaire/assets/js/toastr.min.js')}}"></script>*/
/*      <!-- TOASTR STYLE -->*/
/* <script type="text/javascript">*/
/*     $(document).on('click', 'save-contact', function(evt){*/
/*         evt.preventDefault();*/
/*         toastr.success('Utilisateur ajouté avec success');*/
/*         //$('#alerte').removeClass().addClass('alert alert-success').text('ceci est un success');*/
/*     })*/
/*      $(document).on('click', 'save-service', function(evt){*/
/*         evt.preventDefault();*/
/*         toastr.success('le service est ajouté avec success');*/
/*         //$('#alerte').removeClass().addClass('alert alert-success').text('ceci est un success');*/
/*     })*/
/*      $(document).on('click', '.save-ressource', function(evt){*/
/*         evt.preventDefault();*/
/*         toastr.success('la ressource est ajoutée avec success');*/
/*         //$('#alerte').removeClass().addClass('alert alert-success').text('ceci est un success');*/
/*     })*/
/*     */
/*      $(document).on('click', 'save-edit', function(evt){*/
/*         evt.preventDefault();*/
/*         toastr.success('les modification ont était effectuée avec success');*/
/*         //$('#alerte').removeClass().addClass('alert alert-success').text('ceci est un success');*/
/*     })*/
/*     */
/*     $(document).on('click', 'delete', function(evt){*/
/*         evt.preventDefault();*/
/*         toastr.success('Operation effectuée avec succés');*/
/*         //$('#alerte').removeClass().addClass('alert alert-success').text('ceci est un success');*/
/*     })*/
/*     */
/*     $(document).on('click', 'delete', function(evt){*/
/*         evt.preventDefault();*/
/*         toastr.error('Utilisateurs supprimé');*/
/*         //$('#alerte').removeClass().addClass('alert alert-danger').text('ceci est un erreur');*/
/*     })*/
/* */
/*     </script>*/
/* </body>*/
/* </html>*/
/* */
