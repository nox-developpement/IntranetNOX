<?php

/* NoxIntranetAdministrationBundle:AdministrationNews:testpdf.html.twig */
class __TwigTemplate_c8459034e37629d50150b76fdcc0d0163f15a5d48ee63cf29a17c49cfaa86eea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:AdministrationNews:testpdf.html.twig", 1);
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
        $__internal_74b8901d15797debd00f42bd7b314dd458a543cb681a934d3cd104f7cdfbbab1 = $this->env->getExtension("native_profiler");
        $__internal_74b8901d15797debd00f42bd7b314dd458a543cb681a934d3cd104f7cdfbbab1->enter($__internal_74b8901d15797debd00f42bd7b314dd458a543cb681a934d3cd104f7cdfbbab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationNews:testpdf.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74b8901d15797debd00f42bd7b314dd458a543cb681a934d3cd104f7cdfbbab1->leave($__internal_74b8901d15797debd00f42bd7b314dd458a543cb681a934d3cd104f7cdfbbab1_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_21d7f1beea2b581c82ace56310b50928a633377e874d0e8279be729ddc4f59b2 = $this->env->getExtension("native_profiler");
        $__internal_21d7f1beea2b581c82ace56310b50928a633377e874d0e8279be729ddc4f59b2->enter($__internal_21d7f1beea2b581c82ace56310b50928a633377e874d0e8279be729ddc4f59b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Pdf
";
        
        $__internal_21d7f1beea2b581c82ace56310b50928a633377e874d0e8279be729ddc4f59b2->leave($__internal_21d7f1beea2b581c82ace56310b50928a633377e874d0e8279be729ddc4f59b2_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_4e86e4d5524c2dfc8df30680c71224910ccc3fd568b2efc6ac91200a8e24779c = $this->env->getExtension("native_profiler");
        $__internal_4e86e4d5524c2dfc8df30680c71224910ccc3fd568b2efc6ac91200a8e24779c->enter($__internal_4e86e4d5524c2dfc8df30680c71224910ccc3fd568b2efc6ac91200a8e24779c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_4e86e4d5524c2dfc8df30680c71224910ccc3fd568b2efc6ac91200a8e24779c->leave($__internal_4e86e4d5524c2dfc8df30680c71224910ccc3fd568b2efc6ac91200a8e24779c_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:AdministrationNews:testpdf.html.twig";
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
