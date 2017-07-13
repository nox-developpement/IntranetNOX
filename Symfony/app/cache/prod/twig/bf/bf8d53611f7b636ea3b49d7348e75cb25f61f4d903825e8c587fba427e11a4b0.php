<?php

/* support/assets/default/less/ticket-forms.less */
class __TwigTemplate_bc2f9be0f5cb664c912148930bbace12212a1983d33941221fbc4259a62ce4a9 extends Twig_Template
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
        echo "#ticketForm, #clientLogin {
  div {
    clear: both;
    padding: 3px 0;
    overflow: hidden;

    label {
      display: block;
      width: 140px;
      float: left;
    }

    label.required {
        font-weight: bold;
        text-align: left;
    }

    input, textarea {
      width: auto;
      border: 1px solid #aaa;
      background: #fff;
      margin-right: 10px;
      display: block;
      float: left;
    }

    input[type=file] {
      border: 0;
    }

    select {
      display: block;
      float: left;
    }
    div.captchaRow {
      line-height: 31px;

      input {
        position: relative;
        top: 6px;
      }
    }

  }

  td, div {
    textarea {
      width: 600px;
    }

    em {
      color: #777;
    }

    .captcha {
      width: 88px;
      height: 31px;
      background: #000;
      display: block;
      float: left;
      margin-right: 20px;
    }

    label.inline {
      width: auto;
      padding: 0 10px;
    }
  }

  div.error {
    input {
      border: 1px solid #a00;
    }
    label {
      color: #a00;
    }
  }
}

#ticketTable {
  th {
    width: 160px;
    font-weight: normal;
    text-align: left;
  }
  th.required, td.required {
    font-weight: bold;
    text-align: left;
  }
}

#clientLogin {
  width: 400px;
  margin-top: 20px;
  padding: 10px 100px 10px 10px;
  border: 1px solid #ccc;
  background: url('../images/lock.png?1319655200') 440px 50% no-repeat #f6f6f6;

  p {
    clear: both;
    text-align: center;
  }

  strong {
    font-size: 11px;
    color: #d00;
    display: block;
    padding-left: 140px;
  }

  #email {
    width: 250px;
    margin-right: 0;
  }

  #ticketno {
    width: 120px;
    margin-right: 0;
  }
}

#reply {
  margin-top: 20px;
  padding: 10px 5px;
  background: #f9f9f9;
  border: 1px solid #ccc;

  h2 {
    margin-bottom: 10px;
  }

  table {
    width: 800px;

    td {
      vertical-align: top;
    }
  }

  textarea {
    width: 628px !important;
  }

  input[type=text], #response_options textarea {
    border: 1px solid #aaa;
    background: #fff;
  }

  .attachments .uploads div {
    display: inline-block;
    padding-right: 20px;
  }
  .file {
    display: inline-block;
    padding-left: 20px;
    margin-right: 20px;
    background: url('../images/icons/file.gif') 0 50% no-repeat;
  }
}

.uploads {
  display:inline-block;
  padding-right:20px;

  label {
    padding:3px;
    padding-right:10px;
    width: auto !important
  }
}";
    }

    public function getTemplateName()
    {
        return "support/assets/default/less/ticket-forms.less";
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
        return new Twig_Source("", "support/assets/default/less/ticket-forms.less", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\assets\\default\\less\\ticket-forms.less");
    }
}
