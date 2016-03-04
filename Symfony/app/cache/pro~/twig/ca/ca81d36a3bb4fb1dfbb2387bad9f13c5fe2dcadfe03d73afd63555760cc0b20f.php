<?php

/* support/profile.php */
class __TwigTemplate_c7bf516250fbf1bc9c7107c2b6ed4c51b1b8ddc8ac3f0d437c6b67830809f17e extends Twig_Template
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
    profile.php

    Manage client profile. This will allow a logged-in user to manage
    his/her own public (non-internal) information

    Peter Rotich <peter@osticket.com>
    Jared Hancock <jared@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
    \$Id: \$
**********************************************************************/
require 'secure.inc.php';

require_once 'class.user.php';
\$user = User::lookup(\$thisclient->getId());

if (\$user && \$_POST) {
    \$errors = array();
    if (\$acct = \$thisclient->getAccount()) {
       \$acct->update(\$_POST, \$errors);
    }
    if (!\$errors && \$user->updateInfo(\$_POST, \$errors))
        Http::redirect('tickets.php');
}

\$inc = 'profile.inc.php';

include(CLIENTINC_DIR.'header.inc.php');
include(CLIENTINC_DIR.\$inc);
include(CLIENTINC_DIR.'footer.inc.php');

";
    }

    public function getTemplateName()
    {
        return "support/profile.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     profile.php*/
/* */
/*     Manage client profile. This will allow a logged-in user to manage*/
/*     his/her own public (non-internal) information*/
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
/*     $Id: $*/
/* **********************************************************************//* */
/* require 'secure.inc.php';*/
/* */
/* require_once 'class.user.php';*/
/* $user = User::lookup($thisclient->getId());*/
/* */
/* if ($user && $_POST) {*/
/*     $errors = array();*/
/*     if ($acct = $thisclient->getAccount()) {*/
/*        $acct->update($_POST, $errors);*/
/*     }*/
/*     if (!$errors && $user->updateInfo($_POST, $errors))*/
/*         Http::redirect('tickets.php');*/
/* }*/
/* */
/* $inc = 'profile.inc.php';*/
/* */
/* include(CLIENTINC_DIR.'header.inc.php');*/
/* include(CLIENTINC_DIR.$inc);*/
/* include(CLIENTINC_DIR.'footer.inc.php');*/
/* */
/* */
