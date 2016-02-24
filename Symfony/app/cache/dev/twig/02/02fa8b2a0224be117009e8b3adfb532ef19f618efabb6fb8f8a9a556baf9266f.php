<?php

/* support/include/upgrader/streams/core/61c9d5d7-6de40a4d.patch.sql */
class __TwigTemplate_cbe3b267eec95b18120dd91b24f5e0b95b960548f86ca589d499f14ef0e7ea7d extends Twig_Template
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
        $__internal_4877c8ba4920ee6e49205e3661818876938a4260c5005bda7f6d6f03d34c002d = $this->env->getExtension("native_profiler");
        $__internal_4877c8ba4920ee6e49205e3661818876938a4260c5005bda7f6d6f03d34c002d->enter($__internal_4877c8ba4920ee6e49205e3661818876938a4260c5005bda7f6d6f03d34c002d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/61c9d5d7-6de40a4d.patch.sql"));

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
        
        $__internal_4877c8ba4920ee6e49205e3661818876938a4260c5005bda7f6d6f03d34c002d->leave($__internal_4877c8ba4920ee6e49205e3661818876938a4260c5005bda7f6d6f03d34c002d_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/61c9d5d7-6de40a4d.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
