<?php

/* support/index.php */
class __TwigTemplate_d33ae9c4528bfd89afac6cdb5f504face896f5611372664e8623d043af51c591 extends Twig_Template
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

    Helpdesk landing page. Please customize it to fit your needs.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/

require('client.inc.php');
\$section = 'home';
require(CLIENTINC_DIR.'header.inc.php');
?>
<div id=\"landing_page\">
    <?php
    if(\$cfg && (\$page = \$cfg->getLandingPage()))
        echo \$page->getBodyWithImages();
    else
        echo  '<h1>'.__('Welcome to the Support Center').'</h1>';
    ?>
\t
    <div id=\"new_ticket\" class=\"pull-left\">
        <h3><?php echo __('Open a New Ticket');?></h3>
        <br>
        <div><?php echo __('Please provide as much detail as possible so we can best assist you. To update a previously submitted ticket, please login.');
\t\t\techo(\"<a href='http://localhost/Symfony/web/app.php/accueil'> Retour à l'intranet </a>\");
\t\t?></div>
    </div>

    <div id=\"check_status\" class=\"pull-right\">
        <h3><?php echo __('Check Ticket Status');?></h3>
        <br>
        <div><?php echo __('We provide archives and history of all your current and past support requests complete with responses.');?></div>
    </div>

    <div class=\"clear\"></div>
    <div class=\"front-page-button pull-left\">
        <p>
            <a href=\"open.php\" class=\"green button\"><?php echo __('Open a New Ticket');?></a>
        </p>
    </div>
    <div class=\"front-page-button pull-right\">
        <p>
            <a href=\"<?php if(is_object(\$thisclient)){ echo 'tickets.php';} else {echo 'view.php';}?>\" class=\"blue button\"><?php echo __('Check Ticket Status');?></a>
        </p>
    </div>
</div>
<div class=\"clear\"></div>
<?php
if(\$cfg && \$cfg->isKnowledgebaseEnabled()){
    //FIXME: provide ability to feature or select random FAQs ??
?>
<p><?php echo sprintf(
    __('Be sure to browse our %s before opening a ticket'),
    sprintf('<a href=\"kb/index.php\">%s</a>',
        __('Frequently Asked Questions (FAQs)')
    )); ?></p>
</div>
<?php
} ?>
<?php require(CLIENTINC_DIR.'footer.inc.php'); ?>
";
    }

    public function getTemplateName()
    {
        return "support/index.php";
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
        return new Twig_Source("", "support/index.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\index.php");
    }
}
