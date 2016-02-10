<?php

/* NoxIntranetAdministrationBundle:AdministrationUser:administrationUser2.html.twig */
class __TwigTemplate_d372277782ff0d14d15a8cff97f35c79ce09991b62231b2b0753ee93a6b40862 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:AdministrationUser:administrationUser2.html.twig", 1);
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
        echo "Administration utilisateurs";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Administration utilisateurs";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <div id=\"divAdministrationUtilisateur\">

        <div id=\"rechercheUser\">
            <div id=\"rechercheUserDiv\">
                <form action='";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null))), "html", null, true);
        echo "' type='GET'>
                    <label for=\"recherche\"> Rechercher un utilisateur : </label>
                    <input type=\"text\" name='recherche' id=\"recherche\" />
                    <input type=\"submit\" name=\"Rechercher\" value=\"Rechercher\" class=\"boutonFormulaire\" >
                    <button type=\"button\" class=\"boutonFormulaire\" id=\"boutonAnnuler\" onclick=\"location.href = '";
        // line 17
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user");
        echo "';\"> RAZ </button>
                </form>


                <button class=\"boutonFormulaire\" id=\"boutonExport\" onclick=\"location.href = '";
        // line 21
        echo $this->env->getExtension('routing')->getPath("nox_intranet_export_users");
        echo "';\"> Export utilisateurs </button>
            </div>
        </div>

        <table>

            <tr>
                <td> Utilisateurs </td>
                <td colspan=11> Rôle </td>

                <td> Action </td>
            </tr>
            <tr>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 34
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_USER"));
        echo "' class='tous'> <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_USER")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Tous</p> </a> </div> </div> </td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 35
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_ADMIN"));
        echo "' class='admin'> <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_ADMIN")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Admin </p> </a> </div></div></td>
                <td><div class=\"vertical-text\"> <div class=\"vertical-text__inner\"> <a href='";
        // line 36
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_CE"));
        echo "' class='ce'>  <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_CE")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo " CE </p>  </a> </div></div></td>
                <td><div class=\"vertical-text\"> <div class=\"vertical-text__inner\"> <a href='";
        // line 37
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_CHSCT"));
        echo "' class='CHSCT'>  <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_CHSCT")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo " CHSCT </p>  </a> </div></div></td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 38
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_COMMUNICATION"));
        echo "' class='communication'> <p> ";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_COMMUNICATION")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Communication  </p></a> </div></div></td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 39
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_COMPETENCES"));
        echo "' class='competences'> <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_COMPETENCES")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Compétences </p> </a></div></div> </td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 40
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_FAQ"));
        echo "' class='faq'> <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_FAQ")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo " FAQ </p> </a> </div></div></td>
                <td><div class=\"vertical-text\"> <div class=\"vertical-text__inner\"> <a href='";
        // line 41
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_LIENS"));
        echo "' class='liens2'> <p> ";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_LIENS")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Liens </p>  </a> </div></div></td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 42
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_PROCEDURES"));
        echo "' class='procedures'> <p> ";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_PROCEDURES")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Procédures  </p></a> </div></div></td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 43
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_QUALITE"));
        echo "' class='qualite'>  <p> ";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_QUALITE")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Qualité </p>  </a></div></div> </td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 44
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_REFERENCES"));
        echo "' class='references'> <p> ";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_REFERENCES")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Références </p> </a></div></div></td>
                <td><div class=\"vertical-text\"> <div class=\"vertical-text__inner\"> <a href='";
        // line 45
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "LOCAL"));
        echo "' class='local'>  <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "LOCAL")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo " Local </p>  </a> </div></div></td>
                <td><div class=\"vertical-text\"> <div class=\"vertical-text__inner\"> </div> </div> </td>
            </tr>



            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 52
            echo "                <tr>
                    <td> <p>  ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "agence", array()), "html", null, true);
            echo ") <p> </td>

                    <td>
                        <form type='GET' action='";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_user_edit", array("userID" => $this->getAttribute($context["user"], "id", array()), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null))), "html", null, true);
            echo "' id='userEdit' >
                            <input type='checkbox' name='Admin' value='Admin' id='admin' onclick='checkboxAdminClick(this);'
                                   ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 59
                echo "                                       ";
                if (($context["role"] == "ROLE_ADMIN")) {
                    // line 60
                    echo "                                           checked
                                       ";
                }
                // line 62
                echo "                                   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "    
                                   >
                            </td>

                            <td>
                                <input type='checkbox' name='CE' value='CE' id='CE' onclick='checkboxPublicateurClick(this);'
                                       ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 69
                echo "                                           ";
                if (($context["role"] == "ROLE_CE")) {
                    // line 70
                    echo "                                               checked
                                           ";
                }
                // line 72
                echo "                                       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "   
                                       >
                            </td>

                            <td>
                                <input type='checkbox' name='CHSCT' value='CHSCT' id='CHSCT' onclick='checkboxPublicateurClick(this);'
                                       ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 79
                echo "                                           ";
                if (($context["role"] == "ROLE_CHSCT")) {
                    // line 80
                    echo "                                               checked
                                           ";
                }
                // line 82
                echo "                                       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "   
                                       >
                            </td>

                            <td>
                                <input type='checkbox' name='News' value='News' id='News' onclick='checkboxPublicateurClick(this);'
                                       ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 89
                echo "                                           ";
                if (($context["role"] == "ROLE_COMMUNICATION")) {
                    // line 90
                    echo "                                               checked
                                           ";
                }
                // line 92
                echo "                                       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "   
                                       >
                            </td>

                            <td>
                                <input type='checkbox' name='Competences' value='Competences' id='Competences' onclick='checkboxPublicateurClick(this);'
                                       ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 99
                echo "                                           ";
                if (($context["role"] == "ROLE_COMPETENCES")) {
                    // line 100
                    echo "                                               checked
                                           ";
                }
                // line 102
                echo "                                       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "   
                                       >
                            </td>

                            <td>
                                <input type='checkbox' name='FAQ' value='FAQ' id='FAQ' onclick='checkboxPublicateurClick(this);'
                                       ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 109
                echo "                                           ";
                if (($context["role"] == "ROLE_FAQ")) {
                    // line 110
                    echo "                                               checked
                                           ";
                }
                // line 112
                echo "                                       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "   
                                       >
                            </td>

                            <td>
                                <input type='checkbox' name='Liens' value='Liens' id='Liens' onclick='checkboxPublicateurClick(this);'
                                       ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 119
                echo "                                           ";
                if (($context["role"] == "ROLE_LIENS")) {
                    // line 120
                    echo "                                               checked
                                           ";
                }
                // line 122
                echo "                                       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "   
                                       >
                            </td>

                            <td>
                                <input type='checkbox' name='Procedures' value='Procedures' id='Procedures' onclick='checkboxPublicateurClick(this);'
                                       ";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 129
                echo "                                           ";
                if (($context["role"] == "ROLE_PROCEDURES")) {
                    // line 130
                    echo "                                               checked
                                           ";
                }
                // line 132
                echo "                                       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "   
                                       >
                            </td> 

                            <td>
                                <input type='checkbox' name='Qualite' value='Qualite' id='Qualite' onclick='checkboxPublicateurClick(this);'
                                       ";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 139
                echo "                                           ";
                if (($context["role"] == "ROLE_QUALITE")) {
                    // line 140
                    echo "                                               checked
                                           ";
                }
                // line 142
                echo "                                       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "   
                                       >
                            </td>

                            <td>
                                <input type='checkbox' name='References' value='References' id='References' onclick='checkboxPublicateurClick(this);'
                                       ";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 149
                echo "                                           ";
                if (($context["role"] == "ROLE_REFERENCES")) {
                    // line 150
                    echo "                                               checked
                                           ";
                }
                // line 152
                echo "                                       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "   
                                       >
                            </td>       

                            <td>
                                ";
            // line 157
            if ($this->getAttribute($context["user"], "local", array())) {
                // line 158
                echo "                                    oui
                                ";
            } else {
                // line 160
                echo "                                    non
                                ";
            }
            // line 162
            echo "                            </td>

                            <td>
                                <input type='submit' value='Modifier' class='modifier'>
                        </form>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "



        </table>

        ";
        // line 176
        if (((isset($context["utilisateurs"]) ? $context["utilisateurs"] : null) == null)) {
            // line 177
            echo "
            <div id='noResults'>

                Votre recherche n'a retourné aucun résultat.

            </div>

        ";
        }
        // line 185
        echo "
        <div id=\"choixPage\">

            <!-- Si une recherche est en cours. -->
            ";
        // line 189
        if (((isset($context["recherche"]) ? $context["recherche"] : null) == true)) {
            // line 190
            echo "
                ";
            // line 191
            if (((isset($context["nbPage"]) ? $context["nbPage"] : null) > 1)) {
                // line 192
                echo "
                    <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->
                    ";
                // line 194
                if (((isset($context["numPage"]) ? $context["numPage"] : null) > 1)) {
                    // line 195
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => 1, "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : null))), "html", null, true);
                    echo "\"> << </a>
                    ";
                }
                // line 197
                echo "                    <!-------------------------------------------------------------------------->

                    <!-- Affiche un lien vers la page précédente si elle existe -->
                    ";
                // line 200
                if ((((isset($context["numPage"]) ? $context["numPage"] : null) - 1) >= 1)) {
                    // line 201
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : null) - 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : null))), "html", null, true);
                    echo "\"> < </a>
                    ";
                }
                // line 203
                echo "                    <!---------------------------------------------------------->

                    <!-- Affichage des liens vers les pages précédente. -->
                    ";
                // line 206
                if ((((isset($context["numPage"]) ? $context["numPage"] : null) - 1) >= 1)) {
                    // line 207
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["numPage"]) ? $context["numPage"] : null) - 1)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 208
                        echo "
                            ";
                        // line 209
                        if (($context["i"] >= ((isset($context["numPage"]) ? $context["numPage"] : null) - 2))) {
                            // line 210
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => $context["i"], "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : null))), "html", null, true);
                            echo "\"> ";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo " </a>
                            ";
                        }
                        // line 212
                        echo "
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 214
                    echo "                    ";
                }
                // line 215
                echo "                    <!--------------------------------------------------->

                    <!-- Page courante -->
                    <a href=\"";
                // line 218
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => (isset($context["numPage"]) ? $context["numPage"] : null), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : null))), "html", null, true);
                echo "\"> <p id=\"pageActuel\">";
                echo twig_escape_filter($this->env, (isset($context["numPage"]) ? $context["numPage"] : null), "html", null, true);
                echo "</p> </a>
                    <!------------------->

                    <!-- Affichage des liens vers les pages suivantes. -->
                    ";
                // line 222
                if ((((isset($context["numPage"]) ? $context["numPage"] : null) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                    // line 223
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(((isset($context["numPage"]) ? $context["numPage"] : null) + 1), (isset($context["nbPage"]) ? $context["nbPage"] : null)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 224
                        echo "
                            ";
                        // line 225
                        if (($context["i"] <= ((isset($context["numPage"]) ? $context["numPage"] : null) + 2))) {
                            // line 226
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => $context["i"], "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : null))), "html", null, true);
                            echo "\"> ";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo " </a>
                            ";
                        }
                        // line 228
                        echo "
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 230
                    echo "                    ";
                }
                // line 231
                echo "                    <!--------------------------------------------------->

                    <!-- Affiche un lien vers la page suivante si elle existe -->
                    ";
                // line 234
                if ((((isset($context["numPage"]) ? $context["numPage"] : null) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                    // line 235
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : null) + 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : null))), "html", null, true);
                    echo "\"> > </a>
                    ";
                }
                // line 237
                echo "                    <!------------------------------------------------------------>

                    <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->
                    ";
                // line 240
                if (((isset($context["numPage"]) ? $context["numPage"] : null) < (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                    // line 241
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => (isset($context["nbPage"]) ? $context["nbPage"] : null), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : null))), "html", null, true);
                    echo "\"> >> </a>
                    ";
                }
                // line 243
                echo "                    <!-------------------------------------------------------------------------->

                ";
            }
            // line 246
            echo "
                <!-- Si pas de recherche. -->
            ";
        } else {
            // line 249
            echo "
                ";
            // line 250
            if (((isset($context["nbPage"]) ? $context["nbPage"] : null) > 1)) {
                // line 251
                echo "
                    <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->
                    ";
                // line 253
                if (((isset($context["numPage"]) ? $context["numPage"] : null) > 1)) {
                    // line 254
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => 1, "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null))), "html", null, true);
                    echo "\"> << </a>
                    ";
                }
                // line 256
                echo "                    <!-------------------------------------------------------------------------->

                    <!-- Affiche un lien vers la page précédente si elle existe -->
                    ";
                // line 259
                if ((((isset($context["numPage"]) ? $context["numPage"] : null) - 1) >= 1)) {
                    // line 260
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : null) - 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null))), "html", null, true);
                    echo "\"> < </a>
                    ";
                }
                // line 262
                echo "                    <!---------------------------------------------------------->

                    <!-- Affichage des liens vers les pages précédente. -->
                    ";
                // line 265
                if ((((isset($context["numPage"]) ? $context["numPage"] : null) - 1) >= 1)) {
                    // line 266
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["numPage"]) ? $context["numPage"] : null) - 1)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 267
                        echo "
                            <!-- Limite le nombre de pages précédentes. -->
                            ";
                        // line 269
                        if (($context["i"] >= ((isset($context["numPage"]) ? $context["numPage"] : null) - 2))) {
                            // line 270
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => $context["i"], "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null))), "html", null, true);
                            echo "\"> ";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo " </a>
                            ";
                        }
                        // line 272
                        echo "                            <!------------------------------------------->

                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 275
                    echo "                    ";
                }
                // line 276
                echo "                    <!--------------------------------------------------->

                    <!-- Page courante -->
                    <a href=\"";
                // line 279
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => (isset($context["numPage"]) ? $context["numPage"] : null), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null))), "html", null, true);
                echo "\"> <p id=\"pageActuel\"> ";
                echo twig_escape_filter($this->env, (isset($context["numPage"]) ? $context["numPage"] : null), "html", null, true);
                echo " </p> </a>
                    <!------------------->

                    <!-- Affichage des liens vers les pages suivantes. -->
                    ";
                // line 283
                if ((((isset($context["numPage"]) ? $context["numPage"] : null) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                    // line 284
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(((isset($context["numPage"]) ? $context["numPage"] : null) + 1), (isset($context["nbPage"]) ? $context["nbPage"] : null)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 285
                        echo "
                            <!-- Limite le nombre de pages suivantes. -->
                            ";
                        // line 287
                        if (($context["i"] <= ((isset($context["numPage"]) ? $context["numPage"] : null) + 2))) {
                            // line 288
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => $context["i"], "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null))), "html", null, true);
                            echo "\"> ";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo " </a>
                            ";
                        }
                        // line 290
                        echo "                            <!------------------------------------------>

                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 293
                    echo "                    ";
                }
                // line 294
                echo "                    <!--------------------------------------------------->

                    <!-- Affiche un lien vers la page suivante si elle existe -->
                    ";
                // line 297
                if ((((isset($context["numPage"]) ? $context["numPage"] : null) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                    // line 298
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : null) + 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null))), "html", null, true);
                    echo "\"> > </a>
                    ";
                }
                // line 300
                echo "                    <!------------------------------------------------------------>

                    <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->
                    ";
                // line 303
                if (((isset($context["numPage"]) ? $context["numPage"] : null) < (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                    // line 304
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => (isset($context["nbPage"]) ? $context["nbPage"] : null), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null))), "html", null, true);
                    echo "\"> >> </a>
                    ";
                }
                // line 306
                echo "                    <!-------------------------------------------------------------------------->

                ";
            }
            // line 309
            echo "
            ";
        }
        // line 311
        echo "            <!-------------------------->
        </div>         

    </div>
";
    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:AdministrationUser:administrationUser2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  810 => 311,  806 => 309,  801 => 306,  795 => 304,  793 => 303,  788 => 300,  782 => 298,  780 => 297,  775 => 294,  772 => 293,  764 => 290,  756 => 288,  754 => 287,  750 => 285,  745 => 284,  743 => 283,  734 => 279,  729 => 276,  726 => 275,  718 => 272,  710 => 270,  708 => 269,  704 => 267,  699 => 266,  697 => 265,  692 => 262,  686 => 260,  684 => 259,  679 => 256,  673 => 254,  671 => 253,  667 => 251,  665 => 250,  662 => 249,  657 => 246,  652 => 243,  646 => 241,  644 => 240,  639 => 237,  633 => 235,  631 => 234,  626 => 231,  623 => 230,  616 => 228,  608 => 226,  606 => 225,  603 => 224,  598 => 223,  596 => 222,  587 => 218,  582 => 215,  579 => 214,  572 => 212,  564 => 210,  562 => 209,  559 => 208,  554 => 207,  552 => 206,  547 => 203,  541 => 201,  539 => 200,  534 => 197,  528 => 195,  526 => 194,  522 => 192,  520 => 191,  517 => 190,  515 => 189,  509 => 185,  499 => 177,  497 => 176,  489 => 170,  476 => 162,  472 => 160,  468 => 158,  466 => 157,  454 => 152,  450 => 150,  447 => 149,  443 => 148,  430 => 142,  426 => 140,  423 => 139,  419 => 138,  406 => 132,  402 => 130,  399 => 129,  395 => 128,  382 => 122,  378 => 120,  375 => 119,  371 => 118,  358 => 112,  354 => 110,  351 => 109,  347 => 108,  334 => 102,  330 => 100,  327 => 99,  323 => 98,  310 => 92,  306 => 90,  303 => 89,  299 => 88,  286 => 82,  282 => 80,  279 => 79,  275 => 78,  262 => 72,  258 => 70,  255 => 69,  251 => 68,  238 => 62,  234 => 60,  231 => 59,  227 => 58,  222 => 56,  214 => 53,  211 => 52,  207 => 51,  192 => 45,  182 => 44,  172 => 43,  162 => 42,  152 => 41,  142 => 40,  132 => 39,  122 => 38,  112 => 37,  102 => 36,  92 => 35,  82 => 34,  66 => 21,  59 => 17,  52 => 13,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}Administration utilisateurs{% endblock %}*/
/* */
/* {% block messageAccueil %}Administration utilisateurs{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div id="divAdministrationUtilisateur">*/
/* */
/*         <div id="rechercheUser">*/
/*             <div id="rechercheUserDiv">*/
/*                 <form action='{{ path('nox_intranet_administration_username', {'roleUser': roleUser}) }}' type='GET'>*/
/*                     <label for="recherche"> Rechercher un utilisateur : </label>*/
/*                     <input type="text" name='recherche' id="recherche" />*/
/*                     <input type="submit" name="Rechercher" value="Rechercher" class="boutonFormulaire" >*/
/*                     <button type="button" class="boutonFormulaire" id="boutonAnnuler" onclick="location.href = '{{ path('nox_intranet_administration_user') }}';"> RAZ </button>*/
/*                 </form>*/
/* */
/* */
/*                 <button class="boutonFormulaire" id="boutonExport" onclick="location.href = '{{ path('nox_intranet_export_users') }}';"> Export utilisateurs </button>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <table>*/
/* */
/*             <tr>*/
/*                 <td> Utilisateurs </td>*/
/*                 <td colspan=11> Rôle </td>*/
/* */
/*                 <td> Action </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td> <div class="vertical-text"> <div class="vertical-text__inner"><a href='{{ path('nox_intranet_administration_user', {'roleUser': 'ROLE_USER'}) }}' class='tous'> <p>{% if roleUser == 'ROLE_USER' %}<img src="{{ asset('bundles/noxintranetadministration/images/Arrow.png') }}" class="imgRole"> {% endif %}Tous</p> </a> </div> </div> </td>*/
/*                 <td> <div class="vertical-text"> <div class="vertical-text__inner"><a href='{{ path('nox_intranet_administration_user', {'roleUser': 'ROLE_ADMIN'}) }}' class='admin'> <p>{% if roleUser == 'ROLE_ADMIN' %} <img src="{{ asset('bundles/noxintranetadministration/images/Arrow.png') }}" class="imgRole"> {% endif %}Admin </p> </a> </div></div></td>*/
/*                 <td><div class="vertical-text"> <div class="vertical-text__inner"> <a href='{{ path('nox_intranet_administration_user', {'roleUser': 'ROLE_CE'}) }}' class='ce'>  <p>{% if roleUser == 'ROLE_CE' %} <img src="{{ asset('bundles/noxintranetadministration/images/Arrow.png') }}" class="imgRole"> {% endif %} CE </p>  </a> </div></div></td>*/
/*                 <td><div class="vertical-text"> <div class="vertical-text__inner"> <a href='{{ path('nox_intranet_administration_user', {'roleUser': 'ROLE_CHSCT'}) }}' class='CHSCT'>  <p>{% if roleUser == 'ROLE_CHSCT' %} <img src="{{ asset('bundles/noxintranetadministration/images/Arrow.png') }}" class="imgRole"> {% endif %} CHSCT </p>  </a> </div></div></td>*/
/*                 <td> <div class="vertical-text"> <div class="vertical-text__inner"><a href='{{ path('nox_intranet_administration_user', {'roleUser': 'ROLE_COMMUNICATION'}) }}' class='communication'> <p> {% if roleUser == 'ROLE_COMMUNICATION' %} <img src="{{ asset('bundles/noxintranetadministration/images/Arrow.png') }}" class="imgRole"> {% endif %}Communication  </p></a> </div></div></td>*/
/*                 <td> <div class="vertical-text"> <div class="vertical-text__inner"><a href='{{ path('nox_intranet_administration_user', {'roleUser': 'ROLE_COMPETENCES'}) }}' class='competences'> <p>{% if roleUser == 'ROLE_COMPETENCES' %} <img src="{{ asset('bundles/noxintranetadministration/images/Arrow.png') }}" class="imgRole"> {% endif %}Compétences </p> </a></div></div> </td>*/
/*                 <td> <div class="vertical-text"> <div class="vertical-text__inner"><a href='{{ path('nox_intranet_administration_user', {'roleUser': 'ROLE_FAQ'}) }}' class='faq'> <p>{% if roleUser == 'ROLE_FAQ' %} <img src="{{ asset('bundles/noxintranetadministration/images/Arrow.png') }}" class="imgRole"> {% endif %} FAQ </p> </a> </div></div></td>*/
/*                 <td><div class="vertical-text"> <div class="vertical-text__inner"> <a href='{{ path('nox_intranet_administration_user', {'roleUser': 'ROLE_LIENS'}) }}' class='liens2'> <p> {% if roleUser == 'ROLE_LIENS' %} <img src="{{ asset('bundles/noxintranetadministration/images/Arrow.png') }}" class="imgRole"> {% endif %}Liens </p>  </a> </div></div></td>*/
/*                 <td> <div class="vertical-text"> <div class="vertical-text__inner"><a href='{{ path('nox_intranet_administration_user', {'roleUser': 'ROLE_PROCEDURES'}) }}' class='procedures'> <p> {% if roleUser == 'ROLE_PROCEDURES' %} <img src="{{ asset('bundles/noxintranetadministration/images/Arrow.png') }}" class="imgRole"> {% endif %}Procédures  </p></a> </div></div></td>*/
/*                 <td> <div class="vertical-text"> <div class="vertical-text__inner"><a href='{{ path('nox_intranet_administration_user', {'roleUser': 'ROLE_QUALITE'}) }}' class='qualite'>  <p> {% if roleUser == 'ROLE_QUALITE' %}<img src="{{ asset('bundles/noxintranetadministration/images/Arrow.png') }}" class="imgRole"> {% endif %}Qualité </p>  </a></div></div> </td>*/
/*                 <td> <div class="vertical-text"> <div class="vertical-text__inner"><a href='{{ path('nox_intranet_administration_user', {'roleUser': 'ROLE_REFERENCES'}) }}' class='references'> <p> {% if roleUser == 'ROLE_REFERENCES' %} <img src="{{ asset('bundles/noxintranetadministration/images/Arrow.png') }}" class="imgRole"> {% endif %}Références </p> </a></div></div></td>*/
/*                 <td><div class="vertical-text"> <div class="vertical-text__inner"> <a href='{{ path('nox_intranet_administration_user', {'roleUser': 'LOCAL'}) }}' class='local'>  <p>{% if roleUser == 'LOCAL' %} <img src="{{ asset('bundles/noxintranetadministration/images/Arrow.png') }}" class="imgRole"> {% endif %} Local </p>  </a> </div></div></td>*/
/*                 <td><div class="vertical-text"> <div class="vertical-text__inner"> </div> </div> </td>*/
/*             </tr>*/
/* */
/* */
/* */
/*             {% for user in utilisateurs %}*/
/*                 <tr>*/
/*                     <td> <p>  {{ user.username }} ({{user.agence}}) <p> </td>*/
/* */
/*                     <td>*/
/*                         <form type='GET' action='{{ path('nox_intranet_user_edit', {'userID': user.id, 'roleUser': roleUser }) }}' id='userEdit' >*/
/*                             <input type='checkbox' name='Admin' value='Admin' id='admin' onclick='checkboxAdminClick(this);'*/
/*                                    {% for role in user.roles %}*/
/*                                        {% if role == "ROLE_ADMIN" %}*/
/*                                            checked*/
/*                                        {% endif %}*/
/*                                    {% endfor %}    */
/*                                    >*/
/*                             </td>*/
/* */
/*                             <td>*/
/*                                 <input type='checkbox' name='CE' value='CE' id='CE' onclick='checkboxPublicateurClick(this);'*/
/*                                        {% for role in user.roles %}*/
/*                                            {% if role == "ROLE_CE" %}*/
/*                                                checked*/
/*                                            {% endif %}*/
/*                                        {% endfor %}   */
/*                                        >*/
/*                             </td>*/
/* */
/*                             <td>*/
/*                                 <input type='checkbox' name='CHSCT' value='CHSCT' id='CHSCT' onclick='checkboxPublicateurClick(this);'*/
/*                                        {% for role in user.roles %}*/
/*                                            {% if role == "ROLE_CHSCT" %}*/
/*                                                checked*/
/*                                            {% endif %}*/
/*                                        {% endfor %}   */
/*                                        >*/
/*                             </td>*/
/* */
/*                             <td>*/
/*                                 <input type='checkbox' name='News' value='News' id='News' onclick='checkboxPublicateurClick(this);'*/
/*                                        {% for role in user.roles %}*/
/*                                            {% if role == "ROLE_COMMUNICATION" %}*/
/*                                                checked*/
/*                                            {% endif %}*/
/*                                        {% endfor %}   */
/*                                        >*/
/*                             </td>*/
/* */
/*                             <td>*/
/*                                 <input type='checkbox' name='Competences' value='Competences' id='Competences' onclick='checkboxPublicateurClick(this);'*/
/*                                        {% for role in user.roles %}*/
/*                                            {% if role == "ROLE_COMPETENCES" %}*/
/*                                                checked*/
/*                                            {% endif %}*/
/*                                        {% endfor %}   */
/*                                        >*/
/*                             </td>*/
/* */
/*                             <td>*/
/*                                 <input type='checkbox' name='FAQ' value='FAQ' id='FAQ' onclick='checkboxPublicateurClick(this);'*/
/*                                        {% for role in user.roles %}*/
/*                                            {% if role == "ROLE_FAQ" %}*/
/*                                                checked*/
/*                                            {% endif %}*/
/*                                        {% endfor %}   */
/*                                        >*/
/*                             </td>*/
/* */
/*                             <td>*/
/*                                 <input type='checkbox' name='Liens' value='Liens' id='Liens' onclick='checkboxPublicateurClick(this);'*/
/*                                        {% for role in user.roles %}*/
/*                                            {% if role == "ROLE_LIENS" %}*/
/*                                                checked*/
/*                                            {% endif %}*/
/*                                        {% endfor %}   */
/*                                        >*/
/*                             </td>*/
/* */
/*                             <td>*/
/*                                 <input type='checkbox' name='Procedures' value='Procedures' id='Procedures' onclick='checkboxPublicateurClick(this);'*/
/*                                        {% for role in user.roles %}*/
/*                                            {% if role == "ROLE_PROCEDURES" %}*/
/*                                                checked*/
/*                                            {% endif %}*/
/*                                        {% endfor %}   */
/*                                        >*/
/*                             </td> */
/* */
/*                             <td>*/
/*                                 <input type='checkbox' name='Qualite' value='Qualite' id='Qualite' onclick='checkboxPublicateurClick(this);'*/
/*                                        {% for role in user.roles %}*/
/*                                            {% if role == "ROLE_QUALITE" %}*/
/*                                                checked*/
/*                                            {% endif %}*/
/*                                        {% endfor %}   */
/*                                        >*/
/*                             </td>*/
/* */
/*                             <td>*/
/*                                 <input type='checkbox' name='References' value='References' id='References' onclick='checkboxPublicateurClick(this);'*/
/*                                        {% for role in user.roles %}*/
/*                                            {% if role == "ROLE_REFERENCES" %}*/
/*                                                checked*/
/*                                            {% endif %}*/
/*                                        {% endfor %}   */
/*                                        >*/
/*                             </td>       */
/* */
/*                             <td>*/
/*                                 {% if user.local %}*/
/*                                     oui*/
/*                                 {% else %}*/
/*                                     non*/
/*                                 {% endif %}*/
/*                             </td>*/
/* */
/*                             <td>*/
/*                                 <input type='submit' value='Modifier' class='modifier'>*/
/*                         </form>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/* */
/* */
/* */
/* */
/*         </table>*/
/* */
/*         {% if utilisateurs == null %}*/
/* */
/*             <div id='noResults'>*/
/* */
/*                 Votre recherche n'a retourné aucun résultat.*/
/* */
/*             </div>*/
/* */
/*         {% endif %}*/
/* */
/*         <div id="choixPage">*/
/* */
/*             <!-- Si une recherche est en cours. -->*/
/*             {% if recherche == true %}*/
/* */
/*                 {% if nbPage > 1 %}*/
/* */
/*                     <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->*/
/*                     {% if numPage > 1 %}*/
/*                         <a href="{{ path('nox_intranet_administration_username', { 'numPage': 1, 'roleUser': roleUser, 'termeRecherche': termeRecherche}) }}"> << </a>*/
/*                     {% endif %}*/
/*                     <!-------------------------------------------------------------------------->*/
/* */
/*                     <!-- Affiche un lien vers la page précédente si elle existe -->*/
/*                     {% if numPage-1  >= 1 %}*/
/*                         <a href="{{ path('nox_intranet_administration_username', { 'numPage': numPage-1, 'roleUser': roleUser, 'termeRecherche': termeRecherche}) }}"> < </a>*/
/*                     {% endif %}*/
/*                     <!---------------------------------------------------------->*/
/* */
/*                     <!-- Affichage des liens vers les pages précédente. -->*/
/*                     {% if numPage-1  >= 1 %}*/
/*                         {% for i in 1..numPage-1 %}*/
/* */
/*                             {% if i >= (numPage - 2) %}*/
/*                                 <a href="{{ path('nox_intranet_administration_username', { 'numPage': i, 'roleUser': roleUser, 'termeRecherche': termeRecherche}) }}"> {{ i }} </a>*/
/*                             {% endif %}*/
/* */
/*                         {% endfor %}*/
/*                     {% endif %}*/
/*                     <!--------------------------------------------------->*/
/* */
/*                     <!-- Page courante -->*/
/*                     <a href="{{ path('nox_intranet_administration_username', { 'numPage': numPage, 'roleUser': roleUser, 'termeRecherche': termeRecherche}) }}"> <p id="pageActuel">{{ numPage }}</p> </a>*/
/*                     <!------------------->*/
/* */
/*                     <!-- Affichage des liens vers les pages suivantes. -->*/
/*                     {% if numPage+1  <= nbPage %}*/
/*                         {% for i in numPage+1..nbPage %}*/
/* */
/*                             {% if i <= (numPage + 2) %}*/
/*                                 <a href="{{ path('nox_intranet_administration_username', { 'numPage': i, 'roleUser': roleUser, 'termeRecherche': termeRecherche}) }}"> {{ i }} </a>*/
/*                             {% endif %}*/
/* */
/*                         {% endfor %}*/
/*                     {% endif %}*/
/*                     <!--------------------------------------------------->*/
/* */
/*                     <!-- Affiche un lien vers la page suivante si elle existe -->*/
/*                     {% if numPage+1  <= nbPage %}*/
/*                         <a href="{{ path('nox_intranet_administration_username', { 'numPage': numPage+1, 'roleUser': roleUser, 'termeRecherche': termeRecherche}) }}"> > </a>*/
/*                     {% endif %}*/
/*                     <!------------------------------------------------------------>*/
/* */
/*                     <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->*/
/*                     {% if numPage < nbPage %}*/
/*                         <a href="{{ path('nox_intranet_administration_username', { 'numPage': nbPage, 'roleUser': roleUser, 'termeRecherche': termeRecherche}) }}"> >> </a>*/
/*                     {% endif %}*/
/*                     <!-------------------------------------------------------------------------->*/
/* */
/*                 {% endif %}*/
/* */
/*                 <!-- Si pas de recherche. -->*/
/*             {% else %}*/
/* */
/*                 {% if nbPage > 1 %}*/
/* */
/*                     <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->*/
/*                     {% if numPage > 1 %}*/
/*                         <a href="{{ path('nox_intranet_administration_user', { 'numPage': 1, 'roleUser': roleUser }) }}"> << </a>*/
/*                     {% endif %}*/
/*                     <!-------------------------------------------------------------------------->*/
/* */
/*                     <!-- Affiche un lien vers la page précédente si elle existe -->*/
/*                     {% if numPage-1  >= 1 %}*/
/*                         <a href="{{ path('nox_intranet_administration_user', { 'numPage': numPage-1, 'roleUser': roleUser }) }}"> < </a>*/
/*                     {% endif %}*/
/*                     <!---------------------------------------------------------->*/
/* */
/*                     <!-- Affichage des liens vers les pages précédente. -->*/
/*                     {% if numPage-1  >= 1 %}*/
/*                         {% for i in 1..numPage-1 %}*/
/* */
/*                             <!-- Limite le nombre de pages précédentes. -->*/
/*                             {% if i >= (numPage - 2) %}*/
/*                                 <a href="{{ path('nox_intranet_administration_user', { 'numPage': i, 'roleUser': roleUser}) }}"> {{ i }} </a>*/
/*                             {% endif %}*/
/*                             <!------------------------------------------->*/
/* */
/*                         {% endfor %}*/
/*                     {% endif %}*/
/*                     <!--------------------------------------------------->*/
/* */
/*                     <!-- Page courante -->*/
/*                     <a href="{{ path('nox_intranet_administration_user', { 'numPage': numPage, 'roleUser': roleUser}) }}"> <p id="pageActuel"> {{ numPage }} </p> </a>*/
/*                     <!------------------->*/
/* */
/*                     <!-- Affichage des liens vers les pages suivantes. -->*/
/*                     {% if numPage+1  <= nbPage %}*/
/*                         {% for i in numPage+1..nbPage %}*/
/* */
/*                             <!-- Limite le nombre de pages suivantes. -->*/
/*                             {% if i <= (numPage + 2) %}*/
/*                                 <a href="{{ path('nox_intranet_administration_user', { 'numPage': i, 'roleUser': roleUser}) }}"> {{ i }} </a>*/
/*                             {% endif %}*/
/*                             <!------------------------------------------>*/
/* */
/*                         {% endfor %}*/
/*                     {% endif %}*/
/*                     <!--------------------------------------------------->*/
/* */
/*                     <!-- Affiche un lien vers la page suivante si elle existe -->*/
/*                     {% if numPage+1  <= nbPage %}*/
/*                         <a href="{{ path('nox_intranet_administration_user', { 'numPage': numPage+1, 'roleUser': roleUser }) }}"> > </a>*/
/*                     {% endif %}*/
/*                     <!------------------------------------------------------------>*/
/* */
/*                     <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->*/
/*                     {% if numPage < nbPage %}*/
/*                         <a href="{{ path('nox_intranet_administration_user', { 'numPage': nbPage, 'roleUser': roleUser }) }}"> >> </a>*/
/*                     {% endif %}*/
/*                     <!-------------------------------------------------------------------------->*/
/* */
/*                 {% endif %}*/
/* */
/*             {% endif %}*/
/*             <!-------------------------->*/
/*         </div>         */
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
