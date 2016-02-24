<?php

/* support/logo.php */
class __TwigTemplate_d86b99b65bb8b03b83e0789c8c162f8e70ffa99cbf513bed191da94571ce8429 extends Twig_Template
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
        $__internal_3d68e411f3744f7552108a2e73c04415a9fa79201235001eb4b378cadb89907d = $this->env->getExtension("native_profiler");
        $__internal_3d68e411f3744f7552108a2e73c04415a9fa79201235001eb4b378cadb89907d->enter($__internal_3d68e411f3744f7552108a2e73c04415a9fa79201235001eb4b378cadb89907d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/logo.php"));

        // line 1
        echo "<?php
/*********************************************************************
    logo.php

    Simple logo to facilitate serving a customized client-side logo from
    osTicet. The logo is configurable in Admin Panel -> Settings -> Pages

    Peter Rotich <peter@osticket.com>
    Jared Hancock <jared@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/

// Don't update the session for inline image fetches
if (!function_exists('noop')) { function noop() {} }
session_set_save_handler('noop','noop','noop','noop','noop','noop');
define('DISABLE_SESSION', true);

require('client.inc.php');

if ((\$logo = \$ost->getConfig()->getClientLogo())) {
    \$logo->display();
} else {
    header('Location: '.ASSETS_PATH.'images/logo.png');
}

?>
";
        
        $__internal_3d68e411f3744f7552108a2e73c04415a9fa79201235001eb4b378cadb89907d->leave($__internal_3d68e411f3744f7552108a2e73c04415a9fa79201235001eb4b378cadb89907d_prof);

    }

    public function getTemplateName()
    {
        return "support/logo.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     logo.php*/
/* */
/*     Simple logo to facilitate serving a customized client-side logo from*/
/*     osTicet. The logo is configurable in Admin Panel -> Settings -> Pages*/
/* */
/*     Peter Rotich <peter@osticket.com>*/
/*     Jared Hancock <jared@osticket.com>*/
/*     Copyright (c)  2006-2013 osTicket*/
/*     http://www.osticket.com*/
/* */
/*     Released under the GNU General Public License WITHOUT ANY WARRANTY.*/
/*     See LICENSE.TXT for details.*/
/* */
/*     vim: expandtab sw=4 ts=4 sts=4:*/
/* **********************************************************************//* */
/* */
/* // Don't update the session for inline image fetches*/
/* if (!function_exists('noop')) { function noop() {} }*/
/* session_set_save_handler('noop','noop','noop','noop','noop','noop');*/
/* define('DISABLE_SESSION', true);*/
/* */
/* require('client.inc.php');*/
/* */
/* if (($logo = $ost->getConfig()->getClientLogo())) {*/
/*     $logo->display();*/
/* } else {*/
/*     header('Location: '.ASSETS_PATH.'images/logo.png');*/
/* }*/
/* */
/* ?>*/
/* */
