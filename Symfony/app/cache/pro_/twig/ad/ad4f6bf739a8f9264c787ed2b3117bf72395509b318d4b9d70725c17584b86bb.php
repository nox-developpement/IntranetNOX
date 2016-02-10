<?php

/* support/include/pear/Auth/SASL/Login.php */
class __TwigTemplate_e87ce7bad2bdaec73d7233cc8e5c4d4198ea6ef8f1f77bd890bf9cbdea55e499 extends Twig_Template
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
* This is technically not a SASL mechanism, however
* it's used by Net_Sieve, Net_Cyrus and potentially
* other protocols , so here is a good place to abstract
* it.
*
* @author  Richard Heyes <richard@php.net>
* @access  public
* @version 1.0
* @package Auth_SASL
*/

require_once('Auth/SASL/Common.php');

class Auth_SASL_Login extends Auth_SASL_Common
{
    /**
    * Pseudo SASL LOGIN mechanism
    *
    * @param  string \$user Username
    * @param  string \$pass Password
    * @return string       LOGIN string
    */
    function getResponse(\$user, \$pass)
    {
        return sprintf('LOGIN %s %s', \$user, \$pass);
    }
}
?>";
    }

    public function getTemplateName()
    {
        return "support/include/pear/Auth/SASL/Login.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
/* * This is technically not a SASL mechanism, however*/
/* * it's used by Net_Sieve, Net_Cyrus and potentially*/
/* * other protocols , so here is a good place to abstract*/
/* * it.*/
/* **/
/* * @author  Richard Heyes <richard@php.net>*/
/* * @access  public*/
/* * @version 1.0*/
/* * @package Auth_SASL*/
/* *//* */
/* */
/* require_once('Auth/SASL/Common.php');*/
/* */
/* class Auth_SASL_Login extends Auth_SASL_Common*/
/* {*/
/*     /***/
/*     * Pseudo SASL LOGIN mechanism*/
/*     **/
/*     * @param  string $user Username*/
/*     * @param  string $pass Password*/
/*     * @return string       LOGIN string*/
/*     *//* */
/*     function getResponse($user, $pass)*/
/*     {*/
/*         return sprintf('LOGIN %s %s', $user, $pass);*/
/*     }*/
/* }*/
/* ?>*/
