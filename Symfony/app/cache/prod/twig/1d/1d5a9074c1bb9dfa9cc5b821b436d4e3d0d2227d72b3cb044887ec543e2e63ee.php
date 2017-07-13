<?php

/* support/include/class.yaml.php */
class __TwigTemplate_770c0f86774a5118bb28c2e7b3fd1af65015397f4029e12842371020ecf4baf5 extends Twig_Template
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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/include/class.yaml.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\class.yaml.php");
    }
}
