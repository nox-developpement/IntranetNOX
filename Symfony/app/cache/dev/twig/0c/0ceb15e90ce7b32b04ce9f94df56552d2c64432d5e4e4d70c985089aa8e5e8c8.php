<?php

/* support/include/class.banlist.php */
class __TwigTemplate_14367db9cac3b2f6f9fec983b4dafd128f2a033015e8fd8864e1d8155e5d2063 extends Twig_Template
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
        $__internal_28d6a83a0b29768ab87c64040360e2472655ee7d88a024674725efbbd38db673 = $this->env->getExtension("native_profiler");
        $__internal_28d6a83a0b29768ab87c64040360e2472655ee7d88a024674725efbbd38db673->enter($__internal_28d6a83a0b29768ab87c64040360e2472655ee7d88a024674725efbbd38db673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/class.banlist.php"));

        // line 1
        echo "<?php
/*********************************************************************
    class.banlist.php

    Banned email addresses handle.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/

require_once \"class.filter.php\";
class Banlist {
    
    function add(\$email,\$submitter='') {
        return self::getSystemBanList()->addRule('email','equal',\$email);
    }
    
    function remove(\$email) {
        return self::getSystemBanList()->removeRule('email','equal',\$email);
    }
    
    function isbanned(\$email) {
        return TicketFilter::isBanned(\$email);
    }

    function includes(\$email) {
        return self::getSystemBanList()->containsRule('email','equal',\$email);
    }

    function ensureSystemBanList() {

        if (!(\$id=Filter::getIdByName('SYSTEM BAN LIST')))
            \$id=self::createSystemBanList();

        return \$id;
    }

    function createSystemBanList() {
        # XXX: Filter::create should return the ID!!!
        \$errors=array();
        return Filter::create(array(
            'execorder'     => 99,
            'name'          => 'SYSTEM BAN LIST',
            'isactive'      => 1,
            'match_all_rules' => false,
            'reject_ticket'  => true,
            'rules'         => array(),
            'notes'         => __('Internal list for email banning. Do not remove')
        ), \$errors);
    }

    function getSystemBanList() {
        return new Filter(self::ensureSystemBanList());
    }

    function getFilter() {
        return self::getSystemBanList();
    }
}
";
        
        $__internal_28d6a83a0b29768ab87c64040360e2472655ee7d88a024674725efbbd38db673->leave($__internal_28d6a83a0b29768ab87c64040360e2472655ee7d88a024674725efbbd38db673_prof);

    }

    public function getTemplateName()
    {
        return "support/include/class.banlist.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     class.banlist.php*/
/* */
/*     Banned email addresses handle.*/
/* */
/*     Peter Rotich <peter@osticket.com>*/
/*     Copyright (c)  2006-2013 osTicket*/
/*     http://www.osticket.com*/
/* */
/*     Released under the GNU General Public License WITHOUT ANY WARRANTY.*/
/*     See LICENSE.TXT for details.*/
/* */
/*     vim: expandtab sw=4 ts=4 sts=4:*/
/* **********************************************************************//* */
/* */
/* require_once "class.filter.php";*/
/* class Banlist {*/
/*     */
/*     function add($email,$submitter='') {*/
/*         return self::getSystemBanList()->addRule('email','equal',$email);*/
/*     }*/
/*     */
/*     function remove($email) {*/
/*         return self::getSystemBanList()->removeRule('email','equal',$email);*/
/*     }*/
/*     */
/*     function isbanned($email) {*/
/*         return TicketFilter::isBanned($email);*/
/*     }*/
/* */
/*     function includes($email) {*/
/*         return self::getSystemBanList()->containsRule('email','equal',$email);*/
/*     }*/
/* */
/*     function ensureSystemBanList() {*/
/* */
/*         if (!($id=Filter::getIdByName('SYSTEM BAN LIST')))*/
/*             $id=self::createSystemBanList();*/
/* */
/*         return $id;*/
/*     }*/
/* */
/*     function createSystemBanList() {*/
/*         # XXX: Filter::create should return the ID!!!*/
/*         $errors=array();*/
/*         return Filter::create(array(*/
/*             'execorder'     => 99,*/
/*             'name'          => 'SYSTEM BAN LIST',*/
/*             'isactive'      => 1,*/
/*             'match_all_rules' => false,*/
/*             'reject_ticket'  => true,*/
/*             'rules'         => array(),*/
/*             'notes'         => __('Internal list for email banning. Do not remove')*/
/*         ), $errors);*/
/*     }*/
/* */
/*     function getSystemBanList() {*/
/*         return new Filter(self::ensureSystemBanList());*/
/*     }*/
/* */
/*     function getFilter() {*/
/*         return self::getSystemBanList();*/
/*     }*/
/* }*/
/* */
