<?php

/* support/scp/login.php */
class __TwigTemplate_ab2f7d74e316f433a93e049baba6849ecd0cd643470c94e15fcf40db8ea3c552 extends Twig_Template
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
        $__internal_85240020abcbe74815907264dbd384efe84072b0817414ff1f6af3e6b99571ad = $this->env->getExtension("native_profiler");
        $__internal_85240020abcbe74815907264dbd384efe84072b0817414ff1f6af3e6b99571ad->enter($__internal_85240020abcbe74815907264dbd384efe84072b0817414ff1f6af3e6b99571ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/scp/login.php"));

        // line 1
        echo "<?php
/*********************************************************************
    login.php

    Handles staff authentication/logins

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require_once('../main.inc.php');
if(!defined('INCLUDE_DIR')) die('Fatal Error. Kwaheri!');

// Bootstrap gettext translations. Since no one is yet logged in, use the
// system or browser default
TextDomain::configureForUser();

require_once(INCLUDE_DIR.'class.staff.php');
require_once(INCLUDE_DIR.'class.csrf.php');

\$content = Page::lookup(Page::getIdByType('banner-staff'));

\$dest = \$_SESSION['_staff']['auth']['dest'];
\$msg = \$_SESSION['_staff']['auth']['msg'];
\$msg = \$msg ?: (\$content ? \$content->getName() : __('Authentication Required'));
\$dest=(\$dest && (!strstr(\$dest,'login.php') && !strstr(\$dest,'ajax.php')))?\$dest:'index.php';
\$show_reset = false;
if(\$_POST) {
    // Check the CSRF token, and ensure that future requests will have to
    // use a different CSRF token. This will help ward off both parallel and
    // serial brute force attacks, because new tokens will have to be
    // requested for each attempt.
    if (!\$ost->checkCSRFToken())
        Http::response(400, __('Valid CSRF Token Required'));

    // Rotate the CSRF token (original cannot be reused)
    \$ost->getCSRF()->rotate();

    // Lookup support backends for this staff
    \$username = trim(\$_POST['userid']);
    if (\$user = StaffAuthenticationBackend::process(\$username,
            \$_POST['passwd'], \$errors)) {
        session_write_close();
        Http::redirect(\$dest);
        require_once('index.php'); //Just incase header is messed up.
        exit;
    }

    \$msg = \$errors['err']?\$errors['err']:__('Invalid login');
    \$show_reset = true;
}
elseif (\$_GET['do']) {
    switch (\$_GET['do']) {
    case 'ext':
        // Lookup external backend
        if (\$bk = StaffAuthenticationBackend::getBackend(\$_GET['bk']))
            \$bk->triggerAuth();
    }
    Http::redirect('login.php');
}
// Consider single sign-on authentication backends
elseif (!\$thisstaff || !(\$thisstaff->getId() || \$thisstaff->isValid())) {
    if ((\$user = StaffAuthenticationBackend::processSignOn(\$errors, false))
            && (\$user instanceof StaffSession))
       @header(\"Location: \$dest\");
}

define(\"OSTSCPINC\",TRUE); //Make includes happy!
include_once(INCLUDE_DIR.'staff/login.tpl.php');
?>
";
        
        $__internal_85240020abcbe74815907264dbd384efe84072b0817414ff1f6af3e6b99571ad->leave($__internal_85240020abcbe74815907264dbd384efe84072b0817414ff1f6af3e6b99571ad_prof);

    }

    public function getTemplateName()
    {
        return "support/scp/login.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     login.php*/
/* */
/*     Handles staff authentication/logins*/
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
/* require_once('../main.inc.php');*/
/* if(!defined('INCLUDE_DIR')) die('Fatal Error. Kwaheri!');*/
/* */
/* // Bootstrap gettext translations. Since no one is yet logged in, use the*/
/* // system or browser default*/
/* TextDomain::configureForUser();*/
/* */
/* require_once(INCLUDE_DIR.'class.staff.php');*/
/* require_once(INCLUDE_DIR.'class.csrf.php');*/
/* */
/* $content = Page::lookup(Page::getIdByType('banner-staff'));*/
/* */
/* $dest = $_SESSION['_staff']['auth']['dest'];*/
/* $msg = $_SESSION['_staff']['auth']['msg'];*/
/* $msg = $msg ?: ($content ? $content->getName() : __('Authentication Required'));*/
/* $dest=($dest && (!strstr($dest,'login.php') && !strstr($dest,'ajax.php')))?$dest:'index.php';*/
/* $show_reset = false;*/
/* if($_POST) {*/
/*     // Check the CSRF token, and ensure that future requests will have to*/
/*     // use a different CSRF token. This will help ward off both parallel and*/
/*     // serial brute force attacks, because new tokens will have to be*/
/*     // requested for each attempt.*/
/*     if (!$ost->checkCSRFToken())*/
/*         Http::response(400, __('Valid CSRF Token Required'));*/
/* */
/*     // Rotate the CSRF token (original cannot be reused)*/
/*     $ost->getCSRF()->rotate();*/
/* */
/*     // Lookup support backends for this staff*/
/*     $username = trim($_POST['userid']);*/
/*     if ($user = StaffAuthenticationBackend::process($username,*/
/*             $_POST['passwd'], $errors)) {*/
/*         session_write_close();*/
/*         Http::redirect($dest);*/
/*         require_once('index.php'); //Just incase header is messed up.*/
/*         exit;*/
/*     }*/
/* */
/*     $msg = $errors['err']?$errors['err']:__('Invalid login');*/
/*     $show_reset = true;*/
/* }*/
/* elseif ($_GET['do']) {*/
/*     switch ($_GET['do']) {*/
/*     case 'ext':*/
/*         // Lookup external backend*/
/*         if ($bk = StaffAuthenticationBackend::getBackend($_GET['bk']))*/
/*             $bk->triggerAuth();*/
/*     }*/
/*     Http::redirect('login.php');*/
/* }*/
/* // Consider single sign-on authentication backends*/
/* elseif (!$thisstaff || !($thisstaff->getId() || $thisstaff->isValid())) {*/
/*     if (($user = StaffAuthenticationBackend::processSignOn($errors, false))*/
/*             && ($user instanceof StaffSession))*/
/*        @header("Location: $dest");*/
/* }*/
/* */
/* define("OSTSCPINC",TRUE); //Make includes happy!*/
/* include_once(INCLUDE_DIR.'staff/login.tpl.php');*/
/* ?>*/
/* */
