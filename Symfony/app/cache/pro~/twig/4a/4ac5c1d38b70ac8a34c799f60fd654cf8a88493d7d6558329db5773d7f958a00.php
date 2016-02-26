<?php

/* support/logo.php */
class __TwigTemplate_6210e5fd8b1dddc4efbc2c128689b88f40f42d0861ab7d4e27e9bff5fdd1f045 extends Twig_Template
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
    logo.php

    Simple logo to facilitate serving a customized client-side logo from
    osTicet. The logo is configurable in Admin Panel -> Settings -> Pages

    Peter Rotich <peter@osticket.com>
    Jared Hancock <jared@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/

// Don't update the session for inline image fetches
if (!function_exists('noop')) { function noop() {} }
session_set_save_handler('noop','noop','noop','noop','noop','noop');
define('DISABLE_SESSION', true);

require('client.inc.php');

if ((\$logo = \$ost->getConfig()->getClientLogo())) {
    \$logo->display();
} else {
    header('Location: '.ASSETS_PATH.'images/logo.png');
}

?>
";
    }

    public function getTemplateName()
    {
        return "support/logo.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     logo.php*/
/* */
/*     Simple logo to facilitate serving a customized client-side logo from*/
/*     osTicet. The logo is configurable in Admin Panel -> Settings -> Pages*/
/* */
/*     Peter Rotich <peter@osticket.com>*/
/*     Jared Hancock <jared@osticket.com>*/
/*     Copyright (c)  2006-2013 osTicket*/
/*     http://www.osticket.com*/
/* */
/*     Released under the GNU General Public License WITHOUT ANY WARRANTY.*/
/*     See LICENSE.TXT for details.*/
/* */
/*     vim: expandtab sw=4 ts=4 sts=4:*/
/* **********************************************************************//* */
/* */
/* // Don't update the session for inline image fetches*/
/* if (!function_exists('noop')) { function noop() {} }*/
/* session_set_save_handler('noop','noop','noop','noop','noop','noop');*/
/* define('DISABLE_SESSION', true);*/
/* */
/* require('client.inc.php');*/
/* */
/* if (($logo = $ost->getConfig()->getClientLogo())) {*/
/*     $logo->display();*/
/* } else {*/
/*     header('Location: '.ASSETS_PATH.'images/logo.png');*/
/* }*/
/* */
/* ?>*/
/* */
