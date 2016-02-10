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
        $__internal_3298776045d3a6d7c3d2541e6d662e10243818d12e2619e6417313025c7911a6 = $this->env->getExtension("native_profiler");
        $__internal_3298776045d3a6d7c3d2541e6d662e10243818d12e2619e6417313025c7911a6->enter($__internal_3298776045d3a6d7c3d2541e6d662e10243818d12e2619e6417313025c7911a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3298776045d3a6d7c3d2541e6d662e10243818d12e2619e6417313025c7911a6->leave($__internal_3298776045d3a6d7c3d2541e6d662e10243818d12e2619e6417313025c7911a6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_01b644ee3e3277492678b3531f8a4eb8336712dd589e50d13fbaee0fc1c8e0b3 = $this->env->getExtension("native_profiler");
        $__internal_01b644ee3e3277492678b3531f8a4eb8336712dd589e50d13fbaee0fc1c8e0b3->enter($__internal_01b644ee3e3277492678b3531f8a4eb8336712dd589e50d13fbaee0fc1c8e0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_01b644ee3e3277492678b3531f8a4eb8336712dd589e50d13fbaee0fc1c8e0b3->leave($__internal_01b644ee3e3277492678b3531f8a4eb8336712dd589e50d13fbaee0fc1c8e0b3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2426d72efeee702b44d0cfd8ab8a9e723400c5f326a61a0b0b94f93436f84adf = $this->env->getExtension("native_profiler");
        $__internal_2426d72efeee702b44d0cfd8ab8a9e723400c5f326a61a0b0b94f93436f84adf->enter($__internal_2426d72efeee702b44d0cfd8ab8a9e723400c5f326a61a0b0b94f93436f84adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2426d72efeee702b44d0cfd8ab8a9e723400c5f326a61a0b0b94f93436f84adf->leave($__internal_2426d72efeee702b44d0cfd8ab8a9e723400c5f326a61a0b0b94f93436f84adf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a9fb2e41842b5800ef7ded40f10fe87fb3e627e95779677c405773112a0c7eba = $this->env->getExtension("native_profiler");
        $__internal_a9fb2e41842b5800ef7ded40f10fe87fb3e627e95779677c405773112a0c7eba->enter($__internal_a9fb2e41842b5800ef7ded40f10fe87fb3e627e95779677c405773112a0c7eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a9fb2e41842b5800ef7ded40f10fe87fb3e627e95779677c405773112a0c7eba->leave($__internal_a9fb2e41842b5800ef7ded40f10fe87fb3e627e95779677c405773112a0c7eba_prof);

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
