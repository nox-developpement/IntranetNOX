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
        $__internal_c78381f494e154cbf167b842b6c6870a8a53f0dda03e25740b0c0fd2b14c3acb = $this->env->getExtension("native_profiler");
        $__internal_c78381f494e154cbf167b842b6c6870a8a53f0dda03e25740b0c0fd2b14c3acb->enter($__internal_c78381f494e154cbf167b842b6c6870a8a53f0dda03e25740b0c0fd2b14c3acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/logo.php"));

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
        
        $__internal_c78381f494e154cbf167b842b6c6870a8a53f0dda03e25740b0c0fd2b14c3acb->leave($__internal_c78381f494e154cbf167b842b6c6870a8a53f0dda03e25740b0c0fd2b14c3acb_prof);

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
