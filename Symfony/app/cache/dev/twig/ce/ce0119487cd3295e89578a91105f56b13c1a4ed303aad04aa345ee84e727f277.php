<?php

/* support/include/class.collaborator.php */
class __TwigTemplate_cad98b526386824ebd4ad7f1c8e717482e04ffb00f52635f6f7a141038384bc2 extends Twig_Template
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
        $__internal_149da8eadacace582b49fcd1b794ae9f6674196e9201b471242fe8f812ecb1e8 = $this->env->getExtension("native_profiler");
        $__internal_149da8eadacace582b49fcd1b794ae9f6674196e9201b471242fe8f812ecb1e8->enter($__internal_149da8eadacace582b49fcd1b794ae9f6674196e9201b471242fe8f812ecb1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/class.collaborator.php"));

        // line 1
        echo "<?php
/*********************************************************************
    class.collaborator.php

    Ticket collaborator

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require_once(INCLUDE_DIR . 'class.user.php');
require_once(INCLUDE_DIR . 'class.client.php');

class Collaborator extends TicketUser {

    var \$ht;

    var \$user;
    var \$ticket;

    function __construct(\$id) {
        \$this->load(\$id);
        parent::__construct(\$this->getUser());
    }

    function load(\$id) {

        if(!\$id && !(\$id=\$this->getId()))
            return;

        \$sql='SELECT * FROM '.TICKET_COLLABORATOR_TABLE
            .' WHERE id='.db_input(\$id);

        \$this->ht = db_fetch_array(db_query(\$sql));
        \$this->ticket = null;
    }

    function reload() {
        return \$this->load();
    }

    function __toString() {
        return Format::htmlchars(sprintf('%s <%s>', \$this->getName(),
                    \$this->getEmail()));
    }

    function getId() {
        return \$this->ht['id'];
    }

    function isActive() {
        return (\$this->ht['isactive']);
    }

    function getCreateDate() {
        return \$this->ht['created'];
    }

    function getTicketId() {
        return \$this->ht['ticket_id'];
    }

    function getTicket() {
        if(!\$this->ticket && \$this->getTicketId())
            \$this->ticket = Ticket::lookup(\$this->getTicketId());

        return \$this->ticket;
    }

    function getUserId() {
        return \$this->ht['user_id'];
    }

    function getUser() {

        if(!\$this->user && \$this->getUserId())
            \$this->user = User::lookup(\$this->getUserId());

        return \$this->user;
    }

    function remove() {

        \$sql='DELETE FROM '.TICKET_COLLABORATOR_TABLE
            .' WHERE id='.db_input(\$this->getId())
            .' LIMIT 1';

        return  (db_query(\$sql) && db_affected_rows());
    }

    static function add(\$info, &\$errors) {

        if (!\$info || !\$info['ticketId'] || !\$info['userId'])
            \$errors['err'] = __('Invalid or missing information');
        elseif ((\$c=self::lookup(\$info)))
            \$errors['err'] = sprintf(__('%s is already a collaborator'),
                    \$c->getName());

        if (\$errors) return false;

        \$sql='INSERT INTO '.TICKET_COLLABORATOR_TABLE
            .' SET updated=NOW() '
            .' ,isactive='.db_input(isset(\$info['isactive']) ?  \$info['isactive'] : 0)
            .' ,ticket_id='.db_input(\$info['ticketId'])
            .' ,user_id='.db_input(\$info['userId']);

        if(db_query(\$sql) && (\$id=db_insert_id()))
            return self::lookup(\$id);

        \$errors['err'] = __('Unable to add collaborator. Internal error');

        return false;
    }

    static function forTicket(\$tid, \$criteria=array()) {

        \$collaborators = array();

        \$sql='SELECT id FROM '.TICKET_COLLABORATOR_TABLE
            .' WHERE ticket_id='.db_input(\$tid);

        if(isset(\$criteria['isactive']))
            \$sql.=' AND isactive='.db_input(\$criteria['isactive']);

        //TODO: sort by name of the user

        if((\$res=db_query(\$sql)) && db_num_rows(\$res))
            while(list(\$id)=db_fetch_row(\$res))
                \$collaborators[] = self::lookup(\$id);

        return \$collaborators;
    }

    static function getIdByInfo(\$info) {

        \$sql='SELECT id FROM '.TICKET_COLLABORATOR_TABLE
            .' WHERE ticket_id='.db_input(\$info['ticketId'])
            .' AND user_id='.db_input(\$info['userId']);

        return db_result(db_query(\$sql));
    }

    static function lookup(\$criteria) {

        \$id = is_numeric(\$criteria)
            ? \$criteria : self::getIdByInfo(\$criteria);

        return (\$id
                && (\$c = new Collaborator(\$id))
                && \$c->getId() == \$id)
            ? \$c : null;
    }
}
?>
";
        
        $__internal_149da8eadacace582b49fcd1b794ae9f6674196e9201b471242fe8f812ecb1e8->leave($__internal_149da8eadacace582b49fcd1b794ae9f6674196e9201b471242fe8f812ecb1e8_prof);

    }

    public function getTemplateName()
    {
        return "support/include/class.collaborator.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     class.collaborator.php*/
/* */
/*     Ticket collaborator*/
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
/* require_once(INCLUDE_DIR . 'class.user.php');*/
/* require_once(INCLUDE_DIR . 'class.client.php');*/
/* */
/* class Collaborator extends TicketUser {*/
/* */
/*     var $ht;*/
/* */
/*     var $user;*/
/*     var $ticket;*/
/* */
/*     function __construct($id) {*/
/*         $this->load($id);*/
/*         parent::__construct($this->getUser());*/
/*     }*/
/* */
/*     function load($id) {*/
/* */
/*         if(!$id && !($id=$this->getId()))*/
/*             return;*/
/* */
/*         $sql='SELECT * FROM '.TICKET_COLLABORATOR_TABLE*/
/*             .' WHERE id='.db_input($id);*/
/* */
/*         $this->ht = db_fetch_array(db_query($sql));*/
/*         $this->ticket = null;*/
/*     }*/
/* */
/*     function reload() {*/
/*         return $this->load();*/
/*     }*/
/* */
/*     function __toString() {*/
/*         return Format::htmlchars(sprintf('%s <%s>', $this->getName(),*/
/*                     $this->getEmail()));*/
/*     }*/
/* */
/*     function getId() {*/
/*         return $this->ht['id'];*/
/*     }*/
/* */
/*     function isActive() {*/
/*         return ($this->ht['isactive']);*/
/*     }*/
/* */
/*     function getCreateDate() {*/
/*         return $this->ht['created'];*/
/*     }*/
/* */
/*     function getTicketId() {*/
/*         return $this->ht['ticket_id'];*/
/*     }*/
/* */
/*     function getTicket() {*/
/*         if(!$this->ticket && $this->getTicketId())*/
/*             $this->ticket = Ticket::lookup($this->getTicketId());*/
/* */
/*         return $this->ticket;*/
/*     }*/
/* */
/*     function getUserId() {*/
/*         return $this->ht['user_id'];*/
/*     }*/
/* */
/*     function getUser() {*/
/* */
/*         if(!$this->user && $this->getUserId())*/
/*             $this->user = User::lookup($this->getUserId());*/
/* */
/*         return $this->user;*/
/*     }*/
/* */
/*     function remove() {*/
/* */
/*         $sql='DELETE FROM '.TICKET_COLLABORATOR_TABLE*/
/*             .' WHERE id='.db_input($this->getId())*/
/*             .' LIMIT 1';*/
/* */
/*         return  (db_query($sql) && db_affected_rows());*/
/*     }*/
/* */
/*     static function add($info, &$errors) {*/
/* */
/*         if (!$info || !$info['ticketId'] || !$info['userId'])*/
/*             $errors['err'] = __('Invalid or missing information');*/
/*         elseif (($c=self::lookup($info)))*/
/*             $errors['err'] = sprintf(__('%s is already a collaborator'),*/
/*                     $c->getName());*/
/* */
/*         if ($errors) return false;*/
/* */
/*         $sql='INSERT INTO '.TICKET_COLLABORATOR_TABLE*/
/*             .' SET updated=NOW() '*/
/*             .' ,isactive='.db_input(isset($info['isactive']) ?  $info['isactive'] : 0)*/
/*             .' ,ticket_id='.db_input($info['ticketId'])*/
/*             .' ,user_id='.db_input($info['userId']);*/
/* */
/*         if(db_query($sql) && ($id=db_insert_id()))*/
/*             return self::lookup($id);*/
/* */
/*         $errors['err'] = __('Unable to add collaborator. Internal error');*/
/* */
/*         return false;*/
/*     }*/
/* */
/*     static function forTicket($tid, $criteria=array()) {*/
/* */
/*         $collaborators = array();*/
/* */
/*         $sql='SELECT id FROM '.TICKET_COLLABORATOR_TABLE*/
/*             .' WHERE ticket_id='.db_input($tid);*/
/* */
/*         if(isset($criteria['isactive']))*/
/*             $sql.=' AND isactive='.db_input($criteria['isactive']);*/
/* */
/*         //TODO: sort by name of the user*/
/* */
/*         if(($res=db_query($sql)) && db_num_rows($res))*/
/*             while(list($id)=db_fetch_row($res))*/
/*                 $collaborators[] = self::lookup($id);*/
/* */
/*         return $collaborators;*/
/*     }*/
/* */
/*     static function getIdByInfo($info) {*/
/* */
/*         $sql='SELECT id FROM '.TICKET_COLLABORATOR_TABLE*/
/*             .' WHERE ticket_id='.db_input($info['ticketId'])*/
/*             .' AND user_id='.db_input($info['userId']);*/
/* */
/*         return db_result(db_query($sql));*/
/*     }*/
/* */
/*     static function lookup($criteria) {*/
/* */
/*         $id = is_numeric($criteria)*/
/*             ? $criteria : self::getIdByInfo($criteria);*/
/* */
/*         return ($id*/
/*                 && ($c = new Collaborator($id))*/
/*                 && $c->getId() == $id)*/
/*             ? $c : null;*/
/*     }*/
/* }*/
/* ?>*/
/* */
