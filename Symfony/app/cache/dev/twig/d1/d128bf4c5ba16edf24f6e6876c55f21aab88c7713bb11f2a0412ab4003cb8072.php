<?php

/* support/include/upgrader/streams/core/aa4664af-b19dc97d.patch.sql */
class __TwigTemplate_3f1a580d902a2cd81c6454d48058ced64b0f733e681e61f4e05609a2b7dad9bb extends Twig_Template
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
        $__internal_e741ae24dad3592dd660358e61ff84b000e6fb4643d13d925d411717dd46f502 = $this->env->getExtension("native_profiler");
        $__internal_e741ae24dad3592dd660358e61ff84b000e6fb4643d13d925d411717dd46f502->enter($__internal_e741ae24dad3592dd660358e61ff84b000e6fb4643d13d925d411717dd46f502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/aa4664af-b19dc97d.patch.sql"));

        // line 1
        echo "/**
 * Change IP address columns to have sufficient room to store IPv6 address
 *
 * @version 1.7-rc1 ipv6-addresses
 */

ALTER TABLE `%TABLE_PREFIX%api_key`
    CHANGE `ipaddr` `ipaddr` varchar(64) NOT NULL;

ALTER TABLE `%TABLE_PREFIX%session`
    CHANGE `user_id` `user_id` int(10) unsigned NOT NULL default '0'
        COMMENT 'osTicket staff ID',
    CHANGE `user_ip` `user_ip` varchar(64) NOT NULL;

ALTER TABLE `%TABLE_PREFIX%syslog`
    CHANGE `ip_address` `ip_address` varchar(64) NOT NULL;

ALTER TABLE `%TABLE_PREFIX%ticket`
    CHANGE `ip_address` `ip_address` varchar(64) NOT NULL default '';

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='b19dc97d19f7a30f59663c812d1f3ddc';
";
        
        $__internal_e741ae24dad3592dd660358e61ff84b000e6fb4643d13d925d411717dd46f502->leave($__internal_e741ae24dad3592dd660358e61ff84b000e6fb4643d13d925d411717dd46f502_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/aa4664af-b19dc97d.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /***/
/*  * Change IP address columns to have sufficient room to store IPv6 address*/
/*  **/
/*  * @version 1.7-rc1 ipv6-addresses*/
/*  *//* */
/* */
/* ALTER TABLE `%TABLE_PREFIX%api_key`*/
/*     CHANGE `ipaddr` `ipaddr` varchar(64) NOT NULL;*/
/* */
/* ALTER TABLE `%TABLE_PREFIX%session`*/
/*     CHANGE `user_id` `user_id` int(10) unsigned NOT NULL default '0'*/
/*         COMMENT 'osTicket staff ID',*/
/*     CHANGE `user_ip` `user_ip` varchar(64) NOT NULL;*/
/* */
/* ALTER TABLE `%TABLE_PREFIX%syslog`*/
/*     CHANGE `ip_address` `ip_address` varchar(64) NOT NULL;*/
/* */
/* ALTER TABLE `%TABLE_PREFIX%ticket`*/
/*     CHANGE `ip_address` `ip_address` varchar(64) NOT NULL default '';*/
/* */
/* -- Finished with patch*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `schema_signature`='b19dc97d19f7a30f59663c812d1f3ddc';*/
/* */
