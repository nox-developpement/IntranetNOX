<?php

/* support/include/staff/templates/content-manage.tmpl.php */
class __TwigTemplate_91f56ba7ec9c8a08bb6eb2873f8af31f5f29f79d869005abff6e85f1db55afed extends Twig_Template
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
        $__internal_3fe5947bb0a19d9ba38f5ddbfd24a3896b695cd8f28bf90e0d50299b404797a2 = $this->env->getExtension("native_profiler");
        $__internal_3fe5947bb0a19d9ba38f5ddbfd24a3896b695cd8f28bf90e0d50299b404797a2->enter($__internal_3fe5947bb0a19d9ba38f5ddbfd24a3896b695cd8f28bf90e0d50299b404797a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/staff/templates/content-manage.tmpl.php"));

        // line 1
        echo "<h3><?php echo __('Manage Content'); ?> &mdash; <?php echo Format::htmlchars(\$content->getName()); ?></h3>
<a class=\"close\" href=\"\"><i class=\"icon-remove-circle\"></i></a>
<hr/>
<?php if (\$errors['err']) { ?>
<div class=\"error-banner\">
    <?php echo \$errors['err']; ?>
</div>
<?php } ?>
<form method=\"post\" action=\"#content/<?php echo \$info['id']; ?>\">
    <div class=\"error\"><?php echo \$errors['name']; ?></div>
    <input type=\"text\" style=\"width: 100%; font-size: 14pt\" name=\"name\" value=\"<?php
        echo Format::htmlchars(\$info['name']); ?>\" />
    <div style=\"margin-top: 5px\">
    <div class=\"error\"><?php echo \$errors['body']; ?></div>
    <textarea class=\"richtext no-bar\" name=\"body\"><?php
    echo Format::viewableImages(\$info['body']);
?></textarea>
    </div>
    <div id=\"msg_info\" style=\"margin-top:7px\"><?php
echo \$content->getNotes(); ?></div>
    <hr/>
    <p class=\"full-width\">
        <span class=\"buttons pull-left\">
            <input type=\"reset\" value=\"<?php echo __('Reset'); ?>\">
            <input type=\"button\" name=\"cancel\" class=\"<?php
                echo \$user ? 'cancel' : 'close'; ?>\" value=\"<?php echo __('Cancel'); ?>\">
        </span>
        <span class=\"buttons pull-right\">
            <input type=\"submit\" value=\"<?php echo __('Save Changes'); ?>\">
        </span>
     </p>
</form>
</div>
<div class=\"clear\"></div>
";
        
        $__internal_3fe5947bb0a19d9ba38f5ddbfd24a3896b695cd8f28bf90e0d50299b404797a2->leave($__internal_3fe5947bb0a19d9ba38f5ddbfd24a3896b695cd8f28bf90e0d50299b404797a2_prof);

    }

    public function getTemplateName()
    {
        return "support/include/staff/templates/content-manage.tmpl.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <h3><?php echo __('Manage Content'); ?> &mdash; <?php echo Format::htmlchars($content->getName()); ?></h3>*/
/* <a class="close" href=""><i class="icon-remove-circle"></i></a>*/
/* <hr/>*/
/* <?php if ($errors['err']) { ?>*/
/* <div class="error-banner">*/
/*     <?php echo $errors['err']; ?>*/
/* </div>*/
/* <?php } ?>*/
/* <form method="post" action="#content/<?php echo $info['id']; ?>">*/
/*     <div class="error"><?php echo $errors['name']; ?></div>*/
/*     <input type="text" style="width: 100%; font-size: 14pt" name="name" value="<?php*/
/*         echo Format::htmlchars($info['name']); ?>" />*/
/*     <div style="margin-top: 5px">*/
/*     <div class="error"><?php echo $errors['body']; ?></div>*/
/*     <textarea class="richtext no-bar" name="body"><?php*/
/*     echo Format::viewableImages($info['body']);*/
/* ?></textarea>*/
/*     </div>*/
/*     <div id="msg_info" style="margin-top:7px"><?php*/
/* echo $content->getNotes(); ?></div>*/
/*     <hr/>*/
/*     <p class="full-width">*/
/*         <span class="buttons pull-left">*/
/*             <input type="reset" value="<?php echo __('Reset'); ?>">*/
/*             <input type="button" name="cancel" class="<?php*/
/*                 echo $user ? 'cancel' : 'close'; ?>" value="<?php echo __('Cancel'); ?>">*/
/*         </span>*/
/*         <span class="buttons pull-right">*/
/*             <input type="submit" value="<?php echo __('Save Changes'); ?>">*/
/*         </span>*/
/*      </p>*/
/* </form>*/
/* </div>*/
/* <div class="clear"></div>*/
/* */
