<?php

/* support/include/upgrader/streams/core/61c9d5d7-6de40a4d.patch.sql */
class __TwigTemplate_44a35cc726a5d8ac7490b79158345a8e4e785f3eeda457f4f8fe420d81a6dc40 extends Twig_Template
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
 * @version 1.8-stable
 * @signature 6de40a4d5bad7a2923e769a4db1ff3b9
 *
 * Cleanup old and no longer used config settings
 */

DELETE FROM `%TABLE_PREFIX%config` WHERE `namespace`='core' and `key` IN (
    'upload_dir',
    'clickable_urls',
    'allow_priority_change',
    'log_ticket_activity',
    'overdue_grace_period',
    'allow_email_spoofing',
    'show_notes_inline'
);

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `value` = '6de40a4d5bad7a2923e769a4db1ff3b9'
    WHERE `key` = 'schema_signature' AND `namespace` = 'core';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/61c9d5d7-6de40a4d.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* /***/
/*  * @version 1.8-stable*/
/*  * @signature 6de40a4d5bad7a2923e769a4db1ff3b9*/
/*  **/
/*  * Cleanup old and no longer used config settings*/
/*  *//* */
/* */
/* DELETE FROM `%TABLE_PREFIX%config` WHERE `namespace`='core' and `key` IN (*/
/*     'upload_dir',*/
/*     'clickable_urls',*/
/*     'allow_priority_change',*/
/*     'log_ticket_activity',*/
/*     'overdue_grace_period',*/
/*     'allow_email_spoofing',*/
/*     'show_notes_inline'*/
/* );*/
/* */
/* -- Finished with patch*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `value` = '6de40a4d5bad7a2923e769a4db1ff3b9'*/
/*     WHERE `key` = 'schema_signature' AND `namespace` = 'core';*/
/* */
