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
                <td colspan=12> Rôle </td>

                <td> Action </td>
            </tr>
            <tr>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 34
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_USER"));
        echo "' class='tous'> <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_USER")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Left-32.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Tous</p> </a> </div> </div> </td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 35
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_ADMIN"));
        echo "' class='admin'> <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_ADMIN")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Left-32.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Admin </p> </a> </div></div></td>
                <td><div class=\"vertical-text\"> <div class=\"vertical-text__inner\"> <a href='";
        // line 36
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_CE"));
        echo "' class='ce'>  <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_CE")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Left-32.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo " CE </p>  </a> </div></div></td>
                <td><div class=\"vertical-text\"> <div class=\"vertical-text__inner\"> <a href='";
        // line 37
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_CHSCT"));
        echo "' class='CHSCT'>  <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_CHSCT")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Left-32.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo " CHSCT </p>  </a> </div></div></td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 38
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_COMMUNICATION"));
        echo "' class='communication'> <p> ";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_COMMUNICATION")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Left-32.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Communication  </p></a> </div></div></td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 39
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_COMPETENCES"));
        echo "' class='competences'> <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_COMPETENCES")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Left-32.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Compétences </p> </a></div></div> </td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 40
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_FAQ"));
        echo "' class='faq'> <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_FAQ")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Left-32.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo " FAQ </p> </a> </div></div></td>
                <td><div class=\"vertical-text\"> <div class=\"vertical-text__inner\"> <a href='";
        // line 41
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_LIENS"));
        echo "' class='liens2'> <p> ";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_LIENS")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Left-32.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Liens </p>  </a> </div></div></td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 42
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_PROCEDURES"));
        echo "' class='procedures'> <p> ";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_PROCEDURES")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Left-32.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Procédures  </p></a> </div></div></td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 43
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_QUALITE"));
        echo "' class='qualite'>  <p> ";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_QUALITE")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Left-32.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Qualité </p>  </a></div></div> </td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 44
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_REFERENCES"));
        echo "' class='references'> <p> ";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_REFERENCES")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Left-32.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Références </p> </a></div></div></td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 45
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_RH"));
        echo "' class='RH'> <p> ";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_RH")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Left-32.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "RH </p> </a></div></div></td>
                <td><div class=\"vertical-text\"> <div class=\"vertical-text__inner\"> <a href='";
        // line 46
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "LOCAL"));
        echo "' class='local'>  <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "LOCAL")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Left-32.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo " Local </p>  </a> </div></div></td>
                <td><div class=\"vertical-text\"> <div class=\"vertical-text__inner\"> </div> </div> </td>
            </tr>



            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 53
            echo "                <tr>
                    <td> <p>  ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "agence", array()), "html", null, true);
            echo ") <p> </td>

                    <td>
                        <form type='GET' action='";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_user_edit", array("userID" => $this->getAttribute($context["user"], "id", array()), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null))), "html", null, true);
            echo "' id='userEdit' >
                            <input type='checkbox' name='Admin' value='Admin' id='admin' onclick='checkboxAdminClick(this);'
                                   ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 60
                echo "                                       ";
                if (($context["role"] == "ROLE_ADMIN")) {
                    // line 61
                    echo "                                           checked
                                       ";
                }
                // line 63
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
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 70
                echo "                                           ";
                if (($context["role"] == "ROLE_CE")) {
                    // line 71
                    echo "                                               checked
                                           ";
                }
                // line 73
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
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 80
                echo "                                           ";
                if (($context["role"] == "ROLE_CHSCT")) {
                    // line 81
                    echo "                                               checked
                                           ";
                }
                // line 83
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
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 90
                echo "                                           ";
                if (($context["role"] == "ROLE_COMMUNICATION")) {
                    // line 91
                    echo "                                               checked
                                           ";
                }
                // line 93
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
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 100
                echo "                                           ";
                if (($context["role"] == "ROLE_COMPETENCES")) {
                    // line 101
                    echo "                                               checked
                                           ";
                }
                // line 103
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
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 110
                echo "                                           ";
                if (($context["role"] == "ROLE_FAQ")) {
                    // line 111
                    echo "                                               checked
                                           ";
                }
                // line 113
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
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 120
                echo "                                           ";
                if (($context["role"] == "ROLE_LIENS")) {
                    // line 121
                    echo "                                               checked
                                           ";
                }
                // line 123
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
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 130
                echo "                                           ";
                if (($context["role"] == "ROLE_PROCEDURES")) {
                    // line 131
                    echo "                                               checked
                                           ";
                }
                // line 133
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
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 140
                echo "                                           ";
                if (($context["role"] == "ROLE_QUALITE")) {
                    // line 141
                    echo "                                               checked
                                           ";
                }
                // line 143
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
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 150
                echo "                                           ";
                if (($context["role"] == "ROLE_REFERENCES")) {
                    // line 151
                    echo "                                               checked
                                           ";
                }
                // line 153
                echo "                                       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "   
                                       >
                            </td>      

                            <td>
                                <input type='checkbox' name='RH' value='RH' id='RH' onclick='checkboxPublicateurClick(this);'
                                       ";
            // line 159
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 160
                echo "                                           ";
                if (($context["role"] == "ROLE_RH")) {
                    // line 161
                    echo "                                               checked
                                           ";
                }
                // line 163
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
            // line 168
            if ($this->getAttribute($context["user"], "local", array())) {
                // line 169
                echo "                                    oui
                                ";
            } else {
                // line 171
                echo "                                    non
                                ";
            }
            // line 173
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
        // line 181
        echo "



        </table>

        ";
        // line 187
        if (((isset($context["utilisateurs"]) ? $context["utilisateurs"] : null) == null)) {
            // line 188
            echo "
            <div id='noResults'>

                Votre recherche n'a retourné aucun résultat.

            </div>

        ";
        }
        // line 196
        echo "
        <div id=\"choixPage\">

            <!-- Si une recherche est en cours. -->
            ";
        // line 200
        if (((isset($context["recherche"]) ? $context["recherche"] : null) == true)) {
            // line 201
            echo "
                ";
            // line 202
            if (((isset($context["nbPage"]) ? $context["nbPage"] : null) > 1)) {
                // line 203
                echo "
                    <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->
                    ";
                // line 205
                if (((isset($context["numPage"]) ? $context["numPage"] : null) > 1)) {
                    // line 206
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => 1, "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : null))), "html", null, true);
                    echo "\"> << </a>
                    ";
                }
                // line 208
                echo "                    <!-------------------------------------------------------------------------->

                    <!-- Affiche un lien vers la page précédente si elle existe -->
                    ";
                // line 211
                if ((((isset($context["numPage"]) ? $context["numPage"] : null) - 1) >= 1)) {
                    // line 212
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : null) - 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : null))), "html", null, true);
                    echo "\"> < </a>
                    ";
                }
                // line 214
                echo "                    <!---------------------------------------------------------->

                    <!-- Affichage des liens vers les pages précédente. -->
                    ";
                // line 217
                if ((((isset($context["numPage"]) ? $context["numPage"] : null) - 1) >= 1)) {
                    // line 218
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["numPage"]) ? $context["numPage"] : null) - 1)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 219
                        echo "
                            ";
                        // line 220
                        if (($context["i"] >= ((isset($context["numPage"]) ? $context["numPage"] : null) - 2))) {
                            // line 221
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => $context["i"], "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : null))), "html", null, true);
                            echo "\"> ";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo " </a>
                            ";
                        }
                        // line 223
                        echo "
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 225
                    echo "                    ";
                }
                // line 226
                echo "                    <!--------------------------------------------------->

                    <!-- Page courante -->
                    <a href=\"";
                // line 229
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => (isset($context["numPage"]) ? $context["numPage"] : null), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : null))), "html", null, true);
                echo "\"> <p id=\"pageActuel\">";
                echo twig_escape_filter($this->env, (isset($context["numPage"]) ? $context["numPage"] : null), "html", null, true);
                echo "</p> </a>
                    <!------------------->

                    <!-- Affichage des liens vers les pages suivantes. -->
                    ";
                // line 233
                if ((((isset($context["numPage"]) ? $context["numPage"] : null) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                    // line 234
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(((isset($context["numPage"]) ? $context["numPage"] : null) + 1), (isset($context["nbPage"]) ? $context["nbPage"] : null)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 235
                        echo "
                            ";
                        // line 236
                        if (($context["i"] <= ((isset($context["numPage"]) ? $context["numPage"] : null) + 2))) {
                            // line 237
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => $context["i"], "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : null))), "html", null, true);
                            echo "\"> ";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo " </a>
                            ";
                        }
                        // line 239
                        echo "
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 241
                    echo "                    ";
                }
                // line 242
                echo "                    <!--------------------------------------------------->

                    <!-- Affiche un lien vers la page suivante si elle existe -->
                    ";
                // line 245
                if ((((isset($context["numPage"]) ? $context["numPage"] : null) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                    // line 246
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : null) + 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : null))), "html", null, true);
                    echo "\"> > </a>
                    ";
                }
                // line 248
                echo "                    <!------------------------------------------------------------>

                    <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->
                    ";
                // line 251
                if (((isset($context["numPage"]) ? $context["numPage"] : null) < (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                    // line 252
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => (isset($context["nbPage"]) ? $context["nbPage"] : null), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : null))), "html", null, true);
                    echo "\"> >> </a>
                    ";
                }
                // line 254
                echo "                    <!-------------------------------------------------------------------------->

                ";
            }
            // line 257
            echo "
                <!-- Si pas de recherche. -->
            ";
        } else {
            // line 260
            echo "
                ";
            // line 261
            if (((isset($context["nbPage"]) ? $context["nbPage"] : null) > 1)) {
                // line 262
                echo "
                    <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->
                    ";
                // line 264
                if (((isset($context["numPage"]) ? $context["numPage"] : null) > 1)) {
                    // line 265
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => 1, "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null))), "html", null, true);
                    echo "\"> << </a>
                    ";
                }
                // line 267
                echo "                    <!-------------------------------------------------------------------------->

                    <!-- Affiche un lien vers la page précédente si elle existe -->
                    ";
                // line 270
                if ((((isset($context["numPage"]) ? $context["numPage"] : null) - 1) >= 1)) {
                    // line 271
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : null) - 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null))), "html", null, true);
                    echo "\"> < </a>
                    ";
                }
                // line 273
                echo "                    <!---------------------------------------------------------->

                    <!-- Affichage des liens vers les pages précédente. -->
                    ";
                // line 276
                if ((((isset($context["numPage"]) ? $context["numPage"] : null) - 1) >= 1)) {
                    // line 277
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["numPage"]) ? $context["numPage"] : null) - 1)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 278
                        echo "
                            <!-- Limite le nombre de pages précédentes. -->
                            ";
                        // line 280
                        if (($context["i"] >= ((isset($context["numPage"]) ? $context["numPage"] : null) - 2))) {
                            // line 281
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => $context["i"], "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null))), "html", null, true);
                            echo "\"> ";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo " </a>
                            ";
                        }
                        // line 283
                        echo "                            <!------------------------------------------->

                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 286
                    echo "                    ";
                }
                // line 287
                echo "                    <!--------------------------------------------------->

                    <!-- Page courante -->
                    <a href=\"";
                // line 290
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => (isset($context["numPage"]) ? $context["numPage"] : null), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null))), "html", null, true);
                echo "\"> <p id=\"pageActuel\"> ";
                echo twig_escape_filter($this->env, (isset($context["numPage"]) ? $context["numPage"] : null), "html", null, true);
                echo " </p> </a>
                    <!------------------->

                    <!-- Affichage des liens vers les pages suivantes. -->
                    ";
                // line 294
                if ((((isset($context["numPage"]) ? $context["numPage"] : null) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                    // line 295
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(((isset($context["numPage"]) ? $context["numPage"] : null) + 1), (isset($context["nbPage"]) ? $context["nbPage"] : null)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 296
                        echo "
                            <!-- Limite le nombre de pages suivantes. -->
                            ";
                        // line 298
                        if (($context["i"] <= ((isset($context["numPage"]) ? $context["numPage"] : null) + 2))) {
                            // line 299
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => $context["i"], "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null))), "html", null, true);
                            echo "\"> ";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo " </a>
                            ";
                        }
                        // line 301
                        echo "                            <!------------------------------------------>

                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 304
                    echo "                    ";
                }
                // line 305
                echo "                    <!--------------------------------------------------->

                    <!-- Affiche un lien vers la page suivante si elle existe -->
                    ";
                // line 308
                if ((((isset($context["numPage"]) ? $context["numPage"] : null) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                    // line 309
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : null) + 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null))), "html", null, true);
                    echo "\"> > </a>
                    ";
                }
                // line 311
                echo "                    <!------------------------------------------------------------>

                    <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->
                    ";
                // line 314
                if (((isset($context["numPage"]) ? $context["numPage"] : null) < (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                    // line 315
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => (isset($context["nbPage"]) ? $context["nbPage"] : null), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null))), "html", null, true);
                    echo "\"> >> </a>
                    ";
                }
                // line 317
                echo "                    <!-------------------------------------------------------------------------->

                ";
            }
            // line 320
            echo "
            ";
        }
        // line 322
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
        return array (  844 => 322,  840 => 320,  835 => 317,  829 => 315,  827 => 314,  822 => 311,  816 => 309,  814 => 308,  809 => 305,  806 => 304,  798 => 301,  790 => 299,  788 => 298,  784 => 296,  779 => 295,  777 => 294,  768 => 290,  763 => 287,  760 => 286,  752 => 283,  744 => 281,  742 => 280,  738 => 278,  733 => 277,  731 => 276,  726 => 273,  720 => 271,  718 => 270,  713 => 267,  707 => 265,  705 => 264,  701 => 262,  699 => 261,  696 => 260,  691 => 257,  686 => 254,  680 => 252,  678 => 251,  673 => 248,  667 => 246,  665 => 245,  660 => 242,  657 => 241,  650 => 239,  642 => 237,  640 => 236,  637 => 235,  632 => 234,  630 => 233,  621 => 229,  616 => 226,  613 => 225,  606 => 223,  598 => 221,  596 => 220,  593 => 219,  588 => 218,  586 => 217,  581 => 214,  575 => 212,  573 => 211,  568 => 208,  562 => 206,  560 => 205,  556 => 203,  554 => 202,  551 => 201,  549 => 200,  543 => 196,  533 => 188,  531 => 187,  523 => 181,  510 => 173,  506 => 171,  502 => 169,  500 => 168,  488 => 163,  484 => 161,  481 => 160,  477 => 159,  464 => 153,  460 => 151,  457 => 150,  453 => 149,  440 => 143,  436 => 141,  433 => 140,  429 => 139,  416 => 133,  412 => 131,  409 => 130,  405 => 129,  392 => 123,  388 => 121,  385 => 120,  381 => 119,  368 => 113,  364 => 111,  361 => 110,  357 => 109,  344 => 103,  340 => 101,  337 => 100,  333 => 99,  320 => 93,  316 => 91,  313 => 90,  309 => 89,  296 => 83,  292 => 81,  289 => 80,  285 => 79,  272 => 73,  268 => 71,  265 => 70,  261 => 69,  248 => 63,  244 => 61,  241 => 60,  237 => 59,  232 => 57,  224 => 54,  221 => 53,  217 => 52,  202 => 46,  192 => 45,  182 => 44,  172 => 43,  162 => 42,  152 => 41,  142 => 40,  132 => 39,  122 => 38,  112 => 37,  102 => 36,  92 => 35,  82 => 34,  66 => 21,  59 => 17,  52 => 13,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
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
/*                 <td colspan=12> Rôle </td>*/
/* */
/*                 <td> Action </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td> <div class="vertical-text"> <div class="vertical-text__inner"><a href='{{ path('nox_intranet_administration_user', {'roleUser': 'ROLE_USER'}) }}' class='tous'> <p>{% if roleUser == 'ROLE_USER' %}<img src="{{ asset('bundles/noxintranetadministration/images/Arrow-Left-32.png') }}" class="imgRole"> {% endif %}Tous</p> </a> </div> </div> </td>*/
/*                 <td> <div class="vertical-text"> <div class="vertical-text__inner"><a href='{{ path('nox_intranet_administration_user', {'roleUser': 'ROLE_ADMIN'}) }}' class='admin'> <p>{% if roleUser == 'ROLE_ADMIN' %} <img src="{{ asset('bundles/noxintranetadministration/images/Arrow-Left-32.png') }}" class="imgRole"> {% endif %}Admin </p> </a> </div></div></td>*/
/*                 <td><div class="vertical-text"> <div class="vertical-text__inner"> <a href='{{ path('nox_intranet_administration_user', {'roleUser': 'ROLE_CE'}) }}' class='ce'>  <p>{% if roleUser == 'ROLE_CE' %} <img src="{{ asset('bundles/noxintranetadministration/images/Arrow-Left-32.png') }}" class="imgRole"> {% endif %} CE </p>  </a> </div></div></td>*/
/*                 <td><div class="vertical-text"> <div class="vertical-text__inner"> <a href='{{ path('nox_intranet_administration_user', {'roleUser': 'ROLE_CHSCT'}) }}' class='CHSCT'>  <p>{% if roleUser == 'ROLE_CHSCT' %} <img src="{{ asset('bundles/noxintranetadministration/images/Arrow-Left-32.png') }}" class="imgRole"> {% endif %} CHSCT </p>  </a> </div></div></td>*/
/*                 <td> <div class="vertical-text"> <div class="vertical-text__inner"><a href='{{ path('nox_intranet_administration_user', {'roleUser': 'ROLE_COMMUNICATION'}) }}' class='communication'> <p> {% if roleUser == 'ROLE_COMMUNICATION' %} <img src="{{ asset('bundles/noxintranetadministration/images/Arrow-Left-32.png') }}" class="imgRole"> {% endif %}Communication  </p></a> </div></div></td>*/
/*                 <td> <div class="vertical-text"> <div class="vertical-text__inner"><a href='{{ path('nox_intranet_administration_user', {'roleUser': 'ROLE_COMPETENCES'}) }}' class='competences'> <p>{% if roleUser == 'ROLE_COMPETENCES' %} <img src="{{ asset('bundles/noxintranetadministration/images/Arrow-Left-32.png') }}" class="imgRole"> {% endif %}Compétences </p> </a></div></div> </td>*/
/*                 <td> <div class="vertical-text"> <div class="vertical-text__inner"><a href='{{ path('nox_intranet_administration_user', {'roleUser': 'ROLE_FAQ'}) }}' class='faq'> <p>{% if roleUser == 'ROLE_FAQ' %} <img src="{{ asset('bundles/noxintranetadministration/images/Arrow-Left-32.png') }}" class="imgRole"> {% endif %} FAQ </p> </a> </div></div></td>*/
/*                 <td><div class="vertical-text"> <div class="vertical-text__inner"> <a href='{{ path('nox_intranet_administration_user', {'roleUser': 'ROLE_LIENS'}) }}' class='liens2'> <p> {% if roleUser == 'ROLE_LIENS' %} <img src="{{ asset('bundles/noxintranetadministration/images/Arrow-Left-32.png') }}" class="imgRole"> {% endif %}Liens </p>  </a> </div></div></td>*/
/*                 <td> <div class="vertical-text"> <div class="vertical-text__inner"><a href='{{ path('nox_intranet_administration_user', {'roleUser': 'ROLE_PROCEDURES'}) }}' class='procedures'> <p> {% if roleUser == 'ROLE_PROCEDURES' %} <img src="{{ asset('bundles/noxintranetadministration/images/Arrow-Left-32.png') }}" class="imgRole"> {% endif %}Procédures  </p></a> </div></div></td>*/
/*                 <td> <div class="vertical-text"> <div class="vertical-text__inner"><a href='{{ path('nox_intranet_administration_user', {'roleUser': 'ROLE_QUALITE'}) }}' class='qualite'>  <p> {% if roleUser == 'ROLE_QUALITE' %}<img src="{{ asset('bundles/noxintranetadministration/images/Arrow-Left-32.png') }}" class="imgRole"> {% endif %}Qualité </p>  </a></div></div> </td>*/
/*                 <td> <div class="vertical-text"> <div class="vertical-text__inner"><a href='{{ path('nox_intranet_administration_user', {'roleUser': 'ROLE_REFERENCES'}) }}' class='references'> <p> {% if roleUser == 'ROLE_REFERENCES' %} <img src="{{ asset('bundles/noxintranetadministration/images/Arrow-Left-32.png') }}" class="imgRole"> {% endif %}Références </p> </a></div></div></td>*/
/*                 <td> <div class="vertical-text"> <div class="vertical-text__inner"><a href='{{ path('nox_intranet_administration_user', {'roleUser': 'ROLE_RH'}) }}' class='RH'> <p> {% if roleUser == 'ROLE_RH' %} <img src="{{ asset('bundles/noxintranetadministration/images/Arrow-Left-32.png') }}" class="imgRole"> {% endif %}RH </p> </a></div></div></td>*/
/*                 <td><div class="vertical-text"> <div class="vertical-text__inner"> <a href='{{ path('nox_intranet_administration_user', {'roleUser': 'LOCAL'}) }}' class='local'>  <p>{% if roleUser == 'LOCAL' %} <img src="{{ asset('bundles/noxintranetadministration/images/Arrow-Left-32.png') }}" class="imgRole"> {% endif %} Local </p>  </a> </div></div></td>*/
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
/*                             </td>      */
/* */
/*                             <td>*/
/*                                 <input type='checkbox' name='RH' value='RH' id='RH' onclick='checkboxPublicateurClick(this);'*/
/*                                        {% for role in user.roles %}*/
/*                                            {% if role == "ROLE_RH" %}*/
/*                                                checked*/
/*                                            {% endif %}*/
/*                                        {% endfor %}   */
/*                                        >*/
/*                             </td>    */
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
