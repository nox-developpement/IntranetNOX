<?php

/* support/kb/kb.inc.php */
class __TwigTemplate_fa69ebaabeb52cbe2a57d18b4eadad401281cc73ceb5b1a4618dfad87d0ab50c extends Twig_Template
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
    kb.inc.php

    File included on every knowledgebase file.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require_once('../client.inc.php');
require_once(INCLUDE_DIR.'class.faq.php');
/* Bail out if knowledgebase is disabled or if we have no public-published FAQs. */
if(!\$cfg || !\$cfg->isKnowledgebaseEnabled() || !FAQ::countPublishedFAQs()) {
    header('Location: ../');
    exit;
}

\$nav = new UserNav(\$thisclient, 'kb');
?>
";
    }

    public function getTemplateName()
    {
        return "support/kb/kb.inc.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     kb.inc.php*/
/* */
/*     File included on every knowledgebase file.*/
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
/* require_once('../client.inc.php');*/
/* require_once(INCLUDE_DIR.'class.faq.php');*/
/* /* Bail out if knowledgebase is disabled or if we have no public-published FAQs. *//* */
/* if(!$cfg || !$cfg->isKnowledgebaseEnabled() || !FAQ::countPublishedFAQs()) {*/
/*     header('Location: ../');*/
/*     exit;*/
/* }*/
/* */
/* $nav = new UserNav($thisclient, 'kb');*/
/* ?>*/
/* */
