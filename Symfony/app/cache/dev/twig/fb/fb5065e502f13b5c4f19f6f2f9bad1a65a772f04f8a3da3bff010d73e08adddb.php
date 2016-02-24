<?php

/* support/scp/system.php */
class __TwigTemplate_90b5f35bd5236e855534415122d7f2a8b190556b6d1aa62b88605628fcdcf07f extends Twig_Template
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
        $__internal_51750de1b743fcbdbcfea80f9cfc822f50b8bc2ad1520a363aba7a8190e6b9de = $this->env->getExtension("native_profiler");
        $__internal_51750de1b743fcbdbcfea80f9cfc822f50b8bc2ad1520a363aba7a8190e6b9de->enter($__internal_51750de1b743fcbdbcfea80f9cfc822f50b8bc2ad1520a363aba7a8190e6b9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/scp/system.php"));

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
        
        $__internal_51750de1b743fcbdbcfea80f9cfc822f50b8bc2ad1520a363aba7a8190e6b9de->leave($__internal_51750de1b743fcbdbcfea80f9cfc822f50b8bc2ad1520a363aba7a8190e6b9de_prof);

    }

    public function getTemplateName()
    {
        return "support/scp/system.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
