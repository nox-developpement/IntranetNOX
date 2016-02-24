<?php

/* @NoxIntranetRessources/AssistantAffaire/assistantaffaire.html.twig */
class __TwigTemplate_7cadc0b3fa9c7c17d2bdc71c06d909a5700842de14def4543cd40cd590ef7ecf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetRessources/AssistantAffaire/assistantaffaire.html.twig", 1);
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
        $__internal_3110d36b2eb4d5f09e1eef86313befa3d5aca4ce6ccb191b0aae071a5f9cac87 = $this->env->getExtension("native_profiler");
        $__internal_3110d36b2eb4d5f09e1eef86313befa3d5aca4ce6ccb191b0aae071a5f9cac87->enter($__internal_3110d36b2eb4d5f09e1eef86313befa3d5aca4ce6ccb191b0aae071a5f9cac87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetRessources/AssistantAffaire/assistantaffaire.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3110d36b2eb4d5f09e1eef86313befa3d5aca4ce6ccb191b0aae071a5f9cac87->leave($__internal_3110d36b2eb4d5f09e1eef86313befa3d5aca4ce6ccb191b0aae071a5f9cac87_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_afb0b327426e9ba6f75ab791afd9370abb2c4073c6212a0dd633896b7167a6c5 = $this->env->getExtension("native_profiler");
        $__internal_afb0b327426e9ba6f75ab791afd9370abb2c4073c6212a0dd633896b7167a6c5->enter($__internal_afb0b327426e9ba6f75ab791afd9370abb2c4073c6212a0dd633896b7167a6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Assistant d'affaire ";
        
        $__internal_afb0b327426e9ba6f75ab791afd9370abb2c4073c6212a0dd633896b7167a6c5->leave($__internal_afb0b327426e9ba6f75ab791afd9370abb2c4073c6212a0dd633896b7167a6c5_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_4ab16097af6a094bd40dc025b88e557d927b3f4585dd2d7e2501399273984a2d = $this->env->getExtension("native_profiler");
        $__internal_4ab16097af6a094bd40dc025b88e557d927b3f4585dd2d7e2501399273984a2d->enter($__internal_4ab16097af6a094bd40dc025b88e557d927b3f4585dd2d7e2501399273984a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Assistant d'affaire";
        
        $__internal_4ab16097af6a094bd40dc025b88e557d927b3f4585dd2d7e2501399273984a2d->leave($__internal_4ab16097af6a094bd40dc025b88e557d927b3f4585dd2d7e2501399273984a2d_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_4538ae2d3641e387d4c21aae4d9aea5cc78ef9f598bf7691e1afa097f7700f2a = $this->env->getExtension("native_profiler");
        $__internal_4538ae2d3641e387d4c21aae4d9aea5cc78ef9f598bf7691e1afa097f7700f2a->enter($__internal_4538ae2d3641e387d4c21aae4d9aea5cc78ef9f598bf7691e1afa097f7700f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    

";
        
        $__internal_4538ae2d3641e387d4c21aae4d9aea5cc78ef9f598bf7691e1afa097f7700f2a->leave($__internal_4538ae2d3641e387d4c21aae4d9aea5cc78ef9f598bf7691e1afa097f7700f2a_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetRessources/AssistantAffaire/assistantaffaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Assistant d'affaire {% endblock %}*/
/* */
/* {% block messageAccueil %}Assistant d'affaire{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     */
/* */
/* {% endblock %}*/
