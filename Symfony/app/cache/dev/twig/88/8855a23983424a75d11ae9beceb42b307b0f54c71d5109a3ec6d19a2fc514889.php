<?php

/* support/include/upgrader/streams/core/d51f303a-dad45ca2.task.php */
class __TwigTemplate_1cc4ab8ffe677eb64c8a1776d9336358b4876b5629d7f1e34c6df92751a4ef02 extends Twig_Template
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
        $__internal_e4bb5065df071a0248d930b64bbd001a5f5a128efb86db1cdd81609811e7a1ed = $this->env->getExtension("native_profiler");
        $__internal_e4bb5065df071a0248d930b64bbd001a5f5a128efb86db1cdd81609811e7a1ed->enter($__internal_e4bb5065df071a0248d930b64bbd001a5f5a128efb86db1cdd81609811e7a1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/d51f303a-dad45ca2.task.php"));

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
        
        $__internal_e4bb5065df071a0248d930b64bbd001a5f5a128efb86db1cdd81609811e7a1ed->leave($__internal_e4bb5065df071a0248d930b64bbd001a5f5a128efb86db1cdd81609811e7a1ed_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/d51f303a-dad45ca2.task.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
