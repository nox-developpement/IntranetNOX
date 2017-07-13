<?php

/* Emails/DemandeMateriel/demandeMaterielDSI.html.twig */
class __TwigTemplate_f3dc234e0b637044cf856c9c2a10aad5840c90e1d72bdbcd04d2374ee5082cdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Emails/base_email_template.html.twig", "Emails/DemandeMateriel/demandeMaterielDSI.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mail_content' => array($this, 'block_mail_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Emails/base_email_template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Demande de matériel";
    }

    // line 5
    public function block_mail_content($context, array $blocks = array())
    {
        // line 6
        echo "    <tr>
        <td>
            <p>
                N° ordre : ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["numOrdre"]) ? $context["numOrdre"] : null), "html", null, true);
        echo "<br />
                <br />
                Bonjour,<br />
                <br />
                L'utilisateur <strong>";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["demandeur"]) ? $context["demandeur"] : null), "html", null, true);
        echo "</strong> situé dans l'agence de <strong>";
        echo twig_escape_filter($this->env, (isset($context["agence"]) ? $context["agence"] : null), "html", null, true);
        echo "</strong> a fait
                la/les demande(s) suivante(s) :<br/>
                <br/>
                ";
        // line 16
        if (((isset($context["materielCheckbox"]) ? $context["materielCheckbox"] : null) == true)) {
            // line 17
            echo "                    - Matériel :  <strong>";
            echo twig_escape_filter($this->env, (isset($context["materiel"]) ? $context["materiel"] : null), "html", null, true);
            echo "</strong>.<br />
                ";
        }
        // line 19
        echo "                ";
        if (((isset($context["logicielCheckbox"]) ? $context["logicielCheckbox"] : null) == true)) {
            // line 20
            echo "                    - Logiciel : <strong>";
            echo twig_escape_filter($this->env, (isset($context["logiciel"]) ? $context["logiciel"] : null), "html", null, true);
            echo "</strong>.<br />
                ";
        }
        // line 22
        echo "                <br />
                Raison de la demande : ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["raison"]) ? $context["raison"] : null), "html", null, true);
        echo "<br />
                <br />
                Date désirée : <strong>";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : null), "d/m/Y"), "html", null, true);
        echo "</strong><br />
                <br />
                Pour répondre à cette demande merci de <a style=\"color: blue;\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_demande_materiel_confirmation_dsi", array("cleDemande" => (isset($context["cle"]) ? $context["cle"] : null)))), "html", null, true);
        echo "\">cliquer ici</a>.
            </p>
        </td>
    </tr>
";
    }

    public function getTemplateName()
    {
        return "Emails/DemandeMateriel/demandeMaterielDSI.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 27,  83 => 25,  78 => 23,  75 => 22,  69 => 20,  66 => 19,  60 => 17,  58 => 16,  50 => 13,  43 => 9,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Emails/DemandeMateriel/demandeMaterielDSI.html.twig", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\Emails\\DemandeMateriel\\demandeMaterielDSI.html.twig");
    }
}
