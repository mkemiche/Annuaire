<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_971a91c1831f8fee94edb07683af0a192d25f652e26b7768619969007a4044bb extends Twig_Template
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
        if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
        if ($this->getAttribute($_trace_, "function", array())) {
            // line 2
            echo "    at ";
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            echo (($this->getAttribute($_trace_, "class", array()) . $this->getAttribute($_trace_, "type", array())) . $this->getAttribute($_trace_, "function", array()));
            echo "(";
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            echo $this->env->getExtension('code')->formatArgsAsText($this->getAttribute($_trace_, "args", array()));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
        if (($this->getAttribute($_trace_, "file", array(), "any", true, true) && $this->getAttribute($_trace_, "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            echo $this->getAttribute($_trace_, "file", array());
            echo " line ";
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            echo $this->getAttribute($_trace_, "line", array());
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  36 => 6,  32 => 4,  22 => 2,  19 => 1,);
    }
}
/* {% if trace.function %}*/
/*     at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args_as_text }})*/
/* {% else %}*/
/*     at n/a*/
/* {% endif %}*/
/* {% if trace.file is defined and trace.line is defined %}*/
/*         in {{ trace.file }} line {{ trace.line }}*/
/* {% endif %}*/
/* */
