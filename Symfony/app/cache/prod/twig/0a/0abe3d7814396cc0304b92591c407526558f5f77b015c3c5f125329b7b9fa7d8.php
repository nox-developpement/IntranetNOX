<?php

/* support/include/class.banlist.php */
class __TwigTemplate_34b4e53cb0a1ca97d63029e66169e2d6dc8f537b32c00ba80551e4b7f86f142b extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/class.banlist.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
