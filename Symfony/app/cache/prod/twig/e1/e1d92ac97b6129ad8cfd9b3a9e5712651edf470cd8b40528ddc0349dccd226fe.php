<?php

/* NoxIntranetAdministrationBundle:Administration:administration.html.twig */
class __TwigTemplate_a4e4a4927ac5113323cf6af21cdf60a25081a99a5992f472af71158c2b63dcf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:Administration:administration.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
            'sousMessageAccueil' => array($this, 'block_sousMessageAccueil'),
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
        // line 4
        echo "    Administration
";
    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Administration";
    }

    // line 8
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        echo "Veuillez sélectionner le type de contenu à gérer.";
    }

    // line 11
    public function block_contenu($context, array $blocks = array())
    {
        // line 12
        echo "
    <div class=\"iconContener\">

        ";
        // line 15
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 16
            echo "
            <div class=\"sousMessageAcceuil\"> 
                <h4> Configuration Intranet :  </h4>
            </div>

            ";
            // line 21
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"))) {
                // line 22
                echo "
                <!-- Administration Administrateur -->
                <a href=\"";
                // line 24
                echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user_admin");
                echo "\" class=\"icon\">
                    <figure>
                        <img 
                            src=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/User-Admin-128.png"), "html", null, true);
                echo "\" 
                            onmouseover=\"this.src = '";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/User-Admin-128-hover.png"), "html", null, true);
                echo "';\" 
                            onmouseout=\"this.src = '";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/User-Admin-128.png"), "html", null, true);
                echo "';\"
                            > 
                        <figcaption>Administrateurs</figcaption>
                    </figure>
                </a>

            ";
            }
            // line 36
            echo "
            <!-- Licenses (A faire) 
            <a href=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_userDB");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Licenses-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Licenses-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Licenses-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Licenses</figcaption>
                </figure>
            </a>
            -->

            ";
            // line 50
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "local", array()) == true))) {
                // line 51
                echo "
                <!-- Mot de passe -->
                <a href=\"";
                // line 53
                echo $this->env->getExtension('routing')->getPath("nox_intranet_admin_mdp");
                echo "\" class=\"icon\">
                    <figure>
                        <img 
                            src=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Password-128.png"), "html", null, true);
                echo "\" 
                            onmouseover=\"this.src = '";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Password-128-hover.png"), "html", null, true);
                echo "';\" 
                            onmouseout=\"this.src = '";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Password-128.png"), "html", null, true);
                echo "';\"
                            > 
                        <figcaption>Modif. MDP</figcaption>
                    </figure>
                </a>

            ";
            }
            // line 65
            echo "
            <!-- Synchro. AD -->
            <a href=\"";
            // line 67
            echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_userDB");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Database-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Database-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Database-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Synchro. AD</figcaption>
                </figure>
            </a>

            <!-- Administration Utilisateurs -->
            <a href=\"";
            // line 79
            echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_user");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Users-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Users-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Users-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Utilisateurs</figcaption>
                </figure>
            </a>

            <br>

            <div class=\"sousMessageAcceuil\"> 
                <h4> Publication DSI :  </h4>
            </div>

            <!-- Archives -->
            <a href=\"";
            // line 97
            echo $this->env->getExtension('routing')->getPath("nox_intranet_archives");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Archive-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Archive-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Archive-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Archives</figcaption>
                </figure>
            </a>

            <!-- Avancement Projet -->
            <a href=\"";
            // line 109
            echo $this->env->getExtension('routing')->getPath("nox_intranet_avancement_projet");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Date-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Date-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Date-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Av. projet</figcaption>
                </figure>
            </a>

            <!-- Demande Mat/log -->
            <a href=\"";
            // line 121
            echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_materiel");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Materiel-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Materiel-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Materiel-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Demande Mat/log</figcaption>
                </figure>
            </a> 

            <br>

            <!-- Imprimantes (A faire)
            <a href=\"";
            // line 135
            echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_imprimantes");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Printer-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Printer-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 140
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Printer-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Imprimantes</figcaption>
                </figure>
            </a> 
            -->

            <!-- Informations -->
            <a href=\"";
            // line 148
            echo $this->env->getExtension('routing')->getPath("nox_intranet_information");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Information-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 152
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Information-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Information-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Informations</figcaption>
                </figure>
            </a> 

            <!-- News DSI -->
            <a href=\"";
            // line 160
            echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_news");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 163
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Newspaper-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 164
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Newspaper-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 165
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Newspaper-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>News DSI</figcaption>
                </figure>
            </a>

            <!-- Serveurs -->
            <a href=\"";
            // line 172
            echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_serveurs");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Server-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 176
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Server-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 177
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Server-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Serveurs</figcaption>
                </figure>
            </a>

        ";
        }
        // line 184
        echo "
        <div class=\"sousMessageAcceuil\"> 
            <h4> Publication Collaborateurs :  </h4>
        </div>
        
        <!-- Assurance qualité -->
        <a href=\"";
        // line 190
        echo $this->env->getExtension('routing')->getPath("nox_intranet_aq");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Thumbs-Up-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Thumbs-Up-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Thumbs-Up-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Assurance qualité</figcaption>
            </figure>
        </a>

        <!-- Communication -->
        <a href=\"";
        // line 202
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_communication");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Communication-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Communication-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Communication-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Communication</figcaption>
            </figure>
        </a>

        <!-- Compétences (en atttente)
        <a href=\"";
        // line 214
        echo $this->env->getExtension('routing')->getPath("nox_intranet_competences");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Competences-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Competences-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Competences-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Compétences</figcaption>
            </figure>
        </a>
        <!------------------------>

        ";
        // line 226
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_FAQ"))) {
            echo "        
            <!-- FAQ -->
            <a href=\"";
            // line 228
            echo $this->env->getExtension('routing')->getPath("nox_intranet_faq");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 231
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/FAQ-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 232
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/FAQ-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 233
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/FAQ-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>FAQ</figcaption>
                </figure>
            </a>

            <br>
        ";
        }
        // line 241
        echo "
        <!-- Liens -->
        <a href=\"";
        // line 243
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_liens");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Link-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Link-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Link-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Liens</figcaption>
            </figure>
        </a>

        ";
        // line 254
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) &&  !$this->env->getExtension('security')->isGranted("ROLE_FAQ"))) {
            echo "        

            <br>

        ";
        }
        // line 259
        echo "
        <!-- Procédures (A ajouté)
        <a href=\"";
        // line 261
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_liens");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Procedures-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Procedures-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Procedures-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Procédures</figcaption>
            </figure>
        </a>
        -->

        <!-- Références -->
        <a href=\"";
        // line 274
        echo $this->env->getExtension('routing')->getPath("nox_intranet_references");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Reference-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Reference-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Reference-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Références</figcaption>
            </figure>
        </a>

        <!-- Ticketing -->
        <a href=\"";
        // line 286
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_ticketing");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Ticket-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Ticket-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Ticket-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Ticketing</figcaption>
            </figure>
        </a>

    </div>

";
    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:Administration:administration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  597 => 291,  593 => 290,  589 => 289,  583 => 286,  573 => 279,  569 => 278,  565 => 277,  559 => 274,  548 => 266,  544 => 265,  540 => 264,  534 => 261,  530 => 259,  522 => 254,  513 => 248,  509 => 247,  505 => 246,  499 => 243,  495 => 241,  484 => 233,  480 => 232,  476 => 231,  470 => 228,  465 => 226,  455 => 219,  451 => 218,  447 => 217,  441 => 214,  431 => 207,  427 => 206,  423 => 205,  417 => 202,  407 => 195,  403 => 194,  399 => 193,  393 => 190,  385 => 184,  375 => 177,  371 => 176,  367 => 175,  361 => 172,  351 => 165,  347 => 164,  343 => 163,  337 => 160,  327 => 153,  323 => 152,  319 => 151,  313 => 148,  302 => 140,  298 => 139,  294 => 138,  288 => 135,  276 => 126,  272 => 125,  268 => 124,  262 => 121,  252 => 114,  248 => 113,  244 => 112,  238 => 109,  228 => 102,  224 => 101,  220 => 100,  214 => 97,  198 => 84,  194 => 83,  190 => 82,  184 => 79,  174 => 72,  170 => 71,  166 => 70,  160 => 67,  156 => 65,  146 => 58,  142 => 57,  138 => 56,  132 => 53,  128 => 51,  126 => 50,  116 => 43,  112 => 42,  108 => 41,  102 => 38,  98 => 36,  88 => 29,  84 => 28,  80 => 27,  74 => 24,  70 => 22,  68 => 21,  61 => 16,  59 => 15,  54 => 12,  51 => 11,  45 => 8,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Administration*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Administration{% endblock %}*/
/* {% block sousMessageAccueil %}Veuillez sélectionner le type de contenu à gérer.{% endblock %}*/
/* */
/* */
/* {% block contenu %}*/
/* */
/*     <div class="iconContener">*/
/* */
/*         {% if app.user and is_granted('ROLE_ADMIN') %}*/
/* */
/*             <div class="sousMessageAcceuil"> */
/*                 <h4> Configuration Intranet :  </h4>*/
/*             </div>*/
/* */
/*             {% if app.user and is_granted('ROLE_SUPER_ADMIN') %}*/
/* */
/*                 <!-- Administration Administrateur -->*/
/*                 <a href="{{ path('nox_intranet_administration_user_admin') }}" class="icon">*/
/*                     <figure>*/
/*                         <img */
/*                             src="{{ asset('bundles/noxintranetadministration/images/User-Admin-128.png') }}" */
/*                             onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/User-Admin-128-hover.png') }}';" */
/*                             onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/User-Admin-128.png') }}';"*/
/*                             > */
/*                         <figcaption>Administrateurs</figcaption>*/
/*                     </figure>*/
/*                 </a>*/
/* */
/*             {% endif %}*/
/* */
/*             <!-- Licenses (A faire) */
/*             <a href="{{ path('nox_intranet_administration_userDB') }}" class="icon">*/
/*                 <figure>*/
/*                     <img */
/*                         src="{{ asset('bundles/noxintranetadministration/images/Licenses-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Licenses-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Licenses-128.png') }}';"*/
/*                         > */
/*                     <figcaption>Licenses</figcaption>*/
/*                 </figure>*/
/*             </a>*/
/*             -->*/
/* */
/*             {% if app.user and app.user.local == true %}*/
/* */
/*                 <!-- Mot de passe -->*/
/*                 <a href="{{ path('nox_intranet_admin_mdp') }}" class="icon">*/
/*                     <figure>*/
/*                         <img */
/*                             src="{{ asset('bundles/noxintranetadministration/images/Password-128.png') }}" */
/*                             onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Password-128-hover.png') }}';" */
/*                             onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Password-128.png') }}';"*/
/*                             > */
/*                         <figcaption>Modif. MDP</figcaption>*/
/*                     </figure>*/
/*                 </a>*/
/* */
/*             {% endif %}*/
/* */
/*             <!-- Synchro. AD -->*/
/*             <a href="{{ path('nox_intranet_administration_userDB') }}" class="icon">*/
/*                 <figure>*/
/*                     <img */
/*                         src="{{ asset('bundles/noxintranetadministration/images/Database-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Database-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Database-128.png') }}';"*/
/*                         > */
/*                     <figcaption>Synchro. AD</figcaption>*/
/*                 </figure>*/
/*             </a>*/
/* */
/*             <!-- Administration Utilisateurs -->*/
/*             <a href="{{ path('nox_intranet_administration_user') }}" class="icon">*/
/*                 <figure>*/
/*                     <img */
/*                         src="{{ asset('bundles/noxintranetadministration/images/Users-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Users-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Users-128.png') }}';"*/
/*                         > */
/*                     <figcaption>Utilisateurs</figcaption>*/
/*                 </figure>*/
/*             </a>*/
/* */
/*             <br>*/
/* */
/*             <div class="sousMessageAcceuil"> */
/*                 <h4> Publication DSI :  </h4>*/
/*             </div>*/
/* */
/*             <!-- Archives -->*/
/*             <a href="{{ path('nox_intranet_archives') }}" class="icon">*/
/*                 <figure>*/
/*                     <img */
/*                         src="{{ asset('bundles/noxintranetadministration/images/Archive-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Archive-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Archive-128.png') }}';"*/
/*                         > */
/*                     <figcaption>Archives</figcaption>*/
/*                 </figure>*/
/*             </a>*/
/* */
/*             <!-- Avancement Projet -->*/
/*             <a href="{{ path('nox_intranet_avancement_projet') }}" class="icon">*/
/*                 <figure>*/
/*                     <img */
/*                         src="{{ asset('bundles/noxintranetadministration/images/Date-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Date-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Date-128.png') }}';"*/
/*                         > */
/*                     <figcaption>Av. projet</figcaption>*/
/*                 </figure>*/
/*             </a>*/
/* */
/*             <!-- Demande Mat/log -->*/
/*             <a href="{{ path('nox_intranet_administration_materiel') }}" class="icon">*/
/*                 <figure>*/
/*                     <img */
/*                         src="{{ asset('bundles/noxintranetadministration/images/Materiel-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Materiel-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Materiel-128.png') }}';"*/
/*                         > */
/*                     <figcaption>Demande Mat/log</figcaption>*/
/*                 </figure>*/
/*             </a> */
/* */
/*             <br>*/
/* */
/*             <!-- Imprimantes (A faire)*/
/*             <a href="{{ path('nox_intranet_administration_imprimantes') }}" class="icon">*/
/*                 <figure>*/
/*                     <img */
/*                         src="{{ asset('bundles/noxintranetadministration/images/Printer-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Printer-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Printer-128.png') }}';"*/
/*                         > */
/*                     <figcaption>Imprimantes</figcaption>*/
/*                 </figure>*/
/*             </a> */
/*             -->*/
/* */
/*             <!-- Informations -->*/
/*             <a href="{{ path('nox_intranet_information') }}" class="icon">*/
/*                 <figure>*/
/*                     <img */
/*                         src="{{ asset('bundles/noxintranetadministration/images/Information-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Information-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Information-128.png') }}';"*/
/*                         > */
/*                     <figcaption>Informations</figcaption>*/
/*                 </figure>*/
/*             </a> */
/* */
/*             <!-- News DSI -->*/
/*             <a href="{{ path('nox_intranet_administration_news') }}" class="icon">*/
/*                 <figure>*/
/*                     <img */
/*                         src="{{ asset('bundles/noxintranetadministration/images/Newspaper-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Newspaper-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Newspaper-128.png') }}';"*/
/*                         > */
/*                     <figcaption>News DSI</figcaption>*/
/*                 </figure>*/
/*             </a>*/
/* */
/*             <!-- Serveurs -->*/
/*             <a href="{{ path('nox_intranet_administration_serveurs') }}" class="icon">*/
/*                 <figure>*/
/*                     <img */
/*                         src="{{ asset('bundles/noxintranetressources/images/Server-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Server-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Server-128.png') }}';"*/
/*                         > */
/*                     <figcaption>Serveurs</figcaption>*/
/*                 </figure>*/
/*             </a>*/
/* */
/*         {% endif %}*/
/* */
/*         <div class="sousMessageAcceuil"> */
/*             <h4> Publication Collaborateurs :  </h4>*/
/*         </div>*/
/*         */
/*         <!-- Assurance qualité -->*/
/*         <a href="{{ path('nox_intranet_aq') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetcommunication/images/Thumbs-Up-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetcommunication/images/Thumbs-Up-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetcommunication/images/Thumbs-Up-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Assurance qualité</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <!-- Communication -->*/
/*         <a href="{{ path('nox_intranet_administration_communication') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetadministration/images/Communication-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Communication-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Communication-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Communication</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <!-- Compétences (en atttente)*/
/*         <a href="{{ path('nox_intranet_competences') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetadministration/images/Competences-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Competences-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Competences-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Compétences</figcaption>*/
/*             </figure>*/
/*         </a>*/
/*         <!------------------------>*/
/* */
/*         {% if app.user and is_granted('ROLE_FAQ') %}        */
/*             <!-- FAQ -->*/
/*             <a href="{{ path('nox_intranet_faq') }}" class="icon">*/
/*                 <figure>*/
/*                     <img */
/*                         src="{{ asset('bundles/noxintranetadministration/images/FAQ-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/FAQ-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/FAQ-128.png') }}';"*/
/*                         > */
/*                     <figcaption>FAQ</figcaption>*/
/*                 </figure>*/
/*             </a>*/
/* */
/*             <br>*/
/*         {% endif %}*/
/* */
/*         <!-- Liens -->*/
/*         <a href="{{ path('nox_intranet_administration_liens') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetadministration/images/Link-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Link-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Link-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Liens</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         {% if app.user and not is_granted('ROLE_FAQ') %}        */
/* */
/*             <br>*/
/* */
/*         {% endif %}*/
/* */
/*         <!-- Procédures (A ajouté)*/
/*         <a href="{{ path('nox_intranet_administration_liens') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetadministration/images/Procedures-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Procedures-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Procedures-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Procédures</figcaption>*/
/*             </figure>*/
/*         </a>*/
/*         -->*/
/* */
/*         <!-- Références -->*/
/*         <a href="{{ path('nox_intranet_references') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetadministration/images/Reference-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Reference-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Reference-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Références</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <!-- Ticketing -->*/
/*         <a href="{{ path('nox_intranet_administration_ticketing') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetadministration/images/Ticket-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Ticket-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Ticket-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Ticketing</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
