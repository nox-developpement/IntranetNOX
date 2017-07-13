<?php

/* NoxIntranetRessourcesBundle:PrestationsInternes:prestationsInternesPersoReporting.html.twig */
class __TwigTemplate_26fad24a96a8a6334728607819d0a48b2c5f874ce2c471c606c07d33387fe661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:PrestationsInternes:prestationsInternesPersoReporting.html.twig", 1);
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
        echo " Status de mes demandes ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Status de mes demandes";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <div style='text-align: center;'>
        <p style='text-align: center; margin: auto; margin-bottom: 1%; display: inline-block; padding: 0.5% 0.5% 0.5% 0.5%; background-color: rgba(255,255,255,0.5); border: 1px solid; font-size: 0.8vw;'>
            <span style='color: orange;'>Orange = En cours de traitement.</span><br />
            <span style='color: limegreen;'>Vert = Terminée avec succés.</span><br />
            <span style='color: red;'>Rouge = Terminée sans succés.</span>
        </p>
    </div>

    <div class='prestationReportingNavigation'>

        <div id='prestationReportingSearch' style='width: calc(100% / 3);'>
            ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formSearch"]) ? $context["formSearch"] : null), 'form_start');
        echo "
            ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSearch"]) ? $context["formSearch"] : null), "searchText", array()), 'widget');
        echo "
            ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSearch"]) ? $context["formSearch"] : null), "searchButton", array()), 'widget', array("label" => "Rechercher"));
        echo "
            ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSearch"]) ? $context["formSearch"] : null), "resetButton", array()), 'widget', array("label" => "Effacer la recherche"));
        echo "
            ";
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formSearch"]) ? $context["formSearch"] : null), 'form_end');
        echo "
        </div>

        <div class='prestationReportingPagination' style='width: calc(100% / 3);'>
            ";
        // line 28
        if ((twig_first($this->env, twig_get_array_keys_filter((isset($context["demandes"]) ? $context["demandes"] : null))) != (isset($context["page"]) ? $context["page"] : null))) {
            echo "<a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_demande_prestation_perso_reporting", array("search" => (isset($context["search"]) ? $context["search"] : null), "orderTime" => (isset($context["orderTime"]) ? $context["orderTime"] : null), "trieStatus" => (isset($context["trieStatus"]) ? $context["trieStatus"] : null), "page" => twig_first($this->env, twig_get_array_keys_filter((isset($context["demandes"]) ? $context["demandes"] : null))))), "html", null, true);
            echo "' title='Page ";
            echo twig_escape_filter($this->env, (twig_first($this->env, twig_get_array_keys_filter((isset($context["demandes"]) ? $context["demandes"] : null))) + 1), "html", null, true);
            echo "'><<</a>";
        }
        // line 29
        echo "            ";
        if ($this->getAttribute((isset($context["demandes"]) ? $context["demandes"] : null), ((isset($context["page"]) ? $context["page"] : null) - 1), array(), "array", true, true)) {
            echo "<a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_demande_prestation_perso_reporting", array("search" => (isset($context["search"]) ? $context["search"] : null), "orderTime" => (isset($context["orderTime"]) ? $context["orderTime"] : null), "trieStatus" => (isset($context["trieStatus"]) ? $context["trieStatus"] : null), "page" => ((isset($context["page"]) ? $context["page"] : null) - 1))), "html", null, true);
            echo "' title='Page ";
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
            echo "'><</a>";
        }
        // line 30
        echo "            Page: <select onchange='location = this.value;'>
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["demandes"]) ? $context["demandes"] : null))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 32
            echo "                    ";
            if (($context["i"] >= 1)) {
                // line 33
                echo "                        <option value='";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_demande_prestation_perso_reporting", array("search" => (isset($context["search"]) ? $context["search"] : null), "orderTime" => (isset($context["orderTime"]) ? $context["orderTime"] : null), "trieStatus" => (isset($context["trieStatus"]) ? $context["trieStatus"] : null), "page" => ($context["i"] - 1))), "html", null, true);
                echo "' ";
                if ((($context["i"] - 1) == (isset($context["page"]) ? $context["page"] : null))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                    ";
            }
            // line 35
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </select>
            ";
        // line 37
        if ($this->getAttribute((isset($context["demandes"]) ? $context["demandes"] : null), ((isset($context["page"]) ? $context["page"] : null) + 1), array(), "array", true, true)) {
            echo "<a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_demande_prestation_perso_reporting", array("search" => (isset($context["search"]) ? $context["search"] : null), "orderTime" => (isset($context["orderTime"]) ? $context["orderTime"] : null), "trieStatus" => (isset($context["trieStatus"]) ? $context["trieStatus"] : null), "page" => ((isset($context["page"]) ? $context["page"] : null) + 1))), "html", null, true);
            echo "' title='Page ";
            echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : null) + 2), "html", null, true);
            echo "'>></a>";
        }
        // line 38
        echo "            ";
        if ((twig_last($this->env, twig_get_array_keys_filter((isset($context["demandes"]) ? $context["demandes"] : null))) != (isset($context["page"]) ? $context["page"] : null))) {
            echo "<a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_demande_prestation_perso_reporting", array("search" => (isset($context["search"]) ? $context["search"] : null), "orderTime" => (isset($context["orderTime"]) ? $context["orderTime"] : null), "trieStatus" => (isset($context["trieStatus"]) ? $context["trieStatus"] : null), "page" => twig_last($this->env, twig_get_array_keys_filter((isset($context["demandes"]) ? $context["demandes"] : null))))), "html", null, true);
            echo "' title='Page ";
            echo twig_escape_filter($this->env, (twig_last($this->env, twig_get_array_keys_filter((isset($context["demandes"]) ? $context["demandes"] : null))) + 1), "html", null, true);
            echo "'>>></a>";
        }
        // line 39
        echo "        </div>

        <div style='display: inline-block; text-align: right; width: calc(100% / 3);'>
            <div id='prestationReportOrderTime'>
                Ordre d'affichage: <select onchange='location = this.value;'>
                    <option value='";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_demande_prestation_perso_reporting", array("search" => (isset($context["search"]) ? $context["search"] : null), "orderTime" => "desc", "trieStatus" => (isset($context["trieStatus"]) ? $context["trieStatus"] : null))), "html", null, true);
        echo "' ";
        if (((isset($context["orderTime"]) ? $context["orderTime"] : null) == "desc")) {
            echo "selected";
        }
        echo ">Du + récent au - récent</option>
                    <option value='";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_demande_prestation_perso_reporting", array("search" => (isset($context["search"]) ? $context["search"] : null), "orderTime" => "asc", "trieStatus" => (isset($context["trieStatus"]) ? $context["trieStatus"] : null))), "html", null, true);
        echo "' ";
        if (((isset($context["orderTime"]) ? $context["orderTime"] : null) == "asc")) {
            echo "selected";
        }
        echo ">Du + vieux au - vieux</option>
                </select>
            </div><br />
            <div id='prestationReportTrieStatus'>
                <a href='";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_demande_prestation_perso_reporting", array("orderTime" => (isset($context["orderTime"]) ? $context["orderTime"] : null))), "html", null, true);
        echo "' style='";
        if (((isset($context["trieStatus"]) ? $context["trieStatus"] : null) == "tous")) {
            echo "text-decoration: underline;";
        }
        echo "'>Tous</a>
                <a href='";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_demande_prestation_perso_reporting", array("trieStatus" => "process", "orderTime" => (isset($context["orderTime"]) ? $context["orderTime"] : null))), "html", null, true);
        echo "' style='color: orange; ";
        if (((isset($context["trieStatus"]) ? $context["trieStatus"] : null) == "process")) {
            echo "text-decoration: underline;";
        }
        echo "'>En cours</a>
                <a href='";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_demande_prestation_perso_reporting", array("trieStatus" => "success", "orderTime" => (isset($context["orderTime"]) ? $context["orderTime"] : null))), "html", null, true);
        echo "' style='color: limegreen; ";
        if (((isset($context["trieStatus"]) ? $context["trieStatus"] : null) == "success")) {
            echo "text-decoration: underline;";
        }
        echo "'>Terminé avec succés</a>
                <a href='";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_demande_prestation_perso_reporting", array("trieStatus" => "fail", "orderTime" => (isset($context["orderTime"]) ? $context["orderTime"] : null))), "html", null, true);
        echo "' style='color: red; ";
        if (((isset($context["trieStatus"]) ? $context["trieStatus"] : null) == "fail")) {
            echo "text-decoration: underline;";
        }
        echo "'>Terminé sans succés</a>
            </div>
        </div>
    </div>

    <table id='tablePrestationsInternesReporting'>

        <tr>
            <th rowspan='3'>Libellé</th>
            <th rowspan='3'>Demandeur</th>
            <th rowspan='3'>DA émetteur</th>
            <th rowspan='3'>Status</th>
            <th colspan='5'>Propositions</th>
        </tr>

        <tr>
            <th rowspan='2'>DA destinataire</th>
            <th colspan='2'>Status</th>
            <th rowspan='2'>Echange</th>
            <th rowspan='2'>Details</th>
        </tr>

        <tr>
            <th>Réponse DA émétteur</th>
            <th>Réponse DA destinataire</th>
        </tr>

        ";
        // line 79
        if (($this->getAttribute((isset($context["demandes"]) ? $context["demandes"] : null), (isset($context["page"]) ? $context["page"] : null), array(), "array", true, true) && ($this->getAttribute((isset($context["demandes"]) ? $context["demandes"] : null), (isset($context["page"]) ? $context["page"] : null), array(), "array") != null))) {
            // line 80
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["demandes"]) ? $context["demandes"] : null), (isset($context["page"]) ? $context["page"] : null), array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
                // line 81
                echo "                <tr>
                    <td ";
                // line 82
                if ($this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), $this->getAttribute($context["demande"], "CleDemande", array()), array(), "array", true, true)) {
                    echo "rowspan='";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), $this->getAttribute($context["demande"], "CleDemande", array()), array(), "array")), "html", null, true);
                    echo "'";
                }
                echo ">";
                if ($this->getAttribute($context["demande"], "Libelle", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "Libelle", array()), "html", null, true);
                }
                echo "</td>
                    <td ";
                // line 83
                if ($this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), $this->getAttribute($context["demande"], "CleDemande", array()), array(), "array", true, true)) {
                    echo "rowspan='";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), $this->getAttribute($context["demande"], "CleDemande", array()), array(), "array")), "html", null, true);
                    echo "'";
                }
                echo ">";
                if ($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["demande"], "Demandeur", array()), array(), "array", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["demande"], "Demandeur", array()), array(), "array"), "Firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["demande"], "Demandeur", array()), array(), "array"), "Lastname", array()), "html", null, true);
                }
                echo "</td>
                    <td ";
                // line 84
                if ($this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), $this->getAttribute($context["demande"], "CleDemande", array()), array(), "array", true, true)) {
                    echo "rowspan='";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), $this->getAttribute($context["demande"], "CleDemande", array()), array(), "array")), "html", null, true);
                    echo "'";
                }
                echo ">";
                if ($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["demande"], "DA1", array()), array(), "array", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["demande"], "DA1", array()), array(), "array"), "Firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["demande"], "DA1", array()), array(), "array"), "Lastname", array()), "html", null, true);
                }
                echo "</td>
                    <td ";
                // line 85
                if ($this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), $this->getAttribute($context["demande"], "CleDemande", array()), array(), "array", true, true)) {
                    echo "rowspan='";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), $this->getAttribute($context["demande"], "CleDemande", array()), array(), "array")), "html", null, true);
                    echo "'";
                }
                if ($this->getAttribute((isset($context["status"]) ? $context["status"] : null), $this->getAttribute($context["demande"], "Status", array()), array(), "array", true, true)) {
                    echo " style='background-color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["status"]) ? $context["status"] : null), $this->getAttribute($context["demande"], "Status", array()), array(), "array"), "color", array()), "html", null, true);
                    echo "; color: white;'";
                }
                echo ">";
                if ($this->getAttribute((isset($context["status"]) ? $context["status"] : null), $this->getAttribute($context["demande"], "Status", array()), array(), "array", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["status"]) ? $context["status"] : null), $this->getAttribute($context["demande"], "Status", array()), array(), "array"), "message", array()), "html", null, true);
                }
                echo "</td>
                    ";
                // line 86
                if ($this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), $this->getAttribute($context["demande"], "CleDemande", array()), array(), "array", true, true)) {
                    // line 87
                    echo "                        <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute(twig_first($this->env, $this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), $this->getAttribute($context["demande"], "CleDemande", array()), array(), "array")), "DA2", array()), array(), "array"), "Firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute(twig_first($this->env, $this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), $this->getAttribute($context["demande"], "CleDemande", array()), array(), "array")), "DA2", array()), array(), "array"), "Lastname", array()), "html", null, true);
                    echo "</td>
                        <td ";
                    // line 88
                    if ($this->getAttribute((isset($context["status"]) ? $context["status"] : null), $this->getAttribute(twig_first($this->env, $this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), $this->getAttribute($context["demande"], "CleDemande", array()), array(), "array")), "Status", array()), array(), "array", true, true)) {
                        echo "style='background-color: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["status"]) ? $context["status"] : null), $this->getAttribute(twig_first($this->env, $this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), $this->getAttribute($context["demande"], "CleDemande", array()), array(), "array")), "Status", array()), array(), "array"), "color", array()), "html", null, true);
                        echo "; color: white;'";
                    }
                    echo ">";
                    if ($this->getAttribute((isset($context["status"]) ? $context["status"] : null), $this->getAttribute(twig_first($this->env, $this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), $this->getAttribute($context["demande"], "CleDemande", array()), array(), "array")), "Status", array()), array(), "array", true, true)) {
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["status"]) ? $context["status"] : null), $this->getAttribute(twig_first($this->env, $this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), $this->getAttribute($context["demande"], "CleDemande", array()), array(), "array")), "Status", array()), array(), "array"), "message", array()), "html", null, true);
                    } else {
                        echo "&nbsp;";
                    }
                    echo "</td>
                        <td ";
                    // line 89
                    if ($this->getAttribute((isset($context["status"]) ? $context["status"] : null), $this->getAttribute(twig_first($this->env, $this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), $this->getAttribute($context["demande"], "CleDemande", array()), array(), "array")), "DA2Answer", array()), array(), "array", true, true)) {
                        echo "style='background-color: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["status"]) ? $context["status"] : null), $this->getAttribute(twig_first($this->env, $this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), $this->getAttribute($context["demande"], "CleDemande", array()), array(), "array")), "DA2Answer", array()), array(), "array"), "color", array()), "html", null, true);
                        echo "; color: white;'";
                    }
                    echo ">";
                    if ($this->getAttribute((isset($context["status"]) ? $context["status"] : null), $this->getAttribute(twig_first($this->env, $this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), $this->getAttribute($context["demande"], "CleDemande", array()), array(), "array")), "DA2Answer", array()), array(), "array", true, true)) {
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["status"]) ? $context["status"] : null), $this->getAttribute(twig_first($this->env, $this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), $this->getAttribute($context["demande"], "CleDemande", array()), array(), "array")), "DA2Answer", array()), array(), "array"), "message", array()), "html", null, true);
                    } else {
                        echo "&nbsp;";
                    }
                    echo "</td>
                        <td ";
                    // line 90
                    if (($this->getAttribute(twig_first($this->env, $this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), $this->getAttribute($context["demande"], "CleDemande", array()), array(), "array")), "Echanges", array()) == null)) {
                        echo "style='background-color: lightgrey;'";
                    }
                    echo " class='prestationInterneEchange' title='";
                    echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), $this->getAttribute($context["demande"], "CleDemande", array()), array(), "array")), "Echanges", array()), "html", null, true);
                    echo "'>";
                    if (($this->getAttribute(twig_first($this->env, $this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), $this->getAttribute($context["demande"], "CleDemande", array()), array(), "array")), "Echanges", array()) != null)) {
                        echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), $this->getAttribute($context["demande"], "CleDemande", array()), array(), "array")), "Echanges", array()), "html", null, true);
                    } else {
                        echo "&nbsp;";
                    }
                    echo "</td>
                        <td rowspan='";
                    // line 91
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), $this->getAttribute($context["demande"], "CleDemande", array()), array(), "array")), "html", null, true);
                    echo "'><a href='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_demande_prestation_summary", array("cleDemande" => $this->getAttribute($context["demande"], "CleDemande", array()))), "html", null, true);
                    echo "'><img src='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Arrowhead-Right-48.png"), "html", null, true);
                    echo "' class='prestationsInternesReportingGoToDetailsImg'></a></td>
                            ";
                } else {
                    // line 93
                    echo "                        <td style='background-color: lightgrey;'>&nbsp;</td>
                        <td style='background-color: lightgrey;'>&nbsp;</td>
                        <td style='background-color: lightgrey;'>&nbsp;</td>
                        <td style='background-color: lightgrey;'>&nbsp;</td>
                        <td><a href='";
                    // line 97
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_demande_prestation_summary", array("cleDemande" => $this->getAttribute($context["demande"], "CleDemande", array()))), "html", null, true);
                    echo "'><img src='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Arrowhead-Right-48.png"), "html", null, true);
                    echo "' class='prestationsInternesReportingGoToDetailsImg'></a></td>
                            ";
                }
                // line 99
                echo "                </tr>

                ";
                // line 101
                if (($this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), $this->getAttribute($context["demande"], "CleDemande", array()), array(), "array", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), $this->getAttribute($context["demande"], "CleDemande", array()), array(), "array")) > 1))) {
                    echo "       
                    ";
                    // line 102
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), $this->getAttribute($context["demande"], "CleDemande", array()), array(), "array"), 1, twig_length_filter($this->env, $this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), $this->getAttribute($context["demande"], "CleDemande", array()), array(), "array"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["proposition"]) {
                        // line 103
                        echo "                        <tr>
                            <td>";
                        // line 104
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["proposition"], "DA2", array()), array(), "array"), "Firstname", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["proposition"], "DA2", array()), array(), "array"), "Lastname", array()), "html", null, true);
                        echo "</td>
                            <td ";
                        // line 105
                        if ($this->getAttribute((isset($context["status"]) ? $context["status"] : null), $this->getAttribute($context["proposition"], "Status", array()), array(), "array", true, true)) {
                            echo "style='background-color: ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["status"]) ? $context["status"] : null), $this->getAttribute($context["proposition"], "Status", array()), array(), "array"), "color", array()), "html", null, true);
                            echo "; color: white;'";
                        }
                        echo ">";
                        if ($this->getAttribute((isset($context["status"]) ? $context["status"] : null), $this->getAttribute($context["proposition"], "Status", array()), array(), "array", true, true)) {
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["status"]) ? $context["status"] : null), $this->getAttribute($context["proposition"], "Status", array()), array(), "array"), "message", array()), "html", null, true);
                        } else {
                            echo "&nbsp;";
                        }
                        echo "</td>
                            <td ";
                        // line 106
                        if ($this->getAttribute((isset($context["status"]) ? $context["status"] : null), $this->getAttribute($context["proposition"], "DA2Answer", array()), array(), "array", true, true)) {
                            echo "style='background-color: ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["status"]) ? $context["status"] : null), $this->getAttribute($context["proposition"], "DA2Answer", array()), array(), "array"), "color", array()), "html", null, true);
                            echo "; color: white;'";
                        }
                        echo ">";
                        if ($this->getAttribute((isset($context["status"]) ? $context["status"] : null), $this->getAttribute($context["proposition"], "DA2Answer", array()), array(), "array", true, true)) {
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["status"]) ? $context["status"] : null), $this->getAttribute($context["proposition"], "DA2Answer", array()), array(), "array"), "message", array()), "html", null, true);
                        } else {
                            echo "&nbsp;";
                        }
                        echo "</td>
                            <td ";
                        // line 107
                        if (($this->getAttribute($context["proposition"], "Echanges", array()) == null)) {
                            echo "style='background-color: lightgrey;'";
                        }
                        echo " class='prestationInterneEchange' title='";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["proposition"], "Echanges", array()), "html", null, true);
                        echo "'>";
                        if (($this->getAttribute($context["proposition"], "Echanges", array()) != null)) {
                            echo twig_escape_filter($this->env, $this->getAttribute($context["proposition"], "Echanges", array()), "html", null, true);
                        } else {
                            echo "&nbsp;";
                        }
                        echo "</td>
                        </tr>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proposition'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 110
                    echo "                ";
                }
                // line 111
                echo "
                <tr style=\"/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#606c88+0,3f4c6b+100;Grey+3D+%232 */
                    background: rgb(96,108,136); /* Old browsers */
                    background: -moz-linear-gradient(top,  rgba(96,108,136,1) 0%, rgba(63,76,107,1) 100%); /* FF3.6-15 */
                    background: -webkit-linear-gradient(top,  rgba(96,108,136,1) 0%,rgba(63,76,107,1) 100%); /* Chrome10-25,Safari5.1-6 */
                    background: linear-gradient(to bottom,  rgba(96,108,136,1) 0%,rgba(63,76,107,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#606c88', endColorstr='#3f4c6b',GradientType=0 ); /* IE6-9 */\">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "        ";
        } else {
            // line 130
            echo "            <tr><td colspan='9'>Il n'y a aucun résultat à afficher.</td></tr>
        ";
        }
        // line 132
        echo "    </table>

    <div class='prestationReportingNavigation'>
        <div class='prestationReportingPagination'>
            ";
        // line 136
        if ((twig_first($this->env, twig_get_array_keys_filter((isset($context["demandes"]) ? $context["demandes"] : null))) != (isset($context["page"]) ? $context["page"] : null))) {
            echo "<a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_demande_prestation_perso_reporting", array("orderTime" => (isset($context["orderTime"]) ? $context["orderTime"] : null), "trieStatus" => (isset($context["trieStatus"]) ? $context["trieStatus"] : null), "page" => twig_first($this->env, twig_get_array_keys_filter((isset($context["demandes"]) ? $context["demandes"] : null))))), "html", null, true);
            echo "' title='Page ";
            echo twig_escape_filter($this->env, (twig_first($this->env, twig_get_array_keys_filter((isset($context["demandes"]) ? $context["demandes"] : null))) + 1), "html", null, true);
            echo "'><<</a>";
        }
        // line 137
        echo "            ";
        if ($this->getAttribute((isset($context["demandes"]) ? $context["demandes"] : null), ((isset($context["page"]) ? $context["page"] : null) - 1), array(), "array", true, true)) {
            echo "<a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_demande_prestation_perso_reporting", array("orderTime" => (isset($context["orderTime"]) ? $context["orderTime"] : null), "trieStatus" => (isset($context["trieStatus"]) ? $context["trieStatus"] : null), "page" => ((isset($context["page"]) ? $context["page"] : null) - 1))), "html", null, true);
            echo "' title='Page ";
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
            echo "'><</a>";
        }
        // line 138
        echo "            Page: <select onchange='location = this.value;'>
                ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["demandes"]) ? $context["demandes"] : null))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 140
            echo "                    ";
            if (($context["i"] >= 1)) {
                // line 141
                echo "                        <option value='";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_demande_prestation_perso_reporting", array("orderTime" => (isset($context["orderTime"]) ? $context["orderTime"] : null), "trieStatus" => (isset($context["trieStatus"]) ? $context["trieStatus"] : null), "page" => ($context["i"] - 1))), "html", null, true);
                echo "' ";
                if ((($context["i"] - 1) == (isset($context["page"]) ? $context["page"] : null))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                    ";
            }
            // line 143
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "            </select>
            ";
        // line 145
        if ($this->getAttribute((isset($context["demandes"]) ? $context["demandes"] : null), ((isset($context["page"]) ? $context["page"] : null) + 1), array(), "array", true, true)) {
            echo "<a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_demande_prestation_perso_reporting", array("orderTime" => (isset($context["orderTime"]) ? $context["orderTime"] : null), "trieStatus" => (isset($context["trieStatus"]) ? $context["trieStatus"] : null), "page" => ((isset($context["page"]) ? $context["page"] : null) + 1))), "html", null, true);
            echo "' title='Page ";
            echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : null) + 2), "html", null, true);
            echo "'>></a>";
        }
        // line 146
        echo "            ";
        if ((twig_last($this->env, twig_get_array_keys_filter((isset($context["demandes"]) ? $context["demandes"] : null))) != (isset($context["page"]) ? $context["page"] : null))) {
            echo "<a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_demande_prestation_perso_reporting", array("orderTime" => (isset($context["orderTime"]) ? $context["orderTime"] : null), "trieStatus" => (isset($context["trieStatus"]) ? $context["trieStatus"] : null), "page" => twig_last($this->env, twig_get_array_keys_filter((isset($context["demandes"]) ? $context["demandes"] : null))))), "html", null, true);
            echo "' title='Page ";
            echo twig_escape_filter($this->env, (twig_last($this->env, twig_get_array_keys_filter((isset($context["demandes"]) ? $context["demandes"] : null))) + 1), "html", null, true);
            echo "'>>></a>";
        }
        // line 147
        echo "        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:PrestationsInternes:prestationsInternesPersoReporting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  543 => 147,  534 => 146,  526 => 145,  523 => 144,  517 => 143,  505 => 141,  502 => 140,  498 => 139,  495 => 138,  486 => 137,  478 => 136,  472 => 132,  468 => 130,  465 => 129,  442 => 111,  439 => 110,  420 => 107,  406 => 106,  392 => 105,  386 => 104,  383 => 103,  379 => 102,  375 => 101,  371 => 99,  364 => 97,  358 => 93,  349 => 91,  335 => 90,  321 => 89,  307 => 88,  300 => 87,  298 => 86,  281 => 85,  267 => 84,  253 => 83,  241 => 82,  238 => 81,  233 => 80,  231 => 79,  197 => 52,  189 => 51,  181 => 50,  173 => 49,  162 => 45,  154 => 44,  147 => 39,  138 => 38,  130 => 37,  127 => 36,  121 => 35,  109 => 33,  106 => 32,  102 => 31,  99 => 30,  90 => 29,  82 => 28,  75 => 24,  71 => 23,  67 => 22,  63 => 21,  59 => 20,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NoxIntranetRessourcesBundle:PrestationsInternes:prestationsInternesPersoReporting.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\RessourcesBundle/Resources/views/PrestationsInternes/prestationsInternesPersoReporting.html.twig");
    }
}
