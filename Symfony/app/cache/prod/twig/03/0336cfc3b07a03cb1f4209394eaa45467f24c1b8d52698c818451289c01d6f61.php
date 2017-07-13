<?php

/* support/pages/index.php */
class __TwigTemplate_c622666a03e3a60a5e23a56868668b180db4e35736f17ddefcde610453c9c147 extends Twig_Template
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
    pages/index.php

    Custom pages servlet

    Peter Rotich <peter@osticket.com>
    Jared Hancock <jared@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
@chdir(dirname(__file__).'/../');

require_once('client.inc.php');
require_once(INCLUDE_DIR.'class.format.php');
require_once(INCLUDE_DIR.'class.page.php');

// Determine the requested page
// - Strip extension
\$slug = Format::slugify(\$ost->get_path_info());

// Get the part before the first dash
\$first_word = explode('-', \$slug);
\$first_word = \$first_word[0];

\$sql = 'SELECT id, name FROM '.PAGE_TABLE
    .' WHERE name LIKE '.db_input(\"\$first_word%\");
\$page_id = null;

\$res = db_query(\$sql);
while (list(\$id, \$name) = db_fetch_row(\$res)) {
    if (Format::slugify(\$name) == \$slug) {
        \$page_id = \$id;
        break;
    }
}

if (!\$page_id || !(\$page = Page::lookup(\$page_id)))
    Http::response(404, __('Page Not Found'));

if (!\$page->isActive() || \$page->getType() != 'other')
    Http::response(404, __('Page Not Found'));

require(CLIENTINC_DIR.'header.inc.php');

print \$page->getBodyWithImages();

require(CLIENTINC_DIR.'footer.inc.php');
?>
";
    }

    public function getTemplateName()
    {
        return "support/pages/index.php";
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
        return new Twig_Source("", "support/pages/index.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\pages\\index.php");
    }
}
