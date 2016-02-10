<?php

/* support/include/class.yaml.php */
class __TwigTemplate_ce590bca39777587e177192daf3d790a8723d07257c790e0f3281d9a654c7a78 extends Twig_Template
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
    class.yaml.php

    Parses YAML data files into PHP associative arrays. Useful for initial
    data shipped with osTicket.

    Currently, this module uses the pure-php implementation Spyc, written by
        - Chris Wanstrath
        - Vlad Andersen
    and released under an MIT license. The software is available at
    https://github.com/mustangostang/spyc

    Jared Hancock <jared@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
    \$Id: \$
**********************************************************************/

require_once \"Spyc.php\";
require_once \"class.error.php\";

class YamlDataParser {
    /* static */
    function load(\$file) {
        if (!file_exists(\$file)) {
            raise_error(\"\$file: File does not exist\", 'YamlParserError');
            return false;
        }
        return Spyc::YAMLLoad(\$file);
    }
}

class YamlParserError extends Error {
    static \$title = 'Error parsing YAML document';
}
?>
";
    }

    public function getTemplateName()
    {
        return "support/include/class.yaml.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     class.yaml.php*/
/* */
/*     Parses YAML data files into PHP associative arrays. Useful for initial*/
/*     data shipped with osTicket.*/
/* */
/*     Currently, this module uses the pure-php implementation Spyc, written by*/
/*         - Chris Wanstrath*/
/*         - Vlad Andersen*/
/*     and released under an MIT license. The software is available at*/
/*     https://github.com/mustangostang/spyc*/
/* */
/*     Jared Hancock <jared@osticket.com>*/
/*     Copyright (c)  2006-2013 osTicket*/
/*     http://www.osticket.com*/
/* */
/*     Released under the GNU General Public License WITHOUT ANY WARRANTY.*/
/*     See LICENSE.TXT for details.*/
/* */
/*     vim: expandtab sw=4 ts=4 sts=4:*/
/*     $Id: $*/
/* **********************************************************************//* */
/* */
/* require_once "Spyc.php";*/
/* require_once "class.error.php";*/
/* */
/* class YamlDataParser {*/
/*     /* static *//* */
/*     function load($file) {*/
/*         if (!file_exists($file)) {*/
/*             raise_error("$file: File does not exist", 'YamlParserError');*/
/*             return false;*/
/*         }*/
/*         return Spyc::YAMLLoad($file);*/
/*     }*/
/* }*/
/* */
/* class YamlParserError extends Error {*/
/*     static $title = 'Error parsing YAML document';*/
/* }*/
/* ?>*/
/* */
