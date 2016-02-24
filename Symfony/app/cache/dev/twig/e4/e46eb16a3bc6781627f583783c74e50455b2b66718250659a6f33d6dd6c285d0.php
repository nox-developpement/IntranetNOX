<?php

/* support/scp/plugins.php */
class __TwigTemplate_538a76ad558155837e982a1e00c1333a5724534cd2ab721eb2236b941959dbff extends Twig_Template
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
        $__internal_1a47908086db5b2572e04b4932d15fa9d387927c3fdaf5b4bf2b201b22a1beff = $this->env->getExtension("native_profiler");
        $__internal_1a47908086db5b2572e04b4932d15fa9d387927c3fdaf5b4bf2b201b22a1beff->enter($__internal_1a47908086db5b2572e04b4932d15fa9d387927c3fdaf5b4bf2b201b22a1beff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/scp/plugins.php"));

        // line 1
        echo "<?php
require('admin.inc.php');
require_once(INCLUDE_DIR.\"/class.plugin.php\");

if(\$_REQUEST['id'] && !(\$plugin=Plugin::lookup(\$_REQUEST['id'])))
    \$errors['err']=sprintf(__('%s: Unknown or invalid ID.'),
        __('plugin'));

if(\$_POST) {
    switch(strtolower(\$_POST['do'])) {
    case 'update':
        if (\$plugin) {
            \$plugin->getConfig()->commit(\$errors);
        }
        break;
    case 'mass_process':
        if(!\$_POST['ids'] || !is_array(\$_POST['ids']) || !count(\$_POST['ids'])) {
            \$errors['err'] = sprintf(__('You must select at least %s'),
                __('one plugin'));
        } else {
            \$count = count(\$_POST['ids']);
            switch(strtolower(\$_POST['a'])) {
            case 'enable':
                foreach (\$_POST['ids'] as \$id) {
                    if (\$p = Plugin::lookup(\$id)) {
                        \$p->enable();
                    }
                }
                break;
            case 'disable':
                foreach (\$_POST['ids'] as \$id) {
                    if (\$p = Plugin::lookup(\$id)) {
                        \$p->disable();
                    }
                }
                break;
            case 'delete':
                foreach (\$_POST['ids'] as \$id) {
                    if (\$p = Plugin::lookup(\$id)) {
                        \$p->uninstall();
                    }
                }
                break;
            }
        }
        break;
    case 'install':
        if (\$ost->plugins->install(\$_POST['install_path']))
            \$msg = sprintf(__('Successfully installed %s'),
                __('a plugin'));
        break;
    }
}

\$page = 'plugins.inc.php';
if (\$plugin)
    \$page = 'plugin.inc.php';
elseif (\$_REQUEST['a']=='add')
    \$page = 'plugin-add.inc.php';

\$nav->setTabActive('manage');
require(STAFFINC_DIR.'header.inc.php');
require(STAFFINC_DIR.\$page);
include(STAFFINC_DIR.'footer.inc.php');
?>
";
        
        $__internal_1a47908086db5b2572e04b4932d15fa9d387927c3fdaf5b4bf2b201b22a1beff->leave($__internal_1a47908086db5b2572e04b4932d15fa9d387927c3fdaf5b4bf2b201b22a1beff_prof);

    }

    public function getTemplateName()
    {
        return "support/scp/plugins.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* require('admin.inc.php');*/
/* require_once(INCLUDE_DIR."/class.plugin.php");*/
/* */
/* if($_REQUEST['id'] && !($plugin=Plugin::lookup($_REQUEST['id'])))*/
/*     $errors['err']=sprintf(__('%s: Unknown or invalid ID.'),*/
/*         __('plugin'));*/
/* */
/* if($_POST) {*/
/*     switch(strtolower($_POST['do'])) {*/
/*     case 'update':*/
/*         if ($plugin) {*/
/*             $plugin->getConfig()->commit($errors);*/
/*         }*/
/*         break;*/
/*     case 'mass_process':*/
/*         if(!$_POST['ids'] || !is_array($_POST['ids']) || !count($_POST['ids'])) {*/
/*             $errors['err'] = sprintf(__('You must select at least %s'),*/
/*                 __('one plugin'));*/
/*         } else {*/
/*             $count = count($_POST['ids']);*/
/*             switch(strtolower($_POST['a'])) {*/
/*             case 'enable':*/
/*                 foreach ($_POST['ids'] as $id) {*/
/*                     if ($p = Plugin::lookup($id)) {*/
/*                         $p->enable();*/
/*                     }*/
/*                 }*/
/*                 break;*/
/*             case 'disable':*/
/*                 foreach ($_POST['ids'] as $id) {*/
/*                     if ($p = Plugin::lookup($id)) {*/
/*                         $p->disable();*/
/*                     }*/
/*                 }*/
/*                 break;*/
/*             case 'delete':*/
/*                 foreach ($_POST['ids'] as $id) {*/
/*                     if ($p = Plugin::lookup($id)) {*/
/*                         $p->uninstall();*/
/*                     }*/
/*                 }*/
/*                 break;*/
/*             }*/
/*         }*/
/*         break;*/
/*     case 'install':*/
/*         if ($ost->plugins->install($_POST['install_path']))*/
/*             $msg = sprintf(__('Successfully installed %s'),*/
/*                 __('a plugin'));*/
/*         break;*/
/*     }*/
/* }*/
/* */
/* $page = 'plugins.inc.php';*/
/* if ($plugin)*/
/*     $page = 'plugin.inc.php';*/
/* elseif ($_REQUEST['a']=='add')*/
/*     $page = 'plugin-add.inc.php';*/
/* */
/* $nav->setTabActive('manage');*/
/* require(STAFFINC_DIR.'header.inc.php');*/
/* require(STAFFINC_DIR.$page);*/
/* include(STAFFINC_DIR.'footer.inc.php');*/
/* ?>*/
/* */
