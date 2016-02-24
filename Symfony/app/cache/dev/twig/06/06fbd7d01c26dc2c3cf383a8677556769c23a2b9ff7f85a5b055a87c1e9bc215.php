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
        $__internal_a23ece539af18de7259acccbbce5d1a1da9abb4f52ca43951397e2b2728e7c6c = $this->env->getExtension("native_profiler");
        $__internal_a23ece539af18de7259acccbbce5d1a1da9abb4f52ca43951397e2b2728e7c6c->enter($__internal_a23ece539af18de7259acccbbce5d1a1da9abb4f52ca43951397e2b2728e7c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a23ece539af18de7259acccbbce5d1a1da9abb4f52ca43951397e2b2728e7c6c->leave($__internal_a23ece539af18de7259acccbbce5d1a1da9abb4f52ca43951397e2b2728e7c6c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_68fbd4902076f4afbadebc9906e500a2f76479d6e3bb6b7770f133a98547d50e = $this->env->getExtension("native_profiler");
        $__internal_68fbd4902076f4afbadebc9906e500a2f76479d6e3bb6b7770f133a98547d50e->enter($__internal_68fbd4902076f4afbadebc9906e500a2f76479d6e3bb6b7770f133a98547d50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_68fbd4902076f4afbadebc9906e500a2f76479d6e3bb6b7770f133a98547d50e->leave($__internal_68fbd4902076f4afbadebc9906e500a2f76479d6e3bb6b7770f133a98547d50e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_610e95e512e856481ba7f69ae192eff4e5ec945fc3788cfbb2eb3f1184906f82 = $this->env->getExtension("native_profiler");
        $__internal_610e95e512e856481ba7f69ae192eff4e5ec945fc3788cfbb2eb3f1184906f82->enter($__internal_610e95e512e856481ba7f69ae192eff4e5ec945fc3788cfbb2eb3f1184906f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_610e95e512e856481ba7f69ae192eff4e5ec945fc3788cfbb2eb3f1184906f82->leave($__internal_610e95e512e856481ba7f69ae192eff4e5ec945fc3788cfbb2eb3f1184906f82_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_54551443560aa67557f5b4deb3d9851db47ca0ee70fc7be7e3797c8b1aa4fb06 = $this->env->getExtension("native_profiler");
        $__internal_54551443560aa67557f5b4deb3d9851db47ca0ee70fc7be7e3797c8b1aa4fb06->enter($__internal_54551443560aa67557f5b4deb3d9851db47ca0ee70fc7be7e3797c8b1aa4fb06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_54551443560aa67557f5b4deb3d9851db47ca0ee70fc7be7e3797c8b1aa4fb06->leave($__internal_54551443560aa67557f5b4deb3d9851db47ca0ee70fc7be7e3797c8b1aa4fb06_prof);

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
