<?php

/* Emails/PrestationInterne/newPropositionExchange.html.twig */
class __TwigTemplate_c20abd7346a5f85cb85560d705d024bf1e22dba03e11677d6dcf7d16715b16fa extends Twig_Template
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
    table, tr, td, th {
        border: 1px solid black;
    }

    table {
        border-collapse: collapse;
    }

    th {
        background-color: lightgrey;
    }

    th, td {
        padding: 0.5%;
    }
</style>

Bonjour ";
        // line 19
        echo twig_escape_filter($this->env, ((((isset($context["receiver"]) ? $context["receiver"] : null) == "DA1")) ? ((($this->getAttribute((isset($context["DA1"]) ? $context["DA1"] : null), "Firstname", array()) . " ") . $this->getAttribute((isset($context["DA1"]) ? $context["DA1"] : null), "Lastname", array()))) : ((($this->getAttribute((isset($context["DA2"]) ? $context["DA2"] : null), "Firstname", array()) . " ") . $this->getAttribute((isset($context["DA2"]) ? $context["DA2"] : null), "Lastname", array())))), "html", null, true);
        echo ",
<br />
Vous avez reçu un nouveau message de ";
        // line 21
        echo twig_escape_filter($this->env, ((((isset($context["receiver"]) ? $context["receiver"] : null) == "DA2")) ? ((($this->getAttribute((isset($context["DA1"]) ? $context["DA1"] : null), "Firstname", array()) . " ") . $this->getAttribute((isset($context["DA1"]) ? $context["DA1"] : null), "Lastname", array()))) : ((($this->getAttribute((isset($context["DA2"]) ? $context["DA2"] : null), "Firstname", array()) . " ") . $this->getAttribute((isset($context["DA2"]) ? $context["DA2"] : null), "Lastname", array())))), "html", null, true);
        echo " concernant la proposition de prestation interne de la demande ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "Libelle", array()), "html", null, true);
        echo ".
<br />
<br />
<table>
    <tr>
        <th>Message</th>
    </tr>
    <tr>
        <td>";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "</td>
    </tr>
</table>
<br />
Vous pouvez répondre à ce message en <a href='";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["lienEchanges"]) ? $context["lienEchanges"] : null), "html", null, true);
        echo "'>cliquant-ici</a>.
";
    }

    public function getTemplateName()
    {
        return "Emails/PrestationInterne/newPropositionExchange.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 33,  57 => 29,  44 => 21,  39 => 19,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Emails/PrestationInterne/newPropositionExchange.html.twig", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\Emails\\PrestationInterne\\newPropositionExchange.html.twig");
    }
}
