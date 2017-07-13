<?php

/* support/web.config */
class __TwigTemplate_b3508142eeebc891072036c910268c713845c4af0f1f179ad590e2e645d870ee extends Twig_Template
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
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<configuration>

    <system.webServer>
        <directoryBrowse enabled=\"false\" />
        <rewrite>
            <rules>
                <rule name=\"HTTP api\" stopProcessing=\"true\">
                    <match url=\"^(.*/)?api/(.*)\$\" ignoreCase=\"true\"/>
                    <conditions>
                        <add input=\"{REQUEST_FILENAME}\" matchType=\"IsFile\"
                            ignoreCase=\"false\" negate=\"true\" />
                        <add input=\"{REQUEST_FILENAME}\" matchType=\"IsDirectory\"
                            ignoreCase=\"false\" negate=\"true\" />
                    </conditions>
                    <action type=\"Rewrite\" url=\"{R:1}api/http.php/{R:2}\"/>
                </rule>
                <rule name=\"Site pages\" stopProcessing=\"true\">
                    <match url=\"^(.*/)?pages/(.*)\$\" ignoreCase=\"true\"/>
                    <conditions>
                        <add input=\"{REQUEST_FILENAME}\" matchType=\"IsFile\"
                            ignoreCase=\"false\" negate=\"true\" />
                        <add input=\"{REQUEST_FILENAME}\" matchType=\"IsDirectory\"
                            ignoreCase=\"false\" negate=\"true\" />
                    </conditions>
                    <action type=\"Rewrite\" url=\"{R:1}pages/index.php/{R:2}\"/>
                </rule>
                <rule name=\"Staff applications\" stopProcessing=\"true\">
                    <match url=\"^(.*/)?scp/apps/(.*)\$\" ignoreCase=\"true\"/>
                    <conditions>
                        <add input=\"{REQUEST_FILENAME}\" matchType=\"IsFile\"
                            ignoreCase=\"false\" negate=\"true\" />
                        <add input=\"{REQUEST_FILENAME}\" matchType=\"IsDirectory\"
                            ignoreCase=\"false\" negate=\"true\" />
                    </conditions>
                    <action type=\"Rewrite\" url=\"{R:1}scp/apps/dispatcher.php/{R:2}\"/>
                </rule>
            </rules>
        </rewrite>
        <defaultDocument>
            <files>
                <remove value=\"index.php\" />
                <add value=\"index.php\" />
            </files>
        </defaultDocument>
    </system.webServer>

</configuration>
";
    }

    public function getTemplateName()
    {
        return "support/web.config";
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
        return new Twig_Source("", "support/web.config", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\web.config");
    }
}
