<?php

/* support/include/client/register.confirmed.inc.php */
class __TwigTemplate_b104a73ea0a6578ff37a0e9cba3e9272c9db5c566b73ecfd7460b6febf3fb021 extends Twig_Template
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
        echo "<?php if (\$content) {
    list(\$title, \$body) = \$ost->replaceTemplateVariables(
        array(\$content->getName(), \$content->getBody())); ?>
<h1><?php echo Format::display(\$title); ?></h1>
<p><?php
echo Format::display(\$body); ?>
</p>
<?php } else { ?>
<h1><?php echo __('Account Registration'); ?></h1>
<p>
<strong><?php echo __('Thanks for registering for an account.'); ?></strong>
</p>
<p><?php echo __(
\"You've confirmed your email address and successfully activated your account.  You may proceed to check on previously opened tickets or open a new ticket.\"
); ?>
</p>
<p><em><?php echo __('Your friendly support center'); ?></em></p>
<?php } ?>
";
    }

    public function getTemplateName()
    {
        return "support/include/client/register.confirmed.inc.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php if ($content) {*/
/*     list($title, $body) = $ost->replaceTemplateVariables(*/
/*         array($content->getName(), $content->getBody())); ?>*/
/* <h1><?php echo Format::display($title); ?></h1>*/
/* <p><?php*/
/* echo Format::display($body); ?>*/
/* </p>*/
/* <?php } else { ?>*/
/* <h1><?php echo __('Account Registration'); ?></h1>*/
/* <p>*/
/* <strong><?php echo __('Thanks for registering for an account.'); ?></strong>*/
/* </p>*/
/* <p><?php echo __(*/
/* "You've confirmed your email address and successfully activated your account.  You may proceed to check on previously opened tickets or open a new ticket."*/
/* ); ?>*/
/* </p>*/
/* <p><em><?php echo __('Your friendly support center'); ?></em></p>*/
/* <?php } ?>*/
/* */
