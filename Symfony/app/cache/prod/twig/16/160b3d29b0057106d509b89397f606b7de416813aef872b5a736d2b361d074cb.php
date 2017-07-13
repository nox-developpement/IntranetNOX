<?php

/* support/include/upgrader/streams/core/98ae1ed2-e342f869.task.php */
class __TwigTemplate_d7a93a92dc5c4d4b3f2d959f82eac241a6cb10b1ee106090f382c9d01be59229 extends Twig_Template
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

class APIKeyMigrater extends MigrationTask {
    var \$description = \"Migrating v1.6 API keys\";

    function run() {
        \$res = db_query('SELECT api_whitelist, api_key FROM '.CONFIG_TABLE.' WHERE id=1');
        if(!\$res || !db_num_rows(\$res))
            return 0;  //Reporting success.

        list(\$whitelist, \$key) = db_fetch_row(\$res);

        \$ips=array_filter(array_map('trim', explode(',', \$whitelist)));
        foreach(\$ips as \$ip) {
            \$sql='INSERT INTO '.API_KEY_TABLE.' SET created=NOW(), updated=NOW(), isactive=1 '
                .',ipaddr='.db_input(\$ip)
                .',apikey='.db_input(strtoupper(md5(\$ip.md5(\$key))));
            db_query(\$sql);
        }
    }
}

return 'APIKeyMigrater';
?>
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/98ae1ed2-e342f869.task.php";
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
        return new Twig_Source("", "support/include/upgrader/streams/core/98ae1ed2-e342f869.task.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\98ae1ed2-e342f869.task.php");
    }
}
