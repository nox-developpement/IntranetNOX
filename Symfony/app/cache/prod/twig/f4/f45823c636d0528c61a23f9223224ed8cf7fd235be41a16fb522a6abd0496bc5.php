<?php

/* :Emails/Pointages:confirmationCompilation.html.twig */
class __TwigTemplate_dfd4b281eddca8051cec257aa2f40bc94dc0d3cecadbb3ea22a2cbc5ff21277b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("Emails/base_email_template.html.twig", ":Emails/Pointages:confirmationCompilation.html.twig", 3);
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
        // line 1
        $context["months"] = array(1 => "Janvier", 2 => "Février", 3 => "Mars", 4 => "Avril", 5 => "Mai", 6 => "Juin", 7 => "Juillet", 8 => "Août", 9 => "Septembre", 10 => "Octobre", 11 => "Novembre", 12 => "Décembre");
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Demande de matériel";
    }

    // line 7
    public function block_mail_content($context, array $blocks = array())
    {
        // line 8
        echo "    <tr>
        <td>
            <p>
                Bonjour ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipient"]) ? $context["recipient"] : null), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipient"]) ? $context["recipient"] : null), "lastname", array()), "html", null, true);
        echo ",<br />
                <br />
                La compilation des pointages de ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["months"]) ? $context["months"] : null), (isset($context["month"]) ? $context["month"] : null), array(), "array"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : null), "html", null, true);
        echo " de l'etablissement ";
        echo twig_escape_filter($this->env, (isset($context["etablissement"]) ? $context["etablissement"] : null), "html", null, true);
        echo " a été validé par ";
        echo twig_escape_filter($this->env, (isset($context["sender"]) ? $context["sender"] : null), "html", null, true);
        echo " et est en attente de votre validation.<br />
                Vous pouvez traiter cette compilation en <a href='";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["redirectionUrl"]) ? $context["redirectionUrl"] : null), "html", null, true);
        echo "'>cliquant ici</a>.
            </p>
        </td>
    </tr>
";
    }

    public function getTemplateName()
    {
        return ":Emails/Pointages:confirmationCompilation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  53 => 13,  46 => 11,  41 => 8,  38 => 7,  32 => 5,  28 => 3,  26 => 1,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Emails/Pointages:confirmationCompilation.html.twig", "C:\\wamp\\www\\Symfony\\app/Resources\\views/Emails/Pointages/confirmationCompilation.html.twig");
    }
}
