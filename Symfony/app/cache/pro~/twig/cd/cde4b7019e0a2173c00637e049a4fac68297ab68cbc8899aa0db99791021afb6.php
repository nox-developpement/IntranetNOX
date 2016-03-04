<?php

/* support/include/pear/PEAR5.php */
class __TwigTemplate_94e7d8ebe18d4f4b6a23c9b260f3d36e844eaaecd55f0ace8a8a74611f4dbe7b extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/pear/PEAR5.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
