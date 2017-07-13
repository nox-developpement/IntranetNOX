<?php

/* NoxIntranetAdministrationBundle:Administration:administration.html.twig */
class __TwigTemplate_d890005db0f04e26815d9d60d955108cad1639b1d8907611329ad19b8ff32b0d extends Twig_Template
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
        $__internal_8d81444fc751339e7fc77683a2f17bf69ff353f98b879e3df9e2f426a96ba08b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d81444fc751339e7fc77683a2f17bf69ff353f98b879e3df9e2f426a96ba08b->enter($__internal_8d81444fc751339e7fc77683a2f17bf69ff353f98b879e3df9e2f426a96ba08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:Administration:administration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d81444fc751339e7fc77683a2f17bf69ff353f98b879e3df9e2f426a96ba08b->leave($__internal_8d81444fc751339e7fc77683a2f17bf69ff353f98b879e3df9e2f426a96ba08b_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_e98257aca699a1f5ebe9c8843420c13650905fc9935e28505df621d9346b551e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e98257aca699a1f5ebe9c8843420c13650905fc9935e28505df621d9346b551e->enter($__internal_e98257aca699a1f5ebe9c8843420c13650905fc9935e28505df621d9346b551e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration
";
        
        $__internal_e98257aca699a1f5ebe9c8843420c13650905fc9935e28505df621d9346b551e->leave($__internal_e98257aca699a1f5ebe9c8843420c13650905fc9935e28505df621d9346b551e_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_820dc8c88f6ec7299a2de9ae4d7eece605b8c95f47f2bfe3d290f1dea17ea766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_820dc8c88f6ec7299a2de9ae4d7eece605b8c95f47f2bfe3d290f1dea17ea766->enter($__internal_820dc8c88f6ec7299a2de9ae4d7eece605b8c95f47f2bfe3d290f1dea17ea766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration";
        
        $__internal_820dc8c88f6ec7299a2de9ae4d7eece605b8c95f47f2bfe3d290f1dea17ea766->leave($__internal_820dc8c88f6ec7299a2de9ae4d7eece605b8c95f47f2bfe3d290f1dea17ea766_prof);

    }

    // line 8
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        $__internal_9ed1331039100fa6a36b8b92468c50596c06a286e58d32a49f23933964b5aebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed1331039100fa6a36b8b92468c50596c06a286e58d32a49f23933964b5aebf->enter($__internal_9ed1331039100fa6a36b8b92468c50596c06a286e58d32a49f23933964b5aebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousMessageAccueil"));

        echo "Veuillez sélectionner le type de contenu à gérer.";
        
        $__internal_9ed1331039100fa6a36b8b92468c50596c06a286e58d32a49f23933964b5aebf->leave($__internal_9ed1331039100fa6a36b8b92468c50596c06a286e58d32a49f23933964b5aebf_prof);

    }

    // line 11
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_165c08006c7cb46b667184b360de5fcc280cb5f229fbb95dacc8cc77b9b32002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_165c08006c7cb46b667184b360de5fcc280cb5f229fbb95dacc8cc77b9b32002->enter($__internal_165c08006c7cb46b667184b360de5fcc280cb5f229fbb95dacc8cc77b9b32002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 61
            echo "
            <div class=\"sousMessageAcceuil\"> 
                <h4> Configuration Intranet :  </h4>
            </div>

            ";
            // line 66
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"))) {
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
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "local", array()) == true))) {
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
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
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
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_FAQ"))) {
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
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RH"))) {
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
            if (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == "n.rigaudeau") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == "a.forestier")) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == "t.besson"))) {
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
        
        $__internal_165c08006c7cb46b667184b360de5fcc280cb5f229fbb95dacc8cc77b9b32002->leave($__internal_165c08006c7cb46b667184b360de5fcc280cb5f229fbb95dacc8cc77b9b32002_prof);

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
        return array (  849 => 434,  839 => 427,  833 => 424,  825 => 419,  821 => 418,  817 => 417,  810 => 413,  806 => 411,  800 => 409,  798 => 408,  792 => 405,  777 => 392,  775 => 391,  765 => 384,  761 => 383,  757 => 382,  751 => 379,  741 => 372,  737 => 371,  733 => 370,  727 => 367,  716 => 359,  712 => 358,  708 => 357,  702 => 354,  692 => 347,  688 => 346,  684 => 345,  678 => 342,  674 => 340,  664 => 333,  660 => 332,  656 => 331,  650 => 328,  645 => 326,  634 => 318,  630 => 317,  626 => 316,  620 => 313,  610 => 306,  606 => 305,  602 => 304,  596 => 301,  592 => 299,  582 => 292,  578 => 291,  574 => 290,  568 => 287,  564 => 285,  562 => 284,  555 => 279,  545 => 272,  541 => 271,  537 => 270,  531 => 267,  521 => 260,  517 => 259,  513 => 258,  507 => 255,  497 => 248,  493 => 247,  489 => 246,  483 => 243,  473 => 236,  469 => 235,  465 => 234,  459 => 231,  447 => 222,  443 => 221,  439 => 220,  433 => 217,  423 => 210,  419 => 209,  415 => 208,  409 => 205,  399 => 198,  395 => 197,  391 => 196,  385 => 193,  374 => 185,  370 => 184,  366 => 183,  360 => 180,  348 => 171,  344 => 170,  340 => 169,  334 => 166,  324 => 159,  320 => 158,  316 => 157,  310 => 154,  300 => 147,  296 => 146,  292 => 145,  286 => 142,  270 => 129,  266 => 128,  262 => 127,  256 => 124,  246 => 117,  242 => 116,  238 => 115,  232 => 112,  228 => 110,  218 => 103,  214 => 102,  210 => 101,  204 => 98,  200 => 96,  198 => 95,  188 => 88,  184 => 87,  180 => 86,  174 => 83,  170 => 81,  160 => 74,  156 => 73,  152 => 72,  146 => 69,  142 => 67,  140 => 66,  133 => 61,  131 => 60,  81 => 12,  75 => 11,  63 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
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

{% block titrePage %}
    Administration
{% endblock %}

{% block messageAccueil %}Administration{% endblock %}
{% block sousMessageAccueil %}Veuillez sélectionner le type de contenu à gérer.{% endblock %}


{% block contenu %}

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

        {% if app.user and is_granted('ROLE_ADMIN') %}

            <div class=\"sousMessageAcceuil\"> 
                <h4> Configuration Intranet :  </h4>
            </div>

            {% if app.user and is_granted('ROLE_SUPER_ADMIN') %}

                <!-- Administration Administrateur -->
                <a href=\"{{ path('nox_intranet_administration_user_admin') }}\" class=\"icon\">
                    <figure>
                        <img 
                            src=\"{{ asset('bundles/noxintranetadministration/images/User-Shield-128.png') }}\" 
                            onmouseover=\"this.src = '{{ asset('bundles/noxintranetadministration/images/User-Shield-128-hover.png') }}';\" 
                            onmouseout=\"this.src = '{{ asset('bundles/noxintranetadministration/images/User-Shield-128.png') }}';\"
                            > 
                        <figcaption>Administrateurs</figcaption>
                    </figure>
                </a>

            {% endif %}

            <!-- Licenses (A faire) 
            <a href=\"{{ path('nox_intranet_administration_userDB') }}\" class=\"icon\">
                <figure>
                    <img 
                        src=\"{{ asset('bundles/noxintranetadministration/images/Licenses-128.png') }}\" 
                        onmouseover=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Licenses-128-hover.png') }}';\" 
                        onmouseout=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Licenses-128.png') }}';\"
                        > 
                    <figcaption>Licenses</figcaption>
                </figure>
            </a>
            -->

            {% if app.user and app.user.local == true %}

                <!-- Mot de passe -->
                <a href=\"{{ path('nox_intranet_admin_mdp') }}\" class=\"icon\">
                    <figure>
                        <img 
                            src=\"{{ asset('bundles/noxintranetadministration/images/Password-Text-01-128.png') }}\" 
                            onmouseover=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Password-Text-01-128-hover.png') }}';\" 
                            onmouseout=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Password-Text-01-128.png') }}';\"
                            > 
                        <figcaption>Modif. MDP</figcaption>
                    </figure>
                </a>

            {% endif %}

            <!-- Synchro. AD -->
            <a href=\"{{ path('nox_intranet_administration_userDB') }}\" class=\"icon\">
                <figure>
                    <img 
                        src=\"{{ asset('bundles/noxintranetadministration/images/Data-Connect-128.png') }}\" 
                        onmouseover=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Data-Connect-128-hover.png') }}';\" 
                        onmouseout=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Data-Connect-128.png') }}';\"
                        > 
                    <figcaption>Synchro. AD</figcaption>
                </figure>
            </a>

            <!-- Administration Utilisateurs -->
            <a href=\"{{ path('nox_intranet_administration_user') }}\" class=\"icon\">
                <figure>
                    <img 
                        src=\"{{ asset('bundles/noxintranetadministration/images/User-Group-128.png') }}\" 
                        onmouseover=\"this.src = '{{ asset('bundles/noxintranetadministration/images/User-Group-128-hover.png') }}';\" 
                        onmouseout=\"this.src = '{{ asset('bundles/noxintranetadministration/images/User-Group-128.png') }}';\"
                        > 
                    <figcaption>Utilisateurs</figcaption>
                </figure>
            </a>

            <br>

            <div class=\"sousMessageAcceuil\"> 
                <h4> Publication DSI :  </h4>
            </div>

            <!-- Archives -->
            <a href=\"{{ path('nox_intranet_archives') }}\" class=\"icon\">
                <figure>
                    <img 
                        src=\"{{ asset('bundles/noxintranetadministration/images/Archive-128.png') }}\" 
                        onmouseover=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Archive-128-hover.png') }}';\" 
                        onmouseout=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Archive-128.png') }}';\"
                        > 
                    <figcaption>Archives</figcaption>
                </figure>
            </a>

            <!-- Avancement Projet -->
            <a href=\"{{ path('nox_intranet_avancement_projet') }}\" class=\"icon\">
                <figure>
                    <img 
                        src=\"{{ asset('bundles/noxintranetadministration/images/Calendar-Date-04-128.png') }}\" 
                        onmouseover=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Calendar-Date-04-128-hover.png') }}';\" 
                        onmouseout=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Calendar-Date-04-128.png') }}';\"
                        > 
                    <figcaption>Av. projet</figcaption>
                </figure>
            </a>

            <!-- Demande Mat/log -->
            <a href=\"{{ path('nox_intranet_administration_materiel') }}\" class=\"icon\">
                <figure>
                    <img 
                        src=\"{{ asset('bundles/noxintranetadministration/images/Mobile-Phone-Message-128.png') }}\" 
                        onmouseover=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Mobile-Phone-Message-128-hover.png') }}';\" 
                        onmouseout=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Mobile-Phone-Message-128.png') }}';\"
                        > 
                    <figcaption>Demande Mat/log</figcaption>
                </figure>
            </a> 

            <br>

            <!-- Imprimantes (A faire)
            <a href=\"{{ path('nox_intranet_administration_imprimantes') }}\" class=\"icon\">
                <figure>
                    <img 
                        src=\"{{ asset('bundles/noxintranetadministration/images/Printer-128.png') }}\" 
                        onmouseover=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Printer-128-hover.png') }}';\" 
                        onmouseout=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Printer-128.png') }}';\"
                        > 
                    <figcaption>Imprimantes</figcaption>
                </figure>
            </a> 
            -->

            <!-- Informations -->
            <a href=\"{{ path('nox_intranet_information') }}\" class=\"icon\">
                <figure>
                    <img 
                        src=\"{{ asset('bundles/noxintranetadministration/images/Message-Information-128.png') }}\" 
                        onmouseover=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Message-Information-128-hover.png') }}';\" 
                        onmouseout=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Message-Information-128.png') }}';\"
                        > 
                    <figcaption>Informations</figcaption>
                </figure>
            </a>  

            <!-- Message d'alerte -->
            <a href=\"{{ path('nox_intranet_administration_message_alerte') }}\" class=\"icon\">
                <figure>
                    <img 
                        src=\"{{ asset('bundles/noxintranetadministration/images/Message-Warning-128.png') }}\" 
                        onmouseover=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Message-Warning-128-hover.png') }}';\" 
                        onmouseout=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Message-Warning-128.png') }}';\"
                        > 
                    <figcaption>Message d'alerte</figcaption>
                </figure>
            </a>

            <!-- Monitoring charte informatique -->
            <a href=\"{{ path('nox_intranet_charte_informatique_monitoring') }}\" class=\"icon\">
                <figure>
                    <img 
                        src=\"{{ asset('bundles/noxintranetadministration/images/Bullets-128.png') }}\" 
                        onmouseover=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Bullets-128-hover.png') }}';\" 
                        onmouseout=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Bullets-128.png') }}';\"
                        > 
                    <figcaption>Monitoring charte informatique</figcaption>
                </figure>
            </a>

            <br>

            <!-- Monitoring scripts planifiés -->
            <a href=\"{{ path('nox_intranet_monitoring_scheduled_scripts') }}\" class=\"icon\">
                <figure>
                    <img 
                        src=\"{{ asset('bundles/noxintranetadministration/images/Bullets-128.png') }}\" 
                        onmouseover=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Bullets-128-hover.png') }}';\" 
                        onmouseout=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Bullets-128.png') }}';\"
                        > 
                    <figcaption>Monitoring scripts planifiés</figcaption>
                </figure>
            </a>

            <!-- News DSI -->
            <a href=\"{{ path('nox_intranet_administration_news') }}\" class=\"icon\">
                <figure>
                    <img 
                        src=\"{{ asset('bundles/noxintranetadministration/images/Newspaper-128.png') }}\" 
                        onmouseover=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Newspaper-128-hover.png') }}';\" 
                        onmouseout=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Newspaper-128.png') }}';\"
                        > 
                    <figcaption>News DSI</figcaption>
                </figure>
            </a>

            <!-- Serveurs -->
            <a href=\"{{ path('nox_intranet_administration_serveurs') }}\" class=\"icon\">
                <figure>
                    <img 
                        src=\"{{ asset('bundles/noxintranetadministration/images/Server-02-128.png') }}\" 
                        onmouseover=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Server-02-128-hover.png') }}';\" 
                        onmouseout=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Server-02-128.png') }}';\"
                        > 
                    <figcaption>Serveurs</figcaption>
                </figure>
            </a>   

            <!-- Statistique VPN -->
            <a href=\"{{ path('nox_intranet_vpn_stats_upload') }}\" class=\"icon\">
                <figure>
                    <img 
                        src=\"{{ asset('bundles/noxintranetadministration/images/Bar-Chart-128.png') }}\" 
                        onmouseover=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Bar-Chart-128-hover.png') }}';\" 
                        onmouseout=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Bar-Chart-128.png') }}';\"
                        > 
                    <figcaption>Statistique VPN</figcaption>
                </figure>
            </a>   

        {% endif %}

        <div class=\"sousMessageAcceuil\"> 
            <h4> Publication Collaborateurs :  </h4>
        </div>

        {% if app.user and is_granted('ROLE_ADMIN') %}

            <!-- Assistant d'affaire -->
            <a href=\"{{ path('nox_intranet_administration_affaires') }}\" class=\"icon\">
                <figure>
                    <img 
                        src=\"{{ asset('bundles/noxintranetadministration/images/Business-Man-128.png') }}\" 
                        onmouseover=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Business-Man-128-hover.png') }}';\" 
                        onmouseout=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Business-Man-128.png') }}';\"
                        > 
                    <figcaption>Assistant d'affaire</figcaption>
                </figure>
            </a>

        {% endif %}

        <!-- Assurance qualité -->
        <a href=\"{{ path('nox_intranet_aq') }}\" class=\"icon\">
            <figure>
                <img 
                    src=\"{{ asset('bundles/noxintranetadministration/images/Hand-Sign-06-128.png') }}\" 
                    onmouseover=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Hand-Sign-06-128-hover.png') }}';\" 
                    onmouseout=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Hand-Sign-06-128.png') }}';\"
                    > 
                <figcaption>Assurance qualité</figcaption>
            </figure>
        </a>

        <!-- Communication -->
        <a href=\"{{ path('nox_intranet_communication') }}\" class=\"icon\">
            <figure>
                <img 
                    src=\"{{ asset('bundles/noxintranetadministration/images/Messages-Information-01-128.png') }}\" 
                    onmouseover=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Messages-Information-01-128-hover.png') }}';\" 
                    onmouseout=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Messages-Information-01-128.png') }}';\"
                    > 
                <figcaption>Communication</figcaption>
            </figure>
        </a>    

        <br>

        {% if app.user and is_granted('ROLE_FAQ') %}        
            <!-- FAQ -->
            <a href=\"{{ path('nox_intranet_faq') }}\" class=\"icon\">
                <figure>
                    <img 
                        src=\"{{ asset('bundles/noxintranetadministration/images/Help-128.png') }}\" 
                        onmouseover=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Help-128-hover.png') }}';\" 
                        onmouseout=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Help-128.png') }}';\"
                        > 
                    <figcaption>FAQ</figcaption>
                </figure>
            </a>

        {% endif %}

        <!-- Liens -->
        <a href=\"{{ path('nox_intranet_administration_liens') }}\" class=\"icon\">
            <figure>
                <img 
                    src=\"{{ asset('bundles/noxintranetadministration/images/Link-128.png') }}\" 
                    onmouseover=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Link-128-hover.png') }}';\" 
                    onmouseout=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Link-128.png') }}';\"
                    > 
                <figcaption>Liens</figcaption>
            </figure>
        </a>

        <!-- Procédures (A ajouté)
        <a href=\"{{ path('nox_intranet_administration_liens') }}\" class=\"icon\">
            <figure>
                <img 
                    src=\"{{ asset('bundles/noxintranetadministration/images/Procedures-128.png') }}\" 
                    onmouseover=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Procedures-128-hover.png') }}';\" 
                    onmouseout=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Procedures-128.png') }}';\"
                    > 
                <figcaption>Procédures</figcaption>
            </figure>
        </a>
        -->

        <!-- Références -->
        <a href=\"{{ path('nox_intranet_references') }}\" class=\"icon\">
            <figure>
                <img 
                    src=\"{{ asset('bundles/noxintranetadministration/images/Sort-Ascending-01-128.png') }}\" 
                    onmouseover=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Sort-Ascending-01-128-hover.png') }}';\" 
                    onmouseout=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Sort-Ascending-01-128.png') }}';\"
                    > 
                <figcaption>Références</figcaption>
            </figure>
        </a>

        <!-- Ticketing -->
        <a href=\"{{ path('nox_intranet_administration_ticketing') }}\" class=\"icon\">
            <figure>
                <img 
                    src=\"{{ asset('bundles/noxintranetadministration/images/Ticketing-128.png') }}\" 
                    onmouseover=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Ticketing-128-hover.png') }}';\" 
                    onmouseout=\"this.src = '{{ asset('bundles/noxintranetadministration/images/Ticketing-128.png') }}';\"
                    > 
                <figcaption>Ticketing</figcaption>
            </figure>
        </a>

        <!-- DRH -->
        {% if app.user and is_granted('ROLE_RH') %}

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
                        <div class='DRHLinkDiv'><a href=\"{{ path('nox_intranet_pointages_compilation', {'validationStep': 'RH'}) }}\">Assistant(e) RH - Correction/Validation compilation</a></div>
                    </td>
                    <td>
                        {% if app.user.username == 'n.rigaudeau' or app.user.username == 'a.forestier' or app.user.username == 't.besson' %}
                            <div class='DRHLinkDiv'><a href=\"{{ path('nox_intranet_developpement_professionnel_synthese_excel') }}\">Synthèse</a></div>
                        {% endif %}
                    </td>
                    <td>
                        <div class='DRHLinkDiv'><a href=\"{{ path('nox_intranet_prestation_administration_da') }}\">Prestations internes - Administration des DA</a></div>
                    </td>
                </tr>
                <tr>
                    <td><div class='DRHLinkDiv'><a href=\"{{ path('nox_intranet_pointages_compilation', {'validationStep': 'Final'}) }}\">Consultation des compilations validées</a></div></td>
                    <td><div class='DRHLinkDiv'><a href=\"{{ path('nox_intranet_developpement_professionnel_monitoring_formulaire') }}\">Suivis des entretiens</a></div></td>
                    <td><div class='DRHLinkDiv'><a href=\"{{ path(\"nox_intranet_matrice_collaborateur_info_file_uploading\") }}\">Import des informations de matrice de compétence</a></div></td>
                </tr>
                <tr>
                    <td><div class='DRHLinkDiv'><a href=\"https://noxingenierie-my.sharepoint.com/personal/l_morisseau_groupe-nox_com/_layouts/15/WopiFrame.aspx?sourcedoc=%7B84616442-030A-4A6D-8CD9-B17A0FB1D49C%7D&file=COMPILATION%20FICHIER%20HIERARCHIQUE%20110117.xlsx&action=default\" target=\"_blank\">Fichier de hiérarchie RH</a></div></td>
                    <td></td>
                    <td><div class='DRHLinkDiv'><a href=\"{{ path(\"nox_intranet_matrice_collaborateur_export_matrice_competence\") }}\">Export des compétences des collaborateurs</a></div></td>
                </tr>
                <tr>
                    <td><div class='DRHLinkDiv'><a href='{{ asset('Pointage/Aide/Prise en main du pointage RH.pdf') }}' target='_blank'>Consulter la notice</a></div></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>

        {% endif %}
        <!-- Fin DRH -->

    </div>

{% endblock %}
", "NoxIntranetAdministrationBundle:Administration:administration.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\AdministrationBundle/Resources/views/Administration/administration.html.twig");
    }
}
