<?php

/* @NoxIntranetAdministration/AdministrationAffaires/administrationaffaireseditionchamp.html.twig */
class __TwigTemplate_67008091c32c5c8148101a824dfa4e10bb85ef48e6e727d02d89e1ee4e02f2dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetAdministration/AdministrationAffaires/administrationaffaireseditionchamp.html.twig", 1);
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
        echo " Edition de champ ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Edition de champ - ";
        echo twig_escape_filter($this->env, (isset($context["champ"]) ? $context["champ"] : null), "html", null, true);
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <div class='DivFormulaireAjoutDonnee'>

        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutDonnee"]) ? $context["formAjoutDonnee"] : null), 'form_start', array("attr" => array("class" => "formulaireAjoutDonnee")));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAjoutDonnee"]) ? $context["formAjoutDonnee"] : null), 'errors');
        echo "

        <fieldset>

            <legend>Ajouter une donnée</legend>       

            <p>
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutDonnee"]) ? $context["formAjoutDonnee"] : null), "Donnee", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutDonnee"), "label" => "Donnée :"));
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutDonnee"]) ? $context["formAjoutDonnee"] : null), "Donnee", array()), 'errors');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutDonnee"]) ? $context["formAjoutDonnee"] : null), "Donnee", array()), 'widget', array("attr" => array("class" => "selectFormulaireAjoutDonnee")));
        echo "
            </p>

            <p>
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutDonnee"]) ? $context["formAjoutDonnee"] : null), "_token", array()), 'widget');
        echo " 

                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutDonnee"]) ? $context["formAjoutDonnee"] : null), "Ajouter", array()), 'widget', array("attr" => array("class" => "submitFormulaireAjoutDonne", "class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutDonnee"]) ? $context["formAjoutDonnee"] : null), 'form_end');
        echo "

    </div>

    <div class='DivFormulaireSuppressionDonnee'>

        ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionDonnee"]) ? $context["formSuppressionDonnee"] : null), 'form_start', array("attr" => array("class" => "formulaireSuppresionDonnee")));
        echo "
        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSuppressionDonnee"]) ? $context["formSuppressionDonnee"] : null), 'errors');
        echo "

        <fieldset>

            <legend>Supprimer une donnée</legend>       

            <p>
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionDonnee"]) ? $context["formSuppressionDonnee"] : null), "Donnees", array()), 'label', array("label_attr" => array("class" => "labelFormulaireSuppressionDonnee"), "label" => "Donnée :"));
        echo "
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionDonnee"]) ? $context["formSuppressionDonnee"] : null), "Donnees", array()), 'errors');
        echo "
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionDonnee"]) ? $context["formSuppressionDonnee"] : null), "Donnees", array()), 'widget', array("attr" => array("class" => "selectFormulaireSuppressionDonnee")));
        echo "
            </p>

            <p>
                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionDonnee"]) ? $context["formSuppressionDonnee"] : null), "_token", array()), 'widget');
        echo " 

                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionDonnee"]) ? $context["formSuppressionDonnee"] : null), "Supprimer", array()), 'widget', array("attr" => array("class" => "submitFormulaireSuppressionDonne", "class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionDonnee"]) ? $context["formSuppressionDonnee"] : null), 'form_end');
        echo "

    </div>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetAdministration/AdministrationAffaires/administrationaffaireseditionchamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 59,  136 => 54,  131 => 52,  124 => 48,  120 => 47,  116 => 46,  106 => 39,  102 => 38,  93 => 32,  85 => 27,  80 => 25,  73 => 21,  69 => 20,  65 => 19,  55 => 12,  51 => 11,  46 => 8,  43 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Edition de champ {% endblock %}*/
/* */
/* {% block messageAccueil %}Edition de champ - {{ champ }}{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div class='DivFormulaireAjoutDonnee'>*/
/* */
/*         {{ form_start(formAjoutDonnee, {'attr': {'class': 'formulaireAjoutDonnee'}}) }}*/
/*         {{ form_errors(formAjoutDonnee) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Ajouter une donnée</legend>       */
/* */
/*             <p>*/
/*                 {{ form_label(formAjoutDonnee.Donnee, "Donnée :", {'label_attr': {'class': 'labelFormulaireAjoutDonnee'}}) }}*/
/*                 {{ form_errors(formAjoutDonnee.Donnee) }}*/
/*                 {{ form_widget(formAjoutDonnee.Donnee, {'attr': {'class': 'selectFormulaireAjoutDonnee' }}) }}*/
/*             </p>*/
/* */
/*             <p>*/
/*                 {{ form_widget(formAjoutDonnee._token) }} */
/* */
/*                 {{ form_widget(formAjoutDonnee.Ajouter, {'attr': {'class': 'submitFormulaireAjoutDonne', 'class': 'boutonFormulaire' }}) }}*/
/*             </p>*/
/* */
/*         </fieldset> */
/* */
/*         {{ form_end(formAjoutDonnee) }}*/
/* */
/*     </div>*/
/* */
/*     <div class='DivFormulaireSuppressionDonnee'>*/
/* */
/*         {{ form_start(formSuppressionDonnee, {'attr': {'class': 'formulaireSuppresionDonnee'}}) }}*/
/*         {{ form_errors(formSuppressionDonnee) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Supprimer une donnée</legend>       */
/* */
/*             <p>*/
/*                 {{ form_label(formSuppressionDonnee.Donnees, "Donnée :", {'label_attr': {'class': 'labelFormulaireSuppressionDonnee'}}) }}*/
/*                 {{ form_errors(formSuppressionDonnee.Donnees) }}*/
/*                 {{ form_widget(formSuppressionDonnee.Donnees, {'attr': {'class': 'selectFormulaireSuppressionDonnee' }}) }}*/
/*             </p>*/
/* */
/*             <p>*/
/*                 {{ form_widget(formSuppressionDonnee._token) }} */
/* */
/*                 {{ form_widget(formSuppressionDonnee.Supprimer, {'attr': {'class': 'submitFormulaireSuppressionDonne', 'class': 'boutonFormulaire' }}) }}*/
/*             </p>*/
/* */
/*         </fieldset> */
/* */
/*         {{ form_end(formSuppressionDonnee) }}*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
