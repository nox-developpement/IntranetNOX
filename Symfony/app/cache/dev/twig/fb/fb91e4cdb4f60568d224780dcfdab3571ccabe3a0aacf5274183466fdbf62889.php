<?php

/* support/include/upgrader/streams/core/98ae1ed2-e342f869.cleanup.sql */
class __TwigTemplate_d73ce724c8d2ba332aab1374473734e835c7b11f1544eb7895570872d24c57d4 extends Twig_Template
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
        $__internal_234a3c2379bb8966bd0f4dae204e227b74cb9a8fb625c7713c21fc8644ab53ce = $this->env->getExtension("native_profiler");
        $__internal_234a3c2379bb8966bd0f4dae204e227b74cb9a8fb625c7713c21fc8644ab53ce->enter($__internal_234a3c2379bb8966bd0f4dae204e227b74cb9a8fb625c7713c21fc8644ab53ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/98ae1ed2-e342f869.cleanup.sql"));

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
        
        $__internal_234a3c2379bb8966bd0f4dae204e227b74cb9a8fb625c7713c21fc8644ab53ce->leave($__internal_234a3c2379bb8966bd0f4dae204e227b74cb9a8fb625c7713c21fc8644ab53ce_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/98ae1ed2-e342f869.cleanup.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
