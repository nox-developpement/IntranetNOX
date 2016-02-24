<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_54d3c5cbba0dc45013515734b62218f7740c4e2616b15638012ffb594c17b0ed extends Twig_Template
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
        $__internal_cdce6d2e4e9eda7c8d2de37f9a9eeeeea40ad935a7c0beb3d4bbc634ea95ab90 = $this->env->getExtension("native_profiler");
        $__internal_cdce6d2e4e9eda7c8d2de37f9a9eeeeea40ad935a7c0beb3d4bbc634ea95ab90->enter($__internal_cdce6d2e4e9eda7c8d2de37f9a9eeeeea40ad935a7c0beb3d4bbc634ea95ab90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdce6d2e4e9eda7c8d2de37f9a9eeeeea40ad935a7c0beb3d4bbc634ea95ab90->leave($__internal_cdce6d2e4e9eda7c8d2de37f9a9eeeeea40ad935a7c0beb3d4bbc634ea95ab90_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_45c60c4f09f155ef51902f0988d22ff1881b5afceef0990207cb86e7905823d6 = $this->env->getExtension("native_profiler");
        $__internal_45c60c4f09f155ef51902f0988d22ff1881b5afceef0990207cb86e7905823d6->enter($__internal_45c60c4f09f155ef51902f0988d22ff1881b5afceef0990207cb86e7905823d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_45c60c4f09f155ef51902f0988d22ff1881b5afceef0990207cb86e7905823d6->leave($__internal_45c60c4f09f155ef51902f0988d22ff1881b5afceef0990207cb86e7905823d6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_072bace1803758f429ec3c22540188d02e8c311b4ccbec63d332c12e0d0b1f77 = $this->env->getExtension("native_profiler");
        $__internal_072bace1803758f429ec3c22540188d02e8c311b4ccbec63d332c12e0d0b1f77->enter($__internal_072bace1803758f429ec3c22540188d02e8c311b4ccbec63d332c12e0d0b1f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_072bace1803758f429ec3c22540188d02e8c311b4ccbec63d332c12e0d0b1f77->leave($__internal_072bace1803758f429ec3c22540188d02e8c311b4ccbec63d332c12e0d0b1f77_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6b9e5b7e8921e5aeea81bb5af05b5238e42a20b8c28b709cdd3ab1336cf1c936 = $this->env->getExtension("native_profiler");
        $__internal_6b9e5b7e8921e5aeea81bb5af05b5238e42a20b8c28b709cdd3ab1336cf1c936->enter($__internal_6b9e5b7e8921e5aeea81bb5af05b5238e42a20b8c28b709cdd3ab1336cf1c936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6b9e5b7e8921e5aeea81bb5af05b5238e42a20b8c28b709cdd3ab1336cf1c936->leave($__internal_6b9e5b7e8921e5aeea81bb5af05b5238e42a20b8c28b709cdd3ab1336cf1c936_prof);

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
