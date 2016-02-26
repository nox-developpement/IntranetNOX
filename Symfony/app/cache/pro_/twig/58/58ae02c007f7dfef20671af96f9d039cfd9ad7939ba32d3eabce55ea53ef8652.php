<?php

/* support/include/i18n/en_US/templates/page/banner-client.yaml */
class __TwigTemplate_f159d24bb97ac26e9abca72c7abc32676f1efcb9085c996f11639ef92fa24707 extends Twig_Template
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
        echo "#
# banner-client.yaml
#
# This forms the header on the staff login page. It can be useful to inform
# your clients about your login and registration policies.
---
notes: >
    This composes the header on the Client Log In page. It can be useful to
    inform your Clients about your log in and registration policies.
name: \"Sign in to %{company.name}\"
body: >
    To better serve you, we encourage our Clients to register for an account.";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/page/banner-client.yaml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* #*/
/* # banner-client.yaml*/
/* #*/
/* # This forms the header on the staff login page. It can be useful to inform*/
/* # your clients about your login and registration policies.*/
/* ---*/
/* notes: >*/
/*     This composes the header on the Client Log In page. It can be useful to*/
/*     inform your Clients about your log in and registration policies.*/
/* name: "Sign in to %{company.name}"*/
/* body: >*/
/*     To better serve you, we encourage our Clients to register for an account.*/
