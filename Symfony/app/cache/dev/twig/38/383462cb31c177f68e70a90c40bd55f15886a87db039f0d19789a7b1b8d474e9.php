<?php

/* support/include/pear/PEAR5.php */
class __TwigTemplate_e06b057a4eca99c8f05796a1d2a0f7f1399bc7a385691e52be76031247c9ae17 extends Twig_Template
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
        $__internal_58d3408f9ce25704f265406844d568989cc77f2f959bdc47424847923ef6d798 = $this->env->getExtension("native_profiler");
        $__internal_58d3408f9ce25704f265406844d568989cc77f2f959bdc47424847923ef6d798->enter($__internal_58d3408f9ce25704f265406844d568989cc77f2f959bdc47424847923ef6d798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/pear/PEAR5.php"));

        // line 1
        echo "<?php
/**
 * This is only meant for PHP 5 to get rid of certain strict warning
 * that doesn't get hidden since it's in the shutdown function
 */
class PEAR5
{
    /**
    * If you have a class that's mostly/entirely static, and you need static
    * properties, you can use this method to simulate them. Eg. in your method(s)
    * do this: \$myVar = &PEAR5::getStaticProperty('myclass', 'myVar');
    * You MUST use a reference, or they will not persist!
    *
    * @access public
    * @param  string \$class  The calling classname, to prevent clashes
    * @param  string \$var    The variable to retrieve.
    * @return mixed   A reference to the variable. If not set it will be
    *                 auto initialised to NULL.
    */
    static function &getStaticProperty(\$class, \$var)
    {
        static \$properties;
        if (!isset(\$properties[\$class])) {
            \$properties[\$class] = array();
        }

        if (!array_key_exists(\$var, \$properties[\$class])) {
            \$properties[\$class][\$var] = null;
        }

        return \$properties[\$class][\$var];
    }
}";
        
        $__internal_58d3408f9ce25704f265406844d568989cc77f2f959bdc47424847923ef6d798->leave($__internal_58d3408f9ce25704f265406844d568989cc77f2f959bdc47424847923ef6d798_prof);

    }

    public function getTemplateName()
    {
        return "support/include/pear/PEAR5.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /***/
/*  * This is only meant for PHP 5 to get rid of certain strict warning*/
/*  * that doesn't get hidden since it's in the shutdown function*/
/*  *//* */
/* class PEAR5*/
/* {*/
/*     /***/
/*     * If you have a class that's mostly/entirely static, and you need static*/
/*     * properties, you can use this method to simulate them. Eg. in your method(s)*/
/*     * do this: $myVar = &PEAR5::getStaticProperty('myclass', 'myVar');*/
/*     * You MUST use a reference, or they will not persist!*/
/*     **/
/*     * @access public*/
/*     * @param  string $class  The calling classname, to prevent clashes*/
/*     * @param  string $var    The variable to retrieve.*/
/*     * @return mixed   A reference to the variable. If not set it will be*/
/*     *                 auto initialised to NULL.*/
/*     *//* */
/*     static function &getStaticProperty($class, $var)*/
/*     {*/
/*         static $properties;*/
/*         if (!isset($properties[$class])) {*/
/*             $properties[$class] = array();*/
/*         }*/
/* */
/*         if (!array_key_exists($var, $properties[$class])) {*/
/*             $properties[$class][$var] = null;*/
/*         }*/
/* */
/*         return $properties[$class][$var];*/
/*     }*/
/* }*/
