<?php

/* @NoxIntranetRessources/PrestationsInternes/propositionsReporting.html.twig */
class __TwigTemplate_0ba287cdf955d1d7b24c734ec3f6ba9ac1969d46bf6035970b4e317ec4ed56e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetRessources/PrestationsInternes/propositionsReporting.html.twig", 1);
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
        echo " Status de mes propositions ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Status de mes propositions";
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
        if ((twig_first($this->env, twig_get_array_keys_filter((isset($context["propositions"]) ? $context["propositions"] : null))) != (isset($context["page"]) ? $context["page"] : null))) {
            echo "<a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_propositions_reporting", array("search" => (isset($context["search"]) ? $context["search"] : null), "orderTime" => (isset($context["orderTime"]) ? $context["orderTime"] : null), "page" => twig_first($this->env, twig_get_array_keys_filter((isset($context["propositions"]) ? $context["propositions"] : null))))), "html", null, true);
            echo "' title='Page ";
            echo twig_escape_filter($this->env, (twig_first($this->env, twig_get_array_keys_filter((isset($context["propositions"]) ? $context["propositions"] : null))) + 1), "html", null, true);
            echo "'><<</a>";
        }
        // line 29
        echo "            ";
        if ($this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), ((isset($context["page"]) ? $context["page"] : null) - 1), array(), "array", true, true)) {
            echo "<a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_propositions_reporting", array("search" => (isset($context["search"]) ? $context["search"] : null), "orderTime" => (isset($context["orderTime"]) ? $context["orderTime"] : null), "page" => ((isset($context["page"]) ? $context["page"] : null) - 1))), "html", null, true);
            echo "' title='Page ";
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
            echo "'><</a>";
        }
        // line 30
        echo "            Page: <select onchange='location = this.value;'>
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["propositions"]) ? $context["propositions"] : null))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 32
            echo "                    ";
            if (($context["i"] >= 1)) {
                // line 33
                echo "                        <option value='";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_propositions_reporting", array("search" => (isset($context["search"]) ? $context["search"] : null), "orderTime" => (isset($context["orderTime"]) ? $context["orderTime"] : null), "page" => ($context["i"] - 1))), "html", null, true);
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
        if ($this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), ((isset($context["page"]) ? $context["page"] : null) + 1), array(), "array", true, true)) {
            echo "<a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_propositions_reporting", array("search" => (isset($context["search"]) ? $context["search"] : null), "orderTime" => (isset($context["orderTime"]) ? $context["orderTime"] : null), "page" => ((isset($context["page"]) ? $context["page"] : null) + 1))), "html", null, true);
            echo "' title='Page ";
            echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : null) + 2), "html", null, true);
            echo "'>></a>";
        }
        // line 38
        echo "            ";
        if ((twig_last($this->env, twig_get_array_keys_filter((isset($context["propositions"]) ? $context["propositions"] : null))) != (isset($context["page"]) ? $context["page"] : null))) {
            echo "<a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_propositions_reporting", array("search" => (isset($context["search"]) ? $context["search"] : null), "orderTime" => (isset($context["orderTime"]) ? $context["orderTime"] : null), "page" => twig_last($this->env, twig_get_array_keys_filter((isset($context["propositions"]) ? $context["propositions"] : null))))), "html", null, true);
            echo "' title='Page ";
            echo twig_escape_filter($this->env, (twig_last($this->env, twig_get_array_keys_filter((isset($context["propositions"]) ? $context["propositions"] : null))) + 1), "html", null, true);
            echo "'>>></a>";
        }
        // line 39
        echo "        </div>

        <div style='display: inline-block; text-align: right; width: calc(100% / 3);'>
            <div id='prestationReportOrderTime'>
                Ordre d'affichage: <select onchange='location = this.value;'>
                    <option value='";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_propositions_reporting", array("search" => (isset($context["search"]) ? $context["search"] : null), "orderTime" => "desc")), "html", null, true);
        echo "' ";
        if (((isset($context["orderTime"]) ? $context["orderTime"] : null) == "desc")) {
            echo "selected";
        }
        echo ">Du + récent au - récent</option>
                    <option value='";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_propositions_reporting", array("search" => (isset($context["search"]) ? $context["search"] : null), "orderTime" => "asc")), "html", null, true);
        echo "' ";
        if (((isset($context["orderTime"]) ? $context["orderTime"] : null) == "asc")) {
            echo "selected";
        }
        echo ">Du + vieux au - vieux</option>
                </select>
            </div><br /> 
        </div>
    </div>

    <table id='tablePrestationsInternesReporting'>

        <tr>
            <th colspan='2'>Demande de préstation</th>
            <th colspan='2'>Status de la proposition</th>
            <th rowspan='2'>Details</th>
        </tr>

        <tr>
            <th>Libelle</th>
            <th>DA émetteur</th>
            <th>Réponse DA émétteur</th>
            <th>Réponse DA destinataire</th>
        </tr>

        ";
        // line 66
        if (($this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), (isset($context["page"]) ? $context["page"] : null), array(), "array", true, true) && ($this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), (isset($context["page"]) ? $context["page"] : null), array(), "array") != null))) {
            // line 67
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), (isset($context["page"]) ? $context["page"] : null), array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["proposition"]) {
                // line 68
                echo "                <tr>
                    <td>";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["demandes"]) ? $context["demandes"] : null), $this->getAttribute($context["proposition"], "cleDemande", array()), array(), "array"), "Libelle", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($this->getAttribute((isset($context["demandes"]) ? $context["demandes"] : null), $this->getAttribute($context["proposition"], "cleDemande", array()), array(), "array"), "DA1", array()), array(), "array"), "Firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($this->getAttribute((isset($context["demandes"]) ? $context["demandes"] : null), $this->getAttribute($context["proposition"], "cleDemande", array()), array(), "array"), "DA1", array()), array(), "array"), "Lastname", array()), "html", null, true);
                echo "</td>
                    <td ";
                // line 71
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
                // line 72
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
                    <td><a href='";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_demande_prestation_summary", array("cleDemande" => $this->getAttribute($context["proposition"], "cleDemande", array()))), "html", null, true);
                echo "'><img src='";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Arrowhead-Right-48.png"), "html", null, true);
                echo "' class='prestationsInternesReportingGoToDetailsImg'></a></td>
                </tr>    
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proposition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "        ";
        } else {
            // line 77
            echo "            <tr><td colspan='5'>Il n'y a aucun résultat à afficher.</td></tr>
        ";
        }
        // line 79
        echo "
    </table>

    <div class='prestationReportingNavigation'>
        <div class='prestationReportingPagination'>
            ";
        // line 84
        if ((twig_first($this->env, twig_get_array_keys_filter((isset($context["propositions"]) ? $context["propositions"] : null))) != (isset($context["page"]) ? $context["page"] : null))) {
            echo "<a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_propositions_reporting", array("orderTime" => (isset($context["orderTime"]) ? $context["orderTime"] : null), "page" => twig_first($this->env, twig_get_array_keys_filter((isset($context["propositions"]) ? $context["propositions"] : null))))), "html", null, true);
            echo "' title='Page ";
            echo twig_escape_filter($this->env, (twig_first($this->env, twig_get_array_keys_filter((isset($context["propositions"]) ? $context["propositions"] : null))) + 1), "html", null, true);
            echo "'><<</a>";
        }
        // line 85
        echo "            ";
        if ($this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), ((isset($context["page"]) ? $context["page"] : null) - 1), array(), "array", true, true)) {
            echo "<a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_propositions_reporting", array("orderTime" => (isset($context["orderTime"]) ? $context["orderTime"] : null), "page" => ((isset($context["page"]) ? $context["page"] : null) - 1))), "html", null, true);
            echo "' title='Page ";
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
            echo "'><</a>";
        }
        // line 86
        echo "            Page: <select onchange='location = this.value;'>
                ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["propositions"]) ? $context["propositions"] : null))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 88
            echo "                    ";
            if (($context["i"] >= 1)) {
                // line 89
                echo "                        <option value='";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_propositions_reporting", array("orderTime" => (isset($context["orderTime"]) ? $context["orderTime"] : null), "page" => ($context["i"] - 1))), "html", null, true);
                echo "' ";
                if ((($context["i"] - 1) == (isset($context["page"]) ? $context["page"] : null))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                    ";
            }
            // line 91
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "            </select>
            ";
        // line 93
        if ($this->getAttribute((isset($context["propositions"]) ? $context["propositions"] : null), ((isset($context["page"]) ? $context["page"] : null) + 1), array(), "array", true, true)) {
            echo "<a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_propositions_reporting", array("orderTime" => (isset($context["orderTime"]) ? $context["orderTime"] : null), "page" => ((isset($context["page"]) ? $context["page"] : null) + 1))), "html", null, true);
            echo "' title='Page ";
            echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : null) + 2), "html", null, true);
            echo "'>></a>";
        }
        // line 94
        echo "            ";
        if ((twig_last($this->env, twig_get_array_keys_filter((isset($context["propositions"]) ? $context["propositions"] : null))) != (isset($context["page"]) ? $context["page"] : null))) {
            echo "<a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_propositions_reporting", array("orderTime" => (isset($context["orderTime"]) ? $context["orderTime"] : null), "page" => twig_last($this->env, twig_get_array_keys_filter((isset($context["propositions"]) ? $context["propositions"] : null))))), "html", null, true);
            echo "' title='Page ";
            echo twig_escape_filter($this->env, (twig_last($this->env, twig_get_array_keys_filter((isset($context["propositions"]) ? $context["propositions"] : null))) + 1), "html", null, true);
            echo "'>>></a>";
        }
        // line 95
        echo "        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetRessources/PrestationsInternes/propositionsReporting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 95,  319 => 94,  311 => 93,  308 => 92,  302 => 91,  290 => 89,  287 => 88,  283 => 87,  280 => 86,  271 => 85,  263 => 84,  256 => 79,  252 => 77,  249 => 76,  238 => 73,  224 => 72,  210 => 71,  204 => 70,  200 => 69,  197 => 68,  192 => 67,  190 => 66,  162 => 45,  154 => 44,  147 => 39,  138 => 38,  130 => 37,  127 => 36,  121 => 35,  109 => 33,  106 => 32,  102 => 31,  99 => 30,  90 => 29,  82 => 28,  75 => 24,  71 => 23,  67 => 22,  63 => 21,  59 => 20,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetRessources/PrestationsInternes/propositionsReporting.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\RessourcesBundle\\Resources\\views\\PrestationsInternes\\propositionsReporting.html.twig");
    }
}
