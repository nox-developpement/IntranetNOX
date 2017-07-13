<?php

/* NoxIntranetCommunicationBundle:Accueil:fileTree.html.twig */
class __TwigTemplate_f39d7cd635a8b9b6737fbd2ab3f74d9a7a5e62115f654e21584359f6b79b2465 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetCommunicationBundle:Accueil:fileTree.html.twig", 1);
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
        echo (isset($context["dossier"]) ? $context["dossier"] : null);
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo (isset($context["dossier"]) ? $context["dossier"] : null);
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jqueryfiletree/dist/jQueryFileTree.min.css"), "html", null, true);
        echo "\">
    <style>
        .fileTree {
            width: 70%;
            margin: auto;
            text-align: center;
            margin-bottom: 2em;
            background-color: white;
        }

        .fileTree > .jqueryFileTree {
            display: inline-block !important;
            height: 500px;
            padding: 1em;
            overflow: auto;
            text-align: left;
            border: 1px inset lightgrey;
        }
    </style>

    <script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jqueryfiletree/dist/jQueryFileTree.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            // Affichage d'un arbre de navigation pour le dossier.
            \$('.fileTree').fileTree({
                root: '";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["folder"]) ? $context["folder"] : null), "html", null, true);
        echo "',
                script: '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jqueryfiletree/dist/connectors/communication_file_tree_connector.php"), "html", null, true);
        echo "'
            });

            // Ouverture du fichier lors du clique sur son nom.
            \$('.fileTree').on('filetreeclicked', function (e, data) {
                window.open(data.rel, '_blank');
            });
        });
    </script>

    ";
        // line 45
        if (((twig_test_empty((isset($context["authorizedUploadUsers"]) ? $context["authorizedUploadUsers"] : null)) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COMMUNICATION")) || twig_in_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), (isset($context["authorizedUploadUsers"]) ? $context["authorizedUploadUsers"] : null)))) {
            echo " 

        <div id=\"menuAdminNewsSI\" class='menuAdmin'>
            <h3> Interface de gestion de contenu </h3>
            <a onclick=\"openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["config"]) ? $context["config"] : null), "html", null, true);
            echo "', 'Gestionnaire de fichiers - ";
            echo (isset($context["dossier"]) ? $context["dossier"] : null);
            echo "');\"> <h3> Ouvrir le gestionnaire de fichier </h3> </a>
        </div>

    ";
        }
        // line 53
        echo "
    <div class=\"fileTree\">

    </div>

";
    }

    public function getTemplateName()
    {
        return "NoxIntranetCommunicationBundle:Accueil:fileTree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 53,  103 => 49,  96 => 45,  83 => 35,  79 => 34,  71 => 29,  48 => 9,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NoxIntranetCommunicationBundle:Accueil:fileTree.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\CommunicationBundle/Resources/views/Accueil/fileTree.html.twig");
    }
}
