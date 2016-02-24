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
        $__internal_51affbda01c3fee80b58f4d535a69a57ab9016de60959b84e45e8fa5530ce87d = $this->env->getExtension("native_profiler");
        $__internal_51affbda01c3fee80b58f4d535a69a57ab9016de60959b84e45e8fa5530ce87d->enter($__internal_51affbda01c3fee80b58f4d535a69a57ab9016de60959b84e45e8fa5530ce87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/d959a00e-32de1766.patch.sql"));

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
        
        $__internal_51affbda01c3fee80b58f4d535a69a57ab9016de60959b84e45e8fa5530ce87d->leave($__internal_51affbda01c3fee80b58f4d535a69a57ab9016de60959b84e45e8fa5530ce87d_prof);

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
