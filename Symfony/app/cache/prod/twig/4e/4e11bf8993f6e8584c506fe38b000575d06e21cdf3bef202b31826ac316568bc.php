<?php

/* support/include/client/register.confirmed.inc.php */
class __TwigTemplate_e52d5e9083f1ba3bc8bd97745c370a805fa7d1254cf744d3fdddfff6345291da extends Twig_Template
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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/include/client/register.confirmed.inc.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\client\\register.confirmed.inc.php");
    }
}
