<?php

/* support/scp/system.php */
class __TwigTemplate_30acd8e648ce77cbc1264a8e83577c938a2f802ed6375d74ebb2d39b9667d2d4 extends Twig_Template
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
    system.php

    System information about this http server, database, php, and osticket.
    Includes useful configuration informations.

    Peter Rotich <peter@osticket.com>
    Jared Hancock <jared@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require('admin.inc.php');

\$page='system.inc.php';
\$nav->setTabActive('dashboard');
require(STAFFINC_DIR.'header.inc.php');
require(STAFFINC_DIR.\$page);
include(STAFFINC_DIR.'footer.inc.php');
?>
";
    }

    public function getTemplateName()
    {
        return "support/scp/system.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     system.php*/
/* */
/*     System information about this http server, database, php, and osticket.*/
/*     Includes useful configuration informations.*/
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
/* require('admin.inc.php');*/
/* */
/* $page='system.inc.php';*/
/* $nav->setTabActive('dashboard');*/
/* require(STAFFINC_DIR.'header.inc.php');*/
/* require(STAFFINC_DIR.$page);*/
/* include(STAFFINC_DIR.'footer.inc.php');*/
/* ?>*/
/* */
