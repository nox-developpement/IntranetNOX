<?php

/* support/include/upgrader/streams/core/03ff59bf-b26f29a6.patch.sql */
class __TwigTemplate_8a0a9d4cd2bae8b214e61865aab81fbfed3a2b4a592c2b550f3799b64d03b09c extends Twig_Template
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
        $__internal_902cff674ef135268d8bfde3fd87080c1929a9ccb8762d460ed12ac086dc59ff = $this->env->getExtension("native_profiler");
        $__internal_902cff674ef135268d8bfde3fd87080c1929a9ccb8762d460ed12ac086dc59ff->enter($__internal_902cff674ef135268d8bfde3fd87080c1929a9ccb8762d460ed12ac086dc59ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/03ff59bf-b26f29a6.patch.sql"));

        // line 1
        echo "/**
 * @version v1.9.4
 * @signature b26f29a6bb5dbb3510b057632182d138
 * @title Add properties filed and drop 'resolved' state
 *
 * This patch drops resolved state and any associated statuses
 *
 */

-- Move tickets in resolved state to the default closed status
SET @statusId = (
        SELECT id FROM  `%TABLE_PREFIX%ticket_status`
        WHERE  `state` =  'closed' ORDER BY id ASC LIMIT 1);

UPDATE  `%TABLE_PREFIX%ticket` t1
    JOIN `%TABLE_PREFIX%ticket_status` t2
        ON (t2.id = t1.status_id)
    SET t1.status_id = @statusId
    WHERE t2.state='resolved';

-- add properties field IF it doesn't exist
SET @s = (SELECT IF(
    (SELECT COUNT(*)
        FROM INFORMATION_SCHEMA.COLUMNS
        WHERE table_name = '%TABLE_PREFIX%ticket_status'
        AND table_schema = DATABASE()
        AND column_name = 'properties'
    ) > 0,
    \"SELECT 1\",
    \"ALTER TABLE `%TABLE_PREFIX%ticket_status` ADD `properties` text NOT NULL AFTER `sort`\"
));
PREPARE stmt FROM @s;
EXECUTE stmt;

UPDATE `%TABLE_PREFIX%ticket_status` s
    INNER JOIN `%TABLE_PREFIX%config` c
        ON(c.namespace = CONCAT('TS.', s.id) AND c.key='properties')
    SET s.properties = c.value;

--  add default reopen settings to existing closed state statuses
UPDATE `%TABLE_PREFIX%ticket_status`
    SET `properties`= INSERT(`properties`, 2, 0, '\"allowreopen\":true,\"reopenstatus\":0,')
    WHERE `state` = 'closed';

-- change thread body text to 16Mb.
ALTER TABLE  `%TABLE_PREFIX%ticket_thread`
    CHANGE  `body`  `body` mediumtext NOT NULL;

-- index ext id
ALTER TABLE  `%TABLE_PREFIX%note`
    ADD INDEX (`ext_id`);

-- Set new schema signature
UPDATE `%TABLE_PREFIX%config`
    SET `value` = 'b26f29a6bb5dbb3510b057632182d138'
    WHERE `key` = 'schema_signature' AND `namespace` = 'core';
";
        
        $__internal_902cff674ef135268d8bfde3fd87080c1929a9ccb8762d460ed12ac086dc59ff->leave($__internal_902cff674ef135268d8bfde3fd87080c1929a9ccb8762d460ed12ac086dc59ff_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/03ff59bf-b26f29a6.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /***/
/*  * @version v1.9.4*/
/*  * @signature b26f29a6bb5dbb3510b057632182d138*/
/*  * @title Add properties filed and drop 'resolved' state*/
/*  **/
/*  * This patch drops resolved state and any associated statuses*/
/*  **/
/*  *//* */
/* */
/* -- Move tickets in resolved state to the default closed status*/
/* SET @statusId = (*/
/*         SELECT id FROM  `%TABLE_PREFIX%ticket_status`*/
/*         WHERE  `state` =  'closed' ORDER BY id ASC LIMIT 1);*/
/* */
/* UPDATE  `%TABLE_PREFIX%ticket` t1*/
/*     JOIN `%TABLE_PREFIX%ticket_status` t2*/
/*         ON (t2.id = t1.status_id)*/
/*     SET t1.status_id = @statusId*/
/*     WHERE t2.state='resolved';*/
/* */
/* -- add properties field IF it doesn't exist*/
/* SET @s = (SELECT IF(*/
/*     (SELECT COUNT(*)*/
/*         FROM INFORMATION_SCHEMA.COLUMNS*/
/*         WHERE table_name = '%TABLE_PREFIX%ticket_status'*/
/*         AND table_schema = DATABASE()*/
/*         AND column_name = 'properties'*/
/*     ) > 0,*/
/*     "SELECT 1",*/
/*     "ALTER TABLE `%TABLE_PREFIX%ticket_status` ADD `properties` text NOT NULL AFTER `sort`"*/
/* ));*/
/* PREPARE stmt FROM @s;*/
/* EXECUTE stmt;*/
/* */
/* UPDATE `%TABLE_PREFIX%ticket_status` s*/
/*     INNER JOIN `%TABLE_PREFIX%config` c*/
/*         ON(c.namespace = CONCAT('TS.', s.id) AND c.key='properties')*/
/*     SET s.properties = c.value;*/
/* */
/* --  add default reopen settings to existing closed state statuses*/
/* UPDATE `%TABLE_PREFIX%ticket_status`*/
/*     SET `properties`= INSERT(`properties`, 2, 0, '"allowreopen":true,"reopenstatus":0,')*/
/*     WHERE `state` = 'closed';*/
/* */
/* -- change thread body text to 16Mb.*/
/* ALTER TABLE  `%TABLE_PREFIX%ticket_thread`*/
/*     CHANGE  `body`  `body` mediumtext NOT NULL;*/
/* */
/* -- index ext id*/
/* ALTER TABLE  `%TABLE_PREFIX%note`*/
/*     ADD INDEX (`ext_id`);*/
/* */
/* -- Set new schema signature*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `value` = 'b26f29a6bb5dbb3510b057632182d138'*/
/*     WHERE `key` = 'schema_signature' AND `namespace` = 'core';*/
/* */
