<?php

/* support/scp/settings.php */
class __TwigTemplate_0a5816ee14672037c42087ed8e8b9cd4ea9c895b6debbe83c4796123263eb29a extends Twig_Template
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
        echo "<?php
/*********************************************************************
    settings.php

    Handles all admin settings.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/

require('admin.inc.php');
\$errors=array();
\$settingOptions=array(
    'system' =>
        array(__('System Settings'), 'settings.system'),
    'tickets' =>
        array(__('Ticket Settings and Options'), 'settings.ticket'),
    'emails' =>
        array(__('Email Settings'), 'settings.email'),
    'pages' =>
        array(__('Site Pages'), 'settings.pages'),
    'access' =>
        array(__('Access Control'), 'settings.access'),
    'kb' =>
        array(__('Knowledgebase Settings'), 'settings.kb'),
    'autoresp' =>
        array(__('Autoresponder Settings'), 'settings.autoresponder'),
    'alerts' =>
        array(__('Alerts and Notices Settings'), 'settings.alerts'),
);
//Handle a POST.
\$target=(\$_REQUEST['t'] && \$settingOptions[\$_REQUEST['t']])?\$_REQUEST['t']:'system';
\$page = false;
if (isset(\$settingOptions[\$target]))
    \$page = \$settingOptions[\$target];

if(\$page && \$_POST && !\$errors) {
    if(\$cfg && \$cfg->updateSettings(\$_POST,\$errors)) {
        \$msg=sprintf(__('Successfully updated %s'), Format::htmlchars(\$page[0]));
    } elseif(!\$errors['err']) {
        \$errors['err']=__('Unable to update settings - correct errors below and try again');
    }
}

\$config=(\$errors && \$_POST)?Format::input(\$_POST):Format::htmlchars(\$cfg->getConfigInfo());
\$ost->addExtraHeader('<meta name=\"tip-namespace\" content=\"'.\$page[1].'\" />',
    \"\$('#content').data('tipNamespace', '\".\$page[1].\"');\");

\$nav->setTabActive('settings', ('settings.php?t='.\$target));
require_once(STAFFINC_DIR.'header.inc.php');
include_once(STAFFINC_DIR.\"settings-\$target.inc.php\");
include_once(STAFFINC_DIR.'footer.inc.php');
?>
";
    }

    public function getTemplateName()
    {
        return "support/scp/settings.php";
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
        return new Twig_Source("", "support/scp/settings.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\scp\\settings.php");
    }
}
