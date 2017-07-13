<?php

/* @NoxIntranetUser/DeveloppementProfessionnel/formulaireMonitoring.html.twig */
class __TwigTemplate_9b4457b2746e0615ae653a514f5b7c1cea2c78ce874dc445a957b3353a75028a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetUser/DeveloppementProfessionnel/formulaireMonitoring.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        echo " Entretien annuel de développement professionnel ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Entretien annuel de développement professionnel";
    }

    // line 7
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        echo "Année ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " | <a href='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Préparation à l'Entretien de Développement Professionnel.pdf"), "html", null, true);
        echo "' target=\"_blank\">Préparation à l'Entretien de Développement Professionnel</a>";
    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        // line 10
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/jquery.tablesorter/jquery.tablesorter.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            // Initialisation de la fonction de trie Jquery.
            \$(\"#monitoringFormulaireTable\").tablesorter({
                sortList: [[0, 1]],
                headers: {
                    2: {
                        sorter: false
                    }
                }
            });
        });
    </script>

    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/jquery.tablesorter/themes/blue/style.css"), "html", null, true);
        echo "\">
    <style>
        #monitoringFormulaireDiv {
            width: 70%;
            margin: auto;
        }

        #monitoringFormulaireTable {
            width: 100%;    
        }

        #monitoringFormulaireTable, #monitoringFormulaireTable tr, #monitoringFormulaireTable th, #monitoringFormulaireTable td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        #monitoringFormulaireTable th {
            text-align: center;
        }

        #monitoringFormulaireTable td {
            text-align: center;
        }
    </style>

    <div id='monitoringFormulaireDiv'>
        <table id='monitoringFormulaireTable' class=\"tablesorter\">
            <thead>
                <tr>
                    <th>Collaborateur</th>
                    <th>Statut de l'entretien</th>
                    <th>Lien de validation</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entretiens"]) ? $context["entretiens"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entretien"]) {
            // line 61
            echo "                    <tr>
                        <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entretien"], "Collaborateur", array()), "Lastname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entretien"], "Collaborateur", array()), "Firstname", array()), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["entretien"], "Statut", array()), "html", null, true);
            if ($this->getAttribute((isset($context["currentValidators"]) ? $context["currentValidators"] : null), $this->getAttribute($this->getAttribute($context["entretien"], "Collaborateur", array()), "Username", array()), array(), "array", true, true)) {
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentValidators"]) ? $context["currentValidators"] : null), $this->getAttribute($this->getAttribute($context["entretien"], "Collaborateur", array()), "Username", array()), array(), "array"), "html", null, true);
                echo ")";
            }
            // line 65
            echo "                        </td>
                        ";
            // line 66
            if (($this->getAttribute($context["entretien"], "Statut", array()) != "Synthèse")) {
                // line 67
                echo "                            <td><a href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_developpement_professionnel_formulaire", array("collaborateurUsername" => $this->getAttribute($this->getAttribute($context["entretien"], "Collaborateur", array()), "Username", array()))), "html", null, true);
                echo "' target='_blank'>Valider</a></td>
                        ";
            } else {
                // line 69
                echo "                            <td>
                                <a href='";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_developpement_professionnel_formulaire", array("collaborateurUsername" => $this->getAttribute($this->getAttribute($context["entretien"], "Collaborateur", array()), "Username", array()))), "html", null, true);
                echo "' target='_blank'>Consulter</a>
                            </td>
                        ";
            }
            // line 73
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entretien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetUser/DeveloppementProfessionnel/formulaireMonitoring.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 75,  154 => 73,  148 => 70,  145 => 69,  139 => 67,  137 => 66,  134 => 65,  127 => 64,  120 => 62,  117 => 61,  113 => 60,  75 => 25,  56 => 10,  53 => 9,  43 => 7,  37 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetUser/DeveloppementProfessionnel/formulaireMonitoring.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\UserBundle\\Resources\\views\\DeveloppementProfessionnel\\formulaireMonitoring.html.twig");
    }
}
