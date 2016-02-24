<?php

/* support/logout.php */
class __TwigTemplate_175d33a224f2371107e123b75a0a7c79d5b65b653292e53140b7d1365f761218 extends Twig_Template
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
        $__internal_5a95dcbcea4a79c5cf62e3cfa1d5a58cfba0dac9ddbe94ac495aec346a9f7564 = $this->env->getExtension("native_profiler");
        $__internal_5a95dcbcea4a79c5cf62e3cfa1d5a58cfba0dac9ddbe94ac495aec346a9f7564->enter($__internal_5a95dcbcea4a79c5cf62e3cfa1d5a58cfba0dac9ddbe94ac495aec346a9f7564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/logout.php"));

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
        
        $__internal_5a95dcbcea4a79c5cf62e3cfa1d5a58cfba0dac9ddbe94ac495aec346a9f7564->leave($__internal_5a95dcbcea4a79c5cf62e3cfa1d5a58cfba0dac9ddbe94ac495aec346a9f7564_prof);

    }

    public function getTemplateName()
    {
        return "support/logout.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     logout.php*/
/* */
/*     Destroy clients session.*/
/* */
/*     Peter Rotich <peter@osticket.com>*/
/*     Copyright (c)  2006-2013 osTicket*/
/*     http://www.osticket.com*/
/* */
/*     Released under the GNU General Public License WITHOUT ANY WARRANTY.*/
/*     See LICENSE.TXT for details.*/
/* */
/*     vim: expandtab sw=4 ts=4 sts=4:*/
/* **********************************************************************//* */
/* */
/* require('client.inc.php');*/
/* //Check token: Make sure the user actually clicked on the link to logout.*/
/* if ($thisclient && $_GET['auth'] && $ost->validateLinkToken($_GET['auth']))*/
/*    $thisclient->logOut();*/
/* */
/* osTicketSession::destroyCookie();*/
/* */
/* Http::redirect('index.php');*/
/* ?>*/
/* */
