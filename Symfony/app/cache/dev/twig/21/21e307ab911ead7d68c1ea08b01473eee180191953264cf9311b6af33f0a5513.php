<?php

/* support/include/api.cron.php */
class __TwigTemplate_b47a0c7d6a0f14b1709b8b5573c049e23f5faaae761d3f3735a6c2e7b55509c1 extends Twig_Template
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
        $__internal_065de9548b6efbeedbee4226b418ba449afdd43eb77e39f5b46d8b5493c23e9a = $this->env->getExtension("native_profiler");
        $__internal_065de9548b6efbeedbee4226b418ba449afdd43eb77e39f5b46d8b5493c23e9a->enter($__internal_065de9548b6efbeedbee4226b418ba449afdd43eb77e39f5b46d8b5493c23e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/api.cron.php"));

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
        
        $__internal_065de9548b6efbeedbee4226b418ba449afdd43eb77e39f5b46d8b5493c23e9a->leave($__internal_065de9548b6efbeedbee4226b418ba449afdd43eb77e39f5b46d8b5493c23e9a_prof);

    }

    public function getTemplateName()
    {
        return "support/include/api.cron.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
