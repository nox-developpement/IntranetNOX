<?php

/* support/include/upgrader/streams/core/f5692e24-4323a6a8.task.php */
class __TwigTemplate_32ee836e45dfa5f4ddd31591b0d818656143a667ac65fc9f4e8c967322b58c8a extends Twig_Template
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
        $__internal_64424167a836c233c04d3c9323381845e2c41ee761591e6d08ec205e4ceb0104 = $this->env->getExtension("native_profiler");
        $__internal_64424167a836c233c04d3c9323381845e2c41ee761591e6d08ec205e4ceb0104->enter($__internal_64424167a836c233c04d3c9323381845e2c41ee761591e6d08ec205e4ceb0104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/f5692e24-4323a6a8.task.php"));

        // line 1
        echo "<?php


class TemplateContentLoader extends MigrationTask {
    var \$description = \"Loading initial system templates\";

    function run(\$max_time) {
        foreach (array(
                'registration-staff', 'pwreset-staff', 'banner-staff',
                'registration-client', 'pwreset-client', 'banner-client',
                'registration-confirm', 'registration-thanks',
                'access-link') as \$type) {
            \$i18n = new Internationalization();
            \$tpl = \$i18n->getTemplate(\"templates/page/{\$type}.yaml\");
            if (!(\$page = \$tpl->getData()))
                // No such template on disk
                continue;

            if (\$id = db_result(db_query('select id from '.PAGE_TABLE
                    .' where `type`='.db_input(\$type))))
                // Already have a template for the content type
                continue;

            \$sql = 'INSERT INTO '.PAGE_TABLE.' SET type='.db_input(\$type)
                .', name='.db_input(\$page['name'])
                .', body='.db_input(\$page['body'])
                .', lang='.db_input(\$tpl->getLang())
                .', notes='.db_input(\$page['notes'])
                .', created=NOW(), updated=NOW(), isactive=1';
            db_query(\$sql);
        }
        // Set the content_id for all the new items
        db_query('UPDATE '.PAGE_TABLE
            .' SET `content_id` = `id` WHERE `content_id` = 0');
    }
}
return 'TemplateContentLoader';
";
        
        $__internal_64424167a836c233c04d3c9323381845e2c41ee761591e6d08ec205e4ceb0104->leave($__internal_64424167a836c233c04d3c9323381845e2c41ee761591e6d08ec205e4ceb0104_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/f5692e24-4323a6a8.task.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* */
/* */
/* class TemplateContentLoader extends MigrationTask {*/
/*     var $description = "Loading initial system templates";*/
/* */
/*     function run($max_time) {*/
/*         foreach (array(*/
/*                 'registration-staff', 'pwreset-staff', 'banner-staff',*/
/*                 'registration-client', 'pwreset-client', 'banner-client',*/
/*                 'registration-confirm', 'registration-thanks',*/
/*                 'access-link') as $type) {*/
/*             $i18n = new Internationalization();*/
/*             $tpl = $i18n->getTemplate("templates/page/{$type}.yaml");*/
/*             if (!($page = $tpl->getData()))*/
/*                 // No such template on disk*/
/*                 continue;*/
/* */
/*             if ($id = db_result(db_query('select id from '.PAGE_TABLE*/
/*                     .' where `type`='.db_input($type))))*/
/*                 // Already have a template for the content type*/
/*                 continue;*/
/* */
/*             $sql = 'INSERT INTO '.PAGE_TABLE.' SET type='.db_input($type)*/
/*                 .', name='.db_input($page['name'])*/
/*                 .', body='.db_input($page['body'])*/
/*                 .', lang='.db_input($tpl->getLang())*/
/*                 .', notes='.db_input($page['notes'])*/
/*                 .', created=NOW(), updated=NOW(), isactive=1';*/
/*             db_query($sql);*/
/*         }*/
/*         // Set the content_id for all the new items*/
/*         db_query('UPDATE '.PAGE_TABLE*/
/*             .' SET `content_id` = `id` WHERE `content_id` = 0');*/
/*     }*/
/* }*/
/* return 'TemplateContentLoader';*/
/* */
