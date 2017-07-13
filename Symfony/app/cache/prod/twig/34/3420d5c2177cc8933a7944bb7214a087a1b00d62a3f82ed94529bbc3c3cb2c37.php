<?php

/* support/assets/default/less/theme.less */
class __TwigTemplate_f7999278ecb019f11b550f2340b05ff711040c9f9e193798e405e68995b3d675 extends Twig_Template
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
        echo "@import 'reset';
@import 'base';
@import 'main-layout';
@import 'landing-page';
@import 'kb';
@import 'ticket-forms';
@import 'ticket';
";
    }

    public function getTemplateName()
    {
        return "support/assets/default/less/theme.less";
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
        return new Twig_Source("", "support/assets/default/less/theme.less", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\assets\\default\\less\\theme.less");
    }
}
