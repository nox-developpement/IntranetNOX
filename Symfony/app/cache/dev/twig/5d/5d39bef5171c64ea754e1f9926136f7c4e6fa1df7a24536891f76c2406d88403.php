<?php

/* support/include/i18n/en_US/templates/email/ticket.overlimit.yaml */
class __TwigTemplate_251fd4ea50547f1fa0846c7aa1d9586c6ee877ea670542331e1153eb6dcfce07 extends Twig_Template
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
        $__internal_c96161cf52fca6e1457337d43b68920a3987eae0c9db962ccfd3d6475696a331 = $this->env->getExtension("native_profiler");
        $__internal_c96161cf52fca6e1457337d43b68920a3987eae0c9db962ccfd3d6475696a331->enter($__internal_c96161cf52fca6e1457337d43b68920a3987eae0c9db962ccfd3d6475696a331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/templates/email/ticket.overlimit.yaml"));

        // line 1
        echo "#
# Email template: ticket.overlimit.yaml
#
# Sent to users when they have exceeded the maximum open ticket limit. The
# limit is configurable in the Admin Panel, and is defined by the number of
# tickets open by a particular email address.
#
---
notes: |
    Sent to users when they have exceeded the maximum open ticket limit. The
    limit is configurable in the Admin Panel, and is defined by the number
    of tickets open by a particular email address.

subject: |
    Open Tickets Limit Reached
body: |
    <h3><strong>Dear %{ticket.name.first},</strong></h3>
    You have reached the maximum number of open tickets allowed. To be able
    to open another ticket, one of your pending tickets must be closed. To
    update or add comments to an open ticket simply <a
    href=\"%{url}/tickets.php?e=%{ticket.email}\">login to our helpdesk</a>.
    <br>
    <br>
    Thank you,<br/>
    Support Ticket System
";
        
        $__internal_c96161cf52fca6e1457337d43b68920a3987eae0c9db962ccfd3d6475696a331->leave($__internal_c96161cf52fca6e1457337d43b68920a3987eae0c9db962ccfd3d6475696a331_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/email/ticket.overlimit.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #*/
/* # Email template: ticket.overlimit.yaml*/
/* #*/
/* # Sent to users when they have exceeded the maximum open ticket limit. The*/
/* # limit is configurable in the Admin Panel, and is defined by the number of*/
/* # tickets open by a particular email address.*/
/* #*/
/* ---*/
/* notes: |*/
/*     Sent to users when they have exceeded the maximum open ticket limit. The*/
/*     limit is configurable in the Admin Panel, and is defined by the number*/
/*     of tickets open by a particular email address.*/
/* */
/* subject: |*/
/*     Open Tickets Limit Reached*/
/* body: |*/
/*     <h3><strong>Dear %{ticket.name.first},</strong></h3>*/
/*     You have reached the maximum number of open tickets allowed. To be able*/
/*     to open another ticket, one of your pending tickets must be closed. To*/
/*     update or add comments to an open ticket simply <a*/
/*     href="%{url}/tickets.php?e=%{ticket.email}">login to our helpdesk</a>.*/
/*     <br>*/
/*     <br>*/
/*     Thank you,<br/>*/
/*     Support Ticket System*/
/* */
