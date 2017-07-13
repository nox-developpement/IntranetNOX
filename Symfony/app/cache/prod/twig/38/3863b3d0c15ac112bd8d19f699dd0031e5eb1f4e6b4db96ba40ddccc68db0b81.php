<?php

/* support/include/class.csrf.php */
class __TwigTemplate_8203f1a5dd40e3b0cf4ac6340b5f20dd35a4d76f8fa7dac499a790b7f350cd55 extends Twig_Template
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
    class.csrf.php

    Provides mechanisms to protect against cross-site request forgery
    attacks. This is accomplished by using a token that is not stored in a
    session, but required to make changes to the system.

    This can be accomplished by emitting a hidden field in a form, or
    sending a separate header (X-CSRFToken) when forms are submitted (e.g Ajax).

    This technique is based on the protection mechanism in the Django
    project, detailed at and thanks to
    https://docs.djangoproject.com/en/dev/ref/contrib/csrf/.

    * TIMEOUT
    Token can be expired after X seconds of inactivity (timeout) independent of the session.


    Jared Hancock
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/

Class CSRF {

    var \$name;
    var \$timeout;

    var \$csrf;

    function CSRF(\$name='__CSRFToken__', \$timeout=0) {

        \$this->name = \$name;
        \$this->timeout = \$timeout;
        \$this->csrf = &\$_SESSION['csrf'];
    }

    function reset() {
        \$this->csrf = array();
    }

    function isExpired() {
       return (\$this->timeout && (time()-\$this->csrf['time'])>\$this->timeout);
    }

    function getTokenName() {
        return \$this->name;
    }

    function rotate() {
        \$this->csrf['token'] = sha1(session_id().Crypto::random(16).SECRET_SALT);
        \$this->csrf['time'] = time();
    }

    function getToken() {

        if (!\$this->csrf['token'] || \$this->isExpired()) {
            \$this->rotate();
        } else {
            //Reset the timer
            \$this->csrf['time'] = time();
        }

        return \$this->csrf['token'];
    }

    function validateToken(\$token) {
        return (\$token && trim(\$token)==\$this->getToken() && !\$this->isExpired());
    }

    function getFormInput(\$name='') {
        if(!\$name) \$name = \$this->name;

        return sprintf('<input type=\"hidden\" name=\"%s\" value=\"%s\" />', \$name, \$this->getToken());
    }
}

/* global function to add hidden token input with to forms */
function csrf_token() {
    global \$ost;

    if(\$ost && \$ost->getCSRF())
        echo \$ost->getCSRFFormInput();
}
?>
";
    }

    public function getTemplateName()
    {
        return "support/include/class.csrf.php";
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
        return new Twig_Source("", "support/include/class.csrf.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\class.csrf.php");
    }
}
