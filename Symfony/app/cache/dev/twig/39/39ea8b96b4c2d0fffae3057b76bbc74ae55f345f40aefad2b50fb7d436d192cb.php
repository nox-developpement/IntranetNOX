<?php

/* support/main.inc.php */
class __TwigTemplate_e5f6f3d35047dfec22781d57f3dedf00b0e8d9eb7fbe79092b197450bd8690ef extends Twig_Template
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
        $__internal_e8afa86421d5b388bbf9df47f9cded926c6dcb9aa236b5f2edda41093002a905 = $this->env->getExtension("native_profiler");
        $__internal_e8afa86421d5b388bbf9df47f9cded926c6dcb9aa236b5f2edda41093002a905->enter($__internal_e8afa86421d5b388bbf9df47f9cded926c6dcb9aa236b5f2edda41093002a905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/main.inc.php"));

        // line 1
        echo "<?php
/*********************************************************************
main.inc.php

Master include file which must be included at the start of every file.
The brain of the whole sytem. Don't monkey with it.

Peter Rotich <peter@osticket.com>
Copyright (c)  2006-2013 osTicket
http://www.osticket.com

Released under the GNU General Public License WITHOUT ANY WARRANTY.
See LICENSE.TXT for details.

vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/

#Disable direct access.
if(isset(\$_SERVER['SCRIPT_NAME'])
        && !strcasecmp(basename(\$_SERVER['SCRIPT_NAME']),basename(__FILE__)))
    die('kwaheri rafiki!');

require('bootstrap.php');
Bootstrap::loadConfig();
Bootstrap::defineTables(TABLE_PREFIX);
Bootstrap::i18n_prep();
Bootstrap::loadCode();
Bootstrap::connect();

if(!(\$ost=osTicket::start()) || !(\$cfg = \$ost->getConfig()))
Bootstrap::croak(__('Unable to load config info from DB. Get tech support.'));

//Init
\$session = \$ost->getSession();

//System defaults we might want to make global//
#pagenation default - user can override it!
define('DEFAULT_PAGE_LIMIT', \$cfg->getPageSize()?\$cfg->getPageSize():25);

#Cleanup magic quotes crap.
if(function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc()) {
\$_POST=Format::strip_slashes(\$_POST);
\$_GET=Format::strip_slashes(\$_GET);
\$_REQUEST=Format::strip_slashes(\$_REQUEST);
}

// extract system messages
\$errors = array();
\$msg=\$warn=\$sysnotice='';
if (\$_SESSION['::sysmsgs']) {
    extract(\$_SESSION['::sysmsgs']);
    unset(\$_SESSION['::sysmsgs']);
}
?>
";
        
        $__internal_e8afa86421d5b388bbf9df47f9cded926c6dcb9aa236b5f2edda41093002a905->leave($__internal_e8afa86421d5b388bbf9df47f9cded926c6dcb9aa236b5f2edda41093002a905_prof);

    }

    public function getTemplateName()
    {
        return "support/main.inc.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/* main.inc.php*/
/* */
/* Master include file which must be included at the start of every file.*/
/* The brain of the whole sytem. Don't monkey with it.*/
/* */
/* Peter Rotich <peter@osticket.com>*/
/* Copyright (c)  2006-2013 osTicket*/
/* http://www.osticket.com*/
/* */
/* Released under the GNU General Public License WITHOUT ANY WARRANTY.*/
/* See LICENSE.TXT for details.*/
/* */
/* vim: expandtab sw=4 ts=4 sts=4:*/
/* **********************************************************************//* */
/* */
/* #Disable direct access.*/
/* if(isset($_SERVER['SCRIPT_NAME'])*/
/*         && !strcasecmp(basename($_SERVER['SCRIPT_NAME']),basename(__FILE__)))*/
/*     die('kwaheri rafiki!');*/
/* */
/* require('bootstrap.php');*/
/* Bootstrap::loadConfig();*/
/* Bootstrap::defineTables(TABLE_PREFIX);*/
/* Bootstrap::i18n_prep();*/
/* Bootstrap::loadCode();*/
/* Bootstrap::connect();*/
/* */
/* if(!($ost=osTicket::start()) || !($cfg = $ost->getConfig()))*/
/* Bootstrap::croak(__('Unable to load config info from DB. Get tech support.'));*/
/* */
/* //Init*/
/* $session = $ost->getSession();*/
/* */
/* //System defaults we might want to make global//*/
/* #pagenation default - user can override it!*/
/* define('DEFAULT_PAGE_LIMIT', $cfg->getPageSize()?$cfg->getPageSize():25);*/
/* */
/* #Cleanup magic quotes crap.*/
/* if(function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc()) {*/
/* $_POST=Format::strip_slashes($_POST);*/
/* $_GET=Format::strip_slashes($_GET);*/
/* $_REQUEST=Format::strip_slashes($_REQUEST);*/
/* }*/
/* */
/* // extract system messages*/
/* $errors = array();*/
/* $msg=$warn=$sysnotice='';*/
/* if ($_SESSION['::sysmsgs']) {*/
/*     extract($_SESSION['::sysmsgs']);*/
/*     unset($_SESSION['::sysmsgs']);*/
/* }*/
/* ?>*/
/* */
