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
        $__internal_d7ede3c2806102e962896770ae6cd70ff7d91a7cf012cc3c492e3e0c6773c8e0 = $this->env->getExtension("native_profiler");
        $__internal_d7ede3c2806102e962896770ae6cd70ff7d91a7cf012cc3c492e3e0c6773c8e0->enter($__internal_d7ede3c2806102e962896770ae6cd70ff7d91a7cf012cc3c492e3e0c6773c8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7ede3c2806102e962896770ae6cd70ff7d91a7cf012cc3c492e3e0c6773c8e0->leave($__internal_d7ede3c2806102e962896770ae6cd70ff7d91a7cf012cc3c492e3e0c6773c8e0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d13747750ecea331003527d9d00675acb4f95cca614ecb9705f5f30a25b2253f = $this->env->getExtension("native_profiler");
        $__internal_d13747750ecea331003527d9d00675acb4f95cca614ecb9705f5f30a25b2253f->enter($__internal_d13747750ecea331003527d9d00675acb4f95cca614ecb9705f5f30a25b2253f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d13747750ecea331003527d9d00675acb4f95cca614ecb9705f5f30a25b2253f->leave($__internal_d13747750ecea331003527d9d00675acb4f95cca614ecb9705f5f30a25b2253f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_824b47cc31ec70d9aa7c64e81ec1d63aabd3b48506fb8faafcf2ffec24f33a6c = $this->env->getExtension("native_profiler");
        $__internal_824b47cc31ec70d9aa7c64e81ec1d63aabd3b48506fb8faafcf2ffec24f33a6c->enter($__internal_824b47cc31ec70d9aa7c64e81ec1d63aabd3b48506fb8faafcf2ffec24f33a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_824b47cc31ec70d9aa7c64e81ec1d63aabd3b48506fb8faafcf2ffec24f33a6c->leave($__internal_824b47cc31ec70d9aa7c64e81ec1d63aabd3b48506fb8faafcf2ffec24f33a6c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_abe44f4097c1f0e6d48d03db28e5d63a579c64624b094e445ee11f7f9965d340 = $this->env->getExtension("native_profiler");
        $__internal_abe44f4097c1f0e6d48d03db28e5d63a579c64624b094e445ee11f7f9965d340->enter($__internal_abe44f4097c1f0e6d48d03db28e5d63a579c64624b094e445ee11f7f9965d340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_abe44f4097c1f0e6d48d03db28e5d63a579c64624b094e445ee11f7f9965d340->leave($__internal_abe44f4097c1f0e6d48d03db28e5d63a579c64624b094e445ee11f7f9965d340_prof);

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
