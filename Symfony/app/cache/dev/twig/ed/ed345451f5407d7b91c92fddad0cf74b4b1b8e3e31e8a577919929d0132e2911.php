<?php

/* NoxIntranetRessourcesBundle:Accueil:accueilRessources.html.twig */
class __TwigTemplate_3d0fffd8360f32530bfb0f28280a42d2b3cde14b6bfa97e374e9f4dd907393f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:Accueil:accueilRessources.html.twig", 1);
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
        $__internal_505d9dae3fc78d0f2a9e0902201243423b4f8f6c7bf067e746c043cd84b83355 = $this->env->getExtension("native_profiler");
        $__internal_505d9dae3fc78d0f2a9e0902201243423b4f8f6c7bf067e746c043cd84b83355->enter($__internal_505d9dae3fc78d0f2a9e0902201243423b4f8f6c7bf067e746c043cd84b83355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:Accueil:accueilRessources.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_505d9dae3fc78d0f2a9e0902201243423b4f8f6c7bf067e746c043cd84b83355->leave($__internal_505d9dae3fc78d0f2a9e0902201243423b4f8f6c7bf067e746c043cd84b83355_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_c48eb6c8093c785e9d843b305dfb22afe274f0b10cbb047e15431b5b99f3a91a = $this->env->getExtension("native_profiler");
        $__internal_c48eb6c8093c785e9d843b305dfb22afe274f0b10cbb047e15431b5b99f3a91a->enter($__internal_c48eb6c8093c785e9d843b305dfb22afe274f0b10cbb047e15431b5b99f3a91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Ressources ";
        
        $__internal_c48eb6c8093c785e9d843b305dfb22afe274f0b10cbb047e15431b5b99f3a91a->leave($__internal_c48eb6c8093c785e9d843b305dfb22afe274f0b10cbb047e15431b5b99f3a91a_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_d2dde0a6455525a8ebd3e150695412c2fd37c5582b2e132bf52fd79a30ba4d98 = $this->env->getExtension("native_profiler");
        $__internal_d2dde0a6455525a8ebd3e150695412c2fd37c5582b2e132bf52fd79a30ba4d98->enter($__internal_d2dde0a6455525a8ebd3e150695412c2fd37c5582b2e132bf52fd79a30ba4d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Ressources";
        
        $__internal_d2dde0a6455525a8ebd3e150695412c2fd37c5582b2e132bf52fd79a30ba4d98->leave($__internal_d2dde0a6455525a8ebd3e150695412c2fd37c5582b2e132bf52fd79a30ba4d98_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_2353be0a75eb47fa6a793a835df07222dcdcd5ee9bc942cd8a6b1e879518ef56 = $this->env->getExtension("native_profiler");
        $__internal_2353be0a75eb47fa6a793a835df07222dcdcd5ee9bc942cd8a6b1e879518ef56->enter($__internal_2353be0a75eb47fa6a793a835df07222dcdcd5ee9bc942cd8a6b1e879518ef56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        echo " 
    <div class=\"iconContener\">

        <!-- Archives -->
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("nox_intranet_archives");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Archive-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Archive-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Archive-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Archives</figcaption>
            </figure>
        </a>

<<<<<<< HEAD
        <!-- Assistant d'affaire -->
        <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("nox_intranet_assistant_affaire");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Business-Man-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Business-Man-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Business-Man-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Assistant d'affaire</figcaption>
            </figure>
        </a>
=======
        ";
        // line 35
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"))) {
            // line 36
            echo "            <!-- Assistant d'affaire -->
            <a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("nox_intranet_assistant_affaire");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Business-Man-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Business-Man-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Business-Man-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Assistant d'affaire</figcaption>
                </figure>
            </a>
        ";
        }
        // line 48
        echo ">>>>>>> prod

        <!-- Assurance qualité -->
        <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("nox_intranet_aq");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Hand-Sign-06-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Hand-Sign-06-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Hand-Sign-06-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Assurance qualité</figcaption>
            </figure>
        </a>

        <!-- Compétences (en attente)
        <a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("nox_intranet_competences");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Competences-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Competences-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Competences-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Compétences</figcaption>
            </figure>
        </a>
        <!---------------------------->

        <!-- FAQ -->
        <a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("nox_intranet_faq");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Help-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Help-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Help-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>FAQ</figcaption>
            </figure>
        </a> 

        <!-- Imprimantes (A tester !)
        <a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("nox_intranet_imprimantes");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Printer-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Printer-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Printer-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Imprimantes</figcaption>
            </figure>
        </a>
        -->

        <!-- Liens -->
        <a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("nox_intranet_liens");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Link-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Link-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Link-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Liens</figcaption>
            </figure>
        </a>

        <br />       

        <!-- Partage de documents -->
        <a href=\"http://partage.groupe-nox.com/\" class=\"icon\" target=\"_blank\">
            <figure>
                <img 
                    src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Link-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Link-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Link-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Partage de documents</figcaption>
            </figure>
        </a>

        <!-- Procédures (A ajouter)
        <a href=\"";
        // line 127
        echo $this->env->getExtension('routing')->getPath("nox_intranet_procedures");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Procedures-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Procedures-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Procedures-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Procédures</figcaption>
            </figure>
        </a>
        -->

        <!-- Références -->
        <a href=\"";
        // line 140
        echo $this->env->getExtension('routing')->getPath("nox_intranet_references");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Sort-Ascending-01-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Sort-Ascending-01-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Sort-Ascending-01-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Références</figcaption>
            </figure>
        </a>

        <!-- RH -->
        <a href=\"";
        // line 152
        echo $this->env->getExtension('routing')->getPath("nox_intranet_rh");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/User-Group-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/User-Group-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/User-Group-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>RH</figcaption>
            </figure>
        </a>

        <!-- Serveurs -->            
        <a href=\"";
        // line 164
        echo $this->env->getExtension('routing')->getPath("nox_intranet_serveurs");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Server-02-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Server-02-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Server-02-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Serveurs</figcaption>
            </figure>
        </a>

<<<<<<< HEAD
        <!-- Visioconférence -->            
        <a href=\"https://myeasy.vision/guest\" target=\"_blank\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Conference-Call-01-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Conference-Call-01-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Conference-Call-01-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Visioconférence</figcaption>
            </figure>
        </a>
=======
        ";
        // line 188
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"))) {
            // line 189
            echo "            <!-- Visioconférence -->            
            <a href=\"https://myeasy.vision/guest\" target=\"_blank\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Conference-Call-01-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 194
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Conference-Call-01-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 195
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Conference-Call-01-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Visioconférence</figcaption>
                </figure>
            </a>
        ";
        }
        // line 201
        echo ">>>>>>> prod

    </div>

";
        
        $__internal_2353be0a75eb47fa6a793a835df07222dcdcd5ee9bc942cd8a6b1e879518ef56->leave($__internal_2353be0a75eb47fa6a793a835df07222dcdcd5ee9bc942cd8a6b1e879518ef56_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:Accueil:accueilRessources.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  440 => 201,  431 => 195,  427 => 194,  423 => 193,  417 => 189,  415 => 188,  406 => 182,  402 => 181,  398 => 180,  384 => 169,  380 => 168,  376 => 167,  370 => 164,  360 => 157,  356 => 156,  352 => 155,  346 => 152,  336 => 145,  332 => 144,  328 => 143,  322 => 140,  311 => 132,  307 => 131,  303 => 130,  297 => 127,  287 => 120,  283 => 119,  279 => 118,  264 => 106,  260 => 105,  256 => 104,  250 => 101,  239 => 93,  235 => 92,  231 => 91,  225 => 88,  215 => 81,  211 => 80,  207 => 79,  201 => 76,  190 => 68,  186 => 67,  182 => 66,  176 => 63,  166 => 56,  162 => 55,  158 => 54,  152 => 51,  147 => 48,  138 => 42,  134 => 41,  130 => 40,  124 => 37,  121 => 36,  119 => 35,  110 => 29,  106 => 28,  102 => 27,  96 => 24,  85 => 16,  81 => 15,  77 => 14,  71 => 11,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Ressources {% endblock %}*/
/* */
/* {% block messageAccueil %}Ressources{% endblock %}*/
/* */
/* {% block contenu %} */
/*     <div class="iconContener">*/
/* */
/*         <!-- Archives -->*/
/*         <a href="{{ path('nox_intranet_archives') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Archive-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Archive-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Archive-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Archives</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/* <<<<<<< HEAD*/
/*         <!-- Assistant d'affaire -->*/
/*         <a href="{{ path('nox_intranet_assistant_affaire') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Business-Man-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Business-Man-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Business-Man-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Assistant d'affaire</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* =======*/
/*         {% if app.user and is_granted('ROLE_SUPER_ADMIN') %}*/
/*             <!-- Assistant d'affaire -->*/
/*             <a href="{{ path('nox_intranet_assistant_affaire') }}" class="icon">*/
/*                 <figure>*/
/*                     <img */
/*                         src="{{ asset('bundles/noxintranetressources/images/Business-Man-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Business-Man-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Business-Man-128.png') }}';"*/
/*                         > */
/*                     <figcaption>Assistant d'affaire</figcaption>*/
/*                 </figure>*/
/*             </a>*/
/*         {% endif %}*/
/* >>>>>>> prod*/
/* */
/*         <!-- Assurance qualité -->*/
/*         <a href="{{ path('nox_intranet_aq') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Hand-Sign-06-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Hand-Sign-06-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Hand-Sign-06-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Assurance qualité</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <!-- Compétences (en attente)*/
/*         <a href="{{ path('nox_intranet_competences') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Competences-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Competences-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Competences-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Compétences</figcaption>*/
/*             </figure>*/
/*         </a>*/
/*         <!---------------------------->*/
/* */
/*         <!-- FAQ -->*/
/*         <a href="{{ path('nox_intranet_faq') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Help-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Help-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Help-128.png') }}';"*/
/*                     > */
/*                 <figcaption>FAQ</figcaption>*/
/*             </figure>*/
/*         </a> */
/* */
/*         <!-- Imprimantes (A tester !)*/
/*         <a href="{{ path('nox_intranet_imprimantes') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Printer-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Printer-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Printer-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Imprimantes</figcaption>*/
/*             </figure>*/
/*         </a>*/
/*         -->*/
/* */
/*         <!-- Liens -->*/
/*         <a href="{{ path('nox_intranet_liens') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Link-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Link-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Link-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Liens</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <br />       */
/* */
/*         <!-- Partage de documents -->*/
/*         <a href="http://partage.groupe-nox.com/" class="icon" target="_blank">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Link-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Link-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Link-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Partage de documents</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <!-- Procédures (A ajouter)*/
/*         <a href="{{ path('nox_intranet_procedures') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Procedures-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Procedures-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Procedures-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Procédures</figcaption>*/
/*             </figure>*/
/*         </a>*/
/*         -->*/
/* */
/*         <!-- Références -->*/
/*         <a href="{{ path('nox_intranet_references') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Sort-Ascending-01-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Sort-Ascending-01-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Sort-Ascending-01-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Références</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <!-- RH -->*/
/*         <a href="{{ path('nox_intranet_rh') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/User-Group-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/User-Group-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/User-Group-128.png') }}';"*/
/*                     > */
/*                 <figcaption>RH</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <!-- Serveurs -->            */
/*         <a href="{{ path('nox_intranet_serveurs') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Server-02-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Server-02-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Server-02-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Serveurs</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/* <<<<<<< HEAD*/
/*         <!-- Visioconférence -->            */
/*         <a href="https://myeasy.vision/guest" target="_blank" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Conference-Call-01-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Conference-Call-01-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Conference-Call-01-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Visioconférence</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* =======*/
/*         {% if app.user and is_granted('ROLE_SUPER_ADMIN') %}*/
/*             <!-- Visioconférence -->            */
/*             <a href="https://myeasy.vision/guest" target="_blank" class="icon">*/
/*                 <figure>*/
/*                     <img */
/*                         src="{{ asset('bundles/noxintranetressources/images/Conference-Call-01-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Conference-Call-01-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Conference-Call-01-128.png') }}';"*/
/*                         > */
/*                     <figcaption>Visioconférence</figcaption>*/
/*                 </figure>*/
/*             </a>*/
/*         {% endif %}*/
/* >>>>>>> prod*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
