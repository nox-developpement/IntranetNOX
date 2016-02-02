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
        $__internal_58a27b9b21b95459d7f5ef5d83023dd2033e56c1b056688d52a344d9ea69b8bf = $this->env->getExtension("native_profiler");
        $__internal_58a27b9b21b95459d7f5ef5d83023dd2033e56c1b056688d52a344d9ea69b8bf->enter($__internal_58a27b9b21b95459d7f5ef5d83023dd2033e56c1b056688d52a344d9ea69b8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationUser:administrationUser2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58a27b9b21b95459d7f5ef5d83023dd2033e56c1b056688d52a344d9ea69b8bf->leave($__internal_58a27b9b21b95459d7f5ef5d83023dd2033e56c1b056688d52a344d9ea69b8bf_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_9a54374f51b602cd26927f10365a957fa4dd1bd24218c2b12a15c5e9c340a7ff = $this->env->getExtension("native_profiler");
        $__internal_9a54374f51b602cd26927f10365a957fa4dd1bd24218c2b12a15c5e9c340a7ff->enter($__internal_9a54374f51b602cd26927f10365a957fa4dd1bd24218c2b12a15c5e9c340a7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo "Administration utilisateurs";
        
        $__internal_9a54374f51b602cd26927f10365a957fa4dd1bd24218c2b12a15c5e9c340a7ff->leave($__internal_9a54374f51b602cd26927f10365a957fa4dd1bd24218c2b12a15c5e9c340a7ff_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_78e4c3d67da3fef1fa6f01c478d958339cd810c9962fe5f93d78ed3c1e4024c5 = $this->env->getExtension("native_profiler");
        $__internal_78e4c3d67da3fef1fa6f01c478d958339cd810c9962fe5f93d78ed3c1e4024c5->enter($__internal_78e4c3d67da3fef1fa6f01c478d958339cd810c9962fe5f93d78ed3c1e4024c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration utilisateurs";
        
        $__internal_78e4c3d67da3fef1fa6f01c478d958339cd810c9962fe5f93d78ed3c1e4024c5->leave($__internal_78e4c3d67da3fef1fa6f01c478d958339cd810c9962fe5f93d78ed3c1e4024c5_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_efadbf5b321a44c29dde93c6e0f5a15d36286188d962da6efecd20e129b213c3 = $this->env->getExtension("native_profiler");
        $__internal_efadbf5b321a44c29dde93c6e0f5a15d36286188d962da6efecd20e129b213c3->enter($__internal_efadbf5b321a44c29dde93c6e0f5a15d36286188d962da6efecd20e129b213c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
                <td><div class=\"vertical-text\"> <div class=\"vertical-text__inner\"> </div> </div> </td>
            </tr>



            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")));
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_user_edit", array("userID" => $this->getAttribute($context["user"], "id", array()), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
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

            <!-- Si une recherche est en cours. -->
            ";
        // line 189
        if (((isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche")) == true)) {
            // line 190
            echo "
                ";
            // line 191
            if (((isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")) > 1)) {
                // line 192
                echo "
                    <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->
                    ";
                // line 194
                if (((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) > 1)) {
                    // line 195
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => 1, "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
                    echo "\"> << </a>
                    ";
                }
                // line 197
                echo "                    <!-------------------------------------------------------------------------->

                    <!-- Affiche un lien vers la page précédente si elle existe -->
                    ";
                // line 200
                if ((((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1) >= 1)) {
                    // line 201
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
                    echo "\"> < </a>
                    ";
                }
                // line 203
                echo "                    <!---------------------------------------------------------->

                    <!-- Affichage des liens vers les pages précédente. -->
                    ";
                // line 206
                if ((((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1) >= 1)) {
                    // line 207
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 208
                        echo "
                            ";
                        // line 209
                        if (($context["i"] >= ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 2))) {
                            // line 210
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => $context["i"], "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
                echo "\"> <p id=\"pageActuel\">";
                echo twig_escape_filter($this->env, (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "html", null, true);
                echo "</p> </a>
                    <!------------------->

                    <!-- Affichage des liens vers les pages suivantes. -->
                    ";
                // line 222
                if ((((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                    // line 223
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 1), (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 224
                        echo "
                            ";
                        // line 225
                        if (($context["i"] <= ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 2))) {
                            // line 226
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => $context["i"], "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
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
                if ((((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                    // line 235
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
                    echo "\"> > </a>
                    ";
                }
                // line 237
                echo "                    <!------------------------------------------------------------>

                    <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->
                    ";
                // line 240
                if (((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) < (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                    // line 241
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
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
            if (((isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")) > 1)) {
                // line 251
                echo "
                    <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->
                    ";
                // line 253
                if (((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) > 1)) {
                    // line 254
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => 1, "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                    echo "\"> << </a>
                    ";
                }
                // line 256
                echo "                    <!-------------------------------------------------------------------------->

                    <!-- Affiche un lien vers la page précédente si elle existe -->
                    ";
                // line 259
                if ((((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1) >= 1)) {
                    // line 260
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                    echo "\"> < </a>
                    ";
                }
                // line 262
                echo "                    <!---------------------------------------------------------->

                    <!-- Affichage des liens vers les pages précédente. -->
                    ";
                // line 265
                if ((((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1) >= 1)) {
                    // line 266
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 267
                        echo "
                            <!-- Limite le nombre de pages précédentes. -->
                            ";
                        // line 269
                        if (($context["i"] >= ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 2))) {
                            // line 270
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => $context["i"], "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                echo "\"> <p id=\"pageActuel\"> ";
                echo twig_escape_filter($this->env, (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "html", null, true);
                echo " </p> </a>
                    <!------------------->

                    <!-- Affichage des liens vers les pages suivantes. -->
                    ";
                // line 283
                if ((((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                    // line 284
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 1), (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 285
                        echo "
                            <!-- Limite le nombre de pages suivantes. -->
                            ";
                        // line 287
                        if (($context["i"] <= ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 2))) {
                            // line 288
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => $context["i"], "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
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
                if ((((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                    // line 298
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                    echo "\"> > </a>
                    ";
                }
                // line 300
                echo "                    <!------------------------------------------------------------>

                    <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->
                    ";
                // line 303
                if (((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) < (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                    // line 304
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
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
        
        $__internal_efadbf5b321a44c29dde93c6e0f5a15d36286188d962da6efecd20e129b213c3->leave($__internal_efadbf5b321a44c29dde93c6e0f5a15d36286188d962da6efecd20e129b213c3_prof);

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
        return array (  831 => 311,  827 => 309,  822 => 306,  816 => 304,  814 => 303,  809 => 300,  803 => 298,  801 => 297,  796 => 294,  793 => 293,  785 => 290,  777 => 288,  775 => 287,  771 => 285,  766 => 284,  764 => 283,  755 => 279,  750 => 276,  747 => 275,  739 => 272,  731 => 270,  729 => 269,  725 => 267,  720 => 266,  718 => 265,  713 => 262,  707 => 260,  705 => 259,  700 => 256,  694 => 254,  692 => 253,  688 => 251,  686 => 250,  683 => 249,  678 => 246,  673 => 243,  667 => 241,  665 => 240,  660 => 237,  654 => 235,  652 => 234,  647 => 231,  644 => 230,  637 => 228,  629 => 226,  627 => 225,  624 => 224,  619 => 223,  617 => 222,  608 => 218,  603 => 215,  600 => 214,  593 => 212,  585 => 210,  583 => 209,  580 => 208,  575 => 207,  573 => 206,  568 => 203,  562 => 201,  560 => 200,  555 => 197,  549 => 195,  547 => 194,  543 => 192,  541 => 191,  538 => 190,  536 => 189,  530 => 185,  520 => 177,  518 => 176,  510 => 170,  497 => 162,  493 => 160,  489 => 158,  487 => 157,  475 => 152,  471 => 150,  468 => 149,  464 => 148,  451 => 142,  447 => 140,  444 => 139,  440 => 138,  427 => 132,  423 => 130,  420 => 129,  416 => 128,  403 => 122,  399 => 120,  396 => 119,  392 => 118,  379 => 112,  375 => 110,  372 => 109,  368 => 108,  355 => 102,  351 => 100,  348 => 99,  344 => 98,  331 => 92,  327 => 90,  324 => 89,  320 => 88,  307 => 82,  303 => 80,  300 => 79,  296 => 78,  283 => 72,  279 => 70,  276 => 69,  272 => 68,  259 => 62,  255 => 60,  252 => 59,  248 => 58,  243 => 56,  235 => 53,  232 => 52,  228 => 51,  213 => 45,  203 => 44,  193 => 43,  183 => 42,  173 => 41,  163 => 40,  153 => 39,  143 => 38,  133 => 37,  123 => 36,  113 => 35,  103 => 34,  87 => 21,  80 => 17,  73 => 13,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
