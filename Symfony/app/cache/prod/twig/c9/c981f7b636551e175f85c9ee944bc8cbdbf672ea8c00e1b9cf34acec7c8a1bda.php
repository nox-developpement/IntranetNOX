<?php

/* support/include/client/accesslink.inc.php */
class __TwigTemplate_7293509e4e15d3efce4d4f2f22f817b4dbaa68173d31b246be0533bc9f431a21 extends Twig_Template
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
if(!defined('OSTCLIENTINC')) die('Access Denied');

\$email=Format::input(\$_POST['lemail']?\$_POST['lemail']:\$_GET['e']);
\$ticketid=Format::input(\$_POST['lticket']?\$_POST['lticket']:\$_GET['t']);

if (\$cfg->isClientEmailVerificationRequired())
    \$button = __(\"Email Access Link\");
else
    \$button = __(\"View Ticket\");
?>
<h1><?php echo __('Check Ticket Status'); ?></h1>
<p><?php
echo __('Please provide your email address and a ticket number.');
if (\$cfg->isClientEmailVerificationRequired())
    echo ' '.__('An access link will be emailed to you.');
else
    echo ' '.__('This will sign you in to view your ticket.');
?></p>
<form action=\"login.php\" method=\"post\" id=\"clientLogin\">
    <?php csrf_token(); ?>
<div style=\"display:table-row\">
    <div class=\"login-box\">
    <div><strong><?php echo Format::htmlchars(\$errors['login']); ?></strong></div>
    <div>
        <label for=\"email\"><?php echo __('E-Mail Address'); ?>:
        <input id=\"email\" placeholder=\"<?php echo __('e.g. john.doe@osticket.com'); ?>\" type=\"text\"
            name=\"lemail\" size=\"30\" value=\"<?php echo \$email; ?>\"></label>
    </div>
    <div>
        <label for=\"ticketno\"><?php echo __('Ticket Number'); ?>:
        <input id=\"ticketno\" type=\"text\" name=\"lticket\" placeholder=\"<?php echo __('e.g. 051243'); ?>\"
            size=\"30\" value=\"<?php echo \$ticketid; ?>\"></label>
    </div>
    <p>
        <input class=\"btn\" type=\"submit\" value=\"<?php echo \$button; ?>\">
    </p>
    </div>
    <div class=\"instructions\">
<?php if (\$cfg && \$cfg->getClientRegistrationMode() !== 'disabled') { ?>
        <?php echo __('Have an account with us?'); ?>
        <a href=\"login.php\"><?php echo __('Sign In'); ?></a> <?php
    if (\$cfg->isClientRegistrationEnabled()) { ?>
<?php echo sprintf(__('or %s register for an account %s to access all your tickets.'),
    '<a href=\"account.php?do=create\">','</a>');
    }
}?>
    </div>
</div>
</form>
<br>
<p>
<?php echo sprintf(
__(\"If this is your first time contacting us or you've lost the ticket number, please %s open a new ticket %s\"),
    '<a href=\"open.php\">','</a>'); ?>
</p>
";
    }

    public function getTemplateName()
    {
        return "support/include/client/accesslink.inc.php";
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
        return new Twig_Source("", "support/include/client/accesslink.inc.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\client\\accesslink.inc.php");
    }
}
