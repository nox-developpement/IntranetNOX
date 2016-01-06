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
        $__internal_dd977a66e54465bdb9c0f94ceafaf2fcfb78f8fbef5dba8b67996868096b57ab = $this->env->getExtension("native_profiler");
        $__internal_dd977a66e54465bdb9c0f94ceafaf2fcfb78f8fbef5dba8b67996868096b57ab->enter($__internal_dd977a66e54465bdb9c0f94ceafaf2fcfb78f8fbef5dba8b67996868096b57ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetCommunicationBundle:Marketing:communicationMarketing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd977a66e54465bdb9c0f94ceafaf2fcfb78f8fbef5dba8b67996868096b57ab->leave($__internal_dd977a66e54465bdb9c0f94ceafaf2fcfb78f8fbef5dba8b67996868096b57ab_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_a00e48aa72d2bb19117b9bd675f6b299c1285e7b4b3da164b373e18bd4e69d18 = $this->env->getExtension("native_profiler");
        $__internal_a00e48aa72d2bb19117b9bd675f6b299c1285e7b4b3da164b373e18bd4e69d18->enter($__internal_a00e48aa72d2bb19117b9bd675f6b299c1285e7b4b3da164b373e18bd4e69d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Communication marketing
";
        
        $__internal_a00e48aa72d2bb19117b9bd675f6b299c1285e7b4b3da164b373e18bd4e69d18->leave($__internal_a00e48aa72d2bb19117b9bd675f6b299c1285e7b4b3da164b373e18bd4e69d18_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_eff181c62874603a2d63aa0cd9952724907898f6a1f403139ba12bf1667477e8 = $this->env->getExtension("native_profiler");
        $__internal_eff181c62874603a2d63aa0cd9952724907898f6a1f403139ba12bf1667477e8->enter($__internal_eff181c62874603a2d63aa0cd9952724907898f6a1f403139ba12bf1667477e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Communication marketing";
        
        $__internal_eff181c62874603a2d63aa0cd9952724907898f6a1f403139ba12bf1667477e8->leave($__internal_eff181c62874603a2d63aa0cd9952724907898f6a1f403139ba12bf1667477e8_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_940fc799fc115c6a30bc06bc8efdd0427d8cb964bb0d0b9df82259c658ebccf5 = $this->env->getExtension("native_profiler");
        $__internal_940fc799fc115c6a30bc06bc8efdd0427d8cb964bb0d0b9df82259c658ebccf5->enter($__internal_940fc799fc115c6a30bc06bc8efdd0427d8cb964bb0d0b9df82259c658ebccf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_940fc799fc115c6a30bc06bc8efdd0427d8cb964bb0d0b9df82259c658ebccf5->leave($__internal_940fc799fc115c6a30bc06bc8efdd0427d8cb964bb0d0b9df82259c658ebccf5_prof);

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
