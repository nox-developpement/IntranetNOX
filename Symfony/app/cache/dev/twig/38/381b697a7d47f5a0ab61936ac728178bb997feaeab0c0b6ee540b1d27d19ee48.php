<?php

/* support/kb/faq.php */
class __TwigTemplate_23764257c3a8980c3fa13e226e4b7b0d683504988061cc56af8ddb03402ecf28 extends Twig_Template
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
        $__internal_e8b66268da22224db1e7f78eed70588f6dd812540118391efc235888f6be7be9 = $this->env->getExtension("native_profiler");
        $__internal_e8b66268da22224db1e7f78eed70588f6dd812540118391efc235888f6be7be9->enter($__internal_e8b66268da22224db1e7f78eed70588f6dd812540118391efc235888f6be7be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/kb/faq.php"));

        // line 1
        echo "<?php
/*********************************************************************
    faq.php

    FAQs Clients' interface..

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require('kb.inc.php');
require_once(INCLUDE_DIR.'class.faq.php');

\$faq=\$category=null;
if(\$_REQUEST['id'] && !(\$faq=FAQ::lookup(\$_REQUEST['id'])))
   \$errors['err']=sprintf(__('%s: Unknown or invalid'), __('FAQ article'));

if(!\$faq && \$_REQUEST['cid'] && !(\$category=Category::lookup(\$_REQUEST['cid'])))
    \$errors['err']=sprintf(__('%s: Unknown or invalid'), __('FAQ category'));


\$inc='knowledgebase.inc.php'; //FAQs landing page.
if(\$faq && \$faq->isPublished()) {
    \$inc='faq.inc.php';
} elseif(\$category && \$category->isPublic() && \$_REQUEST['a']!='search') {
    \$inc='faq-category.inc.php';
}
require_once(CLIENTINC_DIR.'header.inc.php');
require_once(CLIENTINC_DIR.\$inc);
require_once(CLIENTINC_DIR.'footer.inc.php');
?>
";
        
        $__internal_e8b66268da22224db1e7f78eed70588f6dd812540118391efc235888f6be7be9->leave($__internal_e8b66268da22224db1e7f78eed70588f6dd812540118391efc235888f6be7be9_prof);

    }

    public function getTemplateName()
    {
        return "support/kb/faq.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     faq.php*/
/* */
/*     FAQs Clients' interface..*/
/* */
/*     Peter Rotich <peter@osticket.com>*/
/*     Copyright (c)  2006-2013 osTicket*/
/*     http://www.osticket.com*/
/* */
/*     Released under the GNU General Public License WITHOUT ANY WARRANTY.*/
/*     See LICENSE.TXT for details.*/
/* */
/*     vim: expandtab sw=4 ts=4 sts=4:*/
/* **********************************************************************//* */
/* require('kb.inc.php');*/
/* require_once(INCLUDE_DIR.'class.faq.php');*/
/* */
/* $faq=$category=null;*/
/* if($_REQUEST['id'] && !($faq=FAQ::lookup($_REQUEST['id'])))*/
/*    $errors['err']=sprintf(__('%s: Unknown or invalid'), __('FAQ article'));*/
/* */
/* if(!$faq && $_REQUEST['cid'] && !($category=Category::lookup($_REQUEST['cid'])))*/
/*     $errors['err']=sprintf(__('%s: Unknown or invalid'), __('FAQ category'));*/
/* */
/* */
/* $inc='knowledgebase.inc.php'; //FAQs landing page.*/
/* if($faq && $faq->isPublished()) {*/
/*     $inc='faq.inc.php';*/
/* } elseif($category && $category->isPublic() && $_REQUEST['a']!='search') {*/
/*     $inc='faq-category.inc.php';*/
/* }*/
/* require_once(CLIENTINC_DIR.'header.inc.php');*/
/* require_once(CLIENTINC_DIR.$inc);*/
/* require_once(CLIENTINC_DIR.'footer.inc.php');*/
/* ?>*/
/* */
