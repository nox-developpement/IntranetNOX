<?php

/* NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffairesedition.html.twig */
class __TwigTemplate_d0ac075ec6a13b7ceea52c00724820e3a3d84dccb24e8bd975d7193b723c33c1 extends Twig_Template
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
        $__internal_490e59a6b0b162be13a7e8dec9a66e2c5e63ca2b2af019dc56f1a4db1b1da029 = $this->env->getExtension("native_profiler");
        $__internal_490e59a6b0b162be13a7e8dec9a66e2c5e63ca2b2af019dc56f1a4db1b1da029->enter($__internal_490e59a6b0b162be13a7e8dec9a66e2c5e63ca2b2af019dc56f1a4db1b1da029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffairesedition.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_490e59a6b0b162be13a7e8dec9a66e2c5e63ca2b2af019dc56f1a4db1b1da029->leave($__internal_490e59a6b0b162be13a7e8dec9a66e2c5e63ca2b2af019dc56f1a4db1b1da029_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_f1be3adfedcc420756fb6a46ef5f1493aa95521455fe0c8e6742f984e3c6dc69 = $this->env->getExtension("native_profiler");
        $__internal_f1be3adfedcc420756fb6a46ef5f1493aa95521455fe0c8e6742f984e3c6dc69->enter($__internal_f1be3adfedcc420756fb6a46ef5f1493aa95521455fe0c8e6742f984e3c6dc69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Edition ";
        
        $__internal_f1be3adfedcc420756fb6a46ef5f1493aa95521455fe0c8e6742f984e3c6dc69->leave($__internal_f1be3adfedcc420756fb6a46ef5f1493aa95521455fe0c8e6742f984e3c6dc69_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_fb2bb0b0fc9ef460d07ef42ca60797bfbcac4ca08ff2616b577b4cf666523577 = $this->env->getExtension("native_profiler");
        $__internal_fb2bb0b0fc9ef460d07ef42ca60797bfbcac4ca08ff2616b577b4cf666523577->enter($__internal_fb2bb0b0fc9ef460d07ef42ca60797bfbcac4ca08ff2616b577b4cf666523577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration assistant d'affaires";
        
        $__internal_fb2bb0b0fc9ef460d07ef42ca60797bfbcac4ca08ff2616b577b4cf666523577->leave($__internal_fb2bb0b0fc9ef460d07ef42ca60797bfbcac4ca08ff2616b577b4cf666523577_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_989b9ee7384f7da2fa1d5ac1c871ce8bf738c03910b7232203869ddf0bec4153 = $this->env->getExtension("native_profiler");
        $__internal_989b9ee7384f7da2fa1d5ac1c871ce8bf738c03910b7232203869ddf0bec4153->enter($__internal_989b9ee7384f7da2fa1d5ac1c871ce8bf738c03910b7232203869ddf0bec4153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div class='DivFormulairePlacementChamp'>

        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), 'form_start', array("attr" => array("class" => "formulairePlacementChamp")));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), 'errors');
        echo "

        <fieldset>

            <legend>Placer un champ</legend>

            <p>
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), "IdChamp", array()), 'label', array("label_attr" => array("class" => "labelFormulairePlacementChamp"), "label" => "Nom :"));
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), "IdChamp", array()), 'errors');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), "IdChamp", array()), 'widget', array("attr" => array("class" => "texteFormulairePlacementChamp")));
        echo " 

                <br />

                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), "CoordonneesDonnees", array()), 'label', array("label_attr" => array("class" => "labelFormulairePlacementChamp"), "label" => "Coordonnees données :"));
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), "CoordonneesDonnees", array()), 'errors');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), "CoordonneesDonnees", array()), 'widget', array("attr" => array("class" => "textFormulairePlacementChamp")));
        echo "

                <br />

                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), "Placer", array()), 'widget', array("attr" => array("class" => "submitFormulairePlacementChamp", "class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), 'form_end');
        echo "

    </div>

    <div class='DivFormulaireSuppressionPositionChamp'>

        ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppresionPositionChamp"]) ? $context["formSuppresionPositionChamp"] : $this->getContext($context, "formSuppresionPositionChamp")), 'form_start', array("attr" => array("class" => "formulaireSuppressionPositionChamp")));
        echo "
        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSuppresionPositionChamp"]) ? $context["formSuppresionPositionChamp"] : $this->getContext($context, "formSuppresionPositionChamp")), 'errors');
        echo "

        <fieldset>

            <legend>Supprimer un champ</legend>

            <p>
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionPositionChamp"]) ? $context["formSuppresionPositionChamp"] : $this->getContext($context, "formSuppresionPositionChamp")), "IdChamp", array()), 'label', array("label_attr" => array("class" => "labelFormulaireSuppressionPositionChamp"), "label" => "Nom - Position"));
        echo " <br />
                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionPositionChamp"]) ? $context["formSuppresionPositionChamp"] : $this->getContext($context, "formSuppresionPositionChamp")), "IdChamp", array()), 'errors');
        echo "
                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionPositionChamp"]) ? $context["formSuppresionPositionChamp"] : $this->getContext($context, "formSuppresionPositionChamp")), "IdChamp", array()), 'widget', array("attr" => array("class" => "texteFormulaireSuppressionPositionChamp")));
        echo " 

                <br />

                ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionPositionChamp"]) ? $context["formSuppresionPositionChamp"] : $this->getContext($context, "formSuppresionPositionChamp")), "Supprimer", array()), 'widget', array("attr" => array("class" => "submitFormulaireSuppressionPositionChamp", "class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 61
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppresionPositionChamp"]) ? $context["formSuppresionPositionChamp"] : $this->getContext($context, "formSuppresionPositionChamp")), 'form_end');
        echo "

    </div>

    <div id='tableauExcel'>
        <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["imagePDF"]) ? $context["imagePDF"] : $this->getContext($context, "imagePDF")), "html", null, true);
        echo "\" alt=\"Aperçu du fichier Excel\">
    </div>

";
        
        $__internal_989b9ee7384f7da2fa1d5ac1c871ce8bf738c03910b7232203869ddf0bec4153->leave($__internal_989b9ee7384f7da2fa1d5ac1c871ce8bf738c03910b7232203869ddf0bec4153_prof);

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
        return array (  177 => 66,  169 => 61,  161 => 56,  154 => 52,  150 => 51,  146 => 50,  136 => 43,  132 => 42,  123 => 36,  115 => 31,  108 => 27,  104 => 26,  100 => 25,  93 => 21,  89 => 20,  85 => 19,  75 => 12,  71 => 11,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
