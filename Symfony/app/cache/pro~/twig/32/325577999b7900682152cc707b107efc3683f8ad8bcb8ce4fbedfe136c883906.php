<?php

/* support/scp/logout.php */
class __TwigTemplate_f3710c0ba93cee4ccf069c6aa7a5fa8d0402c26bbfc3a586a885fc8076bd3544 extends Twig_Template
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

    Log out staff
    Destroy the session and redirect to login.php

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require('staff.inc.php');

//Check token: Make sure the user actually clicked on the link to logout.
if(!\$_GET['auth'] || !\$ost->validateLinkToken(\$_GET['auth']))
    @header('Location: index.php');

\$thisstaff->logOut();

//Clear any ticket locks the staff has.
TicketLock::removeStaffLocks(\$thisstaff->getId());

//Destroy session on logout.
// TODO: Stop doing this starting with 1.9 - separate session data per
// app/panel.
session_unset();
session_destroy();

osTicketSession::destroyCookie();

@header('Location: login.php');
require('login.php');
?>
";
    }

    public function getTemplateName()
    {
        return "support/scp/logout.php";
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
/*     Log out staff*/
/*     Destroy the session and redirect to login.php*/
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
/* require('staff.inc.php');*/
/* */
/* //Check token: Make sure the user actually clicked on the link to logout.*/
/* if(!$_GET['auth'] || !$ost->validateLinkToken($_GET['auth']))*/
/*     @header('Location: index.php');*/
/* */
/* $thisstaff->logOut();*/
/* */
/* //Clear any ticket locks the staff has.*/
/* TicketLock::removeStaffLocks($thisstaff->getId());*/
/* */
/* //Destroy session on logout.*/
/* // TODO: Stop doing this starting with 1.9 - separate session data per*/
/* // app/panel.*/
/* session_unset();*/
/* session_destroy();*/
/* */
/* osTicketSession::destroyCookie();*/
/* */
/* @header('Location: login.php');*/
/* require('login.php');*/
/* ?>*/
/* */
