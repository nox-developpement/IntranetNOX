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
        $__internal_c0f529cbc5e6e697f453c52da210943c9299bdd6a1bfb506d018d0fef455c669 = $this->env->getExtension("native_profiler");
        $__internal_c0f529cbc5e6e697f453c52da210943c9299bdd6a1bfb506d018d0fef455c669->enter($__internal_c0f529cbc5e6e697f453c52da210943c9299bdd6a1bfb506d018d0fef455c669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/98ae1ed2-e342f869.cleanup.sql"));

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
        
        $__internal_c0f529cbc5e6e697f453c52da210943c9299bdd6a1bfb506d018d0fef455c669->leave($__internal_c0f529cbc5e6e697f453c52da210943c9299bdd6a1bfb506d018d0fef455c669_prof);

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
