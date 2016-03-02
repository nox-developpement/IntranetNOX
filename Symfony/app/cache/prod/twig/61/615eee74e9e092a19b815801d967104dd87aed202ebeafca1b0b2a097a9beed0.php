<?php

/* @NoxIntranetSupport/Ticket/newticket.html.twig */
class __TwigTemplate_17bd2ed2e3d094f1378d6844752595d065a1f30842c778d4f765c21c481d6a44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetSupport/Ticket/newticket.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
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
        echo " Nouveau ticket ";
    }

    // line 5
    public function block_contenu($context, array $blocks = array())
    {
        // line 6
        echo "
    <div id=\"divFormulaireNews\" >

        ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'form_start', array("attr" => array("id" => "formulaireNews")));
        echo "
        
        <h2> Ajouter un ticket </h2>

        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'errors');
        echo "


        ";
        // line 17
        echo "        ";
        // line 18
        echo "
        <div>
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "objet", array()), 'label', array("label_attr" => array("class" => "label"), "label" => "Objet du ticket : "));
        echo "

            ";
        // line 23
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "objet", array()), 'errors');
        echo "

            ";
        // line 26
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "objet", array()), 'widget', array("attr" => array("class" => "text")));
        echo "

        </div>

        <div>

            ";
        // line 33
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "contenu", array()), 'label', array("label_attr" => array("class" => "label"), "label" => "Contenu du ticket : "));
        echo "

            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "contenu", array()), 'widget', array("attr" => array("class" => "textArea")));
        echo "

            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "contenu", array()), 'errors');
        echo "

        </div>

        <p id=\"submitFormulaireNews\">

            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "valider", array()), 'widget', array("attr" => array("class" => "boutonFormulaire")));
        echo "

            ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'form_end');
        echo "

        </p>

    </div>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetSupport/Ticket/newticket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 45,  103 => 43,  94 => 37,  89 => 35,  83 => 33,  73 => 26,  67 => 23,  62 => 20,  58 => 18,  56 => 17,  50 => 13,  43 => 9,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Nouveau ticket {% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div id="divFormulaireNews" >*/
/* */
/*         {{ form_start(formulaire, {'attr': {'id': 'formulaireNews'}}) }}*/
/*         */
/*         <h2> Ajouter un ticket </h2>*/
/* */
/*         {{ form_errors(formulaire) }}*/
/* */
/* */
/*         {# Label et champ titre. #}*/
/*         {# Génération du label. #}*/
/* */
/*         <div>*/
/*             {{ form_label(formulaire.objet, "Objet du ticket : ", {'label_attr': {'class': 'label'}}) }}*/
/* */
/*             {# Affichage des erreurs pour ce champ précis. #}*/
/*             {{ form_errors(formulaire.objet) }}*/
/* */
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(formulaire.objet, {'attr': {'class': 'text'}}) }}*/
/* */
/*         </div>*/
/* */
/*         <div>*/
/* */
/*             {# Label et champ contenu. #}*/
/*             {{ form_label(formulaire.contenu, "Contenu du ticket : ", {'label_attr': {'class': 'label'}}) }}*/
/* */
/*             {{ form_widget(formulaire.contenu, {'attr': {'class': 'textArea'}}) }}*/
/* */
/*             {{ form_errors(formulaire.contenu) }}*/
/* */
/*         </div>*/
/* */
/*         <p id="submitFormulaireNews">*/
/* */
/*             {{ form_widget(formulaire.valider, {'attr': {'class': 'boutonFormulaire'}}) }}*/
/* */
/*             {{ form_end(formulaire) }}*/
/* */
/*         </p>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}{# empty Twig template #}*/
/* */
