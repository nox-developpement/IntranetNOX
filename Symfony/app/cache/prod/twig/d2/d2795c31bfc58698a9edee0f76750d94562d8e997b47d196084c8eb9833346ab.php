<?php

/* support/api/http.php */
class __TwigTemplate_7422de76ec7f8f042e5a98605752b1a16203ca3fa40713ad48e255dfbb0e564d extends Twig_Template
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
    http.php

    HTTP controller for the osTicket API

    Jared Hancock
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
// Use sessions — it's important for SSO authentication, which uses
// /api/auth/ext
define('DISABLE_SESSION', false);

require 'api.inc.php';

# Include the main api urls
require_once INCLUDE_DIR.\"class.dispatcher.php\";

\$dispatcher = patterns('',
        url_post(\"^/tickets\\.(?P<format>xml|json|email)\$\", array('api.tickets.php:TicketApiController','create')),
        url('^/tasks/', patterns('',
                url_post(\"^cron\$\", array('api.cron.php:CronApiController', 'execute'))
         ))
        );

Signal::send('api', \$dispatcher);

# Call the respective function
print \$dispatcher->resolve(\$ost->get_path_info());
?>
";
    }

    public function getTemplateName()
    {
        return "support/api/http.php";
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
        return new Twig_Source("", "support/api/http.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\api\\http.php");
    }
}
