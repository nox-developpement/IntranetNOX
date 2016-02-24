<?php

/* support/include/upgrader/streams/core/15b30765-dd0022fb.patch.sql */
class __TwigTemplate_69605b7dafce408e4a57db9be3a760ef49adcc87ef8d76eca016441a8682c7bc extends Twig_Template
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
        $__internal_59842b31d415dea7430321cd715d7a4f776e9c0725a5c97f03024b823744e6c3 = $this->env->getExtension("native_profiler");
        $__internal_59842b31d415dea7430321cd715d7a4f776e9c0725a5c97f03024b823744e6c3->enter($__internal_59842b31d415dea7430321cd715d7a4f776e9c0725a5c97f03024b823744e6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/15b30765-dd0022fb.patch.sql"));

        // line 1
        echo "/**
 * @version v1.7 RC2+
 * @signature dd0022fb14892c0bb6a9700392df2de7
 *
 * Migrate file attachment data from %file to %file_chunk
 *
 */

DROP TABLE IF EXISTS `%TABLE_PREFIX%file_chunk`;
CREATE TABLE `%TABLE_PREFIX%file_chunk` (
    `file_id` int(11) NOT NULL,
    `chunk_id` int(11) NOT NULL,
    `filedata` longblob NOT NULL,
    PRIMARY KEY (`file_id`, `chunk_id`)
) DEFAULT CHARSET=utf8;

INSERT INTO `%TABLE_PREFIX%file_chunk` (`file_id`, `chunk_id`, `filedata`)
    SELECT `id`, 0, `filedata`
    FROM `%TABLE_PREFIX%file`;

ALTER TABLE `%TABLE_PREFIX%file` DROP COLUMN `filedata`;
OPTIMIZE TABLE `%TABLE_PREFIX%file`;

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='dd0022fb14892c0bb6a9700392df2de7';
";
        
        $__internal_59842b31d415dea7430321cd715d7a4f776e9c0725a5c97f03024b823744e6c3->leave($__internal_59842b31d415dea7430321cd715d7a4f776e9c0725a5c97f03024b823744e6c3_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/15b30765-dd0022fb.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /***/
/*  * @version v1.7 RC2+*/
/*  * @signature dd0022fb14892c0bb6a9700392df2de7*/
/*  **/
/*  * Migrate file attachment data from %file to %file_chunk*/
/*  **/
/*  *//* */
/* */
/* DROP TABLE IF EXISTS `%TABLE_PREFIX%file_chunk`;*/
/* CREATE TABLE `%TABLE_PREFIX%file_chunk` (*/
/*     `file_id` int(11) NOT NULL,*/
/*     `chunk_id` int(11) NOT NULL,*/
/*     `filedata` longblob NOT NULL,*/
/*     PRIMARY KEY (`file_id`, `chunk_id`)*/
/* ) DEFAULT CHARSET=utf8;*/
/* */
/* INSERT INTO `%TABLE_PREFIX%file_chunk` (`file_id`, `chunk_id`, `filedata`)*/
/*     SELECT `id`, 0, `filedata`*/
/*     FROM `%TABLE_PREFIX%file`;*/
/* */
/* ALTER TABLE `%TABLE_PREFIX%file` DROP COLUMN `filedata`;*/
/* OPTIMIZE TABLE `%TABLE_PREFIX%file`;*/
/* */
/* -- Finished with patch*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `schema_signature`='dd0022fb14892c0bb6a9700392df2de7';*/
/* */
