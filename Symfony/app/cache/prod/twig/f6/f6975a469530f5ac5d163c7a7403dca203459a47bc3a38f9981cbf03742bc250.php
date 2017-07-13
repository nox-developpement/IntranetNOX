<?php

/* support/include/class.error.php */
class __TwigTemplate_1a048cefbaa6a3abef74e5378bab2c76e58bd9ed15921b9a99a1601a7e75b980 extends Twig_Template
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
    class.error.php

    Error handling for PHP < 5.0. Allows for returning a formal error from a
    function since throwing it isn't available. Also allows for consistent
    logging and debugging of errors in the osTicket system log.

    Peter Rotich <peter@osticket.com>
    Jared Hancock <jared@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/

class Error extends Exception {
    static \$title = '';
    static \$sendAlert = true;

    function __construct(\$message) {
        global \$ost;

        parent::__construct(__(\$message));
        \$message = str_replace(ROOT_DIR, '(root)/', _S(\$message));

        if (\$ost && \$ost->getConfig()->getLogLevel() == 3)
            \$message .= \"\\n\\n\" . \$this->getBacktrace();

        \$ost->logError(\$this->getTitle(), \$message, static::\$sendAlert);
    }

    function getTitle() {
        return get_class(\$this) . ': ' . _S(static::\$title);
    }

    function getBacktrace() {
        return str_replace(ROOT_DIR, '(root)/', \$this->getTraceAsString());
    }
}

class InitialDataError extends Error {
    static \$title = 'Problem with install initial data';
}

function raise_error(\$message, \$class=false) {
    if (!\$class) \$class = 'Error';
    new \$class(\$message);
}

// File storage backend exceptions
class IOException extends Error {
    static \$title = 'Unable to read resource content';
}

?>
";
    }

    public function getTemplateName()
    {
        return "support/include/class.error.php";
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
        return new Twig_Source("", "support/include/class.error.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\class.error.php");
    }
}
