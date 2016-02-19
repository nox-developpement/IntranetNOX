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
        $__internal_33d8972038f09ea3a9f47042d0a91b98ff046d60907adfa82b82a8198a3f6ccf = $this->env->getExtension("native_profiler");
        $__internal_33d8972038f09ea3a9f47042d0a91b98ff046d60907adfa82b82a8198a3f6ccf->enter($__internal_33d8972038f09ea3a9f47042d0a91b98ff046d60907adfa82b82a8198a3f6ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:Administration:administration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33d8972038f09ea3a9f47042d0a91b98ff046d60907adfa82b82a8198a3f6ccf->leave($__internal_33d8972038f09ea3a9f47042d0a91b98ff046d60907adfa82b82a8198a3f6ccf_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_1bb38511cc2309baeb06a404d95d5829caf8053d0520d6ea375542df23e7ce04 = $this->env->getExtension("native_profiler");
        $__internal_1bb38511cc2309baeb06a404d95d5829caf8053d0520d6ea375542df23e7ce04->enter($__internal_1bb38511cc2309baeb06a404d95d5829caf8053d0520d6ea375542df23e7ce04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration
";
        
        $__internal_1bb38511cc2309baeb06a404d95d5829caf8053d0520d6ea375542df23e7ce04->leave($__internal_1bb38511cc2309baeb06a404d95d5829caf8053d0520d6ea375542df23e7ce04_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_414830ecc7763d2075bb6ca0bf71e2173c34825cedcd121432e159767d08ffb7 = $this->env->getExtension("native_profiler");
        $__internal_414830ecc7763d2075bb6ca0bf71e2173c34825cedcd121432e159767d08ffb7->enter($__internal_414830ecc7763d2075bb6ca0bf71e2173c34825cedcd121432e159767d08ffb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration";
        
        $__internal_414830ecc7763d2075bb6ca0bf71e2173c34825cedcd121432e159767d08ffb7->leave($__internal_414830ecc7763d2075bb6ca0bf71e2173c34825cedcd121432e159767d08ffb7_prof);

    }

    // line 8
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        $__internal_56c4da06fa00888c70316a96183a29bf0ede3570fb4aa6336ffd5bcf8a8cd28f = $this->env->getExtension("native_profiler");
        $__internal_56c4da06fa00888c70316a96183a29bf0ede3570fb4aa6336ffd5bcf8a8cd28f->enter($__internal_56c4da06fa00888c70316a96183a29bf0ede3570fb4aa6336ffd5bcf8a8cd28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousMessageAccueil"));

        echo "Veuillez sélectionner le type de contenu à gérer.";
        
        $__internal_56c4da06fa00888c70316a96183a29bf0ede3570fb4aa6336ffd5bcf8a8cd28f->leave($__internal_56c4da06fa00888c70316a96183a29bf0ede3570fb4aa6336ffd5bcf8a8cd28f_prof);

    }

    // line 11
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_3ed2d546a902aae595a296757264325bfc8a3a0bee8b64b5870345e7ef0f471d = $this->env->getExtension("native_profiler");
        $__internal_3ed2d546a902aae595a296757264325bfc8a3a0bee8b64b5870345e7ef0f471d->enter($__internal_3ed2d546a902aae595a296757264325bfc8a3a0bee8b64b5870345e7ef0f471d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/User-Shield-128.png"), "html", null, true);
                echo "\" 
                            onmouseover=\"this.src = '";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/User-Shield-128-hover.png"), "html", null, true);
                echo "';\" 
                            onmouseout=\"this.src = '";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/User-Shield-128.png"), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Password-Text-01-128.png"), "html", null, true);
                echo "\" 
                            onmouseover=\"this.src = '";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Password-Text-01-128-hover.png"), "html", null, true);
                echo "';\" 
                            onmouseout=\"this.src = '";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Password-Text-01-128.png"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Data-Connect-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Data-Connect-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Data-Connect-128.png"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/User-Group-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/User-Group-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/User-Group-128.png"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Calendar-Date-04-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Calendar-Date-04-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Calendar-Date-04-128.png"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Mobile-Phone-Message-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Mobile-Phone-Message-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Mobile-Phone-Message-128.png"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Message-Information-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 152
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Message-Information-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Message-Information-128.png"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Server-02-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 176
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Server-02-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 177
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Server-02-128.png"), "html", null, true);
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
        
        <!-- Assistant d'affaire -->
        <a href=\"";
        // line 190
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_affaires");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Document-Zoom-In-03-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Document-Zoom-In-03-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Document-Zoom-In-03-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Assistant d'affaire</figcaption>
            </figure>
        </a>
        
        <!-- Assurance qualité -->
        <a href=\"";
        // line 202
        echo $this->env->getExtension('routing')->getPath("nox_intranet_aq");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Hand-Sign-06-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Hand-Sign-06-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Hand-Sign-06-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Assurance qualité</figcaption>
            </figure>
        </a>

        <!-- Communication -->
        <a href=\"";
        // line 214
        echo $this->env->getExtension('routing')->getPath("nox_intranet_communication");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Messages-Information-01-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Messages-Information-01-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Messages-Information-01-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Communication</figcaption>
            </figure>
        </a>

        <!-- Compétences (en atttente)
        <a href=\"";
        // line 226
        echo $this->env->getExtension('routing')->getPath("nox_intranet_competences");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Competences-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Competences-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Competences-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Compétences</figcaption>
            </figure>
        </a>
        <!------------------------>      

            <br>

        ";
        // line 240
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_FAQ"))) {
            echo "        
            <!-- FAQ -->
            <a href=\"";
            // line 242
            echo $this->env->getExtension('routing')->getPath("nox_intranet_faq");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 245
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Help-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 246
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Help-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 247
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Help-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>FAQ</figcaption>
                </figure>
            </a>
                        
        ";
        }
        // line 254
        echo "
        <!-- Liens -->
        <a href=\"";
        // line 256
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_liens");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Link-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Link-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Link-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Liens</figcaption>
            </figure>
        </a>

        <!-- Procédures (A ajouté)
        <a href=\"";
        // line 268
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_liens");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Procedures-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Procedures-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Procedures-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Procédures</figcaption>
            </figure>
        </a>
        -->

        <!-- Références -->
        <a href=\"";
        // line 281
        echo $this->env->getExtension('routing')->getPath("nox_intranet_references");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Sort-Ascending-01-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Sort-Ascending-01-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Sort-Ascending-01-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Références</figcaption>
            </figure>
        </a>

        <!-- Ticketing -->
        <a href=\"";
        // line 293
        echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_ticketing");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Ticketing-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Ticketing-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Ticketing-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Ticketing</figcaption>
            </figure>
        </a>

    </div>

";
        
        $__internal_3ed2d546a902aae595a296757264325bfc8a3a0bee8b64b5870345e7ef0f471d->leave($__internal_3ed2d546a902aae595a296757264325bfc8a3a0bee8b64b5870345e7ef0f471d_prof);

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
        return array (  638 => 298,  634 => 297,  630 => 296,  624 => 293,  614 => 286,  610 => 285,  606 => 284,  600 => 281,  589 => 273,  585 => 272,  581 => 271,  575 => 268,  565 => 261,  561 => 260,  557 => 259,  551 => 256,  547 => 254,  537 => 247,  533 => 246,  529 => 245,  523 => 242,  518 => 240,  506 => 231,  502 => 230,  498 => 229,  492 => 226,  482 => 219,  478 => 218,  474 => 217,  468 => 214,  458 => 207,  454 => 206,  450 => 205,  444 => 202,  434 => 195,  430 => 194,  426 => 193,  420 => 190,  412 => 184,  402 => 177,  398 => 176,  394 => 175,  388 => 172,  378 => 165,  374 => 164,  370 => 163,  364 => 160,  354 => 153,  350 => 152,  346 => 151,  340 => 148,  329 => 140,  325 => 139,  321 => 138,  315 => 135,  303 => 126,  299 => 125,  295 => 124,  289 => 121,  279 => 114,  275 => 113,  271 => 112,  265 => 109,  255 => 102,  251 => 101,  247 => 100,  241 => 97,  225 => 84,  221 => 83,  217 => 82,  211 => 79,  201 => 72,  197 => 71,  193 => 70,  187 => 67,  183 => 65,  173 => 58,  169 => 57,  165 => 56,  159 => 53,  155 => 51,  153 => 50,  143 => 43,  139 => 42,  135 => 41,  129 => 38,  125 => 36,  115 => 29,  111 => 28,  107 => 27,  101 => 24,  97 => 22,  95 => 21,  88 => 16,  86 => 15,  81 => 12,  75 => 11,  63 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
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
/*                             src="{{ asset('bundles/noxintranetadministration/images/User-Shield-128.png') }}" */
/*                             onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/User-Shield-128-hover.png') }}';" */
/*                             onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/User-Shield-128.png') }}';"*/
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
/*                             src="{{ asset('bundles/noxintranetadministration/images/Password-Text-01-128.png') }}" */
/*                             onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Password-Text-01-128-hover.png') }}';" */
/*                             onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Password-Text-01-128.png') }}';"*/
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
/*                         src="{{ asset('bundles/noxintranetadministration/images/Data-Connect-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Data-Connect-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Data-Connect-128.png') }}';"*/
/*                         > */
/*                     <figcaption>Synchro. AD</figcaption>*/
/*                 </figure>*/
/*             </a>*/
/* */
/*             <!-- Administration Utilisateurs -->*/
/*             <a href="{{ path('nox_intranet_administration_user') }}" class="icon">*/
/*                 <figure>*/
/*                     <img */
/*                         src="{{ asset('bundles/noxintranetadministration/images/User-Group-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/User-Group-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/User-Group-128.png') }}';"*/
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
/*                         src="{{ asset('bundles/noxintranetadministration/images/Calendar-Date-04-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Calendar-Date-04-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Calendar-Date-04-128.png') }}';"*/
/*                         > */
/*                     <figcaption>Av. projet</figcaption>*/
/*                 </figure>*/
/*             </a>*/
/* */
/*             <!-- Demande Mat/log -->*/
/*             <a href="{{ path('nox_intranet_administration_materiel') }}" class="icon">*/
/*                 <figure>*/
/*                     <img */
/*                         src="{{ asset('bundles/noxintranetadministration/images/Mobile-Phone-Message-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Mobile-Phone-Message-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Mobile-Phone-Message-128.png') }}';"*/
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
/*                         src="{{ asset('bundles/noxintranetadministration/images/Message-Information-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Message-Information-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Message-Information-128.png') }}';"*/
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
/*                         src="{{ asset('bundles/noxintranetadministration/images/Server-02-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Server-02-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Server-02-128.png') }}';"*/
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
/*         <!-- Assistant d'affaire -->*/
/*         <a href="{{ path('nox_intranet_administration_affaires') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetadministration/images/Document-Zoom-In-03-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Document-Zoom-In-03-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Document-Zoom-In-03-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Assistant d'affaire</figcaption>*/
/*             </figure>*/
/*         </a>*/
/*         */
/*         <!-- Assurance qualité -->*/
/*         <a href="{{ path('nox_intranet_aq') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetadministration/images/Hand-Sign-06-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Hand-Sign-06-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Hand-Sign-06-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Assurance qualité</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <!-- Communication -->*/
/*         <a href="{{ path('nox_intranet_communication') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetadministration/images/Messages-Information-01-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Messages-Information-01-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Messages-Information-01-128.png') }}';"*/
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
/*         <!------------------------>      */
/* */
/*             <br>*/
/* */
/*         {% if app.user and is_granted('ROLE_FAQ') %}        */
/*             <!-- FAQ -->*/
/*             <a href="{{ path('nox_intranet_faq') }}" class="icon">*/
/*                 <figure>*/
/*                     <img */
/*                         src="{{ asset('bundles/noxintranetadministration/images/Help-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Help-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Help-128.png') }}';"*/
/*                         > */
/*                     <figcaption>FAQ</figcaption>*/
/*                 </figure>*/
/*             </a>*/
/*                         */
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
/*                     src="{{ asset('bundles/noxintranetadministration/images/Sort-Ascending-01-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Sort-Ascending-01-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Sort-Ascending-01-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Références</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <!-- Ticketing -->*/
/*         <a href="{{ path('nox_intranet_administration_ticketing') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetadministration/images/Ticketing-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Ticketing-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Ticketing-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Ticketing</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
