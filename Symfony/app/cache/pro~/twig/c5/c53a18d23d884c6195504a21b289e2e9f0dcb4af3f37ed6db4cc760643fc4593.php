<?php

/* support/api/cron.php */
class __TwigTemplate_8d8bef2bb8566c788e09409b101c93111c0116097719f16fa1c0cb36ce3438fc extends Twig_Template
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
    cron.php

    File to handle LOCAL cron job calls.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
@chdir(dirname(__FILE__).'/'); //Change dir.
require('api.inc.php');

if (!osTicket::is_cli())
    die(__('cron.php only supports local cron calls - use http -> api/tasks/cron'));

require_once(INCLUDE_DIR.'api.cron.php');
LocalCronApiController::call();
?>
";
    }

    public function getTemplateName()
    {
        return "support/api/cron.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     cron.php*/
/* */
/*     File to handle LOCAL cron job calls.*/
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
/* @chdir(dirname(__FILE__).'/'); //Change dir.*/
/* require('api.inc.php');*/
/* */
/* if (!osTicket::is_cli())*/
/*     die(__('cron.php only supports local cron calls - use http -> api/tasks/cron'));*/
/* */
/* require_once(INCLUDE_DIR.'api.cron.php');*/
/* LocalCronApiController::call();*/
/* ?>*/
/* */
