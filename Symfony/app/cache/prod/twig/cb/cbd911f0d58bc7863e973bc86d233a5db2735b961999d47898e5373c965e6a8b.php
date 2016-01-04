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
            <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxDansLaPresseLecture', 'Nox dans la presse');\"> Nox dans la presse </h4>
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
                <a href='https://www.facebook.com/Groupe-Nox-140402782816064/' target='_blank'> <h5> Facebook </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='https://www.linkedin.com/company/groupe-nox' target='_blank'> <h5> LinkedIn </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='http://fr.viadeo.com/fr/company/groupe-nox' target='_blank'> <h5> Viadeo </h5> </a>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <a href='https://www.youtube.com/user/bammezn/videos' target='_blank'> <h5> Youtube </h5> </a>
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
            <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/trombinoscopeLecture', 'Trombinoscope');\"> Trombinoscope </h4>
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
                <h5 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/organigrammeStrategiqueLecture', 'Ogranigramme stratégique');\"> Organigramme Stratégique </h5>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <h5 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/organigrammeFonctionnelLecture', 'Organigramme fonctionnel');\"> Organigramme Fonctionnel </h5>
            </div>

            <div class=\"sousSousMessageAcceuil\"> 
                <h5 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/organigrammeAgenceLecture', 'Organigramme agence');\"> Organigramme Agence </h5>
            </div>

        </div>

        <div class=\"sousMessageAcceuil\"> 
            <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/annuaireAgencesLecture', 'Annuaire agences');\"> Annuaire Agences </h4>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 160
        echo $this->env->getExtension('routing')->getPath("nox_intranet_nox_news");
        echo "'> <h4> NoxNews </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/CELecture', 'CE');\"> CE </h4>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/CHSCTLecture', 'CHSCT');\"> CHSCT </h4>
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
            <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxALaConqueteLecture', 'Nox à la conquête');\"> Nox à la conquête </h4>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/ilYAForcementPlusSimpleLecture', 'Il y a forcément plus simple');\"> Il y a forcément plus simple </h4>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxFournisseurDeTalentsLecture', 'Nox fournisseur de talents');\"> Nox fournisseur de talents </h4>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/nos5ValeursLecture', 'Nos 5 valeurs');\"> Nos 5 valeurs </h4>
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
        return array (  294 => 204,  283 => 198,  255 => 175,  237 => 160,  208 => 136,  194 => 127,  166 => 104,  137 => 80,  126 => 72,  104 => 55,  62 => 18,  50 => 11,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
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
/*             <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxDansLaPresseLecture', 'Nox dans la presse');"> Nox dans la presse </h4>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil" id='menuReseauxSociaux' onclick="showSubMenu('#sousMenuReseauxSociaux', this);"> */
/*             <h4> Nox sur les réseaux sociaux <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'> </h4>*/
/*         </div>*/
/* */
/*         <div id="sousMenuReseauxSociaux" class='sousMenu'>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <a href='https://www.facebook.com/Groupe-Nox-140402782816064/' target='_blank'> <h5> Facebook </h5> </a>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <a href='https://www.linkedin.com/company/groupe-nox' target='_blank'> <h5> LinkedIn </h5> </a>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <a href='http://fr.viadeo.com/fr/company/groupe-nox' target='_blank'> <h5> Viadeo </h5> </a>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <a href='https://www.youtube.com/user/bammezn/videos' target='_blank'> <h5> Youtube </h5> </a>*/
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
/*             <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/trombinoscopeLecture', 'Trombinoscope');"> Trombinoscope </h4>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil" id='menuOrganigrammes' onclick="showSubMenu('#sousMenuOrganigrammes', this);"> */
/*             <h4> Organigrammes <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'> </h4>*/
/*         </div>*/
/* */
/*         <div id="sousMenuOrganigrammes" class='sousMenu'>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/organigrammeStrategiqueLecture', 'Ogranigramme stratégique');"> Organigramme Stratégique </h5>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/organigrammeFonctionnelLecture', 'Organigramme fonctionnel');"> Organigramme Fonctionnel </h5>*/
/*             </div>*/
/* */
/*             <div class="sousSousMessageAcceuil"> */
/*                 <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/organigrammeAgenceLecture', 'Organigramme agence');"> Organigramme Agence </h5>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/annuaireAgencesLecture', 'Annuaire agences');"> Annuaire Agences </h4>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_nox_news') }}'> <h4> NoxNews </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/CELecture', 'CE');"> CE </h4>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/CHSCTLecture', 'CHSCT');"> CHSCT </h4>*/
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
/*             <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxALaConqueteLecture', 'Nox à la conquête');"> Nox à la conquête </h4>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/ilYAForcementPlusSimpleLecture', 'Il y a forcément plus simple');"> Il y a forcément plus simple </h4>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxFournisseurDeTalentsLecture', 'Nox fournisseur de talents');"> Nox fournisseur de talents </h4>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/nos5ValeursLecture', 'Nos 5 valeurs');"> Nos 5 valeurs </h4>*/
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
