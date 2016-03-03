<?php

/* NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairetermine.html.twig */
class __TwigTemplate_025fc86cc344f4a38feea53424eab1034d365c5244b4ca3aeeb7db798b9c7777 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairetermine.html.twig", 1);
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
        echo " Parcourirs les suivis terminés ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Parcourirs les suivis terminés";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <div id='DivFormulaireSelectionAgence'>

        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionAgence"]) ? $context["formSelectionAgence"] : null), 'form_start', array("attr" => array("class" => "formulaireSelectionAgence")));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSelectionAgence"]) ? $context["formSelectionAgence"] : null), 'errors');
        echo "

        <fieldset>

            <legend><span>Agence</legend>

            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionAgence"]) ? $context["formSelectionAgence"] : null), "Agences", array()), 'label', array("label_attr" => array("class" => "labelFormulaireSelectionAgence"), "label" => "Selection de l'agence :"));
        echo "
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionAgence"]) ? $context["formSelectionAgence"] : null), "Agences", array()), 'errors');
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionAgence"]) ? $context["formSelectionAgence"] : null), "Agences", array()), 'widget', array("attr" => array("class" => "selectFormulaireSelectionAgence")));
        echo "

        </fieldset>

        ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionAgence"]) ? $context["formSelectionAgence"] : null), 'form_end');
        echo "

    </div>


    <div id='DivFormulaireParcourSuiviEnCours'>
        ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionSuivi"]) ? $context["formSelectionSuivi"] : null), 'form_start', array("attr" => array("class" => "formulaireParcourSuiviEnCours")));
        echo "
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSelectionSuivi"]) ? $context["formSelectionSuivi"] : null), 'errors');
        echo "

        <fieldset>

            <legend>Selection du suivi</legend>

            <p>
                <label for=\"rechercehSuivi\">Recherche</label>
                <input placeholder=\"Ex : Ventes 2016\" type=\"text\" id=\"rechercehSuivi\"/>
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionSuivi"]) ? $context["formSelectionSuivi"] : null), "Suivi", array()), 'errors');
        echo "
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionSuivi"]) ? $context["formSelectionSuivi"] : null), "Suivi", array()), 'widget', array("attr" => array("class" => "selectFormulaireAdministrationAjoutProfil", "size" => 15)));
        echo "
            </p>

            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionSuivi"]) ? $context["formSelectionSuivi"] : null), "_token", array()), 'widget');
        echo "

            <p>
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionSuivi"]) ? $context["formSelectionSuivi"] : null), "Consulter", array()), 'widget', array("attr" => array("class" => "submitFormulaireParcourSuiviEnCours")));
        echo "
            </p>

        </fieldset>

        ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionSuivi"]) ? $context["formSelectionSuivi"] : null), 'form_end');
        echo "

    </div>

    <script>

    </script>

";
    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairetermine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 52,  119 => 47,  113 => 44,  107 => 41,  103 => 40,  91 => 31,  87 => 30,  78 => 24,  71 => 20,  67 => 19,  63 => 18,  54 => 12,  50 => 11,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Parcourirs les suivis terminés {% endblock %}*/
/* */
/* {% block messageAccueil %}Parcourirs les suivis terminés{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div id='DivFormulaireSelectionAgence'>*/
/* */
/*         {{ form_start(formSelectionAgence, {'attr': {'class': 'formulaireSelectionAgence'}}) }}*/
/*         {{ form_errors(formSelectionAgence) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend><span>Agence</legend>*/
/* */
/*             {{ form_label(formSelectionAgence.Agences, "Selection de l'agence :", {'label_attr': {'class': 'labelFormulaireSelectionAgence'}}) }}*/
/*             {{ form_errors(formSelectionAgence.Agences) }}*/
/*             {{ form_widget(formSelectionAgence.Agences, {'attr': {'class': 'selectFormulaireSelectionAgence'}}) }}*/
/* */
/*         </fieldset>*/
/* */
/*         {{ form_end(formSelectionAgence) }}*/
/* */
/*     </div>*/
/* */
/* */
/*     <div id='DivFormulaireParcourSuiviEnCours'>*/
/*         {{ form_start(formSelectionSuivi, {'attr': {'class': 'formulaireParcourSuiviEnCours'}}) }}*/
/*         {{ form_errors(formSelectionSuivi) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Selection du suivi</legend>*/
/* */
/*             <p>*/
/*                 <label for="rechercehSuivi">Recherche</label>*/
/*                 <input placeholder="Ex : Ventes 2016" type="text" id="rechercehSuivi"/>*/
/*                 {{ form_errors(formSelectionSuivi.Suivi) }}*/
/*                 {{ form_widget(formSelectionSuivi.Suivi, {'attr': {'class': 'selectFormulaireAdministrationAjoutProfil', 'size': 15}}) }}*/
/*             </p>*/
/* */
/*             {{ form_widget(formSelectionSuivi._token) }}*/
/* */
/*             <p>*/
/*                 {{ form_widget(formSelectionSuivi.Consulter, {'attr': {'class': 'submitFormulaireParcourSuiviEnCours' }}) }}*/
/*             </p>*/
/* */
/*         </fieldset>*/
/* */
/*         {{ form_end(formSelectionSuivi) }}*/
/* */
/*     </div>*/
/* */
/*     <script>*/
/* */
/*     </script>*/
/* */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
