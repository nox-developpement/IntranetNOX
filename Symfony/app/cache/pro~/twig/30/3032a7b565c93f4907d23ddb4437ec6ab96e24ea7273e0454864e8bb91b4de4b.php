<?php

/* support/include/upgrader/streams/core/15b30765-dd0022fb.patch.sql */
class __TwigTemplate_1e895b757e957613f50d8100cf7f94b30d21b0a1d6c57f18027a3dda868523b8 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/15b30765-dd0022fb.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
