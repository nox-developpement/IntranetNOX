<?php

/* support/include/client/edit.inc.php */
class __TwigTemplate_f3d10031744c10e5535da8de7ac98f14302ef93640553cdc4369cd550b3344a6 extends Twig_Template
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

if(!defined('OSTCLIENTINC') || !\$thisclient || !\$ticket || !\$ticket->checkUserAccess(\$thisclient)) die('Access Denied!');

?>

<h1>
    <?php echo sprintf(__('Editing Ticket #%s'), \$ticket->getNumber()); ?>
</h1>

<form action=\"tickets.php\" method=\"post\">
    <?php echo csrf_token(); ?>
    <input type=\"hidden\" name=\"a\" value=\"edit\"/>
    <input type=\"hidden\" name=\"id\" value=\"<?php echo Format::htmlchars(\$_REQUEST['id']); ?>\"/>
<table width=\"800\">
    <tbody id=\"dynamic-form\">
    <?php if (\$forms)
        foreach (\$forms as \$form) {
            \$form->render(false);
    } ?>
    </tbody>
</table>
<hr>
<p style=\"text-align: center;\">
    <input type=\"submit\" value=\"Update\"/>
    <input type=\"reset\" value=\"Reset\"/>
    <input type=\"button\" value=\"Cancel\" onclick=\"javascript:
        window.location.href='index.php';\"/>
</p>
</form>
";
    }

    public function getTemplateName()
    {
        return "support/include/client/edit.inc.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* */
/* if(!defined('OSTCLIENTINC') || !$thisclient || !$ticket || !$ticket->checkUserAccess($thisclient)) die('Access Denied!');*/
/* */
/* ?>*/
/* */
/* <h1>*/
/*     <?php echo sprintf(__('Editing Ticket #%s'), $ticket->getNumber()); ?>*/
/* </h1>*/
/* */
/* <form action="tickets.php" method="post">*/
/*     <?php echo csrf_token(); ?>*/
/*     <input type="hidden" name="a" value="edit"/>*/
/*     <input type="hidden" name="id" value="<?php echo Format::htmlchars($_REQUEST['id']); ?>"/>*/
/* <table width="800">*/
/*     <tbody id="dynamic-form">*/
/*     <?php if ($forms)*/
/*         foreach ($forms as $form) {*/
/*             $form->render(false);*/
/*     } ?>*/
/*     </tbody>*/
/* </table>*/
/* <hr>*/
/* <p style="text-align: center;">*/
/*     <input type="submit" value="Update"/>*/
/*     <input type="reset" value="Reset"/>*/
/*     <input type="button" value="Cancel" onclick="javascript:*/
/*         window.location.href='index.php';"/>*/
/* </p>*/
/* </form>*/
/* */
