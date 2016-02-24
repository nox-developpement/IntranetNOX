<?php

/* support/include/ajax.tips.php */
class __TwigTemplate_8cbab65741c4638fd04de407f25cc0d5103415e9d633859a6f4f07c75ad451fa extends Twig_Template
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
        $__internal_b1e844c01535e87f9cc9321000fb3730b2858cb076ef9c862d5e22c00617cc99 = $this->env->getExtension("native_profiler");
        $__internal_b1e844c01535e87f9cc9321000fb3730b2858cb076ef9c862d5e22c00617cc99->enter($__internal_b1e844c01535e87f9cc9321000fb3730b2858cb076ef9c862d5e22c00617cc99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/ajax.tips.php"));

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
        
        $__internal_b1e844c01535e87f9cc9321000fb3730b2858cb076ef9c862d5e22c00617cc99->leave($__internal_b1e844c01535e87f9cc9321000fb3730b2858cb076ef9c862d5e22c00617cc99_prof);

    }

    public function getTemplateName()
    {
        return "support/include/ajax.tips.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     ajax.tips.php*/
/* */
/*     AJAX interface for help popovers. Initially written to allow*/
/*     translations of the installer help popups*/
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
/* if(!defined('INCLUDE_DIR')) die('!');*/
/* */
/* require_once(INCLUDE_DIR.'class.i18n.php');*/
/* */
/* class HelpTipAjaxAPI extends AjaxController {*/
/*     function getTipsJson($namespace, $lang=false) {*/
/*         global $ost, $thisstaff;*/
/* */
/*         $lang = Internationalization::getCurrentLanguage();*/
/* */
/*         $i18n = new Internationalization($lang);*/
/*         $tips = $i18n->getTemplate("help/tips/$namespace.yaml");*/
/* */
/*         if (!$tips || !($data = $tips->getData()))*/
/*             Http::response(404, 'Help content not available');*/
/* */
/*         // Translate links to the root path of this installation*/
/*         foreach ($data as $tip=>&$info) {*/
/*             if ($ost)*/
/*                 $info = $ost->replaceTemplateVariables($info, array(*/
/*                     'config'=>$ost->getConfig()));*/
/*             if (isset($info['links']))*/
/*                 foreach ($info['links'] as &$l)*/
/*                     if ($l['href'][0] == '/')*/
/*                         $l['href'] = ROOT_PATH.substr($l['href'],1);*/
/*         }*/
/* */
/*         return $this->json_encode($data);*/
/*     }*/
/* */
/*     function getTipsJsonForLang($lang, $namespace) {*/
/*         return $this->getTipsJson($namespace, $lang);*/
/*     }*/
/* }*/
/* */
/* ?>*/
/* */
