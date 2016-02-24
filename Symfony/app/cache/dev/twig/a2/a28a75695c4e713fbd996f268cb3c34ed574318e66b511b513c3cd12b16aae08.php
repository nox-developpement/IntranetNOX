<?php

/* support/include/class.app.php */
class __TwigTemplate_7c466f08503601a7ee873ad1414ef07372070f86fc75b075272ad7bbb50297c5 extends Twig_Template
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
        $__internal_8956decd6e62f857c2759273e8429f9170572354ad0108ea793ac3f3dff080f4 = $this->env->getExtension("native_profiler");
        $__internal_8956decd6e62f857c2759273e8429f9170572354ad0108ea793ac3f3dff080f4->enter($__internal_8956decd6e62f857c2759273e8429f9170572354ad0108ea793ac3f3dff080f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/class.app.php"));

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
        
        $__internal_8956decd6e62f857c2759273e8429f9170572354ad0108ea793ac3f3dff080f4->leave($__internal_8956decd6e62f857c2759273e8429f9170572354ad0108ea793ac3f3dff080f4_prof);

    }

    public function getTemplateName()
    {
        return "support/include/class.app.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
