<?php

/* support/include/upgrader/streams/core/f1ccd3bb-f5692e24.cleanup.sql */
class __TwigTemplate_d0a35fdacfadacff8b3e4a387c34f8704e895136c68991e1cf0269cc441d5a50 extends Twig_Template
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
        $__internal_b63166aef4fba4108474948a9b78a20063209d4bd7e696bef18c45c51143a52d = $this->env->getExtension("native_profiler");
        $__internal_b63166aef4fba4108474948a9b78a20063209d4bd7e696bef18c45c51143a52d->enter($__internal_b63166aef4fba4108474948a9b78a20063209d4bd7e696bef18c45c51143a52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/f1ccd3bb-f5692e24.cleanup.sql"));

        // line 1
        echo "/**
 * @version v1.8.1
 * @signature f5692e24c7afba7ab6168dde0b3bb3c8
 * @title Add regex field to ticket filters
 *
 * This fixes a glitch introduced @934954de8914d9bd2bb8343e805340ae where
 * a primary key was added to the %ticket_email_info table so that deleting
 * can be supported in a clustered environment. The patch added the
 * `thread_id` column as the primary key, which was incorrect, because the
 * `thread_id` may be null when rejected emails are recorded so they are
 * never considered again if found in the inbox.
 */

-- Add the primary key. The PK on `thread_id` would have been removed in the
-- task if it existed
ALTER TABLE `%TABLE_PREFIX%ticket_email_info`
    ADD `id` int(11) unsigned not null auto_increment FIRST,
    ADD PRIMARY KEY (`id`);

-- Drop the CDATA table, if any
DROP TABLE IF EXISTS `%TABLE_PREFIX%ticket__cdata`;
";
        
        $__internal_b63166aef4fba4108474948a9b78a20063209d4bd7e696bef18c45c51143a52d->leave($__internal_b63166aef4fba4108474948a9b78a20063209d4bd7e696bef18c45c51143a52d_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/f1ccd3bb-f5692e24.cleanup.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /***/
/*  * @version v1.8.1*/
/*  * @signature f5692e24c7afba7ab6168dde0b3bb3c8*/
/*  * @title Add regex field to ticket filters*/
/*  **/
/*  * This fixes a glitch introduced @934954de8914d9bd2bb8343e805340ae where*/
/*  * a primary key was added to the %ticket_email_info table so that deleting*/
/*  * can be supported in a clustered environment. The patch added the*/
/*  * `thread_id` column as the primary key, which was incorrect, because the*/
/*  * `thread_id` may be null when rejected emails are recorded so they are*/
/*  * never considered again if found in the inbox.*/
/*  *//* */
/* */
/* -- Add the primary key. The PK on `thread_id` would have been removed in the*/
/* -- task if it existed*/
/* ALTER TABLE `%TABLE_PREFIX%ticket_email_info`*/
/*     ADD `id` int(11) unsigned not null auto_increment FIRST,*/
/*     ADD PRIMARY KEY (`id`);*/
/* */
/* -- Drop the CDATA table, if any*/
/* DROP TABLE IF EXISTS `%TABLE_PREFIX%ticket__cdata`;*/
/* */
