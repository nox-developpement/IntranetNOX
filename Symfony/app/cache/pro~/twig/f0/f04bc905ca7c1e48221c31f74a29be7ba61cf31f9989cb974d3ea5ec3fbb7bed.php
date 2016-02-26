<?php

/* support/captcha.php */
class __TwigTemplate_9d75c29397acaa78a878f61225c8f31c4d45a2337ec3def65379ddd6334d19bc extends Twig_Template
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
    captcha.php

    Simply returns captcha image.
    
    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require_once('main.inc.php');
require(INCLUDE_DIR.'class.captcha.php');
\$captcha = new Captcha(5,12,ROOT_DIR.'images/captcha/');
echo \$captcha->getImage();
?>
";
    }

    public function getTemplateName()
    {
        return "support/captcha.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     captcha.php*/
/* */
/*     Simply returns captcha image.*/
/*     */
/*     Peter Rotich <peter@osticket.com>*/
/*     Copyright (c)  2006-2013 osTicket*/
/*     http://www.osticket.com*/
/* */
/*     Released under the GNU General Public License WITHOUT ANY WARRANTY.*/
/*     See LICENSE.TXT for details.*/
/* */
/*     vim: expandtab sw=4 ts=4 sts=4:*/
/* **********************************************************************//* */
/* require_once('main.inc.php');*/
/* require(INCLUDE_DIR.'class.captcha.php');*/
/* $captcha = new Captcha(5,12,ROOT_DIR.'images/captcha/');*/
/* echo $captcha->getImage();*/
/* ?>*/
/* */
