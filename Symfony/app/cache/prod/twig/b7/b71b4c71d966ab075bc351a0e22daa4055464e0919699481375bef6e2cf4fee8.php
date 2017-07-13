<?php

/* support/include/i18n/en_US/templates/email/ticket.overlimit.yaml */
class __TwigTemplate_a3fb31ba79a21b6ed43617e389a291e07ec2977f99c4dd8d69907894a8bd963b extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/email/ticket.overlimit.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/templates/email/ticket.overlimit.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\templates\\email\\ticket.overlimit.yaml");
    }
}
