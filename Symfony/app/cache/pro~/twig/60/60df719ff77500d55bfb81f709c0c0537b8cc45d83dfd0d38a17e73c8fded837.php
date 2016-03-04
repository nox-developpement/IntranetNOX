<?php

/* support/include/api.cron.php */
class __TwigTemplate_1cd69e66370c05d42d84fca4295a5afb818d71cba972ba7a0816bca9ee1c4883 extends Twig_Template
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
}
/* <?php*/
/* */
/* include_once INCLUDE_DIR.'class.cron.php';*/
/* */
/* class CronApiController extends ApiController {*/
/* */
/*     function execute() {*/
/* */
/*         if(!($key=$this->requireApiKey()) || !$key->canExecuteCron())*/
/*             return $this->exerr(401, __('API key not authorized'));*/
/* */
/*         $this->run();*/
/*     }*/
/* */
/*     /* private *//* */
/*     function run() {*/
/*         global $ost;*/
/* */
/*         Cron::run();*/
/*        */
/*         $ost->logDebug(__('Cron Job'),__('Cron job executed').' ['.$_SERVER['REMOTE_ADDR'].']');*/
/*         $this->response(200,'Completed');*/
/*     }*/
/* }*/
/* */
/* class LocalCronApiController extends CronApiController {*/
/* */
/*     function response($code, $resp) {*/
/* */
/*         if($code == 200) //Success - exit silently.*/
/*             exit(0);*/
/*         */
/*         //On error echo the response (error)*/
/*         echo $resp;*/
/*         exit(1);*/
/*     }*/
/*         */
/*     function call() {*/
/*         $cron = new LocalCronApiController();*/
/*         $cron->run();*/
/*     }*/
/* }*/
/* ?>*/
/* */
