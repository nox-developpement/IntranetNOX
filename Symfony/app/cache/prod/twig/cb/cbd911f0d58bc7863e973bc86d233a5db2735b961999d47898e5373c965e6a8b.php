<?php

/* NoxIntranetCommunicationBundle:Accueil:accueilCommunication.html.twig */
class __TwigTemplate_54be1d1a7298196b5c190302df71600658fdf3845708ab8a2c87e2c31661d0e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetCommunicationBundle:Accueil:accueilCommunication.html.twig", 1);
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
        echo " Communication ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Communication";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <!-- Externe -->
    <div class=\"surMessageAcceuil\" id='menuExterne' onclick=\"showSubMenu2('#sousMenuExterne', this);\"> 
        <h4> Externe <img src='";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>


    <div id='sousMenuExterne' class='menu'>
        <!-- Support (a ajouter)
        <div class=\"sousMessageAcceuil\" id='menuSupport' onclick=\"showSubMenu('#sousMenuSupport', this);\"> 
            <h4> Supports <img src='";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
        </div>

        <div id=\"sousMenuSupport\" class='sousMenu'>

            <div class=\"sousSousMessageAcceuil\"> 
                <h5 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/plaquettesInstitutionnelleLecture', 'Plaquette Institutionnelle');\"> Plaquettes institutionnelle </h5>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <h5 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/presentationPowerpointLecture', 'Présentation Powerpoint');\"> Présentation Powerpoint </h5>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <h5  onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/fichesMetierLecture', 'Fiches Métier');\" > Fiches Métier </h5>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <h5  onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/dossierTypeAppelOffreLecture', 'Dossier type appel d\\'offre');\"> Dossier type appel d'offre </h5>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <h5 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/CVTypeLecture', 'CV Type');\"> CV Type </h5>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <h5 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/courriersTypeLecture', 'Courriers Type');\"> Courriers Type </h5>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <h5 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/papierEnteteLecture', 'Papier à entête');\"> Papier à entête </h5>
            </div>
        </div>
        -->

        <!-- Video Institutionnelle (a ajouter)
        <div class=\"sousMessageAcceuil\" id='menuVideoInstitutionnelle' onclick=\"showSubMenu('#sousMenuVideoInstitutionnelle', this);\"> 
            <h4> Vidéo institutionnelle <img src='";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
        </div>

        <div id=\"sousMenuVideoInstitutionnelle\" class='sousMenu'>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='https://www.youtube.com/watch?v=b3RqpsYbx04' target='_blank'> <h5> Vidéo Institutionnelle </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='https://www.youtube.com/watch?v=CtlxttbjFsI' target='_blank'> <h5> Survol drone polygone Riviera </h5> </a>
            </div>

        </div>
        -->

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 72
        echo $this->env->getExtension('routing')->getPath("nox_intranet_nox_letters");
        echo "'> <h4> NoxLetters </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Externe/NoxDansLaPresse", "dossier" => "NOX dans la presse", "config" => "noxDansLaPresse")), "html", null, true);
        echo "'> <h4> Nox dans la presse </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\" id='menuReseauxSociaux' onclick=\"showSubMenu('#sousMenuReseauxSociaux', this);\"> 
            <h4> Nox sur les réseaux sociaux <img src='";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'> </h4>
        </div>

        <div id=\"sousMenuReseauxSociaux\" class='sousMenu'>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='https://www.facebook.com/Groupe-Nox-140402782816064/' target='_blank'> <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Facebook.png"), "html", null, true);
        echo "\" alt=\"Facebook\" class=\"imgReseauxSociaux\"> <h5> Facebook </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='https://www.linkedin.com/company/groupe-nox' target='_blank'> <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/LinkedIn.png"), "html", null, true);
        echo "\" alt=\"Facebook\" class=\"imgReseauxSociaux\"> <h5> LinkedIn </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='http://fr.viadeo.com/fr/company/groupe-nox' target='_blank'> <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Viadeo.jpg"), "html", null, true);
        echo "\" alt=\"Facebook\" class=\"imgReseauxSociaux\"> <h5> Viadeo </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='https://www.youtube.com/user/bammezn/videos' target='_blank'> <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/YouTube.png"), "html", null, true);
        echo "\" alt=\"Facebook\" class=\"imgReseauxSociaux\"> <h5> Youtube </h5> </a>
            </div>

        </div>

        <div class=\"sousMessageAcceuil\" id='menuBanqueImages' onclick=\"showSubMenu('#sousMenuBanqueImages', this);\"> 
            <h4> Banques d'images <img src='";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'> </h4>
        </div>

        <div id=\"sousMenuBanqueImages\" class='sousMenu'>

            <div class=\"sousSousMessageAcceuil\"> 
                <h5 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/logoNoxLecture', 'Logo Nox');\"> Logo Nox </h5>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <h5 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/cellesDuSiteInternetLecture', 'Celles du site internet');\"> Celles du site internet </h5>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <h5 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/cellesDesSupportsLecture', 'Celles des supports');\"> Celles des supports </h5>
            </div>

        </div>
    </div>
    <!-- Fin Externe -->

    <!-- Interne -->
    <div class=\"surMessageAcceuil\" id='menuInterne' onclick=\"showSubMenu2('#sousMenuInterne', this);\"> 
        <h4> Interne <img src='";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>

    <div id='sousMenuInterne' class='menu'>
        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/Trombinoscope", "dossier" => "Trombinoscope", "config" => "trombinoscope")), "html", null, true);
        echo "'><h4> Trombinoscope </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\" id='menuOrganigrammes' onclick=\"showSubMenu('#sousMenuOrganigrammes', this);\"> 
            <h4> Organigrammes <img src='";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'> </h4>
        </div>

        <div id=\"sousMenuOrganigrammes\" class='sousMenu'>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/Organigrammes/OrganigrammeStrategique", "dossier" => "Organigramme Stratégique", "config" => "organigrammeStrategique")), "html", null, true);
        echo "'> <h5> Organigramme Stratégique </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/Organigrammes/OrganigrammeFonctionnel", "dossier" => "Organigramme Fonctionnel", "config" => "organigrammeFonctionnel")), "html", null, true);
        echo "'> <h5> Organigramme Fonctionnel </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/Organigrammes/OrganigrammeAgence", "dossier" => "Organigramme Agence", "config" => "organigrammeAgence")), "html", null, true);
        echo "'> <h5> Organigramme Agence </h5> </a>
            </div>

        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/AnnuaireAgences", "dossier" => "Annuaire Agences", "config" => "annuaireAgences")), "html", null, true);
        echo "'> <h4> Annuaire Agences </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 160
        echo $this->env->getExtension('routing')->getPath("nox_intranet_nox_news");
        echo "'> <h4> NoxNews </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\">
            <a href='";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/CE", "dossier" => "CE", "config" => "CE")), "html", null, true);
        echo "'> <h4> CE </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/CHSCT", "dossier" => "CHSCT", "config" => "CHSCT")), "html", null, true);
        echo "'> <h4> CHSCT </h4> </a>
        </div>
    </div>
    <!-- Fin Interne -->

    <!-- Marketing -->
    <div class=\"surMessageAcceuil\" id='menuMarketing' onclick=\"showSubMenu2('#sousMenuMarketing', this);\"> 
        <h4> Marketing <img src='";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>

    <div id='sousMenuMarketing' class='menu'>
        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Marketing/NoxALaConquete", "dossier" => "NOX à la conquête", "config" => "noxALaConquete")), "html", null, true);
        echo "'> <h4> NOX à la conquête </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Marketing/IlYAForcementPlusSimple", "dossier" => "Il y a forcément plus simple", "config" => "ilYAForcementPlusSimple")), "html", null, true);
        echo "'> <h4> Il y a forcément plus simple </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Marketing/NoxFournisseurDeTalents", "dossier" => "NOX fournisseur de talents", "config" => "noxFournisseurDeTalents")), "html", null, true);
        echo "'> <h4> NOX fournisseur de talents </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Marketing/Nos5Valeurs", "dossier" => "Nos 5 valeurs", "config" => "nos5Valeurs")), "html", null, true);
        echo "'> <h4> Nos 5 valeurs </h4> </a>
        </div>
    </div>
    <!-- Fin Marketing -->

    <div class=\"surMessageAcceuil\" id='menuSI' onclick=\"showSubMenu2('#sousMenuSI', this);\"> 
        <h4> SI <img src='";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>

    <!-- SI -->
    <div id='sousMenuSI' class='menu'>
        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 204
        echo $this->env->getExtension('routing')->getPath("nox_intranet_news_SI");
        echo "'> <h4>  News SI </h4> </a>
        </div>
    </div>
    <!-- FIn SI -->

</div>

";
    }

    public function getTemplateName()
    {
        return "NoxIntranetCommunicationBundle:Accueil:accueilCommunication.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 204,  331 => 198,  322 => 192,  315 => 188,  308 => 184,  301 => 180,  291 => 175,  281 => 168,  274 => 164,  267 => 160,  260 => 156,  251 => 150,  244 => 146,  237 => 142,  226 => 136,  219 => 132,  209 => 127,  181 => 104,  172 => 98,  165 => 94,  158 => 90,  151 => 86,  140 => 80,  133 => 76,  126 => 72,  104 => 55,  62 => 18,  50 => 11,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Communication {% endblock %}*/
/* */
/* {% block messageAccueil %}Communication{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <!-- Externe -->*/
/*     <div class="surMessageAcceuil" id='menuExterne' onclick="showSubMenu2('#sousMenuExterne', this);"> */
/*         <h4> Externe <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>*/
/*     </div>*/
/* */
/* */
/*     <div id='sousMenuExterne' class='menu'>*/
/*         <!-- Support (a ajouter)*/
/*         <div class="sousMessageAcceuil" id='menuSupport' onclick="showSubMenu('#sousMenuSupport', this);"> */
/*             <h4> Supports <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>*/
/*         </div>*/
/* */
/*         <div id="sousMenuSupport" class='sousMenu'>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/plaquettesInstitutionnelleLecture', 'Plaquette Institutionnelle');"> Plaquettes institutionnelle </h5>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/presentationPowerpointLecture', 'Présentation Powerpoint');"> Présentation Powerpoint </h5>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5  onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/fichesMetierLecture', 'Fiches Métier');" > Fiches Métier </h5>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5  onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/dossierTypeAppelOffreLecture', 'Dossier type appel d\'offre');"> Dossier type appel d'offre </h5>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/CVTypeLecture', 'CV Type');"> CV Type </h5>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/courriersTypeLecture', 'Courriers Type');"> Courriers Type </h5>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/papierEnteteLecture', 'Papier à entête');"> Papier à entête </h5>*/
/*             </div>*/
/*         </div>*/
/*         -->*/
/* */
/*         <!-- Video Institutionnelle (a ajouter)*/
/*         <div class="sousMessageAcceuil" id='menuVideoInstitutionnelle' onclick="showSubMenu('#sousMenuVideoInstitutionnelle', this);"> */
/*             <h4> Vidéo institutionnelle <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>*/
/*         </div>*/
/* */
/*         <div id="sousMenuVideoInstitutionnelle" class='sousMenu'>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <a href='https://www.youtube.com/watch?v=b3RqpsYbx04' target='_blank'> <h5> Vidéo Institutionnelle </h5> </a>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <a href='https://www.youtube.com/watch?v=CtlxttbjFsI' target='_blank'> <h5> Survol drone polygone Riviera </h5> </a>*/
/*             </div>*/
/* */
/*         </div>*/
/*         -->*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_nox_letters') }}'> <h4> NoxLetters </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Externe/NoxDansLaPresse', 'dossier': 'NOX dans la presse', 'config': 'noxDansLaPresse' }) }}'> <h4> Nox dans la presse </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil" id='menuReseauxSociaux' onclick="showSubMenu('#sousMenuReseauxSociaux', this);"> */
/*             <h4> Nox sur les réseaux sociaux <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'> </h4>*/
/*         </div>*/
/* */
/*         <div id="sousMenuReseauxSociaux" class='sousMenu'>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <a href='https://www.facebook.com/Groupe-Nox-140402782816064/' target='_blank'> <img src="{{ asset('bundles/noxintranetcommunication/images/Facebook.png') }}" alt="Facebook" class="imgReseauxSociaux"> <h5> Facebook </h5> </a>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <a href='https://www.linkedin.com/company/groupe-nox' target='_blank'> <img src="{{ asset('bundles/noxintranetcommunication/images/LinkedIn.png') }}" alt="Facebook" class="imgReseauxSociaux"> <h5> LinkedIn </h5> </a>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <a href='http://fr.viadeo.com/fr/company/groupe-nox' target='_blank'> <img src="{{ asset('bundles/noxintranetcommunication/images/Viadeo.jpg') }}" alt="Facebook" class="imgReseauxSociaux"> <h5> Viadeo </h5> </a>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <a href='https://www.youtube.com/user/bammezn/videos' target='_blank'> <img src="{{ asset('bundles/noxintranetcommunication/images/YouTube.png') }}" alt="Facebook" class="imgReseauxSociaux"> <h5> Youtube </h5> </a>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil" id='menuBanqueImages' onclick="showSubMenu('#sousMenuBanqueImages', this);"> */
/*             <h4> Banques d'images <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'> </h4>*/
/*         </div>*/
/* */
/*         <div id="sousMenuBanqueImages" class='sousMenu'>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/logoNoxLecture', 'Logo Nox');"> Logo Nox </h5>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/cellesDuSiteInternetLecture', 'Celles du site internet');"> Celles du site internet </h5>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/cellesDesSupportsLecture', 'Celles des supports');"> Celles des supports </h5>*/
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
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/Trombinoscope', 'dossier': 'Trombinoscope', 'config': 'trombinoscope' }) }}'><h4> Trombinoscope </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil" id='menuOrganigrammes' onclick="showSubMenu('#sousMenuOrganigrammes', this);"> */
/*             <h4> Organigrammes <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'> </h4>*/
/*         </div>*/
/* */
/*         <div id="sousMenuOrganigrammes" class='sousMenu'>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/Organigrammes/OrganigrammeStrategique', 'dossier': 'Organigramme Stratégique', 'config': 'organigrammeStrategique' }) }}'> <h5> Organigramme Stratégique </h5> </a>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/Organigrammes/OrganigrammeFonctionnel', 'dossier': 'Organigramme Fonctionnel', 'config': 'organigrammeFonctionnel' }) }}'> <h5> Organigramme Fonctionnel </h5> </a>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/Organigrammes/OrganigrammeAgence', 'dossier': 'Organigramme Agence', 'config': 'organigrammeAgence' }) }}'> <h5> Organigramme Agence </h5> </a>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/AnnuaireAgences', 'dossier': 'Annuaire Agences', 'config': 'annuaireAgences' }) }}'> <h4> Annuaire Agences </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_nox_news') }}'> <h4> NoxNews </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil">*/
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/CE', 'dossier': 'CE', 'config': 'CE' }) }}'> <h4> CE </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/CHSCT', 'dossier': 'CHSCT', 'config': 'CHSCT' }) }}'> <h4> CHSCT </h4> </a>*/
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
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Marketing/NoxALaConquete', 'dossier': 'NOX à la conquête', 'config': 'noxALaConquete' }) }}'> <h4> NOX à la conquête </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Marketing/IlYAForcementPlusSimple', 'dossier': 'Il y a forcément plus simple', 'config': 'ilYAForcementPlusSimple' }) }}'> <h4> Il y a forcément plus simple </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Marketing/NoxFournisseurDeTalents', 'dossier': 'NOX fournisseur de talents', 'config': 'noxFournisseurDeTalents' }) }}'> <h4> NOX fournisseur de talents </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Marketing/Nos5Valeurs', 'dossier': 'Nos 5 valeurs', 'config': 'nos5Valeurs' }) }}'> <h4> Nos 5 valeurs </h4> </a>*/
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
/*             <a href='{{ path('nox_intranet_news_SI') }}'> <h4>  News SI </h4> </a>*/
/*         </div>*/
/*     </div>*/
/*     <!-- FIn SI -->*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
/* */
