<?php

/* support/include/upgrader/streams/core/d51f303a-dad45ca2.task.php */
class __TwigTemplate_d48785a88d43c4f9412c29f6a5ba989993c9859e431f9f8b6b666751bb0b41d1 extends Twig_Template
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
}
/* <?php*/
/* */
/* class NewHtmlTemplate extends MigrationTask {*/
/*     var $description = "Adding new super-awesome HTML templates";*/
/* */
/*     function run($runtime) {*/
/*         $errors = array();*/
/* */
/*         $i18n = new Internationalization('en_US');*/
/*         $tpls = $i18n->getTemplate('email_template_group.yaml')->getData();*/
/*         foreach ($tpls as $t) {*/
/*             // If the email template group specifies an id attribute, remove*/
/*             // it for upgrade because we cannot assume that the id slot is*/
/*             // available*/
/*             unset($t['id']);*/
/*             EmailTemplateGroup::create($t, $errors);*/
/*         }*/
/* */
/*         $files = $i18n->getTemplate('file.yaml')->getData();*/
/*         foreach ($files as $f) {*/
/*             $id = AttachmentFile::create($f, $errors);*/
/* */
/*             // Ensure the new files are never deleted (attached to Disk)*/
/*             $sql ='INSERT INTO '.ATTACHMENT_TABLE*/
/*                 .' SET object_id=0, `type`=\'D\', inline=1'*/
/*                 .', file_id='.db_input($id);*/
/*             db_query($sql);*/
/*         }*/
/*     }*/
/* }*/
/* return 'NewHtmlTemplate';*/
/* */
/* ?>*/
/* */
