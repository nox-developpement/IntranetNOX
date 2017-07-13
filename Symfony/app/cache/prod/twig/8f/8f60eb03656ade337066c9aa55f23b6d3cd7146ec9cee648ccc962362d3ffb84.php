<?php

/* support/scp/profile.php */
class __TwigTemplate_d485878b8b9d7cf546341a328d5e12c3a3bedf99b9ca10c6d490176c93ac31ff extends Twig_Template
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
    profile.php

    Staff's profile handle

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/

require_once('staff.inc.php');
require_once(INCLUDE_DIR.'class.export.php');       // For paper sizes

\$msg='';
\$staff=Staff::lookup(\$thisstaff->getId());
if(\$_POST && \$_POST['id']!=\$thisstaff->getId()) { //Check dummy ID used on the form.
 \$errors['err']=__('Internal Error. Action Denied');
} elseif(!\$errors && \$_POST) { //Handle post

    if(!\$staff)
        \$errors['err']=sprintf(__('%s: Unknown or invalid'), __('agent'));
    elseif(\$staff->updateProfile(\$_POST,\$errors)){
        \$msg=__('Profile updated successfully');
        \$thisstaff->reload();
        \$staff->reload();
        \$_SESSION['TZ_OFFSET']=\$thisstaff->getTZoffset();
        \$_SESSION['TZ_DST']=\$thisstaff->observeDaylight();
    }elseif(!\$errors['err'])
        \$errors['err']=__('Profile update error. Try correcting the errors below and try again!');
}

//Forced password Change.
if(\$thisstaff->forcePasswdChange() && !\$errors['err'])
    \$errors['err']=sprintf(__('<b>Hi %s</b> - You must change your password to continue!'),\$thisstaff->getFirstName());
elseif(\$thisstaff->onVacation() && !\$warn)
    \$warn=sprintf(__(\"<b>Welcome back %s</b>! You are listed as 'on vacation' Please let your manager know that you are back.\"),\$thisstaff->getFirstName());

\$inc='profile.inc.php';
\$nav->setTabActive('dashboard');
\$ost->addExtraHeader('<meta name=\"tip-namespace\" content=\"dashboard.my_profile\" />',
    \"\$('#content').data('tipNamespace', 'dashboard.my_profile');\");
require_once(STAFFINC_DIR.'header.inc.php');
require(STAFFINC_DIR.\$inc);
require_once(STAFFINC_DIR.'footer.inc.php');
?>
";
    }

    public function getTemplateName()
    {
        return "support/scp/profile.php";
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
        return new Twig_Source("", "support/scp/profile.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\scp\\profile.php");
    }
}
