<?php

/* support/file.php */
class __TwigTemplate_f1a20c549df9934f250b63b07845eec62d01cadfd3dec8eb091062a025a8fbd2 extends Twig_Template
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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/file.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\file.php");
    }
}
