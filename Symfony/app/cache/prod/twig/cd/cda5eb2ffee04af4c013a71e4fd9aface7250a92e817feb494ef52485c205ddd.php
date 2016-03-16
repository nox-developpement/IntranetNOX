<?php

/* NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairecreationchoixmodele.html.twig */
class __TwigTemplate_857a5144110e349eb661a1b648c4bd1a808cfd383dbc4b3b5c1ab253ef478161 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairecreationchoixmodele.html.twig", 1);
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
        echo " Choix du modèle ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Choix du modèle - ";
        echo twig_escape_filter($this->env, (isset($context["profil"]) ? $context["profil"] : null), "html", null, true);
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <div id=\"DivFormulaireChoixModele\">

        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "formulaireChoixModele")));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

        <fieldset>

            <legend>Choix du modèle - ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["profil"]) ? $context["profil"] : null), "html", null, true);
        echo "</legend>

            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "IdModele", array()), 'label', array("label_attr" => array("class" => "labelFormulaireChoixModele"), "label" => "Modèle du suivi :"));
        echo "
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "IdModele", array()), 'errors');
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "IdModele", array()), 'widget', array("attr" => array("class" => "selectFormulaireChoixModèle")));
        echo "

            <br />

            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Choisir", array()), 'widget', array("label" => "Choisir ce modèle", "attr" => array("class" => "boutonFormulaire")));
        echo "


        </fieldset> 

        ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

    </div>

";
    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairecreationchoixmodele.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 29,  82 => 24,  75 => 20,  71 => 19,  67 => 18,  62 => 16,  55 => 12,  51 => 11,  46 => 8,  43 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Choix du modèle {% endblock %}*/
/* */
/* {% block messageAccueil %}Choix du modèle - {{ profil }}{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div id="DivFormulaireChoixModele">*/
/* */
/*         {{ form_start(form, {'attr': {'class': 'formulaireChoixModele'}}) }}*/
/*         {{ form_errors(form) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Choix du modèle - {{ profil }}</legend>*/
/* */
/*             {{ form_label(form.IdModele, "Modèle du suivi :", {'label_attr': {'class': 'labelFormulaireChoixModele'}}) }}*/
/*             {{ form_errors(form.IdModele) }}*/
/*             {{ form_widget(form.IdModele, {'attr': {'class': 'selectFormulaireChoixModèle'}}) }}*/
/* */
/*             <br />*/
/* */
/*             {{ form_widget(form.Choisir, {'label': 'Choisir ce modèle', 'attr': {'class': 'boutonFormulaire' }}) }}*/
/* */
/* */
/*         </fieldset> */
/* */
/*         {{ form_end(form) }}*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
