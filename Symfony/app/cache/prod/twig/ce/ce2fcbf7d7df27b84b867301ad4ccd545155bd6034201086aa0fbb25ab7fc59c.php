<?php

/* support/scp/kb.php */
class __TwigTemplate_46d6798279ac9ce771624c32c1cba8e79d8fec4a25e96105c65551ddd71523af extends Twig_Template
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
/*********************************************************************
    kb.php

    Knowlegebase

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require('staff.inc.php');
require_once(INCLUDE_DIR.'class.faq.php');

\$category=null;
if(\$_REQUEST['cid'] && !(\$category=Category::lookup(\$_REQUEST['cid'])))
    \$errors['err']=__('Unknown or invalid FAQ category');

\$inc='faq-categories.inc.php'; //KB landing page.
if(\$category && \$_REQUEST['a']!='search') {
    \$inc='faq-category.inc.php';
}
\$nav->setTabActive('kbase');
\$ost->addExtraHeader('<meta name=\"tip-namespace\" content=\"knowledgebase.faqs\" />',
    \"\$('#content').data('tipNamespace', 'knowledgebase.faqs');\");
require_once(STAFFINC_DIR.'header.inc.php');
require_once(STAFFINC_DIR.\$inc);
require_once(STAFFINC_DIR.'footer.inc.php');
?>
";
    }

    public function getTemplateName()
    {
        return "support/scp/kb.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     kb.php*/
/* */
/*     Knowlegebase*/
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
/* require('staff.inc.php');*/
/* require_once(INCLUDE_DIR.'class.faq.php');*/
/* */
/* $category=null;*/
/* if($_REQUEST['cid'] && !($category=Category::lookup($_REQUEST['cid'])))*/
/*     $errors['err']=__('Unknown or invalid FAQ category');*/
/* */
/* $inc='faq-categories.inc.php'; //KB landing page.*/
/* if($category && $_REQUEST['a']!='search') {*/
/*     $inc='faq-category.inc.php';*/
/* }*/
/* $nav->setTabActive('kbase');*/
/* $ost->addExtraHeader('<meta name="tip-namespace" content="knowledgebase.faqs" />',*/
/*     "$('#content').data('tipNamespace', 'knowledgebase.faqs');");*/
/* require_once(STAFFINC_DIR.'header.inc.php');*/
/* require_once(STAFFINC_DIR.$inc);*/
/* require_once(STAFFINC_DIR.'footer.inc.php');*/
/* ?>*/
/* */
