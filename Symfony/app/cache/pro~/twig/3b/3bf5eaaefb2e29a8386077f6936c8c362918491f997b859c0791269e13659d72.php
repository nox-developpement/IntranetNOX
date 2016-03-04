<?php

/* support/include/upgrader/streams/core/8f99b8bf-03ff59bf.task.php */
class __TwigTemplate_2609dbccd2b7d617144c8658fcb128efe7e5ff0b6fd5f7e4a7e48f722b2c3a4c extends Twig_Template
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
 * Loads the initial sequence from the inital data files
 */

class SequenceLoader extends MigrationTask {
    var \$description = \"Loading initial data for sequences\";

    function run(\$max_time) {
        global \$cfg;

        \$i18n = new Internationalization(\$cfg->get('system_language', 'en_US'));
        \$sequences = \$i18n->getTemplate('sequence.yaml')->getData();
        foreach (\$sequences as \$s) {
            Sequence::create(\$s)->save();
        }
        db_query('UPDATE '.SEQUENCE_TABLE.' SET `next`= '
            .'(SELECT MAX(ticket_id)+1 FROM '.TICKET_TABLE.') '
            .'WHERE `id`=1');

        require_once(INCLUDE_DIR . 'class.list.php');

        \$lists = \$i18n->getTemplate('list.yaml')->getData();
        foreach (\$lists as \$l) {
            DynamicList::create(\$l);
        }

        \$statuses = \$i18n->getTemplate('ticket_status.yaml')->getData();
        foreach (\$statuses as \$s) {
            TicketStatus::__create(\$s);
        }

        // Initialize MYSQL search backend
        MysqlSearchBackend::__init();
    }
}

return 'SequenceLoader';

?>
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/8f99b8bf-03ff59bf.task.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* */
/* /**/
/*  * Loads the initial sequence from the inital data files*/
/*  *//* */
/* */
/* class SequenceLoader extends MigrationTask {*/
/*     var $description = "Loading initial data for sequences";*/
/* */
/*     function run($max_time) {*/
/*         global $cfg;*/
/* */
/*         $i18n = new Internationalization($cfg->get('system_language', 'en_US'));*/
/*         $sequences = $i18n->getTemplate('sequence.yaml')->getData();*/
/*         foreach ($sequences as $s) {*/
/*             Sequence::create($s)->save();*/
/*         }*/
/*         db_query('UPDATE '.SEQUENCE_TABLE.' SET `next`= '*/
/*             .'(SELECT MAX(ticket_id)+1 FROM '.TICKET_TABLE.') '*/
/*             .'WHERE `id`=1');*/
/* */
/*         require_once(INCLUDE_DIR . 'class.list.php');*/
/* */
/*         $lists = $i18n->getTemplate('list.yaml')->getData();*/
/*         foreach ($lists as $l) {*/
/*             DynamicList::create($l);*/
/*         }*/
/* */
/*         $statuses = $i18n->getTemplate('ticket_status.yaml')->getData();*/
/*         foreach ($statuses as $s) {*/
/*             TicketStatus::__create($s);*/
/*         }*/
/* */
/*         // Initialize MYSQL search backend*/
/*         MysqlSearchBackend::__init();*/
/*     }*/
/* }*/
/* */
/* return 'SequenceLoader';*/
/* */
/* ?>*/
/* */
