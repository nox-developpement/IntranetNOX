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
        $__internal_c78d3777a6aae65de26611b014a8704f20ce0071bb11454debffccaeb2f79f75 = $this->env->getExtension("native_profiler");
        $__internal_c78d3777a6aae65de26611b014a8704f20ce0071bb11454debffccaeb2f79f75->enter($__internal_c78d3777a6aae65de26611b014a8704f20ce0071bb11454debffccaeb2f79f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c78d3777a6aae65de26611b014a8704f20ce0071bb11454debffccaeb2f79f75->leave($__internal_c78d3777a6aae65de26611b014a8704f20ce0071bb11454debffccaeb2f79f75_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d43eb00f0c31806758b203a69d22132afb978859b84a1120009efb46552e738b = $this->env->getExtension("native_profiler");
        $__internal_d43eb00f0c31806758b203a69d22132afb978859b84a1120009efb46552e738b->enter($__internal_d43eb00f0c31806758b203a69d22132afb978859b84a1120009efb46552e738b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d43eb00f0c31806758b203a69d22132afb978859b84a1120009efb46552e738b->leave($__internal_d43eb00f0c31806758b203a69d22132afb978859b84a1120009efb46552e738b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_811cd8b19331689c459e4ae4315f805f0207bf9b8af62272f86c3c34332c5835 = $this->env->getExtension("native_profiler");
        $__internal_811cd8b19331689c459e4ae4315f805f0207bf9b8af62272f86c3c34332c5835->enter($__internal_811cd8b19331689c459e4ae4315f805f0207bf9b8af62272f86c3c34332c5835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_811cd8b19331689c459e4ae4315f805f0207bf9b8af62272f86c3c34332c5835->leave($__internal_811cd8b19331689c459e4ae4315f805f0207bf9b8af62272f86c3c34332c5835_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3812e31df9b19b4e432e105657fa7eafae22957b764924b9625bbeb84b34111c = $this->env->getExtension("native_profiler");
        $__internal_3812e31df9b19b4e432e105657fa7eafae22957b764924b9625bbeb84b34111c->enter($__internal_3812e31df9b19b4e432e105657fa7eafae22957b764924b9625bbeb84b34111c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3812e31df9b19b4e432e105657fa7eafae22957b764924b9625bbeb84b34111c->leave($__internal_3812e31df9b19b4e432e105657fa7eafae22957b764924b9625bbeb84b34111c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b89450713b6f3ca38aa7246002871862c34892f74fedab7c35be28fc0cc9b4dc = $this->env->getExtension("native_profiler");
        $__internal_b89450713b6f3ca38aa7246002871862c34892f74fedab7c35be28fc0cc9b4dc->enter($__internal_b89450713b6f3ca38aa7246002871862c34892f74fedab7c35be28fc0cc9b4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b89450713b6f3ca38aa7246002871862c34892f74fedab7c35be28fc0cc9b4dc->leave($__internal_b89450713b6f3ca38aa7246002871862c34892f74fedab7c35be28fc0cc9b4dc_prof);

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
