<?php

/* support/include/upgrader/streams/core/ed60ba20-934954de.patch.sql */
class __TwigTemplate_e861def1d97896a5025d01015de59e6450aca5986e27769aecafc1d81665910b extends Twig_Template
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
        $__internal_cf22791a40dfff35940d95f82496f576afdbf166a939da3ffdec6c778e19f241 = $this->env->getExtension("native_profiler");
        $__internal_cf22791a40dfff35940d95f82496f576afdbf166a939da3ffdec6c778e19f241->enter($__internal_cf22791a40dfff35940d95f82496f576afdbf166a939da3ffdec6c778e19f241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/ed60ba20-934954de.patch.sql"));

        // line 1
        echo "/**
 * @version v1.8.1
 * @signature 934954de8914d9bd2bb8343e805340ae
 * @title Various schema improvements and bug fixes
 *
 */

-- [#317](https://github.com/osTicket/osTicket-1.8/issues/317)
ALTER TABLE `%TABLE_PREFIX%faq`
    CHANGE `created` `created` datetime NOT NULL,
    CHANGE `updated` `updated` datetime NOT NULL;

-- [#328](https://github.com/osTicket/osTicket-1.8/issues/328)
UPDATE `%TABLE_PREFIX%filter_rule`
    SET `how` = 'equal' WHERE `how` IS NULL;

-- [#331](https://github.com/osTicket/osTicket-1.8/issues/331)
-- Previously there was no primary key on the %ticket_email_info table, so
-- clean up any junk records before adding one
ALTER TABLE `%TABLE_PREFIX%ticket_email_info`
    CHANGE `message_id` `thread_id` int(11) unsigned NOT NULL,
    DROP INDEX  `message_id`,
    ADD INDEX  `email_mid` (`email_mid`);

-- [#386](https://github.com/osTicket/osTicket-1.8/issues/386)
UPDATE `%TABLE_PREFIX%email_template`
    SET `body` = REPLACE(`body`, '%{recipient}', '%{recipient.name}');

-- Change EndUser link to be recipient specific
UPDATE `%TABLE_PREFIX%email_template`
    SET `body` = REPLACE(`body`, '%{ticket.client_link}', '%{recipient.ticket_link}');

-- Add inline flag and drop ref_type
ALTER TABLE  `%TABLE_PREFIX%ticket_attachment`
    ADD  `inline` tinyint(1) NOT NULL default  0 AFTER  `ref_id`,
    DROP  `ref_type`;

ALTER TABLE `%TABLE_PREFIX%ticket_thread`
    ADD `user_id` int(11) unsigned not null default 0 AFTER `staff_id`;

ALTER TABLE `%TABLE_PREFIX%ticket`
    ADD `email_id` int(11) unsigned not null default 0 AFTER `team_id`,
    CHANGE `ticketID` `number` varchar(20);

ALTER TABLE `%TABLE_PREFIX%ticket_collaborator`
    ADD`created` datetime NOT NULL AFTER `role`;

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `value` = '934954de8914d9bd2bb8343e805340ae'
    WHERE `key` = 'schema_signature' AND `namespace` = 'core';
";
        
        $__internal_cf22791a40dfff35940d95f82496f576afdbf166a939da3ffdec6c778e19f241->leave($__internal_cf22791a40dfff35940d95f82496f576afdbf166a939da3ffdec6c778e19f241_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/ed60ba20-934954de.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /***/
/*  * @version v1.8.1*/
/*  * @signature 934954de8914d9bd2bb8343e805340ae*/
/*  * @title Various schema improvements and bug fixes*/
/*  **/
/*  *//* */
/* */
/* -- [#317](https://github.com/osTicket/osTicket-1.8/issues/317)*/
/* ALTER TABLE `%TABLE_PREFIX%faq`*/
/*     CHANGE `created` `created` datetime NOT NULL,*/
/*     CHANGE `updated` `updated` datetime NOT NULL;*/
/* */
/* -- [#328](https://github.com/osTicket/osTicket-1.8/issues/328)*/
/* UPDATE `%TABLE_PREFIX%filter_rule`*/
/*     SET `how` = 'equal' WHERE `how` IS NULL;*/
/* */
/* -- [#331](https://github.com/osTicket/osTicket-1.8/issues/331)*/
/* -- Previously there was no primary key on the %ticket_email_info table, so*/
/* -- clean up any junk records before adding one*/
/* ALTER TABLE `%TABLE_PREFIX%ticket_email_info`*/
/*     CHANGE `message_id` `thread_id` int(11) unsigned NOT NULL,*/
/*     DROP INDEX  `message_id`,*/
/*     ADD INDEX  `email_mid` (`email_mid`);*/
/* */
/* -- [#386](https://github.com/osTicket/osTicket-1.8/issues/386)*/
/* UPDATE `%TABLE_PREFIX%email_template`*/
/*     SET `body` = REPLACE(`body`, '%{recipient}', '%{recipient.name}');*/
/* */
/* -- Change EndUser link to be recipient specific*/
/* UPDATE `%TABLE_PREFIX%email_template`*/
/*     SET `body` = REPLACE(`body`, '%{ticket.client_link}', '%{recipient.ticket_link}');*/
/* */
/* -- Add inline flag and drop ref_type*/
/* ALTER TABLE  `%TABLE_PREFIX%ticket_attachment`*/
/*     ADD  `inline` tinyint(1) NOT NULL default  0 AFTER  `ref_id`,*/
/*     DROP  `ref_type`;*/
/* */
/* ALTER TABLE `%TABLE_PREFIX%ticket_thread`*/
/*     ADD `user_id` int(11) unsigned not null default 0 AFTER `staff_id`;*/
/* */
/* ALTER TABLE `%TABLE_PREFIX%ticket`*/
/*     ADD `email_id` int(11) unsigned not null default 0 AFTER `team_id`,*/
/*     CHANGE `ticketID` `number` varchar(20);*/
/* */
/* ALTER TABLE `%TABLE_PREFIX%ticket_collaborator`*/
/*     ADD`created` datetime NOT NULL AFTER `role`;*/
/* */
/* -- Finished with patch*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `value` = '934954de8914d9bd2bb8343e805340ae'*/
/*     WHERE `key` = 'schema_signature' AND `namespace` = 'core';*/
/* */
