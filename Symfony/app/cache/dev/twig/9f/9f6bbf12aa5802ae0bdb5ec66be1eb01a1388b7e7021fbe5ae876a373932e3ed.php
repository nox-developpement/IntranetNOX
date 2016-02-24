<?php

/* support/include/class.lock.php */
class __TwigTemplate_e217decbfd84e02df13bf8edf4aa0ea0ee8ebd4d08aa00b76d06b5c3846d6128 extends Twig_Template
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
        $__internal_39d9b4d252fe7f46a070537019ce421e9064ea526cd2ae0bf528e0273133bed7 = $this->env->getExtension("native_profiler");
        $__internal_39d9b4d252fe7f46a070537019ce421e9064ea526cd2ae0bf528e0273133bed7->enter($__internal_39d9b4d252fe7f46a070537019ce421e9064ea526cd2ae0bf528e0273133bed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/class.lock.php"));

        // line 1
        echo "<?php
/*********************************************************************
    class.lock.php

    Ticket lock handle.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/

/*
 * Mainly used as a helper...
 */

class TicketLock {
    var \$id;
    var \$ht;
    
    function TicketLock(\$id, \$tid=0) {
        \$this->id=0;
        \$this->load(\$id, \$tid);
    }

    function load(\$id=0, \$tid=0) {

        if(!\$id && \$this->ht['id'])
            \$id=\$this->ht['id'];

        \$sql='SELECT l.*, TIME_TO_SEC(TIMEDIFF(expire,NOW())) as timeleft '
            .' ,IF(s.staff_id IS NULL,\"staff\",CONCAT_WS(\" \", s.lastname, s.firstname)) as staff '
            .' FROM '.TICKET_LOCK_TABLE. ' l '
            .' LEFT JOIN '.STAFF_TABLE.' s ON(s.staff_id=l.staff_id) '
            .' WHERE lock_id='.db_input(\$id);

        if(\$tid) 
            \$sql.=' AND ticket_id='.db_input(\$tid);

        if(!(\$res=db_query(\$sql)) || !db_num_rows(\$res))
            return false;

        \$this->ht=db_fetch_array(\$res);
        \$this->id=\$this->ht['id']=\$this->ht['lock_id'];
        \$this->ht['expiretime']=time()+\$this->ht['timeleft'];
        
        return true;
    }
  
    function reload() {
        return \$this->load();
    }

    function getId() {
        return \$this->id;
    }

    function getStaffId() {
        return \$this->ht['staff_id'];
    }

    function getStaffName() {
        return \$this->ht['staff'];
    }

    function getCreateTime() {
        return \$this->ht['created'];
    }

    function getExpireTime() {
        return \$this->ht['expire'];
    }
    //Get remaiming time before the lock expires
    function getTime() {
        return \$this->isExpired()?0:(\$this->ht['expiretime']-time());
    }

    //Should we be doing realtime check here? (Ans: not really....expiretime is local & based on loadtime)
    function isExpired() {
        return (time()>\$this->ht['expiretime']);
    }
   
    //Renew existing lock.
    function renew(\$lockTime=0) {

        if(!\$lockTime || !is_numeric(\$lockTime)) //XXX: test to  make it works.
            \$lockTime = '(TIME_TO_SEC(TIMEDIFF(expire,created))/60)';
            

        \$sql='UPDATE '.TICKET_LOCK_TABLE
            .' SET expire=DATE_ADD(NOW(),INTERVAL '.\$lockTime.' MINUTE) '
            .' WHERE lock_id='.db_input(\$this->getId());
        //echo \$sql;
        if(!db_query(\$sql) || !db_affected_rows())
            return false;
        
        \$this->reload();
        
        return true;
    }

    //release aka delete a lock.
    function release() {
        //FORCED release - we don't give a ....
        \$sql='DELETE FROM '.TICKET_LOCK_TABLE.' WHERE lock_id='.db_input(\$this->getId()).' LIMIT 1';
        return (db_query(\$sql) && db_affected_rows());
    }

    /* ----------------------- Static functions ---------------------------*/
    function lookup(\$id, \$tid) {
        return (\$id  && (\$lock = new TicketLock(\$id,\$tid)) && \$lock->getId()==\$id)?\$lock:null;
    }

    //Create a ticket lock...this function assumes the caller checked for access & validity of ticket & staff x-ship.    
    function acquire(\$ticketId, \$staffId, \$lockTime) {

        if(!\$ticketId or !\$staffId or !\$lockTime)
            return 0;


        //Cleanup any expired locks on the ticket.
        db_query('DELETE FROM '.TICKET_LOCK_TABLE.' WHERE ticket_id='.db_input(\$ticketId).' AND expire<NOW()');
        //create the new lock.
        \$sql='INSERT IGNORE INTO '.TICKET_LOCK_TABLE.' SET created=NOW() '
            .',ticket_id='.db_input(\$ticketId)
            .',staff_id='.db_input(\$staffId)
            .',expire=DATE_ADD(NOW(),INTERVAL '.\$lockTime.' MINUTE) ';

        return db_query(\$sql)?db_insert_id():0;
    }

    function create(\$ticketId, \$staffId, \$lockTime) {
        if((\$id=self::acquire(\$ticketId, \$staffId, \$lockTime)))
            return self::lookup(\$id);
    }

    //Simply remove ALL locks a user (staff) holds on a ticket(s).
    function removeStaffLocks(\$staffId, \$ticketId=0) {
        \$sql='DELETE FROM '.TICKET_LOCK_TABLE.' WHERE staff_id='.db_input(\$staffId);
        if(\$ticketId)
            \$sql.=' AND ticket_id='.db_input(\$ticketId);

        return db_query(\$sql);
    }

    //Called  via cron
    function cleanup() {
        //Cleanup any expired locks.
        db_query('DELETE FROM '.TICKET_LOCK_TABLE.' WHERE expire<NOW()');
    }
}
?>
";
        
        $__internal_39d9b4d252fe7f46a070537019ce421e9064ea526cd2ae0bf528e0273133bed7->leave($__internal_39d9b4d252fe7f46a070537019ce421e9064ea526cd2ae0bf528e0273133bed7_prof);

    }

    public function getTemplateName()
    {
        return "support/include/class.lock.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     class.lock.php*/
/* */
/*     Ticket lock handle.*/
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
/* /**/
/*  * Mainly used as a helper...*/
/*  *//* */
/* */
/* class TicketLock {*/
/*     var $id;*/
/*     var $ht;*/
/*     */
/*     function TicketLock($id, $tid=0) {*/
/*         $this->id=0;*/
/*         $this->load($id, $tid);*/
/*     }*/
/* */
/*     function load($id=0, $tid=0) {*/
/* */
/*         if(!$id && $this->ht['id'])*/
/*             $id=$this->ht['id'];*/
/* */
/*         $sql='SELECT l.*, TIME_TO_SEC(TIMEDIFF(expire,NOW())) as timeleft '*/
/*             .' ,IF(s.staff_id IS NULL,"staff",CONCAT_WS(" ", s.lastname, s.firstname)) as staff '*/
/*             .' FROM '.TICKET_LOCK_TABLE. ' l '*/
/*             .' LEFT JOIN '.STAFF_TABLE.' s ON(s.staff_id=l.staff_id) '*/
/*             .' WHERE lock_id='.db_input($id);*/
/* */
/*         if($tid) */
/*             $sql.=' AND ticket_id='.db_input($tid);*/
/* */
/*         if(!($res=db_query($sql)) || !db_num_rows($res))*/
/*             return false;*/
/* */
/*         $this->ht=db_fetch_array($res);*/
/*         $this->id=$this->ht['id']=$this->ht['lock_id'];*/
/*         $this->ht['expiretime']=time()+$this->ht['timeleft'];*/
/*         */
/*         return true;*/
/*     }*/
/*   */
/*     function reload() {*/
/*         return $this->load();*/
/*     }*/
/* */
/*     function getId() {*/
/*         return $this->id;*/
/*     }*/
/* */
/*     function getStaffId() {*/
/*         return $this->ht['staff_id'];*/
/*     }*/
/* */
/*     function getStaffName() {*/
/*         return $this->ht['staff'];*/
/*     }*/
/* */
/*     function getCreateTime() {*/
/*         return $this->ht['created'];*/
/*     }*/
/* */
/*     function getExpireTime() {*/
/*         return $this->ht['expire'];*/
/*     }*/
/*     //Get remaiming time before the lock expires*/
/*     function getTime() {*/
/*         return $this->isExpired()?0:($this->ht['expiretime']-time());*/
/*     }*/
/* */
/*     //Should we be doing realtime check here? (Ans: not really....expiretime is local & based on loadtime)*/
/*     function isExpired() {*/
/*         return (time()>$this->ht['expiretime']);*/
/*     }*/
/*    */
/*     //Renew existing lock.*/
/*     function renew($lockTime=0) {*/
/* */
/*         if(!$lockTime || !is_numeric($lockTime)) //XXX: test to  make it works.*/
/*             $lockTime = '(TIME_TO_SEC(TIMEDIFF(expire,created))/60)';*/
/*             */
/* */
/*         $sql='UPDATE '.TICKET_LOCK_TABLE*/
/*             .' SET expire=DATE_ADD(NOW(),INTERVAL '.$lockTime.' MINUTE) '*/
/*             .' WHERE lock_id='.db_input($this->getId());*/
/*         //echo $sql;*/
/*         if(!db_query($sql) || !db_affected_rows())*/
/*             return false;*/
/*         */
/*         $this->reload();*/
/*         */
/*         return true;*/
/*     }*/
/* */
/*     //release aka delete a lock.*/
/*     function release() {*/
/*         //FORCED release - we don't give a ....*/
/*         $sql='DELETE FROM '.TICKET_LOCK_TABLE.' WHERE lock_id='.db_input($this->getId()).' LIMIT 1';*/
/*         return (db_query($sql) && db_affected_rows());*/
/*     }*/
/* */
/*     /* ----------------------- Static functions ---------------------------*//* */
/*     function lookup($id, $tid) {*/
/*         return ($id  && ($lock = new TicketLock($id,$tid)) && $lock->getId()==$id)?$lock:null;*/
/*     }*/
/* */
/*     //Create a ticket lock...this function assumes the caller checked for access & validity of ticket & staff x-ship.    */
/*     function acquire($ticketId, $staffId, $lockTime) {*/
/* */
/*         if(!$ticketId or !$staffId or !$lockTime)*/
/*             return 0;*/
/* */
/* */
/*         //Cleanup any expired locks on the ticket.*/
/*         db_query('DELETE FROM '.TICKET_LOCK_TABLE.' WHERE ticket_id='.db_input($ticketId).' AND expire<NOW()');*/
/*         //create the new lock.*/
/*         $sql='INSERT IGNORE INTO '.TICKET_LOCK_TABLE.' SET created=NOW() '*/
/*             .',ticket_id='.db_input($ticketId)*/
/*             .',staff_id='.db_input($staffId)*/
/*             .',expire=DATE_ADD(NOW(),INTERVAL '.$lockTime.' MINUTE) ';*/
/* */
/*         return db_query($sql)?db_insert_id():0;*/
/*     }*/
/* */
/*     function create($ticketId, $staffId, $lockTime) {*/
/*         if(($id=self::acquire($ticketId, $staffId, $lockTime)))*/
/*             return self::lookup($id);*/
/*     }*/
/* */
/*     //Simply remove ALL locks a user (staff) holds on a ticket(s).*/
/*     function removeStaffLocks($staffId, $ticketId=0) {*/
/*         $sql='DELETE FROM '.TICKET_LOCK_TABLE.' WHERE staff_id='.db_input($staffId);*/
/*         if($ticketId)*/
/*             $sql.=' AND ticket_id='.db_input($ticketId);*/
/* */
/*         return db_query($sql);*/
/*     }*/
/* */
/*     //Called  via cron*/
/*     function cleanup() {*/
/*         //Cleanup any expired locks.*/
/*         db_query('DELETE FROM '.TICKET_LOCK_TABLE.' WHERE expire<NOW()');*/
/*     }*/
/* }*/
/* ?>*/
/* */
