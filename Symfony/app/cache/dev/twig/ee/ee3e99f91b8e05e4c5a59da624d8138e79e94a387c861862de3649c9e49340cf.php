<?php

/* support/include/staff/faq-view.inc.php */
class __TwigTemplate_b5b792f974fb402553c7003bf04dee8bbf447fc496b611e95f111dacf4da557d extends Twig_Template
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
        $__internal_2f47b14228eace080ef2d67e3d7d145e42a06a5acf83dce6c57cd33e608a123f = $this->env->getExtension("native_profiler");
        $__internal_2f47b14228eace080ef2d67e3d7d145e42a06a5acf83dce6c57cd33e608a123f->enter($__internal_2f47b14228eace080ef2d67e3d7d145e42a06a5acf83dce6c57cd33e608a123f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/staff/faq-view.inc.php"));

        // line 1
        echo "<?php
if(!defined('OSTSTAFFINC') || !\$faq || !\$thisstaff) die('Access Denied');

\$category=\$faq->getCategory();

?>
<h2><?php echo __('Frequently Asked Questions');?></h2>
<div id=\"breadcrumbs\">
    <a href=\"kb.php\"><?php echo __('All Categories');?></a>
    &raquo; <a href=\"kb.php?cid=<?php echo \$category->getId(); ?>\"><?php echo \$category->getName(); ?></a>
    <span class=\"faded\">(<?php echo \$category->isPublic()?__('Public'):__('Internal'); ?>)</span>
</div>
<div class=\"pull-left\" style=\"width:700px;padding-top:2px;\">
<strong style=\"font-size:16px;\"><?php echo \$faq->getQuestion() ?></strong>&nbsp;&nbsp;<span class=\"faded\"><?php echo \$faq->isPublished() ? ('('.__('Published').')'):''; ?></span>
</div>
<div class=\"pull-right flush-right\" style=\"padding-top:5px;padding-right:5px;\">
<?php
if(\$thisstaff->canManageFAQ()) {
    echo sprintf('<a href=\"faq.php?id=%d&a=edit\" class=\"Icon newHelpTopic\">'.__('Edit FAQ').'</a>',
            \$faq->getId());
}
?>
&nbsp;
</div>
<div class=\"clear\"></div>
<div class=\"thread-body\">
<?php echo \$faq->getAnswerWithImages(); ?>
</div>
<div class=\"clear\"></div>
<p>
 <div><span class=\"faded\"><b><?php echo __('Attachments');?>:</b></span> <?php echo \$faq->getAttachmentsLinks(); ?></div>
 <div><span class=\"faded\"><b><?php echo __('Help Topics');?>:</b></span>
    <?php echo (\$topics=\$faq->getHelpTopics())?implode(', ',\$topics):' '; ?>
    </div>
</p>
<div class=\"faded\">&nbsp;<?php echo __('Last updated');?> <?php echo Format::db_daydatetime(\$faq->getUpdateDate()); ?></div>
<hr>
<?php
if(\$thisstaff->canManageFAQ()) {
    //TODO: add js confirmation....
    ?>
   <div>
    <form action=\"faq.php?id=<?php echo  \$faq->getId(); ?>\" method=\"post\">
\t <?php csrf_token(); ?>
        <input type=\"hidden\" name=\"id\" value=\"<?php echo  \$faq->getId(); ?>\">
        <input type=\"hidden\" name=\"do\" value=\"manage-faq\">
        <div>
            <strong><?php echo __('Options');?>: </strong>
            <select name=\"a\" style=\"width:200px;\">
                <option value=\"\"><?php echo __('Select Action');?></option>
                <?php
                if(\$faq->isPublished()) { ?>
                <option value=\"unpublish\"><?php echo __('Unpublish FAQ');?></option>
                <?php
                }else{ ?>
                <option value=\"publish\"><?php echo __('Publish FAQ');?></option>
                <?php
                } ?>
                <option value=\"edit\"><?php echo __('Edit FAQ');?></option>
                <option value=\"delete\"><?php echo __('Delete FAQ');?></option>
            </select>
            &nbsp;&nbsp;<input type=\"submit\" name=\"submit\" value=\"<?php echo __('Go');?>\">
        </div>
    </form>
   </div>
<?php
}
?>
";
        
        $__internal_2f47b14228eace080ef2d67e3d7d145e42a06a5acf83dce6c57cd33e608a123f->leave($__internal_2f47b14228eace080ef2d67e3d7d145e42a06a5acf83dce6c57cd33e608a123f_prof);

    }

    public function getTemplateName()
    {
        return "support/include/staff/faq-view.inc.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* if(!defined('OSTSTAFFINC') || !$faq || !$thisstaff) die('Access Denied');*/
/* */
/* $category=$faq->getCategory();*/
/* */
/* ?>*/
/* <h2><?php echo __('Frequently Asked Questions');?></h2>*/
/* <div id="breadcrumbs">*/
/*     <a href="kb.php"><?php echo __('All Categories');?></a>*/
/*     &raquo; <a href="kb.php?cid=<?php echo $category->getId(); ?>"><?php echo $category->getName(); ?></a>*/
/*     <span class="faded">(<?php echo $category->isPublic()?__('Public'):__('Internal'); ?>)</span>*/
/* </div>*/
/* <div class="pull-left" style="width:700px;padding-top:2px;">*/
/* <strong style="font-size:16px;"><?php echo $faq->getQuestion() ?></strong>&nbsp;&nbsp;<span class="faded"><?php echo $faq->isPublished() ? ('('.__('Published').')'):''; ?></span>*/
/* </div>*/
/* <div class="pull-right flush-right" style="padding-top:5px;padding-right:5px;">*/
/* <?php*/
/* if($thisstaff->canManageFAQ()) {*/
/*     echo sprintf('<a href="faq.php?id=%d&a=edit" class="Icon newHelpTopic">'.__('Edit FAQ').'</a>',*/
/*             $faq->getId());*/
/* }*/
/* ?>*/
/* &nbsp;*/
/* </div>*/
/* <div class="clear"></div>*/
/* <div class="thread-body">*/
/* <?php echo $faq->getAnswerWithImages(); ?>*/
/* </div>*/
/* <div class="clear"></div>*/
/* <p>*/
/*  <div><span class="faded"><b><?php echo __('Attachments');?>:</b></span> <?php echo $faq->getAttachmentsLinks(); ?></div>*/
/*  <div><span class="faded"><b><?php echo __('Help Topics');?>:</b></span>*/
/*     <?php echo ($topics=$faq->getHelpTopics())?implode(', ',$topics):' '; ?>*/
/*     </div>*/
/* </p>*/
/* <div class="faded">&nbsp;<?php echo __('Last updated');?> <?php echo Format::db_daydatetime($faq->getUpdateDate()); ?></div>*/
/* <hr>*/
/* <?php*/
/* if($thisstaff->canManageFAQ()) {*/
/*     //TODO: add js confirmation....*/
/*     ?>*/
/*    <div>*/
/*     <form action="faq.php?id=<?php echo  $faq->getId(); ?>" method="post">*/
/* 	 <?php csrf_token(); ?>*/
/*         <input type="hidden" name="id" value="<?php echo  $faq->getId(); ?>">*/
/*         <input type="hidden" name="do" value="manage-faq">*/
/*         <div>*/
/*             <strong><?php echo __('Options');?>: </strong>*/
/*             <select name="a" style="width:200px;">*/
/*                 <option value=""><?php echo __('Select Action');?></option>*/
/*                 <?php*/
/*                 if($faq->isPublished()) { ?>*/
/*                 <option value="unpublish"><?php echo __('Unpublish FAQ');?></option>*/
/*                 <?php*/
/*                 }else{ ?>*/
/*                 <option value="publish"><?php echo __('Publish FAQ');?></option>*/
/*                 <?php*/
/*                 } ?>*/
/*                 <option value="edit"><?php echo __('Edit FAQ');?></option>*/
/*                 <option value="delete"><?php echo __('Delete FAQ');?></option>*/
/*             </select>*/
/*             &nbsp;&nbsp;<input type="submit" name="submit" value="<?php echo __('Go');?>">*/
/*         </div>*/
/*     </form>*/
/*    </div>*/
/* <?php*/
/* }*/
/* ?>*/
/* */
