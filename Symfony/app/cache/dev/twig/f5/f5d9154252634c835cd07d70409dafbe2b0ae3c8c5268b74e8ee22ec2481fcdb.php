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
        $__internal_3d655e9a6851bc32da48cb034b8a30c8105c99fad460e3bc02c7c9bef7ecfc96 = $this->env->getExtension("native_profiler");
        $__internal_3d655e9a6851bc32da48cb034b8a30c8105c99fad460e3bc02c7c9bef7ecfc96->enter($__internal_3d655e9a6851bc32da48cb034b8a30c8105c99fad460e3bc02c7c9bef7ecfc96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_3d655e9a6851bc32da48cb034b8a30c8105c99fad460e3bc02c7c9bef7ecfc96->leave($__internal_3d655e9a6851bc32da48cb034b8a30c8105c99fad460e3bc02c7c9bef7ecfc96_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6927ba96f907ca905baffb29863afae34a82dda2b8e56bd4c6c9884e052720a6 = $this->env->getExtension("native_profiler");
        $__internal_6927ba96f907ca905baffb29863afae34a82dda2b8e56bd4c6c9884e052720a6->enter($__internal_6927ba96f907ca905baffb29863afae34a82dda2b8e56bd4c6c9884e052720a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6927ba96f907ca905baffb29863afae34a82dda2b8e56bd4c6c9884e052720a6->leave($__internal_6927ba96f907ca905baffb29863afae34a82dda2b8e56bd4c6c9884e052720a6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4d2ed126739ff5d884bee34dbc5913f464112f5fa819d50d1d434b76a82ace8d = $this->env->getExtension("native_profiler");
        $__internal_4d2ed126739ff5d884bee34dbc5913f464112f5fa819d50d1d434b76a82ace8d->enter($__internal_4d2ed126739ff5d884bee34dbc5913f464112f5fa819d50d1d434b76a82ace8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4d2ed126739ff5d884bee34dbc5913f464112f5fa819d50d1d434b76a82ace8d->leave($__internal_4d2ed126739ff5d884bee34dbc5913f464112f5fa819d50d1d434b76a82ace8d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a29b58a0d223423cd21d466d5784ff7afd0113e684f6bcca63d0648457de3a7 = $this->env->getExtension("native_profiler");
        $__internal_6a29b58a0d223423cd21d466d5784ff7afd0113e684f6bcca63d0648457de3a7->enter($__internal_6a29b58a0d223423cd21d466d5784ff7afd0113e684f6bcca63d0648457de3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6a29b58a0d223423cd21d466d5784ff7afd0113e684f6bcca63d0648457de3a7->leave($__internal_6a29b58a0d223423cd21d466d5784ff7afd0113e684f6bcca63d0648457de3a7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_55996503b73722c37ab039761a753ec17ec24da3c0fe01b6c968c29e68dea542 = $this->env->getExtension("native_profiler");
        $__internal_55996503b73722c37ab039761a753ec17ec24da3c0fe01b6c968c29e68dea542->enter($__internal_55996503b73722c37ab039761a753ec17ec24da3c0fe01b6c968c29e68dea542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_55996503b73722c37ab039761a753ec17ec24da3c0fe01b6c968c29e68dea542->leave($__internal_55996503b73722c37ab039761a753ec17ec24da3c0fe01b6c968c29e68dea542_prof);

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
