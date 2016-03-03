<?php

/* support/include/class.timezone.php */
class __TwigTemplate_4781d12bc5199dde780fafb4f80a71ef23393e9c33291f0172b6b3dd8c3dfc37 extends Twig_Template
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
        echo "<?php
/*********************************************************************
    class.timezone.php

    Time zone get utils.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/

class Timezone {

    var \$id;
    var \$ht;

    function Timezone(\$id){
        \$this->id=0;
        return \$this->load(\$id);
    }

    function load(\$id=0) {

        if(!\$id && !(\$id=\$this->getId()))
            return false;

        \$sql='SELECT * FROM '.TIMEZONE_TABLE.' WHERE id='.db_input(\$id);
        if(!(\$res=db_query(\$sql)) || !db_num_rows(\$res))
            return false;

        \$this->ht=db_fetch_array(\$res);
        \$this->id=\$this->ht['id'];
        
        return \$this->id;
    }

    function reload() {
        return \$this->load();
    }

    function getId() { 
        return \$this->id;
    }
        
    function getOffset() {
        return \$this->ht['offset'];    
    }

    function getName() {
        return \$this->info['timezone'];
    }

    function getDesc() {
        return \$this->getName();
    }

    /* static functions */
    function lookup(\$id) {
        return (\$id && is_numeric(\$id) && (\$tz= new Timezone(\$id)) && \$tz->getId()==\$id)?\$tz:null;
    }

    function getOffsetById(\$id) {
        return (\$tz=Timezone::lookup(\$id))?\$tz->getOffset():0;
    }
}
?>
";
    }

    public function getTemplateName()
    {
        return "support/include/class.timezone.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     class.timezone.php*/
/* */
/*     Time zone get utils.*/
/* */
/*     Peter Rotich <peter@osticket.com>*/
/*     Copyright (c)  2006-2013 osTicket*/
/*     http://www.osticket.com*/
/* */
/*     Released under the GNU General Public License WITHOUT ANY WARRANTY.*/
/*     See LICENSE.TXT for details.*/
/* */
/*     vim: expandtab sw=4 ts=4 sts=4:*/
/* **********************************************************************//* */
/* */
/* class Timezone {*/
/* */
/*     var $id;*/
/*     var $ht;*/
/* */
/*     function Timezone($id){*/
/*         $this->id=0;*/
/*         return $this->load($id);*/
/*     }*/
/* */
/*     function load($id=0) {*/
/* */
/*         if(!$id && !($id=$this->getId()))*/
/*             return false;*/
/* */
/*         $sql='SELECT * FROM '.TIMEZONE_TABLE.' WHERE id='.db_input($id);*/
/*         if(!($res=db_query($sql)) || !db_num_rows($res))*/
/*             return false;*/
/* */
/*         $this->ht=db_fetch_array($res);*/
/*         $this->id=$this->ht['id'];*/
/*         */
/*         return $this->id;*/
/*     }*/
/* */
/*     function reload() {*/
/*         return $this->load();*/
/*     }*/
/* */
/*     function getId() { */
/*         return $this->id;*/
/*     }*/
/*         */
/*     function getOffset() {*/
/*         return $this->ht['offset'];    */
/*     }*/
/* */
/*     function getName() {*/
/*         return $this->info['timezone'];*/
/*     }*/
/* */
/*     function getDesc() {*/
/*         return $this->getName();*/
/*     }*/
/* */
/*     /* static functions *//* */
/*     function lookup($id) {*/
/*         return ($id && is_numeric($id) && ($tz= new Timezone($id)) && $tz->getId()==$id)?$tz:null;*/
/*     }*/
/* */
/*     function getOffsetById($id) {*/
/*         return ($tz=Timezone::lookup($id))?$tz->getOffset():0;*/
/*     }*/
/* }*/
/* ?>*/
/* */
