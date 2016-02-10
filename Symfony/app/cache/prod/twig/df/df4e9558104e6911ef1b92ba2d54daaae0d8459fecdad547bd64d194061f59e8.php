<?php

/* support/logout.php */
class __TwigTemplate_5953e16fec5a3a60063a68045b1385dfc349f1f5f27101bdd0ba8c3da49bcd78 extends Twig_Template
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
    logout.php

    Destroy clients session.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/

require('client.inc.php');
//Check token: Make sure the user actually clicked on the link to logout.
if (\$thisclient && \$_GET['auth'] && \$ost->validateLinkToken(\$_GET['auth']))
   \$thisclient->logOut();

osTicketSession::destroyCookie();

Http::redirect('index.php');
?>
";
    }

    public function getTemplateName()
    {
        return "support/logout.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     logout.php*/
/* */
/*     Destroy clients session.*/
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
/* require('client.inc.php');*/
/* //Check token: Make sure the user actually clicked on the link to logout.*/
/* if ($thisclient && $_GET['auth'] && $ost->validateLinkToken($_GET['auth']))*/
/*    $thisclient->logOut();*/
/* */
/* osTicketSession::destroyCookie();*/
/* */
/* Http::redirect('index.php');*/
/* ?>*/
/* */
