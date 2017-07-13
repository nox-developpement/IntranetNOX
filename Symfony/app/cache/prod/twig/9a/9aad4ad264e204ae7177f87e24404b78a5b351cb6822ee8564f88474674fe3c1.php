<?php

/* support/include/upgrader/streams/core/8f99b8bf-03ff59bf.task.php */
class __TwigTemplate_f4639a2ac22e78906ac0233d656c8b6288a0f2101c93a81b0961cafcdde3ebd7 extends Twig_Template
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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/include/upgrader/streams/core/8f99b8bf-03ff59bf.task.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\8f99b8bf-03ff59bf.task.php");
    }
}
