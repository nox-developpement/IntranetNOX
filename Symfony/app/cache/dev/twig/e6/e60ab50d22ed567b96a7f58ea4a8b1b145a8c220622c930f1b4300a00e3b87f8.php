<?php

/* support/include/class.signal.php */
class __TwigTemplate_83a7eb544eb0838b5c48254e19ea10e81974342f3e6965c604ccc6a8586c8036 extends Twig_Template
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
        $__internal_a99bd6b2bb116443e101a37d94fef94647619de33a7bb3bc867971555e9a4b67 = $this->env->getExtension("native_profiler");
        $__internal_a99bd6b2bb116443e101a37d94fef94647619de33a7bb3bc867971555e9a4b67->enter($__internal_a99bd6b2bb116443e101a37d94fef94647619de33a7bb3bc867971555e9a4b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/class.signal.php"));

        // line 1
        echo "<?php
/*********************************************************************
    class.signal.php

    Simple interface for a publish and subscribe signal model

    Jared Hancock <jared@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/

/**
 * Signals implement a simple publish/subscribe event model. To keep things
 * simplistic between classes and to maintain compatible with PHP version 4,
 * signals will not be explicitly defined or registered. Instead, signals
 * are connected to callbacks via a string signal name.
 *
 * The system is proofed with a static inspection test which will ensure
 * that for every given Signal::connect() function call, somewhere else in
 * the codebase there exists a Signal::send() for the same named signal.
 */
class Signal {
    static private \$subscribers = array();

    /**
     * Subscribe to a signal.
     *
     * Signal::connect('user.auth', 'function');
     *
     * The subscribed function should receive a two arguments and will have
     * this signature:
     *
     * function callback(\$object, \$data);
     *
     * Where the \$object argument is the object originating the signal, and
     * the \$options is a hash-array of other information originating from-
     * and pertaining to the signal.
     *
     * The value of the \$data argument is not defined. It is signal
     * specific. It should be a hash-array of data; however, no runtime
     * checks are made to ensure such an interface.
     *
     * Optionally, if \$object is a class and is passed into the ::connect()
     * method, only instances of the named class or subclass will actually
     * be connected to the callable function.
     *
     * A predicate function, \$check, can be used to filter calls to the
     * signal handler. The function will receive the signal data and should
     * return true if the signal handler should be called.
     */
    static function connect(\$signal, \$callable, \$object=null,
            \$check=null) {
        if (!isset(self::\$subscribers[\$signal])) self::\$subscribers[\$signal] = array();
        // XXX: Ensure \$object if set is a class
        if (\$object && !is_string(\$object))
            trigger_error(sprintf(_S(\"Invalid object: %s: Expected class\"), \$object));
        elseif (\$check && !is_callable(\$check)) {
            trigger_error(_S(\"Invalid check function: Must be callable\"));
            \$check = null;
        }
        self::\$subscribers[\$signal][] = array(\$object, \$callable, \$check);
    }

    /**
     * Publish a signal.
     *
     * Signal::send('user.login', \$this, array('username'=>'blah'));
     *
     * All subscribers to the signal will be called in the order they
     * connect()ed to the signal. Subscribers do not have the opportunity to
     * interrupt or discontinue delivery of the signal to other subscribers.
     * The \$object argument is required and should almost always be (\$this).
     * Its interpretation is the object originating or sending the signal.
     * It could also be interpreted as the context of the signal.
     *
     * \$data if sent should be a hash-array of data included with the signal
     * event. There is otherwise no definition for what should or could be
     * included in the \$data array. The received data is received by
     * reference and can be passed to the callable by reference if the
     * callable is defined to receive it by reference. Therefore, it is
     * possible to propogate changes in the signal handlers back to the
     * originating context.
     */
    static function send(\$signal, \$object, &\$data=null) {
        if (!isset(self::\$subscribers[\$signal]))
            return;
        foreach (self::\$subscribers[\$signal] as \$sub) {
            list(\$s, \$callable, \$check) = \$sub;
            if (\$s && !is_a(\$object, \$s))
                continue;
            elseif (\$check && !call_user_func_array(\$check, array(\$object, \$data)))
                continue;
            call_user_func_array(\$callable, array(\$object, &\$data));
        }
    }
}
?>
";
        
        $__internal_a99bd6b2bb116443e101a37d94fef94647619de33a7bb3bc867971555e9a4b67->leave($__internal_a99bd6b2bb116443e101a37d94fef94647619de33a7bb3bc867971555e9a4b67_prof);

    }

    public function getTemplateName()
    {
        return "support/include/class.signal.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     class.signal.php*/
/* */
/*     Simple interface for a publish and subscribe signal model*/
/* */
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
/* /***/
/*  * Signals implement a simple publish/subscribe event model. To keep things*/
/*  * simplistic between classes and to maintain compatible with PHP version 4,*/
/*  * signals will not be explicitly defined or registered. Instead, signals*/
/*  * are connected to callbacks via a string signal name.*/
/*  **/
/*  * The system is proofed with a static inspection test which will ensure*/
/*  * that for every given Signal::connect() function call, somewhere else in*/
/*  * the codebase there exists a Signal::send() for the same named signal.*/
/*  *//* */
/* class Signal {*/
/*     static private $subscribers = array();*/
/* */
/*     /***/
/*      * Subscribe to a signal.*/
/*      **/
/*      * Signal::connect('user.auth', 'function');*/
/*      **/
/*      * The subscribed function should receive a two arguments and will have*/
/*      * this signature:*/
/*      **/
/*      * function callback($object, $data);*/
/*      **/
/*      * Where the $object argument is the object originating the signal, and*/
/*      * the $options is a hash-array of other information originating from-*/
/*      * and pertaining to the signal.*/
/*      **/
/*      * The value of the $data argument is not defined. It is signal*/
/*      * specific. It should be a hash-array of data; however, no runtime*/
/*      * checks are made to ensure such an interface.*/
/*      **/
/*      * Optionally, if $object is a class and is passed into the ::connect()*/
/*      * method, only instances of the named class or subclass will actually*/
/*      * be connected to the callable function.*/
/*      **/
/*      * A predicate function, $check, can be used to filter calls to the*/
/*      * signal handler. The function will receive the signal data and should*/
/*      * return true if the signal handler should be called.*/
/*      *//* */
/*     static function connect($signal, $callable, $object=null,*/
/*             $check=null) {*/
/*         if (!isset(self::$subscribers[$signal])) self::$subscribers[$signal] = array();*/
/*         // XXX: Ensure $object if set is a class*/
/*         if ($object && !is_string($object))*/
/*             trigger_error(sprintf(_S("Invalid object: %s: Expected class"), $object));*/
/*         elseif ($check && !is_callable($check)) {*/
/*             trigger_error(_S("Invalid check function: Must be callable"));*/
/*             $check = null;*/
/*         }*/
/*         self::$subscribers[$signal][] = array($object, $callable, $check);*/
/*     }*/
/* */
/*     /***/
/*      * Publish a signal.*/
/*      **/
/*      * Signal::send('user.login', $this, array('username'=>'blah'));*/
/*      **/
/*      * All subscribers to the signal will be called in the order they*/
/*      * connect()ed to the signal. Subscribers do not have the opportunity to*/
/*      * interrupt or discontinue delivery of the signal to other subscribers.*/
/*      * The $object argument is required and should almost always be ($this).*/
/*      * Its interpretation is the object originating or sending the signal.*/
/*      * It could also be interpreted as the context of the signal.*/
/*      **/
/*      * $data if sent should be a hash-array of data included with the signal*/
/*      * event. There is otherwise no definition for what should or could be*/
/*      * included in the $data array. The received data is received by*/
/*      * reference and can be passed to the callable by reference if the*/
/*      * callable is defined to receive it by reference. Therefore, it is*/
/*      * possible to propogate changes in the signal handlers back to the*/
/*      * originating context.*/
/*      *//* */
/*     static function send($signal, $object, &$data=null) {*/
/*         if (!isset(self::$subscribers[$signal]))*/
/*             return;*/
/*         foreach (self::$subscribers[$signal] as $sub) {*/
/*             list($s, $callable, $check) = $sub;*/
/*             if ($s && !is_a($object, $s))*/
/*                 continue;*/
/*             elseif ($check && !call_user_func_array($check, array($object, $data)))*/
/*                 continue;*/
/*             call_user_func_array($callable, array($object, &$data));*/
/*         }*/
/*     }*/
/* }*/
/* ?>*/
/* */
