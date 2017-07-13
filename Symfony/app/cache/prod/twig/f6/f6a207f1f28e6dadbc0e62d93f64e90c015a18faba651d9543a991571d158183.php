<?php

/* support/include/upgrader/streams/core/61c9d5d7-6de40a4d.task.php */
class __TwigTemplate_23cde163d930fc247886697c5e0fdc712c69e38ff71499cda2f4e78c1e202cf7 extends Twig_Template
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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/include/upgrader/streams/core/61c9d5d7-6de40a4d.task.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\61c9d5d7-6de40a4d.task.php");
    }
}
