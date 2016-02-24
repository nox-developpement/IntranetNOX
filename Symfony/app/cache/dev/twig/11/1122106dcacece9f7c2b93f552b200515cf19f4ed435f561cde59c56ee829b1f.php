<?php

/* support/include/upgrader/streams/core/9f3b454c-c0fd16f4.patch.sql */
class __TwigTemplate_e1f6832fa4b44a9c4efdfb27627f2c56ac471a75fd562cea71e048be62d3f0f2 extends Twig_Template
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
        $__internal_f433e7b652c5e0dc3b6e88b23d330bd457d13e59d70bc8b7181b3ae9ef7903f1 = $this->env->getExtension("native_profiler");
        $__internal_f433e7b652c5e0dc3b6e88b23d330bd457d13e59d70bc8b7181b3ae9ef7903f1->enter($__internal_f433e7b652c5e0dc3b6e88b23d330bd457d13e59d70bc8b7181b3ae9ef7903f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/9f3b454c-c0fd16f4.patch.sql"));

        // line 1
        echo "/**
 * @version v1.7
 *
 * @schema c0fd16f4eaf99b920be9f7fc6ebead32
 */

-- Increment varchar size for various fields... based on feedback from users.

ALTER TABLE  `%TABLE_PREFIX%session`
    CHANGE `session_id` `session_id` VARCHAR(255) collate ascii_general_ci NOT NULL DEFAULT  '';

ALTER TABLE  `%TABLE_PREFIX%ticket` 
    CHANGE  `name`  `name` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT  '',
    CHANGE  `email`  `email` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT  '',
    CHANGE  `subject`  `subject` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT  '[no subject]';

ALTER TABLE  `%TABLE_PREFIX%email` 
    CHANGE  `email`  `email` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT  '',
    CHANGE  `name`  `name` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT  '',
    CHANGE  `userid`  `userid` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    CHANGE  `mail_host`  `mail_host` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    CHANGE  `smtp_host`  `smtp_host` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;

ALTER TABLE  `%TABLE_PREFIX%department` 
    CHANGE  `dept_name`  `dept_name` VARCHAR( 128 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT  '';

UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='c0fd16f4eaf99b920be9f7fc6ebead32';
";
        
        $__internal_f433e7b652c5e0dc3b6e88b23d330bd457d13e59d70bc8b7181b3ae9ef7903f1->leave($__internal_f433e7b652c5e0dc3b6e88b23d330bd457d13e59d70bc8b7181b3ae9ef7903f1_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/9f3b454c-c0fd16f4.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /***/
/*  * @version v1.7*/
/*  **/
/*  * @schema c0fd16f4eaf99b920be9f7fc6ebead32*/
/*  *//* */
/* */
/* -- Increment varchar size for various fields... based on feedback from users.*/
/* */
/* ALTER TABLE  `%TABLE_PREFIX%session`*/
/*     CHANGE `session_id` `session_id` VARCHAR(255) collate ascii_general_ci NOT NULL DEFAULT  '';*/
/* */
/* ALTER TABLE  `%TABLE_PREFIX%ticket` */
/*     CHANGE  `name`  `name` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT  '',*/
/*     CHANGE  `email`  `email` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT  '',*/
/*     CHANGE  `subject`  `subject` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT  '[no subject]';*/
/* */
/* ALTER TABLE  `%TABLE_PREFIX%email` */
/*     CHANGE  `email`  `email` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT  '',*/
/*     CHANGE  `name`  `name` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT  '',*/
/*     CHANGE  `userid`  `userid` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,*/
/*     CHANGE  `mail_host`  `mail_host` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,*/
/*     CHANGE  `smtp_host`  `smtp_host` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;*/
/* */
/* ALTER TABLE  `%TABLE_PREFIX%department` */
/*     CHANGE  `dept_name`  `dept_name` VARCHAR( 128 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT  '';*/
/* */
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `schema_signature`='c0fd16f4eaf99b920be9f7fc6ebead32';*/
/* */
