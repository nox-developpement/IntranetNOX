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
        $__internal_eeb2df96250185b1ea374e555428caf9f2e9272425f234ef9fded19c53f378d8 = $this->env->getExtension("native_profiler");
        $__internal_eeb2df96250185b1ea374e555428caf9f2e9272425f234ef9fded19c53f378d8->enter($__internal_eeb2df96250185b1ea374e555428caf9f2e9272425f234ef9fded19c53f378d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_eeb2df96250185b1ea374e555428caf9f2e9272425f234ef9fded19c53f378d8->leave($__internal_eeb2df96250185b1ea374e555428caf9f2e9272425f234ef9fded19c53f378d8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eed4026a8efadbc937182d4f3bf0a8ac7bd328e8e7cb368100071791454b308a = $this->env->getExtension("native_profiler");
        $__internal_eed4026a8efadbc937182d4f3bf0a8ac7bd328e8e7cb368100071791454b308a->enter($__internal_eed4026a8efadbc937182d4f3bf0a8ac7bd328e8e7cb368100071791454b308a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_eed4026a8efadbc937182d4f3bf0a8ac7bd328e8e7cb368100071791454b308a->leave($__internal_eed4026a8efadbc937182d4f3bf0a8ac7bd328e8e7cb368100071791454b308a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_40d9dfd67a1c2eacdf4f7402d68abc3b012a076db231a35c5f297bde86e2ec8f = $this->env->getExtension("native_profiler");
        $__internal_40d9dfd67a1c2eacdf4f7402d68abc3b012a076db231a35c5f297bde86e2ec8f->enter($__internal_40d9dfd67a1c2eacdf4f7402d68abc3b012a076db231a35c5f297bde86e2ec8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_40d9dfd67a1c2eacdf4f7402d68abc3b012a076db231a35c5f297bde86e2ec8f->leave($__internal_40d9dfd67a1c2eacdf4f7402d68abc3b012a076db231a35c5f297bde86e2ec8f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f1e8b2907f5ce61b68fc8fc27280df7e5249cf775751854093322d4c3498f16 = $this->env->getExtension("native_profiler");
        $__internal_7f1e8b2907f5ce61b68fc8fc27280df7e5249cf775751854093322d4c3498f16->enter($__internal_7f1e8b2907f5ce61b68fc8fc27280df7e5249cf775751854093322d4c3498f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7f1e8b2907f5ce61b68fc8fc27280df7e5249cf775751854093322d4c3498f16->leave($__internal_7f1e8b2907f5ce61b68fc8fc27280df7e5249cf775751854093322d4c3498f16_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eccc14b227cf7ef497e2e1dd47550e7826ddc1effa4bf3b83362be6e5319a791 = $this->env->getExtension("native_profiler");
        $__internal_eccc14b227cf7ef497e2e1dd47550e7826ddc1effa4bf3b83362be6e5319a791->enter($__internal_eccc14b227cf7ef497e2e1dd47550e7826ddc1effa4bf3b83362be6e5319a791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eccc14b227cf7ef497e2e1dd47550e7826ddc1effa4bf3b83362be6e5319a791->leave($__internal_eccc14b227cf7ef497e2e1dd47550e7826ddc1effa4bf3b83362be6e5319a791_prof);

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
