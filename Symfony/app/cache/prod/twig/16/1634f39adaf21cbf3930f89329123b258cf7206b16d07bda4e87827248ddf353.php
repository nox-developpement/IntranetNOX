<?php

/* NoxIntranetSupportSIBundle:Support:avancementProjet.html.twig */
class __TwigTemplate_e0327ca87ccd19e9a51d5d2c4033336fea868b1df46a8b1da54d0ad1adda00c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetSupportSIBundle:Support:avancementProjet.html.twig", 1);
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
        echo "    Avancement projet
";
    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Avancement projet";
    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        // line 10
        echo "
    <div class='zoneEdition'>
        
        <button id='texteEditButton' class='boutonFormulaire'>Editer</button>
        
        ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'form_start', array("attr" => array("id" => "formulaireTexte")));
        echo "

        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'errors');
        echo "

        ";
        // line 20
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "text", array()), 'errors');
        echo "

        ";
        // line 23
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "text", array()), 'widget', array("attr" => array("class" => "textField")));
        echo "

        ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'form_end');
        echo "

    </div>

    <div class='zoneTexte'>
        ";
        // line 30
        echo (isset($context["texte"]) ? $context["texte"] : null);
        echo "
    </di>

";
    }

    public function getTemplateName()
    {
        return "NoxIntranetSupportSIBundle:Support:avancementProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 30,  76 => 25,  70 => 23,  64 => 20,  59 => 17,  54 => 15,  47 => 10,  44 => 9,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Avancement projet*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Avancement projet{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div class='zoneEdition'>*/
/*         */
/*         <button id='texteEditButton' class='boutonFormulaire'>Editer</button>*/
/*         */
/*         {{ form_start(formulaire, {'attr': {'id': 'formulaireTexte' }}) }}*/
/* */
/*         {{ form_errors(formulaire) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(formulaire.text) }}*/
/* */
/*         {# Génération de l'input. #}*/
/*         {{ form_widget(formulaire.text, {'attr': {'class': 'textField' }}) }}*/
/* */
/*         {{ form_end(formulaire) }}*/
/* */
/*     </div>*/
/* */
/*     <div class='zoneTexte'>*/
/*         {{ texte|raw }}*/
/*     </di>*/
/* */
/* {% endblock %}*/
/* */
