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
        $__internal_1fe2bf3917ed288158ba73c524f043f58ce4ae7874133fd68be1d4a35e2933ab = $this->env->getExtension("native_profiler");
        $__internal_1fe2bf3917ed288158ba73c524f043f58ce4ae7874133fd68be1d4a35e2933ab->enter($__internal_1fe2bf3917ed288158ba73c524f043f58ce4ae7874133fd68be1d4a35e2933ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireremplissageformulaire.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fe2bf3917ed288158ba73c524f043f58ce4ae7874133fd68be1d4a35e2933ab->leave($__internal_1fe2bf3917ed288158ba73c524f043f58ce4ae7874133fd68be1d4a35e2933ab_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_9ea38f9da77d8d64a93e8e6ecf96af92ce8cddaf162f91f953d95b44e6da0c66 = $this->env->getExtension("native_profiler");
        $__internal_9ea38f9da77d8d64a93e8e6ecf96af92ce8cddaf162f91f953d95b44e6da0c66->enter($__internal_9ea38f9da77d8d64a93e8e6ecf96af92ce8cddaf162f91f953d95b44e6da0c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Edition de feuille de suivi ";
        
        $__internal_9ea38f9da77d8d64a93e8e6ecf96af92ce8cddaf162f91f953d95b44e6da0c66->leave($__internal_9ea38f9da77d8d64a93e8e6ecf96af92ce8cddaf162f91f953d95b44e6da0c66_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_1141cc37ade31c072234c64877b9537fe77ba5f013237f0ab44a31129a7ec8bc = $this->env->getExtension("native_profiler");
        $__internal_1141cc37ade31c072234c64877b9537fe77ba5f013237f0ab44a31129a7ec8bc->enter($__internal_1141cc37ade31c072234c64877b9537fe77ba5f013237f0ab44a31129a7ec8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Edition de feuille de suivi - ";
        echo twig_escape_filter($this->env, (isset($context["suivi"]) ? $context["suivi"] : $this->getContext($context, "suivi")), "html", null, true);
        
        $__internal_1141cc37ade31c072234c64877b9537fe77ba5f013237f0ab44a31129a7ec8bc->leave($__internal_1141cc37ade31c072234c64877b9537fe77ba5f013237f0ab44a31129a7ec8bc_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_0dc24b3184517803ef76aa1c00918e1213ed847d574f0c23620dd66fffebb555 = $this->env->getExtension("native_profiler");
        $__internal_0dc24b3184517803ef76aa1c00918e1213ed847d574f0c23620dd66fffebb555->enter($__internal_0dc24b3184517803ef76aa1c00918e1213ed847d574f0c23620dd66fffebb555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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

    <div id=\"DivFormulaireCloturationSuivi\">

        ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formCloturationSuivi"]) ? $context["formCloturationSuivi"] : $this->getContext($context, "formCloturationSuivi")), 'form_start', array("attr" => array("class" => "formulaireCloturationSuivi")));
        echo "
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formCloturationSuivi"]) ? $context["formCloturationSuivi"] : $this->getContext($context, "formCloturationSuivi")), 'errors');
        echo "

        <fieldset>

            <legend>Cloturation</legend>

            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCloturationSuivi"]) ? $context["formCloturationSuivi"] : $this->getContext($context, "formCloturationSuivi")), "Cloturer", array()), 'widget', array("label" => "Cloturer le suivi", "attr" => array("class" => "boutonFormulaire")));
        echo "

        </fieldset> 

        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCloturationSuivi"]) ? $context["formCloturationSuivi"] : $this->getContext($context, "formCloturationSuivi")), "_token", array()), 'widget');
        echo "
        ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formCloturationSuivi"]) ? $context["formCloturationSuivi"] : $this->getContext($context, "formCloturationSuivi")), 'form_end');
        echo "
    </div>

    <div id=\"DivFormulaireRemplissageSuivi\">

        ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), 'form_start', array("attr" => array("class" => "formulaireRemplissageSuivi")));
        echo "
        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), 'errors');
        echo "

        <fieldset>

            <legend>";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["suivi"]) ? $context["suivi"] : $this->getContext($context, "suivi")), "html", null, true);
        echo "</legend>

            <p>
                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["champsViews"]) ? $context["champsViews"] : $this->getContext($context, "champsViews")));
        foreach ($context['_seq'] as $context["_key"] => $context["champ"]) {
            // line 56
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), $this->getAttribute($context["champ"], "Champ", array())), 'label', array("label_attr" => array("class" => "labelFormulaireRemplissageSuivi")) + (twig_test_empty($_label_ = ($this->getAttribute($context["champ"], "Nom", array()) . " : ")) ? array() : array("label" => $_label_)));
            echo "
                    ";
            // line 57
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), $this->getAttribute($context["champ"], "Champ", array())), 'errors');
            echo "
                    ";
            // line 58
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), $this->getAttribute($context["champ"], "Champ", array())), 'widget', array("attr" => array("class" => "champFormulaireRemplissageSuivi")));
            echo "
                    <br />
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['champ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
                ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), "Generate", array()), 'widget', array("label" => "Générer fichier Excel", "attr" => array("class" => "boutonFormulaire", "title" => "Sauvegardez le suivi pour pouvoir générer un fichier Excel.")));
        echo "
                ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), "Save", array()), 'widget', array("label" => "Sauvegarder le suivi", "attr" => array("class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 68
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : $this->getContext($context, "formDonneesSuivi")), 'form_end');
        echo "
    </div>

";
        
        $__internal_0dc24b3184517803ef76aa1c00918e1213ed847d574f0c23620dd66fffebb555->leave($__internal_0dc24b3184517803ef76aa1c00918e1213ed847d574f0c23620dd66fffebb555_prof);

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
        return array (  195 => 68,  187 => 63,  183 => 62,  180 => 61,  171 => 58,  167 => 57,  162 => 56,  158 => 55,  152 => 52,  145 => 48,  141 => 47,  133 => 42,  129 => 41,  122 => 37,  113 => 31,  109 => 30,  100 => 24,  93 => 20,  89 => 19,  85 => 18,  76 => 12,  72 => 11,  67 => 8,  61 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Edition de feuille de suivi {% endblock %}*/
/* */
/* {% block messageAccueil %}Edition de feuille de suivi - {{ suivi }}{% endblock %}*/
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
/*     <div id="DivFormulaireCloturationSuivi">*/
/* */
/*         {{ form_start(formCloturationSuivi, {'attr': {'class': 'formulaireCloturationSuivi'}}) }}*/
/*         {{ form_errors(formCloturationSuivi) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Cloturation</legend>*/
/* */
/*             {{ form_widget(formCloturationSuivi.Cloturer, {'label': 'Cloturer le suivi', 'attr': {'class': 'boutonFormulaire'}}) }}*/
/* */
/*         </fieldset> */
/* */
/*         {{ form_widget(formCloturationSuivi._token) }}*/
/*         {{ form_end(formCloturationSuivi) }}*/
/*     </div>*/
/* */
/*     <div id="DivFormulaireRemplissageSuivi">*/
/* */
/*         {{ form_start(formDonneesSuivi, {'attr': {'class': 'formulaireRemplissageSuivi'}}) }}*/
/*         {{ form_errors(formDonneesSuivi) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>{{ suivi }}</legend>*/
/* */
/*             <p>*/
/*                 {% for champ in champsViews %}*/
/*                     {{ form_label(attribute(formDonneesSuivi, champ.Champ), champ.Nom ~ " : ", {'label_attr': {'class': 'labelFormulaireRemplissageSuivi'}}) }}*/
/*                     {{ form_errors(attribute(formDonneesSuivi, champ.Champ)) }}*/
/*                     {{ form_widget(attribute(formDonneesSuivi, champ.Champ), {'attr': {'class': 'champFormulaireRemplissageSuivi'}}) }}*/
/*                     <br />*/
/*                 {% endfor %}*/
/* */
/*                 {{ form_widget(formDonneesSuivi.Generate, {'label': 'Générer fichier Excel', 'attr': {'class': 'boutonFormulaire', 'title': 'Sauvegardez le suivi pour pouvoir générer un fichier Excel.' }}) }}*/
/*                 {{ form_widget(formDonneesSuivi.Save, {'label': 'Sauvegarder le suivi', 'attr': {'class': 'boutonFormulaire'}}) }}*/
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
