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
        $__internal_e4c83040d3464bc593e8867fcba3a346bd059d70f6327059aeed687a499f74c2 = $this->env->getExtension("native_profiler");
        $__internal_e4c83040d3464bc593e8867fcba3a346bd059d70f6327059aeed687a499f74c2->enter($__internal_e4c83040d3464bc593e8867fcba3a346bd059d70f6327059aeed687a499f74c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationUser:administrationUser2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4c83040d3464bc593e8867fcba3a346bd059d70f6327059aeed687a499f74c2->leave($__internal_e4c83040d3464bc593e8867fcba3a346bd059d70f6327059aeed687a499f74c2_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_948ad810ce155a6b0f47f6da56a7ecbdbb1d1f2159d215d511b06c7979bb5449 = $this->env->getExtension("native_profiler");
        $__internal_948ad810ce155a6b0f47f6da56a7ecbdbb1d1f2159d215d511b06c7979bb5449->enter($__internal_948ad810ce155a6b0f47f6da56a7ecbdbb1d1f2159d215d511b06c7979bb5449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo "Administration utilisateurs";
        
        $__internal_948ad810ce155a6b0f47f6da56a7ecbdbb1d1f2159d215d511b06c7979bb5449->leave($__internal_948ad810ce155a6b0f47f6da56a7ecbdbb1d1f2159d215d511b06c7979bb5449_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_bbd05a8f7bfe80cb6c86c0d370e44ca2960c033048b350de8037fe18ac2410f6 = $this->env->getExtension("native_profiler");
        $__internal_bbd05a8f7bfe80cb6c86c0d370e44ca2960c033048b350de8037fe18ac2410f6->enter($__internal_bbd05a8f7bfe80cb6c86c0d370e44ca2960c033048b350de8037fe18ac2410f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration utilisateurs";
        
        $__internal_bbd05a8f7bfe80cb6c86c0d370e44ca2960c033048b350de8037fe18ac2410f6->leave($__internal_bbd05a8f7bfe80cb6c86c0d370e44ca2960c033048b350de8037fe18ac2410f6_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_c2b77aa219ede6ce7e3dd8f4eaadcdcf3dbeb1650ede00ce72c2c5e7d262b757 = $this->env->getExtension("native_profiler");
        $__internal_c2b77aa219ede6ce7e3dd8f4eaadcdcf3dbeb1650ede00ce72c2c5e7d262b757->enter($__internal_c2b77aa219ede6ce7e3dd8f4eaadcdcf3dbeb1650ede00ce72c2c5e7d262b757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
                <td colspan=10> Rôle </td>

                <td> Action </td>
            </tr>
            <tr>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 34
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_USER"));
        echo "' class='tous'> <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")) == "ROLE_USER")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Left-32.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Tous</p> </a> </div> </div> </td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 35
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_ADMIN"));
        echo "' class='admin'> <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")) == "ROLE_ADMIN")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Left-32.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Admin </p> </a> </div></div></td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 36
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_COMMUNICATION"));
        echo "' class='communication'> <p> ";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")) == "ROLE_COMMUNICATION")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Left-32.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Communication  </p></a> </div></div></td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 37
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_COMPETENCES"));
        echo "' class='competences'> <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")) == "ROLE_COMPETENCES")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Left-32.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Compétences </p> </a></div></div> </td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 38
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_FAQ"));
        echo "' class='faq'> <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")) == "ROLE_FAQ")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Left-32.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo " FAQ </p> </a> </div></div></td>
                <td><div class=\"vertical-text\"> <div class=\"vertical-text__inner\"> <a href='";
        // line 39
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_LIENS"));
        echo "' class='liens2'> <p> ";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")) == "ROLE_LIENS")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Left-32.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Liens </p>  </a> </div></div></td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 40
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_PROCEDURES"));
        echo "' class='procedures'> <p> ";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")) == "ROLE_PROCEDURES")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Left-32.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Procédures  </p></a> </div></div></td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 41
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_QUALITE"));
        echo "' class='qualite'>  <p> ";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")) == "ROLE_QUALITE")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Left-32.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Qualité </p>  </a></div></div> </td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 42
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_REFERENCES"));
        echo "' class='references'> <p> ";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")) == "ROLE_REFERENCES")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Left-32.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "Références </p> </a></div></div></td>
                <td> <div class=\"vertical-text\"> <div class=\"vertical-text__inner\"><a href='";
        // line 43
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "ROLE_RH"));
        echo "' class='RH'> <p> ";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")) == "ROLE_RH")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Left-32.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo "RH </p> </a></div></div></td>
                <td><div class=\"vertical-text\"> <div class=\"vertical-text__inner\"> <a href='";
        // line 44
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("roleUser" => "LOCAL"));
        echo "' class='local'>  <p>";
        if (((isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")) == "LOCAL")) {
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Left-32.png"), "html", null, true);
            echo "\" class=\"imgRole\"> ";
        }
        echo " Local </p>  </a> </div></div></td>
                <td><div class=\"vertical-text\"> <div class=\"vertical-text__inner\"> </div> </div> </td>
            </tr>



            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 51
            echo "                <tr>
                    <td> <p>  ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "agence", array()), "html", null, true);
            echo ") <p> </td>

                    <td>
                        <form type='GET' action='";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_user_edit", array("userID" => $this->getAttribute($context["user"], "id", array()), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
            echo "' id='userEdit' >
                            <input type='checkbox' name='Admin' value='Admin' id='admin' onclick='checkboxAdminClick(this);'
                                   ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 58
                echo "                                       ";
                if (($context["role"] == "ROLE_ADMIN")) {
                    // line 59
                    echo "                                           checked
                                       ";
                }
                // line 61
                echo "                                   ";
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
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 68
                echo "                                           ";
                if (($context["role"] == "ROLE_COMMUNICATION")) {
                    // line 69
                    echo "                                               checked
                                           ";
                }
                // line 71
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
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 78
                echo "                                           ";
                if (($context["role"] == "ROLE_COMPETENCES")) {
                    // line 79
                    echo "                                               checked
                                           ";
                }
                // line 81
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
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 88
                echo "                                           ";
                if (($context["role"] == "ROLE_FAQ")) {
                    // line 89
                    echo "                                               checked
                                           ";
                }
                // line 91
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
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 98
                echo "                                           ";
                if (($context["role"] == "ROLE_LIENS")) {
                    // line 99
                    echo "                                               checked
                                           ";
                }
                // line 101
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
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 108
                echo "                                           ";
                if (($context["role"] == "ROLE_PROCEDURES")) {
                    // line 109
                    echo "                                               checked
                                           ";
                }
                // line 111
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
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 118
                echo "                                           ";
                if (($context["role"] == "ROLE_QUALITE")) {
                    // line 119
                    echo "                                               checked
                                           ";
                }
                // line 121
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
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 128
                echo "                                           ";
                if (($context["role"] == "ROLE_REFERENCES")) {
                    // line 129
                    echo "                                               checked
                                           ";
                }
                // line 131
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
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 138
                echo "                                           ";
                if (($context["role"] == "ROLE_RH")) {
                    // line 139
                    echo "                                               checked
                                           ";
                }
                // line 141
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
            // line 146
            if ($this->getAttribute($context["user"], "local", array())) {
                // line 147
                echo "                                    oui
                                ";
            } else {
                // line 149
                echo "                                    non
                                ";
            }
            // line 151
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
        // line 159
        echo "



        </table>

        ";
        // line 165
        if (((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")) == null)) {
            // line 166
            echo "
            <div id='noResults'>

                Votre recherche n'a retourné aucun résultat.

            </div>

        ";
        }
        // line 174
        echo "
        <div id=\"choixPage\">

            <!-- Si une recherche est en cours. -->
            ";
        // line 178
        if (((isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche")) == true)) {
            // line 179
            echo "
                ";
            // line 180
            if (((isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")) > 1)) {
                // line 181
                echo "
                    <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->
                    ";
                // line 183
                if (((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) > 1)) {
                    // line 184
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => 1, "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
                    echo "\"> << </a>
                    ";
                }
                // line 186
                echo "                    <!-------------------------------------------------------------------------->

                    <!-- Affiche un lien vers la page précédente si elle existe -->
                    ";
                // line 189
                if ((((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1) >= 1)) {
                    // line 190
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
                    echo "\"> < </a>
                    ";
                }
                // line 192
                echo "                    <!---------------------------------------------------------->

                    <!-- Affichage des liens vers les pages précédente. -->
                    ";
                // line 195
                if ((((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1) >= 1)) {
                    // line 196
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 197
                        echo "
                            ";
                        // line 198
                        if (($context["i"] >= ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 2))) {
                            // line 199
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => $context["i"], "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
                            echo "\"> ";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo " </a>
                            ";
                        }
                        // line 201
                        echo "
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 203
                    echo "                    ";
                }
                // line 204
                echo "                    <!--------------------------------------------------->

                    <!-- Page courante -->
                    <a href=\"";
                // line 207
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
                echo "\"> <p id=\"pageActuel\">";
                echo twig_escape_filter($this->env, (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "html", null, true);
                echo "</p> </a>
                    <!------------------->

                    <!-- Affichage des liens vers les pages suivantes. -->
                    ";
                // line 211
                if ((((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                    // line 212
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 1), (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 213
                        echo "
                            ";
                        // line 214
                        if (($context["i"] <= ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 2))) {
                            // line 215
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => $context["i"], "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
                            echo "\"> ";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo " </a>
                            ";
                        }
                        // line 217
                        echo "
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 219
                    echo "                    ";
                }
                // line 220
                echo "                    <!--------------------------------------------------->

                    <!-- Affiche un lien vers la page suivante si elle existe -->
                    ";
                // line 223
                if ((((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                    // line 224
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
                    echo "\"> > </a>
                    ";
                }
                // line 226
                echo "                    <!------------------------------------------------------------>

                    <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->
                    ";
                // line 229
                if (((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) < (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                    // line 230
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_username", array("numPage" => (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")), "termeRecherche" => (isset($context["termeRecherche"]) ? $context["termeRecherche"] : $this->getContext($context, "termeRecherche")))), "html", null, true);
                    echo "\"> >> </a>
                    ";
                }
                // line 232
                echo "                    <!-------------------------------------------------------------------------->

                ";
            }
            // line 235
            echo "
                <!-- Si pas de recherche. -->
            ";
        } else {
            // line 238
            echo "
                ";
            // line 239
            if (((isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")) > 1)) {
                // line 240
                echo "
                    <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->
                    ";
                // line 242
                if (((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) > 1)) {
                    // line 243
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => 1, "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                    echo "\"> << </a>
                    ";
                }
                // line 245
                echo "                    <!-------------------------------------------------------------------------->

                    <!-- Affiche un lien vers la page précédente si elle existe -->
                    ";
                // line 248
                if ((((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1) >= 1)) {
                    // line 249
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                    echo "\"> < </a>
                    ";
                }
                // line 251
                echo "                    <!---------------------------------------------------------->

                    <!-- Affichage des liens vers les pages précédente. -->
                    ";
                // line 254
                if ((((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1) >= 1)) {
                    // line 255
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 1)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 256
                        echo "
                            <!-- Limite le nombre de pages précédentes. -->
                            ";
                        // line 258
                        if (($context["i"] >= ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) - 2))) {
                            // line 259
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => $context["i"], "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                            echo "\"> ";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo " </a>
                            ";
                        }
                        // line 261
                        echo "                            <!------------------------------------------->

                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 264
                    echo "                    ";
                }
                // line 265
                echo "                    <!--------------------------------------------------->

                    <!-- Page courante -->
                    <a href=\"";
                // line 268
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                echo "\"> <p id=\"pageActuel\"> ";
                echo twig_escape_filter($this->env, (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "html", null, true);
                echo " </p> </a>
                    <!------------------->

                    <!-- Affichage des liens vers les pages suivantes. -->
                    ";
                // line 272
                if ((((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                    // line 273
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 1), (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 274
                        echo "
                            <!-- Limite le nombre de pages suivantes. -->
                            ";
                        // line 276
                        if (($context["i"] <= ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 2))) {
                            // line 277
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => $context["i"], "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                            echo "\"> ";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo " </a>
                            ";
                        }
                        // line 279
                        echo "                            <!------------------------------------------>

                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 282
                    echo "                    ";
                }
                // line 283
                echo "                    <!--------------------------------------------------->

                    <!-- Affiche un lien vers la page suivante si elle existe -->
                    ";
                // line 286
                if ((((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                    // line 287
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 1), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                    echo "\"> > </a>
                    ";
                }
                // line 289
                echo "                    <!------------------------------------------------------------>

                    <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->
                    ";
                // line 292
                if (((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) < (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                    // line 293
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_user", array("numPage" => (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")), "roleUser" => (isset($context["roleUser"]) ? $context["roleUser"] : $this->getContext($context, "roleUser")))), "html", null, true);
                    echo "\"> >> </a>
                    ";
                }
                // line 295
                echo "                    <!-------------------------------------------------------------------------->

                ";
            }
            // line 298
            echo "
            ";
        }
        // line 300
        echo "            <!-------------------------->
        </div>         

    </div>
";
        
        $__internal_c2b77aa219ede6ce7e3dd8f4eaadcdcf3dbeb1650ede00ce72c2c5e7d262b757->leave($__internal_c2b77aa219ede6ce7e3dd8f4eaadcdcf3dbeb1650ede00ce72c2c5e7d262b757_prof);

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
        return array (  797 => 300,  793 => 298,  788 => 295,  782 => 293,  780 => 292,  775 => 289,  769 => 287,  767 => 286,  762 => 283,  759 => 282,  751 => 279,  743 => 277,  741 => 276,  737 => 274,  732 => 273,  730 => 272,  721 => 268,  716 => 265,  713 => 264,  705 => 261,  697 => 259,  695 => 258,  691 => 256,  686 => 255,  684 => 254,  679 => 251,  673 => 249,  671 => 248,  666 => 245,  660 => 243,  658 => 242,  654 => 240,  652 => 239,  649 => 238,  644 => 235,  639 => 232,  633 => 230,  631 => 229,  626 => 226,  620 => 224,  618 => 223,  613 => 220,  610 => 219,  603 => 217,  595 => 215,  593 => 214,  590 => 213,  585 => 212,  583 => 211,  574 => 207,  569 => 204,  566 => 203,  559 => 201,  551 => 199,  549 => 198,  546 => 197,  541 => 196,  539 => 195,  534 => 192,  528 => 190,  526 => 189,  521 => 186,  515 => 184,  513 => 183,  509 => 181,  507 => 180,  504 => 179,  502 => 178,  496 => 174,  486 => 166,  484 => 165,  476 => 159,  463 => 151,  459 => 149,  455 => 147,  453 => 146,  441 => 141,  437 => 139,  434 => 138,  430 => 137,  417 => 131,  413 => 129,  410 => 128,  406 => 127,  393 => 121,  389 => 119,  386 => 118,  382 => 117,  369 => 111,  365 => 109,  362 => 108,  358 => 107,  345 => 101,  341 => 99,  338 => 98,  334 => 97,  321 => 91,  317 => 89,  314 => 88,  310 => 87,  297 => 81,  293 => 79,  290 => 78,  286 => 77,  273 => 71,  269 => 69,  266 => 68,  262 => 67,  249 => 61,  245 => 59,  242 => 58,  238 => 57,  233 => 55,  225 => 52,  222 => 51,  218 => 50,  203 => 44,  193 => 43,  183 => 42,  173 => 41,  163 => 40,  153 => 39,  143 => 38,  133 => 37,  123 => 36,  113 => 35,  103 => 34,  87 => 21,  80 => 17,  73 => 13,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
/*                 <td colspan=10> Rôle </td>*/
/* */
/*                 <td> Action </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td> <div class="vertical-text"> <div class="vertical-text__inner"><a href='{{ path('nox_intranet_administration_user', {'roleUser': 'ROLE_USER'}) }}' class='tous'> <p>{% if roleUser == 'ROLE_USER' %}<img src="{{ asset('bundles/noxintranetadministration/images/Arrow-Left-32.png') }}" class="imgRole"> {% endif %}Tous</p> </a> </div> </div> </td>*/
/*                 <td> <div class="vertical-text"> <div class="vertical-text__inner"><a href='{{ path('nox_intranet_administration_user', {'roleUser': 'ROLE_ADMIN'}) }}' class='admin'> <p>{% if roleUser == 'ROLE_ADMIN' %} <img src="{{ asset('bundles/noxintranetadministration/images/Arrow-Left-32.png') }}" class="imgRole"> {% endif %}Admin </p> </a> </div></div></td>*/
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
