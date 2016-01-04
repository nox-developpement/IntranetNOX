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
        $__internal_ab65613920dfc74b23ceec20f6af855aae24e3e273b7540e5f9e7310d5375860 = $this->env->getExtension("native_profiler");
        $__internal_ab65613920dfc74b23ceec20f6af855aae24e3e273b7540e5f9e7310d5375860->enter($__internal_ab65613920dfc74b23ceec20f6af855aae24e3e273b7540e5f9e7310d5375860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetCommunicationBundle:Interne:communicationInterne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab65613920dfc74b23ceec20f6af855aae24e3e273b7540e5f9e7310d5375860->leave($__internal_ab65613920dfc74b23ceec20f6af855aae24e3e273b7540e5f9e7310d5375860_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_1ee30f98768a5d7ed9f022d71802a7b24c87ced777c9031314689da5f959dac9 = $this->env->getExtension("native_profiler");
        $__internal_1ee30f98768a5d7ed9f022d71802a7b24c87ced777c9031314689da5f959dac9->enter($__internal_1ee30f98768a5d7ed9f022d71802a7b24c87ced777c9031314689da5f959dac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Communication interne
";
        
        $__internal_1ee30f98768a5d7ed9f022d71802a7b24c87ced777c9031314689da5f959dac9->leave($__internal_1ee30f98768a5d7ed9f022d71802a7b24c87ced777c9031314689da5f959dac9_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_ea53c209222591257fc0a5ba34a5bbcc9121e8ab1a7dda771b312d478fad6dbd = $this->env->getExtension("native_profiler");
        $__internal_ea53c209222591257fc0a5ba34a5bbcc9121e8ab1a7dda771b312d478fad6dbd->enter($__internal_ea53c209222591257fc0a5ba34a5bbcc9121e8ab1a7dda771b312d478fad6dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Communication interne";
        
        $__internal_ea53c209222591257fc0a5ba34a5bbcc9121e8ab1a7dda771b312d478fad6dbd->leave($__internal_ea53c209222591257fc0a5ba34a5bbcc9121e8ab1a7dda771b312d478fad6dbd_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_9c3c9093be572e2da85be1d0cadbf5689620bca0bc450870cf4f257fb133b894 = $this->env->getExtension("native_profiler");
        $__internal_9c3c9093be572e2da85be1d0cadbf5689620bca0bc450870cf4f257fb133b894->enter($__internal_9c3c9093be572e2da85be1d0cadbf5689620bca0bc450870cf4f257fb133b894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_9c3c9093be572e2da85be1d0cadbf5689620bca0bc450870cf4f257fb133b894->leave($__internal_9c3c9093be572e2da85be1d0cadbf5689620bca0bc450870cf4f257fb133b894_prof);

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
