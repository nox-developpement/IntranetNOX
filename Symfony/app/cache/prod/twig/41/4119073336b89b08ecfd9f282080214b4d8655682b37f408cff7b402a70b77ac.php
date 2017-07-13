<?php

/* support/assets/default/less/print.less */
class __TwigTemplate_7f65741d862ae26ef3ec58a4587347aecc6311ca672b1f16764116ac5c90c82b extends Twig_Template
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
        echo "#header, #nav, #meta, #footer, #reply, #pagination, .reload, .refresh, form, .thread, hr, #kbAttachments, .back {
  display: none;
}

th {
  text-align: left;
}

a {
  color: #000;
  text-decoration: none;
}

caption {
  text-align: left;
  padding-bottom: 10px;
  font-weight: bold;
}

.message, .response {
  border-bottom: 1px solid #000;
  margin-bottom: 20px;
  padding-bottom: 10px;

  th {
    font-size: 12pt;
    font-weight: bold;
    padding-bottom: 5px;
  }
}
";
    }

    public function getTemplateName()
    {
        return "support/assets/default/less/print.less";
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
        return new Twig_Source("", "support/assets/default/less/print.less", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\assets\\default\\less\\print.less");
    }
}
