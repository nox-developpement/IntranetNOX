<?php

/* support/scp/kb.php */
class __TwigTemplate_1501d4a587471009ea363cb8be84252010fbdc7ffe10b02cc4ae45898062fdce extends Twig_Template
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
        $__internal_3b3a54c6c3d84e18487aff81aa7a372e86e8d672f8c4d144c6be0f7f1c1e18be = $this->env->getExtension("native_profiler");
        $__internal_3b3a54c6c3d84e18487aff81aa7a372e86e8d672f8c4d144c6be0f7f1c1e18be->enter($__internal_3b3a54c6c3d84e18487aff81aa7a372e86e8d672f8c4d144c6be0f7f1c1e18be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/scp/kb.php"));

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
        
        $__internal_3b3a54c6c3d84e18487aff81aa7a372e86e8d672f8c4d144c6be0f7f1c1e18be->leave($__internal_3b3a54c6c3d84e18487aff81aa7a372e86e8d672f8c4d144c6be0f7f1c1e18be_prof);

    }

    public function getTemplateName()
    {
        return "support/scp/kb.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
