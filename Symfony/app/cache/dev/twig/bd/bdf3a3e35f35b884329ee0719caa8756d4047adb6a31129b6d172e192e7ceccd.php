<?php

/* support/include/upgrader/streams/core/f1ccd3bb-f5692e24.task.php */
class __TwigTemplate_12c2290ca3ea78b1d5ac3fa509805f4f58066405ed323c5d094d84e2a1dec867 extends Twig_Template
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
        $__internal_cc2765df213f22b8bdbcaaf1263a4795f4e949a3dda144598dd47a2e7255c5df = $this->env->getExtension("native_profiler");
        $__internal_cc2765df213f22b8bdbcaaf1263a4795f4e949a3dda144598dd47a2e7255c5df->enter($__internal_cc2765df213f22b8bdbcaaf1263a4795f4e949a3dda144598dd47a2e7255c5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/f1ccd3bb-f5692e24.task.php"));

        // line 1
        echo "<?php

/*
 * Drops the `thread_id` primary key on the ticket_email_info table if it
 * exists
 */

class DropTicketEmailInfoPk extends MigrationTask {
    var \$description = \"Reticulating splines\";

    function run(\$max_time) {
        \$sql = 'SELECT `INDEX_NAME` FROM information_schema.statistics
          WHERE table_schema = '.db_input(DBNAME)
           .' AND table_name = '.db_input(TICKET_EMAIL_INFO_TABLE)
           .' AND column_name = '.db_input('thread_id');
        if (\$name = db_result(db_query(\$sql))) {
            if (\$name == 'PRIMARY') {
                db_query('ALTER TABLE `'.TICKET_EMAIL_INFO_TABLE
                    .'` DROP PRIMARY KEY');
            }
        }
    }
}

return 'DropTicketEmailInfoPk';

?>
";
        
        $__internal_cc2765df213f22b8bdbcaaf1263a4795f4e949a3dda144598dd47a2e7255c5df->leave($__internal_cc2765df213f22b8bdbcaaf1263a4795f4e949a3dda144598dd47a2e7255c5df_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/f1ccd3bb-f5692e24.task.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* */
/* /**/
/*  * Drops the `thread_id` primary key on the ticket_email_info table if it*/
/*  * exists*/
/*  *//* */
/* */
/* class DropTicketEmailInfoPk extends MigrationTask {*/
/*     var $description = "Reticulating splines";*/
/* */
/*     function run($max_time) {*/
/*         $sql = 'SELECT `INDEX_NAME` FROM information_schema.statistics*/
/*           WHERE table_schema = '.db_input(DBNAME)*/
/*            .' AND table_name = '.db_input(TICKET_EMAIL_INFO_TABLE)*/
/*            .' AND column_name = '.db_input('thread_id');*/
/*         if ($name = db_result(db_query($sql))) {*/
/*             if ($name == 'PRIMARY') {*/
/*                 db_query('ALTER TABLE `'.TICKET_EMAIL_INFO_TABLE*/
/*                     .'` DROP PRIMARY KEY');*/
/*             }*/
/*         }*/
/*     }*/
/* }*/
/* */
/* return 'DropTicketEmailInfoPk';*/
/* */
/* ?>*/
/* */
