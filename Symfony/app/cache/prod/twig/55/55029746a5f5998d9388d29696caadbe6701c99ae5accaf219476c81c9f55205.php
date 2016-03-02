<?php

/* support/include/class.ajax.php */
class __TwigTemplate_f06e2ed70e618b52202c9f670ea2110826b5ca4ae58614c92fff9e0fd58c8e48 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/class.ajax.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
