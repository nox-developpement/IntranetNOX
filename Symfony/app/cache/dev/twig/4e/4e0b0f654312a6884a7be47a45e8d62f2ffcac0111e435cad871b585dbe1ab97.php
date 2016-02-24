<?php

/* @Framework/Form/choice_widget_collapsed.html.php */
class __TwigTemplate_a9887b9e9b71e2cfee0574cc030f2e7b461db5dc81dab3c8eb14c50b56732ca0 extends Twig_Template
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
        $__internal_151103c70904227cf10136dac187308fe0a76bb22de2cb7be575d250b64e9267 = $this->env->getExtension("native_profiler");
        $__internal_151103c70904227cf10136dac187308fe0a76bb22de2cb7be575d250b64e9267->enter($__internal_151103c70904227cf10136dac187308fe0a76bb22de2cb7be575d250b64e9267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_collapsed.html.php"));

        // line 1
        echo "<select
    <?php if (\$required && null === \$placeholder && \$placeholder_in_choices === false && \$multiple === false):
        \$required = false;
    endif; ?>
    <?php echo \$view['form']->block(\$form, 'widget_attributes', array(
        'required' => \$required,
    )) ?>
    <?php if (\$multiple): ?> multiple=\"multiple\"<?php endif ?>
>
    <?php if (null !== \$placeholder): ?><option value=\"\"<?php if (\$required and empty(\$value) && '0' !== \$value): ?> selected=\"selected\"<?php endif?>><?php echo '' != \$placeholder ? \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$placeholder, array(), \$translation_domain) : \$placeholder) : '' ?></option><?php endif; ?>
    <?php if (count(\$preferred_choices) > 0): ?>
        <?php echo \$view['form']->block(\$form, 'choice_widget_options', array('choices' => \$preferred_choices)) ?>
        <?php if (count(\$choices) > 0 && null !== \$separator): ?>
            <option disabled=\"disabled\"><?php echo \$separator ?></option>
        <?php endif ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'choice_widget_options', array('choices' => \$choices)) ?>
</select>
";
        
        $__internal_151103c70904227cf10136dac187308fe0a76bb22de2cb7be575d250b64e9267->leave($__internal_151103c70904227cf10136dac187308fe0a76bb22de2cb7be575d250b64e9267_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_collapsed.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <select*/
/*     <?php if ($required && null === $placeholder && $placeholder_in_choices === false && $multiple === false):*/
/*         $required = false;*/
/*     endif; ?>*/
/*     <?php echo $view['form']->block($form, 'widget_attributes', array(*/
/*         'required' => $required,*/
/*     )) ?>*/
/*     <?php if ($multiple): ?> multiple="multiple"<?php endif ?>*/
/* >*/
/*     <?php if (null !== $placeholder): ?><option value=""<?php if ($required and empty($value) && '0' !== $value): ?> selected="selected"<?php endif?>><?php echo '' != $placeholder ? $view->escape(false !== $translation_domain ? $view['translator']->trans($placeholder, array(), $translation_domain) : $placeholder) : '' ?></option><?php endif; ?>*/
/*     <?php if (count($preferred_choices) > 0): ?>*/
/*         <?php echo $view['form']->block($form, 'choice_widget_options', array('choices' => $preferred_choices)) ?>*/
/*         <?php if (count($choices) > 0 && null !== $separator): ?>*/
/*             <option disabled="disabled"><?php echo $separator ?></option>*/
/*         <?php endif ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'choice_widget_options', array('choices' => $choices)) ?>*/
/* </select>*/
/* */
