<?php

/* support/kb/kb.inc.php */
class __TwigTemplate_a1b9258ffc48d92ae21be47d53a2e07d201a88efdc9634d72d0c1f2ccf4a411a extends Twig_Template
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
        $__internal_156df12ab80ed62697dc1cdb7ca92b28eea1f04176831f844aa1de766aec39f7 = $this->env->getExtension("native_profiler");
        $__internal_156df12ab80ed62697dc1cdb7ca92b28eea1f04176831f844aa1de766aec39f7->enter($__internal_156df12ab80ed62697dc1cdb7ca92b28eea1f04176831f844aa1de766aec39f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/kb/kb.inc.php"));

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
        
        $__internal_156df12ab80ed62697dc1cdb7ca92b28eea1f04176831f844aa1de766aec39f7->leave($__internal_156df12ab80ed62697dc1cdb7ca92b28eea1f04176831f844aa1de766aec39f7_prof);

    }

    public function getTemplateName()
    {
        return "support/kb/kb.inc.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
