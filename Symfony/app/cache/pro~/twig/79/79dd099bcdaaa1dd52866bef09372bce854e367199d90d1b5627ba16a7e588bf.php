<?php

/* @NoxIntranetSupportSI/Support/licenses.html.twig */
class __TwigTemplate_15cfee9f5923b8784274c182726a3b824248227bf8e17b1e65fc312e8002795d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetSupportSI/Support/licenses.html.twig", 1);
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
";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetSupportSI/Support/licenses.html.twig";
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
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block titrePage %} Licences {% endblock %}*/
/* */
/* {% block messageAccueil %}Licences{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/* {% endblock %}*/
