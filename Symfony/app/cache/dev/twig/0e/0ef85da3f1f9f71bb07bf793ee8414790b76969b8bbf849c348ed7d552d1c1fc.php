<?php

/* support/include/pear/Auth/SASL/External.php */
class __TwigTemplate_8f062f98141678ba23e5d7eed66da8eb52bf4d695d3f81d29852296ab7dc2a04 extends Twig_Template
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
        $__internal_659ce0bce574cfa91b062780f2c516231c865aed290385acc270daa9a8c7c8e0 = $this->env->getExtension("native_profiler");
        $__internal_659ce0bce574cfa91b062780f2c516231c865aed290385acc270daa9a8c7c8e0->enter($__internal_659ce0bce574cfa91b062780f2c516231c865aed290385acc270daa9a8c7c8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/pear/Auth/SASL/External.php"));

        // line 1
        echo "<?php
// +-----------------------------------------------------------------------+ 
// | Copyright (c) 2008 Christoph Schulz                                   | 
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
// | Author: Christoph Schulz <develop@kristov.de>                         | 
// +-----------------------------------------------------------------------+ 
// 
// \$Id\$

/**
* Implmentation of EXTERNAL SASL mechanism
*
* @author  Christoph Schulz <develop@kristov.de>
* @access  public
* @version 1.0.3
* @package Auth_SASL
*/

require_once('Auth/SASL/Common.php');

class Auth_SASL_External extends Auth_SASL_Common
{
    /**
    * Returns EXTERNAL response
    *
    * @param  string \$authcid   Authentication id (username)
    * @param  string \$pass      Password
    * @param  string \$authzid   Autorization id
    * @return string            EXTERNAL Response
    */
    function getResponse(\$authcid, \$pass, \$authzid = '')
    {
        return \$authzid;
    }
}
?>
";
        
        $__internal_659ce0bce574cfa91b062780f2c516231c865aed290385acc270daa9a8c7c8e0->leave($__internal_659ce0bce574cfa91b062780f2c516231c865aed290385acc270daa9a8c7c8e0_prof);

    }

    public function getTemplateName()
    {
        return "support/include/pear/Auth/SASL/External.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* // +-----------------------------------------------------------------------+ */
/* // | Copyright (c) 2008 Christoph Schulz                                   | */
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
/* // | Author: Christoph Schulz <develop@kristov.de>                         | */
/* // +-----------------------------------------------------------------------+ */
/* // */
/* // $Id$*/
/* */
/* /***/
/* * Implmentation of EXTERNAL SASL mechanism*/
/* **/
/* * @author  Christoph Schulz <develop@kristov.de>*/
/* * @access  public*/
/* * @version 1.0.3*/
/* * @package Auth_SASL*/
/* *//* */
/* */
/* require_once('Auth/SASL/Common.php');*/
/* */
/* class Auth_SASL_External extends Auth_SASL_Common*/
/* {*/
/*     /***/
/*     * Returns EXTERNAL response*/
/*     **/
/*     * @param  string $authcid   Authentication id (username)*/
/*     * @param  string $pass      Password*/
/*     * @param  string $authzid   Autorization id*/
/*     * @return string            EXTERNAL Response*/
/*     *//* */
/*     function getResponse($authcid, $pass, $authzid = '')*/
/*     {*/
/*         return $authzid;*/
/*     }*/
/* }*/
/* ?>*/
/* */
