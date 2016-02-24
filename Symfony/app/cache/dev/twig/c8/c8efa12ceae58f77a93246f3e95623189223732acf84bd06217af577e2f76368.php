<?php

/* support/include/pear/Net/DNS2/RR/SOA.php */
class __TwigTemplate_2564314c57334192bc1f5f1f9e0415b7a50b506a715a56811e6f9bb48de691b2 extends Twig_Template
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
        $__internal_2394c1b5461c1f3e84a28d78a148921d70f727f68a8a4397e33498a9d6b50163 = $this->env->getExtension("native_profiler");
        $__internal_2394c1b5461c1f3e84a28d78a148921d70f727f68a8a4397e33498a9d6b50163->enter($__internal_2394c1b5461c1f3e84a28d78a148921d70f727f68a8a4397e33498a9d6b50163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/pear/Net/DNS2/RR/SOA.php"));

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
 * @version   SVN: \$Id: SOA.php 149 2012-03-02 01:08:19Z mike.pultz \$
 * @link      http://pear.php.net/package/Net_DNS2
 * @since     File available since Release 0.6.0
 *
 */

/**
 * SOA Resource Record - RFC1035 section 3.3.13
 *
 *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+
 *    /                     MNAME                     /
 *    /                                               /
 *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+
 *    /                     RNAME                     /
 *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+
 *    |                    SERIAL                     |
 *    |                                               |
 *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+
 *    |                    REFRESH                    |
 *    |                                               |
 *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+
 *    |                     RETRY                     |
 *    |                                               |
 *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+
 *    |                    EXPIRE                     |
 *    |                                               |
 *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+
 *    |                    MINIMUM                    |
 *    |                                               |
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
class Net_DNS2_RR_SOA extends Net_DNS2_RR
{
    /*
     * The master DNS server
     */
    public \$mname;

    /*
     * mailbox of the responsible person
     */
    public \$rname;

    /*
     * serial number
      */
    public \$serial;

    /*
      * refresh time
      */
    public \$refresh;

    /*
      * retry interval
     */
    public \$retry;

    /*
     * expire time
      */
    public \$expire;

    /*
     * minimum TTL for any RR in this zone
      */
    public \$minimum;

    /**
     * method to return the rdata portion of the packet as a string
     *
     * @return  string
     * @access  protected
     *
     */
    protected function rrToString()
    {
        return \$this->cleanString(\$this->mname) . '. ' . 
            \$this->cleanString(\$this->rname) . '. ' . 
            \$this->serial . ' ' . \$this->refresh . ' ' . \$this->retry . ' ' . 
            \$this->expire . ' ' . \$this->minimum;
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
        \$this->mname    = \$this->cleanString(\$rdata[0]);
        \$this->rname    = \$this->cleanString(\$rdata[1]);

        \$this->serial   = \$rdata[2];
        \$this->refresh  = \$rdata[3];
        \$this->retry    = \$rdata[4];
        \$this->expire   = \$rdata[5];
        \$this->minimum  = \$rdata[6];

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
            // parse the 
            //
            \$offset = \$packet->offset;

            \$this->mname = Net_DNS2_Packet::expand(\$packet, \$offset);
            \$this->rname = Net_DNS2_Packet::expand(\$packet, \$offset);

            //
            // get the SOA values
            //
            \$x = unpack(
                '@' . \$offset . '/Nserial/Nrefresh/Nretry/Nexpire/Nminimum/', 
                \$packet->rdata
            );

            \$this->serial   = Net_DNS2::expandUint32(\$x['serial']);
            \$this->refresh  = Net_DNS2::expandUint32(\$x['refresh']);
            \$this->retry    = Net_DNS2::expandUint32(\$x['retry']);
            \$this->expire   = Net_DNS2::expandUint32(\$x['expire']);
            \$this->minimum  = Net_DNS2::expandUint32(\$x['minimum']);

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
        if (strlen(\$this->mname) > 0) {
    
            \$data = \$packet->compress(\$this->mname, \$packet->offset);
            \$data .= \$packet->compress(\$this->rname, \$packet->offset);

            \$data .= pack(
                'N5', \$this->serial, \$this->refresh, \$this->retry, 
                \$this->expire, \$this->minimum
            );

            \$packet->offset += 20;

            return \$data;
        }

        return null;
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
        
        $__internal_2394c1b5461c1f3e84a28d78a148921d70f727f68a8a4397e33498a9d6b50163->leave($__internal_2394c1b5461c1f3e84a28d78a148921d70f727f68a8a4397e33498a9d6b50163_prof);

    }

    public function getTemplateName()
    {
        return "support/include/pear/Net/DNS2/RR/SOA.php";
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
/*  * @version   SVN: $Id: SOA.php 149 2012-03-02 01:08:19Z mike.pultz $*/
/*  * @link      http://pear.php.net/package/Net_DNS2*/
/*  * @since     File available since Release 0.6.0*/
/*  **/
/*  *//* */
/* */
/* /***/
/*  * SOA Resource Record - RFC1035 section 3.3.13*/
/*  **/
/*  *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+*/
/*  *    /                     MNAME                     /*/
/*  *    /                                               /*/
/*  *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+*/
/*  *    /                     RNAME                     /*/
/*  *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+*/
/*  *    |                    SERIAL                     |*/
/*  *    |                                               |*/
/*  *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+*/
/*  *    |                    REFRESH                    |*/
/*  *    |                                               |*/
/*  *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+*/
/*  *    |                     RETRY                     |*/
/*  *    |                                               |*/
/*  *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+*/
/*  *    |                    EXPIRE                     |*/
/*  *    |                                               |*/
/*  *    +--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+--+*/
/*  *    |                    MINIMUM                    |*/
/*  *    |                                               |*/
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
/* class Net_DNS2_RR_SOA extends Net_DNS2_RR*/
/* {*/
/*     /**/
/*      * The master DNS server*/
/*      *//* */
/*     public $mname;*/
/* */
/*     /**/
/*      * mailbox of the responsible person*/
/*      *//* */
/*     public $rname;*/
/* */
/*     /**/
/*      * serial number*/
/*       *//* */
/*     public $serial;*/
/* */
/*     /**/
/*       * refresh time*/
/*       *//* */
/*     public $refresh;*/
/* */
/*     /**/
/*       * retry interval*/
/*      *//* */
/*     public $retry;*/
/* */
/*     /**/
/*      * expire time*/
/*       *//* */
/*     public $expire;*/
/* */
/*     /**/
/*      * minimum TTL for any RR in this zone*/
/*       *//* */
/*     public $minimum;*/
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
/*         return $this->cleanString($this->mname) . '. ' . */
/*             $this->cleanString($this->rname) . '. ' . */
/*             $this->serial . ' ' . $this->refresh . ' ' . $this->retry . ' ' . */
/*             $this->expire . ' ' . $this->minimum;*/
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
/*         $this->mname    = $this->cleanString($rdata[0]);*/
/*         $this->rname    = $this->cleanString($rdata[1]);*/
/* */
/*         $this->serial   = $rdata[2];*/
/*         $this->refresh  = $rdata[3];*/
/*         $this->retry    = $rdata[4];*/
/*         $this->expire   = $rdata[5];*/
/*         $this->minimum  = $rdata[6];*/
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
/* */
/*             //*/
/*             // parse the */
/*             //*/
/*             $offset = $packet->offset;*/
/* */
/*             $this->mname = Net_DNS2_Packet::expand($packet, $offset);*/
/*             $this->rname = Net_DNS2_Packet::expand($packet, $offset);*/
/* */
/*             //*/
/*             // get the SOA values*/
/*             //*/
/*             $x = unpack(*/
/*                 '@' . $offset . '/Nserial/Nrefresh/Nretry/Nexpire/Nminimum/', */
/*                 $packet->rdata*/
/*             );*/
/* */
/*             $this->serial   = Net_DNS2::expandUint32($x['serial']);*/
/*             $this->refresh  = Net_DNS2::expandUint32($x['refresh']);*/
/*             $this->retry    = Net_DNS2::expandUint32($x['retry']);*/
/*             $this->expire   = Net_DNS2::expandUint32($x['expire']);*/
/*             $this->minimum  = Net_DNS2::expandUint32($x['minimum']);*/
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
/*         if (strlen($this->mname) > 0) {*/
/*     */
/*             $data = $packet->compress($this->mname, $packet->offset);*/
/*             $data .= $packet->compress($this->rname, $packet->offset);*/
/* */
/*             $data .= pack(*/
/*                 'N5', $this->serial, $this->refresh, $this->retry, */
/*                 $this->expire, $this->minimum*/
/*             );*/
/* */
/*             $packet->offset += 20;*/
/* */
/*             return $data;*/
/*         }*/
/* */
/*         return null;*/
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
