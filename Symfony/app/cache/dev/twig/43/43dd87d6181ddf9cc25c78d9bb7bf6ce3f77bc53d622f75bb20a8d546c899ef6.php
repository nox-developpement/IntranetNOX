<?php

/* support/include/i18n/en_US/templates/page/thank-you.yaml */
class __TwigTemplate_ac993c44994ff40771a0445a9eb023291b451a93d6bcdd3c2ffa297668256ead extends Twig_Template
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
        $__internal_aa0491b3f4020acab2fc27e9eda58c78e6c2b05de288865ae0a9c39e2ea62e99 = $this->env->getExtension("native_profiler");
        $__internal_aa0491b3f4020acab2fc27e9eda58c78e6c2b05de288865ae0a9c39e2ea62e99->enter($__internal_aa0491b3f4020acab2fc27e9eda58c78e6c2b05de288865ae0a9c39e2ea62e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/templates/page/thank-you.yaml"));

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
        
        $__internal_aa0491b3f4020acab2fc27e9eda58c78e6c2b05de288865ae0a9c39e2ea62e99->leave($__internal_aa0491b3f4020acab2fc27e9eda58c78e6c2b05de288865ae0a9c39e2ea62e99_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/page/thank-you.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
