<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9611a92a4d6a350e57f8f7b69b0034a146bca988040354ebd8b5fe82e91a80dd extends Twig_Template
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
        $__internal_b9c82256d93d4c39ea556d23b1e318990d91dd402644c8a4f28cc768e1819b54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9c82256d93d4c39ea556d23b1e318990d91dd402644c8a4f28cc768e1819b54->enter($__internal_b9c82256d93d4c39ea556d23b1e318990d91dd402644c8a4f28cc768e1819b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9c82256d93d4c39ea556d23b1e318990d91dd402644c8a4f28cc768e1819b54->leave($__internal_b9c82256d93d4c39ea556d23b1e318990d91dd402644c8a4f28cc768e1819b54_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_418fa9812eb8c09cbecfdfe2af3c56213061818220674740ca09225c7d2b025c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_418fa9812eb8c09cbecfdfe2af3c56213061818220674740ca09225c7d2b025c->enter($__internal_418fa9812eb8c09cbecfdfe2af3c56213061818220674740ca09225c7d2b025c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_418fa9812eb8c09cbecfdfe2af3c56213061818220674740ca09225c7d2b025c->leave($__internal_418fa9812eb8c09cbecfdfe2af3c56213061818220674740ca09225c7d2b025c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b87823dbe22d522b9f215e9ae4c4dd13a4ac73a7c7d594c9478199c296780eab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b87823dbe22d522b9f215e9ae4c4dd13a4ac73a7c7d594c9478199c296780eab->enter($__internal_b87823dbe22d522b9f215e9ae4c4dd13a4ac73a7c7d594c9478199c296780eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b87823dbe22d522b9f215e9ae4c4dd13a4ac73a7c7d594c9478199c296780eab->leave($__internal_b87823dbe22d522b9f215e9ae4c4dd13a4ac73a7c7d594c9478199c296780eab_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_489066de79c26f183668b48b8210cbd6e7c7c6938b54995950bfa293c7f64503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489066de79c26f183668b48b8210cbd6e7c7c6938b54995950bfa293c7f64503->enter($__internal_489066de79c26f183668b48b8210cbd6e7c7c6938b54995950bfa293c7f64503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_489066de79c26f183668b48b8210cbd6e7c7c6938b54995950bfa293c7f64503->leave($__internal_489066de79c26f183668b48b8210cbd6e7c7c6938b54995950bfa293c7f64503_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
