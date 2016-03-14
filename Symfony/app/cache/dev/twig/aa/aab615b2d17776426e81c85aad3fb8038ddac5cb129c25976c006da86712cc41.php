<?php

/* NoxIntranetRessourcesBundle:References:References.html.twig */
class __TwigTemplate_7c5fa6ffade3eff38ae8b5d13281d6faa23b759aa14170b55ad21b6607a035d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:References:References.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
            'textEncart' => array($this, 'block_textEncart'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_725cc23b21d47758aa2894d20bcdccf039dabdb61c3509333e75fd8b4b8f090d = $this->env->getExtension("native_profiler");
        $__internal_725cc23b21d47758aa2894d20bcdccf039dabdb61c3509333e75fd8b4b8f090d->enter($__internal_725cc23b21d47758aa2894d20bcdccf039dabdb61c3509333e75fd8b4b8f090d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:References:References.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_725cc23b21d47758aa2894d20bcdccf039dabdb61c3509333e75fd8b4b8f090d->leave($__internal_725cc23b21d47758aa2894d20bcdccf039dabdb61c3509333e75fd8b4b8f090d_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_caef648a20cd436eeaa25dd8354e829f846c524b45796f39ead0c8cccbc48a5b = $this->env->getExtension("native_profiler");
        $__internal_caef648a20cd436eeaa25dd8354e829f846c524b45796f39ead0c8cccbc48a5b->enter($__internal_caef648a20cd436eeaa25dd8354e829f846c524b45796f39ead0c8cccbc48a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Références
";
        
        $__internal_caef648a20cd436eeaa25dd8354e829f846c524b45796f39ead0c8cccbc48a5b->leave($__internal_caef648a20cd436eeaa25dd8354e829f846c524b45796f39ead0c8cccbc48a5b_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_b805efa4fc9105a7ede77342831a08cf0e39d74fd4559a57e03d8f504dbaadc6 = $this->env->getExtension("native_profiler");
        $__internal_b805efa4fc9105a7ede77342831a08cf0e39d74fd4559a57e03d8f504dbaadc6->enter($__internal_b805efa4fc9105a7ede77342831a08cf0e39d74fd4559a57e03d8f504dbaadc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Références";
        
        $__internal_b805efa4fc9105a7ede77342831a08cf0e39d74fd4559a57e03d8f504dbaadc6->leave($__internal_b805efa4fc9105a7ede77342831a08cf0e39d74fd4559a57e03d8f504dbaadc6_prof);

    }

    // line 9
    public function block_textEncart($context, array $blocks = array())
    {
        $__internal_b30056f97bbab6a8cf6908b2492893430b67958e100fc07abbf6bdc68831fd44 = $this->env->getExtension("native_profiler");
        $__internal_b30056f97bbab6a8cf6908b2492893430b67958e100fc07abbf6bdc68831fd44->enter($__internal_b30056f97bbab6a8cf6908b2492893430b67958e100fc07abbf6bdc68831fd44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textEncart"));

        // line 10
        echo "
    ";
        // line 11
        if (array_key_exists("text", $context)) {
            echo (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text"));
        }
        // line 12
        echo "
    ";
        // line 13
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 14
            echo "
        ";
            // line 15
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_start', array("attr" => array("id" => "formulaireTexteEncart")));
            echo "

        ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'errors');
            echo "

        ";
            // line 20
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'errors');
            echo "

        ";
            // line 23
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'widget', array("attr" => array("class" => "textEncartField")));
            echo "

        ";
            // line 25
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
            echo "

        <img src='";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Text-Editor-32.png"), "html", null, true);
            echo "' id='texteEncartImg'>

    ";
        }
        // line 30
        echo "
";
        
        $__internal_b30056f97bbab6a8cf6908b2492893430b67958e100fc07abbf6bdc68831fd44->leave($__internal_b30056f97bbab6a8cf6908b2492893430b67958e100fc07abbf6bdc68831fd44_prof);

    }

    // line 33
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_c4ab5b19d97c56b2964693f7055eaf8e4754d46903ac707dfdb0ed5fc53460eb = $this->env->getExtension("native_profiler");
        $__internal_c4ab5b19d97c56b2964693f7055eaf8e4754d46903ac707dfdb0ed5fc53460eb->enter($__internal_c4ab5b19d97c56b2964693f7055eaf8e4754d46903ac707dfdb0ed5fc53460eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 34
        echo "
    ";
        // line 35
        if ($this->env->getExtension('security')->isGranted("ROLE_REFERENCES")) {
            echo " 

        <div id=\"menuAdminReferences\" class='menuAdmin'>
            <h3> Interface de gestion de contenu </h3>
            <a onclick=\"openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/references', 'Gestionnaire de fichiers - Références');\"> <h3>  Ouvrir le gestionnaire de fichier </h3> </a>
        </div>

    ";
        }
        // line 43
        echo "
    <div id=\"Keywords\">
        <p>
            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["keywords"]) ? $context["keywords"] : $this->getContext($context, "keywords")));
        foreach ($context['_seq'] as $context["_key"] => $context["keyword"]) {
            // line 47
            echo "                <span style=\"font-size: calc(0.7vw + ";
            if ((($this->getAttribute($context["keyword"], "Nombre", array()) / (isset($context["nombreMax"]) ? $context["nombreMax"] : $this->getContext($context, "nombreMax"))) < 1)) {
                echo twig_escape_filter($this->env, ($this->getAttribute($context["keyword"], "Nombre", array()) / (isset($context["nombreMax"]) ? $context["nombreMax"] : $this->getContext($context, "nombreMax"))), "html", null, true);
            } else {
                echo "1";
            }
            echo "vw)\">
                    <a href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getPath("nox_intranet_references_recherche");
            echo "?keyword=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["keyword"], "Keyword", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["keyword"], "Keyword", array()), "html", null, true);
            echo "</a>
                </span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keyword'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </p>
    </div>

    <div id=\"rechercheUser\">
        <div id=\"rechercheCompetencesDiv\">
            <form action='";
        // line 56
        echo $this->env->getExtension('routing')->getPath("nox_intranet_references_recherche");
        echo "' type='GET'>
                <label for=\"keyword\"> Rechercher par mots-clés : </label>
                <input type=\"text\" name='keyword' id=\"keyword\" placeholder=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\"/>
                <input type=\"submit\" name=\"Rechercher\" value=\"Rechercher\" class=\"boutonFormulaire\" >
                <button value=\"Annuler\" class=\"boutonFormulaire\" id=\"boutonAnnuler\" onclick=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("nox_intranet_references");
        echo "\"> RAZ </button>
            </form>
        </div>
    </div>

    ";
        // line 65
        if (((isset($context["references"]) ? $context["references"] : $this->getContext($context, "references")) == null)) {
            // line 66
            echo "
        <div class=\"divNews\">

            Votre recherche n'a retourné aucun résultat.

        </div>

    ";
        }
        // line 74
        echo "
    <div id=\"choixPage\">

        ";
        // line 77
        if (((isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")) > 1)) {
            // line 78
            echo "
            <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->
            ";
            // line 80
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) > 1)) {
                // line 81
                echo "                <a href=\"";
                echo $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => 1));
                echo "\"> << </a>
            ";
            }
            // line 83
            echo "            <!-------------------------------------------------------------------------->

            <!-- Affiche un lien vers la page précédente si elle existe -->
            ";
            // line 86
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1) >= 1)) {
                // line 87
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1))), "html", null, true);
                echo "\"> < </a>
            ";
            }
            // line 89
            echo "            <!---------------------------------------------------------->

            <!-- Affichage des liens vers les pages précédente. -->
            ";
            // line 92
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1) >= 1)) {
                // line 93
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 94
                    echo "
                    ";
                    // line 95
                    if (($context["i"] >= ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 2))) {
                        // line 96
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => $context["i"])), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 98
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "            ";
            }
            // line 101
            echo "            <!--------------------------------------------------->

            <!-- Page courante -->
            <a href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
            echo "\"> <p id=\"pageActuel\">";
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
            echo "</p> </a>
            <!------------------->

            <!-- Affichage des liens vers les pages suivantes. -->
            ";
            // line 108
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                // line 109
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1), (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 110
                    echo "
                    ";
                    // line 111
                    if (($context["i"] <= ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 2))) {
                        // line 112
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => $context["i"])), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 114
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 116
                echo "            ";
            }
            // line 117
            echo "            <!--------------------------------------------------->

            <!-- Affiche un lien vers la page suivante si elle existe -->
            ";
            // line 120
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                // line 121
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1))), "html", null, true);
                echo "\"> > </a>
            ";
            }
            // line 123
            echo "            <!------------------------------------------------------------>

            <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->
            ";
            // line 126
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) < (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                // line 127
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))), "html", null, true);
                echo "\"> >> </a>
            ";
            }
            // line 129
            echo "            <!-------------------------------------------------------------------------->

        ";
        }
        // line 132
        echo "
    </div>

    ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["references"]) ? $context["references"] : $this->getContext($context, "references")));
        foreach ($context['_seq'] as $context["_key"] => $context["reference"]) {
            // line 136
            echo "
        <div class=\"divNews\">

            <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "Lien", array()), "html", null, true);
            echo "', 'RH');\">
                <img 
                    src=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()), "html", null, true);
            echo "/Symfony/web/ImagePDF/";
            echo twig_escape_filter($this->env, twig_convert_encoding($this->getAttribute($context["reference"], "Nom", array()), "UTF-8", "ISO-8859-1"), "html", null, true);
            echo ".png\" alt=\"PDF\" 
                    onmouseover=\"\$(this).css('box-shadow', '0px 0px 10px #1F4E79');\" 
                    onmouseout=\"\$(this).css('box-shadow', 'none');\"
                    >
            </a>

            <ul>

                <li> Nom du fichier : ";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "Nom", array()), "html", null, true);
            echo " </li>

                ";
            // line 151
            if (($this->getAttribute($context["reference"], "Title", array()) != null)) {
                echo " <li> Titre : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "Title", array()), "html", null, true);
                echo " </li> ";
            }
            // line 152
            echo "
                ";
            // line 153
            if (($this->getAttribute($context["reference"], "Author", array()) != null)) {
                echo " <li> Auteur : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "Author", array()), "html", null, true);
                echo " </li> ";
            }
            // line 154
            echo "
                ";
            // line 155
            if (($this->getAttribute($context["reference"], "Subject", array()) != null)) {
                echo " <li> Sujet : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "Subject", array()), "html", null, true);
                echo " </li> ";
            }
            // line 156
            echo "
                ";
            // line 157
            if (($this->getAttribute($context["reference"], "Keywords", array()) != null)) {
                echo " <li> Mots : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "Keywords", array()), "html", null, true);
                echo " </li> ";
            }
            // line 158
            echo "
                ";
            // line 159
            if (($this->getAttribute($context["reference"], "Pages", array()) != null)) {
                echo " <li> Nombre de page(s) : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "Pages", array()), "html", null, true);
                echo " </li> ";
            }
            // line 160
            echo "
                <li> Posté le : ";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "dateEnvoi", array()), "html", null, true);
            echo " </li>

            </ul>

        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reference'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "
    <div id=\"choixPage\">

        ";
        // line 171
        if (((isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")) > 1)) {
            // line 172
            echo "
            <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->
            ";
            // line 174
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) > 1)) {
                // line 175
                echo "                <a href=\"";
                echo $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => 1));
                echo "\"> << </a>
            ";
            }
            // line 177
            echo "            <!-------------------------------------------------------------------------->

            <!-- Affiche un lien vers la page précédente si elle existe -->
            ";
            // line 180
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1) >= 1)) {
                // line 181
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1))), "html", null, true);
                echo "\"> < </a>
            ";
            }
            // line 183
            echo "            <!---------------------------------------------------------->

            <!-- Affichage des liens vers les pages précédente. -->
            ";
            // line 186
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1) >= 1)) {
                // line 187
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 188
                    echo "
                    ";
                    // line 189
                    if (($context["i"] >= ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 2))) {
                        // line 190
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => $context["i"])), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 192
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 194
                echo "            ";
            }
            // line 195
            echo "            <!--------------------------------------------------->

            <!-- Page courante -->
            <a href=\"";
            // line 198
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
            echo "\"> <p id=\"pageActuel\">";
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
            echo "</p> </a>
            <!------------------->

            <!-- Affichage des liens vers les pages suivantes. -->
            ";
            // line 202
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                // line 203
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1), (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 204
                    echo "
                    ";
                    // line 205
                    if (($context["i"] <= ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 2))) {
                        // line 206
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => $context["i"])), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 208
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 210
                echo "            ";
            }
            // line 211
            echo "            <!--------------------------------------------------->

            <!-- Affiche un lien vers la page suivante si elle existe -->
            ";
            // line 214
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                // line 215
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1))), "html", null, true);
                echo "\"> > </a>
            ";
            }
            // line 217
            echo "            <!------------------------------------------------------------>

            <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->
            ";
            // line 220
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) < (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                // line 221
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))), "html", null, true);
                echo "\"> >> </a>
            ";
            }
            // line 223
            echo "            <!-------------------------------------------------------------------------->

        ";
        }
        // line 226
        echo "
    </div>

";
        
        $__internal_c4ab5b19d97c56b2964693f7055eaf8e4754d46903ac707dfdb0ed5fc53460eb->leave($__internal_c4ab5b19d97c56b2964693f7055eaf8e4754d46903ac707dfdb0ed5fc53460eb_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:References:References.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  592 => 226,  587 => 223,  581 => 221,  579 => 220,  574 => 217,  568 => 215,  566 => 214,  561 => 211,  558 => 210,  551 => 208,  543 => 206,  541 => 205,  538 => 204,  533 => 203,  531 => 202,  522 => 198,  517 => 195,  514 => 194,  507 => 192,  499 => 190,  497 => 189,  494 => 188,  489 => 187,  487 => 186,  482 => 183,  476 => 181,  474 => 180,  469 => 177,  463 => 175,  461 => 174,  457 => 172,  455 => 171,  450 => 168,  437 => 161,  434 => 160,  428 => 159,  425 => 158,  419 => 157,  416 => 156,  410 => 155,  407 => 154,  401 => 153,  398 => 152,  392 => 151,  387 => 149,  374 => 141,  369 => 139,  364 => 136,  360 => 135,  355 => 132,  350 => 129,  344 => 127,  342 => 126,  337 => 123,  331 => 121,  329 => 120,  324 => 117,  321 => 116,  314 => 114,  306 => 112,  304 => 111,  301 => 110,  296 => 109,  294 => 108,  285 => 104,  280 => 101,  277 => 100,  270 => 98,  262 => 96,  260 => 95,  257 => 94,  252 => 93,  250 => 92,  245 => 89,  239 => 87,  237 => 86,  232 => 83,  226 => 81,  224 => 80,  220 => 78,  218 => 77,  213 => 74,  203 => 66,  201 => 65,  193 => 60,  188 => 58,  183 => 56,  176 => 51,  163 => 48,  154 => 47,  150 => 46,  145 => 43,  134 => 35,  131 => 34,  125 => 33,  117 => 30,  111 => 27,  106 => 25,  100 => 23,  94 => 20,  89 => 17,  84 => 15,  81 => 14,  79 => 13,  76 => 12,  72 => 11,  69 => 10,  63 => 9,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Références*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Références{% endblock %}*/
/* */
/* {% block textEncart %}*/
/* */
/*     {% if text is defined %}{{ text|raw }}{% endif %}*/
/* */
/*     {% if is_granted('ROLE_ADMIN') %}*/
/* */
/*         {{ form_start(formulaire, {'attr': {'id': 'formulaireTexteEncart' }}) }}*/
/* */
/*         {{ form_errors(formulaire) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(formulaire.text) }}*/
/* */
/*         {# Génération de l'input. #}*/
/*         {{ form_widget(formulaire.text, {'attr': {'class': 'textEncartField'}}) }}*/
/* */
/*         {{ form_end(formulaire) }}*/
/* */
/*         <img src='{{ asset('bundles/noxintranetressources/images/Text-Editor-32.png') }}' id='texteEncartImg'>*/
/* */
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     {% if is_granted('ROLE_REFERENCES') %} */
/* */
/*         <div id="menuAdminReferences" class='menuAdmin'>*/
/*             <h3> Interface de gestion de contenu </h3>*/
/*             <a onclick="openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/references', 'Gestionnaire de fichiers - Références');"> <h3>  Ouvrir le gestionnaire de fichier </h3> </a>*/
/*         </div>*/
/* */
/*     {% endif %}*/
/* */
/*     <div id="Keywords">*/
/*         <p>*/
/*             {% for keyword in keywords %}*/
/*                 <span style="font-size: calc(0.7vw + {% if keyword.Nombre/nombreMax < 1 %}{{ keyword.Nombre/nombreMax }}{% else %}1{% endif %}vw)">*/
/*                     <a href="{{ path('nox_intranet_references_recherche') }}?keyword={{ keyword.Keyword }}"> {{ keyword.Keyword }}</a>*/
/*                 </span>*/
/*             {% endfor %}*/
/*         </p>*/
/*     </div>*/
/* */
/*     <div id="rechercheUser">*/
/*         <div id="rechercheCompetencesDiv">*/
/*             <form action='{{ path('nox_intranet_references_recherche') }}' type='GET'>*/
/*                 <label for="keyword"> Rechercher par mots-clés : </label>*/
/*                 <input type="text" name='keyword' id="keyword" placeholder="{{ app.request.get('keyword') }}"/>*/
/*                 <input type="submit" name="Rechercher" value="Rechercher" class="boutonFormulaire" >*/
/*                 <button value="Annuler" class="boutonFormulaire" id="boutonAnnuler" onclick="{{ path('nox_intranet_references') }}"> RAZ </button>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% if references == null %}*/
/* */
/*         <div class="divNews">*/
/* */
/*             Votre recherche n'a retourné aucun résultat.*/
/* */
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
/*                 <a href="{{ path('nox_intranet_references', { 'page': 1}) }}"> << </a>*/
/*             {% endif %}*/
/*             <!-------------------------------------------------------------------------->*/
/* */
/*             <!-- Affiche un lien vers la page précédente si elle existe -->*/
/*             {% if page-1  >= 1 %}*/
/*                 <a href="{{ path('nox_intranet_references', { 'page': page-1}) }}"> < </a>*/
/*             {% endif %}*/
/*             <!---------------------------------------------------------->*/
/* */
/*             <!-- Affichage des liens vers les pages précédente. -->*/
/*             {% if page-1  >= 1 %}*/
/*                 {% for i in 1..page-1 %}*/
/* */
/*                     {% if i >= (page - 2) %}*/
/*                         <a href="{{ path('nox_intranet_references', { 'page': i}) }}"> {{ i }} </a>*/
/*                     {% endif %}*/
/* */
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             <!--------------------------------------------------->*/
/* */
/*             <!-- Page courante -->*/
/*             <a href="{{ path('nox_intranet_references', { 'page': page}) }}"> <p id="pageActuel">{{ page }}</p> </a>*/
/*             <!------------------->*/
/* */
/*             <!-- Affichage des liens vers les pages suivantes. -->*/
/*             {% if page+1  <= nbPage %}*/
/*                 {% for i in page+1..nbPage %}*/
/* */
/*                     {% if i <= (page + 2) %}*/
/*                         <a href="{{ path('nox_intranet_references', { 'page': i}) }}"> {{ i }} </a>*/
/*                     {% endif %}*/
/* */
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             <!--------------------------------------------------->*/
/* */
/*             <!-- Affiche un lien vers la page suivante si elle existe -->*/
/*             {% if page+1  <= nbPage %}*/
/*                 <a href="{{ path('nox_intranet_references', { 'page': page+1}) }}"> > </a>*/
/*             {% endif %}*/
/*             <!------------------------------------------------------------>*/
/* */
/*             <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->*/
/*             {% if page < nbPage %}*/
/*                 <a href="{{ path('nox_intranet_references', { 'page': nbPage}) }}"> >> </a>*/
/*             {% endif %}*/
/*             <!-------------------------------------------------------------------------->*/
/* */
/*         {% endif %}*/
/* */
/*     </div>*/
/* */
/*     {% for reference in references %}*/
/* */
/*         <div class="divNews">*/
/* */
/*             <a onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '{{ reference.Lien }}', 'RH');">*/
/*                 <img */
/*                     src="{{ app.request.schemeAndHttpHost }}/Symfony/web/ImagePDF/{{ reference.Nom|convert_encoding('UTF-8', 'ISO-8859-1') }}.png" alt="PDF" */
/*                     onmouseover="$(this).css('box-shadow', '0px 0px 10px #1F4E79');" */
/*                     onmouseout="$(this).css('box-shadow', 'none');"*/
/*                     >*/
/*             </a>*/
/* */
/*             <ul>*/
/* */
/*                 <li> Nom du fichier : {{ reference.Nom }} </li>*/
/* */
/*                 {% if reference.Title != null %} <li> Titre : {{ reference.Title }} </li> {% endif %}*/
/* */
/*                 {% if reference.Author != null %} <li> Auteur : {{ reference.Author }} </li> {% endif %}*/
/* */
/*                 {% if reference.Subject != null %} <li> Sujet : {{ reference.Subject }} </li> {% endif %}*/
/* */
/*                 {% if reference.Keywords != null %} <li> Mots : {{ reference.Keywords }} </li> {% endif %}*/
/* */
/*                 {% if reference.Pages != null %} <li> Nombre de page(s) : {{ reference.Pages }} </li> {% endif %}*/
/* */
/*                 <li> Posté le : {{ reference.dateEnvoi }} </li>*/
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
/*                 <a href="{{ path('nox_intranet_references', { 'page': 1}) }}"> << </a>*/
/*             {% endif %}*/
/*             <!-------------------------------------------------------------------------->*/
/* */
/*             <!-- Affiche un lien vers la page précédente si elle existe -->*/
/*             {% if page-1  >= 1 %}*/
/*                 <a href="{{ path('nox_intranet_references', { 'page': page-1}) }}"> < </a>*/
/*             {% endif %}*/
/*             <!---------------------------------------------------------->*/
/* */
/*             <!-- Affichage des liens vers les pages précédente. -->*/
/*             {% if page-1  >= 1 %}*/
/*                 {% for i in 1..page-1 %}*/
/* */
/*                     {% if i >= (page - 2) %}*/
/*                         <a href="{{ path('nox_intranet_references', { 'page': i}) }}"> {{ i }} </a>*/
/*                     {% endif %}*/
/* */
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             <!--------------------------------------------------->*/
/* */
/*             <!-- Page courante -->*/
/*             <a href="{{ path('nox_intranet_references', { 'page': page}) }}"> <p id="pageActuel">{{ page }}</p> </a>*/
/*             <!------------------->*/
/* */
/*             <!-- Affichage des liens vers les pages suivantes. -->*/
/*             {% if page+1  <= nbPage %}*/
/*                 {% for i in page+1..nbPage %}*/
/* */
/*                     {% if i <= (page + 2) %}*/
/*                         <a href="{{ path('nox_intranet_references', { 'page': i}) }}"> {{ i }} </a>*/
/*                     {% endif %}*/
/* */
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             <!--------------------------------------------------->*/
/* */
/*             <!-- Affiche un lien vers la page suivante si elle existe -->*/
/*             {% if page+1  <= nbPage %}*/
/*                 <a href="{{ path('nox_intranet_references', { 'page': page+1}) }}"> > </a>*/
/*             {% endif %}*/
/*             <!------------------------------------------------------------>*/
/* */
/*             <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->*/
/*             {% if page < nbPage %}*/
/*                 <a href="{{ path('nox_intranet_references', { 'page': nbPage}) }}"> >> </a>*/
/*             {% endif %}*/
/*             <!-------------------------------------------------------------------------->*/
/* */
/*         {% endif %}*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
