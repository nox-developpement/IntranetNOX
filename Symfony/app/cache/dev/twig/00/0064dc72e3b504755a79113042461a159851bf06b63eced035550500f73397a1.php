<?php

/* support/offline.php */
class __TwigTemplate_25016c49c754b18b28196367439f639d313374dcc622038a11ceb518c06b8df2 extends Twig_Template
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
        $__internal_971fe4b84fa31da87c38a425a754b1c64fe860f8b1fea90fd241e87212a4abdf = $this->env->getExtension("native_profiler");
        $__internal_971fe4b84fa31da87c38a425a754b1c64fe860f8b1fea90fd241e87212a4abdf->enter($__internal_971fe4b84fa31da87c38a425a754b1c64fe860f8b1fea90fd241e87212a4abdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/offline.php"));

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
        
        $__internal_971fe4b84fa31da87c38a425a754b1c64fe860f8b1fea90fd241e87212a4abdf->leave($__internal_971fe4b84fa31da87c38a425a754b1c64fe860f8b1fea90fd241e87212a4abdf_prof);

    }

    public function getTemplateName()
    {
        return "support/offline.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
