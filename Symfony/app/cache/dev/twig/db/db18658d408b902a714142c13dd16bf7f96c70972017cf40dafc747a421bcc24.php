<?php

/* support/include/class.cron.php */
class __TwigTemplate_4c6bb76413591b17d77a8542a21526c004bebec379fa60aa09e1a21f59f52556 extends Twig_Template
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
        $__internal_634d5029e2719d1fd067975aed834a042e28bfbe4aa6c116269aa85284cbed63 = $this->env->getExtension("native_profiler");
        $__internal_634d5029e2719d1fd067975aed834a042e28bfbe4aa6c116269aa85284cbed63->enter($__internal_634d5029e2719d1fd067975aed834a042e28bfbe4aa6c116269aa85284cbed63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/class.cron.php"));

        // line 1
        echo "<?php
/*********************************************************************
    class.cron.php

    Nothing special...just a central location for all cron calls.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    TODO: The plan is to make cron jobs db based.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
//TODO: Make it DB based!
require_once INCLUDE_DIR.'class.signal.php';

class Cron {

    function MailFetcher() {
        require_once(INCLUDE_DIR.'class.mailfetch.php');
        MailFetcher::run(); //Fetch mail..frequency is limited by email account setting.
    }

    function TicketMonitor() {
        require_once(INCLUDE_DIR.'class.ticket.php');
        require_once(INCLUDE_DIR.'class.lock.php');
        Ticket::checkOverdue(); //Make stale tickets overdue
        TicketLock::cleanup(); //Remove expired locks
    }

    function PurgeLogs() {
        global \$ost;
        // Once a day on a 5-minute cron
        if (rand(1,300) == 42)
            if(\$ost) \$ost->purgeLogs();
    }

    function PurgeDrafts() {
        require_once(INCLUDE_DIR.'class.draft.php');
        Draft::cleanup();
    }

    function CleanOrphanedFiles() {
        require_once(INCLUDE_DIR.'class.file.php');
        AttachmentFile::deleteOrphans();
    }

    function MaybeOptimizeTables() {
        // Once a week on a 5-minute cron
        \$chance = rand(1,2000);
        switch (\$chance) {
        case 42:
            @db_query('OPTIMIZE TABLE '.TICKET_LOCK_TABLE);
            break;
        case 242:
            @db_query('OPTIMIZE TABLE '.SYSLOG_TABLE);
            break;
        case 442:
            @db_query('OPTIMIZE TABLE '.DRAFT_TABLE);
            break;

        // Start optimizing core ticket tables when we have an archiving
        // system available
        case 142:
            #@db_query('OPTIMIZE TABLE '.TICKET_TABLE);
            break;
        case 542:
            #@db_query('OPTIMIZE TABLE '.FORM_ENTRY_TABLE);
            break;
        case 642:
            #@db_query('OPTIMIZE TABLE '.FORM_ANSWER_TABLE);
            break;
        case 342:
            #@db_query('OPTIMIZE TABLE '.FILE_TABLE);
            # XXX: Please do not add an OPTIMIZE for the file_chunk table!
            break;

        // Start optimizing user tables when we have a user directory
        // sporting deletes
        case 742:
            #@db_query('OPTIMIZE TABLE '.USER_TABLE);
            break;
        case 842:
            #@db_query('OPTIMIZE TABLE '.USER_EMAIL_TABLE);
            break;
        }
    }

    function run(){ //called by outside cron NOT autocron
        global \$ost;
        if (!\$ost || \$ost->isUpgradePending())
            return;

        self::MailFetcher();
        self::TicketMonitor();
        self::PurgeLogs();
        // Run file purging about every 10 cron runs
        if (mt_rand(1, 9) == 4)
            self::CleanOrphanedFiles();
        self::PurgeDrafts();
        self::MaybeOptimizeTables();

        \$data = array('autocron'=>false);
        Signal::send('cron', \$data);
    }
}
?>
";
        
        $__internal_634d5029e2719d1fd067975aed834a042e28bfbe4aa6c116269aa85284cbed63->leave($__internal_634d5029e2719d1fd067975aed834a042e28bfbe4aa6c116269aa85284cbed63_prof);

    }

    public function getTemplateName()
    {
        return "support/include/class.cron.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     class.cron.php*/
/* */
/*     Nothing special...just a central location for all cron calls.*/
/* */
/*     Peter Rotich <peter@osticket.com>*/
/*     Copyright (c)  2006-2013 osTicket*/
/*     http://www.osticket.com*/
/* */
/*     Released under the GNU General Public License WITHOUT ANY WARRANTY.*/
/*     See LICENSE.TXT for details.*/
/* */
/*     TODO: The plan is to make cron jobs db based.*/
/* */
/*     vim: expandtab sw=4 ts=4 sts=4:*/
/* **********************************************************************//* */
/* //TODO: Make it DB based!*/
/* require_once INCLUDE_DIR.'class.signal.php';*/
/* */
/* class Cron {*/
/* */
/*     function MailFetcher() {*/
/*         require_once(INCLUDE_DIR.'class.mailfetch.php');*/
/*         MailFetcher::run(); //Fetch mail..frequency is limited by email account setting.*/
/*     }*/
/* */
/*     function TicketMonitor() {*/
/*         require_once(INCLUDE_DIR.'class.ticket.php');*/
/*         require_once(INCLUDE_DIR.'class.lock.php');*/
/*         Ticket::checkOverdue(); //Make stale tickets overdue*/
/*         TicketLock::cleanup(); //Remove expired locks*/
/*     }*/
/* */
/*     function PurgeLogs() {*/
/*         global $ost;*/
/*         // Once a day on a 5-minute cron*/
/*         if (rand(1,300) == 42)*/
/*             if($ost) $ost->purgeLogs();*/
/*     }*/
/* */
/*     function PurgeDrafts() {*/
/*         require_once(INCLUDE_DIR.'class.draft.php');*/
/*         Draft::cleanup();*/
/*     }*/
/* */
/*     function CleanOrphanedFiles() {*/
/*         require_once(INCLUDE_DIR.'class.file.php');*/
/*         AttachmentFile::deleteOrphans();*/
/*     }*/
/* */
/*     function MaybeOptimizeTables() {*/
/*         // Once a week on a 5-minute cron*/
/*         $chance = rand(1,2000);*/
/*         switch ($chance) {*/
/*         case 42:*/
/*             @db_query('OPTIMIZE TABLE '.TICKET_LOCK_TABLE);*/
/*             break;*/
/*         case 242:*/
/*             @db_query('OPTIMIZE TABLE '.SYSLOG_TABLE);*/
/*             break;*/
/*         case 442:*/
/*             @db_query('OPTIMIZE TABLE '.DRAFT_TABLE);*/
/*             break;*/
/* */
/*         // Start optimizing core ticket tables when we have an archiving*/
/*         // system available*/
/*         case 142:*/
/*             #@db_query('OPTIMIZE TABLE '.TICKET_TABLE);*/
/*             break;*/
/*         case 542:*/
/*             #@db_query('OPTIMIZE TABLE '.FORM_ENTRY_TABLE);*/
/*             break;*/
/*         case 642:*/
/*             #@db_query('OPTIMIZE TABLE '.FORM_ANSWER_TABLE);*/
/*             break;*/
/*         case 342:*/
/*             #@db_query('OPTIMIZE TABLE '.FILE_TABLE);*/
/*             # XXX: Please do not add an OPTIMIZE for the file_chunk table!*/
/*             break;*/
/* */
/*         // Start optimizing user tables when we have a user directory*/
/*         // sporting deletes*/
/*         case 742:*/
/*             #@db_query('OPTIMIZE TABLE '.USER_TABLE);*/
/*             break;*/
/*         case 842:*/
/*             #@db_query('OPTIMIZE TABLE '.USER_EMAIL_TABLE);*/
/*             break;*/
/*         }*/
/*     }*/
/* */
/*     function run(){ //called by outside cron NOT autocron*/
/*         global $ost;*/
/*         if (!$ost || $ost->isUpgradePending())*/
/*             return;*/
/* */
/*         self::MailFetcher();*/
/*         self::TicketMonitor();*/
/*         self::PurgeLogs();*/
/*         // Run file purging about every 10 cron runs*/
/*         if (mt_rand(1, 9) == 4)*/
/*             self::CleanOrphanedFiles();*/
/*         self::PurgeDrafts();*/
/*         self::MaybeOptimizeTables();*/
/* */
/*         $data = array('autocron'=>false);*/
/*         Signal::send('cron', $data);*/
/*     }*/
/* }*/
/* ?>*/
/* */
