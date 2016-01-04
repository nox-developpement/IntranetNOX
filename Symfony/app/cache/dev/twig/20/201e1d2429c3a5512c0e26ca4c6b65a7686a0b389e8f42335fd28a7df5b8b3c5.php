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
        $__internal_d640a9c1a8d929dd33b61c1237ffc94a218c3fc0efba7239514e16a09f1589ce = $this->env->getExtension("native_profiler");
        $__internal_d640a9c1a8d929dd33b61c1237ffc94a218c3fc0efba7239514e16a09f1589ce->enter($__internal_d640a9c1a8d929dd33b61c1237ffc94a218c3fc0efba7239514e16a09f1589ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationNews:administrationNews.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d640a9c1a8d929dd33b61c1237ffc94a218c3fc0efba7239514e16a09f1589ce->leave($__internal_d640a9c1a8d929dd33b61c1237ffc94a218c3fc0efba7239514e16a09f1589ce_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_4199f8960b0903377e46b840816cb694a5a7492084bf7e580324bf676dbec30c = $this->env->getExtension("native_profiler");
        $__internal_4199f8960b0903377e46b840816cb694a5a7492084bf7e580324bf676dbec30c->enter($__internal_4199f8960b0903377e46b840816cb694a5a7492084bf7e580324bf676dbec30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration news SI
";
        
        $__internal_4199f8960b0903377e46b840816cb694a5a7492084bf7e580324bf676dbec30c->leave($__internal_4199f8960b0903377e46b840816cb694a5a7492084bf7e580324bf676dbec30c_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_de056fe137bb3b2498ae3ab80e11ba92bae2eae8183f744c874ad62a0979a6d1 = $this->env->getExtension("native_profiler");
        $__internal_de056fe137bb3b2498ae3ab80e11ba92bae2eae8183f744c874ad62a0979a6d1->enter($__internal_de056fe137bb3b2498ae3ab80e11ba92bae2eae8183f744c874ad62a0979a6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration news SI";
        
        $__internal_de056fe137bb3b2498ae3ab80e11ba92bae2eae8183f744c874ad62a0979a6d1->leave($__internal_de056fe137bb3b2498ae3ab80e11ba92bae2eae8183f744c874ad62a0979a6d1_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_94b3a397560850c90894bfc87537ea4c629b8629199c8fa64c5cee2c9783b6a5 = $this->env->getExtension("native_profiler");
        $__internal_94b3a397560850c90894bfc87537ea4c629b8629199c8fa64c5cee2c9783b6a5->enter($__internal_94b3a397560850c90894bfc87537ea4c629b8629199c8fa64c5cee2c9783b6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_94b3a397560850c90894bfc87537ea4c629b8629199c8fa64c5cee2c9783b6a5->leave($__internal_94b3a397560850c90894bfc87537ea4c629b8629199c8fa64c5cee2c9783b6a5_prof);

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
