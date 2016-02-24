<?php

/* support/api/api.inc.php */
class __TwigTemplate_5bffcb6446ee0cf1658b850a43d926c2cad1450a1c102c106e0a52361ed95465 extends Twig_Template
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
        $__internal_450f0202ccb21c6b7328b90a2526cde6c5a7e7c37cf82c2d08be6f3341641a78 = $this->env->getExtension("native_profiler");
        $__internal_450f0202ccb21c6b7328b90a2526cde6c5a7e7c37cf82c2d08be6f3341641a78->enter($__internal_450f0202ccb21c6b7328b90a2526cde6c5a7e7c37cf82c2d08be6f3341641a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/api/api.inc.php"));

        // line 1
        echo "<?php
/*********************************************************************
    api.inc.php

    File included on every API page...handles common includes.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
file_exists('../main.inc.php') or die('System Error');

// Disable sessions for the API. API should be considered stateless and
// shouldn't chew up database records to store sessions
if (!defined('DISABLE_SESSION'))
    define('DISABLE_SESSION', true);

require_once('../main.inc.php');
require_once(INCLUDE_DIR.'class.http.php');
require_once(INCLUDE_DIR.'class.api.php');

?>
";
        
        $__internal_450f0202ccb21c6b7328b90a2526cde6c5a7e7c37cf82c2d08be6f3341641a78->leave($__internal_450f0202ccb21c6b7328b90a2526cde6c5a7e7c37cf82c2d08be6f3341641a78_prof);

    }

    public function getTemplateName()
    {
        return "support/api/api.inc.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     api.inc.php*/
/* */
/*     File included on every API page...handles common includes.*/
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
/* file_exists('../main.inc.php') or die('System Error');*/
/* */
/* // Disable sessions for the API. API should be considered stateless and*/
/* // shouldn't chew up database records to store sessions*/
/* if (!defined('DISABLE_SESSION'))*/
/*     define('DISABLE_SESSION', true);*/
/* */
/* require_once('../main.inc.php');*/
/* require_once(INCLUDE_DIR.'class.http.php');*/
/* require_once(INCLUDE_DIR.'class.api.php');*/
/* */
/* ?>*/
/* */
