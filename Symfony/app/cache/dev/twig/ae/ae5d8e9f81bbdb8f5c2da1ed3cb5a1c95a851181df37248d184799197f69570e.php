<?php

/* support/include/upgrader/streams/core/c00511c7-7be60a84.task.php */
class __TwigTemplate_54f523260ba9b5fc9e9b006c8e8dc95cd4a972ca20d79662c2d1a56cfc6c232e extends Twig_Template
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
        $__internal_43148229833fd8c10773c16cf6ffe6788da2482c856f9651b98c2379623409a3 = $this->env->getExtension("native_profiler");
        $__internal_43148229833fd8c10773c16cf6ffe6788da2482c856f9651b98c2379623409a3->enter($__internal_43148229833fd8c10773c16cf6ffe6788da2482c856f9651b98c2379623409a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/c00511c7-7be60a84.task.php"));

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
        
        $__internal_43148229833fd8c10773c16cf6ffe6788da2482c856f9651b98c2379623409a3->leave($__internal_43148229833fd8c10773c16cf6ffe6788da2482c856f9651b98c2379623409a3_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/c00511c7-7be60a84.task.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
