<?php

/* support/include/upgrader/streams/core/d0e37dca-1da1bcba.patch.sql */
class __TwigTemplate_65f298fdd4c4baa3dbdd13391f70c8beba90a76a324c4d7758c2513bc478e6f1 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/d0e37dca-1da1bcba.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
