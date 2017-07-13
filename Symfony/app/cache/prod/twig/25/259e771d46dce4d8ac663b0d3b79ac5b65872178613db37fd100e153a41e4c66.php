<?php

/* Emails/base_email_template.html.twig */
class __TwigTemplate_31476b90b97debb9304ade8273093f9d182b1afa3cd167ddbab316a40fccec54 extends Twig_Template
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
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 24
    public function block_style($context, array $blocks = array())
    {
    }

    // line 37
    public function block_mail_content($context, array $blocks = array())
    {
        // line 38
        echo "            ";
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
        return array (  91 => 38,  88 => 37,  83 => 24,  78 => 5,  71 => 39,  69 => 37,  61 => 32,  52 => 25,  50 => 24,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Emails/base_email_template.html.twig", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\Emails\\base_email_template.html.twig");
    }
}
