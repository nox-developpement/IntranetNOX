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
        $__internal_68ac5b2e09ef8ff000d9071437b830accf58b064573e43bfd023625277ef8dff = $this->env->getExtension("native_profiler");
        $__internal_68ac5b2e09ef8ff000d9071437b830accf58b064573e43bfd023625277ef8dff->enter($__internal_68ac5b2e09ef8ff000d9071437b830accf58b064573e43bfd023625277ef8dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68ac5b2e09ef8ff000d9071437b830accf58b064573e43bfd023625277ef8dff->leave($__internal_68ac5b2e09ef8ff000d9071437b830accf58b064573e43bfd023625277ef8dff_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dfe91577a5fefd8dc630c3225a85a4a891c8b608852121827b8b159babf2c994 = $this->env->getExtension("native_profiler");
        $__internal_dfe91577a5fefd8dc630c3225a85a4a891c8b608852121827b8b159babf2c994->enter($__internal_dfe91577a5fefd8dc630c3225a85a4a891c8b608852121827b8b159babf2c994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dfe91577a5fefd8dc630c3225a85a4a891c8b608852121827b8b159babf2c994->leave($__internal_dfe91577a5fefd8dc630c3225a85a4a891c8b608852121827b8b159babf2c994_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ac9f6a7b531b9a28dec7579b07737fb0738f045deb13edcc31b6e36e0ae540f6 = $this->env->getExtension("native_profiler");
        $__internal_ac9f6a7b531b9a28dec7579b07737fb0738f045deb13edcc31b6e36e0ae540f6->enter($__internal_ac9f6a7b531b9a28dec7579b07737fb0738f045deb13edcc31b6e36e0ae540f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ac9f6a7b531b9a28dec7579b07737fb0738f045deb13edcc31b6e36e0ae540f6->leave($__internal_ac9f6a7b531b9a28dec7579b07737fb0738f045deb13edcc31b6e36e0ae540f6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c13acd34e7574a7d022ae77fff99128e68f392f1653cd02bdf55b8bcb6f0007d = $this->env->getExtension("native_profiler");
        $__internal_c13acd34e7574a7d022ae77fff99128e68f392f1653cd02bdf55b8bcb6f0007d->enter($__internal_c13acd34e7574a7d022ae77fff99128e68f392f1653cd02bdf55b8bcb6f0007d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c13acd34e7574a7d022ae77fff99128e68f392f1653cd02bdf55b8bcb6f0007d->leave($__internal_c13acd34e7574a7d022ae77fff99128e68f392f1653cd02bdf55b8bcb6f0007d_prof);

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
