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
        $__internal_8745922c9b2f8fc8212bd5b2811891f09aeec389456e90b03d81174506c7dd5c = $this->env->getExtension("native_profiler");
        $__internal_8745922c9b2f8fc8212bd5b2811891f09aeec389456e90b03d81174506c7dd5c->enter($__internal_8745922c9b2f8fc8212bd5b2811891f09aeec389456e90b03d81174506c7dd5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8745922c9b2f8fc8212bd5b2811891f09aeec389456e90b03d81174506c7dd5c->leave($__internal_8745922c9b2f8fc8212bd5b2811891f09aeec389456e90b03d81174506c7dd5c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4bf953049171875a2833e6621837f230bea5d3f31e833d1ac96437cf2377a858 = $this->env->getExtension("native_profiler");
        $__internal_4bf953049171875a2833e6621837f230bea5d3f31e833d1ac96437cf2377a858->enter($__internal_4bf953049171875a2833e6621837f230bea5d3f31e833d1ac96437cf2377a858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4bf953049171875a2833e6621837f230bea5d3f31e833d1ac96437cf2377a858->leave($__internal_4bf953049171875a2833e6621837f230bea5d3f31e833d1ac96437cf2377a858_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_48e73f16dc6c07f10d152a1920bfb5f5722709ca4c575af5e9951497277bceb6 = $this->env->getExtension("native_profiler");
        $__internal_48e73f16dc6c07f10d152a1920bfb5f5722709ca4c575af5e9951497277bceb6->enter($__internal_48e73f16dc6c07f10d152a1920bfb5f5722709ca4c575af5e9951497277bceb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_48e73f16dc6c07f10d152a1920bfb5f5722709ca4c575af5e9951497277bceb6->leave($__internal_48e73f16dc6c07f10d152a1920bfb5f5722709ca4c575af5e9951497277bceb6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_25ceee80b9acfcee83c6b126c74ab311e648c9e4a8d7e92d11d0f72030d67023 = $this->env->getExtension("native_profiler");
        $__internal_25ceee80b9acfcee83c6b126c74ab311e648c9e4a8d7e92d11d0f72030d67023->enter($__internal_25ceee80b9acfcee83c6b126c74ab311e648c9e4a8d7e92d11d0f72030d67023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_25ceee80b9acfcee83c6b126c74ab311e648c9e4a8d7e92d11d0f72030d67023->leave($__internal_25ceee80b9acfcee83c6b126c74ab311e648c9e4a8d7e92d11d0f72030d67023_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b5de00d4cb49c9bca0f09127a2e82f7332d74be29d81374b5502f8fa5d4b3922 = $this->env->getExtension("native_profiler");
        $__internal_b5de00d4cb49c9bca0f09127a2e82f7332d74be29d81374b5502f8fa5d4b3922->enter($__internal_b5de00d4cb49c9bca0f09127a2e82f7332d74be29d81374b5502f8fa5d4b3922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b5de00d4cb49c9bca0f09127a2e82f7332d74be29d81374b5502f8fa5d4b3922->leave($__internal_b5de00d4cb49c9bca0f09127a2e82f7332d74be29d81374b5502f8fa5d4b3922_prof);

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
