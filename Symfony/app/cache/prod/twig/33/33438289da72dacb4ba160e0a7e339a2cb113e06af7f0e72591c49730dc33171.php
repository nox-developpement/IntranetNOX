<?php

/* support/include/upgrader/streams/core/c00511c7-7be60a84.cleanup.sql */
class __TwigTemplate_677475af13ceb3c020c5f3ad3666d1b3165feffb3a81cdafa4d4ec7d0b966513 extends Twig_Template
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
        echo "-- Drop columns we nolonger need - (must be at the very bottom or after session table is created)
ALTER TABLE `%TABLE_PREFIX%config`
    DROP COLUMN `ostversion`,
    DROP COLUMN `timezone_offset`,
    DROP COLUMN `api_passphrase`;

-- Drop fields we no longer need in staff table.
ALTER TABLE `%TABLE_PREFIX%staff`
    DROP `append_signature`,
    DROP `timezone_offset`;

-- Drop fields we no longer need in department table.
ALTER TABLE `%TABLE_PREFIX%department`
    DROP `can_append_signature`;

-- Banlist table has been migrated to the email_filter_rule table
DROP TABLE `%TABLE_PREFIX%email_banlist`;
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/c00511c7-7be60a84.cleanup.sql";
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
        return new Twig_Source("", "support/include/upgrader/streams/core/c00511c7-7be60a84.cleanup.sql", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\c00511c7-7be60a84.cleanup.sql");
    }
}
