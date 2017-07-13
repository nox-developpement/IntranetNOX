<?php

/* NoxIntranetAdministrationBundle:Administration:administration.html.twig */
class __TwigTemplate_8bc7bfdb7c2caecc4577fd87039201651cc4d3ce6d7a027a31d1ad83ed2d423a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:Administration:administration.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
            'sousMessageAccueil' => array($this, 'block_sousMessageAccueil'),
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
        // line 4
        echo "    Administration
";
    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Administration";
    }

    // line 8
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        echo "Veuillez sélectionner le type de contenu à gérer.";
    }

    // line 11
    public function block_contenu($context, array $blocks = array())
    {
        // line 12
        echo "
    <style>
        #DRHTable {
            width: 50%;
            margin: auto;
            margin-bottom: 5em;
        }

        #DRHTable, #DRHTable tr, #DRHTable th, #DRHTable td {
            border-collapse: collapse;
            border: 1px solid black;
        }

        #DRHTable th {
            color: white;
            background-color: #1F4E79;
        }

        #DRHTable tr {
            border: none;
        }

        #DRHTable td {
            padding: 1% 2% 1% 2%;
            border-top: none;
            border-bottom: none;
        }

        #DRHTable td .DRHLinkDiv {
            display: inline-block;
            padding: 2%;
            border-top: solid 1px rgb(192,0,0);
            border-bottom: solid 1px rgb(192,0,0);
        }

        #DRHTable td .DRHLinkDiv:hover {
            border-top: solid 1px black;
            border-bottom: solid 1px black;
        }

        #DRHTable td a, #DRHTable td a:visited {
            color: #1F4E79;
            text-decoration: none;
        } 
    </style>

    <div class=\"iconContener\">

        ";
        // line 60
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 61
            echo "
            <div class=\"sousMessageAcceuil\"> 
                <h4> Configuration Intranet :  </h4>
            </div>

            ";
            // line 66
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"))) {
                // line 67
                echo "
                <!-- Administration Administrateur -->
                <a href=\"";
                // line 69
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_user_admin");
                echo "\" class=\"icon\">
                    <figure>
                        <img 
                            src=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/User-Shield-128.png"), "html", null, true);
                echo "\" 
                            onmouseover=\"this.src = '";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/User-Shield-128-hover.png"), "html", null, true);
                echo "';\" 
                            onmouseout=\"this.src = '";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/User-Shield-128.png"), "html", null, true);
                echo "';\"
                            > 
                        <figcaption>Administrateurs</figcaption>
                    </figure>
                </a>

            ";
            }
            // line 81
            echo "
            <!-- Licenses (A faire) 
            <a href=\"";
            // line 83
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_userDB");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Licenses-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Licenses-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Licenses-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Licenses</figcaption>
                </figure>
            </a>
            -->

            ";
            // line 95
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "local", array()) == true))) {
                // line 96
                echo "
                <!-- Mot de passe -->
                <a href=\"";
                // line 98
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_admin_mdp");
                echo "\" class=\"icon\">
                    <figure>
                        <img 
                            src=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Password-Text-01-128.png"), "html", null, true);
                echo "\" 
                            onmouseover=\"this.src = '";
                // line 102
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Password-Text-01-128-hover.png"), "html", null, true);
                echo "';\" 
                            onmouseout=\"this.src = '";
                // line 103
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Password-Text-01-128.png"), "html", null, true);
                echo "';\"
                            > 
                        <figcaption>Modif. MDP</figcaption>
                    </figure>
                </a>

            ";
            }
            // line 110
            echo "
            <!-- Synchro. AD -->
            <a href=\"";
            // line 112
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_userDB");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Data-Connect-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Data-Connect-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Data-Connect-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Synchro. AD</figcaption>
                </figure>
            </a>

            <!-- Administration Utilisateurs -->
            <a href=\"";
            // line 124
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_user");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/User-Group-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/User-Group-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/User-Group-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Utilisateurs</figcaption>
                </figure>
            </a>

            <br>

            <div class=\"sousMessageAcceuil\"> 
                <h4> Publication DSI :  </h4>
            </div>

            <!-- Archives -->
            <a href=\"";
            // line 142
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_archives");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Archive-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Archive-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 147
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Archive-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Archives</figcaption>
                </figure>
            </a>

            <!-- Avancement Projet -->
            <a href=\"";
            // line 154
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_avancement_projet");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 157
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Calendar-Date-04-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 158
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Calendar-Date-04-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 159
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Calendar-Date-04-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Av. projet</figcaption>
                </figure>
            </a>

            <!-- Demande Mat/log -->
            <a href=\"";
            // line 166
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_materiel");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 169
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Mobile-Phone-Message-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 170
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Mobile-Phone-Message-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Mobile-Phone-Message-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Demande Mat/log</figcaption>
                </figure>
            </a> 

            <br>

            <!-- Imprimantes (A faire)
            <a href=\"";
            // line 180
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_imprimantes");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 183
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Printer-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 184
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Printer-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 185
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Printer-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Imprimantes</figcaption>
                </figure>
            </a> 
            -->

            <!-- Informations -->
            <a href=\"";
            // line 193
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_information");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 196
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Message-Information-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 197
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Message-Information-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 198
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Message-Information-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Informations</figcaption>
                </figure>
            </a>  

            <!-- Message d'alerte -->
            <a href=\"";
            // line 205
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_message_alerte");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 208
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Message-Warning-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 209
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Message-Warning-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 210
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Message-Warning-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Message d'alerte</figcaption>
                </figure>
            </a>

            <!-- Monitoring charte informatique -->
            <a href=\"";
            // line 217
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_charte_informatique_monitoring");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 220
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Bullets-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 221
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Bullets-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 222
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Bullets-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Monitoring charte informatique</figcaption>
                </figure>
            </a>

            <br>

            <!-- Monitoring scripts planifiés -->
            <a href=\"";
            // line 231
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_monitoring_scheduled_scripts");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 234
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Bullets-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 235
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Bullets-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 236
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Bullets-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Monitoring scripts planifiés</figcaption>
                </figure>
            </a>

            <!-- News DSI -->
            <a href=\"";
            // line 243
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_news");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 246
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Newspaper-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 247
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Newspaper-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 248
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Newspaper-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>News DSI</figcaption>
                </figure>
            </a>

            <!-- Serveurs -->
            <a href=\"";
            // line 255
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_serveurs");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 258
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Server-02-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 259
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Server-02-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 260
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Server-02-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Serveurs</figcaption>
                </figure>
            </a>   

            <!-- Statistique VPN -->
            <a href=\"";
            // line 267
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_vpn_stats_upload");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 270
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Bar-Chart-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 271
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Bar-Chart-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 272
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Bar-Chart-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Statistique VPN</figcaption>
                </figure>
            </a>   

        ";
        }
        // line 279
        echo "
        <div class=\"sousMessageAcceuil\"> 
            <h4> Publication Collaborateurs :  </h4>
        </div>

        ";
        // line 284
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 285
            echo "
            <!-- Assistant d'affaire -->
            <a href=\"";
            // line 287
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_affaires");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 290
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Business-Man-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 291
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Business-Man-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 292
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Business-Man-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Assistant d'affaire</figcaption>
                </figure>
            </a>

        ";
        }
        // line 299
        echo "
        <!-- Assurance qualité -->
        <a href=\"";
        // line 301
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_aq");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Hand-Sign-06-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Hand-Sign-06-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Hand-Sign-06-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Assurance qualité</figcaption>
            </figure>
        </a>

        <!-- Communication -->
        <a href=\"";
        // line 313
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_communication");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Messages-Information-01-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Messages-Information-01-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Messages-Information-01-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Communication</figcaption>
            </figure>
        </a>    

        <br>

        ";
        // line 326
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_FAQ"))) {
            echo "        
            <!-- FAQ -->
            <a href=\"";
            // line 328
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_faq");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 331
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Help-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 332
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Help-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 333
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Help-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>FAQ</figcaption>
                </figure>
            </a>

        ";
        }
        // line 340
        echo "
        <!-- Liens -->
        <a href=\"";
        // line 342
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_liens");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Link-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Link-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Link-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Liens</figcaption>
            </figure>
        </a>

        <!-- Procédures (A ajouté)
        <a href=\"";
        // line 354
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_liens");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Procedures-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Procedures-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Procedures-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Procédures</figcaption>
            </figure>
        </a>
        -->

        <!-- Références -->
        <a href=\"";
        // line 367
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_references");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Sort-Ascending-01-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Sort-Ascending-01-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Sort-Ascending-01-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Références</figcaption>
            </figure>
        </a>

        <!-- Ticketing -->
        <a href=\"";
        // line 379
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_ticketing");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Ticketing-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Ticketing-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Ticketing-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Ticketing</figcaption>
            </figure>
        </a>

        <!-- DRH -->
        ";
        // line 391
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RH"))) {
            // line 392
            echo "
            <div class=\"sousMessageAcceuil\"> 
                <h4> DRH :  </h4>
            </div>

            <table id='DRHTable'>
                <tr>
                    <th>Pointage</th>
                    <th>Développement professionnel</th>
                    <th>Autre</th>
                </tr>
                <tr>
                    <td>
                        <div class='DRHLinkDiv'><a href=\"";
            // line 405
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointages_compilation", array("validationStep" => "RH"));
            echo "\">Assistant(e) RH - Correction/Validation compilation</a></div>
                    </td>
                    <td>
                        ";
            // line 408
            if (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()) == "n.rigaudeau") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()) == "a.forestier")) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()) == "t.besson"))) {
                // line 409
                echo "                            <div class='DRHLinkDiv'><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_developpement_professionnel_synthese_excel");
                echo "\">Synthèse</a></div>
                        ";
            }
            // line 411
            echo "                    </td>
                    <td>
                        <div class='DRHLinkDiv'><a href=\"";
            // line 413
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_prestation_administration_da");
            echo "\">Prestations internes - Administration des DA</a></div>
                    </td>
                </tr>
                <tr>
                    <td><div class='DRHLinkDiv'><a href=\"";
            // line 417
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointages_compilation", array("validationStep" => "Final"));
            echo "\">Consultation des compilations validées</a></div></td>
                    <td><div class='DRHLinkDiv'><a href=\"";
            // line 418
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_developpement_professionnel_monitoring_formulaire");
            echo "\">Suivis des entretiens</a></div></td>
                    <td><div class='DRHLinkDiv'><a href=\"";
            // line 419
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_matrice_collaborateur_info_file_uploading");
            echo "\">Import des informations de matrice de compétence</a></div></td>
                </tr>
                <tr>
                    <td><div class='DRHLinkDiv'><a href=\"https://noxingenierie-my.sharepoint.com/personal/l_morisseau_groupe-nox_com/_layouts/15/WopiFrame.aspx?sourcedoc=%7B84616442-030A-4A6D-8CD9-B17A0FB1D49C%7D&file=COMPILATION%20FICHIER%20HIERARCHIQUE%20110117.xlsx&action=default\" target=\"_blank\">Fichier de hiérarchie RH</a></div></td>
                    <td></td>
                    <td><div class='DRHLinkDiv'><a href=\"";
            // line 424
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_matrice_collaborateur_export_matrice_competence");
            echo "\">Export des compétences des collaborateurs</a></div></td>
                </tr>
                <tr>
                    <td><div class='DRHLinkDiv'><a href='";
            // line 427
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Pointage/Aide/Prise en main du pointage RH.pdf"), "html", null, true);
            echo "' target='_blank'>Consulter la notice</a></div></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>

        ";
        }
        // line 434
        echo "        <!-- Fin DRH -->

    </div>

";
    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:Administration:administration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  822 => 434,  812 => 427,  806 => 424,  798 => 419,  794 => 418,  790 => 417,  783 => 413,  779 => 411,  773 => 409,  771 => 408,  765 => 405,  750 => 392,  748 => 391,  738 => 384,  734 => 383,  730 => 382,  724 => 379,  714 => 372,  710 => 371,  706 => 370,  700 => 367,  689 => 359,  685 => 358,  681 => 357,  675 => 354,  665 => 347,  661 => 346,  657 => 345,  651 => 342,  647 => 340,  637 => 333,  633 => 332,  629 => 331,  623 => 328,  618 => 326,  607 => 318,  603 => 317,  599 => 316,  593 => 313,  583 => 306,  579 => 305,  575 => 304,  569 => 301,  565 => 299,  555 => 292,  551 => 291,  547 => 290,  541 => 287,  537 => 285,  535 => 284,  528 => 279,  518 => 272,  514 => 271,  510 => 270,  504 => 267,  494 => 260,  490 => 259,  486 => 258,  480 => 255,  470 => 248,  466 => 247,  462 => 246,  456 => 243,  446 => 236,  442 => 235,  438 => 234,  432 => 231,  420 => 222,  416 => 221,  412 => 220,  406 => 217,  396 => 210,  392 => 209,  388 => 208,  382 => 205,  372 => 198,  368 => 197,  364 => 196,  358 => 193,  347 => 185,  343 => 184,  339 => 183,  333 => 180,  321 => 171,  317 => 170,  313 => 169,  307 => 166,  297 => 159,  293 => 158,  289 => 157,  283 => 154,  273 => 147,  269 => 146,  265 => 145,  259 => 142,  243 => 129,  239 => 128,  235 => 127,  229 => 124,  219 => 117,  215 => 116,  211 => 115,  205 => 112,  201 => 110,  191 => 103,  187 => 102,  183 => 101,  177 => 98,  173 => 96,  171 => 95,  161 => 88,  157 => 87,  153 => 86,  147 => 83,  143 => 81,  133 => 74,  129 => 73,  125 => 72,  119 => 69,  115 => 67,  113 => 66,  106 => 61,  104 => 60,  54 => 12,  51 => 11,  45 => 8,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NoxIntranetAdministrationBundle:Administration:administration.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\AdministrationBundle/Resources/views/Administration/administration.html.twig");
    }
}
