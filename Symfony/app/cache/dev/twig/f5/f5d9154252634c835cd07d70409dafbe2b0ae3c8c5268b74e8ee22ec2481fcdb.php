<?php

/* ::base.html.twig */
class __TwigTemplate_0c1529f478f93e6b526bdf7d573f5e5976af089e75bc2cb28579fc1901cbce55 extends Twig_Template
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
        $__internal_1911a38f171adb8456147600656829e0cac30622e7280ff1f8e39335f630bc9e = $this->env->getExtension("native_profiler");
        $__internal_1911a38f171adb8456147600656829e0cac30622e7280ff1f8e39335f630bc9e->enter($__internal_1911a38f171adb8456147600656829e0cac30622e7280ff1f8e39335f630bc9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_1911a38f171adb8456147600656829e0cac30622e7280ff1f8e39335f630bc9e->leave($__internal_1911a38f171adb8456147600656829e0cac30622e7280ff1f8e39335f630bc9e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1b277da353d11329f5d4ccac4655fda52984c796fba786b3823a7dd3c5ce389 = $this->env->getExtension("native_profiler");
        $__internal_f1b277da353d11329f5d4ccac4655fda52984c796fba786b3823a7dd3c5ce389->enter($__internal_f1b277da353d11329f5d4ccac4655fda52984c796fba786b3823a7dd3c5ce389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f1b277da353d11329f5d4ccac4655fda52984c796fba786b3823a7dd3c5ce389->leave($__internal_f1b277da353d11329f5d4ccac4655fda52984c796fba786b3823a7dd3c5ce389_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8ee33e2703424d7cc0e3fe6e7aa92b99aaee9d5cb7db144be079295f4135a9b1 = $this->env->getExtension("native_profiler");
        $__internal_8ee33e2703424d7cc0e3fe6e7aa92b99aaee9d5cb7db144be079295f4135a9b1->enter($__internal_8ee33e2703424d7cc0e3fe6e7aa92b99aaee9d5cb7db144be079295f4135a9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8ee33e2703424d7cc0e3fe6e7aa92b99aaee9d5cb7db144be079295f4135a9b1->leave($__internal_8ee33e2703424d7cc0e3fe6e7aa92b99aaee9d5cb7db144be079295f4135a9b1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_85602353c9120b96bb17d7632f40882ebda2c78f97de9d21b4c99582ad31f636 = $this->env->getExtension("native_profiler");
        $__internal_85602353c9120b96bb17d7632f40882ebda2c78f97de9d21b4c99582ad31f636->enter($__internal_85602353c9120b96bb17d7632f40882ebda2c78f97de9d21b4c99582ad31f636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_85602353c9120b96bb17d7632f40882ebda2c78f97de9d21b4c99582ad31f636->leave($__internal_85602353c9120b96bb17d7632f40882ebda2c78f97de9d21b4c99582ad31f636_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_299ee88d78e53d9e40d71e93c159dcf45c7a89bc10e7403c08470f61514b33cb = $this->env->getExtension("native_profiler");
        $__internal_299ee88d78e53d9e40d71e93c159dcf45c7a89bc10e7403c08470f61514b33cb->enter($__internal_299ee88d78e53d9e40d71e93c159dcf45c7a89bc10e7403c08470f61514b33cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_299ee88d78e53d9e40d71e93c159dcf45c7a89bc10e7403c08470f61514b33cb->leave($__internal_299ee88d78e53d9e40d71e93c159dcf45c7a89bc10e7403c08470f61514b33cb_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
