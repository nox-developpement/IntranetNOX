<?php

/* support/include/client/register.confirmed.inc.php */
class __TwigTemplate_2a53455de084b98df7b743325f68056220ea6d7ef0de9f016f7bece44de77b0d extends Twig_Template
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
        $__internal_a0ea8af735c30eb1eadc15ee1def86e477bc01a86b99b2efef46aa6c83e224ea = $this->env->getExtension("native_profiler");
        $__internal_a0ea8af735c30eb1eadc15ee1def86e477bc01a86b99b2efef46aa6c83e224ea->enter($__internal_a0ea8af735c30eb1eadc15ee1def86e477bc01a86b99b2efef46aa6c83e224ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/client/register.confirmed.inc.php"));

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
        
        $__internal_a0ea8af735c30eb1eadc15ee1def86e477bc01a86b99b2efef46aa6c83e224ea->leave($__internal_a0ea8af735c30eb1eadc15ee1def86e477bc01a86b99b2efef46aa6c83e224ea_prof);

    }

    public function getTemplateName()
    {
        return "support/include/client/register.confirmed.inc.php";
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
/* "You've confirmed your email address and successfully activated your account.  You may proceed to check on previously opened tickets or open a new ticket."*/
/* ); ?>*/
/* </p>*/
/* <p><em><?php echo __('Your friendly support center'); ?></em></p>*/
/* <?php } ?>*/
/* */
