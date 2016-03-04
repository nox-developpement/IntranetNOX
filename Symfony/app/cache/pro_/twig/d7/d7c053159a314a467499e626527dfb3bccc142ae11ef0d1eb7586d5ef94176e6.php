<?php

/* support/pwreset.php */
class __TwigTemplate_8d30a68d832342e995e401fed18a29c5e0baef198f5f4491485f5255eb4bfaa9 extends Twig_Template
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

require_once('client.inc.php');
if(!defined('INCLUDE_DIR')) die('Fatal Error');
define('CLIENTINC_DIR',INCLUDE_DIR.'client/');
define('OSTCLIENTINC',TRUE); //make includes happy

require_once(INCLUDE_DIR.'class.client.php');

\$inc = 'pwreset.request.php';
if(\$_POST) {
    if (!\$ost->checkCSRFToken()) {
        Http::response(400, __('Valid CSRF Token Required'));
        exit;
    }
    switch (\$_POST['do']) {
        case 'sendmail':
            if ((\$acct=ClientAccount::lookupByUsername(\$_POST['userid']))) {
                if (!\$acct->isPasswdResetEnabled()) {
                    \$banner = __('Password reset is not enabled for your account. Contact your administrator');
                }
                elseif (\$acct->sendResetEmail()) {
                    \$inc = 'pwreset.sent.php';
                }
                else
                    \$banner = __('Unable to send reset email. Internal error');
            }
            else
                \$banner = sprintf(__('Unable to verify username: %s'),
                    Format::htmlchars(\$_POST['userid']));
            break;
        case 'reset':
            \$inc = 'pwreset.login.php';
            \$errors = array();
            if (\$client = UserAuthenticationBackend::processSignOn(\$errors)) {
                Http::redirect('index.php');
            }
            elseif (isset(\$errors['msg'])) {
                \$banner = \$errors['msg'];
            }
            break;
    }
}
elseif (\$_GET['token']) {
    \$banner = __('Re-enter your username or email');
    \$inc = 'pwreset.login.php';
    \$_config = new Config('pwreset');
    if ((\$id = \$_config->get(\$_GET['token']))
            && (\$acct = ClientAccount::lookup(array('user_id'=>\$id)))) {
        if (!\$acct->isConfirmed()) {
            \$inc = 'register.confirmed.inc.php';
            \$acct->confirm();
            // TODO: Log the user in
            if (\$client = UserAuthenticationBackend::processSignOn(\$errors)) {
                if (\$acct->hasPassword() && !\$acct->get('backend')) {
                    \$acct->cancelResetTokens();
                }
                // No password setup yet -- force one to be created
                else {
                    \$_SESSION['_client']['reset-token'] = \$_GET['token'];
                    \$acct->forcePasswdReset();
                }
                Http::redirect('account.php?confirmed');
            }
        }
    }
    elseif (\$id && (\$user = User::lookup(\$id)))
        \$inc = 'pwreset.create.php';
    else
        Http::redirect('index.php');
}
elseif (\$cfg->allowPasswordReset()) {
    \$banner = __('Enter your username or email address below');
}
else {
    \$_SESSION['_staff']['auth']['msg']=__('Password resets are disabled');
    return header('Location: index.php');
}

\$nav = new UserNav();
\$nav->setActiveNav('status');
require CLIENTINC_DIR.'header.inc.php';
require CLIENTINC_DIR.\$inc;
require CLIENTINC_DIR.'footer.inc.php';
?>
";
    }

    public function getTemplateName()
    {
        return "support/pwreset.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* */
/* require_once('client.inc.php');*/
/* if(!defined('INCLUDE_DIR')) die('Fatal Error');*/
/* define('CLIENTINC_DIR',INCLUDE_DIR.'client/');*/
/* define('OSTCLIENTINC',TRUE); //make includes happy*/
/* */
/* require_once(INCLUDE_DIR.'class.client.php');*/
/* */
/* $inc = 'pwreset.request.php';*/
/* if($_POST) {*/
/*     if (!$ost->checkCSRFToken()) {*/
/*         Http::response(400, __('Valid CSRF Token Required'));*/
/*         exit;*/
/*     }*/
/*     switch ($_POST['do']) {*/
/*         case 'sendmail':*/
/*             if (($acct=ClientAccount::lookupByUsername($_POST['userid']))) {*/
/*                 if (!$acct->isPasswdResetEnabled()) {*/
/*                     $banner = __('Password reset is not enabled for your account. Contact your administrator');*/
/*                 }*/
/*                 elseif ($acct->sendResetEmail()) {*/
/*                     $inc = 'pwreset.sent.php';*/
/*                 }*/
/*                 else*/
/*                     $banner = __('Unable to send reset email. Internal error');*/
/*             }*/
/*             else*/
/*                 $banner = sprintf(__('Unable to verify username: %s'),*/
/*                     Format::htmlchars($_POST['userid']));*/
/*             break;*/
/*         case 'reset':*/
/*             $inc = 'pwreset.login.php';*/
/*             $errors = array();*/
/*             if ($client = UserAuthenticationBackend::processSignOn($errors)) {*/
/*                 Http::redirect('index.php');*/
/*             }*/
/*             elseif (isset($errors['msg'])) {*/
/*                 $banner = $errors['msg'];*/
/*             }*/
/*             break;*/
/*     }*/
/* }*/
/* elseif ($_GET['token']) {*/
/*     $banner = __('Re-enter your username or email');*/
/*     $inc = 'pwreset.login.php';*/
/*     $_config = new Config('pwreset');*/
/*     if (($id = $_config->get($_GET['token']))*/
/*             && ($acct = ClientAccount::lookup(array('user_id'=>$id)))) {*/
/*         if (!$acct->isConfirmed()) {*/
/*             $inc = 'register.confirmed.inc.php';*/
/*             $acct->confirm();*/
/*             // TODO: Log the user in*/
/*             if ($client = UserAuthenticationBackend::processSignOn($errors)) {*/
/*                 if ($acct->hasPassword() && !$acct->get('backend')) {*/
/*                     $acct->cancelResetTokens();*/
/*                 }*/
/*                 // No password setup yet -- force one to be created*/
/*                 else {*/
/*                     $_SESSION['_client']['reset-token'] = $_GET['token'];*/
/*                     $acct->forcePasswdReset();*/
/*                 }*/
/*                 Http::redirect('account.php?confirmed');*/
/*             }*/
/*         }*/
/*     }*/
/*     elseif ($id && ($user = User::lookup($id)))*/
/*         $inc = 'pwreset.create.php';*/
/*     else*/
/*         Http::redirect('index.php');*/
/* }*/
/* elseif ($cfg->allowPasswordReset()) {*/
/*     $banner = __('Enter your username or email address below');*/
/* }*/
/* else {*/
/*     $_SESSION['_staff']['auth']['msg']=__('Password resets are disabled');*/
/*     return header('Location: index.php');*/
/* }*/
/* */
/* $nav = new UserNav();*/
/* $nav->setActiveNav('status');*/
/* require CLIENTINC_DIR.'header.inc.php';*/
/* require CLIENTINC_DIR.$inc;*/
/* require CLIENTINC_DIR.'footer.inc.php';*/
/* ?>*/
/* */
