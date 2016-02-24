<?php

/* support/include/class.ajax.php */
class __TwigTemplate_66862768c1acef8677961ecc28613e5c89636f433f2db870b6f004f3937d0d26 extends Twig_Template
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
        $__internal_2650f294ea03ad4b0057f9373c2f3a9dd981eca87394163a12fa3428db005fc7 = $this->env->getExtension("native_profiler");
        $__internal_2650f294ea03ad4b0057f9373c2f3a9dd981eca87394163a12fa3428db005fc7->enter($__internal_2650f294ea03ad4b0057f9373c2f3a9dd981eca87394163a12fa3428db005fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/class.ajax.php"));

        // line 1
        echo "<?php
/*********************************************************************
    class.ajax.php

    AjaxController class that is an extension of the ApiController class. It
    will be used to provide functionality common to all Ajax API calls

    Jared Hancock 
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/

require_once (INCLUDE_DIR.'class.api.php');

/**
 * AjaxController Class
 * A simple extension of the ApiController class that will assist in
 * providing functionality common to all Ajax call controllers. Any Ajax
 * call controller should inherit from this class in order to maintain
 * consistency.
 */
class AjaxController extends ApiController {
    function AjaxController() {
    
    }
    function staffOnly() {
        global \$thisstaff;
        if(!\$thisstaff || !\$thisstaff->isValid()) {
            Http::response(401,sprintf(__('Access Denied. IP %s'),\$_SERVER['REMOTE_ADDR']));
        }
    }
    /**
     * Convert a PHP array into a JSON-encoded string
     */
    function json_encode(\$what) {
        return Format::json_encode(\$what);
    }

    function encode(\$what) {
        return \$this->json_encode(\$what);
    }

    function get(\$var, \$default=null) {
        return (isset(\$_GET[\$var])) ? \$_GET[\$var] : \$default;
    }
}
";
        
        $__internal_2650f294ea03ad4b0057f9373c2f3a9dd981eca87394163a12fa3428db005fc7->leave($__internal_2650f294ea03ad4b0057f9373c2f3a9dd981eca87394163a12fa3428db005fc7_prof);

    }

    public function getTemplateName()
    {
        return "support/include/class.ajax.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     class.ajax.php*/
/* */
/*     AjaxController class that is an extension of the ApiController class. It*/
/*     will be used to provide functionality common to all Ajax API calls*/
/* */
/*     Jared Hancock */
/*     Copyright (c)  2006-2013 osTicket*/
/*     http://www.osticket.com*/
/* */
/*     Released under the GNU General Public License WITHOUT ANY WARRANTY.*/
/*     See LICENSE.TXT for details.*/
/* */
/*     vim: expandtab sw=4 ts=4 sts=4:*/
/* **********************************************************************//* */
/* */
/* require_once (INCLUDE_DIR.'class.api.php');*/
/* */
/* /***/
/*  * AjaxController Class*/
/*  * A simple extension of the ApiController class that will assist in*/
/*  * providing functionality common to all Ajax call controllers. Any Ajax*/
/*  * call controller should inherit from this class in order to maintain*/
/*  * consistency.*/
/*  *//* */
/* class AjaxController extends ApiController {*/
/*     function AjaxController() {*/
/*     */
/*     }*/
/*     function staffOnly() {*/
/*         global $thisstaff;*/
/*         if(!$thisstaff || !$thisstaff->isValid()) {*/
/*             Http::response(401,sprintf(__('Access Denied. IP %s'),$_SERVER['REMOTE_ADDR']));*/
/*         }*/
/*     }*/
/*     /***/
/*      * Convert a PHP array into a JSON-encoded string*/
/*      *//* */
/*     function json_encode($what) {*/
/*         return Format::json_encode($what);*/
/*     }*/
/* */
/*     function encode($what) {*/
/*         return $this->json_encode($what);*/
/*     }*/
/* */
/*     function get($var, $default=null) {*/
/*         return (isset($_GET[$var])) ? $_GET[$var] : $default;*/
/*     }*/
/* }*/
/* */
