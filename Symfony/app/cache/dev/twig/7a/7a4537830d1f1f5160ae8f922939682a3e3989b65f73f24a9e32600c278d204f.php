<?php

/* support/include/upgrader/streams/core/98ae1ed2-e342f869.task.php */
class __TwigTemplate_d3a08297b82ff004755329791ec6104d6548708c3f8568795fcb5ac8df6d5396 extends Twig_Template
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
        $__internal_3b8f7bb5959baaeb9562ea5fb91e713894ab1a91ac0c62afb05236a267106c8d = $this->env->getExtension("native_profiler");
        $__internal_3b8f7bb5959baaeb9562ea5fb91e713894ab1a91ac0c62afb05236a267106c8d->enter($__internal_3b8f7bb5959baaeb9562ea5fb91e713894ab1a91ac0c62afb05236a267106c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/98ae1ed2-e342f869.task.php"));

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
        
        $__internal_3b8f7bb5959baaeb9562ea5fb91e713894ab1a91ac0c62afb05236a267106c8d->leave($__internal_3b8f7bb5959baaeb9562ea5fb91e713894ab1a91ac0c62afb05236a267106c8d_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/98ae1ed2-e342f869.task.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* require_once INCLUDE_DIR.'class.migrater.php';*/
/* */
/* class APIKeyMigrater extends MigrationTask {*/
/*     var $description = "Migrating v1.6 API keys";*/
/* */
/*     function run() {*/
/*         $res = db_query('SELECT api_whitelist, api_key FROM '.CONFIG_TABLE.' WHERE id=1');*/
/*         if(!$res || !db_num_rows($res))*/
/*             return 0;  //Reporting success.*/
/* */
/*         list($whitelist, $key) = db_fetch_row($res);*/
/* */
/*         $ips=array_filter(array_map('trim', explode(',', $whitelist)));*/
/*         foreach($ips as $ip) {*/
/*             $sql='INSERT INTO '.API_KEY_TABLE.' SET created=NOW(), updated=NOW(), isactive=1 '*/
/*                 .',ipaddr='.db_input($ip)*/
/*                 .',apikey='.db_input(strtoupper(md5($ip.md5($key))));*/
/*             db_query($sql);*/
/*         }*/
/*     }*/
/* }*/
/* */
/* return 'APIKeyMigrater';*/
/* ?>*/
/* */
