<?php

/* AnnuaireBundle::layout.html.twig */
class __TwigTemplate_b79b262d36d1b142522c55053de9c577441c779c4b2d4f15d5c07493e0fe4f0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'lienRecherche' => array($this, 'block_lienRecherche'),
            'lienRessources' => array($this, 'block_lienRessources'),
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
                    <strong>Email: </strong>info@yourdomain.com
                    &nbsp;&nbsp;
                    <strong>Support: </strong>+90-897-678-44
                </div>

            </div>
        </div>
    </header>
    <!-- HEADER END-->
    <div class=\"navbar navbar-inverse set-radius-zero\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">
                
                </a>

            </div>

            <div class=\"left-div\">
                <div class=\"user-settings-wrapper\">
                    <ul class=\"nav\">

                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\">
                                <span class=\"glyphicon glyphicon-user\" style=\"font-size: 25px;\"></span>
                            </a>
                            <div class=\"dropdown-menu dropdown-settings\">
                                <div class=\"media\">
                                    <a class=\"media-left\" href=\"#\">
                                        <!-- inserer image user -->
                                        <img src=\"assets/img/64-64.jpg\" alt=\"\" class=\"img-rounded\" />
                                    </a>
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Jhon Deo Alex </h4>
                                        <h5>Developer & Designer</h5>

                                    </div>
                                </div>
                                <hr />
                                <h5><strong>Personal Bio : </strong></h5>
                                Anim pariatur cliche reprehen derit.
                                <hr />
                                <a href=\"#\" class=\"btn btn-info btn-sm\">Full Profile</a>&nbsp; <a href=\"login.html\" class=\"btn btn-danger btn-sm\">Logout</a>

                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>

<!-- LOGO HEADER END-->
<section class=\"menu-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"navbar-collapse collapse \">
                    <ul id=\"menu-top\" class=\"nav navbar-nav navbar-right\">
                        <li><a  ";
        // line 97
        $this->displayBlock('lienRecherche', $context, $blocks);
        echo " href=\"";
        echo $this->env->getExtension('routing')->getPath("mon_annuaire_recherche");
        echo "\">Accueil</a></li>
                        <li><a  ";
        // line 98
        $this->displayBlock('lienRessources', $context, $blocks);
        echo " href=\"";
        echo $this->env->getExtension('routing')->getPath("mon_annuaire_ressource");
        echo "\">Ressources</a></li>
                        <!-- deconnection -->
                           
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- MENU SECTION END-->
";
        // line 109
        $this->displayBlock('container', $context, $blocks);
        // line 110
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
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/annuaire/assets/js/jquery-1.11.1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/annuaire/assets/js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/annuaire/assets/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 128
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

    // line 97
    public function block_lienRecherche($context, array $blocks = array())
    {
    }

    // line 98
    public function block_lienRessources($context, array $blocks = array())
    {
    }

    // line 109
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
        return array (  237 => 109,  232 => 98,  227 => 97,  182 => 128,  178 => 127,  173 => 125,  169 => 124,  153 => 110,  151 => 109,  135 => 98,  129 => 97,  46 => 17,  41 => 15,  36 => 13,  22 => 1,);
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
/*                     <strong>Email: </strong>info@yourdomain.com*/
/*                     &nbsp;&nbsp;*/
/*                     <strong>Support: </strong>+90-897-678-44*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </header>*/
/*     <!-- HEADER END-->*/
/*     <div class="navbar navbar-inverse set-radius-zero">*/
/*         <div class="container">*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="index.html">*/
/*                 */
/*                 </a>*/
/* */
/*             </div>*/
/* */
/*             <div class="left-div">*/
/*                 <div class="user-settings-wrapper">*/
/*                     <ul class="nav">*/
/* */
/*                         <li class="dropdown">*/
/*                             <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">*/
/*                                 <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>*/
/*                             </a>*/
/*                             <div class="dropdown-menu dropdown-settings">*/
/*                                 <div class="media">*/
/*                                     <a class="media-left" href="#">*/
/*                                         <!-- inserer image user -->*/
/*                                         <img src="assets/img/64-64.jpg" alt="" class="img-rounded" />*/
/*                                     </a>*/
/*                                     <div class="media-body">*/
/*                                         <h4 class="media-heading">Jhon Deo Alex </h4>*/
/*                                         <h5>Developer & Designer</h5>*/
/* */
/*                                     </div>*/
/*                                 </div>*/
/*                                 <hr />*/
/*                                 <h5><strong>Personal Bio : </strong></h5>*/
/*                                 Anim pariatur cliche reprehen derit.*/
/*                                 <hr />*/
/*                                 <a href="#" class="btn btn-info btn-sm">Full Profile</a>&nbsp; <a href="login.html" class="btn btn-danger btn-sm">Logout</a>*/
/* */
/*                             </div>*/
/*                         </li>*/
/* */
/* */
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* <!-- LOGO HEADER END-->*/
/* <section class="menu-section">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="navbar-collapse collapse ">*/
/*                     <ul id="menu-top" class="nav navbar-nav navbar-right">*/
/*                         <li><a  {% block lienRecherche %}{% endblock %} href="{{ path('mon_annuaire_recherche') }}">Accueil</a></li>*/
/*                         <li><a  {% block lienRessources %}{% endblock %} href="{{ path('mon_annuaire_ressource') }}">Ressources</a></li>*/
/*                         <!-- deconnection -->*/
/*                            */
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* </section>*/
/* <!-- MENU SECTION END-->*/
/* {% block container %}{% endblock %}*/
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
