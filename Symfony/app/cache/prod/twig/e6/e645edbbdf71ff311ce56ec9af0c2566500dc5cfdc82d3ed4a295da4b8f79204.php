<?php

/* support/scp/directory.php */
class __TwigTemplate_d95a747b802411d42ea083dde368dc7b90f497cac04dae08d835ee5a3c90a43c extends Twig_Template
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
    directory.php

    Staff directory

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require('staff.inc.php');
\$page='directory.inc.php';
\$nav->setTabActive('dashboard');
\$ost->addExtraHeader('<meta name=\"tip-namespace\" content=\"dashboard.staff_directory\" />',
    \"\$('#content').data('tipNamespace', 'dashboard.staff_directory');\");
require(STAFFINC_DIR.'header.inc.php');
require(STAFFINC_DIR.\$page);
include(STAFFINC_DIR.'footer.inc.php');
?>
";
    }

    public function getTemplateName()
    {
        return "support/scp/directory.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     directory.php*/
/* */
/*     Staff directory*/
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
/* $page='directory.inc.php';*/
/* $nav->setTabActive('dashboard');*/
/* $ost->addExtraHeader('<meta name="tip-namespace" content="dashboard.staff_directory" />',*/
/*     "$('#content').data('tipNamespace', 'dashboard.staff_directory');");*/
/* require(STAFFINC_DIR.'header.inc.php');*/
/* require(STAFFINC_DIR.$page);*/
/* include(STAFFINC_DIR.'footer.inc.php');*/
/* ?>*/
/* */
