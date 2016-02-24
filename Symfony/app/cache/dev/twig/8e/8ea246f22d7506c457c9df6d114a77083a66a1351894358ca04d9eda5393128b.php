<?php

/* support/include/class.log.php */
class __TwigTemplate_a5e5019dc2c406a1624fd405220443261cb43aff47a1a4beba6d8255bc2cf89c extends Twig_Template
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
        $__internal_b7aea27c3f455de4002881cb04415807cfb15d54693dcfe11fd124dc787de078 = $this->env->getExtension("native_profiler");
        $__internal_b7aea27c3f455de4002881cb04415807cfb15d54693dcfe11fd124dc787de078->enter($__internal_b7aea27c3f455de4002881cb04415807cfb15d54693dcfe11fd124dc787de078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/class.log.php"));

        // line 1
        echo "<?php
/*********************************************************************
    class.log.php

    Log

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/

class Log {

    var \$id;
    var \$info;

    function Log(\$id){
        \$this->id=0;
        return \$this->load(\$id);
    }

    function load(\$id){

        \$sql='SELECT * FROM '.SYSLOG_TABLE.' WHERE log_id='.db_input(\$id);
        if(!(\$res=db_query(\$sql)) || !db_num_rows(\$res))
            return false;

        \$this->info=db_fetch_array(\$res);
        \$this->id=\$this->info['log_id'];
        
        return \$this->id;
    }

    function reload(){
        return \$this->load(\$this->getId());
    }

    function getId(){
        return \$this->id;
    }
        
    function getType(){
        return \$this->info['log_type'];    
    }

    function getTitle(){
        return \$this->info['title'];
    }

    function getText(){
        return \$this->info['log'];
    }

    function getIp(){
        return \$this->info['ip_address'];
    }

    function getCreateDate(){
        return \$this->info['created'];
    }

    function getInfo(){
        return \$this->info;
    }

    /*** static function ***/
    function lookup(\$id){
        return (\$id && is_numeric(\$id) && (\$l= new Log(\$id)) && \$l->getId()==\$id)?\$l:null;
    }
}
?>
";
        
        $__internal_b7aea27c3f455de4002881cb04415807cfb15d54693dcfe11fd124dc787de078->leave($__internal_b7aea27c3f455de4002881cb04415807cfb15d54693dcfe11fd124dc787de078_prof);

    }

    public function getTemplateName()
    {
        return "support/include/class.log.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     class.log.php*/
/* */
/*     Log*/
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
/* class Log {*/
/* */
/*     var $id;*/
/*     var $info;*/
/* */
/*     function Log($id){*/
/*         $this->id=0;*/
/*         return $this->load($id);*/
/*     }*/
/* */
/*     function load($id){*/
/* */
/*         $sql='SELECT * FROM '.SYSLOG_TABLE.' WHERE log_id='.db_input($id);*/
/*         if(!($res=db_query($sql)) || !db_num_rows($res))*/
/*             return false;*/
/* */
/*         $this->info=db_fetch_array($res);*/
/*         $this->id=$this->info['log_id'];*/
/*         */
/*         return $this->id;*/
/*     }*/
/* */
/*     function reload(){*/
/*         return $this->load($this->getId());*/
/*     }*/
/* */
/*     function getId(){*/
/*         return $this->id;*/
/*     }*/
/*         */
/*     function getType(){*/
/*         return $this->info['log_type'];    */
/*     }*/
/* */
/*     function getTitle(){*/
/*         return $this->info['title'];*/
/*     }*/
/* */
/*     function getText(){*/
/*         return $this->info['log'];*/
/*     }*/
/* */
/*     function getIp(){*/
/*         return $this->info['ip_address'];*/
/*     }*/
/* */
/*     function getCreateDate(){*/
/*         return $this->info['created'];*/
/*     }*/
/* */
/*     function getInfo(){*/
/*         return $this->info;*/
/*     }*/
/* */
/*     /*** static function ***//* */
/*     function lookup($id){*/
/*         return ($id && is_numeric($id) && ($l= new Log($id)) && $l->getId()==$id)?$l:null;*/
/*     }*/
/* }*/
/* ?>*/
/* */
