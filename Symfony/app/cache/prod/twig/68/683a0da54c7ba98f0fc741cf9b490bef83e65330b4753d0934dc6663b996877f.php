<?php

/* support/include/upgrader/streams/core/1b0fce99-ed60ba20.patch.sql */
class __TwigTemplate_ce6a3e461bb008b714c1c97e737797359e2125e6e726655d39e27d600dead212 extends Twig_Template
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
 * @version v1.8 - Collaboration
 * @signature ed60ba203a473f4f32ac49eb45db16c7
 * @title Add support for ticket collaborators
 *
 * Adds the database structure for collaboration table
 *
 */

DROP TABLE IF EXISTS `%TABLE_PREFIX%ticket_collaborator`;
CREATE TABLE `%TABLE_PREFIX%ticket_collaborator` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `isactive` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `ticket_id` int(11) unsigned NOT NULL DEFAULT '0',
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  -- M => (message) clients, N => (note) 3rd-Party, R => (reply) external authority
  `role` char(1) NOT NULL DEFAULT 'M',
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `collab` (`ticket_id`,`user_id`)
) DEFAULT CHARSET=utf8;


--  Finish
UPDATE `%TABLE_PREFIX%config`
    SET `value` = 'ed60ba203a473f4f32ac49eb45db16c7'
        WHERE `key` = 'schema_signature' AND `namespace` = 'core';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/1b0fce99-ed60ba20.patch.sql";
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
        return new Twig_Source("", "support/include/upgrader/streams/core/1b0fce99-ed60ba20.patch.sql", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\1b0fce99-ed60ba20.patch.sql");
    }
}
