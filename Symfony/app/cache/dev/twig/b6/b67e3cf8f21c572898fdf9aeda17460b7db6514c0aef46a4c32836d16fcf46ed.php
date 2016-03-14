<?php

/* NoxIntranetCommunicationBundle:Accueil:affichageContenu.html.twig */
class __TwigTemplate_5e65ab79b4e2b27837867646f3fd02f17df8a0d56f7770c256e708f6cbbf2f06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetCommunicationBundle:Accueil:affichageContenu.html.twig", 1);
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
        $__internal_22f183c926836dc2bb671be28a73aa19de8cc7d9dcf79d8680520a30691f55e4 = $this->env->getExtension("native_profiler");
        $__internal_22f183c926836dc2bb671be28a73aa19de8cc7d9dcf79d8680520a30691f55e4->enter($__internal_22f183c926836dc2bb671be28a73aa19de8cc7d9dcf79d8680520a30691f55e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetCommunicationBundle:Accueil:affichageContenu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22f183c926836dc2bb671be28a73aa19de8cc7d9dcf79d8680520a30691f55e4->leave($__internal_22f183c926836dc2bb671be28a73aa19de8cc7d9dcf79d8680520a30691f55e4_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_72d947374d78ae8f67fee6d193b5ad453b8068613a62389b53cdaa8beea45d4d = $this->env->getExtension("native_profiler");
        $__internal_72d947374d78ae8f67fee6d193b5ad453b8068613a62389b53cdaa8beea45d4d->enter($__internal_72d947374d78ae8f67fee6d193b5ad453b8068613a62389b53cdaa8beea45d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier"));
        
        $__internal_72d947374d78ae8f67fee6d193b5ad453b8068613a62389b53cdaa8beea45d4d->leave($__internal_72d947374d78ae8f67fee6d193b5ad453b8068613a62389b53cdaa8beea45d4d_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_37c425bb74e1f3debbb194844430afe2ee0f7cb4a0cf26dd921f94d0d8627b0b = $this->env->getExtension("native_profiler");
        $__internal_37c425bb74e1f3debbb194844430afe2ee0f7cb4a0cf26dd921f94d0d8627b0b->enter($__internal_37c425bb74e1f3debbb194844430afe2ee0f7cb4a0cf26dd921f94d0d8627b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier"));
        
        $__internal_37c425bb74e1f3debbb194844430afe2ee0f7cb4a0cf26dd921f94d0d8627b0b->leave($__internal_37c425bb74e1f3debbb194844430afe2ee0f7cb4a0cf26dd921f94d0d8627b0b_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_3c5a5be0e95195ce8432e300d36727a3036aabcd541f9e42cf0643a0356365d0 = $this->env->getExtension("native_profiler");
        $__internal_3c5a5be0e95195ce8432e300d36727a3036aabcd541f9e42cf0643a0356365d0->enter($__internal_3c5a5be0e95195ce8432e300d36727a3036aabcd541f9e42cf0643a0356365d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    ";
        // line 9
        if ($this->env->getExtension('security')->isGranted("ROLE_COMMUNICATION")) {
            echo " 

        <div id=\"menuAdminNewsSI\" class='menuAdmin'>
            <h3> Interface de gestion de contenu </h3>
            <a onclick=\"openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "html", null, true);
            echo "', 'Gestionnaire de fichiers - ";
            echo (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier"));
            echo "');\"> <h3> Ouvrir le gestionnaire de fichier </h3> </a>
        </div>

    ";
        }
        // line 17
        echo "
    <div id=\"choixPage\">

        ";
        // line 20
        if (((isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")) > 1)) {
            // line 21
            echo "
            <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->
            ";
            // line 23
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) > 1)) {
                // line 24
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("page" => 1, "dossier" => (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "config" => (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : $this->getContext($context, "chemin")))), "html", null, true);
                echo "\"> << </a>
            ";
            }
            // line 26
            echo "            <!-------------------------------------------------------------------------->

            <!-- Affiche un lien vers la page précédente si elle existe -->
            ";
            // line 29
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1) >= 1)) {
                // line 30
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "config" => (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : $this->getContext($context, "chemin")))), "html", null, true);
                echo "\"> < </a>
            ";
            }
            // line 32
            echo "            <!---------------------------------------------------------->

            <!-- Affichage des liens vers les pages précédente. -->
            ";
            // line 35
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1) >= 1)) {
                // line 36
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 37
                    echo "
                    ";
                    // line 38
                    if (($context["i"] >= ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 2))) {
                        // line 39
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("page" => $context["i"], "dossier" => (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "config" => (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : $this->getContext($context, "chemin")))), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 41
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "            ";
            }
            // line 44
            echo "            <!--------------------------------------------------->

            <!-- Page courante -->
            <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "config" => (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : $this->getContext($context, "chemin")))), "html", null, true);
            echo "\"> <p id=\"pageActuel\">";
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
            echo "</p> </a>
            <!------------------->

            <!-- Affichage des liens vers les pages suivantes. -->
            ";
            // line 51
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                // line 52
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1), (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 53
                    echo "
                    ";
                    // line 54
                    if (($context["i"] <= ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 2))) {
                        // line 55
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("page" => $context["i"], "dossier" => (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "config" => (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : $this->getContext($context, "chemin")))), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 57
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "            ";
            }
            // line 60
            echo "            <!--------------------------------------------------->

            <!-- Affiche un lien vers la page suivante si elle existe -->
            ";
            // line 63
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                // line 64
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "config" => (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : $this->getContext($context, "chemin")))), "html", null, true);
                echo "\"> > </a>
            ";
            }
            // line 66
            echo "            <!------------------------------------------------------------>

            <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->
            ";
            // line 69
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) < (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                // line 70
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("page" => (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "config" => (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : $this->getContext($context, "chemin")))), "html", null, true);
                echo "\"> >> </a>
            ";
            }
            // line 72
            echo "            <!-------------------------------------------------------------------------->

        ";
        }
        // line 75
        echo "
    </div>

    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            echo " 

        <div class=\"divNews\">

            <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "Lien", array()), "html", null, true);
            echo "', 'Nox Letters');\">
                <img 
                    src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()), "html", null, true);
            echo "/Symfony/web/ImagePDF/";
            echo twig_escape_filter($this->env, twig_convert_encoding($this->getAttribute($context["new"], "Nom", array()), "UTF-8", "ISO-8859-1"), "html", null, true);
            echo ".png\" alt=\"PDF\" 
                    onmouseover=\"\$(this).css('box-shadow', '0px 0px 10px #1F4E79');\" 
                    onmouseout=\"\$(this).css('box-shadow', 'none');\"
                    >
            </a>

            <ul>

                <li> Nom du fichier : ";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "Nom", array()), "html", null, true);
            echo " </li>

                ";
            // line 94
            if (($this->getAttribute($context["new"], "Title", array()) != null)) {
                echo " <li> Titre : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "Title", array()), "html", null, true);
                echo " </li> ";
            }
            // line 95
            echo "
                ";
            // line 96
            if (($this->getAttribute($context["new"], "Author", array()) != null)) {
                echo " <li> Auteur : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "Author", array()), "html", null, true);
                echo " </li> ";
            }
            // line 97
            echo "
                ";
            // line 98
            if (($this->getAttribute($context["new"], "Subject", array()) != null)) {
                echo " <li> Sujet : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "Subject", array()), "html", null, true);
                echo " </li> ";
            }
            // line 99
            echo "
                ";
            // line 100
            if (($this->getAttribute($context["new"], "Keywords", array()) != null)) {
                echo " <li> Mots : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "Keywords", array()), "html", null, true);
                echo " </li> ";
            }
            // line 101
            echo "
                ";
            // line 102
            if (($this->getAttribute($context["new"], "Pages", array()) != null)) {
                echo " <li> Nombre de page(s) : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "Pages", array()), "html", null, true);
                echo " </li> ";
            }
            // line 103
            echo "
                <li> Posté le : ";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "dateEnvoi", array()), "html", null, true);
            echo " </li>

            </ul>

        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "
    <div id=\"choixPage\">

        ";
        // line 114
        if (((isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")) > 1)) {
            // line 115
            echo "
            <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->
            ";
            // line 117
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) > 1)) {
                // line 118
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("page" => 1, "dossier" => (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "config" => (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : $this->getContext($context, "chemin")))), "html", null, true);
                echo "\"> << </a>
            ";
            }
            // line 120
            echo "            <!-------------------------------------------------------------------------->

            <!-- Affiche un lien vers la page précédente si elle existe -->
            ";
            // line 123
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1) >= 1)) {
                // line 124
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "config" => (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : $this->getContext($context, "chemin")))), "html", null, true);
                echo "\"> < </a>
            ";
            }
            // line 126
            echo "            <!---------------------------------------------------------->

            <!-- Affichage des liens vers les pages précédente. -->
            ";
            // line 129
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1) >= 1)) {
                // line 130
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 131
                    echo "
                    ";
                    // line 132
                    if (($context["i"] >= ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 2))) {
                        // line 133
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("page" => $context["i"], "dossier" => (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "config" => (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : $this->getContext($context, "chemin")))), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 135
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 137
                echo "            ";
            }
            // line 138
            echo "            <!--------------------------------------------------->

            <!-- Page courante -->
            <a href=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "config" => (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : $this->getContext($context, "chemin")))), "html", null, true);
            echo "\"> <p id=\"pageActuel\">";
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
            echo "</p> </a>
            <!------------------->

            <!-- Affichage des liens vers les pages suivantes. -->
            ";
            // line 145
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                // line 146
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1), (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 147
                    echo "
                    ";
                    // line 148
                    if (($context["i"] <= ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 2))) {
                        // line 149
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("page" => $context["i"], "dossier" => (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "config" => (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : $this->getContext($context, "chemin")))), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 151
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 153
                echo "            ";
            }
            // line 154
            echo "            <!--------------------------------------------------->

            <!-- Affiche un lien vers la page suivante si elle existe -->
            ";
            // line 157
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                // line 158
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "config" => (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : $this->getContext($context, "chemin")))), "html", null, true);
                echo "\"> > </a>
            ";
            }
            // line 160
            echo "            <!------------------------------------------------------------>

            <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->
            ";
            // line 163
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) < (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                // line 164
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("page" => (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "config" => (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : $this->getContext($context, "chemin")))), "html", null, true);
                echo "\"> >> </a>
            ";
            }
            // line 166
            echo "            <!-------------------------------------------------------------------------->

        ";
        }
        // line 169
        echo "
    </div>

";
        
        $__internal_3c5a5be0e95195ce8432e300d36727a3036aabcd541f9e42cf0643a0356365d0->leave($__internal_3c5a5be0e95195ce8432e300d36727a3036aabcd541f9e42cf0643a0356365d0_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetCommunicationBundle:Accueil:affichageContenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  464 => 169,  459 => 166,  453 => 164,  451 => 163,  446 => 160,  440 => 158,  438 => 157,  433 => 154,  430 => 153,  423 => 151,  415 => 149,  413 => 148,  410 => 147,  405 => 146,  403 => 145,  394 => 141,  389 => 138,  386 => 137,  379 => 135,  371 => 133,  369 => 132,  366 => 131,  361 => 130,  359 => 129,  354 => 126,  348 => 124,  346 => 123,  341 => 120,  335 => 118,  333 => 117,  329 => 115,  327 => 114,  322 => 111,  309 => 104,  306 => 103,  300 => 102,  297 => 101,  291 => 100,  288 => 99,  282 => 98,  279 => 97,  273 => 96,  270 => 95,  264 => 94,  259 => 92,  246 => 84,  241 => 82,  232 => 78,  227 => 75,  222 => 72,  216 => 70,  214 => 69,  209 => 66,  203 => 64,  201 => 63,  196 => 60,  193 => 59,  186 => 57,  178 => 55,  176 => 54,  173 => 53,  168 => 52,  166 => 51,  157 => 47,  152 => 44,  149 => 43,  142 => 41,  134 => 39,  132 => 38,  129 => 37,  124 => 36,  122 => 35,  117 => 32,  111 => 30,  109 => 29,  104 => 26,  98 => 24,  96 => 23,  92 => 21,  90 => 20,  85 => 17,  76 => 13,  69 => 9,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}{{ dossier|raw }}{% endblock %}*/
/* */
/* {% block messageAccueil %}{{ dossier|raw }}{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     {% if is_granted('ROLE_COMMUNICATION') %} */
/* */
/*         <div id="menuAdminNewsSI" class='menuAdmin'>*/
/*             <h3> Interface de gestion de contenu </h3>*/
/*             <a onclick="openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/{{ config }}', 'Gestionnaire de fichiers - {{ dossier|raw }}');"> <h3> Ouvrir le gestionnaire de fichier </h3> </a>*/
/*         </div>*/
/* */
/*     {% endif %}*/
/* */
/*     <div id="choixPage">*/
/* */
/*         {% if nbPage > 1 %}*/
/* */
/*             <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->*/
/*             {% if page > 1 %}*/
/*                 <a href="{{ path('nox_intranet_affichageContenu', { 'page': 1, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> << </a>*/
/*             {% endif %}*/
/*             <!-------------------------------------------------------------------------->*/
/* */
/*             <!-- Affiche un lien vers la page précédente si elle existe -->*/
/*             {% if page-1  >= 1 %}*/
/*                 <a href="{{ path('nox_intranet_affichageContenu', { 'page': page-1, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> < </a>*/
/*             {% endif %}*/
/*             <!---------------------------------------------------------->*/
/* */
/*             <!-- Affichage des liens vers les pages précédente. -->*/
/*             {% if page-1  >= 1 %}*/
/*                 {% for i in 1..page-1 %}*/
/* */
/*                     {% if i >= (page - 2) %}*/
/*                         <a href="{{ path('nox_intranet_affichageContenu', { 'page': i, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> {{ i }} </a>*/
/*                     {% endif %}*/
/* */
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             <!--------------------------------------------------->*/
/* */
/*             <!-- Page courante -->*/
/*             <a href="{{ path('nox_intranet_affichageContenu', { 'page': page, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> <p id="pageActuel">{{ page }}</p> </a>*/
/*             <!------------------->*/
/* */
/*             <!-- Affichage des liens vers les pages suivantes. -->*/
/*             {% if page+1  <= nbPage %}*/
/*                 {% for i in page+1..nbPage %}*/
/* */
/*                     {% if i <= (page + 2) %}*/
/*                         <a href="{{ path('nox_intranet_affichageContenu', { 'page': i, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> {{ i }} </a>*/
/*                     {% endif %}*/
/* */
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             <!--------------------------------------------------->*/
/* */
/*             <!-- Affiche un lien vers la page suivante si elle existe -->*/
/*             {% if page+1  <= nbPage %}*/
/*                 <a href="{{ path('nox_intranet_affichageContenu', { 'page': page+1, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> > </a>*/
/*             {% endif %}*/
/*             <!------------------------------------------------------------>*/
/* */
/*             <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->*/
/*             {% if page < nbPage %}*/
/*                 <a href="{{ path('nox_intranet_affichageContenu', { 'page': nbPage, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> >> </a>*/
/*             {% endif %}*/
/*             <!-------------------------------------------------------------------------->*/
/* */
/*         {% endif %}*/
/* */
/*     </div>*/
/* */
/*     {% for new in news %} */
/* */
/*         <div class="divNews">*/
/* */
/*             <a onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '{{ new.Lien }}', 'Nox Letters');">*/
/*                 <img */
/*                     src="{{ app.request.schemeAndHttpHost }}/Symfony/web/ImagePDF/{{ new.Nom|convert_encoding('UTF-8', 'ISO-8859-1') }}.png" alt="PDF" */
/*                     onmouseover="$(this).css('box-shadow', '0px 0px 10px #1F4E79');" */
/*                     onmouseout="$(this).css('box-shadow', 'none');"*/
/*                     >*/
/*             </a>*/
/* */
/*             <ul>*/
/* */
/*                 <li> Nom du fichier : {{ new.Nom }} </li>*/
/* */
/*                 {% if new.Title != null %} <li> Titre : {{ new.Title }} </li> {% endif %}*/
/* */
/*                 {% if new.Author != null %} <li> Auteur : {{ new.Author }} </li> {% endif %}*/
/* */
/*                 {% if new.Subject != null %} <li> Sujet : {{ new.Subject }} </li> {% endif %}*/
/* */
/*                 {% if new.Keywords != null %} <li> Mots : {{ new.Keywords }} </li> {% endif %}*/
/* */
/*                 {% if new.Pages != null %} <li> Nombre de page(s) : {{ new.Pages }} </li> {% endif %}*/
/* */
/*                 <li> Posté le : {{ new.dateEnvoi }} </li>*/
/* */
/*             </ul>*/
/* */
/*         </div>*/
/* */
/*     {% endfor %}*/
/* */
/*     <div id="choixPage">*/
/* */
/*         {% if nbPage > 1 %}*/
/* */
/*             <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->*/
/*             {% if page > 1 %}*/
/*                 <a href="{{ path('nox_intranet_affichageContenu', { 'page': 1, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> << </a>*/
/*             {% endif %}*/
/*             <!-------------------------------------------------------------------------->*/
/* */
/*             <!-- Affiche un lien vers la page précédente si elle existe -->*/
/*             {% if page-1  >= 1 %}*/
/*                 <a href="{{ path('nox_intranet_affichageContenu', { 'page': page-1, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> < </a>*/
/*             {% endif %}*/
/*             <!---------------------------------------------------------->*/
/* */
/*             <!-- Affichage des liens vers les pages précédente. -->*/
/*             {% if page-1  >= 1 %}*/
/*                 {% for i in 1..page-1 %}*/
/* */
/*                     {% if i >= (page - 2) %}*/
/*                         <a href="{{ path('nox_intranet_affichageContenu', { 'page': i, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> {{ i }} </a>*/
/*                     {% endif %}*/
/* */
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             <!--------------------------------------------------->*/
/* */
/*             <!-- Page courante -->*/
/*             <a href="{{ path('nox_intranet_affichageContenu', { 'page': page, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> <p id="pageActuel">{{ page }}</p> </a>*/
/*             <!------------------->*/
/* */
/*             <!-- Affichage des liens vers les pages suivantes. -->*/
/*             {% if page+1  <= nbPage %}*/
/*                 {% for i in page+1..nbPage %}*/
/* */
/*                     {% if i <= (page + 2) %}*/
/*                         <a href="{{ path('nox_intranet_affichageContenu', { 'page': i, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> {{ i }} </a>*/
/*                     {% endif %}*/
/* */
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             <!--------------------------------------------------->*/
/* */
/*             <!-- Affiche un lien vers la page suivante si elle existe -->*/
/*             {% if page+1  <= nbPage %}*/
/*                 <a href="{{ path('nox_intranet_affichageContenu', { 'page': page+1, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> > </a>*/
/*             {% endif %}*/
/*             <!------------------------------------------------------------>*/
/* */
/*             <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->*/
/*             {% if page < nbPage %}*/
/*                 <a href="{{ path('nox_intranet_affichageContenu', { 'page': nbPage, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> >> </a>*/
/*             {% endif %}*/
/*             <!-------------------------------------------------------------------------->*/
/* */
/*         {% endif %}*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
