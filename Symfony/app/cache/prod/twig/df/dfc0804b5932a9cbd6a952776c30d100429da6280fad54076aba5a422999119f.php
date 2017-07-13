<?php

/* @NoxIntranetUser/DeveloppementProfessionnel/gestionEntretienProfessionel.html.twig */
class __TwigTemplate_49f291079673c194aaf77e053f94eb8dd3d6dfa08f4bf28ce74512aaa1960b50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetUser/DeveloppementProfessionnel/gestionEntretienProfessionel.html.twig", 1);
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
        echo " Mes entretiens à valider ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Mes entretiens à valider";
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
                    <th>Lien de validation</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entretiens"]) ? $context["entretiens"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entretien"]) {
            // line 60
            echo "                    <tr>
                        <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entretien"], "Collaborateur", array()), "Lastname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entretien"], "Collaborateur", array()), "Firstname", array()), "html", null, true);
            echo "</td>
                        <td><a href='";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_developpement_professionnel_formulaire", array("collaborateurUsername" => $this->getAttribute($this->getAttribute($context["entretien"], "Collaborateur", array()), "Username", array()))), "html", null, true);
            echo "' target='_blank'>Valider</a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entretien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetUser/DeveloppementProfessionnel/gestionEntretienProfessionel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 65,  125 => 62,  119 => 61,  116 => 60,  112 => 59,  75 => 25,  56 => 10,  53 => 9,  43 => 7,  37 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetUser/DeveloppementProfessionnel/gestionEntretienProfessionel.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\UserBundle\\Resources\\views\\DeveloppementProfessionnel\\gestionEntretienProfessionel.html.twig");
    }
}
