<?php

/* support/include/upgrader/streams/core/934954de-f1ccd3bb.patch.sql */
class __TwigTemplate_961cf994aee2d960e6ae2725a2cd1f093b57e48a3fbc9b9bde213a589d4de7b9 extends Twig_Template
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
 * @version v1.8.1
 * @signature f1ccd3bb620e314b0ae1dbd0a1a99177
 * @title Pluggable Storage Backends
 *
 * This patch will allow attachments to be stored outside the database (like
 * on the filesystem)
 */

ALTER TABLE `%TABLE_PREFIX%file`
    ADD `bk` CHAR(1) NOT NULL DEFAULT 'D' AFTER `ft`,
    -- RFC 4288, Section 4.2 declares max MIMEType at 255 ascii chars
    CHANGE `type` `type` varchar(255) collate ascii_general_ci NOT NULL default '',
    CHANGE `size` `size` BIGINT(20) NOT NULL DEFAULT 0,
    CHANGE `hash` `key` VARCHAR(86) COLLATE ascii_general_ci,
    ADD `signature` VARCHAR(86) COLLATE ascii_bin AFTER `key`,
    ADD `attrs` VARCHAR(255) AFTER `name`,
    ADD INDEX (`signature`);

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `value` = 'f1ccd3bb620e314b0ae1dbd0a1a99177'
    WHERE `key` = 'schema_signature' AND `namespace` = 'core';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/934954de-f1ccd3bb.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* /***/
/*  * @version v1.8.1*/
/*  * @signature f1ccd3bb620e314b0ae1dbd0a1a99177*/
/*  * @title Pluggable Storage Backends*/
/*  **/
/*  * This patch will allow attachments to be stored outside the database (like*/
/*  * on the filesystem)*/
/*  *//* */
/* */
/* ALTER TABLE `%TABLE_PREFIX%file`*/
/*     ADD `bk` CHAR(1) NOT NULL DEFAULT 'D' AFTER `ft`,*/
/*     -- RFC 4288, Section 4.2 declares max MIMEType at 255 ascii chars*/
/*     CHANGE `type` `type` varchar(255) collate ascii_general_ci NOT NULL default '',*/
/*     CHANGE `size` `size` BIGINT(20) NOT NULL DEFAULT 0,*/
/*     CHANGE `hash` `key` VARCHAR(86) COLLATE ascii_general_ci,*/
/*     ADD `signature` VARCHAR(86) COLLATE ascii_bin AFTER `key`,*/
/*     ADD `attrs` VARCHAR(255) AFTER `name`,*/
/*     ADD INDEX (`signature`);*/
/* */
/* -- Finished with patch*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `value` = 'f1ccd3bb620e314b0ae1dbd0a1a99177'*/
/*     WHERE `key` = 'schema_signature' AND `namespace` = 'core';*/
/* */
