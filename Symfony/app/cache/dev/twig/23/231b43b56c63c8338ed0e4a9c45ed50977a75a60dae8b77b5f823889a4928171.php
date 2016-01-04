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
        $__internal_13e2a0dac208a5b94b4feb802893e405103557ee46503f58db302e1b42f366be = $this->env->getExtension("native_profiler");
        $__internal_13e2a0dac208a5b94b4feb802893e405103557ee46503f58db302e1b42f366be->enter($__internal_13e2a0dac208a5b94b4feb802893e405103557ee46503f58db302e1b42f366be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationCommunication:communicationMarketing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13e2a0dac208a5b94b4feb802893e405103557ee46503f58db302e1b42f366be->leave($__internal_13e2a0dac208a5b94b4feb802893e405103557ee46503f58db302e1b42f366be_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_7c7022c0f883b2c020aa71e89d7ef79c45e316c13d4a66ed1d4173cdc64b45b9 = $this->env->getExtension("native_profiler");
        $__internal_7c7022c0f883b2c020aa71e89d7ef79c45e316c13d4a66ed1d4173cdc64b45b9->enter($__internal_7c7022c0f883b2c020aa71e89d7ef79c45e316c13d4a66ed1d4173cdc64b45b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration communication marketing
";
        
        $__internal_7c7022c0f883b2c020aa71e89d7ef79c45e316c13d4a66ed1d4173cdc64b45b9->leave($__internal_7c7022c0f883b2c020aa71e89d7ef79c45e316c13d4a66ed1d4173cdc64b45b9_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_230116fa3945d041c2dded3889d0c205a8fc4021b0f5d4bc3f85fd213dab56e4 = $this->env->getExtension("native_profiler");
        $__internal_230116fa3945d041c2dded3889d0c205a8fc4021b0f5d4bc3f85fd213dab56e4->enter($__internal_230116fa3945d041c2dded3889d0c205a8fc4021b0f5d4bc3f85fd213dab56e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration communication marketing";
        
        $__internal_230116fa3945d041c2dded3889d0c205a8fc4021b0f5d4bc3f85fd213dab56e4->leave($__internal_230116fa3945d041c2dded3889d0c205a8fc4021b0f5d4bc3f85fd213dab56e4_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_83bbd700f78d4caf51095e2f0496b6188903c507e5c9ea665eb0231c4a500d00 = $this->env->getExtension("native_profiler");
        $__internal_83bbd700f78d4caf51095e2f0496b6188903c507e5c9ea665eb0231c4a500d00->enter($__internal_83bbd700f78d4caf51095e2f0496b6188903c507e5c9ea665eb0231c4a500d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_83bbd700f78d4caf51095e2f0496b6188903c507e5c9ea665eb0231c4a500d00->leave($__internal_83bbd700f78d4caf51095e2f0496b6188903c507e5c9ea665eb0231c4a500d00_prof);

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
