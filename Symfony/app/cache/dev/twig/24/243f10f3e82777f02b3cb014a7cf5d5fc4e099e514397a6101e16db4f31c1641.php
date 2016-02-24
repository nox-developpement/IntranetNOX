<?php

/* support/pages/index.php */
class __TwigTemplate_643810a43b5d09850736b47de55c907ce43bfa4f0c924674d73c7ad0db16b750 extends Twig_Template
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
        $__internal_feeedd8e8852c2c63877ad51267b8d69f0c71a71d289656dd48e296674d6cb52 = $this->env->getExtension("native_profiler");
        $__internal_feeedd8e8852c2c63877ad51267b8d69f0c71a71d289656dd48e296674d6cb52->enter($__internal_feeedd8e8852c2c63877ad51267b8d69f0c71a71d289656dd48e296674d6cb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/pages/index.php"));

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
        
        $__internal_feeedd8e8852c2c63877ad51267b8d69f0c71a71d289656dd48e296674d6cb52->leave($__internal_feeedd8e8852c2c63877ad51267b8d69f0c71a71d289656dd48e296674d6cb52_prof);

    }

    public function getTemplateName()
    {
        return "support/pages/index.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     pages/index.php*/
/* */
/*     Custom pages servlet*/
/* */
/*     Peter Rotich <peter@osticket.com>*/
/*     Jared Hancock <jared@osticket.com>*/
/*     Copyright (c)  2006-2013 osTicket*/
/*     http://www.osticket.com*/
/* */
/*     Released under the GNU General Public License WITHOUT ANY WARRANTY.*/
/*     See LICENSE.TXT for details.*/
/* */
/*     vim: expandtab sw=4 ts=4 sts=4:*/
/* **********************************************************************//* */
/* @chdir(dirname(__file__).'/../');*/
/* */
/* require_once('client.inc.php');*/
/* require_once(INCLUDE_DIR.'class.format.php');*/
/* require_once(INCLUDE_DIR.'class.page.php');*/
/* */
/* // Determine the requested page*/
/* // - Strip extension*/
/* $slug = Format::slugify($ost->get_path_info());*/
/* */
/* // Get the part before the first dash*/
/* $first_word = explode('-', $slug);*/
/* $first_word = $first_word[0];*/
/* */
/* $sql = 'SELECT id, name FROM '.PAGE_TABLE*/
/*     .' WHERE name LIKE '.db_input("$first_word%");*/
/* $page_id = null;*/
/* */
/* $res = db_query($sql);*/
/* while (list($id, $name) = db_fetch_row($res)) {*/
/*     if (Format::slugify($name) == $slug) {*/
/*         $page_id = $id;*/
/*         break;*/
/*     }*/
/* }*/
/* */
/* if (!$page_id || !($page = Page::lookup($page_id)))*/
/*     Http::response(404, __('Page Not Found'));*/
/* */
/* if (!$page->isActive() || $page->getType() != 'other')*/
/*     Http::response(404, __('Page Not Found'));*/
/* */
/* require(CLIENTINC_DIR.'header.inc.php');*/
/* */
/* print $page->getBodyWithImages();*/
/* */
/* require(CLIENTINC_DIR.'footer.inc.php');*/
/* ?>*/
/* */
