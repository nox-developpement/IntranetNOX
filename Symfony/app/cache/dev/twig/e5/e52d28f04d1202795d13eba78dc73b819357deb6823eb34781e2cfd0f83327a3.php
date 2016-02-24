<?php

/* support/include/client/faq.inc.php */
class __TwigTemplate_c05405c147d485822e817d7316e23c57eb6a04184540460ff59551c9dad8baf8 extends Twig_Template
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
        $__internal_19fd3806ae02e2b2b15a261edea6d7f52643629b2531996f9b7a19789b745d98 = $this->env->getExtension("native_profiler");
        $__internal_19fd3806ae02e2b2b15a261edea6d7f52643629b2531996f9b7a19789b745d98->enter($__internal_19fd3806ae02e2b2b15a261edea6d7f52643629b2531996f9b7a19789b745d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/client/faq.inc.php"));

        // line 1
        echo "<?php
if(!defined('OSTCLIENTINC') || !\$faq  || !\$faq->isPublished()) die('Access Denied');

\$category=\$faq->getCategory();

?>
<h1><?php echo __('Frequently Asked Questions');?></h1>
<div id=\"breadcrumbs\">
    <a href=\"index.php\"><?php echo __('All Categories');?></a>
    &raquo; <a href=\"faq.php?cid=<?php echo \$category->getId(); ?>\"><?php echo \$category->getName(); ?></a>
</div>
<div style=\"width:700px;padding-top:2px;\" class=\"pull-left\">
<strong style=\"font-size:16px;\"><?php echo \$faq->getQuestion() ?></strong>
</div>
<div class=\"pull-right flush-right\" style=\"padding-top:5px;padding-right:5px;\"></div>
<div class=\"clear\"></div>
<div class=\"thread-body\">
<?php echo Format::safe_html(\$faq->getAnswerWithImages()); ?>
</div>
<p>
<?php
if(\$faq->getNumAttachments()) { ?>
 <div><span class=\"faded\"><b><?php echo __('Attachments');?>:</b></span>  <?php echo \$faq->getAttachmentsLinks(); ?></div>
<?php
} ?>

<div class=\"article-meta\"><span class=\"faded\"><b><?php echo __('Help Topics');?>:</b></span>
    <?php echo (\$topics=\$faq->getHelpTopics())?implode(', ',\$topics):' '; ?>
</div>
</p>
<hr>
<div class=\"faded\">&nbsp;<?php echo __('Last updated').' '.Format::db_daydatetime(\$category->getUpdateDate()); ?></div>
";
        
        $__internal_19fd3806ae02e2b2b15a261edea6d7f52643629b2531996f9b7a19789b745d98->leave($__internal_19fd3806ae02e2b2b15a261edea6d7f52643629b2531996f9b7a19789b745d98_prof);

    }

    public function getTemplateName()
    {
        return "support/include/client/faq.inc.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* if(!defined('OSTCLIENTINC') || !$faq  || !$faq->isPublished()) die('Access Denied');*/
/* */
/* $category=$faq->getCategory();*/
/* */
/* ?>*/
/* <h1><?php echo __('Frequently Asked Questions');?></h1>*/
/* <div id="breadcrumbs">*/
/*     <a href="index.php"><?php echo __('All Categories');?></a>*/
/*     &raquo; <a href="faq.php?cid=<?php echo $category->getId(); ?>"><?php echo $category->getName(); ?></a>*/
/* </div>*/
/* <div style="width:700px;padding-top:2px;" class="pull-left">*/
/* <strong style="font-size:16px;"><?php echo $faq->getQuestion() ?></strong>*/
/* </div>*/
/* <div class="pull-right flush-right" style="padding-top:5px;padding-right:5px;"></div>*/
/* <div class="clear"></div>*/
/* <div class="thread-body">*/
/* <?php echo Format::safe_html($faq->getAnswerWithImages()); ?>*/
/* </div>*/
/* <p>*/
/* <?php*/
/* if($faq->getNumAttachments()) { ?>*/
/*  <div><span class="faded"><b><?php echo __('Attachments');?>:</b></span>  <?php echo $faq->getAttachmentsLinks(); ?></div>*/
/* <?php*/
/* } ?>*/
/* */
/* <div class="article-meta"><span class="faded"><b><?php echo __('Help Topics');?>:</b></span>*/
/*     <?php echo ($topics=$faq->getHelpTopics())?implode(', ',$topics):' '; ?>*/
/* </div>*/
/* </p>*/
/* <hr>*/
/* <div class="faded">&nbsp;<?php echo __('Last updated').' '.Format::db_daydatetime($category->getUpdateDate()); ?></div>*/
/* */
