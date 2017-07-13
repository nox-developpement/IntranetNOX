<?php

/* NoxIntranetPointageBundle:Pointage:compilationArchiveMonth.html.twig */
class __TwigTemplate_73737137f7aeb20d8fb61b291e37eaf22b484397f8bbb527efb7911ae7b4f0fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "NoxIntranetPointageBundle:Pointage:compilationArchiveMonth.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
            'sousMessageAccueil' => array($this, 'block_sousMessageAccueil'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        echo "Archives compilation des pointages";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Archives compilation des pointages";
    }

    // line 7
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        // line 8
        echo "    Etablissement: ";
        echo twig_escape_filter($this->env, (isset($context["etablissement"]) ? $context["etablissement"] : null), "html", null, true);
        echo "<br />
    Année: ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : null), "html", null, true);
        echo "
";
    }

    // line 12
    public function block_contenu($context, array $blocks = array())
    {
        // line 13
        echo "
    <style>
        #formDownloadArchive {
            width: 70%;
            margin: auto;
            text-align: center;
        }

        #formDownloadArchive form {
            display: inline-block;
            width: auto;
            border: 2px outset #1F4E79;
            background-color: rgba(255,255,255, 0.6);
        }

        #formDownloadArchive p {
            text-align: center;
        }

        #pointage_compilation_archives {
            width: 70%;
            margin: auto;
            margin-bottom: 5%;
            text-align: center;
        }

        .archive_folder {
            display: inline-block;
            vertical-align: top;
            margin: 0.25em 0.5em;
            text-align: center;
        }

        .archive_folder:hover .archive_folder_label {
            background-color: rgba(31, 78, 121,0.5);
            box-shadow: 0px 0px 5px 5px rgba(31, 78, 121,0.5);
        }

        .archive_folder:hover .archive_folder_icon {
            animation-name: folder_shaking;
            animation-duration: 0.15s;
            animation-iteration-count: 2;
        }

        .archive_folder_link {
            display: block;
            text-decoration: none;
        }

        .archive_folder_icon {
            width: 70px
        }

        .archive_folder_label {
            width: 115px;
            margin: 0;
            font-size: 13px;
            color: black;
        }

        @keyframes folder_shaking {
            0% {transform: translate(0%, 0%);}
            25% {transform: translate(5%, 0%);}
            75% {transform: translate(-5%, 0%);}
            100% {transform: translate(0%, 0%);}
        }
    </style>

    <script>
        // Génére le liens de téléchargement et affiche une fenêtre de dialogue.
        function downloadLoader(etablissement, month, year) {
            \$.ajax({
                url: '";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_archives_compilation_export_excel");
        echo "',
                type: 'POST',
                data: {etablissement: etablissement, month: month, year: year},
                success: function (url) {
                    // On redirige vers le téléchargement et on ferme la fenêtre de dialogue.
                    window.location = url;
                    \$(\"#pointageAlert\").dialog('close');
                }
            });

            // On affiche une fenêtre indiquant qu'il n'y a pas de justificatif de transport.
            var generationExcelText = \"Veuillez patienter pendant la génération du fichier...<br />\";
            generationExcelText += \"<div style='text-align: center;'>\";
            generationExcelText += \"<img src='";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetpointage/images/CompilationExcelGeneration.gif"), "html", null, true);
        echo "' style='width: 5em;'>\";
            generationExcelText += \"</div>\";
            \$(\"#pointageAlertText\").html(generationExcelText);
            \$(\"#pointageAlert\").dialog({
                resizable: false,
                height: \"auto\",
                width: \"30%\",
                modal: true,
                draggable: false,
                dialogClass: \"pointage-alert-content-class\",
                title: \"Téléchargement de la compilation.\"
            });
            \$('.ui-dialog :button').blur();
        }
    </script>

    <div id=\"pointageAlert\"><div id=\"pointageAlertText\"></div></div>

    <div id=\"pointage_compilation_archives\">
        ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["months"]) ? $context["months"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 118
            echo "            <div class=\"archive_folder\">
                <a class=\"archive_folder_link\" onclick=\"downloadLoader('";
            // line 119
            echo twig_escape_filter($this->env, (isset($context["etablissement"]) ? $context["etablissement"] : null), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["month"], "Month", array()), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : null), "html", null, true);
            echo "');\" href=\"#\">
                    <img class=\"archive_folder_icon\" src=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetpointage/images/ExcelFile.png"), "html", null, true);
            echo "\">
                    <p class=\"archive_folder_label\">";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["month"], "MonthName", array()), "html", null, true);
            echo "</p>
                </a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "NoxIntranetPointageBundle:Pointage:compilationArchiveMonth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 125,  191 => 121,  187 => 120,  179 => 119,  176 => 118,  172 => 117,  150 => 98,  134 => 85,  60 => 13,  57 => 12,  51 => 9,  46 => 8,  43 => 7,  37 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NoxIntranetPointageBundle:Pointage:compilationArchiveMonth.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\PointageBundle/Resources/views/Pointage/compilationArchiveMonth.html.twig");
    }
}
