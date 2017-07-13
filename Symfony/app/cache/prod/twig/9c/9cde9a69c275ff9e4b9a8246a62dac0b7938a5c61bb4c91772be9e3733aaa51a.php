<?php

/* support/include/i18n/en_US/templates/ticket/installed.yaml */
class __TwigTemplate_6a9f71e8ac76cbcd566db45d578e0e1dec4a089a2c7aa3426b78d0bf2212207c extends Twig_Template
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
# Welcome ticket template
#
# When the system if first installed and the installer finishes setting up
# the database, it creates a first ticket with a welcome message to the
# administrator
#
---
deptId: 1 # support
topicId: 1 # support
name: osTicket Support
email: support@osticket.com
source: Web # notrans
subject: osTicket Installed!
message: |
    <p>
    Thank you for choosing osTicket.
    </p><p>
    Please make sure you join the <a
    href=\"http://osticket.com/forums\">osTicket forums</a> and our <a
    href=\"http://osticket.com/updates\">mailing list</a> to stay up to date
    on the latest news, security alerts and updates. The osTicket forums are
    also a great place to get assistance, guidance, tips, and help from
    other osTicket users.  In addition to the forums, the osTicket wiki
    provides a useful collection of educational materials, documentation,
    and notes from the community. We welcome your contributions to the
    osTicket community.
    </p><p>
    If you are looking for a greater level of support, we provide
    professional services and commercial support with guaranteed response
    times, and access to the core development team. We can also help
    customize osTicket or even add new features to the system to meet your
    unique needs.
    </p><p>
    If the idea of managing and upgrading this osTicket installation is
    daunting, you can try osTicket as a hosted service at <a
    href=\"http://www.supportsystem.com\">http://www.supportsystem.com/</a> --
    no installation required and we can import your data!  With
    SupportSystem's turnkey infrastructure, you get osTicket at its best,
    leaving you free to focus on your customers without the burden of making
    sure the application is stable, maintained, and secure.
    </p><p>
    Cheers,
    </p><p>
    -<br/>
    osTicket Team http://osticket.com/
    </p><p>
    <strong>PS.</strong> Don't just make customers happy, make happy
    customers!
    </p>
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/ticket/installed.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/templates/ticket/installed.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\templates\\ticket\\installed.yaml");
    }
}
