<?php

/* support/include/client/footer.inc.php */
class __TwigTemplate_d970e2c78c14b089570320805ddfd48c6d75a25702eb4c1fa2bf037988eb5372 extends Twig_Template
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
        echo "        </div>
    </div>
    <div id=\"footer\">
        <p>Copyright &copy; <?php echo date('Y'); ?> <?php echo (string) \$ost->company ?: 'osTicket.com'; ?> - All rights reserved.</p>
        <a id=\"poweredBy\" href=\"http://osticket.com\" target=\"_blank\"><?php echo __('Helpdesk software - powered by osTicket'); ?></a>
    </div>
<div id=\"overlay\"></div>
<div id=\"loading\">
    <h4><?php echo __('Please Wait!');?></h4>
    <p><?php echo __('Please wait... it will take a second!');?></p>
</div>
<?php
if ((\$lang = Internationalization::getCurrentLanguage()) && \$lang != 'en_US') { ?>
    <script type=\"text/javascript\" src=\"ajax.php/i18n/<?php
        echo \$lang; ?>/js\"></script>
<?php } ?>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "support/include/client/footer.inc.php";
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
        return new Twig_Source("", "support/include/client/footer.inc.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\client\\footer.inc.php");
    }
}
