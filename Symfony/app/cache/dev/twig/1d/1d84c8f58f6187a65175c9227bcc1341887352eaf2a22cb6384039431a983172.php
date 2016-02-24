<?php

/* support/include/upgrader/streams/core/00ff231f-9f3b454c.patch.sql */
class __TwigTemplate_f04cd25b1973cc7cb0024b6b360c3f51b67b185cee40816ce236ff79ff145254 extends Twig_Template
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
        $__internal_cb1de941116c9652381152980f87866bd0bc82c563185ff56cfa117ce231265e = $this->env->getExtension("native_profiler");
        $__internal_cb1de941116c9652381152980f87866bd0bc82c563185ff56cfa117ce231265e->enter($__internal_cb1de941116c9652381152980f87866bd0bc82c563185ff56cfa117ce231265e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/00ff231f-9f3b454c.patch.sql"));

        // line 1
        echo "/**
 * @version v1.7 RC4
 * @signature 9f3b454c06dfd5ee96003eae5182ac13
 *
 *  - Supports starts- and ends-with in ticket filter rules
 *  - Fix assigned template variable
 *  - Allow nested templates to have duplicate names
 *  - New permission settings for API key  & groups
 */

ALTER TABLE  `%TABLE_PREFIX%filter_rule` CHANGE  `how`  `how` ENUM(  'equal',
    'not_equal',  'contains',  'dn_contain',  'starts',  'ends' );

-- templates -> %message
UPDATE `%TABLE_PREFIX%email_template`
    SET `assigned_alert_body` = REPLACE(`assigned_alert_body`, '%message', '%{comments}');

-- API Access.
ALTER TABLE  `%TABLE_PREFIX%api_key`
    CHANGE  `isactive`  `isactive` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT  '1',
    ADD  `can_create_tickets` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT  '1' AFTER  `apikey`,
    DROP INDEX  `ipaddr`,
    ADD INDEX  `ipaddr` (  `ipaddr` );

-- Help topics 
ALTER TABLE  `%TABLE_PREFIX%help_topic` 
    DROP INDEX  `topic` ,
    ADD UNIQUE  `topic` (  `topic` ,  `topic_pid` );


-- group settings.
ALTER TABLE  `%TABLE_PREFIX%groups` 
    ADD  `can_post_ticket_reply` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT  '1' AFTER  `can_transfer_tickets` ,
    ADD  `can_view_staff_stats` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT  '0' AFTER  `can_post_ticket_reply`;

-- update schema signature.
UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='9f3b454c06dfd5ee96003eae5182ac13';
";
        
        $__internal_cb1de941116c9652381152980f87866bd0bc82c563185ff56cfa117ce231265e->leave($__internal_cb1de941116c9652381152980f87866bd0bc82c563185ff56cfa117ce231265e_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/00ff231f-9f3b454c.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /***/
/*  * @version v1.7 RC4*/
/*  * @signature 9f3b454c06dfd5ee96003eae5182ac13*/
/*  **/
/*  *  - Supports starts- and ends-with in ticket filter rules*/
/*  *  - Fix assigned template variable*/
/*  *  - Allow nested templates to have duplicate names*/
/*  *  - New permission settings for API key  & groups*/
/*  *//* */
/* */
/* ALTER TABLE  `%TABLE_PREFIX%filter_rule` CHANGE  `how`  `how` ENUM(  'equal',*/
/*     'not_equal',  'contains',  'dn_contain',  'starts',  'ends' );*/
/* */
/* -- templates -> %message*/
/* UPDATE `%TABLE_PREFIX%email_template`*/
/*     SET `assigned_alert_body` = REPLACE(`assigned_alert_body`, '%message', '%{comments}');*/
/* */
/* -- API Access.*/
/* ALTER TABLE  `%TABLE_PREFIX%api_key`*/
/*     CHANGE  `isactive`  `isactive` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT  '1',*/
/*     ADD  `can_create_tickets` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT  '1' AFTER  `apikey`,*/
/*     DROP INDEX  `ipaddr`,*/
/*     ADD INDEX  `ipaddr` (  `ipaddr` );*/
/* */
/* -- Help topics */
/* ALTER TABLE  `%TABLE_PREFIX%help_topic` */
/*     DROP INDEX  `topic` ,*/
/*     ADD UNIQUE  `topic` (  `topic` ,  `topic_pid` );*/
/* */
/* */
/* -- group settings.*/
/* ALTER TABLE  `%TABLE_PREFIX%groups` */
/*     ADD  `can_post_ticket_reply` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT  '1' AFTER  `can_transfer_tickets` ,*/
/*     ADD  `can_view_staff_stats` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT  '0' AFTER  `can_post_ticket_reply`;*/
/* */
/* -- update schema signature.*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `schema_signature`='9f3b454c06dfd5ee96003eae5182ac13';*/
/* */
