<?php

/* support/include/i18n/en_US/help/tips/install.yaml */
class __TwigTemplate_6adface5df652076f68237deb912ea489902f1e88538cdc14f7f6312d25064d5 extends Twig_Template
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
        echo "#
# Help popup items for the installer
#
# Fields:
# title - Shown in bold at the top of the popover window
# content - The body of the help popover
#
# The key names such as 'helpdesk_name' should not be translated as they
# must match the HTML #ids put into the page template.
#
---
helpdesk_name:
    title: Helpdesk Name
    content: |
        <p>The name of your support system e.g [Company Name] Support</p>

system_email:
    title: Default System Email
    content: |
        <p>Default email address e.g support@yourcompany.com - you can add
        more later!</p>

default_lang:
    title: Default System Language
    content: |
        <p>Initial data for this language will be installed into the
        database. For instance email templates and default system pages will
        be installed for this language.</p>
    links:
      - title: osTicket Language Packs
        href: http://osticket.com/download?product=langs

first_name:
    title: First Name
    content: |
        <p>Admin's first name</p>

last_name:
    title: Last Name
    content: |
        <p>Admin's last name</p>

email:
    title: Email Address
    content: |
        <p>Admin's personal email address. Must be different from system's
        default email.</p>

username:
    title: Username
    content: |
        <p>Admin's login name. Must be at least three (3) characters.</p>

password:
    title: Password
    content: |
        <p>Admin's password.  Must be five (5) characters or more.</p>

password2:
    title: Confirm Password
    content: |
        <p>Retype admin's password. Must match.</p>

db_prefix:
    title: MySQL Table Prefix
    content: |
        <p>osTicket requires table prefix in order to avoid possible table
        conflicts in a shared database.</p>

db_host:
    title: MySQL Hostname
    content: |
        <p>
        Most hosts use 'localhost' for local database hostname. Check with
        your host if localhost fails.
        </p>
        <p>
        Default port set in php.ini is assumed. A non-standard port number
        can be specified as <code>hostname:port</code>
        </p>

db_schema:
    title: MySQL Database
    content: |
        <p>Name of the database osTicket will use.</p>

db_user:
    title: MySQL Username
    content: |
        <p>The MySQL user must have full rights to the database.</p>

db_password:
    title: MySQL Password
    content: |
        <p>MySQL password associated with above user.</p>
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/install.yaml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* #*/
/* # Help popup items for the installer*/
/* #*/
/* # Fields:*/
/* # title - Shown in bold at the top of the popover window*/
/* # content - The body of the help popover*/
/* #*/
/* # The key names such as 'helpdesk_name' should not be translated as they*/
/* # must match the HTML #ids put into the page template.*/
/* #*/
/* ---*/
/* helpdesk_name:*/
/*     title: Helpdesk Name*/
/*     content: |*/
/*         <p>The name of your support system e.g [Company Name] Support</p>*/
/* */
/* system_email:*/
/*     title: Default System Email*/
/*     content: |*/
/*         <p>Default email address e.g support@yourcompany.com - you can add*/
/*         more later!</p>*/
/* */
/* default_lang:*/
/*     title: Default System Language*/
/*     content: |*/
/*         <p>Initial data for this language will be installed into the*/
/*         database. For instance email templates and default system pages will*/
/*         be installed for this language.</p>*/
/*     links:*/
/*       - title: osTicket Language Packs*/
/*         href: http://osticket.com/download?product=langs*/
/* */
/* first_name:*/
/*     title: First Name*/
/*     content: |*/
/*         <p>Admin's first name</p>*/
/* */
/* last_name:*/
/*     title: Last Name*/
/*     content: |*/
/*         <p>Admin's last name</p>*/
/* */
/* email:*/
/*     title: Email Address*/
/*     content: |*/
/*         <p>Admin's personal email address. Must be different from system's*/
/*         default email.</p>*/
/* */
/* username:*/
/*     title: Username*/
/*     content: |*/
/*         <p>Admin's login name. Must be at least three (3) characters.</p>*/
/* */
/* password:*/
/*     title: Password*/
/*     content: |*/
/*         <p>Admin's password.  Must be five (5) characters or more.</p>*/
/* */
/* password2:*/
/*     title: Confirm Password*/
/*     content: |*/
/*         <p>Retype admin's password. Must match.</p>*/
/* */
/* db_prefix:*/
/*     title: MySQL Table Prefix*/
/*     content: |*/
/*         <p>osTicket requires table prefix in order to avoid possible table*/
/*         conflicts in a shared database.</p>*/
/* */
/* db_host:*/
/*     title: MySQL Hostname*/
/*     content: |*/
/*         <p>*/
/*         Most hosts use 'localhost' for local database hostname. Check with*/
/*         your host if localhost fails.*/
/*         </p>*/
/*         <p>*/
/*         Default port set in php.ini is assumed. A non-standard port number*/
/*         can be specified as <code>hostname:port</code>*/
/*         </p>*/
/* */
/* db_schema:*/
/*     title: MySQL Database*/
/*     content: |*/
/*         <p>Name of the database osTicket will use.</p>*/
/* */
/* db_user:*/
/*     title: MySQL Username*/
/*     content: |*/
/*         <p>The MySQL user must have full rights to the database.</p>*/
/* */
/* db_password:*/
/*     title: MySQL Password*/
/*     content: |*/
/*         <p>MySQL password associated with above user.</p>*/
/* */
