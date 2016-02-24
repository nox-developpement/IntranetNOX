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
        $__internal_10a298f55230cef3a476fd14ed1b302ce24854ff0460dff05cbc616586c96df3 = $this->env->getExtension("native_profiler");
        $__internal_10a298f55230cef3a476fd14ed1b302ce24854ff0460dff05cbc616586c96df3->enter($__internal_10a298f55230cef3a476fd14ed1b302ce24854ff0460dff05cbc616586c96df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetRessources/AssistantAffaire/assistantaffaire.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10a298f55230cef3a476fd14ed1b302ce24854ff0460dff05cbc616586c96df3->leave($__internal_10a298f55230cef3a476fd14ed1b302ce24854ff0460dff05cbc616586c96df3_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_e1ede4755faac523a139c2a5d6aae0b510686b3881c32273f26f0db6ea62bcbe = $this->env->getExtension("native_profiler");
        $__internal_e1ede4755faac523a139c2a5d6aae0b510686b3881c32273f26f0db6ea62bcbe->enter($__internal_e1ede4755faac523a139c2a5d6aae0b510686b3881c32273f26f0db6ea62bcbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Assistant d'affaire ";
        
        $__internal_e1ede4755faac523a139c2a5d6aae0b510686b3881c32273f26f0db6ea62bcbe->leave($__internal_e1ede4755faac523a139c2a5d6aae0b510686b3881c32273f26f0db6ea62bcbe_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_098036e8cc9f396e3905086e6173f9ea2642caba92e4a34b6904ee2600a53d67 = $this->env->getExtension("native_profiler");
        $__internal_098036e8cc9f396e3905086e6173f9ea2642caba92e4a34b6904ee2600a53d67->enter($__internal_098036e8cc9f396e3905086e6173f9ea2642caba92e4a34b6904ee2600a53d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Assistant d'affaire";
        
        $__internal_098036e8cc9f396e3905086e6173f9ea2642caba92e4a34b6904ee2600a53d67->leave($__internal_098036e8cc9f396e3905086e6173f9ea2642caba92e4a34b6904ee2600a53d67_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_a2b8fd7a10c871e9aa10f6812a24be19357a5eeddc8ece21471fc3d37878cb05 = $this->env->getExtension("native_profiler");
        $__internal_a2b8fd7a10c871e9aa10f6812a24be19357a5eeddc8ece21471fc3d37878cb05->enter($__internal_a2b8fd7a10c871e9aa10f6812a24be19357a5eeddc8ece21471fc3d37878cb05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    

";
        
        $__internal_a2b8fd7a10c871e9aa10f6812a24be19357a5eeddc8ece21471fc3d37878cb05->leave($__internal_a2b8fd7a10c871e9aa10f6812a24be19357a5eeddc8ece21471fc3d37878cb05_prof);

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
