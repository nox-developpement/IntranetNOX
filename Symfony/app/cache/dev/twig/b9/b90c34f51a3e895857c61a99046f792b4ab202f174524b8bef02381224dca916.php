<?php

/* support/scp/logs.php */
class __TwigTemplate_7012f9268c67e43e0ac3d31e59e148711a8a9802f6be434732fdc58d09ee663b extends Twig_Template
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
        $__internal_20f756ad6586db1c99a7138de2614101a095b8218ba017fa18fd8a638f1165eb = $this->env->getExtension("native_profiler");
        $__internal_20f756ad6586db1c99a7138de2614101a095b8218ba017fa18fd8a638f1165eb->enter($__internal_20f756ad6586db1c99a7138de2614101a095b8218ba017fa18fd8a638f1165eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/scp/logs.php"));

        // line 1
        echo "<?php
/*********************************************************************
    logs.php

    System Logs

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require('admin.inc.php');

if(\$_POST){
    switch(strtolower(\$_POST['do'])){
        case 'mass_process':
            if(!\$_POST['ids'] || !is_array(\$_POST['ids']) || !count(\$_POST['ids'])) {
                \$errors['err'] = sprintf(__('You must select at least %s'),
                    __('one log entry'));
            } else {
                \$count=count(\$_POST['ids']);
                if(\$_POST['a'] && !strcasecmp(\$_POST['a'], 'delete')) {

                    \$sql='DELETE FROM '.SYSLOG_TABLE
                        .' WHERE log_id IN ('.implode(',', db_input(\$_POST['ids'])).')';
                    if(db_query(\$sql) && (\$num=db_affected_rows())){
                        if(\$num==\$count)
                            \$msg=sprintf(__('Successfully deleted %s'),
                                _N('selected log entry', 'selected log entries', \$count));
                        else
                            \$warn=sprintf(__('%1\$d of %2\$d %3\$s deleted'), \$num, \$count,
                                _N('selected log entry', 'selected log entries', \$count));
                    } elseif(!\$errors['err'])
                        \$errors['err']=sprintf(__('Unable to delete %s'),
                            _N('selected log entry', 'selected log entries', \$count));
                } else {
                    \$errors['err']=__('Unknown action - get technical help.');
                }
            }
            break;
        default:
            \$errors['err']=__('Unknown action');
            break;
    }
}

\$page='syslogs.inc.php';
\$nav->setTabActive('dashboard');
\$ost->addExtraHeader('<meta name=\"tip-namespace\" content=\"dashboard.system_logs\" />',
    \"\$('#content').data('tipNamespace', 'dashboard.system_logs');\");
require(STAFFINC_DIR.'header.inc.php');
require(STAFFINC_DIR.\$page);
include(STAFFINC_DIR.'footer.inc.php');
?>
";
        
        $__internal_20f756ad6586db1c99a7138de2614101a095b8218ba017fa18fd8a638f1165eb->leave($__internal_20f756ad6586db1c99a7138de2614101a095b8218ba017fa18fd8a638f1165eb_prof);

    }

    public function getTemplateName()
    {
        return "support/scp/logs.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     logs.php*/
/* */
/*     System Logs*/
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
/* require('admin.inc.php');*/
/* */
/* if($_POST){*/
/*     switch(strtolower($_POST['do'])){*/
/*         case 'mass_process':*/
/*             if(!$_POST['ids'] || !is_array($_POST['ids']) || !count($_POST['ids'])) {*/
/*                 $errors['err'] = sprintf(__('You must select at least %s'),*/
/*                     __('one log entry'));*/
/*             } else {*/
/*                 $count=count($_POST['ids']);*/
/*                 if($_POST['a'] && !strcasecmp($_POST['a'], 'delete')) {*/
/* */
/*                     $sql='DELETE FROM '.SYSLOG_TABLE*/
/*                         .' WHERE log_id IN ('.implode(',', db_input($_POST['ids'])).')';*/
/*                     if(db_query($sql) && ($num=db_affected_rows())){*/
/*                         if($num==$count)*/
/*                             $msg=sprintf(__('Successfully deleted %s'),*/
/*                                 _N('selected log entry', 'selected log entries', $count));*/
/*                         else*/
/*                             $warn=sprintf(__('%1$d of %2$d %3$s deleted'), $num, $count,*/
/*                                 _N('selected log entry', 'selected log entries', $count));*/
/*                     } elseif(!$errors['err'])*/
/*                         $errors['err']=sprintf(__('Unable to delete %s'),*/
/*                             _N('selected log entry', 'selected log entries', $count));*/
/*                 } else {*/
/*                     $errors['err']=__('Unknown action - get technical help.');*/
/*                 }*/
/*             }*/
/*             break;*/
/*         default:*/
/*             $errors['err']=__('Unknown action');*/
/*             break;*/
/*     }*/
/* }*/
/* */
/* $page='syslogs.inc.php';*/
/* $nav->setTabActive('dashboard');*/
/* $ost->addExtraHeader('<meta name="tip-namespace" content="dashboard.system_logs" />',*/
/*     "$('#content').data('tipNamespace', 'dashboard.system_logs');");*/
/* require(STAFFINC_DIR.'header.inc.php');*/
/* require(STAFFINC_DIR.$page);*/
/* include(STAFFINC_DIR.'footer.inc.php');*/
/* ?>*/
/* */
