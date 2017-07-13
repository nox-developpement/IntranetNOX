<?php

/* NoxIntranetPointageBundle:Pointage:addJustificatifFiles.html.twig */
class __TwigTemplate_6c3cf80c9bcd02b85b9ca559f7c8ae99ac2969c82bdd59724aaa071c79c900a2 extends Twig_Template
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
        $__internal_0eca7c4ffa6ab11bf08ac8ec2ede66cd71fb6d4c10c5a726f384d597ee8751ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eca7c4ffa6ab11bf08ac8ec2ede66cd71fb6d4c10c5a726f384d597ee8751ef->enter($__internal_0eca7c4ffa6ab11bf08ac8ec2ede66cd71fb6d4c10c5a726f384d597ee8751ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetPointageBundle:Pointage:addJustificatifFiles.html.twig"));

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
        if (twig_test_empty((isset($context["justificatifFiles"]) ? $context["justificatifFiles"] : $this->getContext($context, "justificatifFiles")))) {
            // line 78
            echo "                    <tr>
                        <td colspan=\"3\">Pas de justificatif</td>
                    </tr>
                ";
        }
        // line 82
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["justificatifFiles"]) ? $context["justificatifFiles"] : $this->getContext($context, "justificatifFiles")));
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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formAddJustificatifFile"]) ? $context["formAddJustificatifFile"] : $this->getContext($context, "formAddJustificatifFile")), 'form_start');
        echo "
            <p id=\"addFile\">
                ";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAddJustificatifFile"]) ? $context["formAddJustificatifFile"] : $this->getContext($context, "formAddJustificatifFile")), "content", array()), 'label');
        echo "<br />
                ";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAddJustificatifFile"]) ? $context["formAddJustificatifFile"] : $this->getContext($context, "formAddJustificatifFile")), "content", array()), 'widget');
        echo "<br />
                ";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAddJustificatifFile"]) ? $context["formAddJustificatifFile"] : $this->getContext($context, "formAddJustificatifFile")), "ajouter", array()), 'widget');
        echo "
            </p>
            ";
        // line 98
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formAddJustificatifFile"]) ? $context["formAddJustificatifFile"] : $this->getContext($context, "formAddJustificatifFile")), 'form_end');
        echo "
        </div>
    </body>
</html>
";
        
        $__internal_0eca7c4ffa6ab11bf08ac8ec2ede66cd71fb6d4c10c5a726f384d597ee8751ef->leave($__internal_0eca7c4ffa6ab11bf08ac8ec2ede66cd71fb6d4c10c5a726f384d597ee8751ef_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetPointageBundle:Pointage:addJustificatifFiles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 98,  155 => 96,  151 => 95,  147 => 94,  142 => 92,  137 => 89,  126 => 86,  120 => 85,  116 => 84,  113 => 83,  108 => 82,  102 => 78,  100 => 77,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style>
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
                {% if justificatifFiles is empty %}
                    <tr>
                        <td colspan=\"3\">Pas de justificatif</td>
                    </tr>
                {% endif %}
                {% for justificatif in justificatifFiles %}
                    <tr>
                        <td>{{ justificatif.name }}</td>
                        <td><a target='_blank' href='{{ path('nox_intranet_pointage_show_justificatif_file', {justificatifId: justificatif.Id}) }}'><img src='{{ asset('bundles/noxintranetpointage/images/Read-Only-24.png') }}' alt='Read'></a></td>
                        <td><a href='{{ path('nox_intranet_pointage_delete_justificatif_file', {justificatifId: justificatif.Id}) }}'><img src='{{ asset('bundles/noxintranetpointage/images/Delete-24.png') }}' alt='Delete'></a></td>
                    </tr>
                {% endfor %}
            </table>
        </div>
        <div id='formDiv'>
            {{ form_start(formAddJustificatifFile) }}
            <p id=\"addFile\">
                {{ form_label(formAddJustificatifFile.content) }}<br />
                {{ form_widget(formAddJustificatifFile.content) }}<br />
                {{ form_widget(formAddJustificatifFile.ajouter) }}
            </p>
            {{ form_end(formAddJustificatifFile) }}
        </div>
    </body>
</html>
", "NoxIntranetPointageBundle:Pointage:addJustificatifFiles.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\PointageBundle/Resources/views/Pointage/addJustificatifFiles.html.twig");
    }
}
