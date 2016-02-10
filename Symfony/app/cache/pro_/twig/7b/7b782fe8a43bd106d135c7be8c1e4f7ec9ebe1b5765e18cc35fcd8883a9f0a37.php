<?php

/* support/include/i18n/en_US/templates/page/offline.yaml */
class __TwigTemplate_9170d584a4b95aabe69b3979433166dd6f570dca5a68419b769f2a74c7a1c047 extends Twig_Template
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
# Page template: offline.yaml
#
# The offline page is served to the customer portal when the help desk is
# configured offline in the Admin Panel
#
---
notes: |
    The Offline Page appears in the Customer Portal when the Help Desk is offline.

name: Offline
body: |
    <div><h1>
    <span style=\"font-size: medium\">Support Ticket System Offline</span>
    </h1>
    <p>Thank you for your interest in contacting us.</p>
    <p>Our helpdesk is offline at the moment, please check back at a later
    time.</p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/page/offline.yaml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* #*/
/* # Page template: offline.yaml*/
/* #*/
/* # The offline page is served to the customer portal when the help desk is*/
/* # configured offline in the Admin Panel*/
/* #*/
/* ---*/
/* notes: |*/
/*     The Offline Page appears in the Customer Portal when the Help Desk is offline.*/
/* */
/* name: Offline*/
/* body: |*/
/*     <div><h1>*/
/*     <span style="font-size: medium">Support Ticket System Offline</span>*/
/*     </h1>*/
/*     <p>Thank you for your interest in contacting us.</p>*/
/*     <p>Our helpdesk is offline at the moment, please check back at a later*/
/*     time.</p>*/
/*     </div>*/
/* */
