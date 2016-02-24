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
        $__internal_e61006fe411bb25397afa7272608527698ebcca29f35da3d2ec3f532003f06ed = $this->env->getExtension("native_profiler");
        $__internal_e61006fe411bb25397afa7272608527698ebcca29f35da3d2ec3f532003f06ed->enter($__internal_e61006fe411bb25397afa7272608527698ebcca29f35da3d2ec3f532003f06ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationCommunication:communicationMarketing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e61006fe411bb25397afa7272608527698ebcca29f35da3d2ec3f532003f06ed->leave($__internal_e61006fe411bb25397afa7272608527698ebcca29f35da3d2ec3f532003f06ed_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_152b4cf2c25ce9cd7a8ff0da840eb14e51af4a4d8e1b045e40174b8c769b3527 = $this->env->getExtension("native_profiler");
        $__internal_152b4cf2c25ce9cd7a8ff0da840eb14e51af4a4d8e1b045e40174b8c769b3527->enter($__internal_152b4cf2c25ce9cd7a8ff0da840eb14e51af4a4d8e1b045e40174b8c769b3527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration communication marketing
";
        
        $__internal_152b4cf2c25ce9cd7a8ff0da840eb14e51af4a4d8e1b045e40174b8c769b3527->leave($__internal_152b4cf2c25ce9cd7a8ff0da840eb14e51af4a4d8e1b045e40174b8c769b3527_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_46407db38de7d98643e7647f3b60f1aeda8b2fecdf1887b6acf9474f330ec40b = $this->env->getExtension("native_profiler");
        $__internal_46407db38de7d98643e7647f3b60f1aeda8b2fecdf1887b6acf9474f330ec40b->enter($__internal_46407db38de7d98643e7647f3b60f1aeda8b2fecdf1887b6acf9474f330ec40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration communication marketing";
        
        $__internal_46407db38de7d98643e7647f3b60f1aeda8b2fecdf1887b6acf9474f330ec40b->leave($__internal_46407db38de7d98643e7647f3b60f1aeda8b2fecdf1887b6acf9474f330ec40b_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_5b11a903879ccf12afd8062e2b1c4ed09b1cbbe94290132e875e7ce4c90b4387 = $this->env->getExtension("native_profiler");
        $__internal_5b11a903879ccf12afd8062e2b1c4ed09b1cbbe94290132e875e7ce4c90b4387->enter($__internal_5b11a903879ccf12afd8062e2b1c4ed09b1cbbe94290132e875e7ce4c90b4387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_5b11a903879ccf12afd8062e2b1c4ed09b1cbbe94290132e875e7ce4c90b4387->leave($__internal_5b11a903879ccf12afd8062e2b1c4ed09b1cbbe94290132e875e7ce4c90b4387_prof);

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
