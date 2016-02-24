<?php

/* support/include/pear/Auth/SASL/CramMD5.php */
class __TwigTemplate_843296900b416cababd589ba041a8deb63a9ddde3148ae86f3d5afc13eb0b243 extends Twig_Template
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
        $__internal_2ddbdff888308f3c709cdb49dfb78d6e2e542cf53cd7f7c7b3b83bb3150bb79e = $this->env->getExtension("native_profiler");
        $__internal_2ddbdff888308f3c709cdb49dfb78d6e2e542cf53cd7f7c7b3b83bb3150bb79e->enter($__internal_2ddbdff888308f3c709cdb49dfb78d6e2e542cf53cd7f7c7b3b83bb3150bb79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/pear/Auth/SASL/CramMD5.php"));

        // line 1
        echo "<?php
// +-----------------------------------------------------------------------+ 
// | Copyright (c) 2002-2003 Richard Heyes                                 | 
// | All rights reserved.                                                  | 
// |                                                                       | 
// | Redistribution and use in source and binary forms, with or without    | 
// | modification, are permitted provided that the following conditions    | 
// | are met:                                                              | 
// |                                                                       | 
// | o Redistributions of source code must retain the above copyright      | 
// |   notice, this list of conditions and the following disclaimer.       | 
// | o Redistributions in binary form must reproduce the above copyright   | 
// |   notice, this list of conditions and the following disclaimer in the | 
// |   documentation and/or other materials provided with the distribution.| 
// | o The names of the authors may not be used to endorse or promote      | 
// |   products derived from this software without specific prior written  | 
// |   permission.                                                         | 
// |                                                                       | 
// | THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS   | 
// | \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT     | 
// | LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR | 
// | A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT  | 
// | OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, | 
// | SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT      | 
// | LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, | 
// | DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY | 
// | THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT   | 
// | (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE | 
// | OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.  | 
// |                                                                       | 
// +-----------------------------------------------------------------------+ 
// | Author: Richard Heyes <richard@php.net>                               | 
// +-----------------------------------------------------------------------+ 
// 
// \$Id\$

/**
* Implmentation of CRAM-MD5 SASL mechanism
*
* @author  Richard Heyes <richard@php.net>
* @access  public
* @version 1.0
* @package Auth_SASL
*/

require_once('Auth/SASL/Common.php');

class Auth_SASL_CramMD5 extends Auth_SASL_Common
{
    /**
    * Implements the CRAM-MD5 SASL mechanism
    * This DOES NOT base64 encode the return value,
    * you will need to do that yourself.
    *
    * @param string \$user      Username
    * @param string \$pass      Password
    * @param string \$challenge The challenge supplied by the server.
    *                          this should be already base64_decoded.
    *
    * @return string The string to pass back to the server, of the form
    *                \"<user> <digest>\". This is NOT base64_encoded.
    */
    function getResponse(\$user, \$pass, \$challenge)
    {
        return \$user . ' ' . \$this->_HMAC_MD5(\$pass, \$challenge);
    }
}
?>";
        
        $__internal_2ddbdff888308f3c709cdb49dfb78d6e2e542cf53cd7f7c7b3b83bb3150bb79e->leave($__internal_2ddbdff888308f3c709cdb49dfb78d6e2e542cf53cd7f7c7b3b83bb3150bb79e_prof);

    }

    public function getTemplateName()
    {
        return "support/include/pear/Auth/SASL/CramMD5.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* // +-----------------------------------------------------------------------+ */
/* // | Copyright (c) 2002-2003 Richard Heyes                                 | */
/* // | All rights reserved.                                                  | */
/* // |                                                                       | */
/* // | Redistribution and use in source and binary forms, with or without    | */
/* // | modification, are permitted provided that the following conditions    | */
/* // | are met:                                                              | */
/* // |                                                                       | */
/* // | o Redistributions of source code must retain the above copyright      | */
/* // |   notice, this list of conditions and the following disclaimer.       | */
/* // | o Redistributions in binary form must reproduce the above copyright   | */
/* // |   notice, this list of conditions and the following disclaimer in the | */
/* // |   documentation and/or other materials provided with the distribution.| */
/* // | o The names of the authors may not be used to endorse or promote      | */
/* // |   products derived from this software without specific prior written  | */
/* // |   permission.                                                         | */
/* // |                                                                       | */
/* // | THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS   | */
/* // | "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT     | */
/* // | LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR | */
/* // | A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT  | */
/* // | OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, | */
/* // | SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT      | */
/* // | LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, | */
/* // | DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY | */
/* // | THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT   | */
/* // | (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE | */
/* // | OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.  | */
/* // |                                                                       | */
/* // +-----------------------------------------------------------------------+ */
/* // | Author: Richard Heyes <richard@php.net>                               | */
/* // +-----------------------------------------------------------------------+ */
/* // */
/* // $Id$*/
/* */
/* /***/
/* * Implmentation of CRAM-MD5 SASL mechanism*/
/* **/
/* * @author  Richard Heyes <richard@php.net>*/
/* * @access  public*/
/* * @version 1.0*/
/* * @package Auth_SASL*/
/* *//* */
/* */
/* require_once('Auth/SASL/Common.php');*/
/* */
/* class Auth_SASL_CramMD5 extends Auth_SASL_Common*/
/* {*/
/*     /***/
/*     * Implements the CRAM-MD5 SASL mechanism*/
/*     * This DOES NOT base64 encode the return value,*/
/*     * you will need to do that yourself.*/
/*     **/
/*     * @param string $user      Username*/
/*     * @param string $pass      Password*/
/*     * @param string $challenge The challenge supplied by the server.*/
/*     *                          this should be already base64_decoded.*/
/*     **/
/*     * @return string The string to pass back to the server, of the form*/
/*     *                "<user> <digest>". This is NOT base64_encoded.*/
/*     *//* */
/*     function getResponse($user, $pass, $challenge)*/
/*     {*/
/*         return $user . ' ' . $this->_HMAC_MD5($pass, $challenge);*/
/*     }*/
/* }*/
/* ?>*/
