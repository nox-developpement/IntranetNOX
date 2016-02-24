<?php

/* support/scp/faq.php */
class __TwigTemplate_8ff0bee0c8a7bb388bcbec3e0eabc534a508c59edcf3e9bac8f66f05e6ccd9db extends Twig_Template
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
        $__internal_23fed0cbd7308df0f3bc91d105a49bdce1863226904bc87dc0f87ffef4afe082 = $this->env->getExtension("native_profiler");
        $__internal_23fed0cbd7308df0f3bc91d105a49bdce1863226904bc87dc0f87ffef4afe082->enter($__internal_23fed0cbd7308df0f3bc91d105a49bdce1863226904bc87dc0f87ffef4afe082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/scp/faq.php"));

        // line 1
        echo "<?php
/*********************************************************************
    faq.php

    FAQs.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require('staff.inc.php');
require_once(INCLUDE_DIR.'class.faq.php');

\$faq=\$category=null;
if(\$_REQUEST['id'] && !(\$faq=FAQ::lookup(\$_REQUEST['id'])))
    \$errors['err']=sprintf(__('%s: Unknown or invalid'), __('FAQ article'));

if(\$_REQUEST['cid'] && !\$faq && !(\$category=Category::lookup(\$_REQUEST['cid'])))
    \$errors['err']=sprintf(__('%s: Unknown or invalid'), __('FAQ category'));

\$faq_form = new Form(array(
    'attachments' => new FileUploadField(array('id'=>'attach',
        'configuration'=>array('extensions'=>false,
            'size'=>\$cfg->getMaxFileSize())
   )),
));

if(\$_POST):
    \$errors=array();
    \$_POST['files'] = \$faq_form->getField('attachments')->getClean();
    switch(strtolower(\$_POST['do'])) {
        case 'create':
        case 'add':
            if((\$faq=FAQ::add(\$_POST,\$errors))) {
                \$msg=sprintf(__('Successfully added %s'), Format::htmlchars(\$faq->getQuestion()));
                // Delete draft for this new faq
                Draft::deleteForNamespace('faq', \$thisstaff->getId());
            } elseif(!\$errors['err'])
                \$errors['err'] = sprintf(__('Unable to add %s. Correct error(s) below and try again.'),
                     __('this FAQ article'));
        break;
        case 'update':
        case 'edit';
            if(!\$faq)
                \$errors['err'] = sprintf(__('%s: Invalid or unknown'), __('FAQ article'));
            elseif(\$faq->update(\$_POST,\$errors)) {
                \$msg=sprintf(__('Successfully updated %s'), __('this FAQ article'));
                \$_REQUEST['a']=null; //Go back to view
                \$faq->reload();
                // Delete pending draft updates for this faq (for ALL users)
                Draft::deleteForNamespace('faq.'.\$faq->getId());
            } elseif(!\$errors['err'])
                \$errors['err'] = sprintf(__('Unable to update %s. Correct error(s) below and try again.'),
                    __('this FAQ article'));
            break;
        case 'manage-faq':
            if(!\$faq) {
                \$errors['err']=sprintf(__('%s: Unknown or invalid'), __('FAQ article'));
            } else {
                switch(strtolower(\$_POST['a'])) {
                    case 'edit':
                        \$_GET['a']='edit';
                        break;
                    case 'publish';
                        if(\$faq->publish())
                            \$msg=sprintf(__('Successfully published %s'), __('this FAQ article'));
                        else
                            \$errors['err']=sprintf(__('Unable to publish %s. Try editing it.'),
                                __('this FAQ article'));
                        break;
                    case 'unpublish';
                        if(\$faq->unpublish())
                            \$msg=sprintf(__('Successfully unpublished %s'), __('this FAQ article'));
                        else
                            \$errors['err']=sprintf(__('Unable to unpublish %s. Try editing it.'), __('this FAQ article'));
                        break;
                    case 'delete':
                        \$category = \$faq->getCategory();
                        if(\$faq->delete()) {
                            \$msg=sprintf(__('Successfully deleted %s'), Format::htmlchars(\$faq->getQuestion()));
                            \$faq=null;
                        } else {
                            \$errors['err']=sprintf(__('Unable to delete %s.'), __('this FAQ article'));
                        }
                        break;
                    default:
                        \$errors['err']=__('Invalid action');
                }
            }
            break;
        default:
            \$errors['err']=__('Unknown action');

    }
endif;


\$inc='faq-categories.inc.php'; //FAQs landing page.
if(\$faq) {
    \$inc='faq-view.inc.php';
    if(\$_REQUEST['a']=='edit' && \$thisstaff->canManageFAQ())
        \$inc='faq.inc.php';
}elseif(\$_REQUEST['a']=='add' && \$thisstaff->canManageFAQ()) {
    \$inc='faq.inc.php';
} elseif(\$category && \$_REQUEST['a']!='search') {
    \$inc='faq-category.inc.php';
}
\$tip_namespace = 'knowledgebase.faq';
\$nav->setTabActive('kbase');
\$ost->addExtraHeader('<meta name=\"tip-namespace\" content=\"' . \$tip_namespace . '\" />',
    \"\$('#content').data('tipNamespace', '\".\$tip_namespace.\"');\");
require_once(STAFFINC_DIR.'header.inc.php');
require_once(STAFFINC_DIR.\$inc);
print \$faq_form->getMedia();
require_once(STAFFINC_DIR.'footer.inc.php');
?>
";
        
        $__internal_23fed0cbd7308df0f3bc91d105a49bdce1863226904bc87dc0f87ffef4afe082->leave($__internal_23fed0cbd7308df0f3bc91d105a49bdce1863226904bc87dc0f87ffef4afe082_prof);

    }

    public function getTemplateName()
    {
        return "support/scp/faq.php";
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
/*     FAQs.*/
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
/* $faq=$category=null;*/
/* if($_REQUEST['id'] && !($faq=FAQ::lookup($_REQUEST['id'])))*/
/*     $errors['err']=sprintf(__('%s: Unknown or invalid'), __('FAQ article'));*/
/* */
/* if($_REQUEST['cid'] && !$faq && !($category=Category::lookup($_REQUEST['cid'])))*/
/*     $errors['err']=sprintf(__('%s: Unknown or invalid'), __('FAQ category'));*/
/* */
/* $faq_form = new Form(array(*/
/*     'attachments' => new FileUploadField(array('id'=>'attach',*/
/*         'configuration'=>array('extensions'=>false,*/
/*             'size'=>$cfg->getMaxFileSize())*/
/*    )),*/
/* ));*/
/* */
/* if($_POST):*/
/*     $errors=array();*/
/*     $_POST['files'] = $faq_form->getField('attachments')->getClean();*/
/*     switch(strtolower($_POST['do'])) {*/
/*         case 'create':*/
/*         case 'add':*/
/*             if(($faq=FAQ::add($_POST,$errors))) {*/
/*                 $msg=sprintf(__('Successfully added %s'), Format::htmlchars($faq->getQuestion()));*/
/*                 // Delete draft for this new faq*/
/*                 Draft::deleteForNamespace('faq', $thisstaff->getId());*/
/*             } elseif(!$errors['err'])*/
/*                 $errors['err'] = sprintf(__('Unable to add %s. Correct error(s) below and try again.'),*/
/*                      __('this FAQ article'));*/
/*         break;*/
/*         case 'update':*/
/*         case 'edit';*/
/*             if(!$faq)*/
/*                 $errors['err'] = sprintf(__('%s: Invalid or unknown'), __('FAQ article'));*/
/*             elseif($faq->update($_POST,$errors)) {*/
/*                 $msg=sprintf(__('Successfully updated %s'), __('this FAQ article'));*/
/*                 $_REQUEST['a']=null; //Go back to view*/
/*                 $faq->reload();*/
/*                 // Delete pending draft updates for this faq (for ALL users)*/
/*                 Draft::deleteForNamespace('faq.'.$faq->getId());*/
/*             } elseif(!$errors['err'])*/
/*                 $errors['err'] = sprintf(__('Unable to update %s. Correct error(s) below and try again.'),*/
/*                     __('this FAQ article'));*/
/*             break;*/
/*         case 'manage-faq':*/
/*             if(!$faq) {*/
/*                 $errors['err']=sprintf(__('%s: Unknown or invalid'), __('FAQ article'));*/
/*             } else {*/
/*                 switch(strtolower($_POST['a'])) {*/
/*                     case 'edit':*/
/*                         $_GET['a']='edit';*/
/*                         break;*/
/*                     case 'publish';*/
/*                         if($faq->publish())*/
/*                             $msg=sprintf(__('Successfully published %s'), __('this FAQ article'));*/
/*                         else*/
/*                             $errors['err']=sprintf(__('Unable to publish %s. Try editing it.'),*/
/*                                 __('this FAQ article'));*/
/*                         break;*/
/*                     case 'unpublish';*/
/*                         if($faq->unpublish())*/
/*                             $msg=sprintf(__('Successfully unpublished %s'), __('this FAQ article'));*/
/*                         else*/
/*                             $errors['err']=sprintf(__('Unable to unpublish %s. Try editing it.'), __('this FAQ article'));*/
/*                         break;*/
/*                     case 'delete':*/
/*                         $category = $faq->getCategory();*/
/*                         if($faq->delete()) {*/
/*                             $msg=sprintf(__('Successfully deleted %s'), Format::htmlchars($faq->getQuestion()));*/
/*                             $faq=null;*/
/*                         } else {*/
/*                             $errors['err']=sprintf(__('Unable to delete %s.'), __('this FAQ article'));*/
/*                         }*/
/*                         break;*/
/*                     default:*/
/*                         $errors['err']=__('Invalid action');*/
/*                 }*/
/*             }*/
/*             break;*/
/*         default:*/
/*             $errors['err']=__('Unknown action');*/
/* */
/*     }*/
/* endif;*/
/* */
/* */
/* $inc='faq-categories.inc.php'; //FAQs landing page.*/
/* if($faq) {*/
/*     $inc='faq-view.inc.php';*/
/*     if($_REQUEST['a']=='edit' && $thisstaff->canManageFAQ())*/
/*         $inc='faq.inc.php';*/
/* }elseif($_REQUEST['a']=='add' && $thisstaff->canManageFAQ()) {*/
/*     $inc='faq.inc.php';*/
/* } elseif($category && $_REQUEST['a']!='search') {*/
/*     $inc='faq-category.inc.php';*/
/* }*/
/* $tip_namespace = 'knowledgebase.faq';*/
/* $nav->setTabActive('kbase');*/
/* $ost->addExtraHeader('<meta name="tip-namespace" content="' . $tip_namespace . '" />',*/
/*     "$('#content').data('tipNamespace', '".$tip_namespace."');");*/
/* require_once(STAFFINC_DIR.'header.inc.php');*/
/* require_once(STAFFINC_DIR.$inc);*/
/* print $faq_form->getMedia();*/
/* require_once(STAFFINC_DIR.'footer.inc.php');*/
/* ?>*/
/* */
