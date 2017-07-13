<?php

/* @NoxIntranetCommunication/Accueil/affichageContenu.html.twig */
class __TwigTemplate_6123b8c2cb4b16f85c7ddd4062a2bcecd557468d8fb7393b155b53fe6ef24814 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetCommunication/Accueil/affichageContenu.html.twig", 1);
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
        echo (isset($context["dossier"]) ? $context["dossier"] : null);
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo (isset($context["dossier"]) ? $context["dossier"] : null);
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <script>

        \$(window).load(function () {
            ajaxVideoPreview();
        });

        // Génére une prévisualisation Gif des vidéos.
        function ajaxVideoPreview() {
            // Pour chaques vidéos mp4...
            \$('.mp4_Image').each(function () {
                // On récupére l'image.
                var vignette = \$(this);

                // On lance la requête de génération du gif.
                \$.ajax({
                    url: '";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_communication_ajax_video_preview");
        echo "',
                    type: 'POST',
                    data: {file: vignette.data('video')},
                    success: function (gifCode) {
                        vignette.attr('src', gifCode); // On attribut le git à l'image.
                    }
                });
            });
        }

    </script>
    
    ";
        // line 36
        if (((twig_test_empty((isset($context["authorizedUploadUsers"]) ? $context["authorizedUploadUsers"] : null)) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COMMUNICATION")) || twig_in_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), (isset($context["authorizedUploadUsers"]) ? $context["authorizedUploadUsers"] : null)))) {
            echo " 

        <div id=\"menuAdminNewsSI\" class='menuAdmin'>
            <h3> Interface de gestion de contenu </h3>
            <a onclick=\"openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["config"]) ? $context["config"] : null), "html", null, true);
            echo "', 'Gestionnaire de fichiers - ";
            echo (isset($context["dossier"]) ? $context["dossier"] : null);
            echo "');\"> <h3> Ouvrir le gestionnaire de fichier </h3> </a>
        </div>

    ";
        }
        // line 44
        echo "
    <div id=\"choixPage\">

        ";
        // line 47
        if (((isset($context["nbPage"]) ? $context["nbPage"] : null) > 1)) {
            // line 48
            echo "
            <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->
            ";
            // line 50
            if (((isset($context["page"]) ? $context["page"] : null) > 1)) {
                // line 51
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("page" => 1, "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                echo "\"> << </a>
            ";
            }
            // line 53
            echo "            <!-------------------------------------------------------------------------->

            <!-- Affiche un lien vers la page précédente si elle existe -->
            ";
            // line 56
            if ((((isset($context["page"]) ? $context["page"] : null) - 1) >= 1)) {
                // line 57
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("page" => ((isset($context["page"]) ? $context["page"] : null) - 1), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                echo "\"> < </a>
            ";
            }
            // line 59
            echo "            <!---------------------------------------------------------->

            <!-- Affichage des liens vers les pages précédente. -->
            ";
            // line 62
            if ((((isset($context["page"]) ? $context["page"] : null) - 1) >= 1)) {
                // line 63
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["page"]) ? $context["page"] : null) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 64
                    echo "
                    ";
                    // line 65
                    if (($context["i"] >= ((isset($context["page"]) ? $context["page"] : null) - 2))) {
                        // line 66
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("page" => $context["i"], "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 68
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "            ";
            }
            // line 71
            echo "            <!--------------------------------------------------->

            <!-- Page courante -->
            <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("page" => (isset($context["page"]) ? $context["page"] : null), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
            echo "\"> <p id=\"pageActuel\">";
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
            echo "</p> </a>
            <!------------------->

            <!-- Affichage des liens vers les pages suivantes. -->
            ";
            // line 78
            if ((((isset($context["page"]) ? $context["page"] : null) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                // line 79
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(((isset($context["page"]) ? $context["page"] : null) + 1), (isset($context["nbPage"]) ? $context["nbPage"] : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 80
                    echo "
                    ";
                    // line 81
                    if (($context["i"] <= ((isset($context["page"]) ? $context["page"] : null) + 2))) {
                        // line 82
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("page" => $context["i"], "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 84
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "            ";
            }
            // line 87
            echo "            <!--------------------------------------------------->

            <!-- Affiche un lien vers la page suivante si elle existe -->
            ";
            // line 90
            if ((((isset($context["page"]) ? $context["page"] : null) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                // line 91
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("page" => ((isset($context["page"]) ? $context["page"] : null) + 1), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                echo "\"> > </a>
            ";
            }
            // line 93
            echo "            <!------------------------------------------------------------>

            <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->
            ";
            // line 96
            if (((isset($context["page"]) ? $context["page"] : null) < (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                // line 97
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("page" => (isset($context["nbPage"]) ? $context["nbPage"] : null), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                echo "\"> >> </a>
            ";
            }
            // line 99
            echo "            <!-------------------------------------------------------------------------->

        ";
        }
        // line 102
        echo "
    </div>

    ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            echo "  

        <div class=\"divNews\">

            ";
            // line 109
            if (($this->getAttribute($context["new"], "type", array(), "array") == "pdf")) {
                // line 110
                echo "                <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["new"], "fichier", array(), "array"), "Lien", array()), "html", null, true);
                echo "', 'News SI');\">
                    <div class=\"previewImageContainer\" onmouseover=\"\$(this).css('box-shadow', '0px 0px 10px #1F4E79');\" onmouseout=\"\$(this).css('box-shadow', 'none');\">
                        <img 
                            class=\"pdf_Image\"
                            src=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "schemeAndHttpHost", array()), "html", null, true);
                echo "/Symfony/web/ImagePDF/";
                echo twig_escape_filter($this->env, twig_convert_encoding($this->getAttribute($this->getAttribute($context["new"], "fichier", array(), "array"), "Nom", array()), "UTF-8", "ISO-8859-1"), "html", null, true);
                echo ".png\" alt=\"PDF\"  
                            >
                    </div>
                </a>      

                <ul>

                    <li> Nom du fichier : ";
                // line 121
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["new"], "fichier", array(), "array"), "Nom", array()), "html", null, true);
                echo " </li>

                    ";
                // line 123
                if (($this->getAttribute($this->getAttribute($context["new"], "fichier", array(), "array"), "Title", array()) != null)) {
                    echo " <li> Titre : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["new"], "fichier", array(), "array"), "Title", array()), "html", null, true);
                    echo " </li> ";
                }
                // line 124
                echo "
                    ";
                // line 125
                if (($this->getAttribute($this->getAttribute($context["new"], "fichier", array(), "array"), "Author", array()) != null)) {
                    echo " <li> Auteur : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["new"], "fichier", array(), "array"), "Author", array()), "html", null, true);
                    echo " </li> ";
                }
                // line 126
                echo "
                    ";
                // line 127
                if (($this->getAttribute($this->getAttribute($context["new"], "fichier", array(), "array"), "Subject", array()) != null)) {
                    echo " <li> Sujet : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["new"], "fichier", array(), "array"), "Subject", array()), "html", null, true);
                    echo " </li> ";
                }
                // line 128
                echo "
                    ";
                // line 129
                if (($this->getAttribute($this->getAttribute($context["new"], "fichier", array(), "array"), "Keywords", array()) != null)) {
                    echo " <li> Mots : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["new"], "fichier", array(), "array"), "Keywords", array()), "html", null, true);
                    echo " </li> ";
                }
                // line 130
                echo "
                    ";
                // line 131
                if (($this->getAttribute($this->getAttribute($context["new"], "fichier", array(), "array"), "Pages", array()) != null)) {
                    echo " <li> Nombre de page(s) : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["new"], "fichier", array(), "array"), "Pages", array()), "html", null, true);
                    echo " </li> ";
                }
                // line 132
                echo "
                    <li> Posté le : ";
                // line 133
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["new"], "fichier", array(), "array"), "dateEnvoi", array()), "d/m/Y"), "html", null, true);
                echo " </li>

                </ul>

            ";
            } elseif (($this->getAttribute(            // line 137
$context["new"], "type", array(), "array") == "mp4")) {
                echo "   
                <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["new"], "fichier", array(), "array"), "Lien", array()), "html", null, true);
                echo "', 'News SI');\">
                    <div class=\"previewImageContainer\" onmouseover=\"\$(this).css('box-shadow', '0px 0px 10px #1F4E79');\" onmouseout=\"\$(this).css('box-shadow', 'none');\">
                        <img 
                            class=\"mp4_Image\"
                            src=\"data:image/jpg;base64,";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["new"], "fichier", array(), "array"), "Image", array(), "array"), "html", null, true);
                echo "\" alt=\"PDF\" 
                            data-video=\"";
                // line 143
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["new"], "fichier", array(), "array"), "Chemin", array()), "html", null, true);
                echo "\"
                            >

                        <div class=\"mp4PlayButton\" style=\"background-image: url(";
                // line 146
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetcommunication/images/PlayButton.png"), "html", null, true);
                echo ");\"></div>
                    </div>
                </a>

                <ul>

                    <li> Nom du fichier : ";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["new"], "fichier", array(), "array"), "Nom", array()), "html", null, true);
                echo " </li> 

                    <li> Durée : ";
                // line 154
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["new"], "fichier", array(), "array"), "Duree", array()), "html", null, true);
                echo " secondes </li>

                    <li> Posté le : ";
                // line 156
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["new"], "fichier", array(), "array"), "dateEnvoi", array()), "d/m/Y"), "html", null, true);
                echo " </li>

                </ul>

            ";
            }
            // line 161
            echo "
        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "
    <div id=\"choixPage\">

        ";
        // line 168
        if (((isset($context["nbPage"]) ? $context["nbPage"] : null) > 1)) {
            // line 169
            echo "
            <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->
            ";
            // line 171
            if (((isset($context["page"]) ? $context["page"] : null) > 1)) {
                // line 172
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("page" => 1, "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                echo "\"> << </a>
            ";
            }
            // line 174
            echo "            <!-------------------------------------------------------------------------->

            <!-- Affiche un lien vers la page précédente si elle existe -->
            ";
            // line 177
            if ((((isset($context["page"]) ? $context["page"] : null) - 1) >= 1)) {
                // line 178
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("page" => ((isset($context["page"]) ? $context["page"] : null) - 1), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                echo "\"> < </a>
            ";
            }
            // line 180
            echo "            <!---------------------------------------------------------->

            <!-- Affichage des liens vers les pages précédente. -->
            ";
            // line 183
            if ((((isset($context["page"]) ? $context["page"] : null) - 1) >= 1)) {
                // line 184
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["page"]) ? $context["page"] : null) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 185
                    echo "
                    ";
                    // line 186
                    if (($context["i"] >= ((isset($context["page"]) ? $context["page"] : null) - 2))) {
                        // line 187
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("page" => $context["i"], "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 189
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 191
                echo "            ";
            }
            // line 192
            echo "            <!--------------------------------------------------->

            <!-- Page courante -->
            <a href=\"";
            // line 195
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("page" => (isset($context["page"]) ? $context["page"] : null), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
            echo "\"> <p id=\"pageActuel\">";
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
            echo "</p> </a>
            <!------------------->

            <!-- Affichage des liens vers les pages suivantes. -->
            ";
            // line 199
            if ((((isset($context["page"]) ? $context["page"] : null) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                // line 200
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(((isset($context["page"]) ? $context["page"] : null) + 1), (isset($context["nbPage"]) ? $context["nbPage"] : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 201
                    echo "
                    ";
                    // line 202
                    if (($context["i"] <= ((isset($context["page"]) ? $context["page"] : null) + 2))) {
                        // line 203
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("page" => $context["i"], "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 205
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 207
                echo "            ";
            }
            // line 208
            echo "            <!--------------------------------------------------->

            <!-- Affiche un lien vers la page suivante si elle existe -->
            ";
            // line 211
            if ((((isset($context["page"]) ? $context["page"] : null) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                // line 212
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("page" => ((isset($context["page"]) ? $context["page"] : null) + 1), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                echo "\"> > </a>
            ";
            }
            // line 214
            echo "            <!------------------------------------------------------------>

            <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->
            ";
            // line 217
            if (((isset($context["page"]) ? $context["page"] : null) < (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                // line 218
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_affichageContenu", array("page" => (isset($context["nbPage"]) ? $context["nbPage"] : null), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                echo "\"> >> </a>
            ";
            }
            // line 220
            echo "            <!-------------------------------------------------------------------------->

        ";
        }
        // line 223
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetCommunication/Accueil/affichageContenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  528 => 223,  523 => 220,  517 => 218,  515 => 217,  510 => 214,  504 => 212,  502 => 211,  497 => 208,  494 => 207,  487 => 205,  479 => 203,  477 => 202,  474 => 201,  469 => 200,  467 => 199,  458 => 195,  453 => 192,  450 => 191,  443 => 189,  435 => 187,  433 => 186,  430 => 185,  425 => 184,  423 => 183,  418 => 180,  412 => 178,  410 => 177,  405 => 174,  399 => 172,  397 => 171,  393 => 169,  391 => 168,  386 => 165,  377 => 161,  369 => 156,  364 => 154,  359 => 152,  350 => 146,  344 => 143,  340 => 142,  333 => 138,  329 => 137,  322 => 133,  319 => 132,  313 => 131,  310 => 130,  304 => 129,  301 => 128,  295 => 127,  292 => 126,  286 => 125,  283 => 124,  277 => 123,  272 => 121,  260 => 114,  252 => 110,  250 => 109,  241 => 105,  236 => 102,  231 => 99,  225 => 97,  223 => 96,  218 => 93,  212 => 91,  210 => 90,  205 => 87,  202 => 86,  195 => 84,  187 => 82,  185 => 81,  182 => 80,  177 => 79,  175 => 78,  166 => 74,  161 => 71,  158 => 70,  151 => 68,  143 => 66,  141 => 65,  138 => 64,  133 => 63,  131 => 62,  126 => 59,  120 => 57,  118 => 56,  113 => 53,  107 => 51,  105 => 50,  101 => 48,  99 => 47,  94 => 44,  85 => 40,  78 => 36,  63 => 24,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetCommunication/Accueil/affichageContenu.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\CommunicationBundle\\Resources\\views\\Accueil\\affichageContenu.html.twig");
    }
}
