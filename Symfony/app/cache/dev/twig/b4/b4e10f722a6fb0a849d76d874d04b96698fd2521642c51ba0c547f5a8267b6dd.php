<?php

/* support/scp/apps/dispatcher.php */
class __TwigTemplate_e414e557d864dc1feeeb5fc4af4d679d6f5110cd7ea0bf0f071349e154eba19e extends Twig_Template
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
        $__internal_f1f6acdeadcf6fb60def0eac2a67d00f0b159dc4eb6e9bd0f3cb2c2404e134c6 = $this->env->getExtension("native_profiler");
        $__internal_f1f6acdeadcf6fb60def0eac2a67d00f0b159dc4eb6e9bd0f3cb2c2404e134c6->enter($__internal_f1f6acdeadcf6fb60def0eac2a67d00f0b159dc4eb6e9bd0f3cb2c2404e134c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/scp/apps/dispatcher.php"));

        // line 1
        echo "<?php
/*********************************************************************
    dispatcher.php

    Dispatcher for staff applications

    Jared Hancock <jared@osticket.com>
    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
# Override staffLoginPage() defined in staff.inc.php to return an
# HTTP/Forbidden status rather than the actual login page.
# XXX: This should be moved to the AjaxController class
function staffLoginPage(\$msg='Unauthorized') {
    Http::response(403,'Must login: '.Format::htmlchars(\$msg));
    exit;
}

require('staff.inc.php');

//Clean house...don't let the world see your crap.
ini_set('display_errors', '0'); // Set by installer
ini_set('display_startup_errors', '0'); // Set by installer

//TODO: disable direct access via the browser? i,e All request must have REFER?
if(!defined('INCLUDE_DIR'))\tHttp::response(500, 'Server configuration error');

require_once INCLUDE_DIR.'/class.dispatcher.php';
\$dispatcher = new Dispatcher();

Signal::send('apps.scp', \$dispatcher);

# Call the respective function
print \$dispatcher->resolve(\$ost->get_path_info());
";
        
        $__internal_f1f6acdeadcf6fb60def0eac2a67d00f0b159dc4eb6e9bd0f3cb2c2404e134c6->leave($__internal_f1f6acdeadcf6fb60def0eac2a67d00f0b159dc4eb6e9bd0f3cb2c2404e134c6_prof);

    }

    public function getTemplateName()
    {
        return "support/scp/apps/dispatcher.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     dispatcher.php*/
/* */
/*     Dispatcher for staff applications*/
/* */
/*     Jared Hancock <jared@osticket.com>*/
/*     Peter Rotich <peter@osticket.com>*/
/*     Copyright (c)  2006-2013 osTicket*/
/*     http://www.osticket.com*/
/* */
/*     Released under the GNU General Public License WITHOUT ANY WARRANTY.*/
/*     See LICENSE.TXT for details.*/
/* */
/*     vim: expandtab sw=4 ts=4 sts=4:*/
/* **********************************************************************//* */
/* # Override staffLoginPage() defined in staff.inc.php to return an*/
/* # HTTP/Forbidden status rather than the actual login page.*/
/* # XXX: This should be moved to the AjaxController class*/
/* function staffLoginPage($msg='Unauthorized') {*/
/*     Http::response(403,'Must login: '.Format::htmlchars($msg));*/
/*     exit;*/
/* }*/
/* */
/* require('staff.inc.php');*/
/* */
/* //Clean house...don't let the world see your crap.*/
/* ini_set('display_errors', '0'); // Set by installer*/
/* ini_set('display_startup_errors', '0'); // Set by installer*/
/* */
/* //TODO: disable direct access via the browser? i,e All request must have REFER?*/
/* if(!defined('INCLUDE_DIR'))	Http::response(500, 'Server configuration error');*/
/* */
/* require_once INCLUDE_DIR.'/class.dispatcher.php';*/
/* $dispatcher = new Dispatcher();*/
/* */
/* Signal::send('apps.scp', $dispatcher);*/
/* */
/* # Call the respective function*/
/* print $dispatcher->resolve($ost->get_path_info());*/
/* */
