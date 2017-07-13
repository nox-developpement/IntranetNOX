<?php

/* support/include/upgrader/streams/core/ed60ba20-934954de.patch.sql */
class __TwigTemplate_4be6d51b4c384cffc0712c35c43588d08c55164e979dd6291b02b2a2d3119454 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/ed60ba20-934954de.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/include/upgrader/streams/core/ed60ba20-934954de.patch.sql", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\ed60ba20-934954de.patch.sql");
    }
}
