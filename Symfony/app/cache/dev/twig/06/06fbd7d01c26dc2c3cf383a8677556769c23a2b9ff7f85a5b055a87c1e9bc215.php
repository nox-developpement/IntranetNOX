<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_54abb0059a47092c017acdf7a0df3856dc6f86c956ac3926efcbc5fb87dd036c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38a3f47864d6ef1218864c26f579047b29dcc38745971a5423b0f28c127a9785 = $this->env->getExtension("native_profiler");
        $__internal_38a3f47864d6ef1218864c26f579047b29dcc38745971a5423b0f28c127a9785->enter($__internal_38a3f47864d6ef1218864c26f579047b29dcc38745971a5423b0f28c127a9785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38a3f47864d6ef1218864c26f579047b29dcc38745971a5423b0f28c127a9785->leave($__internal_38a3f47864d6ef1218864c26f579047b29dcc38745971a5423b0f28c127a9785_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_30ae3f8c187e4fd64bc1ecdf370923b94a38a115d7545de0cf8e9b036f49e380 = $this->env->getExtension("native_profiler");
        $__internal_30ae3f8c187e4fd64bc1ecdf370923b94a38a115d7545de0cf8e9b036f49e380->enter($__internal_30ae3f8c187e4fd64bc1ecdf370923b94a38a115d7545de0cf8e9b036f49e380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_30ae3f8c187e4fd64bc1ecdf370923b94a38a115d7545de0cf8e9b036f49e380->leave($__internal_30ae3f8c187e4fd64bc1ecdf370923b94a38a115d7545de0cf8e9b036f49e380_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2d8abe99e13920fc97850b7b417f5e3dc8def0a80b301d3e663ea8fa0a44cf16 = $this->env->getExtension("native_profiler");
        $__internal_2d8abe99e13920fc97850b7b417f5e3dc8def0a80b301d3e663ea8fa0a44cf16->enter($__internal_2d8abe99e13920fc97850b7b417f5e3dc8def0a80b301d3e663ea8fa0a44cf16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2d8abe99e13920fc97850b7b417f5e3dc8def0a80b301d3e663ea8fa0a44cf16->leave($__internal_2d8abe99e13920fc97850b7b417f5e3dc8def0a80b301d3e663ea8fa0a44cf16_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aa07d006183459f0d138b4ee58159107718934c3dc1694fabb379cf6faa74185 = $this->env->getExtension("native_profiler");
        $__internal_aa07d006183459f0d138b4ee58159107718934c3dc1694fabb379cf6faa74185->enter($__internal_aa07d006183459f0d138b4ee58159107718934c3dc1694fabb379cf6faa74185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aa07d006183459f0d138b4ee58159107718934c3dc1694fabb379cf6faa74185->leave($__internal_aa07d006183459f0d138b4ee58159107718934c3dc1694fabb379cf6faa74185_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
