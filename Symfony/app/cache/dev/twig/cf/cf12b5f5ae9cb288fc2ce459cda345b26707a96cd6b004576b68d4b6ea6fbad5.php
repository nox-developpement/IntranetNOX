<?php

/* support/include/upgrader/streams/core/8f99b8bf-03ff59bf.task.php */
class __TwigTemplate_f7e967cd2b64f65fd16bcd8bc34b076e1866d8d2b70bc2e68326377220fe2a04 extends Twig_Template
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
        $__internal_a1f30b732bb7bc44673b07b08b117ac754a2b967b497515b60acf97bbd322aa5 = $this->env->getExtension("native_profiler");
        $__internal_a1f30b732bb7bc44673b07b08b117ac754a2b967b497515b60acf97bbd322aa5->enter($__internal_a1f30b732bb7bc44673b07b08b117ac754a2b967b497515b60acf97bbd322aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/8f99b8bf-03ff59bf.task.php"));

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
        
        $__internal_a1f30b732bb7bc44673b07b08b117ac754a2b967b497515b60acf97bbd322aa5->leave($__internal_a1f30b732bb7bc44673b07b08b117ac754a2b967b497515b60acf97bbd322aa5_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/8f99b8bf-03ff59bf.task.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
