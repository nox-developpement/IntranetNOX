<?php

/* @NoxIntranetRessources/AssistantAffaire/assistantaffaireedition.html.twig */
class __TwigTemplate_9d9aef8e69e1841729657e594ccd3ccbf0611f08caeb28390a6476d930310c57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetRessources/AssistantAffaire/assistantaffaireedition.html.twig", 1);
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
        $__internal_3b1c26d7c3fdad964c3b054eaf5e870c785fc376fc86bbb4b95e6f0797ddd520 = $this->env->getExtension("native_profiler");
        $__internal_3b1c26d7c3fdad964c3b054eaf5e870c785fc376fc86bbb4b95e6f0797ddd520->enter($__internal_3b1c26d7c3fdad964c3b054eaf5e870c785fc376fc86bbb4b95e6f0797ddd520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetRessources/AssistantAffaire/assistantaffaireedition.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b1c26d7c3fdad964c3b054eaf5e870c785fc376fc86bbb4b95e6f0797ddd520->leave($__internal_3b1c26d7c3fdad964c3b054eaf5e870c785fc376fc86bbb4b95e6f0797ddd520_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_1ae7d81aca8d473139454f3e119ec91e2efaa881e7f98e15190a43bfcdf934fd = $this->env->getExtension("native_profiler");
        $__internal_1ae7d81aca8d473139454f3e119ec91e2efaa881e7f98e15190a43bfcdf934fd->enter($__internal_1ae7d81aca8d473139454f3e119ec91e2efaa881e7f98e15190a43bfcdf934fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Parcourirs les suivis en cours ";
        
        $__internal_1ae7d81aca8d473139454f3e119ec91e2efaa881e7f98e15190a43bfcdf934fd->leave($__internal_1ae7d81aca8d473139454f3e119ec91e2efaa881e7f98e15190a43bfcdf934fd_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_0fe02cc49940573487dd5179f8db08c1d7d24da04f49325a83bb48a79a158d04 = $this->env->getExtension("native_profiler");
        $__internal_0fe02cc49940573487dd5179f8db08c1d7d24da04f49325a83bb48a79a158d04->enter($__internal_0fe02cc49940573487dd5179f8db08c1d7d24da04f49325a83bb48a79a158d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Parcourirs les suivis en cours";
        
        $__internal_0fe02cc49940573487dd5179f8db08c1d7d24da04f49325a83bb48a79a158d04->leave($__internal_0fe02cc49940573487dd5179f8db08c1d7d24da04f49325a83bb48a79a158d04_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_693d86ec86b9d2abe294526d3b6ebc1ab47457e8ffcdb8bfaea9a93db7df1045 = $this->env->getExtension("native_profiler");
        $__internal_693d86ec86b9d2abe294526d3b6ebc1ab47457e8ffcdb8bfaea9a93db7df1045->enter($__internal_693d86ec86b9d2abe294526d3b6ebc1ab47457e8ffcdb8bfaea9a93db7df1045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div id='DivFormulaireSelectionAgence'>

        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAgence"]) ? $context["formAgence"] : $this->getContext($context, "formAgence")), 'form_start', array("attr" => array("class" => "formulaireSelectionAgence")));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAgence"]) ? $context["formAgence"] : $this->getContext($context, "formAgence")), 'errors');
        echo "

        <fieldset>

            <legend>Agence</legend>

            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAgence"]) ? $context["formAgence"] : $this->getContext($context, "formAgence")), "Agences", array()), 'label', array("label_attr" => array("class" => "labelFormulaireSelectionAgence"), "label" => "Selection de l'agence :"));
        echo "
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAgence"]) ? $context["formAgence"] : $this->getContext($context, "formAgence")), "Agences", array()), 'errors');
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAgence"]) ? $context["formAgence"] : $this->getContext($context, "formAgence")), "Agences", array()), 'widget', array("attr" => array("class" => "selectFormulaireSelectionAgence")));
        echo "

        </fieldset>

        ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAgence"]) ? $context["formAgence"] : $this->getContext($context, "formAgence")), 'form_end');
        echo "

    </div>


    <div id='DivFormulaireParcourSuiviEnCours'>
        ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "formulaireParcourSuiviEnCours")));
        echo "
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        <fieldset>

            <legend>Selection du suivi</legend>

            <p>
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Suivi", array()), 'errors');
        echo "
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Suivi", array()), 'widget', array("attr" => array("class" => "selectFormulaireAdministrationAjoutProfil", "size" => 15)));
        echo "
            </p>

            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

            <p>
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Editer", array()), 'widget', array("attr" => array("class" => "submitFormulaireParcourSuiviEnCours")));
        echo "
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Supprimer", array()), 'widget', array("attr" => array("class" => "submitFormulaireParcourSuiviEnCours")));
        echo "
            </p>

        </fieldset>

        ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    </div>

";
        
        $__internal_693d86ec86b9d2abe294526d3b6ebc1ab47457e8ffcdb8bfaea9a93db7df1045->leave($__internal_693d86ec86b9d2abe294526d3b6ebc1ab47457e8ffcdb8bfaea9a93db7df1045_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetRessources/AssistantAffaire/assistantaffaireedition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 51,  142 => 46,  138 => 45,  132 => 42,  126 => 39,  122 => 38,  112 => 31,  108 => 30,  99 => 24,  92 => 20,  88 => 19,  84 => 18,  75 => 12,  71 => 11,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Parcourirs les suivis en cours {% endblock %}*/
/* */
/* {% block messageAccueil %}Parcourirs les suivis en cours{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div id='DivFormulaireSelectionAgence'>*/
/* */
/*         {{ form_start(formAgence, {'attr': {'class': 'formulaireSelectionAgence'}}) }}*/
/*         {{ form_errors(formAgence) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Agence</legend>*/
/* */
/*             {{ form_label(formAgence.Agences, "Selection de l'agence :", {'label_attr': {'class': 'labelFormulaireSelectionAgence'}}) }}*/
/*             {{ form_errors(formAgence.Agences) }}*/
/*             {{ form_widget(formAgence.Agences, {'attr': {'class': 'selectFormulaireSelectionAgence'}}) }}*/
/* */
/*         </fieldset>*/
/* */
/*         {{ form_end(formAgence) }}*/
/* */
/*     </div>*/
/* */
/* */
/*     <div id='DivFormulaireParcourSuiviEnCours'>*/
/*         {{ form_start(form, {'attr': {'class': 'formulaireParcourSuiviEnCours'}}) }}*/
/*         {{ form_errors(form) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Selection du suivi</legend>*/
/* */
/*             <p>*/
/*                 {{ form_errors(form.Suivi) }}*/
/*                 {{ form_widget(form.Suivi, {'attr': {'class': 'selectFormulaireAdministrationAjoutProfil', 'size': 15}}) }}*/
/*             </p>*/
/* */
/*             {{ form_widget(form._token) }}*/
/* */
/*             <p>*/
/*                 {{ form_widget(form.Editer, {'attr': {'class': 'submitFormulaireParcourSuiviEnCours' }}) }}*/
/*                 {{ form_widget(form.Supprimer, {'attr': {'class': 'submitFormulaireParcourSuiviEnCours' }}) }}*/
/*             </p>*/
/* */
/*         </fieldset>*/
/* */
/*         {{ form_end(form) }}*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
