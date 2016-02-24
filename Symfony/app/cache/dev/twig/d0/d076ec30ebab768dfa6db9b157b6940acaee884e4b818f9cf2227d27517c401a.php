<?php

/* support/include/pear/Auth/SASL/Plain.php */
class __TwigTemplate_f56e6a2921479f63737482ebcda5ade69064f7c33e69a4fdb8e0a942cb170a27 extends Twig_Template
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
        $__internal_24d71e4e9f6d7c9ba1789dd3fd9a59903b44e70eda23705615a9baa22cf46268 = $this->env->getExtension("native_profiler");
        $__internal_24d71e4e9f6d7c9ba1789dd3fd9a59903b44e70eda23705615a9baa22cf46268->enter($__internal_24d71e4e9f6d7c9ba1789dd3fd9a59903b44e70eda23705615a9baa22cf46268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/pear/Auth/SASL/Plain.php"));

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
* Implmentation of PLAIN SASL mechanism
*
* @author  Richard Heyes <richard@php.net>
* @access  public
* @version 1.0
* @package Auth_SASL
*/

require_once('Auth/SASL/Common.php');

class Auth_SASL_Plain extends Auth_SASL_Common
{
    /**
    * Returns PLAIN response
    *
    * @param  string \$authcid   Authentication id (username)
    * @param  string \$pass      Password
    * @param  string \$authzid   Autorization id
    * @return string            PLAIN Response
    */
    function getResponse(\$authcid, \$pass, \$authzid = '')
    {
        return \$authzid . chr(0) . \$authcid . chr(0) . \$pass;
    }
}
?>
";
        
        $__internal_24d71e4e9f6d7c9ba1789dd3fd9a59903b44e70eda23705615a9baa22cf46268->leave($__internal_24d71e4e9f6d7c9ba1789dd3fd9a59903b44e70eda23705615a9baa22cf46268_prof);

    }

    public function getTemplateName()
    {
        return "support/include/pear/Auth/SASL/Plain.php";
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
/* * Implmentation of PLAIN SASL mechanism*/
/* **/
/* * @author  Richard Heyes <richard@php.net>*/
/* * @access  public*/
/* * @version 1.0*/
/* * @package Auth_SASL*/
/* *//* */
/* */
/* require_once('Auth/SASL/Common.php');*/
/* */
/* class Auth_SASL_Plain extends Auth_SASL_Common*/
/* {*/
/*     /***/
/*     * Returns PLAIN response*/
/*     **/
/*     * @param  string $authcid   Authentication id (username)*/
/*     * @param  string $pass      Password*/
/*     * @param  string $authzid   Autorization id*/
/*     * @return string            PLAIN Response*/
/*     *//* */
/*     function getResponse($authcid, $pass, $authzid = '')*/
/*     {*/
/*         return $authzid . chr(0) . $authcid . chr(0) . $pass;*/
/*     }*/
/* }*/
/* ?>*/
/* */
