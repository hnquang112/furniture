<?php

/* /Applications/XAMPP/xamppfiles/htdocs/hello-october/themes/martin-flex/partials/site-main.htm */
class __TwigTemplate_3bac5ccfe68d97fca70edafd948666036c5cbc8e6a31b3e47df5c43742787c72 extends Twig_Template
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
        echo "<div class=\"site-main\" id=\"sTop\">
    ";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site-header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site-slider"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/XAMPP/xamppfiles/htdocs/hello-october/themes/martin-flex/partials/site-main.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="site-main" id="sTop">*/
/*     {% partial 'site-header' %}*/
/*     {% partial 'site-slider' %}*/
/* </div>*/
