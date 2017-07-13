<?php

/* support/include/i18n/en_US/templates/ticket/upgraded.yaml */
class __TwigTemplate_d0cddddcf632043cda7ed593c3e9ec149174a211633b444b0442c691a5ab8a25 extends Twig_Template
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
# Upgrade completed ticket
#
# This ticket is added to the system after the completion of an upgrade. It
# might include information specific to the release, perhaps with some new
# feature highlights, etc.
#
---
source: Web # notrans
name: osTicket Support
email: support@osticket.com
subject: osTicket Upgraded!
message: |
    <p>
    osTicket upgraded successfully! Please refer to the Release Notes
    (http://osticket.com/wiki/Release_Notes) for more information about
    changes and new features.
    </p><p>
    Be sure to join the <a href=\"http://osticket.com/forums\">osTicket
    forums</a> and our <a href=\"http://osticket.com/updates\">mailing
    list</a> to stay up to date on announcements, security updates and
    alerts! Your contribution to osTicket community will be appreciated!
    </p><p>
    The osTicket team is committed to providing support to all users through
    our free online resources and a full range of commercial support
    packages and services. For more information, or to discuss your needs,
    please contact us today at http://osticket.com/support/. Any feedback
    will be appreciated!
    </p><p>
    If managing and upgrading this osTicket installation is daunting, you
    can try osTicket as a hosted service at http://www.supportsystem.com/ --
    no upgrading ever, and we can import your data!  With SupportSystem's
    turnkey infrastructure, you get osTicket at its best, leaving you free
    to focus on your customers without the burden of making sure the
    application is stable, maintained, and secure.
    </p><p>
    -<br/>
    osTicket Team<br/>
    http://osticket.com/
    </p>
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/ticket/upgraded.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/templates/ticket/upgraded.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\templates\\ticket\\upgraded.yaml");
    }
}
