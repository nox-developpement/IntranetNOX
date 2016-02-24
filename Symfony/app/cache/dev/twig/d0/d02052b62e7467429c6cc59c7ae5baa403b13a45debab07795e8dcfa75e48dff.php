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
        $__internal_4ecb45fff6366a3863e9c91513b960f06e4866ab12d8b23ec02086990e87d5e9 = $this->env->getExtension("native_profiler");
        $__internal_4ecb45fff6366a3863e9c91513b960f06e4866ab12d8b23ec02086990e87d5e9->enter($__internal_4ecb45fff6366a3863e9c91513b960f06e4866ab12d8b23ec02086990e87d5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/15b30765-dd0022fb.patch.sql"));

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
        
        $__internal_4ecb45fff6366a3863e9c91513b960f06e4866ab12d8b23ec02086990e87d5e9->leave($__internal_4ecb45fff6366a3863e9c91513b960f06e4866ab12d8b23ec02086990e87d5e9_prof);

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
