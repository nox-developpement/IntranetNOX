<?php

/* support/include/client/faq-category.inc.php */
class __TwigTemplate_68f5235111ad745495df3eef2a9ccef5fc4b8ff6a44f75fa04b3063ef55e720e extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/client/faq-category.inc.php";
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
        return new Twig_Source("", "support/include/client/faq-category.inc.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\client\\faq-category.inc.php");
    }
}
