<?php

/* support/include/client/footer.inc.php */
class __TwigTemplate_5fff691e04daef6d77eb3a9cff1df0212951333e6040c9c5cfa9a15975369819 extends Twig_Template
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
}
/*         </div>*/
/*     </div>*/
/*     <div id="footer">*/
/*         <p>Copyright &copy; <?php echo date('Y'); ?> <?php echo (string) $ost->company ?: 'osTicket.com'; ?> - All rights reserved.</p>*/
/*         <a id="poweredBy" href="http://osticket.com" target="_blank"><?php echo __('Helpdesk software - powered by osTicket'); ?></a>*/
/*     </div>*/
/* <div id="overlay"></div>*/
/* <div id="loading">*/
/*     <h4><?php echo __('Please Wait!');?></h4>*/
/*     <p><?php echo __('Please wait... it will take a second!');?></p>*/
/* </div>*/
/* <?php*/
/* if (($lang = Internationalization::getCurrentLanguage()) && $lang != 'en_US') { ?>*/
/*     <script type="text/javascript" src="ajax.php/i18n/<?php*/
/*         echo $lang; ?>/js"></script>*/
/* <?php } ?>*/
/* </body>*/
/* </html>*/
/* */
