<?php

/* support/include/client/faq-category.inc.php */
class __TwigTemplate_eee18cfe058adc6972c8b38627e96e316c6d0ed4943d7ce231a19acb2848c023 extends Twig_Template
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
        $__internal_98cc1e54f4562ccb0b0b11d7cefc4bd0a5099e664f7e4f2b2dfe22ec17454d97 = $this->env->getExtension("native_profiler");
        $__internal_98cc1e54f4562ccb0b0b11d7cefc4bd0a5099e664f7e4f2b2dfe22ec17454d97->enter($__internal_98cc1e54f4562ccb0b0b11d7cefc4bd0a5099e664f7e4f2b2dfe22ec17454d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/client/faq-category.inc.php"));

        // line 1
        echo "<?php
if(!defined('OSTCLIENTINC') || !\$category || !\$category->isPublic()) die('Access Denied');
?>
<h1><strong><?php echo \$category->getName() ?></strong></h1>
<p>
<?php echo Format::safe_html(\$category->getDescription()); ?>
</p>
<hr>
<?php
\$sql='SELECT faq.faq_id, question, count(attach.file_id) as attachments '
    .' FROM '.FAQ_TABLE.' faq '
    .' LEFT JOIN '.ATTACHMENT_TABLE.' attach
         ON(attach.object_id=faq.faq_id AND attach.type=\\'F\\' AND attach.inline = 0) '
    .' WHERE faq.ispublished=1 AND faq.category_id='.db_input(\$category->getId())
    .' GROUP BY faq.faq_id '
    .' ORDER BY question';
if((\$res=db_query(\$sql)) && db_num_rows(\$res)) {
    echo '
         <h2>'.__('Frequently Asked Questions').'</h2>
         <div id=\"faq\">
            <ol>';
    while(\$row=db_fetch_array(\$res)) {
        \$attachments=\$row['attachments']?'<span class=\"Icon file\"></span>':'';
        echo sprintf('
            <li><a href=\"faq.php?id=%d\" >%s &nbsp;%s</a></li>',
            \$row['faq_id'],Format::htmlchars(\$row['question']), \$attachments);
    }
    echo '  </ol>
         </div>
         <p><a class=\"back\" href=\"index.php\">&laquo; '.__('Go Back').'</a></p>';
}else {
    echo '<strong>'.__('This category does not have any FAQs.').' <a href=\"index.php\">'.__('Back To Index').'</a></strong>';
}
?>
";
        
        $__internal_98cc1e54f4562ccb0b0b11d7cefc4bd0a5099e664f7e4f2b2dfe22ec17454d97->leave($__internal_98cc1e54f4562ccb0b0b11d7cefc4bd0a5099e664f7e4f2b2dfe22ec17454d97_prof);

    }

    public function getTemplateName()
    {
        return "support/include/client/faq-category.inc.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* if(!defined('OSTCLIENTINC') || !$category || !$category->isPublic()) die('Access Denied');*/
/* ?>*/
/* <h1><strong><?php echo $category->getName() ?></strong></h1>*/
/* <p>*/
/* <?php echo Format::safe_html($category->getDescription()); ?>*/
/* </p>*/
/* <hr>*/
/* <?php*/
/* $sql='SELECT faq.faq_id, question, count(attach.file_id) as attachments '*/
/*     .' FROM '.FAQ_TABLE.' faq '*/
/*     .' LEFT JOIN '.ATTACHMENT_TABLE.' attach*/
/*          ON(attach.object_id=faq.faq_id AND attach.type=\'F\' AND attach.inline = 0) '*/
/*     .' WHERE faq.ispublished=1 AND faq.category_id='.db_input($category->getId())*/
/*     .' GROUP BY faq.faq_id '*/
/*     .' ORDER BY question';*/
/* if(($res=db_query($sql)) && db_num_rows($res)) {*/
/*     echo '*/
/*          <h2>'.__('Frequently Asked Questions').'</h2>*/
/*          <div id="faq">*/
/*             <ol>';*/
/*     while($row=db_fetch_array($res)) {*/
/*         $attachments=$row['attachments']?'<span class="Icon file"></span>':'';*/
/*         echo sprintf('*/
/*             <li><a href="faq.php?id=%d" >%s &nbsp;%s</a></li>',*/
/*             $row['faq_id'],Format::htmlchars($row['question']), $attachments);*/
/*     }*/
/*     echo '  </ol>*/
/*          </div>*/
/*          <p><a class="back" href="index.php">&laquo; '.__('Go Back').'</a></p>';*/
/* }else {*/
/*     echo '<strong>'.__('This category does not have any FAQs.').' <a href="index.php">'.__('Back To Index').'</a></strong>';*/
/* }*/
/* ?>*/
/* */
