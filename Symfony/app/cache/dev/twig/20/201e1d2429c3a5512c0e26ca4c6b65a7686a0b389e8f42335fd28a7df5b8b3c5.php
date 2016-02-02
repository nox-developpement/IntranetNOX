<?php

/* NoxIntranetAdministrationBundle:AdministrationNews:administrationNews.html.twig */
class __TwigTemplate_e072262fb0242d999364c86336f2eb49e29549b2e07afb6b5bc60e93fc362232 extends Twig_Template
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
        $__internal_ed98d88d62f23e5ea78e2d9e2ac1335d62694e2ea1ec6c8d2df10601dd909466 = $this->env->getExtension("native_profiler");
        $__internal_ed98d88d62f23e5ea78e2d9e2ac1335d62694e2ea1ec6c8d2df10601dd909466->enter($__internal_ed98d88d62f23e5ea78e2d9e2ac1335d62694e2ea1ec6c8d2df10601dd909466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationNews:administrationNews.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed98d88d62f23e5ea78e2d9e2ac1335d62694e2ea1ec6c8d2df10601dd909466->leave($__internal_ed98d88d62f23e5ea78e2d9e2ac1335d62694e2ea1ec6c8d2df10601dd909466_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_2a2f2ac9a08c24af0892820bcb8bf0280a719dadfeb88125ae0d24670e204537 = $this->env->getExtension("native_profiler");
        $__internal_2a2f2ac9a08c24af0892820bcb8bf0280a719dadfeb88125ae0d24670e204537->enter($__internal_2a2f2ac9a08c24af0892820bcb8bf0280a719dadfeb88125ae0d24670e204537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration news SI
";
        
        $__internal_2a2f2ac9a08c24af0892820bcb8bf0280a719dadfeb88125ae0d24670e204537->leave($__internal_2a2f2ac9a08c24af0892820bcb8bf0280a719dadfeb88125ae0d24670e204537_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_22721b8c90ff023652b308cfe66e580d5c69bdd7d676b86f677fc81449c9dc30 = $this->env->getExtension("native_profiler");
        $__internal_22721b8c90ff023652b308cfe66e580d5c69bdd7d676b86f677fc81449c9dc30->enter($__internal_22721b8c90ff023652b308cfe66e580d5c69bdd7d676b86f677fc81449c9dc30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration news SI";
        
        $__internal_22721b8c90ff023652b308cfe66e580d5c69bdd7d676b86f677fc81449c9dc30->leave($__internal_22721b8c90ff023652b308cfe66e580d5c69bdd7d676b86f677fc81449c9dc30_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_9fbd7b11e7527c1b70458de33f5d23648edbff2f75f183fcbef42c089afaac9a = $this->env->getExtension("native_profiler");
        $__internal_9fbd7b11e7527c1b70458de33f5d23648edbff2f75f183fcbef42c089afaac9a->enter($__internal_9fbd7b11e7527c1b70458de33f5d23648edbff2f75f183fcbef42c089afaac9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    <div class=\"iconContener\">

        <div id=\"menuAdminNewsSI\" class='menuAdmin'>
            <h3> Interface de gestion de contenu </h3>
            <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/newsSI', 'Gestionnaire de fichiers - News SI');\"> 
                <h3>  Ouvrir le gestionnaire de fichier </h3> 
            </a>
        </div>

    </div>


";
        
        $__internal_9fbd7b11e7527c1b70458de33f5d23648edbff2f75f183fcbef42c089afaac9a->leave($__internal_9fbd7b11e7527c1b70458de33f5d23648edbff2f75f183fcbef42c089afaac9a_prof);

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
        return array (  68 => 10,  62 => 9,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
/*             <a onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/newsSI', 'Gestionnaire de fichiers - News SI');"> */
/*                 <h3>  Ouvrir le gestionnaire de fichier </h3> */
/*             </a>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
