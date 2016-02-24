<?php

/* support/include/ajax.upgrader.php */
class __TwigTemplate_6d383296a73056beb5c1592c7a710194864c595959e7111cf5c16f53dab256bd extends Twig_Template
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
        $__internal_e8cac8df9393674f202360cf425367f99f0c9482a750ca86009fc485f82d34be = $this->env->getExtension("native_profiler");
        $__internal_e8cac8df9393674f202360cf425367f99f0c9482a750ca86009fc485f82d34be->enter($__internal_e8cac8df9393674f202360cf425367f99f0c9482a750ca86009fc485f82d34be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/ajax.upgrader.php"));

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
        
        $__internal_e8cac8df9393674f202360cf425367f99f0c9482a750ca86009fc485f82d34be->leave($__internal_e8cac8df9393674f202360cf425367f99f0c9482a750ca86009fc485f82d34be_prof);

    }

    public function getTemplateName()
    {
        return "support/include/ajax.upgrader.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     ajax.upgrader.php*/
/* */
/*     AJAX interface for Upgrader*/
/* */
/*     Peter Rotich <peter@osticket.com>*/
/*     Copyright (c)  2006-2013 osTicket*/
/*     http://www.osticket.com*/
/* */
/*     Released under the GNU General Public License WITHOUT ANY WARRANTY.*/
/*     See LICENSE.TXT for details.*/
/* */
/*     vim: expandtab sw=4 ts=4 sts=4:*/
/* **********************************************************************//* */
/* */
/* if(!defined('INCLUDE_DIR')) die('403');*/
/* require_once INCLUDE_DIR.'class.upgrader.php';*/
/* */
/* class UpgraderAjaxAPI extends AjaxController {*/
/* */
/*     function upgrade() {*/
/*         global $thisstaff, $ost;*/
/* */
/*         if(!$thisstaff or !$thisstaff->isAdmin() or !$ost)*/
/*             Http::response(403, 'Access Denied');*/
/* */
/*         $upgrader = new Upgrader(TABLE_PREFIX, UPGRADE_DIR.'streams/');*/
/* */
/*         if($upgrader->isAborted()) {*/
/*             Http::response(416, __("We have a problem ... wait a sec."));*/
/*             exit;*/
/*         }*/
/* */
/*         if($upgrader->getTask() && $upgrader->doTask()) {*/
/*             //More pending tasks - doTasks returns the number of pending tasks*/
/*             Http::response(200, $upgrader->getNextAction());*/
/*             exit;*/
/*         } elseif($ost->isUpgradePending()) {*/
/*             if($upgrader->isUpgradable()) {*/
/*                 $version = $upgrader->getNextVersion();*/
/*                 if($upgrader->upgrade()) {*/
/*                     //We're simply reporting progress here - call back will report next action'*/
/*                     Http::response(200, sprintf(__("Upgraded to %s ... post-upgrade checks!"),$version));*/
/*                     exit;*/
/*                 }*/
/*             } else {*/
/*                 //Abort: Upgrade pending but NOT upgradable - invalid or wrong hash.*/
/*                 $upgrader->abort(sprintf(__('Upgrade Failed: Invalid or wrong hash [%s]'),$ost->getDBSignature()));*/
/*             }*/
/*         } elseif(!$ost->isUpgradePending()) {*/
/*             $upgrader->setState('done');*/
/*             session_write_close();*/
/*             Http::response(201, __("We're done!"));*/
/*             exit;*/
/*         }*/
/* */
/*         if($upgrader->isAborted() || $upgrader->getErrors()) {*/
/*             Http::response(416, __("We have a problem ... wait a sec."));*/
/*             exit;*/
/*         }*/
/* */
/*         Http::response(200, $upgrader->getNextAction());*/
/*     }*/
/* }*/
/* ?>*/
/* */
