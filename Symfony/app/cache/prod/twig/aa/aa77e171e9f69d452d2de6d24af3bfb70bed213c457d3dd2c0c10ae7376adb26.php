<?php

/* support/include/class.app.php */
class __TwigTemplate_b3452271a5f9728db083776ae9081d513771ef0737e94ddd8624f074eeb8973a extends Twig_Template
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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/include/class.app.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\class.app.php");
    }
}
