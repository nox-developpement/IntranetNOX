<?php

/* support/secure.inc.php */
class __TwigTemplate_94f8dfd88750bbfb78880c3bff5e2c8e67e68b5e9dd69df66dfdc2e02d858a36 extends Twig_Template
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
        $__internal_9bf35c23e63db1a5feef53850871e949ce0b87224ae468639e6c7490751d5a95 = $this->env->getExtension("native_profiler");
        $__internal_9bf35c23e63db1a5feef53850871e949ce0b87224ae468639e6c7490751d5a95->enter($__internal_9bf35c23e63db1a5feef53850871e949ce0b87224ae468639e6c7490751d5a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/secure.inc.php"));

        // line 1
        echo "<?php
/*********************************************************************
    secure.inc.php

    File included on every client's \"secure\" pages

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
if(!strcasecmp(basename(\$_SERVER['SCRIPT_NAME']),basename(__FILE__))) die('Kwaheri!');
if(!file_exists('client.inc.php')) die('Fatal Error.');
require_once('client.inc.php');

//Client Login page: Ajax interface can pre-declare the function to trap logins.
if(!function_exists('clientLoginPage')) {
    function clientLoginPage(\$msg ='') {
        global \$ost, \$cfg, \$nav;
        \$_SESSION['_client']['auth']['dest'] =
            '/' . ltrim(\$_SERVER['REQUEST_URI'], '/');
        require('./login.php');
        exit;
    }
}

//User must be logged in!
if(!\$thisclient || !\$thisclient->getId() || !\$thisclient->isValid()){
    clientLoginPage();
    exit;
}
\$thisclient->refreshSession();
?>
";
        
        $__internal_9bf35c23e63db1a5feef53850871e949ce0b87224ae468639e6c7490751d5a95->leave($__internal_9bf35c23e63db1a5feef53850871e949ce0b87224ae468639e6c7490751d5a95_prof);

    }

    public function getTemplateName()
    {
        return "support/secure.inc.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     secure.inc.php*/
/* */
/*     File included on every client's "secure" pages*/
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
/* if(!strcasecmp(basename($_SERVER['SCRIPT_NAME']),basename(__FILE__))) die('Kwaheri!');*/
/* if(!file_exists('client.inc.php')) die('Fatal Error.');*/
/* require_once('client.inc.php');*/
/* */
/* //Client Login page: Ajax interface can pre-declare the function to trap logins.*/
/* if(!function_exists('clientLoginPage')) {*/
/*     function clientLoginPage($msg ='') {*/
/*         global $ost, $cfg, $nav;*/
/*         $_SESSION['_client']['auth']['dest'] =*/
/*             '/' . ltrim($_SERVER['REQUEST_URI'], '/');*/
/*         require('./login.php');*/
/*         exit;*/
/*     }*/
/* }*/
/* */
/* //User must be logged in!*/
/* if(!$thisclient || !$thisclient->getId() || !$thisclient->isValid()){*/
/*     clientLoginPage();*/
/*     exit;*/
/* }*/
/* $thisclient->refreshSession();*/
/* ?>*/
/* */
