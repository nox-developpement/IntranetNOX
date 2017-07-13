<?php

/* NoxIntranetAdministrationBundle:AdministrationUser:sauvegardeSelectionPage.html.twig */
class __TwigTemplate_6e6e626813a569e03c89e12a2feeb40b619ee878b1bd50c154b2ce16cc70831a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:AdministrationUser:sauvegardeSelectionPage.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_username", array("roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null))), "html", null, true);
        echo "' type='GET'>
                    <label for=\"recherche\"> Rechercher un utilisateur : </label>
                    <input type=\"text\" name='recherche' id=\"recherche\" />
                    <input type=\"submit\" name=\"Rechercher\" value=\"Rechercher\" class=\"boutonFormulaire\" >
                    <button type=\"button\" class=\"boutonFormulaire\" id=\"boutonAnnuler\" onclick=\"location.href = '";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_user");
        echo "';\"> RAZ </button>
                </form>


                <button class=\"boutonFormulaire\" id=\"boutonExport\" onclick=\"location.href = '";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_export_users");
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_USER"));
        echo "' class='tous'> <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_USER")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Tous</p> </a> </div> </div> </td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_ADMIN"));
        echo "' class='admin'> <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_ADMIN")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Admin </p> </a> </div></div></td>
                <td><div class=\"vertical-text\"> <div class=\"vertical-text__inner\"> <a href='";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_CE"));
        echo "' class='ce'>  <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_CE")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo " CE </p>  </a> </div></div></td>
                <td><div class=\"vertical-text\"> <div class=\"vertical-text__inner\"> <a href='";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_CHSCT"));
        echo "' class='CHSCT'>  <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_CHSCT")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo " CHSCT </p>  </a> </div></div></td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_COMMUNICATION"));
        echo "' class='communication'> <p> ";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_COMMUNICATION")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Communication  </p></a> </div></div></td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_COMPETENCES"));
        echo "' class='competences'> <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_COMPETENCES")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Compétences </p> </a></div></div> </td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_FAQ"));
        echo "' class='faq'> <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_FAQ")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo " FAQ </p> </a> </div></div></td>
                <td><div class=\"vertical-text\"> <div class=\"vertical-text__inner\"> <a href='";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_LIENS"));
        echo "' class='liens2'> <p> ";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_LIENS")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Liens </p>  </a> </div></div></td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_PROCEDURES"));
        echo "' class='procedures'> <p> ";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_PROCEDURES")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Procédures  </p></a> </div></div></td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_QUALITE"));
        echo "' class='qualite'>  <p> ";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_QUALITE")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Qualité </p>  </a></div></div> </td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_REFERENCES"));
        echo "' class='references'> <p> ";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "ROLE_REFERENCES")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Références </p> </a></div></div></td>
                <td><div class=\"vertical-text\"> <div class=\"vertical-text__inner\"> <a href='";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_user", array("roleUser" => "LOCAL"));
        echo "' class='local'>  <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : null) == "LOCAL")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo " Local </p>  </a> </div></div></td>
                <td><div class=\"vertical-text\"> <div class=\"vertical-text__inner\">  </td>
                            </tr>



                            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 52
            echo "                                <tr>
                                    <td> <p>  ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "agence", array()), "html", null, true);
            echo ") <p> </td>

                                    <td>
                                        <form type='GET' action='";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_user_edit", array("userID" => $this->getAttribute($context["user"], "id", array()), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null))), "html", null, true);
            echo "' id='userEdit' >
                                            <input type='checkbox' name='Admin' value='Admin' id='admin' onclick='checkboxAdminClick(this);'
                                                   ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 59
                echo "                                                       ";
                if (($context["role"] == "ROLE_ADMIN")) {
                    // line 60
                    echo "                                                           checked
                                                       ";
                }
                // line 62
                echo "                                                   ";
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
                echo "                                                           ";
                if (($context["role"] == "ROLE_CE")) {
                    // line 70
                    echo "                                                               checked
                                                           ";
                }
                // line 72
                echo "                                                       ";
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
                echo "                                                           ";
                if (($context["role"] == "ROLE_CHSCT")) {
                    // line 80
                    echo "                                                               checked
                                                           ";
                }
                // line 82
                echo "                                                       ";
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
                echo "                                                           ";
                if (($context["role"] == "ROLE_COMMUNICATION")) {
                    // line 90
                    echo "                                                               checked
                                                           ";
                }
                // line 92
                echo "                                                       ";
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
                echo "                                                           ";
                if (($context["role"] == "ROLE_COMPETENCES")) {
                    // line 100
                    echo "                                                               checked
                                                           ";
                }
                // line 102
                echo "                                                       ";
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
                echo "                                                           ";
                if (($context["role"] == "ROLE_FAQ")) {
                    // line 110
                    echo "                                                               checked
                                                           ";
                }
                // line 112
                echo "                                                       ";
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
                echo "                                                           ";
                if (($context["role"] == "ROLE_LIENS")) {
                    // line 120
                    echo "                                                               checked
                                                           ";
                }
                // line 122
                echo "                                                       ";
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
                echo "                                                           ";
                if (($context["role"] == "ROLE_PROCEDURES")) {
                    // line 130
                    echo "                                                               checked
                                                           ";
                }
                // line 132
                echo "                                                       ";
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
                echo "                                                           ";
                if (($context["role"] == "ROLE_QUALITE")) {
                    // line 140
                    echo "                                                               checked
                                                           ";
                }
                // line 142
                echo "                                                       ";
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
                echo "                                                           ";
                if (($context["role"] == "ROLE_REFERENCES")) {
                    // line 150
                    echo "                                                               checked
                                                           ";
                }
                // line 152
                echo "                                                       ";
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
                echo "                                                    oui
                                                ";
            } else {
                // line 160
                echo "                                                    non
                                                ";
            }
            // line 162
            echo "                                            </td>

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

                                ";
        // line 188
        if (((isset($context["recherche"]) ? $context["recherche"] : null) == true)) {
            // line 189
            echo "
                                    ";
            // line 190
            if (((isset($context["nbPage"]) ? $context["nbPage"] : null) > 1)) {
                echo " 

                                        nbPage > 1 !

                                        ";
                // line 194
                if (((isset($context["numPage"]) ? $context["numPage"] : null) > 2)) {
                    echo "                   

                                            <a href=\"";
                    // line 196
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_username", array("numPage" => 1, "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : null))), "html", null, true);
                    echo "\"> << </a>

                                            <a href=\"";
                    // line 198
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_username", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : null) - 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null))), "html", null, true);
                    echo "\"> < </a>

                                            ";
                    // line 200
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, 1));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 201
                        echo "
                                                <a href=\"";
                        // line 202
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_username", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : null) - $this->getAttribute($context["loop"], "revindex", array())), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : null))), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, ((isset($context["numPage"]) ? $context["numPage"] : null) - $this->getAttribute($context["loop"], "revindex", array())), "html", null, true);
                        echo " </a>

                                            ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 205
                    echo "
                                            <a href=\"";
                    // line 206
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_username", array("numPage" => (isset($context["numPage"]) ? $context["numPage"] : null), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : null))), "html", null, true);
                    echo "\" id=\"pageActuel\"> ";
                    echo twig_escape_filter($this->env, (isset($context["numPage"]) ? $context["numPage"] : null), "html", null, true);
                    echo " </a>

                                            ";
                    // line 208
                    if (((isset($context["numPage"]) ? $context["numPage"] : null) < (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                        // line 209
                        echo "
                                                ";
                        // line 210
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, 1));
                        $context['loop'] = array(
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        );
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 211
                            echo "
                                                    <a href=\"";
                            // line 212
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_username", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : null) + $this->getAttribute($context["loop"], "index", array())), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : null))), "html", null, true);
                            echo "\"> ";
                            echo twig_escape_filter($this->env, ((isset($context["numPage"]) ? $context["numPage"] : null) + $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                            echo " </a>

                                                ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 215
                        echo "
                                            ";
                    }
                    // line 217
                    echo "
                                        ";
                } else {
                    // line 218
                    echo "          

                                            Nombre de page = ";
                    // line 220
                    echo twig_escape_filter($this->env, (isset($context["numPage"]) ? $context["numPage"] : null), "html", null, true);
                    echo "

                                            ";
                    // line 222
                    if (((isset($context["numPage"]) ? $context["numPage"] : null) == 2)) {
                        echo " 

                                                numPage = 2 !

                                                <a href=\"";
                        // line 226
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_username", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : null) - 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : null))), "html", null, true);
                        echo "\"> < </a>

                                                <a href=\"";
                        // line 228
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_username", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : null) - 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : null))), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, ((isset($context["numPage"]) ? $context["numPage"] : null) - 1), "html", null, true);
                        echo " </a> ";
                    }
                    // line 229
                    echo "
                                                <a href=\"";
                    // line 230
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_username", array("numPage" => (isset($context["numPage"]) ? $context["numPage"] : null), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : null))), "html", null, true);
                    echo "\" id=\"pageActuel\"> ";
                    echo twig_escape_filter($this->env, (isset($context["numPage"]) ? $context["numPage"] : null), "html", null, true);
                    echo " </a>

                                                ";
                    // line 232
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, 1));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 233
                        echo "
                                                    <a href=\"";
                        // line 234
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_username", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : null) + $this->getAttribute($context["loop"], "index", array())), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : null))), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, ((isset($context["numPage"]) ? $context["numPage"] : null) + $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                        echo " </a>

                                                ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 236
                    echo "   

                                            ";
                }
                // line 239
                echo "
                                            ";
                // line 240
                if (((isset($context["numPage"]) ? $context["numPage"] : null) < (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                    // line 241
                    echo "
                                                <a href=\"";
                    // line 242
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_username", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : null) + 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : null))), "html", null, true);
                    echo "\"> > </a>

                                                <a href=\"";
                    // line 244
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_username", array("numPage" => (isset($context["nbPage"]) ? $context["nbPage"] : null), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : null))), "html", null, true);
                    echo "\"> >> </a>

                                            ";
                }
                // line 247
                echo "                                        ";
            }
            // line 248
            echo "                                    ";
        } else {
            // line 249
            echo "


                                        ";
            // line 252
            if (((isset($context["numPage"]) ? $context["numPage"] : null) > 2)) {
                // line 253
                echo "
                                            <a href=\"";
                // line 254
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_user", array("numPage" => 1, "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null))), "html", null, true);
                echo "\"> << </a>

                                            <a href=\"";
                // line 256
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_user", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : null) - 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null))), "html", null, true);
                echo "\"> < </a>

                                            ";
                // line 258
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, 1));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 259
                    echo "
                                                <a href=\"";
                    // line 260
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_user", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : null) - $this->getAttribute($context["loop"], "revindex", array())), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null))), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, ((isset($context["numPage"]) ? $context["numPage"] : null) - $this->getAttribute($context["loop"], "revindex", array())), "html", null, true);
                    echo " </a>

                                            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 263
                echo "

                                            <a href=\"";
                // line 265
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_user", array("numPage" => (isset($context["numPage"]) ? $context["numPage"] : null), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null))), "html", null, true);
                echo "\" id=\"pageActuel\"> ";
                echo twig_escape_filter($this->env, (isset($context["numPage"]) ? $context["numPage"] : null), "html", null, true);
                echo " </a>

                                            ";
                // line 267
                if (((isset($context["numPage"]) ? $context["numPage"] : null) < (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                    // line 268
                    echo "
                                                ";
                    // line 269
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, 1));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 270
                        echo "
                                                    <a href=\"";
                        // line 271
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_user", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : null) + $this->getAttribute($context["loop"], "index", array())), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null))), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, ((isset($context["numPage"]) ? $context["numPage"] : null) + $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                        echo " </a>

                                                ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 274
                    echo "
                                            ";
                }
                // line 276
                echo "
                                        ";
            } else {
                // line 277
                echo "              

                                            ";
                // line 279
                if (((isset($context["numPage"]) ? $context["numPage"] : null) == 2)) {
                    echo " 

                                                <a href=\"";
                    // line 281
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_user", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : null) - 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null))), "html", null, true);
                    echo "\"> < </a>

                                                <a href=\"";
                    // line 283
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_user", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : null) - 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null))), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, ((isset($context["numPage"]) ? $context["numPage"] : null) - 1), "html", null, true);
                    echo " </a> ";
                }
                // line 284
                echo "
                                                <a href=\"";
                // line 285
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_user", array("numPage" => (isset($context["numPage"]) ? $context["numPage"] : null), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null))), "html", null, true);
                echo "\" id=\"pageActuel\"> ";
                echo twig_escape_filter($this->env, (isset($context["numPage"]) ? $context["numPage"] : null), "html", null, true);
                echo " </a>

                                                ";
                // line 287
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, 1));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 288
                    echo "
                                                    <a href=\"";
                    // line 289
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_user", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : null) + $this->getAttribute($context["loop"], "index", array())), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null))), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, ((isset($context["numPage"]) ? $context["numPage"] : null) + $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                    echo " </a>

                                                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 291
                echo "   

                                            ";
            }
            // line 294
            echo "
                                        ";
        }
        // line 296
        echo "
                                        ";
        // line 297
        if (((isset($context["numPage"]) ? $context["numPage"] : null) < (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
            // line 298
            echo "
                                            <a href=\"";
            // line 299
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_user", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : null) + 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null))), "html", null, true);
            echo "\"> > </a>

                                            <a href=\"";
            // line 301
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_user", array("numPage" => (isset($context["nbPage"]) ? $context["nbPage"] : null), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : null))), "html", null, true);
            echo "\"> >> </a>

                                        ";
        }
        // line 304
        echo "
                                    </div>         

                                </div>
                                ";
    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:AdministrationUser:sauvegardeSelectionPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  967 => 304,  961 => 301,  956 => 299,  953 => 298,  951 => 297,  948 => 296,  944 => 294,  939 => 291,  920 => 289,  917 => 288,  900 => 287,  893 => 285,  890 => 284,  884 => 283,  879 => 281,  874 => 279,  870 => 277,  866 => 276,  862 => 274,  843 => 271,  840 => 270,  823 => 269,  820 => 268,  818 => 267,  811 => 265,  807 => 263,  788 => 260,  785 => 259,  768 => 258,  763 => 256,  758 => 254,  755 => 253,  753 => 252,  748 => 249,  745 => 248,  742 => 247,  736 => 244,  731 => 242,  728 => 241,  726 => 240,  723 => 239,  718 => 236,  699 => 234,  696 => 233,  679 => 232,  672 => 230,  669 => 229,  663 => 228,  658 => 226,  651 => 222,  646 => 220,  642 => 218,  638 => 217,  634 => 215,  615 => 212,  612 => 211,  595 => 210,  592 => 209,  590 => 208,  583 => 206,  580 => 205,  561 => 202,  558 => 201,  541 => 200,  536 => 198,  531 => 196,  526 => 194,  519 => 190,  516 => 189,  514 => 188,  509 => 185,  499 => 177,  497 => 176,  489 => 170,  476 => 162,  472 => 160,  468 => 158,  466 => 157,  454 => 152,  450 => 150,  447 => 149,  443 => 148,  430 => 142,  426 => 140,  423 => 139,  419 => 138,  406 => 132,  402 => 130,  399 => 129,  395 => 128,  382 => 122,  378 => 120,  375 => 119,  371 => 118,  358 => 112,  354 => 110,  351 => 109,  347 => 108,  334 => 102,  330 => 100,  327 => 99,  323 => 98,  310 => 92,  306 => 90,  303 => 89,  299 => 88,  286 => 82,  282 => 80,  279 => 79,  275 => 78,  262 => 72,  258 => 70,  255 => 69,  251 => 68,  238 => 62,  234 => 60,  231 => 59,  227 => 58,  222 => 56,  214 => 53,  211 => 52,  207 => 51,  192 => 45,  182 => 44,  172 => 43,  162 => 42,  152 => 41,  142 => 40,  132 => 39,  122 => 38,  112 => 37,  102 => 36,  92 => 35,  82 => 34,  66 => 21,  59 => 17,  52 => 13,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NoxIntranetAdministrationBundle:AdministrationUser:sauvegardeSelectionPage.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\AdministrationBundle/Resources/views/AdministrationUser/sauvegardeSelectionPage.html.twig");
    }
}
