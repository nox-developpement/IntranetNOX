<?php

/* Emails/DemandeMateriel/demandeMaterielValidationSuperieur.html.twig */
class __TwigTemplate_b452bd9426929a5adde500fde1b62c72e26266eb11d4d8ecd63e4544708bd300 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Emails/base_email_template.html.twig", "Emails/DemandeMateriel/demandeMaterielValidationSuperieur.html.twig", 1);
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
        echo twig_escape_filter($this->env, (isset($context["demandeur"]) ? $context["demandeur"] : null), "html", null, true);
        echo ",<br />
                <br />
                Votre demande de matériel a été validée par votre supérieur hiérarchique.
            </p>
        </td>
    </tr>
";
    }

    public function getTemplateName()
    {
        return "Emails/DemandeMateriel/demandeMaterielValidationSuperieur.html.twig";
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
        return new Twig_Source("", "Emails/DemandeMateriel/demandeMaterielValidationSuperieur.html.twig", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\Emails\\DemandeMateriel\\demandeMaterielValidationSuperieur.html.twig");
    }
}
