<?php

/* support/include/upgrader/streams/core/c00511c7-7be60a84.task.php */
class __TwigTemplate_4957f8755412ed56bcacd22695f97e5d03552e82be29c0e592c210a531621f59 extends Twig_Template
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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/include/upgrader/streams/core/c00511c7-7be60a84.task.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\c00511c7-7be60a84.task.php");
    }
}
