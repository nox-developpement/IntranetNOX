<?php

/* support/include/upgrader/streams/core/c00511c7-7be60a84.cleanup.sql */
class __TwigTemplate_47c20895448d2721a4b6530d54f9231191e3b5adbd10c4f9f2c6bf298f2f839f extends Twig_Template
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
}
/* -- Drop columns we nolonger need - (must be at the very bottom or after session table is created)*/
/* ALTER TABLE `%TABLE_PREFIX%config`*/
/*     DROP COLUMN `ostversion`,*/
/*     DROP COLUMN `timezone_offset`,*/
/*     DROP COLUMN `api_passphrase`;*/
/* */
/* -- Drop fields we no longer need in staff table.*/
/* ALTER TABLE `%TABLE_PREFIX%staff`*/
/*     DROP `append_signature`,*/
/*     DROP `timezone_offset`;*/
/* */
/* -- Drop fields we no longer need in department table.*/
/* ALTER TABLE `%TABLE_PREFIX%department`*/
/*     DROP `can_append_signature`;*/
/* */
/* -- Banlist table has been migrated to the email_filter_rule table*/
/* DROP TABLE `%TABLE_PREFIX%email_banlist`;*/
/* */
