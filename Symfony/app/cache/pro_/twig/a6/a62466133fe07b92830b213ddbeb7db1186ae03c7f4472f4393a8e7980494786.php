<?php

/* @NoxIntranetCommunication/Accueil/accueilCommunication.html.twig */
class __TwigTemplate_05c244d63fd273374c26725e3e67d0a4a7f62a98e0164e40055bd38219f53523 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetCommunication/Accueil/accueilCommunication.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Externe/NoxLetters", "dossier" => "NOX Letters", "config" => "noxLetters")), "html", null, true);
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
                <a href='";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("chemin" => "Externe/BanqueImages/logoNox", "dossier" => "Logo Nox", "config" => "logoNox")), "html", null, true);
        echo "'> <h5> Logo Nox </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("chemin" => "Externe/BanqueImages/cellesDuSiteInternet", "dossier" => "Celles du site internet", "config" => "cellesDuSiteInternet")), "html", null, true);
        echo "'> <h5> Celles du site internet </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("chemin" => "Externe/BanqueImages/cellesDesSupports", "dossier" => "Celles des supports", "config" => "cellesDesSupports")), "html", null, true);
        echo "'> <h5> Celles des supports </h5> </a>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/NoxNews", "dossier" => "NOX News", "config" => "noxNews")), "html", null, true);
        echo "'> <h4> NoxNews </h4> </a>
        </div>

        <!--
        <div class=\"sousMessageAcceuil\">
            <a href='";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/CE", "dossier" => "CE", "config" => "CE")), "html", null, true);
        echo "'> <h4> CE </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/CHSCT", "dossier" => "CHSCT", "config" => "CHSCT")), "html", null, true);
        echo "'> <h4> CHSCT </h4> </a>
        </div>
        -->

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/MailingInterne", "dossier" => "Mailing Interne", "config" => "mailingInterne")), "html", null, true);
        echo "'><h4> Mailing Interne </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\" id='menuVieDeLentreprise' onclick=\"showSubMenu('#sousMenuVieDeLentreprise', this);\"> 
            <h4> Vie de l'entreprise <img src='";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'> </h4>
        </div>

        <div id=\"sousMenuVieDeLentreprise\" class='sousMenu'>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/VieDeLentreprise/NotePersonnel", "dossier" => "Note au personnel", "config" => "notePersonnel")), "html", null, true);
        echo "'> <h5> Note au personnel </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/VieDeLentreprise/OrganigrammesSocietes", "dossier" => "Organigrammes sociétés", "config" => "organigrammesSocietes")), "html", null, true);
        echo "'> <h5> Organigrammes sociétés </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/VieDeLentreprise/OrganigrammesHierarchique", "dossier" => "Organigrammes hiérarchique", "config" => "organigrammesHierarchique")), "html", null, true);
        echo "'> <h5> Organigrammes Hiérarchique </h5> </a>
            </div>

        </div>

    </div>
    <!-- Fin Interne -->

    <!-- Marketing -->
    <div class=\"surMessageAcceuil\" id='menuMarketing' onclick=\"showSubMenu2('#sousMenuMarketing', this);\"> 
        <h4> Marketing <img src='";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>

    <div id='sousMenuMarketing' class='menu'>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("chemin" => "Marketing/NoxALaConquete", "dossier" => "NOX à la conquête", "config" => "noxALaConquete")), "html", null, true);
        echo "'> <h4> NOX à la conquête </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("chemin" => "Marketing/ilYAForcementPlusSimple", "dossier" => "Il y a forcément plus simple", "config" => "ilYAForcementPlusSimple")), "html", null, true);
        echo "'> <h4> Il y a forcément plus simple </h4> </a>
        </div>


        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("chemin" => "Marketing/noxFournisseurDeTalents", "dossier" => "NOX fournisseur de talents", "config" => "noxFournisseurDeTalents")), "html", null, true);
        echo "'> <h4> NOX fournisseur de talents </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("chemin" => "Marketing/nos5Valeurs", "dossier" => "Nos 5 valeurs", "config" => "nos5Valeurs")), "html", null, true);
        echo "'> <h4> Nos 5 valeurs </h4> </a>
        </div>

    </div>
    <!-- Fin Marketing -->

    <div class=\"surMessageAcceuil\" id='menuSI' onclick=\"showSubMenu2('#sousMenuSI', this);\"> 
        <h4> SI <img src='";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>

    <!-- SI -->
    <div id='sousMenuSI' class='menu'>
        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "SI/NewsSI", "dossier" => "News SI", "config" => "newsSI")), "html", null, true);
        echo "'> <h4>  News SI </h4> </a>
        </div>
    </div>
    <!-- FIn SI -->

</div>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetCommunication/Accueil/accueilCommunication.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 234,  387 => 228,  377 => 221,  370 => 217,  362 => 212,  355 => 208,  344 => 202,  331 => 192,  324 => 188,  317 => 184,  306 => 178,  299 => 174,  291 => 169,  284 => 165,  276 => 160,  269 => 156,  260 => 150,  253 => 146,  246 => 142,  235 => 136,  228 => 132,  218 => 127,  206 => 118,  199 => 114,  192 => 110,  181 => 104,  172 => 98,  165 => 94,  158 => 90,  151 => 86,  140 => 80,  133 => 76,  126 => 72,  104 => 55,  62 => 18,  50 => 11,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
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
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Externe/NoxLetters', 'dossier': 'NOX Letters', 'config': 'noxLetters' }) }}'> <h4> NoxLetters </h4> </a>*/
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
/*                 <a href='{{ path('nox_intranet_affichageImages', { 'chemin': 'Externe/BanqueImages/logoNox', 'dossier': 'Logo Nox', 'config': 'logoNox' }) }}'> <h5> Logo Nox </h5> </a>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <a href='{{ path('nox_intranet_affichageImages', { 'chemin': 'Externe/BanqueImages/cellesDuSiteInternet', 'dossier': 'Celles du site internet', 'config': 'cellesDuSiteInternet' }) }}'> <h5> Celles du site internet </h5> </a>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <a href='{{ path('nox_intranet_affichageImages', { 'chemin': 'Externe/BanqueImages/cellesDesSupports', 'dossier': 'Celles des supports', 'config': 'cellesDesSupports' }) }}'> <h5> Celles des supports </h5> </a>*/
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
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/NoxNews', 'dossier': 'NOX News', 'config': 'noxNews' }) }}'> <h4> NoxNews </h4> </a>*/
/*         </div>*/
/* */
/*         <!--*/
/*         <div class="sousMessageAcceuil">*/
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/CE', 'dossier': 'CE', 'config': 'CE' }) }}'> <h4> CE </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/CHSCT', 'dossier': 'CHSCT', 'config': 'CHSCT' }) }}'> <h4> CHSCT </h4> </a>*/
/*         </div>*/
/*         -->*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/MailingInterne', 'dossier': 'Mailing Interne', 'config': 'mailingInterne' }) }}'><h4> Mailing Interne </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil" id='menuVieDeLentreprise' onclick="showSubMenu('#sousMenuVieDeLentreprise', this);"> */
/*             <h4> Vie de l'entreprise <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'> </h4>*/
/*         </div>*/
/* */
/*         <div id="sousMenuVieDeLentreprise" class='sousMenu'>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/VieDeLentreprise/NotePersonnel', 'dossier': 'Note au personnel', 'config': 'notePersonnel' }) }}'> <h5> Note au personnel </h5> </a>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/VieDeLentreprise/OrganigrammesSocietes', 'dossier': 'Organigrammes sociétés', 'config': 'organigrammesSocietes' }) }}'> <h5> Organigrammes sociétés </h5> </a>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/VieDeLentreprise/OrganigrammesHierarchique', 'dossier': 'Organigrammes hiérarchique', 'config': 'organigrammesHierarchique' }) }}'> <h5> Organigrammes Hiérarchique </h5> </a>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/*     <!-- Fin Interne -->*/
/* */
/*     <!-- Marketing -->*/
/*     <div class="surMessageAcceuil" id='menuMarketing' onclick="showSubMenu2('#sousMenuMarketing', this);"> */
/*         <h4> Marketing <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>*/
/*     </div>*/
/* */
/*     <div id='sousMenuMarketing' class='menu'>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageImages', { 'chemin': 'Marketing/NoxALaConquete', 'dossier': 'NOX à la conquête', 'config': 'noxALaConquete' }) }}'> <h4> NOX à la conquête </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageImages', { 'chemin': 'Marketing/ilYAForcementPlusSimple', 'dossier': 'Il y a forcément plus simple', 'config': 'ilYAForcementPlusSimple' }) }}'> <h4> Il y a forcément plus simple </h4> </a>*/
/*         </div>*/
/* */
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageImages', { 'chemin': 'Marketing/noxFournisseurDeTalents', 'dossier': 'NOX fournisseur de talents', 'config': 'noxFournisseurDeTalents' }) }}'> <h4> NOX fournisseur de talents </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageImages', { 'chemin': 'Marketing/nos5Valeurs', 'dossier': 'Nos 5 valeurs', 'config': 'nos5Valeurs' }) }}'> <h4> Nos 5 valeurs </h4> </a>*/
/*         </div>*/
/* */
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
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'SI/NewsSI', 'dossier': 'News SI', 'config': 'newsSI' }) }}'> <h4>  News SI </h4> </a>*/
/*         </div>*/
/*     </div>*/
/*     <!-- FIn SI -->*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
/* */
