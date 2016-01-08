<?php

/* NoxIntranetRessourcesBundle:Archives:archives.html.twig */
class __TwigTemplate_7e346ee3378d60bba8c896ee2a307fe88dd7011390e556ac773381936ae80666 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:Archives:archives.html.twig", 1);
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
        $__internal_5c09c3eb42f318280b219830fe97a10a04e27f605c426d99059dd8ccc98b544d = $this->env->getExtension("native_profiler");
        $__internal_5c09c3eb42f318280b219830fe97a10a04e27f605c426d99059dd8ccc98b544d->enter($__internal_5c09c3eb42f318280b219830fe97a10a04e27f605c426d99059dd8ccc98b544d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:Archives:archives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c09c3eb42f318280b219830fe97a10a04e27f605c426d99059dd8ccc98b544d->leave($__internal_5c09c3eb42f318280b219830fe97a10a04e27f605c426d99059dd8ccc98b544d_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_dbda5a64dec69ab055032645e7561673a3a74ba4de6c19024243d093be46c56e = $this->env->getExtension("native_profiler");
        $__internal_dbda5a64dec69ab055032645e7561673a3a74ba4de6c19024243d093be46c56e->enter($__internal_dbda5a64dec69ab055032645e7561673a3a74ba4de6c19024243d093be46c56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Archives
";
        
        $__internal_dbda5a64dec69ab055032645e7561673a3a74ba4de6c19024243d093be46c56e->leave($__internal_dbda5a64dec69ab055032645e7561673a3a74ba4de6c19024243d093be46c56e_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_3ebeab410c7dc13bbd7b5054cd38a89e2b5cb7036101cd895279f1dee3827047 = $this->env->getExtension("native_profiler");
        $__internal_3ebeab410c7dc13bbd7b5054cd38a89e2b5cb7036101cd895279f1dee3827047->enter($__internal_3ebeab410c7dc13bbd7b5054cd38a89e2b5cb7036101cd895279f1dee3827047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Archives";
        
        $__internal_3ebeab410c7dc13bbd7b5054cd38a89e2b5cb7036101cd895279f1dee3827047->leave($__internal_3ebeab410c7dc13bbd7b5054cd38a89e2b5cb7036101cd895279f1dee3827047_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_2f5248b6c72324f7313a7dc415587536c7397b10518813a3541a4a1b97aad967 = $this->env->getExtension("native_profiler");
        $__internal_2f5248b6c72324f7313a7dc415587536c7397b10518813a3541a4a1b97aad967->enter($__internal_2f5248b6c72324f7313a7dc415587536c7397b10518813a3541a4a1b97aad967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_2f5248b6c72324f7313a7dc415587536c7397b10518813a3541a4a1b97aad967->leave($__internal_2f5248b6c72324f7313a7dc415587536c7397b10518813a3541a4a1b97aad967_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:Archives:archives.html.twig";
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
/*     Archives*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Archives{% endblock %}*/
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
/* {# empty Twig template #}*/
/* */
