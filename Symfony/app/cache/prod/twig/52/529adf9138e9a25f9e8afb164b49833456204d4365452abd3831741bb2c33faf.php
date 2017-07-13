<?php

/* @NoxIntranetRessources/Siren/sirenTable.html.twig */
class __TwigTemplate_69e6632cad14e2e0a1373f4bdcfbf3d72408abb1bea2ac774e6ee312327fe327 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetRessources/Siren/sirenTable.html.twig", 1);
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
        echo " SIREN ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "SIREN";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        echo " 
    <!-- Script -->
    <script>
        \$(window).load(function () {
            ajaxSendSearchForm();
            sirenTableInfiniteScroll();
            horizontalScroll();
        });

        // Rercherche les SIREN correspondant à la recherche et les ajoute au tableau.
        function ajaxSendSearchForm() {
            // Lors de l'envoi du formulaire...
            \$(\"form[name='searchBySIREN']\").submit(function (e) {
                e.preventDefault(); // On bloque l'envoi.

                // On affiche le chargement et on supprime les précedent résultats.
                \$('#search_waiting_td').hide();
                \$('#search_no_result_td').hide();
                \$('#search_loading_td').show();
                \$('.search_result_tr').remove();

                \$(\"#searchBySIREN_firstRow\").val(1);

                \$.ajax({
                    url: '";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_ressources_ajax_search_by_siren");
        echo "',
                    type: 'POST',
                    data: \$(this).serialize(),
                    success: function (sirensJSON) {
                        // Résultat sous forme d'objets.
                        var sirens = JSON.parse(sirensJSON);

                        // On cache la fenêter de chargement.
                        \$('#search_loading_td').hide();

                        // Ajoute les résultats au tableau.
                        appendSirenResults(sirens);
                    }
                });
            });
        }

        // Ajoute les sirens passé en paramètres au tableau des sirens.
        function appendSirenResults(sirens) {
            if (sirens.length > 0) {
                \$.each(sirens, function (index, siren) {
                    console.log(siren);
                    var html = \"<tr class='search_result_tr'>\";
                    html += \"<td>\" + siren.SIREN + \"</td>\";
                    html += \"<td>\" + siren.SIRET + \"</td>\";
                    html += \"<td>\" + siren.NumTVAIntra + \"</td>\";
                    html += \"<td>\" + siren.NICSIEGE + \"</td>\";
                    html += \"<td>\" + siren.RaisonSociale + \"</td>\";
                    html += \"<td>\" + siren.SIGLE + \"</td>\";
                    html += \"<td>\" + siren.ENSEIGNE + \"</td>\";
                    html += \"<td>\" + siren.NAF + \"</td>\";
                    html += \"<td>\" + siren.CATJUR + \"</td>\";
                    html += \"<td>\" + siren.LIBNJ + \"</td>\";
                    html += \"<td>\" + siren.NUMVOIE + \"</td>\";
                    html += \"<td>\" + siren.INDREP + \"</td>\";
                    html += \"<td>\" + siren.TYPVOIE + \"</td>\";
                    html += \"<td>\" + siren.LIBVOIE + \"</td>\";
                    html += \"<td>\" + siren.CP + \"</td>\";
                    html += \"<td>\" + siren.CEDEX + \"</td>\";
                    html += \"<td>\" + siren.VILLE + \"</td>\";
                    html += \"<td>\" + siren.PAYS + \"</td>\";
                    html += \"</tr>\";
                    \$('#siren_table tbody').append(html);
                });
            } else {
                \$('#search_no_result_td').show();
            }
        }

        // Charge des nouvelles ligne au tableau des siren lorsque la barre de scroll arrive en bas.
        function sirenTableInfiniteScroll() {
            var isRunning = null;

            // Lors du scroll...
            \$(\"#siren_table_container_inner\").scroll(function () {
                // Valeur maximum et valeur courante du scroll.
                var maxScroll = \$(this)[0].scrollHeight - \$(this).height();
                var currentScroll = \$(this).scrollTop();

                // Si le scroll est presque en bas et qu'un requête de récupération des siren n'est pas déjà en cours...
                if (currentScroll >= maxScroll * 0.90 && (isRunning === null || isRunning.readyState === 4)) {
                    \$(\"#searchBySIREN_firstRow\").val(\$(\".search_result_tr\").length + 1);

                    isRunning = \$.ajax({
                        url: '";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_ressources_ajax_search_by_siren");
        echo "',
                        type: 'POST',
                        data: \$(\"form[name='searchBySIREN']\").serialize(),
                        success: function (sirensJSON) {
                            // Résultat sous forme d'objets.
                            var sirens = JSON.parse(sirensJSON);

                            // Ajoute les résultats au tableau.
                            if (sirens.length > 0) {
                                appendSirenResults(sirens);
                            }
                        }
                    });
                }
            });
        }

        // Permet de faire suivre le scrolling du header avec celui du tableau.
        function horizontalScroll() {
            // Lorsqu'on scroll sur le container du tableau...
            \$(\"#siren_table_container_inner\").scroll(function () {
                // On applique un translation équivalente sur les en-tête du header.
                \$(\"#siren_table thead tr:first-child .th-inner\").css('transform', \"translateX(-\" + \$(this).scrollLeft() + \"px)\");
            });
        }
    </script>
    <!-- Fin script -->

    <!-- Style -->
    <style>
        #contenu {
            overflow-x: hidden;
        }

        #siren_table_container {
            width: 100%;
            height: 60%;
            position: relative;
            padding-top: 30px;
            margin-bottom: 2em;
        }

        #header-background {
            height: 30px;
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            background-color: rgba(31,78,121,0.8);
        }

        #siren_table_container_inner {
            overflow-x: auto;
            overflow-y: auto;
            height: 100%;
        }

        #siren_table {
            width: 100%;
            overflow-x: hidden;
            overflow-y: auto;
        }

        #siren_table, #siren_table tr, #siren_table th, #siren_table td, table, table tr, table th, table td  {
            border: 1px solid black;
            border-collapse: collapse;
        }

        #siren_table th, #siren_table td {
            padding: 0.5em;
            font-size: calc(9px + 0.2vw);
            text-align: center;
        }

        #siren_table th {
            word-wrap: break-word;
            background-color: rgba(31,78,121,0.8);
            color: white;
            text-align: center;
            padding: 0;
        }

        form[name='searchBySIREN'] {
            width: 100%;
            padding: 0;
            margin: 0;
            margin-top: 0.5em;
            margin-bottom: 0.5em;
            border: none;
        }

        form[name='searchBySIREN'] p {
            margin: 0;
        }

        #searchBySIREN_searchValue {
            font-size: calc(9px + 0.2vw);
        }

        #siren_search_container {
            width: 70%;
            margin: auto;
        }

        #search_no_result_td, #search_loading_td {
            display: none;
        }

        #search_loading_td img {
            width: 15em;
        }

        .th-inner {
            position: absolute;
            top: 0;
            line-height: 33px;
            text-align: center;
            width: 100%;
            margin-left: -50%;
            text-align: center;
        }

        #hidden-header .th-inner {
            position: static;
            overflow-y: hidden;
            height: 0;
            white-space: nowrap;
            padding-left: 5px;
            padding-right: 5px;
        }

        #siren_table thead tr, #siren_table thead th {
            border-color: transparent;
        }

        .horizontal-align-header-div {
            margin: 0 auto;
            width: 0;
        }
    </style>
    <!-- Fin style -->

    <!-- Formulaire de recherche de SIREN -->
    <div id=\"siren_search_container\">
        ";
        // line 239
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["searchBySIREN"]) ? $context["searchBySIREN"] : null), 'form_start');
        echo "
        <p>
            ";
        // line 241
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchBySIREN"]) ? $context["searchBySIREN"] : null), "searchValue", array()), 'label');
        echo " : ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchBySIREN"]) ? $context["searchBySIREN"] : null), "searchValue", array()), 'widget');
        echo "
            ";
        // line 242
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchBySIREN"]) ? $context["searchBySIREN"] : null), "Search", array()), 'widget');
        echo "
        </p>
        ";
        // line 244
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["searchBySIREN"]) ? $context["searchBySIREN"] : null), 'form_end');
        echo "
    </div>
    <!-- Fin du formulaire de recherche de SIREN -->

    <!-- Tableau des SIREN -->
    <div id=\"siren_table_container\">
        <div id=\"header-background\"></div>
        <div id=\"siren_table_container_inner\">
            <table id=\"siren_table\">
                <thead>
                    <tr>
                        <th><div class=\"horizontal-align-header-div\"><div class=\"th-inner\"><span>SIREN</span></div></div></th>
                        <th><div class=\"horizontal-align-header-div\"><div class=\"th-inner\"><span>SIRET</span></div></div></th>
                        <th><div class=\"horizontal-align-header-div\"><div class=\"th-inner\"><span>NumTVAIntra</span></div></div></th>
                        <th><div class=\"horizontal-align-header-div\"><div class=\"th-inner\"><span>NICSIEGE</span></div></div></th>
                        <th><div class=\"horizontal-align-header-div\"><div class=\"th-inner\"><span>RaisonSociale</span></div></div></th>
                        <th><div class=\"horizontal-align-header-div\"><div class=\"th-inner\"><span>SIGLE</span></div></div></th>
                        <th><div class=\"horizontal-align-header-div\"><div class=\"th-inner\"><span>ENSEIGNE</span></div></div></th>
                        <th><div class=\"horizontal-align-header-div\"><div class=\"th-inner\"><span>NAF</span></div></div></th>
                        <th><div class=\"horizontal-align-header-div\"><div class=\"th-inner\"><span>CATJUR</span></div></div></th>
                        <th><div class=\"horizontal-align-header-div\"><div class=\"th-inner\"><span>LIBNJ</span></div></div></th>
                        <th><div class=\"horizontal-align-header-div\"><div class=\"th-inner\"><span>NUMVOIE</span></div></div></th>
                        <th><div class=\"horizontal-align-header-div\"><div class=\"th-inner\"><span>INDREP</span></div></div></th>
                        <th><div class=\"horizontal-align-header-div\"><div class=\"th-inner\"><span>TYPEVOIE</span></div></div></th>
                        <th><div class=\"horizontal-align-header-div\"><div class=\"th-inner\"><span>LIBVOIE</span></div></div></th>
                        <th><div class=\"horizontal-align-header-div\"><div class=\"th-inner\"><span>CP</span></div></div></th>
                        <th><div class=\"horizontal-align-header-div\"><div class=\"th-inner\"><span>CEDEX</span></div></div></th>
                        <th><div class=\"horizontal-align-header-div\"><div class=\"th-inner\"><span>VILLE</span></div></div></th>
                        <th><div class=\"horizontal-align-header-div\"><div class=\"th-inner\"><span>PAYS</span></div></div></th>
                    </tr>
                    <tr id=\"hidden-header\">
                        <th><div class=\"th-inner\">SIREN</div></th>
                        <th><div class=\"th-inner\">SIRET</div></th>
                        <th><div class=\"th-inner\">NumTVAIntra</div></th>
                        <th><div class=\"th-inner\">NICSIEGE</div></th>
                        <th><div class=\"th-inner\">RaisonSociale</div></th>
                        <th><div class=\"th-inner\">SIGLE</div></th>
                        <th><div class=\"th-inner\">ENSEIGNE</div></th>
                        <th><div class=\"th-inner\">NAF</div></th>
                        <th><div class=\"th-inner\">CATJUR</div></th>
                        <th><div class=\"th-inner\">LIBNJ</div></th>
                        <th><div class=\"th-inner\">NUMVOIE</div></th>
                        <th><div class=\"th-inner\">INDREP</div></th>
                        <th><div class=\"th-inner\">TYPVOIE</div></th>
                        <th><div class=\"th-inner\">LIBVOIE</div></th>
                        <th><div class=\"th-inner\">CP</div></th>
                        <th><div class=\"th-inner\">CEDEX</div></th>
                        <th><div class=\"th-inner\">VILLE</div></th>
                        <th><div class=\"th-inner\">PAYS</div></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan=\"18\" id=\"search_waiting_td\">Lancez une recherche pour afficher des résultats.</td>
                    </tr>
                    <tr>
                        <td colspan=\"18\" id=\"search_no_result_td\">Aucun résultat.</td>
                    </tr>
                    <tr>
                        <td colspan=\"18\" id=\"search_loading_td\">
                            <p>Recherche en cours, veuillez patienter...</p>
                            <img src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/loading.gif"), "html", null, true);
        echo "\" onmousedown=\"return false;\">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Fin du tableau des SIREN -->
";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetRessources/Siren/sirenTable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 305,  300 => 244,  295 => 242,  289 => 241,  284 => 239,  137 => 95,  70 => 31,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetRessources/Siren/sirenTable.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\RessourcesBundle\\Resources\\views\\Siren\\sirenTable.html.twig");
    }
}
