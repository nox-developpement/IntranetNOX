<?php

/* :Emails/PrestationInterne:sendMailToDA1.html.twig */
class __TwigTemplate_01e1fe33bc062fa4e53f3e8cc176f92969fe6bc29cfd30ea148a9626114c745a extends Twig_Template
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
Le collaborateur <span style='text-decoration: underline;'>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demandeur"]) ? $context["demandeur"] : null), "Firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demandeur"]) ? $context["demandeur"] : null), "Lastname", array()), "html", null, true);
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
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "Libelle", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td class='trLabel'>Demandeur</td>
        <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demandeur"]) ? $context["demandeur"] : null), "Firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demandeur"]) ? $context["demandeur"] : null), "Lastname", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td class='trLabel'>Lieu de l'opération</td>
        <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "LieuOperation", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td class='trLabel'>Lieu de la prestation</td>
        <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "LieuPrestation", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td class='trLabel'>Descriptif de la prestation</td>
        <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "Descriptif", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td class='trLabel'>Déplacements à prévoir</td>
        <td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "Deplacement", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td class='trLabel'>Date de démarrage de la prestation</td>
        <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "DateDemarrage", array()), "d/m/Y"), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td class='trLabel'>Date de rendu</td>
        <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "DateRendu", array()), "d/m/Y"), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td class='trLabel'>Livrables attendus</td>
        <td>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "Livrables", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td class='trLabel'>Volume de sous traitance envisagé (€)</td>
        <td>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "VolumeSousTraitance", array()), "html", null, true);
        echo "</td>
    </tr>
</table>
<br />
Veuillez <a href='";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_validation_da1", array("cleDemande" => $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "CleDemande", array())))), "html", null, true);
        echo "'>cliquez ici</a> pour traiter la demande.
<br />";
    }

    public function getTemplateName()
    {
        return ":Emails/PrestationInterne:sendMailToDA1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 68,  118 => 64,  111 => 60,  104 => 56,  97 => 52,  90 => 48,  83 => 44,  76 => 40,  69 => 36,  60 => 32,  53 => 28,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Emails/PrestationInterne:sendMailToDA1.html.twig", "C:\\wamp\\www\\Symfony\\app/Resources\\views/Emails/PrestationInterne/sendMailToDA1.html.twig");
    }
}
