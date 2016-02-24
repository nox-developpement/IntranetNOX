<?php

/* @NoxIntranetCommunication/Marketing/communicationMarketing.html.twig */
class __TwigTemplate_668b7a99043a96e8ba164a32c3646c8b2257a3e5a71022333812798b2c5e274b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetCommunication/Marketing/communicationMarketing.html.twig", 1);
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
        $__internal_67d8c96b89b7d39919e4c6c98c7697375a5c3188fea395a6075c5b4adf0cd19b = $this->env->getExtension("native_profiler");
        $__internal_67d8c96b89b7d39919e4c6c98c7697375a5c3188fea395a6075c5b4adf0cd19b->enter($__internal_67d8c96b89b7d39919e4c6c98c7697375a5c3188fea395a6075c5b4adf0cd19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetCommunication/Marketing/communicationMarketing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67d8c96b89b7d39919e4c6c98c7697375a5c3188fea395a6075c5b4adf0cd19b->leave($__internal_67d8c96b89b7d39919e4c6c98c7697375a5c3188fea395a6075c5b4adf0cd19b_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_a24182738332f05b004954e343960c5cb8838b6dd09e43b61d380add4aa0c5ad = $this->env->getExtension("native_profiler");
        $__internal_a24182738332f05b004954e343960c5cb8838b6dd09e43b61d380add4aa0c5ad->enter($__internal_a24182738332f05b004954e343960c5cb8838b6dd09e43b61d380add4aa0c5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Communication marketing
";
        
        $__internal_a24182738332f05b004954e343960c5cb8838b6dd09e43b61d380add4aa0c5ad->leave($__internal_a24182738332f05b004954e343960c5cb8838b6dd09e43b61d380add4aa0c5ad_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_79ec9eca6a139706baf00bcee604290a0ea26c1023c9cdef889bbc8814ea80a7 = $this->env->getExtension("native_profiler");
        $__internal_79ec9eca6a139706baf00bcee604290a0ea26c1023c9cdef889bbc8814ea80a7->enter($__internal_79ec9eca6a139706baf00bcee604290a0ea26c1023c9cdef889bbc8814ea80a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Communication marketing";
        
        $__internal_79ec9eca6a139706baf00bcee604290a0ea26c1023c9cdef889bbc8814ea80a7->leave($__internal_79ec9eca6a139706baf00bcee604290a0ea26c1023c9cdef889bbc8814ea80a7_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_0f1d4d4abd80fd5ca78526924a96a74fb7dbbc894e27a01683e9e2fa6f62a1a4 = $this->env->getExtension("native_profiler");
        $__internal_0f1d4d4abd80fd5ca78526924a96a74fb7dbbc894e27a01683e9e2fa6f62a1a4->enter($__internal_0f1d4d4abd80fd5ca78526924a96a74fb7dbbc894e27a01683e9e2fa6f62a1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_0f1d4d4abd80fd5ca78526924a96a74fb7dbbc894e27a01683e9e2fa6f62a1a4->leave($__internal_0f1d4d4abd80fd5ca78526924a96a74fb7dbbc894e27a01683e9e2fa6f62a1a4_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetCommunication/Marketing/communicationMarketing.html.twig";
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
