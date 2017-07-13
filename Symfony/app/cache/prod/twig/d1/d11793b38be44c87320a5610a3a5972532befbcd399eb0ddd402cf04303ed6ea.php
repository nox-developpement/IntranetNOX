<?php

/* support/include/upgrader/streams/core/dad45ca2-61c9d5d7.task.php */
class __TwigTemplate_3d7f2878b48acd75993f9b3c33791a03061e3615b8e5ad91ef301ae310846d7e extends Twig_Template
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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/include/upgrader/streams/core/dad45ca2-61c9d5d7.task.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\dad45ca2-61c9d5d7.task.php");
    }
}
