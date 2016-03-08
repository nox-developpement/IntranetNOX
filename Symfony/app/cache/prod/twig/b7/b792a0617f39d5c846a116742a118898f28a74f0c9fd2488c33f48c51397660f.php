<?php

/* NoxIntranetRessourcesBundle:RH:RH.html.twig */
class __TwigTemplate_5bbc33c7df8330fa3ba196c67e4b78fe8b65a171be3dfa4bfcef2ff7ff979628 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:RH:RH.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        echo " Ressources humaines ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Ressources humaines<div id=\"DivRHMail\"><div style=\"float: right;\"><p style=\"font-size: 0.8vw;\" ><a style=\"text-decoration: none; display: inline-block; width: 110%; color: rgb(31,78,121);\" href=\"mailto:drh@groupe-nox.com\"><span style=\"vertical-align:middle; margin-right: 3%; display: inline-block;\">Contact</span><img style=\"vertical-align: middle; width: 25%;\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Message-Mail-32.png"), "html", null, true);
        echo "\"></a></p></div></div>";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <!-- RH au quotidien -->
    <div class=\"surMessageAcceuil\" id='menuRHQuotidien' onclick=\"showSubMenu2('#sousMenuRHQuotidien', this);\"> 
        <h4> RH au quotidien <img src='";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>

    <div id='sousMenuRHQuotidien' class='menu'>

        <div class=\"sousMessageAcceuil\"> 
            <a href=\"mailto:drh@groupe-nox.com?subject=attestation employeur ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "lastname", array()), "html", null, true);
        echo "\"> <h4> Attestation employeur </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageRH", array("chemin" => "RHQuotidien/FormulaireCP", "dossier" => "Formulaire absence", "config" => "formulaireCP")), "html", null, true);
        echo "'> <h4> Formulaire absence </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageRH", array("chemin" => "RHQuotidien/Pointage", "dossier" => "Pointage", "config" => "pointage")), "html", null, true);
        echo "'> <h4> Pointage </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageRH", array("chemin" => "RHQuotidien/NoteDeFrais", "dossier" => "Note de frais", "config" => "noteDeFrais")), "html", null, true);
        echo "'> <h4> Note de frais </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageRH", array("chemin" => "RHQuotidien/LivretAccueil", "dossier" => "Livret accueil", "config" => "livretAccueil")), "html", null, true);
        echo "'> <h4> Livret d'accueil </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageRH", array("chemin" => "RHQuotidien/ProcessMutuelle", "dossier" => "Mutuelle", "config" => "processMutuelle")), "html", null, true);
        echo "'> <h4> Mutuelle </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageRH", array("chemin" => "RHQuotidien/ProcessLogement", "dossier" => "1% Logement", "config" => "processLogement")), "html", null, true);
        echo "'> <h4> 1% Logement </h4> </a>
        </div>

    </div>

    <!-- Règlementation RH -->
    <div class=\"surMessageAcceuil\" id='menuReglementationRH' onclick=\"showSubMenu2('#sousMenuReglementationRH', this);\"> 
        <h4> Règlementation RH <img src='";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>

    <div id='sousMenuReglementationRH' class='menu'>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageRH", array("chemin" => "ReglementationRH/ConventionCollective", "dossier" => "Convention collective", "config" => "conventionCollective")), "html", null, true);
        echo "'> <h4> Convention collective </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageRH", array("chemin" => "ReglementationRH/ReglementInterieur", "dossier" => "Réglement intérieur", "config" => "reglementInterieur")), "html", null, true);
        echo "'> <h4> Réglement intérieur </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageRH", array("chemin" => "ReglementationRH/ACCORDS", "dossier" => "ACCORDS", "config" => "ACCORDS")), "html", null, true);
        echo "'> <h4> ACCORDS </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageRH", array("chemin" => "ReglementationRH/ProceduresInternes", "dossier" => "Procédures internes", "config" => "proceduresInternes")), "html", null, true);
        echo "'> <h4> Procédures internes </h4> </a>
        </div>


    </div>

</div>

";
    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:RH:RH.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 66,  142 => 62,  135 => 58,  128 => 54,  117 => 48,  107 => 41,  100 => 37,  93 => 33,  86 => 29,  79 => 25,  72 => 21,  63 => 17,  52 => 11,  47 => 8,  44 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Ressources humaines {% endblock %}*/
/* */
/* {% block messageAccueil %}Ressources humaines<div id="DivRHMail"><div style="float: right;"><p style="font-size: 0.8vw;" ><a style="text-decoration: none; display: inline-block; width: 110%; color: rgb(31,78,121);" href="mailto:drh@groupe-nox.com"><span style="vertical-align:middle; margin-right: 3%; display: inline-block;">Contact</span><img style="vertical-align: middle; width: 25%;" src="{{ asset('bundles/noxintranetressources/images/Message-Mail-32.png') }}"></a></p></div></div>{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <!-- RH au quotidien -->*/
/*     <div class="surMessageAcceuil" id='menuRHQuotidien' onclick="showSubMenu2('#sousMenuRHQuotidien', this);"> */
/*         <h4> RH au quotidien <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>*/
/*     </div>*/
/* */
/*     <div id='sousMenuRHQuotidien' class='menu'>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href="mailto:drh@groupe-nox.com?subject=attestation employeur {{ app.user.firstname }} {{ app.user.lastname }}"> <h4> Attestation employeur </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageRH', { 'chemin': 'RHQuotidien/FormulaireCP', 'dossier': 'Formulaire absence', 'config': 'formulaireCP' }) }}'> <h4> Formulaire absence </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageRH', { 'chemin': 'RHQuotidien/Pointage', 'dossier': 'Pointage', 'config': 'pointage' }) }}'> <h4> Pointage </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageRH', { 'chemin': 'RHQuotidien/NoteDeFrais', 'dossier': 'Note de frais', 'config': 'noteDeFrais' }) }}'> <h4> Note de frais </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageRH', { 'chemin': 'RHQuotidien/LivretAccueil', 'dossier': "Livret accueil", 'config': 'livretAccueil' }) }}'> <h4> Livret d'accueil </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageRH', { 'chemin': 'RHQuotidien/ProcessMutuelle', 'dossier': 'Mutuelle', 'config': 'processMutuelle' }) }}'> <h4> Mutuelle </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageRH', { 'chemin': 'RHQuotidien/ProcessLogement', 'dossier': '1% Logement', 'config': 'processLogement' }) }}'> <h4> 1% Logement </h4> </a>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <!-- Règlementation RH -->*/
/*     <div class="surMessageAcceuil" id='menuReglementationRH' onclick="showSubMenu2('#sousMenuReglementationRH', this);"> */
/*         <h4> Règlementation RH <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>*/
/*     </div>*/
/* */
/*     <div id='sousMenuReglementationRH' class='menu'>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageRH', { 'chemin': 'ReglementationRH/ConventionCollective', 'dossier': 'Convention collective', 'config': 'conventionCollective' }) }}'> <h4> Convention collective </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageRH', { 'chemin': 'ReglementationRH/ReglementInterieur', 'dossier': 'Réglement intérieur', 'config': 'reglementInterieur' }) }}'> <h4> Réglement intérieur </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageRH', { 'chemin': 'ReglementationRH/ACCORDS', 'dossier': 'ACCORDS', 'config': 'ACCORDS' }) }}'> <h4> ACCORDS </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageRH', { 'chemin': 'ReglementationRH/ProceduresInternes', 'dossier': 'Procédures internes', 'config': 'proceduresInternes' }) }}'> <h4> Procédures internes </h4> </a>*/
/*         </div>*/
/* */
/* */
/*     </div>*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
/* */
