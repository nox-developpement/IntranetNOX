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
        $__internal_b80c88169292d0721756d6ec6721a5d9a26d9fef4ec0ab9d62fb758d873d832e = $this->env->getExtension("native_profiler");
        $__internal_b80c88169292d0721756d6ec6721a5d9a26d9fef4ec0ab9d62fb758d873d832e->enter($__internal_b80c88169292d0721756d6ec6721a5d9a26d9fef4ec0ab9d62fb758d873d832e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationCommunication:communicationInterne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b80c88169292d0721756d6ec6721a5d9a26d9fef4ec0ab9d62fb758d873d832e->leave($__internal_b80c88169292d0721756d6ec6721a5d9a26d9fef4ec0ab9d62fb758d873d832e_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_b312587178e44c1895ff8a7f6ea6e088c9f65eda54df5a97f60fd0c07564d44b = $this->env->getExtension("native_profiler");
        $__internal_b312587178e44c1895ff8a7f6ea6e088c9f65eda54df5a97f60fd0c07564d44b->enter($__internal_b312587178e44c1895ff8a7f6ea6e088c9f65eda54df5a97f60fd0c07564d44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration communication interne
";
        
        $__internal_b312587178e44c1895ff8a7f6ea6e088c9f65eda54df5a97f60fd0c07564d44b->leave($__internal_b312587178e44c1895ff8a7f6ea6e088c9f65eda54df5a97f60fd0c07564d44b_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_d2de208c52f7ffa617c57256e21a0fd0fa1b8870eca7fdef57fd128dfc9a4ac6 = $this->env->getExtension("native_profiler");
        $__internal_d2de208c52f7ffa617c57256e21a0fd0fa1b8870eca7fdef57fd128dfc9a4ac6->enter($__internal_d2de208c52f7ffa617c57256e21a0fd0fa1b8870eca7fdef57fd128dfc9a4ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration communication interne";
        
        $__internal_d2de208c52f7ffa617c57256e21a0fd0fa1b8870eca7fdef57fd128dfc9a4ac6->leave($__internal_d2de208c52f7ffa617c57256e21a0fd0fa1b8870eca7fdef57fd128dfc9a4ac6_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_017e1547b6884c8a45a2e17a3d14933f8eabd827199718f4cd4166b4eb0e1104 = $this->env->getExtension("native_profiler");
        $__internal_017e1547b6884c8a45a2e17a3d14933f8eabd827199718f4cd4166b4eb0e1104->enter($__internal_017e1547b6884c8a45a2e17a3d14933f8eabd827199718f4cd4166b4eb0e1104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_017e1547b6884c8a45a2e17a3d14933f8eabd827199718f4cd4166b4eb0e1104->leave($__internal_017e1547b6884c8a45a2e17a3d14933f8eabd827199718f4cd4166b4eb0e1104_prof);

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
