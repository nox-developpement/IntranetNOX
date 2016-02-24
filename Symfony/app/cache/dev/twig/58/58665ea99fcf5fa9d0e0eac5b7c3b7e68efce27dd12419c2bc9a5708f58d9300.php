<?php

/* support/include/class.passwd.php */
class __TwigTemplate_7031181fd7ef9778ced81d3533cefe8c5bf617402f3eb092d9bf5c2bb42e6a32 extends Twig_Template
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
        $__internal_611f9ac8d7c5277428db821a15bcb4d576e18ea50a477b30717dc6bc86344ddf = $this->env->getExtension("native_profiler");
        $__internal_611f9ac8d7c5277428db821a15bcb4d576e18ea50a477b30717dc6bc86344ddf->enter($__internal_611f9ac8d7c5277428db821a15bcb4d576e18ea50a477b30717dc6bc86344ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/class.passwd.php"));

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
        
        $__internal_611f9ac8d7c5277428db821a15bcb4d576e18ea50a477b30717dc6bc86344ddf->leave($__internal_611f9ac8d7c5277428db821a15bcb4d576e18ea50a477b30717dc6bc86344ddf_prof);

    }

    public function getTemplateName()
    {
        return "support/include/class.passwd.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**************************************************************************/
/*     class.passwd.php*/
/* */
/*     Password Hasher - Interface for phpass bcrypt hasher.*/
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
/* require_once(INCLUDE_DIR.'PasswordHash.php'); //helper class - will be removed then we move to php5*/
/* */
/* define('DEFAULT_WORK_FACTOR',8);*/
/* */
/* class Passwd {*/
/* */
/*     function cmp($passwd,$hash,$work_factor=0){*/
/*         */
/*         if($work_factor < 4 || $work_factor > 31)*/
/*             $work_factor=DEFAULT_WORK_FACTOR;*/
/* */
/*         $hasher = new PasswordHash($work_factor,FALSE);*/
/* */
/*         return ($hasher && $hasher->CheckPassword($passwd,$hash));*/
/*     }*/
/* */
/*     function hash($passwd, $work_factor=0){*/
/*        */
/*         if($work_factor < 4 || $work_factor > 31)*/
/*             $work_factor=DEFAULT_WORK_FACTOR;*/
/* */
/*         $hasher = new PasswordHash($work_factor,FALSE);*/
/*         */
/*         return ($hasher && ($hash=$hasher->HashPassword($passwd)))?$hash:null;*/
/*     }*/
/* }*/
/* ?>*/
/* */
