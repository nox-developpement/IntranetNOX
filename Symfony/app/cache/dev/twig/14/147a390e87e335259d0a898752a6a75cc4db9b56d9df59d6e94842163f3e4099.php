<?php

/* support/include/staff/templates/collaborators-preview.tmpl.php */
class __TwigTemplate_ab7e7434d79e17a326dd9f948cbb0ec14f8cd6da2e823a83d8c05ff7bf48a5b8 extends Twig_Template
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
        $__internal_01d976b4c22531fa4e5bbcff1be097e790f62d893c1c726ab04e3d26352c094d = $this->env->getExtension("native_profiler");
        $__internal_01d976b4c22531fa4e5bbcff1be097e790f62d893c1c726ab04e3d26352c094d->enter($__internal_01d976b4c22531fa4e5bbcff1be097e790f62d893c1c726ab04e3d26352c094d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/staff/templates/collaborators-preview.tmpl.php"));

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
        
        $__internal_01d976b4c22531fa4e5bbcff1be097e790f62d893c1c726ab04e3d26352c094d->leave($__internal_01d976b4c22531fa4e5bbcff1be097e790f62d893c1c726ab04e3d26352c094d_prof);

    }

    public function getTemplateName()
    {
        return "support/include/staff/templates/collaborators-preview.tmpl.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
