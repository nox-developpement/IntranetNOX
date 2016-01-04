<?php

/* NoxIntranetAdministrationBundle:AdministrationNews:administrationNews.html.twig */
class __TwigTemplate_70f1a3c0a1f43c63f2d9beb538b24d2a60c6a7a138a8969025ea891ff3f1f3df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:AdministrationNews:administrationNews.html.twig", 1);
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
        echo "    Administration news SI
";
    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Administration news SI";
    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        // line 10
        echo "
    <div class=\"iconContener\">

        <div id=\"menuAdminNewsSI\" class='menuAdmin'>
            <h3> Interface de gestion de contenu </h3>
            <h3> <a href=\"#\"> Ouvrir le gestionnaire de fichier </a> </h3>
        </div>

    </div>


";
    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:AdministrationNews:administrationNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  44 => 9,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Administration news SI*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Administration news SI{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div class="iconContener">*/
/* */
/*         <div id="menuAdminNewsSI" class='menuAdmin'>*/
/*             <h3> Interface de gestion de contenu </h3>*/
/*             <h3> <a href="#"> Ouvrir le gestionnaire de fichier </a> </h3>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
