<?php

/* support/secure.inc.php */
class __TwigTemplate_49649d3fbff11692a46c46c7525ff0141ef11e4a49dc102793f383978aa523a7 extends Twig_Template
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
    secure.inc.php

    File included on every client's \"secure\" pages

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
if(!strcasecmp(basename(\$_SERVER['SCRIPT_NAME']),basename(__FILE__))) die('Kwaheri!');
if(!file_exists('client.inc.php')) die('Fatal Error.');
require_once('client.inc.php');

//Client Login page: Ajax interface can pre-declare the function to trap logins.
if(!function_exists('clientLoginPage')) {
    function clientLoginPage(\$msg ='') {
        global \$ost, \$cfg, \$nav;
        \$_SESSION['_client']['auth']['dest'] =
            '/' . ltrim(\$_SERVER['REQUEST_URI'], '/');
        require('./login.php');
        exit;
    }
}

//User must be logged in!
if(!\$thisclient || !\$thisclient->getId() || !\$thisclient->isValid()){
    clientLoginPage();
    exit;
}
\$thisclient->refreshSession();
?>
";
    }

    public function getTemplateName()
    {
        return "support/secure.inc.php";
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
        return new Twig_Source("", "support/secure.inc.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\secure.inc.php");
    }
}
