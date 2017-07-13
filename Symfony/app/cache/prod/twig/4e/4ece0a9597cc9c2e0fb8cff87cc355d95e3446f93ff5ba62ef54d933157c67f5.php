<?php

/* support/include/api.cron.php */
class __TwigTemplate_5e346c9fb6e3c55d5e40230341d56a6b2b32dc01d62ed668d70ceb82c0c552e1 extends Twig_Template
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

include_once INCLUDE_DIR.'class.cron.php';

class CronApiController extends ApiController {

    function execute() {

        if(!(\$key=\$this->requireApiKey()) || !\$key->canExecuteCron())
            return \$this->exerr(401, __('API key not authorized'));

        \$this->run();
    }

    /* private */
    function run() {
        global \$ost;

        Cron::run();
       
        \$ost->logDebug(__('Cron Job'),__('Cron job executed').' ['.\$_SERVER['REMOTE_ADDR'].']');
        \$this->response(200,'Completed');
    }
}

class LocalCronApiController extends CronApiController {

    function response(\$code, \$resp) {

        if(\$code == 200) //Success - exit silently.
            exit(0);
        
        //On error echo the response (error)
        echo \$resp;
        exit(1);
    }
        
    function call() {
        \$cron = new LocalCronApiController();
        \$cron->run();
    }
}
?>
";
    }

    public function getTemplateName()
    {
        return "support/include/api.cron.php";
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
        return new Twig_Source("", "support/include/api.cron.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\api.cron.php");
    }
}
