<?php

/* support/include/staff/footer.inc.php */
class __TwigTemplate_58c40ea88dc62891b5be4149d773eda97c060dfe59f5c5b7c4737cdc2740a273 extends Twig_Template
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
        $__internal_f0750cf0afd2b75234da544fa42fc6b90df36b1360783d0fe913a426816698cd = $this->env->getExtension("native_profiler");
        $__internal_f0750cf0afd2b75234da544fa42fc6b90df36b1360783d0fe913a426816698cd->enter($__internal_f0750cf0afd2b75234da544fa42fc6b90df36b1360783d0fe913a426816698cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/staff/footer.inc.php"));

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
        
        $__internal_f0750cf0afd2b75234da544fa42fc6b90df36b1360783d0fe913a426816698cd->leave($__internal_f0750cf0afd2b75234da544fa42fc6b90df36b1360783d0fe913a426816698cd_prof);

    }

    public function getTemplateName()
    {
        return "support/include/staff/footer.inc.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* </div>*/
/* </div>*/
/* <?php if (!isset($_SERVER['HTTP_X_PJAX'])) { ?>*/
/*     <div id="footer">*/
/*         Copyright &copy; 2006-<?php echo date('Y'); ?>&nbsp;<?php echo (string) $ost->company ?: 'osTicket.com'; ?>&nbsp;All Rights Reserved.*/
/*     </div>*/
/* <?php*/
/* if(is_object($thisstaff) && $thisstaff->isStaff()) { ?>*/
/*     <div>*/
/*         <!-- Do not remove <img src="autocron.php" alt="" width="1" height="1" border="0" /> or your auto cron will cease to function -->*/
/*         <img src="autocron.php" alt="" width="1" height="1" border="0" />*/
/*         <!-- Do not remove <img src="autocron.php" alt="" width="1" height="1" border="0" /> or your auto cron will cease to function -->*/
/*     </div>*/
/* <?php*/
/* } ?>*/
/* </div>*/
/* <div id="overlay"></div>*/
/* <div id="loading">*/
/*     <i class="icon-spinner icon-spin icon-3x pull-left icon-light"></i>*/
/*     <h1><?php echo __('Loading ...');?></h1>*/
/* </div>*/
/* <div class="dialog draggable" style="display:none;width:650px;" id="popup">*/
/*     <div id="popup-loading">*/
/*         <h1 style="margin-bottom: 20px;"><i class="icon-spinner icon-spin icon-large"></i>*/
/*         <?php echo __('Loading ...');?></h1>*/
/*     </div>*/
/*     <div class="body"></div>*/
/* </div>*/
/* <div style="display:none;" class="dialog" id="alert">*/
/*     <h3><i class="icon-warning-sign"></i> <span id="title"></span></h3>*/
/*     <a class="close" href=""><i class="icon-remove-circle"></i></a>*/
/*     <hr/>*/
/*     <div id="body" style="min-height: 20px;"></div>*/
/*     <hr style="margin-top:3em"/>*/
/*     <p class="full-width">*/
/*         <span class="buttons pull-right">*/
/*             <input type="button" value="<?php echo __('OK');?>" class="close">*/
/*         </span>*/
/*      </p>*/
/*     <div class="clear"></div>*/
/* </div>*/
/* */
/* <script type="text/javascript">*/
/* if ($.support.pjax) {*/
/*   $(document).on('click', 'a', function(event) {*/
/*     if (!$(this).hasClass('no-pjax')*/
/*         && !$(this).closest('.no-pjax').length*/
/*         && $(this).attr('href')[0] != '#')*/
/*       $.pjax.click(event, {container: $('#pjax-container'), timeout: 2000});*/
/*   })*/
/* }*/
/* </script>*/
/* <?php*/
/* if ($thisstaff && $thisstaff->getLanguage() != 'en_US') { ?>*/
/*     <script type="text/javascript" src="ajax.php/i18n/<?php*/
/*         echo $thisstaff->getLanguage(); ?>/js"></script>*/
/* <?php } ?>*/
/* </body>*/
/* </html>*/
/* <?php } # endif X_PJAX ?>*/
/* */
