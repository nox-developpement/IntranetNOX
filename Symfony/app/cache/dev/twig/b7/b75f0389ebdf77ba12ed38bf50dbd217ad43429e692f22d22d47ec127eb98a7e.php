<?php

/* support/include/upgrader/streams/core/2e20a0eb-98ae1ed2.patch.sql */
class __TwigTemplate_5e36a71c8db18653da88b614dc1e8c3c808ba30bb10734a8ddec22af0d40285e extends Twig_Template
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
        $__internal_13f520c7659130743e3f3d005c705c40d443b2088c5bb0c053b8cf42d114feb8 = $this->env->getExtension("native_profiler");
        $__internal_13f520c7659130743e3f3d005c705c40d443b2088c5bb0c053b8cf42d114feb8->enter($__internal_13f520c7659130743e3f3d005c705c40d443b2088c5bb0c053b8cf42d114feb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/2e20a0eb-98ae1ed2.patch.sql"));

        // line 1
        echo "/*
 * @version=1.6RC1-4
 * 
 * Stage RC4 for 1.6RC5 upgrade
 */

UPDATE `%TABLE_PREFIX%config`
    SET `ostversion`='1.6 RC1-4';
";
        
        $__internal_13f520c7659130743e3f3d005c705c40d443b2088c5bb0c053b8cf42d114feb8->leave($__internal_13f520c7659130743e3f3d005c705c40d443b2088c5bb0c053b8cf42d114feb8_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/2e20a0eb-98ae1ed2.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /**/
/*  * @version=1.6RC1-4*/
/*  * */
/*  * Stage RC4 for 1.6RC5 upgrade*/
/*  *//* */
/* */
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `ostversion`='1.6 RC1-4';*/
/* */
