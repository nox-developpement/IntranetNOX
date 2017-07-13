<?php

/* support/include/class.ajax.php */
class __TwigTemplate_f79a6a44e247a62a2082c184b450377a430faba1f1ab85fc8705948caea28d81 extends Twig_Template
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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/include/class.ajax.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\class.ajax.php");
    }
}
