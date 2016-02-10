<?php

/* support/include/upgrader/streams/core/98ae1ed2-e342f869.cleanup.sql */
class __TwigTemplate_6b1886de97d06a4562f47a487beee161d0dee72283a55dcecfd8079f21b0fc6f extends Twig_Template
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
        echo "ALTER TABLE `%TABLE_PREFIX%department` DROP `noreply_autoresp`;

ALTER TABLE `%TABLE_PREFIX%config`
    DROP `noreply_email`,
    DROP `alert_email`,
    DROP `api_whitelist`;

-- %email_pop3 migrated to %email table
TRUNCATE TABLE `%TABLE_PREFIX%email_pop3`;
DROP TABLE `%TABLE_PREFIX%email_pop3`;
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/98ae1ed2-e342f869.cleanup.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* ALTER TABLE `%TABLE_PREFIX%department` DROP `noreply_autoresp`;*/
/* */
/* ALTER TABLE `%TABLE_PREFIX%config`*/
/*     DROP `noreply_email`,*/
/*     DROP `alert_email`,*/
/*     DROP `api_whitelist`;*/
/* */
/* -- %email_pop3 migrated to %email table*/
/* TRUNCATE TABLE `%TABLE_PREFIX%email_pop3`;*/
/* DROP TABLE `%TABLE_PREFIX%email_pop3`;*/
/* */
