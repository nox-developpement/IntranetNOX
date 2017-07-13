<?php

/* @NoxIntranetPointage/Pointage/compilationArchiveEtablissement.html.twig */
class __TwigTemplate_e21d6c5e2c17b0e25b35acffad13f6eca9723e3a70ed4ad965cdc0b35bc89306 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@NoxIntranetPointage/Pointage/compilationArchiveEtablissement.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
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
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
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

    <div id=\"pointage_compilation_archives\">
        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["etablissements"]) ? $context["etablissements"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["etablissement"]) {
            // line 78
            echo "            <div class=\"archive_folder\">
                <a class=\"archive_folder_link\" href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_archives_compilation_years", array("etablissement" => $this->getAttribute($context["etablissement"], "Etablissement", array()))), "html", null, true);
            echo "\">
                    <img class=\"archive_folder_icon\" src=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetpointage/images/Folder.png"), "html", null, true);
            echo "\">
                    <p class=\"archive_folder_label\">";
            // line 81
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["etablissement"], "Etablissement", array())), "html", null, true);
            echo "</p>
                </a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etablissement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetPointage/Pointage/compilationArchiveEtablissement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 85,  131 => 81,  127 => 80,  123 => 79,  120 => 78,  116 => 77,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetPointage/Pointage/compilationArchiveEtablissement.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\PointageBundle\\Resources\\views\\Pointage\\compilationArchiveEtablissement.html.twig");
    }
}
