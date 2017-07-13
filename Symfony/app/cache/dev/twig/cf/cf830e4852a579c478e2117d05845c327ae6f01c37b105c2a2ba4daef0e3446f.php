<?php

/* Emails/base_email_template.html.twig */
class __TwigTemplate_70f13b815c835c4f0f6b8dc84a40ba63683e793d2c6dfbe83667cb7e99a012b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'style' => array($this, 'block_style'),
            'mail_content' => array($this, 'block_mail_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7940905df41f66df44c9e60855b365e76f2367b9db5e302e93ea702a0cac2e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7940905df41f66df44c9e60855b365e76f2367b9db5e302e93ea702a0cac2e3->enter($__internal_f7940905df41f66df44c9e60855b365e76f2367b9db5e302e93ea702a0cac2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/base_email_template.html.twig"));

        // line 1
        echo "<!Doctype html>

<html>
    <head>
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <style>
            body {
                background-color: #1F4E79;
                text-align: center;
            }

            .container {
                width: 70%;
                margin: auto;
                padding: 0.5em;
                padding-bottom: 1em;
                background-color: white;
                -moz-border-radius: 5px; 
                -webkit-border-radius: 5px; 
                border-radius: 5px;
                text-align: left;
            }

        ";
        // line 24
        $this->displayBlock('style', $context, $blocks);
        // line 25
        echo "    </style>
</head>
<body>
    <table class=\"container\">
        <thead>
            <tr>
                <th>
                    <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetcommunication/images/bandeau.png")), "html", null, true);
        echo "\" alt=\"Bandeau NOX\">
                </th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 37
        $this->displayBlock('mail_content', $context, $blocks);
        // line 39
        echo "        </tbody>
    </table>
</body>
</html>";
        
        $__internal_f7940905df41f66df44c9e60855b365e76f2367b9db5e302e93ea702a0cac2e3->leave($__internal_f7940905df41f66df44c9e60855b365e76f2367b9db5e302e93ea702a0cac2e3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_622b8d7d07ca1d4dc6eae615d827fd5ab24251c53053fbc680914c9fde100216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_622b8d7d07ca1d4dc6eae615d827fd5ab24251c53053fbc680914c9fde100216->enter($__internal_622b8d7d07ca1d4dc6eae615d827fd5ab24251c53053fbc680914c9fde100216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_622b8d7d07ca1d4dc6eae615d827fd5ab24251c53053fbc680914c9fde100216->leave($__internal_622b8d7d07ca1d4dc6eae615d827fd5ab24251c53053fbc680914c9fde100216_prof);

    }

    // line 24
    public function block_style($context, array $blocks = array())
    {
        $__internal_eae894de93c4f9343ee02cacd6f61792e0760ff20bb3258e25816c35e21b4581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eae894de93c4f9343ee02cacd6f61792e0760ff20bb3258e25816c35e21b4581->enter($__internal_eae894de93c4f9343ee02cacd6f61792e0760ff20bb3258e25816c35e21b4581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        
        $__internal_eae894de93c4f9343ee02cacd6f61792e0760ff20bb3258e25816c35e21b4581->leave($__internal_eae894de93c4f9343ee02cacd6f61792e0760ff20bb3258e25816c35e21b4581_prof);

    }

    // line 37
    public function block_mail_content($context, array $blocks = array())
    {
        $__internal_d27ff87f5963c073253203217d0cd510c71d6796e2743cf717869093f4f8158b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d27ff87f5963c073253203217d0cd510c71d6796e2743cf717869093f4f8158b->enter($__internal_d27ff87f5963c073253203217d0cd510c71d6796e2743cf717869093f4f8158b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mail_content"));

        // line 38
        echo "            ";
        
        $__internal_d27ff87f5963c073253203217d0cd510c71d6796e2743cf717869093f4f8158b->leave($__internal_d27ff87f5963c073253203217d0cd510c71d6796e2743cf717869093f4f8158b_prof);

    }

    public function getTemplateName()
    {
        return "Emails/base_email_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  106 => 37,  95 => 24,  84 => 5,  74 => 39,  72 => 37,  64 => 32,  55 => 25,  53 => 24,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!Doctype html>

<html>
    <head>
        <title>{% block title %}{% endblock %}</title>
        <style>
            body {
                background-color: #1F4E79;
                text-align: center;
            }

            .container {
                width: 70%;
                margin: auto;
                padding: 0.5em;
                padding-bottom: 1em;
                background-color: white;
                -moz-border-radius: 5px; 
                -webkit-border-radius: 5px; 
                border-radius: 5px;
                text-align: left;
            }

        {% block style %}{% endblock %}
    </style>
</head>
<body>
    <table class=\"container\">
        <thead>
            <tr>
                <th>
                    <img src=\"{{ absolute_url(asset('bundles/noxintranetcommunication/images/bandeau.png')) }}\" alt=\"Bandeau NOX\">
                </th>
            </tr>
        </thead>
        <tbody>
            {% block mail_content %}
            {% endblock %}
        </tbody>
    </table>
</body>
</html>", "Emails/base_email_template.html.twig", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\Emails\\base_email_template.html.twig");
    }
}
