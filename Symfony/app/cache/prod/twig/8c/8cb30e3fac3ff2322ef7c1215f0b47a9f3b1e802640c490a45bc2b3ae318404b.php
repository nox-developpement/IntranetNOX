<?php

/* support/include/upgrader/streams/core/d51f303a-dad45ca2.task.php */
class __TwigTemplate_46d141626292e69501721e1d1435e522e3d8ec181f1f3f8f189e9a20161af431 extends Twig_Template
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

class NewHtmlTemplate extends MigrationTask {
    var \$description = \"Adding new super-awesome HTML templates\";

    function run(\$runtime) {
        \$errors = array();

        \$i18n = new Internationalization('en_US');
        \$tpls = \$i18n->getTemplate('email_template_group.yaml')->getData();
        foreach (\$tpls as \$t) {
            // If the email template group specifies an id attribute, remove
            // it for upgrade because we cannot assume that the id slot is
            // available
            unset(\$t['id']);
            EmailTemplateGroup::create(\$t, \$errors);
        }

        \$files = \$i18n->getTemplate('file.yaml')->getData();
        foreach (\$files as \$f) {
            \$id = AttachmentFile::create(\$f, \$errors);

            // Ensure the new files are never deleted (attached to Disk)
            \$sql ='INSERT INTO '.ATTACHMENT_TABLE
                .' SET object_id=0, `type`=\\'D\\', inline=1'
                .', file_id='.db_input(\$id);
            db_query(\$sql);
        }
    }
}
return 'NewHtmlTemplate';

?>
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/d51f303a-dad45ca2.task.php";
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
        return new Twig_Source("", "support/include/upgrader/streams/core/d51f303a-dad45ca2.task.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\d51f303a-dad45ca2.task.php");
    }
}
