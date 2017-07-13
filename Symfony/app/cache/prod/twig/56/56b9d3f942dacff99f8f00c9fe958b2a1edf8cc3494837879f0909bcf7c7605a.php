<?php

/* @NoxIntranetPointage/Pointage/compilationArchiveYear.html.twig */
class __TwigTemplate_4d9fd7b44d0db9f8405a19c1efbcbf57f88674d4b41d2073edc4d02c0a244b6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@NoxIntranetPointage/Pointage/compilationArchiveYear.html.twig", 1);
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
        echo "Etablissement: ";
        echo twig_escape_filter($this->env, (isset($context["etablissement"]) ? $context["etablissement"] : null), "html", null, true);
    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        // line 10
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
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["years"]) ? $context["years"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 80
            echo "            <div class=\"archive_folder\">
                <a class=\"archive_folder_link\" href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_archives_compilation_month", array("etablissement" => (isset($context["etablissement"]) ? $context["etablissement"] : null), "year" => $this->getAttribute($context["year"], "Year", array()))), "html", null, true);
            echo "\">
                    <img class=\"archive_folder_icon\" src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetpointage/images/Folder.png"), "html", null, true);
            echo "\">
                    <p class=\"archive_folder_label\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["year"], "Year", array()), "html", null, true);
            echo "</p>
                </a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetPointage/Pointage/compilationArchiveYear.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 87,  139 => 83,  135 => 82,  131 => 81,  128 => 80,  124 => 79,  53 => 10,  50 => 9,  43 => 7,  37 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetPointage/Pointage/compilationArchiveYear.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\PointageBundle\\Resources\\views\\Pointage\\compilationArchiveYear.html.twig");
    }
}
