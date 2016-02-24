<?php

/* support/include/staff/templates/status-options.tmpl.php */
class __TwigTemplate_513bb8efe18f6dc5f88ab79346dfa5bb46066109b8037027485a10ea738cc743 extends Twig_Template
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
        $__internal_7fb6e87067ca76cec9828d7e43ce9a74659915399b4100b3fcee79569a449572 = $this->env->getExtension("native_profiler");
        $__internal_7fb6e87067ca76cec9828d7e43ce9a74659915399b4100b3fcee79569a449572->enter($__internal_7fb6e87067ca76cec9828d7e43ce9a74659915399b4100b3fcee79569a449572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/staff/templates/status-options.tmpl.php"));

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
        
        $__internal_7fb6e87067ca76cec9828d7e43ce9a74659915399b4100b3fcee79569a449572->leave($__internal_7fb6e87067ca76cec9828d7e43ce9a74659915399b4100b3fcee79569a449572_prof);

    }

    public function getTemplateName()
    {
        return "support/include/staff/templates/status-options.tmpl.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* global $thisstaff, $ticket;*/
/* // Map states to actions*/
/* $actions= array(*/
/*         'closed' => array(*/
/*             'icon'  => 'icon-ok-circle',*/
/*             'action' => 'close',*/
/*             'href' => 'tickets.php'*/
/*             ),*/
/*         'open' => array(*/
/*             'icon'  => 'icon-undo',*/
/*             'action' => 'reopen'*/
/*             ),*/
/*         );*/
/* ?>*/
/* */
/* <span*/
/*     class="action-button pull-right"*/
/*     data-dropdown="#action-dropdown-statuses">*/
/*     <i class="icon-caret-down pull-right"></i>*/
/*     <a class="tickets-action"*/
/*         href="#statuses"><i*/
/*         class="icon-flag"></i> <?php*/
/*         echo __('Change Status'); ?></a>*/
/* </span>*/
/* <div id="action-dropdown-statuses"*/
/*     class="action-dropdown anchor-right">*/
/*     <ul>*/
/*     <?php*/
/*     $states = array('open');*/
/*     if ($thisstaff->canCloseTickets())*/
/*         $states = array_merge($states, array('closed'));*/
/* */
/*     $statusId = $ticket ? $ticket->getStatusId() : 0;*/
/*     foreach (TicketStatusList::getStatuses(*/
/*                 array('states' => $states))->all() as $status) {*/
/*         if (!isset($actions[$status->getState()])*/
/*                 || $statusId == $status->getId())*/
/*             continue;*/
/*         ?>*/
/*         <li>*/
/*             <a class="no-pjax <?php*/
/*                 echo $ticket? 'ticket-action' : 'tickets-action'; ?>"*/
/*                 href="<?php*/
/*                     echo sprintf('#%s/status/%s/%d',*/
/*                             $ticket ? ('tickets/'.$ticket->getId()) : 'tickets',*/
/*                             $actions[$status->getState()]['action'],*/
/*                             $status->getId()); ?>"*/
/*                 <?php*/
/*                 if (isset($actions[$status->getState()]['href']))*/
/*                     echo sprintf('data-href="%s"',*/
/*                             $actions[$status->getState()]['href']);*/
/* */
/*                 ?>*/
/*                 ><i class="<?php*/
/*                         echo $actions[$status->getState()]['icon'] ?: 'icon-tag';*/
/*                     ?>"></i> <?php*/
/*                         echo __($status->getName()); ?></a>*/
/*         </li>*/
/*     <?php*/
/*     } ?>*/
/*     </ul>*/
/* </div>*/
/* */
