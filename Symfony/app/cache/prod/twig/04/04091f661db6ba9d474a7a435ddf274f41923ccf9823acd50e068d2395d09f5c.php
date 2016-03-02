<?php

/* support/include/client/register.confirm.inc.php */
class __TwigTemplate_19b3102736a8ef6bf9098265106a02606c00ad5a0e73d5f5b9049b65cb2de985 extends Twig_Template
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
\"We've just sent you an email to the address you entered. Please follow the link in the email to confirm your account and gain access to your tickets.\"
); ?>
</p>
<?php } ?>
";
    }

    public function getTemplateName()
    {
        return "support/include/client/register.confirm.inc.php";
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
/* "We've just sent you an email to the address you entered. Please follow the link in the email to confirm your account and gain access to your tickets."*/
/* ); ?>*/
/* </p>*/
/* <?php } ?>*/
/* */
