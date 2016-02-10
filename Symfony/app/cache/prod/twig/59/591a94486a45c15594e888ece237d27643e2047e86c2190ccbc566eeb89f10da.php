<?php

/* support/web.config */
class __TwigTemplate_d2bcc27fdd865322db0228d85800bf71720b1fff052d8a2071e4562f057f942b extends Twig_Template
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
}
/* <?xml version="1.0" encoding="UTF-8"?>*/
/* <configuration>*/
/* */
/*     <system.webServer>*/
/*         <directoryBrowse enabled="false" />*/
/*         <rewrite>*/
/*             <rules>*/
/*                 <rule name="HTTP api" stopProcessing="true">*/
/*                     <match url="^(.*//* )?api/(.*)$" ignoreCase="true"/>*/
/*                     <conditions>*/
/*                         <add input="{REQUEST_FILENAME}" matchType="IsFile"*/
/*                             ignoreCase="false" negate="true" />*/
/*                         <add input="{REQUEST_FILENAME}" matchType="IsDirectory"*/
/*                             ignoreCase="false" negate="true" />*/
/*                     </conditions>*/
/*                     <action type="Rewrite" url="{R:1}api/http.php/{R:2}"/>*/
/*                 </rule>*/
/*                 <rule name="Site pages" stopProcessing="true">*/
/*                     <match url="^(.*//* )?pages/(.*)$" ignoreCase="true"/>*/
/*                     <conditions>*/
/*                         <add input="{REQUEST_FILENAME}" matchType="IsFile"*/
/*                             ignoreCase="false" negate="true" />*/
/*                         <add input="{REQUEST_FILENAME}" matchType="IsDirectory"*/
/*                             ignoreCase="false" negate="true" />*/
/*                     </conditions>*/
/*                     <action type="Rewrite" url="{R:1}pages/index.php/{R:2}"/>*/
/*                 </rule>*/
/*                 <rule name="Staff applications" stopProcessing="true">*/
/*                     <match url="^(.*//* )?scp/apps/(.*)$" ignoreCase="true"/>*/
/*                     <conditions>*/
/*                         <add input="{REQUEST_FILENAME}" matchType="IsFile"*/
/*                             ignoreCase="false" negate="true" />*/
/*                         <add input="{REQUEST_FILENAME}" matchType="IsDirectory"*/
/*                             ignoreCase="false" negate="true" />*/
/*                     </conditions>*/
/*                     <action type="Rewrite" url="{R:1}scp/apps/dispatcher.php/{R:2}"/>*/
/*                 </rule>*/
/*             </rules>*/
/*         </rewrite>*/
/*         <defaultDocument>*/
/*             <files>*/
/*                 <remove value="index.php" />*/
/*                 <add value="index.php" />*/
/*             </files>*/
/*         </defaultDocument>*/
/*     </system.webServer>*/
/* */
/* </configuration>*/
/* */
