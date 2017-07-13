<?php

/* support/profile.php */
class __TwigTemplate_63da673a0887208de4e293a3d08a89d4df9b3c0504df4b7b710e06997b0cfc13 extends Twig_Template
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
    profile.php

    Manage client profile. This will allow a logged-in user to manage
    his/her own public (non-internal) information

    Peter Rotich <peter@osticket.com>
    Jared Hancock <jared@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
    \$Id: \$
**********************************************************************/
require 'secure.inc.php';

require_once 'class.user.php';
\$user = User::lookup(\$thisclient->getId());

if (\$user && \$_POST) {
    \$errors = array();
    if (\$acct = \$thisclient->getAccount()) {
       \$acct->update(\$_POST, \$errors);
    }
    if (!\$errors && \$user->updateInfo(\$_POST, \$errors))
        Http::redirect('tickets.php');
}

\$inc = 'profile.inc.php';

include(CLIENTINC_DIR.'header.inc.php');
include(CLIENTINC_DIR.\$inc);
include(CLIENTINC_DIR.'footer.inc.php');

";
    }

    public function getTemplateName()
    {
        return "support/profile.php";
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
        return new Twig_Source("", "support/profile.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\profile.php");
    }
}
