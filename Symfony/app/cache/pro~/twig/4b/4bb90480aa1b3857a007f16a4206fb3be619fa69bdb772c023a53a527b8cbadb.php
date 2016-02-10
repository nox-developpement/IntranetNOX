<?php

/* support/include/upgrader/streams/core/dad45ca2-61c9d5d7.task.php */
class __TwigTemplate_333dfd709d8c3a8be0f7d1d2c1f6aede91075c7883a387edea14cfc0f14ca139 extends Twig_Template
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
 * Loads the initial data for dynamic forms into the system. This is
 * preferred over providing the data inside the SQL scripts
 */

class DynamicFormLoader extends MigrationTask {
    var \$description = \"Loading initial data for dynamic forms\";

    function run(\$max_time) {
        \$i18n = new Internationalization('en_US');
        \$forms = \$i18n->getTemplate('form.yaml')->getData();
        foreach (\$forms as \$f)
            DynamicForm::create(\$f);
    }
}

return 'DynamicFormLoader';

?>
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/dad45ca2-61c9d5d7.task.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* */
/* /**/
/*  * Loads the initial data for dynamic forms into the system. This is*/
/*  * preferred over providing the data inside the SQL scripts*/
/*  *//* */
/* */
/* class DynamicFormLoader extends MigrationTask {*/
/*     var $description = "Loading initial data for dynamic forms";*/
/* */
/*     function run($max_time) {*/
/*         $i18n = new Internationalization('en_US');*/
/*         $forms = $i18n->getTemplate('form.yaml')->getData();*/
/*         foreach ($forms as $f)*/
/*             DynamicForm::create($f);*/
/*     }*/
/* }*/
/* */
/* return 'DynamicFormLoader';*/
/* */
/* ?>*/
/* */
