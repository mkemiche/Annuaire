<?php

/* ::layout.html.twig */
class __TwigTemplate_6cc621992bade17ff3e62d9e88c4ba6457edf9c577bada94360d2d1e12913c36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    <title>Mon Annuaire d'entreprise</title>
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
            <a class=\"navbar-brand\" ></a>
        </div>

        <div class=\"left-div\">
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\"><i class=\"fa fa-user-plus login-icon\">
                </i> </a>
        </div>
    </div>
</div>
<!-- LOGO HEADER END-->

<!-- MENU SECTION END-->
";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "<!-- CONTENT-WRAPPER SECTION END-->
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                &copy; 2015 mkemiche  |   bigcreator@hotmail.fr
            </div>

        </div>
    </div>
</footer>
<!-- FOOTER SECTION END-->
<!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
<!-- CORE JQUERY SCRIPTS -->
<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/annuaire/assets/js/jquery-1.11.1.js"), "html", null, true);
        echo "\"></script>
<!-- BOOTSTRAP SCRIPTS  -->
<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/annuaire/assets/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 52,  108 => 69,  103 => 67,  87 => 53,  85 => 52,  74 => 44,  44 => 17,  39 => 15,  34 => 13,  20 => 1,);
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
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*     <![endif]-->*/
/*     <title>Mon Annuaire d'entreprise</title>*/
/*     <!-- BOOTSTRAP CORE STYLE  -->*/
/*     <link href="{{ asset('bundles/annuaire/assets/css/bootstrap.css') }}" rel="stylesheet" />*/
/*     <!-- FONT AWESOME ICONS  -->*/
/*     <link href="{{ asset('bundles/annuaire/assets/css/font-awesome.css')}}" rel="stylesheet" />*/
/*     <!-- CUSTOM STYLE  -->*/
/*     <link href="{{ asset('bundles/annuaire/assets/css/style.css')}}" rel="stylesheet" />*/
/*     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* <body>*/
/* <header>*/
/*     <div class="container">*/
/*         */
/*     </div>*/
/* </header>*/
/* <!-- HEADER END-->*/
/* <div class="navbar navbar-inverse set-radius-zero">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" ></a>*/
/*         </div>*/
/* */
/*         <div class="left-div">*/
/*             <a href="{{ path('fos_user_registration_register') }}"><i class="fa fa-user-plus login-icon">*/
/*                 </i> </a>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <!-- LOGO HEADER END-->*/
/* */
/* <!-- MENU SECTION END-->*/
/* {% block body %}{% endblock %}*/
/* <!-- CONTENT-WRAPPER SECTION END-->*/
/* <footer>*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 &copy; 2015 mkemiche  |   bigcreator@hotmail.fr*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* <!-- FOOTER SECTION END-->*/
/* <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->*/
/* <!-- CORE JQUERY SCRIPTS -->*/
/* <script src="{{ asset('bundles/annuaire/assets/js/jquery-1.11.1.js')}}"></script>*/
/* <!-- BOOTSTRAP SCRIPTS  -->*/
/* <script src="{{ asset('bundles/annuaire/assets/js/bootstrap.js')}}"></script>*/
/* </body>*/
/* </html>*/
/* */
