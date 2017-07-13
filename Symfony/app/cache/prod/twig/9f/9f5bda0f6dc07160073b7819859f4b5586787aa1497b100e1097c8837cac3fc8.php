<?php

/* @NoxIntranetPointage/Pointage/forfaitsDeplacementDetails.html.twig */
class __TwigTemplate_fa058d4a0a207b71e1211e66d771d7e4439242220737ceb4216e9dc242bf09f0 extends Twig_Template
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
        echo "
<style>
    html, body {
        margin: 0;
        padding: 0;
    }

    table, tr, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    table {
        width: 100%;
    }

    th, td {
        padding: 0.1em 0.5em 0.1em 0.5em;
        text-align: center;
    }

    th {
        background: linear-gradient(to bottom,  #336fa0 0%,#052775 100%);
        color: white;
    }

    .dateTd {
        background-color: lightgrey;
    }

    .forfaitsDeplacementValue {
        width: 100%;
        text-align: center;
    }
</style>

<script src=";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/jquery-2.2.0.min.js"), "html", null, true);
        echo "></script>
<script>
    \$(window).load(function () {
        ajaxForfaitsDeplacementEdition();
    });

    // Sauvegarde les modifications de mods.
    function ajaxForfaitsDeplacementEdition() {
        // Initialisation d'un timer.
        var delay = (function () {
            var timer = 0;
            return function (callback, ms) {
                clearTimeout(timer);
                timer = setTimeout(callback, ms);
            };
        })();

        // Lorsque d'un changement de valeur...
        \$('.forfaitsDeplacementValue').on('change keyup', function () {
            // On récupére toutes les valeurs et leurs dates sous forme de tableau.
            var forfaitsDeplacementArray = [];
            \$('.forfaitsDeplacementValue').each(function () {
                // On récupère la date et la valeur.
                var date = \$(this).data('date');
                var value = \$(this).val();

                // On les place dans un objet.
                var forfait = {day: date, value: value};

                // On ajoute l'objet au tableau.
                forfaitsDeplacementArray.push(forfait);
            });

            // On lance le timer.
            delay(function () {
                // Si il n'y a pas de changement de valeur pendant plus de 1000ms on lance la requête ajax de sauvegarde.
                \$.ajax({
                    url: '";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_save_forfaits_deplacement_edition");
        echo "',
                    type: 'POST',
                    data: {month: \"";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["month"]) ? $context["month"] : null), "html", null, true);
        echo "\", year: \"";
        echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : null), "html", null, true);
        echo "\", user: \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "Username", array()), "html", null, true);
        echo "\", forfaitDeplacementValues: JSON.stringify(forfaitsDeplacementArray)},
                    success: function (totalForfaitDeplacementValue) {
                        // On met à jour l'affichage de la valeur total de modulation.
                        \$('#totalForfaitDeplacementValue').text(totalForfaitDeplacementValue);

                        // On attribut la valeur total du forfait déplacement dans la compilation.
                        \$(\"tr[username='";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "Username", array()), "html", null, true);
        echo "']\", window.opener.document).find('.forfaitsDeplacementValue').text(totalForfaitDeplacementValue);
                    }
                });
            }, 1000);
        });
    }
</script>

<title>Forfaits déplacement détails</title>

<table>
    <tr>
        <th colspan=\"2\">";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "Lastname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "Firstname", array()), "html", null, true);
        echo "</th>
    </tr>
    <tr>
        <th colspan=\"2\">Forfaits deplacement total ";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : null), "html", null, true);
        echo ": <span id=\"totalForfaitDeplacementValue\">";
        echo twig_escape_filter($this->env, (isset($context["totalForfaitDeplacement"]) ? $context["totalForfaitDeplacement"] : null), "html", null, true);
        echo "</span></th>
    </tr>
    <tr>
        <th>Date</th>
        <th>Valeur du forfait déplacement</th>
    </tr>
    ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forfaitDeplacementArray"]) ? $context["forfaitDeplacementArray"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["forfaitDeplacement"]) {
            // line 104
            echo "        <tr>
            <td class=\"dateTd\">";
            // line 105
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["forfaitDeplacement"], "day", array(), "array"), "d/m/Y"), "html", null, true);
            echo "</td>
            <td><input class=\"forfaitsDeplacementValue\" type=\"number\" step=\"0.1\" value=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["forfaitDeplacement"], "value", array(), "array"), "html", null, true);
            echo "\" data-date=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["forfaitDeplacement"], "day", array(), "array"), "html", null, true);
            echo "\" ";
            if (((isset($context["readonly"]) ? $context["readonly"] : null) == "true")) {
                echo "readonly";
            }
            echo "></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forfaitDeplacement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetPointage/Pointage/forfaitsDeplacementDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 109,  160 => 106,  156 => 105,  153 => 104,  149 => 103,  138 => 97,  130 => 94,  115 => 82,  102 => 76,  97 => 74,  57 => 37,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetPointage/Pointage/forfaitsDeplacementDetails.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\PointageBundle\\Resources\\views\\Pointage\\forfaitsDeplacementDetails.html.twig");
    }
}
