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
        $__internal_994ff9314844a456c285f33397b653e54f9fd312e4d0202fe70376d7508f7546 = $this->env->getExtension("native_profiler");
        $__internal_994ff9314844a456c285f33397b653e54f9fd312e4d0202fe70376d7508f7546->enter($__internal_994ff9314844a456c285f33397b653e54f9fd312e4d0202fe70376d7508f7546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaire.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_994ff9314844a456c285f33397b653e54f9fd312e4d0202fe70376d7508f7546->leave($__internal_994ff9314844a456c285f33397b653e54f9fd312e4d0202fe70376d7508f7546_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_fd3197dfd28defe1dd1587fe58ac64d608948d7c92c1d4810e57c5e89602eb43 = $this->env->getExtension("native_profiler");
        $__internal_fd3197dfd28defe1dd1587fe58ac64d608948d7c92c1d4810e57c5e89602eb43->enter($__internal_fd3197dfd28defe1dd1587fe58ac64d608948d7c92c1d4810e57c5e89602eb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Assistant d'affaire ";
        
        $__internal_fd3197dfd28defe1dd1587fe58ac64d608948d7c92c1d4810e57c5e89602eb43->leave($__internal_fd3197dfd28defe1dd1587fe58ac64d608948d7c92c1d4810e57c5e89602eb43_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_439cc4bf5e9ac20c2e0d5172dd0d61deddd991f258805e5b4f244a86b49d4893 = $this->env->getExtension("native_profiler");
        $__internal_439cc4bf5e9ac20c2e0d5172dd0d61deddd991f258805e5b4f244a86b49d4893->enter($__internal_439cc4bf5e9ac20c2e0d5172dd0d61deddd991f258805e5b4f244a86b49d4893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Assistant d'affaire";
        
        $__internal_439cc4bf5e9ac20c2e0d5172dd0d61deddd991f258805e5b4f244a86b49d4893->leave($__internal_439cc4bf5e9ac20c2e0d5172dd0d61deddd991f258805e5b4f244a86b49d4893_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_1bc4920d7c9f2590a659a07494fca42f87c5ba56e7c947944b2f29a5b98fcd72 = $this->env->getExtension("native_profiler");
        $__internal_1bc4920d7c9f2590a659a07494fca42f87c5ba56e7c947944b2f29a5b98fcd72->enter($__internal_1bc4920d7c9f2590a659a07494fca42f87c5ba56e7c947944b2f29a5b98fcd72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    

";
        
        $__internal_1bc4920d7c9f2590a659a07494fca42f87c5ba56e7c947944b2f29a5b98fcd72->leave($__internal_1bc4920d7c9f2590a659a07494fca42f87c5ba56e7c947944b2f29a5b98fcd72_prof);

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
