<?php

/* support/api/pipe.php */
class __TwigTemplate_e0b39c9bf5f9013f6e13a13948c2d7872eb2b699722844a74408d203c262c7d2 extends Twig_Template
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
        $__internal_277ccd9f486b7552960bd599259ff2e0a0d965c4522f61a66f9ce0dc2a039a55 = $this->env->getExtension("native_profiler");
        $__internal_277ccd9f486b7552960bd599259ff2e0a0d965c4522f61a66f9ce0dc2a039a55->enter($__internal_277ccd9f486b7552960bd599259ff2e0a0d965c4522f61a66f9ce0dc2a039a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/api/pipe.php"));

        // line 1
        echo "#!/usr/bin/php -q
<?php
/*********************************************************************
    pipe.php

    Converts piped emails to ticket. Just local - remote must use /api/tickets.email

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
ini_set('memory_limit', '256M'); //The concern here is having enough mem for emails with attachments.
@chdir(dirname(__FILE__).'/'); //Change dir.
require('api.inc.php');

//Only local piping supported via pipe.php
if (!osTicket::is_cli())
    die(__('pipe.php only supports local piping - use http -> api/tickets.email'));

require_once(INCLUDE_DIR.'api.tickets.php');
PipeApiController::process();
?>
";
        
        $__internal_277ccd9f486b7552960bd599259ff2e0a0d965c4522f61a66f9ce0dc2a039a55->leave($__internal_277ccd9f486b7552960bd599259ff2e0a0d965c4522f61a66f9ce0dc2a039a55_prof);

    }

    public function getTemplateName()
    {
        return "support/api/pipe.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #!/usr/bin/php -q*/
/* <?php*/
/* /**********************************************************************/
/*     pipe.php*/
/* */
/*     Converts piped emails to ticket. Just local - remote must use /api/tickets.email*/
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
/* ini_set('memory_limit', '256M'); //The concern here is having enough mem for emails with attachments.*/
/* @chdir(dirname(__FILE__).'/'); //Change dir.*/
/* require('api.inc.php');*/
/* */
/* //Only local piping supported via pipe.php*/
/* if (!osTicket::is_cli())*/
/*     die(__('pipe.php only supports local piping - use http -> api/tickets.email'));*/
/* */
/* require_once(INCLUDE_DIR.'api.tickets.php');*/
/* PipeApiController::process();*/
/* ?>*/
/* */
