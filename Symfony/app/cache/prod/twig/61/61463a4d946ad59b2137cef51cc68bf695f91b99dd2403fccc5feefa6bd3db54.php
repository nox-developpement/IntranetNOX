<?php

/* support/include/ajax.kbase.php */
class __TwigTemplate_0ef63190d6f1a9482338c455883cae170ee0bcf21d91f2041277b1c422142655 extends Twig_Template
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
    ajax.kbase.php

    AJAX interface for knowledge base related...allowed methods.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
if(!defined('INCLUDE_DIR')) die('!');


class KbaseAjaxAPI extends AjaxController {

    function cannedResp(\$id, \$format='text') {
        global \$thisstaff, \$cfg;

        include_once(INCLUDE_DIR.'class.canned.php');

        if(!\$id || !(\$canned=Canned::lookup(\$id)) || !\$canned->isEnabled())
            Http::response(404, 'No such premade reply');

        if (!\$cfg->isHtmlThreadEnabled())
            \$format .= '.plain';

        return \$canned->getFormattedResponse(\$format);
    }

    function faq(\$id, \$format='html') {
        //XXX: user ajax->getThisStaff() (nolint)
        global \$thisstaff;
        include_once(INCLUDE_DIR.'class.faq.php');

        if(!(\$faq=FAQ::lookup(\$id)))
            return null;

        //TODO: \$fag->getJSON() for json format. (nolint)
        \$resp = sprintf(
                '<div style=\"width:650px;\">
                 <strong>%s</strong><div class=\"thread-body\">%s</div>
                 <div class=\"clear\"></div>
                 <div class=\"faded\">'.__('Last updated %s').'</div>
                 <hr>
                 <a href=\"faq.php?id=%d\">'.__('View').'</a> | <a href=\"faq.php?id=%d\">'.__('Attachments (%d)').'</a>',
                \$faq->getQuestion(),
                \$faq->getAnswerWithImages(),
                Format::db_daydatetime(\$faq->getUpdateDate()),
                \$faq->getId(),
                \$faq->getId(),
                \$faq->getNumAttachments());
        if(\$thisstaff && \$thisstaff->canManageFAQ()) {
            \$resp.=sprintf(' | <a href=\"faq.php?id=%d&a=edit\">'.__('Edit').'</a>',\$faq->getId());

        }
        \$resp.='</div>';

        return \$resp;
    }
}
?>
";
    }

    public function getTemplateName()
    {
        return "support/include/ajax.kbase.php";
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
        return new Twig_Source("", "support/include/ajax.kbase.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\ajax.kbase.php");
    }
}
