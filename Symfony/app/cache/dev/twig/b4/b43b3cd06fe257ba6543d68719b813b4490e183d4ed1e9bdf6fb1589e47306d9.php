<?php

/* Emails/ErrorHandler/ErrorHandlingMail.html.twig */
class __TwigTemplate_d2269bee58809181903842666adf222664a0df2263dfd027c405c8e3b1452056 extends Twig_Template
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
        $__internal_f34a2227175163f64f522ed3e911ba3bceba0adf2523a652c602367612a59d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f34a2227175163f64f522ed3e911ba3bceba0adf2523a652c602367612a59d78->enter($__internal_f34a2227175163f64f522ed3e911ba3bceba0adf2523a652c602367612a59d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/ErrorHandler/ErrorHandlingMail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f34a2227175163f64f522ed3e911ba3bceba0adf2523a652c602367612a59d78->leave($__internal_f34a2227175163f64f522ed3e911ba3bceba0adf2523a652c602367612a59d78_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_178d1686552d52a593cebcb0016fbf1de733774ba50cf6be1c3f43c5d6b916e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_178d1686552d52a593cebcb0016fbf1de733774ba50cf6be1c3f43c5d6b916e6->enter($__internal_178d1686552d52a593cebcb0016fbf1de733774ba50cf6be1c3f43c5d6b916e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Erreur de fonctionnement de l'intranet";
        
        $__internal_178d1686552d52a593cebcb0016fbf1de733774ba50cf6be1c3f43c5d6b916e6->leave($__internal_178d1686552d52a593cebcb0016fbf1de733774ba50cf6be1c3f43c5d6b916e6_prof);

    }

    // line 5
    public function block_style($context, array $blocks = array())
    {
        $__internal_95783c57d79e90221865b0f77a2234a203fdafb2c2d7b89bda923d03942cf8c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95783c57d79e90221865b0f77a2234a203fdafb2c2d7b89bda923d03942cf8c1->enter($__internal_95783c57d79e90221865b0f77a2234a203fdafb2c2d7b89bda923d03942cf8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

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
        
        $__internal_95783c57d79e90221865b0f77a2234a203fdafb2c2d7b89bda923d03942cf8c1->leave($__internal_95783c57d79e90221865b0f77a2234a203fdafb2c2d7b89bda923d03942cf8c1_prof);

    }

    // line 29
    public function block_mail_content($context, array $blocks = array())
    {
        $__internal_1ffe41154128ea5fcff9f6c930f68ec6d103afea4a6118101509dafd0f555039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ffe41154128ea5fcff9f6c930f68ec6d103afea4a6118101509dafd0f555039->enter($__internal_1ffe41154128ea5fcff9f6c930f68ec6d103afea4a6118101509dafd0f555039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mail_content"));

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
        echo twig_escape_filter($this->env, (isset($context["errorCode"]) ? $context["errorCode"] : $this->getContext($context, "errorCode")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"label\">Message</td>
                        <td>";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"label\">Route</td>
                        <td>";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"label\">URL</td>
                        <td>";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"label\">Utilisateur</td>
                        <td>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "Firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "Lastname", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "Username", array()), "html", null, true);
        echo ")</td>
                    </tr>
                    <tr>
                        <td class=\"label\">Email de l'utilisateur</td>
                        <td><a href='mailto:";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["userEmail"]) ? $context["userEmail"] : $this->getContext($context, "userEmail")), "html", null, true);
        echo "'>";
        echo twig_escape_filter($this->env, (isset($context["userEmail"]) ? $context["userEmail"] : $this->getContext($context, "userEmail")), "html", null, true);
        echo "</a></td>
                    </tr>
                    <tr>
                        <td class=\"label\">Date et heure</td>
                        <td>";
        // line 69
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "d/m/Y à H:i:s"), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
";
        
        $__internal_1ffe41154128ea5fcff9f6c930f68ec6d103afea4a6118101509dafd0f555039->leave($__internal_1ffe41154128ea5fcff9f6c930f68ec6d103afea4a6118101509dafd0f555039_prof);

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
        return array (  153 => 69,  144 => 65,  133 => 61,  126 => 57,  119 => 53,  112 => 49,  105 => 45,  88 => 30,  82 => 29,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Emails/base_email_template.html.twig\" %}

{% block title %}Erreur de fonctionnement de l'intranet{% endblock %}

{% block style %}
    <style>
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
{% endblock %}

{% block mail_content %}
    <tr>
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
                        <td>{{ errorCode }}</td>
                    </tr>
                    <tr>
                        <td class=\"label\">Message</td>
                        <td>{{ message }}</td>
                    </tr>
                    <tr>
                        <td class=\"label\">Route</td>
                        <td>{{ route }}</td>
                    </tr>
                    <tr>
                        <td class=\"label\">URL</td>
                        <td>{{ url }}</td>
                    </tr>
                    <tr>
                        <td class=\"label\">Utilisateur</td>
                        <td>{{ user.Firstname }} {{ user.Lastname }} ({{ user.Username }})</td>
                    </tr>
                    <tr>
                        <td class=\"label\">Email de l'utilisateur</td>
                        <td><a href='mailto:{{ userEmail }}'>{{ userEmail }}</a></td>
                    </tr>
                    <tr>
                        <td class=\"label\">Date et heure</td>
                        <td>{{ date|date(\"d/m/Y à H:i:s\") }}</td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
{% endblock %}", "Emails/ErrorHandler/ErrorHandlingMail.html.twig", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\Emails\\ErrorHandler\\ErrorHandlingMail.html.twig");
    }
}
