<?php

/* support/include/class.log.php */
class __TwigTemplate_0fe2911fa26a7ee2423530bf4573e895c1e9ffb7510563e267a697f803d27d7b extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/class.log.php";
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
        return new Twig_Source("", "support/include/class.log.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\class.log.php");
    }
}
