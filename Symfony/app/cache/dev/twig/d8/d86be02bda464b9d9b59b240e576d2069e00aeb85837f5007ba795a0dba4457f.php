<?php

/* NoxIntranetSupportSIBundle:Support:avancementProjet.html.twig */
class __TwigTemplate_8a0059292fa26edbd25cdf1c62444c823bb1e416027be5648e304670e621ee77 extends Twig_Template
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
        $__internal_57174e480e48e1afa375353f2c39633df669932ae1d0e7719590f5bbc1039fc8 = $this->env->getExtension("native_profiler");
        $__internal_57174e480e48e1afa375353f2c39633df669932ae1d0e7719590f5bbc1039fc8->enter($__internal_57174e480e48e1afa375353f2c39633df669932ae1d0e7719590f5bbc1039fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetSupportSIBundle:Support:avancementProjet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57174e480e48e1afa375353f2c39633df669932ae1d0e7719590f5bbc1039fc8->leave($__internal_57174e480e48e1afa375353f2c39633df669932ae1d0e7719590f5bbc1039fc8_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_053fdcd630de3fb3ec8a9566a3d68f544fc50cd9f753199712f3fdac4fdf58de = $this->env->getExtension("native_profiler");
        $__internal_053fdcd630de3fb3ec8a9566a3d68f544fc50cd9f753199712f3fdac4fdf58de->enter($__internal_053fdcd630de3fb3ec8a9566a3d68f544fc50cd9f753199712f3fdac4fdf58de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Avancement projet
";
        
        $__internal_053fdcd630de3fb3ec8a9566a3d68f544fc50cd9f753199712f3fdac4fdf58de->leave($__internal_053fdcd630de3fb3ec8a9566a3d68f544fc50cd9f753199712f3fdac4fdf58de_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_653666456b2e1cf27b5aea9b63169c6c532ea4d6b0044436697c9ffd5ffb140e = $this->env->getExtension("native_profiler");
        $__internal_653666456b2e1cf27b5aea9b63169c6c532ea4d6b0044436697c9ffd5ffb140e->enter($__internal_653666456b2e1cf27b5aea9b63169c6c532ea4d6b0044436697c9ffd5ffb140e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Avancement projet";
        
        $__internal_653666456b2e1cf27b5aea9b63169c6c532ea4d6b0044436697c9ffd5ffb140e->leave($__internal_653666456b2e1cf27b5aea9b63169c6c532ea4d6b0044436697c9ffd5ffb140e_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_b48e1fec21ea22b46aabd963bbe6b758c46c697cbc5e5f8d141081cd95bb13f0 = $this->env->getExtension("native_profiler");
        $__internal_b48e1fec21ea22b46aabd963bbe6b758c46c697cbc5e5f8d141081cd95bb13f0->enter($__internal_b48e1fec21ea22b46aabd963bbe6b758c46c697cbc5e5f8d141081cd95bb13f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    <div class='zoneEdition'>
        
        <button id='texteEditButton' class='boutonFormulaire'>Editer</button>
        
        ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_start', array("attr" => array("id" => "formulaireTexte")));
        echo "

        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'errors');
        echo "

        ";
        // line 20
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'errors');
        echo "

        ";
        // line 23
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'widget', array("attr" => array("class" => "textField")));
        echo "

        ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
        echo "

    </div>

    <div class='zoneTexte'>
        ";
        // line 30
        echo (isset($context["texte"]) ? $context["texte"] : $this->getContext($context, "texte"));
        echo "
    </di>

";
        
        $__internal_b48e1fec21ea22b46aabd963bbe6b758c46c697cbc5e5f8d141081cd95bb13f0->leave($__internal_b48e1fec21ea22b46aabd963bbe6b758c46c697cbc5e5f8d141081cd95bb13f0_prof);

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
        return array (  105 => 30,  97 => 25,  91 => 23,  85 => 20,  80 => 17,  75 => 15,  68 => 10,  62 => 9,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
