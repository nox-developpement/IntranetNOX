<?php

/* NoxIntranetSupportSIBundle:Support:licenses.html.twig */
class __TwigTemplate_1f1cc4f1d817b462b23dcd4615b704ef5aa6afac968e5d2f4c22b9520a7b8a93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetSupportSIBundle:Support:licenses.html.twig", 1);
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
        echo " Licences ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Licences";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <p style='margin: auto; width: 70%; text-align: center; font-size: 2vw; color: red'> En cours d'implémentation... </p>

";
    }

    public function getTemplateName()
    {
        return "NoxIntranetSupportSIBundle:Support:licenses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Licences {% endblock %}*/
/* */
/* {% block messageAccueil %}Licences{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <p style='margin: auto; width: 70%; text-align: center; font-size: 2vw; color: red'> En cours d'implémentation... </p>*/
/* */
/* {% endblock %}*/
/* */
