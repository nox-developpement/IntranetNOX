<?php

/* NoxIntranetAdministrationBundle:AdministrationUser:administrationUser2.html.twig */
class __TwigTemplate_f63362d5cef707659d4f07d5edbcc42546dc39299a345263527f6d1871733b6b extends Twig_Template
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
        $__internal_872cb2ac97e804812795379ae6a30f6f209ccf6e2b08469c25ec50d1d72f347f = $this->env->getExtension("native_profiler");
        $__internal_872cb2ac97e804812795379ae6a30f6f209ccf6e2b08469c25ec50d1d72f347f->enter($__internal_872cb2ac97e804812795379ae6a30f6f209ccf6e2b08469c25ec50d1d72f347f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationUser:administrationUser2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_872cb2ac97e804812795379ae6a30f6f209ccf6e2b08469c25ec50d1d72f347f->leave($__internal_872cb2ac97e804812795379ae6a30f6f209ccf6e2b08469c25ec50d1d72f347f_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_82a244db405df6e1f0387e2952313c6326b7953978263463b28e1083331dece8 = $this->env->getExtension("native_profiler");
        $__internal_82a244db405df6e1f0387e2952313c6326b7953978263463b28e1083331dece8->enter($__internal_82a244db405df6e1f0387e2952313c6326b7953978263463b28e1083331dece8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo "Administration utilisateurs";
        
        $__internal_82a244db405df6e1f0387e2952313c6326b7953978263463b28e1083331dece8->leave($__internal_82a244db405df6e1f0387e2952313c6326b7953978263463b28e1083331dece8_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_eed543c74d75cee63fa5e3fe1feaeeadedec3b26d052c12edadd90e100e470b5 = $this->env->getExtension("native_profiler");
        $__internal_eed543c74d75cee63fa5e3fe1feaeeadedec3b26d052c12edadd90e100e470b5->enter($__internal_eed543c74d75cee63fa5e3fe1feaeeadedec3b26d052c12edadd90e100e470b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration utilisateurs";
        
        $__internal_eed543c74d75cee63fa5e3fe1feaeeadedec3b26d052c12edadd90e100e470b5->leave($__internal_eed543c74d75cee63fa5e3fe1feaeeadedec3b26d052c12edadd90e100e470b5_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_fe95023d58fe0b0ffc473e21e86010d54d40816f22324d7a5d3548011fa4e60f = $this->env->getExtension("native_profiler");
        $__internal_fe95023d58fe0b0ffc473e21e86010d54d40816f22324d7a5d3548011fa4e60f->enter($__internal_fe95023d58fe0b0ffc473e21e86010d54d40816f22324d7a5d3548011fa4e60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_CHSCE"));
        echo "' class='chsce'>  <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")) == "ROLE_CHSCE")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo " CHSCE </p>  </a> </div></div></td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 38
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_NEWS"));
        echo "' class='communication'> <p> ";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")) == "ROLE_NEWS")) {
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
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 50
            echo "                                <tr>
                                    <td> <p>  ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "agence", array()), "html", null, true);
            echo ") <p> </td>

                                    <td>
                                        <form type='GET' action='";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_user_edit", array("userID" => $this->getAttribute($context["user"], "id", array()), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
            echo "' id='userEdit' >
                                            <input type='checkbox' name='Admin' value='Admin' id='admin' onclick='checkboxAdminClick(this);'
                                                   ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 57
                echo "                                                       ";
                if (($context["role"] == "ROLE_ADMIN")) {
                    // line 58
                    echo "                                                           checked
                                                       ";
                }
                // line 60
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
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 67
                echo "                                                           ";
                if (($context["role"] == "ROLE_CE")) {
                    // line 68
                    echo "                                                               checked
                                                           ";
                }
                // line 70
                echo "                                                       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "   
                                                       >
                                            </td>

                                            <td>
                                                <input type='checkbox' name='CHSCE' value='CHSCE' id='CHSCE' onclick='checkboxPublicateurClick(this);'
                                                       ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 77
                echo "                                                           ";
                if (($context["role"] == "ROLE_CHSCE")) {
                    // line 78
                    echo "                                                               checked
                                                           ";
                }
                // line 80
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
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 87
                echo "                                                           ";
                if (($context["role"] == "ROLE_REFERENCES")) {
                    // line 88
                    echo "                                                               checked
                                                           ";
                }
                // line 90
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
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 97
                echo "                                                           ";
                if (($context["role"] == "ROLE_COMPETENCES")) {
                    // line 98
                    echo "                                                               checked
                                                           ";
                }
                // line 100
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
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 107
                echo "                                                           ";
                if (($context["role"] == "ROLE_PROCEDURES")) {
                    // line 108
                    echo "                                                               checked
                                                           ";
                }
                // line 110
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
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 117
                echo "                                                           ";
                if (($context["role"] == "ROLE_NEWS")) {
                    // line 118
                    echo "                                                               checked
                                                           ";
                }
                // line 120
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
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 127
                echo "                                                           ";
                if (($context["role"] == "ROLE_FAQ")) {
                    // line 128
                    echo "                                                               checked
                                                           ";
                }
                // line 130
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
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 137
                echo "                                                           ";
                if (($context["role"] == "ROLE_LIENS")) {
                    // line 138
                    echo "                                                               checked
                                                           ";
                }
                // line 140
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
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 147
                echo "                                                           ";
                if (($context["role"] == "ROLE_QUALITE")) {
                    // line 148
                    echo "                                                               checked
                                                           ";
                }
                // line 150
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
            // line 155
            if ($this->getAttribute($context["user"], "local", array())) {
                // line 156
                echo "                                                    oui
                                                ";
            } else {
                // line 158
                echo "                                                    non
                                                ";
            }
            // line 160
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
        // line 168
        echo "
                            </table>



                            <div id=\"choixPage\">

                                ";
        // line 175
        if (((isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche")) == true)) {
            // line 176
            echo "
                                    ";
            // line 177
            if (((isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")) > 1)) {
                echo " 

                                        ";
                // line 179
                if (((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) > 2)) {
                    // line 180
                    echo "
                                            <a href=\"";
                    // line 181
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => 1, "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
                    echo "\"> << </a>

                                            <a href=\"";
                    // line 183
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                    echo "\"> < </a>

                                            ";
                    // line 185
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
                        // line 186
                        echo "
                                                <a href=\"";
                        // line 187
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
                    // line 190
                    echo "
                                            <a href=\"";
                    // line 191
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
                    echo "\" id=\"pageActuel\"> ";
                    echo twig_escape_filter($this->env, (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "html", null, true);
                    echo " </a>

                                            ";
                    // line 193
                    if (((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) < (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                        // line 194
                        echo "
                                                ";
                        // line 195
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
                            // line 196
                            echo "
                                                    <a href=\"";
                            // line 197
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
                        // line 200
                        echo "
                                            ";
                    }
                    // line 202
                    echo "
                                        ";
                } else {
                    // line 203
                    echo "              

                                            ";
                    // line 205
                    if (((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) == 2)) {
                        echo " 

                                                <a href=\"";
                        // line 207
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
                        echo "\"> < </a>

                                                <a href=\"";
                        // line 209
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1), "html", null, true);
                        echo " </a> ";
                    }
                    // line 210
                    echo "
                                                <a href=\"";
                    // line 211
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
                    echo "\" id=\"pageActuel\"> ";
                    echo twig_escape_filter($this->env, (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "html", null, true);
                    echo " </a>

                                                ";
                    // line 213
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
                        // line 214
                        echo "
                                                    <a href=\"";
                        // line 215
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
                    // line 217
                    echo "   

                                            ";
                }
                // line 220
                echo "
                                            ";
                // line 221
                if (((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) < (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                    // line 222
                    echo "
                                                <a href=\"";
                    // line 223
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
                    echo "\"> > </a>

                                                <a href=\"";
                    // line 225
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
                    echo "\"> >> </a>

                                            ";
                }
                // line 228
                echo "
                                        ";
            }
            // line 230
            echo "                                    </div> 

                                ";
        } else {
            // line 233
            echo "
                                    ";
            // line 234
            if (((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) > 2)) {
                // line 235
                echo "
                                        <a href=\"";
                // line 236
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => 1, "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                echo "\"> << </a>

                                        <a href=\"";
                // line 238
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                echo "\"> < </a>

                                        ";
                // line 240
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
                    // line 241
                    echo "
                                            <a href=\"";
                    // line 242
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
                // line 245
                echo "
                                        <a href=\"";
                // line 246
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                echo "\" id=\"pageActuel\"> ";
                echo twig_escape_filter($this->env, (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "html", null, true);
                echo " </a>

                                        ";
                // line 248
                if (((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) < (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                    // line 249
                    echo "
                                            ";
                    // line 250
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
                        // line 251
                        echo "
                                                <a href=\"";
                        // line 252
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
                    // line 255
                    echo "
                                        ";
                }
                // line 257
                echo "
                                    ";
            } else {
                // line 258
                echo "              

                                        ";
                // line 260
                if (((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) == 2)) {
                    echo " 

                                            <a href=\"";
                    // line 262
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                    echo "\"> < </a>

                                            <a href=\"";
                    // line 264
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1), "html", null, true);
                    echo " </a> ";
                }
                // line 265
                echo "
                                            <a href=\"";
                // line 266
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                echo "\" id=\"pageActuel\"> ";
                echo twig_escape_filter($this->env, (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "html", null, true);
                echo " </a>

                                            ";
                // line 268
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
                    // line 269
                    echo "
                                                <a href=\"";
                    // line 270
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
                // line 272
                echo "   

                                        ";
            }
            // line 275
            echo "
                                        ";
            // line 276
            if (((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) < (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                // line 277
                echo "
                                            <a href=\"";
                // line 278
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                echo "\"> > </a>

                                            <a href=\"";
                // line 280
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                echo "\"> >> </a>

                                        ";
            }
            // line 283
            echo "


                                    ";
        }
        // line 287
        echo "

                                </div> 
                            </div>
                            ";
        
        $__internal_fe95023d58fe0b0ffc473e21e86010d54d40816f22324d7a5d3548011fa4e60f->leave($__internal_fe95023d58fe0b0ffc473e21e86010d54d40816f22324d7a5d3548011fa4e60f_prof);

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
        return array (  963 => 287,  957 => 283,  951 => 280,  946 => 278,  943 => 277,  941 => 276,  938 => 275,  933 => 272,  914 => 270,  911 => 269,  894 => 268,  887 => 266,  884 => 265,  878 => 264,  873 => 262,  868 => 260,  864 => 258,  860 => 257,  856 => 255,  837 => 252,  834 => 251,  817 => 250,  814 => 249,  812 => 248,  805 => 246,  802 => 245,  783 => 242,  780 => 241,  763 => 240,  758 => 238,  753 => 236,  750 => 235,  748 => 234,  745 => 233,  740 => 230,  736 => 228,  730 => 225,  725 => 223,  722 => 222,  720 => 221,  717 => 220,  712 => 217,  693 => 215,  690 => 214,  673 => 213,  666 => 211,  663 => 210,  657 => 209,  652 => 207,  647 => 205,  643 => 203,  639 => 202,  635 => 200,  616 => 197,  613 => 196,  596 => 195,  593 => 194,  591 => 193,  584 => 191,  581 => 190,  562 => 187,  559 => 186,  542 => 185,  537 => 183,  532 => 181,  529 => 180,  527 => 179,  522 => 177,  519 => 176,  517 => 175,  508 => 168,  495 => 160,  491 => 158,  487 => 156,  485 => 155,  473 => 150,  469 => 148,  466 => 147,  462 => 146,  449 => 140,  445 => 138,  442 => 137,  438 => 136,  425 => 130,  421 => 128,  418 => 127,  414 => 126,  401 => 120,  397 => 118,  394 => 117,  390 => 116,  377 => 110,  373 => 108,  370 => 107,  366 => 106,  353 => 100,  349 => 98,  346 => 97,  342 => 96,  329 => 90,  325 => 88,  322 => 87,  318 => 86,  305 => 80,  301 => 78,  298 => 77,  294 => 76,  281 => 70,  277 => 68,  274 => 67,  270 => 66,  257 => 60,  253 => 58,  250 => 57,  246 => 56,  241 => 54,  233 => 51,  230 => 50,  226 => 49,  213 => 45,  203 => 44,  193 => 43,  183 => 42,  173 => 41,  163 => 40,  153 => 39,  143 => 38,  133 => 37,  123 => 36,  113 => 35,  103 => 34,  87 => 21,  80 => 17,  73 => 13,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
/*                 <td><div class="vertical-text"> <div class="vertical-text__inner"> <a href='{{ path('nox_intranet_administration_user', {'roleUser': 'ROLE_CHSCE'}) }}' class='chsce'>  <p>{% if roleUser == 'ROLE_CHSCE' %} <img src="{{ asset('bundles/noxintranetadministration/images/Arrow.png') }}" class="imgRole"> {% endif %} CHSCE </p>  </a> </div></div></td>*/
/*                 <td> <div class="vertical-text"> <div class="vertical-text__inner"><a href='{{ path('nox_intranet_administration_user', {'roleUser': 'ROLE_NEWS'}) }}' class='communication'> <p> {% if roleUser == 'ROLE_NEWS' %} <img src="{{ asset('bundles/noxintranetadministration/images/Arrow.png') }}" class="imgRole"> {% endif %}Communication  </p></a> </div></div></td>*/
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
/*                                                 <input type='checkbox' name='CHSCE' value='CHSCE' id='CHSCE' onclick='checkboxPublicateurClick(this);'*/
/*                                                        {% for role in user.roles %}*/
/*                                                            {% if role == "ROLE_CHSCE" %}*/
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
/*                                                 <input type='checkbox' name='Procedures' value='Procedures' id='Procedures' onclick='checkboxPublicateurClick(this);'*/
/*                                                        {% for role in user.roles %}*/
/*                                                            {% if role == "ROLE_PROCEDURES" %}*/
/*                                                                checked*/
/*                                                            {% endif %}*/
/*                                                        {% endfor %}   */
/*                                                        >*/
/*                                             </td>*/
/* */
/*                                             <td>*/
/*                                                 <input type='checkbox' name='News' value='News' id='News' onclick='checkboxPublicateurClick(this);'*/
/*                                                        {% for role in user.roles %}*/
/*                                                            {% if role == "ROLE_NEWS" %}*/
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
/*                             </table>*/
/* */
/* */
/* */
/*                             <div id="choixPage">*/
/* */
/*                                 {% if recherche == true %}*/
/* */
/*                                     {% if nbPage > 1 %} */
/* */
/*                                         {% if numPage > 2 %}*/
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
/*                                         {% else %}              */
/* */
/*                                             {% if numPage == 2 %} */
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
/* */
/*                                         {% endif %}*/
/*                                     </div> */
/* */
/*                                 {% else %}*/
/* */
/*                                     {% if numPage > 2 %}*/
/* */
/*                                         <a href="{{ path('nox_intranet_administration_user', { 'numPage': 1, 'roleUser': roleUser}) }}"> << </a>*/
/* */
/*                                         <a href="{{ path('nox_intranet_administration_user', { 'numPage': numPage-1, 'roleUser': roleUser}) }}"> < </a>*/
/* */
/*                                         {% for i in 0..1 %}*/
/* */
/*                                             <a href="{{ path('nox_intranet_administration_user', {'numPage': numPage-loop.revindex, 'roleUser': roleUser}) }}"> {{numPage-loop.revindex}} </a>*/
/* */
/*                                         {% endfor %}*/
/* */
/*                                         <a href="{{ path('nox_intranet_administration_user', {'numPage': numPage, 'roleUser': roleUser}) }}" id="pageActuel"> {{numPage}} </a>*/
/* */
/*                                         {% if numPage < nbPage %}*/
/* */
/*                                             {% for i in 0..1 %}*/
/* */
/*                                                 <a href="{{ path('nox_intranet_administration_user', {'numPage': numPage+loop.index, 'roleUser': roleUser}) }}"> {{numPage+loop.index}} </a>*/
/* */
/*                                             {% endfor %}*/
/* */
/*                                         {% endif %}*/
/* */
/*                                     {% else %}              */
/* */
/*                                         {% if numPage == 2 %} */
/* */
/*                                             <a href="{{ path('nox_intranet_administration_user', { 'numPage': numPage-1, 'roleUser': roleUser}) }}"> < </a>*/
/* */
/*                                             <a href="{{ path('nox_intranet_administration_user', {'numPage': numPage-1, 'roleUser': roleUser}) }}"> {{numPage-1}} </a> {% endif %}*/
/* */
/*                                             <a href="{{ path('nox_intranet_administration_user', {'numPage': numPage, 'roleUser': roleUser}) }}" id="pageActuel"> {{numPage}} </a>*/
/* */
/*                                             {% for i in 0..1 %}*/
/* */
/*                                                 <a href="{{ path('nox_intranet_administration_user', {'numPage': numPage+loop.index, 'roleUser': roleUser}) }}"> {{numPage+loop.index}} </a>*/
/* */
/*                                             {% endfor %}   */
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
/* */
/* */
/*                                     {% endif %}*/
/* */
/* */
/*                                 </div> */
/*                             </div>*/
/*                             {% endblock %}*/
/* */
/* */
/*                                 {# empty Twig template #}*/
/* */
