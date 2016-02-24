<?php

/* support/include/pear/Mail/null.php */
class __TwigTemplate_5513668e17e3370984dd22966f0971c94d91b3f45084a12d8e138ac4887abec4 extends Twig_Template
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
        $__internal_1cf210db77e3feba1227a626eb6ba324d2bcb49eebef7882b9f93979841555b1 = $this->env->getExtension("native_profiler");
        $__internal_1cf210db77e3feba1227a626eb6ba324d2bcb49eebef7882b9f93979841555b1->enter($__internal_1cf210db77e3feba1227a626eb6ba324d2bcb49eebef7882b9f93979841555b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/pear/Mail/null.php"));

        // line 1
        echo "<?php
/**
 * Null implementation of the PEAR Mail interface
 *
 * PHP versions 4 and 5
 *
 * LICENSE:
 *
 * Copyright (c) 2010 Phil Kernick
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 * o Redistributions of source code must retain the above copyright
 *   notice, this list of conditions and the following disclaimer.
 * o Redistributions in binary form must reproduce the above copyright
 *   notice, this list of conditions and the following disclaimer in the
 *   documentation and/or other materials provided with the distribution.
 * o The names of the authors may not be used to endorse or promote
 *   products derived from this software without specific prior written
 *   permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * @category    Mail
 * @package     Mail
 * @author      Phil Kernick <philk@rotfl.com.au>
 * @copyright   2010 Phil Kernick
 * @license     http://opensource.org/licenses/bsd-license.php New BSD License
 * @version     CVS: \$Id: null.php 294747 2010-02-08 08:18:33Z clockwerx \$
 * @link        http://pear.php.net/package/Mail/
 */

/**
 * Null implementation of the PEAR Mail:: interface.
 * @access public
 * @package Mail
 * @version \$Revision: 294747 \$
 */
class Mail_null extends Mail {

    /**
     * Implements Mail_null::send() function. Silently discards all
     * mail.
     *
     * @param mixed \$recipients Either a comma-seperated list of recipients
     *              (RFC822 compliant), or an array of recipients,
     *              each RFC822 valid. This may contain recipients not
     *              specified in the headers, for Bcc:, resending
     *              messages, etc.
     *
     * @param array \$headers The array of headers to send with the mail, in an
     *              associative array, where the array key is the
     *              header name (ie, 'Subject'), and the array value
     *              is the header value (ie, 'test'). The header
     *              produced from those values would be 'Subject:
     *              test'.
     *
     * @param string \$body The full text of the message body, including any
     *               Mime parts, etc.
     *
     * @return mixed Returns true on success, or a PEAR_Error
     *               containing a descriptive error message on
     *               failure.
     * @access public
     */
    function send(\$recipients, \$headers, \$body)
    {
        return true;
    }

}
";
        
        $__internal_1cf210db77e3feba1227a626eb6ba324d2bcb49eebef7882b9f93979841555b1->leave($__internal_1cf210db77e3feba1227a626eb6ba324d2bcb49eebef7882b9f93979841555b1_prof);

    }

    public function getTemplateName()
    {
        return "support/include/pear/Mail/null.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /***/
/*  * Null implementation of the PEAR Mail interface*/
/*  **/
/*  * PHP versions 4 and 5*/
/*  **/
/*  * LICENSE:*/
/*  **/
/*  * Copyright (c) 2010 Phil Kernick*/
/*  * All rights reserved.*/
/*  **/
/*  * Redistribution and use in source and binary forms, with or without*/
/*  * modification, are permitted provided that the following conditions*/
/*  * are met:*/
/*  **/
/*  * o Redistributions of source code must retain the above copyright*/
/*  *   notice, this list of conditions and the following disclaimer.*/
/*  * o Redistributions in binary form must reproduce the above copyright*/
/*  *   notice, this list of conditions and the following disclaimer in the*/
/*  *   documentation and/or other materials provided with the distribution.*/
/*  * o The names of the authors may not be used to endorse or promote*/
/*  *   products derived from this software without specific prior written*/
/*  *   permission.*/
/*  **/
/*  * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS*/
/*  * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT*/
/*  * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR*/
/*  * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT*/
/*  * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,*/
/*  * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT*/
/*  * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,*/
/*  * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY*/
/*  * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT*/
/*  * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE*/
/*  * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.*/
/*  **/
/*  * @category    Mail*/
/*  * @package     Mail*/
/*  * @author      Phil Kernick <philk@rotfl.com.au>*/
/*  * @copyright   2010 Phil Kernick*/
/*  * @license     http://opensource.org/licenses/bsd-license.php New BSD License*/
/*  * @version     CVS: $Id: null.php 294747 2010-02-08 08:18:33Z clockwerx $*/
/*  * @link        http://pear.php.net/package/Mail/*/
/*  *//* */
/* */
/* /***/
/*  * Null implementation of the PEAR Mail:: interface.*/
/*  * @access public*/
/*  * @package Mail*/
/*  * @version $Revision: 294747 $*/
/*  *//* */
/* class Mail_null extends Mail {*/
/* */
/*     /***/
/*      * Implements Mail_null::send() function. Silently discards all*/
/*      * mail.*/
/*      **/
/*      * @param mixed $recipients Either a comma-seperated list of recipients*/
/*      *              (RFC822 compliant), or an array of recipients,*/
/*      *              each RFC822 valid. This may contain recipients not*/
/*      *              specified in the headers, for Bcc:, resending*/
/*      *              messages, etc.*/
/*      **/
/*      * @param array $headers The array of headers to send with the mail, in an*/
/*      *              associative array, where the array key is the*/
/*      *              header name (ie, 'Subject'), and the array value*/
/*      *              is the header value (ie, 'test'). The header*/
/*      *              produced from those values would be 'Subject:*/
/*      *              test'.*/
/*      **/
/*      * @param string $body The full text of the message body, including any*/
/*      *               Mime parts, etc.*/
/*      **/
/*      * @return mixed Returns true on success, or a PEAR_Error*/
/*      *               containing a descriptive error message on*/
/*      *               failure.*/
/*      * @access public*/
/*      *//* */
/*     function send($recipients, $headers, $body)*/
/*     {*/
/*         return true;*/
/*     }*/
/* */
/* }*/
/* */
