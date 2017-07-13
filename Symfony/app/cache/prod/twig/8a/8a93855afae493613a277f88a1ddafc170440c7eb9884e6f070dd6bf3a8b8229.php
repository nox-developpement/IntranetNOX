<?php

/* support/include/upgrader/streams/core/f1ccd3bb-f5692e24.task.php */
class __TwigTemplate_0f6762fa3117fcbf3a005319760836874f1cb59cef1b69d43e3ee5c08896f7f2 extends Twig_Template
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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/include/upgrader/streams/core/f1ccd3bb-f5692e24.task.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\f1ccd3bb-f5692e24.task.php");
    }
}
