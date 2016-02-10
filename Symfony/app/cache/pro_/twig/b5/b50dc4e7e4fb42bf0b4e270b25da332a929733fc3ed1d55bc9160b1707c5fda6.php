<?php

/* support/include/upgrader/streams/core/15b30765-dd0022fb.cleanup.sql */
class __TwigTemplate_f88be350f00d4f0125ec248abfcc7b4ebedd63ab2d33995ac000d09ef8f87b39 extends Twig_Template
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
        echo "
-- Drop fields we no longer need in the reference table.
-- NOTE: This was moved from the 1.6* major upgrade script because the
--       handling of attachments changed with dd0022fb
ALTER TABLE `%TABLE_PREFIX%ticket_attachment`
    DROP `file_size`,
    DROP `file_name`,
    DROP `file_key`,
    DROP `updated`,
    DROP `deleted`;
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/15b30765-dd0022fb.cleanup.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* */
/* -- Drop fields we no longer need in the reference table.*/
/* -- NOTE: This was moved from the 1.6* major upgrade script because the*/
/* --       handling of attachments changed with dd0022fb*/
/* ALTER TABLE `%TABLE_PREFIX%ticket_attachment`*/
/*     DROP `file_size`,*/
/*     DROP `file_name`,*/
/*     DROP `file_key`,*/
/*     DROP `updated`,*/
/*     DROP `deleted`;*/
/* */
