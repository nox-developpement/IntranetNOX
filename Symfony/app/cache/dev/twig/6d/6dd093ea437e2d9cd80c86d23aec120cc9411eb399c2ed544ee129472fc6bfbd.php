<?php

/* @NoxIntranetRessources/AQ/AQ.html.twig */
class __TwigTemplate_34e9eda0315101a0c1d524c2d2066a2476562039365af118840c20fd5bbca949 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetRessources/AQ/AQ.html.twig", 1);
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
        $__internal_16872dc3311f1591831ad2cb2227ea63327599a38632735f1e4d2d65981c7916 = $this->env->getExtension("native_profiler");
        $__internal_16872dc3311f1591831ad2cb2227ea63327599a38632735f1e4d2d65981c7916->enter($__internal_16872dc3311f1591831ad2cb2227ea63327599a38632735f1e4d2d65981c7916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetRessources/AQ/AQ.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16872dc3311f1591831ad2cb2227ea63327599a38632735f1e4d2d65981c7916->leave($__internal_16872dc3311f1591831ad2cb2227ea63327599a38632735f1e4d2d65981c7916_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_d978c1ebfd43f8112b091ea5ed2457beff31514aa0bd61ce1cfb294285284325 = $this->env->getExtension("native_profiler");
        $__internal_d978c1ebfd43f8112b091ea5ed2457beff31514aa0bd61ce1cfb294285284325->enter($__internal_d978c1ebfd43f8112b091ea5ed2457beff31514aa0bd61ce1cfb294285284325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Assurance qualité ";
        
        $__internal_d978c1ebfd43f8112b091ea5ed2457beff31514aa0bd61ce1cfb294285284325->leave($__internal_d978c1ebfd43f8112b091ea5ed2457beff31514aa0bd61ce1cfb294285284325_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_a0611cf2d93b99b0f5e71c8bc9e71d6576800422d53cbf932e590465f1b40c68 = $this->env->getExtension("native_profiler");
        $__internal_a0611cf2d93b99b0f5e71c8bc9e71d6576800422d53cbf932e590465f1b40c68->enter($__internal_a0611cf2d93b99b0f5e71c8bc9e71d6576800422d53cbf932e590465f1b40c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Assurance qualité<div><div style=\"float: right;\"><p style=\"font-size: 0.8vw;\" ><a style=\"text-decoration: none; display: inline-block; width: 110%; color: rgb(31,78,121);\" href=\"mailto:g.toure@groupe-nox.com?subject=Demande d'informations 'Assurance qualité'\"><span style=\"vertical-align:middle; margin-right: 3%; display: inline-block;\">Contact</span><img style=\"vertical-align: middle; width: 25%;\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Message-Mail-32.png"), "html", null, true);
        echo "\"></a></p></div></div>";
        
        $__internal_a0611cf2d93b99b0f5e71c8bc9e71d6576800422d53cbf932e590465f1b40c68->leave($__internal_a0611cf2d93b99b0f5e71c8bc9e71d6576800422d53cbf932e590465f1b40c68_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_84a8ff2c8ceb4ddeeeb2f072ce34f169232d713cfdd13b225dd506dc29466b95 = $this->env->getExtension("native_profiler");
        $__internal_84a8ff2c8ceb4ddeeeb2f072ce34f169232d713cfdd13b225dd506dc29466b95->enter($__internal_84a8ff2c8ceb4ddeeeb2f072ce34f169232d713cfdd13b225dd506dc29466b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    <div class=\"surMessageAcceuil\" id='menuInfoQSE' onclick=\"showSubMenu2('#sousMenuInfoQSE', this);\"> 
        <h4> Infos QSE <img src='";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>

    <div id=\"sousMenuInfoQSE\" class=\"menu\">
        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageAQ", array("chemin" => "CERTIFICATSISOETOPQIBI/EQUIPEQSE", "dossier" => "Equipe QSE", "config" => "equipeQSE")), "html", null, true);
        echo "'> <h4> Equipe QSE </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 21
        echo $this->env->getExtension('routing')->getPath("nox_intranet_aq_citations");
        echo "'> <h4> Citations </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageAQ", array("chemin" => "CERTIFICATSISOETOPQIBI/EVENEMENTS", "dossier" => "Evénements", "config" => "evenements")), "html", null, true);
        echo "'> <h4> Evénements </h4> </a>
        </div>
    </div>

    <!-- Externe -->
    <div class=\"surMessageAcceuil\" id='menuCertificatsISO' onclick=\"showSubMenu2('#sousMenuCertificatsISO', this);\"> 
        <h4> Certificats ISO et OPQIBI <img src='";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>


    <div id='sousMenuCertificatsISO' class='menu'>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageAQ", array("chemin" => "CERTIFICATSISOETOPQIBI/ISO9001", "dossier" => "ISO 9001", "config" => "ISO9001")), "html", null, true);
        echo "'> <h4> ISO 9001 </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageAQ", array("chemin" => "CERTIFICATSISOETOPQIBI/ISO14001&18001", "dossier" => "ISO 14001 & 18001", "config" => "ISO14001&18001")), "html", null, true);
        echo "'> <h4> ISO 14001 & 18001 </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageAQ", array("chemin" => "CERTIFICATSISOETOPQIBI/OPQIBI", "dossier" => "OPQIBI", "config" => "OPQIBI")), "html", null, true);
        echo "'> <h4> OPQIBI </h4> </a>
        </div>

    </div>

    <div class=\"surMessageAcceuil\" id='menuDocumentQSE' onclick=\"showSubMenu2('#sousMenuDocumentQSE', this);\"> 
        <h4> Documents QSE <img src='";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>

    <div id='sousMenuDocumentQSE' class='menu'>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageAQ", array("chemin" => "DOCUMENTQSE/MANUELQUALITE", "dossier" => "Manuel Qualité", "config" => "manuelQualite")), "html", null, true);
        echo "'> <h4> Manuel Qualité </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageAQ", array("chemin" => "DOCUMENTQSE/PROCEDURES", "dossier" => "Procédures", "config" => "procedures")), "html", null, true);
        echo "'> <h4> Procédures </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageAQ", array("chemin" => "DOCUMENTQSE/MODESOPERATOIRES", "dossier" => "Modes opératoires", "config" => "modesOperatoires")), "html", null, true);
        echo "'> <h4> Mode opératoires </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageAQ", array("chemin" => "DOCUMENTQSE/FORMULAIRESETDOCUMENTSTYPES", "dossier" => "Formulaires et documents types", "config" => "formulairesEtDocumentsTypes")), "html", null, true);
        echo "'> <h4> Formulaires et documents types </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageAQ", array("chemin" => "DOCUMENTQSE/INDICATEURS", "dossier" => "Indicateurs", "config" => "indicateurs")), "html", null, true);
        echo "'> <h4> Indicateurs </h4> </a>
        </div>

    </div> 

";
        
        $__internal_84a8ff2c8ceb4ddeeeb2f072ce34f169232d713cfdd13b225dd506dc29466b95->leave($__internal_84a8ff2c8ceb4ddeeeb2f072ce34f169232d713cfdd13b225dd506dc29466b95_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetRessources/AQ/AQ.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 74,  172 => 70,  165 => 66,  158 => 62,  151 => 58,  140 => 52,  131 => 46,  124 => 42,  117 => 38,  105 => 31,  96 => 25,  89 => 21,  82 => 17,  72 => 12,  68 => 10,  62 => 9,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Assurance qualité {% endblock %}*/
/* */
/* {% block messageAccueil %}Assurance qualité<div><div style="float: right;"><p style="font-size: 0.8vw;" ><a style="text-decoration: none; display: inline-block; width: 110%; color: rgb(31,78,121);" href="mailto:g.toure@groupe-nox.com?subject=Demande d'informations 'Assurance qualité'"><span style="vertical-align:middle; margin-right: 3%; display: inline-block;">Contact</span><img style="vertical-align: middle; width: 25%;" src="{{ asset('bundles/noxintranetressources/images/Message-Mail-32.png') }}"></a></p></div></div>{% endblock %}*/
/* */
/* */
/* */
/* {% block contenu %}*/
/* */
/*     <div class="surMessageAcceuil" id='menuInfoQSE' onclick="showSubMenu2('#sousMenuInfoQSE', this);"> */
/*         <h4> Infos QSE <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>*/
/*     </div>*/
/* */
/*     <div id="sousMenuInfoQSE" class="menu">*/
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
/*     </div>*/
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
/*     </div> */
/* */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
