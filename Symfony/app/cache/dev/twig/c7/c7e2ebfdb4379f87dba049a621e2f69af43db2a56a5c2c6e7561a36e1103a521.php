<?php

/* support/include/class.setup.php */
class __TwigTemplate_69bcdcca6bfbc2b692aa36af60e9e02cf48387d7485b171d056a9221f2413ae0 extends Twig_Template
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
        $__internal_6f2d8f79ce1af48f93c24930ead7daf6d8b4f0ea91cf67e3d835eed72e19e511 = $this->env->getExtension("native_profiler");
        $__internal_6f2d8f79ce1af48f93c24930ead7daf6d8b4f0ea91cf67e3d835eed72e19e511->enter($__internal_6f2d8f79ce1af48f93c24930ead7daf6d8b4f0ea91cf67e3d835eed72e19e511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/class.setup.php"));

        // line 1
        echo "<?php
/*********************************************************************
    class.setup.php

    osTicket setup wizard.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/

Class SetupWizard {

    //Mimimum requirements
    var \$prereq = array('php'   => '5.3',
                        'mysql' => '5.0');

    //Version info - same as the latest version.

    var \$version =THIS_VERSION;
    var \$version_verbose = THIS_VERSION;

    //Errors
    var \$errors=array();

    function SetupWizard(){
        \$this->errors=array();
        \$this->version_verbose = sprintf(__('osTicket %s' /* <%s> is for the version */),
            THIS_VERSION);

    }

    function load_sql_file(\$file, \$prefix, \$abort=true, \$debug=false) {

        if(!file_exists(\$file) || !(\$schema=file_get_contents(\$file)))
            return \$this->abort(sprintf(__('Error accessing SQL file %s'),basename(\$file)), \$debug);

        return \$this->load_sql(\$schema, \$prefix, \$abort, \$debug);
    }

    /*
        load SQL schema - assumes MySQL && existing connection
        */
    function load_sql(\$schema, \$prefix, \$abort=true, \$debug=false) {
        # Strip comments and remarks
        \$schema=preg_replace('%^\\s*(#|--).*\$%m', '', \$schema);
        # Replace table prefix
        \$schema = str_replace('%TABLE_PREFIX%', \$prefix, \$schema);
        # Split by semicolons - and cleanup
        if(!(\$statements = array_filter(array_map('trim',
                // Thanks, http://stackoverflow.com/a/3147901
                preg_split(\"/;(?=(?:[^']*'[^']*')*[^']*\$)/\", \$schema)))))
            return \$this->abort(__('Error parsing SQL schema'), \$debug);


        db_query('SET SESSION SQL_MODE =\"\"', false);
        foreach(\$statements as \$k=>\$sql) {
            if(db_query(\$sql, false)) continue;
            \$error = \"[\$sql] \".db_error();
            if(\$abort)
                    return \$this->abort(\$error, \$debug);
        }

        return true;
    }

    function getVersion() {
        return \$this->version;
    }

    function getVersionVerbose() {
        return \$this->version_verbose;
    }

    function getPHPVersion() {
        return \$this->prereq['php'];
    }

    function getMySQLVersion() {
        return \$this->prereq['mysql'];
    }

    function check_php() {
        return (version_compare(PHP_VERSION, \$this->getPHPVersion())>=0);
    }

    function check_mysql() {
        return (extension_loaded('mysqli'));
    }

    function check_mysql_version() {
        return (version_compare(db_version(), \$this->getMySQLVersion())>=0);
    }

    function check_prereq() {
        return (\$this->check_php() && \$this->check_mysql());
    }

    /*
        @error is a mixed var.
    */
    function abort(\$error, \$debug=false) {

        if(\$debug) echo \$error;
        \$this->onError(\$error);

        return false; // Always false... It's an abort.
    }

    function setError(\$error) {

        if(\$error && is_array(\$error))
            \$this->errors = array_merge(\$this->errors, \$error);
        elseif(\$error)
            \$this->errors[] = \$error;
    }

    function getErrors(){
        return \$this->errors;
    }

    function onError(\$error) {
       return \$this->setError(\$error);
    }
}
?>
";
        
        $__internal_6f2d8f79ce1af48f93c24930ead7daf6d8b4f0ea91cf67e3d835eed72e19e511->leave($__internal_6f2d8f79ce1af48f93c24930ead7daf6d8b4f0ea91cf67e3d835eed72e19e511_prof);

    }

    public function getTemplateName()
    {
        return "support/include/class.setup.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     class.setup.php*/
/* */
/*     osTicket setup wizard.*/
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
/* Class SetupWizard {*/
/* */
/*     //Mimimum requirements*/
/*     var $prereq = array('php'   => '5.3',*/
/*                         'mysql' => '5.0');*/
/* */
/*     //Version info - same as the latest version.*/
/* */
/*     var $version =THIS_VERSION;*/
/*     var $version_verbose = THIS_VERSION;*/
/* */
/*     //Errors*/
/*     var $errors=array();*/
/* */
/*     function SetupWizard(){*/
/*         $this->errors=array();*/
/*         $this->version_verbose = sprintf(__('osTicket %s' /* <%s> is for the version *//* ),*/
/*             THIS_VERSION);*/
/* */
/*     }*/
/* */
/*     function load_sql_file($file, $prefix, $abort=true, $debug=false) {*/
/* */
/*         if(!file_exists($file) || !($schema=file_get_contents($file)))*/
/*             return $this->abort(sprintf(__('Error accessing SQL file %s'),basename($file)), $debug);*/
/* */
/*         return $this->load_sql($schema, $prefix, $abort, $debug);*/
/*     }*/
/* */
/*     /**/
/*         load SQL schema - assumes MySQL && existing connection*/
/*         *//* */
/*     function load_sql($schema, $prefix, $abort=true, $debug=false) {*/
/*         # Strip comments and remarks*/
/*         $schema=preg_replace('%^\s*(#|--).*$%m', '', $schema);*/
/*         # Replace table prefix*/
/*         $schema = str_replace('%TABLE_PREFIX%', $prefix, $schema);*/
/*         # Split by semicolons - and cleanup*/
/*         if(!($statements = array_filter(array_map('trim',*/
/*                 // Thanks, http://stackoverflow.com/a/3147901*/
/*                 preg_split("/;(?=(?:[^']*'[^']*')*[^']*$)/", $schema)))))*/
/*             return $this->abort(__('Error parsing SQL schema'), $debug);*/
/* */
/* */
/*         db_query('SET SESSION SQL_MODE =""', false);*/
/*         foreach($statements as $k=>$sql) {*/
/*             if(db_query($sql, false)) continue;*/
/*             $error = "[$sql] ".db_error();*/
/*             if($abort)*/
/*                     return $this->abort($error, $debug);*/
/*         }*/
/* */
/*         return true;*/
/*     }*/
/* */
/*     function getVersion() {*/
/*         return $this->version;*/
/*     }*/
/* */
/*     function getVersionVerbose() {*/
/*         return $this->version_verbose;*/
/*     }*/
/* */
/*     function getPHPVersion() {*/
/*         return $this->prereq['php'];*/
/*     }*/
/* */
/*     function getMySQLVersion() {*/
/*         return $this->prereq['mysql'];*/
/*     }*/
/* */
/*     function check_php() {*/
/*         return (version_compare(PHP_VERSION, $this->getPHPVersion())>=0);*/
/*     }*/
/* */
/*     function check_mysql() {*/
/*         return (extension_loaded('mysqli'));*/
/*     }*/
/* */
/*     function check_mysql_version() {*/
/*         return (version_compare(db_version(), $this->getMySQLVersion())>=0);*/
/*     }*/
/* */
/*     function check_prereq() {*/
/*         return ($this->check_php() && $this->check_mysql());*/
/*     }*/
/* */
/*     /**/
/*         @error is a mixed var.*/
/*     *//* */
/*     function abort($error, $debug=false) {*/
/* */
/*         if($debug) echo $error;*/
/*         $this->onError($error);*/
/* */
/*         return false; // Always false... It's an abort.*/
/*     }*/
/* */
/*     function setError($error) {*/
/* */
/*         if($error && is_array($error))*/
/*             $this->errors = array_merge($this->errors, $error);*/
/*         elseif($error)*/
/*             $this->errors[] = $error;*/
/*     }*/
/* */
/*     function getErrors(){*/
/*         return $this->errors;*/
/*     }*/
/* */
/*     function onError($error) {*/
/*        return $this->setError($error);*/
/*     }*/
/* }*/
/* ?>*/
/* */
