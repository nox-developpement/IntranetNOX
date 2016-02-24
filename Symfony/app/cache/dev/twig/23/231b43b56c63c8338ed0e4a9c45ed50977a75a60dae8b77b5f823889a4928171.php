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
        $__internal_461b328aaedbfb05981bbfc841e3caab9ada8f1e66552d7bd5b73504123173dd = $this->env->getExtension("native_profiler");
        $__internal_461b328aaedbfb05981bbfc841e3caab9ada8f1e66552d7bd5b73504123173dd->enter($__internal_461b328aaedbfb05981bbfc841e3caab9ada8f1e66552d7bd5b73504123173dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationCommunication:communicationMarketing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_461b328aaedbfb05981bbfc841e3caab9ada8f1e66552d7bd5b73504123173dd->leave($__internal_461b328aaedbfb05981bbfc841e3caab9ada8f1e66552d7bd5b73504123173dd_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_9c755cd39de586d45f2d809a60b42926f52316a2a384e787ac0604da0633ed6a = $this->env->getExtension("native_profiler");
        $__internal_9c755cd39de586d45f2d809a60b42926f52316a2a384e787ac0604da0633ed6a->enter($__internal_9c755cd39de586d45f2d809a60b42926f52316a2a384e787ac0604da0633ed6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration communication marketing
";
        
        $__internal_9c755cd39de586d45f2d809a60b42926f52316a2a384e787ac0604da0633ed6a->leave($__internal_9c755cd39de586d45f2d809a60b42926f52316a2a384e787ac0604da0633ed6a_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_3991ac2bd435e081afe100c328547b3bc1f0a704a3c4892f0a08f02cf07f08eb = $this->env->getExtension("native_profiler");
        $__internal_3991ac2bd435e081afe100c328547b3bc1f0a704a3c4892f0a08f02cf07f08eb->enter($__internal_3991ac2bd435e081afe100c328547b3bc1f0a704a3c4892f0a08f02cf07f08eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration communication marketing";
        
        $__internal_3991ac2bd435e081afe100c328547b3bc1f0a704a3c4892f0a08f02cf07f08eb->leave($__internal_3991ac2bd435e081afe100c328547b3bc1f0a704a3c4892f0a08f02cf07f08eb_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_5adcda315ba96621d9083dcce0f1a273ccb20f0ce1b960039049ff92ebc36556 = $this->env->getExtension("native_profiler");
        $__internal_5adcda315ba96621d9083dcce0f1a273ccb20f0ce1b960039049ff92ebc36556->enter($__internal_5adcda315ba96621d9083dcce0f1a273ccb20f0ce1b960039049ff92ebc36556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_5adcda315ba96621d9083dcce0f1a273ccb20f0ce1b960039049ff92ebc36556->leave($__internal_5adcda315ba96621d9083dcce0f1a273ccb20f0ce1b960039049ff92ebc36556_prof);

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
