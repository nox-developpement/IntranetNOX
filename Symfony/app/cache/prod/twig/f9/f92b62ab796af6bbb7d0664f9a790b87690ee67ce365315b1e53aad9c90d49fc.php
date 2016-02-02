<?php

/* NoxIntranetRessourcesBundle:AQ:AQ.html.twig */
class __TwigTemplate_1df0b91f62f83e00c44be26ae197a0e68fecde103a301417a0fbb719dc8bdddc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:AQ:AQ.html.twig", 1);
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
        echo " Assurance qualité ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Assurance qualité";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <!-- Externe -->
    <div class=\"surMessageAcceuil\" id='menuCertificatsISO' onclick=\"showSubMenu2('#sousMenuCertificatsISO', this);\"> 
        <h4> Certificats ISO et OPQIBI <img src='";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>


    <div id='sousMenuCertificatsISO' class='menu'>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "../AQ/CERTIFICATSISOETOPQIBI/ISO9001", "dossier" => "ISO 9001", "config" => "ISO9001")), "html", null, true);
        echo "'> <h4> ISO 9001 </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Externe/NoxDansLaPresse", "dossier" => "ISO 14001 & 18001", "config" => "noxDansLaPresse")), "html", null, true);
        echo "'> <h4> ISO 14001 & 18001 </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Externe/NoxDansLaPresse", "dossier" => "OPQIBI", "config" => "noxDansLaPresse")), "html", null, true);
        echo "'> <h4> OPQIBI </h4> </a>
        </div>

    </div>

    <div class=\"surMessageAcceuil\" id='menuDocumentQSE' onclick=\"showSubMenu2('#sousMenuDocumentQSE', this);\"> 
        <h4> Documents QSE <img src='";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div>

    <div id='sousMenuDocumentQSE' class='menu'>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Externe/NoxDansLaPresse", "dossier" => "NOX dans la presse", "config" => "noxDansLaPresse")), "html", null, true);
        echo "'> <h4> Manuel Qualité </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Externe/NoxDansLaPresse", "dossier" => "NOX dans la presse", "config" => "noxDansLaPresse")), "html", null, true);
        echo "'> <h4> Procédures </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Externe/NoxDansLaPresse", "dossier" => "NOX dans la presse", "config" => "noxDansLaPresse")), "html", null, true);
        echo "'> <h4> Mode opératoires </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Externe/NoxDansLaPresse", "dossier" => "NOX dans la presse", "config" => "noxDansLaPresse")), "html", null, true);
        echo "'> <h4> Formulaires et documents types </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Externe/NoxDansLaPresse", "dossier" => "NOX dans la presse", "config" => "noxDansLaPresse")), "html", null, true);
        echo "'> <h4> Indicateurs </h4> </a>
        </div>

    </div>

    <div class=\"surMessageAcceuil\" id='menuInfoQSE' onclick=\"showSubMenu2('#sousMenuInfoQSE', this);\"> 
        <h4> Infos QSE <img src='";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='menuImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='menuImgDown'></h4>
    </div> 

    <div id='sousMenuInfoQSE' class='menu'>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Externe/NoxDansLaPresse", "dossier" => "NOX dans la presse", "config" => "noxDansLaPresse")), "html", null, true);
        echo "'> <h4> Equipe QSE </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Externe/NoxDansLaPresse", "dossier" => "NOX dans la presse", "config" => "noxDansLaPresse")), "html", null, true);
        echo "'> <h4> Citations </h4> </a>
        </div>

        <div class=\"sousMessageAcceuil\"> 
            <a href='";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("chemin" => "Externe/NoxDansLaPresse", "dossier" => "NOX dans la presse", "config" => "noxDansLaPresse")), "html", null, true);
        echo "'> <h4> Evénements </h4> </a>
        </div>

    </div>

    <!-- Fin Externe -->

</div>

";
    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:AQ:AQ.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 74,  151 => 70,  144 => 66,  133 => 60,  124 => 54,  117 => 50,  110 => 46,  103 => 42,  96 => 38,  85 => 32,  76 => 26,  69 => 22,  62 => 18,  50 => 11,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Assurance qualité {% endblock %}*/
/* */
/* {% block messageAccueil %}Assurance qualité{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <!-- Externe -->*/
/*     <div class="surMessageAcceuil" id='menuCertificatsISO' onclick="showSubMenu2('#sousMenuCertificatsISO', this);"> */
/*         <h4> Certificats ISO et OPQIBI <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>*/
/*     </div>*/
/* */
/* */
/*     <div id='sousMenuCertificatsISO' class='menu'>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': '../AQ/CERTIFICATSISOETOPQIBI/ISO9001', 'dossier': 'ISO 9001', 'config': 'ISO9001' }) }}'> <h4> ISO 9001 </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Externe/NoxDansLaPresse', 'dossier': 'ISO 14001 & 18001', 'config': 'noxDansLaPresse' }) }}'> <h4> ISO 14001 & 18001 </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Externe/NoxDansLaPresse', 'dossier': 'OPQIBI', 'config': 'noxDansLaPresse' }) }}'> <h4> OPQIBI </h4> </a>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <div class="surMessageAcceuil" id='menuDocumentQSE' onclick="showSubMenu2('#sousMenuDocumentQSE', this);"> */
/*         <h4> Documents QSE <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>*/
/*     </div>*/
/* */
/*     <div id='sousMenuDocumentQSE' class='menu'>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Externe/NoxDansLaPresse', 'dossier': 'NOX dans la presse', 'config': 'noxDansLaPresse' }) }}'> <h4> Manuel Qualité </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Externe/NoxDansLaPresse', 'dossier': 'NOX dans la presse', 'config': 'noxDansLaPresse' }) }}'> <h4> Procédures </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Externe/NoxDansLaPresse', 'dossier': 'NOX dans la presse', 'config': 'noxDansLaPresse' }) }}'> <h4> Mode opératoires </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Externe/NoxDansLaPresse', 'dossier': 'NOX dans la presse', 'config': 'noxDansLaPresse' }) }}'> <h4> Formulaires et documents types </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Externe/NoxDansLaPresse', 'dossier': 'NOX dans la presse', 'config': 'noxDansLaPresse' }) }}'> <h4> Indicateurs </h4> </a>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <div class="surMessageAcceuil" id='menuInfoQSE' onclick="showSubMenu2('#sousMenuInfoQSE', this);"> */
/*         <h4> Infos QSE <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='menuImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='menuImgDown'></h4>*/
/*     </div> */
/* */
/*     <div id='sousMenuInfoQSE' class='menu'>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Externe/NoxDansLaPresse', 'dossier': 'NOX dans la presse', 'config': 'noxDansLaPresse' }) }}'> <h4> Equipe QSE </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Externe/NoxDansLaPresse', 'dossier': 'NOX dans la presse', 'config': 'noxDansLaPresse' }) }}'> <h4> Citations </h4> </a>*/
/*         </div>*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <a href='{{ path('nox_intranet_affichageContenu', { 'chemin': 'Externe/NoxDansLaPresse', 'dossier': 'NOX dans la presse', 'config': 'noxDansLaPresse' }) }}'> <h4> Evénements </h4> </a>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <!-- Fin Externe -->*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
