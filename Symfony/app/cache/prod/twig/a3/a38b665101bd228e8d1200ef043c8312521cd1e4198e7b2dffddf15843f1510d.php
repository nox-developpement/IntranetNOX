<?php

/* support/include/client/faq.inc.php */
class __TwigTemplate_b5f3d2fb50dc2073d3049281beea5dce005f8e51401cba8037c67e3d4f796a1b extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/client/faq.inc.php";
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
        return new Twig_Source("", "support/include/client/faq.inc.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\client\\faq.inc.php");
    }
}
