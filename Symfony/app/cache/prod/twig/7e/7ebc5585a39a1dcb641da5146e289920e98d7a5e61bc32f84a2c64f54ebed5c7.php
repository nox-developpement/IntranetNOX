<?php

/* support/include/upgrader/streams/core/435c62c3-2e7531a2.task.php */
class __TwigTemplate_2a62d01dd0a780265a82883c68b1dff82db00aa986fe45661778cba2e7bb8294 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/435c62c3-2e7531a2.task.php";
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
        return new Twig_Source("", "support/include/upgrader/streams/core/435c62c3-2e7531a2.task.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\435c62c3-2e7531a2.task.php");
    }
}
