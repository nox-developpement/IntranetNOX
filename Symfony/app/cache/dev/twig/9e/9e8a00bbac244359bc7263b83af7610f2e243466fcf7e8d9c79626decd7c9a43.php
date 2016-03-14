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
        $__internal_c01bd3de180466d6269d30c332041c10d240842af47b0f161a06a256c1a98c1c = $this->env->getExtension("native_profiler");
        $__internal_c01bd3de180466d6269d30c332041c10d240842af47b0f161a06a256c1a98c1c->enter($__internal_c01bd3de180466d6269d30c332041c10d240842af47b0f161a06a256c1a98c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireedition.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c01bd3de180466d6269d30c332041c10d240842af47b0f161a06a256c1a98c1c->leave($__internal_c01bd3de180466d6269d30c332041c10d240842af47b0f161a06a256c1a98c1c_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_e0e7b876c960a78e46792bf50ad5fd2c59eb2c87c60cc124a7d0c0221c0554d2 = $this->env->getExtension("native_profiler");
        $__internal_e0e7b876c960a78e46792bf50ad5fd2c59eb2c87c60cc124a7d0c0221c0554d2->enter($__internal_e0e7b876c960a78e46792bf50ad5fd2c59eb2c87c60cc124a7d0c0221c0554d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Parcourirs les suivis en cours ";
        
        $__internal_e0e7b876c960a78e46792bf50ad5fd2c59eb2c87c60cc124a7d0c0221c0554d2->leave($__internal_e0e7b876c960a78e46792bf50ad5fd2c59eb2c87c60cc124a7d0c0221c0554d2_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_b5038871d19c40290e0fd50f57049fbac3245be946f92becfc3f65f9565c91e7 = $this->env->getExtension("native_profiler");
        $__internal_b5038871d19c40290e0fd50f57049fbac3245be946f92becfc3f65f9565c91e7->enter($__internal_b5038871d19c40290e0fd50f57049fbac3245be946f92becfc3f65f9565c91e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Parcourirs les suivis en cours";
        
        $__internal_b5038871d19c40290e0fd50f57049fbac3245be946f92becfc3f65f9565c91e7->leave($__internal_b5038871d19c40290e0fd50f57049fbac3245be946f92becfc3f65f9565c91e7_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_98e15bc91f4c8fb855ef07296a6d79f345c2deac5be63f2a8fbccc67fb9d674a = $this->env->getExtension("native_profiler");
        $__internal_98e15bc91f4c8fb855ef07296a6d79f345c2deac5be63f2a8fbccc67fb9d674a->enter($__internal_98e15bc91f4c8fb855ef07296a6d79f345c2deac5be63f2a8fbccc67fb9d674a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionSuivi"]) ? $context["formSelectionSuivi"] : $this->getContext($context, "formSelectionSuivi")), 'form_start', array("attr" => array("class" => "formulaireParcourSuiviEnCours")));
        echo "
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSelectionSuivi"]) ? $context["formSelectionSuivi"] : $this->getContext($context, "formSelectionSuivi")), 'errors');
        echo "

        <fieldset>

            <legend>Selection du suivi</legend>

            <p>
                <label for=\"rechercehSuivi\">Recherche</label>
                <input placeholder=\"Ex : Ventes 2016\" type=\"text\" id=\"rechercehSuivi\"/>
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionSuivi"]) ? $context["formSelectionSuivi"] : $this->getContext($context, "formSelectionSuivi")), "Suivi", array()), 'errors');
        echo "
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionSuivi"]) ? $context["formSelectionSuivi"] : $this->getContext($context, "formSelectionSuivi")), "Suivi", array()), 'widget', array("attr" => array("class" => "selectFormulaireAdministrationAjoutProfil", "size" => 15)));
        echo "
            </p>

            <p>
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionSuivi"]) ? $context["formSelectionSuivi"] : $this->getContext($context, "formSelectionSuivi")), "Editer", array()), 'widget', array("attr" => array("class" => "submitFormulaireParcourSuiviEnCours")));
        echo "
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionSuivi"]) ? $context["formSelectionSuivi"] : $this->getContext($context, "formSelectionSuivi")), "Supprimer", array()), 'widget', array("attr" => array("class" => "submitFormulaireParcourSuiviEnCours")));
        echo "
            </p>

        </fieldset>

        ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionSuivi"]) ? $context["formSelectionSuivi"] : $this->getContext($context, "formSelectionSuivi")), 'form_end');
        echo "

    </div>

";
        
        $__internal_98e15bc91f4c8fb855ef07296a6d79f345c2deac5be63f2a8fbccc67fb9d674a->leave($__internal_98e15bc91f4c8fb855ef07296a6d79f345c2deac5be63f2a8fbccc67fb9d674a_prof);

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
        return array (  147 => 51,  139 => 46,  135 => 45,  128 => 41,  124 => 40,  112 => 31,  108 => 30,  99 => 24,  92 => 20,  88 => 19,  84 => 18,  75 => 12,  71 => 11,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
/*             <p>*/
/*                 {{ form_widget(formSelectionSuivi.Editer, {'attr': {'class': 'submitFormulaireParcourSuiviEnCours' }}) }}*/
/*                 {{ form_widget(formSelectionSuivi.Supprimer, {'attr': {'class': 'submitFormulaireParcourSuiviEnCours' }}) }}*/
/*             </p>*/
/* */
/*         </fieldset>*/
/* */
/*         {{ form_end(formSelectionSuivi) }}*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
