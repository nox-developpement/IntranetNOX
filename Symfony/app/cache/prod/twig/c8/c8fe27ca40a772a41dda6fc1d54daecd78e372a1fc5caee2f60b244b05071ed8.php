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
        echo " Licenses ";
    }

    // line 5
    public function block_contenu($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"messageAcceuil\"> 
        <h2> Licenses </h2>
    </div>

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
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Licenses {% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div class="messageAcceuil"> */
/*         <h2> Licenses </h2>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
