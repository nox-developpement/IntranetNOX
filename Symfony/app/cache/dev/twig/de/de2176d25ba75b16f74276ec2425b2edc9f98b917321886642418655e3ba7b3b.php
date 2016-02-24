<?php

/* support/include/upgrader/streams/core/aee589ab-98ae1ed2.patch.sql */
class __TwigTemplate_631d3852d78ef7658c8f3e783d993109a70fd9d7ed652b2726336fb99de5dbe3 extends Twig_Template
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
        $__internal_095c26f91ed01b6dd56646f94680a7bda0a3483aaf67b8301d3810cc3bca84ae = $this->env->getExtension("native_profiler");
        $__internal_095c26f91ed01b6dd56646f94680a7bda0a3483aaf67b8301d3810cc3bca84ae->enter($__internal_095c26f91ed01b6dd56646f94680a7bda0a3483aaf67b8301d3810cc3bca84ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/aee589ab-98ae1ed2.patch.sql"));

        // line 1
        echo "/*
 * @version=1.6RC1-4
 * 
 * Stage RC1 for 1.6RC5 upgrade
 */

UPDATE `%TABLE_PREFIX%config`
    SET `ostversion`='1.6 RC1-4';
";
        
        $__internal_095c26f91ed01b6dd56646f94680a7bda0a3483aaf67b8301d3810cc3bca84ae->leave($__internal_095c26f91ed01b6dd56646f94680a7bda0a3483aaf67b8301d3810cc3bca84ae_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/aee589ab-98ae1ed2.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /**/
/*  * @version=1.6RC1-4*/
/*  * */
/*  * Stage RC1 for 1.6RC5 upgrade*/
/*  *//* */
/* */
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `ostversion`='1.6 RC1-4';*/
/* */
