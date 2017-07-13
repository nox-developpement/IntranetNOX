<?php

/* support/include/client/edit.inc.php */
class __TwigTemplate_7ac5526a660197e2371c240f50069e3227092f8fd6dfd46b38e7c0eb61bd2040 extends Twig_Template
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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/include/client/edit.inc.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\client\\edit.inc.php");
    }
}
