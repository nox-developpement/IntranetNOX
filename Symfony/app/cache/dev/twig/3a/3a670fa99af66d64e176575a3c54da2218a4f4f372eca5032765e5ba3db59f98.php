<?php

/* support/include/upgrader/streams/core/c00511c7-7be60a84.cleanup.sql */
class __TwigTemplate_ec6a404734395a964909f35e102b275c977f0cce741d342d04340e8cc2bf9517 extends Twig_Template
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
        $__internal_a09e1e36081518bdc20ecafed35698de25d28d6045031d2fbec01acd8dc8618e = $this->env->getExtension("native_profiler");
        $__internal_a09e1e36081518bdc20ecafed35698de25d28d6045031d2fbec01acd8dc8618e->enter($__internal_a09e1e36081518bdc20ecafed35698de25d28d6045031d2fbec01acd8dc8618e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/c00511c7-7be60a84.cleanup.sql"));

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
        
        $__internal_a09e1e36081518bdc20ecafed35698de25d28d6045031d2fbec01acd8dc8618e->leave($__internal_a09e1e36081518bdc20ecafed35698de25d28d6045031d2fbec01acd8dc8618e_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/c00511c7-7be60a84.cleanup.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
