<?php

/* support/include/client/register.confirm.inc.php */
class __TwigTemplate_0b2b041f05f6b30c12deca5ab22c4458ecfe961f9fcf5bd181d8b75da0e5bd70 extends Twig_Template
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
        $__internal_82183cfcd63d54c9af4399d32bcd7d00d54dcd6bb6f7cd8e14693b3a84141a55 = $this->env->getExtension("native_profiler");
        $__internal_82183cfcd63d54c9af4399d32bcd7d00d54dcd6bb6f7cd8e14693b3a84141a55->enter($__internal_82183cfcd63d54c9af4399d32bcd7d00d54dcd6bb6f7cd8e14693b3a84141a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/client/register.confirm.inc.php"));

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
        
        $__internal_82183cfcd63d54c9af4399d32bcd7d00d54dcd6bb6f7cd8e14693b3a84141a55->leave($__internal_82183cfcd63d54c9af4399d32bcd7d00d54dcd6bb6f7cd8e14693b3a84141a55_prof);

    }

    public function getTemplateName()
    {
        return "support/include/client/register.confirm.inc.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
