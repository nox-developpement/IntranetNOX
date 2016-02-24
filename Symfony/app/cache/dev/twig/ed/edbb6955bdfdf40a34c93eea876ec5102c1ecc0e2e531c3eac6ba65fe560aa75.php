<?php

/* @NoxIntranetCommunication/Interne/communicationInterne.html.twig */
class __TwigTemplate_594e3764d8ad4b92d89afb588f5a5576e92a82530b683899c517623c30709df6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetCommunication/Interne/communicationInterne.html.twig", 1);
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
        $__internal_fe6009076fa9e41feb3bd1299fb57f4ad6f2e0b72133a758ce46c44569019913 = $this->env->getExtension("native_profiler");
        $__internal_fe6009076fa9e41feb3bd1299fb57f4ad6f2e0b72133a758ce46c44569019913->enter($__internal_fe6009076fa9e41feb3bd1299fb57f4ad6f2e0b72133a758ce46c44569019913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetCommunication/Interne/communicationInterne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe6009076fa9e41feb3bd1299fb57f4ad6f2e0b72133a758ce46c44569019913->leave($__internal_fe6009076fa9e41feb3bd1299fb57f4ad6f2e0b72133a758ce46c44569019913_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_47c1914dbed30d245515098499b75a42000fad932da9915619e6ec674aade0df = $this->env->getExtension("native_profiler");
        $__internal_47c1914dbed30d245515098499b75a42000fad932da9915619e6ec674aade0df->enter($__internal_47c1914dbed30d245515098499b75a42000fad932da9915619e6ec674aade0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Communication interne
";
        
        $__internal_47c1914dbed30d245515098499b75a42000fad932da9915619e6ec674aade0df->leave($__internal_47c1914dbed30d245515098499b75a42000fad932da9915619e6ec674aade0df_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_71bbb7c604af2451ec50b8a6f79d20d2b48dda5ceba2a17308dba93730a096ea = $this->env->getExtension("native_profiler");
        $__internal_71bbb7c604af2451ec50b8a6f79d20d2b48dda5ceba2a17308dba93730a096ea->enter($__internal_71bbb7c604af2451ec50b8a6f79d20d2b48dda5ceba2a17308dba93730a096ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Communication interne";
        
        $__internal_71bbb7c604af2451ec50b8a6f79d20d2b48dda5ceba2a17308dba93730a096ea->leave($__internal_71bbb7c604af2451ec50b8a6f79d20d2b48dda5ceba2a17308dba93730a096ea_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_5ea9b4fb9136bb27376af63956d791a19730698495563bcd57b53a84d7b6b6c7 = $this->env->getExtension("native_profiler");
        $__internal_5ea9b4fb9136bb27376af63956d791a19730698495563bcd57b53a84d7b6b6c7->enter($__internal_5ea9b4fb9136bb27376af63956d791a19730698495563bcd57b53a84d7b6b6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/trombinoscopeLecture', 'Trombinoscope');\"> Trombinoscope </h4>
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
        <h4> NoxNews </h4>
    </div>

    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/CELecture', 'CE');\"> CE </h4>
    </div>

    <div class=\"sousMessageAcceuil\"> 
        <h4 onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/CHSCTLecture', 'CHSCT');\"> CHSCT </h4>
    </div>

";
        
        $__internal_5ea9b4fb9136bb27376af63956d791a19730698495563bcd57b53a84d7b6b6c7->leave($__internal_5ea9b4fb9136bb27376af63956d791a19730698495563bcd57b53a84d7b6b6c7_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetCommunication/Interne/communicationInterne.html.twig";
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
/*     Communication interne*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Communication interne{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div class="sousMessageAcceuil"> */
/*         <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/trombinoscopeLecture', 'Trombinoscope');"> Trombinoscope </h4>*/
/*     </div>*/
/* */
/*     <div class="sousMessageAcceuil" id='menuOrganigrammes' onclick="showSubMenu('#sousMenuOrganigrammes',this);"> */
/*         <h4> Organigrammes <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'> </h4>*/
/*     </div>*/
/* */
/*     <div id="sousMenuOrganigrammes" class='sousMenu'>*/
/* */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/organigrammeStrategiqueLecture', 'Ogranigramme stratégique');"> Organigramme Stratégique </h5>*/
/*         </div>*/
/* */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/organigrammeFonctionnelLecture', 'Organigramme fonctionnel');"> Organigramme Fonctionnel </h5>*/
/*         </div>*/
/*         */
/*         <div class="sousSousMessageAcceuil"> */
/*             <h5 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/organigrammeAgenceLecture', 'Organigramme agence');"> Organigramme Agence </h5>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <div class="sousMessageAcceuil"> */
/*         <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/annuaireAgencesLecture', 'Annuaire agences');"> Annuaire Agences </h4>*/
/*     </div>*/
/* */
/*     <div class="sousMessageAcceuil"> */
/*         <h4> NoxNews </h4>*/
/*     </div>*/
/* */
/*     <div class="sousMessageAcceuil"> */
/*         <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/CELecture', 'CE');"> CE </h4>*/
/*     </div>*/
/* */
/*     <div class="sousMessageAcceuil"> */
/*         <h4 onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/CHSCTLecture', 'CHSCT');"> CHSCT </h4>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
