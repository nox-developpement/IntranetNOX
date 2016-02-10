<?php

/* support/include/class.app.php */
class __TwigTemplate_c1f41d9a1c5556b85eb883d3681990ed9403c945d8c9e45cc82728df2f537d12 extends Twig_Template
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
    class.app.php

    Application registration system
    Apps, usually to be distributed as plugins, can register themselves
    using this utility class, and navigation links will be added to the
    staff and client interfaces.

    Jared Hancock <jared@osticket.com>
    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2014 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/

class Application {
    private static \$client_apps;
    private static \$staff_apps;
    private static \$admin_apps;

    function registerStaffApp(\$desc, \$href, \$info=array()) {
        self::\$staff_apps[] = array_merge(\$info,
            array('desc'=>\$desc, 'href'=>\$href));
    }

    function getStaffApps() {
        return self::\$staff_apps;
    }

    function registerClientApp(\$desc, \$href, \$info=array()) {
        self::\$client_apps[] = array_merge(\$info,
            array('desc'=>\$desc, 'href'=>\$href));
    }

    function getClientApps() {
        return self::\$client_apps;
    }

    function registerAdminApp(\$desc, \$href, \$info=array()) {
        self::\$admin_apps[] = array_merge(\$info,
            array('desc'=>\$desc, 'href'=>\$href));
    }

    function getAdminApps() {
        return self::\$admin_apps;
    }
}
";
    }

    public function getTemplateName()
    {
        return "support/include/class.app.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     class.app.php*/
/* */
/*     Application registration system*/
/*     Apps, usually to be distributed as plugins, can register themselves*/
/*     using this utility class, and navigation links will be added to the*/
/*     staff and client interfaces.*/
/* */
/*     Jared Hancock <jared@osticket.com>*/
/*     Peter Rotich <peter@osticket.com>*/
/*     Copyright (c)  2006-2014 osTicket*/
/*     http://www.osticket.com*/
/* */
/*     Released under the GNU General Public License WITHOUT ANY WARRANTY.*/
/*     See LICENSE.TXT for details.*/
/* */
/*     vim: expandtab sw=4 ts=4 sts=4:*/
/* **********************************************************************//* */
/* */
/* class Application {*/
/*     private static $client_apps;*/
/*     private static $staff_apps;*/
/*     private static $admin_apps;*/
/* */
/*     function registerStaffApp($desc, $href, $info=array()) {*/
/*         self::$staff_apps[] = array_merge($info,*/
/*             array('desc'=>$desc, 'href'=>$href));*/
/*     }*/
/* */
/*     function getStaffApps() {*/
/*         return self::$staff_apps;*/
/*     }*/
/* */
/*     function registerClientApp($desc, $href, $info=array()) {*/
/*         self::$client_apps[] = array_merge($info,*/
/*             array('desc'=>$desc, 'href'=>$href));*/
/*     }*/
/* */
/*     function getClientApps() {*/
/*         return self::$client_apps;*/
/*     }*/
/* */
/*     function registerAdminApp($desc, $href, $info=array()) {*/
/*         self::$admin_apps[] = array_merge($info,*/
/*             array('desc'=>$desc, 'href'=>$href));*/
/*     }*/
/* */
/*     function getAdminApps() {*/
/*         return self::$admin_apps;*/
/*     }*/
/* }*/
/* */
