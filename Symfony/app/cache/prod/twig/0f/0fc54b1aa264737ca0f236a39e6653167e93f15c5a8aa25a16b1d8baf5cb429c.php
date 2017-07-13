<?php

/* support/include/i18n/en_US/templates/email/ticket.activity.notice.yaml */
class __TwigTemplate_ced76851ecbe307bfeb842f2cafb92377ff4075f1dd8aa1beea3766ef99fc3e4 extends Twig_Template
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
# Email template: ticket.activity.notice.yaml
#
# Notice sent to collaborators on ticket activity e.g reply or message
#
---
notes: |
    Notice sent to collaborators on ticket activity e.g reply or message.

subject: |
    Re: %{ticket.subject} [#%{ticket.number}]
body: |
    <h3><strong>Dear %{recipient.name.first},</strong></h3>
    <div>
        <em>%{poster.name}</em> just logged a message to a ticket in which you participate.
    </div>
    <br>
    %{message}
    <br>
    <br>
    <hr>
    <div style=\"color: rgb(127, 127, 127); font-size: small; text-align: center;\">
    <em>You're getting this email because you are a collaborator
    on ticket <a href=\"%{recipient.ticket_link}\" style=\"color: rgb(84, 141, 212);\"
    >#%{ticket.number}</a>.  To participate, simply reply to this email
    or <a href=\"%{recipient.ticket_link}\" style=\"color: rgb(84, 141, 212);\"
    >click here</a> for a complete archive of the ticket thread.</em>
    </div>
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/email/ticket.activity.notice.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/templates/email/ticket.activity.notice.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\templates\\email\\ticket.activity.notice.yaml");
    }
}
