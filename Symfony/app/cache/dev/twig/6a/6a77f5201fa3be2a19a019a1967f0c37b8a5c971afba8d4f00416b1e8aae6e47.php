<?php

/* NoxIntranetAdministrationBundle:AdministrationCommunication:administrationcommunication.html.twig */
class __TwigTemplate_7bab23ae240dab85306e1c8d31f5c1a3814c0a779945c92630bfe20e3d6518c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:AdministrationCommunication:administrationcommunication.html.twig", 1);
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
        $__internal_016c8c5fde0bfdb5e5ad63622e9063a0637992683b9f66bc4b543d8e4bdac410 = $this->env->getExtension("native_profiler");
        $__internal_016c8c5fde0bfdb5e5ad63622e9063a0637992683b9f66bc4b543d8e4bdac410->enter($__internal_016c8c5fde0bfdb5e5ad63622e9063a0637992683b9f66bc4b543d8e4bdac410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationCommunication:administrationcommunication.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_016c8c5fde0bfdb5e5ad63622e9063a0637992683b9f66bc4b543d8e4bdac410->leave($__internal_016c8c5fde0bfdb5e5ad63622e9063a0637992683b9f66bc4b543d8e4bdac410_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_15652f9210eee31caa11741ad4a796f1767185faee5dd43c01a0eb9663c30c58 = $this->env->getExtension("native_profiler");
        $__internal_15652f9210eee31caa11741ad4a796f1767185faee5dd43c01a0eb9663c30c58->enter($__internal_15652f9210eee31caa11741ad4a796f1767185faee5dd43c01a0eb9663c30c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration communication
";
        
        $__internal_15652f9210eee31caa11741ad4a796f1767185faee5dd43c01a0eb9663c30c58->leave($__internal_15652f9210eee31caa11741ad4a796f1767185faee5dd43c01a0eb9663c30c58_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_eb03832e45b1458db22c0dfc239a152f045c282b95fafbc0da68413f9488ea34 = $this->env->getExtension("native_profiler");
        $__internal_eb03832e45b1458db22c0dfc239a152f045c282b95fafbc0da68413f9488ea34->enter($__internal_eb03832e45b1458db22c0dfc239a152f045c282b95fafbc0da68413f9488ea34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration communication";
        
        $__internal_eb03832e45b1458db22c0dfc239a152f045c282b95fafbc0da68413f9488ea34->leave($__internal_eb03832e45b1458db22c0dfc239a152f045c282b95fafbc0da68413f9488ea34_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_d04d2c93e06c8ca60a122cb42ee7cdb565d2594c8eacfde91324e0cd1f66e20b = $this->env->getExtension("native_profiler");
        $__internal_d04d2c93e06c8ca60a122cb42ee7cdb565d2594c8eacfde91324e0cd1f66e20b->enter($__internal_d04d2c93e06c8ca60a122cb42ee7cdb565d2594c8eacfde91324e0cd1f66e20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    <!-- Externe -->
    <div class=\"surMessageAcceuil\" id='menuExterne' onclick=\"showSubMenu2('#sousMenuExterne', this);\"> 
        <h4> Externe <img src='";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>
    
    <div id='sousMenuExterne' class='menu'>
        
        <!-- Support (a ajouter)
        <div class=\"sousMessageAcceuil\" id='menuSupport' onclick=\"showSubMenu('#sousMenuSupport', this);\"> 
            <h4> Supports <img src='";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
        </div>

        <div id=\"sousMenuSupport\" class='sousMenu'>

            <div class=\"sousSousMessageAcceuil\"> 
                <h5 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/plaquettesInstitutionnelle', 'Plaquette Institutionnelle');\"> Plaquettes institutionnelle </h5>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <h5 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/presentationPowerpoint', 'Présentation Powerpoint');\"> Présentation Powerpoint </h5>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <h5  onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/fichesMetier', 'Fiches Métier');\" > Fiches Métier </h5>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <h5  onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/dossierTypeAppelOffre', 'Dossier type appel d\\'offre');\"> Dossier type appel d'offre </h5>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <h5 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/CVType', 'CV Type');\"> CV Type </h5>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <h5 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/courriersType', 'Courriers Type');\"> Courriers Type </h5>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <h5 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/papierEntete', 'Papier à entête');\"> Papier à entête </h5>
            </div>
        </div>
        -->

        <div class=\"sousMessageAcceuil\"> 
            <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxLetters', 'NoxLetters');\"> NoxLetters </h4>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxDansLaPresse', 'Nox dans la presse');\"> Nox dans la presse </h4>
        </div>
        
        <div class=\"sousMessageAcceuil\" id='menuBanqueImages' onclick=\"showSubMenu('#sousMenuBanqueImages', this);\"> 
            <h4> Banques d'images <img src='";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'> </h4>
        </div>

        <div id=\"sousMenuBanqueImages\" class='sousMenu'>

            <div class=\"sousSousMessageAcceuil\"> 
                <h5 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/logoNox', 'Logo Nox');\"> Logo Nox </h5>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <h5 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/cellesDuSiteInternet', 'Celles du site internet');\"> Celles du site internet </h5>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <h5 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/cellesDesSupports', 'Celles des supports');\"> Celles des supports </h5>
            </div>

        </div>
    </div>
    <!-- Fin Externe -->

    <!-- Interne -->
    <div class=\"surMessageAcceuil\" id='menuInterne' onclick=\"showSubMenu2('#sousMenuInterne', this);\"> 
        <h4> Interne <img src='";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>

    <div id='sousMenuInterne' class='menu'>
        <div class=\"sousMessageAcceuil\"> 
            <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/trombinoscope', 'Trombinoscope');\"> Trombinoscope </h4>
        </div>

        <div class=\"sousMessageAcceuil\" id='menuOrganigrammes' onclick=\"showSubMenu('#sousMenuOrganigrammes', this);\"> 
            <h4> Organigrammes <img src='";
        // line 96
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
            <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxNews', 'NoxNews');\"> NoxNews </h4>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/CE', 'CE');\"> CE </h4>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/CHSCT', 'CHSCT');\"> CHSCT </h4>
        </div>
    </div>
    <!-- Fin Interne -->

    <!-- Marketing -->
    <div class=\"surMessageAcceuil\" id='menuMarketing' onclick=\"showSubMenu2('#sousMenuMarketing', this);\"> 
        <h4> Marketing <img src='";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>

    <div id='sousMenuMarketing' class='menu'>
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
    </div>
    <!-- Fin Marketing -->

    <div class=\"surMessageAcceuil\" id='menuSI' onclick=\"showSubMenu2('#sousMenuSI', this);\"> 
        <h4> SI <img src='";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>

    <!-- SI -->
    <div id='sousMenuSI' class='menu'>
        <div class=\"sousMessageAcceuil\"> 
            <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/newsSI', 'News SI');\"> News SI </h4>
        </div>
    </div>
    <!-- FIn SI -->

</div>

";
        
        $__internal_d04d2c93e06c8ca60a122cb42ee7cdb565d2594c8eacfde91324e0cd1f66e20b->leave($__internal_d04d2c93e06c8ca60a122cb42ee7cdb565d2594c8eacfde91324e0cd1f66e20b_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:AdministrationCommunication:administrationcommunication.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 158,  220 => 135,  176 => 96,  162 => 87,  134 => 64,  85 => 20,  73 => 13,  68 => 10,  62 => 9,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Administration communication*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Administration communication{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <!-- Externe -->*/
/*     <div class="surMessageAcceuil" id='menuExterne' onclick="showSubMenu2('#sousMenuExterne', this);"> */
/*         <h4> Externe <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>*/
/*     </div>*/
/*     */
/*     <div id='sousMenuExterne' class='menu'>*/
/*         */
/*         <!-- Support (a ajouter)*/
/*         <div class="sousMessageAcceuil" id='menuSupport' onclick="showSubMenu('#sousMenuSupport', this);"> */
/*             <h4> Supports <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>*/
/*         </div>*/
/* */
/*         <div id="sousMenuSupport" class='sousMenu'>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/plaquettesInstitutionnelle', 'Plaquette Institutionnelle');"> Plaquettes institutionnelle </h5>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/presentationPowerpoint', 'Présentation Powerpoint');"> Présentation Powerpoint </h5>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5  onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/fichesMetier', 'Fiches Métier');" > Fiches Métier </h5>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5  onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/dossierTypeAppelOffre', 'Dossier type appel d\'offre');"> Dossier type appel d'offre </h5>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/CVType', 'CV Type');"> CV Type </h5>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/courriersType', 'Courriers Type');"> Courriers Type </h5>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/papierEntete', 'Papier à entête');"> Papier à entête </h5>*/
/*             </div>*/
/*         </div>*/
/*         -->*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxLetters', 'NoxLetters');"> NoxLetters </h4>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxDansLaPresse', 'Nox dans la presse');"> Nox dans la presse </h4>*/
/*         </div>*/
/*         */
/*         <div class="sousMessageAcceuil" id='menuBanqueImages' onclick="showSubMenu('#sousMenuBanqueImages', this);"> */
/*             <h4> Banques d'images <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'> </h4>*/
/*         </div>*/
/* */
/*         <div id="sousMenuBanqueImages" class='sousMenu'>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/logoNox', 'Logo Nox');"> Logo Nox </h5>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/cellesDuSiteInternet', 'Celles du site internet');"> Celles du site internet </h5>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/cellesDesSupports', 'Celles des supports');"> Celles des supports </h5>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/*     <!-- Fin Externe -->*/
/* */
/*     <!-- Interne -->*/
/*     <div class="surMessageAcceuil" id='menuInterne' onclick="showSubMenu2('#sousMenuInterne', this);"> */
/*         <h4> Interne <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>*/
/*     </div>*/
/* */
/*     <div id='sousMenuInterne' class='menu'>*/
/*         <div class="sousMessageAcceuil"> */
/*             <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/trombinoscope', 'Trombinoscope');"> Trombinoscope </h4>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil" id='menuOrganigrammes' onclick="showSubMenu('#sousMenuOrganigrammes', this);"> */
/*             <h4> Organigrammes <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'> </h4>*/
/*         </div>*/
/* */
/*         <div id="sousMenuOrganigrammes" class='sousMenu'>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/organigrammeStrategique', 'Ogranigramme stratégique');"> Organigramme Stratégique </h5>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/organigrammeFonctionnel', 'Organigramme fonctionnel');"> Organigramme Fonctionnel </h5>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/organigrammeAgence', 'Organigramme agence');"> Organigramme Agence </h5>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/annuaireAgences', 'Annuaire agences');"> Annuaire Agences </h4>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxNews', 'NoxNews');"> NoxNews </h4>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/CE', 'CE');"> CE </h4>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/CHSCT', 'CHSCT');"> CHSCT </h4>*/
/*         </div>*/
/*     </div>*/
/*     <!-- Fin Interne -->*/
/* */
/*     <!-- Marketing -->*/
/*     <div class="surMessageAcceuil" id='menuMarketing' onclick="showSubMenu2('#sousMenuMarketing', this);"> */
/*         <h4> Marketing <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>*/
/*     </div>*/
/* */
/*     <div id='sousMenuMarketing' class='menu'>*/
/*         <div class="sousMessageAcceuil"> */
/*             <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxALaConquete', 'Nox à la conquête');"> Nox à la conquête </h4>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/ilYAForcementPlusSimple', 'Il y a forcément plus simple');"> Il y a forcément plus simple </h4>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxFournisseurDeTalents', 'Nox fournisseur de talents');"> Nox fournisseur de talents </h4>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/nos5Valeurs', 'Nos 5 valeurs');"> Nos 5 valeurs </h4>*/
/*         </div>*/
/*     </div>*/
/*     <!-- Fin Marketing -->*/
/* */
/*     <div class="surMessageAcceuil" id='menuSI' onclick="showSubMenu2('#sousMenuSI', this);"> */
/*         <h4> SI <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>*/
/*     </div>*/
/* */
/*     <!-- SI -->*/
/*     <div id='sousMenuSI' class='menu'>*/
/*         <div class="sousMessageAcceuil"> */
/*             <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/newsSI', 'News SI');"> News SI </h4>*/
/*         </div>*/
/*     </div>*/
/*     <!-- FIn SI -->*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
/* */
