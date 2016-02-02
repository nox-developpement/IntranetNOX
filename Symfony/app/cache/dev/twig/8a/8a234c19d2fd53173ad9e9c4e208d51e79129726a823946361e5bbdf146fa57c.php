<?php

/* NoxIntranetCommunicationBundle:Interne:communicationInterne.html.twig */
class __TwigTemplate_97df6b29823f78f62138c305a95c88b4c91cc4757e926c46ba1576d7dc4ceea5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetCommunicationBundle:Interne:communicationInterne.html.twig", 1);
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
        $__internal_ef843196e9a163b5e4733a36a0e96a2ae8628f0f7ea80137dd664f34a9da9d25 = $this->env->getExtension("native_profiler");
        $__internal_ef843196e9a163b5e4733a36a0e96a2ae8628f0f7ea80137dd664f34a9da9d25->enter($__internal_ef843196e9a163b5e4733a36a0e96a2ae8628f0f7ea80137dd664f34a9da9d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetCommunicationBundle:Interne:communicationInterne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef843196e9a163b5e4733a36a0e96a2ae8628f0f7ea80137dd664f34a9da9d25->leave($__internal_ef843196e9a163b5e4733a36a0e96a2ae8628f0f7ea80137dd664f34a9da9d25_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_d7b45bd2e52c88f7719922c9c282432e4f1a7eaf16d12b7578fb0291f41a5f49 = $this->env->getExtension("native_profiler");
        $__internal_d7b45bd2e52c88f7719922c9c282432e4f1a7eaf16d12b7578fb0291f41a5f49->enter($__internal_d7b45bd2e52c88f7719922c9c282432e4f1a7eaf16d12b7578fb0291f41a5f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Communication interne
";
        
        $__internal_d7b45bd2e52c88f7719922c9c282432e4f1a7eaf16d12b7578fb0291f41a5f49->leave($__internal_d7b45bd2e52c88f7719922c9c282432e4f1a7eaf16d12b7578fb0291f41a5f49_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_0f103d465dc4cb5f3bb4537504cb75534300c4df13095a1f3c091643db29c5a4 = $this->env->getExtension("native_profiler");
        $__internal_0f103d465dc4cb5f3bb4537504cb75534300c4df13095a1f3c091643db29c5a4->enter($__internal_0f103d465dc4cb5f3bb4537504cb75534300c4df13095a1f3c091643db29c5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Communication interne";
        
        $__internal_0f103d465dc4cb5f3bb4537504cb75534300c4df13095a1f3c091643db29c5a4->leave($__internal_0f103d465dc4cb5f3bb4537504cb75534300c4df13095a1f3c091643db29c5a4_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_9b9771a5577475adabd605a097de4b975503ba4cd36290b419333b45eedf4586 = $this->env->getExtension("native_profiler");
        $__internal_9b9771a5577475adabd605a097de4b975503ba4cd36290b419333b45eedf4586->enter($__internal_9b9771a5577475adabd605a097de4b975503ba4cd36290b419333b45eedf4586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_9b9771a5577475adabd605a097de4b975503ba4cd36290b419333b45eedf4586->leave($__internal_9b9771a5577475adabd605a097de4b975503ba4cd36290b419333b45eedf4586_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetCommunicationBundle:Interne:communicationInterne.html.twig";
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
