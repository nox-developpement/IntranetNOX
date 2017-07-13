<?php

/* support/scp/orgs.php */
class __TwigTemplate_432ac2fcd46013966e6057a82f28c07c976d91fd6aa8431572fe44b224cf5ce3 extends Twig_Template
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
    orgs.php

    Peter Rotich <peter@osticket.com>
    Jared Hancock <jared@osticket.com>
    Copyright (c)  2006-2014 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require('staff.inc.php');
require_once INCLUDE_DIR . 'class.note.php';

\$org = null;
if (\$_REQUEST['id'] || \$_REQUEST['org_id'])
    \$org = Organization::lookup(\$_REQUEST['org_id'] ?: \$_REQUEST['id']);

if (\$_POST) {
    switch (\$_REQUEST['a']) {
    case 'import-users':
        if (!\$org) {
            \$errors['err'] = __('Organization ID must be specified for import');
            break;
        }
        \$status = User::importFromPost(\$_FILES['import'] ?: \$_POST['pasted'],
            array('org_id'=>\$org->getId()));
        if (is_numeric(\$status))
            \$msg = sprintf(__('Successfully imported %1\$d %2\$s'), \$status,
                _N('end user', 'end users', \$status));
        else
            \$errors['err'] = \$status;
        break;
    case 'remove-users':
        if (!\$org)
            \$errors['err'] = __('Trying to remove end users from an unknown organization');
        elseif (!\$_POST['ids'] || !is_array(\$_POST['ids']) || !count(\$_POST['ids'])) {
            \$errors['err'] = sprintf(__('You must select at least %s'),
                __('one end user'));
        } else {
            \$i = 0;
            foreach (\$_POST['ids'] as \$k=>\$v) {
                if ((\$u=User::lookup(\$v)) && \$org->removeUser(\$u))
                    \$i++;
            }
            \$num = count(\$_POST['ids']);
            if (\$i && \$i == \$num)
                \$msg = sprintf(__('Successfully removed %s'),
                    _N('selected end user', 'selected end users', \$count));
            elseif (\$i > 0)
                \$warn = sprintf(__('%1\$d of %2\$d %3\$s removed'), \$i, \$count,
                    _N('selected end user', 'selected end users', \$count));
            elseif (!\$errors['err'])
                \$errors['err'] = sprintf(__('Unable to remove %s'),
                    _N('selected end user', 'selected end users', \$count));
        }
        break;

    case 'mass_process':
        if (!\$_POST['ids'] || !is_array(\$_POST['ids']) || !count(\$_POST['ids'])) {
            \$errors['err'] = sprintf(__('You must select at least %s.'),
                __('one organization'));
        }
        else {
            \$orgs = Organization::objects()->filter(
                array('id__in' => \$_POST['ids'])
            );
            \$count = 0;
            switch (strtolower(\$_POST['do'])) {
            case 'delete':
                foreach (\$orgs as \$O)
                    if (\$O->delete())
                        \$count++;
                break;

            default:
                \$errors['err']=__('Unknown action - get technical help.');
            }
            if (!\$errors['err'] && !\$count) {
                \$errors['err'] = __('Unable to manage any of the selected organizations');
            }
            elseif (\$_POST['count'] && \$count != \$_POST['count']) {
                \$warn = __('Not all selected items were updated');
            }
            elseif (\$count) {
                \$msg = __('Successfully managed selected organizations');
            }
        }
        break;

    default:
        \$errors['err'] = __('Unknown action');
    }
} elseif (\$_REQUEST['a'] == 'export') {
    require_once(INCLUDE_DIR.'class.export.php');
    \$ts = strftime('%Y%m%d');
    if (!(\$token=\$_REQUEST['qh']))
        \$errors['err'] = __('Query token required');
    elseif (!(\$query=\$_SESSION['orgs_qs_'.\$token]))
        \$errors['err'] = __('Query token not found');
    elseif (!Export::saveOrganizations(\$query, __('organizations').\"-\$ts.csv\", 'csv'))
        \$errors['err'] = __('Internal error: Unable to export results');
}

\$page = \$org? 'org-view.inc.php' : 'orgs.inc.php';
\$nav->setTabActive('users');
require(STAFFINC_DIR.'header.inc.php');
require(STAFFINC_DIR.\$page);
include(STAFFINC_DIR.'footer.inc.php');
?>
";
    }

    public function getTemplateName()
    {
        return "support/scp/orgs.php";
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
        return new Twig_Source("", "support/scp/orgs.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\scp\\orgs.php");
    }
}
