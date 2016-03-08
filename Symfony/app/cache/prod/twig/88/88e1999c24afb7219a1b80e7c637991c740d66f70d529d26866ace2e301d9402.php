<?php

/* support/file.php */
class __TwigTemplate_498e1a12f18edb0b7afe07f1df2bb39c4b379e9a395f49dc9d844d365c62d0b0 extends Twig_Template
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
    file.php

    File download facilitator for clients

    Peter Rotich <peter@osticket.com>
    Jared Hancock <jared@osticket.com>
    Copyright (c)  2006-2014 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require('client.inc.php');
require_once(INCLUDE_DIR.'class.file.php');

//Basic checks
if (!\$_GET['key']
    || !\$_GET['signature']
    || !\$_GET['expires']
    || !(\$file = AttachmentFile::lookup(\$_GET['key']))
) {
    Http::response(404, __('Unknown or invalid file'));
}

// Validate session access hash - we want to make sure the link is FRESH!
// and the user has access to the parent ticket!!
if (\$file->verifySignature(\$_GET['signature'], \$_GET['expires'])) {
    if ((\$s = @\$_GET['s']) && strpos(\$file->getType(), 'image/') === 0)
        return \$file->display(\$s);

    // Download the file..
    \$file->download(@\$_GET['disposition'] ?: false, \$_GET['expires']);
}
// else
Http::response(404, __('Unknown or invalid file'));
";
    }

    public function getTemplateName()
    {
        return "support/file.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     file.php*/
/* */
/*     File download facilitator for clients*/
/* */
/*     Peter Rotich <peter@osticket.com>*/
/*     Jared Hancock <jared@osticket.com>*/
/*     Copyright (c)  2006-2014 osTicket*/
/*     http://www.osticket.com*/
/* */
/*     Released under the GNU General Public License WITHOUT ANY WARRANTY.*/
/*     See LICENSE.TXT for details.*/
/* */
/*     vim: expandtab sw=4 ts=4 sts=4:*/
/* **********************************************************************//* */
/* require('client.inc.php');*/
/* require_once(INCLUDE_DIR.'class.file.php');*/
/* */
/* //Basic checks*/
/* if (!$_GET['key']*/
/*     || !$_GET['signature']*/
/*     || !$_GET['expires']*/
/*     || !($file = AttachmentFile::lookup($_GET['key']))*/
/* ) {*/
/*     Http::response(404, __('Unknown or invalid file'));*/
/* }*/
/* */
/* // Validate session access hash - we want to make sure the link is FRESH!*/
/* // and the user has access to the parent ticket!!*/
/* if ($file->verifySignature($_GET['signature'], $_GET['expires'])) {*/
/*     if (($s = @$_GET['s']) && strpos($file->getType(), 'image/') === 0)*/
/*         return $file->display($s);*/
/* */
/*     // Download the file..*/
/*     $file->download(@$_GET['disposition'] ?: false, $_GET['expires']);*/
/* }*/
/* // else*/
/* Http::response(404, __('Unknown or invalid file'));*/
/* */
