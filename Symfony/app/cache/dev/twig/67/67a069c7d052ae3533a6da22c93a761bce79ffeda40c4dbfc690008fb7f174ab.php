<?php

/* support/include/upgrader/streams/core/8aeda901-16fcef4a.patch.sql */
class __TwigTemplate_f945a93f13b72ce8832552313302bcaf740c69c146e99a4c8827a9ecea93a733 extends Twig_Template
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
        $__internal_799211e8b68311f7a22ece03c0481b985e6957d0cdce6c517276d8cdf1982bb1 = $this->env->getExtension("native_profiler");
        $__internal_799211e8b68311f7a22ece03c0481b985e6957d0cdce6c517276d8cdf1982bb1->enter($__internal_799211e8b68311f7a22ece03c0481b985e6957d0cdce6c517276d8cdf1982bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/8aeda901-16fcef4a.patch.sql"));

        // line 1
        echo "

/**
 * @version v1.7.1
 * @signature 16fcef4a13d6475a5f8bfef462b548e2
 *
 *  Change email password field to varchar 255  ASCII
 *
 *
 */

ALTER TABLE  `%TABLE_PREFIX%email`
    CHANGE  `userpass`  `userpass` VARCHAR( 255 ) CHARACTER SET ASCII COLLATE ascii_general_ci NOT NULL;

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `value` = '16fcef4a13d6475a5f8bfef462b548e2'
    WHERE `key` = 'schema_signature' AND `namespace` = 'core';
";
        
        $__internal_799211e8b68311f7a22ece03c0481b985e6957d0cdce6c517276d8cdf1982bb1->leave($__internal_799211e8b68311f7a22ece03c0481b985e6957d0cdce6c517276d8cdf1982bb1_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/8aeda901-16fcef4a.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* */
/* */
/* /***/
/*  * @version v1.7.1*/
/*  * @signature 16fcef4a13d6475a5f8bfef462b548e2*/
/*  **/
/*  *  Change email password field to varchar 255  ASCII*/
/*  **/
/*  **/
/*  *//* */
/* */
/* ALTER TABLE  `%TABLE_PREFIX%email`*/
/*     CHANGE  `userpass`  `userpass` VARCHAR( 255 ) CHARACTER SET ASCII COLLATE ascii_general_ci NOT NULL;*/
/* */
/* -- Finished with patch*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `value` = '16fcef4a13d6475a5f8bfef462b548e2'*/
/*     WHERE `key` = 'schema_signature' AND `namespace` = 'core';*/
/* */
