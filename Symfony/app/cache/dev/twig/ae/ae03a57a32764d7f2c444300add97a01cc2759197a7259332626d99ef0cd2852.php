<?php

/* support/include/class.error.php */
class __TwigTemplate_c486bd220c76e8e78107a8387da51d020e71cc5d93f728776c3b0f154d2366f8 extends Twig_Template
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
        $__internal_8d427641b864797d5c0520a5f48ca4640ffcfab1d5b69676fb33069d63481e75 = $this->env->getExtension("native_profiler");
        $__internal_8d427641b864797d5c0520a5f48ca4640ffcfab1d5b69676fb33069d63481e75->enter($__internal_8d427641b864797d5c0520a5f48ca4640ffcfab1d5b69676fb33069d63481e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/class.error.php"));

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
        
        $__internal_8d427641b864797d5c0520a5f48ca4640ffcfab1d5b69676fb33069d63481e75->leave($__internal_8d427641b864797d5c0520a5f48ca4640ffcfab1d5b69676fb33069d63481e75_prof);

    }

    public function getTemplateName()
    {
        return "support/include/class.error.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     class.error.php*/
/* */
/*     Error handling for PHP < 5.0. Allows for returning a formal error from a*/
/*     function since throwing it isn't available. Also allows for consistent*/
/*     logging and debugging of errors in the osTicket system log.*/
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
/* class Error extends Exception {*/
/*     static $title = '';*/
/*     static $sendAlert = true;*/
/* */
/*     function __construct($message) {*/
/*         global $ost;*/
/* */
/*         parent::__construct(__($message));*/
/*         $message = str_replace(ROOT_DIR, '(root)/', _S($message));*/
/* */
/*         if ($ost && $ost->getConfig()->getLogLevel() == 3)*/
/*             $message .= "\n\n" . $this->getBacktrace();*/
/* */
/*         $ost->logError($this->getTitle(), $message, static::$sendAlert);*/
/*     }*/
/* */
/*     function getTitle() {*/
/*         return get_class($this) . ': ' . _S(static::$title);*/
/*     }*/
/* */
/*     function getBacktrace() {*/
/*         return str_replace(ROOT_DIR, '(root)/', $this->getTraceAsString());*/
/*     }*/
/* }*/
/* */
/* class InitialDataError extends Error {*/
/*     static $title = 'Problem with install initial data';*/
/* }*/
/* */
/* function raise_error($message, $class=false) {*/
/*     if (!$class) $class = 'Error';*/
/*     new $class($message);*/
/* }*/
/* */
/* // File storage backend exceptions*/
/* class IOException extends Error {*/
/*     static $title = 'Unable to read resource content';*/
/* }*/
/* */
/* ?>*/
/* */
