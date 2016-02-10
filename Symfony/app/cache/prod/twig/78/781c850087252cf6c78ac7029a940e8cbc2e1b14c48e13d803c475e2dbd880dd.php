<?php

/* support/include/staff/templates/collaborators-preview.tmpl.php */
class __TwigTemplate_88e2cdc333fa92a1d4ee98835981418d500d4f3c8682e3ae4b0f3ce8b41f15c9 extends Twig_Template
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
        echo "<div>
<table border=\"0\" cellspacing=\"\" cellpadding=\"1\">
<colgroup><col style=\"min-width: 250px;\"></col></colgroup>
<?php
if ((\$users=\$ticket->getCollaborators())) {?>
<?php
    foreach(\$users as \$user) {
        echo sprintf('<tr><td %s><i class=\"icon-%s\"></i> %s <em>&lt;%s&gt;</em></td></tr>',
                (\$user->isActive()? '' : 'class=\"faded\"'),
                (\$user->isActive()? 'comments' :  'comment-alt'),
                Format::htmlchars(\$user->getName()),
                \$user->getEmail());
    }
}  else {
    echo \"<strong>\".__(\"Ticket doesn't have any collaborators.\").\"</strong>\";
}?>
</table>
<?php
\$options = array();

\$options[] = sprintf(
        '<a class=\"collaborators\" id=\"managecollab\" href=\"#tickets/%d/collaborators\">%s</a>',
        \$ticket->getId(),
        \$ticket->getNumCollaborators()
        ? __('Manage Collaborators') : __('Add Collaborator')
        );

if (\$options) {
    echo '<ul class=\"tip_menu\">';
    foreach(\$options as \$option)
        echo sprintf('<li>%s</li>', \$option);
    echo '</ul>';
}
?>
</div>
<script type=\"text/javascript\">
\$(function() {
    \$(document).on('click', 'a#managecollab', function (e) {
        e.preventDefault();
        \$('.tip_box').remove();
        return false;
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "support/include/staff/templates/collaborators-preview.tmpl.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <div>*/
/* <table border="0" cellspacing="" cellpadding="1">*/
/* <colgroup><col style="min-width: 250px;"></col></colgroup>*/
/* <?php*/
/* if (($users=$ticket->getCollaborators())) {?>*/
/* <?php*/
/*     foreach($users as $user) {*/
/*         echo sprintf('<tr><td %s><i class="icon-%s"></i> %s <em>&lt;%s&gt;</em></td></tr>',*/
/*                 ($user->isActive()? '' : 'class="faded"'),*/
/*                 ($user->isActive()? 'comments' :  'comment-alt'),*/
/*                 Format::htmlchars($user->getName()),*/
/*                 $user->getEmail());*/
/*     }*/
/* }  else {*/
/*     echo "<strong>".__("Ticket doesn't have any collaborators.")."</strong>";*/
/* }?>*/
/* </table>*/
/* <?php*/
/* $options = array();*/
/* */
/* $options[] = sprintf(*/
/*         '<a class="collaborators" id="managecollab" href="#tickets/%d/collaborators">%s</a>',*/
/*         $ticket->getId(),*/
/*         $ticket->getNumCollaborators()*/
/*         ? __('Manage Collaborators') : __('Add Collaborator')*/
/*         );*/
/* */
/* if ($options) {*/
/*     echo '<ul class="tip_menu">';*/
/*     foreach($options as $option)*/
/*         echo sprintf('<li>%s</li>', $option);*/
/*     echo '</ul>';*/
/* }*/
/* ?>*/
/* </div>*/
/* <script type="text/javascript">*/
/* $(function() {*/
/*     $(document).on('click', 'a#managecollab', function (e) {*/
/*         e.preventDefault();*/
/*         $('.tip_box').remove();*/
/*         return false;*/
/*     });*/
/* });*/
/* </script>*/
/* */
