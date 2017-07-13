<?php

/* support/include/upgrader/streams/core/435c62c3-2e7531a2.patch.sql */
class __TwigTemplate_a3219bd90f4ec0aacfd1abe736895225ffa7570791d12c0fce0f340d71c129c3 extends Twig_Template
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
 *  Move dept_access from group table to group_dept_access table.
 *
 * @version 1.7-rc1 Dept_Access
 */

-- Group department access table
DROP TABLE IF EXISTS `%TABLE_PREFIX%group_dept_access`;
CREATE TABLE `%TABLE_PREFIX%group_dept_access` (
  `group_id` int(10) unsigned NOT NULL default '0',
  `dept_id` int(10) unsigned NOT NULL default '0',
  UNIQUE KEY `group_dept`  (`group_id`,`dept_id`),
  KEY `dept_id` (`dept_id`)
) DEFAULT CHARSET=utf8;

-- Extend membership to groups
ALTER TABLE `%TABLE_PREFIX%department`
    ADD `group_membership` tinyint( 1 ) unsigned NOT NULL DEFAULT '0' AFTER `ispublic`;

-- Fix teams dates...
UPDATE `%TABLE_PREFIX%team`
    SET `created`=IF(TO_DAYS(`created`), `created`, IF(TO_DAYS(`updated`), `updated`, NOW())),
        `updated`=IF(TO_DAYS(`updated`), `updated`, NOW());

-- Fix groups dates...
UPDATE `%TABLE_PREFIX%groups`
    SET `created`=IF(TO_DAYS(`created`), `created`, IF(TO_DAYS(`updated`), `updated`, NOW())),
        `updated`=IF(TO_DAYS(`updated`), `updated`, NOW());

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='2e7531a201b5b8650dcd43681a832ebd';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/435c62c3-2e7531a2.patch.sql";
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
        return new Twig_Source("", "support/include/upgrader/streams/core/435c62c3-2e7531a2.patch.sql", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\435c62c3-2e7531a2.patch.sql");
    }
}
