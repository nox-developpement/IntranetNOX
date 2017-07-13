<?php

/* :Emails/DemandeMateriel:demandeMaterielRefusDSI.html.twig */
class __TwigTemplate_a8653503af0b48e014f062f2b6b99dd53ae130089b98dcede36498353d0be278 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Emails/base_email_template.html.twig", ":Emails/DemandeMateriel:demandeMaterielRefusDSI.html.twig", 1);
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
                Bonjour ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesMessage"]) ? $context["donneesMessage"] : null), "demandeur", array(), "array"), "html", null, true);
        echo ",<br />
                <br />
                Votre demande de matériel a été rejetée par la DSI.
            </p>
        </td>
    </tr>
";
    }

    public function getTemplateName()
    {
        return ":Emails/DemandeMateriel:demandeMaterielRefusDSI.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Emails/DemandeMateriel:demandeMaterielRefusDSI.html.twig", "C:\\wamp\\www\\Symfony\\app/Resources\\views/Emails/DemandeMateriel/demandeMaterielRefusDSI.html.twig");
    }
}
