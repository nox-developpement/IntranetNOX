<?php

/* support/api/http.php */
class __TwigTemplate_e24431f6c49ac06e7614647d85ca07f25004f08d13d08340fd74f71470a83a97 extends Twig_Template
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
        $__internal_f383bafdd062b8fedd94b21b9a3a5728ce1b7278c6f7163616a76f6101fe8f3f = $this->env->getExtension("native_profiler");
        $__internal_f383bafdd062b8fedd94b21b9a3a5728ce1b7278c6f7163616a76f6101fe8f3f->enter($__internal_f383bafdd062b8fedd94b21b9a3a5728ce1b7278c6f7163616a76f6101fe8f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/api/http.php"));

        // line 1
        echo "<?php
/*********************************************************************
    http.php

    HTTP controller for the osTicket API

    Jared Hancock
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
// Use sessions — it's important for SSO authentication, which uses
// /api/auth/ext
define('DISABLE_SESSION', false);

require 'api.inc.php';

# Include the main api urls
require_once INCLUDE_DIR.\"class.dispatcher.php\";

\$dispatcher = patterns('',
        url_post(\"^/tickets\\.(?P<format>xml|json|email)\$\", array('api.tickets.php:TicketApiController','create')),
        url('^/tasks/', patterns('',
                url_post(\"^cron\$\", array('api.cron.php:CronApiController', 'execute'))
         ))
        );

Signal::send('api', \$dispatcher);

# Call the respective function
print \$dispatcher->resolve(\$ost->get_path_info());
?>
";
        
        $__internal_f383bafdd062b8fedd94b21b9a3a5728ce1b7278c6f7163616a76f6101fe8f3f->leave($__internal_f383bafdd062b8fedd94b21b9a3a5728ce1b7278c6f7163616a76f6101fe8f3f_prof);

    }

    public function getTemplateName()
    {
        return "support/api/http.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     http.php*/
/* */
/*     HTTP controller for the osTicket API*/
/* */
/*     Jared Hancock*/
/*     Copyright (c)  2006-2013 osTicket*/
/*     http://www.osticket.com*/
/* */
/*     Released under the GNU General Public License WITHOUT ANY WARRANTY.*/
/*     See LICENSE.TXT for details.*/
/* */
/*     vim: expandtab sw=4 ts=4 sts=4:*/
/* **********************************************************************//* */
/* // Use sessions — it's important for SSO authentication, which uses*/
/* // /api/auth/ext*/
/* define('DISABLE_SESSION', false);*/
/* */
/* require 'api.inc.php';*/
/* */
/* # Include the main api urls*/
/* require_once INCLUDE_DIR."class.dispatcher.php";*/
/* */
/* $dispatcher = patterns('',*/
/*         url_post("^/tickets\.(?P<format>xml|json|email)$", array('api.tickets.php:TicketApiController','create')),*/
/*         url('^/tasks/', patterns('',*/
/*                 url_post("^cron$", array('api.cron.php:CronApiController', 'execute'))*/
/*          ))*/
/*         );*/
/* */
/* Signal::send('api', $dispatcher);*/
/* */
/* # Call the respective function*/
/* print $dispatcher->resolve($ost->get_path_info());*/
/* ?>*/
/* */
