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
        $__internal_9b9d7fa893556a32452d9bb7539d8b16d3c3f6a4eca68edc8e33ce1ac7c18ee5 = $this->env->getExtension("native_profiler");
        $__internal_9b9d7fa893556a32452d9bb7539d8b16d3c3f6a4eca68edc8e33ce1ac7c18ee5->enter($__internal_9b9d7fa893556a32452d9bb7539d8b16d3c3f6a4eca68edc8e33ce1ac7c18ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/templates/premade.yaml"));

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
        
        $__internal_9b9d7fa893556a32452d9bb7539d8b16d3c3f6a4eca68edc8e33ce1ac7c18ee5->leave($__internal_9b9d7fa893556a32452d9bb7539d8b16d3c3f6a4eca68edc8e33ce1ac7c18ee5_prof);

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
