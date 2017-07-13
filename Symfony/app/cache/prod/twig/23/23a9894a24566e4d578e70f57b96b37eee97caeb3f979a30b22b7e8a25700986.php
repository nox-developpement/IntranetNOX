<?php

/* support/include/staff/settings-kb.inc.php */
class __TwigTemplate_a9f0f1427be8241d6641fed7c17c3fc8a5f3216d3d76934e03c30610dcf6ac9e extends Twig_Template
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
if(!defined('OSTADMININC') || !\$thisstaff || !\$thisstaff->isAdmin() || !\$config) die('Access Denied');
?>
<h2><?php echo __('Knowledge Base Settings and Options');?></h2>
<form action=\"settings.php?t=kb\" method=\"post\" id=\"save\">
<?php csrf_token(); ?>
<input type=\"hidden\" name=\"t\" value=\"kb\" >
<table class=\"form_table settings_table\" width=\"940\" border=\"0\" cellspacing=\"0\" cellpadding=\"2\">
    <thead>
        <tr>
            <th colspan=\"2\">
                <h4><?php echo __('Knowledge Base Settings');?></h4>
                <em><?php echo __(\"Disabling knowledge base disables clients' interface.\");?></em>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td width=\"180\" valign=\"top\"><?php echo __('Knowledge Base Status'); ?>:</td>
            <td>
                <input type=\"checkbox\" name=\"enable_kb\" value=\"1\" <?php echo \$config['enable_kb']?'checked=\"checked\"':''; ?>>
                <?php echo __('Enable Knowledge Base'); ?>
                <i class=\"help-tip icon-question-sign\" href=\"#knowledge_base_status\"></i>
                <div class=\"error\"><?php echo \$errors['enable_kb']; ?></div>
                <input type=\"checkbox\" name=\"restrict_kb\" value=\"1\" <?php echo \$config['restrict_kb']?'checked=\"checked\"':''; ?> >
                <?php echo __('Require Client Login'); ?>
                <i class=\"help-tip icon-question-sign\" href=\"#restrict_kb\"></i>
                <div class=\"error\"><?php echo \$errors['restrict_kb']; ?></div>
            </td>
        </tr>
        <tr>
            <td width=\"180\"><?php echo __('Canned Responses');?>:</td>
            <td>
                <input type=\"checkbox\" name=\"enable_premade\" value=\"1\" <?php echo \$config['enable_premade']?'checked=\"checked\"':''; ?> >
                <?php echo __('Enable Canned Responses'); ?>
                &nbsp;<font class=\"error\">&nbsp;<?php echo \$errors['enable_premade']; ?></font>
                <i class=\"help-tip icon-question-sign\" href=\"#canned_responses\"></i>
            </td>
        </tr>
    </tbody>
</table>
<p style=\"padding-left:210px;\">
    <input class=\"button\" type=\"submit\" name=\"submit\" value=\"<?php echo __('Save Changes'); ?>\">
    <input class=\"button\" type=\"reset\" name=\"reset\" value=\"<?php echo __('Reset Changes'); ?>\">
</p>
</form>
";
    }

    public function getTemplateName()
    {
        return "support/include/staff/settings-kb.inc.php";
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
        return new Twig_Source("", "support/include/staff/settings-kb.inc.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\staff\\settings-kb.inc.php");
    }
}
