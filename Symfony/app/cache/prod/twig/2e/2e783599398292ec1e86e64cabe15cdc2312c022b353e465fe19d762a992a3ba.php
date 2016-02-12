<?php

/* NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairecreation.html.twig */
class __TwigTemplate_cb62de792a2df447bbc1983dfd1728c8b345f14caf2ae86c45262450975195bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairecreation.html.twig", 1);
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
        echo " Création de suivi ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Création de suivi";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <div id=\"DivCreationSuivi\">

        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "formulaireCreationSuivi")));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

        <fieldset>

            <legend><span>Ajouter un suivi</span></legend>

            <p>

                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Nom", array()), 'label', array("label_attr" => array("class" => "labelFormulaireCreationSuivi"), "label" => "Nom du suivi :"));
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Nom", array()), 'errors');
        echo "
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Nom", array()), 'widget', array("attr" => array("class" => "textFormulaireCreationSuivi")));
        echo "

                <br />

                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Agence", array()), 'label', array("label_attr" => array("class" => "labelFormulaireCreationSuivi"), "label" => "Agence :"));
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Agence", array()), 'errors');
        echo "
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Agence", array()), 'widget', array("attr" => array("class" => "textFormulaireCreationSuivi")));
        echo "

                <br />

                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "NumeroGX", array()), 'label', array("label_attr" => array("class" => "labelFormulaireCreationSuivi"), "label" => "Numéro GX :"));
        echo "
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "NumeroGX", array()), 'errors');
        echo "
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "NumeroGX", array()), 'widget', array("attr" => array("class" => "textFormulaireCreationSuivi", "min" => 1, "step" => 1)));
        echo "

                <br />

                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Profil", array()), 'label', array("label_attr" => array("class" => "labelFormulaireCreationSuivi"), "label" => "Profil :"));
        echo "
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Profil", array()), 'errors');
        echo "
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Profil", array()), 'widget', array("attr" => array("class" => "selectFormulaireCreationSuivi")));
        echo "

                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "

                <br />

                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Créer", array()), 'widget', array("label" => "Créer suivi", "attr" => array("class" => "submitFormulaireCreationSuivi", "class" => "boutonFormulaire")));
        echo "

            </p>

        </fieldset> 

        ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

    </div>

";
    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairecreation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 52,  130 => 46,  123 => 42,  118 => 40,  114 => 39,  110 => 38,  103 => 34,  99 => 33,  95 => 32,  88 => 28,  84 => 27,  80 => 26,  73 => 22,  69 => 21,  65 => 20,  54 => 12,  50 => 11,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Création de suivi {% endblock %}*/
/* */
/* {% block messageAccueil %}Création de suivi{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div id="DivCreationSuivi">*/
/* */
/*         {{ form_start(form, {'attr': {'class': 'formulaireCreationSuivi'}}) }}*/
/*         {{ form_errors(form) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend><span>Ajouter un suivi</span></legend>*/
/* */
/*             <p>*/
/* */
/*                 {{ form_label(form.Nom, "Nom du suivi :", {'label_attr': {'class': 'labelFormulaireCreationSuivi'}}) }}*/
/*                 {{ form_errors(form.Nom) }}*/
/*                 {{ form_widget(form.Nom, {'attr': {'class': 'textFormulaireCreationSuivi'}}) }}*/
/* */
/*                 <br />*/
/* */
/*                 {{ form_label(form.Agence, "Agence :", {'label_attr': {'class': 'labelFormulaireCreationSuivi'}}) }}*/
/*                 {{ form_errors(form.Agence) }}*/
/*                 {{ form_widget(form.Agence, {'attr': {'class': 'textFormulaireCreationSuivi'}}) }}*/
/* */
/*                 <br />*/
/* */
/*                 {{ form_label(form.NumeroGX, "Numéro GX :", {'label_attr': {'class': 'labelFormulaireCreationSuivi'}}) }}*/
/*                 {{ form_errors(form.NumeroGX) }}*/
/*                 {{ form_widget(form.NumeroGX, {'attr': {'class': 'textFormulaireCreationSuivi', 'min': 1 , 'step': 1 }}) }}*/
/* */
/*                 <br />*/
/* */
/*                 {{ form_label(form.Profil, "Profil :", {'label_attr': {'class': 'labelFormulaireCreationSuivi'}}) }}*/
/*                 {{ form_errors(form.Profil) }}*/
/*                 {{ form_widget(form.Profil, {'attr': {'class': 'selectFormulaireCreationSuivi'}}) }}*/
/* */
/*                 {{ form_widget(form._token) }}*/
/* */
/*                 <br />*/
/* */
/*                 {{ form_widget(form.Créer, {'label': 'Créer suivi', 'attr': {'class': 'submitFormulaireCreationSuivi', 'class': 'boutonFormulaire' }}) }}*/
/* */
/*             </p>*/
/* */
/*         </fieldset> */
/* */
/*         {{ form_end(form) }}*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
