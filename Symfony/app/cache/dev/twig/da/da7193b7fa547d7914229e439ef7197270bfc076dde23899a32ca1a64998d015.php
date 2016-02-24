<?php

/* support/include/upgrader/streams/core/d0e37dca-1da1bcba.patch.sql */
class __TwigTemplate_d6544343e0d1a03c4c88f888935d65f66170f70fe3df1c51a46801055390594c extends Twig_Template
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
        $__internal_a18976aa628cf5fbafe64b8b122c68f3bcc3824aeeb06e72b59d16feddf30b45 = $this->env->getExtension("native_profiler");
        $__internal_a18976aa628cf5fbafe64b8b122c68f3bcc3824aeeb06e72b59d16feddf30b45->enter($__internal_a18976aa628cf5fbafe64b8b122c68f3bcc3824aeeb06e72b59d16feddf30b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/d0e37dca-1da1bcba.patch.sql"));

        // line 1
        echo "/**
 * @version v1.7 RC3
 * @signature 1da1bcbafcedc65efef58f142a48ac91
 *
 *  Upgrade from 1.6 RC3 + filters
 *
 */

DROP TABLE IF EXISTS `%TABLE_PREFIX%filter`;
RENAME TABLE  `%TABLE_PREFIX%email_filter` TO  `%TABLE_PREFIX%filter`;

DROP TABLE IF EXISTS `%TABLE_PREFIX%filter_rule`;
RENAME TABLE  `%TABLE_PREFIX%email_filter_rule` TO  `%TABLE_PREFIX%filter_rule`;

ALTER TABLE  `%TABLE_PREFIX%filter` CHANGE  `reject_email`  `reject_ticket` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT  '0';

ALTER TABLE  `%TABLE_PREFIX%filter`
    ADD  `target` ENUM(  'Any',  'Web',  'Email',  'API' ) NOT NULL DEFAULT  'Any' AFTER  `sla_id` ,
    ADD INDEX (  `target` );

UPDATE `%TABLE_PREFIX%filter` SET `target` = 'Email' WHERE `email_id` != 0;

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='1da1bcbafcedc65efef58f142a48ac91';
";
        
        $__internal_a18976aa628cf5fbafe64b8b122c68f3bcc3824aeeb06e72b59d16feddf30b45->leave($__internal_a18976aa628cf5fbafe64b8b122c68f3bcc3824aeeb06e72b59d16feddf30b45_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/d0e37dca-1da1bcba.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /***/
/*  * @version v1.7 RC3*/
/*  * @signature 1da1bcbafcedc65efef58f142a48ac91*/
/*  **/
/*  *  Upgrade from 1.6 RC3 + filters*/
/*  **/
/*  *//* */
/* */
/* DROP TABLE IF EXISTS `%TABLE_PREFIX%filter`;*/
/* RENAME TABLE  `%TABLE_PREFIX%email_filter` TO  `%TABLE_PREFIX%filter`;*/
/* */
/* DROP TABLE IF EXISTS `%TABLE_PREFIX%filter_rule`;*/
/* RENAME TABLE  `%TABLE_PREFIX%email_filter_rule` TO  `%TABLE_PREFIX%filter_rule`;*/
/* */
/* ALTER TABLE  `%TABLE_PREFIX%filter` CHANGE  `reject_email`  `reject_ticket` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT  '0';*/
/* */
/* ALTER TABLE  `%TABLE_PREFIX%filter`*/
/*     ADD  `target` ENUM(  'Any',  'Web',  'Email',  'API' ) NOT NULL DEFAULT  'Any' AFTER  `sla_id` ,*/
/*     ADD INDEX (  `target` );*/
/* */
/* UPDATE `%TABLE_PREFIX%filter` SET `target` = 'Email' WHERE `email_id` != 0;*/
/* */
/* -- Finished with patch*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `schema_signature`='1da1bcbafcedc65efef58f142a48ac91';*/
/* */
