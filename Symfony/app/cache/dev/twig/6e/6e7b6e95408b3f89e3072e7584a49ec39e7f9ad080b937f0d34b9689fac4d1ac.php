<?php

/* support/include/pear/Net/DNS2/RR/NSEC3.php */
class __TwigTemplate_52eb94215df9b40b2702c86dd84fe8c4baa4f45444f89b0939673caab6e1cbab extends Twig_Template
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
        $__internal_ac4faf1660e5409ff83e34769d673d07fe74ab8df99ac0412f6a842b78a1e376 = $this->env->getExtension("native_profiler");
        $__internal_ac4faf1660e5409ff83e34769d673d07fe74ab8df99ac0412f6a842b78a1e376->enter($__internal_ac4faf1660e5409ff83e34769d673d07fe74ab8df99ac0412f6a842b78a1e376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/pear/Net/DNS2/RR/NSEC3.php"));

        // line 1
        echo "<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * DNS Library for handling lookups and updates. 
 *
 * PHP Version 5
 *
 * Copyright (c) 2010, Mike Pultz <mike@mikepultz.com>.
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
 * @copyright 2010 Mike Pultz <mike@mikepultz.com>
 * @license   http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @version   SVN: \$Id: NSEC3.php 179 2012-11-23 05:49:01Z mike.pultz \$
 * @link      http://pear.php.net/package/Net_DNS2
 * @since     File available since Release 0.6.0
 *
 */

/**
 * NSEC3 Resource Record - RFC5155 section 3.2
 *
 *   0 1 2 3 4 5 6 7 8 9 0 1 2 3 4 5 6 7 8 9 0 1 2 3 4 5 6 7 8 9 0 1
 *  +-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+
 *  |   Hash Alg.   |     Flags     |          Iterations           |
 *  +-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+
 *  |  Salt Length  |                     Salt                      /
 *  +-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+
 *  |  Hash Length  |             Next Hashed Owner Name            /
 *  +-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+
 *  /                         Type Bit Maps                         /
 *  +-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+
 * 
 * @category Networking
 * @package  Net_DNS2
 * @author   Mike Pultz <mike@mikepultz.com>
 * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link     http://pear.php.net/package/Net_DNS2
 * @see      Net_DNS2_RR
 *
 */
class Net_DNS2_RR_NSEC3 extends Net_DNS2_RR
{
    /*
     * Algorithm to use
     */
    public \$algorithm;
 
    /*
     * flags
     */
    public \$flags;
 
    /*
     *  defines the number of additional times the hash is performed.
     */
    public \$iterations;
 
    /*
     * the length of the salt- not displayed
     */
    public \$salt_length;
 
    /*
     * the salt
     */
    public \$salt;

    /*
     * the length of the hash value
     */
    public \$hash_length;

    /*
     * the hashed value of the owner name
     */
    public \$hashed_owner_name;

    /*
     * array of RR type names
     */
    public \$type_bit_maps = array();

    /**
     * method to return the rdata portion of the packet as a string
     *
     * @return  string
     * @access  protected
     *
     */
    protected function rrToString()
    {
        \$out = \$this->algorithm . ' ' . \$this->flags . ' ' . \$this->iterations . ' ';
 
        //
        // per RFC5155, the salt_length value isn't displayed, and if the salt
        // is empty, the salt is displayed as '-'
        //
        if (\$this->salt_length > 0) {
  
            \$out .= \$this->salt;
        } else {     
 
            \$out .= '-';
        }

        //
        // per RFC5255 the hash length isn't shown
        //
        \$out .= ' ' . \$this->hashed_owner_name;
 
        //
        // show the RR's
        //
        foreach (\$this->type_bit_maps as \$rr) {
    
            \$out .= ' ' . strtoupper(\$rr);
        }

        return \$out;
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
        \$this->algorithm    = array_shift(\$rdata);
        \$this->flags        = array_shift(\$rdata);
        \$this->iterations   = array_shift(\$rdata);
     
        //
        // an empty salt is represented as '-' per RFC5155 section 3.3
        //
        \$salt = array_shift(\$rdata);
        if (\$salt == '-') {

            \$this->salt_length = 0;
            \$this->salt = '';
        } else {
    
            \$this->salt_length = strlen(pack('H*', \$salt));
            \$this->salt = strtoupper(\$salt);
        }

        \$this->hashed_owner_name = array_shift(\$rdata);
        \$this->hash_length = strlen(base64_decode(\$this->hashed_owner_name));

        \$this->type_bit_maps = \$rdata;

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
            // unpack the first values
            //
            \$x = unpack('Calgorithm/Cflags/niterations/Csalt_length', \$this->rdata);
        
            \$this->algorithm    = \$x['algorithm'];
            \$this->flags        = \$x['flags'];
            \$this->iterations   = \$x['iterations'];
            \$this->salt_length  = \$x['salt_length'];

            \$offset = 5;

            if (\$this->salt_length > 0) {
 
                \$x = unpack('H*', substr(\$this->rdata, \$offset, \$this->salt_length));
                \$this->salt = strtoupper(\$x[1]);
                \$offset += \$this->salt_length;
            }

            //
            // unpack the hash length
            //
            \$x = unpack('@' . \$offset . '/Chash_length', \$this->rdata);
            \$offset++;

            //
            // copy out the hash
            //
            \$this->hash_length  = \$x['hash_length'];
            if (\$this->hash_length > 0) {

                \$this->hashed_owner_name = base64_encode(
                    substr(\$this->rdata, \$offset, \$this->hash_length)
                );
                \$offset += \$this->hash_length;
            }

            //
            // parse out the RR bitmap
            //
            \$this->type_bit_maps = Net_DNS2_BitMap::bitMapToArray(
                substr(\$this->rdata, \$offset)
            );

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
        //
        // pull the salt and build the length
        //
        \$salt = pack('H*', \$this->salt);
        \$this->salt_length = strlen(\$salt);
            
        //
        // pack the algorithm, flags, iterations and salt length
        //
        \$data = pack(
            'CCnC',
            \$this->algorithm, \$this->flags, \$this->iterations, \$this->salt_length
        );
        \$data .= \$salt;

        //
        // add the hash length and hash
        //
        \$data .= chr(\$this->hash_length);
        if (\$this->hash_length > 0) {

            \$data .= base64_decode(\$this->hashed_owner_name);
        }

        //
        // conver the array of RR names to a type bitmap
        //
        \$data .= Net_DNS2_BitMap::arrayToBitMap(\$this->type_bit_maps);

        \$packet->offset += strlen(\$data);
     
        return \$data;
    }
}

/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * c-hanging-comment-ender-p: nil
 * End:
 */
?>
";
        
        $__internal_ac4faf1660e5409ff83e34769d673d07fe74ab8df99ac0412f6a842b78a1e376->leave($__internal_ac4faf1660e5409ff83e34769d673d07fe74ab8df99ac0412f6a842b78a1e376_prof);

    }

    public function getTemplateName()
    {
        return "support/include/pear/Net/DNS2/RR/NSEC3.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: *//* */
/* */
/* /***/
/*  * DNS Library for handling lookups and updates. */
/*  **/
/*  * PHP Version 5*/
/*  **/
/*  * Copyright (c) 2010, Mike Pultz <mike@mikepultz.com>.*/
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
/*  *   * Neither the name of Mike Pultz nor the names of his contributors */
/*  *     may be used to endorse or promote products derived from this */
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
/*  * @copyright 2010 Mike Pultz <mike@mikepultz.com>*/
/*  * @license   http://www.opensource.org/licenses/bsd-license.php  BSD License*/
/*  * @version   SVN: $Id: NSEC3.php 179 2012-11-23 05:49:01Z mike.pultz $*/
/*  * @link      http://pear.php.net/package/Net_DNS2*/
/*  * @since     File available since Release 0.6.0*/
/*  **/
/*  *//* */
/* */
/* /***/
/*  * NSEC3 Resource Record - RFC5155 section 3.2*/
/*  **/
/*  *   0 1 2 3 4 5 6 7 8 9 0 1 2 3 4 5 6 7 8 9 0 1 2 3 4 5 6 7 8 9 0 1*/
/*  *  +-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+*/
/*  *  |   Hash Alg.   |     Flags     |          Iterations           |*/
/*  *  +-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+*/
/*  *  |  Salt Length  |                     Salt                      /*/
/*  *  +-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+*/
/*  *  |  Hash Length  |             Next Hashed Owner Name            /*/
/*  *  +-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+*/
/*  *  /                         Type Bit Maps                         /*/
/*  *  +-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+*/
/*  * */
/*  * @category Networking*/
/*  * @package  Net_DNS2*/
/*  * @author   Mike Pultz <mike@mikepultz.com>*/
/*  * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License*/
/*  * @link     http://pear.php.net/package/Net_DNS2*/
/*  * @see      Net_DNS2_RR*/
/*  **/
/*  *//* */
/* class Net_DNS2_RR_NSEC3 extends Net_DNS2_RR*/
/* {*/
/*     /**/
/*      * Algorithm to use*/
/*      *//* */
/*     public $algorithm;*/
/*  */
/*     /**/
/*      * flags*/
/*      *//* */
/*     public $flags;*/
/*  */
/*     /**/
/*      *  defines the number of additional times the hash is performed.*/
/*      *//* */
/*     public $iterations;*/
/*  */
/*     /**/
/*      * the length of the salt- not displayed*/
/*      *//* */
/*     public $salt_length;*/
/*  */
/*     /**/
/*      * the salt*/
/*      *//* */
/*     public $salt;*/
/* */
/*     /**/
/*      * the length of the hash value*/
/*      *//* */
/*     public $hash_length;*/
/* */
/*     /**/
/*      * the hashed value of the owner name*/
/*      *//* */
/*     public $hashed_owner_name;*/
/* */
/*     /**/
/*      * array of RR type names*/
/*      *//* */
/*     public $type_bit_maps = array();*/
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
/*         $out = $this->algorithm . ' ' . $this->flags . ' ' . $this->iterations . ' ';*/
/*  */
/*         //*/
/*         // per RFC5155, the salt_length value isn't displayed, and if the salt*/
/*         // is empty, the salt is displayed as '-'*/
/*         //*/
/*         if ($this->salt_length > 0) {*/
/*   */
/*             $out .= $this->salt;*/
/*         } else {     */
/*  */
/*             $out .= '-';*/
/*         }*/
/* */
/*         //*/
/*         // per RFC5255 the hash length isn't shown*/
/*         //*/
/*         $out .= ' ' . $this->hashed_owner_name;*/
/*  */
/*         //*/
/*         // show the RR's*/
/*         //*/
/*         foreach ($this->type_bit_maps as $rr) {*/
/*     */
/*             $out .= ' ' . strtoupper($rr);*/
/*         }*/
/* */
/*         return $out;*/
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
/*         $this->algorithm    = array_shift($rdata);*/
/*         $this->flags        = array_shift($rdata);*/
/*         $this->iterations   = array_shift($rdata);*/
/*      */
/*         //*/
/*         // an empty salt is represented as '-' per RFC5155 section 3.3*/
/*         //*/
/*         $salt = array_shift($rdata);*/
/*         if ($salt == '-') {*/
/* */
/*             $this->salt_length = 0;*/
/*             $this->salt = '';*/
/*         } else {*/
/*     */
/*             $this->salt_length = strlen(pack('H*', $salt));*/
/*             $this->salt = strtoupper($salt);*/
/*         }*/
/* */
/*         $this->hashed_owner_name = array_shift($rdata);*/
/*         $this->hash_length = strlen(base64_decode($this->hashed_owner_name));*/
/* */
/*         $this->type_bit_maps = $rdata;*/
/* */
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
/*         */
/*             //*/
/*             // unpack the first values*/
/*             //*/
/*             $x = unpack('Calgorithm/Cflags/niterations/Csalt_length', $this->rdata);*/
/*         */
/*             $this->algorithm    = $x['algorithm'];*/
/*             $this->flags        = $x['flags'];*/
/*             $this->iterations   = $x['iterations'];*/
/*             $this->salt_length  = $x['salt_length'];*/
/* */
/*             $offset = 5;*/
/* */
/*             if ($this->salt_length > 0) {*/
/*  */
/*                 $x = unpack('H*', substr($this->rdata, $offset, $this->salt_length));*/
/*                 $this->salt = strtoupper($x[1]);*/
/*                 $offset += $this->salt_length;*/
/*             }*/
/* */
/*             //*/
/*             // unpack the hash length*/
/*             //*/
/*             $x = unpack('@' . $offset . '/Chash_length', $this->rdata);*/
/*             $offset++;*/
/* */
/*             //*/
/*             // copy out the hash*/
/*             //*/
/*             $this->hash_length  = $x['hash_length'];*/
/*             if ($this->hash_length > 0) {*/
/* */
/*                 $this->hashed_owner_name = base64_encode(*/
/*                     substr($this->rdata, $offset, $this->hash_length)*/
/*                 );*/
/*                 $offset += $this->hash_length;*/
/*             }*/
/* */
/*             //*/
/*             // parse out the RR bitmap*/
/*             //*/
/*             $this->type_bit_maps = Net_DNS2_BitMap::bitMapToArray(*/
/*                 substr($this->rdata, $offset)*/
/*             );*/
/* */
/*             return true;*/
/*         }*/
/*      */
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
/*         //*/
/*         // pull the salt and build the length*/
/*         //*/
/*         $salt = pack('H*', $this->salt);*/
/*         $this->salt_length = strlen($salt);*/
/*             */
/*         //*/
/*         // pack the algorithm, flags, iterations and salt length*/
/*         //*/
/*         $data = pack(*/
/*             'CCnC',*/
/*             $this->algorithm, $this->flags, $this->iterations, $this->salt_length*/
/*         );*/
/*         $data .= $salt;*/
/* */
/*         //*/
/*         // add the hash length and hash*/
/*         //*/
/*         $data .= chr($this->hash_length);*/
/*         if ($this->hash_length > 0) {*/
/* */
/*             $data .= base64_decode($this->hashed_owner_name);*/
/*         }*/
/* */
/*         //*/
/*         // conver the array of RR names to a type bitmap*/
/*         //*/
/*         $data .= Net_DNS2_BitMap::arrayToBitMap($this->type_bit_maps);*/
/* */
/*         $packet->offset += strlen($data);*/
/*      */
/*         return $data;*/
/*     }*/
/* }*/
/* */
/* /**/
/*  * Local variables:*/
/*  * tab-width: 4*/
/*  * c-basic-offset: 4*/
/*  * c-hanging-comment-ender-p: nil*/
/*  * End:*/
/*  *//* */
/* ?>*/
/* */
