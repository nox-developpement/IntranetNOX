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
        $__internal_59c2ae61ddd5ca9953a7b47fe95658850ebeaf3d18db47c626d853c245664fe8 = $this->env->getExtension("native_profiler");
        $__internal_59c2ae61ddd5ca9953a7b47fe95658850ebeaf3d18db47c626d853c245664fe8->enter($__internal_59c2ae61ddd5ca9953a7b47fe95658850ebeaf3d18db47c626d853c245664fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationNews:testpdf.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59c2ae61ddd5ca9953a7b47fe95658850ebeaf3d18db47c626d853c245664fe8->leave($__internal_59c2ae61ddd5ca9953a7b47fe95658850ebeaf3d18db47c626d853c245664fe8_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_3ee11559a15dc071e726118c265e456ffd606c3ad4df8bdbf96c5a75cd4eea62 = $this->env->getExtension("native_profiler");
        $__internal_3ee11559a15dc071e726118c265e456ffd606c3ad4df8bdbf96c5a75cd4eea62->enter($__internal_3ee11559a15dc071e726118c265e456ffd606c3ad4df8bdbf96c5a75cd4eea62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Pdf
";
        
        $__internal_3ee11559a15dc071e726118c265e456ffd606c3ad4df8bdbf96c5a75cd4eea62->leave($__internal_3ee11559a15dc071e726118c265e456ffd606c3ad4df8bdbf96c5a75cd4eea62_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_5274f4235cd710e5fc77ce30119e08be644afbc8979e10c5c39e44a827c6a2d0 = $this->env->getExtension("native_profiler");
        $__internal_5274f4235cd710e5fc77ce30119e08be644afbc8979e10c5c39e44a827c6a2d0->enter($__internal_5274f4235cd710e5fc77ce30119e08be644afbc8979e10c5c39e44a827c6a2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_5274f4235cd710e5fc77ce30119e08be644afbc8979e10c5c39e44a827c6a2d0->leave($__internal_5274f4235cd710e5fc77ce30119e08be644afbc8979e10c5c39e44a827c6a2d0_prof);

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
