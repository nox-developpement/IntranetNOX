<?php

/* support/include/upgrader/streams/core/c00511c7-7be60a84.task.php */
class __TwigTemplate_47a3a05648af85ed1fc08f9522d95167850b0ac9097337608f8e8628315b3763 extends Twig_Template
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

class MigrateDbSession extends MigrationTask {
    var \$description = \"Migrate to database-backed sessions\";

    function run() {
        # How about 'dis for a hack?
        \$session = new DbSessionBackend();
        \$session->write(session_id(), session_encode());
    }
}

return 'MigrateDbSession';
?>
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/c00511c7-7be60a84.task.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* require_once INCLUDE_DIR.'class.migrater.php';*/
/* */
/* class MigrateDbSession extends MigrationTask {*/
/*     var $description = "Migrate to database-backed sessions";*/
/* */
/*     function run() {*/
/*         # How about 'dis for a hack?*/
/*         $session = new DbSessionBackend();*/
/*         $session->write(session_id(), session_encode());*/
/*     }*/
/* }*/
/* */
/* return 'MigrateDbSession';*/
/* ?>*/
/* */
