<?php

/* support/include/upgrader/streams/core/9ef33a06-8f99b8bf.patch.sql */
class __TwigTemplate_1bdea33635642be7cc63c2d3866975ad2bb040ab4a408cbe47e54a084ff96fa2 extends Twig_Template
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
 * @version v1.9.0
 * @signature 8f99b8bf9bee63c8e4dc274ffbdda383
 * @title Move organization support from UserAccount to User model.
 *
 */

ALTER TABLE `%TABLE_PREFIX%user`
    ADD `org_id` int(11) unsigned NOT NULL AFTER  `id`,
    ADD `status` int(11) unsigned NOT NULL DEFAULT 0 AFTER `default_email_id`,
    ADD INDEX (`org_id`);

ALTER TABLE `%TABLE_PREFIX%user_account`
    DROP `org_id`,
    ADD INDEX (`user_id`);

ALTER TABLE `%TABLE_PREFIX%ticket`
    ADD INDEX (`user_id`);

ALTER TABLE `%TABLE_PREFIX%draft`
    ADD `extra` text AFTER `body`;

ALTER TABLE `%TABLE_PREFIX%organization`
    CHANGE `staff_id` `manager` varchar(16) NOT NULL DEFAULT '',
    CHANGE `domain` `domain` varchar(256) NOT NULL DEFAULT '';

UPDATE `%TABLE_PREFIX%config`
    SET `value` = '8f99b8bf9bee63c8e4dc274ffbdda383'
    WHERE `key` = 'schema_signature' AND `namespace` = 'core';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/9ef33a06-8f99b8bf.patch.sql";
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
        return new Twig_Source("", "support/include/upgrader/streams/core/9ef33a06-8f99b8bf.patch.sql", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\9ef33a06-8f99b8bf.patch.sql");
    }
}
