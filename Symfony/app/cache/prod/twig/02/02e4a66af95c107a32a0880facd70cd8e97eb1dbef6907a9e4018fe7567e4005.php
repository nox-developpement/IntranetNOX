<?php

/* support/assets/default/less/reset.less */
class __TwigTemplate_d596b100cdc0501526ebf756d5a7c040a75c49b07a8f056d6c382af9dd92dc14 extends Twig_Template
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
        echo "html {
  font-size: 100%;
  overflow-y: scroll;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
}

body {
  margin: 0;
  font-size: 13px;
  line-height: 1.231;
  padding: 0;
}

body, input, select, textarea {
  font-family: sans-serif;
  color: #000;
}

b, strong {
  font-weight: bold;
}

blockquote {
  margin: 1em 40px;
}

hr {
  display: block;
  height: 1px;
  border: 0;
  border-top: 1px solid #ccc;
  margin: 1em 0;
  padding: 0;
}

small {
  font-size: 85%;
}

ul, ol {
  margin: 1em 0;
  padding: 0 0 0 30px;
}

img {
  border: 0;
  vertical-align: middle;
}

form {
  margin: 0;
}

fieldset {
  border: 0;
  margin: 0;
  padding: 0;
}

label {
  cursor: pointer;
}

input, select, textarea {
  font-size: 100%;
  margin: 0;
  vertical-align: baseline;
  *vertical-align: middle;
}

input {
  line-height: normal;
  *overflow: visible;
}

table input {
  *overflow: auto;
}

input[type=\"button\"], input[type=\"reset\"], input[type=\"submit\"] {
  cursor: pointer;
  -webkit-appearance: button;
}

input[type=\"checkbox\"], input[type=\"radio\"] {
  box-sizing: border-box;
}

input[type=\"search\"] {
  -webkit-appearance: textfield;
  -moz-box-sizing: content-box;
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
}

textarea {
  overflow: auto;
  vertical-align: top;
  resize: vertical;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

th, td {
  vertical-align: top;
}

th { text-align: left; font-weight: normal; }

h1, h2, h3, h4, h5, h6, form, fieldset {
  margin: 0;
  padding: 0;
}";
    }

    public function getTemplateName()
    {
        return "support/assets/default/less/reset.less";
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
        return new Twig_Source("", "support/assets/default/less/reset.less", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\assets\\default\\less\\reset.less");
    }
}
