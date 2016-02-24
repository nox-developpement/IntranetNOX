<?php

/* @NoxIntranetAdministration/AdministrationCommunication/communicationMarketing.html.twig */
class __TwigTemplate_456f870ff73f60da710512e74fd4519eb6c9d8b8c42ef1286bdcd80fab466556 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetAdministration/AdministrationCommunication/communicationMarketing.html.twig", 1);
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
        $__internal_7a6d2ba621bc16661790ff1994a2677271e8e916d6be106151578fcf7d985d31 = $this->env->getExtension("native_profiler");
        $__internal_7a6d2ba621bc16661790ff1994a2677271e8e916d6be106151578fcf7d985d31->enter($__internal_7a6d2ba621bc16661790ff1994a2677271e8e916d6be106151578fcf7d985d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetAdministration/AdministrationCommunication/communicationMarketing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a6d2ba621bc16661790ff1994a2677271e8e916d6be106151578fcf7d985d31->leave($__internal_7a6d2ba621bc16661790ff1994a2677271e8e916d6be106151578fcf7d985d31_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_db680548cf2993eb4de40ee011d76e0245258a24d33cf8bf2cc11217bc7b71dd = $this->env->getExtension("native_profiler");
        $__internal_db680548cf2993eb4de40ee011d76e0245258a24d33cf8bf2cc11217bc7b71dd->enter($__internal_db680548cf2993eb4de40ee011d76e0245258a24d33cf8bf2cc11217bc7b71dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration communication marketing
";
        
        $__internal_db680548cf2993eb4de40ee011d76e0245258a24d33cf8bf2cc11217bc7b71dd->leave($__internal_db680548cf2993eb4de40ee011d76e0245258a24d33cf8bf2cc11217bc7b71dd_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_ef71405224698b75e5eebd2031cf48aea1999f2039dabfef79c5ff6c258c11e9 = $this->env->getExtension("native_profiler");
        $__internal_ef71405224698b75e5eebd2031cf48aea1999f2039dabfef79c5ff6c258c11e9->enter($__internal_ef71405224698b75e5eebd2031cf48aea1999f2039dabfef79c5ff6c258c11e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration communication marketing";
        
        $__internal_ef71405224698b75e5eebd2031cf48aea1999f2039dabfef79c5ff6c258c11e9->leave($__internal_ef71405224698b75e5eebd2031cf48aea1999f2039dabfef79c5ff6c258c11e9_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_5c3f209e8ba4d2b04436cfdfb9b99989c61f6cf1fc792487983ccc67e468a325 = $this->env->getExtension("native_profiler");
        $__internal_5c3f209e8ba4d2b04436cfdfb9b99989c61f6cf1fc792487983ccc67e468a325->enter($__internal_5c3f209e8ba4d2b04436cfdfb9b99989c61f6cf1fc792487983ccc67e468a325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxALaConquete', 'Nox à la conquête');\"> Nox à la conquête </h4>
    </div>
    
    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/ilYAForcementPlusSimple', 'Il y a forcément plus simple');\"> Il y a forcément plus simple </h4>
    </div>
    
    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxFournisseurDeTalents', 'Nox fournisseur de talents');\"> Nox fournisseur de talents </h4>
    </div>
    
    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/nos5Valeurs', 'Nos 5 valeurs');\"> Nos 5 valeurs </h4>
    </div>

";
        
        $__internal_5c3f209e8ba4d2b04436cfdfb9b99989c61f6cf1fc792487983ccc67e468a325->leave($__internal_5c3f209e8ba4d2b04436cfdfb9b99989c61f6cf1fc792487983ccc67e468a325_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetAdministration/AdministrationCommunication/communicationMarketing.html.twig";
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
/*     Administration communication marketing*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Administration communication marketing{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div class="sousMessageAcceuil"> */
/*         <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxALaConquete', 'Nox à la conquête');"> Nox à la conquête </h4>*/
/*     </div>*/
/*     */
/*     <div class="sousMessageAcceuil"> */
/*         <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/ilYAForcementPlusSimple', 'Il y a forcément plus simple');"> Il y a forcément plus simple </h4>*/
/*     </div>*/
/*     */
/*     <div class="sousMessageAcceuil"> */
/*         <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxFournisseurDeTalents', 'Nox fournisseur de talents');"> Nox fournisseur de talents </h4>*/
/*     </div>*/
/*     */
/*     <div class="sousMessageAcceuil"> */
/*         <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/nos5Valeurs', 'Nos 5 valeurs');"> Nos 5 valeurs </h4>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
