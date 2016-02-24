<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_f32ee43fe4e7cc07418a15a273ce3a1f7420a21c684caac978561518d9a9e875 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f0f40ba332cd4e704389c180557ae3e44ca1cd35433dab2e10f7dba0e01d35cd = $this->env->getExtension("native_profiler");
        $__internal_f0f40ba332cd4e704389c180557ae3e44ca1cd35433dab2e10f7dba0e01d35cd->enter($__internal_f0f40ba332cd4e704389c180557ae3e44ca1cd35433dab2e10f7dba0e01d35cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0f40ba332cd4e704389c180557ae3e44ca1cd35433dab2e10f7dba0e01d35cd->leave($__internal_f0f40ba332cd4e704389c180557ae3e44ca1cd35433dab2e10f7dba0e01d35cd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_275afb2fe345c8a79f8b5876b098e9cef48524341fc8452e9db8604c89f90221 = $this->env->getExtension("native_profiler");
        $__internal_275afb2fe345c8a79f8b5876b098e9cef48524341fc8452e9db8604c89f90221->enter($__internal_275afb2fe345c8a79f8b5876b098e9cef48524341fc8452e9db8604c89f90221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_275afb2fe345c8a79f8b5876b098e9cef48524341fc8452e9db8604c89f90221->leave($__internal_275afb2fe345c8a79f8b5876b098e9cef48524341fc8452e9db8604c89f90221_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_df470cf816fda1ed1732b395be9e6da46f2957b7bea3e479d4f8cb8a168db699 = $this->env->getExtension("native_profiler");
        $__internal_df470cf816fda1ed1732b395be9e6da46f2957b7bea3e479d4f8cb8a168db699->enter($__internal_df470cf816fda1ed1732b395be9e6da46f2957b7bea3e479d4f8cb8a168db699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_df470cf816fda1ed1732b395be9e6da46f2957b7bea3e479d4f8cb8a168db699->leave($__internal_df470cf816fda1ed1732b395be9e6da46f2957b7bea3e479d4f8cb8a168db699_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_98b2f7d4fd7d240db68d4079d50ad1f8637df1966f0e6060080ea64a6d939096 = $this->env->getExtension("native_profiler");
        $__internal_98b2f7d4fd7d240db68d4079d50ad1f8637df1966f0e6060080ea64a6d939096->enter($__internal_98b2f7d4fd7d240db68d4079d50ad1f8637df1966f0e6060080ea64a6d939096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_98b2f7d4fd7d240db68d4079d50ad1f8637df1966f0e6060080ea64a6d939096->leave($__internal_98b2f7d4fd7d240db68d4079d50ad1f8637df1966f0e6060080ea64a6d939096_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
