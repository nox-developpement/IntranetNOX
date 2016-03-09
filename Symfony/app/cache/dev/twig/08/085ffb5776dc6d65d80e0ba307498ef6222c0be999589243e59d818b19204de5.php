<?php

/* NoxIntranetCommunicationBundle:Accueil:affichageImage.html.twig */
class __TwigTemplate_677aba48ccbbff3c60fb545db8fe220c91470d9c571bd7d18f09377e8831cdda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetCommunicationBundle:Accueil:affichageImage.html.twig", 1);
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
        $__internal_911afee125c258e00a6657355fadd04e9c840a20caf444e4afda24d55b9ab553 = $this->env->getExtension("native_profiler");
        $__internal_911afee125c258e00a6657355fadd04e9c840a20caf444e4afda24d55b9ab553->enter($__internal_911afee125c258e00a6657355fadd04e9c840a20caf444e4afda24d55b9ab553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetCommunicationBundle:Accueil:affichageImage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_911afee125c258e00a6657355fadd04e9c840a20caf444e4afda24d55b9ab553->leave($__internal_911afee125c258e00a6657355fadd04e9c840a20caf444e4afda24d55b9ab553_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_deb1bf6375846ecc36e50e12f6fee52130a30ff864d9948a26953d832e9ebc8b = $this->env->getExtension("native_profiler");
        $__internal_deb1bf6375846ecc36e50e12f6fee52130a30ff864d9948a26953d832e9ebc8b->enter($__internal_deb1bf6375846ecc36e50e12f6fee52130a30ff864d9948a26953d832e9ebc8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo twig_escape_filter($this->env, (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "html", null, true);
        
        $__internal_deb1bf6375846ecc36e50e12f6fee52130a30ff864d9948a26953d832e9ebc8b->leave($__internal_deb1bf6375846ecc36e50e12f6fee52130a30ff864d9948a26953d832e9ebc8b_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_c55f116dd19f25952b7973bf652a7719c28858d9300f2ff4758b7d1642c86b93 = $this->env->getExtension("native_profiler");
        $__internal_c55f116dd19f25952b7973bf652a7719c28858d9300f2ff4758b7d1642c86b93->enter($__internal_c55f116dd19f25952b7973bf652a7719c28858d9300f2ff4758b7d1642c86b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo twig_escape_filter($this->env, (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "html", null, true);
        
        $__internal_c55f116dd19f25952b7973bf652a7719c28858d9300f2ff4758b7d1642c86b93->leave($__internal_c55f116dd19f25952b7973bf652a7719c28858d9300f2ff4758b7d1642c86b93_prof);

    }

    // line 6
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        $__internal_2e13dbdcd3b8b4834a4e85a15af2c7dc8c49b2826e23841375a8b692cfa1292c = $this->env->getExtension("native_profiler");
        $__internal_2e13dbdcd3b8b4834a4e85a15af2c7dc8c49b2826e23841375a8b692cfa1292c->enter($__internal_2e13dbdcd3b8b4834a4e85a15af2c7dc8c49b2826e23841375a8b692cfa1292c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousMessageAccueil"));

        echo "Pour télécharger une image faite un clic-droit dessus puis \"Enregistrer l'image sous...\"";
        
        $__internal_2e13dbdcd3b8b4834a4e85a15af2c7dc8c49b2826e23841375a8b692cfa1292c->leave($__internal_2e13dbdcd3b8b4834a4e85a15af2c7dc8c49b2826e23841375a8b692cfa1292c_prof);

    }

    // line 8
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_5fd9c9cbb3a7de037bd42cd1adc25b1f91546e3153f372795b65b4049b56a8f3 = $this->env->getExtension("native_profiler");
        $__internal_5fd9c9cbb3a7de037bd42cd1adc25b1f91546e3153f372795b65b4049b56a8f3->enter($__internal_5fd9c9cbb3a7de037bd42cd1adc25b1f91546e3153f372795b65b4049b56a8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 9
        echo "
    ";
        // line 10
        if ($this->env->getExtension('security')->isGranted("ROLE_COMMUNICATION")) {
            echo " 

        <div id=\"menuAdminNewsSI\" class='menuAdmin'>
            <h3> Interface de gestion de contenu </h3>
            <a onclick=\"openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "html", null, true);
            echo "', 'Gestionnaire de fichiers - ";
            echo twig_escape_filter($this->env, (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "html", null, true);
            echo "');\"> <h3> Ouvrir le gestionnaire de fichier </h3> </a>
        </div>

    ";
        }
        // line 18
        echo "
    <div id=\"choixPage\">

        ";
        // line 21
        if (((isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")) > 1)) {
            // line 22
            echo "
            <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->
            ";
            // line 24
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) > 1)) {
                // line 25
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("page" => 1, "dossier" => (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "config" => (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : $this->getContext($context, "chemin")))), "html", null, true);
                echo "\"> << </a>
            ";
            }
            // line 27
            echo "            <!-------------------------------------------------------------------------->

            <!-- Affiche un lien vers la page précédente si elle existe -->
            ";
            // line 30
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1) >= 1)) {
                // line 31
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "config" => (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : $this->getContext($context, "chemin")))), "html", null, true);
                echo "\"> < </a>
            ";
            }
            // line 33
            echo "            <!---------------------------------------------------------->

            <!-- Affichage des liens vers les pages précédente. -->
            ";
            // line 36
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1) >= 1)) {
                // line 37
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 38
                    echo "
                    ";
                    // line 39
                    if (($context["i"] >= ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 2))) {
                        // line 40
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("page" => $context["i"], "dossier" => (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "config" => (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : $this->getContext($context, "chemin")))), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 42
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "            ";
            }
            // line 45
            echo "            <!--------------------------------------------------->

            <!-- Page courante -->
            <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "config" => (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : $this->getContext($context, "chemin")))), "html", null, true);
            echo "\"> <p id=\"pageActuel\">";
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
            echo "</p> </a>
            <!------------------->

            <!-- Affichage des liens vers les pages suivantes. -->
            ";
            // line 52
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                // line 53
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1), (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 54
                    echo "
                    ";
                    // line 55
                    if (($context["i"] <= ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 2))) {
                        // line 56
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("page" => $context["i"], "dossier" => (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "config" => (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : $this->getContext($context, "chemin")))), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 58
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "            ";
            }
            // line 61
            echo "            <!--------------------------------------------------->

            <!-- Affiche un lien vers la page suivante si elle existe -->
            ";
            // line 64
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                // line 65
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "config" => (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : $this->getContext($context, "chemin")))), "html", null, true);
                echo "\"> > </a>
            ";
            }
            // line 67
            echo "            <!------------------------------------------------------------>

            <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->
            ";
            // line 70
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) < (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                // line 71
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("page" => (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "config" => (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : $this->getContext($context, "chemin")))), "html", null, true);
                echo "\"> >> </a>
            ";
            }
            // line 73
            echo "            <!-------------------------------------------------------------------------->

        ";
        }
        // line 76
        echo "
    </div>

    <div id=\"divAffichageImages\">

        ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 82
            echo "
            <img src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["image"]), "html", null, true);
            echo "\" class=\"downloadable\" />

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "
    </div>

    <div id=\"choixPage\">

        ";
        // line 91
        if (((isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")) > 1)) {
            // line 92
            echo "
            <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->
            ";
            // line 94
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) > 1)) {
                // line 95
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("page" => 1, "dossier" => (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "config" => (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : $this->getContext($context, "chemin")))), "html", null, true);
                echo "\"> << </a>
            ";
            }
            // line 97
            echo "            <!-------------------------------------------------------------------------->

            <!-- Affiche un lien vers la page précédente si elle existe -->
            ";
            // line 100
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1) >= 1)) {
                // line 101
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "config" => (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : $this->getContext($context, "chemin")))), "html", null, true);
                echo "\"> < </a>
            ";
            }
            // line 103
            echo "            <!---------------------------------------------------------->

            <!-- Affichage des liens vers les pages précédente. -->
            ";
            // line 106
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1) >= 1)) {
                // line 107
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 108
                    echo "
                    ";
                    // line 109
                    if (($context["i"] >= ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 2))) {
                        // line 110
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("page" => $context["i"], "dossier" => (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "config" => (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : $this->getContext($context, "chemin")))), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 112
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "            ";
            }
            // line 115
            echo "            <!--------------------------------------------------->

            <!-- Page courante -->
            <a href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "config" => (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : $this->getContext($context, "chemin")))), "html", null, true);
            echo "\"> <p id=\"pageActuel\">";
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
            echo "</p> </a>
            <!------------------->

            <!-- Affichage des liens vers les pages suivantes. -->
            ";
            // line 122
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                // line 123
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1), (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 124
                    echo "
                    ";
                    // line 125
                    if (($context["i"] <= ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 2))) {
                        // line 126
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("page" => $context["i"], "dossier" => (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "config" => (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : $this->getContext($context, "chemin")))), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 128
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 130
                echo "            ";
            }
            // line 131
            echo "            <!--------------------------------------------------->

            <!-- Affiche un lien vers la page suivante si elle existe -->
            ";
            // line 134
            if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                // line 135
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "config" => (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : $this->getContext($context, "chemin")))), "html", null, true);
                echo "\"> > </a>
            ";
            }
            // line 137
            echo "            <!------------------------------------------------------------>

            <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->
            ";
            // line 140
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) < (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")))) {
                // line 141
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("page" => (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage")), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "config" => (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : $this->getContext($context, "chemin")))), "html", null, true);
                echo "\"> >> </a>
            ";
            }
            // line 143
            echo "            <!-------------------------------------------------------------------------->

        ";
        }
        // line 146
        echo "
    </div>

";
        
        $__internal_5fd9c9cbb3a7de037bd42cd1adc25b1f91546e3153f372795b65b4049b56a8f3->leave($__internal_5fd9c9cbb3a7de037bd42cd1adc25b1f91546e3153f372795b65b4049b56a8f3_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetCommunicationBundle:Accueil:affichageImage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 146,  402 => 143,  396 => 141,  394 => 140,  389 => 137,  383 => 135,  381 => 134,  376 => 131,  373 => 130,  366 => 128,  358 => 126,  356 => 125,  353 => 124,  348 => 123,  346 => 122,  337 => 118,  332 => 115,  329 => 114,  322 => 112,  314 => 110,  312 => 109,  309 => 108,  304 => 107,  302 => 106,  297 => 103,  291 => 101,  289 => 100,  284 => 97,  278 => 95,  276 => 94,  272 => 92,  270 => 91,  263 => 86,  254 => 83,  251 => 82,  247 => 81,  240 => 76,  235 => 73,  229 => 71,  227 => 70,  222 => 67,  216 => 65,  214 => 64,  209 => 61,  206 => 60,  199 => 58,  191 => 56,  189 => 55,  186 => 54,  181 => 53,  179 => 52,  170 => 48,  165 => 45,  162 => 44,  155 => 42,  147 => 40,  145 => 39,  142 => 38,  137 => 37,  135 => 36,  130 => 33,  124 => 31,  122 => 30,  117 => 27,  111 => 25,  109 => 24,  105 => 22,  103 => 21,  98 => 18,  89 => 14,  82 => 10,  79 => 9,  73 => 8,  61 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}{{ dossier }}{% endblock %}*/
/* */
/* {% block messageAccueil %}{{ dossier }}{% endblock %}*/
/* {% block sousMessageAccueil %}Pour télécharger une image faite un clic-droit dessus puis "Enregistrer l'image sous..."{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     {% if is_granted('ROLE_COMMUNICATION') %} */
/* */
/*         <div id="menuAdminNewsSI" class='menuAdmin'>*/
/*             <h3> Interface de gestion de contenu </h3>*/
/*             <a onclick="openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/{{ config }}', 'Gestionnaire de fichiers - {{ dossier }}');"> <h3> Ouvrir le gestionnaire de fichier </h3> </a>*/
/*         </div>*/
/* */
/*     {% endif %}*/
/* */
/*     <div id="choixPage">*/
/* */
/*         {% if nbPage > 1 %}*/
/* */
/*             <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->*/
/*             {% if page > 1 %}*/
/*                 <a href="{{ path('nox_intranet_affichageImages', { 'page': 1, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> << </a>*/
/*             {% endif %}*/
/*             <!-------------------------------------------------------------------------->*/
/* */
/*             <!-- Affiche un lien vers la page précédente si elle existe -->*/
/*             {% if page-1  >= 1 %}*/
/*                 <a href="{{ path('nox_intranet_affichageImages', { 'page': page-1, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> < </a>*/
/*             {% endif %}*/
/*             <!---------------------------------------------------------->*/
/* */
/*             <!-- Affichage des liens vers les pages précédente. -->*/
/*             {% if page-1  >= 1 %}*/
/*                 {% for i in 1..page-1 %}*/
/* */
/*                     {% if i >= (page - 2) %}*/
/*                         <a href="{{ path('nox_intranet_affichageImages', { 'page': i, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> {{ i }} </a>*/
/*                     {% endif %}*/
/* */
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             <!--------------------------------------------------->*/
/* */
/*             <!-- Page courante -->*/
/*             <a href="{{ path('nox_intranet_affichageImages', { 'page': page, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> <p id="pageActuel">{{ page }}</p> </a>*/
/*             <!------------------->*/
/* */
/*             <!-- Affichage des liens vers les pages suivantes. -->*/
/*             {% if page+1  <= nbPage %}*/
/*                 {% for i in page+1..nbPage %}*/
/* */
/*                     {% if i <= (page + 2) %}*/
/*                         <a href="{{ path('nox_intranet_affichageImages', { 'page': i, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> {{ i }} </a>*/
/*                     {% endif %}*/
/* */
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             <!--------------------------------------------------->*/
/* */
/*             <!-- Affiche un lien vers la page suivante si elle existe -->*/
/*             {% if page+1  <= nbPage %}*/
/*                 <a href="{{ path('nox_intranet_affichageImages', { 'page': page+1, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> > </a>*/
/*             {% endif %}*/
/*             <!------------------------------------------------------------>*/
/* */
/*             <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->*/
/*             {% if page < nbPage %}*/
/*                 <a href="{{ path('nox_intranet_affichageImages', { 'page': nbPage, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> >> </a>*/
/*             {% endif %}*/
/*             <!-------------------------------------------------------------------------->*/
/* */
/*         {% endif %}*/
/* */
/*     </div>*/
/* */
/*     <div id="divAffichageImages">*/
/* */
/*         {% for image in images %}*/
/* */
/*             <img src="{{ asset(image) }}" class="downloadable" />*/
/* */
/*         {% endfor %}*/
/* */
/*     </div>*/
/* */
/*     <div id="choixPage">*/
/* */
/*         {% if nbPage > 1 %}*/
/* */
/*             <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->*/
/*             {% if page > 1 %}*/
/*                 <a href="{{ path('nox_intranet_affichageImages', { 'page': 1, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> << </a>*/
/*             {% endif %}*/
/*             <!-------------------------------------------------------------------------->*/
/* */
/*             <!-- Affiche un lien vers la page précédente si elle existe -->*/
/*             {% if page-1  >= 1 %}*/
/*                 <a href="{{ path('nox_intranet_affichageImages', { 'page': page-1, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> < </a>*/
/*             {% endif %}*/
/*             <!---------------------------------------------------------->*/
/* */
/*             <!-- Affichage des liens vers les pages précédente. -->*/
/*             {% if page-1  >= 1 %}*/
/*                 {% for i in 1..page-1 %}*/
/* */
/*                     {% if i >= (page - 2) %}*/
/*                         <a href="{{ path('nox_intranet_affichageImages', { 'page': i, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> {{ i }} </a>*/
/*                     {% endif %}*/
/* */
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             <!--------------------------------------------------->*/
/* */
/*             <!-- Page courante -->*/
/*             <a href="{{ path('nox_intranet_affichageImages', { 'page': page, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> <p id="pageActuel">{{ page }}</p> </a>*/
/*             <!------------------->*/
/* */
/*             <!-- Affichage des liens vers les pages suivantes. -->*/
/*             {% if page+1  <= nbPage %}*/
/*                 {% for i in page+1..nbPage %}*/
/* */
/*                     {% if i <= (page + 2) %}*/
/*                         <a href="{{ path('nox_intranet_affichageImages', { 'page': i, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> {{ i }} </a>*/
/*                     {% endif %}*/
/* */
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             <!--------------------------------------------------->*/
/* */
/*             <!-- Affiche un lien vers la page suivante si elle existe -->*/
/*             {% if page+1  <= nbPage %}*/
/*                 <a href="{{ path('nox_intranet_affichageImages', { 'page': page+1, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> > </a>*/
/*             {% endif %}*/
/*             <!------------------------------------------------------------>*/
/* */
/*             <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->*/
/*             {% if page < nbPage %}*/
/*                 <a href="{{ path('nox_intranet_affichageImages', { 'page': nbPage, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> >> </a>*/
/*             {% endif %}*/
/*             <!-------------------------------------------------------------------------->*/
/* */
/*         {% endif %}*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
