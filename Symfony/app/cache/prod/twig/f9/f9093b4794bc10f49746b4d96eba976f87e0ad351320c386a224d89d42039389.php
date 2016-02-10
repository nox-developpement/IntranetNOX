<?php

/* support/include/i18n/en_US/templates/page/thank-you.yaml */
class __TwigTemplate_9ddff818daa5f8666f96e10aaa4659f6646470ba5c508a8d7f32ff46ab327347 extends Twig_Template
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
# Page template: thank-you.yaml
#
# The thank-you page is served to the customer portal when a user submites a
# new ticket via the customer portal.
#
---
notes: |
    This template defines the content displayed on the Thank-You page after a 
    Client submits a new ticket in the Client Portal.

name: Thank You
body: |
    <div>%{ticket.name},
    <br>
    <br>
    Thank you for contacting us.
    <br>
    <br>
    A support ticket request has been created and a representative will be
    getting back to you shortly if necessary.</p>
    <br>
    <br>
    Support Team
    </div>
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/page/thank-you.yaml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* #*/
/* # Page template: thank-you.yaml*/
/* #*/
/* # The thank-you page is served to the customer portal when a user submites a*/
/* # new ticket via the customer portal.*/
/* #*/
/* ---*/
/* notes: |*/
/*     This template defines the content displayed on the Thank-You page after a */
/*     Client submits a new ticket in the Client Portal.*/
/* */
/* name: Thank You*/
/* body: |*/
/*     <div>%{ticket.name},*/
/*     <br>*/
/*     <br>*/
/*     Thank you for contacting us.*/
/*     <br>*/
/*     <br>*/
/*     A support ticket request has been created and a representative will be*/
/*     getting back to you shortly if necessary.</p>*/
/*     <br>*/
/*     <br>*/
/*     Support Team*/
/*     </div>*/
/* */
