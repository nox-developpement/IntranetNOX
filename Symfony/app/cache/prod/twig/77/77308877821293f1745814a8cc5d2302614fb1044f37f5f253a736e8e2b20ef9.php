<?php

/* support/apps/dispatcher.php */
class __TwigTemplate_8b084c379eba6a61bd7d26703fc5e30b0de82c8c4b1570687e96133b9ebf0850 extends Twig_Template
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

    Dispatcher for client applications

    Jared Hancock <jared@osticket.com>
    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/

function clientLoginPage(\$msg='Unauthorized') {
    Http::response(403,'Must login: '.Format::htmlchars(\$msg));
    exit;
}

require('client.inc.php');

if(!defined('INCLUDE_DIR'))\tHttp::response(500, 'Server configuration error');
require_once INCLUDE_DIR.'/class.dispatcher.php';

\$dispatcher = new Dispatcher();

Signal::send('ajax.client', \$dispatcher);
print \$dispatcher->resolve(\$ost->get_path_info());
";
    }

    public function getTemplateName()
    {
        return "support/apps/dispatcher.php";
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
        return new Twig_Source("", "support/apps/dispatcher.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\apps\\dispatcher.php");
    }
}
