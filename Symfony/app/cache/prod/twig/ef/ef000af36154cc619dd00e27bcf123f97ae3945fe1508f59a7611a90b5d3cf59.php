<?php

/* support/scp/kb.php */
class __TwigTemplate_811fb9bc69209effefcef3a112386b1de7980aec53f406f4e61a3988962aec8c extends Twig_Template
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
    kb.php

    Knowlegebase

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require('staff.inc.php');
require_once(INCLUDE_DIR.'class.faq.php');

\$category=null;
if(\$_REQUEST['cid'] && !(\$category=Category::lookup(\$_REQUEST['cid'])))
    \$errors['err']=__('Unknown or invalid FAQ category');

\$inc='faq-categories.inc.php'; //KB landing page.
if(\$category && \$_REQUEST['a']!='search') {
    \$inc='faq-category.inc.php';
}
\$nav->setTabActive('kbase');
\$ost->addExtraHeader('<meta name=\"tip-namespace\" content=\"knowledgebase.faqs\" />',
    \"\$('#content').data('tipNamespace', 'knowledgebase.faqs');\");
require_once(STAFFINC_DIR.'header.inc.php');
require_once(STAFFINC_DIR.\$inc);
require_once(STAFFINC_DIR.'footer.inc.php');
?>
";
    }

    public function getTemplateName()
    {
        return "support/scp/kb.php";
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
        return new Twig_Source("", "support/scp/kb.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\scp\\kb.php");
    }
}
