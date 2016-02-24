<?php

/* support/include/class.variable.php */
class __TwigTemplate_27b548608e9f3000186ff2e4381edd3c1b326cee446c7c988180815c8d1d6923 extends Twig_Template
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
        $__internal_8db0384e48e3f5e54e4b44fdd00f1a329a24b92652a648451310f7d8cc0cc307 = $this->env->getExtension("native_profiler");
        $__internal_8db0384e48e3f5e54e4b44fdd00f1a329a24b92652a648451310f7d8cc0cc307->enter($__internal_8db0384e48e3f5e54e4b44fdd00f1a329a24b92652a648451310f7d8cc0cc307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/class.variable.php"));

        // line 1
        echo "<?php
/*********************************************************************
    class.variable.php

    Variable replacer

    Used to parse, resolve and replace variables.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/

class VariableReplacer {

    var \$start_delim;
    var \$end_delim;

    var \$objects;
    var \$variables;

    var \$errors;

    function VariableReplacer(\$start_delim='(?:%{|%%7B)', \$end_delim='(?:}|%7D)') {

        \$this->start_delim = \$start_delim;
        \$this->end_delim = \$end_delim;

        \$this->objects = array();
        \$this->variables = array();
    }

    function setError(\$error) {
        \$this->errors[] = \$error;
    }

    function getErrors() {
        return \$this->errors;
    }

    function getObj(\$tag) {
        return @\$this->objects[\$tag];
    }

    function assign(\$var, \$val='') {

        if(\$val && is_object(\$val)) {
            \$this->objects[\$var] = \$val;
        } elseif(\$var && is_array(\$var)) {
            foreach(\$var as \$k => \$v)
                \$this->assign(\$k, \$v);
        } elseif(\$var) {
            \$this->variables[\$var] = \$val;
        }
    }

    function getVar(\$obj, \$var) {

        if(!\$obj) return \"\";

        if (!\$var) {
            if (method_exists(\$obj, 'asVar'))
                return call_user_func(array(\$obj, 'asVar'));
            elseif (method_exists(\$obj, '__toString'))
                return (string) \$obj;
        }

        list(\$v, \$part) = explode('.', \$var, 2);
        if (\$v && is_callable(array(\$obj, 'get'.ucfirst(\$v)))) {
            \$rv = call_user_func(array(\$obj, 'get'.ucfirst(\$v)));
            if(!\$rv || !is_object(\$rv))
                return \$rv;

            return \$this->getVar(\$rv, \$part);
        }

        if (!\$var || !method_exists(\$obj, 'getVar'))
            return \"\";

        list(\$tag, \$remainder) = explode('.', \$var, 2);
        if((\$rv = call_user_func(array(\$obj, 'getVar'), \$tag))===false)
            return \"\";

        if(!is_object(\$rv))
            return \$rv;

        return \$this->getVar(\$rv, \$remainder);
    }

    function replaceVars(\$input) {

        if(\$input && is_array(\$input))
            return array_map(array(\$this, 'replaceVars'), \$input);

        if(!(\$vars=\$this->_parse(\$input)))
            return \$input;

        return str_replace(array_keys(\$vars), array_values(\$vars), \$input);
    }

    function _resolveVar(\$var) {

        //Variable already memoized?
        if(\$var && @isset(\$this->variables[\$var]))
            return \$this->variables[\$var];

        \$parts = explode('.', \$var, 2);
        if(\$parts && (\$obj=\$this->getObj(\$parts[0])))
            return \$this->getVar(\$obj, \$parts[1]);
        elseif(\$parts[0] && @isset(\$this->variables[\$parts[0]])) //root override
            return \$this->variables[\$parts[0]];

        //Unknown object or variable - leavig it alone.
        \$this->setError(sprintf(__('Unknown object for \"%s\" tag'), \$var));
        return false;
    }

    function _parse(\$text) {

        \$input = \$text;
        \$result = array();
        if(!preg_match_all('/'.\$this->start_delim.'([A-Za-z_][\\w._]+)'.\$this->end_delim.'/',
                \$input, \$result))
            return null;

        \$vars = array();
        foreach(\$result[0] as \$k => \$v) {
            if(isset(\$vars[\$v])) continue;
            // Format::html_balance() may urlencode() the contents here
            \$val=\$this->_resolveVar(rawurldecode(\$result[1][\$k]));
            if(\$val!==false)
                \$vars[\$v] = \$val;
        }

        return \$vars;
    }
}
?>
";
        
        $__internal_8db0384e48e3f5e54e4b44fdd00f1a329a24b92652a648451310f7d8cc0cc307->leave($__internal_8db0384e48e3f5e54e4b44fdd00f1a329a24b92652a648451310f7d8cc0cc307_prof);

    }

    public function getTemplateName()
    {
        return "support/include/class.variable.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     class.variable.php*/
/* */
/*     Variable replacer*/
/* */
/*     Used to parse, resolve and replace variables.*/
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
/* class VariableReplacer {*/
/* */
/*     var $start_delim;*/
/*     var $end_delim;*/
/* */
/*     var $objects;*/
/*     var $variables;*/
/* */
/*     var $errors;*/
/* */
/*     function VariableReplacer($start_delim='(?:%{|%%7B)', $end_delim='(?:}|%7D)') {*/
/* */
/*         $this->start_delim = $start_delim;*/
/*         $this->end_delim = $end_delim;*/
/* */
/*         $this->objects = array();*/
/*         $this->variables = array();*/
/*     }*/
/* */
/*     function setError($error) {*/
/*         $this->errors[] = $error;*/
/*     }*/
/* */
/*     function getErrors() {*/
/*         return $this->errors;*/
/*     }*/
/* */
/*     function getObj($tag) {*/
/*         return @$this->objects[$tag];*/
/*     }*/
/* */
/*     function assign($var, $val='') {*/
/* */
/*         if($val && is_object($val)) {*/
/*             $this->objects[$var] = $val;*/
/*         } elseif($var && is_array($var)) {*/
/*             foreach($var as $k => $v)*/
/*                 $this->assign($k, $v);*/
/*         } elseif($var) {*/
/*             $this->variables[$var] = $val;*/
/*         }*/
/*     }*/
/* */
/*     function getVar($obj, $var) {*/
/* */
/*         if(!$obj) return "";*/
/* */
/*         if (!$var) {*/
/*             if (method_exists($obj, 'asVar'))*/
/*                 return call_user_func(array($obj, 'asVar'));*/
/*             elseif (method_exists($obj, '__toString'))*/
/*                 return (string) $obj;*/
/*         }*/
/* */
/*         list($v, $part) = explode('.', $var, 2);*/
/*         if ($v && is_callable(array($obj, 'get'.ucfirst($v)))) {*/
/*             $rv = call_user_func(array($obj, 'get'.ucfirst($v)));*/
/*             if(!$rv || !is_object($rv))*/
/*                 return $rv;*/
/* */
/*             return $this->getVar($rv, $part);*/
/*         }*/
/* */
/*         if (!$var || !method_exists($obj, 'getVar'))*/
/*             return "";*/
/* */
/*         list($tag, $remainder) = explode('.', $var, 2);*/
/*         if(($rv = call_user_func(array($obj, 'getVar'), $tag))===false)*/
/*             return "";*/
/* */
/*         if(!is_object($rv))*/
/*             return $rv;*/
/* */
/*         return $this->getVar($rv, $remainder);*/
/*     }*/
/* */
/*     function replaceVars($input) {*/
/* */
/*         if($input && is_array($input))*/
/*             return array_map(array($this, 'replaceVars'), $input);*/
/* */
/*         if(!($vars=$this->_parse($input)))*/
/*             return $input;*/
/* */
/*         return str_replace(array_keys($vars), array_values($vars), $input);*/
/*     }*/
/* */
/*     function _resolveVar($var) {*/
/* */
/*         //Variable already memoized?*/
/*         if($var && @isset($this->variables[$var]))*/
/*             return $this->variables[$var];*/
/* */
/*         $parts = explode('.', $var, 2);*/
/*         if($parts && ($obj=$this->getObj($parts[0])))*/
/*             return $this->getVar($obj, $parts[1]);*/
/*         elseif($parts[0] && @isset($this->variables[$parts[0]])) //root override*/
/*             return $this->variables[$parts[0]];*/
/* */
/*         //Unknown object or variable - leavig it alone.*/
/*         $this->setError(sprintf(__('Unknown object for "%s" tag'), $var));*/
/*         return false;*/
/*     }*/
/* */
/*     function _parse($text) {*/
/* */
/*         $input = $text;*/
/*         $result = array();*/
/*         if(!preg_match_all('/'.$this->start_delim.'([A-Za-z_][\w._]+)'.$this->end_delim.'/',*/
/*                 $input, $result))*/
/*             return null;*/
/* */
/*         $vars = array();*/
/*         foreach($result[0] as $k => $v) {*/
/*             if(isset($vars[$v])) continue;*/
/*             // Format::html_balance() may urlencode() the contents here*/
/*             $val=$this->_resolveVar(rawurldecode($result[1][$k]));*/
/*             if($val!==false)*/
/*                 $vars[$v] = $val;*/
/*         }*/
/* */
/*         return $vars;*/
/*     }*/
/* }*/
/* ?>*/
/* */
