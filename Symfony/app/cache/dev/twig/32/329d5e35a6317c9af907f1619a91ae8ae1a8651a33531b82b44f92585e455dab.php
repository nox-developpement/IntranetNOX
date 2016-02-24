<?php

/* support/assets/default/less/base.less */
class __TwigTemplate_4276f985ed7f7fe4fac42c7eaf213920771e15d7d94ae730ef5c6325e3dac97a extends Twig_Template
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
        $__internal_aa1b74ef02eccd5b175028102ce3b1d3707fd9d93b630fe54fff65ab35b60ad8 = $this->env->getExtension("native_profiler");
        $__internal_aa1b74ef02eccd5b175028102ce3b1d3707fd9d93b630fe54fff65ab35b60ad8->enter($__internal_aa1b74ef02eccd5b175028102ce3b1d3707fd9d93b630fe54fff65ab35b60ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/assets/default/less/base.less"));

        // line 1
        echo "/* Typography */
a {
  color: #0072bc;
  text-decoration: none;
}

h1 {
  color: #00AEEF;
  font-weight: normal;
  font-size: 20px;
}

h3 {
  font-size: 16px;
}

h2 {
  font-size: 16px;
  color: #999;
}

/* Helpers */
.centered { text-align: center;}

.clear { clear:both; height: 1px; visibility: none;}

.hidden { display: none;}

.faded { color:#666;}

/* Pagination */
#pagination {
  border: 0;
  margin: 0 0 40px 0;
  padding: 0;
  li {
    border: 0;
    margin: 0;
    padding: 0;
    font-size: 11px;
    list-style: none;
    display: inline;
    a {
      margin-right: 2px;
      display: block;
      float: left;
      padding: 3px 6px;
      text-decoration: none;
    }
    a:hover {
      color: #ff0084;
    }
  }
  .previousOff, .nextOff {
    color: #666;
    display: block;
    float: left;
    font-weight: bold;
    padding: 3px 4px;
  }
  .next a, .previous a {
    font-weight: bold;
  }
  .active {
    color: #000;
    font-weight: bold;
    margin-right: 2px;
    display: block;
    float: left;
    padding: 3px 6px;
    text-decoration: none;
  }
}

/* Alerts & Notices */

#msg_notice { margin: 0; padding: 5px 10px 5px 36px; height: 16px; line-height: 16px; margin-bottom: 10px; border: 1px solid #0a0; background: url('../images/icons/ok.png') 10px 50% no-repeat #e0ffe0; }

#msg_warning { margin: 0; padding: 5px 10px 5px 36px; height: 16px; line-height: 16px; margin-bottom: 10px; border: 1px solid #f26522; background: url('../images/icons/alert.png') 10px 50% no-repeat #ffffdd; }

#msg_error { margin: 0; padding: 5px 10px 5px 36px; height: 16px; line-height: 16px; margin-bottom: 10px; border: 1px solid #a00; background: url('../images/icons/error.png') 10px 50% no-repeat #fff0f0; }


.warning {
  background: #ffc;
  font-style: italic;
  strong {
    text-transform: uppercase;
    color: #a00;
    font-style: normal;
  }
}

.error {
  color:#f00;
  input {
    border:1px solid #f00;
  }
}


.button, .button:visited {
    background: #222;
    display: inline-block;
    font-size: 16px;
    padding: 8px 16px 6px 16px;
    width:160px;
    text-align:center;
    color: #fff;
    font-weight:bold;
    text-decoration: none;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.5);
    -moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
    -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
    text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
    border-bottom: 1px solid rgba(0,0,0,0.25);
    position: relative;
    cursor: pointer;
    font-family:helvetica, arial, sans-serif;
}

.button:hover                          { background-color: #111; color: #fff; }
.button:active                         { top: 1px; box-shadow:none; -moz-box-shadow:none; -webkit-box-shadow:none; }
.button, .button:visited,
.green.button, .green.button:visited      { background-color: #91bd09; }
.green.button:hover                        { background-color: #749a02; }
.blue.button, .blue.button:visited        { background-color: #00AEEF; }
.blue.button:hover                         { background-color: #0299d2; }
";
        
        $__internal_aa1b74ef02eccd5b175028102ce3b1d3707fd9d93b630fe54fff65ab35b60ad8->leave($__internal_aa1b74ef02eccd5b175028102ce3b1d3707fd9d93b630fe54fff65ab35b60ad8_prof);

    }

    public function getTemplateName()
    {
        return "support/assets/default/less/base.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /* Typography *//* */
/* a {*/
/*   color: #0072bc;*/
/*   text-decoration: none;*/
/* }*/
/* */
/* h1 {*/
/*   color: #00AEEF;*/
/*   font-weight: normal;*/
/*   font-size: 20px;*/
/* }*/
/* */
/* h3 {*/
/*   font-size: 16px;*/
/* }*/
/* */
/* h2 {*/
/*   font-size: 16px;*/
/*   color: #999;*/
/* }*/
/* */
/* /* Helpers *//* */
/* .centered { text-align: center;}*/
/* */
/* .clear { clear:both; height: 1px; visibility: none;}*/
/* */
/* .hidden { display: none;}*/
/* */
/* .faded { color:#666;}*/
/* */
/* /* Pagination *//* */
/* #pagination {*/
/*   border: 0;*/
/*   margin: 0 0 40px 0;*/
/*   padding: 0;*/
/*   li {*/
/*     border: 0;*/
/*     margin: 0;*/
/*     padding: 0;*/
/*     font-size: 11px;*/
/*     list-style: none;*/
/*     display: inline;*/
/*     a {*/
/*       margin-right: 2px;*/
/*       display: block;*/
/*       float: left;*/
/*       padding: 3px 6px;*/
/*       text-decoration: none;*/
/*     }*/
/*     a:hover {*/
/*       color: #ff0084;*/
/*     }*/
/*   }*/
/*   .previousOff, .nextOff {*/
/*     color: #666;*/
/*     display: block;*/
/*     float: left;*/
/*     font-weight: bold;*/
/*     padding: 3px 4px;*/
/*   }*/
/*   .next a, .previous a {*/
/*     font-weight: bold;*/
/*   }*/
/*   .active {*/
/*     color: #000;*/
/*     font-weight: bold;*/
/*     margin-right: 2px;*/
/*     display: block;*/
/*     float: left;*/
/*     padding: 3px 6px;*/
/*     text-decoration: none;*/
/*   }*/
/* }*/
/* */
/* /* Alerts & Notices *//* */
/* */
/* #msg_notice { margin: 0; padding: 5px 10px 5px 36px; height: 16px; line-height: 16px; margin-bottom: 10px; border: 1px solid #0a0; background: url('../images/icons/ok.png') 10px 50% no-repeat #e0ffe0; }*/
/* */
/* #msg_warning { margin: 0; padding: 5px 10px 5px 36px; height: 16px; line-height: 16px; margin-bottom: 10px; border: 1px solid #f26522; background: url('../images/icons/alert.png') 10px 50% no-repeat #ffffdd; }*/
/* */
/* #msg_error { margin: 0; padding: 5px 10px 5px 36px; height: 16px; line-height: 16px; margin-bottom: 10px; border: 1px solid #a00; background: url('../images/icons/error.png') 10px 50% no-repeat #fff0f0; }*/
/* */
/* */
/* .warning {*/
/*   background: #ffc;*/
/*   font-style: italic;*/
/*   strong {*/
/*     text-transform: uppercase;*/
/*     color: #a00;*/
/*     font-style: normal;*/
/*   }*/
/* }*/
/* */
/* .error {*/
/*   color:#f00;*/
/*   input {*/
/*     border:1px solid #f00;*/
/*   }*/
/* }*/
/* */
/* */
/* .button, .button:visited {*/
/*     background: #222;*/
/*     display: inline-block;*/
/*     font-size: 16px;*/
/*     padding: 8px 16px 6px 16px;*/
/*     width:160px;*/
/*     text-align:center;*/
/*     color: #fff;*/
/*     font-weight:bold;*/
/*     text-decoration: none;*/
/*     border-radius: 5px;*/
/*     -moz-border-radius: 5px;*/
/*     -webkit-border-radius: 5px;*/
/*     box-shadow: 0 1px 3px rgba(0,0,0,0.5);*/
/*     -moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);*/
/*     -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);*/
/*     text-shadow: 0 -1px 1px rgba(0,0,0,0.25);*/
/*     border-bottom: 1px solid rgba(0,0,0,0.25);*/
/*     position: relative;*/
/*     cursor: pointer;*/
/*     font-family:helvetica, arial, sans-serif;*/
/* }*/
/* */
/* .button:hover                          { background-color: #111; color: #fff; }*/
/* .button:active                         { top: 1px; box-shadow:none; -moz-box-shadow:none; -webkit-box-shadow:none; }*/
/* .button, .button:visited,*/
/* .green.button, .green.button:visited      { background-color: #91bd09; }*/
/* .green.button:hover                        { background-color: #749a02; }*/
/* .blue.button, .blue.button:visited        { background-color: #00AEEF; }*/
/* .blue.button:hover                         { background-color: #0299d2; }*/
/* */
