<?php

/* @NoxIntranetAdministration/AdministrationNews/testpdf.html.twig */
class __TwigTemplate_3616b12fa89a066c4e6b9f367be509a1be7ad4ff75a3aed9bfe7515f43f58217 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetAdministration/AdministrationNews/testpdf.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c04b5eb5dfa81aa5a51bda4b90f8732712d57e9a2f051c3595ddc429277dd190 = $this->env->getExtension("native_profiler");
        $__internal_c04b5eb5dfa81aa5a51bda4b90f8732712d57e9a2f051c3595ddc429277dd190->enter($__internal_c04b5eb5dfa81aa5a51bda4b90f8732712d57e9a2f051c3595ddc429277dd190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetAdministration/AdministrationNews/testpdf.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c04b5eb5dfa81aa5a51bda4b90f8732712d57e9a2f051c3595ddc429277dd190->leave($__internal_c04b5eb5dfa81aa5a51bda4b90f8732712d57e9a2f051c3595ddc429277dd190_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_306617a1bf464182baf92edb2ae86388fcb77a3218f13d4bfac79e99be87c296 = $this->env->getExtension("native_profiler");
        $__internal_306617a1bf464182baf92edb2ae86388fcb77a3218f13d4bfac79e99be87c296->enter($__internal_306617a1bf464182baf92edb2ae86388fcb77a3218f13d4bfac79e99be87c296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Pdf
";
        
        $__internal_306617a1bf464182baf92edb2ae86388fcb77a3218f13d4bfac79e99be87c296->leave($__internal_306617a1bf464182baf92edb2ae86388fcb77a3218f13d4bfac79e99be87c296_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_fb5b0d518aa332373d7947750a798b592d5acbe5b6662432bb413a24204f1054 = $this->env->getExtension("native_profiler");
        $__internal_fb5b0d518aa332373d7947750a798b592d5acbe5b6662432bb413a24204f1054->enter($__internal_fb5b0d518aa332373d7947750a798b592d5acbe5b6662432bb413a24204f1054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div>


        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["labels"]) ? $context["labels"] : $this->getContext($context, "labels")));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 13
            echo "
            ";
            // line 14
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo " <br />

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
    </div>

";
        
        $__internal_fb5b0d518aa332373d7947750a798b592d5acbe5b6662432bb413a24204f1054->leave($__internal_fb5b0d518aa332373d7947750a798b592d5acbe5b6662432bb413a24204f1054_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetAdministration/AdministrationNews/testpdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 17,  68 => 14,  65 => 13,  61 => 12,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Pdf*/
/* {% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div>*/
/* */
/* */
/*         {% for label in labels %}*/
/* */
/*             {{ label }} <br />*/
/* */
/*         {% endfor %}*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
