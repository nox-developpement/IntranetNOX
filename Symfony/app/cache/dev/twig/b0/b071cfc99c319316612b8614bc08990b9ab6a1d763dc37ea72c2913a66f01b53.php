<?php

/* support/include/upgrader/streams/core/a67ba35e-98ae1ed2.patch.sql */
class __TwigTemplate_934bdfa7f40ece4f9ad8a1c6379df4a95072fd19212784bf23f23ffe99ac5fc3 extends Twig_Template
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
        $__internal_910951955d9c5f53ccd075b281caad42de5a82446fea431fddc83b9e231136eb = $this->env->getExtension("native_profiler");
        $__internal_910951955d9c5f53ccd075b281caad42de5a82446fea431fddc83b9e231136eb->enter($__internal_910951955d9c5f53ccd075b281caad42de5a82446fea431fddc83b9e231136eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/a67ba35e-98ae1ed2.patch.sql"));

        // line 1
        echo "/*
 * @version=1.6RC1-4
 * 
 * Stage RC3 for 1.6RC5 upgrade
 */

UPDATE `%TABLE_PREFIX%config`
    SET `ostversion`='1.6 RC1-4';
";
        
        $__internal_910951955d9c5f53ccd075b281caad42de5a82446fea431fddc83b9e231136eb->leave($__internal_910951955d9c5f53ccd075b281caad42de5a82446fea431fddc83b9e231136eb_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/a67ba35e-98ae1ed2.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /**/
/*  * @version=1.6RC1-4*/
/*  * */
/*  * Stage RC3 for 1.6RC5 upgrade*/
/*  *//* */
/* */
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `ostversion`='1.6 RC1-4';*/
/* */
