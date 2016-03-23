<?php

/* NoxIntranetRessourcesBundle:References:references.html.twig */
class __TwigTemplate_0a5ca07891f56b6fd5e1b8de98f78e299ed30314a280bfd6af0645da8f7f4dd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:References:references.html.twig", 1);
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
        $__internal_9a8c8647f5455360958303168e728175c53d906a5c053c68a3d6a9694e8e8be1 = $this->env->getExtension("native_profiler");
        $__internal_9a8c8647f5455360958303168e728175c53d906a5c053c68a3d6a9694e8e8be1->enter($__internal_9a8c8647f5455360958303168e728175c53d906a5c053c68a3d6a9694e8e8be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:References:references.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a8c8647f5455360958303168e728175c53d906a5c053c68a3d6a9694e8e8be1->leave($__internal_9a8c8647f5455360958303168e728175c53d906a5c053c68a3d6a9694e8e8be1_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_cc317fc1b42ebeae767d4527c554a8d8929a8215b663090329cb0ad258eec224 = $this->env->getExtension("native_profiler");
        $__internal_cc317fc1b42ebeae767d4527c554a8d8929a8215b663090329cb0ad258eec224->enter($__internal_cc317fc1b42ebeae767d4527c554a8d8929a8215b663090329cb0ad258eec224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Références
";
        
        $__internal_cc317fc1b42ebeae767d4527c554a8d8929a8215b663090329cb0ad258eec224->leave($__internal_cc317fc1b42ebeae767d4527c554a8d8929a8215b663090329cb0ad258eec224_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_f66cf5f5b48def057e739b5907ab35d0ab33dc8a99ca1e11cf3b6caa17927fc5 = $this->env->getExtension("native_profiler");
        $__internal_f66cf5f5b48def057e739b5907ab35d0ab33dc8a99ca1e11cf3b6caa17927fc5->enter($__internal_f66cf5f5b48def057e739b5907ab35d0ab33dc8a99ca1e11cf3b6caa17927fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Références";
        
        $__internal_f66cf5f5b48def057e739b5907ab35d0ab33dc8a99ca1e11cf3b6caa17927fc5->leave($__internal_f66cf5f5b48def057e739b5907ab35d0ab33dc8a99ca1e11cf3b6caa17927fc5_prof);

    }

    // line 9
    public function block_textEncart($context, array $blocks = array())
    {
        $__internal_e2cef93b2f155496d226708f892917acf4d30312fcd3efa8bc63283b18a45999 = $this->env->getExtension("native_profiler");
        $__internal_e2cef93b2f155496d226708f892917acf4d30312fcd3efa8bc63283b18a45999->enter($__internal_e2cef93b2f155496d226708f892917acf4d30312fcd3efa8bc63283b18a45999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textEncart"));

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
        if ($this->env->getExtension('security')->isGranted("ROLE_REFERENCES")) {
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
        
        $__internal_e2cef93b2f155496d226708f892917acf4d30312fcd3efa8bc63283b18a45999->leave($__internal_e2cef93b2f155496d226708f892917acf4d30312fcd3efa8bc63283b18a45999_prof);

    }

    // line 33
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_6177ad2531bac3256fd1be3b4ea4f1fa4e562d1ea5d6e0a729d7650ba0695c00 = $this->env->getExtension("native_profiler");
        $__internal_6177ad2531bac3256fd1be3b4ea4f1fa4e562d1ea5d6e0a729d7650ba0695c00->enter($__internal_6177ad2531bac3256fd1be3b4ea4f1fa4e562d1ea5d6e0a729d7650ba0695c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        <p> <span style=\"font-size: 0.8vw; color: #1F4E79;\"> Les mots-clés les plus présents : </span> </p>
        <p>
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["keywords"]) ? $context["keywords"] : $this->getContext($context, "keywords")));
        foreach ($context['_seq'] as $context["_key"] => $context["keyword"]) {
            // line 48
            echo "                <span style=\"font-size: calc(0.7vw + ";
            if ((($this->getAttribute($context["keyword"], "Nombre", array()) / (isset($context["nombreMax"]) ? $context["nombreMax"] : $this->getContext($context, "nombreMax"))) < 1)) {
                echo twig_escape_filter($this->env, ($this->getAttribute($context["keyword"], "Nombre", array()) / (isset($context["nombreMax"]) ? $context["nombreMax"] : $this->getContext($context, "nombreMax"))), "html", null, true);
            } else {
                echo "1";
            }
            echo "vw)\">
                    <a href=\"";
            // line 49
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
        // line 52
        echo "        </p>
    </div>

    <div id=\"rechercheUser\">
        <div id=\"rechercheCompetencesDiv\">
            <form action='";
        // line 57
        echo $this->env->getExtension('routing')->getPath("nox_intranet_references_recherche");
        echo "' type='GET'>
                <label for=\"keyword\"> Rechercher par mots-clés : </label>
                <input type=\"text\" name='keyword' id=\"keyword\" placeholder=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\"/>
                <input type=\"submit\" name=\"Rechercher\" value=\"Rechercher\" class=\"boutonFormulaire\" >
                <button value=\"Annuler\" class=\"boutonFormulaire\" id=\"boutonAnnuler\" onclick=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("nox_intranet_references");
        echo "\"> RAZ </button>
            </form>
        </div>
    </div>

    ";
        // line 66
        if (((isset($context["references"]) ? $context["references"] : $this->getContext($context, "references")) == null)) {
            // line 67
            echo "
        <div class=\"divNews\">

            Votre recherche n'a retourné aucun résultat.

        </div>

    ";
        }
        // line 75
        echo "
    <div id=\"choixPage\">

        ";
        // line 78
        if (((isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")) > 1)) {
            // line 79
            echo "
            <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->
            ";
            // line 81
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) > 1)) {
                // line 82
                echo "                <a href=\"";
                echo $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => 1));
                echo "\"> << </a>
            ";
            }
            // line 84
            echo "            <!-------------------------------------------------------------------------->

            <!-- Affiche un lien vers la page précédente si elle existe -->
            ";
            // line 87
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1) >= 1)) {
                // line 88
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1))), "html", null, true);
                echo "\"> < </a>
            ";
            }
            // line 90
            echo "            <!---------------------------------------------------------->

            <!-- Affichage des liens vers les pages précédente. -->
            ";
            // line 93
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1) >= 1)) {
                // line 94
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 95
                    echo "
                    ";
                    // line 96
                    if (($context["i"] >= ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 2))) {
                        // line 97
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => $context["i"])), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 99
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "            ";
            }
            // line 102
            echo "            <!--------------------------------------------------->

            <!-- Page courante -->
            <a href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
            echo "\"> <p id=\"pageActuel\">";
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
            echo "</p> </a>
            <!------------------->

            <!-- Affichage des liens vers les pages suivantes. -->
            ";
            // line 109
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                // line 110
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1), (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 111
                    echo "
                    ";
                    // line 112
                    if (($context["i"] <= ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 2))) {
                        // line 113
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => $context["i"])), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 115
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 117
                echo "            ";
            }
            // line 118
            echo "            <!--------------------------------------------------->

            <!-- Affiche un lien vers la page suivante si elle existe -->
            ";
            // line 121
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                // line 122
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1))), "html", null, true);
                echo "\"> > </a>
            ";
            }
            // line 124
            echo "            <!------------------------------------------------------------>

            <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->
            ";
            // line 127
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) < (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                // line 128
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))), "html", null, true);
                echo "\"> >> </a>
            ";
            }
            // line 130
            echo "            <!-------------------------------------------------------------------------->

        ";
        }
        // line 133
        echo "
    </div>

    ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["references"]) ? $context["references"] : $this->getContext($context, "references")));
        foreach ($context['_seq'] as $context["_key"] => $context["reference"]) {
            // line 137
            echo "
        <div class=\"divNews\">

            <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "Lien", array()), "html", null, true);
            echo "', 'RH');\">
                <img 
                    src=\"";
            // line 142
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
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "Nom", array()), "html", null, true);
            echo " </li>

                ";
            // line 152
            if (($this->getAttribute($context["reference"], "Title", array()) != null)) {
                echo " <li> Titre : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "Title", array()), "html", null, true);
                echo " </li> ";
            }
            // line 153
            echo "
                ";
            // line 154
            if (($this->getAttribute($context["reference"], "Author", array()) != null)) {
                echo " <li> Auteur : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "Author", array()), "html", null, true);
                echo " </li> ";
            }
            // line 155
            echo "
                ";
            // line 156
            if (($this->getAttribute($context["reference"], "Subject", array()) != null)) {
                echo " <li> Sujet : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "Subject", array()), "html", null, true);
                echo " </li> ";
            }
            // line 157
            echo "
                ";
            // line 158
            if (($this->getAttribute($context["reference"], "Keywords", array()) != null)) {
                echo " <li> Mots : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "Keywords", array()), "html", null, true);
                echo " </li> ";
            }
            // line 159
            echo "
                ";
            // line 160
            if (($this->getAttribute($context["reference"], "Pages", array()) != null)) {
                echo " <li> Nombre de page(s) : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "Pages", array()), "html", null, true);
                echo " </li> ";
            }
            // line 161
            echo "
                <li> Posté le : ";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "dateEnvoi", array()), "html", null, true);
            echo " </li>

            </ul>

        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reference'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "
    <div id=\"choixPage\">

        ";
        // line 172
        if (((isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")) > 1)) {
            // line 173
            echo "
            <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->
            ";
            // line 175
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) > 1)) {
                // line 176
                echo "                <a href=\"";
                echo $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => 1));
                echo "\"> << </a>
            ";
            }
            // line 178
            echo "            <!-------------------------------------------------------------------------->

            <!-- Affiche un lien vers la page précédente si elle existe -->
            ";
            // line 181
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1) >= 1)) {
                // line 182
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1))), "html", null, true);
                echo "\"> < </a>
            ";
            }
            // line 184
            echo "            <!---------------------------------------------------------->

            <!-- Affichage des liens vers les pages précédente. -->
            ";
            // line 187
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1) >= 1)) {
                // line 188
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 189
                    echo "
                    ";
                    // line 190
                    if (($context["i"] >= ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 2))) {
                        // line 191
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => $context["i"])), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 193
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 195
                echo "            ";
            }
            // line 196
            echo "            <!--------------------------------------------------->

            <!-- Page courante -->
            <a href=\"";
            // line 199
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
            echo "\"> <p id=\"pageActuel\">";
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
            echo "</p> </a>
            <!------------------->

            <!-- Affichage des liens vers les pages suivantes. -->
            ";
            // line 203
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                // line 204
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1), (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 205
                    echo "
                    ";
                    // line 206
                    if (($context["i"] <= ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 2))) {
                        // line 207
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => $context["i"])), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 209
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 211
                echo "            ";
            }
            // line 212
            echo "            <!--------------------------------------------------->

            <!-- Affiche un lien vers la page suivante si elle existe -->
            ";
            // line 215
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                // line 216
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1))), "html", null, true);
                echo "\"> > </a>
            ";
            }
            // line 218
            echo "            <!------------------------------------------------------------>

            <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->
            ";
            // line 221
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) < (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                // line 222
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))), "html", null, true);
                echo "\"> >> </a>
            ";
            }
            // line 224
            echo "            <!-------------------------------------------------------------------------->

        ";
        }
        // line 227
        echo "
    </div>

";
        
        $__internal_6177ad2531bac3256fd1be3b4ea4f1fa4e562d1ea5d6e0a729d7650ba0695c00->leave($__internal_6177ad2531bac3256fd1be3b4ea4f1fa4e562d1ea5d6e0a729d7650ba0695c00_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:References:references.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  593 => 227,  588 => 224,  582 => 222,  580 => 221,  575 => 218,  569 => 216,  567 => 215,  562 => 212,  559 => 211,  552 => 209,  544 => 207,  542 => 206,  539 => 205,  534 => 204,  532 => 203,  523 => 199,  518 => 196,  515 => 195,  508 => 193,  500 => 191,  498 => 190,  495 => 189,  490 => 188,  488 => 187,  483 => 184,  477 => 182,  475 => 181,  470 => 178,  464 => 176,  462 => 175,  458 => 173,  456 => 172,  451 => 169,  438 => 162,  435 => 161,  429 => 160,  426 => 159,  420 => 158,  417 => 157,  411 => 156,  408 => 155,  402 => 154,  399 => 153,  393 => 152,  388 => 150,  375 => 142,  370 => 140,  365 => 137,  361 => 136,  356 => 133,  351 => 130,  345 => 128,  343 => 127,  338 => 124,  332 => 122,  330 => 121,  325 => 118,  322 => 117,  315 => 115,  307 => 113,  305 => 112,  302 => 111,  297 => 110,  295 => 109,  286 => 105,  281 => 102,  278 => 101,  271 => 99,  263 => 97,  261 => 96,  258 => 95,  253 => 94,  251 => 93,  246 => 90,  240 => 88,  238 => 87,  233 => 84,  227 => 82,  225 => 81,  221 => 79,  219 => 78,  214 => 75,  204 => 67,  202 => 66,  194 => 61,  189 => 59,  184 => 57,  177 => 52,  164 => 49,  155 => 48,  151 => 47,  145 => 43,  134 => 35,  131 => 34,  125 => 33,  117 => 30,  111 => 27,  106 => 25,  100 => 23,  94 => 20,  89 => 17,  84 => 15,  81 => 14,  79 => 13,  76 => 12,  72 => 11,  69 => 10,  63 => 9,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
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
/*     {% if is_granted('ROLE_REFERENCES') %}*/
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
/*         <p> <span style="font-size: 0.8vw; color: #1F4E79;"> Les mots-clés les plus présents : </span> </p>*/
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
