<?php

/* support/include/client/edit.inc.php */
class __TwigTemplate_b364b222762cc2f93ed7a967461ad7f2b9920eabfad97451200f74672a1c1931 extends Twig_Template
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
        $__internal_c9db0dc3e3419d81ba261b67558398525066c51e2af7b589fcb70481a6360272 = $this->env->getExtension("native_profiler");
        $__internal_c9db0dc3e3419d81ba261b67558398525066c51e2af7b589fcb70481a6360272->enter($__internal_c9db0dc3e3419d81ba261b67558398525066c51e2af7b589fcb70481a6360272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/client/edit.inc.php"));

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
        
        $__internal_c9db0dc3e3419d81ba261b67558398525066c51e2af7b589fcb70481a6360272->leave($__internal_c9db0dc3e3419d81ba261b67558398525066c51e2af7b589fcb70481a6360272_prof);

    }

    public function getTemplateName()
    {
        return "support/include/client/edit.inc.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
