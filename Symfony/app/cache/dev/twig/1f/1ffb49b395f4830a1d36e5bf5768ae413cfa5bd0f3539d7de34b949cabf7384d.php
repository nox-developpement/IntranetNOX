<?php

/* NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireconsultation.html.twig */
class __TwigTemplate_d3dfd7fae6a992fc6d78727bd1ae113cafd2a43d0e8040dadc7f4928acf90898 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireconsultation.html.twig", 1);
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
        $__internal_37211e34058a5768b636ac9f94f5250f6203106ad9d6173d2bbbfeed87927e78 = $this->env->getExtension("native_profiler");
        $__internal_37211e34058a5768b636ac9f94f5250f6203106ad9d6173d2bbbfeed87927e78->enter($__internal_37211e34058a5768b636ac9f94f5250f6203106ad9d6173d2bbbfeed87927e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireconsultation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37211e34058a5768b636ac9f94f5250f6203106ad9d6173d2bbbfeed87927e78->leave($__internal_37211e34058a5768b636ac9f94f5250f6203106ad9d6173d2bbbfeed87927e78_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_88709d0563ba89dd9524563a0a2406885df870b54ffca0c886adeaa1d12b09d8 = $this->env->getExtension("native_profiler");
        $__internal_88709d0563ba89dd9524563a0a2406885df870b54ffca0c886adeaa1d12b09d8->enter($__internal_88709d0563ba89dd9524563a0a2406885df870b54ffca0c886adeaa1d12b09d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Consultation de feuille de suivi ";
        
        $__internal_88709d0563ba89dd9524563a0a2406885df870b54ffca0c886adeaa1d12b09d8->leave($__internal_88709d0563ba89dd9524563a0a2406885df870b54ffca0c886adeaa1d12b09d8_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_c7d8b7b9e552c1e8e1c5b27b5f07bbf35f688b6a6a67a3d70ca5d34197cf9530 = $this->env->getExtension("native_profiler");
        $__internal_c7d8b7b9e552c1e8e1c5b27b5f07bbf35f688b6a6a67a3d70ca5d34197cf9530->enter($__internal_c7d8b7b9e552c1e8e1c5b27b5f07bbf35f688b6a6a67a3d70ca5d34197cf9530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Consultation de feuille de suivi - ";
        echo twig_escape_filter($this->env, (isset($context["suivi"]) ? $context["suivi"] : $this->getContext($context, "suivi")), "html", null, true);
        
        $__internal_c7d8b7b9e552c1e8e1c5b27b5f07bbf35f688b6a6a67a3d70ca5d34197cf9530->leave($__internal_c7d8b7b9e552c1e8e1c5b27b5f07bbf35f688b6a6a67a3d70ca5d34197cf9530_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_254a95547e9601f9fdbef8bfb76199659014fd86e32348b8f9915bad1e87283c = $this->env->getExtension("native_profiler");
        $__internal_254a95547e9601f9fdbef8bfb76199659014fd86e32348b8f9915bad1e87283c->enter($__internal_254a95547e9601f9fdbef8bfb76199659014fd86e32348b8f9915bad1e87283c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div id='DivFormulaireSelectionVersionSuivi'>

        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionVersionSuivi"]) ? $context["formSelectionVersionSuivi"] : $this->getContext($context, "formSelectionVersionSuivi")), 'form_start', array("attr" => array("class" => "formulaireSelectionVersionSuivi")));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSelectionVersionSuivi"]) ? $context["formSelectionVersionSuivi"] : $this->getContext($context, "formSelectionVersionSuivi")), 'errors');
        echo "

        <fieldset>

            <legend>Version</legend>

            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersionSuivi"]) ? $context["formSelectionVersionSuivi"] : $this->getContext($context, "formSelectionVersionSuivi")), "version", array()), 'label', array("label_attr" => array("class" => "labelFormulaireSelectionVersionSuivi"), "label" => "Selection de la version :"));
        echo "
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersionSuivi"]) ? $context["formSelectionVersionSuivi"] : $this->getContext($context, "formSelectionVersionSuivi")), "version", array()), 'errors');
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersionSuivi"]) ? $context["formSelectionVersionSuivi"] : $this->getContext($context, "formSelectionVersionSuivi")), "version", array()), 'widget', array("attr" => array("class" => "selectFormulaireSelectionVersionSuivi")));
        echo "

        </fieldset>

        ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionVersionSuivi"]) ? $context["formSelectionVersionSuivi"] : $this->getContext($context, "formSelectionVersionSuivi")), 'form_end');
        echo "

    </div>

    <div id=\"DivFormulaireRemplissageSuiviCloture\">

        ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), 'form_start', array("attr" => array("class" => "formulaireRemplissageSuiviCloture")));
        echo "
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), 'errors');
        echo "

        <fieldset>

            <legend>";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["suivi"]) ? $context["suivi"] : $this->getContext($context, "suivi")), "html", null, true);
        echo "</legend>

            <p>
                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["champsViews"]) ? $context["champsViews"] : $this->getContext($context, "champsViews")));
        foreach ($context['_seq'] as $context["_key"] => $context["champ"]) {
            // line 39
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), $this->getAttribute($context["champ"], "Champ", array())), 'label', array("label_attr" => array("class" => "labelFormulaireRemplissageSuiviCloture")) + (twig_test_empty($_label_ = ($this->getAttribute($context["champ"], "Nom", array()) . " : ")) ? array() : array("label" => $_label_)));
            echo "
                    ";
            // line 40
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), $this->getAttribute($context["champ"], "Champ", array())), 'errors');
            echo "
                    ";
            // line 41
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), $this->getAttribute($context["champ"], "Champ", array())), 'widget', array("attr" => array("class" => "champFormulaireRemplissageSuiviCloture", "disabled" => "disabled")));
            echo "
                    <br />
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['champ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), "Generate", array()), 'widget', array("label" => "Générer fichier Excel", "attr" => array("class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), 'form_end');
        echo "
    </div>

";
        
        $__internal_254a95547e9601f9fdbef8bfb76199659014fd86e32348b8f9915bad1e87283c->leave($__internal_254a95547e9601f9fdbef8bfb76199659014fd86e32348b8f9915bad1e87283c_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireconsultation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 50,  151 => 45,  148 => 44,  139 => 41,  135 => 40,  130 => 39,  126 => 38,  120 => 35,  113 => 31,  109 => 30,  100 => 24,  93 => 20,  89 => 19,  85 => 18,  76 => 12,  72 => 11,  67 => 8,  61 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Consultation de feuille de suivi {% endblock %}*/
/* */
/* {% block messageAccueil %}Consultation de feuille de suivi - {{ suivi }}{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div id='DivFormulaireSelectionVersionSuivi'>*/
/* */
/*         {{ form_start(formSelectionVersionSuivi, {'attr': {'class': 'formulaireSelectionVersionSuivi'}}) }}*/
/*         {{ form_errors(formSelectionVersionSuivi) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Version</legend>*/
/* */
/*             {{ form_label(formSelectionVersionSuivi.version, "Selection de la version :", {'label_attr': {'class': 'labelFormulaireSelectionVersionSuivi'}}) }}*/
/*             {{ form_errors(formSelectionVersionSuivi.version) }}*/
/*             {{ form_widget(formSelectionVersionSuivi.version, {'attr': {'class': 'selectFormulaireSelectionVersionSuivi'}}) }}*/
/* */
/*         </fieldset>*/
/* */
/*         {{ form_end(formSelectionVersionSuivi) }}*/
/* */
/*     </div>*/
/* */
/*     <div id="DivFormulaireRemplissageSuiviCloture">*/
/* */
/*         {{ form_start(formDonneesSuivi, {'attr': {'class': 'formulaireRemplissageSuiviCloture'}}) }}*/
/*         {{ form_errors(formDonneesSuivi) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>{{ suivi }}</legend>*/
/* */
/*             <p>*/
/*                 {% for champ in champsViews %}*/
/*                     {{ form_label(attribute(formDonneesSuivi, champ.Champ), champ.Nom ~ " : ", {'label_attr': {'class': 'labelFormulaireRemplissageSuiviCloture'}}) }}*/
/*                     {{ form_errors(attribute(formDonneesSuivi, champ.Champ)) }}*/
/*                     {{ form_widget(attribute(formDonneesSuivi, champ.Champ), {'attr': {'class': 'champFormulaireRemplissageSuiviCloture', 'disabled':'disabled'}}) }}*/
/*                     <br />*/
/*                 {% endfor %}*/
/* */
/*                 {{ form_widget(formDonneesSuivi.Generate, {'label': 'Générer fichier Excel', 'attr': {'class': 'boutonFormulaire' }}) }}*/
/*             </p>*/
/* */
/*         </fieldset> */
/* */
/*         {{ form_end(formDonneesSuivi) }}*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
