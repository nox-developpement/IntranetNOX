<?php

/* NoxIntranetRessourcesBundle:AQ:modesOperatoires.html.twig */
class __TwigTemplate_06cb41cfdcfd3df7a8bd391ec9dc5cd858f0f4ed39f61f0d23043e6773fc3cc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:AQ:modesOperatoires.html.twig", 1);
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
        // line 4
        echo "    Modes opératoires
";
    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Modes opératoires";
    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        // line 10
        echo "
    ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_QUALITE")) {
            // line 12
            echo "
        <div class='zoneEdition'>

            <button id='texteEditButton' class='boutonFormulaire'>Editer</button>

            ";
            // line 17
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'form_start', array("attr" => array("id" => "formulaireTexte")));
            echo "

            ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'errors');
            echo "

            ";
            // line 22
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "text", array()), 'errors');
            echo "

            ";
            // line 25
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "text", array()), 'widget', array("attr" => array("class" => "textField")));
            echo "

            ";
            // line 27
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'form_end');
            echo "

        </div>

    ";
        }
        // line 32
        echo "
    <div class='zoneTexte'>
        ";
        // line 34
        echo (isset($context["texte"]) ? $context["texte"] : null);
        echo "
    </di>

";
    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:AQ:modesOperatoires.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 34,  89 => 32,  81 => 27,  75 => 25,  69 => 22,  64 => 19,  59 => 17,  52 => 12,  50 => 11,  47 => 10,  44 => 9,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Modes opératoires*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Modes opératoires{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     {% if is_granted('ROLE_QUALITE') %}*/
/* */
/*         <div class='zoneEdition'>*/
/* */
/*             <button id='texteEditButton' class='boutonFormulaire'>Editer</button>*/
/* */
/*             {{ form_start(formulaire, {'attr': {'id': 'formulaireTexte' }}) }}*/
/* */
/*             {{ form_errors(formulaire) }}*/
/* */
/*             {# Affichage des erreurs pour ce champ précis. #}*/
/*             {{ form_errors(formulaire.text) }}*/
/* */
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(formulaire.text, {'attr': {'class': 'textField' }}) }}*/
/* */
/*             {{ form_end(formulaire) }}*/
/* */
/*         </div>*/
/* */
/*     {% endif %}*/
/* */
/*     <div class='zoneTexte'>*/
/*         {{ texte|raw }}*/
/*     </di>*/
/* */
/* {% endblock %}*/
/* */
