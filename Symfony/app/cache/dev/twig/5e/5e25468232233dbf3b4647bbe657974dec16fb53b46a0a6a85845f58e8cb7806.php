<?php

/* support/api/cron.php */
class __TwigTemplate_b79a28910ea5e592dae17b17eaddfc8ae2dd72156611cd6ccb45b8c781496134 extends Twig_Template
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
        $__internal_2fff8a1fc60e235eb238e0c4b3e5f033c6dbdecefd123a56f0a65251531e751e = $this->env->getExtension("native_profiler");
        $__internal_2fff8a1fc60e235eb238e0c4b3e5f033c6dbdecefd123a56f0a65251531e751e->enter($__internal_2fff8a1fc60e235eb238e0c4b3e5f033c6dbdecefd123a56f0a65251531e751e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/api/cron.php"));

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
        
        $__internal_2fff8a1fc60e235eb238e0c4b3e5f033c6dbdecefd123a56f0a65251531e751e->leave($__internal_2fff8a1fc60e235eb238e0c4b3e5f033c6dbdecefd123a56f0a65251531e751e_prof);

    }

    public function getTemplateName()
    {
        return "support/api/cron.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
