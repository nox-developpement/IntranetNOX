<?php

/* support/include/staff/settings-alerts.inc.php */
class __TwigTemplate_b15185b7ea82135679c422e5884dddb7167e93a7f762b1e60c6fa56d38b2ae70 extends Twig_Template
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
        $__internal_c99286c058cc98b73a439928ce894a49621a613a50a950fc69512db4cf10d96b = $this->env->getExtension("native_profiler");
        $__internal_c99286c058cc98b73a439928ce894a49621a613a50a950fc69512db4cf10d96b->enter($__internal_c99286c058cc98b73a439928ce894a49621a613a50a950fc69512db4cf10d96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/staff/settings-alerts.inc.php"));

        // line 1
        echo "<h2><?php echo __('Alerts and Notices'); ?>
    <i class=\"help-tip icon-question-sign\" href=\"#page_title\"></i></h2>
<form action=\"settings.php?t=alerts\" method=\"post\" id=\"save\">
<?php csrf_token(); ?>
<input type=\"hidden\" name=\"t\" value=\"alerts\" >
<table class=\"form_table settings_table\" width=\"940\" border=\"0\" cellspacing=\"0\" cellpadding=\"2\">
    <thead>
        <tr>
            <th>
                <h4><?php echo __('Alerts and Notices sent to agents on ticket \"events\"'); ?></h4>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr><th><em><b><?php echo __('New Ticket Alert'); ?></b>:
            <i class=\"help-tip icon-question-sign\" href=\"#ticket_alert\"></i>
            </em></th></tr>
        <tr>
            <td><em><b><?php echo __('Status'); ?>:</b></em> &nbsp;
                <input type=\"radio\" name=\"ticket_alert_active\"  value=\"1\"
                <?php echo \$config['ticket_alert_active']?'checked':''; ?>
                /> <?php echo __('Enable'); ?>
                <input type=\"radio\" name=\"ticket_alert_active\"  value=\"0\"   <?php echo !\$config['ticket_alert_active']?'checked':''; ?> />
                 <?php echo __('Disable'); ?>
                &nbsp;&nbsp;<font class=\"error\">&nbsp;<?php echo \$errors['ticket_alert_active']; ?></font></em>
             </td>
        </tr>
        <tr>
            <td>
                <input type=\"checkbox\" name=\"ticket_alert_admin\" <?php echo \$config['ticket_alert_admin']?'checked':''; ?>>
                <?php echo __('Admin Email'); ?> <em>(<?php echo \$cfg->getAdminEmail(); ?>)</em>
            </td>
        </tr>
        <tr>
            <td>
                <input type=\"checkbox\" name=\"ticket_alert_dept_manager\" <?php echo \$config['ticket_alert_dept_manager']?'checked':''; ?>>
                <?php echo __('Department Manager'); ?>
            </td>
        </tr>
        <tr>
            <td>
                <input type=\"checkbox\" name=\"ticket_alert_dept_members\" <?php echo \$config['ticket_alert_dept_members']?'checked':''; ?>>
                <?php echo __('Department Members'); ?>
            </td>
        </tr>
        <tr>
            <td>
                <input type=\"checkbox\" name=\"ticket_alert_acct_manager\" <?php echo \$config['ticket_alert_acct_manager']?'checked':''; ?>>
                <?php echo __('Organization Account Manager'); ?>
            </td>
        </tr>
        <tr><th><em><b><?php echo __('New Message Alert'); ?></b>:
            <i class=\"help-tip icon-question-sign\" href=\"#message_alert\"></i>
            </em></th></tr>
        <tr>
            <td><em><b><?php echo __('Status'); ?>:</b></em> &nbsp;
              <input type=\"radio\" name=\"message_alert_active\"  value=\"1\"
              <?php echo \$config['message_alert_active']?'checked':''; ?>
              /> <?php echo __('Enable'); ?>
              &nbsp;&nbsp;
              <input type=\"radio\" name=\"message_alert_active\"  value=\"0\"   <?php echo !\$config['message_alert_active']?'checked':''; ?> />
              <?php echo __('Disable'); ?>
            </td>
        </tr>
        <tr>
            <td>
              <input type=\"checkbox\" name=\"message_alert_laststaff\" <?php echo \$config['message_alert_laststaff']?'checked':''; ?>>
                <?php echo __('Last Respondent'); ?>
            </td>
        </tr>
        <tr>
            <td>
              <input type=\"checkbox\" name=\"message_alert_assigned\" <?php
              echo \$config['message_alert_assigned']?'checked':''; ?>>
              <?php echo __('Assigned Agent / Team'); ?>
            </td>
        </tr>
        <tr>
            <td>
              <input type=\"checkbox\" name=\"message_alert_dept_manager\" <?php
              echo \$config['message_alert_dept_manager']?'checked':''; ?>>
              <?php echo __('Department Manager'); ?>
            </td>
        </tr>
        <tr>
            <td>
                <input type=\"checkbox\" name=\"message_alert_acct_manager\" <?php echo \$config['message_alert_acct_manager']?'checked':''; ?>>
                <?php echo __('Organization Account Manager'); ?>
            </td>
        </tr>
        <tr><th><em><b><?php echo __('New Internal Activity Alert'); ?></b>:
            <i class=\"help-tip icon-question-sign\" href=\"#internal_note_alert\"></i>
            </em></th></tr>
        <tr>
            <td><em><b><?php echo __('Status'); ?>:</b></em> &nbsp;
              <input type=\"radio\" name=\"note_alert_active\"  value=\"1\"   <?php echo \$config['note_alert_active']?'checked':''; ?> />
                <?php echo __('Enable'); ?>
              &nbsp;&nbsp;
              <input type=\"radio\" name=\"note_alert_active\"  value=\"0\"   <?php echo !\$config['note_alert_active']?'checked':''; ?> />
                <?php echo __('Disable'); ?>
              &nbsp;&nbsp;&nbsp;<font class=\"error\">&nbsp;<?php echo \$errors['note_alert_active']; ?></font>
            </td>
        </tr>
        <tr>
            <td>
              <input type=\"checkbox\" name=\"note_alert_laststaff\" <?php echo
              \$config['note_alert_laststaff']?'checked':''; ?>> <?php echo __('Last Respondent'); ?>
            </td>
        </tr>
        <tr>
            <td>
              <input type=\"checkbox\" name=\"note_alert_assigned\" <?php echo \$config['note_alert_assigned']?'checked':''; ?>>
                <?php echo __('Assigned Agent / Team'); ?>
            </td>
        </tr>
        <tr>
            <td>
              <input type=\"checkbox\" name=\"note_alert_dept_manager\" <?php echo \$config['note_alert_dept_manager']?'checked':''; ?>>
                <?php echo __('Department Manager'); ?>
            </td>
        </tr>
        <tr><th><em><b><?php echo __('Ticket Assignment Alert'); ?></b>:
            <i class=\"help-tip icon-question-sign\" href=\"#assignment_alert\"></i>
            </em></th></tr>
        <tr>
            <td><em><b><?php echo __('Status'); ?>: </b></em> &nbsp;
              <input name=\"assigned_alert_active\" value=\"1\" type=\"radio\"
                <?php echo \$config['assigned_alert_active']?'checked=\"checked\"':''; ?>> <?php echo __('Enable'); ?>
              &nbsp;&nbsp;
              <input name=\"assigned_alert_active\" value=\"0\" type=\"radio\"
                <?php echo !\$config['assigned_alert_active']?'checked=\"checked\"':''; ?>> <?php echo __('Disable'); ?>
               &nbsp;&nbsp;&nbsp;<font class=\"error\">&nbsp;<?php echo \$errors['assigned_alert_active']; ?></font>
            </td>
        </tr>
        <tr>
            <td>
              <input type=\"checkbox\" name=\"assigned_alert_staff\" <?php echo
              \$config['assigned_alert_staff']?'checked':''; ?>> <?php echo __('Assigned Agent / Team'); ?>
            </td>
        </tr>
        <tr>
            <td>
              <input type=\"checkbox\"name=\"assigned_alert_team_lead\" <?php
              echo \$config['assigned_alert_team_lead']?'checked':''; ?>> <?php echo __('Team Lead'); ?>
            </td>
        </tr>
        <tr>
            <td>
              <input type=\"checkbox\"name=\"assigned_alert_team_members\" <?php echo \$config['assigned_alert_team_members']?'checked':''; ?>>
                <?php echo __('Team Members'); ?>
            </td>
        </tr>
        <tr><th><em><b><?php echo __('Ticket Transfer Alert'); ?></b>:
            <i class=\"help-tip icon-question-sign\" href=\"#transfer_alert\"></i>
            </em></th></tr>
        <tr>
            <td><em><b><?php echo __('Status'); ?>:</b></em> &nbsp;
            <input type=\"radio\" name=\"transfer_alert_active\"  value=\"1\"   <?php echo \$config['transfer_alert_active']?'checked':''; ?> />
                <?php echo __('Enable'); ?>
            <input type=\"radio\" name=\"transfer_alert_active\"  value=\"0\"   <?php echo !\$config['transfer_alert_active']?'checked':''; ?> />
                <?php echo __('Disable'); ?>
              &nbsp;&nbsp;&nbsp;<font class=\"error\">&nbsp;<?php echo \$errors['alert_alert_active']; ?></font>
            </td>
        </tr>
        <tr>
            <td>
              <input type=\"checkbox\" name=\"transfer_alert_assigned\" <?php echo \$config['transfer_alert_assigned']?'checked':''; ?>>
                <?php echo __('Assigned Agent / Team'); ?>
            </td>
        </tr>
        <tr>
            <td>
              <input type=\"checkbox\" name=\"transfer_alert_dept_manager\" <?php echo \$config['transfer_alert_dept_manager']?'checked':''; ?>>
                <?php echo __('Department Manager'); ?>
            </td>
        </tr>
        <tr>
            <td>
              <input type=\"checkbox\" name=\"transfer_alert_dept_members\" <?php echo \$config['transfer_alert_dept_members']?'checked':''; ?>>
                <?php echo __('Department Members'); ?>
            </td>
        </tr>
        <tr><th><em><b><?php echo __('Overdue Ticket Alert'); ?></b>:
            <i class=\"help-tip icon-question-sign\" href=\"#overdue_alert\"></i>
            </em></th></tr>
        <tr>
            <td><em><b><?php echo __('Status'); ?>:</b></em> &nbsp;
              <input type=\"radio\" name=\"overdue_alert_active\"  value=\"1\"
                <?php echo \$config['overdue_alert_active']?'checked':''; ?> /> <?php echo __('Enable'); ?>
              <input type=\"radio\" name=\"overdue_alert_active\"  value=\"0\"
                <?php echo !\$config['overdue_alert_active']?'checked':''; ?> /> <?php echo __('Disable'); ?>
              &nbsp;&nbsp;<font class=\"error\">&nbsp;<?php echo \$errors['overdue_alert_active']; ?></font>
            </td>
        </tr>
        <tr>
            <td>
              <input type=\"checkbox\" name=\"overdue_alert_assigned\" <?php
                echo \$config['overdue_alert_assigned']?'checked':''; ?>> <?php echo __('Assigned Agent / Team'); ?>
            </td>
        </tr>
        <tr>
            <td>
              <input type=\"checkbox\" name=\"overdue_alert_dept_manager\" <?php
                echo \$config['overdue_alert_dept_manager']?'checked':''; ?>> <?php echo __('Department Manager'); ?>
            </td>
        </tr>
        <tr>
            <td>
              <input type=\"checkbox\" name=\"overdue_alert_dept_members\" <?php
                echo \$config['overdue_alert_dept_members']?'checked':''; ?>> <?php echo __('Department Members'); ?>
            </td>
        </tr>
        <tr><th>
            <em><b><?php echo __('System Alerts'); ?></b>: <i class=\"help-tip icon-question-sign\" href=\"#system_alerts\"></i></em></th></tr>
        <tr>
            <td>
              <input type=\"checkbox\" name=\"send_sys_errors\" checked=\"checked\" disabled=\"disabled\">
                <?php echo __('System Errors'); ?>
              <em><?php echo __('(enabled by default)'); ?></em>
            </td>
        </tr>
        <tr>
            <td>
              <input type=\"checkbox\" name=\"send_sql_errors\" <?php echo \$config['send_sql_errors']?'checked':''; ?>>
                <?php echo __('SQL errors'); ?>
            </td>
        </tr>
        <tr>
            <td>
              <input type=\"checkbox\" name=\"send_login_errors\" <?php echo \$config['send_login_errors']?'checked':''; ?>>
                <?php echo __('Excessive failed login attempts'); ?>
            </td>
        </tr>
    </tbody>
</table>
<p style=\"text-align:center;\">
    <input class=\"button\" type=\"submit\" name=\"submit\" value=\"<?php echo __('Save Changes'); ?>\">
    <input class=\"button\" type=\"reset\" name=\"reset\" value=\"<?php echo __('Reset Changes'); ?>\">
</p>
</form>
";
        
        $__internal_c99286c058cc98b73a439928ce894a49621a613a50a950fc69512db4cf10d96b->leave($__internal_c99286c058cc98b73a439928ce894a49621a613a50a950fc69512db4cf10d96b_prof);

    }

    public function getTemplateName()
    {
        return "support/include/staff/settings-alerts.inc.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <h2><?php echo __('Alerts and Notices'); ?>*/
/*     <i class="help-tip icon-question-sign" href="#page_title"></i></h2>*/
/* <form action="settings.php?t=alerts" method="post" id="save">*/
/* <?php csrf_token(); ?>*/
/* <input type="hidden" name="t" value="alerts" >*/
/* <table class="form_table settings_table" width="940" border="0" cellspacing="0" cellpadding="2">*/
/*     <thead>*/
/*         <tr>*/
/*             <th>*/
/*                 <h4><?php echo __('Alerts and Notices sent to agents on ticket "events"'); ?></h4>*/
/*             </th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*         <tr><th><em><b><?php echo __('New Ticket Alert'); ?></b>:*/
/*             <i class="help-tip icon-question-sign" href="#ticket_alert"></i>*/
/*             </em></th></tr>*/
/*         <tr>*/
/*             <td><em><b><?php echo __('Status'); ?>:</b></em> &nbsp;*/
/*                 <input type="radio" name="ticket_alert_active"  value="1"*/
/*                 <?php echo $config['ticket_alert_active']?'checked':''; ?>*/
/*                 /> <?php echo __('Enable'); ?>*/
/*                 <input type="radio" name="ticket_alert_active"  value="0"   <?php echo !$config['ticket_alert_active']?'checked':''; ?> />*/
/*                  <?php echo __('Disable'); ?>*/
/*                 &nbsp;&nbsp;<font class="error">&nbsp;<?php echo $errors['ticket_alert_active']; ?></font></em>*/
/*              </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*                 <input type="checkbox" name="ticket_alert_admin" <?php echo $config['ticket_alert_admin']?'checked':''; ?>>*/
/*                 <?php echo __('Admin Email'); ?> <em>(<?php echo $cfg->getAdminEmail(); ?>)</em>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*                 <input type="checkbox" name="ticket_alert_dept_manager" <?php echo $config['ticket_alert_dept_manager']?'checked':''; ?>>*/
/*                 <?php echo __('Department Manager'); ?>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*                 <input type="checkbox" name="ticket_alert_dept_members" <?php echo $config['ticket_alert_dept_members']?'checked':''; ?>>*/
/*                 <?php echo __('Department Members'); ?>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*                 <input type="checkbox" name="ticket_alert_acct_manager" <?php echo $config['ticket_alert_acct_manager']?'checked':''; ?>>*/
/*                 <?php echo __('Organization Account Manager'); ?>*/
/*             </td>*/
/*         </tr>*/
/*         <tr><th><em><b><?php echo __('New Message Alert'); ?></b>:*/
/*             <i class="help-tip icon-question-sign" href="#message_alert"></i>*/
/*             </em></th></tr>*/
/*         <tr>*/
/*             <td><em><b><?php echo __('Status'); ?>:</b></em> &nbsp;*/
/*               <input type="radio" name="message_alert_active"  value="1"*/
/*               <?php echo $config['message_alert_active']?'checked':''; ?>*/
/*               /> <?php echo __('Enable'); ?>*/
/*               &nbsp;&nbsp;*/
/*               <input type="radio" name="message_alert_active"  value="0"   <?php echo !$config['message_alert_active']?'checked':''; ?> />*/
/*               <?php echo __('Disable'); ?>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*               <input type="checkbox" name="message_alert_laststaff" <?php echo $config['message_alert_laststaff']?'checked':''; ?>>*/
/*                 <?php echo __('Last Respondent'); ?>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*               <input type="checkbox" name="message_alert_assigned" <?php*/
/*               echo $config['message_alert_assigned']?'checked':''; ?>>*/
/*               <?php echo __('Assigned Agent / Team'); ?>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*               <input type="checkbox" name="message_alert_dept_manager" <?php*/
/*               echo $config['message_alert_dept_manager']?'checked':''; ?>>*/
/*               <?php echo __('Department Manager'); ?>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*                 <input type="checkbox" name="message_alert_acct_manager" <?php echo $config['message_alert_acct_manager']?'checked':''; ?>>*/
/*                 <?php echo __('Organization Account Manager'); ?>*/
/*             </td>*/
/*         </tr>*/
/*         <tr><th><em><b><?php echo __('New Internal Activity Alert'); ?></b>:*/
/*             <i class="help-tip icon-question-sign" href="#internal_note_alert"></i>*/
/*             </em></th></tr>*/
/*         <tr>*/
/*             <td><em><b><?php echo __('Status'); ?>:</b></em> &nbsp;*/
/*               <input type="radio" name="note_alert_active"  value="1"   <?php echo $config['note_alert_active']?'checked':''; ?> />*/
/*                 <?php echo __('Enable'); ?>*/
/*               &nbsp;&nbsp;*/
/*               <input type="radio" name="note_alert_active"  value="0"   <?php echo !$config['note_alert_active']?'checked':''; ?> />*/
/*                 <?php echo __('Disable'); ?>*/
/*               &nbsp;&nbsp;&nbsp;<font class="error">&nbsp;<?php echo $errors['note_alert_active']; ?></font>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*               <input type="checkbox" name="note_alert_laststaff" <?php echo*/
/*               $config['note_alert_laststaff']?'checked':''; ?>> <?php echo __('Last Respondent'); ?>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*               <input type="checkbox" name="note_alert_assigned" <?php echo $config['note_alert_assigned']?'checked':''; ?>>*/
/*                 <?php echo __('Assigned Agent / Team'); ?>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*               <input type="checkbox" name="note_alert_dept_manager" <?php echo $config['note_alert_dept_manager']?'checked':''; ?>>*/
/*                 <?php echo __('Department Manager'); ?>*/
/*             </td>*/
/*         </tr>*/
/*         <tr><th><em><b><?php echo __('Ticket Assignment Alert'); ?></b>:*/
/*             <i class="help-tip icon-question-sign" href="#assignment_alert"></i>*/
/*             </em></th></tr>*/
/*         <tr>*/
/*             <td><em><b><?php echo __('Status'); ?>: </b></em> &nbsp;*/
/*               <input name="assigned_alert_active" value="1" type="radio"*/
/*                 <?php echo $config['assigned_alert_active']?'checked="checked"':''; ?>> <?php echo __('Enable'); ?>*/
/*               &nbsp;&nbsp;*/
/*               <input name="assigned_alert_active" value="0" type="radio"*/
/*                 <?php echo !$config['assigned_alert_active']?'checked="checked"':''; ?>> <?php echo __('Disable'); ?>*/
/*                &nbsp;&nbsp;&nbsp;<font class="error">&nbsp;<?php echo $errors['assigned_alert_active']; ?></font>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*               <input type="checkbox" name="assigned_alert_staff" <?php echo*/
/*               $config['assigned_alert_staff']?'checked':''; ?>> <?php echo __('Assigned Agent / Team'); ?>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*               <input type="checkbox"name="assigned_alert_team_lead" <?php*/
/*               echo $config['assigned_alert_team_lead']?'checked':''; ?>> <?php echo __('Team Lead'); ?>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*               <input type="checkbox"name="assigned_alert_team_members" <?php echo $config['assigned_alert_team_members']?'checked':''; ?>>*/
/*                 <?php echo __('Team Members'); ?>*/
/*             </td>*/
/*         </tr>*/
/*         <tr><th><em><b><?php echo __('Ticket Transfer Alert'); ?></b>:*/
/*             <i class="help-tip icon-question-sign" href="#transfer_alert"></i>*/
/*             </em></th></tr>*/
/*         <tr>*/
/*             <td><em><b><?php echo __('Status'); ?>:</b></em> &nbsp;*/
/*             <input type="radio" name="transfer_alert_active"  value="1"   <?php echo $config['transfer_alert_active']?'checked':''; ?> />*/
/*                 <?php echo __('Enable'); ?>*/
/*             <input type="radio" name="transfer_alert_active"  value="0"   <?php echo !$config['transfer_alert_active']?'checked':''; ?> />*/
/*                 <?php echo __('Disable'); ?>*/
/*               &nbsp;&nbsp;&nbsp;<font class="error">&nbsp;<?php echo $errors['alert_alert_active']; ?></font>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*               <input type="checkbox" name="transfer_alert_assigned" <?php echo $config['transfer_alert_assigned']?'checked':''; ?>>*/
/*                 <?php echo __('Assigned Agent / Team'); ?>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*               <input type="checkbox" name="transfer_alert_dept_manager" <?php echo $config['transfer_alert_dept_manager']?'checked':''; ?>>*/
/*                 <?php echo __('Department Manager'); ?>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*               <input type="checkbox" name="transfer_alert_dept_members" <?php echo $config['transfer_alert_dept_members']?'checked':''; ?>>*/
/*                 <?php echo __('Department Members'); ?>*/
/*             </td>*/
/*         </tr>*/
/*         <tr><th><em><b><?php echo __('Overdue Ticket Alert'); ?></b>:*/
/*             <i class="help-tip icon-question-sign" href="#overdue_alert"></i>*/
/*             </em></th></tr>*/
/*         <tr>*/
/*             <td><em><b><?php echo __('Status'); ?>:</b></em> &nbsp;*/
/*               <input type="radio" name="overdue_alert_active"  value="1"*/
/*                 <?php echo $config['overdue_alert_active']?'checked':''; ?> /> <?php echo __('Enable'); ?>*/
/*               <input type="radio" name="overdue_alert_active"  value="0"*/
/*                 <?php echo !$config['overdue_alert_active']?'checked':''; ?> /> <?php echo __('Disable'); ?>*/
/*               &nbsp;&nbsp;<font class="error">&nbsp;<?php echo $errors['overdue_alert_active']; ?></font>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*               <input type="checkbox" name="overdue_alert_assigned" <?php*/
/*                 echo $config['overdue_alert_assigned']?'checked':''; ?>> <?php echo __('Assigned Agent / Team'); ?>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*               <input type="checkbox" name="overdue_alert_dept_manager" <?php*/
/*                 echo $config['overdue_alert_dept_manager']?'checked':''; ?>> <?php echo __('Department Manager'); ?>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*               <input type="checkbox" name="overdue_alert_dept_members" <?php*/
/*                 echo $config['overdue_alert_dept_members']?'checked':''; ?>> <?php echo __('Department Members'); ?>*/
/*             </td>*/
/*         </tr>*/
/*         <tr><th>*/
/*             <em><b><?php echo __('System Alerts'); ?></b>: <i class="help-tip icon-question-sign" href="#system_alerts"></i></em></th></tr>*/
/*         <tr>*/
/*             <td>*/
/*               <input type="checkbox" name="send_sys_errors" checked="checked" disabled="disabled">*/
/*                 <?php echo __('System Errors'); ?>*/
/*               <em><?php echo __('(enabled by default)'); ?></em>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*               <input type="checkbox" name="send_sql_errors" <?php echo $config['send_sql_errors']?'checked':''; ?>>*/
/*                 <?php echo __('SQL errors'); ?>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*               <input type="checkbox" name="send_login_errors" <?php echo $config['send_login_errors']?'checked':''; ?>>*/
/*                 <?php echo __('Excessive failed login attempts'); ?>*/
/*             </td>*/
/*         </tr>*/
/*     </tbody>*/
/* </table>*/
/* <p style="text-align:center;">*/
/*     <input class="button" type="submit" name="submit" value="<?php echo __('Save Changes'); ?>">*/
/*     <input class="button" type="reset" name="reset" value="<?php echo __('Reset Changes'); ?>">*/
/* </p>*/
/* </form>*/
/* */
