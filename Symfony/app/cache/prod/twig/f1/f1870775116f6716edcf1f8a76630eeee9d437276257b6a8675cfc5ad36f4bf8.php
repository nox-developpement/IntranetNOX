<?php

/* support/include/client/profile.inc.php */
class __TwigTemplate_b2d0feca6888d2ba2b8f7f36de57a1952079a59861f74cbf9088f98447339311 extends Twig_Template
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
        echo "<h1><?php echo __('Manage Your Profile Information'); ?></h1>
<p><?php echo __(
'Use the forms below to update the information we have on file for your account'
); ?>
</p>
<form action=\"profile.php\" method=\"post\">
  <?php csrf_token(); ?>
<table width=\"800\" class=\"padded\">
<?php
foreach (\$user->getForms() as \$f) {
    \$f->render(false);
}
if (\$acct = \$thisclient->getAccount()) {
    \$info=\$acct->getInfo();
    \$info=Format::htmlchars((\$errors && \$_POST)?\$_POST:\$info);
?>
<tr>
    <td colspan=\"2\">
        <div><hr><h3><?php echo __('Preferences'); ?></h3>
        </div>
    </td>
</tr>
    <td><?php echo __('Time Zone'); ?>:</td>
    <td>
        <select name=\"timezone_id\" id=\"timezone_id\">
            <option value=\"0\">&mdash; <?php echo __('Select Time Zone'); ?> &mdash;</option>
            <?php
            \$sql='SELECT id, offset,timezone FROM '.TIMEZONE_TABLE.' ORDER BY id';
            if((\$res=db_query(\$sql)) && db_num_rows(\$res)){
                while(list(\$id,\$offset, \$tz)=db_fetch_row(\$res)){
                    \$sel=(\$info['timezone_id']==\$id)?'selected=\"selected\"':'';
                    echo sprintf('<option value=\"%d\" %s>GMT %s - %s</option>',\$id,\$sel,\$offset,\$tz);
                }
            }
            ?>
        </select>
        &nbsp;<span class=\"error\"><?php echo \$errors['timezone_id']; ?></span>
    </td>
</tr>
<tr>
    <td width=\"180\">
        <?php echo __('Daylight Saving') ?>:
    </td>
    <td>
        <input type=\"checkbox\" name=\"dst\" value=\"1\" <?php echo \$info['dst']?'checked=\"checked\"':''; ?>>
        <?php echo __('Observe daylight saving'); ?>
        <em>(<?php echo __('Current Time'); ?>:
            <strong><?php echo Format::date(\$cfg->getDateTimeFormat(),Misc::gmtime(),\$info['tz_offset'],\$info['dst']); ?></strong>)</em>
    </td>
</tr>
    <tr>
        <td width=\"180\">
            <?php echo __('Preferred Language'); ?>:
        </td>
        <td>
    <?php
    \$langs = Internationalization::availableLanguages(); ?>
            <select name=\"lang\">
                <option value=\"\">&mdash; <?php echo __('Use Browser Preference'); ?> &mdash;</option>
<?php foreach(\$langs as \$l) {
\$selected = (\$info['lang'] == \$l['code']) ? 'selected=\"selected\"' : ''; ?>
                <option value=\"<?php echo \$l['code']; ?>\" <?php echo \$selected;
                    ?>><?php echo Internationalization::getLanguageDescription(\$l['code']); ?></option>
<?php } ?>
            </select>
            <span class=\"error\">&nbsp;<?php echo \$errors['lang']; ?></span>
        </td>
    </tr>
<?php if (\$acct->isPasswdResetEnabled()) { ?>
<tr>
    <td colspan=2\">
        <div><hr><h3><?php echo __('Access Credentials'); ?></h3></div>
    </td>
</tr>
<?php if (!isset(\$_SESSION['_client']['reset-token'])) { ?>
<tr>
    <td width=\"180\">
        <?php echo __('Current Password'); ?>:
    </td>
    <td>
        <input type=\"password\" size=\"18\" name=\"cpasswd\" value=\"<?php echo \$info['cpasswd']; ?>\">
        &nbsp;<span class=\"error\">&nbsp;<?php echo \$errors['cpasswd']; ?></span>
    </td>
</tr>
<?php } ?>
<tr>
    <td width=\"180\">
        <?php echo __('New Password'); ?>:
    </td>
    <td>
        <input type=\"password\" size=\"18\" name=\"passwd1\" value=\"<?php echo \$info['passwd1']; ?>\">
        &nbsp;<span class=\"error\">&nbsp;<?php echo \$errors['passwd1']; ?></span>
    </td>
</tr>
<tr>
    <td width=\"180\">
        <?php echo __('Confirm New Password'); ?>:
    </td>
    <td>
        <input type=\"password\" size=\"18\" name=\"passwd2\" value=\"<?php echo \$info['passwd2']; ?>\">
        &nbsp;<span class=\"error\">&nbsp;<?php echo \$errors['passwd2']; ?></span>
    </td>
</tr>
<?php } ?>
<?php } ?>
</table>
<hr>
<p style=\"text-align: center;\">
    <input type=\"submit\" value=\"Update\"/>
    <input type=\"reset\" value=\"Reset\"/>
    <input type=\"button\" value=\"Cancel\" onclick=\"javascript:
        window.location.href='index.php';\"/>
</p>
</form>
";
    }

    public function getTemplateName()
    {
        return "support/include/client/profile.inc.php";
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
        return new Twig_Source("", "support/include/client/profile.inc.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\client\\profile.inc.php");
    }
}
