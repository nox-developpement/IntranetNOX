<?php

/* support/assets/default/less/landing-page.less */
class __TwigTemplate_9e79f3ac6fcb340ae948fc483e222762fd008fbb1bc6bd65226facf10a9aa8e7 extends Twig_Template
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
        echo "#landing_page {
  #new_ticket {
    margin-top: 40px;
    width: 295px;
    padding-left: 75px;
    float: left;
    background: url('../images/new_ticket_icon.png') top left no-repeat;
  }

  #check_status {
    margin-top: 40px;
    width: 295px;
    padding-left: 75px;
    float: right;
    background: url('../images/check_status_icon.png') top left no-repeat;
  }
}

/* Landing page FAQ not yet implemented. */
#faq {
  clear: both;
  margin: 0;
  padding: 5px;

  ol {
    font-size: 15px;
    margin-left: 0;
    padding-left: 0;
    border-top:1px solid #ddd;

    li {
      list-style: none;
      margin: 0;
      padding:0;
      color: #999;
      a {
        display:block;
        padding:5px 0;
        height:auto !important;
        overflow:hidden;
        margin:0;
        border-bottom:1px solid #ddd;
        line-height: 16px;
        padding-left: 24px;
        background: url('../images/icons/page.png') 0 50% no-repeat;
      }

      a:hover {
        background-color:#e9f5ff;
      }
    }
  }
  .article-meta {
    padding:5px;
    background:#fafafa;
  }
}

";
    }

    public function getTemplateName()
    {
        return "support/assets/default/less/landing-page.less";
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
        return new Twig_Source("", "support/assets/default/less/landing-page.less", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\assets\\default\\less\\landing-page.less");
    }
}
