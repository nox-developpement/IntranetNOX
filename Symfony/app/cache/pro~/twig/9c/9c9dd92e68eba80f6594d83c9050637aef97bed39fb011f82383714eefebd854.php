<?php

/* support/include/upgrader/streams/core/aa4664af-b19dc97d.patch.sql */
class __TwigTemplate_ec35ed3d61b14e891da8e5f36f0bc57709be2fb7ef36a2144e108a293b1503e9 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/aa4664af-b19dc97d.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
