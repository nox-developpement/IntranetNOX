<?php

/* support/apps/dispatcher.php */
class __TwigTemplate_a3706c8536475a9b848bb83385d9b20af17c634abe994db92ce33b96cba8c6c0 extends Twig_Template
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
    dispatcher.php

    Dispatcher for client applications

    Jared Hancock <jared@osticket.com>
    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/

function clientLoginPage(\$msg='Unauthorized') {
    Http::response(403,'Must login: '.Format::htmlchars(\$msg));
    exit;
}

require('client.inc.php');

if(!defined('INCLUDE_DIR'))\tHttp::response(500, 'Server configuration error');
require_once INCLUDE_DIR.'/class.dispatcher.php';

\$dispatcher = new Dispatcher();

Signal::send('ajax.client', \$dispatcher);
print \$dispatcher->resolve(\$ost->get_path_info());
";
    }

    public function getTemplateName()
    {
        return "support/apps/dispatcher.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     dispatcher.php*/
/* */
/*     Dispatcher for client applications*/
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
/* */
/* function clientLoginPage($msg='Unauthorized') {*/
/*     Http::response(403,'Must login: '.Format::htmlchars($msg));*/
/*     exit;*/
/* }*/
/* */
/* require('client.inc.php');*/
/* */
/* if(!defined('INCLUDE_DIR'))	Http::response(500, 'Server configuration error');*/
/* require_once INCLUDE_DIR.'/class.dispatcher.php';*/
/* */
/* $dispatcher = new Dispatcher();*/
/* */
/* Signal::send('ajax.client', $dispatcher);*/
/* print $dispatcher->resolve($ost->get_path_info());*/
/* */
