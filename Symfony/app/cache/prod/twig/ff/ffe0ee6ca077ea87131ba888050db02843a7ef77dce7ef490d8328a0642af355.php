<?php

/* support/include/upgrader/streams/core/61c9d5d7-6de40a4d.task.php */
class __TwigTemplate_627c0902241ca073ec21a54c7708169b5f38772885c1efb92be7832c7717198e extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/61c9d5d7-6de40a4d.task.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
