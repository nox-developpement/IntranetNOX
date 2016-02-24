<?php

/* @NoxIntranetAdministration/AdministrationCommunication/communicationInterne.html.twig */
class __TwigTemplate_963ce520d81403b3b022505dd7ad588b0311a9127edad308dc53a631ef0f8ecc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetAdministration/AdministrationCommunication/communicationInterne.html.twig", 1);
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
        $__internal_02eb978d90dc758c804459104a7d106afe4931662f8d0c247e5d6c892df7e779 = $this->env->getExtension("native_profiler");
        $__internal_02eb978d90dc758c804459104a7d106afe4931662f8d0c247e5d6c892df7e779->enter($__internal_02eb978d90dc758c804459104a7d106afe4931662f8d0c247e5d6c892df7e779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetAdministration/AdministrationCommunication/communicationInterne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02eb978d90dc758c804459104a7d106afe4931662f8d0c247e5d6c892df7e779->leave($__internal_02eb978d90dc758c804459104a7d106afe4931662f8d0c247e5d6c892df7e779_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_00db341ead46cfba8000c5fa195f7630ad65d98b805209e073820a3f9b9f03a3 = $this->env->getExtension("native_profiler");
        $__internal_00db341ead46cfba8000c5fa195f7630ad65d98b805209e073820a3f9b9f03a3->enter($__internal_00db341ead46cfba8000c5fa195f7630ad65d98b805209e073820a3f9b9f03a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration communication interne
";
        
        $__internal_00db341ead46cfba8000c5fa195f7630ad65d98b805209e073820a3f9b9f03a3->leave($__internal_00db341ead46cfba8000c5fa195f7630ad65d98b805209e073820a3f9b9f03a3_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_e5d6d18d650cb5711d72edf5409b9b01993c9b0ac089486ee89f399b74dc91ea = $this->env->getExtension("native_profiler");
        $__internal_e5d6d18d650cb5711d72edf5409b9b01993c9b0ac089486ee89f399b74dc91ea->enter($__internal_e5d6d18d650cb5711d72edf5409b9b01993c9b0ac089486ee89f399b74dc91ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration communication interne";
        
        $__internal_e5d6d18d650cb5711d72edf5409b9b01993c9b0ac089486ee89f399b74dc91ea->leave($__internal_e5d6d18d650cb5711d72edf5409b9b01993c9b0ac089486ee89f399b74dc91ea_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_1bc1d960148701d3077e11476bb47691de3c643813d04d0eae7d1aeb2c877693 = $this->env->getExtension("native_profiler");
        $__internal_1bc1d960148701d3077e11476bb47691de3c643813d04d0eae7d1aeb2c877693->enter($__internal_1bc1d960148701d3077e11476bb47691de3c643813d04d0eae7d1aeb2c877693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/trombinoscope', 'Trombinoscope');\"> Trombinoscope </h4>
    </div>

    <div class=\"sousMessageAcceuil\" id='menuOrganigrammes' onclick=\"showSubMenu('#sousMenuOrganigrammes',this);\"> 
        <h4> Organigrammes <img src='";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'> </h4>
    </div>

    <div id=\"sousMenuOrganigrammes\" class='sousMenu'>

        <div class=\"sousSousMessageAcceuil\"> 
            <h5 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/organigrammeStrategique', 'Ogranigramme stratégique');\"> Organigramme Stratégique </h5>
        </div>

        <div class=\"sousSousMessageAcceuil\"> 
            <h5 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/organigrammeFonctionnel', 'Organigramme fonctionnel');\"> Organigramme Fonctionnel </h5>
        </div>
        
        <div class=\"sousSousMessageAcceuil\"> 
            <h5 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/organigrammeAgence', 'Organigramme agence');\"> Organigramme Agence </h5>
        </div>

    </div>

    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/annuaireAgences', 'Annuaire agences');\"> Annuaire Agences </h4>
    </div>

    <div class=\"sousMessageAcceuil\"> 
        <h4> NoxNews </h4>
    </div>

    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/CE', 'CE');\"> CE </h4>
    </div>

    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/CHSCT', 'CHSCT');\"> CHSCT </h4>
    </div>

";
        
        $__internal_1bc1d960148701d3077e11476bb47691de3c643813d04d0eae7d1aeb2c877693->leave($__internal_1bc1d960148701d3077e11476bb47691de3c643813d04d0eae7d1aeb2c877693_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetAdministration/AdministrationCommunication/communicationInterne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 16,  68 => 10,  62 => 9,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Administration communication interne*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Administration communication interne{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div class="sousMessageAcceuil"> */
/*         <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/trombinoscope', 'Trombinoscope');"> Trombinoscope </h4>*/
/*     </div>*/
/* */
/*     <div class="sousMessageAcceuil" id='menuOrganigrammes' onclick="showSubMenu('#sousMenuOrganigrammes',this);"> */
/*         <h4> Organigrammes <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'> </h4>*/
/*     </div>*/
/* */
/*     <div id="sousMenuOrganigrammes" class='sousMenu'>*/
/* */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/organigrammeStrategique', 'Ogranigramme stratégique');"> Organigramme Stratégique </h5>*/
/*         </div>*/
/* */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/organigrammeFonctionnel', 'Organigramme fonctionnel');"> Organigramme Fonctionnel </h5>*/
/*         </div>*/
/*         */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/organigrammeAgence', 'Organigramme agence');"> Organigramme Agence </h5>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <div class="sousMessageAcceuil"> */
/*         <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/annuaireAgences', 'Annuaire agences');"> Annuaire Agences </h4>*/
/*     </div>*/
/* */
/*     <div class="sousMessageAcceuil"> */
/*         <h4> NoxNews </h4>*/
/*     </div>*/
/* */
/*     <div class="sousMessageAcceuil"> */
/*         <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/CE', 'CE');"> CE </h4>*/
/*     </div>*/
/* */
/*     <div class="sousMessageAcceuil"> */
/*         <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/CHSCT', 'CHSCT');"> CHSCT </h4>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
