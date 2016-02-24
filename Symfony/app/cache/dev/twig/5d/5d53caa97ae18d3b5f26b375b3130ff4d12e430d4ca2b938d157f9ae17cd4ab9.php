<?php

/* support/include/upgrader/streams/core/435c62c3-2e7531a2.task.php */
class __TwigTemplate_5236241f169ce24d45049a31757ed0868d8320eb93c3a25986995f938700bb14 extends Twig_Template
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
        $__internal_a1a2412a6c314f146562c6adc0797f839111317fb1dcdc1449ac2563405c6575 = $this->env->getExtension("native_profiler");
        $__internal_a1a2412a6c314f146562c6adc0797f839111317fb1dcdc1449ac2563405c6575->enter($__internal_a1a2412a6c314f146562c6adc0797f839111317fb1dcdc1449ac2563405c6575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/435c62c3-2e7531a2.task.php"));

        // line 1
        echo "<?php
require_once INCLUDE_DIR.'class.migrater.php';

class MigrateGroupDeptAccess extends MigrationTask {
    var \$description = \"Migrate department access for groups from v1.6\";

    function run(\$max_time) {
        \$this->setStatus(\"Migrating department access\");

        \$res = db_query('SELECT group_id, dept_access FROM '.GROUP_TABLE);
        if(!\$res || !db_num_rows(\$res))
            return false;  //No groups??

        while(list(\$groupId, \$access) = db_fetch_row(\$res)) {
            \$depts=array_filter(array_map('trim', explode(',', \$access)));
            foreach(\$depts as \$deptId) {
                \$sql='INSERT INTO '.GROUP_DEPT_TABLE
                    .' SET dept_id='.db_input(\$deptId).', group_id='.db_input(\$groupId);
                db_query(\$sql);
            }
        }
    }
}

return 'MigrateGroupDeptAccess';
?>
";
        
        $__internal_a1a2412a6c314f146562c6adc0797f839111317fb1dcdc1449ac2563405c6575->leave($__internal_a1a2412a6c314f146562c6adc0797f839111317fb1dcdc1449ac2563405c6575_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/435c62c3-2e7531a2.task.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* require_once INCLUDE_DIR.'class.migrater.php';*/
/* */
/* class MigrateGroupDeptAccess extends MigrationTask {*/
/*     var $description = "Migrate department access for groups from v1.6";*/
/* */
/*     function run($max_time) {*/
/*         $this->setStatus("Migrating department access");*/
/* */
/*         $res = db_query('SELECT group_id, dept_access FROM '.GROUP_TABLE);*/
/*         if(!$res || !db_num_rows($res))*/
/*             return false;  //No groups??*/
/* */
/*         while(list($groupId, $access) = db_fetch_row($res)) {*/
/*             $depts=array_filter(array_map('trim', explode(',', $access)));*/
/*             foreach($depts as $deptId) {*/
/*                 $sql='INSERT INTO '.GROUP_DEPT_TABLE*/
/*                     .' SET dept_id='.db_input($deptId).', group_id='.db_input($groupId);*/
/*                 db_query($sql);*/
/*             }*/
/*         }*/
/*     }*/
/* }*/
/* */
/* return 'MigrateGroupDeptAccess';*/
/* ?>*/
/* */
