<?php

/* support/include/upgrader/streams/core/61c9d5d7-6de40a4d.task.php */
class __TwigTemplate_a43e82a45a8d4b72c40dbbd032596f1ad51d5938dc740fcf8df80899d5ca6250 extends Twig_Template
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
        $__internal_546c728b148770580f7e995d176ab68b9ec6d3f722f7b61c82dc32a7a5e24b8e = $this->env->getExtension("native_profiler");
        $__internal_546c728b148770580f7e995d176ab68b9ec6d3f722f7b61c82dc32a7a5e24b8e->enter($__internal_546c728b148770580f7e995d176ab68b9ec6d3f722f7b61c82dc32a7a5e24b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/61c9d5d7-6de40a4d.task.php"));

        // line 1
        echo "<?php

/*
 * Loads the company info form and copies the helpdesk name to the company
 * name
 */

class CompanyFormLoader extends MigrationTask {
    var \$description = \"Loading initial company data\";

    function run(\$max_time) {
        global \$ost, \$cfg;

        \$form = \$ost->company->getForm();
        if (\$form && \$cfg) {
            \$form->setAnswer('name', \$cfg->getTitle());
            \$form->save();
        }
    }
}

return 'CompanyFormLoader';

?>
";
        
        $__internal_546c728b148770580f7e995d176ab68b9ec6d3f722f7b61c82dc32a7a5e24b8e->leave($__internal_546c728b148770580f7e995d176ab68b9ec6d3f722f7b61c82dc32a7a5e24b8e_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/61c9d5d7-6de40a4d.task.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* */
/* /**/
/*  * Loads the company info form and copies the helpdesk name to the company*/
/*  * name*/
/*  *//* */
/* */
/* class CompanyFormLoader extends MigrationTask {*/
/*     var $description = "Loading initial company data";*/
/* */
/*     function run($max_time) {*/
/*         global $ost, $cfg;*/
/* */
/*         $form = $ost->company->getForm();*/
/*         if ($form && $cfg) {*/
/*             $form->setAnswer('name', $cfg->getTitle());*/
/*             $form->save();*/
/*         }*/
/*     }*/
/* }*/
/* */
/* return 'CompanyFormLoader';*/
/* */
/* ?>*/
/* */
