<?php

/* support/include/ajax.tips.php */
class __TwigTemplate_11d31fb2207a29eec1db6af053d1659b7311491847e48474f0318517e3b59efe extends Twig_Template
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
    ajax.tips.php

    AJAX interface for help popovers. Initially written to allow
    translations of the installer help popups

    Peter Rotich <peter@osticket.com>
    Jared Hancock <jared@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
if(!defined('INCLUDE_DIR')) die('!');

require_once(INCLUDE_DIR.'class.i18n.php');

class HelpTipAjaxAPI extends AjaxController {
    function getTipsJson(\$namespace, \$lang=false) {
        global \$ost, \$thisstaff;

        \$lang = Internationalization::getCurrentLanguage();

        \$i18n = new Internationalization(\$lang);
        \$tips = \$i18n->getTemplate(\"help/tips/\$namespace.yaml\");

        if (!\$tips || !(\$data = \$tips->getData()))
            Http::response(404, 'Help content not available');

        // Translate links to the root path of this installation
        foreach (\$data as \$tip=>&\$info) {
            if (\$ost)
                \$info = \$ost->replaceTemplateVariables(\$info, array(
                    'config'=>\$ost->getConfig()));
            if (isset(\$info['links']))
                foreach (\$info['links'] as &\$l)
                    if (\$l['href'][0] == '/')
                        \$l['href'] = ROOT_PATH.substr(\$l['href'],1);
        }

        return \$this->json_encode(\$data);
    }

    function getTipsJsonForLang(\$lang, \$namespace) {
        return \$this->getTipsJson(\$namespace, \$lang);
    }
}

?>
";
    }

    public function getTemplateName()
    {
        return "support/include/ajax.tips.php";
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
        return new Twig_Source("", "support/include/ajax.tips.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\ajax.tips.php");
    }
}
