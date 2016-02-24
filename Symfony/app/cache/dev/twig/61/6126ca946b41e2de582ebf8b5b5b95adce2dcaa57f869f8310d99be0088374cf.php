<?php

/* support/include/client/footer.inc.php */
class __TwigTemplate_4c19f5552af17421c5688b583c24fd2d3ffcd9b693612143398f66f12c363293 extends Twig_Template
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
        $__internal_9bb19a2cec6fc22a971fa11ffd80e29e94b14bc4ddb40c8c5733e66636269c0d = $this->env->getExtension("native_profiler");
        $__internal_9bb19a2cec6fc22a971fa11ffd80e29e94b14bc4ddb40c8c5733e66636269c0d->enter($__internal_9bb19a2cec6fc22a971fa11ffd80e29e94b14bc4ddb40c8c5733e66636269c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/client/footer.inc.php"));

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
        
        $__internal_9bb19a2cec6fc22a971fa11ffd80e29e94b14bc4ddb40c8c5733e66636269c0d->leave($__internal_9bb19a2cec6fc22a971fa11ffd80e29e94b14bc4ddb40c8c5733e66636269c0d_prof);

    }

    public function getTemplateName()
    {
        return "support/include/client/footer.inc.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
