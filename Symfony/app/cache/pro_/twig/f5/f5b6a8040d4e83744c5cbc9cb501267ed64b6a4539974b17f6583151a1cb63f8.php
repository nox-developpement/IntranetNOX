<?php

/* support/assets/default/less/main-layout.less */
class __TwigTemplate_052adc2bdc05bfd4e3beba8b30580ed5f943c8bb7c2f5f6532695bcb729cdc95 extends Twig_Template
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
        echo "body {
  background: url('../images/page_bg.png') top left repeat-x #c8c8c8;
}

#container {
  background: #fff;
  width: 840px;
  margin: 0 auto;
  box-shadow: 0 0 6px rgba(0, 0, 0, 0.5);
  -moz-box-shadow: 0 0 6px rgba(0, 0, 0, 0.5);
  -webkit-box-shadow: 0 0 6px rgba(0, 0, 0, 0.5);
}

#header {
  position: relative;
  height: 71px;
  padding: 0 20px;

  #logo {
    width: 220px;
    height: 71px;
    float: left;
  }

  p {
    width: 400px;
    text-align: right;
    margin: 0;
    padding: 10px 0;
    float: right;
  }
}

#nav {
  margin: 0 20px;
  padding: 2px 10px;
  height: 20px;
  background: url('../images/nav_bg.png') top left repeat-x;
  border-top: 1px solid #aaa;
  box-shadow:0 3px 2px rgba(0, 0, 0, 0.4);
  -moz-box-shadow:0 3px 2px rgba(0, 0, 0, 0.4);
  -webkit-box-shadow:0 3px 2px rgba(0, 0, 0, 0.4);

  li {
    margin: 0;
    padding: 0;
    list-style: none;
    display: inline;
    a {
      display: block;
      width: auto;
      float: left;
      height: 20px;
      line-height: 20px;
      text-align: center;
      padding: 0 10px 0 32px;
      margin-left: 10px;
      color: #333;
      border-radius: 20px;
      -webkit-border-radius: 20px;
      -moz-border-radius: 20px;
      background-position: 10px 50%;
      background-repeat: no-repeat;
    }

    a.active, a:hover {
      background-color: #dbefff;
      color: #000;
    }

    a:hover {
      background-color: #ededed;
      color: #0054a6;
    }

    a.home    { background-image: url('../images/icons/home.png'); }
    a.kb      { background-image: url('../images/icons/kb.png'); }
    a.new     {  background-image: url('../images/icons/new.png'); }
    a.status  { background-image: url('../images/icons/status.png'); }
    a.tickets { background-image: url('../images/icons/tix.png'); }
  }
}

#content {
  padding: 20px 0;
  margin: 0 20px;
  height: auto !important;
  height: 350px;
  min-height: 350px;
}

#footer {
  text-align: center;
  font-size: 11px;
  color: #333;

  a {
    color: #333;
  }

  p {
    margin: 10px 0 0 0;
  }

  #poweredBy {
    display: block;
    width: 126px;
    height: 23px;
    outline: none;
    text-indent: -9999px;
    margin: 0 auto;
    background: url('../images/poweredby.png') top left no-repeat;
  }
}";
    }

    public function getTemplateName()
    {
        return "support/assets/default/less/main-layout.less";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* body {*/
/*   background: url('../images/page_bg.png') top left repeat-x #c8c8c8;*/
/* }*/
/* */
/* #container {*/
/*   background: #fff;*/
/*   width: 840px;*/
/*   margin: 0 auto;*/
/*   box-shadow: 0 0 6px rgba(0, 0, 0, 0.5);*/
/*   -moz-box-shadow: 0 0 6px rgba(0, 0, 0, 0.5);*/
/*   -webkit-box-shadow: 0 0 6px rgba(0, 0, 0, 0.5);*/
/* }*/
/* */
/* #header {*/
/*   position: relative;*/
/*   height: 71px;*/
/*   padding: 0 20px;*/
/* */
/*   #logo {*/
/*     width: 220px;*/
/*     height: 71px;*/
/*     float: left;*/
/*   }*/
/* */
/*   p {*/
/*     width: 400px;*/
/*     text-align: right;*/
/*     margin: 0;*/
/*     padding: 10px 0;*/
/*     float: right;*/
/*   }*/
/* }*/
/* */
/* #nav {*/
/*   margin: 0 20px;*/
/*   padding: 2px 10px;*/
/*   height: 20px;*/
/*   background: url('../images/nav_bg.png') top left repeat-x;*/
/*   border-top: 1px solid #aaa;*/
/*   box-shadow:0 3px 2px rgba(0, 0, 0, 0.4);*/
/*   -moz-box-shadow:0 3px 2px rgba(0, 0, 0, 0.4);*/
/*   -webkit-box-shadow:0 3px 2px rgba(0, 0, 0, 0.4);*/
/* */
/*   li {*/
/*     margin: 0;*/
/*     padding: 0;*/
/*     list-style: none;*/
/*     display: inline;*/
/*     a {*/
/*       display: block;*/
/*       width: auto;*/
/*       float: left;*/
/*       height: 20px;*/
/*       line-height: 20px;*/
/*       text-align: center;*/
/*       padding: 0 10px 0 32px;*/
/*       margin-left: 10px;*/
/*       color: #333;*/
/*       border-radius: 20px;*/
/*       -webkit-border-radius: 20px;*/
/*       -moz-border-radius: 20px;*/
/*       background-position: 10px 50%;*/
/*       background-repeat: no-repeat;*/
/*     }*/
/* */
/*     a.active, a:hover {*/
/*       background-color: #dbefff;*/
/*       color: #000;*/
/*     }*/
/* */
/*     a:hover {*/
/*       background-color: #ededed;*/
/*       color: #0054a6;*/
/*     }*/
/* */
/*     a.home    { background-image: url('../images/icons/home.png'); }*/
/*     a.kb      { background-image: url('../images/icons/kb.png'); }*/
/*     a.new     {  background-image: url('../images/icons/new.png'); }*/
/*     a.status  { background-image: url('../images/icons/status.png'); }*/
/*     a.tickets { background-image: url('../images/icons/tix.png'); }*/
/*   }*/
/* }*/
/* */
/* #content {*/
/*   padding: 20px 0;*/
/*   margin: 0 20px;*/
/*   height: auto !important;*/
/*   height: 350px;*/
/*   min-height: 350px;*/
/* }*/
/* */
/* #footer {*/
/*   text-align: center;*/
/*   font-size: 11px;*/
/*   color: #333;*/
/* */
/*   a {*/
/*     color: #333;*/
/*   }*/
/* */
/*   p {*/
/*     margin: 10px 0 0 0;*/
/*   }*/
/* */
/*   #poweredBy {*/
/*     display: block;*/
/*     width: 126px;*/
/*     height: 23px;*/
/*     outline: none;*/
/*     text-indent: -9999px;*/
/*     margin: 0 auto;*/
/*     background: url('../images/poweredby.png') top left no-repeat;*/
/*   }*/
/* }*/
