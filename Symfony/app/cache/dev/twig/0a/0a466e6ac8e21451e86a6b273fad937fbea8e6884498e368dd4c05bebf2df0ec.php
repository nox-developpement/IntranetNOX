<?php

/* NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaire.html.twig */
class __TwigTemplate_aa65197eab4e55a499adac602f9d73ba0410d60c2c3b8fa9a6e452a69e8d227c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaire.html.twig", 1);
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
        $__internal_a706ac43ffbaee25f6f8f573cfc49b89f7a60fce87a22acd96f6f2be4fe6cb9c = $this->env->getExtension("native_profiler");
        $__internal_a706ac43ffbaee25f6f8f573cfc49b89f7a60fce87a22acd96f6f2be4fe6cb9c->enter($__internal_a706ac43ffbaee25f6f8f573cfc49b89f7a60fce87a22acd96f6f2be4fe6cb9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaire.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a706ac43ffbaee25f6f8f573cfc49b89f7a60fce87a22acd96f6f2be4fe6cb9c->leave($__internal_a706ac43ffbaee25f6f8f573cfc49b89f7a60fce87a22acd96f6f2be4fe6cb9c_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_5c8a7d83cd2fbde0e271e50ad8e686b25cf84732901b990cb38aee30cd0ecb72 = $this->env->getExtension("native_profiler");
        $__internal_5c8a7d83cd2fbde0e271e50ad8e686b25cf84732901b990cb38aee30cd0ecb72->enter($__internal_5c8a7d83cd2fbde0e271e50ad8e686b25cf84732901b990cb38aee30cd0ecb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Assistant d'affaire ";
        
        $__internal_5c8a7d83cd2fbde0e271e50ad8e686b25cf84732901b990cb38aee30cd0ecb72->leave($__internal_5c8a7d83cd2fbde0e271e50ad8e686b25cf84732901b990cb38aee30cd0ecb72_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_1f91cc273b02aa949ed9a9e7c948686ba19b95e5ce22594d1e9a09b8fe0ae8f4 = $this->env->getExtension("native_profiler");
        $__internal_1f91cc273b02aa949ed9a9e7c948686ba19b95e5ce22594d1e9a09b8fe0ae8f4->enter($__internal_1f91cc273b02aa949ed9a9e7c948686ba19b95e5ce22594d1e9a09b8fe0ae8f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Assistant d'affaire";
        
        $__internal_1f91cc273b02aa949ed9a9e7c948686ba19b95e5ce22594d1e9a09b8fe0ae8f4->leave($__internal_1f91cc273b02aa949ed9a9e7c948686ba19b95e5ce22594d1e9a09b8fe0ae8f4_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_f53ca5bbc10aa04bdf2315f95f21bf096dd3537371848b41071db9932e9d2255 = $this->env->getExtension("native_profiler");
        $__internal_f53ca5bbc10aa04bdf2315f95f21bf096dd3537371848b41071db9932e9d2255->enter($__internal_f53ca5bbc10aa04bdf2315f95f21bf096dd3537371848b41071db9932e9d2255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    

";
        
        $__internal_f53ca5bbc10aa04bdf2315f95f21bf096dd3537371848b41071db9932e9d2255->leave($__internal_f53ca5bbc10aa04bdf2315f95f21bf096dd3537371848b41071db9932e9d2255_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaire.html.twig";
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
