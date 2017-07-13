<?php

/* NoxIntranetRessourcesBundle:Accueil:accueilRessources.html.twig */
class __TwigTemplate_7036a00f1d997aff1e586b84438f1c10b32bedbfe01da7bd24927083e0cb7262 extends Twig_Template
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
        $__internal_c428a020765ace49d3d4d798778cf22ae80048c749bd6119fdfef76e55da7c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c428a020765ace49d3d4d798778cf22ae80048c749bd6119fdfef76e55da7c21->enter($__internal_c428a020765ace49d3d4d798778cf22ae80048c749bd6119fdfef76e55da7c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:Accueil:accueilRessources.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c428a020765ace49d3d4d798778cf22ae80048c749bd6119fdfef76e55da7c21->leave($__internal_c428a020765ace49d3d4d798778cf22ae80048c749bd6119fdfef76e55da7c21_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_384900ac90b29b24799eb74dbb6bd04700a9f52503d2ad4e3e141c2b296f5525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_384900ac90b29b24799eb74dbb6bd04700a9f52503d2ad4e3e141c2b296f5525->enter($__internal_384900ac90b29b24799eb74dbb6bd04700a9f52503d2ad4e3e141c2b296f5525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Ressources ";
        
        $__internal_384900ac90b29b24799eb74dbb6bd04700a9f52503d2ad4e3e141c2b296f5525->leave($__internal_384900ac90b29b24799eb74dbb6bd04700a9f52503d2ad4e3e141c2b296f5525_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_87732b70fb1ceaa061b7ba50c69bfeca7845c6eaac02bc2baf04c0402dda7043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87732b70fb1ceaa061b7ba50c69bfeca7845c6eaac02bc2baf04c0402dda7043->enter($__internal_87732b70fb1ceaa061b7ba50c69bfeca7845c6eaac02bc2baf04c0402dda7043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Ressources";
        
        $__internal_87732b70fb1ceaa061b7ba50c69bfeca7845c6eaac02bc2baf04c0402dda7043->leave($__internal_87732b70fb1ceaa061b7ba50c69bfeca7845c6eaac02bc2baf04c0402dda7043_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_e1fb6d39898812ad2f605d4abf62fdb262b03484b9fb4dbea5d3e6a2aeebd07a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1fb6d39898812ad2f605d4abf62fdb262b03484b9fb4dbea5d3e6a2aeebd07a->enter($__internal_e1fb6d39898812ad2f605d4abf62fdb262b03484b9fb4dbea5d3e6a2aeebd07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        echo " 
    <div class=\"iconContener\">

        <!-- Archives -->
        <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_archives");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Archive-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Archive-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Archive-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Archives</figcaption>
            </figure>
        </a>

        ";
        // line 22
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"))) {
            // line 23
            echo "            <!-- Assistant d'affaire -->
            <a href=\"";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_assistant_affaire");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Business-Man-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Business-Man-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Business-Man-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Assistant d'affaire</figcaption>
                </figure>
            </a>
        ";
        }
        // line 35
        echo "
        <!-- Assurance qualité -->
        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_aq");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Hand-Sign-06-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Hand-Sign-06-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Hand-Sign-06-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Assurance qualité</figcaption>
            </figure>
        </a>

        <!-- Développement professionnel -->
        <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_developpement_professionnel_formulaire");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Graduate-01-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Graduate-01-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Graduate-01-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Développement professionnel</figcaption>
            </figure>
        </a>         

        <!-- FAQ -->
        <a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_faq");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Help-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Help-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Help-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>FAQ</figcaption>
            </figure>
        </a> 

        <!-- Interface VOIP -->
        <a href=\"https://172.16.35.1:9443/onexportal.html\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Headphone-Mike-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Headphone-Mike-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Headphone-Mike-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Interface VOIP</figcaption>
            </figure>
        </a> 

        <!-- Imprimantes (A tester !)
        <a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_imprimantes");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Printer-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Printer-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Printer-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Imprimantes</figcaption>
            </figure>
        </a>
        -->

        <br />    

        <!-- Liens -->
        <a href=\"";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_liens");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Link-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Link-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Link-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Liens</figcaption>
            </figure>
        </a>

        <!-- NOX Virtual Reality -->
        <a href=\"";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_nox_virtual_reality");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Camera-01-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Camera-01-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Camera-01-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>NOX Virtual Reality</figcaption>
            </figure>
        </a>

        <!-- Partage de documents -->
        <a href=\"http://partage.groupe-nox.com/\" class=\"icon\" target=\"_blank\">
            <figure>
                <img 
                    src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Link-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Link-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Link-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Partage de documents</figcaption>
            </figure>
        </a>

        <!-- Partage de documents -->
        <a href=\"";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Pointage-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Pointage-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Pointage-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Pointage</figcaption>
            </figure>
        </a>

        <!-- Procédures (A ajouter)
        <a href=\"";
        // line 148
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_procedures");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Procedures-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Procedures-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Procedures-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Procédures</figcaption>
            </figure>
        </a>
        -->

        <br />

        <!-- Prestations internes -->
        <a href=\"";
        // line 163
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_prestations_internes");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Conversation-01-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Conversation-01-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Conversation-01-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Prestations internes</figcaption>
            </figure>
        </a>

        <!-- Références -->
        <a href=\"";
        // line 175
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_references");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Sort-Ascending-01-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Sort-Ascending-01-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Sort-Ascending-01-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Références</figcaption>
            </figure>
        </a>

        <!-- RH -->
        <a href=\"";
        // line 187
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_rh");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/User-Group-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/User-Group-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/User-Group-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>RH</figcaption>
            </figure>
        </a>

        <!-- Serveurs -->            
        <a href=\"";
        // line 199
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_serveurs");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Server-02-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Server-02-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Server-02-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Serveurs</figcaption>
            </figure>
        </a>

        <!-- SIREN -->            
        <a href=\"";
        // line 211
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_ressources_siren");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Office-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Office-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Office-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>SIREN</figcaption>
            </figure>
        </a>

        <br />

        <!-- Visioconférence salle 1 -->            
        <a href=\"https://webrtc.g2j.vc/g2j/#/?conference=669644327\" target=\"_blank\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Conference-Call-01-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Conference-Call-01-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Conference-Call-01-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Capitole 1</figcaption>
            </figure>
        </a>

        <!-- Visioconférence salle 2 -->            
        <a href=\"https://webrtc.g2j.vc/g2j/#/?conference=669644328\" target=\"_blank\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Conference-Call-01-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Conference-Call-01-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Conference-Call-01-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Capitole 2</figcaption>
            </figure>
        </a>

        <!-- Visioconférence salle 1 -->            
        <a href=\"https://webrtc.g2j.vc/g2j/#/?conference=669644329\" target=\"_blank\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Conference-Call-01-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Conference-Call-01-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Conference-Call-01-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Capitole 3</figcaption>
            </figure>
        </a>

        <!-- Visioconférence salle 2 -->            
        <a href=\"https://webrtc.g2j.vc/g2j/#/?conference=669644330\" target=\"_blank\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Conference-Call-01-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Conference-Call-01-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Conference-Call-01-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Capitole 4</figcaption>
            </figure>
        </a>

    </div>

";
        
        $__internal_e1fb6d39898812ad2f605d4abf62fdb262b03484b9fb4dbea5d3e6a2aeebd07a->leave($__internal_e1fb6d39898812ad2f605d4abf62fdb262b03484b9fb4dbea5d3e6a2aeebd07a_prof);

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
        return array (  562 => 266,  558 => 265,  554 => 264,  541 => 254,  537 => 253,  533 => 252,  520 => 242,  516 => 241,  512 => 240,  499 => 230,  495 => 229,  491 => 228,  476 => 216,  472 => 215,  468 => 214,  462 => 211,  452 => 204,  448 => 203,  444 => 202,  438 => 199,  428 => 192,  424 => 191,  420 => 190,  414 => 187,  404 => 180,  400 => 179,  396 => 178,  390 => 175,  380 => 168,  376 => 167,  372 => 166,  366 => 163,  353 => 153,  349 => 152,  345 => 151,  339 => 148,  329 => 141,  325 => 140,  321 => 139,  315 => 136,  305 => 129,  301 => 128,  297 => 127,  284 => 117,  280 => 116,  276 => 115,  270 => 112,  260 => 105,  256 => 104,  252 => 103,  246 => 100,  233 => 90,  229 => 89,  225 => 88,  219 => 85,  209 => 78,  205 => 77,  201 => 76,  188 => 66,  184 => 65,  180 => 64,  174 => 61,  164 => 54,  160 => 53,  156 => 52,  150 => 49,  140 => 42,  136 => 41,  132 => 40,  126 => 37,  122 => 35,  113 => 29,  109 => 28,  105 => 27,  99 => 24,  96 => 23,  94 => 22,  85 => 16,  81 => 15,  77 => 14,  71 => 11,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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

{% block titrePage %} Ressources {% endblock %}

{% block messageAccueil %}Ressources{% endblock %}

{% block contenu %} 
    <div class=\"iconContener\">

        <!-- Archives -->
        <a href=\"{{ path('nox_intranet_archives') }}\" class=\"icon\">
            <figure>
                <img 
                    src=\"{{ asset('bundles/noxintranetressources/images/Archive-128.png') }}\" 
                    onmouseover=\"this.src = '{{ asset('bundles/noxintranetressources/images/Archive-128-hover.png') }}';\" 
                    onmouseout=\"this.src = '{{ asset('bundles/noxintranetressources/images/Archive-128.png') }}';\"
                    > 
                <figcaption>Archives</figcaption>
            </figure>
        </a>

        {% if app.user and is_granted('ROLE_SUPER_ADMIN') %}
            <!-- Assistant d'affaire -->
            <a href=\"{{ path('nox_intranet_assistant_affaire') }}\" class=\"icon\">
                <figure>
                    <img 
                        src=\"{{ asset('bundles/noxintranetressources/images/Business-Man-128.png') }}\" 
                        onmouseover=\"this.src = '{{ asset('bundles/noxintranetressources/images/Business-Man-128-hover.png') }}';\" 
                        onmouseout=\"this.src = '{{ asset('bundles/noxintranetressources/images/Business-Man-128.png') }}';\"
                        > 
                    <figcaption>Assistant d'affaire</figcaption>
                </figure>
            </a>
        {% endif %}

        <!-- Assurance qualité -->
        <a href=\"{{ path('nox_intranet_aq') }}\" class=\"icon\">
            <figure>
                <img 
                    src=\"{{ asset('bundles/noxintranetressources/images/Hand-Sign-06-128.png') }}\" 
                    onmouseover=\"this.src = '{{ asset('bundles/noxintranetressources/images/Hand-Sign-06-128-hover.png') }}';\" 
                    onmouseout=\"this.src = '{{ asset('bundles/noxintranetressources/images/Hand-Sign-06-128.png') }}';\"
                    > 
                <figcaption>Assurance qualité</figcaption>
            </figure>
        </a>

        <!-- Développement professionnel -->
        <a href=\"{{ path('nox_intranet_developpement_professionnel_formulaire') }}\" class=\"icon\">
            <figure>
                <img 
                    src=\"{{ asset('bundles/noxintranetressources/images/Graduate-01-128.png') }}\" 
                    onmouseover=\"this.src = '{{ asset('bundles/noxintranetressources/images/Graduate-01-128-hover.png') }}';\" 
                    onmouseout=\"this.src = '{{ asset('bundles/noxintranetressources/images/Graduate-01-128.png') }}';\"
                    > 
                <figcaption>Développement professionnel</figcaption>
            </figure>
        </a>         

        <!-- FAQ -->
        <a href=\"{{ path('nox_intranet_faq') }}\" class=\"icon\">
            <figure>
                <img 
                    src=\"{{ asset('bundles/noxintranetressources/images/Help-128.png') }}\" 
                    onmouseover=\"this.src = '{{ asset('bundles/noxintranetressources/images/Help-128-hover.png') }}';\" 
                    onmouseout=\"this.src = '{{ asset('bundles/noxintranetressources/images/Help-128.png') }}';\"
                    > 
                <figcaption>FAQ</figcaption>
            </figure>
        </a> 

        <!-- Interface VOIP -->
        <a href=\"https://172.16.35.1:9443/onexportal.html\" class=\"icon\">
            <figure>
                <img 
                    src=\"{{ asset('bundles/noxintranetressources/images/Headphone-Mike-128.png') }}\" 
                    onmouseover=\"this.src = '{{ asset('bundles/noxintranetressources/images/Headphone-Mike-128-hover.png') }}';\" 
                    onmouseout=\"this.src = '{{ asset('bundles/noxintranetressources/images/Headphone-Mike-128.png') }}';\"
                    > 
                <figcaption>Interface VOIP</figcaption>
            </figure>
        </a> 

        <!-- Imprimantes (A tester !)
        <a href=\"{{ path('nox_intranet_imprimantes') }}\" class=\"icon\">
            <figure>
                <img 
                    src=\"{{ asset('bundles/noxintranetressources/images/Printer-128.png') }}\" 
                    onmouseover=\"this.src = '{{ asset('bundles/noxintranetressources/images/Printer-128-hover.png') }}';\" 
                    onmouseout=\"this.src = '{{ asset('bundles/noxintranetressources/images/Printer-128.png') }}';\"
                    > 
                <figcaption>Imprimantes</figcaption>
            </figure>
        </a>
        -->

        <br />    

        <!-- Liens -->
        <a href=\"{{ path('nox_intranet_liens') }}\" class=\"icon\">
            <figure>
                <img 
                    src=\"{{ asset('bundles/noxintranetressources/images/Link-128.png') }}\" 
                    onmouseover=\"this.src = '{{ asset('bundles/noxintranetressources/images/Link-128-hover.png') }}';\" 
                    onmouseout=\"this.src = '{{ asset('bundles/noxintranetressources/images/Link-128.png') }}';\"
                    > 
                <figcaption>Liens</figcaption>
            </figure>
        </a>

        <!-- NOX Virtual Reality -->
        <a href=\"{{ path('nox_intranet_nox_virtual_reality') }}\" class=\"icon\">
            <figure>
                <img 
                    src=\"{{ asset('bundles/noxintranetressources/images/Camera-01-128.png') }}\" 
                    onmouseover=\"this.src = '{{ asset('bundles/noxintranetressources/images/Camera-01-128-hover.png') }}';\" 
                    onmouseout=\"this.src = '{{ asset('bundles/noxintranetressources/images/Camera-01-128.png') }}';\"
                    > 
                <figcaption>NOX Virtual Reality</figcaption>
            </figure>
        </a>

        <!-- Partage de documents -->
        <a href=\"http://partage.groupe-nox.com/\" class=\"icon\" target=\"_blank\">
            <figure>
                <img 
                    src=\"{{ asset('bundles/noxintranetressources/images/Link-128.png') }}\" 
                    onmouseover=\"this.src = '{{ asset('bundles/noxintranetressources/images/Link-128-hover.png') }}';\" 
                    onmouseout=\"this.src = '{{ asset('bundles/noxintranetressources/images/Link-128.png') }}';\"
                    > 
                <figcaption>Partage de documents</figcaption>
            </figure>
        </a>

        <!-- Partage de documents -->
        <a href=\"{{ path('nox_intranet_pointage') }}\" class=\"icon\">
            <figure>
                <img 
                    src=\"{{ asset('bundles/noxintranetressources/images/Pointage-128.png') }}\" 
                    onmouseover=\"this.src = '{{ asset('bundles/noxintranetressources/images/Pointage-128-hover.png') }}';\" 
                    onmouseout=\"this.src = '{{ asset('bundles/noxintranetressources/images/Pointage-128.png') }}';\"
                    > 
                <figcaption>Pointage</figcaption>
            </figure>
        </a>

        <!-- Procédures (A ajouter)
        <a href=\"{{ path('nox_intranet_procedures') }}\" class=\"icon\">
            <figure>
                <img 
                    src=\"{{ asset('bundles/noxintranetressources/images/Procedures-128.png') }}\" 
                    onmouseover=\"this.src = '{{ asset('bundles/noxintranetressources/images/Procedures-128-hover.png') }}';\" 
                    onmouseout=\"this.src = '{{ asset('bundles/noxintranetressources/images/Procedures-128.png') }}';\"
                    > 
                <figcaption>Procédures</figcaption>
            </figure>
        </a>
        -->

        <br />

        <!-- Prestations internes -->
        <a href=\"{{ path('nox_intranet_prestations_internes') }}\" class=\"icon\">
            <figure>
                <img 
                    src=\"{{ asset('bundles/noxintranetressources/images/Conversation-01-128.png') }}\" 
                    onmouseover=\"this.src = '{{ asset('bundles/noxintranetressources/images/Conversation-01-128-hover.png') }}';\" 
                    onmouseout=\"this.src = '{{ asset('bundles/noxintranetressources/images/Conversation-01-128.png') }}';\"
                    > 
                <figcaption>Prestations internes</figcaption>
            </figure>
        </a>

        <!-- Références -->
        <a href=\"{{ path('nox_intranet_references') }}\" class=\"icon\">
            <figure>
                <img 
                    src=\"{{ asset('bundles/noxintranetressources/images/Sort-Ascending-01-128.png') }}\" 
                    onmouseover=\"this.src = '{{ asset('bundles/noxintranetressources/images/Sort-Ascending-01-128-hover.png') }}';\" 
                    onmouseout=\"this.src = '{{ asset('bundles/noxintranetressources/images/Sort-Ascending-01-128.png') }}';\"
                    > 
                <figcaption>Références</figcaption>
            </figure>
        </a>

        <!-- RH -->
        <a href=\"{{ path('nox_intranet_rh') }}\" class=\"icon\">
            <figure>
                <img 
                    src=\"{{ asset('bundles/noxintranetressources/images/User-Group-128.png') }}\" 
                    onmouseover=\"this.src = '{{ asset('bundles/noxintranetressources/images/User-Group-128-hover.png') }}';\" 
                    onmouseout=\"this.src = '{{ asset('bundles/noxintranetressources/images/User-Group-128.png') }}';\"
                    > 
                <figcaption>RH</figcaption>
            </figure>
        </a>

        <!-- Serveurs -->            
        <a href=\"{{ path('nox_intranet_serveurs') }}\" class=\"icon\">
            <figure>
                <img 
                    src=\"{{ asset('bundles/noxintranetressources/images/Server-02-128.png') }}\" 
                    onmouseover=\"this.src = '{{ asset('bundles/noxintranetressources/images/Server-02-128-hover.png') }}';\" 
                    onmouseout=\"this.src = '{{ asset('bundles/noxintranetressources/images/Server-02-128.png') }}';\"
                    > 
                <figcaption>Serveurs</figcaption>
            </figure>
        </a>

        <!-- SIREN -->            
        <a href=\"{{ path('nox_intranet_ressources_siren') }}\" class=\"icon\">
            <figure>
                <img 
                    src=\"{{ asset('bundles/noxintranetressources/images/Office-128.png') }}\" 
                    onmouseover=\"this.src = '{{ asset('bundles/noxintranetressources/images/Office-128-hover.png') }}';\" 
                    onmouseout=\"this.src = '{{ asset('bundles/noxintranetressources/images/Office-128.png') }}';\"
                    > 
                <figcaption>SIREN</figcaption>
            </figure>
        </a>

        <br />

        <!-- Visioconférence salle 1 -->            
        <a href=\"https://webrtc.g2j.vc/g2j/#/?conference=669644327\" target=\"_blank\" class=\"icon\">
            <figure>
                <img 
                    src=\"{{ asset('bundles/noxintranetressources/images/Conference-Call-01-128.png') }}\" 
                    onmouseover=\"this.src = '{{ asset('bundles/noxintranetressources/images/Conference-Call-01-128-hover.png') }}';\" 
                    onmouseout=\"this.src = '{{ asset('bundles/noxintranetressources/images/Conference-Call-01-128.png') }}';\"
                    > 
                <figcaption>Capitole 1</figcaption>
            </figure>
        </a>

        <!-- Visioconférence salle 2 -->            
        <a href=\"https://webrtc.g2j.vc/g2j/#/?conference=669644328\" target=\"_blank\" class=\"icon\">
            <figure>
                <img 
                    src=\"{{ asset('bundles/noxintranetressources/images/Conference-Call-01-128.png') }}\" 
                    onmouseover=\"this.src = '{{ asset('bundles/noxintranetressources/images/Conference-Call-01-128-hover.png') }}';\" 
                    onmouseout=\"this.src = '{{ asset('bundles/noxintranetressources/images/Conference-Call-01-128.png') }}';\"
                    > 
                <figcaption>Capitole 2</figcaption>
            </figure>
        </a>

        <!-- Visioconférence salle 1 -->            
        <a href=\"https://webrtc.g2j.vc/g2j/#/?conference=669644329\" target=\"_blank\" class=\"icon\">
            <figure>
                <img 
                    src=\"{{ asset('bundles/noxintranetressources/images/Conference-Call-01-128.png') }}\" 
                    onmouseover=\"this.src = '{{ asset('bundles/noxintranetressources/images/Conference-Call-01-128-hover.png') }}';\" 
                    onmouseout=\"this.src = '{{ asset('bundles/noxintranetressources/images/Conference-Call-01-128.png') }}';\"
                    > 
                <figcaption>Capitole 3</figcaption>
            </figure>
        </a>

        <!-- Visioconférence salle 2 -->            
        <a href=\"https://webrtc.g2j.vc/g2j/#/?conference=669644330\" target=\"_blank\" class=\"icon\">
            <figure>
                <img 
                    src=\"{{ asset('bundles/noxintranetressources/images/Conference-Call-01-128.png') }}\" 
                    onmouseover=\"this.src = '{{ asset('bundles/noxintranetressources/images/Conference-Call-01-128-hover.png') }}';\" 
                    onmouseout=\"this.src = '{{ asset('bundles/noxintranetressources/images/Conference-Call-01-128.png') }}';\"
                    > 
                <figcaption>Capitole 4</figcaption>
            </figure>
        </a>

    </div>

{% endblock %}", "NoxIntranetRessourcesBundle:Accueil:accueilRessources.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\RessourcesBundle/Resources/views/Accueil/accueilRessources.html.twig");
    }
}
