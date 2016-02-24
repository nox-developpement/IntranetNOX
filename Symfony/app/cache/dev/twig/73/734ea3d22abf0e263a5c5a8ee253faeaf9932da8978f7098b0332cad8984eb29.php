<?php

/* support/assets/default/less/ticket.less */
class __TwigTemplate_44265a0ad1bf5ca5318e2b0fd3c58240ae8942e815f4009b9424c19d99a26507 extends Twig_Template
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
        $__internal_abc4cdbe29d81cb8a8769ec40f081cc2834960a5edf9f353111690601fbfb26b = $this->env->getExtension("native_profiler");
        $__internal_abc4cdbe29d81cb8a8769ec40f081cc2834960a5edf9f353111690601fbfb26b->enter($__internal_abc4cdbe29d81cb8a8769ec40f081cc2834960a5edf9f353111690601fbfb26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/assets/default/less/ticket.less"));

        // line 1
        echo "/* Ticket icons */
.Icon {
  width: auto;
  padding-left: 20px;
  background-position: top left;
  background-repeat: no-repeat;
  color: #006699;
  text-decoration: none;
}

.Icon.Ticket { background-image: url('../images/icons/ticket.gif') }
.Icon.webTicket { background-image: url('../images/icons/ticket_source_web.gif'); }
.Icon.emailTicket { background-image: url('../images/icons/ticket_source_email.gif'); }
.Icon.phoneTicket { background-image: url('../images/icons/ticket_source_phone.gif'); }
.Icon.otherTicket { background-image: url('../images/icons/ticket_source_other.gif'); }
.Icon.attachment { background-image: url('../images/icons/attachment.gif'); }
.Icon.file { background-image: url('../images/icons/attachment.gif'); }
.Icon.refresh { background-image: url('../images/icons/refresh.gif'); }

.Icon.thread {
  font-weight: bold;
  font-size: 1em;
  background-image: url('../images/icons/thread.gif?1319556657');
}

.Icon:hover {
  text-decoration: underline;
}


#ticketTable {
  border: 1px solid #aaa;
  border-left: none;
  border-bottom: none;

  caption {
    padding: 5px;
    text-align: left;
    color: #000;
    background: #ddd;
    border: 1px solid #aaa;
    border-bottom: none;
    font-weight: bold;
  }

  th {
    height: 24px;
    line-height: 24px;
    background: #e1f2ff;
    border: 1px solid #aaa;
    border-right: none;
    border-top: none;

    a {
      color: #000;
    }
  }

  td {
    padding: 2px;
    border: 1px solid #aaa;
    border-right: none;
    border-top: none;
  }

  tr.alt td {
    background: #f9f9f9;
  }
}

#ticketSearchForm {
  display: inline-block;
  float: left;
  padding: 0 0 5px 0;
}

a.refresh {
  display: block;
  width: auto;
  float: right;
  height: 20px;
  line-height: 20px;
  text-align: center;
  padding: 0 10px 0 28px;
  border: 1px solid #aaa;
  margin-left: 10px;
  color: #333;
  background-position: 5px 50%;
  background-repeat: no-repeat;
  background-image: url('../images/icons/refresh.png');
}

.infoTable {
  background: #F4FAFF;
  th {
    text-align: left;
  }
}

#ticketThread {
  table {
    margin-top: 10px;
    border: 1px solid #aaa;
    border-bottom: 2px solid #aaa;

    th {
      text-align: left;
      border-bottom: 1px solid #aaa;
      font-size: 12px;
      padding: 5px;

      span {
          font-weight:normal;
          color:#888;
          padding-left:20px;
      }
    }

    td {
      padding: 5px;
    }
  }

  .message th { background: #d8efff; }
  .response th { background: #ddd; }

  .info {
    padding: 2px;
    background: #f9f9f9;
    border-top: 1px solid #ddd;
    height: 16px;
    line-height: 16px;

    a {
      display: inline-block;
      margin: 5px 10px 5px 0;
      padding-left: 24px;
      height: 16px;
      line-height: 16px;
      background-position: 0 50%;
      background-repeat: no-repeat;
    }
  }
}

";
        
        $__internal_abc4cdbe29d81cb8a8769ec40f081cc2834960a5edf9f353111690601fbfb26b->leave($__internal_abc4cdbe29d81cb8a8769ec40f081cc2834960a5edf9f353111690601fbfb26b_prof);

    }

    public function getTemplateName()
    {
        return "support/assets/default/less/ticket.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /* Ticket icons *//* */
/* .Icon {*/
/*   width: auto;*/
/*   padding-left: 20px;*/
/*   background-position: top left;*/
/*   background-repeat: no-repeat;*/
/*   color: #006699;*/
/*   text-decoration: none;*/
/* }*/
/* */
/* .Icon.Ticket { background-image: url('../images/icons/ticket.gif') }*/
/* .Icon.webTicket { background-image: url('../images/icons/ticket_source_web.gif'); }*/
/* .Icon.emailTicket { background-image: url('../images/icons/ticket_source_email.gif'); }*/
/* .Icon.phoneTicket { background-image: url('../images/icons/ticket_source_phone.gif'); }*/
/* .Icon.otherTicket { background-image: url('../images/icons/ticket_source_other.gif'); }*/
/* .Icon.attachment { background-image: url('../images/icons/attachment.gif'); }*/
/* .Icon.file { background-image: url('../images/icons/attachment.gif'); }*/
/* .Icon.refresh { background-image: url('../images/icons/refresh.gif'); }*/
/* */
/* .Icon.thread {*/
/*   font-weight: bold;*/
/*   font-size: 1em;*/
/*   background-image: url('../images/icons/thread.gif?1319556657');*/
/* }*/
/* */
/* .Icon:hover {*/
/*   text-decoration: underline;*/
/* }*/
/* */
/* */
/* #ticketTable {*/
/*   border: 1px solid #aaa;*/
/*   border-left: none;*/
/*   border-bottom: none;*/
/* */
/*   caption {*/
/*     padding: 5px;*/
/*     text-align: left;*/
/*     color: #000;*/
/*     background: #ddd;*/
/*     border: 1px solid #aaa;*/
/*     border-bottom: none;*/
/*     font-weight: bold;*/
/*   }*/
/* */
/*   th {*/
/*     height: 24px;*/
/*     line-height: 24px;*/
/*     background: #e1f2ff;*/
/*     border: 1px solid #aaa;*/
/*     border-right: none;*/
/*     border-top: none;*/
/* */
/*     a {*/
/*       color: #000;*/
/*     }*/
/*   }*/
/* */
/*   td {*/
/*     padding: 2px;*/
/*     border: 1px solid #aaa;*/
/*     border-right: none;*/
/*     border-top: none;*/
/*   }*/
/* */
/*   tr.alt td {*/
/*     background: #f9f9f9;*/
/*   }*/
/* }*/
/* */
/* #ticketSearchForm {*/
/*   display: inline-block;*/
/*   float: left;*/
/*   padding: 0 0 5px 0;*/
/* }*/
/* */
/* a.refresh {*/
/*   display: block;*/
/*   width: auto;*/
/*   float: right;*/
/*   height: 20px;*/
/*   line-height: 20px;*/
/*   text-align: center;*/
/*   padding: 0 10px 0 28px;*/
/*   border: 1px solid #aaa;*/
/*   margin-left: 10px;*/
/*   color: #333;*/
/*   background-position: 5px 50%;*/
/*   background-repeat: no-repeat;*/
/*   background-image: url('../images/icons/refresh.png');*/
/* }*/
/* */
/* .infoTable {*/
/*   background: #F4FAFF;*/
/*   th {*/
/*     text-align: left;*/
/*   }*/
/* }*/
/* */
/* #ticketThread {*/
/*   table {*/
/*     margin-top: 10px;*/
/*     border: 1px solid #aaa;*/
/*     border-bottom: 2px solid #aaa;*/
/* */
/*     th {*/
/*       text-align: left;*/
/*       border-bottom: 1px solid #aaa;*/
/*       font-size: 12px;*/
/*       padding: 5px;*/
/* */
/*       span {*/
/*           font-weight:normal;*/
/*           color:#888;*/
/*           padding-left:20px;*/
/*       }*/
/*     }*/
/* */
/*     td {*/
/*       padding: 5px;*/
/*     }*/
/*   }*/
/* */
/*   .message th { background: #d8efff; }*/
/*   .response th { background: #ddd; }*/
/* */
/*   .info {*/
/*     padding: 2px;*/
/*     background: #f9f9f9;*/
/*     border-top: 1px solid #ddd;*/
/*     height: 16px;*/
/*     line-height: 16px;*/
/* */
/*     a {*/
/*       display: inline-block;*/
/*       margin: 5px 10px 5px 0;*/
/*       padding-left: 24px;*/
/*       height: 16px;*/
/*       line-height: 16px;*/
/*       background-position: 0 50%;*/
/*       background-repeat: no-repeat;*/
/*     }*/
/*   }*/
/* }*/
/* */
/* */
