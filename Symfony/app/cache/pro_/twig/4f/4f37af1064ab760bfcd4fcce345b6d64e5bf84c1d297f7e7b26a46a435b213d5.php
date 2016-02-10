<?php

/* support/include/pear/Net/DNS2/RR/CAA.php */
class __TwigTemplate_0a9bdbc0d5369e4cd8dfb51c9176c918418e0dbcdd02a79b152dab5d8b00703c extends Twig_Template
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
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * DNS Library for handling lookups and updates.
 *
 * PHP Version 5
 *
 * Copyright (c) 2011, Mike Pultz <mike@mikepultz.com>.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the name of Mike Pultz nor the names of his contributors
 *     may be used to endorse or promote products derived from this
 *     software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRIC
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @category  Networking
 * @package   Net_DNS2
 * @author    Mike Pultz <mike@mikepultz.com>
 * @copyright 2011 Mike Pultz <mike@mikepultz.com>
 * @license   http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @version   SVN: \$Id: CAA.php 179 2012-11-23 05:49:01Z mike.pultz \$
 * @link      http://pear.php.net/package/Net_DNS2
 * @since     File available since Release 1.2.0
 *
 */

/**
 * CAA Resource Record - http://tools.ietf.org/html/draft-ietf-pkix-caa-03
 *
 *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+
 *    |          FLAGS        |      TAG LENGTH       |
 *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+
 *    /                      TAG                      /
 *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+
 *    /                      DATA                     /
 *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+
 *
 * @category Networking
 * @package  Net_DNS2
 * @author   Mike Pultz <mike@mikepultz.com>
 * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link     http://pear.php.net/package/Net_DNS2
 * @see      Net_DNS2_RR
 *
 */
class Net_DNS2_RR_CAA extends Net_DNS2_RR
{
    /*
     * The critcal flag
     */
    public \$flags;

    /*
     * The property identifier
     */
    public \$tag;

    /*
      * The property value
     */
    public \$value;

    /**
     * method to return the rdata portion of the packet as a string
     *
     * @return  string
     * @access  protected
     *
     */
    protected function rrToString()
    {
        return \$this->flags . ' ' . \$this->tag . ' \"' . 
            trim(\$this->cleanString(\$this->value), '\"') . '\"';
    }

    /**
     * parses the rdata portion from a standard DNS config line
     *
     * @param array \$rdata a string split line of values for the rdata
     *
     * @return boolean
     * @access protected
     *
     */
    protected function rrFromString(array \$rdata)
    {
        \$this->flags    = array_shift(\$rdata);
        \$this->tag      = array_shift(\$rdata);

        \$this->value    = trim(\$this->cleanString(implode(\$rdata, ' ')), '\"');
        
        return true;
    }

    /**
     * parses the rdata of the Net_DNS2_Packet object
     *
     * @param Net_DNS2_Packet &\$packet a Net_DNS2_Packet packet to parse the RR from
     *
     * @return boolean
     * @access protected
     *
     */
    protected function rrSet(Net_DNS2_Packet &\$packet)
    {
        if (\$this->rdlength > 0) {
            
            //
            // unpack the flags and tag length
            //
            \$x = unpack('Cflags/Ctag_length', \$this->rdata);

            \$this->flags    = \$x['flags'];
            \$offset         = 2;

            \$this->tag      = substr(\$this->rdata, \$offset, \$x['tag_length']);
            \$offset         += \$x['tag_length'];

            \$this->value    = substr(\$this->rdata, \$offset);

            return true;
        }

        return false;
    }

    /**
     * returns the rdata portion of the DNS packet
     *
     * @param Net_DNS2_Packet &\$packet a Net_DNS2_Packet packet use for
     *                                 compressed names
     *
     * @return mixed                   either returns a binary packed
     *                                 string or null on failure
     * @access protected
     *
     */
    protected function rrGet(Net_DNS2_Packet &\$packet)
    {
        if (strlen(\$this->value) > 0) {

            \$data  = chr(\$this->flags);
            \$data .= chr(strlen(\$this->tag)) . \$this->tag . \$this->value;

            \$packet->offset += strlen(\$data);

            return \$data;
        }

        return null;
    }
}

?>
";
    }

    public function getTemplateName()
    {
        return "support/include/pear/Net/DNS2/RR/CAA.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* /* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: *//* */
/* */
/* /***/
/*  * DNS Library for handling lookups and updates.*/
/*  **/
/*  * PHP Version 5*/
/*  **/
/*  * Copyright (c) 2011, Mike Pultz <mike@mikepultz.com>.*/
/*  * All rights reserved.*/
/*  **/
/*  * Redistribution and use in source and binary forms, with or without*/
/*  * modification, are permitted provided that the following conditions*/
/*  * are met:*/
/*  **/
/*  *   * Redistributions of source code must retain the above copyright*/
/*  *     notice, this list of conditions and the following disclaimer.*/
/*  **/
/*  *   * Redistributions in binary form must reproduce the above copyright*/
/*  *     notice, this list of conditions and the following disclaimer in*/
/*  *     the documentation and/or other materials provided with the*/
/*  *     distribution.*/
/*  **/
/*  *   * Neither the name of Mike Pultz nor the names of his contributors*/
/*  *     may be used to endorse or promote products derived from this*/
/*  *     software without specific prior written permission.*/
/*  **/
/*  * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS*/
/*  * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT*/
/*  * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS*/
/*  * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE*/
/*  * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,*/
/*  * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,*/
/*  * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;*/
/*  * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER*/
/*  * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRIC*/
/*  * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN*/
/*  * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE*/
/*  * POSSIBILITY OF SUCH DAMAGE.*/
/*  **/
/*  * @category  Networking*/
/*  * @package   Net_DNS2*/
/*  * @author    Mike Pultz <mike@mikepultz.com>*/
/*  * @copyright 2011 Mike Pultz <mike@mikepultz.com>*/
/*  * @license   http://www.opensource.org/licenses/bsd-license.php  BSD License*/
/*  * @version   SVN: $Id: CAA.php 179 2012-11-23 05:49:01Z mike.pultz $*/
/*  * @link      http://pear.php.net/package/Net_DNS2*/
/*  * @since     File available since Release 1.2.0*/
/*  **/
/*  *//* */
/* */
/* /***/
/*  * CAA Resource Record - http://tools.ietf.org/html/draft-ietf-pkix-caa-03*/
/*  **/
/*  *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+*/
/*  *    |          FLAGS        |      TAG LENGTH       |*/
/*  *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+*/
/*  *    /                      TAG                      /*/
/*  *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+*/
/*  *    /                      DATA                     /*/
/*  *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+*/
/*  **/
/*  * @category Networking*/
/*  * @package  Net_DNS2*/
/*  * @author   Mike Pultz <mike@mikepultz.com>*/
/*  * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License*/
/*  * @link     http://pear.php.net/package/Net_DNS2*/
/*  * @see      Net_DNS2_RR*/
/*  **/
/*  *//* */
/* class Net_DNS2_RR_CAA extends Net_DNS2_RR*/
/* {*/
/*     /**/
/*      * The critcal flag*/
/*      *//* */
/*     public $flags;*/
/* */
/*     /**/
/*      * The property identifier*/
/*      *//* */
/*     public $tag;*/
/* */
/*     /**/
/*       * The property value*/
/*      *//* */
/*     public $value;*/
/* */
/*     /***/
/*      * method to return the rdata portion of the packet as a string*/
/*      **/
/*      * @return  string*/
/*      * @access  protected*/
/*      **/
/*      *//* */
/*     protected function rrToString()*/
/*     {*/
/*         return $this->flags . ' ' . $this->tag . ' "' . */
/*             trim($this->cleanString($this->value), '"') . '"';*/
/*     }*/
/* */
/*     /***/
/*      * parses the rdata portion from a standard DNS config line*/
/*      **/
/*      * @param array $rdata a string split line of values for the rdata*/
/*      **/
/*      * @return boolean*/
/*      * @access protected*/
/*      **/
/*      *//* */
/*     protected function rrFromString(array $rdata)*/
/*     {*/
/*         $this->flags    = array_shift($rdata);*/
/*         $this->tag      = array_shift($rdata);*/
/* */
/*         $this->value    = trim($this->cleanString(implode($rdata, ' ')), '"');*/
/*         */
/*         return true;*/
/*     }*/
/* */
/*     /***/
/*      * parses the rdata of the Net_DNS2_Packet object*/
/*      **/
/*      * @param Net_DNS2_Packet &$packet a Net_DNS2_Packet packet to parse the RR from*/
/*      **/
/*      * @return boolean*/
/*      * @access protected*/
/*      **/
/*      *//* */
/*     protected function rrSet(Net_DNS2_Packet &$packet)*/
/*     {*/
/*         if ($this->rdlength > 0) {*/
/*             */
/*             //*/
/*             // unpack the flags and tag length*/
/*             //*/
/*             $x = unpack('Cflags/Ctag_length', $this->rdata);*/
/* */
/*             $this->flags    = $x['flags'];*/
/*             $offset         = 2;*/
/* */
/*             $this->tag      = substr($this->rdata, $offset, $x['tag_length']);*/
/*             $offset         += $x['tag_length'];*/
/* */
/*             $this->value    = substr($this->rdata, $offset);*/
/* */
/*             return true;*/
/*         }*/
/* */
/*         return false;*/
/*     }*/
/* */
/*     /***/
/*      * returns the rdata portion of the DNS packet*/
/*      **/
/*      * @param Net_DNS2_Packet &$packet a Net_DNS2_Packet packet use for*/
/*      *                                 compressed names*/
/*      **/
/*      * @return mixed                   either returns a binary packed*/
/*      *                                 string or null on failure*/
/*      * @access protected*/
/*      **/
/*      *//* */
/*     protected function rrGet(Net_DNS2_Packet &$packet)*/
/*     {*/
/*         if (strlen($this->value) > 0) {*/
/* */
/*             $data  = chr($this->flags);*/
/*             $data .= chr(strlen($this->tag)) . $this->tag . $this->value;*/
/* */
/*             $packet->offset += strlen($data);*/
/* */
/*             return $data;*/
/*         }*/
/* */
/*         return null;*/
/*     }*/
/* }*/
/* */
/* ?>*/
/* */
