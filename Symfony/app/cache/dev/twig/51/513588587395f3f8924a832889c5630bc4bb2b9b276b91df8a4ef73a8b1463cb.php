<?php

/* NoxIntranetCommunicationBundle:Accueil:accueilCommunication.html.twig */
class __TwigTemplate_b48ebd162e5a698be3a36b42c9ad7d421cccf2c6740832f556cb75f2c710e7df extends Twig_Template
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
        $__internal_7f67c74eeb10efee1ce0ea5618c944fa8d83b971c6168b6721a3757d40959607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f67c74eeb10efee1ce0ea5618c944fa8d83b971c6168b6721a3757d40959607->enter($__internal_7f67c74eeb10efee1ce0ea5618c944fa8d83b971c6168b6721a3757d40959607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetCommunicationBundle:Accueil:accueilCommunication.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f67c74eeb10efee1ce0ea5618c944fa8d83b971c6168b6721a3757d40959607->leave($__internal_7f67c74eeb10efee1ce0ea5618c944fa8d83b971c6168b6721a3757d40959607_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_c945c04feb6906c00048cc180d36aaec98ded434e7a84ffd55dfc404c8d91deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c945c04feb6906c00048cc180d36aaec98ded434e7a84ffd55dfc404c8d91deb->enter($__internal_c945c04feb6906c00048cc180d36aaec98ded434e7a84ffd55dfc404c8d91deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Communication ";
        
        $__internal_c945c04feb6906c00048cc180d36aaec98ded434e7a84ffd55dfc404c8d91deb->leave($__internal_c945c04feb6906c00048cc180d36aaec98ded434e7a84ffd55dfc404c8d91deb_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_bc9a7ae2548051a5aea73e8f874ca705042a533db86fa94e15b29e1a1bc87660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc9a7ae2548051a5aea73e8f874ca705042a533db86fa94e15b29e1a1bc87660->enter($__internal_bc9a7ae2548051a5aea73e8f874ca705042a533db86fa94e15b29e1a1bc87660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Communication";
        
        $__internal_bc9a7ae2548051a5aea73e8f874ca705042a533db86fa94e15b29e1a1bc87660->leave($__internal_bc9a7ae2548051a5aea73e8f874ca705042a533db86fa94e15b29e1a1bc87660_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_67d558ef7ff5f4cb4fe573fb8beff2cccf25af0bbf8a88f75fe7bcba64acbdcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d558ef7ff5f4cb4fe573fb8beff2cccf25af0bbf8a88f75fe7bcba64acbdcb->enter($__internal_67d558ef7ff5f4cb4fe573fb8beff2cccf25af0bbf8a88f75fe7bcba64acbdcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <!-- Externe -->
    <div class=\"surMessageAcceuil\" id='menuExterne' onclick=\"showSubMenu2('#sousMenuExterne', this);\"> 
        <h4> Externe <img src='";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>


    <div id='sousMenuExterne' class='menu'>
        <!-- Support (a ajouter)
        <div class=\"sousMessageAcceuil\" id='menuSupport' onclick=\"showSubMenu('#sousMenuSupport', this);\"> 
            <h4> Supports <img src='";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Externe/NoxLetters", "dossier" => "NOX Letters", "config" => "noxLetters")), "html", null, true);
        echo "'> <h4> NoxLetters </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Externe/NoxDansLaPresse", "dossier" => "NOX dans la presse", "config" => "noxDansLaPresse")), "html", null, true);
        echo "'> <h4> Nox dans la presse </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Externe/PlaquettesInstitutionnelle", "dossier" => "Plaquettes institutionnelle", "config" => "plaquettesInstitutionnelle")), "html", null, true);
        echo "'> <h4> Plaquettes institutionnelles </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\" id='menuReseauxSociaux' onclick=\"showSubMenu('#sousMenuReseauxSociaux', this);\"> 
            <h4> Nox sur les réseaux sociaux <img src='";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'> </h4>
        </div>

        <div id=\"sousMenuReseauxSociaux\" class='sousMenu'>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='https://www.facebook.com/Groupe-Nox-140402782816064/' target='_blank'> <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetcommunication/images/Facebook.png"), "html", null, true);
        echo "\" alt=\"Facebook\" class=\"imgReseauxSociaux\"> <h5> Facebook </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='https://www.linkedin.com/company/groupe-nox' target='_blank'> <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetcommunication/images/LinkedIn.png"), "html", null, true);
        echo "\" alt=\"Facebook\" class=\"imgReseauxSociaux\"> <h5> LinkedIn </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='http://fr.viadeo.com/fr/company/groupe-nox' target='_blank'> <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetcommunication/images/Viadeo.jpg"), "html", null, true);
        echo "\" alt=\"Facebook\" class=\"imgReseauxSociaux\"> <h5> Viadeo </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='https://www.youtube.com/user/bammezn/videos' target='_blank'> <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetcommunication/images/YouTube.png"), "html", null, true);
        echo "\" alt=\"Facebook\" class=\"imgReseauxSociaux\"> <h5> Youtube </h5> </a>
            </div>

        </div>

        <div class=\"sousMessageAcceuil\" id='menuBanqueImages' onclick=\"showSubMenu('#sousMenuBanqueImages', this);\"> 
            <h4> Banques d'images <img src='";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'> </h4>
        </div>

        <div id=\"sousMenuBanqueImages\" class='sousMenu'>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageImages", array("chemin" => "Externe/BanqueImages/logoNox", "dossier" => "Logo Nox", "config" => "logoNox")), "html", null, true);
        echo "'> <h5> Logo Nox </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageImages", array("chemin" => "Externe/BanqueImages/cellesDuSiteInternet", "dossier" => "Celles du site internet", "config" => "cellesDuSiteInternet")), "html", null, true);
        echo "'> <h5> Celles du site internet </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageImages", array("chemin" => "Externe/BanqueImages/cellesDesSupports", "dossier" => "Celles des supports", "config" => "cellesDesSupports")), "html", null, true);
        echo "'> <h5> Celles des supports </h5> </a>
            </div>

        </div>
    </div>
    <!-- Fin Externe -->

    <!-- Interne -->
    <div class=\"surMessageAcceuil\" id='menuInterne' onclick=\"showSubMenu2('#sousMenuInterne', this);\"> 
        <h4> Interne <img src='";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>

    <div id='sousMenuInterne' class='menu'>
        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/Trombinoscope", "dossier" => "Trombinoscope", "config" => "trombinoscope")), "html", null, true);
        echo "'><h4> Trombinoscope </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\" id='menuOrganigrammes' onclick=\"showSubMenu('#sousMenuOrganigrammes', this);\"> 
            <h4> Organigrammes <img src='";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'> </h4>
        </div>

        <div id=\"sousMenuOrganigrammes\" class='sousMenu'>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/Organigrammes/OrganigrammeStrategique", "dossier" => "Organigramme stratégique", "config" => "organigrammeStrategique")), "html", null, true);
        echo "'> <h5> Organigramme stratégique </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/Organigrammes/OrganigrammeFonctionnel", "dossier" => "Organigramme fonctionnel", "config" => "organigrammeFonctionnel")), "html", null, true);
        echo "'> <h5> Organigramme fonctionnel </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/Organigrammes/OrganigrammeAgence", "dossier" => "Organigramme agence", "config" => "organigrammeAgence")), "html", null, true);
        echo "'> <h5> Organigramme agence </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/Organigrammes/OrganigrammesSocietes", "dossier" => "Organigrammes sociétés", "config" => "organigrammesSocietes")), "html", null, true);
        echo "'> <h5> Organigrammes sociétés </h5> </a>
            </div>

        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/AnnuaireAgences", "dossier" => "Annuaire Agences", "config" => "annuaireAgences")), "html", null, true);
        echo "'> <h4> Annuaire Agences </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/NoxNews", "dossier" => "NOX News", "config" => "noxNews")), "html", null, true);
        echo "'> <h4> NoxNews </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/LeMoniteur", "dossier" => "Le moniteur", "config" => "leMoniteur")), "html", null, true);
        echo "'> <h4> Le moniteur </h4> </a>
        </div>

        <!--
        <div class=\"sousMessageAcceuil\">
            <a href='";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/CE", "dossier" => "CE", "config" => "CE")), "html", null, true);
        echo "'> <h4> CE </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/CHSCT", "dossier" => "CHSCT", "config" => "CHSCT")), "html", null, true);
        echo "'> <h4> CHSCT </h4> </a>
        </div>
        -->

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/MailingInterne", "dossier" => "Mailing Interne", "config" => "mailingInterne")), "html", null, true);
        echo "'><h4> Mailing Interne </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\" id='menuVieDeLentreprise' onclick=\"showSubMenu('#sousMenuVieDeLentreprise', this);\"> 
            <h4> Vie de l'entreprise <img src='";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'> </h4>
        </div>

        <div id=\"sousMenuVieDeLentreprise\" class='sousMenu'>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/VieDeLentreprise/NotePersonnel", "dossier" => "Note au personnel", "config" => "notePersonnel")), "html", null, true);
        echo "'> <h5> Notes au personnel </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/VieDeLentreprise/PosteAPourvoir", "dossier" => "Poste à pourvoir", "config" => "posteAPourvoir")), "html", null, true);
        echo "'> <h5> Postes à pourvoir </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "Interne/VieDeLentreprise/NominationOrganisation", "dossier" => "Nomination &#47; Organisation", "config" => "nominationOrganisation")), "html", null, true);
        echo "'> <h5> Nominations / organisation </h5> </a>
            </div>

        </div>

    </div>
    <!-- Fin Interne -->

    <!-- Marketing -->
    <div class=\"surMessageAcceuil\" id='menuMarketing' onclick=\"showSubMenu2('#sousMenuMarketing', this);\"> 
        <h4> Marketing <img src='";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>

    <div id='sousMenuMarketing' class='menu'>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageImages", array("chemin" => "Marketing/NoxALaConquete", "dossier" => "NOX à la conquête", "config" => "noxALaConquete")), "html", null, true);
        echo "'> <h4> NOX à la conquête </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageImages", array("chemin" => "Marketing/ilYAForcementPlusSimple", "dossier" => "Il y a forcément plus simple", "config" => "ilYAForcementPlusSimple")), "html", null, true);
        echo "'> <h4> Il y a forcément plus simple </h4> </a>
        </div>


        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageImages", array("chemin" => "Marketing/noxFournisseurDeTalents", "dossier" => "NOX fournisseur de talents", "config" => "noxFournisseurDeTalents")), "html", null, true);
        echo "'> <h4> NOX fournisseur de talents </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageImages", array("chemin" => "Marketing/nos5Valeurs", "dossier" => "Nos 5 valeurs", "config" => "nos5Valeurs")), "html", null, true);
        echo "'> <h4> Nos 5 valeurs </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageImages", array("chemin" => "Marketing/BuildYourFuture", "dossier" => "Build your future", "config" => "buildYourFuture")), "html", null, true);
        echo "'> <h4> Build your future </h4> </a>
        </div>

    </div>
    <!-- Fin Marketing -->

    <!-- SI -->
    <div class=\"surMessageAcceuil\" id='menuSI' onclick=\"showSubMenu2('#sousMenuSI', this);\"> 
        <h4> SI <img src='";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>

    <div id='sousMenuSI' class='menu'>
        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "SI/NewsSI", "dossier" => "News SI", "config" => "newsSI")), "html", null, true);
        echo "'> <h4> News SI </h4> </a>
        </div>
        <div class=\"sousMessageAcceuil\">  
            <a href='";
        // line 253
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_communication_bim");
        echo "'> <h4> BIM </h4> </a>
        </div>
    </div>
    <!-- Fin SI -->

    <!-- BIM -->
    <div class=\"surMessageAcceuil\" id='menuBIM' onclick=\"showSubMenu2('#sousMenuBIM', this);\"> 
        <h4> BIM <img src='";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>

    <div id='sousMenuBIM' class='menu'>
        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "BIM/Communication", "dossier" => "Communication", "config" => "bimCommunication", "uploadAcess" => $this->env->getExtension('NoxIntranet\CommunicationBundle\Twig\Extension\EncryptStringExtension')->encryptString("f.delapparent,s.blanchard,l.morisseau"))), "html", null, true);
        echo "'> <h4> Communication </h4> </a>
        </div>
        <div class=\"sousMessageAcceuil\">  
            <a href='";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "BIM/Formation", "dossier" => "Formation", "config" => "bimFormation", "uploadAcess" => $this->env->getExtension('NoxIntranet\CommunicationBundle\Twig\Extension\EncryptStringExtension')->encryptString("f.delapparent,s.blanchard,l.morisseau"))), "html", null, true);
        echo "'> <h4> Formation </h4> </a>
        </div>
        <div class=\"sousMessageAcceuil\">  
            <a href='";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "BIM/Notices", "dossier" => "Notices", "config" => "bimNotices", "uploadAcess" => $this->env->getExtension('NoxIntranet\CommunicationBundle\Twig\Extension\EncryptStringExtension')->encryptString("f.delapparent,s.blanchard,l.morisseau"))), "html", null, true);
        echo "'> <h4> Notices </h4> </a>
        </div>
        <div class=\"sousMessageAcceuil\">  
            <a href='";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("chemin" => "BIM/Protocole", "dossier" => "Protocole", "config" => "bimProtocole", "uploadAcess" => $this->env->getExtension('NoxIntranet\CommunicationBundle\Twig\Extension\EncryptStringExtension')->encryptString("f.delapparent,s.blanchard,l.morisseau"))), "html", null, true);
        echo "'> <h4> Protocole </h4> </a>
        </div>
    </div>

    <!-- Fin BIM -->

</div>

";
        
        $__internal_67d558ef7ff5f4cb4fe573fb8beff2cccf25af0bbf8a88f75fe7bcba64acbdcb->leave($__internal_67d558ef7ff5f4cb4fe573fb8beff2cccf25af0bbf8a88f75fe7bcba64acbdcb_prof);

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
        return array (  491 => 274,  485 => 271,  479 => 268,  473 => 265,  463 => 260,  453 => 253,  447 => 250,  437 => 245,  426 => 237,  419 => 233,  412 => 229,  404 => 224,  397 => 220,  386 => 214,  373 => 204,  366 => 200,  359 => 196,  348 => 190,  341 => 186,  333 => 181,  326 => 177,  318 => 172,  311 => 168,  304 => 164,  295 => 158,  288 => 154,  281 => 150,  274 => 146,  263 => 140,  256 => 136,  246 => 131,  234 => 122,  227 => 118,  220 => 114,  209 => 108,  200 => 102,  193 => 98,  186 => 94,  179 => 90,  168 => 84,  161 => 80,  154 => 76,  147 => 72,  125 => 55,  83 => 18,  71 => 11,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}

{% block titrePage %} Communication {% endblock %}

{% block messageAccueil %}Communication{% endblock %}

{% block contenu %}

    <!-- Externe -->
    <div class=\"surMessageAcceuil\" id='menuExterne' onclick=\"showSubMenu2('#sousMenuExterne', this);\"> 
        <h4> Externe <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>
    </div>


    <div id='sousMenuExterne' class='menu'>
        <!-- Support (a ajouter)
        <div class=\"sousMessageAcceuil\" id='menuSupport' onclick=\"showSubMenu('#sousMenuSupport', this);\"> 
            <h4> Supports <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>
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
            <h4> Vidéo institutionnelle <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>
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
            <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Externe/NoxLetters', 'dossier': 'NOX Letters', 'config': 'noxLetters' }) }}'> <h4> NoxLetters </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Externe/NoxDansLaPresse', 'dossier': 'NOX dans la presse', 'config': 'noxDansLaPresse' }) }}'> <h4> Nox dans la presse </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Externe/PlaquettesInstitutionnelle', 'dossier': 'Plaquettes institutionnelle', 'config': 'plaquettesInstitutionnelle' }) }}'> <h4> Plaquettes institutionnelles </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\" id='menuReseauxSociaux' onclick=\"showSubMenu('#sousMenuReseauxSociaux', this);\"> 
            <h4> Nox sur les réseaux sociaux <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'> </h4>
        </div>

        <div id=\"sousMenuReseauxSociaux\" class='sousMenu'>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='https://www.facebook.com/Groupe-Nox-140402782816064/' target='_blank'> <img src=\"{{ asset('bundles/noxintranetcommunication/images/Facebook.png') }}\" alt=\"Facebook\" class=\"imgReseauxSociaux\"> <h5> Facebook </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='https://www.linkedin.com/company/groupe-nox' target='_blank'> <img src=\"{{ asset('bundles/noxintranetcommunication/images/LinkedIn.png') }}\" alt=\"Facebook\" class=\"imgReseauxSociaux\"> <h5> LinkedIn </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='http://fr.viadeo.com/fr/company/groupe-nox' target='_blank'> <img src=\"{{ asset('bundles/noxintranetcommunication/images/Viadeo.jpg') }}\" alt=\"Facebook\" class=\"imgReseauxSociaux\"> <h5> Viadeo </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='https://www.youtube.com/user/bammezn/videos' target='_blank'> <img src=\"{{ asset('bundles/noxintranetcommunication/images/YouTube.png') }}\" alt=\"Facebook\" class=\"imgReseauxSociaux\"> <h5> Youtube </h5> </a>
            </div>

        </div>

        <div class=\"sousMessageAcceuil\" id='menuBanqueImages' onclick=\"showSubMenu('#sousMenuBanqueImages', this);\"> 
            <h4> Banques d'images <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'> </h4>
        </div>

        <div id=\"sousMenuBanqueImages\" class='sousMenu'>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='{{ path('nox_intranet_affichageImages', { 'chemin': 'Externe/BanqueImages/logoNox', 'dossier': 'Logo Nox', 'config': 'logoNox' }) }}'> <h5> Logo Nox </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='{{ path('nox_intranet_affichageImages', { 'chemin': 'Externe/BanqueImages/cellesDuSiteInternet', 'dossier': 'Celles du site internet', 'config': 'cellesDuSiteInternet' }) }}'> <h5> Celles du site internet </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='{{ path('nox_intranet_affichageImages', { 'chemin': 'Externe/BanqueImages/cellesDesSupports', 'dossier': 'Celles des supports', 'config': 'cellesDesSupports' }) }}'> <h5> Celles des supports </h5> </a>
            </div>

        </div>
    </div>
    <!-- Fin Externe -->

    <!-- Interne -->
    <div class=\"surMessageAcceuil\" id='menuInterne' onclick=\"showSubMenu2('#sousMenuInterne', this);\"> 
        <h4> Interne <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>
    </div>

    <div id='sousMenuInterne' class='menu'>
        <div class=\"sousMessageAcceuil\"> 
            <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/Trombinoscope', 'dossier': 'Trombinoscope', 'config': 'trombinoscope' }) }}'><h4> Trombinoscope </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\" id='menuOrganigrammes' onclick=\"showSubMenu('#sousMenuOrganigrammes', this);\"> 
            <h4> Organigrammes <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'> </h4>
        </div>

        <div id=\"sousMenuOrganigrammes\" class='sousMenu'>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/Organigrammes/OrganigrammeStrategique', 'dossier': 'Organigramme stratégique', 'config': 'organigrammeStrategique' }) }}'> <h5> Organigramme stratégique </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/Organigrammes/OrganigrammeFonctionnel', 'dossier': 'Organigramme fonctionnel', 'config': 'organigrammeFonctionnel' }) }}'> <h5> Organigramme fonctionnel </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/Organigrammes/OrganigrammeAgence', 'dossier': 'Organigramme agence', 'config': 'organigrammeAgence' }) }}'> <h5> Organigramme agence </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/Organigrammes/OrganigrammesSocietes', 'dossier': 'Organigrammes sociétés', 'config': 'organigrammesSocietes' }) }}'> <h5> Organigrammes sociétés </h5> </a>
            </div>

        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/AnnuaireAgences', 'dossier': 'Annuaire Agences', 'config': 'annuaireAgences' }) }}'> <h4> Annuaire Agences </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/NoxNews', 'dossier': 'NOX News', 'config': 'noxNews' }) }}'> <h4> NoxNews </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/LeMoniteur', 'dossier': 'Le moniteur', 'config': 'leMoniteur' }) }}'> <h4> Le moniteur </h4> </a>
        </div>

        <!--
        <div class=\"sousMessageAcceuil\">
            <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/CE', 'dossier': 'CE', 'config': 'CE' }) }}'> <h4> CE </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/CHSCT', 'dossier': 'CHSCT', 'config': 'CHSCT' }) }}'> <h4> CHSCT </h4> </a>
        </div>
        -->

        <div class=\"sousMessageAcceuil\"> 
            <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/MailingInterne', 'dossier': 'Mailing Interne', 'config': 'mailingInterne' }) }}'><h4> Mailing Interne </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\" id='menuVieDeLentreprise' onclick=\"showSubMenu('#sousMenuVieDeLentreprise', this);\"> 
            <h4> Vie de l'entreprise <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'> </h4>
        </div>

        <div id=\"sousMenuVieDeLentreprise\" class='sousMenu'>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/VieDeLentreprise/NotePersonnel', 'dossier': 'Note au personnel', 'config': 'notePersonnel' }) }}'> <h5> Notes au personnel </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/VieDeLentreprise/PosteAPourvoir', 'dossier': 'Poste à pourvoir', 'config': 'posteAPourvoir' }) }}'> <h5> Postes à pourvoir </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Interne/VieDeLentreprise/NominationOrganisation', 'dossier': 'Nomination &#47; Organisation', 'config': 'nominationOrganisation' }) }}'> <h5> Nominations / organisation </h5> </a>
            </div>

        </div>

    </div>
    <!-- Fin Interne -->

    <!-- Marketing -->
    <div class=\"surMessageAcceuil\" id='menuMarketing' onclick=\"showSubMenu2('#sousMenuMarketing', this);\"> 
        <h4> Marketing <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>
    </div>

    <div id='sousMenuMarketing' class='menu'>

        <div class=\"sousMessageAcceuil\"> 
            <a href='{{ path('nox_intranet_affichageImages', { 'chemin': 'Marketing/NoxALaConquete', 'dossier': 'NOX à la conquête', 'config': 'noxALaConquete' }) }}'> <h4> NOX à la conquête </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='{{ path('nox_intranet_affichageImages', { 'chemin': 'Marketing/ilYAForcementPlusSimple', 'dossier': 'Il y a forcément plus simple', 'config': 'ilYAForcementPlusSimple' }) }}'> <h4> Il y a forcément plus simple </h4> </a>
        </div>


        <div class=\"sousMessageAcceuil\"> 
            <a href='{{ path('nox_intranet_affichageImages', { 'chemin': 'Marketing/noxFournisseurDeTalents', 'dossier': 'NOX fournisseur de talents', 'config': 'noxFournisseurDeTalents' }) }}'> <h4> NOX fournisseur de talents </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='{{ path('nox_intranet_affichageImages', { 'chemin': 'Marketing/nos5Valeurs', 'dossier': 'Nos 5 valeurs', 'config': 'nos5Valeurs' }) }}'> <h4> Nos 5 valeurs </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='{{ path('nox_intranet_affichageImages', { 'chemin': 'Marketing/BuildYourFuture', 'dossier': 'Build your future', 'config': 'buildYourFuture' }) }}'> <h4> Build your future </h4> </a>
        </div>

    </div>
    <!-- Fin Marketing -->

    <!-- SI -->
    <div class=\"surMessageAcceuil\" id='menuSI' onclick=\"showSubMenu2('#sousMenuSI', this);\"> 
        <h4> SI <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>
    </div>

    <div id='sousMenuSI' class='menu'>
        <div class=\"sousMessageAcceuil\"> 
            <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'SI/NewsSI', 'dossier': 'News SI', 'config': 'newsSI' }) }}'> <h4> News SI </h4> </a>
        </div>
        <div class=\"sousMessageAcceuil\">  
            <a href='{{ path('nox_intranet_communication_bim') }}'> <h4> BIM </h4> </a>
        </div>
    </div>
    <!-- Fin SI -->

    <!-- BIM -->
    <div class=\"surMessageAcceuil\" id='menuBIM' onclick=\"showSubMenu2('#sousMenuBIM', this);\"> 
        <h4> BIM <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>
    </div>

    <div id='sousMenuBIM' class='menu'>
        <div class=\"sousMessageAcceuil\"> 
            <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'BIM/Communication', 'dossier': 'Communication', 'config': 'bimCommunication', 'uploadAcess': 'f.delapparent,s.blanchard,l.morisseau'|encryptString }) }}'> <h4> Communication </h4> </a>
        </div>
        <div class=\"sousMessageAcceuil\">  
            <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'BIM/Formation', 'dossier': 'Formation', 'config': 'bimFormation', 'uploadAcess': 'f.delapparent,s.blanchard,l.morisseau'|encryptString }) }}'> <h4> Formation </h4> </a>
        </div>
        <div class=\"sousMessageAcceuil\">  
            <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'BIM/Notices', 'dossier': 'Notices', 'config': 'bimNotices', 'uploadAcess': 'f.delapparent,s.blanchard,l.morisseau'|encryptString }) }}'> <h4> Notices </h4> </a>
        </div>
        <div class=\"sousMessageAcceuil\">  
            <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'BIM/Protocole', 'dossier': 'Protocole', 'config': 'bimProtocole', 'uploadAcess': 'f.delapparent,s.blanchard,l.morisseau'|encryptString }) }}'> <h4> Protocole </h4> </a>
        </div>
    </div>

    <!-- Fin BIM -->

</div>

{% endblock %}
", "NoxIntranetCommunicationBundle:Accueil:accueilCommunication.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\CommunicationBundle/Resources/views/Accueil/accueilCommunication.html.twig");
    }
}
