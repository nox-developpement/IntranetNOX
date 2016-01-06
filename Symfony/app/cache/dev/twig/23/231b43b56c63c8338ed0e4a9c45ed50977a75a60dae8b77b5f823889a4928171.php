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
        $__internal_2f868ee8226be3fcabba7c98fc4db1287618f18010a082630b87c418b0af4f12 = $this->env->getExtension("native_profiler");
        $__internal_2f868ee8226be3fcabba7c98fc4db1287618f18010a082630b87c418b0af4f12->enter($__internal_2f868ee8226be3fcabba7c98fc4db1287618f18010a082630b87c418b0af4f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationCommunication:communicationMarketing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f868ee8226be3fcabba7c98fc4db1287618f18010a082630b87c418b0af4f12->leave($__internal_2f868ee8226be3fcabba7c98fc4db1287618f18010a082630b87c418b0af4f12_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_38c7256315aa389733f685395bef4510cbb85627a29ae9539b4d5fb98bc30e89 = $this->env->getExtension("native_profiler");
        $__internal_38c7256315aa389733f685395bef4510cbb85627a29ae9539b4d5fb98bc30e89->enter($__internal_38c7256315aa389733f685395bef4510cbb85627a29ae9539b4d5fb98bc30e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration communication marketing
";
        
        $__internal_38c7256315aa389733f685395bef4510cbb85627a29ae9539b4d5fb98bc30e89->leave($__internal_38c7256315aa389733f685395bef4510cbb85627a29ae9539b4d5fb98bc30e89_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_6c1f53db557ba3e8fb40edcdd8a3347cb5114a18b1ca60d8296a17c4b63605d2 = $this->env->getExtension("native_profiler");
        $__internal_6c1f53db557ba3e8fb40edcdd8a3347cb5114a18b1ca60d8296a17c4b63605d2->enter($__internal_6c1f53db557ba3e8fb40edcdd8a3347cb5114a18b1ca60d8296a17c4b63605d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration communication marketing";
        
        $__internal_6c1f53db557ba3e8fb40edcdd8a3347cb5114a18b1ca60d8296a17c4b63605d2->leave($__internal_6c1f53db557ba3e8fb40edcdd8a3347cb5114a18b1ca60d8296a17c4b63605d2_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_990d8983d39459c4fe7fe82c36810f8baf2031ec91db32fdd99f09d75e11a5eb = $this->env->getExtension("native_profiler");
        $__internal_990d8983d39459c4fe7fe82c36810f8baf2031ec91db32fdd99f09d75e11a5eb->enter($__internal_990d8983d39459c4fe7fe82c36810f8baf2031ec91db32fdd99f09d75e11a5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_990d8983d39459c4fe7fe82c36810f8baf2031ec91db32fdd99f09d75e11a5eb->leave($__internal_990d8983d39459c4fe7fe82c36810f8baf2031ec91db32fdd99f09d75e11a5eb_prof);

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
