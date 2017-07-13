<?php

/* support/view.php */
class __TwigTemplate_4fbcbceddcb988b29bb6af532367fb3492a0821af9ca65f784d636a06fdd44e6 extends Twig_Template
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
    view.php

    Ticket View.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2010 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
    \$Id: \$
**********************************************************************/
require_once('client.inc.php');

\$errors = array();
// Check if the client is already signed in. Don't corrupt their session!
if (\$_GET['auth']
        && \$thisclient
        && (\$u = TicketUser::lookupByToken(\$_GET['auth']))
        && (\$u->getUserId() == \$thisclient->getId())
) {
    // Switch auth keys ? (Otherwise the user can never use links for two
    // different tickets)
    if ((\$bk = \$thisclient->getAuthBackend()) instanceof AuthTokenAuthentication) {
        \$bk->setAuthKey(\$u, \$bk);
    }
    Http::redirect('tickets.php?id='.\$u->getTicketId());
}
// Try autologin the user
// Authenticated user can be of type ticket owner or collaborator
elseif (isset(\$_GET['auth']) || isset(\$_GET['t'])) {
    // TODO: Consider receiving an AccessDenied object
    \$user =  UserAuthenticationBackend::processSignOn(\$errors, false);
}

if (@\$user && is_object(\$user) && \$user->getTicketId())
    Http::redirect('tickets.php?id='.\$user->getTicketId());

\$nav = new UserNav();
\$nav->setActiveNav('status');

\$inc = 'accesslink.inc.php';
require CLIENTINC_DIR.'header.inc.php';
require CLIENTINC_DIR.\$inc;
require CLIENTINC_DIR.'footer.inc.php';
?>
";
    }

    public function getTemplateName()
    {
        return "support/view.php";
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
        return new Twig_Source("", "support/view.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\view.php");
    }
}
