<?php

/* NoxIntranetAdministrationBundle:Administration:administration.html.twig */
class __TwigTemplate_be6cc45ff63db9c5fbff4cde4afb9112a454ebeb10bed339eae46460fb429fa1 extends Twig_Template
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
        $__internal_a320170d0c6c1929542628bbc3841c253e382b13cd469df3005c36cffe237083 = $this->env->getExtension("native_profiler");
        $__internal_a320170d0c6c1929542628bbc3841c253e382b13cd469df3005c36cffe237083->enter($__internal_a320170d0c6c1929542628bbc3841c253e382b13cd469df3005c36cffe237083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:Administration:administration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a320170d0c6c1929542628bbc3841c253e382b13cd469df3005c36cffe237083->leave($__internal_a320170d0c6c1929542628bbc3841c253e382b13cd469df3005c36cffe237083_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_eee2d61200e99c924c6aebeaad342e37940f5d0d38e4973d08ce412ba3628ab8 = $this->env->getExtension("native_profiler");
        $__internal_eee2d61200e99c924c6aebeaad342e37940f5d0d38e4973d08ce412ba3628ab8->enter($__internal_eee2d61200e99c924c6aebeaad342e37940f5d0d38e4973d08ce412ba3628ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration
";
        
        $__internal_eee2d61200e99c924c6aebeaad342e37940f5d0d38e4973d08ce412ba3628ab8->leave($__internal_eee2d61200e99c924c6aebeaad342e37940f5d0d38e4973d08ce412ba3628ab8_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_ee48e9c2d7a4d6471191cddac80f6542fad2875849c7efb65fa0203917ea7a57 = $this->env->getExtension("native_profiler");
        $__internal_ee48e9c2d7a4d6471191cddac80f6542fad2875849c7efb65fa0203917ea7a57->enter($__internal_ee48e9c2d7a4d6471191cddac80f6542fad2875849c7efb65fa0203917ea7a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration";
        
        $__internal_ee48e9c2d7a4d6471191cddac80f6542fad2875849c7efb65fa0203917ea7a57->leave($__internal_ee48e9c2d7a4d6471191cddac80f6542fad2875849c7efb65fa0203917ea7a57_prof);

    }

    // line 8
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        $__internal_598ff8ff7ba169c27fad326b1b7e691df1ae6e17ccd4a393694bbc629d5ef725 = $this->env->getExtension("native_profiler");
        $__internal_598ff8ff7ba169c27fad326b1b7e691df1ae6e17ccd4a393694bbc629d5ef725->enter($__internal_598ff8ff7ba169c27fad326b1b7e691df1ae6e17ccd4a393694bbc629d5ef725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousMessageAccueil"));

        echo "Veuillez sélectionner le type de contenu à gérer.";
        
        $__internal_598ff8ff7ba169c27fad326b1b7e691df1ae6e17ccd4a393694bbc629d5ef725->leave($__internal_598ff8ff7ba169c27fad326b1b7e691df1ae6e17ccd4a393694bbc629d5ef725_prof);

    }

    // line 11
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_2c0c98efb445de6a6d005dabf465b0a6181c05031b4ee4cd9d98adf2aac2644b = $this->env->getExtension("native_profiler");
        $__internal_2c0c98efb445de6a6d005dabf465b0a6181c05031b4ee4cd9d98adf2aac2644b->enter($__internal_2c0c98efb445de6a6d005dabf465b0a6181c05031b4ee4cd9d98adf2aac2644b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 12
        echo "
    <div class=\"iconContener\">

        ";
        // line 15
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 16
            echo "
            <div class=\"sousMessageAcceuil\"> 
                <h4> Configuration Intranet :  </h4>
            </div>

            ";
            // line 21
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"))) {
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
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "local", array()) == true))) {
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
            echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_archives");
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

        <!-- Communication -->
        <a href=\"";
        // line 190
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_communication");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Communication-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Communication-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Communication-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Communication</figcaption>
            </figure>
        </a>

        <!-- Compétences -->
        <a href=\"";
        // line 202
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_liens");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Competences-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Competences-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Competences-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Compétences</figcaption>
            </figure>
        </a>

        <!-- FAQ -->
        <a href=\"";
        // line 214
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_liens");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/FAQ-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/FAQ-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/FAQ-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>FAQ</figcaption>
            </figure>
        </a>

        <br>

        <!-- Liens -->
        <a href=\"";
        // line 228
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_liens");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Link-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Link-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Link-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Liens</figcaption>
            </figure>
        </a>


        <!-- Procédures -->
        <a href=\"";
        // line 241
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_liens");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Procedures-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Procedures-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Procedures-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Procédures</figcaption>
            </figure>
        </a>

        <!-- Assurance qualité (a ajouter) 
        <a href=\"";
        // line 253
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_liens");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Thumbs-Up-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Thumbs-Up-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Thumbs-Up-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Assurance qualité</figcaption>
            </figure>
        </a>
        --> 

        <!-- Références -->
        <a href=\"";
        // line 266
        echo $this->env->getExtension('routing')->getPath("nox_intranet_references");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Reference-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Reference-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Reference-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Références</figcaption>
            </figure>
        </a>

        <!-- Ticketing -->
        <a href=\"";
        // line 278
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_ticketing");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Ticket-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Ticket-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Ticket-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Ticketing</figcaption>
            </figure>
        </a>

    </div>

";
        
        $__internal_2c0c98efb445de6a6d005dabf465b0a6181c05031b4ee4cd9d98adf2aac2644b->leave($__internal_2c0c98efb445de6a6d005dabf465b0a6181c05031b4ee4cd9d98adf2aac2644b_prof);

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
        return array (  606 => 283,  602 => 282,  598 => 281,  592 => 278,  582 => 271,  578 => 270,  574 => 269,  568 => 266,  557 => 258,  553 => 257,  549 => 256,  543 => 253,  533 => 246,  529 => 245,  525 => 244,  519 => 241,  508 => 233,  504 => 232,  500 => 231,  494 => 228,  482 => 219,  478 => 218,  474 => 217,  468 => 214,  458 => 207,  454 => 206,  450 => 205,  444 => 202,  434 => 195,  430 => 194,  426 => 193,  420 => 190,  412 => 184,  402 => 177,  398 => 176,  394 => 175,  388 => 172,  378 => 165,  374 => 164,  370 => 163,  364 => 160,  354 => 153,  350 => 152,  346 => 151,  340 => 148,  329 => 140,  325 => 139,  321 => 138,  315 => 135,  303 => 126,  299 => 125,  295 => 124,  289 => 121,  279 => 114,  275 => 113,  271 => 112,  265 => 109,  255 => 102,  251 => 101,  247 => 100,  241 => 97,  225 => 84,  221 => 83,  217 => 82,  211 => 79,  201 => 72,  197 => 71,  193 => 70,  187 => 67,  183 => 65,  173 => 58,  169 => 57,  165 => 56,  159 => 53,  155 => 51,  153 => 50,  143 => 43,  139 => 42,  135 => 41,  129 => 38,  125 => 36,  115 => 29,  111 => 28,  107 => 27,  101 => 24,  97 => 22,  95 => 21,  88 => 16,  86 => 15,  81 => 12,  75 => 11,  63 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
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
/*             <a href="{{ path('nox_intranet_administration_archives') }}" class="icon">*/
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
/*         <!-- Compétences -->*/
/*         <a href="{{ path('nox_intranet_administration_liens') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetadministration/images/Competences-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Competences-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Competences-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Compétences</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <!-- FAQ -->*/
/*         <a href="{{ path('nox_intranet_administration_liens') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetadministration/images/FAQ-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/FAQ-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/FAQ-128.png') }}';"*/
/*                     > */
/*                 <figcaption>FAQ</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <br>*/
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
/* */
/*         <!-- Procédures -->*/
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
/* */
/*         <!-- Assurance qualité (a ajouter) */
/*         <a href="{{ path('nox_intranet_administration_liens') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetadministration/images/Thumbs-Up-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Thumbs-Up-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Thumbs-Up-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Assurance qualité</figcaption>*/
/*             </figure>*/
/*         </a>*/
/*         --> */
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
