<?php

/* support/logout.php */
class __TwigTemplate_8306840549c2cd16c971ee18361fcf63c9921d8f5a39f52977dc43c7e5c72394 extends Twig_Template
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
    logout.php

    Destroy clients session.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/

require('client.inc.php');
//Check token: Make sure the user actually clicked on the link to logout.
if (\$thisclient && \$_GET['auth'] && \$ost->validateLinkToken(\$_GET['auth']))
   \$thisclient->logOut();

osTicketSession::destroyCookie();

Http::redirect('index.php');
?>
";
    }

    public function getTemplateName()
    {
        return "support/logout.php";
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
        return new Twig_Source("", "support/logout.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\logout.php");
    }
}
