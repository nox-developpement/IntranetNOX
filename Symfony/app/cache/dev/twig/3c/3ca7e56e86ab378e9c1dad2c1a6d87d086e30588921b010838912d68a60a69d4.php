<?php

/* NoxIntranetRessourcesBundle:AQ:AQ.html.twig */
class __TwigTemplate_6c415c4b6758cb17b64eaf810634e3eeef7b534bc565d6859ce2c8318019047e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:AQ:AQ.html.twig", 1);
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
        $__internal_bccef6d9ec670e6290360bdba82290a7caddee13bd622b2e8e8f2bf1f0281008 = $this->env->getExtension("native_profiler");
        $__internal_bccef6d9ec670e6290360bdba82290a7caddee13bd622b2e8e8f2bf1f0281008->enter($__internal_bccef6d9ec670e6290360bdba82290a7caddee13bd622b2e8e8f2bf1f0281008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:AQ:AQ.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bccef6d9ec670e6290360bdba82290a7caddee13bd622b2e8e8f2bf1f0281008->leave($__internal_bccef6d9ec670e6290360bdba82290a7caddee13bd622b2e8e8f2bf1f0281008_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_bfea5c600ed92ef36c7dc1f566a71afb8177e2cbab6ef7a54e8482acabc97f05 = $this->env->getExtension("native_profiler");
        $__internal_bfea5c600ed92ef36c7dc1f566a71afb8177e2cbab6ef7a54e8482acabc97f05->enter($__internal_bfea5c600ed92ef36c7dc1f566a71afb8177e2cbab6ef7a54e8482acabc97f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Assurance qualité ";
        
        $__internal_bfea5c600ed92ef36c7dc1f566a71afb8177e2cbab6ef7a54e8482acabc97f05->leave($__internal_bfea5c600ed92ef36c7dc1f566a71afb8177e2cbab6ef7a54e8482acabc97f05_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_5066674784476c0105e8dabd590da523a2510d1aa45cbce436d6dc39dd905dfb = $this->env->getExtension("native_profiler");
        $__internal_5066674784476c0105e8dabd590da523a2510d1aa45cbce436d6dc39dd905dfb->enter($__internal_5066674784476c0105e8dabd590da523a2510d1aa45cbce436d6dc39dd905dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Assurance qualité";
        
        $__internal_5066674784476c0105e8dabd590da523a2510d1aa45cbce436d6dc39dd905dfb->leave($__internal_5066674784476c0105e8dabd590da523a2510d1aa45cbce436d6dc39dd905dfb_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_4601590aa7306dfca6c2665696cfb8f88cd2c0b412c81747bcf103b4364f83e9 = $this->env->getExtension("native_profiler");
        $__internal_4601590aa7306dfca6c2665696cfb8f88cd2c0b412c81747bcf103b4364f83e9->enter($__internal_4601590aa7306dfca6c2665696cfb8f88cd2c0b412c81747bcf103b4364f83e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <!-- Externe -->
    <div class=\"surMessageAcceuil\" id='menuCertificatsISO' onclick=\"showSubMenu2('#sousMenuCertificatsISO', this);\"> 
        <h4> Certificats ISO et OPQIBI <img src='";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>


    <div id='sousMenuCertificatsISO' class='menu'>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageAQ", array("chemin" => "CERTIFICATSISOETOPQIBI/ISO9001", "dossier" => "ISO 9001", "config" => "ISO9001")), "html", null, true);
        echo "'> <h4> ISO 9001 </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageAQ", array("chemin" => "CERTIFICATSISOETOPQIBI/ISO14001&18001", "dossier" => "ISO 14001 & 18001", "config" => "ISO14001&18001")), "html", null, true);
        echo "'> <h4> ISO 14001 & 18001 </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageAQ", array("chemin" => "CERTIFICATSISOETOPQIBI/OPQIBI", "dossier" => "OPQIBI", "config" => "OPQIBI")), "html", null, true);
        echo "'> <h4> OPQIBI </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageAQ", array("chemin" => "CERTIFICATSISOETOPQIBI/EQUIPEQSE", "dossier" => "Equipe QSE", "config" => "equipeQSE")), "html", null, true);
        echo "'> <h4> Equipe QSE </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 34
        echo $this->env->getExtension('routing')->getPath("nox_intranet_aq_citations");
        echo "'> <h4> Citations </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageAQ", array("chemin" => "CERTIFICATSISOETOPQIBI/EVENEMENTS", "dossier" => "Evénements", "config" => "evenements")), "html", null, true);
        echo "'> <h4> Evénements </h4> </a>
        </div>

    </div>

    <div class=\"surMessageAcceuil\" id='menuDocumentQSE' onclick=\"showSubMenu2('#sousMenuDocumentQSE', this);\"> 
        <h4> Documents QSE <img src='";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>

    <div id='sousMenuDocumentQSE' class='menu'>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageAQ", array("chemin" => "DOCUMENTQSE/MANUELQUALITE", "dossier" => "Manuel Qualité", "config" => "manuelQualite")), "html", null, true);
        echo "'> <h4> Manuel Qualité </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageAQ", array("chemin" => "DOCUMENTQSE/PROCEDURES", "dossier" => "Procédures", "config" => "procedures")), "html", null, true);
        echo "'> <h4> Procédures </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageAQ", array("chemin" => "DOCUMENTQSE/MODESOPERATOIRES", "dossier" => "Modes opératoires", "config" => "modesOperatoires")), "html", null, true);
        echo "'> <h4> Mode opératoires </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageAQ", array("chemin" => "DOCUMENTQSE/FORMULAIRESETDOCUMENTSTYPES", "dossier" => "Formulaires et documents types", "config" => "formulairesEtDocumentsTypes")), "html", null, true);
        echo "'> <h4> Formulaires et documents types </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageAQ", array("chemin" => "DOCUMENTQSE/INDICATEURS", "dossier" => "Indicateurs", "config" => "indicateurs")), "html", null, true);
        echo "'> <h4> Indicateurs </h4> </a>
        </div>

    </div>

    <!--
            <div class=\"surMessageAcceuil\" id='menuInfoQSE' onclick=\"showSubMenu2('#sousMenuInfoQSE', this);\"> 
                <h4> Infos QSE <img src='";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
            </div>
    -->

";
        
        $__internal_4601590aa7306dfca6c2665696cfb8f88cd2c0b412c81747bcf103b4364f83e9->leave($__internal_4601590aa7306dfca6c2665696cfb8f88cd2c0b412c81747bcf103b4364f83e9_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:AQ:AQ.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 73,  166 => 66,  159 => 62,  152 => 58,  145 => 54,  138 => 50,  127 => 44,  118 => 38,  111 => 34,  104 => 30,  97 => 26,  90 => 22,  83 => 18,  71 => 11,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Assurance qualité {% endblock %}*/
/* */
/* {% block messageAccueil %}Assurance qualité{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <!-- Externe -->*/
/*     <div class="surMessageAcceuil" id='menuCertificatsISO' onclick="showSubMenu2('#sousMenuCertificatsISO', this);"> */
/*         <h4> Certificats ISO et OPQIBI <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>*/
/*     </div>*/
/* */
/* */
/*     <div id='sousMenuCertificatsISO' class='menu'>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageAQ', { 'chemin': 'CERTIFICATSISOETOPQIBI/ISO9001', 'dossier': 'ISO 9001', 'config': 'ISO9001' }) }}'> <h4> ISO 9001 </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageAQ', { 'chemin': 'CERTIFICATSISOETOPQIBI/ISO14001&18001', 'dossier': 'ISO 14001 & 18001', 'config': 'ISO14001&18001' }) }}'> <h4> ISO 14001 & 18001 </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageAQ', { 'chemin': 'CERTIFICATSISOETOPQIBI/OPQIBI', 'dossier': 'OPQIBI', 'config': 'OPQIBI' }) }}'> <h4> OPQIBI </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageAQ', { 'chemin': 'CERTIFICATSISOETOPQIBI/EQUIPEQSE', 'dossier': 'Equipe QSE', 'config': 'equipeQSE' }) }}'> <h4> Equipe QSE </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_aq_citations') }}'> <h4> Citations </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageAQ', { 'chemin': 'CERTIFICATSISOETOPQIBI/EVENEMENTS', 'dossier': 'Evénements', 'config': 'evenements' }) }}'> <h4> Evénements </h4> </a>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <div class="surMessageAcceuil" id='menuDocumentQSE' onclick="showSubMenu2('#sousMenuDocumentQSE', this);"> */
/*         <h4> Documents QSE <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>*/
/*     </div>*/
/* */
/*     <div id='sousMenuDocumentQSE' class='menu'>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageAQ', { 'chemin': 'DOCUMENTQSE/MANUELQUALITE', 'dossier': 'Manuel Qualité', 'config': 'manuelQualite' }) }}'> <h4> Manuel Qualité </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageAQ', { 'chemin': 'DOCUMENTQSE/PROCEDURES', 'dossier': 'Procédures', 'config': 'procedures' }) }}'> <h4> Procédures </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageAQ', { 'chemin': 'DOCUMENTQSE/MODESOPERATOIRES', 'dossier': 'Modes opératoires', 'config': 'modesOperatoires' }) }}'> <h4> Mode opératoires </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageAQ', { 'chemin': 'DOCUMENTQSE/FORMULAIRESETDOCUMENTSTYPES', 'dossier': 'Formulaires et documents types', 'config': 'formulairesEtDocumentsTypes' }) }}'> <h4> Formulaires et documents types </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageAQ', { 'chemin': 'DOCUMENTQSE/INDICATEURS', 'dossier': 'Indicateurs', 'config': 'indicateurs' }) }}'> <h4> Indicateurs </h4> </a>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <!--*/
/*             <div class="surMessageAcceuil" id='menuInfoQSE' onclick="showSubMenu2('#sousMenuInfoQSE', this);"> */
/*                 <h4> Infos QSE <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>*/
/*             </div>*/
/*     -->*/
/* */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
