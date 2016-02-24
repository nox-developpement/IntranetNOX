<?php

/* @NoxIntranetAdministration/AdministrationUser/sauvegardeSelectionPage.html.twig */
class __TwigTemplate_75cd8c6b087d4219e7cb71665341560ac17f13c87ae75c985ff74d75c1d59fd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetAdministration/AdministrationUser/sauvegardeSelectionPage.html.twig", 1);
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
        $__internal_99087ddd87b951e13947861f417745547e4122d87c7c14a68f3cc959c366dee1 = $this->env->getExtension("native_profiler");
        $__internal_99087ddd87b951e13947861f417745547e4122d87c7c14a68f3cc959c366dee1->enter($__internal_99087ddd87b951e13947861f417745547e4122d87c7c14a68f3cc959c366dee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetAdministration/AdministrationUser/sauvegardeSelectionPage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99087ddd87b951e13947861f417745547e4122d87c7c14a68f3cc959c366dee1->leave($__internal_99087ddd87b951e13947861f417745547e4122d87c7c14a68f3cc959c366dee1_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_0f0bc652673dd8eb7a738da653359001e8810362db3e1651f4bd7d7ed68b7740 = $this->env->getExtension("native_profiler");
        $__internal_0f0bc652673dd8eb7a738da653359001e8810362db3e1651f4bd7d7ed68b7740->enter($__internal_0f0bc652673dd8eb7a738da653359001e8810362db3e1651f4bd7d7ed68b7740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo "Administration utilisateurs";
        
        $__internal_0f0bc652673dd8eb7a738da653359001e8810362db3e1651f4bd7d7ed68b7740->leave($__internal_0f0bc652673dd8eb7a738da653359001e8810362db3e1651f4bd7d7ed68b7740_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_a5c55e50bb2c0d2b70724fd8cfcec7de987b10fced1c26fbf9b0cdd32a40fc1d = $this->env->getExtension("native_profiler");
        $__internal_a5c55e50bb2c0d2b70724fd8cfcec7de987b10fced1c26fbf9b0cdd32a40fc1d->enter($__internal_a5c55e50bb2c0d2b70724fd8cfcec7de987b10fced1c26fbf9b0cdd32a40fc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration utilisateurs";
        
        $__internal_a5c55e50bb2c0d2b70724fd8cfcec7de987b10fced1c26fbf9b0cdd32a40fc1d->leave($__internal_a5c55e50bb2c0d2b70724fd8cfcec7de987b10fced1c26fbf9b0cdd32a40fc1d_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_f65f3d54b198bee45e61c05e70a639d656d9e82c2ebabe81b3698c50e7befeda = $this->env->getExtension("native_profiler");
        $__internal_f65f3d54b198bee45e61c05e70a639d656d9e82c2ebabe81b3698c50e7befeda->enter($__internal_f65f3d54b198bee45e61c05e70a639d656d9e82c2ebabe81b3698c50e7befeda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div id=\"divAdministrationUtilisateur\">

        <div id=\"rechercheUser\">
            <div id=\"rechercheUserDiv\">
                <form action='";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
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
        if (((isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")) == "ROLE_USER")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Tous</p> </a> </div> </div> </td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 35
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_ADMIN"));
        echo "' class='admin'> <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")) == "ROLE_ADMIN")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Admin </p> </a> </div></div></td>
                <td><div class=\"vertical-text\"> <div class=\"vertical-text__inner\"> <a href='";
        // line 36
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_CE"));
        echo "' class='ce'>  <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")) == "ROLE_CE")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo " CE </p>  </a> </div></div></td>
                <td><div class=\"vertical-text\"> <div class=\"vertical-text__inner\"> <a href='";
        // line 37
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_CHSCT"));
        echo "' class='CHSCT'>  <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")) == "ROLE_CHSCT")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo " CHSCT </p>  </a> </div></div></td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 38
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_COMMUNICATION"));
        echo "' class='communication'> <p> ";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")) == "ROLE_COMMUNICATION")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Communication  </p></a> </div></div></td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 39
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_COMPETENCES"));
        echo "' class='competences'> <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")) == "ROLE_COMPETENCES")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Compétences </p> </a></div></div> </td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 40
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_FAQ"));
        echo "' class='faq'> <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")) == "ROLE_FAQ")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo " FAQ </p> </a> </div></div></td>
                <td><div class=\"vertical-text\"> <div class=\"vertical-text__inner\"> <a href='";
        // line 41
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_LIENS"));
        echo "' class='liens2'> <p> ";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")) == "ROLE_LIENS")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Liens </p>  </a> </div></div></td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 42
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_PROCEDURES"));
        echo "' class='procedures'> <p> ";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")) == "ROLE_PROCEDURES")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Procédures  </p></a> </div></div></td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 43
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_QUALITE"));
        echo "' class='qualite'>  <p> ";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")) == "ROLE_QUALITE")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Qualité </p>  </a></div></div> </td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 44
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_REFERENCES"));
        echo "' class='references'> <p> ";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")) == "ROLE_REFERENCES")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Références </p> </a></div></div></td>
                <td><div class=\"vertical-text\"> <div class=\"vertical-text__inner\"> <a href='";
        // line 45
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "LOCAL"));
        echo "' class='local'>  <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")) == "LOCAL")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo " Local </p>  </a> </div></div></td>
                <td><div class=\"vertical-text\"> <div class=\"vertical-text__inner\">  </td>
                            </tr>



                            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")));
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_user_edit", array("userID" => $this->getAttribute($context["user"], "id", array()), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
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
        if (((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")) == null)) {
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
        if (((isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche")) == true)) {
            // line 189
            echo "
                                    ";
            // line 190
            if (((isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")) > 1)) {
                echo " 

                                        nbPage > 1 !

                                        ";
                // line 194
                if (((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) > 2)) {
                    echo "                   

                                            <a href=\"";
                    // line 196
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => 1, "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
                    echo "\"> << </a>

                                            <a href=\"";
                    // line 198
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
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
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - $this->getAttribute($context["loop"], "revindex", array())), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - $this->getAttribute($context["loop"], "revindex", array())), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
                    echo "\" id=\"pageActuel\"> ";
                    echo twig_escape_filter($this->env, (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "html", null, true);
                    echo " </a>

                                            ";
                    // line 208
                    if (((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) < (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
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
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + $this->getAttribute($context["loop"], "index", array())), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
                            echo "\"> ";
                            echo twig_escape_filter($this->env, ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + $this->getAttribute($context["loop"], "index", array())), "html", null, true);
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
                    echo twig_escape_filter($this->env, (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "html", null, true);
                    echo "

                                            ";
                    // line 222
                    if (((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) == 2)) {
                        echo " 

                                                numPage = 2 !

                                                <a href=\"";
                        // line 226
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
                        echo "\"> < </a>

                                                <a href=\"";
                        // line 228
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1), "html", null, true);
                        echo " </a> ";
                    }
                    // line 229
                    echo "
                                                <a href=\"";
                    // line 230
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
                    echo "\" id=\"pageActuel\"> ";
                    echo twig_escape_filter($this->env, (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "html", null, true);
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
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + $this->getAttribute($context["loop"], "index", array())), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + $this->getAttribute($context["loop"], "index", array())), "html", null, true);
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
                if (((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) < (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                    // line 241
                    echo "
                                                <a href=\"";
                    // line 242
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
                    echo "\"> > </a>

                                                <a href=\"";
                    // line 244
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
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
            if (((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) > 2)) {
                // line 253
                echo "
                                            <a href=\"";
                // line 254
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => 1, "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                echo "\"> << </a>

                                            <a href=\"";
                // line 256
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - $this->getAttribute($context["loop"], "revindex", array())), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - $this->getAttribute($context["loop"], "revindex", array())), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                echo "\" id=\"pageActuel\"> ";
                echo twig_escape_filter($this->env, (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "html", null, true);
                echo " </a>

                                            ";
                // line 267
                if (((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) < (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
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
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + $this->getAttribute($context["loop"], "index", array())), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + $this->getAttribute($context["loop"], "index", array())), "html", null, true);
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
                if (((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) == 2)) {
                    echo " 

                                                <a href=\"";
                    // line 281
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                    echo "\"> < </a>

                                                <a href=\"";
                    // line 283
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1), "html", null, true);
                    echo " </a> ";
                }
                // line 284
                echo "
                                                <a href=\"";
                // line 285
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                echo "\" id=\"pageActuel\"> ";
                echo twig_escape_filter($this->env, (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + $this->getAttribute($context["loop"], "index", array())), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + $this->getAttribute($context["loop"], "index", array())), "html", null, true);
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
        if (((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) < (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
            // line 298
            echo "
                                            <a href=\"";
            // line 299
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
            echo "\"> > </a>

                                            <a href=\"";
            // line 301
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
            echo "\"> >> </a>

                                        ";
        }
        // line 304
        echo "
                                    </div>         

                                </div>
                                ";
        
        $__internal_f65f3d54b198bee45e61c05e70a639d656d9e82c2ebabe81b3698c50e7befeda->leave($__internal_f65f3d54b198bee45e61c05e70a639d656d9e82c2ebabe81b3698c50e7befeda_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetAdministration/AdministrationUser/sauvegardeSelectionPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  988 => 304,  982 => 301,  977 => 299,  974 => 298,  972 => 297,  969 => 296,  965 => 294,  960 => 291,  941 => 289,  938 => 288,  921 => 287,  914 => 285,  911 => 284,  905 => 283,  900 => 281,  895 => 279,  891 => 277,  887 => 276,  883 => 274,  864 => 271,  861 => 270,  844 => 269,  841 => 268,  839 => 267,  832 => 265,  828 => 263,  809 => 260,  806 => 259,  789 => 258,  784 => 256,  779 => 254,  776 => 253,  774 => 252,  769 => 249,  766 => 248,  763 => 247,  757 => 244,  752 => 242,  749 => 241,  747 => 240,  744 => 239,  739 => 236,  720 => 234,  717 => 233,  700 => 232,  693 => 230,  690 => 229,  684 => 228,  679 => 226,  672 => 222,  667 => 220,  663 => 218,  659 => 217,  655 => 215,  636 => 212,  633 => 211,  616 => 210,  613 => 209,  611 => 208,  604 => 206,  601 => 205,  582 => 202,  579 => 201,  562 => 200,  557 => 198,  552 => 196,  547 => 194,  540 => 190,  537 => 189,  535 => 188,  530 => 185,  520 => 177,  518 => 176,  510 => 170,  497 => 162,  493 => 160,  489 => 158,  487 => 157,  475 => 152,  471 => 150,  468 => 149,  464 => 148,  451 => 142,  447 => 140,  444 => 139,  440 => 138,  427 => 132,  423 => 130,  420 => 129,  416 => 128,  403 => 122,  399 => 120,  396 => 119,  392 => 118,  379 => 112,  375 => 110,  372 => 109,  368 => 108,  355 => 102,  351 => 100,  348 => 99,  344 => 98,  331 => 92,  327 => 90,  324 => 89,  320 => 88,  307 => 82,  303 => 80,  300 => 79,  296 => 78,  283 => 72,  279 => 70,  276 => 69,  272 => 68,  259 => 62,  255 => 60,  252 => 59,  248 => 58,  243 => 56,  235 => 53,  232 => 52,  228 => 51,  213 => 45,  203 => 44,  193 => 43,  183 => 42,  173 => 41,  163 => 40,  153 => 39,  143 => 38,  133 => 37,  123 => 36,  113 => 35,  103 => 34,  87 => 21,  80 => 17,  73 => 13,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
/*                 <td><div class="vertical-text"> <div class="vertical-text__inner">  </td>*/
/*                             </tr>*/
/* */
/* */
/* */
/*                             {% for user in utilisateurs %}*/
/*                                 <tr>*/
/*                                     <td> <p>  {{ user.username }} ({{user.agence}}) <p> </td>*/
/* */
/*                                     <td>*/
/*                                         <form type='GET' action='{{ path('nox_intranet_user_edit', {'userID': user.id, 'roleUser': roleUser }) }}' id='userEdit' >*/
/*                                             <input type='checkbox' name='Admin' value='Admin' id='admin' onclick='checkboxAdminClick(this);'*/
/*                                                    {% for role in user.roles %}*/
/*                                                        {% if role == "ROLE_ADMIN" %}*/
/*                                                            checked*/
/*                                                        {% endif %}*/
/*                                                    {% endfor %}    */
/*                                                    >*/
/*                                             </td>*/
/* */
/*                                             <td>*/
/*                                                 <input type='checkbox' name='CE' value='CE' id='CE' onclick='checkboxPublicateurClick(this);'*/
/*                                                        {% for role in user.roles %}*/
/*                                                            {% if role == "ROLE_CE" %}*/
/*                                                                checked*/
/*                                                            {% endif %}*/
/*                                                        {% endfor %}   */
/*                                                        >*/
/*                                             </td>*/
/* */
/*                                             <td>*/
/*                                                 <input type='checkbox' name='CHSCT' value='CHSCT' id='CHSCT' onclick='checkboxPublicateurClick(this);'*/
/*                                                        {% for role in user.roles %}*/
/*                                                            {% if role == "ROLE_CHSCT" %}*/
/*                                                                checked*/
/*                                                            {% endif %}*/
/*                                                        {% endfor %}   */
/*                                                        >*/
/*                                             </td>*/
/* */
/*                                             <td>*/
/*                                                 <input type='checkbox' name='News' value='News' id='News' onclick='checkboxPublicateurClick(this);'*/
/*                                                        {% for role in user.roles %}*/
/*                                                            {% if role == "ROLE_COMMUNICATION" %}*/
/*                                                                checked*/
/*                                                            {% endif %}*/
/*                                                        {% endfor %}   */
/*                                                        >*/
/*                                             </td>*/
/* */
/*                                             <td>*/
/*                                                 <input type='checkbox' name='Competences' value='Competences' id='Competences' onclick='checkboxPublicateurClick(this);'*/
/*                                                        {% for role in user.roles %}*/
/*                                                            {% if role == "ROLE_COMPETENCES" %}*/
/*                                                                checked*/
/*                                                            {% endif %}*/
/*                                                        {% endfor %}   */
/*                                                        >*/
/*                                             </td>*/
/* */
/*                                             <td>*/
/*                                                 <input type='checkbox' name='FAQ' value='FAQ' id='FAQ' onclick='checkboxPublicateurClick(this);'*/
/*                                                        {% for role in user.roles %}*/
/*                                                            {% if role == "ROLE_FAQ" %}*/
/*                                                                checked*/
/*                                                            {% endif %}*/
/*                                                        {% endfor %}   */
/*                                                        >*/
/*                                             </td>*/
/* */
/*                                             <td>*/
/*                                                 <input type='checkbox' name='Liens' value='Liens' id='Liens' onclick='checkboxPublicateurClick(this);'*/
/*                                                        {% for role in user.roles %}*/
/*                                                            {% if role == "ROLE_LIENS" %}*/
/*                                                                checked*/
/*                                                            {% endif %}*/
/*                                                        {% endfor %}   */
/*                                                        >*/
/*                                             </td>*/
/* */
/*                                             <td>*/
/*                                                 <input type='checkbox' name='Procedures' value='Procedures' id='Procedures' onclick='checkboxPublicateurClick(this);'*/
/*                                                        {% for role in user.roles %}*/
/*                                                            {% if role == "ROLE_PROCEDURES" %}*/
/*                                                                checked*/
/*                                                            {% endif %}*/
/*                                                        {% endfor %}   */
/*                                                        >*/
/*                                             </td> */
/* */
/*                                             <td>*/
/*                                                 <input type='checkbox' name='Qualite' value='Qualite' id='Qualite' onclick='checkboxPublicateurClick(this);'*/
/*                                                        {% for role in user.roles %}*/
/*                                                            {% if role == "ROLE_QUALITE" %}*/
/*                                                                checked*/
/*                                                            {% endif %}*/
/*                                                        {% endfor %}   */
/*                                                        >*/
/*                                             </td>*/
/* */
/*                                             <td>*/
/*                                                 <input type='checkbox' name='References' value='References' id='References' onclick='checkboxPublicateurClick(this);'*/
/*                                                        {% for role in user.roles %}*/
/*                                                            {% if role == "ROLE_REFERENCES" %}*/
/*                                                                checked*/
/*                                                            {% endif %}*/
/*                                                        {% endfor %}   */
/*                                                        >*/
/*                                             </td>       */
/* */
/*                                             <td>*/
/*                                                 {% if user.local %}*/
/*                                                     oui*/
/*                                                 {% else %}*/
/*                                                     non*/
/*                                                 {% endif %}*/
/*                                             </td>*/
/* */
/*                                             <td>*/
/*                                                 <input type='submit' value='Modifier' class='modifier'>*/
/*                                         </form>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/* */
/* */
/* */
/* */
/*                             </table>*/
/* */
/*                             {% if utilisateurs == null %}*/
/* */
/*                                 <div id='noResults'>*/
/* */
/*                                     Votre recherche n'a retourné aucun résultat.*/
/* */
/*                                 </div>*/
/* */
/*                             {% endif %}*/
/* */
/*                             <div id="choixPage">*/
/* */
/*                                 {% if recherche == true %}*/
/* */
/*                                     {% if nbPage > 1 %} */
/* */
/*                                         nbPage > 1 !*/
/* */
/*                                         {% if numPage > 2 %}                   */
/* */
/*                                             <a href="{{ path('nox_intranet_administration_username', { 'numPage': 1, 'roleUser': roleUser, 'termeRecherche': termeRecherche}) }}"> << </a>*/
/* */
/*                                             <a href="{{ path('nox_intranet_administration_username', { 'numPage': numPage-1, 'roleUser': roleUser}) }}"> < </a>*/
/* */
/*                                             {% for i in 0..1 %}*/
/* */
/*                                                 <a href="{{ path('nox_intranet_administration_username', {'numPage': numPage-loop.revindex, 'roleUser': roleUser, 'termeRecherche': termeRecherche}) }}"> {{numPage-loop.revindex}} </a>*/
/* */
/*                                             {% endfor %}*/
/* */
/*                                             <a href="{{ path('nox_intranet_administration_username', {'numPage': numPage, 'roleUser': roleUser, 'termeRecherche': termeRecherche}) }}" id="pageActuel"> {{numPage}} </a>*/
/* */
/*                                             {% if numPage < nbPage %}*/
/* */
/*                                                 {% for i in 0..1 %}*/
/* */
/*                                                     <a href="{{ path('nox_intranet_administration_username', {'numPage': numPage+loop.index, 'roleUser': roleUser, 'termeRecherche': termeRecherche}) }}"> {{numPage+loop.index}} </a>*/
/* */
/*                                                 {% endfor %}*/
/* */
/*                                             {% endif %}*/
/* */
/*                                         {% else %}          */
/* */
/*                                             Nombre de page = {{ numPage }}*/
/* */
/*                                             {% if numPage == 2 %} */
/* */
/*                                                 numPage = 2 !*/
/* */
/*                                                 <a href="{{ path('nox_intranet_administration_username', { 'numPage': numPage-1, 'roleUser': roleUser, 'termeRecherche': termeRecherche}) }}"> < </a>*/
/* */
/*                                                 <a href="{{ path('nox_intranet_administration_username', {'numPage': numPage-1, 'roleUser': roleUser, 'termeRecherche': termeRecherche}) }}"> {{numPage-1}} </a> {% endif %}*/
/* */
/*                                                 <a href="{{ path('nox_intranet_administration_username', {'numPage': numPage, 'roleUser': roleUser, 'termeRecherche': termeRecherche}) }}" id="pageActuel"> {{numPage}} </a>*/
/* */
/*                                                 {% for i in 0..1 %}*/
/* */
/*                                                     <a href="{{ path('nox_intranet_administration_username', {'numPage': numPage+loop.index, 'roleUser': roleUser, 'termeRecherche': termeRecherche}) }}"> {{numPage+loop.index}} </a>*/
/* */
/*                                                 {% endfor %}   */
/* */
/*                                             {% endif %}*/
/* */
/*                                             {% if numPage < nbPage %}*/
/* */
/*                                                 <a href="{{ path('nox_intranet_administration_username', { 'numPage': numPage+1, 'roleUser': roleUser, 'termeRecherche': termeRecherche}) }}"> > </a>*/
/* */
/*                                                 <a href="{{ path('nox_intranet_administration_username', { 'numPage': nbPage, 'roleUser': roleUser, 'termeRecherche': termeRecherche}) }}"> >> </a>*/
/* */
/*                                             {% endif %}*/
/*                                         {% endif %}*/
/*                                     {% else %}*/
/* */
/* */
/* */
/*                                         {% if numPage > 2 %}*/
/* */
/*                                             <a href="{{ path('nox_intranet_administration_user', { 'numPage': 1, 'roleUser': roleUser}) }}"> << </a>*/
/* */
/*                                             <a href="{{ path('nox_intranet_administration_user', { 'numPage': numPage-1, 'roleUser': roleUser}) }}"> < </a>*/
/* */
/*                                             {% for i in 0..1 %}*/
/* */
/*                                                 <a href="{{ path('nox_intranet_administration_user', {'numPage': numPage-loop.revindex, 'roleUser': roleUser}) }}"> {{numPage-loop.revindex}} </a>*/
/* */
/*                                             {% endfor %}*/
/* */
/* */
/*                                             <a href="{{ path('nox_intranet_administration_user', {'numPage': numPage, 'roleUser': roleUser}) }}" id="pageActuel"> {{numPage}} </a>*/
/* */
/*                                             {% if numPage < nbPage %}*/
/* */
/*                                                 {% for i in 0..1 %}*/
/* */
/*                                                     <a href="{{ path('nox_intranet_administration_user', {'numPage': numPage+loop.index, 'roleUser': roleUser}) }}"> {{numPage+loop.index}} </a>*/
/* */
/*                                                 {% endfor %}*/
/* */
/*                                             {% endif %}*/
/* */
/*                                         {% else %}              */
/* */
/*                                             {% if numPage == 2 %} */
/* */
/*                                                 <a href="{{ path('nox_intranet_administration_user', { 'numPage': numPage-1, 'roleUser': roleUser}) }}"> < </a>*/
/* */
/*                                                 <a href="{{ path('nox_intranet_administration_user', {'numPage': numPage-1, 'roleUser': roleUser}) }}"> {{numPage-1}} </a> {% endif %}*/
/* */
/*                                                 <a href="{{ path('nox_intranet_administration_user', {'numPage': numPage, 'roleUser': roleUser}) }}" id="pageActuel"> {{numPage}} </a>*/
/* */
/*                                                 {% for i in 0..1 %}*/
/* */
/*                                                     <a href="{{ path('nox_intranet_administration_user', {'numPage': numPage+loop.index, 'roleUser': roleUser}) }}"> {{numPage+loop.index}} </a>*/
/* */
/*                                                 {% endfor %}   */
/* */
/*                                             {% endif %}*/
/* */
/*                                         {% endif %}*/
/* */
/*                                         {% if numPage < nbPage %}*/
/* */
/*                                             <a href="{{ path('nox_intranet_administration_user', { 'numPage': numPage+1, 'roleUser': roleUser}) }}"> > </a>*/
/* */
/*                                             <a href="{{ path('nox_intranet_administration_user', { 'numPage': nbPage, 'roleUser': roleUser}) }}"> >> </a>*/
/* */
/*                                         {% endif %}*/
/* */
/*                                     </div>         */
/* */
/*                                 </div>*/
/*                                 {% endblock %}*/
/* {# empty Twig template #}*/
/* */
