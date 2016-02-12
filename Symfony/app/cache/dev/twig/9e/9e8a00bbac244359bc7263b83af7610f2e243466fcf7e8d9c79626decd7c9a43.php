<?php

/* NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireedition.html.twig */
class __TwigTemplate_845d4d419b5d399c76e7ff823a78d361549c40ac5d15b2150305d5dcea9ebe5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireedition.html.twig", 1);
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
        $__internal_25320c620f551380021237c9ddd68726114e8ee90aff50e2cc5130fd685b6333 = $this->env->getExtension("native_profiler");
        $__internal_25320c620f551380021237c9ddd68726114e8ee90aff50e2cc5130fd685b6333->enter($__internal_25320c620f551380021237c9ddd68726114e8ee90aff50e2cc5130fd685b6333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireedition.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25320c620f551380021237c9ddd68726114e8ee90aff50e2cc5130fd685b6333->leave($__internal_25320c620f551380021237c9ddd68726114e8ee90aff50e2cc5130fd685b6333_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_79cd4a438ae29a7f8da3aa0db913a47b0c64721d6c1f232e0ab223cdd6cb9a59 = $this->env->getExtension("native_profiler");
        $__internal_79cd4a438ae29a7f8da3aa0db913a47b0c64721d6c1f232e0ab223cdd6cb9a59->enter($__internal_79cd4a438ae29a7f8da3aa0db913a47b0c64721d6c1f232e0ab223cdd6cb9a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Parcourirs les suivis en cours ";
        
        $__internal_79cd4a438ae29a7f8da3aa0db913a47b0c64721d6c1f232e0ab223cdd6cb9a59->leave($__internal_79cd4a438ae29a7f8da3aa0db913a47b0c64721d6c1f232e0ab223cdd6cb9a59_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_2ce528b2bfc8c658147b4a2df78fbface67bd1f110c7983f4f672a3e938764c3 = $this->env->getExtension("native_profiler");
        $__internal_2ce528b2bfc8c658147b4a2df78fbface67bd1f110c7983f4f672a3e938764c3->enter($__internal_2ce528b2bfc8c658147b4a2df78fbface67bd1f110c7983f4f672a3e938764c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Parcourirs les suivis en cours";
        
        $__internal_2ce528b2bfc8c658147b4a2df78fbface67bd1f110c7983f4f672a3e938764c3->leave($__internal_2ce528b2bfc8c658147b4a2df78fbface67bd1f110c7983f4f672a3e938764c3_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_5f00d04285bef56ed6e877f89547394c192c769b82e45a3fda5df00f8ec0592e = $this->env->getExtension("native_profiler");
        $__internal_5f00d04285bef56ed6e877f89547394c192c769b82e45a3fda5df00f8ec0592e->enter($__internal_5f00d04285bef56ed6e877f89547394c192c769b82e45a3fda5df00f8ec0592e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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

    <script>

    </script>

";
        
        $__internal_5f00d04285bef56ed6e877f89547394c192c769b82e45a3fda5df00f8ec0592e->leave($__internal_5f00d04285bef56ed6e877f89547394c192c769b82e45a3fda5df00f8ec0592e_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireedition.html.twig";
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
/*     <script>*/
/* */
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
