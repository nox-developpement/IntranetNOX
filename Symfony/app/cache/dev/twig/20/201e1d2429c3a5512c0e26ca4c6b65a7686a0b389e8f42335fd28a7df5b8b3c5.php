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
        $__internal_6d2dd5535d6677cf771e1bfa588cab1ada411a7eb101db0d0eaafbe12b02e7e2 = $this->env->getExtension("native_profiler");
        $__internal_6d2dd5535d6677cf771e1bfa588cab1ada411a7eb101db0d0eaafbe12b02e7e2->enter($__internal_6d2dd5535d6677cf771e1bfa588cab1ada411a7eb101db0d0eaafbe12b02e7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationNews:administrationNews.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d2dd5535d6677cf771e1bfa588cab1ada411a7eb101db0d0eaafbe12b02e7e2->leave($__internal_6d2dd5535d6677cf771e1bfa588cab1ada411a7eb101db0d0eaafbe12b02e7e2_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_af0751c613f3b6f14222956d414dd615f4384242a1c5d4682430e30cd8661ff6 = $this->env->getExtension("native_profiler");
        $__internal_af0751c613f3b6f14222956d414dd615f4384242a1c5d4682430e30cd8661ff6->enter($__internal_af0751c613f3b6f14222956d414dd615f4384242a1c5d4682430e30cd8661ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration news SI
";
        
        $__internal_af0751c613f3b6f14222956d414dd615f4384242a1c5d4682430e30cd8661ff6->leave($__internal_af0751c613f3b6f14222956d414dd615f4384242a1c5d4682430e30cd8661ff6_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_11576cfe39ac4aa71fc532507d9af08b9131c295ea77683dcc42c200dcf2d930 = $this->env->getExtension("native_profiler");
        $__internal_11576cfe39ac4aa71fc532507d9af08b9131c295ea77683dcc42c200dcf2d930->enter($__internal_11576cfe39ac4aa71fc532507d9af08b9131c295ea77683dcc42c200dcf2d930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration news SI";
        
        $__internal_11576cfe39ac4aa71fc532507d9af08b9131c295ea77683dcc42c200dcf2d930->leave($__internal_11576cfe39ac4aa71fc532507d9af08b9131c295ea77683dcc42c200dcf2d930_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_3c66623ab0ac3fa9d5e3b7accca5ff79ac802cbc22482733647900dd47d2168e = $this->env->getExtension("native_profiler");
        $__internal_3c66623ab0ac3fa9d5e3b7accca5ff79ac802cbc22482733647900dd47d2168e->enter($__internal_3c66623ab0ac3fa9d5e3b7accca5ff79ac802cbc22482733647900dd47d2168e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    <div class=\"iconContener\">

        <div id=\"menuAdminNewsSI\" class='menuAdmin'>
            <h3> Interface de gestion de contenu </h3>
            <a onclick=\"openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/newsSI', 'Gestionnaire de fichiers - News SI');\"> 
                <h3>  Ouvrir le gestionnaire de fichier </h3> 
            </a>
        </div>

    </div>


";
        
        $__internal_3c66623ab0ac3fa9d5e3b7accca5ff79ac802cbc22482733647900dd47d2168e->leave($__internal_3c66623ab0ac3fa9d5e3b7accca5ff79ac802cbc22482733647900dd47d2168e_prof);

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
/*             <a onclick="openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/newsSI', 'Gestionnaire de fichiers - News SI');"> */
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
