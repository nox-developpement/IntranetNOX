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
        $__internal_4c9036f16b353f801b7e09707c9c13ea709ab759cae43db778310f6535825162 = $this->env->getExtension("native_profiler");
        $__internal_4c9036f16b353f801b7e09707c9c13ea709ab759cae43db778310f6535825162->enter($__internal_4c9036f16b353f801b7e09707c9c13ea709ab759cae43db778310f6535825162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_4c9036f16b353f801b7e09707c9c13ea709ab759cae43db778310f6535825162->leave($__internal_4c9036f16b353f801b7e09707c9c13ea709ab759cae43db778310f6535825162_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_420c727d4bec8587dc60d6529f3e5cd9fd4c7f6361aa3963ba8fbeed36e471a6 = $this->env->getExtension("native_profiler");
        $__internal_420c727d4bec8587dc60d6529f3e5cd9fd4c7f6361aa3963ba8fbeed36e471a6->enter($__internal_420c727d4bec8587dc60d6529f3e5cd9fd4c7f6361aa3963ba8fbeed36e471a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_420c727d4bec8587dc60d6529f3e5cd9fd4c7f6361aa3963ba8fbeed36e471a6->leave($__internal_420c727d4bec8587dc60d6529f3e5cd9fd4c7f6361aa3963ba8fbeed36e471a6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_029fd498abe86c28ecdacd7b948f6e64a55b423a5b67decd614f756e7dc52336 = $this->env->getExtension("native_profiler");
        $__internal_029fd498abe86c28ecdacd7b948f6e64a55b423a5b67decd614f756e7dc52336->enter($__internal_029fd498abe86c28ecdacd7b948f6e64a55b423a5b67decd614f756e7dc52336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_029fd498abe86c28ecdacd7b948f6e64a55b423a5b67decd614f756e7dc52336->leave($__internal_029fd498abe86c28ecdacd7b948f6e64a55b423a5b67decd614f756e7dc52336_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_106987c9ce0a727b8cca638a52d6e58e18bcf774efdbb07abd671b65c23648cf = $this->env->getExtension("native_profiler");
        $__internal_106987c9ce0a727b8cca638a52d6e58e18bcf774efdbb07abd671b65c23648cf->enter($__internal_106987c9ce0a727b8cca638a52d6e58e18bcf774efdbb07abd671b65c23648cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_106987c9ce0a727b8cca638a52d6e58e18bcf774efdbb07abd671b65c23648cf->leave($__internal_106987c9ce0a727b8cca638a52d6e58e18bcf774efdbb07abd671b65c23648cf_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_08354eefbc7df52d8be3ff21ec6428fb8fd519cb07cf62cbfa4fd26b66fd42d2 = $this->env->getExtension("native_profiler");
        $__internal_08354eefbc7df52d8be3ff21ec6428fb8fd519cb07cf62cbfa4fd26b66fd42d2->enter($__internal_08354eefbc7df52d8be3ff21ec6428fb8fd519cb07cf62cbfa4fd26b66fd42d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_08354eefbc7df52d8be3ff21ec6428fb8fd519cb07cf62cbfa4fd26b66fd42d2->leave($__internal_08354eefbc7df52d8be3ff21ec6428fb8fd519cb07cf62cbfa4fd26b66fd42d2_prof);

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
