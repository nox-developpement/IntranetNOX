<?php

/* support/include/upgrader/streams/core/d959a00e-32de1766.patch.sql */
class __TwigTemplate_e27dc24098ef535b726155c3d76dc93a9cf94aea2419f3b295236c518584207a extends Twig_Template
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
        $__internal_50e9cf085765da300af7aac15a4d986faae5df0b44b5348cc5367d13ef1d21ce = $this->env->getExtension("native_profiler");
        $__internal_50e9cf085765da300af7aac15a4d986faae5df0b44b5348cc5367d13ef1d21ce->enter($__internal_50e9cf085765da300af7aac15a4d986faae5df0b44b5348cc5367d13ef1d21ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/d959a00e-32de1766.patch.sql"));

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
        
        $__internal_50e9cf085765da300af7aac15a4d986faae5df0b44b5348cc5367d13ef1d21ce->leave($__internal_50e9cf085765da300af7aac15a4d986faae5df0b44b5348cc5367d13ef1d21ce_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/d959a00e-32de1766.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
