<?php

/* support/offline.php */
class __TwigTemplate_e7f8d2c0feac8e5e64791f54870d58ec0101cb247d508a11eeb963f51464e35b extends Twig_Template
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
    offline.php

    Offline page...modify to fit your needs.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require_once('client.inc.php');
if(is_object(\$ost) && \$ost->isSystemOnline()) {
    @header('Location: index.php'); //Redirect if the system is online.
    include('index.php');
    exit;
}
\$nav=null;
require(CLIENTINC_DIR.'header.inc.php');
?>
<div id=\"landing_page\">
<?php
if((\$page=\$cfg->getOfflinePage())) {
    echo \$page->getBody();
} else {
    echo '<h1>'.__('Support Ticket System Offline').'</h1>';
}
?>
</div>
<?php require(CLIENTINC_DIR.'footer.inc.php'); ?>
";
    }

    public function getTemplateName()
    {
        return "support/offline.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     offline.php*/
/* */
/*     Offline page...modify to fit your needs.*/
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
/* require_once('client.inc.php');*/
/* if(is_object($ost) && $ost->isSystemOnline()) {*/
/*     @header('Location: index.php'); //Redirect if the system is online.*/
/*     include('index.php');*/
/*     exit;*/
/* }*/
/* $nav=null;*/
/* require(CLIENTINC_DIR.'header.inc.php');*/
/* ?>*/
/* <div id="landing_page">*/
/* <?php*/
/* if(($page=$cfg->getOfflinePage())) {*/
/*     echo $page->getBody();*/
/* } else {*/
/*     echo '<h1>'.__('Support Ticket System Offline').'</h1>';*/
/* }*/
/* ?>*/
/* </div>*/
/* <?php require(CLIENTINC_DIR.'footer.inc.php'); ?>*/
/* */
