<?php

/* NoxIntranetRessourcesBundle:RH:gestionPointages.html.twig */
class __TwigTemplate_ff66e1ee8e9eb4edbbb7971a850301d299a7a085135439e0464f7b5143a2fdea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:RH:gestionPointages.html.twig", 1);
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
        echo " Gestion des pointages ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Gestion des pointages";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "    <style>
        #gestionPointageMenu {
            width: 60%;
            margin: auto;
            margin-bottom: 5em;
        }

        #gestionPointageMenu, #gestionPointageMenu tr, #gestionPointageMenu th, #gestionPointageMenu td {
            border-collapse: collapse;
            border: 1px solid black;
        }

        #gestionPointageMenu th {
            color: white;
            background-color: #1F4E79;
        }

        #gestionPointageMenu tr {
            border: none;
        }

        #gestionPointageMenu td {
            padding: 1% 2% 1% 2%;
            text-align: center;
            border-top: none;
            border-bottom: none;
        }

        #gestionPointageMenu td .gestionPointageLinkDiv {
            display: inline-block;
            padding: 2%;
            border-top: solid 1px rgb(192,0,0);
            border-bottom: solid 1px rgb(192,0,0);
        }

        #gestionPointageMenu td .gestionPointageLinkDiv:hover {
            border-top: solid 1px black;
            border-bottom: solid 1px black;
        }

        #gestionPointageMenu td a, #gestionPointageMenu td a:visited {
            color: #1F4E79;
            text-decoration: none;
        } 
    </style>

    <table id=\"gestionPointageMenu\">
        <tr>
            <th>Pointage indiviudel</th>
            <th>Compilation</th>
            <th>Autre</th>
        </tr>
        <tr>
            <!--<td><div class=\"gestionPointageLinkDiv\"><a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_assistantes_agence_gestion_pointage");
        echo "\">Assistant(e)s agence - Correction/Validation pointages</a></div></td>-->
            <td><div class=\"gestionPointageLinkDiv\"><a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_access_collaborateur_pointage");
        echo "\">Assistant(e)s agence - Remplissage pointage collaborateur</a></div></td>
            <td><div class=\"gestionPointageLinkDiv\"><a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointages_compilation", array("validationStep" => "AA"));
        echo "\">Assistant(e)s agence - Correction/Validation compilation</a></div></td>
            <td><div class=\"gestionPointageLinkDiv\"><a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_compilation_nox_ip_csv");
        echo "\">Compilation des affaires NOX IP</a></div></td>
        </tr>
        <tr>
            <td></td>
            <td><div class=\"gestionPointageLinkDiv\"><a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointages_compilation", array("validationStep" => "DAManager"));
        echo "\">DA/Manager - Correction/Validation compilation</a></div></td>
            <td><div class=\"gestionPointageLinkDiv\"><a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_compilation_modulation");
        echo "\">Compilation des modulations</a></div></td>
        </tr>
        <tr>
            <td></td>
            <td><div class=\"gestionPointageLinkDiv\"><a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointages_compilation", array("validationStep" => "Final"));
        echo "\">Consultation des compilations validées</a></div></td>
            <td><div class=\"gestionPointageLinkDiv\"><a href='";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Pointage/Aide/Prise en main des compilations.pdf"), "html", null, true);
        echo "' target='_blank'>Consulter la notice</a></div></td>
        </tr>
        <tr>
            <td></td>
            <td><div class=\"gestionPointageLinkDiv\"><a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_archives_compilation_etablissements");
        echo "\">Archives des compilations</a></div></td>
            <td></td>
        </tr>
    </table>

";
    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:RH:gestionPointages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 78,  134 => 74,  130 => 73,  123 => 69,  119 => 68,  112 => 64,  108 => 63,  104 => 62,  100 => 61,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NoxIntranetRessourcesBundle:RH:gestionPointages.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\RessourcesBundle/Resources/views/RH/gestionPointages.html.twig");
    }
}
