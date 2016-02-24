<?php

/* support/include/client/open.inc.php */
class __TwigTemplate_0f690075cd4cd29424fae323d660e234c7ea9de37a79c5ab55989cd2519c2d1c extends Twig_Template
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
        $__internal_cebb5215579aa437e643c1b0acec96933b0a08f643981a1c1509e8cd28c1c78d = $this->env->getExtension("native_profiler");
        $__internal_cebb5215579aa437e643c1b0acec96933b0a08f643981a1c1509e8cd28c1c78d->enter($__internal_cebb5215579aa437e643c1b0acec96933b0a08f643981a1c1509e8cd28c1c78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/client/open.inc.php"));

        // line 1
        echo "<?php
if(!defined('OSTCLIENTINC')) die('Access Denied!');
\$info=array();
if(\$thisclient && \$thisclient->isValid()) {
    \$info=array('name'=>\$thisclient->getName(),
                'email'=>\$thisclient->getEmail(),
                'phone'=>\$thisclient->getPhoneNumber());
}

\$info=(\$_POST && \$errors)?Format::htmlchars(\$_POST):\$info;

\$form = null;
if (!\$info['topicId'])
    \$info['topicId'] = \$cfg->getDefaultTopicId();

if (\$info['topicId'] && (\$topic=Topic::lookup(\$info['topicId']))) {
    \$form = \$topic->getForm();
    if (\$_POST && \$form) {
        \$form = \$form->instanciate();
        \$form->isValidForClient();
    }
}

?>
<h1><?php echo __('Open a New Ticket');?></h1>
<p><?php echo __('Please fill in the form below to open a new ticket.');?></p>
<form id=\"ticketForm\" method=\"post\" action=\"open.php\" enctype=\"multipart/form-data\">
  <?php csrf_token(); ?>
  <input type=\"hidden\" name=\"a\" value=\"open\">
  <table width=\"800\" cellpadding=\"1\" cellspacing=\"0\" border=\"0\">
    <tbody>
    <tr>
        <td class=\"required\"><?php echo __('Help Topic');?>:</td>
        <td>
            <select id=\"topicId\" name=\"topicId\" onchange=\"javascript:
                    var data = \$(':input[name]', '#dynamic-form').serialize();
                    \$.ajax(
                      'ajax.php/form/help-topic/' + this.value,
                      {
                        data: data,
                        dataType: 'json',
                        success: function(json) {
                          \$('#dynamic-form').empty().append(json.html);
                          \$(document.head).append(json.media);
                        }
                      });\">
                <option value=\"\" selected=\"selected\">&mdash; <?php echo __('Select a Help Topic');?> &mdash;</option>
                <?php
                if(\$topics=Topic::getPublicHelpTopics()) {
                    foreach(\$topics as \$id =>\$name) {
                        echo sprintf('<option value=\"%d\" %s>%s</option>',
                                \$id, (\$info['topicId']==\$id)?'selected=\"selected\"':'', \$name);
                    }
                } else { ?>
                    <option value=\"0\" ><?php echo __('General Inquiry');?></option>
                <?php
                } ?>
            </select>
            <font class=\"error\">*&nbsp;<?php echo \$errors['topicId']; ?></font>
        </td>
    </tr>
<?php
        if (!\$thisclient) {
            \$uform = UserForm::getUserForm()->getForm(\$_POST);
            if (\$_POST) \$uform->isValid();
            \$uform->render(false);
        }
        else { ?>
            <tr><td colspan=\"2\"><hr /></td></tr>
        <tr><td><?php echo __('Email'); ?>:</td><td><?php echo \$thisclient->getEmail(); ?></td></tr>
        <tr><td><?php echo __('Client'); ?>:</td><td><?php echo \$thisclient->getName(); ?></td></tr>
        <?php } ?>
    </tbody>
    <tbody id=\"dynamic-form\">
        <?php if (\$form) {
            include(CLIENTINC_DIR . 'templates/dynamic-form.tmpl.php');
        } ?>
    </tbody>
    <tbody><?php
        \$tform = TicketForm::getInstance();
        if (\$_POST) {
            \$tform->isValidForClient();
        }
        \$tform->render(false); ?>
    </tbody>
    <tbody>
    <?php
    if(\$cfg && \$cfg->isCaptchaEnabled() && (!\$thisclient || !\$thisclient->isValid())) {
        if(\$_POST && \$errors && !\$errors['captcha'])
            \$errors['captcha']=__('Please re-enter the text again');
        ?>
    <tr class=\"captchaRow\">
        <td class=\"required\"><?php echo __('CAPTCHA Text');?>:</td>
        <td>
            <span class=\"captcha\"><img src=\"captcha.php\" border=\"0\" align=\"left\"></span>
            &nbsp;&nbsp;
            <input id=\"captcha\" type=\"text\" name=\"captcha\" size=\"6\" autocomplete=\"off\">
            <em><?php echo __('Enter the text shown on the image.');?></em>
            <font class=\"error\">*&nbsp;<?php echo \$errors['captcha']; ?></font>
        </td>
    </tr>
    <?php
    } ?>
    <tr><td colspan=2>&nbsp;</td></tr>
    </tbody>
  </table>
<hr/>
  <p style=\"text-align:center;\">
        <input type=\"submit\" value=\"<?php echo __('Create Ticket');?>\">
        <input type=\"reset\" name=\"reset\" value=\"<?php echo __('Reset');?>\">
        <input type=\"button\" name=\"cancel\" value=\"<?php echo __('Cancel'); ?>\" onclick=\"javascript:
            \$('.richtext').each(function() {
                var redactor = \$(this).data('redactor');
                if (redactor && redactor.opts.draftDelete)
                    redactor.deleteDraft();
            });
            window.location.href='index.php';\">
  </p>
</form>
";
        
        $__internal_cebb5215579aa437e643c1b0acec96933b0a08f643981a1c1509e8cd28c1c78d->leave($__internal_cebb5215579aa437e643c1b0acec96933b0a08f643981a1c1509e8cd28c1c78d_prof);

    }

    public function getTemplateName()
    {
        return "support/include/client/open.inc.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* if(!defined('OSTCLIENTINC')) die('Access Denied!');*/
/* $info=array();*/
/* if($thisclient && $thisclient->isValid()) {*/
/*     $info=array('name'=>$thisclient->getName(),*/
/*                 'email'=>$thisclient->getEmail(),*/
/*                 'phone'=>$thisclient->getPhoneNumber());*/
/* }*/
/* */
/* $info=($_POST && $errors)?Format::htmlchars($_POST):$info;*/
/* */
/* $form = null;*/
/* if (!$info['topicId'])*/
/*     $info['topicId'] = $cfg->getDefaultTopicId();*/
/* */
/* if ($info['topicId'] && ($topic=Topic::lookup($info['topicId']))) {*/
/*     $form = $topic->getForm();*/
/*     if ($_POST && $form) {*/
/*         $form = $form->instanciate();*/
/*         $form->isValidForClient();*/
/*     }*/
/* }*/
/* */
/* ?>*/
/* <h1><?php echo __('Open a New Ticket');?></h1>*/
/* <p><?php echo __('Please fill in the form below to open a new ticket.');?></p>*/
/* <form id="ticketForm" method="post" action="open.php" enctype="multipart/form-data">*/
/*   <?php csrf_token(); ?>*/
/*   <input type="hidden" name="a" value="open">*/
/*   <table width="800" cellpadding="1" cellspacing="0" border="0">*/
/*     <tbody>*/
/*     <tr>*/
/*         <td class="required"><?php echo __('Help Topic');?>:</td>*/
/*         <td>*/
/*             <select id="topicId" name="topicId" onchange="javascript:*/
/*                     var data = $(':input[name]', '#dynamic-form').serialize();*/
/*                     $.ajax(*/
/*                       'ajax.php/form/help-topic/' + this.value,*/
/*                       {*/
/*                         data: data,*/
/*                         dataType: 'json',*/
/*                         success: function(json) {*/
/*                           $('#dynamic-form').empty().append(json.html);*/
/*                           $(document.head).append(json.media);*/
/*                         }*/
/*                       });">*/
/*                 <option value="" selected="selected">&mdash; <?php echo __('Select a Help Topic');?> &mdash;</option>*/
/*                 <?php*/
/*                 if($topics=Topic::getPublicHelpTopics()) {*/
/*                     foreach($topics as $id =>$name) {*/
/*                         echo sprintf('<option value="%d" %s>%s</option>',*/
/*                                 $id, ($info['topicId']==$id)?'selected="selected"':'', $name);*/
/*                     }*/
/*                 } else { ?>*/
/*                     <option value="0" ><?php echo __('General Inquiry');?></option>*/
/*                 <?php*/
/*                 } ?>*/
/*             </select>*/
/*             <font class="error">*&nbsp;<?php echo $errors['topicId']; ?></font>*/
/*         </td>*/
/*     </tr>*/
/* <?php*/
/*         if (!$thisclient) {*/
/*             $uform = UserForm::getUserForm()->getForm($_POST);*/
/*             if ($_POST) $uform->isValid();*/
/*             $uform->render(false);*/
/*         }*/
/*         else { ?>*/
/*             <tr><td colspan="2"><hr /></td></tr>*/
/*         <tr><td><?php echo __('Email'); ?>:</td><td><?php echo $thisclient->getEmail(); ?></td></tr>*/
/*         <tr><td><?php echo __('Client'); ?>:</td><td><?php echo $thisclient->getName(); ?></td></tr>*/
/*         <?php } ?>*/
/*     </tbody>*/
/*     <tbody id="dynamic-form">*/
/*         <?php if ($form) {*/
/*             include(CLIENTINC_DIR . 'templates/dynamic-form.tmpl.php');*/
/*         } ?>*/
/*     </tbody>*/
/*     <tbody><?php*/
/*         $tform = TicketForm::getInstance();*/
/*         if ($_POST) {*/
/*             $tform->isValidForClient();*/
/*         }*/
/*         $tform->render(false); ?>*/
/*     </tbody>*/
/*     <tbody>*/
/*     <?php*/
/*     if($cfg && $cfg->isCaptchaEnabled() && (!$thisclient || !$thisclient->isValid())) {*/
/*         if($_POST && $errors && !$errors['captcha'])*/
/*             $errors['captcha']=__('Please re-enter the text again');*/
/*         ?>*/
/*     <tr class="captchaRow">*/
/*         <td class="required"><?php echo __('CAPTCHA Text');?>:</td>*/
/*         <td>*/
/*             <span class="captcha"><img src="captcha.php" border="0" align="left"></span>*/
/*             &nbsp;&nbsp;*/
/*             <input id="captcha" type="text" name="captcha" size="6" autocomplete="off">*/
/*             <em><?php echo __('Enter the text shown on the image.');?></em>*/
/*             <font class="error">*&nbsp;<?php echo $errors['captcha']; ?></font>*/
/*         </td>*/
/*     </tr>*/
/*     <?php*/
/*     } ?>*/
/*     <tr><td colspan=2>&nbsp;</td></tr>*/
/*     </tbody>*/
/*   </table>*/
/* <hr/>*/
/*   <p style="text-align:center;">*/
/*         <input type="submit" value="<?php echo __('Create Ticket');?>">*/
/*         <input type="reset" name="reset" value="<?php echo __('Reset');?>">*/
/*         <input type="button" name="cancel" value="<?php echo __('Cancel'); ?>" onclick="javascript:*/
/*             $('.richtext').each(function() {*/
/*                 var redactor = $(this).data('redactor');*/
/*                 if (redactor && redactor.opts.draftDelete)*/
/*                     redactor.deleteDraft();*/
/*             });*/
/*             window.location.href='index.php';">*/
/*   </p>*/
/* </form>*/
/* */
