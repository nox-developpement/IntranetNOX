<?php

/* NoxIntranetAccueilBundle:EditionAnnonces:editionAnnonces.html.twig */
class __TwigTemplate_8cbc225756abded42279bc3d173856027c7f3be04ae7b8dc6704fe63604f2e68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAccueilBundle:EditionAnnonces:editionAnnonces.html.twig", 1);
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
        echo " Edition annonces ";
        echo twig_escape_filter($this->env, (isset($context["categorie"]) ? $context["categorie"] : null), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Edition annonces ";
        echo twig_escape_filter($this->env, (isset($context["categorie"]) ? $context["categorie"] : null), "html", null, true);
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <div id='DivFormulaireSuppresionAnnonce'>
        ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionAnnonce"]) ? $context["formSuppressionAnnonce"] : null), 'form_start', array("attr" => array("class" => "formulaireSuppressionAnnonce")));
        echo "
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSuppressionAnnonce"]) ? $context["formSuppressionAnnonce"] : null), 'errors');
        echo "

        <fieldset>

            <legend>Supprimer annonce</legend>

            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionAnnonce"]) ? $context["formSuppressionAnnonce"] : null), "Message", array()), 'errors');
        echo "
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionAnnonce"]) ? $context["formSuppressionAnnonce"] : null), "Message", array()), 'widget', array("attr" => array("class" => "selectFormulaireSuppressionAnnonce", "size" => 15)));
        echo "

            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionAnnonce"]) ? $context["formSuppressionAnnonce"] : null), "_token", array()), 'widget');
        echo "

            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionAnnonce"]) ? $context["formSuppressionAnnonce"] : null), "Supprimer", array()), 'widget', array("attr" => array("class" => "boutonFormulaire")));
        echo "

        </fieldset>

        ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionAnnonce"]) ? $context["formSuppressionAnnonce"] : null), 'form_end');
        echo "

    </div>

    <div id='DivFormulaireAjoutAnnonce'>
        ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutAnnonce"]) ? $context["formAjoutAnnonce"] : null), 'form_start', array("attr" => array("class" => "formulaireAjoutAnnonce")));
        echo "
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAjoutAnnonce"]) ? $context["formAjoutAnnonce"] : null), 'errors');
        echo "

        <fieldset>

            <legend><span>Ajouter annonce</span></legend>

            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutAnnonce"]) ? $context["formAjoutAnnonce"] : null), "Message", array()), 'errors');
        echo "
            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutAnnonce"]) ? $context["formAjoutAnnonce"] : null), "Message", array()), 'widget', array("attr" => array("class" => "textFormulaireAjoutAnnonce", "width" => "98%")));
        echo "

            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutAnnonce"]) ? $context["formAjoutAnnonce"] : null), "_token", array()), 'widget');
        echo "

            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutAnnonce"]) ? $context["formAjoutAnnonce"] : null), "Ajouter", array()), 'widget', array("attr" => array("class" => "boutonFormulaire")));
        echo "

        </fieldset>

        ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutAnnonce"]) ? $context["formAjoutAnnonce"] : null), 'form_end');
        echo "

    </div>

";
    }

    public function getTemplateName()
    {
        return "NoxIntranetAccueilBundle:EditionAnnonces:editionAnnonces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 47,  121 => 43,  116 => 41,  111 => 39,  107 => 38,  98 => 32,  94 => 31,  86 => 26,  79 => 22,  74 => 20,  69 => 18,  65 => 17,  56 => 11,  52 => 10,  48 => 8,  45 => 7,  38 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Edition annonces {{ categorie }} {% endblock %}*/
/* */
/* {% block messageAccueil %}Edition annonces {{ categorie }}{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div id='DivFormulaireSuppresionAnnonce'>*/
/*         {{ form_start(formSuppressionAnnonce, {'attr': {'class': 'formulaireSuppressionAnnonce'}}) }}*/
/*         {{ form_errors(formSuppressionAnnonce) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Supprimer annonce</legend>*/
/* */
/*             {{ form_errors(formSuppressionAnnonce.Message) }}*/
/*             {{ form_widget(formSuppressionAnnonce.Message, {'attr': {'class': 'selectFormulaireSuppressionAnnonce', 'size': 15}}) }}*/
/* */
/*             {{ form_widget(formSuppressionAnnonce._token) }}*/
/* */
/*             {{ form_widget(formSuppressionAnnonce.Supprimer, {'attr': {'class': 'boutonFormulaire' }}) }}*/
/* */
/*         </fieldset>*/
/* */
/*         {{ form_end(formSuppressionAnnonce) }}*/
/* */
/*     </div>*/
/* */
/*     <div id='DivFormulaireAjoutAnnonce'>*/
/*         {{ form_start(formAjoutAnnonce, {'attr': {'class': 'formulaireAjoutAnnonce'}}) }}*/
/*         {{ form_errors(formAjoutAnnonce) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend><span>Ajouter annonce</span></legend>*/
/* */
/*             {{ form_errors(formAjoutAnnonce.Message) }}*/
/*             {{ form_widget(formAjoutAnnonce.Message, {'attr': {'class': 'textFormulaireAjoutAnnonce', 'width': '98%'}}) }}*/
/* */
/*             {{ form_widget(formAjoutAnnonce._token) }}*/
/* */
/*             {{ form_widget(formAjoutAnnonce.Ajouter, {'attr': {'class': 'boutonFormulaire' }}) }}*/
/* */
/*         </fieldset>*/
/* */
/*         {{ form_end(formAjoutAnnonce) }}*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
