<?php

/* @NoxIntranetPointage/Pointage/addJustificatifFiles.html.twig */
class __TwigTemplate_8a4268bb94c94aea01859470de40a668dd8495836f52ec48681d79d3dc2a7fdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<style>
    html {
        padding: 0;
        margin: 0;
    }

    body {
        padding: 0;
        margin: 0;
        background-color: #BDBDBD;
    }

    #addFile {
        display: inline-block;
        padding: 1em;
        background: white;
        border: 1px solid black;
        text-align: center;
    }

    form {
        text-align: center;
        margin: 0;
        height: 100%;
    }

    #form_content {
        margin: 1em;
    }

    label[for='form_content'] {
        text-decoration: underline;
    }

    table {
        background-color: white;
        border-collapse: collapse;
        width: 100%;
    }

    table, table tr, table th, table td {
        border: 1px solid black;
    }

    table th {
        padding: 0.5em;
        text-align: center;
    }

    table td {
        text-align: center;
    }

    #tableDiv {
        height: 175px;
        overflow: auto;
    }

    #formDiv {
        height: 175px;
    }
</style>

<html>
    <head>
        <title>Fichiers justificatifs</title>
    </head>

    <body>
        <div id='tableDiv'>
            <table>
                <tr>
                    <th>Nom du fichier</th>
                    <th>Voir</th>
                    <th>Supprimer</th>
                </tr>
                ";
        // line 77
        if (twig_test_empty((isset($context["justificatifFiles"]) ? $context["justificatifFiles"] : null))) {
            // line 78
            echo "                    <tr>
                        <td colspan=\"3\">Pas de justificatif</td>
                    </tr>
                ";
        }
        // line 82
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["justificatifFiles"]) ? $context["justificatifFiles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["justificatif"]) {
            // line 83
            echo "                    <tr>
                        <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["justificatif"], "name", array()), "html", null, true);
            echo "</td>
                        <td><a target='_blank' href='";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_show_justificatif_file", array("justificatifId" => $this->getAttribute($context["justificatif"], "Id", array()))), "html", null, true);
            echo "'><img src='";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetpointage/images/Read-Only-24.png"), "html", null, true);
            echo "' alt='Read'></a></td>
                        <td><a href='";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_delete_justificatif_file", array("justificatifId" => $this->getAttribute($context["justificatif"], "Id", array()))), "html", null, true);
            echo "'><img src='";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetpointage/images/Delete-24.png"), "html", null, true);
            echo "' alt='Delete'></a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['justificatif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "            </table>
        </div>
        <div id='formDiv'>
            ";
        // line 92
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formAddJustificatifFile"]) ? $context["formAddJustificatifFile"] : null), 'form_start');
        echo "
            <p id=\"addFile\">
                ";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAddJustificatifFile"]) ? $context["formAddJustificatifFile"] : null), "content", array()), 'label');
        echo "<br />
                ";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAddJustificatifFile"]) ? $context["formAddJustificatifFile"] : null), "content", array()), 'widget');
        echo "<br />
                ";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAddJustificatifFile"]) ? $context["formAddJustificatifFile"] : null), "ajouter", array()), 'widget');
        echo "
            </p>
            ";
        // line 98
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formAddJustificatifFile"]) ? $context["formAddJustificatifFile"] : null), 'form_end');
        echo "
        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetPointage/Pointage/addJustificatifFiles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 98,  152 => 96,  148 => 95,  144 => 94,  139 => 92,  134 => 89,  123 => 86,  117 => 85,  113 => 84,  110 => 83,  105 => 82,  99 => 78,  97 => 77,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetPointage/Pointage/addJustificatifFiles.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\PointageBundle\\Resources\\views\\Pointage\\addJustificatifFiles.html.twig");
    }
}
