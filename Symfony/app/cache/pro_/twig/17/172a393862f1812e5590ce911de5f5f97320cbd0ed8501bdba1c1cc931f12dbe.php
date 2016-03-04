<?php

/* support/include/upgrader/streams/core/f1ccd3bb-f5692e24.task.php */
class __TwigTemplate_d8ef0984901dba5332a293a0c818d82142f0d50a161f99b2838f44877753a13c extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/f1ccd3bb-f5692e24.task.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
