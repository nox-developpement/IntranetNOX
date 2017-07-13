<?php

/* support/include/upgrader/streams/core/16fcef4a-d51f303a.patch.sql */
class __TwigTemplate_883131ef09a3ff858f2ef2adafed84f10531a9561d47b485e9248d50c916084f extends Twig_Template
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
 * @version v1.8.0
 * @signature d51f303a2c9ee04f9906fc1b6047459f
 *
 * Make default data translatable. This patch also adds columns to database
 * tables to introduce the concept of a language.
 *
 */

ALTER TABLE `%TABLE_PREFIX%email_template_group`
    ADD `lang` varchar(16) NOT NULL default 'en_US' AFTER `name`;

ALTER TABLE `%TABLE_PREFIX%email_template`
    ADD `notes` text AFTER `body`;

ALTER TABLE `%TABLE_PREFIX%canned_response`
    ADD `lang` varchar(16) NOT NULL default 'en_US' AFTER `response`;

ALTER TABLE `%TABLE_PREFIX%page`
    ADD `lang` varchar(16) NOT NULL default 'en_US' AFTER `body`;

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `value` = 'd51f303a2c9ee04f9906fc1b6047459f'
    WHERE `key` = 'schema_signature' AND `namespace` = 'core';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/16fcef4a-d51f303a.patch.sql";
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
        return new Twig_Source("", "support/include/upgrader/streams/core/16fcef4a-d51f303a.patch.sql", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\16fcef4a-d51f303a.patch.sql");
    }
}
