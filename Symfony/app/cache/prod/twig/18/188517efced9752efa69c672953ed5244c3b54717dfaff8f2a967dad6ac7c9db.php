<?php

/* NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffairesedition.html.twig */
class __TwigTemplate_6a1bc463501a190bba973765bfdc1e2662160a24c10d253c4bed96baea9abe24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffairesedition.html.twig", 1);
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
        echo " Edition ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Administration assistant d'affaires";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <div class='DivFormulairePlacementChamp'>

        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : null), 'form_start', array("attr" => array("class" => "formulairePlacementChamp")));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : null), 'errors');
        echo "

        <fieldset>

            <legend>Placer un champ</legend>

            <p>
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : null), "IdChamp", array()), 'label', array("label_attr" => array("class" => "labelFormulairePlacementChamp"), "label" => "Nom :"));
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : null), "IdChamp", array()), 'errors');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : null), "IdChamp", array()), 'widget', array("attr" => array("class" => "texteFormulairePlacementChamp")));
        echo " 

                <br />

                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : null), "CoordonneesDonnees", array()), 'label', array("label_attr" => array("class" => "labelFormulairePlacementChamp"), "label" => "Coordonnees données :"));
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : null), "CoordonneesDonnees", array()), 'errors');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : null), "CoordonneesDonnees", array()), 'widget', array("attr" => array("class" => "textFormulairePlacementChamp")));
        echo "

                <br />

                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : null), "Placer", array()), 'widget', array("attr" => array("class" => "submitFormulairePlacementChamp", "class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : null), 'form_end');
        echo "

    </div>

    <div class='DivFormulaireSuppressionPositionChamp'>

        ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppresionPositionChamp"]) ? $context["formSuppresionPositionChamp"] : null), 'form_start', array("attr" => array("class" => "formulaireSuppressionPositionChamp")));
        echo "
        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSuppresionPositionChamp"]) ? $context["formSuppresionPositionChamp"] : null), 'errors');
        echo "

        <fieldset>

            <legend>Supprimer un champ</legend>

            <p>
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionPositionChamp"]) ? $context["formSuppresionPositionChamp"] : null), "IdChamp", array()), 'label', array("label_attr" => array("class" => "labelFormulaireSuppressionPositionChamp"), "label" => "Nom - Position"));
        echo " <br />
                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionPositionChamp"]) ? $context["formSuppresionPositionChamp"] : null), "IdChamp", array()), 'errors');
        echo "
                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionPositionChamp"]) ? $context["formSuppresionPositionChamp"] : null), "IdChamp", array()), 'widget', array("attr" => array("class" => "texteFormulaireSuppressionPositionChamp")));
        echo " 

                <br />

                ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionPositionChamp"]) ? $context["formSuppresionPositionChamp"] : null), "Supprimer", array()), 'widget', array("attr" => array("class" => "submitFormulaireSuppressionPositionChamp", "class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 61
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppresionPositionChamp"]) ? $context["formSuppresionPositionChamp"] : null), 'form_end');
        echo "

    </div>

    <div id='tableauExcel'>
        <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["imagePDF"]) ? $context["imagePDF"] : null), "html", null, true);
        echo "\" alt=\"Aperçu du fichier Excel\">
    </div>

";
    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffairesedition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 66,  148 => 61,  140 => 56,  133 => 52,  129 => 51,  125 => 50,  115 => 43,  111 => 42,  102 => 36,  94 => 31,  87 => 27,  83 => 26,  79 => 25,  72 => 21,  68 => 20,  64 => 19,  54 => 12,  50 => 11,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Edition {% endblock %}*/
/* */
/* {% block messageAccueil %}Administration assistant d'affaires{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div class='DivFormulairePlacementChamp'>*/
/* */
/*         {{ form_start(formPlacementChamp, {'attr': {'class': 'formulairePlacementChamp'}}) }}*/
/*         {{ form_errors(formPlacementChamp) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Placer un champ</legend>*/
/* */
/*             <p>*/
/*                 {{ form_label(formPlacementChamp.IdChamp, "Nom :", {'label_attr': {'class': 'labelFormulairePlacementChamp'}}) }}*/
/*                 {{ form_errors(formPlacementChamp.IdChamp) }}*/
/*                 {{ form_widget(formPlacementChamp.IdChamp, {'attr': {'class': 'texteFormulairePlacementChamp' }}) }} */
/* */
/*                 <br />*/
/* */
/*                 {{ form_label(formPlacementChamp.CoordonneesDonnees, "Coordonnees données :", {'label_attr': {'class': 'labelFormulairePlacementChamp'}}) }}*/
/*                 {{ form_errors(formPlacementChamp.CoordonneesDonnees) }}*/
/*                 {{ form_widget(formPlacementChamp.CoordonneesDonnees, {'attr': {'class': 'textFormulairePlacementChamp' }}) }}*/
/* */
/*                 <br />*/
/* */
/*                 {{ form_widget(formPlacementChamp.Placer, {'attr': {'class': 'submitFormulairePlacementChamp', 'class': 'boutonFormulaire' }}) }}*/
/*             </p>*/
/* */
/*         </fieldset> */
/* */
/*         {{ form_end(formPlacementChamp) }}*/
/* */
/*     </div>*/
/* */
/*     <div class='DivFormulaireSuppressionPositionChamp'>*/
/* */
/*         {{ form_start(formSuppresionPositionChamp, {'attr': {'class': 'formulaireSuppressionPositionChamp'}}) }}*/
/*         {{ form_errors(formSuppresionPositionChamp) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Supprimer un champ</legend>*/
/* */
/*             <p>*/
/*                 {{ form_label(formSuppresionPositionChamp.IdChamp, "Nom - Position", {'label_attr': {'class': 'labelFormulaireSuppressionPositionChamp'}}) }} <br />*/
/*                 {{ form_errors(formSuppresionPositionChamp.IdChamp) }}*/
/*                 {{ form_widget(formSuppresionPositionChamp.IdChamp, {'attr': {'class': 'texteFormulaireSuppressionPositionChamp' }}) }} */
/* */
/*                 <br />*/
/* */
/*                 {{ form_widget(formSuppresionPositionChamp.Supprimer, {'attr': {'class': 'submitFormulaireSuppressionPositionChamp', 'class': 'boutonFormulaire' }}) }}*/
/*             </p>*/
/* */
/*         </fieldset> */
/* */
/*         {{ form_end(formSuppresionPositionChamp) }}*/
/* */
/*     </div>*/
/* */
/*     <div id='tableauExcel'>*/
/*         <img src="{{ imagePDF }}" alt="Aperçu du fichier Excel">*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
