<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4723dd29439ebf00342c55bc728ded87871c17d3cf084e9272e3591f1e778a8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_a488f3b4f354d943793e881996399df1da37b8b46c79b6b47cea6e6d07df4ca6 = $this->env->getExtension("native_profiler");
        $__internal_a488f3b4f354d943793e881996399df1da37b8b46c79b6b47cea6e6d07df4ca6->enter($__internal_a488f3b4f354d943793e881996399df1da37b8b46c79b6b47cea6e6d07df4ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a488f3b4f354d943793e881996399df1da37b8b46c79b6b47cea6e6d07df4ca6->leave($__internal_a488f3b4f354d943793e881996399df1da37b8b46c79b6b47cea6e6d07df4ca6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_10a509b657bfa8119d5125a006508d67d24c8d52640f4663efdd3d026afddc1d = $this->env->getExtension("native_profiler");
        $__internal_10a509b657bfa8119d5125a006508d67d24c8d52640f4663efdd3d026afddc1d->enter($__internal_10a509b657bfa8119d5125a006508d67d24c8d52640f4663efdd3d026afddc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_10a509b657bfa8119d5125a006508d67d24c8d52640f4663efdd3d026afddc1d->leave($__internal_10a509b657bfa8119d5125a006508d67d24c8d52640f4663efdd3d026afddc1d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b272e430f57387c75262e91188251bfd598f9a07edf1a05a6ebe0aaa54c1b845 = $this->env->getExtension("native_profiler");
        $__internal_b272e430f57387c75262e91188251bfd598f9a07edf1a05a6ebe0aaa54c1b845->enter($__internal_b272e430f57387c75262e91188251bfd598f9a07edf1a05a6ebe0aaa54c1b845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b272e430f57387c75262e91188251bfd598f9a07edf1a05a6ebe0aaa54c1b845->leave($__internal_b272e430f57387c75262e91188251bfd598f9a07edf1a05a6ebe0aaa54c1b845_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3778febf5ae28f831e3e175293fa83470938f965d997ad063e4b58c19fd1227c = $this->env->getExtension("native_profiler");
        $__internal_3778febf5ae28f831e3e175293fa83470938f965d997ad063e4b58c19fd1227c->enter($__internal_3778febf5ae28f831e3e175293fa83470938f965d997ad063e4b58c19fd1227c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3778febf5ae28f831e3e175293fa83470938f965d997ad063e4b58c19fd1227c->leave($__internal_3778febf5ae28f831e3e175293fa83470938f965d997ad063e4b58c19fd1227c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
