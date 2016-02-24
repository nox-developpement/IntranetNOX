<?php

/* support/include/upgrader/streams/core/03ff59bf-b26f29a6.cleanup.sql */
class __TwigTemplate_d512981107950f3128d9d52306686900fe68bc1343a3c5e94267204cbe8725e3 extends Twig_Template
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
        $__internal_10fe1d4b4b5c92bdda7aaf87307356bf38f4c89dd5a174eaf3ad3415128e3684 = $this->env->getExtension("native_profiler");
        $__internal_10fe1d4b4b5c92bdda7aaf87307356bf38f4c89dd5a174eaf3ad3415128e3684->enter($__internal_10fe1d4b4b5c92bdda7aaf87307356bf38f4c89dd5a174eaf3ad3415128e3684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/03ff59bf-b26f29a6.cleanup.sql"));

        // line 1
        echo "DELETE FROM  `%TABLE_PREFIX%config`
    WHERE  `key` = 'properties' AND  `namespace` LIKE  'TS.%';

DELETE FROM `%TABLE_PREFIX%ticket_status`
    WHERE `state` = 'resolved';

ALTER TABLE  `%TABLE_PREFIX%ticket_status`
    DROP  `notes`;

OPTIMIZE TABLE `%TABLE_PREFIX%ticket_status`;
";
        
        $__internal_10fe1d4b4b5c92bdda7aaf87307356bf38f4c89dd5a174eaf3ad3415128e3684->leave($__internal_10fe1d4b4b5c92bdda7aaf87307356bf38f4c89dd5a174eaf3ad3415128e3684_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/03ff59bf-b26f29a6.cleanup.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* DELETE FROM  `%TABLE_PREFIX%config`*/
/*     WHERE  `key` = 'properties' AND  `namespace` LIKE  'TS.%';*/
/* */
/* DELETE FROM `%TABLE_PREFIX%ticket_status`*/
/*     WHERE `state` = 'resolved';*/
/* */
/* ALTER TABLE  `%TABLE_PREFIX%ticket_status`*/
/*     DROP  `notes`;*/
/* */
/* OPTIMIZE TABLE `%TABLE_PREFIX%ticket_status`;*/
/* */
