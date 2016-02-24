<?php

/* support/scp/categories.php */
class __TwigTemplate_c96a41646a10c9b8e246745e28f3027435a4ea59fa8bb55a09e052e7671466ba extends Twig_Template
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
        $__internal_993a535fdd11cc9436c4a5c7d1a777f3d54db97626a4cc7b921df2e0c5b41e07 = $this->env->getExtension("native_profiler");
        $__internal_993a535fdd11cc9436c4a5c7d1a777f3d54db97626a4cc7b921df2e0c5b41e07->enter($__internal_993a535fdd11cc9436c4a5c7d1a777f3d54db97626a4cc7b921df2e0c5b41e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/scp/categories.php"));

        // line 1
        echo "<?php
/*********************************************************************
    categories.php

    FAQ categories

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require('staff.inc.php');
include_once(INCLUDE_DIR.'class.category.php');

/* check permission */
if(!\$thisstaff || !\$thisstaff->canManageFAQ()) {
    header('Location: kb.php');
    exit;
}


\$category=null;
if(\$_REQUEST['id'] && !(\$category=Category::lookup(\$_REQUEST['id'])))
    \$errors['err']=sprintf(__('%s: Unknown or invalid ID.'), __('category'));

if(\$_POST){
    switch(strtolower(\$_POST['do'])) {
        case 'update':
            if(!\$category) {
                \$errors['err']=sprintf(__('%s: Unknown or invalid'), __('category'));
            } elseif(\$category->update(\$_POST,\$errors)) {
                \$msg=sprintf(__('Successfully updated %s'),
                    __('this category'));
            } elseif(!\$errors['err']) {
                \$errors['err']=sprintf(__('Error updating %s. Correct error(s) below and try again.'), __('this category'));
            }
            break;
        case 'create':
            if((\$id=Category::create(\$_POST,\$errors))) {
                \$msg=sprintf(__('Successfull added %s'), Format::htmlchars(\$_POST['name']));
                \$_REQUEST['a']=null;
            } elseif(!\$errors['err']) {
                \$errors['err']=sprintf(__('Unable to add %s. Correct error(s) below and try again.'),
                    __('this category'));
            }
            break;
        case 'mass_process':
            if(!\$_POST['ids'] || !is_array(\$_POST['ids']) || !count(\$_POST['ids'])) {
                \$errors['err']=sprintf(__('You must select at least %s'), __('one category'));
            } else {
                \$count=count(\$_POST['ids']);
                switch(strtolower(\$_POST['a'])) {
                    case 'make_public':
                        \$sql='UPDATE '.FAQ_CATEGORY_TABLE.' SET ispublic=1 '
                            .' WHERE category_id IN ('.implode(',', db_input(\$_POST['ids'])).')';

                        if(db_query(\$sql) && (\$num=db_affected_rows())) {
                            if(\$num==\$count)
                                \$msg = sprintf(__('Successfully made %s PUBLIC'),
                                    _N('selected category', 'selected categories', \$count));
                            else
                                \$warn = sprintf(__('%1\$d of %2\$d %3\$s made PUBLIC'), \$num, \$count,
                                    _N('selected category', 'selected categories', \$count));
                        } else {
                            \$errors['err'] = sprintf(__('Unable to make %s PUBLIC.'),
                                _N('selected category', 'selected categories', \$count));
                        }
                        break;
                    case 'make_private':
                        \$sql='UPDATE '.FAQ_CATEGORY_TABLE.' SET ispublic=0 '
                            .' WHERE category_id IN ('.implode(',', db_input(\$_POST['ids'])).')';

                        if(db_query(\$sql) && (\$num=db_affected_rows())) {
                            if(\$num==\$count)
                                \$msg = sprintf(__('Successfully made %s PRIVATE'),
                                    _N('selected category', 'selected categories', \$count));
                            else
                                \$warn = sprintf(__('%1\$d of %2\$d %3\$s made PRIVATE'), \$num, \$count,
                                    _N('selected category', 'selected categories', \$count));
                        } else {
                            \$errors['err'] = sprintf(__('Unable to make %s PRIVATE'),
                                _N('selected category', 'selected categories', \$count));
                        }
                        break;
                    case 'delete':
                        \$i=0;
                        foreach(\$_POST['ids'] as \$k=>\$v) {
                            if((\$c=Category::lookup(\$v)) && \$c->delete())
                                \$i++;
                        }

                        if(\$i==\$count)
                            \$msg = sprintf(__('Successfully deleted %s'),
                                _N('selected category', 'selected categories', \$count));
                        elseif(\$i>0)
                            \$warn = sprintf(__('%1\$d of %2\$d %3\$s deleted'), \$i, \$count,
                                _N('selected category', 'selected categories', \$count));
                        elseif(!\$errors['err'])
                            \$errors['err'] = sprintf(__('Unable to delete %s'),
                                _N('selected category', 'selected categories', \$count));
                        break;
                    default:
                        \$errors['err']=__('Unknown action - get technical help.');
                }
            }
            break;
        default:
            \$errors['err']=__('Unknown action');
            break;
    }
}

\$page='categories.inc.php';
\$tip_namespace = 'knowledgebase.category';
if(\$category || (\$_REQUEST['a'] && !strcasecmp(\$_REQUEST['a'],'add'))) {
    \$page='category.inc.php';
}

\$nav->setTabActive('kbase');
\$ost->addExtraHeader('<meta name=\"tip-namespace\" content=\"' . \$tip_namespace . '\" />',
    \"\$('#content').data('tipNamespace', '\".\$tip_namespace.\"');\");
require(STAFFINC_DIR.'header.inc.php');
require(STAFFINC_DIR.\$page);
include(STAFFINC_DIR.'footer.inc.php');
?>
";
        
        $__internal_993a535fdd11cc9436c4a5c7d1a777f3d54db97626a4cc7b921df2e0c5b41e07->leave($__internal_993a535fdd11cc9436c4a5c7d1a777f3d54db97626a4cc7b921df2e0c5b41e07_prof);

    }

    public function getTemplateName()
    {
        return "support/scp/categories.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     categories.php*/
/* */
/*     FAQ categories*/
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
/* include_once(INCLUDE_DIR.'class.category.php');*/
/* */
/* /* check permission *//* */
/* if(!$thisstaff || !$thisstaff->canManageFAQ()) {*/
/*     header('Location: kb.php');*/
/*     exit;*/
/* }*/
/* */
/* */
/* $category=null;*/
/* if($_REQUEST['id'] && !($category=Category::lookup($_REQUEST['id'])))*/
/*     $errors['err']=sprintf(__('%s: Unknown or invalid ID.'), __('category'));*/
/* */
/* if($_POST){*/
/*     switch(strtolower($_POST['do'])) {*/
/*         case 'update':*/
/*             if(!$category) {*/
/*                 $errors['err']=sprintf(__('%s: Unknown or invalid'), __('category'));*/
/*             } elseif($category->update($_POST,$errors)) {*/
/*                 $msg=sprintf(__('Successfully updated %s'),*/
/*                     __('this category'));*/
/*             } elseif(!$errors['err']) {*/
/*                 $errors['err']=sprintf(__('Error updating %s. Correct error(s) below and try again.'), __('this category'));*/
/*             }*/
/*             break;*/
/*         case 'create':*/
/*             if(($id=Category::create($_POST,$errors))) {*/
/*                 $msg=sprintf(__('Successfull added %s'), Format::htmlchars($_POST['name']));*/
/*                 $_REQUEST['a']=null;*/
/*             } elseif(!$errors['err']) {*/
/*                 $errors['err']=sprintf(__('Unable to add %s. Correct error(s) below and try again.'),*/
/*                     __('this category'));*/
/*             }*/
/*             break;*/
/*         case 'mass_process':*/
/*             if(!$_POST['ids'] || !is_array($_POST['ids']) || !count($_POST['ids'])) {*/
/*                 $errors['err']=sprintf(__('You must select at least %s'), __('one category'));*/
/*             } else {*/
/*                 $count=count($_POST['ids']);*/
/*                 switch(strtolower($_POST['a'])) {*/
/*                     case 'make_public':*/
/*                         $sql='UPDATE '.FAQ_CATEGORY_TABLE.' SET ispublic=1 '*/
/*                             .' WHERE category_id IN ('.implode(',', db_input($_POST['ids'])).')';*/
/* */
/*                         if(db_query($sql) && ($num=db_affected_rows())) {*/
/*                             if($num==$count)*/
/*                                 $msg = sprintf(__('Successfully made %s PUBLIC'),*/
/*                                     _N('selected category', 'selected categories', $count));*/
/*                             else*/
/*                                 $warn = sprintf(__('%1$d of %2$d %3$s made PUBLIC'), $num, $count,*/
/*                                     _N('selected category', 'selected categories', $count));*/
/*                         } else {*/
/*                             $errors['err'] = sprintf(__('Unable to make %s PUBLIC.'),*/
/*                                 _N('selected category', 'selected categories', $count));*/
/*                         }*/
/*                         break;*/
/*                     case 'make_private':*/
/*                         $sql='UPDATE '.FAQ_CATEGORY_TABLE.' SET ispublic=0 '*/
/*                             .' WHERE category_id IN ('.implode(',', db_input($_POST['ids'])).')';*/
/* */
/*                         if(db_query($sql) && ($num=db_affected_rows())) {*/
/*                             if($num==$count)*/
/*                                 $msg = sprintf(__('Successfully made %s PRIVATE'),*/
/*                                     _N('selected category', 'selected categories', $count));*/
/*                             else*/
/*                                 $warn = sprintf(__('%1$d of %2$d %3$s made PRIVATE'), $num, $count,*/
/*                                     _N('selected category', 'selected categories', $count));*/
/*                         } else {*/
/*                             $errors['err'] = sprintf(__('Unable to make %s PRIVATE'),*/
/*                                 _N('selected category', 'selected categories', $count));*/
/*                         }*/
/*                         break;*/
/*                     case 'delete':*/
/*                         $i=0;*/
/*                         foreach($_POST['ids'] as $k=>$v) {*/
/*                             if(($c=Category::lookup($v)) && $c->delete())*/
/*                                 $i++;*/
/*                         }*/
/* */
/*                         if($i==$count)*/
/*                             $msg = sprintf(__('Successfully deleted %s'),*/
/*                                 _N('selected category', 'selected categories', $count));*/
/*                         elseif($i>0)*/
/*                             $warn = sprintf(__('%1$d of %2$d %3$s deleted'), $i, $count,*/
/*                                 _N('selected category', 'selected categories', $count));*/
/*                         elseif(!$errors['err'])*/
/*                             $errors['err'] = sprintf(__('Unable to delete %s'),*/
/*                                 _N('selected category', 'selected categories', $count));*/
/*                         break;*/
/*                     default:*/
/*                         $errors['err']=__('Unknown action - get technical help.');*/
/*                 }*/
/*             }*/
/*             break;*/
/*         default:*/
/*             $errors['err']=__('Unknown action');*/
/*             break;*/
/*     }*/
/* }*/
/* */
/* $page='categories.inc.php';*/
/* $tip_namespace = 'knowledgebase.category';*/
/* if($category || ($_REQUEST['a'] && !strcasecmp($_REQUEST['a'],'add'))) {*/
/*     $page='category.inc.php';*/
/* }*/
/* */
/* $nav->setTabActive('kbase');*/
/* $ost->addExtraHeader('<meta name="tip-namespace" content="' . $tip_namespace . '" />',*/
/*     "$('#content').data('tipNamespace', '".$tip_namespace."');");*/
/* require(STAFFINC_DIR.'header.inc.php');*/
/* require(STAFFINC_DIR.$page);*/
/* include(STAFFINC_DIR.'footer.inc.php');*/
/* ?>*/
/* */
