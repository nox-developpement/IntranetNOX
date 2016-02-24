<?php

/* support/include/pear/Auth/SASL/Anonymous.php */
class __TwigTemplate_4aee7e930d4eafd06acf2d6596eefcb9d04da16fcfd02c95c0fc3122438a5e56 extends Twig_Template
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
        $__internal_c1f3cd07e7f6f090ec5d168f85735db9c6c0c2896716a862a0d815ed2ef06a11 = $this->env->getExtension("native_profiler");
        $__internal_c1f3cd07e7f6f090ec5d168f85735db9c6c0c2896716a862a0d815ed2ef06a11->enter($__internal_c1f3cd07e7f6f090ec5d168f85735db9c6c0c2896716a862a0d815ed2ef06a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/pear/Auth/SASL/Anonymous.php"));

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
* Implmentation of ANONYMOUS SASL mechanism
*
* @author  Richard Heyes <richard@php.net>
* @access  public
* @version 1.0
* @package Auth_SASL
*/

require_once('Auth/SASL/Common.php');

class Auth_SASL_Anonymous extends Auth_SASL_Common
{
    /**
    * Not much to do here except return the token supplied.
    * No encoding, hashing or encryption takes place for this
    * mechanism, simply one of:
    *  o An email address
    *  o An opaque string not containing \"@\" that can be interpreted
    *    by the sysadmin
    *  o Nothing
    *
    * We could have some logic here for the second option, but this
    * would by no means create something interpretable.
    *
    * @param  string \$token Optional email address or string to provide
    *                       as trace information.
    * @return string        The unaltered input token
    */
    function getResponse(\$token = '')
    {
        return \$token;
    }
}
?>";
        
        $__internal_c1f3cd07e7f6f090ec5d168f85735db9c6c0c2896716a862a0d815ed2ef06a11->leave($__internal_c1f3cd07e7f6f090ec5d168f85735db9c6c0c2896716a862a0d815ed2ef06a11_prof);

    }

    public function getTemplateName()
    {
        return "support/include/pear/Auth/SASL/Anonymous.php";
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
/* * Implmentation of ANONYMOUS SASL mechanism*/
/* **/
/* * @author  Richard Heyes <richard@php.net>*/
/* * @access  public*/
/* * @version 1.0*/
/* * @package Auth_SASL*/
/* *//* */
/* */
/* require_once('Auth/SASL/Common.php');*/
/* */
/* class Auth_SASL_Anonymous extends Auth_SASL_Common*/
/* {*/
/*     /***/
/*     * Not much to do here except return the token supplied.*/
/*     * No encoding, hashing or encryption takes place for this*/
/*     * mechanism, simply one of:*/
/*     *  o An email address*/
/*     *  o An opaque string not containing "@" that can be interpreted*/
/*     *    by the sysadmin*/
/*     *  o Nothing*/
/*     **/
/*     * We could have some logic here for the second option, but this*/
/*     * would by no means create something interpretable.*/
/*     **/
/*     * @param  string $token Optional email address or string to provide*/
/*     *                       as trace information.*/
/*     * @return string        The unaltered input token*/
/*     *//* */
/*     function getResponse($token = '')*/
/*     {*/
/*         return $token;*/
/*     }*/
/* }*/
/* ?>*/
