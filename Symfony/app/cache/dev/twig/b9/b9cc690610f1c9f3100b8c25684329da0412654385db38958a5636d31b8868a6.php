<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3facc6e7c147de9d50d22086c778623009b00ec2f0474cea3b37df94ec8eb244 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a36101cb4731fdfb083ae8070b22bb2ec58b30aa41053de7b48d637d3a0b0cba = $this->env->getExtension("native_profiler");
        $__internal_a36101cb4731fdfb083ae8070b22bb2ec58b30aa41053de7b48d637d3a0b0cba->enter($__internal_a36101cb4731fdfb083ae8070b22bb2ec58b30aa41053de7b48d637d3a0b0cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a36101cb4731fdfb083ae8070b22bb2ec58b30aa41053de7b48d637d3a0b0cba->leave($__internal_a36101cb4731fdfb083ae8070b22bb2ec58b30aa41053de7b48d637d3a0b0cba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee2481af62ee837e0a44c511306c05b1dde0073ac9aee986c1272ff45b54c36a = $this->env->getExtension("native_profiler");
        $__internal_ee2481af62ee837e0a44c511306c05b1dde0073ac9aee986c1272ff45b54c36a->enter($__internal_ee2481af62ee837e0a44c511306c05b1dde0073ac9aee986c1272ff45b54c36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ee2481af62ee837e0a44c511306c05b1dde0073ac9aee986c1272ff45b54c36a->leave($__internal_ee2481af62ee837e0a44c511306c05b1dde0073ac9aee986c1272ff45b54c36a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d00e948300362fdb1115be570a37141fcb916d13a7779891a3811fb737f63d17 = $this->env->getExtension("native_profiler");
        $__internal_d00e948300362fdb1115be570a37141fcb916d13a7779891a3811fb737f63d17->enter($__internal_d00e948300362fdb1115be570a37141fcb916d13a7779891a3811fb737f63d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d00e948300362fdb1115be570a37141fcb916d13a7779891a3811fb737f63d17->leave($__internal_d00e948300362fdb1115be570a37141fcb916d13a7779891a3811fb737f63d17_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
