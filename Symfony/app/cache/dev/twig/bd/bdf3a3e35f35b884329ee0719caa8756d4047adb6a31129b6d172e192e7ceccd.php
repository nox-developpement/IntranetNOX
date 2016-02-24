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
        $__internal_11de7ce8f58d680221fdbd3a110ef7d114feebd72eb880f293033b2e225dc107 = $this->env->getExtension("native_profiler");
        $__internal_11de7ce8f58d680221fdbd3a110ef7d114feebd72eb880f293033b2e225dc107->enter($__internal_11de7ce8f58d680221fdbd3a110ef7d114feebd72eb880f293033b2e225dc107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/f1ccd3bb-f5692e24.task.php"));

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
        
        $__internal_11de7ce8f58d680221fdbd3a110ef7d114feebd72eb880f293033b2e225dc107->leave($__internal_11de7ce8f58d680221fdbd3a110ef7d114feebd72eb880f293033b2e225dc107_prof);

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
