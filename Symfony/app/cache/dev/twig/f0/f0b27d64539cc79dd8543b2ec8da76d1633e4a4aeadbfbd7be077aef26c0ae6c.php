<?php

/* NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairetermine.html.twig */
class __TwigTemplate_0537a535386aa341c3ea8c69cea835bbe77f888a6326201cec7107de7bd9ac08 extends Twig_Template
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
        $__internal_47030cdff92f5d60a207b6b6687707854299f640bf9366e4db56994294b084ae = $this->env->getExtension("native_profiler");
        $__internal_47030cdff92f5d60a207b6b6687707854299f640bf9366e4db56994294b084ae->enter($__internal_47030cdff92f5d60a207b6b6687707854299f640bf9366e4db56994294b084ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairetermine.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47030cdff92f5d60a207b6b6687707854299f640bf9366e4db56994294b084ae->leave($__internal_47030cdff92f5d60a207b6b6687707854299f640bf9366e4db56994294b084ae_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_73120d4d202c89998040aa68947f741d4724aef7584fcdae47d0d24e76a1d5d4 = $this->env->getExtension("native_profiler");
        $__internal_73120d4d202c89998040aa68947f741d4724aef7584fcdae47d0d24e76a1d5d4->enter($__internal_73120d4d202c89998040aa68947f741d4724aef7584fcdae47d0d24e76a1d5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Parcourirs les suivis terminés ";
        
        $__internal_73120d4d202c89998040aa68947f741d4724aef7584fcdae47d0d24e76a1d5d4->leave($__internal_73120d4d202c89998040aa68947f741d4724aef7584fcdae47d0d24e76a1d5d4_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_1f67e758f9b3544dea7475efba8049fe08ee9a02c80dd33ec274e435053cef26 = $this->env->getExtension("native_profiler");
        $__internal_1f67e758f9b3544dea7475efba8049fe08ee9a02c80dd33ec274e435053cef26->enter($__internal_1f67e758f9b3544dea7475efba8049fe08ee9a02c80dd33ec274e435053cef26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Parcourirs les suivis terminés";
        
        $__internal_1f67e758f9b3544dea7475efba8049fe08ee9a02c80dd33ec274e435053cef26->leave($__internal_1f67e758f9b3544dea7475efba8049fe08ee9a02c80dd33ec274e435053cef26_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_9db72d7f87da8a620629c88d26ba84b4aded84aeeb635bfced8a43400bc10559 = $this->env->getExtension("native_profiler");
        $__internal_9db72d7f87da8a620629c88d26ba84b4aded84aeeb635bfced8a43400bc10559->enter($__internal_9db72d7f87da8a620629c88d26ba84b4aded84aeeb635bfced8a43400bc10559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div id='DivFormulaireSelectionAgence'>

        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionAgence"]) ? $context["formSelectionAgence"] : $this->getContext($context, "formSelectionAgence")), 'form_start', array("attr" => array("class" => "formulaireSelectionAgence")));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSelectionAgence"]) ? $context["formSelectionAgence"] : $this->getContext($context, "formSelectionAgence")), 'errors');
        echo "

        <fieldset>

            <legend><span>Agence</legend>

            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionAgence"]) ? $context["formSelectionAgence"] : $this->getContext($context, "formSelectionAgence")), "Agences", array()), 'label', array("label_attr" => array("class" => "labelFormulaireSelectionAgence"), "label" => "Selection de l'agence :"));
        echo "
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionAgence"]) ? $context["formSelectionAgence"] : $this->getContext($context, "formSelectionAgence")), "Agences", array()), 'errors');
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionAgence"]) ? $context["formSelectionAgence"] : $this->getContext($context, "formSelectionAgence")), "Agences", array()), 'widget', array("attr" => array("class" => "selectFormulaireSelectionAgence")));
        echo "

        </fieldset>

        ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionAgence"]) ? $context["formSelectionAgence"] : $this->getContext($context, "formSelectionAgence")), 'form_end');
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

            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionSuivi"]) ? $context["formSelectionSuivi"] : $this->getContext($context, "formSelectionSuivi")), "_token", array()), 'widget');
        echo "

            <p>
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionSuivi"]) ? $context["formSelectionSuivi"] : $this->getContext($context, "formSelectionSuivi")), "Consulter", array()), 'widget', array("attr" => array("class" => "submitFormulaireParcourSuiviEnCours")));
        echo "
            </p>

        </fieldset>

        ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionSuivi"]) ? $context["formSelectionSuivi"] : $this->getContext($context, "formSelectionSuivi")), 'form_end');
        echo "

    </div>

    <script>

    </script>

";
        
        $__internal_9db72d7f87da8a620629c88d26ba84b4aded84aeeb635bfced8a43400bc10559->leave($__internal_9db72d7f87da8a620629c88d26ba84b4aded84aeeb635bfced8a43400bc10559_prof);

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
        return array (  148 => 52,  140 => 47,  134 => 44,  128 => 41,  124 => 40,  112 => 31,  108 => 30,  99 => 24,  92 => 20,  88 => 19,  84 => 18,  75 => 12,  71 => 11,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
