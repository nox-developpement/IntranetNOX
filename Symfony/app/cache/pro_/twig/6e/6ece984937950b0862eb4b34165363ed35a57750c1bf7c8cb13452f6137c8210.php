<?php

/* support/include/i18n/en_US/sequence.yaml */
class __TwigTemplate_0c49ea54da0bebe55082d5240a0d2eaf2421c5d00180abfd4a3fa8e1bcdcdc45 extends Twig_Template
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
        echo "#
# Sequences installed with the system
#
# Fields:
# id:           PK
# name:         Name of the sequence
# next:         Next value of the sequence
# padding:      Padding character
# increment:    Distance between two numbers of the sequence
# flags:        Bitmask of flag settings. Currently known values are
#               INTERNAL:=0x0001 (restrict delete)
#
---
# ID:1 is reserved for upgrades. When transitioning to osTicket 1.10, the
# sequence ID:1 will be configured to start counting from the current
# MAX(ticket.ticket_id). The upgrade will miss this step if there is no
# sequence with ID:1
- id: 1
  name: \"General Tickets\"
  next: 1
  padding: '0'
  increment: 1
  flags: 1
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/sequence.yaml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* #*/
/* # Sequences installed with the system*/
/* #*/
/* # Fields:*/
/* # id:           PK*/
/* # name:         Name of the sequence*/
/* # next:         Next value of the sequence*/
/* # padding:      Padding character*/
/* # increment:    Distance between two numbers of the sequence*/
/* # flags:        Bitmask of flag settings. Currently known values are*/
/* #               INTERNAL:=0x0001 (restrict delete)*/
/* #*/
/* ---*/
/* # ID:1 is reserved for upgrades. When transitioning to osTicket 1.10, the*/
/* # sequence ID:1 will be configured to start counting from the current*/
/* # MAX(ticket.ticket_id). The upgrade will miss this step if there is no*/
/* # sequence with ID:1*/
/* - id: 1*/
/*   name: "General Tickets"*/
/*   next: 1*/
/*   padding: '0'*/
/*   increment: 1*/
/*   flags: 1*/
/* */
