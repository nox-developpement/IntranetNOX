<?php

/* support/secure.inc.php */
class __TwigTemplate_5e2371287d63e565d028061253ddc57e74142c7f010805aa3d01083b62b3e551 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/secure.inc.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
