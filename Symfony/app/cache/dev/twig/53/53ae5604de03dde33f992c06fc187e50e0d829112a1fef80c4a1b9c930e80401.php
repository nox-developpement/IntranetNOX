<?php

/* support/view.php */
class __TwigTemplate_2d93278cce019ebd54b301dc95c55af2f25cbee310c605ca2e2caaabedcab3b6 extends Twig_Template
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
        $__internal_fa232d3506f7491ac31ec357ef086aeaaa3dac3c7719a95c58f4bc8c892d6974 = $this->env->getExtension("native_profiler");
        $__internal_fa232d3506f7491ac31ec357ef086aeaaa3dac3c7719a95c58f4bc8c892d6974->enter($__internal_fa232d3506f7491ac31ec357ef086aeaaa3dac3c7719a95c58f4bc8c892d6974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/view.php"));

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
        
        $__internal_fa232d3506f7491ac31ec357ef086aeaaa3dac3c7719a95c58f4bc8c892d6974->leave($__internal_fa232d3506f7491ac31ec357ef086aeaaa3dac3c7719a95c58f4bc8c892d6974_prof);

    }

    public function getTemplateName()
    {
        return "support/view.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     view.php*/
/* */
/*     Ticket View.*/
/* */
/*     Peter Rotich <peter@osticket.com>*/
/*     Copyright (c)  2006-2010 osTicket*/
/*     http://www.osticket.com*/
/* */
/*     Released under the GNU General Public License WITHOUT ANY WARRANTY.*/
/*     See LICENSE.TXT for details.*/
/* */
/*     vim: expandtab sw=4 ts=4 sts=4:*/
/*     $Id: $*/
/* **********************************************************************//* */
/* require_once('client.inc.php');*/
/* */
/* $errors = array();*/
/* // Check if the client is already signed in. Don't corrupt their session!*/
/* if ($_GET['auth']*/
/*         && $thisclient*/
/*         && ($u = TicketUser::lookupByToken($_GET['auth']))*/
/*         && ($u->getUserId() == $thisclient->getId())*/
/* ) {*/
/*     // Switch auth keys ? (Otherwise the user can never use links for two*/
/*     // different tickets)*/
/*     if (($bk = $thisclient->getAuthBackend()) instanceof AuthTokenAuthentication) {*/
/*         $bk->setAuthKey($u, $bk);*/
/*     }*/
/*     Http::redirect('tickets.php?id='.$u->getTicketId());*/
/* }*/
/* // Try autologin the user*/
/* // Authenticated user can be of type ticket owner or collaborator*/
/* elseif (isset($_GET['auth']) || isset($_GET['t'])) {*/
/*     // TODO: Consider receiving an AccessDenied object*/
/*     $user =  UserAuthenticationBackend::processSignOn($errors, false);*/
/* }*/
/* */
/* if (@$user && is_object($user) && $user->getTicketId())*/
/*     Http::redirect('tickets.php?id='.$user->getTicketId());*/
/* */
/* $nav = new UserNav();*/
/* $nav->setActiveNav('status');*/
/* */
/* $inc = 'accesslink.inc.php';*/
/* require CLIENTINC_DIR.'header.inc.php';*/
/* require CLIENTINC_DIR.$inc;*/
/* require CLIENTINC_DIR.'footer.inc.php';*/
/* ?>*/
/* */
