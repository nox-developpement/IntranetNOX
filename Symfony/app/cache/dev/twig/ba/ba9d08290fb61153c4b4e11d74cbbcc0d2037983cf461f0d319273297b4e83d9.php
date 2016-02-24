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
        $__internal_cb6703422d7c5e5ce9432f628ed0db2e5c9ca21626d0f11efc8b777286488f5c = $this->env->getExtension("native_profiler");
        $__internal_cb6703422d7c5e5ce9432f628ed0db2e5c9ca21626d0f11efc8b777286488f5c->enter($__internal_cb6703422d7c5e5ce9432f628ed0db2e5c9ca21626d0f11efc8b777286488f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetAdministration/AdministrationCommunication/communicationMarketing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb6703422d7c5e5ce9432f628ed0db2e5c9ca21626d0f11efc8b777286488f5c->leave($__internal_cb6703422d7c5e5ce9432f628ed0db2e5c9ca21626d0f11efc8b777286488f5c_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_0af59d36deae566338840cb03249d07970574d1ca8fb3c1d64e269da89463d96 = $this->env->getExtension("native_profiler");
        $__internal_0af59d36deae566338840cb03249d07970574d1ca8fb3c1d64e269da89463d96->enter($__internal_0af59d36deae566338840cb03249d07970574d1ca8fb3c1d64e269da89463d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration communication marketing
";
        
        $__internal_0af59d36deae566338840cb03249d07970574d1ca8fb3c1d64e269da89463d96->leave($__internal_0af59d36deae566338840cb03249d07970574d1ca8fb3c1d64e269da89463d96_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_2576a1fef84b8df2567632ed2f97610f9d476f2d7b448b02186413a472a6553c = $this->env->getExtension("native_profiler");
        $__internal_2576a1fef84b8df2567632ed2f97610f9d476f2d7b448b02186413a472a6553c->enter($__internal_2576a1fef84b8df2567632ed2f97610f9d476f2d7b448b02186413a472a6553c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration communication marketing";
        
        $__internal_2576a1fef84b8df2567632ed2f97610f9d476f2d7b448b02186413a472a6553c->leave($__internal_2576a1fef84b8df2567632ed2f97610f9d476f2d7b448b02186413a472a6553c_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_b033d945b5eda6f741b56f042470932fb56edf1e9597bade343f87a3120666b8 = $this->env->getExtension("native_profiler");
        $__internal_b033d945b5eda6f741b56f042470932fb56edf1e9597bade343f87a3120666b8->enter($__internal_b033d945b5eda6f741b56f042470932fb56edf1e9597bade343f87a3120666b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_b033d945b5eda6f741b56f042470932fb56edf1e9597bade343f87a3120666b8->leave($__internal_b033d945b5eda6f741b56f042470932fb56edf1e9597bade343f87a3120666b8_prof);

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
