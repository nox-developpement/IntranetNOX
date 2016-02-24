<?php

/* support/web.config */
class __TwigTemplate_f4595025c57d890efb4c971a2683e283d3c6258c78eb4a87b53668dc6ddc5cf3 extends Twig_Template
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
        $__internal_fb994d4e236051b8f812fe7b78b3646ae5c27534643374a0d87008dfb69c6db5 = $this->env->getExtension("native_profiler");
        $__internal_fb994d4e236051b8f812fe7b78b3646ae5c27534643374a0d87008dfb69c6db5->enter($__internal_fb994d4e236051b8f812fe7b78b3646ae5c27534643374a0d87008dfb69c6db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/web.config"));

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
        
        $__internal_fb994d4e236051b8f812fe7b78b3646ae5c27534643374a0d87008dfb69c6db5->leave($__internal_fb994d4e236051b8f812fe7b78b3646ae5c27534643374a0d87008dfb69c6db5_prof);

    }

    public function getTemplateName()
    {
        return "support/web.config";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
