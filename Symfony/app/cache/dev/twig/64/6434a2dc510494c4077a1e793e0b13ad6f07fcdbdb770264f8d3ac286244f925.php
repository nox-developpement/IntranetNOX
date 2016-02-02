<?php

/* NoxIntranetAdministrationBundle:AdministrationCommunication:communicationInterne.html.twig */
class __TwigTemplate_bb738386217960c8fe9123523c51f2d2235e07fbf09d6c79416c393888295ca4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:AdministrationCommunication:communicationInterne.html.twig", 1);
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
        $__internal_a5816629958ede84ff7a3b7b296e9ad62f8d718615b6d9dafafa29a282e3d752 = $this->env->getExtension("native_profiler");
        $__internal_a5816629958ede84ff7a3b7b296e9ad62f8d718615b6d9dafafa29a282e3d752->enter($__internal_a5816629958ede84ff7a3b7b296e9ad62f8d718615b6d9dafafa29a282e3d752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationCommunication:communicationInterne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5816629958ede84ff7a3b7b296e9ad62f8d718615b6d9dafafa29a282e3d752->leave($__internal_a5816629958ede84ff7a3b7b296e9ad62f8d718615b6d9dafafa29a282e3d752_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_cde93b05575f7d655bda4e06d8d0f6a1e9f39b7cd6206fcb826d446cec9bf999 = $this->env->getExtension("native_profiler");
        $__internal_cde93b05575f7d655bda4e06d8d0f6a1e9f39b7cd6206fcb826d446cec9bf999->enter($__internal_cde93b05575f7d655bda4e06d8d0f6a1e9f39b7cd6206fcb826d446cec9bf999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration communication interne
";
        
        $__internal_cde93b05575f7d655bda4e06d8d0f6a1e9f39b7cd6206fcb826d446cec9bf999->leave($__internal_cde93b05575f7d655bda4e06d8d0f6a1e9f39b7cd6206fcb826d446cec9bf999_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_08a278c4f18fc9a8a8693399633c150d4c14be3e557df9ed7ffea2003aec26b9 = $this->env->getExtension("native_profiler");
        $__internal_08a278c4f18fc9a8a8693399633c150d4c14be3e557df9ed7ffea2003aec26b9->enter($__internal_08a278c4f18fc9a8a8693399633c150d4c14be3e557df9ed7ffea2003aec26b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration communication interne";
        
        $__internal_08a278c4f18fc9a8a8693399633c150d4c14be3e557df9ed7ffea2003aec26b9->leave($__internal_08a278c4f18fc9a8a8693399633c150d4c14be3e557df9ed7ffea2003aec26b9_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_7d4c9598df229009279263418a109f5a2579b15505b17694fdbf1535b564931b = $this->env->getExtension("native_profiler");
        $__internal_7d4c9598df229009279263418a109f5a2579b15505b17694fdbf1535b564931b->enter($__internal_7d4c9598df229009279263418a109f5a2579b15505b17694fdbf1535b564931b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_7d4c9598df229009279263418a109f5a2579b15505b17694fdbf1535b564931b->leave($__internal_7d4c9598df229009279263418a109f5a2579b15505b17694fdbf1535b564931b_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:AdministrationCommunication:communicationInterne.html.twig";
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
