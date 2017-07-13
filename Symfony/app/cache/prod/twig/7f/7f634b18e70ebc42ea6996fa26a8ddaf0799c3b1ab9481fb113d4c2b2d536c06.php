<?php

/* support/include/i18n/en_US/config.yaml */
class __TwigTemplate_d9d6775df5114a61d2850a9e04397fd3ce72a6a928e27c34084d1bacb8c13e70 extends Twig_Template
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
# Default configuration. The format is key: value and the data will be
# inserted into the %config table at install time
#
---
core:
    time_format: 'h:i A'
    date_format: 'm/d/Y'
    datetime_format: 'm/d/Y g:i a'
    daydatetime_format: 'D, M j Y g:ia'
    default_timezone_id: 8
    default_priority_id: 2
    enable_daylight_saving: 0

    reply_separator: '-- reply above this line --'

    # Do not translate below here
    isonline: 1
    staff_ip_binding: 0
    staff_max_logins: 4
    staff_login_timeout: 2
    staff_session_timeout: 30
    passwd_reset_period: 0
    client_max_logins: 4
    client_login_timeout: 2
    client_session_timeout: 30
    max_page_size: 25
    max_open_tickets: 0
    autolock_minutes: 3
    default_priority_id: 2
    default_smtp_id: 0
    use_email_priority: 0
    enable_kb: 0
    enable_premade: 1
    enable_captcha: 0
    enable_auto_cron: 0
    enable_mail_polling: 0
    send_sys_errors: 1
    send_sql_errors: 1
    send_login_errors: 1
    save_email_headers: 1
    strip_quoted_reply: 1
    ticket_autoresponder: 0
    message_autoresponder: 0
    ticket_notice_active: 1
    ticket_alert_active: 1
    ticket_alert_admin: 1
    ticket_alert_dept_manager: 1
    ticket_alert_dept_members: 0
    message_alert_active: 1
    message_alert_laststaff: 1
    message_alert_assigned: 1
    message_alert_dept_manager: 0
    note_alert_active: 0
    note_alert_laststaff: 1
    note_alert_assigned: 1
    note_alert_dept_manager: 0
    transfer_alert_active: 0
    transfer_alert_assigned: 0
    transfer_alert_dept_manager: 1
    transfer_alert_dept_members: 0
    overdue_alert_active: 1
    overdue_alert_assigned: 1
    overdue_alert_dept_manager: 1
    overdue_alert_dept_members: 0
    assigned_alert_active: 1
    assigned_alert_staff: 1
    assigned_alert_team_lead: 0
    assigned_alert_team_members: 0
    auto_claim_tickets: 1
    show_related_tickets: 1
    show_assigned_tickets: 1
    show_answered_tickets: 0
    hide_staff_name: 0
    overlimit_notice_active: 0
    email_attachments: 1
    number_format: '######'
    sequence_id: 0
    log_level: 2
    log_graceperiod: 12
    client_registration: 'public'
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/config.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/config.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\config.yaml");
    }
}
