<?php

/* support/kb/index.php */
class __TwigTemplate_14ffd5f7834db659bdfc6b8c6b3793835fd639760dddf1d808bc54be09e67780 extends Twig_Template
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
    index.php

    Knowledgebase Index.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require('kb.inc.php');
require_once(INCLUDE_DIR.'class.category.php');
\$inc='knowledgebase.inc.php';
require(CLIENTINC_DIR.'header.inc.php');
require(CLIENTINC_DIR.\$inc);
require(CLIENTINC_DIR.'footer.inc.php');
?>
";
    }

    public function getTemplateName()
    {
        return "support/kb/index.php";
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
        return new Twig_Source("", "support/kb/index.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\kb\\index.php");
    }
}
