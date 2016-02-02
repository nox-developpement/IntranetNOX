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
        $__internal_8e816d5c6e67f665955929c0bfaa342c6c11793823680d5ffccc003a5a077b61 = $this->env->getExtension("native_profiler");
        $__internal_8e816d5c6e67f665955929c0bfaa342c6c11793823680d5ffccc003a5a077b61->enter($__internal_8e816d5c6e67f665955929c0bfaa342c6c11793823680d5ffccc003a5a077b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8e816d5c6e67f665955929c0bfaa342c6c11793823680d5ffccc003a5a077b61->leave($__internal_8e816d5c6e67f665955929c0bfaa342c6c11793823680d5ffccc003a5a077b61_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e827ef6f9d58961223d01e35cd00158334f7d96b29ccd6de0f388b0d7f9703a2 = $this->env->getExtension("native_profiler");
        $__internal_e827ef6f9d58961223d01e35cd00158334f7d96b29ccd6de0f388b0d7f9703a2->enter($__internal_e827ef6f9d58961223d01e35cd00158334f7d96b29ccd6de0f388b0d7f9703a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e827ef6f9d58961223d01e35cd00158334f7d96b29ccd6de0f388b0d7f9703a2->leave($__internal_e827ef6f9d58961223d01e35cd00158334f7d96b29ccd6de0f388b0d7f9703a2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_564e08bc00384f9ad7799722932040f3dc304ce8251621851bcf8fedeb297db6 = $this->env->getExtension("native_profiler");
        $__internal_564e08bc00384f9ad7799722932040f3dc304ce8251621851bcf8fedeb297db6->enter($__internal_564e08bc00384f9ad7799722932040f3dc304ce8251621851bcf8fedeb297db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_564e08bc00384f9ad7799722932040f3dc304ce8251621851bcf8fedeb297db6->leave($__internal_564e08bc00384f9ad7799722932040f3dc304ce8251621851bcf8fedeb297db6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_881d302123865262a538b5d647141f37ad089c612957de4c82d1b0615392b12c = $this->env->getExtension("native_profiler");
        $__internal_881d302123865262a538b5d647141f37ad089c612957de4c82d1b0615392b12c->enter($__internal_881d302123865262a538b5d647141f37ad089c612957de4c82d1b0615392b12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_881d302123865262a538b5d647141f37ad089c612957de4c82d1b0615392b12c->leave($__internal_881d302123865262a538b5d647141f37ad089c612957de4c82d1b0615392b12c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9a1c25ea3d1869f78a6110f30234a5ec5390e4bd402b5dc5a2511da202c32337 = $this->env->getExtension("native_profiler");
        $__internal_9a1c25ea3d1869f78a6110f30234a5ec5390e4bd402b5dc5a2511da202c32337->enter($__internal_9a1c25ea3d1869f78a6110f30234a5ec5390e4bd402b5dc5a2511da202c32337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9a1c25ea3d1869f78a6110f30234a5ec5390e4bd402b5dc5a2511da202c32337->leave($__internal_9a1c25ea3d1869f78a6110f30234a5ec5390e4bd402b5dc5a2511da202c32337_prof);

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
