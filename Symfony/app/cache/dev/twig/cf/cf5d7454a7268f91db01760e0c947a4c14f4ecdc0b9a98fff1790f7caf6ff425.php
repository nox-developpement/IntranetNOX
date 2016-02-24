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
        $__internal_32e9ded86a4a94fbb71ecf15cba03463b4fead1e76b49ede103ffbe6bca19065 = $this->env->getExtension("native_profiler");
        $__internal_32e9ded86a4a94fbb71ecf15cba03463b4fead1e76b49ede103ffbe6bca19065->enter($__internal_32e9ded86a4a94fbb71ecf15cba03463b4fead1e76b49ede103ffbe6bca19065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_32e9ded86a4a94fbb71ecf15cba03463b4fead1e76b49ede103ffbe6bca19065->leave($__internal_32e9ded86a4a94fbb71ecf15cba03463b4fead1e76b49ede103ffbe6bca19065_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0526d95bbdcba2425b0264d79fcac66546d0e3c6503895418760e4cca39be2b7 = $this->env->getExtension("native_profiler");
        $__internal_0526d95bbdcba2425b0264d79fcac66546d0e3c6503895418760e4cca39be2b7->enter($__internal_0526d95bbdcba2425b0264d79fcac66546d0e3c6503895418760e4cca39be2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0526d95bbdcba2425b0264d79fcac66546d0e3c6503895418760e4cca39be2b7->leave($__internal_0526d95bbdcba2425b0264d79fcac66546d0e3c6503895418760e4cca39be2b7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d3600473dba34088e9a73c69057fe80967a3bc83420873d9248ee58e211fcae2 = $this->env->getExtension("native_profiler");
        $__internal_d3600473dba34088e9a73c69057fe80967a3bc83420873d9248ee58e211fcae2->enter($__internal_d3600473dba34088e9a73c69057fe80967a3bc83420873d9248ee58e211fcae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d3600473dba34088e9a73c69057fe80967a3bc83420873d9248ee58e211fcae2->leave($__internal_d3600473dba34088e9a73c69057fe80967a3bc83420873d9248ee58e211fcae2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0082985b6cc923e6879643760c43d35a8713e75006a85089710c57da530337e = $this->env->getExtension("native_profiler");
        $__internal_f0082985b6cc923e6879643760c43d35a8713e75006a85089710c57da530337e->enter($__internal_f0082985b6cc923e6879643760c43d35a8713e75006a85089710c57da530337e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f0082985b6cc923e6879643760c43d35a8713e75006a85089710c57da530337e->leave($__internal_f0082985b6cc923e6879643760c43d35a8713e75006a85089710c57da530337e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_05966008312018eb6e2fb543168f24a00fd364854bc5bad26c4c65fd872150b2 = $this->env->getExtension("native_profiler");
        $__internal_05966008312018eb6e2fb543168f24a00fd364854bc5bad26c4c65fd872150b2->enter($__internal_05966008312018eb6e2fb543168f24a00fd364854bc5bad26c4c65fd872150b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_05966008312018eb6e2fb543168f24a00fd364854bc5bad26c4c65fd872150b2->leave($__internal_05966008312018eb6e2fb543168f24a00fd364854bc5bad26c4c65fd872150b2_prof);

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
