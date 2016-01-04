<?php

/* NoxIntranetAdministrationBundle:AdministrationCommunication:communicationExterne.html.twig */
class __TwigTemplate_a14ce14fb7a546ae15f22a8acafde443bdeeb9272b4e0a2c0b726b3de277fa8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:AdministrationCommunication:communicationExterne.html.twig", 1);
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
        $__internal_e1c2855920d9a16dad296bbe57724befb1d6c47de8fee094ec305a72e26b4f2c = $this->env->getExtension("native_profiler");
        $__internal_e1c2855920d9a16dad296bbe57724befb1d6c47de8fee094ec305a72e26b4f2c->enter($__internal_e1c2855920d9a16dad296bbe57724befb1d6c47de8fee094ec305a72e26b4f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationCommunication:communicationExterne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1c2855920d9a16dad296bbe57724befb1d6c47de8fee094ec305a72e26b4f2c->leave($__internal_e1c2855920d9a16dad296bbe57724befb1d6c47de8fee094ec305a72e26b4f2c_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_8c12e106f22e62d0b79cf956d6702e6cc2c85974e3958cae61f0f3591d959726 = $this->env->getExtension("native_profiler");
        $__internal_8c12e106f22e62d0b79cf956d6702e6cc2c85974e3958cae61f0f3591d959726->enter($__internal_8c12e106f22e62d0b79cf956d6702e6cc2c85974e3958cae61f0f3591d959726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration communication externe
";
        
        $__internal_8c12e106f22e62d0b79cf956d6702e6cc2c85974e3958cae61f0f3591d959726->leave($__internal_8c12e106f22e62d0b79cf956d6702e6cc2c85974e3958cae61f0f3591d959726_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_fb21f48c26c3206e7939f3364ca527b21a46f64bdf69126517c103666ada9401 = $this->env->getExtension("native_profiler");
        $__internal_fb21f48c26c3206e7939f3364ca527b21a46f64bdf69126517c103666ada9401->enter($__internal_fb21f48c26c3206e7939f3364ca527b21a46f64bdf69126517c103666ada9401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration communication externe";
        
        $__internal_fb21f48c26c3206e7939f3364ca527b21a46f64bdf69126517c103666ada9401->leave($__internal_fb21f48c26c3206e7939f3364ca527b21a46f64bdf69126517c103666ada9401_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_604ed0efd02dc0dfae77506d480d0a0e3d257832dcc13d49cc0f311f72b0d602 = $this->env->getExtension("native_profiler");
        $__internal_604ed0efd02dc0dfae77506d480d0a0e3d257832dcc13d49cc0f311f72b0d602->enter($__internal_604ed0efd02dc0dfae77506d480d0a0e3d257832dcc13d49cc0f311f72b0d602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    <div class=\"sousMessageAcceuil\" id='menuSupport' onclick=\"showSubMenu('#sousMenuSupport',this);\"> 
        <h4> Supports <img src='";
        // line 12
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

    <div class=\"sousMessageAcceuil\" id='menuVideoInstitutionnelle' onclick=\"showSubMenu('#sousMenuVideoInstitutionnelle',this);\"> 
        <h4> Vidéo institutionnelle <img src='";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>
    
    <div id=\"sousMenuVideoInstitutionnelle\" class='sousMenu'>

        <div class=\"sousSousMessageAcceuil\"> 
            <h5> Vidéo Institutionnelle </h5>
        </div>

        <div class=\"sousSousMessageAcceuil\"> 
            <h5> Survol drone polygone Riviera </h5>
        </div>

    </div>

    <div class=\"sousMessageAcceuil\"> 
        <h4> NoxLetters </h4>
    </div>

    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxDansLaPresse', 'Nox dans la presse');\"> Nox dans la presse </h4>
    </div>

    <div class=\"sousMessageAcceuil\" id='menuReseauxSociaux' onclick=\"showSubMenu('#sousMenuReseauxSociaux',this);\"> 
        <h4> Nox sur les réseaux sociaux <img src='";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'> </h4>
    </div>
    
    <div id=\"sousMenuReseauxSociaux\" class='sousMenu'>

        <div class=\"sousSousMessageAcceuil\"> 
            <h5> Facebook </h5>
        </div>

        <div class=\"sousSousMessageAcceuil\"> 
            <h5> LinkedIn </h5>
        </div>
        
        <div class=\"sousSousMessageAcceuil\"> 
            <h5> Viadeo </h5>
        </div>
        
        <div class=\"sousSousMessageAcceuil\"> 
            <h5> Youtube </h5>
        </div>

    </div>

    <div class=\"sousMessageAcceuil\" id='menuBanqueImages' onclick=\"showSubMenu('#sousMenuBanqueImages',this);\"> 
        <h4> Banques d'images <img src='";
        // line 95
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

";
        
        $__internal_604ed0efd02dc0dfae77506d480d0a0e3d257832dcc13d49cc0f311f72b0d602->leave($__internal_604ed0efd02dc0dfae77506d480d0a0e3d257832dcc13d49cc0f311f72b0d602_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:AdministrationCommunication:communicationExterne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 95,  141 => 71,  112 => 47,  72 => 12,  68 => 10,  62 => 9,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Administration communication externe*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Administration communication externe{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div class="sousMessageAcceuil" id='menuSupport' onclick="showSubMenu('#sousMenuSupport',this);"> */
/*         <h4> Supports <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>*/
/*     </div>*/
/* */
/*     <div id="sousMenuSupport" class='sousMenu'>*/
/* */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/plaquettesInstitutionnelle', 'Plaquette Institutionnelle');"> Plaquettes institutionnelle </h5>*/
/*         </div>*/
/* */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/presentationPowerpoint', 'Présentation Powerpoint');"> Présentation Powerpoint </h5>*/
/*         </div>*/
/* */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5  onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/fichesMetier', 'Fiches Métier');" > Fiches Métier </h5>*/
/*         </div>*/
/* */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5  onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/dossierTypeAppelOffre', 'Dossier type appel d\'offre');"> Dossier type appel d'offre </h5>*/
/*         </div>*/
/* */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/CVType', 'CV Type');"> CV Type </h5>*/
/*         </div>*/
/* */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/courriersType', 'Courriers Type');"> Courriers Type </h5>*/
/*         </div>*/
/* */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/papierEntete', 'Papier à entête');"> Papier à entête </h5>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="sousMessageAcceuil" id='menuVideoInstitutionnelle' onclick="showSubMenu('#sousMenuVideoInstitutionnelle',this);"> */
/*         <h4> Vidéo institutionnelle <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>*/
/*     </div>*/
/*     */
/*     <div id="sousMenuVideoInstitutionnelle" class='sousMenu'>*/
/* */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5> Vidéo Institutionnelle </h5>*/
/*         </div>*/
/* */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5> Survol drone polygone Riviera </h5>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <div class="sousMessageAcceuil"> */
/*         <h4> NoxLetters </h4>*/
/*     </div>*/
/* */
/*     <div class="sousMessageAcceuil"> */
/*         <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxDansLaPresse', 'Nox dans la presse');"> Nox dans la presse </h4>*/
/*     </div>*/
/* */
/*     <div class="sousMessageAcceuil" id='menuReseauxSociaux' onclick="showSubMenu('#sousMenuReseauxSociaux',this);"> */
/*         <h4> Nox sur les réseaux sociaux <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'> </h4>*/
/*     </div>*/
/*     */
/*     <div id="sousMenuReseauxSociaux" class='sousMenu'>*/
/* */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5> Facebook </h5>*/
/*         </div>*/
/* */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5> LinkedIn </h5>*/
/*         </div>*/
/*         */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5> Viadeo </h5>*/
/*         </div>*/
/*         */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5> Youtube </h5>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <div class="sousMessageAcceuil" id='menuBanqueImages' onclick="showSubMenu('#sousMenuBanqueImages',this);"> */
/*         <h4> Banques d'images <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'> </h4>*/
/*     </div>*/
/*     */
/*     <div id="sousMenuBanqueImages" class='sousMenu'>*/
/* */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/logoNox', 'Logo Nox');"> Logo Nox </h5>*/
/*         </div>*/
/* */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/cellesDuSiteInternet', 'Celles du site internet');"> Celles du site internet </h5>*/
/*         </div>*/
/*         */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/cellesDesSupports', 'Celles des supports');"> Celles des supports </h5>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
