<?php

/* NoxIntranetRessourcesBundle:RH:RH.html.twig */
class __TwigTemplate_95c1d2cc46cbc3d2da6a03dfdd0be7bb8f8453ed82f15056afcf37d2168f3233 extends Twig_Template
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
        $__internal_3d9305ba85948bfe823fb91384b5c354c85f2cbab92da822c1f3aa16555e12d9 = $this->env->getExtension("native_profiler");
        $__internal_3d9305ba85948bfe823fb91384b5c354c85f2cbab92da822c1f3aa16555e12d9->enter($__internal_3d9305ba85948bfe823fb91384b5c354c85f2cbab92da822c1f3aa16555e12d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:RH:RH.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d9305ba85948bfe823fb91384b5c354c85f2cbab92da822c1f3aa16555e12d9->leave($__internal_3d9305ba85948bfe823fb91384b5c354c85f2cbab92da822c1f3aa16555e12d9_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_43fd37db6b0d8e35c09032184f89269e15597fa02fbd96848f612762dbdc6223 = $this->env->getExtension("native_profiler");
        $__internal_43fd37db6b0d8e35c09032184f89269e15597fa02fbd96848f612762dbdc6223->enter($__internal_43fd37db6b0d8e35c09032184f89269e15597fa02fbd96848f612762dbdc6223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Ressources humaines ";
        
        $__internal_43fd37db6b0d8e35c09032184f89269e15597fa02fbd96848f612762dbdc6223->leave($__internal_43fd37db6b0d8e35c09032184f89269e15597fa02fbd96848f612762dbdc6223_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_f46a38917da1fd9753a3b64cd267c782fe14a42fc2f1c0595ba3fb9b97ebfe3d = $this->env->getExtension("native_profiler");
        $__internal_f46a38917da1fd9753a3b64cd267c782fe14a42fc2f1c0595ba3fb9b97ebfe3d->enter($__internal_f46a38917da1fd9753a3b64cd267c782fe14a42fc2f1c0595ba3fb9b97ebfe3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Ressources humaines<div id=\"DivRHMail\"><div style=\"float: right;\"><p style=\"font-size: 0.8vw;\" ><a style=\"text-decoration: none; display: inline-block; width: 110%; color: rgb(31,78,121);\" href=\"mailto:drh@groupe-nox.com\"><span style=\"vertical-align:middle; margin-right: 3%; display: inline-block;\">Contact</span><img style=\"vertical-align: middle; width: 25%;\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Message-Mail-32.png"), "html", null, true);
        echo "\"></a></p></div></div>";
        
        $__internal_f46a38917da1fd9753a3b64cd267c782fe14a42fc2f1c0595ba3fb9b97ebfe3d->leave($__internal_f46a38917da1fd9753a3b64cd267c782fe14a42fc2f1c0595ba3fb9b97ebfe3d_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_bc85affc0b264a4e06596f437fe8823a69310feb26737d8dd1fbd3e2d7fdd332 = $this->env->getExtension("native_profiler");
        $__internal_bc85affc0b264a4e06596f437fe8823a69310feb26737d8dd1fbd3e2d7fdd332->enter($__internal_bc85affc0b264a4e06596f437fe8823a69310feb26737d8dd1fbd3e2d7fdd332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
            <a href=\"mailto:drh@groupe-nox.com?subject=Demande d’attestation employeur\"> <h4 class='tooltip'> <span class=\"tooltiptext\">Envoi de mail à la DRH</span> Attestation employeur </h4> </a>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_rh_excel", array("chemin" => "RHQuotidien/Pointage", "dossier" => "Pointage", "config" => "pointage")), "html", null, true);
        echo "'> <h4> Pointage </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_rh_excel", array("chemin" => "RHQuotidien/NoteDeFrais", "dossier" => "Note de frais", "config" => "noteDeFrais")), "html", null, true);
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
        echo "'> <h4> Mutuelle et Prévoyance </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='http://www.actionlogement.fr/' target=\"_blank\"> <h4> 1% Logement </h4> </a>
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
            <a href='http://www.syntec.fr/1-federation-syntec/128-negociation-collective/154-convention-collective.aspx' target='_blank'> <h4> Convention collective </h4> </a>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageRH", array("chemin" => "ReglementationRH/Accords", "dossier" => "Accords", "config" => "Accords")), "html", null, true);
        echo "'> <h4> Accords </h4> </a>
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
        
        $__internal_bc85affc0b264a4e06596f437fe8823a69310feb26737d8dd1fbd3e2d7fdd332->leave($__internal_bc85affc0b264a4e06596f437fe8823a69310feb26737d8dd1fbd3e2d7fdd332_prof);

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
        return array (  159 => 66,  152 => 62,  145 => 58,  130 => 48,  116 => 37,  109 => 33,  102 => 29,  95 => 25,  88 => 21,  73 => 11,  68 => 8,  62 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
/*             <a href="mailto:drh@groupe-nox.com?subject=Demande d’attestation employeur"> <h4 class='tooltip'> <span class="tooltiptext">Envoi de mail à la DRH</span> Attestation employeur </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageRH', { 'chemin': 'RHQuotidien/FormulaireCP', 'dossier': 'Formulaire absence', 'config': 'formulaireCP' }) }}'> <h4> Formulaire absence </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_rh_excel', { 'chemin': 'RHQuotidien/Pointage', 'dossier': 'Pointage', 'config': 'pointage'}) }}'> <h4> Pointage </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_rh_excel', { 'chemin': 'RHQuotidien/NoteDeFrais', 'dossier': 'Note de frais', 'config': 'noteDeFrais'}) }}'> <h4> Note de frais </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageRH', { 'chemin': 'RHQuotidien/LivretAccueil', 'dossier': "Livret accueil", 'config': 'livretAccueil' }) }}'> <h4> Livret d'accueil </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageRH', { 'chemin': 'RHQuotidien/ProcessMutuelle', 'dossier': 'Mutuelle', 'config': 'processMutuelle' }) }}'> <h4> Mutuelle et Prévoyance </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='http://www.actionlogement.fr/' target="_blank"> <h4> 1% Logement </h4> </a>*/
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
/*             <a href='http://www.syntec.fr/1-federation-syntec/128-negociation-collective/154-convention-collective.aspx' target='_blank'> <h4> Convention collective </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageRH', { 'chemin': 'ReglementationRH/ReglementInterieur', 'dossier': 'Réglement intérieur', 'config': 'reglementInterieur' }) }}'> <h4> Réglement intérieur </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageRH', { 'chemin': 'ReglementationRH/Accords', 'dossier': 'Accords', 'config': 'Accords' }) }}'> <h4> Accords </h4> </a>*/
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
