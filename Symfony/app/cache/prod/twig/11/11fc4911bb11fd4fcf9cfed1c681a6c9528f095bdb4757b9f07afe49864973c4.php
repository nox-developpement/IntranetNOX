<?php

/* support/include/ajax.upgrader.php */
class __TwigTemplate_d87d8ea84c440d4c9f0ba6722718a54efe7124e7d5f5bbb885eca999157de11a extends Twig_Template
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
    ajax.upgrader.php

    AJAX interface for Upgrader

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/

if(!defined('INCLUDE_DIR')) die('403');
require_once INCLUDE_DIR.'class.upgrader.php';

class UpgraderAjaxAPI extends AjaxController {

    function upgrade() {
        global \$thisstaff, \$ost;

        if(!\$thisstaff or !\$thisstaff->isAdmin() or !\$ost)
            Http::response(403, 'Access Denied');

        \$upgrader = new Upgrader(TABLE_PREFIX, UPGRADE_DIR.'streams/');

        if(\$upgrader->isAborted()) {
            Http::response(416, __(\"We have a problem ... wait a sec.\"));
            exit;
        }

        if(\$upgrader->getTask() && \$upgrader->doTask()) {
            //More pending tasks - doTasks returns the number of pending tasks
            Http::response(200, \$upgrader->getNextAction());
            exit;
        } elseif(\$ost->isUpgradePending()) {
            if(\$upgrader->isUpgradable()) {
                \$version = \$upgrader->getNextVersion();
                if(\$upgrader->upgrade()) {
                    //We're simply reporting progress here - call back will report next action'
                    Http::response(200, sprintf(__(\"Upgraded to %s ... post-upgrade checks!\"),\$version));
                    exit;
                }
            } else {
                //Abort: Upgrade pending but NOT upgradable - invalid or wrong hash.
                \$upgrader->abort(sprintf(__('Upgrade Failed: Invalid or wrong hash [%s]'),\$ost->getDBSignature()));
            }
        } elseif(!\$ost->isUpgradePending()) {
            \$upgrader->setState('done');
            session_write_close();
            Http::response(201, __(\"We're done!\"));
            exit;
        }

        if(\$upgrader->isAborted() || \$upgrader->getErrors()) {
            Http::response(416, __(\"We have a problem ... wait a sec.\"));
            exit;
        }

        Http::response(200, \$upgrader->getNextAction());
    }
}
?>
";
    }

    public function getTemplateName()
    {
        return "support/include/ajax.upgrader.php";
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
        return new Twig_Source("", "support/include/ajax.upgrader.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\ajax.upgrader.php");
    }
}
