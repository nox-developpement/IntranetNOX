<?php

/* support/api/pipe.php */
class __TwigTemplate_19a0a38702e342384f85389ebba0ef077024b3b9f26512faebf9f879fe9932fe extends Twig_Template
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
        echo "#!/usr/bin/php -q
<?php
/*********************************************************************
    pipe.php

    Converts piped emails to ticket. Just local - remote must use /api/tickets.email

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
ini_set('memory_limit', '256M'); //The concern here is having enough mem for emails with attachments.
@chdir(dirname(__FILE__).'/'); //Change dir.
require('api.inc.php');

//Only local piping supported via pipe.php
if (!osTicket::is_cli())
    die(__('pipe.php only supports local piping - use http -> api/tickets.email'));

require_once(INCLUDE_DIR.'api.tickets.php');
PipeApiController::process();
?>
";
    }

    public function getTemplateName()
    {
        return "support/api/pipe.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* #!/usr/bin/php -q*/
/* <?php*/
/* /**********************************************************************/
/*     pipe.php*/
/* */
/*     Converts piped emails to ticket. Just local - remote must use /api/tickets.email*/
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
/* ini_set('memory_limit', '256M'); //The concern here is having enough mem for emails with attachments.*/
/* @chdir(dirname(__FILE__).'/'); //Change dir.*/
/* require('api.inc.php');*/
/* */
/* //Only local piping supported via pipe.php*/
/* if (!osTicket::is_cli())*/
/*     die(__('pipe.php only supports local piping - use http -> api/tickets.email'));*/
/* */
/* require_once(INCLUDE_DIR.'api.tickets.php');*/
/* PipeApiController::process();*/
/* ?>*/
/* */
