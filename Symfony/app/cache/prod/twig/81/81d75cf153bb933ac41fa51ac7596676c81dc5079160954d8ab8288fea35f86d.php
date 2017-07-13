<?php

/* support/scp/login.php */
class __TwigTemplate_5b82d7cb7f792515cc1cf3a90f0052ee6ea56da4cc077a3819bf3350f9e30efd extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/scp/login.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/scp/login.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\scp\\login.php");
    }
}
