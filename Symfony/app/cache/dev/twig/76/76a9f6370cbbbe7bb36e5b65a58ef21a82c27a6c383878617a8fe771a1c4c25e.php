<?php

/* support/captcha.php */
class __TwigTemplate_a68a98e427979661de926532ab7919dc2112f3f567afc0d1d0000544f6398d70 extends Twig_Template
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
        $__internal_66847b8775ac53b85187bec7b9966506bf1a63d83e8d80507b639aea8aae4b9d = $this->env->getExtension("native_profiler");
        $__internal_66847b8775ac53b85187bec7b9966506bf1a63d83e8d80507b639aea8aae4b9d->enter($__internal_66847b8775ac53b85187bec7b9966506bf1a63d83e8d80507b639aea8aae4b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/captcha.php"));

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
        
        $__internal_66847b8775ac53b85187bec7b9966506bf1a63d83e8d80507b639aea8aae4b9d->leave($__internal_66847b8775ac53b85187bec7b9966506bf1a63d83e8d80507b639aea8aae4b9d_prof);

    }

    public function getTemplateName()
    {
        return "support/captcha.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
