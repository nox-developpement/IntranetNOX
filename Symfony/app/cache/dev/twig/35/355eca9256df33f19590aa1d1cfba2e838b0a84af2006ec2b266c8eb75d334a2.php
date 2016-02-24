<?php

/* support/scp/teams.php */
class __TwigTemplate_97de2713c1fd7c5d8ba13f1b519062844a48f9d508e583e895a093161f79292f extends Twig_Template
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
        $__internal_ad95300ac08d4da02648c34e8518d30b224069fd0b838b35cba82f86502fe023 = $this->env->getExtension("native_profiler");
        $__internal_ad95300ac08d4da02648c34e8518d30b224069fd0b838b35cba82f86502fe023->enter($__internal_ad95300ac08d4da02648c34e8518d30b224069fd0b838b35cba82f86502fe023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/scp/teams.php"));

        // line 1
        echo "<?php
/*********************************************************************
    teams.php

    Evertything about teams

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require('admin.inc.php');

\$team=null;
if(\$_REQUEST['id'] && !(\$team=Team::lookup(\$_REQUEST['id'])))
    \$errors['err']=sprintf(__('%s: Unknown or invalid'), __('team'));

if(\$_POST){
    switch(strtolower(\$_POST['do'])){
        case 'update':
            if(!\$team){
                \$errors['err']=sprintf(__('%s: Unknown or invalid'), __('team'));
            }elseif(\$team->update(\$_POST,\$errors)){
                \$msg=sprintf(__('Successfully updated %s'),
                    __('this team'));
            }elseif(!\$errors['err']){
                \$errors['err']=sprintf(__('Unable to update %s. Correct any error(s) below and try again.'),
                    __('this team'));
            }
            break;
        case 'create':
            if((\$id=Team::create(\$_POST,\$errors))){
                \$msg=sprintf(__('Successfully added %s'),Format::htmlchars(\$_POST['team']));
                \$_REQUEST['a']=null;
            }elseif(!\$errors['err']){
                \$errors['err']=sprintf(__('Unable to add %s. Correct error(s) below and try again.'),
                    __('this team'));
            }
            break;
        case 'mass_process':
            if(!\$_POST['ids'] || !is_array(\$_POST['ids']) || !count(\$_POST['ids'])) {
                \$errors['err']=sprintf(__('You must select at least %s.'), __('one team'));
            } else {
                \$count=count(\$_POST['ids']);
                switch(strtolower(\$_POST['a'])) {
                    case 'enable':
                        \$sql='UPDATE '.TEAM_TABLE.' SET isenabled=1 '
                            .' WHERE team_id IN ('.implode(',', db_input(\$_POST['ids'])).')';

                        if(db_query(\$sql) && (\$num=db_affected_rows())) {
                            if(\$num==\$count)
                                \$msg = sprintf(__('Successfully activated %s'),
                                    _N('selected team', 'selected teams', \$count));
                            else
                                \$warn = sprintf(__('%1\$d of %2\$d %3\$s activated'), \$num, \$count,
                                    _N('selected team', 'selected teams', \$count));
                        } else {
                            \$errors['err'] = sprintf(__('Unable to activate %s'),
                                _N('selected team', 'selected teams', \$count));
                        }
                        break;
                    case 'disable':
                        \$sql='UPDATE '.TEAM_TABLE.' SET isenabled=0 '
                            .' WHERE team_id IN ('.implode(',', db_input(\$_POST['ids'])).')';

                        if(db_query(\$sql) && (\$num=db_affected_rows())) {
                            if(\$num==\$count)
                                \$msg = sprintf(__('Successfully disabled %s'),
                                    _N('selected team', 'selected teams', \$count));
                            else
                                \$warn = sprintf(__('%1\$d of %2\$d %3\$s disabled'), \$num, \$count,
                                    _N('selected team', 'selected teams', \$count));
                        } else {
                            \$errors['err'] = sprintf(__('Unable to disable %s'),
                                _N('selected team', 'selected teams', \$count));
                        }
                        break;
                    case 'delete':
                        foreach(\$_POST['ids'] as \$k=>\$v) {
                            if((\$t=Team::lookup(\$v)) && \$t->delete())
                                \$i++;
                        }
                        if(\$i && \$i==\$count)
                            \$msg = sprintf(__('Successfully deleted %s'),
                                _N('selected team', 'selected teams', \$count));
                        elseif(\$i>0)
                            \$warn = sprintf(__('%1\$d of %2\$d %3\$s deleted'), \$i, \$count,
                                _N('selected team', 'selected teams', \$count));
                        elseif(!\$errors['err'])
                            \$errors['err'] = sprintf(__('Unable to delete %s'),
                                _N('selected team', 'selected teams', \$count));
                        break;
                    default:
                        \$errors['err'] = __('Unknown action - get technical help.');
                }
            }
            break;
        default:
            \$errors['err']=__('Unknown action');
            break;
    }
}

\$page='teams.inc.php';
\$tip_namespace = 'staff.team';
if(\$team || (\$_REQUEST['a'] && !strcasecmp(\$_REQUEST['a'],'add'))) {
    \$page='team.inc.php';
}

\$nav->setTabActive('staff');
\$ost->addExtraHeader('<meta name=\"tip-namespace\" content=\"' . \$tip_namespace . '\" />',
    \"\$('#content').data('tipNamespace', '\".\$tip_namespace.\"');\");
require(STAFFINC_DIR.'header.inc.php');
require(STAFFINC_DIR.\$page);
include(STAFFINC_DIR.'footer.inc.php');
?>
";
        
        $__internal_ad95300ac08d4da02648c34e8518d30b224069fd0b838b35cba82f86502fe023->leave($__internal_ad95300ac08d4da02648c34e8518d30b224069fd0b838b35cba82f86502fe023_prof);

    }

    public function getTemplateName()
    {
        return "support/scp/teams.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     teams.php*/
/* */
/*     Evertything about teams*/
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
/* $team=null;*/
/* if($_REQUEST['id'] && !($team=Team::lookup($_REQUEST['id'])))*/
/*     $errors['err']=sprintf(__('%s: Unknown or invalid'), __('team'));*/
/* */
/* if($_POST){*/
/*     switch(strtolower($_POST['do'])){*/
/*         case 'update':*/
/*             if(!$team){*/
/*                 $errors['err']=sprintf(__('%s: Unknown or invalid'), __('team'));*/
/*             }elseif($team->update($_POST,$errors)){*/
/*                 $msg=sprintf(__('Successfully updated %s'),*/
/*                     __('this team'));*/
/*             }elseif(!$errors['err']){*/
/*                 $errors['err']=sprintf(__('Unable to update %s. Correct any error(s) below and try again.'),*/
/*                     __('this team'));*/
/*             }*/
/*             break;*/
/*         case 'create':*/
/*             if(($id=Team::create($_POST,$errors))){*/
/*                 $msg=sprintf(__('Successfully added %s'),Format::htmlchars($_POST['team']));*/
/*                 $_REQUEST['a']=null;*/
/*             }elseif(!$errors['err']){*/
/*                 $errors['err']=sprintf(__('Unable to add %s. Correct error(s) below and try again.'),*/
/*                     __('this team'));*/
/*             }*/
/*             break;*/
/*         case 'mass_process':*/
/*             if(!$_POST['ids'] || !is_array($_POST['ids']) || !count($_POST['ids'])) {*/
/*                 $errors['err']=sprintf(__('You must select at least %s.'), __('one team'));*/
/*             } else {*/
/*                 $count=count($_POST['ids']);*/
/*                 switch(strtolower($_POST['a'])) {*/
/*                     case 'enable':*/
/*                         $sql='UPDATE '.TEAM_TABLE.' SET isenabled=1 '*/
/*                             .' WHERE team_id IN ('.implode(',', db_input($_POST['ids'])).')';*/
/* */
/*                         if(db_query($sql) && ($num=db_affected_rows())) {*/
/*                             if($num==$count)*/
/*                                 $msg = sprintf(__('Successfully activated %s'),*/
/*                                     _N('selected team', 'selected teams', $count));*/
/*                             else*/
/*                                 $warn = sprintf(__('%1$d of %2$d %3$s activated'), $num, $count,*/
/*                                     _N('selected team', 'selected teams', $count));*/
/*                         } else {*/
/*                             $errors['err'] = sprintf(__('Unable to activate %s'),*/
/*                                 _N('selected team', 'selected teams', $count));*/
/*                         }*/
/*                         break;*/
/*                     case 'disable':*/
/*                         $sql='UPDATE '.TEAM_TABLE.' SET isenabled=0 '*/
/*                             .' WHERE team_id IN ('.implode(',', db_input($_POST['ids'])).')';*/
/* */
/*                         if(db_query($sql) && ($num=db_affected_rows())) {*/
/*                             if($num==$count)*/
/*                                 $msg = sprintf(__('Successfully disabled %s'),*/
/*                                     _N('selected team', 'selected teams', $count));*/
/*                             else*/
/*                                 $warn = sprintf(__('%1$d of %2$d %3$s disabled'), $num, $count,*/
/*                                     _N('selected team', 'selected teams', $count));*/
/*                         } else {*/
/*                             $errors['err'] = sprintf(__('Unable to disable %s'),*/
/*                                 _N('selected team', 'selected teams', $count));*/
/*                         }*/
/*                         break;*/
/*                     case 'delete':*/
/*                         foreach($_POST['ids'] as $k=>$v) {*/
/*                             if(($t=Team::lookup($v)) && $t->delete())*/
/*                                 $i++;*/
/*                         }*/
/*                         if($i && $i==$count)*/
/*                             $msg = sprintf(__('Successfully deleted %s'),*/
/*                                 _N('selected team', 'selected teams', $count));*/
/*                         elseif($i>0)*/
/*                             $warn = sprintf(__('%1$d of %2$d %3$s deleted'), $i, $count,*/
/*                                 _N('selected team', 'selected teams', $count));*/
/*                         elseif(!$errors['err'])*/
/*                             $errors['err'] = sprintf(__('Unable to delete %s'),*/
/*                                 _N('selected team', 'selected teams', $count));*/
/*                         break;*/
/*                     default:*/
/*                         $errors['err'] = __('Unknown action - get technical help.');*/
/*                 }*/
/*             }*/
/*             break;*/
/*         default:*/
/*             $errors['err']=__('Unknown action');*/
/*             break;*/
/*     }*/
/* }*/
/* */
/* $page='teams.inc.php';*/
/* $tip_namespace = 'staff.team';*/
/* if($team || ($_REQUEST['a'] && !strcasecmp($_REQUEST['a'],'add'))) {*/
/*     $page='team.inc.php';*/
/* }*/
/* */
/* $nav->setTabActive('staff');*/
/* $ost->addExtraHeader('<meta name="tip-namespace" content="' . $tip_namespace . '" />',*/
/*     "$('#content').data('tipNamespace', '".$tip_namespace."');");*/
/* require(STAFFINC_DIR.'header.inc.php');*/
/* require(STAFFINC_DIR.$page);*/
/* include(STAFFINC_DIR.'footer.inc.php');*/
/* ?>*/
/* */
