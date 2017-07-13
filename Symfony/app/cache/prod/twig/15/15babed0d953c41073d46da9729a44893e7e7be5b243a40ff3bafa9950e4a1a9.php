<?php

/* support/scp/apps/dispatcher.php */
class __TwigTemplate_fd9d8b9b632132e5196a8e1718d8169241f1fe38d437d3c39ed3e1816b5dbaf0 extends Twig_Template
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
    dispatcher.php

    Dispatcher for staff applications

    Jared Hancock <jared@osticket.com>
    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
# Override staffLoginPage() defined in staff.inc.php to return an
# HTTP/Forbidden status rather than the actual login page.
# XXX: This should be moved to the AjaxController class
function staffLoginPage(\$msg='Unauthorized') {
    Http::response(403,'Must login: '.Format::htmlchars(\$msg));
    exit;
}

require('staff.inc.php');

//Clean house...don't let the world see your crap.
ini_set('display_errors', '0'); // Set by installer
ini_set('display_startup_errors', '0'); // Set by installer

//TODO: disable direct access via the browser? i,e All request must have REFER?
if(!defined('INCLUDE_DIR'))\tHttp::response(500, 'Server configuration error');

require_once INCLUDE_DIR.'/class.dispatcher.php';
\$dispatcher = new Dispatcher();

Signal::send('apps.scp', \$dispatcher);

# Call the respective function
print \$dispatcher->resolve(\$ost->get_path_info());
";
    }

    public function getTemplateName()
    {
        return "support/scp/apps/dispatcher.php";
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
        return new Twig_Source("", "support/scp/apps/dispatcher.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\scp\\apps\\dispatcher.php");
    }
}
