<?php

/* support/assets/default/css/print.css */
class __TwigTemplate_8eed52d19dee412a07be09423b251224ee675dc4fad127fc9b513d2aabd1f214 extends Twig_Template
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
        echo "#header,#nav,#meta,#footer,#reply,#pagination,.reload,.refresh,form,.thread,hr,#kbAttachments,.back{display:none}th{text-align:left}a{color:#000;text-decoration:none}caption{text-align:left;padding-bottom:10px;font-weight:bold}.message,.response{border-bottom:1px solid #000;margin-bottom:20px;padding-bottom:10px}.message th,.response th{font-size:12pt;font-weight:bold;padding-bottom:5px}";
    }

    public function getTemplateName()
    {
        return "support/assets/default/css/print.css";
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
        return new Twig_Source("", "support/assets/default/css/print.css", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\assets\\default\\css\\print.css");
    }
}
