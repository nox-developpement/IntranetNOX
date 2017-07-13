<?php

/* support/include/class.setup.php */
class __TwigTemplate_ea4d8286e68dd85e87829ebe5642dbbe0607f3133efb6468fb22682de59860c4 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/class.setup.php";
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
        return new Twig_Source("", "support/include/class.setup.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\class.setup.php");
    }
}
