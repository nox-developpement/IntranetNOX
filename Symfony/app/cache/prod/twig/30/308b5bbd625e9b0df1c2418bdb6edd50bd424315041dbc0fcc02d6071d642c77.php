<?php

/* support/include/class.passwd.php */
class __TwigTemplate_921c3b517525c5d151f7f7c3988c62f12e05c3e20208fc696aeffa44e155d0f4 extends Twig_Template
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
/*************************************************************************
    class.passwd.php

    Password Hasher - Interface for phpass bcrypt hasher.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/

require_once(INCLUDE_DIR.'PasswordHash.php'); //helper class - will be removed then we move to php5

define('DEFAULT_WORK_FACTOR',8);

class Passwd {

    function cmp(\$passwd,\$hash,\$work_factor=0){
        
        if(\$work_factor < 4 || \$work_factor > 31)
            \$work_factor=DEFAULT_WORK_FACTOR;

        \$hasher = new PasswordHash(\$work_factor,FALSE);

        return (\$hasher && \$hasher->CheckPassword(\$passwd,\$hash));
    }

    function hash(\$passwd, \$work_factor=0){
       
        if(\$work_factor < 4 || \$work_factor > 31)
            \$work_factor=DEFAULT_WORK_FACTOR;

        \$hasher = new PasswordHash(\$work_factor,FALSE);
        
        return (\$hasher && (\$hash=\$hasher->HashPassword(\$passwd)))?\$hash:null;
    }
}
?>
";
    }

    public function getTemplateName()
    {
        return "support/include/class.passwd.php";
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
        return new Twig_Source("", "support/include/class.passwd.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\class.passwd.php");
    }
}
