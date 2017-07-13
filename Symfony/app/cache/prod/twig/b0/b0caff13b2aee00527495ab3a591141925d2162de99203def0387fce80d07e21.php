<?php

/* :Emails/PrestationInterne:sendMailToDA2.html.twig */
class __TwigTemplate_92f5c4f4008854928e98c8246e20dc3dd707e67455ee0ec31164dfe6a094caca extends Twig_Template
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
        echo "Bonjour,<br />
<br />
Le directeur d'agence <span style='text-decoration: underline;'>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["DA1"]) ? $context["DA1"] : null), "Firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["DA1"]) ? $context["DA1"] : null), "Lastname", array()), "html", null, true);
        echo "</span> a fait la demande de recherche de prestation suivante :<br />
<br />

<style>
    table, tr, td {
        border: solid 1px black;
        border-collapse: collapse;        
    }

    td {
        padding: 1%;

    }

    .trLabel {
        font-weight: bold;
        background-color: lightgrey;
    }
</style>

<table>
    <tr>
        <td class='trLabel' colspan='2'>Demande de prestation interne</td>
    </tr>
    <tr>
        <td class='trLabel'>Libellé</td>
        <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "Libelle", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td class='trLabel'>Demandeur</td>
        <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demandeur"]) ? $context["demandeur"] : null), "Firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demandeur"]) ? $context["demandeur"] : null), "Lastname", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td class='trLabel'>Lieu de l'opération</td>
        <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "LieuOperation", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td class='trLabel'>Lieu de la prestation</td>
        <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "LieuPrestation", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td class='trLabel'>Descriptif de la prestation</td>
        <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "Descriptif", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td class='trLabel'>Déplacements à prévoir</td>
        <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "Deplacement", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td class='trLabel'>Date de démarrage de la prestation</td>
        <td>";
        // line 53
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "DateDemarrage", array()), "d/m/Y"), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td class='trLabel'>Date de rendu</td>
        <td>";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "DateRendu", array()), "d/m/Y"), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td class='trLabel'>Livrables attendus</td>
        <td>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "Livrables", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td class='trLabel'>Volume de sous traitance envisagé (€)</td>
        <td>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "VolumeSousTraitance", array()), "html", null, true);
        echo "</td>
    </tr>
</table>
<br />
Veuillez <a href='";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_reponse_da2", array("cleDemande" => $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "CleDemande", array()), "reponse" => "valider"))), "html", null, true);
        echo "' style='color: green'>cliquez ici</a> <!--
-->si vous <span style='color: green'>pouvez</span> répondre à la demande ou <!--
--><a href='";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_reponse_da2", array("cleDemande" => $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "CleDemande", array()), "reponse" => "refuser"))), "html", null, true);
        echo "' style='color: red'>cliquez ici</a> <!--
-->si vous ne <span style='color: red'>pouvez pas</span> répondre à la demande.
<br />
";
    }

    public function getTemplateName()
    {
        return ":Emails/PrestationInterne:sendMailToDA2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 71,  126 => 69,  119 => 65,  112 => 61,  105 => 57,  98 => 53,  91 => 49,  84 => 45,  77 => 41,  70 => 37,  61 => 33,  54 => 29,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Emails/PrestationInterne:sendMailToDA2.html.twig", "C:\\wamp\\www\\Symfony\\app/Resources\\views/Emails/PrestationInterne/sendMailToDA2.html.twig");
    }
}
