<?php

/* support/include/pear/BUNDLE */
class __TwigTemplate_d8c346c074d94d6e6d0dedbca5512303dd063a848b3518d2531dba7e860c8dfa extends Twig_Template
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
        echo "Log of pear packages bundled with osTicket

* osTicket v1.7.*
===========================================================
 PEAR-1.9.4 - core class
 Mail-1.2.0
 Mail_Mime-1.8.5 
 Net_SMTP-1.6.1
 Net_Socket-1.0.10
 Auth_SASL-1.0.6

-------- Changes ----------
* Add connect() function to Mail/smtp.php
";
    }

    public function getTemplateName()
    {
        return "support/include/pear/BUNDLE";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/include/pear/BUNDLE", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\pear\\BUNDLE");
    }
}
