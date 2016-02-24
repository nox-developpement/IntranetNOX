<?php

/* support/include/i18n/en_US/templates/page/offline.yaml */
class __TwigTemplate_fb2fad4e58df50910182bf4f594cade3f0c9eca6c3afa0138c16aab16109e306 extends Twig_Template
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
        $__internal_047587995a4bcc5665e1ed0590d5af7d158b3df0b001a297449e37cc50392ac8 = $this->env->getExtension("native_profiler");
        $__internal_047587995a4bcc5665e1ed0590d5af7d158b3df0b001a297449e37cc50392ac8->enter($__internal_047587995a4bcc5665e1ed0590d5af7d158b3df0b001a297449e37cc50392ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/templates/page/offline.yaml"));

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
        
        $__internal_047587995a4bcc5665e1ed0590d5af7d158b3df0b001a297449e37cc50392ac8->leave($__internal_047587995a4bcc5665e1ed0590d5af7d158b3df0b001a297449e37cc50392ac8_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/page/offline.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
