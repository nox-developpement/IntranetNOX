<?php

/* support/scp/logo.php */
class __TwigTemplate_4ed1e32a7a89201b208bb8a905f8a60cb3f8a1767f17f282b6a6b2254279f09a extends Twig_Template
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
        $__internal_d95e6c8e9834870ea5913f4aaba0022779a9a299041797ad1602ea21dd76466d = $this->env->getExtension("native_profiler");
        $__internal_d95e6c8e9834870ea5913f4aaba0022779a9a299041797ad1602ea21dd76466d->enter($__internal_d95e6c8e9834870ea5913f4aaba0022779a9a299041797ad1602ea21dd76466d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/scp/logo.php"));

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

require_once('../main.inc.php');

if ((\$logo = \$ost->getConfig()->getStaffLogo())) {
    \$logo->display();
} else {
    header('Location: images/ost-logo.png');
}

?>
";
        
        $__internal_d95e6c8e9834870ea5913f4aaba0022779a9a299041797ad1602ea21dd76466d->leave($__internal_d95e6c8e9834870ea5913f4aaba0022779a9a299041797ad1602ea21dd76466d_prof);

    }

    public function getTemplateName()
    {
        return "support/scp/logo.php";
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
/* require_once('../main.inc.php');*/
/* */
/* if (($logo = $ost->getConfig()->getStaffLogo())) {*/
/*     $logo->display();*/
/* } else {*/
/*     header('Location: images/ost-logo.png');*/
/* }*/
/* */
/* ?>*/
/* */
