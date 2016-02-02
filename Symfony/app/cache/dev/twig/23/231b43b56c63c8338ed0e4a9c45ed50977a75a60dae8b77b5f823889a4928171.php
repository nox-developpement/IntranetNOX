<?php

/* NoxIntranetAdministrationBundle:AdministrationCommunication:communicationMarketing.html.twig */
class __TwigTemplate_8c7541131d25aab14920720e4d1537579d73e4eeb731e702c7310d162af27f17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:AdministrationCommunication:communicationMarketing.html.twig", 1);
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
        $__internal_0bebae1dc204b4b599fef449d0b866b0b608edd08f01700e64f95da3fa020074 = $this->env->getExtension("native_profiler");
        $__internal_0bebae1dc204b4b599fef449d0b866b0b608edd08f01700e64f95da3fa020074->enter($__internal_0bebae1dc204b4b599fef449d0b866b0b608edd08f01700e64f95da3fa020074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationCommunication:communicationMarketing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bebae1dc204b4b599fef449d0b866b0b608edd08f01700e64f95da3fa020074->leave($__internal_0bebae1dc204b4b599fef449d0b866b0b608edd08f01700e64f95da3fa020074_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_9aace743a1f1dc326bec9cc04d1d3fde3de354e849e68f68ebbeb41996d48b5f = $this->env->getExtension("native_profiler");
        $__internal_9aace743a1f1dc326bec9cc04d1d3fde3de354e849e68f68ebbeb41996d48b5f->enter($__internal_9aace743a1f1dc326bec9cc04d1d3fde3de354e849e68f68ebbeb41996d48b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration communication marketing
";
        
        $__internal_9aace743a1f1dc326bec9cc04d1d3fde3de354e849e68f68ebbeb41996d48b5f->leave($__internal_9aace743a1f1dc326bec9cc04d1d3fde3de354e849e68f68ebbeb41996d48b5f_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_53be6381c4d37460b854ee14e5847d8ad42cea5719753a985fa33ac43a93ba53 = $this->env->getExtension("native_profiler");
        $__internal_53be6381c4d37460b854ee14e5847d8ad42cea5719753a985fa33ac43a93ba53->enter($__internal_53be6381c4d37460b854ee14e5847d8ad42cea5719753a985fa33ac43a93ba53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration communication marketing";
        
        $__internal_53be6381c4d37460b854ee14e5847d8ad42cea5719753a985fa33ac43a93ba53->leave($__internal_53be6381c4d37460b854ee14e5847d8ad42cea5719753a985fa33ac43a93ba53_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_fa339493bcd24bf90aa8fe8a3cdcb1235d2bf025b0f39944f7d88a823f833b64 = $this->env->getExtension("native_profiler");
        $__internal_fa339493bcd24bf90aa8fe8a3cdcb1235d2bf025b0f39944f7d88a823f833b64->enter($__internal_fa339493bcd24bf90aa8fe8a3cdcb1235d2bf025b0f39944f7d88a823f833b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_fa339493bcd24bf90aa8fe8a3cdcb1235d2bf025b0f39944f7d88a823f833b64->leave($__internal_fa339493bcd24bf90aa8fe8a3cdcb1235d2bf025b0f39944f7d88a823f833b64_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:AdministrationCommunication:communicationMarketing.html.twig";
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
