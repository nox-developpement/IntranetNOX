<?php

/* support/include/upgrader/streams/core/dad45ca2-61c9d5d7.task.php */
class __TwigTemplate_df9d76fb3f8abfca30937a9467b478a76782b8cfa2f4210d12e93f20e89403d8 extends Twig_Template
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
        $__internal_05bd327e051f2df1c48c8b1502735c3b91eea3a53f845c3cd359acfc4782f38b = $this->env->getExtension("native_profiler");
        $__internal_05bd327e051f2df1c48c8b1502735c3b91eea3a53f845c3cd359acfc4782f38b->enter($__internal_05bd327e051f2df1c48c8b1502735c3b91eea3a53f845c3cd359acfc4782f38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/dad45ca2-61c9d5d7.task.php"));

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
        
        $__internal_05bd327e051f2df1c48c8b1502735c3b91eea3a53f845c3cd359acfc4782f38b->leave($__internal_05bd327e051f2df1c48c8b1502735c3b91eea3a53f845c3cd359acfc4782f38b_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/dad45ca2-61c9d5d7.task.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
