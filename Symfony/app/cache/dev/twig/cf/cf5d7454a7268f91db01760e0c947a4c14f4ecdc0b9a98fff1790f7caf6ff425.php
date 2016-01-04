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
        $__internal_8e2515d2eaed54a311fc6a83b2db9189bfddd84a3f8364890e6d21b0124a4f67 = $this->env->getExtension("native_profiler");
        $__internal_8e2515d2eaed54a311fc6a83b2db9189bfddd84a3f8364890e6d21b0124a4f67->enter($__internal_8e2515d2eaed54a311fc6a83b2db9189bfddd84a3f8364890e6d21b0124a4f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8e2515d2eaed54a311fc6a83b2db9189bfddd84a3f8364890e6d21b0124a4f67->leave($__internal_8e2515d2eaed54a311fc6a83b2db9189bfddd84a3f8364890e6d21b0124a4f67_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e90af28c796563cdb3a23ceb494eb18749c8cd4d6cb9050fd71a60e12e9f537e = $this->env->getExtension("native_profiler");
        $__internal_e90af28c796563cdb3a23ceb494eb18749c8cd4d6cb9050fd71a60e12e9f537e->enter($__internal_e90af28c796563cdb3a23ceb494eb18749c8cd4d6cb9050fd71a60e12e9f537e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e90af28c796563cdb3a23ceb494eb18749c8cd4d6cb9050fd71a60e12e9f537e->leave($__internal_e90af28c796563cdb3a23ceb494eb18749c8cd4d6cb9050fd71a60e12e9f537e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6ad3d16d7bac2c7a33404048cf98d8df3bd7d241da0d128eb25f17139bc048f1 = $this->env->getExtension("native_profiler");
        $__internal_6ad3d16d7bac2c7a33404048cf98d8df3bd7d241da0d128eb25f17139bc048f1->enter($__internal_6ad3d16d7bac2c7a33404048cf98d8df3bd7d241da0d128eb25f17139bc048f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6ad3d16d7bac2c7a33404048cf98d8df3bd7d241da0d128eb25f17139bc048f1->leave($__internal_6ad3d16d7bac2c7a33404048cf98d8df3bd7d241da0d128eb25f17139bc048f1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddf3965913b3f36c335bb456ac6893623ed853ce067db14cc992dba02fb92773 = $this->env->getExtension("native_profiler");
        $__internal_ddf3965913b3f36c335bb456ac6893623ed853ce067db14cc992dba02fb92773->enter($__internal_ddf3965913b3f36c335bb456ac6893623ed853ce067db14cc992dba02fb92773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ddf3965913b3f36c335bb456ac6893623ed853ce067db14cc992dba02fb92773->leave($__internal_ddf3965913b3f36c335bb456ac6893623ed853ce067db14cc992dba02fb92773_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4bd168482d3dfe5a00aa2c891a41bf4967a715b9b3c317f48105d31c3c34ef06 = $this->env->getExtension("native_profiler");
        $__internal_4bd168482d3dfe5a00aa2c891a41bf4967a715b9b3c317f48105d31c3c34ef06->enter($__internal_4bd168482d3dfe5a00aa2c891a41bf4967a715b9b3c317f48105d31c3c34ef06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4bd168482d3dfe5a00aa2c891a41bf4967a715b9b3c317f48105d31c3c34ef06->leave($__internal_4bd168482d3dfe5a00aa2c891a41bf4967a715b9b3c317f48105d31c3c34ef06_prof);

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
