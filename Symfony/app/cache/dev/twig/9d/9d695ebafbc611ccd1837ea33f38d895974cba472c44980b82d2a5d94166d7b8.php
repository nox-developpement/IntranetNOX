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
        $__internal_000fe164aac2ded43e20879a92954513cb0ba87e1e13ee0b4e46cf0097b191b2 = $this->env->getExtension("native_profiler");
        $__internal_000fe164aac2ded43e20879a92954513cb0ba87e1e13ee0b4e46cf0097b191b2->enter($__internal_000fe164aac2ded43e20879a92954513cb0ba87e1e13ee0b4e46cf0097b191b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationUser:administrationUser2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_000fe164aac2ded43e20879a92954513cb0ba87e1e13ee0b4e46cf0097b191b2->leave($__internal_000fe164aac2ded43e20879a92954513cb0ba87e1e13ee0b4e46cf0097b191b2_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_4409a228ee1a07c20b489f787e94fe6b18f2348e727fa72b1310636ef3bbc189 = $this->env->getExtension("native_profiler");
        $__internal_4409a228ee1a07c20b489f787e94fe6b18f2348e727fa72b1310636ef3bbc189->enter($__internal_4409a228ee1a07c20b489f787e94fe6b18f2348e727fa72b1310636ef3bbc189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo "Administration utilisateurs";
        
        $__internal_4409a228ee1a07c20b489f787e94fe6b18f2348e727fa72b1310636ef3bbc189->leave($__internal_4409a228ee1a07c20b489f787e94fe6b18f2348e727fa72b1310636ef3bbc189_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_471c939a0b02d466e515abd02f8fe134e86099ffe2221ba9e4438c07ca4c4fdf = $this->env->getExtension("native_profiler");
        $__internal_471c939a0b02d466e515abd02f8fe134e86099ffe2221ba9e4438c07ca4c4fdf->enter($__internal_471c939a0b02d466e515abd02f8fe134e86099ffe2221ba9e4438c07ca4c4fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration utilisateurs";
        
        $__internal_471c939a0b02d466e515abd02f8fe134e86099ffe2221ba9e4438c07ca4c4fdf->leave($__internal_471c939a0b02d466e515abd02f8fe134e86099ffe2221ba9e4438c07ca4c4fdf_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_9540c3499ffb0524c1034c485a5616e195830f5c67f9adf06df3957d1925f162 = $this->env->getExtension("native_profiler");
        $__internal_9540c3499ffb0524c1034c485a5616e195830f5c67f9adf06df3957d1925f162->enter($__internal_9540c3499ffb0524c1034c485a5616e195830f5c67f9adf06df3957d1925f162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
                <td colspan=12> Rôle </td>

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
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 45
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_RH"));
        echo "' class='RH'> <p> ";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")) == "ROLE_RH")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "RH </p> </a></div></div></td>
                <td><div class=\"vertical-text\"> <div class=\"vertical-text__inner\"> <a href='";
        // line 46
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
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")));
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_user_edit", array("userID" => $this->getAttribute($context["user"], "id", array()), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
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
        if (((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")) == null)) {
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
        if (((isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche")) == true)) {
            // line 201
            echo "
                ";
            // line 202
            if (((isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")) > 1)) {
                // line 203
                echo "
                    <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->
                    ";
                // line 205
                if (((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) > 1)) {
                    // line 206
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => 1, "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
                    echo "\"> << </a>
                    ";
                }
                // line 208
                echo "                    <!-------------------------------------------------------------------------->

                    <!-- Affiche un lien vers la page précédente si elle existe -->
                    ";
                // line 211
                if ((((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1) >= 1)) {
                    // line 212
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
                    echo "\"> < </a>
                    ";
                }
                // line 214
                echo "                    <!---------------------------------------------------------->

                    <!-- Affichage des liens vers les pages précédente. -->
                    ";
                // line 217
                if ((((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1) >= 1)) {
                    // line 218
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 219
                        echo "
                            ";
                        // line 220
                        if (($context["i"] >= ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 2))) {
                            // line 221
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => $context["i"], "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
                echo "\"> <p id=\"pageActuel\">";
                echo twig_escape_filter($this->env, (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "html", null, true);
                echo "</p> </a>
                    <!------------------->

                    <!-- Affichage des liens vers les pages suivantes. -->
                    ";
                // line 233
                if ((((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                    // line 234
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 1), (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 235
                        echo "
                            ";
                        // line 236
                        if (($context["i"] <= ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 2))) {
                            // line 237
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => $context["i"], "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
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
                if ((((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                    // line 246
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
                    echo "\"> > </a>
                    ";
                }
                // line 248
                echo "                    <!------------------------------------------------------------>

                    <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->
                    ";
                // line 251
                if (((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) < (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                    // line 252
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
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
            if (((isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")) > 1)) {
                // line 262
                echo "
                    <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->
                    ";
                // line 264
                if (((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) > 1)) {
                    // line 265
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => 1, "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                    echo "\"> << </a>
                    ";
                }
                // line 267
                echo "                    <!-------------------------------------------------------------------------->

                    <!-- Affiche un lien vers la page précédente si elle existe -->
                    ";
                // line 270
                if ((((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1) >= 1)) {
                    // line 271
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                    echo "\"> < </a>
                    ";
                }
                // line 273
                echo "                    <!---------------------------------------------------------->

                    <!-- Affichage des liens vers les pages précédente. -->
                    ";
                // line 276
                if ((((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1) >= 1)) {
                    // line 277
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 278
                        echo "
                            <!-- Limite le nombre de pages précédentes. -->
                            ";
                        // line 280
                        if (($context["i"] >= ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 2))) {
                            // line 281
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => $context["i"], "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                echo "\"> <p id=\"pageActuel\"> ";
                echo twig_escape_filter($this->env, (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "html", null, true);
                echo " </p> </a>
                    <!------------------->

                    <!-- Affichage des liens vers les pages suivantes. -->
                    ";
                // line 294
                if ((((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                    // line 295
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 1), (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 296
                        echo "
                            <!-- Limite le nombre de pages suivantes. -->
                            ";
                        // line 298
                        if (($context["i"] <= ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 2))) {
                            // line 299
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => $context["i"], "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
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
                if ((((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                    // line 309
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                    echo "\"> > </a>
                    ";
                }
                // line 311
                echo "                    <!------------------------------------------------------------>

                    <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->
                    ";
                // line 314
                if (((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) < (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                    // line 315
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
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
        
        $__internal_9540c3499ffb0524c1034c485a5616e195830f5c67f9adf06df3957d1925f162->leave($__internal_9540c3499ffb0524c1034c485a5616e195830f5c67f9adf06df3957d1925f162_prof);

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
        return array (  865 => 322,  861 => 320,  856 => 317,  850 => 315,  848 => 314,  843 => 311,  837 => 309,  835 => 308,  830 => 305,  827 => 304,  819 => 301,  811 => 299,  809 => 298,  805 => 296,  800 => 295,  798 => 294,  789 => 290,  784 => 287,  781 => 286,  773 => 283,  765 => 281,  763 => 280,  759 => 278,  754 => 277,  752 => 276,  747 => 273,  741 => 271,  739 => 270,  734 => 267,  728 => 265,  726 => 264,  722 => 262,  720 => 261,  717 => 260,  712 => 257,  707 => 254,  701 => 252,  699 => 251,  694 => 248,  688 => 246,  686 => 245,  681 => 242,  678 => 241,  671 => 239,  663 => 237,  661 => 236,  658 => 235,  653 => 234,  651 => 233,  642 => 229,  637 => 226,  634 => 225,  627 => 223,  619 => 221,  617 => 220,  614 => 219,  609 => 218,  607 => 217,  602 => 214,  596 => 212,  594 => 211,  589 => 208,  583 => 206,  581 => 205,  577 => 203,  575 => 202,  572 => 201,  570 => 200,  564 => 196,  554 => 188,  552 => 187,  544 => 181,  531 => 173,  527 => 171,  523 => 169,  521 => 168,  509 => 163,  505 => 161,  502 => 160,  498 => 159,  485 => 153,  481 => 151,  478 => 150,  474 => 149,  461 => 143,  457 => 141,  454 => 140,  450 => 139,  437 => 133,  433 => 131,  430 => 130,  426 => 129,  413 => 123,  409 => 121,  406 => 120,  402 => 119,  389 => 113,  385 => 111,  382 => 110,  378 => 109,  365 => 103,  361 => 101,  358 => 100,  354 => 99,  341 => 93,  337 => 91,  334 => 90,  330 => 89,  317 => 83,  313 => 81,  310 => 80,  306 => 79,  293 => 73,  289 => 71,  286 => 70,  282 => 69,  269 => 63,  265 => 61,  262 => 60,  258 => 59,  253 => 57,  245 => 54,  242 => 53,  238 => 52,  223 => 46,  213 => 45,  203 => 44,  193 => 43,  183 => 42,  173 => 41,  163 => 40,  153 => 39,  143 => 38,  133 => 37,  123 => 36,  113 => 35,  103 => 34,  87 => 21,  80 => 17,  73 => 13,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
/*                 <td> <div class="vertical-text"> <div class="vertical-text__inner"><a href='{{ path('nox_intranet_administration_user', {'roleUser': 'ROLE_RH'}) }}' class='RH'> <p> {% if roleUser == 'ROLE_RH' %} <img src="{{ asset('bundles/noxintranetadministration/images/Arrow.png') }}" class="imgRole"> {% endif %}RH </p> </a></div></div></td>*/
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
