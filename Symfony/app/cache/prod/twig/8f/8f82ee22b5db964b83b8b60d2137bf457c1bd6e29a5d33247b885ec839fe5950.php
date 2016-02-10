<?php

/* support/include/upgrader/streams/core/d959a00e-32de1766.patch.sql */
class __TwigTemplate_35f59a74560a87e42f674e4da12d89948ab9711a644759c1b9631a798d1c873e extends Twig_Template
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
 * The database install script changed to support installation on cluster
 * servers. No significant changes need to be rolled for continuous updaters
 *
 * @version v1.7.1
 * @signature 32de1766d56e43215041fa982dcb465e
 */

ALTER TABLE `%TABLE_PREFIX%session`
   CHANGE `session_id` `session_id` VARCHAR(255) collate ascii_general_ci,
   CHANGE `session_data` `session_data` BLOB;

-- update schema signature
UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='32de1766d56e43215041fa982dcb465e';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/d959a00e-32de1766.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* /***/
/*  * The database install script changed to support installation on cluster*/
/*  * servers. No significant changes need to be rolled for continuous updaters*/
/*  **/
/*  * @version v1.7.1*/
/*  * @signature 32de1766d56e43215041fa982dcb465e*/
/*  *//* */
/* */
/* ALTER TABLE `%TABLE_PREFIX%session`*/
/*    CHANGE `session_id` `session_id` VARCHAR(255) collate ascii_general_ci,*/
/*    CHANGE `session_data` `session_data` BLOB;*/
/* */
/* -- update schema signature*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `schema_signature`='32de1766d56e43215041fa982dcb465e';*/
/* */
