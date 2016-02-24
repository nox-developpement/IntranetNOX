<?php

/* support/pwreset.php */
class __TwigTemplate_f337a8739e84c78354279f87e6f36daf8d74a32088da13fc5b6b6ef6ecbf37ac extends Twig_Template
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
        $__internal_295a58d95e4c3ccd4c36c5f0a7479453b8d1c1f89ae439db4b8b89f87208caa2 = $this->env->getExtension("native_profiler");
        $__internal_295a58d95e4c3ccd4c36c5f0a7479453b8d1c1f89ae439db4b8b89f87208caa2->enter($__internal_295a58d95e4c3ccd4c36c5f0a7479453b8d1c1f89ae439db4b8b89f87208caa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/pwreset.php"));

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
        
        $__internal_295a58d95e4c3ccd4c36c5f0a7479453b8d1c1f89ae439db4b8b89f87208caa2->leave($__internal_295a58d95e4c3ccd4c36c5f0a7479453b8d1c1f89ae439db4b8b89f87208caa2_prof);

    }

    public function getTemplateName()
    {
        return "support/pwreset.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
