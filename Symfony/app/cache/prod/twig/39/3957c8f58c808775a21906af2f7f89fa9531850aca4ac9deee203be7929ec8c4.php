<?php

/* Emails/ErrorHandler/ErrorHandlingMail.html.twig */
class __TwigTemplate_b4c67271a1341d1c6d18d02cd16e23d23eb4032190c0a23df4da8f67d7c23f0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Emails/base_email_template.html.twig", "Emails/ErrorHandler/ErrorHandlingMail.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'style' => array($this, 'block_style'),
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
        echo "Erreur de fonctionnement de l'intranet";
    }

    // line 5
    public function block_style($context, array $blocks = array())
    {
        // line 6
        echo "    <style>
        .exception_infos {
            border-collapse: collapse;
            width: 100%;
        }

        .exception_infos, .exception_infos tr, .exception_infos td {
            border: 1px solid black;
        }

        .exception_infos td {
            padding: 0.5em;
            text-align: center;
            background-color: white;
        }

        .exception_infos .label {
            text-align: right;
            background-color: lightgrey;
        }
    </style>
";
    }

    // line 29
    public function block_mail_content($context, array $blocks = array())
    {
        // line 30
        echo "    <tr>
        <td>
            <p>
                Bonjour,<br />
                <br />
                <span style=\"color: red;\">Une erreur a eu lieu dans le fonctionnement de l'intranet.</span><br />
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <table class=\"exception_infos\">
                <tbody>
                    <tr>
                        <td class=\"label\">Code</td>
                        <td>";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["errorCode"]) ? $context["errorCode"] : null), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"label\">Message</td>
                        <td>";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"label\">Route</td>
                        <td>";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["route"]) ? $context["route"] : null), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"label\">URL</td>
                        <td>";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"label\">Utilisateur</td>
                        <td>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "Firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "Lastname", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "Username", array()), "html", null, true);
        echo ")</td>
                    </tr>
                    <tr>
                        <td class=\"label\">Email de l'utilisateur</td>
                        <td><a href='mailto:";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["userEmail"]) ? $context["userEmail"] : null), "html", null, true);
        echo "'>";
        echo twig_escape_filter($this->env, (isset($context["userEmail"]) ? $context["userEmail"] : null), "html", null, true);
        echo "</a></td>
                    </tr>
                    <tr>
                        <td class=\"label\">Date et heure</td>
                        <td>";
        // line 69
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : null), "d/m/Y à H:i:s"), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
";
    }

    public function getTemplateName()
    {
        return "Emails/ErrorHandler/ErrorHandlingMail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 69,  123 => 65,  112 => 61,  105 => 57,  98 => 53,  91 => 49,  84 => 45,  67 => 30,  64 => 29,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Emails/ErrorHandler/ErrorHandlingMail.html.twig", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\Emails\\ErrorHandler\\ErrorHandlingMail.html.twig");
    }
}
