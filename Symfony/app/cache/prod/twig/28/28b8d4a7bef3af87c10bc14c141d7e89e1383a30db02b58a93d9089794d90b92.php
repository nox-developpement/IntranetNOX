<?php

/* support/include/staff/footer.inc.php */
class __TwigTemplate_029bd3c6f8eeafd1c6d628caf67f2864b185febd0573d2d1b6dbabaf16b1c488 extends Twig_Template
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
        echo "</div>
</div>
<?php if (!isset(\$_SERVER['HTTP_X_PJAX'])) { ?>
    <div id=\"footer\">
        Copyright &copy; 2006-<?php echo date('Y'); ?>&nbsp;<?php echo (string) \$ost->company ?: 'osTicket.com'; ?>&nbsp;All Rights Reserved.
    </div>
<?php
if(is_object(\$thisstaff) && \$thisstaff->isStaff()) { ?>
    <div>
        <!-- Do not remove <img src=\"autocron.php\" alt=\"\" width=\"1\" height=\"1\" border=\"0\" /> or your auto cron will cease to function -->
        <img src=\"autocron.php\" alt=\"\" width=\"1\" height=\"1\" border=\"0\" />
        <!-- Do not remove <img src=\"autocron.php\" alt=\"\" width=\"1\" height=\"1\" border=\"0\" /> or your auto cron will cease to function -->
    </div>
<?php
} ?>
</div>
<div id=\"overlay\"></div>
<div id=\"loading\">
    <i class=\"icon-spinner icon-spin icon-3x pull-left icon-light\"></i>
    <h1><?php echo __('Loading ...');?></h1>
</div>
<div class=\"dialog draggable\" style=\"display:none;width:650px;\" id=\"popup\">
    <div id=\"popup-loading\">
        <h1 style=\"margin-bottom: 20px;\"><i class=\"icon-spinner icon-spin icon-large\"></i>
        <?php echo __('Loading ...');?></h1>
    </div>
    <div class=\"body\"></div>
</div>
<div style=\"display:none;\" class=\"dialog\" id=\"alert\">
    <h3><i class=\"icon-warning-sign\"></i> <span id=\"title\"></span></h3>
    <a class=\"close\" href=\"\"><i class=\"icon-remove-circle\"></i></a>
    <hr/>
    <div id=\"body\" style=\"min-height: 20px;\"></div>
    <hr style=\"margin-top:3em\"/>
    <p class=\"full-width\">
        <span class=\"buttons pull-right\">
            <input type=\"button\" value=\"<?php echo __('OK');?>\" class=\"close\">
        </span>
     </p>
    <div class=\"clear\"></div>
</div>

<script type=\"text/javascript\">
if (\$.support.pjax) {
  \$(document).on('click', 'a', function(event) {
    if (!\$(this).hasClass('no-pjax')
        && !\$(this).closest('.no-pjax').length
        && \$(this).attr('href')[0] != '#')
      \$.pjax.click(event, {container: \$('#pjax-container'), timeout: 2000});
  })
}
</script>
<?php
if (\$thisstaff && \$thisstaff->getLanguage() != 'en_US') { ?>
    <script type=\"text/javascript\" src=\"ajax.php/i18n/<?php
        echo \$thisstaff->getLanguage(); ?>/js\"></script>
<?php } ?>
</body>
</html>
<?php } # endif X_PJAX ?>
";
    }

    public function getTemplateName()
    {
        return "support/include/staff/footer.inc.php";
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
        return new Twig_Source("", "support/include/staff/footer.inc.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\staff\\footer.inc.php");
    }
}
