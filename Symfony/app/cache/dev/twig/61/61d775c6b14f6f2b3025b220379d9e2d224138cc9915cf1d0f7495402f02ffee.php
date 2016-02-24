<?php

/* support/scp/directory.php */
class __TwigTemplate_cb6420855fce92265c231a6625caf13727b33056ba537a82629899c1570c0111 extends Twig_Template
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
        $__internal_b420c1ae3a4c6f39d42eaafd8bd5303a4407dc42821d1e51b27ebfc2a930c5a9 = $this->env->getExtension("native_profiler");
        $__internal_b420c1ae3a4c6f39d42eaafd8bd5303a4407dc42821d1e51b27ebfc2a930c5a9->enter($__internal_b420c1ae3a4c6f39d42eaafd8bd5303a4407dc42821d1e51b27ebfc2a930c5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/scp/directory.php"));

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
        
        $__internal_b420c1ae3a4c6f39d42eaafd8bd5303a4407dc42821d1e51b27ebfc2a930c5a9->leave($__internal_b420c1ae3a4c6f39d42eaafd8bd5303a4407dc42821d1e51b27ebfc2a930c5a9_prof);

    }

    public function getTemplateName()
    {
        return "support/scp/directory.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
