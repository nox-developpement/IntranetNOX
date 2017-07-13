<?php

/* NoxIntranetAdministrationBundle:StatsVPN:statsVPN.html.twig */
class __TwigTemplate_4ac4cb20f7641611d5888c6f9bf4c8cf3db457634f5077cfccb67991e405cf09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:StatsVPN:statsVPN.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
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
        $__internal_4f83784151cfebe2abc5d0c5149583a857412715b452d952710f1e1f7ff39d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f83784151cfebe2abc5d0c5149583a857412715b452d952710f1e1f7ff39d7f->enter($__internal_4f83784151cfebe2abc5d0c5149583a857412715b452d952710f1e1f7ff39d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:StatsVPN:statsVPN.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f83784151cfebe2abc5d0c5149583a857412715b452d952710f1e1f7ff39d7f->leave($__internal_4f83784151cfebe2abc5d0c5149583a857412715b452d952710f1e1f7ff39d7f_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_f7daedb22b1de6042ab4f271fbdf70a54a6db37f8f703f48dbeb378140fd7ed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7daedb22b1de6042ab4f271fbdf70a54a6db37f8f703f48dbeb378140fd7ed1->enter($__internal_f7daedb22b1de6042ab4f271fbdf70a54a6db37f8f703f48dbeb378140fd7ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <style>
        .statistiques_vnp_container {
            vertical-align: top;
            width: 70%;
            margin: auto;
        }

        #statistiques_vnp_container_by_users {
            vertical-align: top;
            width: 70%;
            margin: auto;
            display: none;
        }

        #statistiques_vnp_container_by_month {
            display: none;
        }

        .statistiques_user_div {
            display: inline-block;
            border: 1px solid black;
            padding: 0.5em;
            margin: 0.5em;
            background-color: white;
        }

        .statistique_vpn {
            display: inline-block;
            list-style-type: none;
            vertical-align: top;
        }

        .user_ul {
            padding: 0;
            margin: 0;
            background-color: #021C2D;
            color: white;
        }

        .annee_ul {
            background-color: #1F4E79;
            color: white;
        }

        .mois_ul {
            background-color: white;
            color: #1F4E79;
        }

        .chart_container {
            position: relative;
            box-sizing: border-box;
            padding: 1em;
            width: 60%;
            margin: 1em auto;
            background-color: white;
        }

        #dialog_vpn {
            overflow: auto; 
        }

        #dialog_vpn p {
            white-space: nowrap;
        }
    </style>
";
        
        $__internal_f7daedb22b1de6042ab4f271fbdf70a54a6db37f8f703f48dbeb378140fd7ed1->leave($__internal_f7daedb22b1de6042ab4f271fbdf70a54a6db37f8f703f48dbeb378140fd7ed1_prof);

    }

    // line 72
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_0911cdfca808c8271b1667d3cbc380394bbdae43df717f70bab15061931914a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0911cdfca808c8271b1667d3cbc380394bbdae43df717f70bab15061931914a6->enter($__internal_0911cdfca808c8271b1667d3cbc380394bbdae43df717f70bab15061931914a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo "Statistiques VPN";
        
        $__internal_0911cdfca808c8271b1667d3cbc380394bbdae43df717f70bab15061931914a6->leave($__internal_0911cdfca808c8271b1667d3cbc380394bbdae43df717f70bab15061931914a6_prof);

    }

    // line 74
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_127a8d4643297cc0c010bba6acba962caa3ea28284a449542371b458fadc35a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_127a8d4643297cc0c010bba6acba962caa3ea28284a449542371b458fadc35a0->enter($__internal_127a8d4643297cc0c010bba6acba962caa3ea28284a449542371b458fadc35a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Statistiques VPN";
        
        $__internal_127a8d4643297cc0c010bba6acba962caa3ea28284a449542371b458fadc35a0->leave($__internal_127a8d4643297cc0c010bba6acba962caa3ea28284a449542371b458fadc35a0_prof);

    }

    // line 76
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_0652e107a87bf38831db7eacc3c05668ec058f7719ee113e8275b7de8ba46a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0652e107a87bf38831db7eacc3c05668ec058f7719ee113e8275b7de8ba46a4d->enter($__internal_0652e107a87bf38831db7eacc3c05668ec058f7719ee113e8275b7de8ba46a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 77
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/Chart.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(window).load(function () {
            // Tableau de conversion d'index de mois en nom de mois.
            var numberToMonth = {\"01\": \"Janvier\", \"02\": \"Février\", \"03\": \"Mars\", \"04\": \"Avril\", \"05\": \"Mai\", \"06\": \"Juin\", \"07\": \"Juillet\", \"08\": \"Août\", \"09\": \"Septembre\", \"10\": \"Octobre\", \"11\": \"Novembre\", \"12\": \"Décembre\"};

            // Tableau de conversion d'id vpn en nom d'utilisateur.
            var idToName = JSON.parse('";
        // line 84
        echo twig_jsonencode_filter((isset($context["idToName"]) ? $context["idToName"] : $this->getContext($context, "idToName")));
        echo "');

            // Données d'entrées pour les graphiques.
            var graphiqueDatas = JSON.parse('";
        // line 87
        echo twig_jsonencode_filter((isset($context["graphiqueDatas"]) ? $context["graphiqueDatas"] : $this->getContext($context, "graphiqueDatas")));
        echo "');

            // Pour chaques mois...
            \$.each(graphiqueDatas, function (index, graphiqueData) {
                // Ajout d'un caneva HTML pour le graphique.
                var chart_id = \"chart_\" + index;
                \$(\"#charts_div\").append(\"<div class='chart_container'><canvas id='\" + chart_id + \"'></canvas></div>\");

                // Initialisation du graphique.
                var ctx = document.getElementById(chart_id).getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: [\"0\", \"1-5\", \"6-10\", \"11-20\", \"+20\"],
                        datasets: [{
                                data: [graphiqueData[\"0\"][\"Count\"], graphiqueData[\"1-5\"][\"Count\"], graphiqueData[\"6-10\"][\"Count\"], graphiqueData[\"11-20\"][\"Count\"], graphiqueData[\"+20\"][\"Count\"]],
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255,99,132,1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)'
                                ],
                                borderWidth: 1
                            }]
                    },
                    options: {
                        title: {
                            display: true,
                            position: \"top\",
                            text: numberToMonth[index]
                        },
                        scales: {
                            yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    },
                                    scaleLabel: {
                                        display: true,
                                        labelString: \"Nombre d'utilisateur(s)\"
                                    }
                                }],
                            xAxes: [{
                                    scaleLabel: {
                                        display: true,
                                        labelString: \"Nombre de connexion(s) durant le mois\"
                                    }
                                }]
                        },
                        legend: {
                            display: false
                        },
                        tooltips: {
                            callbacks: {
                                label: function (tooltipItem, data) {
                                    return [tooltipItem.yLabel + \" Utilisateur(s)\", \"Cliquez pour voir la liste des utilisateurs.\"];
                                },
                                title: function () {
                                    return \"\";
                                }
                            }
                        }
                    }
                });

                // Lors d'un clic sur le graphique...
                \$(\"#\" + chart_id).on(\"click\", function (e) {
                    // On récupére l'élement du graphique sur lesquel on a cliqué.
                    var chartElement = myChart.getElementsAtEvent(e)[0];

                    // Si l'élement existe...
                    if (chartElement !== undefined) {
                        // On récupére son label.
                        var barLabel = chartElement[\"_view\"].label;

                        // On prépare la chaine contenent le nom des utilisateurs correspondant à la barre cliqué.
                        var alertString = \"\";
                        \$.each(graphiqueData[barLabel][\"Users\"], function (index, user) {
                            alertString += \"<p>\" + user + \" : \" + (idToName[user] !== undefined ? idToName[user][\"name\"] : \"inconnu\") + \"</p>\";
                        });

                        // On affiche la liste des utilisateurs.
                        \$(\"#dialog_vpn\").html(alertString);
                        \$(\"#dialog_vpn\").dialog({
                            height: \$(window).height() / 3,
                            title: barLabel + \" utilisation(s) en \" + numberToMonth[index],
                            width: \"auto\",
                            resizable: false
                        });
                        \$('.ui-dialog :button').blur();
                    }
                });
            });

            // Données d'entrées pour le graphique global.
            var graphiqueDatasGlobal = JSON.parse('";
        // line 189
        echo twig_jsonencode_filter((isset($context["graphiqueDatasGlobal"]) ? $context["graphiqueDatasGlobal"] : $this->getContext($context, "graphiqueDatasGlobal")));
        echo "');

            // Ajout d'un caneva HTML pour le graphique.
            var chart_id = \"chart_global\";
            \$(\"#charts_div\").append(\"<div class='chart_container'><canvas id='\" + chart_id + \"'></canvas></div>\");

            // Initialisation du graphique.
            var ctx = document.getElementById(chart_id).getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [\"0\", \"1-5\", \"6-10\", \"11-20\", \"+20\"],
                    datasets: [{
                            data: [graphiqueDatasGlobal[\"0\"][\"Count\"], graphiqueDatasGlobal[\"1-5\"][\"Count\"], graphiqueDatasGlobal[\"6-10\"][\"Count\"], graphiqueDatasGlobal[\"11-20\"][\"Count\"], graphiqueDatasGlobal[\"+20\"][\"Count\"]],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    title: {
                        display: true,
                        position: \"top\",
                        text: \"Global\"
                    },
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                },
                                scaleLabel: {
                                    display: true,
                                    labelString: \"Nombre d'utilisateur(s)\"
                                }
                            }],
                        xAxes: [{
                                scaleLabel: {
                                    display: true,
                                    labelString: \"Nombre de connexion(s) global\"
                                }
                            }]
                    },
                    legend: {
                        display: false
                    },
                    tooltips: {
                        callbacks: {
                            label: function (tooltipItem, data) {
                                return [tooltipItem.yLabel + \" Utilisateur(s)\", \"Cliquez pour voir la liste des utilisateurs.\"];
                            },
                            title: function () {
                                return \"\";
                            }
                        }
                    }
                }
            });

            // Lors d'un clic sur le graphique...
            \$(\"#\" + chart_id).on(\"click\", function (e) {
                // On récupére l'élement du graphique sur lesquel on a cliqué.
                var chartElement = myChart.getElementsAtEvent(e)[0];

                // Si l'élement existe...
                if (chartElement !== undefined) {
                    // On récupére son label.
                    var barLabel = chartElement[\"_view\"].label;

                    // On prépare la chaine contenent le nom des utilisateurs correspondant à la barre cliqué.
                    var alertString = \"\";
                    \$.each(graphiqueDatasGlobal[barLabel][\"Users\"], function (index, user) {
                        alertString += \"<p>\" + user + \" (\" + (idToName[user] !== undefined ? idToName[user][\"date_creation_vpn\"] : \"inconnu\") + \") : \" + (idToName[user] !== undefined ? idToName[user][\"name\"] : \"inconnu\") + \"</p>\";
                    });

                    // On affiche la liste des utilisateurs.
                    \$(\"#dialog_vpn\").html(alertString);
                    \$(\"#dialog_vpn\").dialog({
                        height: \$(window).height() / 3,
                        title: barLabel + \" utilisation(s) global\",
                        width: \"auto\",
                        resizable: false
                    });
                    \$('.ui-dialog :button').blur();
                }
            });
        });
    </script>

    <div id=\"dialog_vpn\">
    </div>

    <div id=\"charts_div\">
    </div>



";
        
        $__internal_0652e107a87bf38831db7eacc3c05668ec058f7719ee113e8275b7de8ba46a4d->leave($__internal_0652e107a87bf38831db7eacc3c05668ec058f7719ee113e8275b7de8ba46a4d_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:StatsVPN:statsVPN.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 189,  163 => 87,  157 => 84,  146 => 77,  140 => 76,  128 => 74,  116 => 72,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}

{% block style %}
    <style>
        .statistiques_vnp_container {
            vertical-align: top;
            width: 70%;
            margin: auto;
        }

        #statistiques_vnp_container_by_users {
            vertical-align: top;
            width: 70%;
            margin: auto;
            display: none;
        }

        #statistiques_vnp_container_by_month {
            display: none;
        }

        .statistiques_user_div {
            display: inline-block;
            border: 1px solid black;
            padding: 0.5em;
            margin: 0.5em;
            background-color: white;
        }

        .statistique_vpn {
            display: inline-block;
            list-style-type: none;
            vertical-align: top;
        }

        .user_ul {
            padding: 0;
            margin: 0;
            background-color: #021C2D;
            color: white;
        }

        .annee_ul {
            background-color: #1F4E79;
            color: white;
        }

        .mois_ul {
            background-color: white;
            color: #1F4E79;
        }

        .chart_container {
            position: relative;
            box-sizing: border-box;
            padding: 1em;
            width: 60%;
            margin: 1em auto;
            background-color: white;
        }

        #dialog_vpn {
            overflow: auto; 
        }

        #dialog_vpn p {
            white-space: nowrap;
        }
    </style>
{% endblock %}

{% block titrePage %}Statistiques VPN{% endblock %}

{% block messageAccueil %}Statistiques VPN{% endblock %}

{% block contenu %}
    <script src=\"{{ asset(\"js/Chart.bundle.min.js\") }}\"></script>
    <script>
        \$(window).load(function () {
            // Tableau de conversion d'index de mois en nom de mois.
            var numberToMonth = {\"01\": \"Janvier\", \"02\": \"Février\", \"03\": \"Mars\", \"04\": \"Avril\", \"05\": \"Mai\", \"06\": \"Juin\", \"07\": \"Juillet\", \"08\": \"Août\", \"09\": \"Septembre\", \"10\": \"Octobre\", \"11\": \"Novembre\", \"12\": \"Décembre\"};

            // Tableau de conversion d'id vpn en nom d'utilisateur.
            var idToName = JSON.parse('{{ idToName|json_encode()|raw }}');

            // Données d'entrées pour les graphiques.
            var graphiqueDatas = JSON.parse('{{ graphiqueDatas|json_encode()|raw }}');

            // Pour chaques mois...
            \$.each(graphiqueDatas, function (index, graphiqueData) {
                // Ajout d'un caneva HTML pour le graphique.
                var chart_id = \"chart_\" + index;
                \$(\"#charts_div\").append(\"<div class='chart_container'><canvas id='\" + chart_id + \"'></canvas></div>\");

                // Initialisation du graphique.
                var ctx = document.getElementById(chart_id).getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: [\"0\", \"1-5\", \"6-10\", \"11-20\", \"+20\"],
                        datasets: [{
                                data: [graphiqueData[\"0\"][\"Count\"], graphiqueData[\"1-5\"][\"Count\"], graphiqueData[\"6-10\"][\"Count\"], graphiqueData[\"11-20\"][\"Count\"], graphiqueData[\"+20\"][\"Count\"]],
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255,99,132,1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)'
                                ],
                                borderWidth: 1
                            }]
                    },
                    options: {
                        title: {
                            display: true,
                            position: \"top\",
                            text: numberToMonth[index]
                        },
                        scales: {
                            yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    },
                                    scaleLabel: {
                                        display: true,
                                        labelString: \"Nombre d'utilisateur(s)\"
                                    }
                                }],
                            xAxes: [{
                                    scaleLabel: {
                                        display: true,
                                        labelString: \"Nombre de connexion(s) durant le mois\"
                                    }
                                }]
                        },
                        legend: {
                            display: false
                        },
                        tooltips: {
                            callbacks: {
                                label: function (tooltipItem, data) {
                                    return [tooltipItem.yLabel + \" Utilisateur(s)\", \"Cliquez pour voir la liste des utilisateurs.\"];
                                },
                                title: function () {
                                    return \"\";
                                }
                            }
                        }
                    }
                });

                // Lors d'un clic sur le graphique...
                \$(\"#\" + chart_id).on(\"click\", function (e) {
                    // On récupére l'élement du graphique sur lesquel on a cliqué.
                    var chartElement = myChart.getElementsAtEvent(e)[0];

                    // Si l'élement existe...
                    if (chartElement !== undefined) {
                        // On récupére son label.
                        var barLabel = chartElement[\"_view\"].label;

                        // On prépare la chaine contenent le nom des utilisateurs correspondant à la barre cliqué.
                        var alertString = \"\";
                        \$.each(graphiqueData[barLabel][\"Users\"], function (index, user) {
                            alertString += \"<p>\" + user + \" : \" + (idToName[user] !== undefined ? idToName[user][\"name\"] : \"inconnu\") + \"</p>\";
                        });

                        // On affiche la liste des utilisateurs.
                        \$(\"#dialog_vpn\").html(alertString);
                        \$(\"#dialog_vpn\").dialog({
                            height: \$(window).height() / 3,
                            title: barLabel + \" utilisation(s) en \" + numberToMonth[index],
                            width: \"auto\",
                            resizable: false
                        });
                        \$('.ui-dialog :button').blur();
                    }
                });
            });

            // Données d'entrées pour le graphique global.
            var graphiqueDatasGlobal = JSON.parse('{{ graphiqueDatasGlobal|json_encode()|raw }}');

            // Ajout d'un caneva HTML pour le graphique.
            var chart_id = \"chart_global\";
            \$(\"#charts_div\").append(\"<div class='chart_container'><canvas id='\" + chart_id + \"'></canvas></div>\");

            // Initialisation du graphique.
            var ctx = document.getElementById(chart_id).getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [\"0\", \"1-5\", \"6-10\", \"11-20\", \"+20\"],
                    datasets: [{
                            data: [graphiqueDatasGlobal[\"0\"][\"Count\"], graphiqueDatasGlobal[\"1-5\"][\"Count\"], graphiqueDatasGlobal[\"6-10\"][\"Count\"], graphiqueDatasGlobal[\"11-20\"][\"Count\"], graphiqueDatasGlobal[\"+20\"][\"Count\"]],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    title: {
                        display: true,
                        position: \"top\",
                        text: \"Global\"
                    },
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                },
                                scaleLabel: {
                                    display: true,
                                    labelString: \"Nombre d'utilisateur(s)\"
                                }
                            }],
                        xAxes: [{
                                scaleLabel: {
                                    display: true,
                                    labelString: \"Nombre de connexion(s) global\"
                                }
                            }]
                    },
                    legend: {
                        display: false
                    },
                    tooltips: {
                        callbacks: {
                            label: function (tooltipItem, data) {
                                return [tooltipItem.yLabel + \" Utilisateur(s)\", \"Cliquez pour voir la liste des utilisateurs.\"];
                            },
                            title: function () {
                                return \"\";
                            }
                        }
                    }
                }
            });

            // Lors d'un clic sur le graphique...
            \$(\"#\" + chart_id).on(\"click\", function (e) {
                // On récupére l'élement du graphique sur lesquel on a cliqué.
                var chartElement = myChart.getElementsAtEvent(e)[0];

                // Si l'élement existe...
                if (chartElement !== undefined) {
                    // On récupére son label.
                    var barLabel = chartElement[\"_view\"].label;

                    // On prépare la chaine contenent le nom des utilisateurs correspondant à la barre cliqué.
                    var alertString = \"\";
                    \$.each(graphiqueDatasGlobal[barLabel][\"Users\"], function (index, user) {
                        alertString += \"<p>\" + user + \" (\" + (idToName[user] !== undefined ? idToName[user][\"date_creation_vpn\"] : \"inconnu\") + \") : \" + (idToName[user] !== undefined ? idToName[user][\"name\"] : \"inconnu\") + \"</p>\";
                    });

                    // On affiche la liste des utilisateurs.
                    \$(\"#dialog_vpn\").html(alertString);
                    \$(\"#dialog_vpn\").dialog({
                        height: \$(window).height() / 3,
                        title: barLabel + \" utilisation(s) global\",
                        width: \"auto\",
                        resizable: false
                    });
                    \$('.ui-dialog :button').blur();
                }
            });
        });
    </script>

    <div id=\"dialog_vpn\">
    </div>

    <div id=\"charts_div\">
    </div>



{% endblock %}
", "NoxIntranetAdministrationBundle:StatsVPN:statsVPN.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\AdministrationBundle/Resources/views/StatsVPN/statsVPN.html.twig");
    }
}
