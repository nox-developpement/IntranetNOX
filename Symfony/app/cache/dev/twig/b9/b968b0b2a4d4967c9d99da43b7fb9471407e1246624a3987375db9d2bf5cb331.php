<?php

/* support/include/i18n/en_US/templates/premade.yaml */
class __TwigTemplate_0bb67842e51f2308b7425321f585a02ea9302315bf75b69caa33ec9873e60573 extends Twig_Template
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
        $__internal_baf8f224377845351412f9f7b1ffffd132d18024135a0dc35bb117b0dc6f654e = $this->env->getExtension("native_profiler");
        $__internal_baf8f224377845351412f9f7b1ffffd132d18024135a0dc35bb117b0dc6f654e->enter($__internal_baf8f224377845351412f9f7b1ffffd132d18024135a0dc35bb117b0dc6f654e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/templates/premade.yaml"));

        // line 1
        echo "#
# Canned response templates
#
---
- isenabled: 1
  title: What is osTicket (sample)?
  response: |
    osTicket is a widely-used open source support ticket system, an
    attractive alternative to higher-cost and complex customer support
    systems - simple, lightweight, reliable, open source, web-based and easy
    to setup and use.
  notes: |

  attachments:
    - name: osTicket.txt
      type: text/plain
      data: Canned Attachments Rock!

- isenabled: 1
  title: Sample (with variables)
  response: |
    Hi %{ticket.name.first},
    <br>
    <br>
    Your ticket #%{ticket.number} created on %{ticket.create_date} is in
    %{ticket.dept.name} department.
  notes: |
";
        
        $__internal_baf8f224377845351412f9f7b1ffffd132d18024135a0dc35bb117b0dc6f654e->leave($__internal_baf8f224377845351412f9f7b1ffffd132d18024135a0dc35bb117b0dc6f654e_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/premade.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #*/
/* # Canned response templates*/
/* #*/
/* ---*/
/* - isenabled: 1*/
/*   title: What is osTicket (sample)?*/
/*   response: |*/
/*     osTicket is a widely-used open source support ticket system, an*/
/*     attractive alternative to higher-cost and complex customer support*/
/*     systems - simple, lightweight, reliable, open source, web-based and easy*/
/*     to setup and use.*/
/*   notes: |*/
/* */
/*   attachments:*/
/*     - name: osTicket.txt*/
/*       type: text/plain*/
/*       data: Canned Attachments Rock!*/
/* */
/* - isenabled: 1*/
/*   title: Sample (with variables)*/
/*   response: |*/
/*     Hi %{ticket.name.first},*/
/*     <br>*/
/*     <br>*/
/*     Your ticket #%{ticket.number} created on %{ticket.create_date} is in*/
/*     %{ticket.dept.name} department.*/
/*   notes: |*/
/* */
