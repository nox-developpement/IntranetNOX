<?php

/* NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireremplissageformulaire.html.twig */
class __TwigTemplate_3ed563a9bbb26a4c72b92044aff74251c661dae33454afed5b7331133099ebb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireremplissageformulaire.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23d1646a9a7306662b8a741933707daff5b217db415f7290f407321883c0a540 = $this->env->getExtension("native_profiler");
        $__internal_23d1646a9a7306662b8a741933707daff5b217db415f7290f407321883c0a540->enter($__internal_23d1646a9a7306662b8a741933707daff5b217db415f7290f407321883c0a540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireremplissageformulaire.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23d1646a9a7306662b8a741933707daff5b217db415f7290f407321883c0a540->leave($__internal_23d1646a9a7306662b8a741933707daff5b217db415f7290f407321883c0a540_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_acfc02d202cfa9928761f896905cee57be87539945c826b73637c983f520d0a0 = $this->env->getExtension("native_profiler");
        $__internal_acfc02d202cfa9928761f896905cee57be87539945c826b73637c983f520d0a0->enter($__internal_acfc02d202cfa9928761f896905cee57be87539945c826b73637c983f520d0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Edition de feuille de suivi ";
        
        $__internal_acfc02d202cfa9928761f896905cee57be87539945c826b73637c983f520d0a0->leave($__internal_acfc02d202cfa9928761f896905cee57be87539945c826b73637c983f520d0a0_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_2e5b00524fb7458cae000357ecc411667ce166f7be093239796d079209bbcdee = $this->env->getExtension("native_profiler");
        $__internal_2e5b00524fb7458cae000357ecc411667ce166f7be093239796d079209bbcdee->enter($__internal_2e5b00524fb7458cae000357ecc411667ce166f7be093239796d079209bbcdee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Edition de feuille de suivi";
        
        $__internal_2e5b00524fb7458cae000357ecc411667ce166f7be093239796d079209bbcdee->leave($__internal_2e5b00524fb7458cae000357ecc411667ce166f7be093239796d079209bbcdee_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_862c11d2fca2dfac0c4696f3f14d9322fc5c31d4f5ac968452614fe0060e9ead = $this->env->getExtension("native_profiler");
        $__internal_862c11d2fca2dfac0c4696f3f14d9322fc5c31d4f5ac968452614fe0060e9ead->enter($__internal_862c11d2fca2dfac0c4696f3f14d9322fc5c31d4f5ac968452614fe0060e9ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div id=\"DivFormulaireRemplissageSuivi\">

        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "formulaireRemplissageSuivi")));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        <fieldset>

            <legend>";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["suivi"]) ? $context["suivi"] : $this->getContext($context, "suivi")), "html", null, true);
        echo "</legend>

            <p>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["champsViews"]) ? $context["champsViews"] : $this->getContext($context, "champsViews")));
        foreach ($context['_seq'] as $context["_key"] => $context["champ"]) {
            // line 20
            echo "
                    ";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute($context["champ"], "Champ", array())), 'label', array("label_attr" => array("class" => "labelFormulaireRemplissageSuivi")) + (twig_test_empty($_label_ = ($this->getAttribute($context["champ"], "Nom", array()) . " : ")) ? array() : array("label" => $_label_)));
            echo "
                    ";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute($context["champ"], "Champ", array())), 'errors');
            echo "
                    ";
            // line 23
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute($context["champ"], "Champ", array())), 'widget', array("attr" => array("class" => "champFormulaireRemplissageSuivi")));
            echo "
                    <br />
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['champ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Generate", array()), 'widget', array("label" => "Générer fichier Excel", "attr" => array("class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>

";
        
        $__internal_862c11d2fca2dfac0c4696f3f14d9322fc5c31d4f5ac968452614fe0060e9ead->leave($__internal_862c11d2fca2dfac0c4696f3f14d9322fc5c31d4f5ac968452614fe0060e9ead_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireremplissageformulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 32,  115 => 27,  112 => 26,  103 => 23,  99 => 22,  95 => 21,  92 => 20,  88 => 19,  82 => 16,  75 => 12,  71 => 11,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Edition de feuille de suivi {% endblock %}*/
/* */
/* {% block messageAccueil %}Edition de feuille de suivi{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div id="DivFormulaireRemplissageSuivi">*/
/* */
/*         {{ form_start(form, {'attr': {'class': 'formulaireRemplissageSuivi'}}) }}*/
/*         {{ form_errors(form) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>{{ suivi }}</legend>*/
/* */
/*             <p>*/
/*                 {% for champ in champsViews %}*/
/* */
/*                     {{ form_label(attribute(form, champ.Champ), champ.Nom ~ " : ", {'label_attr': {'class': 'labelFormulaireRemplissageSuivi'}}) }}*/
/*                     {{ form_errors(attribute(form, champ.Champ)) }}*/
/*                     {{ form_widget(attribute(form, champ.Champ), {'attr': {'class': 'champFormulaireRemplissageSuivi'}}) }}*/
/*                     <br />*/
/*                 {% endfor %}*/
/* */
/*                 {{ form_widget(form.Generate, {'label': 'Générer fichier Excel', 'attr': {'class': 'boutonFormulaire'}}) }}*/
/*             </p>*/
/* */
/*         </fieldset> */
/* */
/*         {{ form_end(form) }}*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
