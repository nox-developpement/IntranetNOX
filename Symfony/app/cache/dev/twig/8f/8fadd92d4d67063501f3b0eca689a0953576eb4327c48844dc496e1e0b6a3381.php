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
        $__internal_4f84ae65acb396755fdf09a28ef8366ad868268a87e858f18b63eec43d9cbf94 = $this->env->getExtension("native_profiler");
        $__internal_4f84ae65acb396755fdf09a28ef8366ad868268a87e858f18b63eec43d9cbf94->enter($__internal_4f84ae65acb396755fdf09a28ef8366ad868268a87e858f18b63eec43d9cbf94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:RH:RH.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f84ae65acb396755fdf09a28ef8366ad868268a87e858f18b63eec43d9cbf94->leave($__internal_4f84ae65acb396755fdf09a28ef8366ad868268a87e858f18b63eec43d9cbf94_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_44c884554448d92bbca93a2ea2df1a4ff0d44ff0068b30047e251d28385425dc = $this->env->getExtension("native_profiler");
        $__internal_44c884554448d92bbca93a2ea2df1a4ff0d44ff0068b30047e251d28385425dc->enter($__internal_44c884554448d92bbca93a2ea2df1a4ff0d44ff0068b30047e251d28385425dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Ressources humaines ";
        
        $__internal_44c884554448d92bbca93a2ea2df1a4ff0d44ff0068b30047e251d28385425dc->leave($__internal_44c884554448d92bbca93a2ea2df1a4ff0d44ff0068b30047e251d28385425dc_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_f5f418efd8b143c6b98e9cea3565ae7c24c1b2ca710ff744cf2f7131c2bd9f74 = $this->env->getExtension("native_profiler");
        $__internal_f5f418efd8b143c6b98e9cea3565ae7c24c1b2ca710ff744cf2f7131c2bd9f74->enter($__internal_f5f418efd8b143c6b98e9cea3565ae7c24c1b2ca710ff744cf2f7131c2bd9f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Ressources humaines";
        
        $__internal_f5f418efd8b143c6b98e9cea3565ae7c24c1b2ca710ff744cf2f7131c2bd9f74->leave($__internal_f5f418efd8b143c6b98e9cea3565ae7c24c1b2ca710ff744cf2f7131c2bd9f74_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_970f209cf22b613fb9ab2d40c14cfd1c83dd452ec50b2f007c1da60d0cb502b7 = $this->env->getExtension("native_profiler");
        $__internal_970f209cf22b613fb9ab2d40c14cfd1c83dd452ec50b2f007c1da60d0cb502b7->enter($__internal_970f209cf22b613fb9ab2d40c14cfd1c83dd452ec50b2f007c1da60d0cb502b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
            <a href='";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageRH", array("chemin" => "RHQuotidien/LivretAccueil", "dossier" => "Livret accueil", "config" => "livretAccueil")), "html", null, true);
        echo "'> <h4> Livret d'accueil </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href=\"mailto:rh@groupe-nox.com?subject=Demande d'attestation employeur ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastname", array()), "html", null, true);
        echo "\"> <h4> Demande d'attestation employeur </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageRH", array("chemin" => "RHQuotidien/FormulaireCP", "dossier" => "Formulaire CP ou Absence", "config" => "formulaireCP")), "html", null, true);
        echo "'> <h4> Formulaire CP ou Absence </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageRH", array("chemin" => "RHQuotidien/ProcessLogement", "dossier" => "Process 1% Logement + GRILLE", "config" => "processLogement")), "html", null, true);
        echo "'> <h4> Process 1% Logement + GRILLE </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='#'> <h4> Process Mutuelle + prévoyance + GRILLE </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='#'> <h4> Pointage </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='#'> <h4> Note de frais </h4> </a>
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
            <a href='#'> <h4> Convention collective </h4> </a>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageRH", array("chemin" => "ReglementationRH/ACCORDS", "dossier" => "ACCORDS voir disctinction par entreprise", "config" => "ACCORDS")), "html", null, true);
        echo "'> <h4> ACCORDS voir disctinction par entreprise </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageRH", array("chemin" => "ReglementationRH/NotesTypePolitiqueDeplacement", "dossier" => "Notes type politique déplacement", "config" => "notesTypePolitiqueDeplacement")), "html", null, true);
        echo "'> <h4> Notes type politique déplacement </h4> </a>
        </div>

    </div>

</div>

";
        
        $__internal_970f209cf22b613fb9ab2d40c14cfd1c83dd452ec50b2f007c1da60d0cb502b7->leave($__internal_970f209cf22b613fb9ab2d40c14cfd1c83dd452ec50b2f007c1da60d0cb502b7_prof);

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
        return array (  156 => 66,  149 => 62,  142 => 58,  127 => 48,  105 => 29,  98 => 25,  89 => 21,  82 => 17,  71 => 11,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Ressources humaines {% endblock %}*/
/* */
/* {% block messageAccueil %}Ressources humaines{% endblock %}*/
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
/*             <a href='{{ path('nox_intranet_affichageRH', { 'chemin': 'RHQuotidien/LivretAccueil', 'dossier': "Livret accueil", 'config': 'livretAccueil' }) }}'> <h4> Livret d'accueil </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href="mailto:rh@groupe-nox.com?subject=Demande d'attestation employeur {{ app.user.firstname }} {{ app.user.lastname }}"> <h4> Demande d'attestation employeur </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageRH', { 'chemin': 'RHQuotidien/FormulaireCP', 'dossier': 'Formulaire CP ou Absence', 'config': 'formulaireCP' }) }}'> <h4> Formulaire CP ou Absence </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageRH', { 'chemin': 'RHQuotidien/ProcessLogement', 'dossier': 'Process 1% Logement + GRILLE', 'config': 'processLogement' }) }}'> <h4> Process 1% Logement + GRILLE </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='#'> <h4> Process Mutuelle + prévoyance + GRILLE </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='#'> <h4> Pointage </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='#'> <h4> Note de frais </h4> </a>*/
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
/*             <a href='#'> <h4> Convention collective </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageRH', { 'chemin': 'ReglementationRH/ReglementInterieur', 'dossier': 'Réglement intérieur', 'config': 'reglementInterieur' }) }}'> <h4> Réglement intérieur </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageRH', { 'chemin': 'ReglementationRH/ACCORDS', 'dossier': 'ACCORDS voir disctinction par entreprise', 'config': 'ACCORDS' }) }}'> <h4> ACCORDS voir disctinction par entreprise </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageRH', { 'chemin': 'ReglementationRH/NotesTypePolitiqueDeplacement', 'dossier': 'Notes type politique déplacement', 'config': 'notesTypePolitiqueDeplacement' }) }}'> <h4> Notes type politique déplacement </h4> </a>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
/* */
