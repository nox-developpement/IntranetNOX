<?php

/* NoxIntranetCommunicationBundle:Marketing:communicationMarketing.html.twig */
class __TwigTemplate_7e632fede14a81d5b69cb06b5478384d1b1eabb471bf05049614f070b80b38b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetCommunicationBundle:Marketing:communicationMarketing.html.twig", 1);
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
        $__internal_eb7c67d434f0cecba32bc757aa481de0583306fa79135b3fa8a66195b5623568 = $this->env->getExtension("native_profiler");
        $__internal_eb7c67d434f0cecba32bc757aa481de0583306fa79135b3fa8a66195b5623568->enter($__internal_eb7c67d434f0cecba32bc757aa481de0583306fa79135b3fa8a66195b5623568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetCommunicationBundle:Marketing:communicationMarketing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb7c67d434f0cecba32bc757aa481de0583306fa79135b3fa8a66195b5623568->leave($__internal_eb7c67d434f0cecba32bc757aa481de0583306fa79135b3fa8a66195b5623568_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_27e0f2046018288c8671ff8b65020f2916d6646cc1e0745558d2ce29ee9751ad = $this->env->getExtension("native_profiler");
        $__internal_27e0f2046018288c8671ff8b65020f2916d6646cc1e0745558d2ce29ee9751ad->enter($__internal_27e0f2046018288c8671ff8b65020f2916d6646cc1e0745558d2ce29ee9751ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Communication marketing
";
        
        $__internal_27e0f2046018288c8671ff8b65020f2916d6646cc1e0745558d2ce29ee9751ad->leave($__internal_27e0f2046018288c8671ff8b65020f2916d6646cc1e0745558d2ce29ee9751ad_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_98c3fa1ffb438a1262e49be7c6a052eda3a87c2a37d9d511aeb7bffe81f40788 = $this->env->getExtension("native_profiler");
        $__internal_98c3fa1ffb438a1262e49be7c6a052eda3a87c2a37d9d511aeb7bffe81f40788->enter($__internal_98c3fa1ffb438a1262e49be7c6a052eda3a87c2a37d9d511aeb7bffe81f40788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Communication marketing";
        
        $__internal_98c3fa1ffb438a1262e49be7c6a052eda3a87c2a37d9d511aeb7bffe81f40788->leave($__internal_98c3fa1ffb438a1262e49be7c6a052eda3a87c2a37d9d511aeb7bffe81f40788_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_0ed1258a0750b89ca6db20c96efa1fb1fd29e88845302e15d7fa977be22071fe = $this->env->getExtension("native_profiler");
        $__internal_0ed1258a0750b89ca6db20c96efa1fb1fd29e88845302e15d7fa977be22071fe->enter($__internal_0ed1258a0750b89ca6db20c96efa1fb1fd29e88845302e15d7fa977be22071fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxALaConqueteLecture', 'Nox à la conquête');\"> Nox à la conquête </h4>
    </div>
    
    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/ilYAForcementPlusSimpleLecture', 'Il y a forcément plus simple');\"> Il y a forcément plus simple </h4>
    </div>
    
    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxFournisseurDeTalentsLecture', 'Nox fournisseur de talents');\"> Nox fournisseur de talents </h4>
    </div>
    
    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/nos5ValeursLecture', 'Nos 5 valeurs');\"> Nos 5 valeurs </h4>
    </div>

";
        
        $__internal_0ed1258a0750b89ca6db20c96efa1fb1fd29e88845302e15d7fa977be22071fe->leave($__internal_0ed1258a0750b89ca6db20c96efa1fb1fd29e88845302e15d7fa977be22071fe_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetCommunicationBundle:Marketing:communicationMarketing.html.twig";
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
/*     Communication marketing*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Communication marketing{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div class="sousMessageAcceuil"> */
/*         <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxALaConqueteLecture', 'Nox à la conquête');"> Nox à la conquête </h4>*/
/*     </div>*/
/*     */
/*     <div class="sousMessageAcceuil"> */
/*         <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/ilYAForcementPlusSimpleLecture', 'Il y a forcément plus simple');"> Il y a forcément plus simple </h4>*/
/*     </div>*/
/*     */
/*     <div class="sousMessageAcceuil"> */
/*         <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxFournisseurDeTalentsLecture', 'Nox fournisseur de talents');"> Nox fournisseur de talents </h4>*/
/*     </div>*/
/*     */
/*     <div class="sousMessageAcceuil"> */
/*         <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/nos5ValeursLecture', 'Nos 5 valeurs');"> Nos 5 valeurs </h4>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {# empty Twig template #}*/
/* */
