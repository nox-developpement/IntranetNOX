<?php

/* support/include/staff/templates/status-options.tmpl.php */
class __TwigTemplate_9f83a241ec6b736502a149a23a09de8a3744c8b3a35c4b63aa56f50e5448f96a extends Twig_Template
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
global \$thisstaff, \$ticket;
// Map states to actions
\$actions= array(
        'closed' => array(
            'icon'  => 'icon-ok-circle',
            'action' => 'close',
            'href' => 'tickets.php'
            ),
        'open' => array(
            'icon'  => 'icon-undo',
            'action' => 'reopen'
            ),
        );
?>

<span
    class=\"action-button pull-right\"
    data-dropdown=\"#action-dropdown-statuses\">
    <i class=\"icon-caret-down pull-right\"></i>
    <a class=\"tickets-action\"
        href=\"#statuses\"><i
        class=\"icon-flag\"></i> <?php
        echo __('Change Status'); ?></a>
</span>
<div id=\"action-dropdown-statuses\"
    class=\"action-dropdown anchor-right\">
    <ul>
    <?php
    \$states = array('open');
    if (\$thisstaff->canCloseTickets())
        \$states = array_merge(\$states, array('closed'));

    \$statusId = \$ticket ? \$ticket->getStatusId() : 0;
    foreach (TicketStatusList::getStatuses(
                array('states' => \$states))->all() as \$status) {
        if (!isset(\$actions[\$status->getState()])
                || \$statusId == \$status->getId())
            continue;
        ?>
        <li>
            <a class=\"no-pjax <?php
                echo \$ticket? 'ticket-action' : 'tickets-action'; ?>\"
                href=\"<?php
                    echo sprintf('#%s/status/%s/%d',
                            \$ticket ? ('tickets/'.\$ticket->getId()) : 'tickets',
                            \$actions[\$status->getState()]['action'],
                            \$status->getId()); ?>\"
                <?php
                if (isset(\$actions[\$status->getState()]['href']))
                    echo sprintf('data-href=\"%s\"',
                            \$actions[\$status->getState()]['href']);

                ?>
                ><i class=\"<?php
                        echo \$actions[\$status->getState()]['icon'] ?: 'icon-tag';
                    ?>\"></i> <?php
                        echo __(\$status->getName()); ?></a>
        </li>
    <?php
    } ?>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "support/include/staff/templates/status-options.tmpl.php";
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
        return new Twig_Source("", "support/include/staff/templates/status-options.tmpl.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\staff\\templates\\status-options.tmpl.php");
    }
}
