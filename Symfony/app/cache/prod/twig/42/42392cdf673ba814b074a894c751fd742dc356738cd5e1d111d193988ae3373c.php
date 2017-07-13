<?php

/* support/include/upgrader/streams/core/4323a6a8-9ef33a06.patch.sql */
class __TwigTemplate_fedd7bfd94c0a5c5a387442517afabb1519011c2b09aee2c90c0a09a7bae9e6d extends Twig_Template
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
 * @signature 9ef33a062ca3a20190dfad594d594a69
 * @title Add organization features
 *
 */

ALTER TABLE `%TABLE_PREFIX%form`
    CHANGE `type` `type` varchar(8) NOT NULL DEFAULT 'G';

ALTER TABLE `%TABLE_PREFIX%list_items`
    ADD `status` int(11) unsigned NOT NULL DEFAULT 1 AFTER `list_id`,
    ADD `properties` text AFTER `sort`;

ALTER TABLE `%TABLE_PREFIX%organization`
    ADD `status` int(11) unsigned NOT NULL DEFAULT 0 AFTER `staff_id`,
    ADD `domain` varchar(128) NOT NULL DEFAULT '' AFTER `status`,
    ADD `extra` text AFTER `domain`;

ALTER TABLE `%TABLE_PREFIX%filter`
    ADD `status` int(11) unsigned NOT NULL DEFAULT '0' AFTER `isactive`,
    ADD `ext_id` varchar(11) AFTER `topic_id`;

DROP TABLE IF EXISTS `%TABLE_PREFIX%note`;
CREATE TABLE `%TABLE_PREFIX%note` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) unsigned,
  `staff_id` int(11) unsigned NOT NULL DEFAULT 0,
  `ext_id` varchar(10),
  `body` text,
  `status` int(11) unsigned NOT NULL DEFAULT 0,
  `sort` int(11) unsigned NOT NULL DEFAULT 0,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `value` = '9ef33a062ca3a20190dfad594d594a69'
    WHERE `key` = 'schema_signature' AND `namespace` = 'core';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/4323a6a8-9ef33a06.patch.sql";
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
        return new Twig_Source("", "support/include/upgrader/streams/core/4323a6a8-9ef33a06.patch.sql", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\4323a6a8-9ef33a06.patch.sql");
    }
}
