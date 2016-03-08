<?php

/* support/api/api.inc.php */
class __TwigTemplate_7c4dabc74d80d69cdbdebf6e617aeda366162704b2ff556a58f3ab3088c1e662 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/api/api.inc.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
