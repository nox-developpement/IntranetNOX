<?php

/* support/include/ajax.config.php */
class __TwigTemplate_39888b318d5aed7040140fdd6cb8fbf53d14b8c1954e3e03023e06f51ec4abb2 extends Twig_Template
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
        $__internal_f6d0b1a0c959f1bcce986dde7afac2fe508439a6435191e10178921725ec963e = $this->env->getExtension("native_profiler");
        $__internal_f6d0b1a0c959f1bcce986dde7afac2fe508439a6435191e10178921725ec963e->enter($__internal_f6d0b1a0c959f1bcce986dde7afac2fe508439a6435191e10178921725ec963e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/ajax.config.php"));

        // line 1
        echo "<?php
/*********************************************************************
    ajax.content.php

    AJAX interface for content fetching...allowed methods.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/

if(!defined('INCLUDE_DIR')) die('!');

class ConfigAjaxAPI extends AjaxController {

    //config info UI might need.
    function scp() {
        global \$cfg, \$thisstaff;

        \$lang = Internationalization::getCurrentLanguage();
        list(\$sl, \$locale) = explode('_', \$lang);

        \$rtl = false;
        foreach (Internationalization::availableLanguages() as \$info) {
            if (isset(\$info['direction']))
                \$rtl = true;
        }

        \$config=array(
              'lock_time'       => (\$cfg->getLockTime()*3600),
              'html_thread'     => (bool) \$cfg->isHtmlThreadEnabled(),
              'date_format'     => (\$cfg->getDateFormat()),
              'lang'            => \$lang,
              'short_lang'      => \$sl,
              'has_rtl'         => \$rtl,
              'page_size'       => \$thisstaff->getPageLimit(),
        );
        return \$this->json_encode(\$config);
    }

    function client() {
        global \$cfg;

        \$lang = Internationalization::getCurrentLanguage();
        list(\$sl, \$locale) = explode('_', \$lang);

        \$rtl = false;
        foreach (Internationalization::availableLanguages() as \$info) {
            if (isset(\$info['direction']))
                \$rtl = true;
        }

        \$config=array(
            'html_thread'     => (bool) \$cfg->isHtmlThreadEnabled(),
            'lang'            => \$lang,
            'short_lang'      => \$sl,
            'has_rtl'         => \$rtl,
        );

        \$config = \$this->json_encode(\$config);
        Http::cacheable(md5(\$config), \$cfg->lastModified());
        header('Content-Type: application/json; charset=UTF-8');

        return \$config;
    }

    function templateLinks() {
        \$links = \$this->json_encode(array(
            array('name'=>'Select ...', 'url'=> false),
            array('name'=>'Agent Ticket Link', 'url'=> '%{ticket.staff_link}'),
            array('name'=>'Agent Login Page', 'url'=> '%{url}/scp'),
            array('name'=>'End-User Ticket Link', 'url'=> '%{recipient.ticket_link}'),
            array('name'=>'End-User Login Page', 'url'=> '%{url}/login.php'),
        ));

        Http::cacheable(md5(\$links), filemtime(__file__));
        header('Content-Type: application/json; charset=UTF-8');

        return \$links;
    }
}
?>
";
        
        $__internal_f6d0b1a0c959f1bcce986dde7afac2fe508439a6435191e10178921725ec963e->leave($__internal_f6d0b1a0c959f1bcce986dde7afac2fe508439a6435191e10178921725ec963e_prof);

    }

    public function getTemplateName()
    {
        return "support/include/ajax.config.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     ajax.content.php*/
/* */
/*     AJAX interface for content fetching...allowed methods.*/
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
/* */
/* if(!defined('INCLUDE_DIR')) die('!');*/
/* */
/* class ConfigAjaxAPI extends AjaxController {*/
/* */
/*     //config info UI might need.*/
/*     function scp() {*/
/*         global $cfg, $thisstaff;*/
/* */
/*         $lang = Internationalization::getCurrentLanguage();*/
/*         list($sl, $locale) = explode('_', $lang);*/
/* */
/*         $rtl = false;*/
/*         foreach (Internationalization::availableLanguages() as $info) {*/
/*             if (isset($info['direction']))*/
/*                 $rtl = true;*/
/*         }*/
/* */
/*         $config=array(*/
/*               'lock_time'       => ($cfg->getLockTime()*3600),*/
/*               'html_thread'     => (bool) $cfg->isHtmlThreadEnabled(),*/
/*               'date_format'     => ($cfg->getDateFormat()),*/
/*               'lang'            => $lang,*/
/*               'short_lang'      => $sl,*/
/*               'has_rtl'         => $rtl,*/
/*               'page_size'       => $thisstaff->getPageLimit(),*/
/*         );*/
/*         return $this->json_encode($config);*/
/*     }*/
/* */
/*     function client() {*/
/*         global $cfg;*/
/* */
/*         $lang = Internationalization::getCurrentLanguage();*/
/*         list($sl, $locale) = explode('_', $lang);*/
/* */
/*         $rtl = false;*/
/*         foreach (Internationalization::availableLanguages() as $info) {*/
/*             if (isset($info['direction']))*/
/*                 $rtl = true;*/
/*         }*/
/* */
/*         $config=array(*/
/*             'html_thread'     => (bool) $cfg->isHtmlThreadEnabled(),*/
/*             'lang'            => $lang,*/
/*             'short_lang'      => $sl,*/
/*             'has_rtl'         => $rtl,*/
/*         );*/
/* */
/*         $config = $this->json_encode($config);*/
/*         Http::cacheable(md5($config), $cfg->lastModified());*/
/*         header('Content-Type: application/json; charset=UTF-8');*/
/* */
/*         return $config;*/
/*     }*/
/* */
/*     function templateLinks() {*/
/*         $links = $this->json_encode(array(*/
/*             array('name'=>'Select ...', 'url'=> false),*/
/*             array('name'=>'Agent Ticket Link', 'url'=> '%{ticket.staff_link}'),*/
/*             array('name'=>'Agent Login Page', 'url'=> '%{url}/scp'),*/
/*             array('name'=>'End-User Ticket Link', 'url'=> '%{recipient.ticket_link}'),*/
/*             array('name'=>'End-User Login Page', 'url'=> '%{url}/login.php'),*/
/*         ));*/
/* */
/*         Http::cacheable(md5($links), filemtime(__file__));*/
/*         header('Content-Type: application/json; charset=UTF-8');*/
/* */
/*         return $links;*/
/*     }*/
/* }*/
/* ?>*/
/* */
