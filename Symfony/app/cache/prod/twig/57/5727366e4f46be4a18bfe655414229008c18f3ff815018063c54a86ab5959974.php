<?php

/* support/include/staff/templates/collaborators-preview.tmpl.php */
class __TwigTemplate_8c09c1a7730d0a7529758b8e18fcd220dfb5c36b43fbd6c9f62dd103f1df5f81 extends Twig_Template
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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/include/staff/templates/collaborators-preview.tmpl.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\staff\\templates\\collaborators-preview.tmpl.php");
    }
}
