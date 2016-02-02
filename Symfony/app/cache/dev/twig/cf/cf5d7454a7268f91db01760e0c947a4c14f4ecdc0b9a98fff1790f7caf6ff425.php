<?php

/* base.html.twig */
class __TwigTemplate_782a87861ede5abc0dcfdc41a0f3496a0da88663f80ce725e5df7667672374e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_974a48a86a2af322e8278270332939ae1248bcfb6679b4c445ece2bb9d868f39 = $this->env->getExtension("native_profiler");
        $__internal_974a48a86a2af322e8278270332939ae1248bcfb6679b4c445ece2bb9d868f39->enter($__internal_974a48a86a2af322e8278270332939ae1248bcfb6679b4c445ece2bb9d868f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_974a48a86a2af322e8278270332939ae1248bcfb6679b4c445ece2bb9d868f39->leave($__internal_974a48a86a2af322e8278270332939ae1248bcfb6679b4c445ece2bb9d868f39_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0a4d1b036dd5521253ef148aefea5c1790362fd89865cf8d6df8e024d2fd7bb = $this->env->getExtension("native_profiler");
        $__internal_e0a4d1b036dd5521253ef148aefea5c1790362fd89865cf8d6df8e024d2fd7bb->enter($__internal_e0a4d1b036dd5521253ef148aefea5c1790362fd89865cf8d6df8e024d2fd7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e0a4d1b036dd5521253ef148aefea5c1790362fd89865cf8d6df8e024d2fd7bb->leave($__internal_e0a4d1b036dd5521253ef148aefea5c1790362fd89865cf8d6df8e024d2fd7bb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_487650777be4047b2aa8ee5e0c902cbc6c2568d9f2211c00404ee1ec664d353d = $this->env->getExtension("native_profiler");
        $__internal_487650777be4047b2aa8ee5e0c902cbc6c2568d9f2211c00404ee1ec664d353d->enter($__internal_487650777be4047b2aa8ee5e0c902cbc6c2568d9f2211c00404ee1ec664d353d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_487650777be4047b2aa8ee5e0c902cbc6c2568d9f2211c00404ee1ec664d353d->leave($__internal_487650777be4047b2aa8ee5e0c902cbc6c2568d9f2211c00404ee1ec664d353d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac414897e57d861fc01f1a9d66e29d57704fdfe44af4e98ff06e9e4d7fd2c065 = $this->env->getExtension("native_profiler");
        $__internal_ac414897e57d861fc01f1a9d66e29d57704fdfe44af4e98ff06e9e4d7fd2c065->enter($__internal_ac414897e57d861fc01f1a9d66e29d57704fdfe44af4e98ff06e9e4d7fd2c065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ac414897e57d861fc01f1a9d66e29d57704fdfe44af4e98ff06e9e4d7fd2c065->leave($__internal_ac414897e57d861fc01f1a9d66e29d57704fdfe44af4e98ff06e9e4d7fd2c065_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2b4c1635d6fb87ea52b389f9701f8d4094a752f63434c4bf877e61c618d3c5d2 = $this->env->getExtension("native_profiler");
        $__internal_2b4c1635d6fb87ea52b389f9701f8d4094a752f63434c4bf877e61c618d3c5d2->enter($__internal_2b4c1635d6fb87ea52b389f9701f8d4094a752f63434c4bf877e61c618d3c5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2b4c1635d6fb87ea52b389f9701f8d4094a752f63434c4bf877e61c618d3c5d2->leave($__internal_2b4c1635d6fb87ea52b389f9701f8d4094a752f63434c4bf877e61c618d3c5d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
