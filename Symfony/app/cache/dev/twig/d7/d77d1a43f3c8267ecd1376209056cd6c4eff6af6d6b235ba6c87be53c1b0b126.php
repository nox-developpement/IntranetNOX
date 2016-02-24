<?php

/* support/profile.php */
class __TwigTemplate_099c8c14bcae50ded2bd6f7c24afdaf89c6162a584f7b2d1c2f36cabe78ff8c1 extends Twig_Template
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
        $__internal_5eb55687191069bdd0626a6d36cf48e08ef802c7c1969b4938950ca802663a17 = $this->env->getExtension("native_profiler");
        $__internal_5eb55687191069bdd0626a6d36cf48e08ef802c7c1969b4938950ca802663a17->enter($__internal_5eb55687191069bdd0626a6d36cf48e08ef802c7c1969b4938950ca802663a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/profile.php"));

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
        
        $__internal_5eb55687191069bdd0626a6d36cf48e08ef802c7c1969b4938950ca802663a17->leave($__internal_5eb55687191069bdd0626a6d36cf48e08ef802c7c1969b4938950ca802663a17_prof);

    }

    public function getTemplateName()
    {
        return "support/profile.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
