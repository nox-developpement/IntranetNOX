<?php

/* support/include/upgrader/streams/core/60fcbee1-f8856d56.patch.sql */
class __TwigTemplate_d31f54ffe432a764afd8f9d365ed997ccc72bf9c8b0ccfb6952c485b4f9ad9e9 extends Twig_Template
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
        $__internal_18cdbe93d617890cb92e77f0c026244062990a4d000fac8301abe6c3e8185072 = $this->env->getExtension("native_profiler");
        $__internal_18cdbe93d617890cb92e77f0c026244062990a4d000fac8301abe6c3e8185072->enter($__internal_18cdbe93d617890cb92e77f0c026244062990a4d000fac8301abe6c3e8185072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/60fcbee1-f8856d56.patch.sql"));

        // line 1
        echo "DROP TABLE IF EXISTS `%TABLE_PREFIX%ticket_event`;
CREATE TABLE `%TABLE_PREFIX%ticket_event` (
  `ticket_id` int(11) unsigned NOT NULL default '0',
  `staff_id` int(11) unsigned NOT NULL,
  `team_id` int(11) unsigned NOT NULL,
  `dept_id` int(11) unsigned NOT NULL,
  `topic_id` int(11) unsigned NOT NULL,
  `state` enum('created','closed','reopened','assigned','transferred','overdue') NOT NULL,
  `staff` varchar(255) NOT NULL default 'SYSTEM',
  `timestamp` datetime NOT NULL,
  KEY `ticket_state` (`ticket_id`, `state`, `timestamp`),
  KEY `ticket_stats` (`timestamp`, `state`)
) DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `%TABLE_PREFIX%ticket_history`;
DROP TABLE IF EXISTS `%TABLE_PREFIX%history`;

-- Transfer ticket statistics from the %ticket table (inaccurate)
-- REOPENED
INSERT INTO `%TABLE_PREFIX%ticket_event`
    (`ticket_id`, `staff_id`, `team_id`, `dept_id`, `topic_id`,
        `state`, `staff`, `timestamp`)
    SELECT `ticket_id`, T1.`staff_id`, `team_id`, T1.`dept_id`, `topic_id`,
        'reopened', T2.`username`, `reopened`
    FROM `%TABLE_PREFIX%ticket` T1
        INNER JOIN `%TABLE_PREFIX%staff` T2
        ON (T1.`staff_id` = T2.`staff_id`)
    WHERE `status` = 'open' and `reopened` is not null;

-- CLOSED
INSERT INTO `%TABLE_PREFIX%ticket_event`
    (`ticket_id`, `staff_id`, `team_id`, `dept_id`, `topic_id`,
        `state`, `staff`, `timestamp`)
    SELECT `ticket_id`, T1.`staff_id`, `team_id`, T1.`dept_id`, `topic_id`,
        'closed', COALESCE(T2.`username`,'unknown'), `closed`
    FROM `%TABLE_PREFIX%ticket` T1
        LEFT JOIN `%TABLE_PREFIX%staff` T2
        ON (T1.`staff_id` = T2.`staff_id`)
    WHERE `status` = 'closed' and `closed` is not null;

-- OVERDUE
INSERT INTO `%TABLE_PREFIX%ticket_event`
    (`ticket_id`, `staff_id`, `team_id`, `dept_id`, `topic_id`,
        `state`, `staff`, `timestamp`)
    SELECT `ticket_id`, T1.`staff_id`, `team_id`, T1.`dept_id`, `topic_id`,
        'overdue', 'SYSTEM', `duedate`
    FROM `%TABLE_PREFIX%ticket` T1
        INNER JOIN `%TABLE_PREFIX%staff` T2
        ON (T1.`staff_id` = T2.`staff_id`)
    WHERE `status` = 'open' and `isoverdue`;

-- OPENED
INSERT INTO `%TABLE_PREFIX%ticket_event`
    (`ticket_id`, `staff_id`, `team_id`, `dept_id`, `topic_id`,
        `state`, `staff`, `timestamp`)
    SELECT `ticket_id`, 0, 0, 0, `topic_id`,
        'created', 'SYSTEM', T1.`created`
    FROM `%TABLE_PREFIX%ticket` T1;

UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='f8856d56e51c5cc3416389de78b54515';
";
        
        $__internal_18cdbe93d617890cb92e77f0c026244062990a4d000fac8301abe6c3e8185072->leave($__internal_18cdbe93d617890cb92e77f0c026244062990a4d000fac8301abe6c3e8185072_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/60fcbee1-f8856d56.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* DROP TABLE IF EXISTS `%TABLE_PREFIX%ticket_event`;*/
/* CREATE TABLE `%TABLE_PREFIX%ticket_event` (*/
/*   `ticket_id` int(11) unsigned NOT NULL default '0',*/
/*   `staff_id` int(11) unsigned NOT NULL,*/
/*   `team_id` int(11) unsigned NOT NULL,*/
/*   `dept_id` int(11) unsigned NOT NULL,*/
/*   `topic_id` int(11) unsigned NOT NULL,*/
/*   `state` enum('created','closed','reopened','assigned','transferred','overdue') NOT NULL,*/
/*   `staff` varchar(255) NOT NULL default 'SYSTEM',*/
/*   `timestamp` datetime NOT NULL,*/
/*   KEY `ticket_state` (`ticket_id`, `state`, `timestamp`),*/
/*   KEY `ticket_stats` (`timestamp`, `state`)*/
/* ) DEFAULT CHARSET=utf8;*/
/* */
/* DROP TABLE IF EXISTS `%TABLE_PREFIX%ticket_history`;*/
/* DROP TABLE IF EXISTS `%TABLE_PREFIX%history`;*/
/* */
/* -- Transfer ticket statistics from the %ticket table (inaccurate)*/
/* -- REOPENED*/
/* INSERT INTO `%TABLE_PREFIX%ticket_event`*/
/*     (`ticket_id`, `staff_id`, `team_id`, `dept_id`, `topic_id`,*/
/*         `state`, `staff`, `timestamp`)*/
/*     SELECT `ticket_id`, T1.`staff_id`, `team_id`, T1.`dept_id`, `topic_id`,*/
/*         'reopened', T2.`username`, `reopened`*/
/*     FROM `%TABLE_PREFIX%ticket` T1*/
/*         INNER JOIN `%TABLE_PREFIX%staff` T2*/
/*         ON (T1.`staff_id` = T2.`staff_id`)*/
/*     WHERE `status` = 'open' and `reopened` is not null;*/
/* */
/* -- CLOSED*/
/* INSERT INTO `%TABLE_PREFIX%ticket_event`*/
/*     (`ticket_id`, `staff_id`, `team_id`, `dept_id`, `topic_id`,*/
/*         `state`, `staff`, `timestamp`)*/
/*     SELECT `ticket_id`, T1.`staff_id`, `team_id`, T1.`dept_id`, `topic_id`,*/
/*         'closed', COALESCE(T2.`username`,'unknown'), `closed`*/
/*     FROM `%TABLE_PREFIX%ticket` T1*/
/*         LEFT JOIN `%TABLE_PREFIX%staff` T2*/
/*         ON (T1.`staff_id` = T2.`staff_id`)*/
/*     WHERE `status` = 'closed' and `closed` is not null;*/
/* */
/* -- OVERDUE*/
/* INSERT INTO `%TABLE_PREFIX%ticket_event`*/
/*     (`ticket_id`, `staff_id`, `team_id`, `dept_id`, `topic_id`,*/
/*         `state`, `staff`, `timestamp`)*/
/*     SELECT `ticket_id`, T1.`staff_id`, `team_id`, T1.`dept_id`, `topic_id`,*/
/*         'overdue', 'SYSTEM', `duedate`*/
/*     FROM `%TABLE_PREFIX%ticket` T1*/
/*         INNER JOIN `%TABLE_PREFIX%staff` T2*/
/*         ON (T1.`staff_id` = T2.`staff_id`)*/
/*     WHERE `status` = 'open' and `isoverdue`;*/
/* */
/* -- OPENED*/
/* INSERT INTO `%TABLE_PREFIX%ticket_event`*/
/*     (`ticket_id`, `staff_id`, `team_id`, `dept_id`, `topic_id`,*/
/*         `state`, `staff`, `timestamp`)*/
/*     SELECT `ticket_id`, 0, 0, 0, `topic_id`,*/
/*         'created', 'SYSTEM', T1.`created`*/
/*     FROM `%TABLE_PREFIX%ticket` T1;*/
/* */
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `schema_signature`='f8856d56e51c5cc3416389de78b54515';*/
/* */
