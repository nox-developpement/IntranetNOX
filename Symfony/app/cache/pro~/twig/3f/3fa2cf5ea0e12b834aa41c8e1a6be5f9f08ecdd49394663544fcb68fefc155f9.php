<?php

/* @NoxIntranetRessources/AssistantAffaire/assistantaffaireremplissageformulaire.html.twig */
class __TwigTemplate_1620a27d89aaccc4fb08947d4dc009a06a364fa4181921c8bab6263f34736f7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetRessources/AssistantAffaire/assistantaffaireremplissageformulaire.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        echo " Edition de feuille de suivi ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Edition de feuille de suivi - ";
        echo twig_escape_filter($this->env, (isset($context["suivi"]) ? $context["suivi"] : null), "html", null, true);
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <div id='DivFormulaireSelectionVersionSuivi'>

        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionVersionSuivi"]) ? $context["formSelectionVersionSuivi"] : null), 'form_start', array("attr" => array("class" => "formulaireSelectionVersionSuivi")));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSelectionVersionSuivi"]) ? $context["formSelectionVersionSuivi"] : null), 'errors');
        echo "

        <fieldset>

            <legend>Version</legend>

            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersionSuivi"]) ? $context["formSelectionVersionSuivi"] : null), "version", array()), 'label', array("label_attr" => array("class" => "labelFormulaireSelectionVersionSuivi"), "label" => "Selection de la version :"));
        echo "
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersionSuivi"]) ? $context["formSelectionVersionSuivi"] : null), "version", array()), 'errors');
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersionSuivi"]) ? $context["formSelectionVersionSuivi"] : null), "version", array()), 'widget', array("attr" => array("class" => "selectFormulaireSelectionVersionSuivi")));
        echo "

        </fieldset>

        ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionVersionSuivi"]) ? $context["formSelectionVersionSuivi"] : null), 'form_end');
        echo "

    </div>

    <div id=\"DivFormulaireCloturationSuivi\">

        ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formCloturationSuivi"]) ? $context["formCloturationSuivi"] : null), 'form_start', array("attr" => array("class" => "formulaireCloturationSuivi")));
        echo "
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formCloturationSuivi"]) ? $context["formCloturationSuivi"] : null), 'errors');
        echo "

        <fieldset>

            <legend>Cloturation</legend>

            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCloturationSuivi"]) ? $context["formCloturationSuivi"] : null), "Cloturer", array()), 'widget', array("label" => "Cloturer le suivi", "attr" => array("class" => "boutonFormulaire")));
        echo "

        </fieldset> 

        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCloturationSuivi"]) ? $context["formCloturationSuivi"] : null), "_token", array()), 'widget');
        echo "
        ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formCloturationSuivi"]) ? $context["formCloturationSuivi"] : null), 'form_end');
        echo "
    </div>

    <div id=\"DivFormulaireRemplissageSuivi\">

        ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : null), 'form_start', array("attr" => array("class" => "formulaireRemplissageSuivi")));
        echo "
        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : null), 'errors');
        echo "

        <fieldset>

            <legend>";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["suivi"]) ? $context["suivi"] : null), "html", null, true);
        echo "</legend>

            <p>
                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["champsViews"]) ? $context["champsViews"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["champ"]) {
            // line 56
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : null), $this->getAttribute($context["champ"], "Champ", array())), 'label', array("label_attr" => array("class" => "labelFormulaireRemplissageSuivi")) + (twig_test_empty($_label_ = ($this->getAttribute($context["champ"], "Nom", array()) . " : ")) ? array() : array("label" => $_label_)));
            echo "
                    ";
            // line 57
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : null), $this->getAttribute($context["champ"], "Champ", array())), 'errors');
            echo "
                    ";
            // line 58
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : null), $this->getAttribute($context["champ"], "Champ", array())), 'widget', array("attr" => array("class" => "champFormulaireRemplissageSuivi")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : null), "Generate", array()), 'widget', array("label" => "Générer fichier Excel", "attr" => array("class" => "boutonFormulaire", "title" => "Sauvegardez le suivi pour pouvoir générer un fichier Excel.")));
        echo "
                ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : null), "Save", array()), 'widget', array("label" => "Sauvegarder le suivi", "attr" => array("class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 68
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formDonneesSuivi"]) ? $context["formDonneesSuivi"] : null), 'form_end');
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetRessources/AssistantAffaire/assistantaffaireremplissageformulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 68,  166 => 63,  162 => 62,  159 => 61,  150 => 58,  146 => 57,  141 => 56,  137 => 55,  131 => 52,  124 => 48,  120 => 47,  112 => 42,  108 => 41,  101 => 37,  92 => 31,  88 => 30,  79 => 24,  72 => 20,  68 => 19,  64 => 18,  55 => 12,  51 => 11,  46 => 8,  43 => 7,  36 => 5,  30 => 3,  11 => 1,);
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
